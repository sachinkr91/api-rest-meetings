/* 
 * BlueJeans onVideo REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
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
using SwaggerDateConverter = com.bluejeans.api.rest.onvideo.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.onvideo.Model
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
        /// <param name="Google">Google.</param>
        /// <param name="Telepresence">Telepresence.</param>
        /// <param name="Lync">Lync.</param>
        /// <param name="IOS">IOS.</param>
        /// <param name="H323">H323.</param>
        /// <param name="InterCall">InterCall.</param>
        /// <param name="Jabber">Jabber.</param>
        /// <param name="Android">Android.</param>
        /// <param name="Skype">Skype.</param>
        /// <param name="ISDN">ISDN.</param>
        /// <param name="PSTN">PSTN.</param>
        /// <param name="Level3">Level3.</param>
        /// <param name="SIP">SIP.</param>
        /// <param name="BlueJeansApp">BlueJeansApp.</param>
        /// <param name="Browser">Browser.</param>
        /// <param name="WebRTC">WebRTC.</param>
        public AnalyticsEndpointDistributionDistribution(int? Google = default(int?), int? Telepresence = default(int?), int? Lync = default(int?), int? IOS = default(int?), int? H323 = default(int?), int? InterCall = default(int?), int? Jabber = default(int?), int? Android = default(int?), int? Skype = default(int?), int? ISDN = default(int?), int? PSTN = default(int?), int? Level3 = default(int?), int? SIP = default(int?), int? BlueJeansApp = default(int?), int? Browser = default(int?), int? WebRTC = default(int?))
        {
            this.Google = Google;
            this.Telepresence = Telepresence;
            this.Lync = Lync;
            this.IOS = IOS;
            this.H323 = H323;
            this.InterCall = InterCall;
            this.Jabber = Jabber;
            this.Android = Android;
            this.Skype = Skype;
            this.ISDN = ISDN;
            this.PSTN = PSTN;
            this.Level3 = Level3;
            this.SIP = SIP;
            this.BlueJeansApp = BlueJeansApp;
            this.Browser = Browser;
            this.WebRTC = WebRTC;
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
            return this.Equals(obj as AnalyticsEndpointDistributionDistribution);
        }

        /// <summary>
        /// Returns true if AnalyticsEndpointDistributionDistribution instances are equal
        /// </summary>
        /// <param name="other">Instance of AnalyticsEndpointDistributionDistribution to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(AnalyticsEndpointDistributionDistribution other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.Google == other.Google ||
                    this.Google != null &&
                    this.Google.Equals(other.Google)
                ) && 
                (
                    this.Telepresence == other.Telepresence ||
                    this.Telepresence != null &&
                    this.Telepresence.Equals(other.Telepresence)
                ) && 
                (
                    this.Lync == other.Lync ||
                    this.Lync != null &&
                    this.Lync.Equals(other.Lync)
                ) && 
                (
                    this.IOS == other.IOS ||
                    this.IOS != null &&
                    this.IOS.Equals(other.IOS)
                ) && 
                (
                    this.H323 == other.H323 ||
                    this.H323 != null &&
                    this.H323.Equals(other.H323)
                ) && 
                (
                    this.InterCall == other.InterCall ||
                    this.InterCall != null &&
                    this.InterCall.Equals(other.InterCall)
                ) && 
                (
                    this.Jabber == other.Jabber ||
                    this.Jabber != null &&
                    this.Jabber.Equals(other.Jabber)
                ) && 
                (
                    this.Android == other.Android ||
                    this.Android != null &&
                    this.Android.Equals(other.Android)
                ) && 
                (
                    this.Skype == other.Skype ||
                    this.Skype != null &&
                    this.Skype.Equals(other.Skype)
                ) && 
                (
                    this.ISDN == other.ISDN ||
                    this.ISDN != null &&
                    this.ISDN.Equals(other.ISDN)
                ) && 
                (
                    this.PSTN == other.PSTN ||
                    this.PSTN != null &&
                    this.PSTN.Equals(other.PSTN)
                ) && 
                (
                    this.Level3 == other.Level3 ||
                    this.Level3 != null &&
                    this.Level3.Equals(other.Level3)
                ) && 
                (
                    this.SIP == other.SIP ||
                    this.SIP != null &&
                    this.SIP.Equals(other.SIP)
                ) && 
                (
                    this.BlueJeansApp == other.BlueJeansApp ||
                    this.BlueJeansApp != null &&
                    this.BlueJeansApp.Equals(other.BlueJeansApp)
                ) && 
                (
                    this.Browser == other.Browser ||
                    this.Browser != null &&
                    this.Browser.Equals(other.Browser)
                ) && 
                (
                    this.WebRTC == other.WebRTC ||
                    this.WebRTC != null &&
                    this.WebRTC.Equals(other.WebRTC)
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
                if (this.Google != null)
                    hash = hash * 59 + this.Google.GetHashCode();
                if (this.Telepresence != null)
                    hash = hash * 59 + this.Telepresence.GetHashCode();
                if (this.Lync != null)
                    hash = hash * 59 + this.Lync.GetHashCode();
                if (this.IOS != null)
                    hash = hash * 59 + this.IOS.GetHashCode();
                if (this.H323 != null)
                    hash = hash * 59 + this.H323.GetHashCode();
                if (this.InterCall != null)
                    hash = hash * 59 + this.InterCall.GetHashCode();
                if (this.Jabber != null)
                    hash = hash * 59 + this.Jabber.GetHashCode();
                if (this.Android != null)
                    hash = hash * 59 + this.Android.GetHashCode();
                if (this.Skype != null)
                    hash = hash * 59 + this.Skype.GetHashCode();
                if (this.ISDN != null)
                    hash = hash * 59 + this.ISDN.GetHashCode();
                if (this.PSTN != null)
                    hash = hash * 59 + this.PSTN.GetHashCode();
                if (this.Level3 != null)
                    hash = hash * 59 + this.Level3.GetHashCode();
                if (this.SIP != null)
                    hash = hash * 59 + this.SIP.GetHashCode();
                if (this.BlueJeansApp != null)
                    hash = hash * 59 + this.BlueJeansApp.GetHashCode();
                if (this.Browser != null)
                    hash = hash * 59 + this.Browser.GetHashCode();
                if (this.WebRTC != null)
                    hash = hash * 59 + this.WebRTC.GetHashCode();
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
