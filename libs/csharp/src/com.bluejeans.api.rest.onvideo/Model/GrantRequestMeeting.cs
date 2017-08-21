/* 
 * BlueJeans onVideo REST API
 *
 *  Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you should be able to quickly integrate **BlueJeans** video administration into your applications.   ## Getting Started Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact [BlueJeans Support](mailto:Support@BlueJeans.com) for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br /> ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. ## About onVideo Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. 
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

namespace com.bluejeans.api.rest.onvideo.Model
{
    /// <summary>
    /// GrantRequestMeeting
    /// </summary>
    [DataContract]
    public partial class GrantRequestMeeting :  IEquatable<GrantRequestMeeting>
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantRequestMeeting" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected GrantRequestMeeting() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantRequestMeeting" /> class.
        /// </summary>
        /// <param name="GrantType">The type of access token you are requesting. (required) (default to &quot;meeting_passcode&quot;).</param>
        /// <param name="MeetingNumericId">Meeting ID (required).</param>
        /// <param name="MeetingPasscode">Pin (required).</param>
        public GrantRequestMeeting(string GrantType = null, string MeetingNumericId = null, string MeetingPasscode = null)
        {
            // to ensure "GrantType" is required (not null)
            if (GrantType == null)
            {
                throw new InvalidDataException("GrantType is a required property for GrantRequestMeeting and cannot be null");
            }
            else
            {
                this.GrantType = GrantType;
            }
            // to ensure "MeetingNumericId" is required (not null)
            if (MeetingNumericId == null)
            {
                throw new InvalidDataException("MeetingNumericId is a required property for GrantRequestMeeting and cannot be null");
            }
            else
            {
                this.MeetingNumericId = MeetingNumericId;
            }
            // to ensure "MeetingPasscode" is required (not null)
            if (MeetingPasscode == null)
            {
                throw new InvalidDataException("MeetingPasscode is a required property for GrantRequestMeeting and cannot be null");
            }
            else
            {
                this.MeetingPasscode = MeetingPasscode;
            }
        }
        
        /// <summary>
        /// The type of access token you are requesting.
        /// </summary>
        /// <value>The type of access token you are requesting.</value>
        [DataMember(Name="grant_type", EmitDefaultValue=false)]
        public string GrantType { get; set; }
        /// <summary>
        /// Meeting ID
        /// </summary>
        /// <value>Meeting ID</value>
        [DataMember(Name="meetingNumericId", EmitDefaultValue=false)]
        public string MeetingNumericId { get; set; }
        /// <summary>
        /// Pin
        /// </summary>
        /// <value>Pin</value>
        [DataMember(Name="meetingPasscode", EmitDefaultValue=false)]
        public string MeetingPasscode { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class GrantRequestMeeting {\n");
            sb.Append("  GrantType: ").Append(GrantType).Append("\n");
            sb.Append("  MeetingNumericId: ").Append(MeetingNumericId).Append("\n");
            sb.Append("  MeetingPasscode: ").Append(MeetingPasscode).Append("\n");
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
            return this.Equals(obj as GrantRequestMeeting);
        }

        /// <summary>
        /// Returns true if GrantRequestMeeting instances are equal
        /// </summary>
        /// <param name="other">Instance of GrantRequestMeeting to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(GrantRequestMeeting other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.GrantType == other.GrantType ||
                    this.GrantType != null &&
                    this.GrantType.Equals(other.GrantType)
                ) && 
                (
                    this.MeetingNumericId == other.MeetingNumericId ||
                    this.MeetingNumericId != null &&
                    this.MeetingNumericId.Equals(other.MeetingNumericId)
                ) && 
                (
                    this.MeetingPasscode == other.MeetingPasscode ||
                    this.MeetingPasscode != null &&
                    this.MeetingPasscode.Equals(other.MeetingPasscode)
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
                if (this.GrantType != null)
                    hash = hash * 59 + this.GrantType.GetHashCode();
                if (this.MeetingNumericId != null)
                    hash = hash * 59 + this.MeetingNumericId.GetHashCode();
                if (this.MeetingPasscode != null)
                    hash = hash * 59 + this.MeetingPasscode.GetHashCode();
                return hash;
            }
        }
    }

}
