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
    /// Recording
    /// </summary>
    [DataContract]
    public partial class Recording :  IEquatable<Recording>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="Recording" /> class.
        /// </summary>
        /// <param name="recordingEntityId">recordingEntityId.</param>
        /// <param name="recordingEntityGuid">recordingEntityGuid.</param>
        /// <param name="recordingName">recordingName.</param>
        /// <param name="meetingGuid">meetingGuid.</param>
        /// <param name="chapterCount">chapterCount.</param>
        /// <param name="totalSize">totalSize.</param>
        /// <param name="totalDuration">totalDuration.</param>
        /// <param name="lastRecordingDate">lastRecordingDate.</param>
        /// <param name="aggregatedStatus">aggregatedStatus.</param>
        /// <param name="recordingThumbnail">recordingThumbnail.</param>
        /// <param name="created">created.</param>
        /// <param name="aggregatedViewCount">aggregatedViewCount.</param>
        /// <param name="isPremiumRecording">isPremiumRecording.</param>
        /// <param name="showPremiumRecordingTag">showPremiumRecordingTag.</param>
        /// <param name="recordingChapters">recordingChapters.</param>
        public Recording(int? recordingEntityId = default(int?), string recordingEntityGuid = default(string), string recordingName = default(string), string meetingGuid = default(string), int? chapterCount = default(int?), int? totalSize = default(int?), int? totalDuration = default(int?), int? lastRecordingDate = default(int?), string aggregatedStatus = default(string), string recordingThumbnail = default(string), int? created = default(int?), int? aggregatedViewCount = default(int?), bool? isPremiumRecording = default(bool?), bool? showPremiumRecordingTag = default(bool?), List<RecordingRecordingChapters> recordingChapters = default(List<RecordingRecordingChapters>))
        {
            this.RecordingEntityId = recordingEntityId;
            this.RecordingEntityGuid = recordingEntityGuid;
            this.RecordingName = recordingName;
            this.MeetingGuid = meetingGuid;
            this.ChapterCount = chapterCount;
            this.TotalSize = totalSize;
            this.TotalDuration = totalDuration;
            this.LastRecordingDate = lastRecordingDate;
            this.AggregatedStatus = aggregatedStatus;
            this.RecordingThumbnail = recordingThumbnail;
            this.Created = created;
            this.AggregatedViewCount = aggregatedViewCount;
            this.IsPremiumRecording = isPremiumRecording;
            this.ShowPremiumRecordingTag = showPremiumRecordingTag;
            this.RecordingChapters = recordingChapters;
        }
        
        /// <summary>
        /// Gets or Sets RecordingEntityId
        /// </summary>
        [DataMember(Name="recordingEntityId", EmitDefaultValue=false)]
        public int? RecordingEntityId { get; set; }

        /// <summary>
        /// Gets or Sets RecordingEntityGuid
        /// </summary>
        [DataMember(Name="recordingEntityGuid", EmitDefaultValue=false)]
        public string RecordingEntityGuid { get; set; }

        /// <summary>
        /// Gets or Sets RecordingName
        /// </summary>
        [DataMember(Name="recordingName", EmitDefaultValue=false)]
        public string RecordingName { get; set; }

        /// <summary>
        /// Gets or Sets MeetingGuid
        /// </summary>
        [DataMember(Name="meetingGuid", EmitDefaultValue=false)]
        public string MeetingGuid { get; set; }

        /// <summary>
        /// Gets or Sets ChapterCount
        /// </summary>
        [DataMember(Name="chapterCount", EmitDefaultValue=false)]
        public int? ChapterCount { get; set; }

        /// <summary>
        /// Gets or Sets TotalSize
        /// </summary>
        [DataMember(Name="totalSize", EmitDefaultValue=false)]
        public int? TotalSize { get; set; }

        /// <summary>
        /// Gets or Sets TotalDuration
        /// </summary>
        [DataMember(Name="totalDuration", EmitDefaultValue=false)]
        public int? TotalDuration { get; set; }

        /// <summary>
        /// Gets or Sets LastRecordingDate
        /// </summary>
        [DataMember(Name="lastRecordingDate", EmitDefaultValue=false)]
        public int? LastRecordingDate { get; set; }

        /// <summary>
        /// Gets or Sets AggregatedStatus
        /// </summary>
        [DataMember(Name="aggregatedStatus", EmitDefaultValue=false)]
        public string AggregatedStatus { get; set; }

        /// <summary>
        /// Gets or Sets RecordingThumbnail
        /// </summary>
        [DataMember(Name="recordingThumbnail", EmitDefaultValue=false)]
        public string RecordingThumbnail { get; set; }

        /// <summary>
        /// Gets or Sets Created
        /// </summary>
        [DataMember(Name="created", EmitDefaultValue=false)]
        public int? Created { get; set; }

        /// <summary>
        /// Gets or Sets AggregatedViewCount
        /// </summary>
        [DataMember(Name="aggregatedViewCount", EmitDefaultValue=false)]
        public int? AggregatedViewCount { get; set; }

        /// <summary>
        /// Gets or Sets IsPremiumRecording
        /// </summary>
        [DataMember(Name="isPremiumRecording", EmitDefaultValue=false)]
        public bool? IsPremiumRecording { get; set; }

        /// <summary>
        /// Gets or Sets ShowPremiumRecordingTag
        /// </summary>
        [DataMember(Name="showPremiumRecordingTag", EmitDefaultValue=false)]
        public bool? ShowPremiumRecordingTag { get; set; }

        /// <summary>
        /// Gets or Sets RecordingChapters
        /// </summary>
        [DataMember(Name="recordingChapters", EmitDefaultValue=false)]
        public List<RecordingRecordingChapters> RecordingChapters { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Recording {\n");
            sb.Append("  RecordingEntityId: ").Append(RecordingEntityId).Append("\n");
            sb.Append("  RecordingEntityGuid: ").Append(RecordingEntityGuid).Append("\n");
            sb.Append("  RecordingName: ").Append(RecordingName).Append("\n");
            sb.Append("  MeetingGuid: ").Append(MeetingGuid).Append("\n");
            sb.Append("  ChapterCount: ").Append(ChapterCount).Append("\n");
            sb.Append("  TotalSize: ").Append(TotalSize).Append("\n");
            sb.Append("  TotalDuration: ").Append(TotalDuration).Append("\n");
            sb.Append("  LastRecordingDate: ").Append(LastRecordingDate).Append("\n");
            sb.Append("  AggregatedStatus: ").Append(AggregatedStatus).Append("\n");
            sb.Append("  RecordingThumbnail: ").Append(RecordingThumbnail).Append("\n");
            sb.Append("  Created: ").Append(Created).Append("\n");
            sb.Append("  AggregatedViewCount: ").Append(AggregatedViewCount).Append("\n");
            sb.Append("  IsPremiumRecording: ").Append(IsPremiumRecording).Append("\n");
            sb.Append("  ShowPremiumRecordingTag: ").Append(ShowPremiumRecordingTag).Append("\n");
            sb.Append("  RecordingChapters: ").Append(RecordingChapters).Append("\n");
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
            return this.Equals(input as Recording);
        }

        /// <summary>
        /// Returns true if Recording instances are equal
        /// </summary>
        /// <param name="input">Instance of Recording to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(Recording input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.RecordingEntityId == input.RecordingEntityId ||
                    (this.RecordingEntityId != null &&
                    this.RecordingEntityId.Equals(input.RecordingEntityId))
                ) && 
                (
                    this.RecordingEntityGuid == input.RecordingEntityGuid ||
                    (this.RecordingEntityGuid != null &&
                    this.RecordingEntityGuid.Equals(input.RecordingEntityGuid))
                ) && 
                (
                    this.RecordingName == input.RecordingName ||
                    (this.RecordingName != null &&
                    this.RecordingName.Equals(input.RecordingName))
                ) && 
                (
                    this.MeetingGuid == input.MeetingGuid ||
                    (this.MeetingGuid != null &&
                    this.MeetingGuid.Equals(input.MeetingGuid))
                ) && 
                (
                    this.ChapterCount == input.ChapterCount ||
                    (this.ChapterCount != null &&
                    this.ChapterCount.Equals(input.ChapterCount))
                ) && 
                (
                    this.TotalSize == input.TotalSize ||
                    (this.TotalSize != null &&
                    this.TotalSize.Equals(input.TotalSize))
                ) && 
                (
                    this.TotalDuration == input.TotalDuration ||
                    (this.TotalDuration != null &&
                    this.TotalDuration.Equals(input.TotalDuration))
                ) && 
                (
                    this.LastRecordingDate == input.LastRecordingDate ||
                    (this.LastRecordingDate != null &&
                    this.LastRecordingDate.Equals(input.LastRecordingDate))
                ) && 
                (
                    this.AggregatedStatus == input.AggregatedStatus ||
                    (this.AggregatedStatus != null &&
                    this.AggregatedStatus.Equals(input.AggregatedStatus))
                ) && 
                (
                    this.RecordingThumbnail == input.RecordingThumbnail ||
                    (this.RecordingThumbnail != null &&
                    this.RecordingThumbnail.Equals(input.RecordingThumbnail))
                ) && 
                (
                    this.Created == input.Created ||
                    (this.Created != null &&
                    this.Created.Equals(input.Created))
                ) && 
                (
                    this.AggregatedViewCount == input.AggregatedViewCount ||
                    (this.AggregatedViewCount != null &&
                    this.AggregatedViewCount.Equals(input.AggregatedViewCount))
                ) && 
                (
                    this.IsPremiumRecording == input.IsPremiumRecording ||
                    (this.IsPremiumRecording != null &&
                    this.IsPremiumRecording.Equals(input.IsPremiumRecording))
                ) && 
                (
                    this.ShowPremiumRecordingTag == input.ShowPremiumRecordingTag ||
                    (this.ShowPremiumRecordingTag != null &&
                    this.ShowPremiumRecordingTag.Equals(input.ShowPremiumRecordingTag))
                ) && 
                (
                    this.RecordingChapters == input.RecordingChapters ||
                    this.RecordingChapters != null &&
                    this.RecordingChapters.SequenceEqual(input.RecordingChapters)
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
                if (this.RecordingEntityId != null)
                    hashCode = hashCode * 59 + this.RecordingEntityId.GetHashCode();
                if (this.RecordingEntityGuid != null)
                    hashCode = hashCode * 59 + this.RecordingEntityGuid.GetHashCode();
                if (this.RecordingName != null)
                    hashCode = hashCode * 59 + this.RecordingName.GetHashCode();
                if (this.MeetingGuid != null)
                    hashCode = hashCode * 59 + this.MeetingGuid.GetHashCode();
                if (this.ChapterCount != null)
                    hashCode = hashCode * 59 + this.ChapterCount.GetHashCode();
                if (this.TotalSize != null)
                    hashCode = hashCode * 59 + this.TotalSize.GetHashCode();
                if (this.TotalDuration != null)
                    hashCode = hashCode * 59 + this.TotalDuration.GetHashCode();
                if (this.LastRecordingDate != null)
                    hashCode = hashCode * 59 + this.LastRecordingDate.GetHashCode();
                if (this.AggregatedStatus != null)
                    hashCode = hashCode * 59 + this.AggregatedStatus.GetHashCode();
                if (this.RecordingThumbnail != null)
                    hashCode = hashCode * 59 + this.RecordingThumbnail.GetHashCode();
                if (this.Created != null)
                    hashCode = hashCode * 59 + this.Created.GetHashCode();
                if (this.AggregatedViewCount != null)
                    hashCode = hashCode * 59 + this.AggregatedViewCount.GetHashCode();
                if (this.IsPremiumRecording != null)
                    hashCode = hashCode * 59 + this.IsPremiumRecording.GetHashCode();
                if (this.ShowPremiumRecordingTag != null)
                    hashCode = hashCode * 59 + this.ShowPremiumRecordingTag.GetHashCode();
                if (this.RecordingChapters != null)
                    hashCode = hashCode * 59 + this.RecordingChapters.GetHashCode();
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
