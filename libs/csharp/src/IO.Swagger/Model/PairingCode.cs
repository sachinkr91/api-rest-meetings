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
    /// PairingCode
    /// </summary>
    [DataContract]
    public partial class PairingCode :  IEquatable<PairingCode>
    {
        /// <summary>
        /// Gets or Sets StatusText
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum StatusTextEnum
        {
            
            /// <summary>
            /// Enum OK for "OK"
            /// </summary>
            [EnumMember(Value = "OK")]
            OK
        }

        /// <summary>
        /// Gets or Sets StatusText
        /// </summary>
        [DataMember(Name="statusText", EmitDefaultValue=false)]
        public StatusTextEnum? StatusText { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="PairingCode" /> class.
        /// </summary>
        /// <param name="Callguid">Callguid.</param>
        /// <param name="EndpointGuid">EndpointGuid.</param>
        /// <param name="ForceTURN">ForceTURN.</param>
        /// <param name="_PairingCode">_PairingCode.</param>
        /// <param name="Status">Status.</param>
        /// <param name="StatusText">StatusText.</param>
        /// <param name="Turnservers">Turnservers.</param>
        /// <param name="Uri">Uri.</param>
        /// <param name="SeamEndpointGuid">SeamEndpointGuid.</param>
        /// <param name="ConnectionGuid">ConnectionGuid.</param>
        /// <param name="EndpointName">EndpointName.</param>
        public PairingCode(string Callguid = null, string EndpointGuid = null, bool? ForceTURN = null, string _PairingCode = null, int? Status = null, StatusTextEnum? StatusText = null, List<PairingCodeTurnservers> Turnservers = null, string Uri = null, string SeamEndpointGuid = null, string ConnectionGuid = null, string EndpointName = null)
        {
            this.Callguid = Callguid;
            this.EndpointGuid = EndpointGuid;
            this.ForceTURN = ForceTURN;
            this._PairingCode = _PairingCode;
            this.Status = Status;
            this.StatusText = StatusText;
            this.Turnservers = Turnservers;
            this.Uri = Uri;
            this.SeamEndpointGuid = SeamEndpointGuid;
            this.ConnectionGuid = ConnectionGuid;
            this.EndpointName = EndpointName;
        }
        
        /// <summary>
        /// Gets or Sets Callguid
        /// </summary>
        [DataMember(Name="callguid", EmitDefaultValue=false)]
        public string Callguid { get; set; }
        /// <summary>
        /// Gets or Sets EndpointGuid
        /// </summary>
        [DataMember(Name="endpointGuid", EmitDefaultValue=false)]
        public string EndpointGuid { get; set; }
        /// <summary>
        /// Gets or Sets ForceTURN
        /// </summary>
        [DataMember(Name="forceTURN", EmitDefaultValue=false)]
        public bool? ForceTURN { get; set; }
        /// <summary>
        /// Gets or Sets _PairingCode
        /// </summary>
        [DataMember(Name="pairingCode", EmitDefaultValue=false)]
        public string _PairingCode { get; set; }
        /// <summary>
        /// Gets or Sets Status
        /// </summary>
        [DataMember(Name="status", EmitDefaultValue=false)]
        public int? Status { get; set; }
        /// <summary>
        /// Gets or Sets Turnservers
        /// </summary>
        [DataMember(Name="turnservers", EmitDefaultValue=false)]
        public List<PairingCodeTurnservers> Turnservers { get; set; }
        /// <summary>
        /// Gets or Sets Uri
        /// </summary>
        [DataMember(Name="uri", EmitDefaultValue=false)]
        public string Uri { get; set; }
        /// <summary>
        /// Gets or Sets SeamEndpointGuid
        /// </summary>
        [DataMember(Name="seamEndpointGuid", EmitDefaultValue=false)]
        public string SeamEndpointGuid { get; set; }
        /// <summary>
        /// Gets or Sets ConnectionGuid
        /// </summary>
        [DataMember(Name="connectionGuid", EmitDefaultValue=false)]
        public string ConnectionGuid { get; set; }
        /// <summary>
        /// Gets or Sets EndpointName
        /// </summary>
        [DataMember(Name="endpointName", EmitDefaultValue=false)]
        public string EndpointName { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class PairingCode {\n");
            sb.Append("  Callguid: ").Append(Callguid).Append("\n");
            sb.Append("  EndpointGuid: ").Append(EndpointGuid).Append("\n");
            sb.Append("  ForceTURN: ").Append(ForceTURN).Append("\n");
            sb.Append("  _PairingCode: ").Append(_PairingCode).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  StatusText: ").Append(StatusText).Append("\n");
            sb.Append("  Turnservers: ").Append(Turnservers).Append("\n");
            sb.Append("  Uri: ").Append(Uri).Append("\n");
            sb.Append("  SeamEndpointGuid: ").Append(SeamEndpointGuid).Append("\n");
            sb.Append("  ConnectionGuid: ").Append(ConnectionGuid).Append("\n");
            sb.Append("  EndpointName: ").Append(EndpointName).Append("\n");
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
            return this.Equals(obj as PairingCode);
        }

        /// <summary>
        /// Returns true if PairingCode instances are equal
        /// </summary>
        /// <param name="other">Instance of PairingCode to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(PairingCode other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.Callguid == other.Callguid ||
                    this.Callguid != null &&
                    this.Callguid.Equals(other.Callguid)
                ) && 
                (
                    this.EndpointGuid == other.EndpointGuid ||
                    this.EndpointGuid != null &&
                    this.EndpointGuid.Equals(other.EndpointGuid)
                ) && 
                (
                    this.ForceTURN == other.ForceTURN ||
                    this.ForceTURN != null &&
                    this.ForceTURN.Equals(other.ForceTURN)
                ) && 
                (
                    this._PairingCode == other._PairingCode ||
                    this._PairingCode != null &&
                    this._PairingCode.Equals(other._PairingCode)
                ) && 
                (
                    this.Status == other.Status ||
                    this.Status != null &&
                    this.Status.Equals(other.Status)
                ) && 
                (
                    this.StatusText == other.StatusText ||
                    this.StatusText != null &&
                    this.StatusText.Equals(other.StatusText)
                ) && 
                (
                    this.Turnservers == other.Turnservers ||
                    this.Turnservers != null &&
                    this.Turnservers.SequenceEqual(other.Turnservers)
                ) && 
                (
                    this.Uri == other.Uri ||
                    this.Uri != null &&
                    this.Uri.Equals(other.Uri)
                ) && 
                (
                    this.SeamEndpointGuid == other.SeamEndpointGuid ||
                    this.SeamEndpointGuid != null &&
                    this.SeamEndpointGuid.Equals(other.SeamEndpointGuid)
                ) && 
                (
                    this.ConnectionGuid == other.ConnectionGuid ||
                    this.ConnectionGuid != null &&
                    this.ConnectionGuid.Equals(other.ConnectionGuid)
                ) && 
                (
                    this.EndpointName == other.EndpointName ||
                    this.EndpointName != null &&
                    this.EndpointName.Equals(other.EndpointName)
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
                if (this.Callguid != null)
                    hash = hash * 59 + this.Callguid.GetHashCode();
                if (this.EndpointGuid != null)
                    hash = hash * 59 + this.EndpointGuid.GetHashCode();
                if (this.ForceTURN != null)
                    hash = hash * 59 + this.ForceTURN.GetHashCode();
                if (this._PairingCode != null)
                    hash = hash * 59 + this._PairingCode.GetHashCode();
                if (this.Status != null)
                    hash = hash * 59 + this.Status.GetHashCode();
                if (this.StatusText != null)
                    hash = hash * 59 + this.StatusText.GetHashCode();
                if (this.Turnservers != null)
                    hash = hash * 59 + this.Turnservers.GetHashCode();
                if (this.Uri != null)
                    hash = hash * 59 + this.Uri.GetHashCode();
                if (this.SeamEndpointGuid != null)
                    hash = hash * 59 + this.SeamEndpointGuid.GetHashCode();
                if (this.ConnectionGuid != null)
                    hash = hash * 59 + this.ConnectionGuid.GetHashCode();
                if (this.EndpointName != null)
                    hash = hash * 59 + this.EndpointName.GetHashCode();
                return hash;
            }
        }
    }

}
