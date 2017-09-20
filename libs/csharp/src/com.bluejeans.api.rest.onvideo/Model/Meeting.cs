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
    /// Meeting
    /// </summary>
    [DataContract]
    public partial class Meeting :  IEquatable<Meeting>, IValidatableObject
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
        /// <param name="AddAttendeePasscode">Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting..</param>
        /// <param name="EndPointVersion">EndPointVersion (required) (default to &quot;2.10&quot;).</param>
        /// <param name="EndPointType">EndPointType (required) (default to &quot;WEB_APP&quot;).</param>
        /// <param name="Attendees">Attendees.</param>
        /// <param name="AdvancedMeetingOptions">AdvancedMeetingOptions.</param>
        public Meeting(string Title = "My Test Meeting", string Description = default(string), long? Start = default(long?), long? End = default(long?), string Timezone = "America/New_York", bool? AddAttendeePasscode = default(bool?), string EndPointVersion = "2.10", string EndPointType = "WEB_APP", List<Attendee> Attendees = default(List<Attendee>), MeetingAdvancedMeetingOptions AdvancedMeetingOptions = default(MeetingAdvancedMeetingOptions))
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
            this.AddAttendeePasscode = AddAttendeePasscode;
            this.Attendees = Attendees;
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
        /// The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
        /// </summary>
        /// <value>The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</value>
        [DataMember(Name="numericMeetingId", EmitDefaultValue=false)]
        public string NumericMeetingId { get; private set; }

        /// <summary>
        /// Gets or Sets AttendeePasscode
        /// </summary>
        [DataMember(Name="attendeePasscode", EmitDefaultValue=false)]
        public string AttendeePasscode { get; private set; }

        /// <summary>
        /// Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
        /// </summary>
        /// <value>Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.</value>
        [DataMember(Name="addAttendeePasscode", EmitDefaultValue=false)]
        public bool? AddAttendeePasscode { get; set; }

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
        /// Gets or Sets Attendees
        /// </summary>
        [DataMember(Name="attendees", EmitDefaultValue=false)]
        public List<Attendee> Attendees { get; set; }

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
            sb.Append("  AddAttendeePasscode: ").Append(AddAttendeePasscode).Append("\n");
            sb.Append("  EndPointVersion: ").Append(EndPointVersion).Append("\n");
            sb.Append("  EndPointType: ").Append(EndPointType).Append("\n");
            sb.Append("  Attendees: ").Append(Attendees).Append("\n");
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
                    this.AddAttendeePasscode == other.AddAttendeePasscode ||
                    this.AddAttendeePasscode != null &&
                    this.AddAttendeePasscode.Equals(other.AddAttendeePasscode)
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
                    this.Attendees == other.Attendees ||
                    this.Attendees != null &&
                    this.Attendees.SequenceEqual(other.Attendees)
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
                if (this.AddAttendeePasscode != null)
                    hash = hash * 59 + this.AddAttendeePasscode.GetHashCode();
                if (this.EndPointVersion != null)
                    hash = hash * 59 + this.EndPointVersion.GetHashCode();
                if (this.EndPointType != null)
                    hash = hash * 59 + this.EndPointType.GetHashCode();
                if (this.Attendees != null)
                    hash = hash * 59 + this.Attendees.GetHashCode();
                if (this.AdvancedMeetingOptions != null)
                    hash = hash * 59 + this.AdvancedMeetingOptions.GetHashCode();
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
