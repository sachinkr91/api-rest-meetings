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
    /// PersonalMeetingRoom
    /// </summary>
    [DataContract]
    public partial class PersonalMeetingRoom :  IEquatable<PersonalMeetingRoom>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="PersonalMeetingRoom" /> class.
        /// </summary>
        /// <param name="id">This is a unique number that is associated with the personal meeting room..</param>
        /// <param name="uuid">This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room..</param>
        /// <param name="title">This is the name associated with personal room..</param>
        /// <param name="description">This is a short descriptive text for the personal meeting room..</param>
        /// <param name="start">This is the epoch-based starting time (in milliseconds) of the personal meeting..</param>
        /// <param name="end">This is the epoch-based ending time (in milliseconds) of the personal meeting..</param>
        /// <param name="timezone">This is the unix timezone string describing the timezone for the meeting.</param>
        /// <param name="advancedMeetingOptions">advancedMeetingOptions.</param>
        /// <param name="notificationUrl">this property is not used in the BlueJeans Meetings product.</param>
        /// <param name="notificationData">this property is not used in the BlueJeans Meetings product.</param>
        /// <param name="moderator">moderator.</param>
        /// <param name="numericMeetingId">This is the number that a participant would enter when joining this meeting..</param>
        /// <param name="attendeePasscode">This is a passcode that must be provided by people joining the meeting..</param>
        /// <param name="addAttendeePasscode">If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting..</param>
        /// <param name="deleted">If set, indicates that this meeting has been deleted..</param>
        /// <param name="allow720p">If set allows clients to send and receive 720p video resolution..</param>
        /// <param name="status">This string indicates the meeting&#39;s operational status..</param>
        /// <param name="locked">If set the meeting has been locked, and future attendees require a member to allow them to join..</param>
        /// <param name="sequenceNumber">Internal tracking number.</param>
        /// <param name="icsUid">Internal tracking number.</param>
        /// <param name="endPointType">This string is the name of the type of scheduling entity. (default to &quot;WEB_APP&quot;).</param>
        /// <param name="endPointVersion">This is a string that describes the version number of the endpoint type..</param>
        /// <param name="attendees">attendees.</param>
        /// <param name="isLargeMeeting">If set indicates that this meeting will have a large.</param>
        /// <param name="isExpired">If set indicates that the meeting has expired..</param>
        /// <param name="parentMeetingId">This is a unique number associated with the first meeting in a series of meetings..</param>
        /// <param name="parentMeetingUUID">This is the guid for the first meeting in a series of meetings..</param>
        /// <param name="nextOccurrence">This is a unique number associated with the next in a chain of meetings..</param>
        /// <param name="timelessMeeting">This field, if set, indicates that this meeting is continously running..</param>
        /// <param name="endlessMeeting">This field, if set, indicates that there is no end of recurring meetings..</param>
        /// <param name="first">first.</param>
        /// <param name="last">last.</param>
        /// <param name="next">next.</param>
        /// <param name="nextStart">This is the epoch-based starting time for the next in chain of meetings..</param>
        /// <param name="nextEnd">This is the epoch-based ending time for the next in chain of meetings..</param>
        /// <param name="isPersonalMeeting">if set, indicates that this ia personal meeting..</param>
        /// <param name="inviteeJoinOption">How Invitee should join.</param>
        public PersonalMeetingRoom(int? id = default(int?), string uuid = default(string), string title = default(string), string description = default(string), int? start = default(int?), int? end = default(int?), string timezone = default(string), PersonalMeetingRoomAdvancedMeetingOptions advancedMeetingOptions = default(PersonalMeetingRoomAdvancedMeetingOptions), string notificationUrl = default(string), string notificationData = default(string), PersonalMeetingRoomModerator moderator = default(PersonalMeetingRoomModerator), string numericMeetingId = default(string), string attendeePasscode = default(string), bool? addAttendeePasscode = default(bool?), bool? deleted = default(bool?), bool? allow720p = default(bool?), string status = default(string), bool? locked = default(bool?), int? sequenceNumber = default(int?), string icsUid = default(string), string endPointType = "WEB_APP", string endPointVersion = default(string), List<PersonalMeetingRoomAttendees> attendees = default(List<PersonalMeetingRoomAttendees>), bool? isLargeMeeting = default(bool?), bool? isExpired = default(bool?), int? parentMeetingId = default(int?), string parentMeetingUUID = default(string), int? nextOccurrence = default(int?), bool? timelessMeeting = default(bool?), bool? endlessMeeting = default(bool?), PersonalMeetingRoomFirst first = default(PersonalMeetingRoomFirst), PersonalMeetingRoomLast last = default(PersonalMeetingRoomLast), PersonalMeetingRoomNext next = default(PersonalMeetingRoomNext), int? nextStart = default(int?), int? nextEnd = default(int?), bool? isPersonalMeeting = default(bool?), int? inviteeJoinOption = default(int?))
        {
            this.Id = id;
            this.Uuid = uuid;
            this.Title = title;
            this.Description = description;
            this.Start = start;
            this.End = end;
            this.Timezone = timezone;
            this.AdvancedMeetingOptions = advancedMeetingOptions;
            this.NotificationUrl = notificationUrl;
            this.NotificationData = notificationData;
            this.Moderator = moderator;
            this.NumericMeetingId = numericMeetingId;
            this.AttendeePasscode = attendeePasscode;
            this.AddAttendeePasscode = addAttendeePasscode;
            this.Deleted = deleted;
            this.Allow720p = allow720p;
            this.Status = status;
            this.Locked = locked;
            this.SequenceNumber = sequenceNumber;
            this.IcsUid = icsUid;
            // use default value if no "endPointType" provided
            if (endPointType == null)
            {
                this.EndPointType = "WEB_APP";
            }
            else
            {
                this.EndPointType = endPointType;
            }
            this.EndPointVersion = endPointVersion;
            this.Attendees = attendees;
            this.IsLargeMeeting = isLargeMeeting;
            this.IsExpired = isExpired;
            this.ParentMeetingId = parentMeetingId;
            this.ParentMeetingUUID = parentMeetingUUID;
            this.NextOccurrence = nextOccurrence;
            this.TimelessMeeting = timelessMeeting;
            this.EndlessMeeting = endlessMeeting;
            this.First = first;
            this.Last = last;
            this.Next = next;
            this.NextStart = nextStart;
            this.NextEnd = nextEnd;
            this.IsPersonalMeeting = isPersonalMeeting;
            this.InviteeJoinOption = inviteeJoinOption;
        }
        
        /// <summary>
        /// This is a unique number that is associated with the personal meeting room.
        /// </summary>
        /// <value>This is a unique number that is associated with the personal meeting room.</value>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }

        /// <summary>
        /// This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room.
        /// </summary>
        /// <value>This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room.</value>
        [DataMember(Name="uuid", EmitDefaultValue=false)]
        public string Uuid { get; set; }

        /// <summary>
        /// This is the name associated with personal room.
        /// </summary>
        /// <value>This is the name associated with personal room.</value>
        [DataMember(Name="title", EmitDefaultValue=false)]
        public string Title { get; set; }

        /// <summary>
        /// This is a short descriptive text for the personal meeting room.
        /// </summary>
        /// <value>This is a short descriptive text for the personal meeting room.</value>
        [DataMember(Name="description", EmitDefaultValue=false)]
        public string Description { get; set; }

        /// <summary>
        /// This is the epoch-based starting time (in milliseconds) of the personal meeting.
        /// </summary>
        /// <value>This is the epoch-based starting time (in milliseconds) of the personal meeting.</value>
        [DataMember(Name="start", EmitDefaultValue=false)]
        public int? Start { get; set; }

        /// <summary>
        /// This is the epoch-based ending time (in milliseconds) of the personal meeting.
        /// </summary>
        /// <value>This is the epoch-based ending time (in milliseconds) of the personal meeting.</value>
        [DataMember(Name="end", EmitDefaultValue=false)]
        public int? End { get; set; }

        /// <summary>
        /// This is the unix timezone string describing the timezone for the meeting
        /// </summary>
        /// <value>This is the unix timezone string describing the timezone for the meeting</value>
        [DataMember(Name="timezone", EmitDefaultValue=false)]
        public string Timezone { get; set; }

        /// <summary>
        /// Gets or Sets AdvancedMeetingOptions
        /// </summary>
        [DataMember(Name="advancedMeetingOptions", EmitDefaultValue=false)]
        public PersonalMeetingRoomAdvancedMeetingOptions AdvancedMeetingOptions { get; set; }

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
        public PersonalMeetingRoomModerator Moderator { get; set; }

        /// <summary>
        /// This is the number that a participant would enter when joining this meeting.
        /// </summary>
        /// <value>This is the number that a participant would enter when joining this meeting.</value>
        [DataMember(Name="numericMeetingId", EmitDefaultValue=false)]
        public string NumericMeetingId { get; set; }

        /// <summary>
        /// This is a passcode that must be provided by people joining the meeting.
        /// </summary>
        /// <value>This is a passcode that must be provided by people joining the meeting.</value>
        [DataMember(Name="attendeePasscode", EmitDefaultValue=false)]
        public string AttendeePasscode { get; set; }

        /// <summary>
        /// If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting.
        /// </summary>
        /// <value>If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting.</value>
        [DataMember(Name="addAttendeePasscode", EmitDefaultValue=false)]
        public bool? AddAttendeePasscode { get; set; }

        /// <summary>
        /// If set, indicates that this meeting has been deleted.
        /// </summary>
        /// <value>If set, indicates that this meeting has been deleted.</value>
        [DataMember(Name="deleted", EmitDefaultValue=false)]
        public bool? Deleted { get; set; }

        /// <summary>
        /// If set allows clients to send and receive 720p video resolution.
        /// </summary>
        /// <value>If set allows clients to send and receive 720p video resolution.</value>
        [DataMember(Name="allow720p", EmitDefaultValue=false)]
        public bool? Allow720p { get; set; }

        /// <summary>
        /// This string indicates the meeting&#39;s operational status.
        /// </summary>
        /// <value>This string indicates the meeting&#39;s operational status.</value>
        [DataMember(Name="status", EmitDefaultValue=false)]
        public string Status { get; set; }

        /// <summary>
        /// If set the meeting has been locked, and future attendees require a member to allow them to join.
        /// </summary>
        /// <value>If set the meeting has been locked, and future attendees require a member to allow them to join.</value>
        [DataMember(Name="locked", EmitDefaultValue=false)]
        public bool? Locked { get; set; }

        /// <summary>
        /// Internal tracking number
        /// </summary>
        /// <value>Internal tracking number</value>
        [DataMember(Name="sequenceNumber", EmitDefaultValue=false)]
        public int? SequenceNumber { get; set; }

        /// <summary>
        /// Internal tracking number
        /// </summary>
        /// <value>Internal tracking number</value>
        [DataMember(Name="icsUid", EmitDefaultValue=false)]
        public string IcsUid { get; set; }

        /// <summary>
        /// This string is the name of the type of scheduling entity.
        /// </summary>
        /// <value>This string is the name of the type of scheduling entity.</value>
        [DataMember(Name="endPointType", EmitDefaultValue=false)]
        public string EndPointType { get; set; }

        /// <summary>
        /// This is a string that describes the version number of the endpoint type.
        /// </summary>
        /// <value>This is a string that describes the version number of the endpoint type.</value>
        [DataMember(Name="endPointVersion", EmitDefaultValue=false)]
        public string EndPointVersion { get; set; }

        /// <summary>
        /// Gets or Sets Attendees
        /// </summary>
        [DataMember(Name="attendees", EmitDefaultValue=false)]
        public List<PersonalMeetingRoomAttendees> Attendees { get; set; }

        /// <summary>
        /// If set indicates that this meeting will have a large
        /// </summary>
        /// <value>If set indicates that this meeting will have a large</value>
        [DataMember(Name="isLargeMeeting", EmitDefaultValue=false)]
        public bool? IsLargeMeeting { get; set; }

        /// <summary>
        /// This is the date and time (in milliseconds) when the meeting was created.
        /// </summary>
        /// <value>This is the date and time (in milliseconds) when the meeting was created.</value>
        [DataMember(Name="created", EmitDefaultValue=false)]
        public int? Created { get; private set; }

        /// <summary>
        /// This is the date and time (in milliseconds) when the meeting was last changed.
        /// </summary>
        /// <value>This is the date and time (in milliseconds) when the meeting was last changed.</value>
        [DataMember(Name="lastModified", EmitDefaultValue=false)]
        public int? LastModified { get; private set; }

        /// <summary>
        /// If set indicates that the meeting has expired.
        /// </summary>
        /// <value>If set indicates that the meeting has expired.</value>
        [DataMember(Name="isExpired", EmitDefaultValue=false)]
        public bool? IsExpired { get; set; }

        /// <summary>
        /// This is a unique number associated with the first meeting in a series of meetings.
        /// </summary>
        /// <value>This is a unique number associated with the first meeting in a series of meetings.</value>
        [DataMember(Name="parentMeetingId", EmitDefaultValue=false)]
        public int? ParentMeetingId { get; set; }

        /// <summary>
        /// This is the guid for the first meeting in a series of meetings.
        /// </summary>
        /// <value>This is the guid for the first meeting in a series of meetings.</value>
        [DataMember(Name="parentMeetingUUID", EmitDefaultValue=false)]
        public string ParentMeetingUUID { get; set; }

        /// <summary>
        /// This is a unique number associated with the next in a chain of meetings.
        /// </summary>
        /// <value>This is a unique number associated with the next in a chain of meetings.</value>
        [DataMember(Name="nextOccurrence", EmitDefaultValue=false)]
        public int? NextOccurrence { get; set; }

        /// <summary>
        /// This field, if set, indicates that this meeting is continously running.
        /// </summary>
        /// <value>This field, if set, indicates that this meeting is continously running.</value>
        [DataMember(Name="timelessMeeting", EmitDefaultValue=false)]
        public bool? TimelessMeeting { get; set; }

        /// <summary>
        /// This field, if set, indicates that there is no end of recurring meetings.
        /// </summary>
        /// <value>This field, if set, indicates that there is no end of recurring meetings.</value>
        [DataMember(Name="endlessMeeting", EmitDefaultValue=false)]
        public bool? EndlessMeeting { get; set; }

        /// <summary>
        /// Gets or Sets First
        /// </summary>
        [DataMember(Name="first", EmitDefaultValue=false)]
        public PersonalMeetingRoomFirst First { get; set; }

        /// <summary>
        /// Gets or Sets Last
        /// </summary>
        [DataMember(Name="last", EmitDefaultValue=false)]
        public PersonalMeetingRoomLast Last { get; set; }

        /// <summary>
        /// Gets or Sets Next
        /// </summary>
        [DataMember(Name="next", EmitDefaultValue=false)]
        public PersonalMeetingRoomNext Next { get; set; }

        /// <summary>
        /// This is the epoch-based starting time for the next in chain of meetings.
        /// </summary>
        /// <value>This is the epoch-based starting time for the next in chain of meetings.</value>
        [DataMember(Name="nextStart", EmitDefaultValue=false)]
        public int? NextStart { get; set; }

        /// <summary>
        /// This is the epoch-based ending time for the next in chain of meetings.
        /// </summary>
        /// <value>This is the epoch-based ending time for the next in chain of meetings.</value>
        [DataMember(Name="nextEnd", EmitDefaultValue=false)]
        public int? NextEnd { get; set; }

        /// <summary>
        /// if set, indicates that this ia personal meeting.
        /// </summary>
        /// <value>if set, indicates that this ia personal meeting.</value>
        [DataMember(Name="isPersonalMeeting", EmitDefaultValue=false)]
        public bool? IsPersonalMeeting { get; set; }

        /// <summary>
        /// How Invitee should join
        /// </summary>
        /// <value>How Invitee should join</value>
        [DataMember(Name="inviteeJoinOption", EmitDefaultValue=false)]
        public int? InviteeJoinOption { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class PersonalMeetingRoom {\n");
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
            sb.Append("  Deleted: ").Append(Deleted).Append("\n");
            sb.Append("  Allow720p: ").Append(Allow720p).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  Locked: ").Append(Locked).Append("\n");
            sb.Append("  SequenceNumber: ").Append(SequenceNumber).Append("\n");
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
            return this.Equals(input as PersonalMeetingRoom);
        }

        /// <summary>
        /// Returns true if PersonalMeetingRoom instances are equal
        /// </summary>
        /// <param name="input">Instance of PersonalMeetingRoom to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(PersonalMeetingRoom input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Id == input.Id ||
                    (this.Id != null &&
                    this.Id.Equals(input.Id))
                ) && 
                (
                    this.Uuid == input.Uuid ||
                    (this.Uuid != null &&
                    this.Uuid.Equals(input.Uuid))
                ) && 
                (
                    this.Title == input.Title ||
                    (this.Title != null &&
                    this.Title.Equals(input.Title))
                ) && 
                (
                    this.Description == input.Description ||
                    (this.Description != null &&
                    this.Description.Equals(input.Description))
                ) && 
                (
                    this.Start == input.Start ||
                    (this.Start != null &&
                    this.Start.Equals(input.Start))
                ) && 
                (
                    this.End == input.End ||
                    (this.End != null &&
                    this.End.Equals(input.End))
                ) && 
                (
                    this.Timezone == input.Timezone ||
                    (this.Timezone != null &&
                    this.Timezone.Equals(input.Timezone))
                ) && 
                (
                    this.AdvancedMeetingOptions == input.AdvancedMeetingOptions ||
                    (this.AdvancedMeetingOptions != null &&
                    this.AdvancedMeetingOptions.Equals(input.AdvancedMeetingOptions))
                ) && 
                (
                    this.NotificationUrl == input.NotificationUrl ||
                    (this.NotificationUrl != null &&
                    this.NotificationUrl.Equals(input.NotificationUrl))
                ) && 
                (
                    this.NotificationData == input.NotificationData ||
                    (this.NotificationData != null &&
                    this.NotificationData.Equals(input.NotificationData))
                ) && 
                (
                    this.Moderator == input.Moderator ||
                    (this.Moderator != null &&
                    this.Moderator.Equals(input.Moderator))
                ) && 
                (
                    this.NumericMeetingId == input.NumericMeetingId ||
                    (this.NumericMeetingId != null &&
                    this.NumericMeetingId.Equals(input.NumericMeetingId))
                ) && 
                (
                    this.AttendeePasscode == input.AttendeePasscode ||
                    (this.AttendeePasscode != null &&
                    this.AttendeePasscode.Equals(input.AttendeePasscode))
                ) && 
                (
                    this.AddAttendeePasscode == input.AddAttendeePasscode ||
                    (this.AddAttendeePasscode != null &&
                    this.AddAttendeePasscode.Equals(input.AddAttendeePasscode))
                ) && 
                (
                    this.Deleted == input.Deleted ||
                    (this.Deleted != null &&
                    this.Deleted.Equals(input.Deleted))
                ) && 
                (
                    this.Allow720p == input.Allow720p ||
                    (this.Allow720p != null &&
                    this.Allow720p.Equals(input.Allow720p))
                ) && 
                (
                    this.Status == input.Status ||
                    (this.Status != null &&
                    this.Status.Equals(input.Status))
                ) && 
                (
                    this.Locked == input.Locked ||
                    (this.Locked != null &&
                    this.Locked.Equals(input.Locked))
                ) && 
                (
                    this.SequenceNumber == input.SequenceNumber ||
                    (this.SequenceNumber != null &&
                    this.SequenceNumber.Equals(input.SequenceNumber))
                ) && 
                (
                    this.IcsUid == input.IcsUid ||
                    (this.IcsUid != null &&
                    this.IcsUid.Equals(input.IcsUid))
                ) && 
                (
                    this.EndPointType == input.EndPointType ||
                    (this.EndPointType != null &&
                    this.EndPointType.Equals(input.EndPointType))
                ) && 
                (
                    this.EndPointVersion == input.EndPointVersion ||
                    (this.EndPointVersion != null &&
                    this.EndPointVersion.Equals(input.EndPointVersion))
                ) && 
                (
                    this.Attendees == input.Attendees ||
                    this.Attendees != null &&
                    this.Attendees.SequenceEqual(input.Attendees)
                ) && 
                (
                    this.IsLargeMeeting == input.IsLargeMeeting ||
                    (this.IsLargeMeeting != null &&
                    this.IsLargeMeeting.Equals(input.IsLargeMeeting))
                ) && 
                (
                    this.Created == input.Created ||
                    (this.Created != null &&
                    this.Created.Equals(input.Created))
                ) && 
                (
                    this.LastModified == input.LastModified ||
                    (this.LastModified != null &&
                    this.LastModified.Equals(input.LastModified))
                ) && 
                (
                    this.IsExpired == input.IsExpired ||
                    (this.IsExpired != null &&
                    this.IsExpired.Equals(input.IsExpired))
                ) && 
                (
                    this.ParentMeetingId == input.ParentMeetingId ||
                    (this.ParentMeetingId != null &&
                    this.ParentMeetingId.Equals(input.ParentMeetingId))
                ) && 
                (
                    this.ParentMeetingUUID == input.ParentMeetingUUID ||
                    (this.ParentMeetingUUID != null &&
                    this.ParentMeetingUUID.Equals(input.ParentMeetingUUID))
                ) && 
                (
                    this.NextOccurrence == input.NextOccurrence ||
                    (this.NextOccurrence != null &&
                    this.NextOccurrence.Equals(input.NextOccurrence))
                ) && 
                (
                    this.TimelessMeeting == input.TimelessMeeting ||
                    (this.TimelessMeeting != null &&
                    this.TimelessMeeting.Equals(input.TimelessMeeting))
                ) && 
                (
                    this.EndlessMeeting == input.EndlessMeeting ||
                    (this.EndlessMeeting != null &&
                    this.EndlessMeeting.Equals(input.EndlessMeeting))
                ) && 
                (
                    this.First == input.First ||
                    (this.First != null &&
                    this.First.Equals(input.First))
                ) && 
                (
                    this.Last == input.Last ||
                    (this.Last != null &&
                    this.Last.Equals(input.Last))
                ) && 
                (
                    this.Next == input.Next ||
                    (this.Next != null &&
                    this.Next.Equals(input.Next))
                ) && 
                (
                    this.NextStart == input.NextStart ||
                    (this.NextStart != null &&
                    this.NextStart.Equals(input.NextStart))
                ) && 
                (
                    this.NextEnd == input.NextEnd ||
                    (this.NextEnd != null &&
                    this.NextEnd.Equals(input.NextEnd))
                ) && 
                (
                    this.IsPersonalMeeting == input.IsPersonalMeeting ||
                    (this.IsPersonalMeeting != null &&
                    this.IsPersonalMeeting.Equals(input.IsPersonalMeeting))
                ) && 
                (
                    this.InviteeJoinOption == input.InviteeJoinOption ||
                    (this.InviteeJoinOption != null &&
                    this.InviteeJoinOption.Equals(input.InviteeJoinOption))
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
                if (this.Id != null)
                    hashCode = hashCode * 59 + this.Id.GetHashCode();
                if (this.Uuid != null)
                    hashCode = hashCode * 59 + this.Uuid.GetHashCode();
                if (this.Title != null)
                    hashCode = hashCode * 59 + this.Title.GetHashCode();
                if (this.Description != null)
                    hashCode = hashCode * 59 + this.Description.GetHashCode();
                if (this.Start != null)
                    hashCode = hashCode * 59 + this.Start.GetHashCode();
                if (this.End != null)
                    hashCode = hashCode * 59 + this.End.GetHashCode();
                if (this.Timezone != null)
                    hashCode = hashCode * 59 + this.Timezone.GetHashCode();
                if (this.AdvancedMeetingOptions != null)
                    hashCode = hashCode * 59 + this.AdvancedMeetingOptions.GetHashCode();
                if (this.NotificationUrl != null)
                    hashCode = hashCode * 59 + this.NotificationUrl.GetHashCode();
                if (this.NotificationData != null)
                    hashCode = hashCode * 59 + this.NotificationData.GetHashCode();
                if (this.Moderator != null)
                    hashCode = hashCode * 59 + this.Moderator.GetHashCode();
                if (this.NumericMeetingId != null)
                    hashCode = hashCode * 59 + this.NumericMeetingId.GetHashCode();
                if (this.AttendeePasscode != null)
                    hashCode = hashCode * 59 + this.AttendeePasscode.GetHashCode();
                if (this.AddAttendeePasscode != null)
                    hashCode = hashCode * 59 + this.AddAttendeePasscode.GetHashCode();
                if (this.Deleted != null)
                    hashCode = hashCode * 59 + this.Deleted.GetHashCode();
                if (this.Allow720p != null)
                    hashCode = hashCode * 59 + this.Allow720p.GetHashCode();
                if (this.Status != null)
                    hashCode = hashCode * 59 + this.Status.GetHashCode();
                if (this.Locked != null)
                    hashCode = hashCode * 59 + this.Locked.GetHashCode();
                if (this.SequenceNumber != null)
                    hashCode = hashCode * 59 + this.SequenceNumber.GetHashCode();
                if (this.IcsUid != null)
                    hashCode = hashCode * 59 + this.IcsUid.GetHashCode();
                if (this.EndPointType != null)
                    hashCode = hashCode * 59 + this.EndPointType.GetHashCode();
                if (this.EndPointVersion != null)
                    hashCode = hashCode * 59 + this.EndPointVersion.GetHashCode();
                if (this.Attendees != null)
                    hashCode = hashCode * 59 + this.Attendees.GetHashCode();
                if (this.IsLargeMeeting != null)
                    hashCode = hashCode * 59 + this.IsLargeMeeting.GetHashCode();
                if (this.Created != null)
                    hashCode = hashCode * 59 + this.Created.GetHashCode();
                if (this.LastModified != null)
                    hashCode = hashCode * 59 + this.LastModified.GetHashCode();
                if (this.IsExpired != null)
                    hashCode = hashCode * 59 + this.IsExpired.GetHashCode();
                if (this.ParentMeetingId != null)
                    hashCode = hashCode * 59 + this.ParentMeetingId.GetHashCode();
                if (this.ParentMeetingUUID != null)
                    hashCode = hashCode * 59 + this.ParentMeetingUUID.GetHashCode();
                if (this.NextOccurrence != null)
                    hashCode = hashCode * 59 + this.NextOccurrence.GetHashCode();
                if (this.TimelessMeeting != null)
                    hashCode = hashCode * 59 + this.TimelessMeeting.GetHashCode();
                if (this.EndlessMeeting != null)
                    hashCode = hashCode * 59 + this.EndlessMeeting.GetHashCode();
                if (this.First != null)
                    hashCode = hashCode * 59 + this.First.GetHashCode();
                if (this.Last != null)
                    hashCode = hashCode * 59 + this.Last.GetHashCode();
                if (this.Next != null)
                    hashCode = hashCode * 59 + this.Next.GetHashCode();
                if (this.NextStart != null)
                    hashCode = hashCode * 59 + this.NextStart.GetHashCode();
                if (this.NextEnd != null)
                    hashCode = hashCode * 59 + this.NextEnd.GetHashCode();
                if (this.IsPersonalMeeting != null)
                    hashCode = hashCode * 59 + this.IsPersonalMeeting.GetHashCode();
                if (this.InviteeJoinOption != null)
                    hashCode = hashCode * 59 + this.InviteeJoinOption.GetHashCode();
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
