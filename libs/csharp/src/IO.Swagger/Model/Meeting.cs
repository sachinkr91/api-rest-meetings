/* 
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authenticate button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
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
    /// Meeting
    /// </summary>
    [DataContract]
    public partial class Meeting :  IEquatable<Meeting>
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="Meeting" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected Meeting() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="Meeting" /> class.
        /// </summary>
        /// <param name="Title">Title (required) (default to &quot;My Test Meeting&quot;).</param>
        /// <param name="Description">Description.</param>
        /// <param name="Start">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds (required).</param>
        /// <param name="End">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds (required).</param>
        /// <param name="Timezone">Timezone (default to &quot;America/New_York&quot;).</param>
        /// <param name="EndPointVersion">EndPointVersion (required) (default to &quot;2.10&quot;).</param>
        /// <param name="EndPointType">EndPointType (required) (default to &quot;WEB_APP&quot;).</param>
        /// <param name="AdvancedMeetingOptions">AdvancedMeetingOptions.</param>
        public Meeting(string Title = null, string Description = null, long? Start = null, long? End = null, string Timezone = null, string EndPointVersion = null, string EndPointType = null, MeetingAdvancedMeetingOptions AdvancedMeetingOptions = null)
        {
            // to ensure "Title" is required (not null)
            if (Title == null)
            {
                throw new InvalidDataException("Title is a required property for Meeting and cannot be null");
            }
            else
            {
                this.Title = Title;
            }
            // to ensure "Start" is required (not null)
            if (Start == null)
            {
                throw new InvalidDataException("Start is a required property for Meeting and cannot be null");
            }
            else
            {
                this.Start = Start;
            }
            // to ensure "End" is required (not null)
            if (End == null)
            {
                throw new InvalidDataException("End is a required property for Meeting and cannot be null");
            }
            else
            {
                this.End = End;
            }
            // to ensure "EndPointVersion" is required (not null)
            if (EndPointVersion == null)
            {
                throw new InvalidDataException("EndPointVersion is a required property for Meeting and cannot be null");
            }
            else
            {
                this.EndPointVersion = EndPointVersion;
            }
            // to ensure "EndPointType" is required (not null)
            if (EndPointType == null)
            {
                throw new InvalidDataException("EndPointType is a required property for Meeting and cannot be null");
            }
            else
            {
                this.EndPointType = EndPointType;
            }
            this.Description = Description;
            // use default value if no "Timezone" provided
            if (Timezone == null)
            {
                this.Timezone = "America/New_York";
            }
            else
            {
                this.Timezone = Timezone;
            }
            this.AdvancedMeetingOptions = AdvancedMeetingOptions;
        }
        
        /// <summary>
        /// Unique identifier for meeting.
        /// </summary>
        /// <value>Unique identifier for meeting.</value>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; private set; }
        /// <summary>
        /// Gets or Sets Title
        /// </summary>
        [DataMember(Name="title", EmitDefaultValue=false)]
        public string Title { get; set; }
        /// <summary>
        /// Gets or Sets Description
        /// </summary>
        [DataMember(Name="description", EmitDefaultValue=false)]
        public string Description { get; set; }
        /// <summary>
        /// A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
        /// </summary>
        /// <value>A [UNIX Timestamp](https://currentmillis.com/) in milliseconds</value>
        [DataMember(Name="start", EmitDefaultValue=false)]
        public long? Start { get; set; }
        /// <summary>
        /// A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
        /// </summary>
        /// <value>A [UNIX Timestamp](https://currentmillis.com/) in milliseconds</value>
        [DataMember(Name="end", EmitDefaultValue=false)]
        public long? End { get; set; }
        /// <summary>
        /// Gets or Sets Timezone
        /// </summary>
        [DataMember(Name="timezone", EmitDefaultValue=false)]
        public string Timezone { get; set; }
        /// <summary>
        /// Gets or Sets NumericMeetingId
        /// </summary>
        [DataMember(Name="numericMeetingId", EmitDefaultValue=false)]
        public string NumericMeetingId { get; private set; }
        /// <summary>
        /// Gets or Sets AttendeePasscode
        /// </summary>
        [DataMember(Name="attendeePasscode", EmitDefaultValue=false)]
        public string AttendeePasscode { get; private set; }
        /// <summary>
        /// Gets or Sets EndPointVersion
        /// </summary>
        [DataMember(Name="endPointVersion", EmitDefaultValue=false)]
        public string EndPointVersion { get; set; }
        /// <summary>
        /// Gets or Sets EndPointType
        /// </summary>
        [DataMember(Name="endPointType", EmitDefaultValue=false)]
        public string EndPointType { get; set; }
        /// <summary>
        /// Gets or Sets AdvancedMeetingOptions
        /// </summary>
        [DataMember(Name="advancedMeetingOptions", EmitDefaultValue=false)]
        public MeetingAdvancedMeetingOptions AdvancedMeetingOptions { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Meeting {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  Title: ").Append(Title).Append("\n");
            sb.Append("  Description: ").Append(Description).Append("\n");
            sb.Append("  Start: ").Append(Start).Append("\n");
            sb.Append("  End: ").Append(End).Append("\n");
            sb.Append("  Timezone: ").Append(Timezone).Append("\n");
            sb.Append("  NumericMeetingId: ").Append(NumericMeetingId).Append("\n");
            sb.Append("  AttendeePasscode: ").Append(AttendeePasscode).Append("\n");
            sb.Append("  EndPointVersion: ").Append(EndPointVersion).Append("\n");
            sb.Append("  EndPointType: ").Append(EndPointType).Append("\n");
            sb.Append("  AdvancedMeetingOptions: ").Append(AdvancedMeetingOptions).Append("\n");
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
            return this.Equals(obj as Meeting);
        }

        /// <summary>
        /// Returns true if Meeting instances are equal
        /// </summary>
        /// <param name="other">Instance of Meeting to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(Meeting other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.Id == other.Id ||
                    this.Id != null &&
                    this.Id.Equals(other.Id)
                ) && 
                (
                    this.Title == other.Title ||
                    this.Title != null &&
                    this.Title.Equals(other.Title)
                ) && 
                (
                    this.Description == other.Description ||
                    this.Description != null &&
                    this.Description.Equals(other.Description)
                ) && 
                (
                    this.Start == other.Start ||
                    this.Start != null &&
                    this.Start.Equals(other.Start)
                ) && 
                (
                    this.End == other.End ||
                    this.End != null &&
                    this.End.Equals(other.End)
                ) && 
                (
                    this.Timezone == other.Timezone ||
                    this.Timezone != null &&
                    this.Timezone.Equals(other.Timezone)
                ) && 
                (
                    this.NumericMeetingId == other.NumericMeetingId ||
                    this.NumericMeetingId != null &&
                    this.NumericMeetingId.Equals(other.NumericMeetingId)
                ) && 
                (
                    this.AttendeePasscode == other.AttendeePasscode ||
                    this.AttendeePasscode != null &&
                    this.AttendeePasscode.Equals(other.AttendeePasscode)
                ) && 
                (
                    this.EndPointVersion == other.EndPointVersion ||
                    this.EndPointVersion != null &&
                    this.EndPointVersion.Equals(other.EndPointVersion)
                ) && 
                (
                    this.EndPointType == other.EndPointType ||
                    this.EndPointType != null &&
                    this.EndPointType.Equals(other.EndPointType)
                ) && 
                (
                    this.AdvancedMeetingOptions == other.AdvancedMeetingOptions ||
                    this.AdvancedMeetingOptions != null &&
                    this.AdvancedMeetingOptions.Equals(other.AdvancedMeetingOptions)
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
                if (this.Id != null)
                    hash = hash * 59 + this.Id.GetHashCode();
                if (this.Title != null)
                    hash = hash * 59 + this.Title.GetHashCode();
                if (this.Description != null)
                    hash = hash * 59 + this.Description.GetHashCode();
                if (this.Start != null)
                    hash = hash * 59 + this.Start.GetHashCode();
                if (this.End != null)
                    hash = hash * 59 + this.End.GetHashCode();
                if (this.Timezone != null)
                    hash = hash * 59 + this.Timezone.GetHashCode();
                if (this.NumericMeetingId != null)
                    hash = hash * 59 + this.NumericMeetingId.GetHashCode();
                if (this.AttendeePasscode != null)
                    hash = hash * 59 + this.AttendeePasscode.GetHashCode();
                if (this.EndPointVersion != null)
                    hash = hash * 59 + this.EndPointVersion.GetHashCode();
                if (this.EndPointType != null)
                    hash = hash * 59 + this.EndPointType.GetHashCode();
                if (this.AdvancedMeetingOptions != null)
                    hash = hash * 59 + this.AdvancedMeetingOptions.GetHashCode();
                return hash;
            }
        }
    }

}
