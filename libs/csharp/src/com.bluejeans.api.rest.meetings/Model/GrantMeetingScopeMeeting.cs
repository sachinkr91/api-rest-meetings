/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
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
    /// GrantMeetingScopeMeeting
    /// </summary>
    [DataContract]
    public partial class GrantMeetingScopeMeeting :  IEquatable<GrantMeetingScopeMeeting>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantMeetingScopeMeeting" /> class.
        /// </summary>
        /// <param name="Id">Id.</param>
        /// <param name="LeaderId">LeaderId.</param>
        /// <param name="MeetingNumericId">MeetingNumericId.</param>
        /// <param name="MeetingUri">MeetingUri.</param>
        /// <param name="IsModerator">IsModerator.</param>
        /// <param name="EndpointUriSet">EndpointUriSet.</param>
        /// <param name="MeetingId">MeetingId.</param>
        public GrantMeetingScopeMeeting(int? Id = default(int?), int? LeaderId = default(int?), string MeetingNumericId = default(string), string MeetingUri = default(string), bool? IsModerator = default(bool?), List<Object> EndpointUriSet = default(List<Object>), string MeetingId = default(string))
        {
            this.Id = Id;
            this.LeaderId = LeaderId;
            this.MeetingNumericId = MeetingNumericId;
            this.MeetingUri = MeetingUri;
            this.IsModerator = IsModerator;
            this.EndpointUriSet = EndpointUriSet;
            this.MeetingId = MeetingId;
        }
        
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }

        /// <summary>
        /// Gets or Sets LeaderId
        /// </summary>
        [DataMember(Name="leaderId", EmitDefaultValue=false)]
        public int? LeaderId { get; set; }

        /// <summary>
        /// Gets or Sets MeetingNumericId
        /// </summary>
        [DataMember(Name="meetingNumericId", EmitDefaultValue=false)]
        public string MeetingNumericId { get; set; }

        /// <summary>
        /// Gets or Sets MeetingUri
        /// </summary>
        [DataMember(Name="meetingUri", EmitDefaultValue=false)]
        public string MeetingUri { get; set; }

        /// <summary>
        /// Gets or Sets IsModerator
        /// </summary>
        [DataMember(Name="isModerator", EmitDefaultValue=false)]
        public bool? IsModerator { get; set; }

        /// <summary>
        /// Gets or Sets EndpointUriSet
        /// </summary>
        [DataMember(Name="endpointUriSet", EmitDefaultValue=false)]
        public List<Object> EndpointUriSet { get; set; }

        /// <summary>
        /// Gets or Sets MeetingId
        /// </summary>
        [DataMember(Name="meetingId", EmitDefaultValue=false)]
        public string MeetingId { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class GrantMeetingScopeMeeting {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  LeaderId: ").Append(LeaderId).Append("\n");
            sb.Append("  MeetingNumericId: ").Append(MeetingNumericId).Append("\n");
            sb.Append("  MeetingUri: ").Append(MeetingUri).Append("\n");
            sb.Append("  IsModerator: ").Append(IsModerator).Append("\n");
            sb.Append("  EndpointUriSet: ").Append(EndpointUriSet).Append("\n");
            sb.Append("  MeetingId: ").Append(MeetingId).Append("\n");
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
            return this.Equals(obj as GrantMeetingScopeMeeting);
        }

        /// <summary>
        /// Returns true if GrantMeetingScopeMeeting instances are equal
        /// </summary>
        /// <param name="other">Instance of GrantMeetingScopeMeeting to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(GrantMeetingScopeMeeting other)
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
                    this.LeaderId == other.LeaderId ||
                    this.LeaderId != null &&
                    this.LeaderId.Equals(other.LeaderId)
                ) && 
                (
                    this.MeetingNumericId == other.MeetingNumericId ||
                    this.MeetingNumericId != null &&
                    this.MeetingNumericId.Equals(other.MeetingNumericId)
                ) && 
                (
                    this.MeetingUri == other.MeetingUri ||
                    this.MeetingUri != null &&
                    this.MeetingUri.Equals(other.MeetingUri)
                ) && 
                (
                    this.IsModerator == other.IsModerator ||
                    this.IsModerator != null &&
                    this.IsModerator.Equals(other.IsModerator)
                ) && 
                (
                    this.EndpointUriSet == other.EndpointUriSet ||
                    this.EndpointUriSet != null &&
                    this.EndpointUriSet.SequenceEqual(other.EndpointUriSet)
                ) && 
                (
                    this.MeetingId == other.MeetingId ||
                    this.MeetingId != null &&
                    this.MeetingId.Equals(other.MeetingId)
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
                if (this.LeaderId != null)
                    hash = hash * 59 + this.LeaderId.GetHashCode();
                if (this.MeetingNumericId != null)
                    hash = hash * 59 + this.MeetingNumericId.GetHashCode();
                if (this.MeetingUri != null)
                    hash = hash * 59 + this.MeetingUri.GetHashCode();
                if (this.IsModerator != null)
                    hash = hash * 59 + this.IsModerator.GetHashCode();
                if (this.EndpointUriSet != null)
                    hash = hash * 59 + this.EndpointUriSet.GetHashCode();
                if (this.MeetingId != null)
                    hash = hash * 59 + this.MeetingId.GetHashCode();
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
