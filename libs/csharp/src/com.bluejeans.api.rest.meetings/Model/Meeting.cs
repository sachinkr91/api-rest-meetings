/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407102018
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
    /// 2/5/2018 - - JSON object containing the  fields describing a BlueJeans meeting. Includes recurring meeting fields.
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
        /// <param name="Uuid">Uuid.</param>
        /// <param name="Title">Title (required) (default to &quot;My Test Meeting&quot;).</param>
        /// <param name="Description">Description.</param>
        /// <param name="Start">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds (required).</param>
        /// <param name="End">A [UNIX Timestamp](https://currentmillis.com/) in milliseconds (required).</param>
        /// <param name="Timezone">Timezone (default to &quot;America/New_York&quot;).</param>
        /// <param name="AdvancedMeetingOptions">AdvancedMeetingOptions.</param>
        /// <param name="NotificationUrl">this property is not used in the BlueJeans Meetings product.</param>
        /// <param name="NotificationData">this property is not used in the BlueJeans Meetings product.</param>
        /// <param name="Moderator">Moderator.</param>
        /// <param name="AddAttendeePasscode">Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting..</param>
        /// <param name="Delete">Delete.</param>
        /// <param name="Allow720p">Allow720p.</param>
        /// <param name="Status">Status.</param>
        /// <param name="Locked">Locked.</param>
        /// <param name="SeqeuenceNumber">SeqeuenceNumber.</param>
        /// <param name="IcsUid">IcsUid.</param>
        /// <param name="EndPointType">EndPointType (required) (default to &quot;WEB_APP&quot;).</param>
        /// <param name="EndPointVersion">EndPointVersion (required) (default to &quot;2.10&quot;).</param>
        /// <param name="Attendees">Attendees.</param>
        /// <param name="IsLargeMeeting">If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins..</param>
        /// <param name="Created">This is the epoch-based time (in milliseconds) when the meeting was initially created..</param>
        /// <param name="LastModified">This is the epoch-based time (in milliseconds) when the meeting was last changed..</param>
        /// <param name="IsExpired">IsExpired.</param>
        /// <param name="ParentMeetingId">This field contains the Meeting Id of the first meeting in a recurrence chain of meetings..</param>
        /// <param name="ParentMeetingUUID">ParentMeetingUUID.</param>
        /// <param name="NextOccurrence">NextOccurrence.</param>
        /// <param name="TimelessMeeting">TimelessMeeting.</param>
        /// <param name="EndlessMeeting">EndlessMeeting.</param>
        /// <param name="RecurrencePattern">RecurrencePattern.</param>
        /// <param name="First">Starting and ending times of the first meeting in a chain of recurring meetings..</param>
        /// <param name="Last">Starting and ending times of the last meeting in a chain of recurring meetings..</param>
        /// <param name="Next">Starting and ending times of the next meeting in a chain of recurring meetings..</param>
        /// <param name="NextStart">NextStart.</param>
        /// <param name="NextEnd">NextEnd.</param>
        /// <param name="IsPersonalMeeting">Use the scheduler&#39;s personal meeting room and Id for this meeting. (default to false).</param>
        /// <param name="InviteeJoinOption">InviteeJoinOption.</param>
        public Meeting(string Uuid = default(string), string Title = "My Test Meeting", string Description = default(string), int? Start = default(int?), int? End = default(int?), string Timezone = "America/New_York", MeetingAdvancedMeetingOptions AdvancedMeetingOptions = default(MeetingAdvancedMeetingOptions), string NotificationUrl = default(string), string NotificationData = default(string), MeetingModerator Moderator = default(MeetingModerator), bool? AddAttendeePasscode = default(bool?), bool? Delete = default(bool?), bool? Allow720p = default(bool?), string Status = default(string), bool? Locked = default(bool?), int? SeqeuenceNumber = default(int?), string IcsUid = default(string), string EndPointType = "WEB_APP", string EndPointVersion = "2.10", List<Attendee> Attendees = default(List<Attendee>), bool? IsLargeMeeting = default(bool?), int? Created = default(int?), int? LastModified = default(int?), bool? IsExpired = default(bool?), int? ParentMeetingId = default(int?), string ParentMeetingUUID = default(string), string NextOccurrence = default(string), bool? TimelessMeeting = default(bool?), bool? EndlessMeeting = default(bool?), MeetingRecurrencePattern RecurrencePattern = default(MeetingRecurrencePattern), StartEnd First = default(StartEnd), StartEnd Last = default(StartEnd), StartEnd Next = default(StartEnd), int? NextStart = default(int?), int? NextEnd = default(int?), bool? IsPersonalMeeting = false, int? InviteeJoinOption = default(int?))
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
            // to ensure "EndPointType" is required (not null)
            if (EndPointType == null)
            {
                throw new InvalidDataException("EndPointType is a required property for Meeting and cannot be null");
            }
            else
            {
                this.EndPointType = EndPointType;
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
            this.Uuid = Uuid;
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
            this.NotificationUrl = NotificationUrl;
            this.NotificationData = NotificationData;
            this.Moderator = Moderator;
            this.AddAttendeePasscode = AddAttendeePasscode;
            this.Delete = Delete;
            this.Allow720p = Allow720p;
            this.Status = Status;
            this.Locked = Locked;
            this.SeqeuenceNumber = SeqeuenceNumber;
            this.IcsUid = IcsUid;
            this.Attendees = Attendees;
            this.IsLargeMeeting = IsLargeMeeting;
            this.Created = Created;
            this.LastModified = LastModified;
            this.IsExpired = IsExpired;
            this.ParentMeetingId = ParentMeetingId;
            this.ParentMeetingUUID = ParentMeetingUUID;
            this.NextOccurrence = NextOccurrence;
            this.TimelessMeeting = TimelessMeeting;
            this.EndlessMeeting = EndlessMeeting;
            this.RecurrencePattern = RecurrencePattern;
            this.First = First;
            this.Last = Last;
            this.Next = Next;
            this.NextStart = NextStart;
            this.NextEnd = NextEnd;
            // use default value if no "IsPersonalMeeting" provided
            if (IsPersonalMeeting == null)
            {
                this.IsPersonalMeeting = false;
            }
            else
            {
                this.IsPersonalMeeting = IsPersonalMeeting;
            }
            this.InviteeJoinOption = InviteeJoinOption;
        }
        
        /// <summary>
        /// Unique identifier for meeting.
        /// </summary>
        /// <value>Unique identifier for meeting.</value>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; private set; }

        /// <summary>
        /// Gets or Sets Uuid
        /// </summary>
        [DataMember(Name="uuid", EmitDefaultValue=false)]
        public string Uuid { get; set; }

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
        public int? Start { get; set; }

        /// <summary>
        /// A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
        /// </summary>
        /// <value>A [UNIX Timestamp](https://currentmillis.com/) in milliseconds</value>
        [DataMember(Name="end", EmitDefaultValue=false)]
        public int? End { get; set; }

        /// <summary>
        /// Gets or Sets Timezone
        /// </summary>
        [DataMember(Name="timezone", EmitDefaultValue=false)]
        public string Timezone { get; set; }

        /// <summary>
        /// Gets or Sets AdvancedMeetingOptions
        /// </summary>
        [DataMember(Name="advancedMeetingOptions", EmitDefaultValue=false)]
        public MeetingAdvancedMeetingOptions AdvancedMeetingOptions { get; set; }

        /// <summary>
        /// this property is not used in the BlueJeans Meetings product
        /// </summary>
        /// <value>this property is not used in the BlueJeans Meetings product</value>
        [DataMember(Name="notificationUrl", EmitDefaultValue=false)]
        public string NotificationUrl { get; set; }

        /// <summary>
        /// this property is not used in the BlueJeans Meetings product
        /// </summary>
        /// <value>this property is not used in the BlueJeans Meetings product</value>
        [DataMember(Name="notificationData", EmitDefaultValue=false)]
        public string NotificationData { get; set; }

        /// <summary>
        /// Gets or Sets Moderator
        /// </summary>
        [DataMember(Name="moderator", EmitDefaultValue=false)]
        public MeetingModerator Moderator { get; set; }

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
        /// Gets or Sets Delete
        /// </summary>
        [DataMember(Name="delete", EmitDefaultValue=false)]
        public bool? Delete { get; set; }

        /// <summary>
        /// Gets or Sets Allow720p
        /// </summary>
        [DataMember(Name="allow720p", EmitDefaultValue=false)]
        public bool? Allow720p { get; set; }

        /// <summary>
        /// Gets or Sets Status
        /// </summary>
        [DataMember(Name="status", EmitDefaultValue=false)]
        public string Status { get; set; }

        /// <summary>
        /// Gets or Sets Locked
        /// </summary>
        [DataMember(Name="locked", EmitDefaultValue=false)]
        public bool? Locked { get; set; }

        /// <summary>
        /// Gets or Sets SeqeuenceNumber
        /// </summary>
        [DataMember(Name="seqeuenceNumber", EmitDefaultValue=false)]
        public int? SeqeuenceNumber { get; set; }

        /// <summary>
        /// Gets or Sets IcsUid
        /// </summary>
        [DataMember(Name="icsUid", EmitDefaultValue=false)]
        public string IcsUid { get; set; }

        /// <summary>
        /// Gets or Sets EndPointType
        /// </summary>
        [DataMember(Name="endPointType", EmitDefaultValue=false)]
        public string EndPointType { get; set; }

        /// <summary>
        /// Gets or Sets EndPointVersion
        /// </summary>
        [DataMember(Name="endPointVersion", EmitDefaultValue=false)]
        public string EndPointVersion { get; set; }

        /// <summary>
        /// Gets or Sets Attendees
        /// </summary>
        [DataMember(Name="attendees", EmitDefaultValue=false)]
        public List<Attendee> Attendees { get; set; }

        /// <summary>
        /// If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
        /// </summary>
        /// <value>If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.</value>
        [DataMember(Name="isLargeMeeting", EmitDefaultValue=false)]
        public bool? IsLargeMeeting { get; set; }

        /// <summary>
        /// This is the epoch-based time (in milliseconds) when the meeting was initially created.
        /// </summary>
        /// <value>This is the epoch-based time (in milliseconds) when the meeting was initially created.</value>
        [DataMember(Name="created", EmitDefaultValue=false)]
        public int? Created { get; set; }

        /// <summary>
        /// This is the epoch-based time (in milliseconds) when the meeting was last changed.
        /// </summary>
        /// <value>This is the epoch-based time (in milliseconds) when the meeting was last changed.</value>
        [DataMember(Name="lastModified", EmitDefaultValue=false)]
        public int? LastModified { get; set; }

        /// <summary>
        /// Gets or Sets IsExpired
        /// </summary>
        [DataMember(Name="isExpired", EmitDefaultValue=false)]
        public bool? IsExpired { get; set; }

        /// <summary>
        /// This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.
        /// </summary>
        /// <value>This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.</value>
        [DataMember(Name="parentMeetingId", EmitDefaultValue=false)]
        public int? ParentMeetingId { get; set; }

        /// <summary>
        /// Gets or Sets ParentMeetingUUID
        /// </summary>
        [DataMember(Name="parentMeetingUUID", EmitDefaultValue=false)]
        public string ParentMeetingUUID { get; set; }

        /// <summary>
        /// Gets or Sets NextOccurrence
        /// </summary>
        [DataMember(Name="nextOccurrence", EmitDefaultValue=false)]
        public string NextOccurrence { get; set; }

        /// <summary>
        /// Gets or Sets TimelessMeeting
        /// </summary>
        [DataMember(Name="timelessMeeting", EmitDefaultValue=false)]
        public bool? TimelessMeeting { get; set; }

        /// <summary>
        /// Gets or Sets EndlessMeeting
        /// </summary>
        [DataMember(Name="endlessMeeting", EmitDefaultValue=false)]
        public bool? EndlessMeeting { get; set; }

        /// <summary>
        /// Gets or Sets RecurrencePattern
        /// </summary>
        [DataMember(Name="recurrencePattern", EmitDefaultValue=false)]
        public MeetingRecurrencePattern RecurrencePattern { get; set; }

        /// <summary>
        /// Starting and ending times of the first meeting in a chain of recurring meetings.
        /// </summary>
        /// <value>Starting and ending times of the first meeting in a chain of recurring meetings.</value>
        [DataMember(Name="first", EmitDefaultValue=false)]
        public StartEnd First { get; set; }

        /// <summary>
        /// Starting and ending times of the last meeting in a chain of recurring meetings.
        /// </summary>
        /// <value>Starting and ending times of the last meeting in a chain of recurring meetings.</value>
        [DataMember(Name="last", EmitDefaultValue=false)]
        public StartEnd Last { get; set; }

        /// <summary>
        /// Starting and ending times of the next meeting in a chain of recurring meetings.
        /// </summary>
        /// <value>Starting and ending times of the next meeting in a chain of recurring meetings.</value>
        [DataMember(Name="next", EmitDefaultValue=false)]
        public StartEnd Next { get; set; }

        /// <summary>
        /// Gets or Sets NextStart
        /// </summary>
        [DataMember(Name="nextStart", EmitDefaultValue=false)]
        public int? NextStart { get; set; }

        /// <summary>
        /// Gets or Sets NextEnd
        /// </summary>
        [DataMember(Name="nextEnd", EmitDefaultValue=false)]
        public int? NextEnd { get; set; }

        /// <summary>
        /// Use the scheduler&#39;s personal meeting room and Id for this meeting.
        /// </summary>
        /// <value>Use the scheduler&#39;s personal meeting room and Id for this meeting.</value>
        [DataMember(Name="isPersonalMeeting", EmitDefaultValue=false)]
        public bool? IsPersonalMeeting { get; set; }

        /// <summary>
        /// Gets or Sets InviteeJoinOption
        /// </summary>
        [DataMember(Name="inviteeJoinOption", EmitDefaultValue=false)]
        public int? InviteeJoinOption { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Meeting {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  Uuid: ").Append(Uuid).Append("\n");
            sb.Append("  Title: ").Append(Title).Append("\n");
            sb.Append("  Description: ").Append(Description).Append("\n");
            sb.Append("  Start: ").Append(Start).Append("\n");
            sb.Append("  End: ").Append(End).Append("\n");
            sb.Append("  Timezone: ").Append(Timezone).Append("\n");
            sb.Append("  AdvancedMeetingOptions: ").Append(AdvancedMeetingOptions).Append("\n");
            sb.Append("  NotificationUrl: ").Append(NotificationUrl).Append("\n");
            sb.Append("  NotificationData: ").Append(NotificationData).Append("\n");
            sb.Append("  Moderator: ").Append(Moderator).Append("\n");
            sb.Append("  NumericMeetingId: ").Append(NumericMeetingId).Append("\n");
            sb.Append("  AttendeePasscode: ").Append(AttendeePasscode).Append("\n");
            sb.Append("  AddAttendeePasscode: ").Append(AddAttendeePasscode).Append("\n");
            sb.Append("  Delete: ").Append(Delete).Append("\n");
            sb.Append("  Allow720p: ").Append(Allow720p).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  Locked: ").Append(Locked).Append("\n");
            sb.Append("  SeqeuenceNumber: ").Append(SeqeuenceNumber).Append("\n");
            sb.Append("  IcsUid: ").Append(IcsUid).Append("\n");
            sb.Append("  EndPointType: ").Append(EndPointType).Append("\n");
            sb.Append("  EndPointVersion: ").Append(EndPointVersion).Append("\n");
            sb.Append("  Attendees: ").Append(Attendees).Append("\n");
            sb.Append("  IsLargeMeeting: ").Append(IsLargeMeeting).Append("\n");
            sb.Append("  Created: ").Append(Created).Append("\n");
            sb.Append("  LastModified: ").Append(LastModified).Append("\n");
            sb.Append("  IsExpired: ").Append(IsExpired).Append("\n");
            sb.Append("  ParentMeetingId: ").Append(ParentMeetingId).Append("\n");
            sb.Append("  ParentMeetingUUID: ").Append(ParentMeetingUUID).Append("\n");
            sb.Append("  NextOccurrence: ").Append(NextOccurrence).Append("\n");
            sb.Append("  TimelessMeeting: ").Append(TimelessMeeting).Append("\n");
            sb.Append("  EndlessMeeting: ").Append(EndlessMeeting).Append("\n");
            sb.Append("  RecurrencePattern: ").Append(RecurrencePattern).Append("\n");
            sb.Append("  First: ").Append(First).Append("\n");
            sb.Append("  Last: ").Append(Last).Append("\n");
            sb.Append("  Next: ").Append(Next).Append("\n");
            sb.Append("  NextStart: ").Append(NextStart).Append("\n");
            sb.Append("  NextEnd: ").Append(NextEnd).Append("\n");
            sb.Append("  IsPersonalMeeting: ").Append(IsPersonalMeeting).Append("\n");
            sb.Append("  InviteeJoinOption: ").Append(InviteeJoinOption).Append("\n");
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
                    this.Uuid == other.Uuid ||
                    this.Uuid != null &&
                    this.Uuid.Equals(other.Uuid)
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
                    this.AdvancedMeetingOptions == other.AdvancedMeetingOptions ||
                    this.AdvancedMeetingOptions != null &&
                    this.AdvancedMeetingOptions.Equals(other.AdvancedMeetingOptions)
                ) && 
                (
                    this.NotificationUrl == other.NotificationUrl ||
                    this.NotificationUrl != null &&
                    this.NotificationUrl.Equals(other.NotificationUrl)
                ) && 
                (
                    this.NotificationData == other.NotificationData ||
                    this.NotificationData != null &&
                    this.NotificationData.Equals(other.NotificationData)
                ) && 
                (
                    this.Moderator == other.Moderator ||
                    this.Moderator != null &&
                    this.Moderator.Equals(other.Moderator)
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
                    this.Delete == other.Delete ||
                    this.Delete != null &&
                    this.Delete.Equals(other.Delete)
                ) && 
                (
                    this.Allow720p == other.Allow720p ||
                    this.Allow720p != null &&
                    this.Allow720p.Equals(other.Allow720p)
                ) && 
                (
                    this.Status == other.Status ||
                    this.Status != null &&
                    this.Status.Equals(other.Status)
                ) && 
                (
                    this.Locked == other.Locked ||
                    this.Locked != null &&
                    this.Locked.Equals(other.Locked)
                ) && 
                (
                    this.SeqeuenceNumber == other.SeqeuenceNumber ||
                    this.SeqeuenceNumber != null &&
                    this.SeqeuenceNumber.Equals(other.SeqeuenceNumber)
                ) && 
                (
                    this.IcsUid == other.IcsUid ||
                    this.IcsUid != null &&
                    this.IcsUid.Equals(other.IcsUid)
                ) && 
                (
                    this.EndPointType == other.EndPointType ||
                    this.EndPointType != null &&
                    this.EndPointType.Equals(other.EndPointType)
                ) && 
                (
                    this.EndPointVersion == other.EndPointVersion ||
                    this.EndPointVersion != null &&
                    this.EndPointVersion.Equals(other.EndPointVersion)
                ) && 
                (
                    this.Attendees == other.Attendees ||
                    this.Attendees != null &&
                    this.Attendees.SequenceEqual(other.Attendees)
                ) && 
                (
                    this.IsLargeMeeting == other.IsLargeMeeting ||
                    this.IsLargeMeeting != null &&
                    this.IsLargeMeeting.Equals(other.IsLargeMeeting)
                ) && 
                (
                    this.Created == other.Created ||
                    this.Created != null &&
                    this.Created.Equals(other.Created)
                ) && 
                (
                    this.LastModified == other.LastModified ||
                    this.LastModified != null &&
                    this.LastModified.Equals(other.LastModified)
                ) && 
                (
                    this.IsExpired == other.IsExpired ||
                    this.IsExpired != null &&
                    this.IsExpired.Equals(other.IsExpired)
                ) && 
                (
                    this.ParentMeetingId == other.ParentMeetingId ||
                    this.ParentMeetingId != null &&
                    this.ParentMeetingId.Equals(other.ParentMeetingId)
                ) && 
                (
                    this.ParentMeetingUUID == other.ParentMeetingUUID ||
                    this.ParentMeetingUUID != null &&
                    this.ParentMeetingUUID.Equals(other.ParentMeetingUUID)
                ) && 
                (
                    this.NextOccurrence == other.NextOccurrence ||
                    this.NextOccurrence != null &&
                    this.NextOccurrence.Equals(other.NextOccurrence)
                ) && 
                (
                    this.TimelessMeeting == other.TimelessMeeting ||
                    this.TimelessMeeting != null &&
                    this.TimelessMeeting.Equals(other.TimelessMeeting)
                ) && 
                (
                    this.EndlessMeeting == other.EndlessMeeting ||
                    this.EndlessMeeting != null &&
                    this.EndlessMeeting.Equals(other.EndlessMeeting)
                ) && 
                (
                    this.RecurrencePattern == other.RecurrencePattern ||
                    this.RecurrencePattern != null &&
                    this.RecurrencePattern.Equals(other.RecurrencePattern)
                ) && 
                (
                    this.First == other.First ||
                    this.First != null &&
                    this.First.Equals(other.First)
                ) && 
                (
                    this.Last == other.Last ||
                    this.Last != null &&
                    this.Last.Equals(other.Last)
                ) && 
                (
                    this.Next == other.Next ||
                    this.Next != null &&
                    this.Next.Equals(other.Next)
                ) && 
                (
                    this.NextStart == other.NextStart ||
                    this.NextStart != null &&
                    this.NextStart.Equals(other.NextStart)
                ) && 
                (
                    this.NextEnd == other.NextEnd ||
                    this.NextEnd != null &&
                    this.NextEnd.Equals(other.NextEnd)
                ) && 
                (
                    this.IsPersonalMeeting == other.IsPersonalMeeting ||
                    this.IsPersonalMeeting != null &&
                    this.IsPersonalMeeting.Equals(other.IsPersonalMeeting)
                ) && 
                (
                    this.InviteeJoinOption == other.InviteeJoinOption ||
                    this.InviteeJoinOption != null &&
                    this.InviteeJoinOption.Equals(other.InviteeJoinOption)
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
                if (this.Uuid != null)
                    hash = hash * 59 + this.Uuid.GetHashCode();
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
                if (this.AdvancedMeetingOptions != null)
                    hash = hash * 59 + this.AdvancedMeetingOptions.GetHashCode();
                if (this.NotificationUrl != null)
                    hash = hash * 59 + this.NotificationUrl.GetHashCode();
                if (this.NotificationData != null)
                    hash = hash * 59 + this.NotificationData.GetHashCode();
                if (this.Moderator != null)
                    hash = hash * 59 + this.Moderator.GetHashCode();
                if (this.NumericMeetingId != null)
                    hash = hash * 59 + this.NumericMeetingId.GetHashCode();
                if (this.AttendeePasscode != null)
                    hash = hash * 59 + this.AttendeePasscode.GetHashCode();
                if (this.AddAttendeePasscode != null)
                    hash = hash * 59 + this.AddAttendeePasscode.GetHashCode();
                if (this.Delete != null)
                    hash = hash * 59 + this.Delete.GetHashCode();
                if (this.Allow720p != null)
                    hash = hash * 59 + this.Allow720p.GetHashCode();
                if (this.Status != null)
                    hash = hash * 59 + this.Status.GetHashCode();
                if (this.Locked != null)
                    hash = hash * 59 + this.Locked.GetHashCode();
                if (this.SeqeuenceNumber != null)
                    hash = hash * 59 + this.SeqeuenceNumber.GetHashCode();
                if (this.IcsUid != null)
                    hash = hash * 59 + this.IcsUid.GetHashCode();
                if (this.EndPointType != null)
                    hash = hash * 59 + this.EndPointType.GetHashCode();
                if (this.EndPointVersion != null)
                    hash = hash * 59 + this.EndPointVersion.GetHashCode();
                if (this.Attendees != null)
                    hash = hash * 59 + this.Attendees.GetHashCode();
                if (this.IsLargeMeeting != null)
                    hash = hash * 59 + this.IsLargeMeeting.GetHashCode();
                if (this.Created != null)
                    hash = hash * 59 + this.Created.GetHashCode();
                if (this.LastModified != null)
                    hash = hash * 59 + this.LastModified.GetHashCode();
                if (this.IsExpired != null)
                    hash = hash * 59 + this.IsExpired.GetHashCode();
                if (this.ParentMeetingId != null)
                    hash = hash * 59 + this.ParentMeetingId.GetHashCode();
                if (this.ParentMeetingUUID != null)
                    hash = hash * 59 + this.ParentMeetingUUID.GetHashCode();
                if (this.NextOccurrence != null)
                    hash = hash * 59 + this.NextOccurrence.GetHashCode();
                if (this.TimelessMeeting != null)
                    hash = hash * 59 + this.TimelessMeeting.GetHashCode();
                if (this.EndlessMeeting != null)
                    hash = hash * 59 + this.EndlessMeeting.GetHashCode();
                if (this.RecurrencePattern != null)
                    hash = hash * 59 + this.RecurrencePattern.GetHashCode();
                if (this.First != null)
                    hash = hash * 59 + this.First.GetHashCode();
                if (this.Last != null)
                    hash = hash * 59 + this.Last.GetHashCode();
                if (this.Next != null)
                    hash = hash * 59 + this.Next.GetHashCode();
                if (this.NextStart != null)
                    hash = hash * 59 + this.NextStart.GetHashCode();
                if (this.NextEnd != null)
                    hash = hash * 59 + this.NextEnd.GetHashCode();
                if (this.IsPersonalMeeting != null)
                    hash = hash * 59 + this.IsPersonalMeeting.GetHashCode();
                if (this.InviteeJoinOption != null)
                    hash = hash * 59 + this.InviteeJoinOption.GetHashCode();
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
