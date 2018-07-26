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
    /// MeetingRecurrencePattern
    /// </summary>
    [DataContract]
    public partial class MeetingRecurrencePattern :  IEquatable<MeetingRecurrencePattern>, IValidatableObject
    {
        /// <summary>
        /// Defines RecurrenceType
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum RecurrenceTypeEnum
        {
            
            /// <summary>
            /// Enum DAILY for value: DAILY
            /// </summary>
            [EnumMember(Value = "DAILY")]
            DAILY = 1,
            
            /// <summary>
            /// Enum WEEKLY for value: WEEKLY
            /// </summary>
            [EnumMember(Value = "WEEKLY")]
            WEEKLY = 2,
            
            /// <summary>
            /// Enum MONTHLY for value: MONTHLY
            /// </summary>
            [EnumMember(Value = "MONTHLY")]
            MONTHLY = 3
        }

        /// <summary>
        /// Gets or Sets RecurrenceType
        /// </summary>
        [DataMember(Name="recurrenceType", EmitDefaultValue=false)]
        public RecurrenceTypeEnum? RecurrenceType { get; set; }
        /// <summary>
        /// the numerical week in the month for reoccuring meetings.
        /// </summary>
        /// <value>the numerical week in the month for reoccuring meetings.</value>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum WeekOfMonthEnum
        {
            
            /// <summary>
            /// Enum NONE for value: NONE
            /// </summary>
            [EnumMember(Value = "NONE")]
            NONE = 1,
            
            /// <summary>
            /// Enum FIRST for value: FIRST
            /// </summary>
            [EnumMember(Value = "FIRST")]
            FIRST = 2,
            
            /// <summary>
            /// Enum SECOND for value: SECOND
            /// </summary>
            [EnumMember(Value = "SECOND")]
            SECOND = 3,
            
            /// <summary>
            /// Enum THIRD for value: THIRD
            /// </summary>
            [EnumMember(Value = "THIRD")]
            THIRD = 4,
            
            /// <summary>
            /// Enum FOURTH for value: FOURTH
            /// </summary>
            [EnumMember(Value = "FOURTH")]
            FOURTH = 5,
            
            /// <summary>
            /// Enum LAST for value: LAST
            /// </summary>
            [EnumMember(Value = "LAST")]
            LAST = 6
        }

        /// <summary>
        /// the numerical week in the month for reoccuring meetings.
        /// </summary>
        /// <value>the numerical week in the month for reoccuring meetings.</value>
        [DataMember(Name="weekOfMonth", EmitDefaultValue=false)]
        public WeekOfMonthEnum? WeekOfMonth { get; set; }
        /// <summary>
        /// the month in the year for reoccurring meetings.
        /// </summary>
        /// <value>the month in the year for reoccurring meetings.</value>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum MonthOfYearEnum
        {
            
            /// <summary>
            /// Enum NONE for value: NONE
            /// </summary>
            [EnumMember(Value = "NONE")]
            NONE = 1,
            
            /// <summary>
            /// Enum JANUARY for value: JANUARY
            /// </summary>
            [EnumMember(Value = "JANUARY")]
            JANUARY = 2,
            
            /// <summary>
            /// Enum FEBRUARY for value: FEBRUARY
            /// </summary>
            [EnumMember(Value = "FEBRUARY")]
            FEBRUARY = 3,
            
            /// <summary>
            /// Enum MARCH for value: MARCH
            /// </summary>
            [EnumMember(Value = "MARCH")]
            MARCH = 4,
            
            /// <summary>
            /// Enum APRIL for value: APRIL
            /// </summary>
            [EnumMember(Value = "APRIL")]
            APRIL = 5,
            
            /// <summary>
            /// Enum MAY for value: MAY
            /// </summary>
            [EnumMember(Value = "MAY")]
            MAY = 6,
            
            /// <summary>
            /// Enum JUNE for value: JUNE
            /// </summary>
            [EnumMember(Value = "JUNE")]
            JUNE = 7,
            
            /// <summary>
            /// Enum JULY for value: JULY
            /// </summary>
            [EnumMember(Value = "JULY")]
            JULY = 8,
            
            /// <summary>
            /// Enum AUGUST for value: AUGUST
            /// </summary>
            [EnumMember(Value = "AUGUST")]
            AUGUST = 9,
            
            /// <summary>
            /// Enum SEPTEMBER for value: SEPTEMBER
            /// </summary>
            [EnumMember(Value = "SEPTEMBER")]
            SEPTEMBER = 10,
            
            /// <summary>
            /// Enum OCTOBER for value: OCTOBER
            /// </summary>
            [EnumMember(Value = "OCTOBER")]
            OCTOBER = 11,
            
            /// <summary>
            /// Enum NOVEMBER for value: NOVEMBER
            /// </summary>
            [EnumMember(Value = "NOVEMBER")]
            NOVEMBER = 12,
            
            /// <summary>
            /// Enum DECEMBER for value: DECEMBER
            /// </summary>
            [EnumMember(Value = "DECEMBER")]
            DECEMBER = 13
        }

        /// <summary>
        /// the month in the year for reoccurring meetings.
        /// </summary>
        /// <value>the month in the year for reoccurring meetings.</value>
        [DataMember(Name="monthOfYear", EmitDefaultValue=false)]
        public MonthOfYearEnum? MonthOfYear { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingRecurrencePattern" /> class.
        /// </summary>
        /// <param name="recurrenceType">recurrenceType.</param>
        /// <param name="endDate">This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings..</param>
        /// <param name="recurrenceCount">The number of reoccurring meetings.</param>
        /// <param name="frequency">the interval of reoccurring meetings..</param>
        /// <param name="daysOfWeekMask">bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64.</param>
        /// <param name="dayOfMonth">the numerical day in the month for monthly reoccurring meetings..</param>
        /// <param name="weekOfMonth">the numerical week in the month for reoccuring meetings. (default to WeekOfMonthEnum.NONE).</param>
        /// <param name="monthOfYear">the month in the year for reoccurring meetings. (default to MonthOfYearEnum.NONE).</param>
        public MeetingRecurrencePattern(RecurrenceTypeEnum? recurrenceType = default(RecurrenceTypeEnum?), int? endDate = default(int?), int? recurrenceCount = default(int?), int? frequency = default(int?), int? daysOfWeekMask = default(int?), int? dayOfMonth = default(int?), WeekOfMonthEnum? weekOfMonth = WeekOfMonthEnum.NONE, MonthOfYearEnum? monthOfYear = MonthOfYearEnum.NONE)
        {
            this.RecurrenceType = recurrenceType;
            this.EndDate = endDate;
            this.RecurrenceCount = recurrenceCount;
            this.Frequency = frequency;
            this.DaysOfWeekMask = daysOfWeekMask;
            this.DayOfMonth = dayOfMonth;
            // use default value if no "weekOfMonth" provided
            if (weekOfMonth == null)
            {
                this.WeekOfMonth = WeekOfMonthEnum.NONE;
            }
            else
            {
                this.WeekOfMonth = weekOfMonth;
            }
            // use default value if no "monthOfYear" provided
            if (monthOfYear == null)
            {
                this.MonthOfYear = MonthOfYearEnum.NONE;
            }
            else
            {
                this.MonthOfYear = monthOfYear;
            }
        }
        

        /// <summary>
        /// This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings.
        /// </summary>
        /// <value>This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings.</value>
        [DataMember(Name="endDate", EmitDefaultValue=false)]
        public int? EndDate { get; set; }

        /// <summary>
        /// The number of reoccurring meetings
        /// </summary>
        /// <value>The number of reoccurring meetings</value>
        [DataMember(Name="recurrenceCount", EmitDefaultValue=false)]
        public int? RecurrenceCount { get; set; }

        /// <summary>
        /// the interval of reoccurring meetings.
        /// </summary>
        /// <value>the interval of reoccurring meetings.</value>
        [DataMember(Name="frequency", EmitDefaultValue=false)]
        public int? Frequency { get; set; }

        /// <summary>
        /// bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64
        /// </summary>
        /// <value>bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64</value>
        [DataMember(Name="daysOfWeekMask", EmitDefaultValue=false)]
        public int? DaysOfWeekMask { get; set; }

        /// <summary>
        /// the numerical day in the month for monthly reoccurring meetings.
        /// </summary>
        /// <value>the numerical day in the month for monthly reoccurring meetings.</value>
        [DataMember(Name="dayOfMonth", EmitDefaultValue=false)]
        public int? DayOfMonth { get; set; }



        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingRecurrencePattern {\n");
            sb.Append("  RecurrenceType: ").Append(RecurrenceType).Append("\n");
            sb.Append("  EndDate: ").Append(EndDate).Append("\n");
            sb.Append("  RecurrenceCount: ").Append(RecurrenceCount).Append("\n");
            sb.Append("  Frequency: ").Append(Frequency).Append("\n");
            sb.Append("  DaysOfWeekMask: ").Append(DaysOfWeekMask).Append("\n");
            sb.Append("  DayOfMonth: ").Append(DayOfMonth).Append("\n");
            sb.Append("  WeekOfMonth: ").Append(WeekOfMonth).Append("\n");
            sb.Append("  MonthOfYear: ").Append(MonthOfYear).Append("\n");
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
            return this.Equals(input as MeetingRecurrencePattern);
        }

        /// <summary>
        /// Returns true if MeetingRecurrencePattern instances are equal
        /// </summary>
        /// <param name="input">Instance of MeetingRecurrencePattern to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingRecurrencePattern input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.RecurrenceType == input.RecurrenceType ||
                    (this.RecurrenceType != null &&
                    this.RecurrenceType.Equals(input.RecurrenceType))
                ) && 
                (
                    this.EndDate == input.EndDate ||
                    (this.EndDate != null &&
                    this.EndDate.Equals(input.EndDate))
                ) && 
                (
                    this.RecurrenceCount == input.RecurrenceCount ||
                    (this.RecurrenceCount != null &&
                    this.RecurrenceCount.Equals(input.RecurrenceCount))
                ) && 
                (
                    this.Frequency == input.Frequency ||
                    (this.Frequency != null &&
                    this.Frequency.Equals(input.Frequency))
                ) && 
                (
                    this.DaysOfWeekMask == input.DaysOfWeekMask ||
                    (this.DaysOfWeekMask != null &&
                    this.DaysOfWeekMask.Equals(input.DaysOfWeekMask))
                ) && 
                (
                    this.DayOfMonth == input.DayOfMonth ||
                    (this.DayOfMonth != null &&
                    this.DayOfMonth.Equals(input.DayOfMonth))
                ) && 
                (
                    this.WeekOfMonth == input.WeekOfMonth ||
                    (this.WeekOfMonth != null &&
                    this.WeekOfMonth.Equals(input.WeekOfMonth))
                ) && 
                (
                    this.MonthOfYear == input.MonthOfYear ||
                    (this.MonthOfYear != null &&
                    this.MonthOfYear.Equals(input.MonthOfYear))
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
                if (this.RecurrenceType != null)
                    hashCode = hashCode * 59 + this.RecurrenceType.GetHashCode();
                if (this.EndDate != null)
                    hashCode = hashCode * 59 + this.EndDate.GetHashCode();
                if (this.RecurrenceCount != null)
                    hashCode = hashCode * 59 + this.RecurrenceCount.GetHashCode();
                if (this.Frequency != null)
                    hashCode = hashCode * 59 + this.Frequency.GetHashCode();
                if (this.DaysOfWeekMask != null)
                    hashCode = hashCode * 59 + this.DaysOfWeekMask.GetHashCode();
                if (this.DayOfMonth != null)
                    hashCode = hashCode * 59 + this.DayOfMonth.GetHashCode();
                if (this.WeekOfMonth != null)
                    hashCode = hashCode * 59 + this.WeekOfMonth.GetHashCode();
                if (this.MonthOfYear != null)
                    hashCode = hashCode * 59 + this.MonthOfYear.GetHashCode();
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
