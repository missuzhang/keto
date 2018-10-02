package ladon

import (
	"bytes"
	"encoding/json"
	"fmt"
	"github.com/julienschmidt/httprouter"
	"github.com/ory/herodot"
	"github.com/ory/keto/rego/engine"
	"github.com/ory/keto/rego/storage"
	"github.com/stretchr/testify/assert"
	"github.com/stretchr/testify/require"
	"github.com/urfave/negroni"
	"io/ioutil"
	"net/http"
	"net/http/httptest"
	"path/filepath"
	"strings"
	"testing"
)

func base(ts *httptest.Server, f, path string) string {
	return ts.URL + fmt.Sprintf(strings.Replace(basePath, ":flavor", "%s", 1), f) + path
}

func TestAllowed(t *testing.T) {
	loc, err := filepath.Abs("./rego")
	require.NoError(t, err)

	compiler, err := engine.NewCompiler(loc)
	require.NoError(t, err)

	s := storage.NewMemoryManager()
	sh := storage.NewHandler(s, herodot.NewJSONWriter(nil))
	e := engine.NewEngine(compiler, herodot.NewJSONWriter(nil))
	le := NewEngine(s, sh, e, herodot.NewJSONWriter(nil))

	n := negroni.Classic()
	r := httprouter.New()
	le.Register(r)
	n.UseHandler(r)

	ts := httptest.NewServer(n)
	defer ts.Close()

	for _, f := range []string{"regex"} {
		t.Run(fmt.Sprintf("flavor=%s", f), func(t *testing.T) {
			t.Run(fmt.Sprint("action=create"), func(t *testing.T) {
				for _, p := range policies[f] {
					t.Run(fmt.Sprintf("policy=%s", p.ID), func(t *testing.T) {
						var b bytes.Buffer
						require.NoError(t, json.NewEncoder(&b).Encode(&p))
						res, err := ts.Client().Post(base(ts, f, "/policies"), "application/json", &b)
						require.NoError(t, err)
						assert.EqualValues(t, http.StatusOK, res.StatusCode)
						res.Body.Close()
					})
				}
				for _, r := range roles[f] {
					t.Run(fmt.Sprintf("role=%s", r.ID), func(t *testing.T) {
						var b bytes.Buffer
						require.NoError(t, json.NewEncoder(&b).Encode(&r))
						res, err := ts.Client().Post(base(ts, f, "/roles"), "application/json", &b)
						require.NoError(t, err)
						assert.EqualValues(t, http.StatusOK, res.StatusCode)
						res.Body.Close()
					})
				}
			})

			t.Run("action=authorize", func(t *testing.T) {
				for k, c := range requests[f] {
					t.Run(fmt.Sprintf("case=%d", k), func(t *testing.T) {
						var b bytes.Buffer
						require.NoError(t, json.NewEncoder(&b).Encode(&c.req))
						res, err := ts.Client().Post(base(ts, f, "/allowed"), "application/json", &b)
						require.NoError(t, err)
						defer res.Body.Close()

						assert.EqualValues(t, http.StatusOK, res.StatusCode)
						body, err := ioutil.ReadAll(res.Body)
						require.NoError(t, err)

						var r engine.Result
						require.NoError(t, json.Unmarshal(body, &r))
						assert.Equal(t, c.allowed, r.Allowed, "%s", body)
					})
				}
			})
		})
	}
}
