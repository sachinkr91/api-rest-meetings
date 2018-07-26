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
    /// ContentContentProperties
    /// </summary>
    [DataContract]
    public partial class ContentContentProperties :  IEquatable<ContentContentProperties>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ContentContentProperties" /> class.
        /// </summary>
        /// <param name="duration">duration.</param>
        /// <param name="thumbnail">thumbnail.</param>
        /// <param name="thumbnailSprite">thumbnailSprite.</param>
        /// <param name="hdsUrl">hdsUrl.</param>
        /// <param name="thumbnailCount">thumbnailCount.</param>
        /// <param name="thumbnailWidth">thumbnailWidth.</param>
        /// <param name="thumbnailHeight">thumbnailHeight.</param>
        /// <param name="thumbnailInterval">thumbnailInterval.</param>
        /// <param name="hlsUrl">hlsUrl.</param>
        /// <param name="levels">levels.</param>
        public ContentContentProperties(int? duration = default(int?), string thumbnail = default(string), string thumbnailSprite = default(string), string hdsUrl = default(string), int? thumbnailCount = default(int?), int? thumbnailWidth = default(int?), int? thumbnailHeight = default(int?), int? thumbnailInterval = default(int?), string hlsUrl = default(string), List<ContentContentPropertiesLevels> levels = default(List<ContentContentPropertiesLevels>))
        {
            this.Duration = duration;
            this.Thumbnail = thumbnail;
            this.ThumbnailSprite = thumbnailSprite;
            this.HdsUrl = hdsUrl;
            this.ThumbnailCount = thumbnailCount;
            this.ThumbnailWidth = thumbnailWidth;
            this.ThumbnailHeight = thumbnailHeight;
            this.ThumbnailInterval = thumbnailInterval;
            this.HlsUrl = hlsUrl;
            this.Levels = levels;
        }
        
        /// <summary>
        /// Gets or Sets Duration
        /// </summary>
        [DataMember(Name="duration", EmitDefaultValue=false)]
        public int? Duration { get; set; }

        /// <summary>
        /// Gets or Sets Thumbnail
        /// </summary>
        [DataMember(Name="thumbnail", EmitDefaultValue=false)]
        public string Thumbnail { get; set; }

        /// <summary>
        /// Gets or Sets ThumbnailSprite
        /// </summary>
        [DataMember(Name="thumbnailSprite", EmitDefaultValue=false)]
        public string ThumbnailSprite { get; set; }

        /// <summary>
        /// Gets or Sets HdsUrl
        /// </summary>
        [DataMember(Name="hdsUrl", EmitDefaultValue=false)]
        public string HdsUrl { get; set; }

        /// <summary>
        /// Gets or Sets ThumbnailCount
        /// </summary>
        [DataMember(Name="thumbnailCount", EmitDefaultValue=false)]
        public int? ThumbnailCount { get; set; }

        /// <summary>
        /// Gets or Sets ThumbnailWidth
        /// </summary>
        [DataMember(Name="thumbnailWidth", EmitDefaultValue=false)]
        public int? ThumbnailWidth { get; set; }

        /// <summary>
        /// Gets or Sets ThumbnailHeight
        /// </summary>
        [DataMember(Name="thumbnailHeight", EmitDefaultValue=false)]
        public int? ThumbnailHeight { get; set; }

        /// <summary>
        /// Gets or Sets ThumbnailInterval
        /// </summary>
        [DataMember(Name="thumbnailInterval", EmitDefaultValue=false)]
        public int? ThumbnailInterval { get; set; }

        /// <summary>
        /// Gets or Sets HlsUrl
        /// </summary>
        [DataMember(Name="hlsUrl", EmitDefaultValue=false)]
        public string HlsUrl { get; set; }

        /// <summary>
        /// Gets or Sets Levels
        /// </summary>
        [DataMember(Name="levels", EmitDefaultValue=false)]
        public List<ContentContentPropertiesLevels> Levels { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class ContentContentProperties {\n");
            sb.Append("  Duration: ").Append(Duration).Append("\n");
            sb.Append("  Thumbnail: ").Append(Thumbnail).Append("\n");
            sb.Append("  ThumbnailSprite: ").Append(ThumbnailSprite).Append("\n");
            sb.Append("  HdsUrl: ").Append(HdsUrl).Append("\n");
            sb.Append("  ThumbnailCount: ").Append(ThumbnailCount).Append("\n");
            sb.Append("  ThumbnailWidth: ").Append(ThumbnailWidth).Append("\n");
            sb.Append("  ThumbnailHeight: ").Append(ThumbnailHeight).Append("\n");
            sb.Append("  ThumbnailInterval: ").Append(ThumbnailInterval).Append("\n");
            sb.Append("  HlsUrl: ").Append(HlsUrl).Append("\n");
            sb.Append("  Levels: ").Append(Levels).Append("\n");
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
            return this.Equals(input as ContentContentProperties);
        }

        /// <summary>
        /// Returns true if ContentContentProperties instances are equal
        /// </summary>
        /// <param name="input">Instance of ContentContentProperties to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ContentContentProperties input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Duration == input.Duration ||
                    (this.Duration != null &&
                    this.Duration.Equals(input.Duration))
                ) && 
                (
                    this.Thumbnail == input.Thumbnail ||
                    (this.Thumbnail != null &&
                    this.Thumbnail.Equals(input.Thumbnail))
                ) && 
                (
                    this.ThumbnailSprite == input.ThumbnailSprite ||
                    (this.ThumbnailSprite != null &&
                    this.ThumbnailSprite.Equals(input.ThumbnailSprite))
                ) && 
                (
                    this.HdsUrl == input.HdsUrl ||
                    (this.HdsUrl != null &&
                    this.HdsUrl.Equals(input.HdsUrl))
                ) && 
                (
                    this.ThumbnailCount == input.ThumbnailCount ||
                    (this.ThumbnailCount != null &&
                    this.ThumbnailCount.Equals(input.ThumbnailCount))
                ) && 
                (
                    this.ThumbnailWidth == input.ThumbnailWidth ||
                    (this.ThumbnailWidth != null &&
                    this.ThumbnailWidth.Equals(input.ThumbnailWidth))
                ) && 
                (
                    this.ThumbnailHeight == input.ThumbnailHeight ||
                    (this.ThumbnailHeight != null &&
                    this.ThumbnailHeight.Equals(input.ThumbnailHeight))
                ) && 
                (
                    this.ThumbnailInterval == input.ThumbnailInterval ||
                    (this.ThumbnailInterval != null &&
                    this.ThumbnailInterval.Equals(input.ThumbnailInterval))
                ) && 
                (
                    this.HlsUrl == input.HlsUrl ||
                    (this.HlsUrl != null &&
                    this.HlsUrl.Equals(input.HlsUrl))
                ) && 
                (
                    this.Levels == input.Levels ||
                    this.Levels != null &&
                    this.Levels.SequenceEqual(input.Levels)
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
                if (this.Duration != null)
                    hashCode = hashCode * 59 + this.Duration.GetHashCode();
                if (this.Thumbnail != null)
                    hashCode = hashCode * 59 + this.Thumbnail.GetHashCode();
                if (this.ThumbnailSprite != null)
                    hashCode = hashCode * 59 + this.ThumbnailSprite.GetHashCode();
                if (this.HdsUrl != null)
                    hashCode = hashCode * 59 + this.HdsUrl.GetHashCode();
                if (this.ThumbnailCount != null)
                    hashCode = hashCode * 59 + this.ThumbnailCount.GetHashCode();
                if (this.ThumbnailWidth != null)
                    hashCode = hashCode * 59 + this.ThumbnailWidth.GetHashCode();
                if (this.ThumbnailHeight != null)
                    hashCode = hashCode * 59 + this.ThumbnailHeight.GetHashCode();
                if (this.ThumbnailInterval != null)
                    hashCode = hashCode * 59 + this.ThumbnailInterval.GetHashCode();
                if (this.HlsUrl != null)
                    hashCode = hashCode * 59 + this.HlsUrl.GetHashCode();
                if (this.Levels != null)
                    hashCode = hashCode * 59 + this.Levels.GetHashCode();
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
