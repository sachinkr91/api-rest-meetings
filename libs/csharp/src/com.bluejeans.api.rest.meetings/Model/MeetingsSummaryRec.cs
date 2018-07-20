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
    /// MeetingsSummaryRec
    /// </summary>
    [DataContract]
    public partial class MeetingsSummaryRec :  IEquatable<MeetingsSummaryRec>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingsSummaryRec" /> class.
        /// </summary>
        /// <param name="MeetingsCount">Number of meetings held.</param>
        /// <param name="CountryCount">Number of countries with participants in a meeting.</param>
        /// <param name="RegisteredUsers">Number of registered BlueJeans users who were in meetings..</param>
        /// <param name="ActiveUsers">ActiveUsers.</param>
        /// <param name="TotalMinutes">Total minutes of meetings..</param>
        /// <param name="AverageCallDuration">Average number of minutes participants were in a meeting..</param>
        /// <param name="TotalParticipants">Total people who were in meetings..</param>
        /// <param name="RecordingCount">Total number of meetings recorded..</param>
        /// <param name="AverageParticipants">Average number of participants per meeting..</param>
        /// <param name="VideoShareCount">VideoShareCount.</param>
        /// <param name="CityCount">Total number of cities with meeting participants..</param>
        /// <param name="RecordingViewCount">Total number of times that recordings were viewed..</param>
        public MeetingsSummaryRec(int? MeetingsCount = default(int?), int? CountryCount = default(int?), int? RegisteredUsers = default(int?), int? ActiveUsers = default(int?), int? TotalMinutes = default(int?), decimal? AverageCallDuration = default(decimal?), int? TotalParticipants = default(int?), int? RecordingCount = default(int?), decimal? AverageParticipants = default(decimal?), int? VideoShareCount = default(int?), int? CityCount = default(int?), int? RecordingViewCount = default(int?))
        {
            this.MeetingsCount = MeetingsCount;
            this.CountryCount = CountryCount;
            this.RegisteredUsers = RegisteredUsers;
            this.ActiveUsers = ActiveUsers;
            this.TotalMinutes = TotalMinutes;
            this.AverageCallDuration = AverageCallDuration;
            this.TotalParticipants = TotalParticipants;
            this.RecordingCount = RecordingCount;
            this.AverageParticipants = AverageParticipants;
            this.VideoShareCount = VideoShareCount;
            this.CityCount = CityCount;
            this.RecordingViewCount = RecordingViewCount;
        }
        
        /// <summary>
        /// Number of meetings held
        /// </summary>
        /// <value>Number of meetings held</value>
        [DataMember(Name="meetings_count", EmitDefaultValue=false)]
        public int? MeetingsCount { get; set; }

        /// <summary>
        /// Number of countries with participants in a meeting
        /// </summary>
        /// <value>Number of countries with participants in a meeting</value>
        [DataMember(Name="country_count", EmitDefaultValue=false)]
        public int? CountryCount { get; set; }

        /// <summary>
        /// Number of registered BlueJeans users who were in meetings.
        /// </summary>
        /// <value>Number of registered BlueJeans users who were in meetings.</value>
        [DataMember(Name="registered_users", EmitDefaultValue=false)]
        public int? RegisteredUsers { get; set; }

        /// <summary>
        /// Gets or Sets ActiveUsers
        /// </summary>
        [DataMember(Name="active_users", EmitDefaultValue=false)]
        public int? ActiveUsers { get; set; }

        /// <summary>
        /// Total minutes of meetings.
        /// </summary>
        /// <value>Total minutes of meetings.</value>
        [DataMember(Name="total_minutes", EmitDefaultValue=false)]
        public int? TotalMinutes { get; set; }

        /// <summary>
        /// Average number of minutes participants were in a meeting.
        /// </summary>
        /// <value>Average number of minutes participants were in a meeting.</value>
        [DataMember(Name="average_call_duration", EmitDefaultValue=false)]
        public decimal? AverageCallDuration { get; set; }

        /// <summary>
        /// Total people who were in meetings.
        /// </summary>
        /// <value>Total people who were in meetings.</value>
        [DataMember(Name="total_participants", EmitDefaultValue=false)]
        public int? TotalParticipants { get; set; }

        /// <summary>
        /// Total number of meetings recorded.
        /// </summary>
        /// <value>Total number of meetings recorded.</value>
        [DataMember(Name="recording_count", EmitDefaultValue=false)]
        public int? RecordingCount { get; set; }

        /// <summary>
        /// Average number of participants per meeting.
        /// </summary>
        /// <value>Average number of participants per meeting.</value>
        [DataMember(Name="average_participants", EmitDefaultValue=false)]
        public decimal? AverageParticipants { get; set; }

        /// <summary>
        /// Gets or Sets VideoShareCount
        /// </summary>
        [DataMember(Name="video_share_count", EmitDefaultValue=false)]
        public int? VideoShareCount { get; set; }

        /// <summary>
        /// Total number of cities with meeting participants.
        /// </summary>
        /// <value>Total number of cities with meeting participants.</value>
        [DataMember(Name="city_count", EmitDefaultValue=false)]
        public int? CityCount { get; set; }

        /// <summary>
        /// Total number of times that recordings were viewed.
        /// </summary>
        /// <value>Total number of times that recordings were viewed.</value>
        [DataMember(Name="recording_view_count", EmitDefaultValue=false)]
        public int? RecordingViewCount { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingsSummaryRec {\n");
            sb.Append("  MeetingsCount: ").Append(MeetingsCount).Append("\n");
            sb.Append("  CountryCount: ").Append(CountryCount).Append("\n");
            sb.Append("  RegisteredUsers: ").Append(RegisteredUsers).Append("\n");
            sb.Append("  ActiveUsers: ").Append(ActiveUsers).Append("\n");
            sb.Append("  TotalMinutes: ").Append(TotalMinutes).Append("\n");
            sb.Append("  AverageCallDuration: ").Append(AverageCallDuration).Append("\n");
            sb.Append("  TotalParticipants: ").Append(TotalParticipants).Append("\n");
            sb.Append("  RecordingCount: ").Append(RecordingCount).Append("\n");
            sb.Append("  AverageParticipants: ").Append(AverageParticipants).Append("\n");
            sb.Append("  VideoShareCount: ").Append(VideoShareCount).Append("\n");
            sb.Append("  CityCount: ").Append(CityCount).Append("\n");
            sb.Append("  RecordingViewCount: ").Append(RecordingViewCount).Append("\n");
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
            return this.Equals(obj as MeetingsSummaryRec);
        }

        /// <summary>
        /// Returns true if MeetingsSummaryRec instances are equal
        /// </summary>
        /// <param name="other">Instance of MeetingsSummaryRec to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingsSummaryRec other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.MeetingsCount == other.MeetingsCount ||
                    this.MeetingsCount != null &&
                    this.MeetingsCount.Equals(other.MeetingsCount)
                ) && 
                (
                    this.CountryCount == other.CountryCount ||
                    this.CountryCount != null &&
                    this.CountryCount.Equals(other.CountryCount)
                ) && 
                (
                    this.RegisteredUsers == other.RegisteredUsers ||
                    this.RegisteredUsers != null &&
                    this.RegisteredUsers.Equals(other.RegisteredUsers)
                ) && 
                (
                    this.ActiveUsers == other.ActiveUsers ||
                    this.ActiveUsers != null &&
                    this.ActiveUsers.Equals(other.ActiveUsers)
                ) && 
                (
                    this.TotalMinutes == other.TotalMinutes ||
                    this.TotalMinutes != null &&
                    this.TotalMinutes.Equals(other.TotalMinutes)
                ) && 
                (
                    this.AverageCallDuration == other.AverageCallDuration ||
                    this.AverageCallDuration != null &&
                    this.AverageCallDuration.Equals(other.AverageCallDuration)
                ) && 
                (
                    this.TotalParticipants == other.TotalParticipants ||
                    this.TotalParticipants != null &&
                    this.TotalParticipants.Equals(other.TotalParticipants)
                ) && 
                (
                    this.RecordingCount == other.RecordingCount ||
                    this.RecordingCount != null &&
                    this.RecordingCount.Equals(other.RecordingCount)
                ) && 
                (
                    this.AverageParticipants == other.AverageParticipants ||
                    this.AverageParticipants != null &&
                    this.AverageParticipants.Equals(other.AverageParticipants)
                ) && 
                (
                    this.VideoShareCount == other.VideoShareCount ||
                    this.VideoShareCount != null &&
                    this.VideoShareCount.Equals(other.VideoShareCount)
                ) && 
                (
                    this.CityCount == other.CityCount ||
                    this.CityCount != null &&
                    this.CityCount.Equals(other.CityCount)
                ) && 
                (
                    this.RecordingViewCount == other.RecordingViewCount ||
                    this.RecordingViewCount != null &&
                    this.RecordingViewCount.Equals(other.RecordingViewCount)
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
                if (this.MeetingsCount != null)
                    hash = hash * 59 + this.MeetingsCount.GetHashCode();
                if (this.CountryCount != null)
                    hash = hash * 59 + this.CountryCount.GetHashCode();
                if (this.RegisteredUsers != null)
                    hash = hash * 59 + this.RegisteredUsers.GetHashCode();
                if (this.ActiveUsers != null)
                    hash = hash * 59 + this.ActiveUsers.GetHashCode();
                if (this.TotalMinutes != null)
                    hash = hash * 59 + this.TotalMinutes.GetHashCode();
                if (this.AverageCallDuration != null)
                    hash = hash * 59 + this.AverageCallDuration.GetHashCode();
                if (this.TotalParticipants != null)
                    hash = hash * 59 + this.TotalParticipants.GetHashCode();
                if (this.RecordingCount != null)
                    hash = hash * 59 + this.RecordingCount.GetHashCode();
                if (this.AverageParticipants != null)
                    hash = hash * 59 + this.AverageParticipants.GetHashCode();
                if (this.VideoShareCount != null)
                    hash = hash * 59 + this.VideoShareCount.GetHashCode();
                if (this.CityCount != null)
                    hash = hash * 59 + this.CityCount.GetHashCode();
                if (this.RecordingViewCount != null)
                    hash = hash * 59 + this.RecordingViewCount.GetHashCode();
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
