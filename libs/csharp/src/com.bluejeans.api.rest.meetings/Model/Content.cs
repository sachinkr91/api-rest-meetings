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
    /// Content
    /// </summary>
    [DataContract]
    public partial class Content :  IEquatable<Content>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="Content" /> class.
        /// </summary>
        /// <param name="Id">Id.</param>
        /// <param name="ContentType">ContentType.</param>
        /// <param name="ContentDescription">ContentDescription.</param>
        /// <param name="ContentUrl">ContentUrl.</param>
        /// <param name="UserId">UserId.</param>
        /// <param name="ContentLocation">ContentLocation.</param>
        /// <param name="Created">Created.</param>
        /// <param name="Modified">Modified.</param>
        /// <param name="ContentStatus">ContentStatus.</param>
        /// <param name="ContentName">ContentName.</param>
        /// <param name="ContentCategory">ContentCategory.</param>
        /// <param name="ContentSize">ContentSize.</param>
        /// <param name="ContentDuration">ContentDuration.</param>
        /// <param name="ContentProperties">ContentProperties.</param>
        public Content(int? Id = default(int?), string ContentType = default(string), string ContentDescription = default(string), string ContentUrl = default(string), int? UserId = default(int?), string ContentLocation = default(string), int? Created = default(int?), int? Modified = default(int?), string ContentStatus = default(string), string ContentName = default(string), string ContentCategory = default(string), int? ContentSize = default(int?), int? ContentDuration = default(int?), ContentContentProperties ContentProperties = default(ContentContentProperties))
        {
            this.Id = Id;
            this.ContentType = ContentType;
            this.ContentDescription = ContentDescription;
            this.ContentUrl = ContentUrl;
            this.UserId = UserId;
            this.ContentLocation = ContentLocation;
            this.Created = Created;
            this.Modified = Modified;
            this.ContentStatus = ContentStatus;
            this.ContentName = ContentName;
            this.ContentCategory = ContentCategory;
            this.ContentSize = ContentSize;
            this.ContentDuration = ContentDuration;
            this.ContentProperties = ContentProperties;
        }
        
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }

        /// <summary>
        /// Gets or Sets ContentType
        /// </summary>
        [DataMember(Name="contentType", EmitDefaultValue=false)]
        public string ContentType { get; set; }

        /// <summary>
        /// Gets or Sets ContentDescription
        /// </summary>
        [DataMember(Name="contentDescription", EmitDefaultValue=false)]
        public string ContentDescription { get; set; }

        /// <summary>
        /// Gets or Sets ContentUrl
        /// </summary>
        [DataMember(Name="contentUrl", EmitDefaultValue=false)]
        public string ContentUrl { get; set; }

        /// <summary>
        /// Gets or Sets UserId
        /// </summary>
        [DataMember(Name="userId", EmitDefaultValue=false)]
        public int? UserId { get; set; }

        /// <summary>
        /// Gets or Sets ContentLocation
        /// </summary>
        [DataMember(Name="contentLocation", EmitDefaultValue=false)]
        public string ContentLocation { get; set; }

        /// <summary>
        /// Gets or Sets Created
        /// </summary>
        [DataMember(Name="created", EmitDefaultValue=false)]
        public int? Created { get; set; }

        /// <summary>
        /// Gets or Sets Modified
        /// </summary>
        [DataMember(Name="modified", EmitDefaultValue=false)]
        public int? Modified { get; set; }

        /// <summary>
        /// Gets or Sets ContentStatus
        /// </summary>
        [DataMember(Name="contentStatus", EmitDefaultValue=false)]
        public string ContentStatus { get; set; }

        /// <summary>
        /// Gets or Sets ContentName
        /// </summary>
        [DataMember(Name="contentName", EmitDefaultValue=false)]
        public string ContentName { get; set; }

        /// <summary>
        /// Gets or Sets ContentCategory
        /// </summary>
        [DataMember(Name="contentCategory", EmitDefaultValue=false)]
        public string ContentCategory { get; set; }

        /// <summary>
        /// Gets or Sets ContentSize
        /// </summary>
        [DataMember(Name="contentSize", EmitDefaultValue=false)]
        public int? ContentSize { get; set; }

        /// <summary>
        /// Gets or Sets ContentDuration
        /// </summary>
        [DataMember(Name="contentDuration", EmitDefaultValue=false)]
        public int? ContentDuration { get; set; }

        /// <summary>
        /// Gets or Sets ContentProperties
        /// </summary>
        [DataMember(Name="contentProperties", EmitDefaultValue=false)]
        public ContentContentProperties ContentProperties { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Content {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  ContentType: ").Append(ContentType).Append("\n");
            sb.Append("  ContentDescription: ").Append(ContentDescription).Append("\n");
            sb.Append("  ContentUrl: ").Append(ContentUrl).Append("\n");
            sb.Append("  UserId: ").Append(UserId).Append("\n");
            sb.Append("  ContentLocation: ").Append(ContentLocation).Append("\n");
            sb.Append("  Created: ").Append(Created).Append("\n");
            sb.Append("  Modified: ").Append(Modified).Append("\n");
            sb.Append("  ContentStatus: ").Append(ContentStatus).Append("\n");
            sb.Append("  ContentName: ").Append(ContentName).Append("\n");
            sb.Append("  ContentCategory: ").Append(ContentCategory).Append("\n");
            sb.Append("  ContentSize: ").Append(ContentSize).Append("\n");
            sb.Append("  ContentDuration: ").Append(ContentDuration).Append("\n");
            sb.Append("  ContentProperties: ").Append(ContentProperties).Append("\n");
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
            return this.Equals(obj as Content);
        }

        /// <summary>
        /// Returns true if Content instances are equal
        /// </summary>
        /// <param name="other">Instance of Content to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(Content other)
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
                    this.ContentType == other.ContentType ||
                    this.ContentType != null &&
                    this.ContentType.Equals(other.ContentType)
                ) && 
                (
                    this.ContentDescription == other.ContentDescription ||
                    this.ContentDescription != null &&
                    this.ContentDescription.Equals(other.ContentDescription)
                ) && 
                (
                    this.ContentUrl == other.ContentUrl ||
                    this.ContentUrl != null &&
                    this.ContentUrl.Equals(other.ContentUrl)
                ) && 
                (
                    this.UserId == other.UserId ||
                    this.UserId != null &&
                    this.UserId.Equals(other.UserId)
                ) && 
                (
                    this.ContentLocation == other.ContentLocation ||
                    this.ContentLocation != null &&
                    this.ContentLocation.Equals(other.ContentLocation)
                ) && 
                (
                    this.Created == other.Created ||
                    this.Created != null &&
                    this.Created.Equals(other.Created)
                ) && 
                (
                    this.Modified == other.Modified ||
                    this.Modified != null &&
                    this.Modified.Equals(other.Modified)
                ) && 
                (
                    this.ContentStatus == other.ContentStatus ||
                    this.ContentStatus != null &&
                    this.ContentStatus.Equals(other.ContentStatus)
                ) && 
                (
                    this.ContentName == other.ContentName ||
                    this.ContentName != null &&
                    this.ContentName.Equals(other.ContentName)
                ) && 
                (
                    this.ContentCategory == other.ContentCategory ||
                    this.ContentCategory != null &&
                    this.ContentCategory.Equals(other.ContentCategory)
                ) && 
                (
                    this.ContentSize == other.ContentSize ||
                    this.ContentSize != null &&
                    this.ContentSize.Equals(other.ContentSize)
                ) && 
                (
                    this.ContentDuration == other.ContentDuration ||
                    this.ContentDuration != null &&
                    this.ContentDuration.Equals(other.ContentDuration)
                ) && 
                (
                    this.ContentProperties == other.ContentProperties ||
                    this.ContentProperties != null &&
                    this.ContentProperties.Equals(other.ContentProperties)
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
                if (this.ContentType != null)
                    hash = hash * 59 + this.ContentType.GetHashCode();
                if (this.ContentDescription != null)
                    hash = hash * 59 + this.ContentDescription.GetHashCode();
                if (this.ContentUrl != null)
                    hash = hash * 59 + this.ContentUrl.GetHashCode();
                if (this.UserId != null)
                    hash = hash * 59 + this.UserId.GetHashCode();
                if (this.ContentLocation != null)
                    hash = hash * 59 + this.ContentLocation.GetHashCode();
                if (this.Created != null)
                    hash = hash * 59 + this.Created.GetHashCode();
                if (this.Modified != null)
                    hash = hash * 59 + this.Modified.GetHashCode();
                if (this.ContentStatus != null)
                    hash = hash * 59 + this.ContentStatus.GetHashCode();
                if (this.ContentName != null)
                    hash = hash * 59 + this.ContentName.GetHashCode();
                if (this.ContentCategory != null)
                    hash = hash * 59 + this.ContentCategory.GetHashCode();
                if (this.ContentSize != null)
                    hash = hash * 59 + this.ContentSize.GetHashCode();
                if (this.ContentDuration != null)
                    hash = hash * 59 + this.ContentDuration.GetHashCode();
                if (this.ContentProperties != null)
                    hash = hash * 59 + this.ContentProperties.GetHashCode();
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
