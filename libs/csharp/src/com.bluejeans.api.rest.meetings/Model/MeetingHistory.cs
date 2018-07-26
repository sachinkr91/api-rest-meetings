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
    /// MeetingHistory
    /// </summary>
    [DataContract]
    public partial class MeetingHistory :  IEquatable<MeetingHistory>, IValidatableObject
    {
        /// <summary>
        /// Defines MeetingStatus
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum MeetingStatusEnum
        {
            
            /// <summary>
            /// Enum Complete for value: Complete
            /// </summary>
            [EnumMember(Value = "Complete")]
            Complete = 1
        }

        /// <summary>
        /// Gets or Sets MeetingStatus
        /// </summary>
        [DataMember(Name="meetingStatus", EmitDefaultValue=false)]
        public MeetingStatusEnum? MeetingStatus { get; set; }
        /// <summary>
        /// Defines ProcessingStatus
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum ProcessingStatusEnum
        {
            
            /// <summary>
            /// Enum PROCESSED for value: PROCESSED
            /// </summary>
            [EnumMember(Value = "PROCESSED")]
            PROCESSED = 1
        }

        /// <summary>
        /// Gets or Sets ProcessingStatus
        /// </summary>
        [DataMember(Name="processingStatus", EmitDefaultValue=false)]
        public ProcessingStatusEnum? ProcessingStatus { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingHistory" /> class.
        /// </summary>
        /// <param name="meetingGuid">meetingGuid.</param>
        /// <param name="meetingNumericId">meetingNumericId.</param>
        /// <param name="title">title.</param>
        /// <param name="description">description.</param>
        /// <param name="leaderInfo">leaderInfo.</param>
        /// <param name="userId">userId.</param>
        /// <param name="meetingDuration">meetingDuration.</param>
        /// <param name="maxParticipantCount">maxParticipantCount.</param>
        /// <param name="totalParticipantMinutes">totalParticipantMinutes.</param>
        /// <param name="maxParticipantMinutes">maxParticipantMinutes.</param>
        /// <param name="extraParticipantMinutes">extraParticipantMinutes.</param>
        /// <param name="isdnEndpoints">isdnEndpoints.</param>
        /// <param name="totalDialoutMinutes">totalDialoutMinutes.</param>
        /// <param name="totalTollFreeMinutes">totalTollFreeMinutes.</param>
        /// <param name="callDIDMinutes">callDIDMinutes.</param>
        /// <param name="startTime">startTime.</param>
        /// <param name="endTime">endTime.</param>
        /// <param name="meetingStatus">meetingStatus.</param>
        /// <param name="meetingThumbnail">meetingThumbnail.</param>
        /// <param name="startTimeZone">startTimeZone.</param>
        /// <param name="processingStatus">processingStatus.</param>
        /// <param name="concurrentCalls">concurrentCalls.</param>
        /// <param name="uploadStatus">uploadStatus.</param>
        /// <param name="pstnonly">pstnonly.</param>
        /// <param name="participantList">participantList.</param>
        public MeetingHistory(string meetingGuid = default(string), string meetingNumericId = default(string), string title = default(string), string description = default(string), MeetingHistoryLeaderInfo leaderInfo = default(MeetingHistoryLeaderInfo), int? userId = default(int?), int? meetingDuration = default(int?), int? maxParticipantCount = default(int?), int? totalParticipantMinutes = default(int?), int? maxParticipantMinutes = default(int?), int? extraParticipantMinutes = default(int?), int? isdnEndpoints = default(int?), int? totalDialoutMinutes = default(int?), int? totalTollFreeMinutes = default(int?), int? callDIDMinutes = default(int?), int? startTime = default(int?), int? endTime = default(int?), MeetingStatusEnum? meetingStatus = default(MeetingStatusEnum?), string meetingThumbnail = default(string), string startTimeZone = default(string), ProcessingStatusEnum? processingStatus = default(ProcessingStatusEnum?), string concurrentCalls = default(string), string uploadStatus = default(string), bool? pstnonly = default(bool?), List<MeetingHistoryParticipantList> participantList = default(List<MeetingHistoryParticipantList>))
        {
            this.MeetingGuid = meetingGuid;
            this.MeetingNumericId = meetingNumericId;
            this.Title = title;
            this.Description = description;
            this.LeaderInfo = leaderInfo;
            this.UserId = userId;
            this.MeetingDuration = meetingDuration;
            this.MaxParticipantCount = maxParticipantCount;
            this.TotalParticipantMinutes = totalParticipantMinutes;
            this.MaxParticipantMinutes = maxParticipantMinutes;
            this.ExtraParticipantMinutes = extraParticipantMinutes;
            this.IsdnEndpoints = isdnEndpoints;
            this.TotalDialoutMinutes = totalDialoutMinutes;
            this.TotalTollFreeMinutes = totalTollFreeMinutes;
            this.CallDIDMinutes = callDIDMinutes;
            this.StartTime = startTime;
            this.EndTime = endTime;
            this.MeetingStatus = meetingStatus;
            this.MeetingThumbnail = meetingThumbnail;
            this.StartTimeZone = startTimeZone;
            this.ProcessingStatus = processingStatus;
            this.ConcurrentCalls = concurrentCalls;
            this.UploadStatus = uploadStatus;
            this.Pstnonly = pstnonly;
            this.ParticipantList = participantList;
        }
        
        /// <summary>
        /// Gets or Sets MeetingGuid
        /// </summary>
        [DataMember(Name="meetingGuid", EmitDefaultValue=false)]
        public string MeetingGuid { get; set; }

        /// <summary>
        /// Gets or Sets MeetingNumericId
        /// </summary>
        [DataMember(Name="meetingNumericId", EmitDefaultValue=false)]
        public string MeetingNumericId { get; set; }

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
        /// Gets or Sets LeaderInfo
        /// </summary>
        [DataMember(Name="leaderInfo", EmitDefaultValue=false)]
        public MeetingHistoryLeaderInfo LeaderInfo { get; set; }

        /// <summary>
        /// Gets or Sets UserId
        /// </summary>
        [DataMember(Name="userId", EmitDefaultValue=false)]
        public int? UserId { get; set; }

        /// <summary>
        /// Gets or Sets MeetingDuration
        /// </summary>
        [DataMember(Name="meetingDuration", EmitDefaultValue=false)]
        public int? MeetingDuration { get; set; }

        /// <summary>
        /// Gets or Sets MaxParticipantCount
        /// </summary>
        [DataMember(Name="maxParticipantCount", EmitDefaultValue=false)]
        public int? MaxParticipantCount { get; set; }

        /// <summary>
        /// Gets or Sets TotalParticipantMinutes
        /// </summary>
        [DataMember(Name="totalParticipantMinutes", EmitDefaultValue=false)]
        public int? TotalParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets MaxParticipantMinutes
        /// </summary>
        [DataMember(Name="maxParticipantMinutes", EmitDefaultValue=false)]
        public int? MaxParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets ExtraParticipantMinutes
        /// </summary>
        [DataMember(Name="extraParticipantMinutes", EmitDefaultValue=false)]
        public int? ExtraParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets IsdnEndpoints
        /// </summary>
        [DataMember(Name="isdnEndpoints", EmitDefaultValue=false)]
        public int? IsdnEndpoints { get; set; }

        /// <summary>
        /// Gets or Sets TotalDialoutMinutes
        /// </summary>
        [DataMember(Name="totalDialoutMinutes", EmitDefaultValue=false)]
        public int? TotalDialoutMinutes { get; set; }

        /// <summary>
        /// Gets or Sets TotalTollFreeMinutes
        /// </summary>
        [DataMember(Name="totalTollFreeMinutes", EmitDefaultValue=false)]
        public int? TotalTollFreeMinutes { get; set; }

        /// <summary>
        /// Gets or Sets CallDIDMinutes
        /// </summary>
        [DataMember(Name="callDIDMinutes", EmitDefaultValue=false)]
        public int? CallDIDMinutes { get; set; }

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
        /// Gets or Sets MeetingThumbnail
        /// </summary>
        [DataMember(Name="meetingThumbnail", EmitDefaultValue=false)]
        public string MeetingThumbnail { get; set; }

        /// <summary>
        /// Gets or Sets StartTimeZone
        /// </summary>
        [DataMember(Name="startTimeZone", EmitDefaultValue=false)]
        public string StartTimeZone { get; set; }


        /// <summary>
        /// Gets or Sets ConcurrentCalls
        /// </summary>
        [DataMember(Name="concurrentCalls", EmitDefaultValue=false)]
        public string ConcurrentCalls { get; set; }

        /// <summary>
        /// Gets or Sets UploadStatus
        /// </summary>
        [DataMember(Name="uploadStatus", EmitDefaultValue=false)]
        public string UploadStatus { get; set; }

        /// <summary>
        /// Gets or Sets Pstnonly
        /// </summary>
        [DataMember(Name="pstnonly", EmitDefaultValue=false)]
        public bool? Pstnonly { get; set; }

        /// <summary>
        /// Gets or Sets ParticipantList
        /// </summary>
        [DataMember(Name="participantList", EmitDefaultValue=false)]
        public List<MeetingHistoryParticipantList> ParticipantList { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingHistory {\n");
            sb.Append("  MeetingGuid: ").Append(MeetingGuid).Append("\n");
            sb.Append("  MeetingNumericId: ").Append(MeetingNumericId).Append("\n");
            sb.Append("  Title: ").Append(Title).Append("\n");
            sb.Append("  Description: ").Append(Description).Append("\n");
            sb.Append("  LeaderInfo: ").Append(LeaderInfo).Append("\n");
            sb.Append("  UserId: ").Append(UserId).Append("\n");
            sb.Append("  MeetingDuration: ").Append(MeetingDuration).Append("\n");
            sb.Append("  MaxParticipantCount: ").Append(MaxParticipantCount).Append("\n");
            sb.Append("  TotalParticipantMinutes: ").Append(TotalParticipantMinutes).Append("\n");
            sb.Append("  MaxParticipantMinutes: ").Append(MaxParticipantMinutes).Append("\n");
            sb.Append("  ExtraParticipantMinutes: ").Append(ExtraParticipantMinutes).Append("\n");
            sb.Append("  IsdnEndpoints: ").Append(IsdnEndpoints).Append("\n");
            sb.Append("  TotalDialoutMinutes: ").Append(TotalDialoutMinutes).Append("\n");
            sb.Append("  TotalTollFreeMinutes: ").Append(TotalTollFreeMinutes).Append("\n");
            sb.Append("  CallDIDMinutes: ").Append(CallDIDMinutes).Append("\n");
            sb.Append("  StartTime: ").Append(StartTime).Append("\n");
            sb.Append("  EndTime: ").Append(EndTime).Append("\n");
            sb.Append("  MeetingStatus: ").Append(MeetingStatus).Append("\n");
            sb.Append("  MeetingThumbnail: ").Append(MeetingThumbnail).Append("\n");
            sb.Append("  StartTimeZone: ").Append(StartTimeZone).Append("\n");
            sb.Append("  ProcessingStatus: ").Append(ProcessingStatus).Append("\n");
            sb.Append("  ConcurrentCalls: ").Append(ConcurrentCalls).Append("\n");
            sb.Append("  UploadStatus: ").Append(UploadStatus).Append("\n");
            sb.Append("  Pstnonly: ").Append(Pstnonly).Append("\n");
            sb.Append("  ParticipantList: ").Append(ParticipantList).Append("\n");
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
            return this.Equals(input as MeetingHistory);
        }

        /// <summary>
        /// Returns true if MeetingHistory instances are equal
        /// </summary>
        /// <param name="input">Instance of MeetingHistory to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingHistory input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.MeetingGuid == input.MeetingGuid ||
                    (this.MeetingGuid != null &&
                    this.MeetingGuid.Equals(input.MeetingGuid))
                ) && 
                (
                    this.MeetingNumericId == input.MeetingNumericId ||
                    (this.MeetingNumericId != null &&
                    this.MeetingNumericId.Equals(input.MeetingNumericId))
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
                    this.LeaderInfo == input.LeaderInfo ||
                    (this.LeaderInfo != null &&
                    this.LeaderInfo.Equals(input.LeaderInfo))
                ) && 
                (
                    this.UserId == input.UserId ||
                    (this.UserId != null &&
                    this.UserId.Equals(input.UserId))
                ) && 
                (
                    this.MeetingDuration == input.MeetingDuration ||
                    (this.MeetingDuration != null &&
                    this.MeetingDuration.Equals(input.MeetingDuration))
                ) && 
                (
                    this.MaxParticipantCount == input.MaxParticipantCount ||
                    (this.MaxParticipantCount != null &&
                    this.MaxParticipantCount.Equals(input.MaxParticipantCount))
                ) && 
                (
                    this.TotalParticipantMinutes == input.TotalParticipantMinutes ||
                    (this.TotalParticipantMinutes != null &&
                    this.TotalParticipantMinutes.Equals(input.TotalParticipantMinutes))
                ) && 
                (
                    this.MaxParticipantMinutes == input.MaxParticipantMinutes ||
                    (this.MaxParticipantMinutes != null &&
                    this.MaxParticipantMinutes.Equals(input.MaxParticipantMinutes))
                ) && 
                (
                    this.ExtraParticipantMinutes == input.ExtraParticipantMinutes ||
                    (this.ExtraParticipantMinutes != null &&
                    this.ExtraParticipantMinutes.Equals(input.ExtraParticipantMinutes))
                ) && 
                (
                    this.IsdnEndpoints == input.IsdnEndpoints ||
                    (this.IsdnEndpoints != null &&
                    this.IsdnEndpoints.Equals(input.IsdnEndpoints))
                ) && 
                (
                    this.TotalDialoutMinutes == input.TotalDialoutMinutes ||
                    (this.TotalDialoutMinutes != null &&
                    this.TotalDialoutMinutes.Equals(input.TotalDialoutMinutes))
                ) && 
                (
                    this.TotalTollFreeMinutes == input.TotalTollFreeMinutes ||
                    (this.TotalTollFreeMinutes != null &&
                    this.TotalTollFreeMinutes.Equals(input.TotalTollFreeMinutes))
                ) && 
                (
                    this.CallDIDMinutes == input.CallDIDMinutes ||
                    (this.CallDIDMinutes != null &&
                    this.CallDIDMinutes.Equals(input.CallDIDMinutes))
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
                    this.MeetingStatus == input.MeetingStatus ||
                    (this.MeetingStatus != null &&
                    this.MeetingStatus.Equals(input.MeetingStatus))
                ) && 
                (
                    this.MeetingThumbnail == input.MeetingThumbnail ||
                    (this.MeetingThumbnail != null &&
                    this.MeetingThumbnail.Equals(input.MeetingThumbnail))
                ) && 
                (
                    this.StartTimeZone == input.StartTimeZone ||
                    (this.StartTimeZone != null &&
                    this.StartTimeZone.Equals(input.StartTimeZone))
                ) && 
                (
                    this.ProcessingStatus == input.ProcessingStatus ||
                    (this.ProcessingStatus != null &&
                    this.ProcessingStatus.Equals(input.ProcessingStatus))
                ) && 
                (
                    this.ConcurrentCalls == input.ConcurrentCalls ||
                    (this.ConcurrentCalls != null &&
                    this.ConcurrentCalls.Equals(input.ConcurrentCalls))
                ) && 
                (
                    this.UploadStatus == input.UploadStatus ||
                    (this.UploadStatus != null &&
                    this.UploadStatus.Equals(input.UploadStatus))
                ) && 
                (
                    this.Pstnonly == input.Pstnonly ||
                    (this.Pstnonly != null &&
                    this.Pstnonly.Equals(input.Pstnonly))
                ) && 
                (
                    this.ParticipantList == input.ParticipantList ||
                    this.ParticipantList != null &&
                    this.ParticipantList.SequenceEqual(input.ParticipantList)
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
                if (this.MeetingGuid != null)
                    hashCode = hashCode * 59 + this.MeetingGuid.GetHashCode();
                if (this.MeetingNumericId != null)
                    hashCode = hashCode * 59 + this.MeetingNumericId.GetHashCode();
                if (this.Title != null)
                    hashCode = hashCode * 59 + this.Title.GetHashCode();
                if (this.Description != null)
                    hashCode = hashCode * 59 + this.Description.GetHashCode();
                if (this.LeaderInfo != null)
                    hashCode = hashCode * 59 + this.LeaderInfo.GetHashCode();
                if (this.UserId != null)
                    hashCode = hashCode * 59 + this.UserId.GetHashCode();
                if (this.MeetingDuration != null)
                    hashCode = hashCode * 59 + this.MeetingDuration.GetHashCode();
                if (this.MaxParticipantCount != null)
                    hashCode = hashCode * 59 + this.MaxParticipantCount.GetHashCode();
                if (this.TotalParticipantMinutes != null)
                    hashCode = hashCode * 59 + this.TotalParticipantMinutes.GetHashCode();
                if (this.MaxParticipantMinutes != null)
                    hashCode = hashCode * 59 + this.MaxParticipantMinutes.GetHashCode();
                if (this.ExtraParticipantMinutes != null)
                    hashCode = hashCode * 59 + this.ExtraParticipantMinutes.GetHashCode();
                if (this.IsdnEndpoints != null)
                    hashCode = hashCode * 59 + this.IsdnEndpoints.GetHashCode();
                if (this.TotalDialoutMinutes != null)
                    hashCode = hashCode * 59 + this.TotalDialoutMinutes.GetHashCode();
                if (this.TotalTollFreeMinutes != null)
                    hashCode = hashCode * 59 + this.TotalTollFreeMinutes.GetHashCode();
                if (this.CallDIDMinutes != null)
                    hashCode = hashCode * 59 + this.CallDIDMinutes.GetHashCode();
                if (this.StartTime != null)
                    hashCode = hashCode * 59 + this.StartTime.GetHashCode();
                if (this.EndTime != null)
                    hashCode = hashCode * 59 + this.EndTime.GetHashCode();
                if (this.MeetingStatus != null)
                    hashCode = hashCode * 59 + this.MeetingStatus.GetHashCode();
                if (this.MeetingThumbnail != null)
                    hashCode = hashCode * 59 + this.MeetingThumbnail.GetHashCode();
                if (this.StartTimeZone != null)
                    hashCode = hashCode * 59 + this.StartTimeZone.GetHashCode();
                if (this.ProcessingStatus != null)
                    hashCode = hashCode * 59 + this.ProcessingStatus.GetHashCode();
                if (this.ConcurrentCalls != null)
                    hashCode = hashCode * 59 + this.ConcurrentCalls.GetHashCode();
                if (this.UploadStatus != null)
                    hashCode = hashCode * 59 + this.UploadStatus.GetHashCode();
                if (this.Pstnonly != null)
                    hashCode = hashCode * 59 + this.Pstnonly.GetHashCode();
                if (this.ParticipantList != null)
                    hashCode = hashCode * 59 + this.ParticipantList.GetHashCode();
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
