/*
 * Package main ORY Keto
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

package swagger

type SwaggerUpdatePolicyParameters struct {
	Body Policy `json:"Body,omitempty"`

	// The id of the policy. in: path
	Id string `json:"id,omitempty"`
}
