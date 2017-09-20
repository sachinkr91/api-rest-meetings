/* 
 * BlueJeans onVideo REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
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
using SwaggerDateConverter = com.bluejeans.api.rest.onvideo.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.onvideo.Model
{
    /// <summary>
    /// MeetingHistorySharing
    /// </summary>
    [DataContract]
    public partial class MeetingHistorySharing :  IEquatable<MeetingHistorySharing>, IValidatableObject
    {
        /// <summary>
        /// Gets or Sets RecepientType
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum RecepientTypeEnum
        {
            
            /// <summary>
            /// Enum ENTERPRISE for "ENTERPRISE"
            /// </summary>
            [EnumMember(Value = "ENTERPRISE")]
            ENTERPRISE,
            
            /// <summary>
            /// Enum PUBLIC for "PUBLIC"
            /// </summary>
            [EnumMember(Value = "PUBLIC")]
            PUBLIC
        }

        /// <summary>
        /// Gets or Sets Status
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum StatusEnum
        {
            
            /// <summary>
            /// Enum ACTIVE for "ACTIVE"
            /// </summary>
            [EnumMember(Value = "ACTIVE")]
            ACTIVE
        }

        /// <summary>
        /// Gets or Sets RecepientType
        /// </summary>
        [DataMember(Name="recepientType", EmitDefaultValue=false)]
        public RecepientTypeEnum? RecepientType { get; set; }
        /// <summary>
        /// Gets or Sets Status
        /// </summary>
        [DataMember(Name="status", EmitDefaultValue=false)]
        public StatusEnum? Status { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingHistorySharing" /> class.
        /// </summary>
        /// <param name="Id">Id.</param>
        /// <param name="MeetingGuid">MeetingGuid.</param>
        /// <param name="OwnerId">Numeric user ID for the meeting owner..</param>
        /// <param name="SharingUrl">SharingUrl.</param>
        /// <param name="RecepientType">RecepientType.</param>
        /// <param name="Properties">Properties.</param>
        /// <param name="Status">Status.</param>
        /// <param name="Downloadable">Downloadable.</param>
        /// <param name="Passcode">Passcode.</param>
        /// <param name="Validity">Validity.</param>
        /// <param name="Created">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds.</param>
        /// <param name="Lastmodified">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds.</param>
        public MeetingHistorySharing(int? Id = default(int?), string MeetingGuid = default(string), int? OwnerId = default(int?), string SharingUrl = default(string), RecepientTypeEnum? RecepientType = default(RecepientTypeEnum?), string Properties = default(string), StatusEnum? Status = default(StatusEnum?), bool? Downloadable = default(bool?), string Passcode = default(string), string Validity = default(string), long? Created = default(long?), long? Lastmodified = default(long?))
        {
            this.Id = Id;
            this.MeetingGuid = MeetingGuid;
            this.OwnerId = OwnerId;
            this.SharingUrl = SharingUrl;
            this.RecepientType = RecepientType;
            this.Properties = Properties;
            this.Status = Status;
            this.Downloadable = Downloadable;
            this.Passcode = Passcode;
            this.Validity = Validity;
            this.Created = Created;
            this.Lastmodified = Lastmodified;
        }
        
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }

        /// <summary>
        /// Gets or Sets MeetingGuid
        /// </summary>
        [DataMember(Name="meetingGuid", EmitDefaultValue=false)]
        public string MeetingGuid { get; set; }

        /// <summary>
        /// Numeric user ID for the meeting owner.
        /// </summary>
        /// <value>Numeric user ID for the meeting owner.</value>
        [DataMember(Name="ownerId", EmitDefaultValue=false)]
        public int? OwnerId { get; set; }

        /// <summary>
        /// Gets or Sets SharingUrl
        /// </summary>
        [DataMember(Name="sharingUrl", EmitDefaultValue=false)]
        public string SharingUrl { get; set; }


        /// <summary>
        /// Gets or Sets Properties
        /// </summary>
        [DataMember(Name="properties", EmitDefaultValue=false)]
        public string Properties { get; set; }


        /// <summary>
        /// Gets or Sets Downloadable
        /// </summary>
        [DataMember(Name="downloadable", EmitDefaultValue=false)]
        public bool? Downloadable { get; set; }

        /// <summary>
        /// Gets or Sets Passcode
        /// </summary>
        [DataMember(Name="passcode", EmitDefaultValue=false)]
        public string Passcode { get; set; }

        /// <summary>
        /// Gets or Sets Validity
        /// </summary>
        [DataMember(Name="validity", EmitDefaultValue=false)]
        public string Validity { get; set; }

        /// <summary>
        /// A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
        /// </summary>
        /// <value>A [UNIX Timestamp](https://currentmillis.com/) in milliseconds</value>
        [DataMember(Name="created", EmitDefaultValue=false)]
        public long? Created { get; set; }

        /// <summary>
        /// A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
        /// </summary>
        /// <value>A [UNIX Timestamp](https://currentmillis.com/) in milliseconds</value>
        [DataMember(Name="lastmodified", EmitDefaultValue=false)]
        public long? Lastmodified { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingHistorySharing {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  MeetingGuid: ").Append(MeetingGuid).Append("\n");
            sb.Append("  OwnerId: ").Append(OwnerId).Append("\n");
            sb.Append("  SharingUrl: ").Append(SharingUrl).Append("\n");
            sb.Append("  RecepientType: ").Append(RecepientType).Append("\n");
            sb.Append("  Properties: ").Append(Properties).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  Downloadable: ").Append(Downloadable).Append("\n");
            sb.Append("  Passcode: ").Append(Passcode).Append("\n");
            sb.Append("  Validity: ").Append(Validity).Append("\n");
            sb.Append("  Created: ").Append(Created).Append("\n");
            sb.Append("  Lastmodified: ").Append(Lastmodified).Append("\n");
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
            return this.Equals(obj as MeetingHistorySharing);
        }

        /// <summary>
        /// Returns true if MeetingHistorySharing instances are equal
        /// </summary>
        /// <param name="other">Instance of MeetingHistorySharing to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingHistorySharing other)
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
                    this.MeetingGuid == other.MeetingGuid ||
                    this.MeetingGuid != null &&
                    this.MeetingGuid.Equals(other.MeetingGuid)
                ) && 
                (
                    this.OwnerId == other.OwnerId ||
                    this.OwnerId != null &&
                    this.OwnerId.Equals(other.OwnerId)
                ) && 
                (
                    this.SharingUrl == other.SharingUrl ||
                    this.SharingUrl != null &&
                    this.SharingUrl.Equals(other.SharingUrl)
                ) && 
                (
                    this.RecepientType == other.RecepientType ||
                    this.RecepientType != null &&
                    this.RecepientType.Equals(other.RecepientType)
                ) && 
                (
                    this.Properties == other.Properties ||
                    this.Properties != null &&
                    this.Properties.Equals(other.Properties)
                ) && 
                (
                    this.Status == other.Status ||
                    this.Status != null &&
                    this.Status.Equals(other.Status)
                ) && 
                (
                    this.Downloadable == other.Downloadable ||
                    this.Downloadable != null &&
                    this.Downloadable.Equals(other.Downloadable)
                ) && 
                (
                    this.Passcode == other.Passcode ||
                    this.Passcode != null &&
                    this.Passcode.Equals(other.Passcode)
                ) && 
                (
                    this.Validity == other.Validity ||
                    this.Validity != null &&
                    this.Validity.Equals(other.Validity)
                ) && 
                (
                    this.Created == other.Created ||
                    this.Created != null &&
                    this.Created.Equals(other.Created)
                ) && 
                (
                    this.Lastmodified == other.Lastmodified ||
                    this.Lastmodified != null &&
                    this.Lastmodified.Equals(other.Lastmodified)
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
                if (this.MeetingGuid != null)
                    hash = hash * 59 + this.MeetingGuid.GetHashCode();
                if (this.OwnerId != null)
                    hash = hash * 59 + this.OwnerId.GetHashCode();
                if (this.SharingUrl != null)
                    hash = hash * 59 + this.SharingUrl.GetHashCode();
                if (this.RecepientType != null)
                    hash = hash * 59 + this.RecepientType.GetHashCode();
                if (this.Properties != null)
                    hash = hash * 59 + this.Properties.GetHashCode();
                if (this.Status != null)
                    hash = hash * 59 + this.Status.GetHashCode();
                if (this.Downloadable != null)
                    hash = hash * 59 + this.Downloadable.GetHashCode();
                if (this.Passcode != null)
                    hash = hash * 59 + this.Passcode.GetHashCode();
                if (this.Validity != null)
                    hash = hash * 59 + this.Validity.GetHashCode();
                if (this.Created != null)
                    hash = hash * 59 + this.Created.GetHashCode();
                if (this.Lastmodified != null)
                    hash = hash * 59 + this.Lastmodified.GetHashCode();
                return hash;
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
