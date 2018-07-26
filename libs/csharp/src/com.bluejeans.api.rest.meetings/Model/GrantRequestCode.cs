/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = com.bluejeans.api.rest.meetings.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.meetings.Model
{
    /// <summary>
    /// GrantRequestCode
    /// </summary>
    [DataContract]
    public partial class GrantRequestCode :  IEquatable<GrantRequestCode>, IValidatableObject
    {
        /// <summary>
        /// The type of access token you are requesting. Use \&quot;authorization_code\&quot;.
        /// </summary>
        /// <value>The type of access token you are requesting. Use \&quot;authorization_code\&quot;.</value>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum GrantTypeEnum
        {
            
            /// <summary>
            /// Enum Authorizationcode for value: authorization_code
            /// </summary>
            [EnumMember(Value = "authorization_code")]
            Authorizationcode = 1
        }

        /// <summary>
        /// The type of access token you are requesting. Use \&quot;authorization_code\&quot;.
        /// </summary>
        /// <value>The type of access token you are requesting. Use \&quot;authorization_code\&quot;.</value>
        [DataMember(Name="grant_type", EmitDefaultValue=false)]
        public GrantTypeEnum GrantType { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantRequestCode" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected GrantRequestCode() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantRequestCode" /> class.
        /// </summary>
        /// <param name="grantType">The type of access token you are requesting. Use \&quot;authorization_code\&quot;. (required) (default to GrantTypeEnum.Authorizationcode).</param>
        /// <param name="clientId">The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. (required).</param>
        /// <param name="clientSecret">The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. (required).</param>
        /// <param name="redirectUri">One of the registered url or sub-url of registered urls. (required).</param>
        /// <param name="code">Code obtained after /oauth2/authorize redirect. (required).</param>
        public GrantRequestCode(GrantTypeEnum grantType = GrantTypeEnum.Authorizationcode, string clientId = default(string), string clientSecret = default(string), string redirectUri = default(string), string code = default(string))
        {
            // to ensure "grantType" is required (not null)
            if (grantType == null)
            {
                throw new InvalidDataException("grantType is a required property for GrantRequestCode and cannot be null");
            }
            else
            {
                this.GrantType = grantType;
            }
            // to ensure "clientId" is required (not null)
            if (clientId == null)
            {
                throw new InvalidDataException("clientId is a required property for GrantRequestCode and cannot be null");
            }
            else
            {
                this.ClientId = clientId;
            }
            // to ensure "clientSecret" is required (not null)
            if (clientSecret == null)
            {
                throw new InvalidDataException("clientSecret is a required property for GrantRequestCode and cannot be null");
            }
            else
            {
                this.ClientSecret = clientSecret;
            }
            // to ensure "redirectUri" is required (not null)
            if (redirectUri == null)
            {
                throw new InvalidDataException("redirectUri is a required property for GrantRequestCode and cannot be null");
            }
            else
            {
                this.RedirectUri = redirectUri;
            }
            // to ensure "code" is required (not null)
            if (code == null)
            {
                throw new InvalidDataException("code is a required property for GrantRequestCode and cannot be null");
            }
            else
            {
                this.Code = code;
            }
        }
        

        /// <summary>
        /// The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.
        /// </summary>
        /// <value>The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.</value>
        [DataMember(Name="client_id", EmitDefaultValue=false)]
        public string ClientId { get; set; }

        /// <summary>
        /// The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.
        /// </summary>
        /// <value>The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.</value>
        [DataMember(Name="client_secret", EmitDefaultValue=false)]
        public string ClientSecret { get; set; }

        /// <summary>
        /// One of the registered url or sub-url of registered urls.
        /// </summary>
        /// <value>One of the registered url or sub-url of registered urls.</value>
        [DataMember(Name="redirectUri", EmitDefaultValue=false)]
        public string RedirectUri { get; set; }

        /// <summary>
        /// Code obtained after /oauth2/authorize redirect.
        /// </summary>
        /// <value>Code obtained after /oauth2/authorize redirect.</value>
        [DataMember(Name="code", EmitDefaultValue=false)]
        public string Code { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class GrantRequestCode {\n");
            sb.Append("  GrantType: ").Append(GrantType).Append("\n");
            sb.Append("  ClientId: ").Append(ClientId).Append("\n");
            sb.Append("  ClientSecret: ").Append(ClientSecret).Append("\n");
            sb.Append("  RedirectUri: ").Append(RedirectUri).Append("\n");
            sb.Append("  Code: ").Append(Code).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as GrantRequestCode);
        }

        /// <summary>
        /// Returns true if GrantRequestCode instances are equal
        /// </summary>
        /// <param name="input">Instance of GrantRequestCode to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(GrantRequestCode input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.GrantType == input.GrantType ||
                    (this.GrantType != null &&
                    this.GrantType.Equals(input.GrantType))
                ) && 
                (
                    this.ClientId == input.ClientId ||
                    (this.ClientId != null &&
                    this.ClientId.Equals(input.ClientId))
                ) && 
                (
                    this.ClientSecret == input.ClientSecret ||
                    (this.ClientSecret != null &&
                    this.ClientSecret.Equals(input.ClientSecret))
                ) && 
                (
                    this.RedirectUri == input.RedirectUri ||
                    (this.RedirectUri != null &&
                    this.RedirectUri.Equals(input.RedirectUri))
                ) && 
                (
                    this.Code == input.Code ||
                    (this.Code != null &&
                    this.Code.Equals(input.Code))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.GrantType != null)
                    hashCode = hashCode * 59 + this.GrantType.GetHashCode();
                if (this.ClientId != null)
                    hashCode = hashCode * 59 + this.ClientId.GetHashCode();
                if (this.ClientSecret != null)
                    hashCode = hashCode * 59 + this.ClientSecret.GetHashCode();
                if (this.RedirectUri != null)
                    hashCode = hashCode * 59 + this.RedirectUri.GetHashCode();
                if (this.Code != null)
                    hashCode = hashCode * 59 + this.Code.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
