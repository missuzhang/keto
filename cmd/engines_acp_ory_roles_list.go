// Copyright © 2018 NAME HERE <EMAIL ADDRESS>
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

package cmd

import (
	"github.com/ory/go-convenience/urlx"
	"github.com/ory/keto/cmd/client"
	"github.com/ory/keto/engine/ladon"
	"github.com/ory/x/cmdx"

	"github.com/spf13/cobra"
)

// enginesAcpOryRolesListCmd represents the list command
var enginesAcpOryRolesListCmd = &cobra.Command{
	Use:   "list <flavor>",
	Short: "List ORY Access Control Policy Roles",
	Run: func(cmd *cobra.Command, args []string) {
		var proto ladon.Roles
		cmdx.MinArgs(cmd, args, 1)
		client.CheckLadonFlavor(args[0])
		client.Get(
			urlx.JoinURLStrings(
				client.LadonEndpointURL(cmd, args[0]),
				"roles",
			),
			&proto,
		)
	},
}

func init() {
	enginesAcpOryRolesCmd.AddCommand(enginesAcpOryRolesListCmd)
}
