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
    /// AnalyticsEndpointDistributionDistribution
    /// </summary>
    [DataContract]
    public partial class AnalyticsEndpointDistributionDistribution :  IEquatable<AnalyticsEndpointDistributionDistribution>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="AnalyticsEndpointDistributionDistribution" /> class.
        /// </summary>
        /// <param name="google">google.</param>
        /// <param name="telepresence">telepresence.</param>
        /// <param name="lync">lync.</param>
        /// <param name="iOS">iOS.</param>
        /// <param name="h323">h323.</param>
        /// <param name="interCall">interCall.</param>
        /// <param name="jabber">jabber.</param>
        /// <param name="android">android.</param>
        /// <param name="skype">skype.</param>
        /// <param name="iSDN">iSDN.</param>
        /// <param name="pSTN">pSTN.</param>
        /// <param name="level3">level3.</param>
        /// <param name="sIP">sIP.</param>
        /// <param name="blueJeansApp">blueJeansApp.</param>
        /// <param name="browser">browser.</param>
        /// <param name="webRTC">webRTC.</param>
        public AnalyticsEndpointDistributionDistribution(int? google = default(int?), int? telepresence = default(int?), int? lync = default(int?), int? iOS = default(int?), int? h323 = default(int?), int? interCall = default(int?), int? jabber = default(int?), int? android = default(int?), int? skype = default(int?), int? iSDN = default(int?), int? pSTN = default(int?), int? level3 = default(int?), int? sIP = default(int?), int? blueJeansApp = default(int?), int? browser = default(int?), int? webRTC = default(int?))
        {
            this.Google = google;
            this.Telepresence = telepresence;
            this.Lync = lync;
            this.IOS = iOS;
            this.H323 = h323;
            this.InterCall = interCall;
            this.Jabber = jabber;
            this.Android = android;
            this.Skype = skype;
            this.ISDN = iSDN;
            this.PSTN = pSTN;
            this.Level3 = level3;
            this.SIP = sIP;
            this.BlueJeansApp = blueJeansApp;
            this.Browser = browser;
            this.WebRTC = webRTC;
        }
        
        /// <summary>
        /// Gets or Sets Google
        /// </summary>
        [DataMember(Name="Google", EmitDefaultValue=false)]
        public int? Google { get; set; }

        /// <summary>
        /// Gets or Sets Telepresence
        /// </summary>
        [DataMember(Name="Telepresence", EmitDefaultValue=false)]
        public int? Telepresence { get; set; }

        /// <summary>
        /// Gets or Sets Lync
        /// </summary>
        [DataMember(Name="Lync", EmitDefaultValue=false)]
        public int? Lync { get; set; }

        /// <summary>
        /// Gets or Sets IOS
        /// </summary>
        [DataMember(Name="iOS", EmitDefaultValue=false)]
        public int? IOS { get; set; }

        /// <summary>
        /// Gets or Sets H323
        /// </summary>
        [DataMember(Name="H323", EmitDefaultValue=false)]
        public int? H323 { get; set; }

        /// <summary>
        /// Gets or Sets InterCall
        /// </summary>
        [DataMember(Name="InterCall", EmitDefaultValue=false)]
        public int? InterCall { get; set; }

        /// <summary>
        /// Gets or Sets Jabber
        /// </summary>
        [DataMember(Name="Jabber", EmitDefaultValue=false)]
        public int? Jabber { get; set; }

        /// <summary>
        /// Gets or Sets Android
        /// </summary>
        [DataMember(Name="Android", EmitDefaultValue=false)]
        public int? Android { get; set; }

        /// <summary>
        /// Gets or Sets Skype
        /// </summary>
        [DataMember(Name="Skype", EmitDefaultValue=false)]
        public int? Skype { get; set; }

        /// <summary>
        /// Gets or Sets ISDN
        /// </summary>
        [DataMember(Name="ISDN", EmitDefaultValue=false)]
        public int? ISDN { get; set; }

        /// <summary>
        /// Gets or Sets PSTN
        /// </summary>
        [DataMember(Name="PSTN", EmitDefaultValue=false)]
        public int? PSTN { get; set; }

        /// <summary>
        /// Gets or Sets Level3
        /// </summary>
        [DataMember(Name="Level3", EmitDefaultValue=false)]
        public int? Level3 { get; set; }

        /// <summary>
        /// Gets or Sets SIP
        /// </summary>
        [DataMember(Name="SIP", EmitDefaultValue=false)]
        public int? SIP { get; set; }

        /// <summary>
        /// Gets or Sets BlueJeansApp
        /// </summary>
        [DataMember(Name="BlueJeansApp", EmitDefaultValue=false)]
        public int? BlueJeansApp { get; set; }

        /// <summary>
        /// Gets or Sets Browser
        /// </summary>
        [DataMember(Name="Browser", EmitDefaultValue=false)]
        public int? Browser { get; set; }

        /// <summary>
        /// Gets or Sets WebRTC
        /// </summary>
        [DataMember(Name="WebRTC", EmitDefaultValue=false)]
        public int? WebRTC { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class AnalyticsEndpointDistributionDistribution {\n");
            sb.Append("  Google: ").Append(Google).Append("\n");
            sb.Append("  Telepresence: ").Append(Telepresence).Append("\n");
            sb.Append("  Lync: ").Append(Lync).Append("\n");
            sb.Append("  IOS: ").Append(IOS).Append("\n");
            sb.Append("  H323: ").Append(H323).Append("\n");
            sb.Append("  InterCall: ").Append(InterCall).Append("\n");
            sb.Append("  Jabber: ").Append(Jabber).Append("\n");
            sb.Append("  Android: ").Append(Android).Append("\n");
            sb.Append("  Skype: ").Append(Skype).Append("\n");
            sb.Append("  ISDN: ").Append(ISDN).Append("\n");
            sb.Append("  PSTN: ").Append(PSTN).Append("\n");
            sb.Append("  Level3: ").Append(Level3).Append("\n");
            sb.Append("  SIP: ").Append(SIP).Append("\n");
            sb.Append("  BlueJeansApp: ").Append(BlueJeansApp).Append("\n");
            sb.Append("  Browser: ").Append(Browser).Append("\n");
            sb.Append("  WebRTC: ").Append(WebRTC).Append("\n");
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
            return this.Equals(input as AnalyticsEndpointDistributionDistribution);
        }

        /// <summary>
        /// Returns true if AnalyticsEndpointDistributionDistribution instances are equal
        /// </summary>
        /// <param name="input">Instance of AnalyticsEndpointDistributionDistribution to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(AnalyticsEndpointDistributionDistribution input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Google == input.Google ||
                    (this.Google != null &&
                    this.Google.Equals(input.Google))
                ) && 
                (
                    this.Telepresence == input.Telepresence ||
                    (this.Telepresence != null &&
                    this.Telepresence.Equals(input.Telepresence))
                ) && 
                (
                    this.Lync == input.Lync ||
                    (this.Lync != null &&
                    this.Lync.Equals(input.Lync))
                ) && 
                (
                    this.IOS == input.IOS ||
                    (this.IOS != null &&
                    this.IOS.Equals(input.IOS))
                ) && 
                (
                    this.H323 == input.H323 ||
                    (this.H323 != null &&
                    this.H323.Equals(input.H323))
                ) && 
                (
                    this.InterCall == input.InterCall ||
                    (this.InterCall != null &&
                    this.InterCall.Equals(input.InterCall))
                ) && 
                (
                    this.Jabber == input.Jabber ||
                    (this.Jabber != null &&
                    this.Jabber.Equals(input.Jabber))
                ) && 
                (
                    this.Android == input.Android ||
                    (this.Android != null &&
                    this.Android.Equals(input.Android))
                ) && 
                (
                    this.Skype == input.Skype ||
                    (this.Skype != null &&
                    this.Skype.Equals(input.Skype))
                ) && 
                (
                    this.ISDN == input.ISDN ||
                    (this.ISDN != null &&
                    this.ISDN.Equals(input.ISDN))
                ) && 
                (
                    this.PSTN == input.PSTN ||
                    (this.PSTN != null &&
                    this.PSTN.Equals(input.PSTN))
                ) && 
                (
                    this.Level3 == input.Level3 ||
                    (this.Level3 != null &&
                    this.Level3.Equals(input.Level3))
                ) && 
                (
                    this.SIP == input.SIP ||
                    (this.SIP != null &&
                    this.SIP.Equals(input.SIP))
                ) && 
                (
                    this.BlueJeansApp == input.BlueJeansApp ||
                    (this.BlueJeansApp != null &&
                    this.BlueJeansApp.Equals(input.BlueJeansApp))
                ) && 
                (
                    this.Browser == input.Browser ||
                    (this.Browser != null &&
                    this.Browser.Equals(input.Browser))
                ) && 
                (
                    this.WebRTC == input.WebRTC ||
                    (this.WebRTC != null &&
                    this.WebRTC.Equals(input.WebRTC))
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
                if (this.Google != null)
                    hashCode = hashCode * 59 + this.Google.GetHashCode();
                if (this.Telepresence != null)
                    hashCode = hashCode * 59 + this.Telepresence.GetHashCode();
                if (this.Lync != null)
                    hashCode = hashCode * 59 + this.Lync.GetHashCode();
                if (this.IOS != null)
                    hashCode = hashCode * 59 + this.IOS.GetHashCode();
                if (this.H323 != null)
                    hashCode = hashCode * 59 + this.H323.GetHashCode();
                if (this.InterCall != null)
                    hashCode = hashCode * 59 + this.InterCall.GetHashCode();
                if (this.Jabber != null)
                    hashCode = hashCode * 59 + this.Jabber.GetHashCode();
                if (this.Android != null)
                    hashCode = hashCode * 59 + this.Android.GetHashCode();
                if (this.Skype != null)
                    hashCode = hashCode * 59 + this.Skype.GetHashCode();
                if (this.ISDN != null)
                    hashCode = hashCode * 59 + this.ISDN.GetHashCode();
                if (this.PSTN != null)
                    hashCode = hashCode * 59 + this.PSTN.GetHashCode();
                if (this.Level3 != null)
                    hashCode = hashCode * 59 + this.Level3.GetHashCode();
                if (this.SIP != null)
                    hashCode = hashCode * 59 + this.SIP.GetHashCode();
                if (this.BlueJeansApp != null)
                    hashCode = hashCode * 59 + this.BlueJeansApp.GetHashCode();
                if (this.Browser != null)
                    hashCode = hashCode * 59 + this.Browser.GetHashCode();
                if (this.WebRTC != null)
                    hashCode = hashCode * 59 + this.WebRTC.GetHashCode();
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
