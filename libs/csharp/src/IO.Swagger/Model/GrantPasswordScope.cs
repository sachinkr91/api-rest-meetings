/* 
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;

namespace IO.Swagger.Model
{
    /// <summary>
    /// GrantPasswordScope
    /// </summary>
    [DataContract]
    public partial class GrantPasswordScope :  IEquatable<GrantPasswordScope>
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantPasswordScope" /> class.
        /// </summary>
        /// <param name="User">The ID of your user..</param>
        /// <param name="PartitionName">The name of the partition you are on..</param>
        /// <param name="Partition">Partition.</param>
        public GrantPasswordScope(int? User = null, string PartitionName = null, Partition Partition = null)
        {
            this.User = User;
            this.PartitionName = PartitionName;
            this.Partition = Partition;
        }
        
        /// <summary>
        /// The ID of your user.
        /// </summary>
        /// <value>The ID of your user.</value>
        [DataMember(Name="user", EmitDefaultValue=false)]
        public int? User { get; set; }
        /// <summary>
        /// The name of the partition you are on.
        /// </summary>
        /// <value>The name of the partition you are on.</value>
        [DataMember(Name="partitionName", EmitDefaultValue=false)]
        public string PartitionName { get; set; }
        /// <summary>
        /// Gets or Sets Partition
        /// </summary>
        [DataMember(Name="partition", EmitDefaultValue=false)]
        public Partition Partition { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class GrantPasswordScope {\n");
            sb.Append("  User: ").Append(User).Append("\n");
            sb.Append("  PartitionName: ").Append(PartitionName).Append("\n");
            sb.Append("  Partition: ").Append(Partition).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="obj">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object obj)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            return this.Equals(obj as GrantPasswordScope);
        }

        /// <summary>
        /// Returns true if GrantPasswordScope instances are equal
        /// </summary>
        /// <param name="other">Instance of GrantPasswordScope to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(GrantPasswordScope other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.User == other.User ||
                    this.User != null &&
                    this.User.Equals(other.User)
                ) && 
                (
                    this.PartitionName == other.PartitionName ||
                    this.PartitionName != null &&
                    this.PartitionName.Equals(other.PartitionName)
                ) && 
                (
                    this.Partition == other.Partition ||
                    this.Partition != null &&
                    this.Partition.Equals(other.Partition)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            // credit: http://stackoverflow.com/a/263416/677735
            unchecked // Overflow is fine, just wrap
            {
                int hash = 41;
                // Suitable nullity checks etc, of course :)
                if (this.User != null)
                    hash = hash * 59 + this.User.GetHashCode();
                if (this.PartitionName != null)
                    hash = hash * 59 + this.PartitionName.GetHashCode();
                if (this.Partition != null)
                    hash = hash * 59 + this.Partition.GetHashCode();
                return hash;
            }
        }
    }

}
