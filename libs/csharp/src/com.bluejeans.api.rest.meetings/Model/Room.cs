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
    /// Room
    /// </summary>
    [DataContract]
    public partial class Room :  IEquatable<Room>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="Room" /> class.
        /// </summary>
        /// <param name="numericId">Unique identifier for room..</param>
        /// <param name="name">Name of the room..</param>
        /// <param name="originPopId">originPopId.</param>
        /// <param name="isLargeMeeting">isLargeMeeting.</param>
        /// <param name="showVideoAnimations">showVideoAnimations.</param>
        /// <param name="backgroundImage">backgroundImage.</param>
        /// <param name="isModeratorLess">isModeratorLess.</param>
        /// <param name="welcomeMessage">welcomeMessage.</param>
        /// <param name="disallowChat">disallowChat.</param>
        /// <param name="encryptionType">encryptionType.</param>
        /// <param name="showAllParticipantsInIcs">showAllParticipantsInIcs.</param>
        /// <param name="participantPasscode">participantPasscode.</param>
        /// <param name="publishMeeting">publishMeeting.</param>
        /// <param name="moderatorLess">moderatorLess.</param>
        /// <param name="videoBestFit">videoBestFit.</param>
        /// <param name="muteParticipantsOnEntry">muteParticipantsOnEntry.</param>
        /// <param name="enforceMeetingEncryption">enforceMeetingEncryption.</param>
        /// <param name="enforceMeetingEncryptionAllowPSTN">enforceMeetingEncryptionAllowPSTN.</param>
        /// <param name="idleTimeout">idleTimeout.</param>
        /// <param name="defaultLayout">defaultLayout.</param>
        /// <param name="playAudioAlerts">playAudioAlerts.</param>
        /// <param name="personalMeetingId">personalMeetingId.</param>
        /// <param name="moderatorPasscode">moderatorPasscode.</param>
        public Room(string numericId = default(string), string name = default(string), int? originPopId = default(int?), bool? isLargeMeeting = default(bool?), bool? showVideoAnimations = default(bool?), string backgroundImage = default(string), bool? isModeratorLess = default(bool?), string welcomeMessage = default(string), bool? disallowChat = default(bool?), string encryptionType = default(string), bool? showAllParticipantsInIcs = default(bool?), string participantPasscode = default(string), bool? publishMeeting = default(bool?), bool? moderatorLess = default(bool?), bool? videoBestFit = default(bool?), bool? muteParticipantsOnEntry = default(bool?), bool? enforceMeetingEncryption = default(bool?), bool? enforceMeetingEncryptionAllowPSTN = default(bool?), int? idleTimeout = default(int?), string defaultLayout = default(string), bool? playAudioAlerts = default(bool?), int? personalMeetingId = default(int?), string moderatorPasscode = default(string))
        {
            this.NumericId = numericId;
            this.Name = name;
            this.OriginPopId = originPopId;
            this.IsLargeMeeting = isLargeMeeting;
            this.ShowVideoAnimations = showVideoAnimations;
            this.BackgroundImage = backgroundImage;
            this.IsModeratorLess = isModeratorLess;
            this.WelcomeMessage = welcomeMessage;
            this.DisallowChat = disallowChat;
            this.EncryptionType = encryptionType;
            this.ShowAllParticipantsInIcs = showAllParticipantsInIcs;
            this.ParticipantPasscode = participantPasscode;
            this.PublishMeeting = publishMeeting;
            this.ModeratorLess = moderatorLess;
            this.VideoBestFit = videoBestFit;
            this.MuteParticipantsOnEntry = muteParticipantsOnEntry;
            this.EnforceMeetingEncryption = enforceMeetingEncryption;
            this.EnforceMeetingEncryptionAllowPSTN = enforceMeetingEncryptionAllowPSTN;
            this.IdleTimeout = idleTimeout;
            this.DefaultLayout = defaultLayout;
            this.PlayAudioAlerts = playAudioAlerts;
            this.PersonalMeetingId = personalMeetingId;
            this.ModeratorPasscode = moderatorPasscode;
        }
        
        /// <summary>
        /// Unique identifier for room.
        /// </summary>
        /// <value>Unique identifier for room.</value>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; private set; }

        /// <summary>
        /// Unique identifier for room.
        /// </summary>
        /// <value>Unique identifier for room.</value>
        [DataMember(Name="numericId", EmitDefaultValue=false)]
        public string NumericId { get; set; }

        /// <summary>
        /// Name of the room.
        /// </summary>
        /// <value>Name of the room.</value>
        [DataMember(Name="name", EmitDefaultValue=false)]
        public string Name { get; set; }

        /// <summary>
        /// Gets or Sets OriginPopId
        /// </summary>
        [DataMember(Name="originPopId", EmitDefaultValue=false)]
        public int? OriginPopId { get; set; }

        /// <summary>
        /// Gets or Sets IsLargeMeeting
        /// </summary>
        [DataMember(Name="isLargeMeeting", EmitDefaultValue=false)]
        public bool? IsLargeMeeting { get; set; }

        /// <summary>
        /// Gets or Sets ShowVideoAnimations
        /// </summary>
        [DataMember(Name="showVideoAnimations", EmitDefaultValue=false)]
        public bool? ShowVideoAnimations { get; set; }

        /// <summary>
        /// Gets or Sets BackgroundImage
        /// </summary>
        [DataMember(Name="backgroundImage", EmitDefaultValue=false)]
        public string BackgroundImage { get; set; }

        /// <summary>
        /// Gets or Sets IsModeratorLess
        /// </summary>
        [DataMember(Name="isModeratorLess", EmitDefaultValue=false)]
        public bool? IsModeratorLess { get; set; }

        /// <summary>
        /// Gets or Sets WelcomeMessage
        /// </summary>
        [DataMember(Name="welcomeMessage", EmitDefaultValue=false)]
        public string WelcomeMessage { get; set; }

        /// <summary>
        /// Gets or Sets DisallowChat
        /// </summary>
        [DataMember(Name="disallowChat", EmitDefaultValue=false)]
        public bool? DisallowChat { get; set; }

        /// <summary>
        /// Gets or Sets EncryptionType
        /// </summary>
        [DataMember(Name="encryptionType", EmitDefaultValue=false)]
        public string EncryptionType { get; set; }

        /// <summary>
        /// Gets or Sets ShowAllParticipantsInIcs
        /// </summary>
        [DataMember(Name="showAllParticipantsInIcs", EmitDefaultValue=false)]
        public bool? ShowAllParticipantsInIcs { get; set; }

        /// <summary>
        /// Gets or Sets ParticipantPasscode
        /// </summary>
        [DataMember(Name="participantPasscode", EmitDefaultValue=false)]
        public string ParticipantPasscode { get; set; }

        /// <summary>
        /// Gets or Sets PublishMeeting
        /// </summary>
        [DataMember(Name="publishMeeting", EmitDefaultValue=false)]
        public bool? PublishMeeting { get; set; }

        /// <summary>
        /// Gets or Sets ModeratorLess
        /// </summary>
        [DataMember(Name="moderatorLess", EmitDefaultValue=false)]
        public bool? ModeratorLess { get; set; }

        /// <summary>
        /// Gets or Sets VideoBestFit
        /// </summary>
        [DataMember(Name="videoBestFit", EmitDefaultValue=false)]
        public bool? VideoBestFit { get; set; }

        /// <summary>
        /// Gets or Sets MuteParticipantsOnEntry
        /// </summary>
        [DataMember(Name="muteParticipantsOnEntry", EmitDefaultValue=false)]
        public bool? MuteParticipantsOnEntry { get; set; }

        /// <summary>
        /// Gets or Sets EnforceMeetingEncryption
        /// </summary>
        [DataMember(Name="enforceMeetingEncryption", EmitDefaultValue=false)]
        public bool? EnforceMeetingEncryption { get; set; }

        /// <summary>
        /// Gets or Sets EnforceMeetingEncryptionAllowPSTN
        /// </summary>
        [DataMember(Name="enforceMeetingEncryptionAllowPSTN", EmitDefaultValue=false)]
        public bool? EnforceMeetingEncryptionAllowPSTN { get; set; }

        /// <summary>
        /// Gets or Sets IdleTimeout
        /// </summary>
        [DataMember(Name="idleTimeout", EmitDefaultValue=false)]
        public int? IdleTimeout { get; set; }

        /// <summary>
        /// Gets or Sets DefaultLayout
        /// </summary>
        [DataMember(Name="defaultLayout", EmitDefaultValue=false)]
        public string DefaultLayout { get; set; }

        /// <summary>
        /// Gets or Sets PlayAudioAlerts
        /// </summary>
        [DataMember(Name="playAudioAlerts", EmitDefaultValue=false)]
        public bool? PlayAudioAlerts { get; set; }

        /// <summary>
        /// Gets or Sets PersonalMeetingId
        /// </summary>
        [DataMember(Name="personalMeetingId", EmitDefaultValue=false)]
        public int? PersonalMeetingId { get; set; }

        /// <summary>
        /// Gets or Sets ModeratorPasscode
        /// </summary>
        [DataMember(Name="moderatorPasscode", EmitDefaultValue=false)]
        public string ModeratorPasscode { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Room {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  NumericId: ").Append(NumericId).Append("\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  OriginPopId: ").Append(OriginPopId).Append("\n");
            sb.Append("  IsLargeMeeting: ").Append(IsLargeMeeting).Append("\n");
            sb.Append("  ShowVideoAnimations: ").Append(ShowVideoAnimations).Append("\n");
            sb.Append("  BackgroundImage: ").Append(BackgroundImage).Append("\n");
            sb.Append("  IsModeratorLess: ").Append(IsModeratorLess).Append("\n");
            sb.Append("  WelcomeMessage: ").Append(WelcomeMessage).Append("\n");
            sb.Append("  DisallowChat: ").Append(DisallowChat).Append("\n");
            sb.Append("  EncryptionType: ").Append(EncryptionType).Append("\n");
            sb.Append("  ShowAllParticipantsInIcs: ").Append(ShowAllParticipantsInIcs).Append("\n");
            sb.Append("  ParticipantPasscode: ").Append(ParticipantPasscode).Append("\n");
            sb.Append("  PublishMeeting: ").Append(PublishMeeting).Append("\n");
            sb.Append("  ModeratorLess: ").Append(ModeratorLess).Append("\n");
            sb.Append("  VideoBestFit: ").Append(VideoBestFit).Append("\n");
            sb.Append("  MuteParticipantsOnEntry: ").Append(MuteParticipantsOnEntry).Append("\n");
            sb.Append("  EnforceMeetingEncryption: ").Append(EnforceMeetingEncryption).Append("\n");
            sb.Append("  EnforceMeetingEncryptionAllowPSTN: ").Append(EnforceMeetingEncryptionAllowPSTN).Append("\n");
            sb.Append("  IdleTimeout: ").Append(IdleTimeout).Append("\n");
            sb.Append("  DefaultLayout: ").Append(DefaultLayout).Append("\n");
            sb.Append("  PlayAudioAlerts: ").Append(PlayAudioAlerts).Append("\n");
            sb.Append("  PersonalMeetingId: ").Append(PersonalMeetingId).Append("\n");
            sb.Append("  ModeratorPasscode: ").Append(ModeratorPasscode).Append("\n");
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
            return this.Equals(input as Room);
        }

        /// <summary>
        /// Returns true if Room instances are equal
        /// </summary>
        /// <param name="input">Instance of Room to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(Room input)
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
                    this.NumericId == input.NumericId ||
                    (this.NumericId != null &&
                    this.NumericId.Equals(input.NumericId))
                ) && 
                (
                    this.Name == input.Name ||
                    (this.Name != null &&
                    this.Name.Equals(input.Name))
                ) && 
                (
                    this.OriginPopId == input.OriginPopId ||
                    (this.OriginPopId != null &&
                    this.OriginPopId.Equals(input.OriginPopId))
                ) && 
                (
                    this.IsLargeMeeting == input.IsLargeMeeting ||
                    (this.IsLargeMeeting != null &&
                    this.IsLargeMeeting.Equals(input.IsLargeMeeting))
                ) && 
                (
                    this.ShowVideoAnimations == input.ShowVideoAnimations ||
                    (this.ShowVideoAnimations != null &&
                    this.ShowVideoAnimations.Equals(input.ShowVideoAnimations))
                ) && 
                (
                    this.BackgroundImage == input.BackgroundImage ||
                    (this.BackgroundImage != null &&
                    this.BackgroundImage.Equals(input.BackgroundImage))
                ) && 
                (
                    this.IsModeratorLess == input.IsModeratorLess ||
                    (this.IsModeratorLess != null &&
                    this.IsModeratorLess.Equals(input.IsModeratorLess))
                ) && 
                (
                    this.WelcomeMessage == input.WelcomeMessage ||
                    (this.WelcomeMessage != null &&
                    this.WelcomeMessage.Equals(input.WelcomeMessage))
                ) && 
                (
                    this.DisallowChat == input.DisallowChat ||
                    (this.DisallowChat != null &&
                    this.DisallowChat.Equals(input.DisallowChat))
                ) && 
                (
                    this.EncryptionType == input.EncryptionType ||
                    (this.EncryptionType != null &&
                    this.EncryptionType.Equals(input.EncryptionType))
                ) && 
                (
                    this.ShowAllParticipantsInIcs == input.ShowAllParticipantsInIcs ||
                    (this.ShowAllParticipantsInIcs != null &&
                    this.ShowAllParticipantsInIcs.Equals(input.ShowAllParticipantsInIcs))
                ) && 
                (
                    this.ParticipantPasscode == input.ParticipantPasscode ||
                    (this.ParticipantPasscode != null &&
                    this.ParticipantPasscode.Equals(input.ParticipantPasscode))
                ) && 
                (
                    this.PublishMeeting == input.PublishMeeting ||
                    (this.PublishMeeting != null &&
                    this.PublishMeeting.Equals(input.PublishMeeting))
                ) && 
                (
                    this.ModeratorLess == input.ModeratorLess ||
                    (this.ModeratorLess != null &&
                    this.ModeratorLess.Equals(input.ModeratorLess))
                ) && 
                (
                    this.VideoBestFit == input.VideoBestFit ||
                    (this.VideoBestFit != null &&
                    this.VideoBestFit.Equals(input.VideoBestFit))
                ) && 
                (
                    this.MuteParticipantsOnEntry == input.MuteParticipantsOnEntry ||
                    (this.MuteParticipantsOnEntry != null &&
                    this.MuteParticipantsOnEntry.Equals(input.MuteParticipantsOnEntry))
                ) && 
                (
                    this.EnforceMeetingEncryption == input.EnforceMeetingEncryption ||
                    (this.EnforceMeetingEncryption != null &&
                    this.EnforceMeetingEncryption.Equals(input.EnforceMeetingEncryption))
                ) && 
                (
                    this.EnforceMeetingEncryptionAllowPSTN == input.EnforceMeetingEncryptionAllowPSTN ||
                    (this.EnforceMeetingEncryptionAllowPSTN != null &&
                    this.EnforceMeetingEncryptionAllowPSTN.Equals(input.EnforceMeetingEncryptionAllowPSTN))
                ) && 
                (
                    this.IdleTimeout == input.IdleTimeout ||
                    (this.IdleTimeout != null &&
                    this.IdleTimeout.Equals(input.IdleTimeout))
                ) && 
                (
                    this.DefaultLayout == input.DefaultLayout ||
                    (this.DefaultLayout != null &&
                    this.DefaultLayout.Equals(input.DefaultLayout))
                ) && 
                (
                    this.PlayAudioAlerts == input.PlayAudioAlerts ||
                    (this.PlayAudioAlerts != null &&
                    this.PlayAudioAlerts.Equals(input.PlayAudioAlerts))
                ) && 
                (
                    this.PersonalMeetingId == input.PersonalMeetingId ||
                    (this.PersonalMeetingId != null &&
                    this.PersonalMeetingId.Equals(input.PersonalMeetingId))
                ) && 
                (
                    this.ModeratorPasscode == input.ModeratorPasscode ||
                    (this.ModeratorPasscode != null &&
                    this.ModeratorPasscode.Equals(input.ModeratorPasscode))
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
                if (this.NumericId != null)
                    hashCode = hashCode * 59 + this.NumericId.GetHashCode();
                if (this.Name != null)
                    hashCode = hashCode * 59 + this.Name.GetHashCode();
                if (this.OriginPopId != null)
                    hashCode = hashCode * 59 + this.OriginPopId.GetHashCode();
                if (this.IsLargeMeeting != null)
                    hashCode = hashCode * 59 + this.IsLargeMeeting.GetHashCode();
                if (this.ShowVideoAnimations != null)
                    hashCode = hashCode * 59 + this.ShowVideoAnimations.GetHashCode();
                if (this.BackgroundImage != null)
                    hashCode = hashCode * 59 + this.BackgroundImage.GetHashCode();
                if (this.IsModeratorLess != null)
                    hashCode = hashCode * 59 + this.IsModeratorLess.GetHashCode();
                if (this.WelcomeMessage != null)
                    hashCode = hashCode * 59 + this.WelcomeMessage.GetHashCode();
                if (this.DisallowChat != null)
                    hashCode = hashCode * 59 + this.DisallowChat.GetHashCode();
                if (this.EncryptionType != null)
                    hashCode = hashCode * 59 + this.EncryptionType.GetHashCode();
                if (this.ShowAllParticipantsInIcs != null)
                    hashCode = hashCode * 59 + this.ShowAllParticipantsInIcs.GetHashCode();
                if (this.ParticipantPasscode != null)
                    hashCode = hashCode * 59 + this.ParticipantPasscode.GetHashCode();
                if (this.PublishMeeting != null)
                    hashCode = hashCode * 59 + this.PublishMeeting.GetHashCode();
                if (this.ModeratorLess != null)
                    hashCode = hashCode * 59 + this.ModeratorLess.GetHashCode();
                if (this.VideoBestFit != null)
                    hashCode = hashCode * 59 + this.VideoBestFit.GetHashCode();
                if (this.MuteParticipantsOnEntry != null)
                    hashCode = hashCode * 59 + this.MuteParticipantsOnEntry.GetHashCode();
                if (this.EnforceMeetingEncryption != null)
                    hashCode = hashCode * 59 + this.EnforceMeetingEncryption.GetHashCode();
                if (this.EnforceMeetingEncryptionAllowPSTN != null)
                    hashCode = hashCode * 59 + this.EnforceMeetingEncryptionAllowPSTN.GetHashCode();
                if (this.IdleTimeout != null)
                    hashCode = hashCode * 59 + this.IdleTimeout.GetHashCode();
                if (this.DefaultLayout != null)
                    hashCode = hashCode * 59 + this.DefaultLayout.GetHashCode();
                if (this.PlayAudioAlerts != null)
                    hashCode = hashCode * 59 + this.PlayAudioAlerts.GetHashCode();
                if (this.PersonalMeetingId != null)
                    hashCode = hashCode * 59 + this.PersonalMeetingId.GetHashCode();
                if (this.ModeratorPasscode != null)
                    hashCode = hashCode * 59 + this.ModeratorPasscode.GetHashCode();
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
