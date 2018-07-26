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
    /// MeetingExtendedIndigo
    /// </summary>
    [DataContract]
    public partial class MeetingExtendedIndigo :  IEquatable<MeetingExtendedIndigo>, IValidatableObject
    {
        /// <summary>
        /// Defines ScheduledFrom
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum ScheduledFromEnum
        {
            
            /// <summary>
            /// Enum WEBAPP for value: WEB_APP
            /// </summary>
            [EnumMember(Value = "WEB_APP")]
            WEBAPP = 1
        }

        /// <summary>
        /// Gets or Sets ScheduledFrom
        /// </summary>
        [DataMember(Name="scheduledFrom", EmitDefaultValue=false)]
        public ScheduledFromEnum? ScheduledFrom { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingExtendedIndigo" /> class.
        /// </summary>
        /// <param name="meetingId">This is the same as the numericMeetingId found elsewhere. We should have been more consistent..</param>
        /// <param name="meetingUUID">The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes..</param>
        /// <param name="userName">userName.</param>
        /// <param name="email">email.</param>
        /// <param name="encryptionType">encryptionType.</param>
        /// <param name="title">title.</param>
        /// <param name="userFullName">userFullName.</param>
        /// <param name="phoneNumber">phoneNumber.</param>
        /// <param name="userFeatures">userFeatures.</param>
        /// <param name="scheduledFrom">scheduledFrom.</param>
        /// <param name="inviteeCount">inviteeCount.</param>
        /// <param name="personal">personal.</param>
        /// <param name="muteOnEntry">muteOnEntry.</param>
        /// <param name="autoRecord">autoRecord.</param>
        /// <param name="enterpriseName">enterpriseName.</param>
        /// <param name="moderatorLess">moderatorLess.</param>
        /// <param name="startTime">startTime.</param>
        /// <param name="endTime">endTime.</param>
        /// <param name="totalCallSeconds">totalCallSeconds.</param>
        /// <param name="createTime">createTime.</param>
        /// <param name="endpointsCount">endpointsCount.</param>
        /// <param name="concurrentEndpoints">concurrentEndpoints.</param>
        /// <param name="liveVisibleEndpointsCount">liveVisibleEndpointsCount.</param>
        /// <param name="qualarooRating">qualarooRating.</param>
        /// <param name="qualarooCount">qualarooCount.</param>
        /// <param name="meetingRecording">meetingRecording.</param>
        /// <param name="videoShare">videoShare.</param>
        /// <param name="contentShare">contentShare.</param>
        /// <param name="liveRecording">liveRecording.</param>
        /// <param name="liveVideoShare">liveVideoShare.</param>
        /// <param name="liveContentShare">liveContentShare.</param>
        /// <param name="largeMeeting">largeMeeting.</param>
        /// <param name="roiDistance">roiDistance.</param>
        /// <param name="mpls">mpls.</param>
        /// <param name="id">Same as the meetingUUID property in this object..</param>
        /// <param name="endpoints">endpoints.</param>
        public MeetingExtendedIndigo(string meetingId = default(string), string meetingUUID = default(string), string userName = default(string), string email = default(string), int? encryptionType = default(int?), string title = default(string), string userFullName = default(string), string phoneNumber = default(string), string userFeatures = default(string), ScheduledFromEnum? scheduledFrom = default(ScheduledFromEnum?), int? inviteeCount = default(int?), bool? personal = default(bool?), bool? muteOnEntry = default(bool?), bool? autoRecord = default(bool?), string enterpriseName = default(string), bool? moderatorLess = default(bool?), int? startTime = default(int?), int? endTime = default(int?), int? totalCallSeconds = default(int?), int? createTime = default(int?), int? endpointsCount = default(int?), int? concurrentEndpoints = default(int?), int? liveVisibleEndpointsCount = default(int?), int? qualarooRating = default(int?), int? qualarooCount = default(int?), bool? meetingRecording = default(bool?), bool? videoShare = default(bool?), bool? contentShare = default(bool?), bool? liveRecording = default(bool?), bool? liveVideoShare = default(bool?), bool? liveContentShare = default(bool?), bool? largeMeeting = default(bool?), float? roiDistance = default(float?), bool? mpls = default(bool?), string id = default(string), List<EndpointIndigo> endpoints = default(List<EndpointIndigo>))
        {
            this.MeetingId = meetingId;
            this.MeetingUUID = meetingUUID;
            this.UserName = userName;
            this.Email = email;
            this.EncryptionType = encryptionType;
            this.Title = title;
            this.UserFullName = userFullName;
            this.PhoneNumber = phoneNumber;
            this.UserFeatures = userFeatures;
            this.ScheduledFrom = scheduledFrom;
            this.InviteeCount = inviteeCount;
            this.Personal = personal;
            this.MuteOnEntry = muteOnEntry;
            this.AutoRecord = autoRecord;
            this.EnterpriseName = enterpriseName;
            this.ModeratorLess = moderatorLess;
            this.StartTime = startTime;
            this.EndTime = endTime;
            this.TotalCallSeconds = totalCallSeconds;
            this.CreateTime = createTime;
            this.EndpointsCount = endpointsCount;
            this.ConcurrentEndpoints = concurrentEndpoints;
            this.LiveVisibleEndpointsCount = liveVisibleEndpointsCount;
            this.QualarooRating = qualarooRating;
            this.QualarooCount = qualarooCount;
            this.MeetingRecording = meetingRecording;
            this.VideoShare = videoShare;
            this.ContentShare = contentShare;
            this.LiveRecording = liveRecording;
            this.LiveVideoShare = liveVideoShare;
            this.LiveContentShare = liveContentShare;
            this.LargeMeeting = largeMeeting;
            this.RoiDistance = roiDistance;
            this.Mpls = mpls;
            this.Id = id;
            this.Endpoints = endpoints;
        }
        
        /// <summary>
        /// This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
        /// </summary>
        /// <value>This is the same as the numericMeetingId found elsewhere. We should have been more consistent.</value>
        [DataMember(Name="meetingId", EmitDefaultValue=false)]
        public string MeetingId { get; set; }

        /// <summary>
        /// The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
        /// </summary>
        /// <value>The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.</value>
        [DataMember(Name="meetingUUID", EmitDefaultValue=false)]
        public string MeetingUUID { get; set; }

        /// <summary>
        /// Gets or Sets UserName
        /// </summary>
        [DataMember(Name="userName", EmitDefaultValue=false)]
        public string UserName { get; set; }

        /// <summary>
        /// Gets or Sets Email
        /// </summary>
        [DataMember(Name="email", EmitDefaultValue=false)]
        public string Email { get; set; }

        /// <summary>
        /// Gets or Sets EncryptionType
        /// </summary>
        [DataMember(Name="encryptionType", EmitDefaultValue=false)]
        public int? EncryptionType { get; set; }

        /// <summary>
        /// Gets or Sets Title
        /// </summary>
        [DataMember(Name="title", EmitDefaultValue=false)]
        public string Title { get; set; }

        /// <summary>
        /// Gets or Sets UserFullName
        /// </summary>
        [DataMember(Name="userFullName", EmitDefaultValue=false)]
        public string UserFullName { get; set; }

        /// <summary>
        /// Gets or Sets PhoneNumber
        /// </summary>
        [DataMember(Name="phoneNumber", EmitDefaultValue=false)]
        public string PhoneNumber { get; set; }

        /// <summary>
        /// Gets or Sets UserFeatures
        /// </summary>
        [DataMember(Name="userFeatures", EmitDefaultValue=false)]
        public string UserFeatures { get; set; }


        /// <summary>
        /// Gets or Sets InviteeCount
        /// </summary>
        [DataMember(Name="inviteeCount", EmitDefaultValue=false)]
        public int? InviteeCount { get; set; }

        /// <summary>
        /// Gets or Sets Personal
        /// </summary>
        [DataMember(Name="personal", EmitDefaultValue=false)]
        public bool? Personal { get; set; }

        /// <summary>
        /// Gets or Sets MuteOnEntry
        /// </summary>
        [DataMember(Name="muteOnEntry", EmitDefaultValue=false)]
        public bool? MuteOnEntry { get; set; }

        /// <summary>
        /// Gets or Sets AutoRecord
        /// </summary>
        [DataMember(Name="autoRecord", EmitDefaultValue=false)]
        public bool? AutoRecord { get; set; }

        /// <summary>
        /// Gets or Sets EnterpriseName
        /// </summary>
        [DataMember(Name="enterpriseName", EmitDefaultValue=false)]
        public string EnterpriseName { get; set; }

        /// <summary>
        /// Gets or Sets ModeratorLess
        /// </summary>
        [DataMember(Name="moderatorLess", EmitDefaultValue=false)]
        public bool? ModeratorLess { get; set; }

        /// <summary>
        /// Gets or Sets StartTime
        /// </summary>
        [DataMember(Name="startTime", EmitDefaultValue=false)]
        public int? StartTime { get; set; }

        /// <summary>
        /// Gets or Sets EndTime
        /// </summary>
        [DataMember(Name="endTime", EmitDefaultValue=false)]
        public int? EndTime { get; set; }

        /// <summary>
        /// Gets or Sets TotalCallSeconds
        /// </summary>
        [DataMember(Name="totalCallSeconds", EmitDefaultValue=false)]
        public int? TotalCallSeconds { get; set; }

        /// <summary>
        /// Gets or Sets CreateTime
        /// </summary>
        [DataMember(Name="createTime", EmitDefaultValue=false)]
        public int? CreateTime { get; set; }

        /// <summary>
        /// Gets or Sets EndpointsCount
        /// </summary>
        [DataMember(Name="endpointsCount", EmitDefaultValue=false)]
        public int? EndpointsCount { get; set; }

        /// <summary>
        /// Gets or Sets ConcurrentEndpoints
        /// </summary>
        [DataMember(Name="concurrentEndpoints", EmitDefaultValue=false)]
        public int? ConcurrentEndpoints { get; set; }

        /// <summary>
        /// Gets or Sets LiveVisibleEndpointsCount
        /// </summary>
        [DataMember(Name="liveVisibleEndpointsCount", EmitDefaultValue=false)]
        public int? LiveVisibleEndpointsCount { get; set; }

        /// <summary>
        /// Gets or Sets QualarooRating
        /// </summary>
        [DataMember(Name="qualarooRating", EmitDefaultValue=false)]
        public int? QualarooRating { get; set; }

        /// <summary>
        /// Gets or Sets QualarooCount
        /// </summary>
        [DataMember(Name="qualarooCount", EmitDefaultValue=false)]
        public int? QualarooCount { get; set; }

        /// <summary>
        /// Gets or Sets MeetingRecording
        /// </summary>
        [DataMember(Name="meetingRecording", EmitDefaultValue=false)]
        public bool? MeetingRecording { get; set; }

        /// <summary>
        /// Gets or Sets VideoShare
        /// </summary>
        [DataMember(Name="videoShare", EmitDefaultValue=false)]
        public bool? VideoShare { get; set; }

        /// <summary>
        /// Gets or Sets ContentShare
        /// </summary>
        [DataMember(Name="contentShare", EmitDefaultValue=false)]
        public bool? ContentShare { get; set; }

        /// <summary>
        /// Gets or Sets LiveRecording
        /// </summary>
        [DataMember(Name="liveRecording", EmitDefaultValue=false)]
        public bool? LiveRecording { get; set; }

        /// <summary>
        /// Gets or Sets LiveVideoShare
        /// </summary>
        [DataMember(Name="liveVideoShare", EmitDefaultValue=false)]
        public bool? LiveVideoShare { get; set; }

        /// <summary>
        /// Gets or Sets LiveContentShare
        /// </summary>
        [DataMember(Name="liveContentShare", EmitDefaultValue=false)]
        public bool? LiveContentShare { get; set; }

        /// <summary>
        /// Gets or Sets LargeMeeting
        /// </summary>
        [DataMember(Name="largeMeeting", EmitDefaultValue=false)]
        public bool? LargeMeeting { get; set; }

        /// <summary>
        /// Gets or Sets RoiDistance
        /// </summary>
        [DataMember(Name="roiDistance", EmitDefaultValue=false)]
        public float? RoiDistance { get; set; }

        /// <summary>
        /// Gets or Sets Mpls
        /// </summary>
        [DataMember(Name="mpls", EmitDefaultValue=false)]
        public bool? Mpls { get; set; }

        /// <summary>
        /// Same as the meetingUUID property in this object.
        /// </summary>
        /// <value>Same as the meetingUUID property in this object.</value>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public string Id { get; set; }

        /// <summary>
        /// Gets or Sets Endpoints
        /// </summary>
        [DataMember(Name="endpoints", EmitDefaultValue=false)]
        public List<EndpointIndigo> Endpoints { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingExtendedIndigo {\n");
            sb.Append("  MeetingId: ").Append(MeetingId).Append("\n");
            sb.Append("  MeetingUUID: ").Append(MeetingUUID).Append("\n");
            sb.Append("  UserName: ").Append(UserName).Append("\n");
            sb.Append("  Email: ").Append(Email).Append("\n");
            sb.Append("  EncryptionType: ").Append(EncryptionType).Append("\n");
            sb.Append("  Title: ").Append(Title).Append("\n");
            sb.Append("  UserFullName: ").Append(UserFullName).Append("\n");
            sb.Append("  PhoneNumber: ").Append(PhoneNumber).Append("\n");
            sb.Append("  UserFeatures: ").Append(UserFeatures).Append("\n");
            sb.Append("  ScheduledFrom: ").Append(ScheduledFrom).Append("\n");
            sb.Append("  InviteeCount: ").Append(InviteeCount).Append("\n");
            sb.Append("  Personal: ").Append(Personal).Append("\n");
            sb.Append("  MuteOnEntry: ").Append(MuteOnEntry).Append("\n");
            sb.Append("  AutoRecord: ").Append(AutoRecord).Append("\n");
            sb.Append("  EnterpriseName: ").Append(EnterpriseName).Append("\n");
            sb.Append("  ModeratorLess: ").Append(ModeratorLess).Append("\n");
            sb.Append("  StartTime: ").Append(StartTime).Append("\n");
            sb.Append("  EndTime: ").Append(EndTime).Append("\n");
            sb.Append("  TotalCallSeconds: ").Append(TotalCallSeconds).Append("\n");
            sb.Append("  CreateTime: ").Append(CreateTime).Append("\n");
            sb.Append("  EndpointsCount: ").Append(EndpointsCount).Append("\n");
            sb.Append("  ConcurrentEndpoints: ").Append(ConcurrentEndpoints).Append("\n");
            sb.Append("  LiveVisibleEndpointsCount: ").Append(LiveVisibleEndpointsCount).Append("\n");
            sb.Append("  QualarooRating: ").Append(QualarooRating).Append("\n");
            sb.Append("  QualarooCount: ").Append(QualarooCount).Append("\n");
            sb.Append("  MeetingRecording: ").Append(MeetingRecording).Append("\n");
            sb.Append("  VideoShare: ").Append(VideoShare).Append("\n");
            sb.Append("  ContentShare: ").Append(ContentShare).Append("\n");
            sb.Append("  LiveRecording: ").Append(LiveRecording).Append("\n");
            sb.Append("  LiveVideoShare: ").Append(LiveVideoShare).Append("\n");
            sb.Append("  LiveContentShare: ").Append(LiveContentShare).Append("\n");
            sb.Append("  LargeMeeting: ").Append(LargeMeeting).Append("\n");
            sb.Append("  RoiDistance: ").Append(RoiDistance).Append("\n");
            sb.Append("  Mpls: ").Append(Mpls).Append("\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  Endpoints: ").Append(Endpoints).Append("\n");
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
            return this.Equals(input as MeetingExtendedIndigo);
        }

        /// <summary>
        /// Returns true if MeetingExtendedIndigo instances are equal
        /// </summary>
        /// <param name="input">Instance of MeetingExtendedIndigo to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingExtendedIndigo input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.MeetingId == input.MeetingId ||
                    (this.MeetingId != null &&
                    this.MeetingId.Equals(input.MeetingId))
                ) && 
                (
                    this.MeetingUUID == input.MeetingUUID ||
                    (this.MeetingUUID != null &&
                    this.MeetingUUID.Equals(input.MeetingUUID))
                ) && 
                (
                    this.UserName == input.UserName ||
                    (this.UserName != null &&
                    this.UserName.Equals(input.UserName))
                ) && 
                (
                    this.Email == input.Email ||
                    (this.Email != null &&
                    this.Email.Equals(input.Email))
                ) && 
                (
                    this.EncryptionType == input.EncryptionType ||
                    (this.EncryptionType != null &&
                    this.EncryptionType.Equals(input.EncryptionType))
                ) && 
                (
                    this.Title == input.Title ||
                    (this.Title != null &&
                    this.Title.Equals(input.Title))
                ) && 
                (
                    this.UserFullName == input.UserFullName ||
                    (this.UserFullName != null &&
                    this.UserFullName.Equals(input.UserFullName))
                ) && 
                (
                    this.PhoneNumber == input.PhoneNumber ||
                    (this.PhoneNumber != null &&
                    this.PhoneNumber.Equals(input.PhoneNumber))
                ) && 
                (
                    this.UserFeatures == input.UserFeatures ||
                    (this.UserFeatures != null &&
                    this.UserFeatures.Equals(input.UserFeatures))
                ) && 
                (
                    this.ScheduledFrom == input.ScheduledFrom ||
                    (this.ScheduledFrom != null &&
                    this.ScheduledFrom.Equals(input.ScheduledFrom))
                ) && 
                (
                    this.InviteeCount == input.InviteeCount ||
                    (this.InviteeCount != null &&
                    this.InviteeCount.Equals(input.InviteeCount))
                ) && 
                (
                    this.Personal == input.Personal ||
                    (this.Personal != null &&
                    this.Personal.Equals(input.Personal))
                ) && 
                (
                    this.MuteOnEntry == input.MuteOnEntry ||
                    (this.MuteOnEntry != null &&
                    this.MuteOnEntry.Equals(input.MuteOnEntry))
                ) && 
                (
                    this.AutoRecord == input.AutoRecord ||
                    (this.AutoRecord != null &&
                    this.AutoRecord.Equals(input.AutoRecord))
                ) && 
                (
                    this.EnterpriseName == input.EnterpriseName ||
                    (this.EnterpriseName != null &&
                    this.EnterpriseName.Equals(input.EnterpriseName))
                ) && 
                (
                    this.ModeratorLess == input.ModeratorLess ||
                    (this.ModeratorLess != null &&
                    this.ModeratorLess.Equals(input.ModeratorLess))
                ) && 
                (
                    this.StartTime == input.StartTime ||
                    (this.StartTime != null &&
                    this.StartTime.Equals(input.StartTime))
                ) && 
                (
                    this.EndTime == input.EndTime ||
                    (this.EndTime != null &&
                    this.EndTime.Equals(input.EndTime))
                ) && 
                (
                    this.TotalCallSeconds == input.TotalCallSeconds ||
                    (this.TotalCallSeconds != null &&
                    this.TotalCallSeconds.Equals(input.TotalCallSeconds))
                ) && 
                (
                    this.CreateTime == input.CreateTime ||
                    (this.CreateTime != null &&
                    this.CreateTime.Equals(input.CreateTime))
                ) && 
                (
                    this.EndpointsCount == input.EndpointsCount ||
                    (this.EndpointsCount != null &&
                    this.EndpointsCount.Equals(input.EndpointsCount))
                ) && 
                (
                    this.ConcurrentEndpoints == input.ConcurrentEndpoints ||
                    (this.ConcurrentEndpoints != null &&
                    this.ConcurrentEndpoints.Equals(input.ConcurrentEndpoints))
                ) && 
                (
                    this.LiveVisibleEndpointsCount == input.LiveVisibleEndpointsCount ||
                    (this.LiveVisibleEndpointsCount != null &&
                    this.LiveVisibleEndpointsCount.Equals(input.LiveVisibleEndpointsCount))
                ) && 
                (
                    this.QualarooRating == input.QualarooRating ||
                    (this.QualarooRating != null &&
                    this.QualarooRating.Equals(input.QualarooRating))
                ) && 
                (
                    this.QualarooCount == input.QualarooCount ||
                    (this.QualarooCount != null &&
                    this.QualarooCount.Equals(input.QualarooCount))
                ) && 
                (
                    this.MeetingRecording == input.MeetingRecording ||
                    (this.MeetingRecording != null &&
                    this.MeetingRecording.Equals(input.MeetingRecording))
                ) && 
                (
                    this.VideoShare == input.VideoShare ||
                    (this.VideoShare != null &&
                    this.VideoShare.Equals(input.VideoShare))
                ) && 
                (
                    this.ContentShare == input.ContentShare ||
                    (this.ContentShare != null &&
                    this.ContentShare.Equals(input.ContentShare))
                ) && 
                (
                    this.LiveRecording == input.LiveRecording ||
                    (this.LiveRecording != null &&
                    this.LiveRecording.Equals(input.LiveRecording))
                ) && 
                (
                    this.LiveVideoShare == input.LiveVideoShare ||
                    (this.LiveVideoShare != null &&
                    this.LiveVideoShare.Equals(input.LiveVideoShare))
                ) && 
                (
                    this.LiveContentShare == input.LiveContentShare ||
                    (this.LiveContentShare != null &&
                    this.LiveContentShare.Equals(input.LiveContentShare))
                ) && 
                (
                    this.LargeMeeting == input.LargeMeeting ||
                    (this.LargeMeeting != null &&
                    this.LargeMeeting.Equals(input.LargeMeeting))
                ) && 
                (
                    this.RoiDistance == input.RoiDistance ||
                    (this.RoiDistance != null &&
                    this.RoiDistance.Equals(input.RoiDistance))
                ) && 
                (
                    this.Mpls == input.Mpls ||
                    (this.Mpls != null &&
                    this.Mpls.Equals(input.Mpls))
                ) && 
                (
                    this.Id == input.Id ||
                    (this.Id != null &&
                    this.Id.Equals(input.Id))
                ) && 
                (
                    this.Endpoints == input.Endpoints ||
                    this.Endpoints != null &&
                    this.Endpoints.SequenceEqual(input.Endpoints)
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
                if (this.MeetingId != null)
                    hashCode = hashCode * 59 + this.MeetingId.GetHashCode();
                if (this.MeetingUUID != null)
                    hashCode = hashCode * 59 + this.MeetingUUID.GetHashCode();
                if (this.UserName != null)
                    hashCode = hashCode * 59 + this.UserName.GetHashCode();
                if (this.Email != null)
                    hashCode = hashCode * 59 + this.Email.GetHashCode();
                if (this.EncryptionType != null)
                    hashCode = hashCode * 59 + this.EncryptionType.GetHashCode();
                if (this.Title != null)
                    hashCode = hashCode * 59 + this.Title.GetHashCode();
                if (this.UserFullName != null)
                    hashCode = hashCode * 59 + this.UserFullName.GetHashCode();
                if (this.PhoneNumber != null)
                    hashCode = hashCode * 59 + this.PhoneNumber.GetHashCode();
                if (this.UserFeatures != null)
                    hashCode = hashCode * 59 + this.UserFeatures.GetHashCode();
                if (this.ScheduledFrom != null)
                    hashCode = hashCode * 59 + this.ScheduledFrom.GetHashCode();
                if (this.InviteeCount != null)
                    hashCode = hashCode * 59 + this.InviteeCount.GetHashCode();
                if (this.Personal != null)
                    hashCode = hashCode * 59 + this.Personal.GetHashCode();
                if (this.MuteOnEntry != null)
                    hashCode = hashCode * 59 + this.MuteOnEntry.GetHashCode();
                if (this.AutoRecord != null)
                    hashCode = hashCode * 59 + this.AutoRecord.GetHashCode();
                if (this.EnterpriseName != null)
                    hashCode = hashCode * 59 + this.EnterpriseName.GetHashCode();
                if (this.ModeratorLess != null)
                    hashCode = hashCode * 59 + this.ModeratorLess.GetHashCode();
                if (this.StartTime != null)
                    hashCode = hashCode * 59 + this.StartTime.GetHashCode();
                if (this.EndTime != null)
                    hashCode = hashCode * 59 + this.EndTime.GetHashCode();
                if (this.TotalCallSeconds != null)
                    hashCode = hashCode * 59 + this.TotalCallSeconds.GetHashCode();
                if (this.CreateTime != null)
                    hashCode = hashCode * 59 + this.CreateTime.GetHashCode();
                if (this.EndpointsCount != null)
                    hashCode = hashCode * 59 + this.EndpointsCount.GetHashCode();
                if (this.ConcurrentEndpoints != null)
                    hashCode = hashCode * 59 + this.ConcurrentEndpoints.GetHashCode();
                if (this.LiveVisibleEndpointsCount != null)
                    hashCode = hashCode * 59 + this.LiveVisibleEndpointsCount.GetHashCode();
                if (this.QualarooRating != null)
                    hashCode = hashCode * 59 + this.QualarooRating.GetHashCode();
                if (this.QualarooCount != null)
                    hashCode = hashCode * 59 + this.QualarooCount.GetHashCode();
                if (this.MeetingRecording != null)
                    hashCode = hashCode * 59 + this.MeetingRecording.GetHashCode();
                if (this.VideoShare != null)
                    hashCode = hashCode * 59 + this.VideoShare.GetHashCode();
                if (this.ContentShare != null)
                    hashCode = hashCode * 59 + this.ContentShare.GetHashCode();
                if (this.LiveRecording != null)
                    hashCode = hashCode * 59 + this.LiveRecording.GetHashCode();
                if (this.LiveVideoShare != null)
                    hashCode = hashCode * 59 + this.LiveVideoShare.GetHashCode();
                if (this.LiveContentShare != null)
                    hashCode = hashCode * 59 + this.LiveContentShare.GetHashCode();
                if (this.LargeMeeting != null)
                    hashCode = hashCode * 59 + this.LargeMeeting.GetHashCode();
                if (this.RoiDistance != null)
                    hashCode = hashCode * 59 + this.RoiDistance.GetHashCode();
                if (this.Mpls != null)
                    hashCode = hashCode * 59 + this.Mpls.GetHashCode();
                if (this.Id != null)
                    hashCode = hashCode * 59 + this.Id.GetHashCode();
                if (this.Endpoints != null)
                    hashCode = hashCode * 59 + this.Endpoints.GetHashCode();
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
