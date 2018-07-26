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
    /// EndpointIndigo
    /// </summary>
    [DataContract]
    public partial class EndpointIndigo :  IEquatable<EndpointIndigo>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="EndpointIndigo" /> class.
        /// </summary>
        /// <param name="id">id.</param>
        /// <param name="callguid">callguid.</param>
        /// <param name="name">name.</param>
        /// <param name="endpoint">endpoint.</param>
        /// <param name="vendor">vendor.</param>
        /// <param name="version">version.</param>
        /// <param name="uniqId">uniqId.</param>
        /// <param name="remoteAddress">remoteAddress.</param>
        /// <param name="leader">leader.</param>
        /// <param name="secureCall">secureCall.</param>
        /// <param name="natDetected">natDetected.</param>
        /// <param name="proxy">proxy.</param>
        /// <param name="roiDistance">roiDistance.</param>
        /// <param name="mpls">mpls.</param>
        /// <param name="videoShare">videoShare.</param>
        /// <param name="recording">recording.</param>
        /// <param name="creationTime">creationTime.</param>
        /// <param name="meetingJoinTime">meetingJoinTime.</param>
        /// <param name="meetingLeaveTime">meetingLeaveTime.</param>
        /// <param name="didNumber">didNumber.</param>
        /// <param name="location">location.</param>
        /// <param name="summaryStats">summaryStats.</param>
        /// <param name="endpointAttributes1">endpointAttributes1.</param>
        /// <param name="traceroute">traceroute.</param>
        /// <param name="mhtaskStopped">mhtaskStopped.</param>
        public EndpointIndigo(int? id = default(int?), string callguid = default(string), string name = default(string), string endpoint = default(string), string vendor = default(string), string version = default(string), string uniqId = default(string), string remoteAddress = default(string), bool? leader = default(bool?), bool? secureCall = default(bool?), bool? natDetected = default(bool?), bool? proxy = default(bool?), float? roiDistance = default(float?), bool? mpls = default(bool?), bool? videoShare = default(bool?), bool? recording = default(bool?), int? creationTime = default(int?), int? meetingJoinTime = default(int?), int? meetingLeaveTime = default(int?), string didNumber = default(string), EndpointIndigoLocation location = default(EndpointIndigoLocation), EndpointIndigoSummaryStats summaryStats = default(EndpointIndigoSummaryStats), EndpointIndigoEndpointAttributes1 endpointAttributes1 = default(EndpointIndigoEndpointAttributes1), EndpointIndigoTraceroute traceroute = default(EndpointIndigoTraceroute), bool? mhtaskStopped = default(bool?))
        {
            this.Id = id;
            this.Callguid = callguid;
            this.Name = name;
            this.Endpoint = endpoint;
            this.Vendor = vendor;
            this.Version = version;
            this.UniqId = uniqId;
            this.RemoteAddress = remoteAddress;
            this.Leader = leader;
            this.SecureCall = secureCall;
            this.NatDetected = natDetected;
            this.Proxy = proxy;
            this.RoiDistance = roiDistance;
            this.Mpls = mpls;
            this.VideoShare = videoShare;
            this.Recording = recording;
            this.CreationTime = creationTime;
            this.MeetingJoinTime = meetingJoinTime;
            this.MeetingLeaveTime = meetingLeaveTime;
            this.DidNumber = didNumber;
            this.Location = location;
            this.SummaryStats = summaryStats;
            this.EndpointAttributes1 = endpointAttributes1;
            this.Traceroute = traceroute;
            this.MhtaskStopped = mhtaskStopped;
        }
        
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }

        /// <summary>
        /// Gets or Sets Callguid
        /// </summary>
        [DataMember(Name="callguid", EmitDefaultValue=false)]
        public string Callguid { get; set; }

        /// <summary>
        /// Gets or Sets Name
        /// </summary>
        [DataMember(Name="name", EmitDefaultValue=false)]
        public string Name { get; set; }

        /// <summary>
        /// Gets or Sets Endpoint
        /// </summary>
        [DataMember(Name="endpoint", EmitDefaultValue=false)]
        public string Endpoint { get; set; }

        /// <summary>
        /// Gets or Sets Vendor
        /// </summary>
        [DataMember(Name="vendor", EmitDefaultValue=false)]
        public string Vendor { get; set; }

        /// <summary>
        /// Gets or Sets Version
        /// </summary>
        [DataMember(Name="version", EmitDefaultValue=false)]
        public string Version { get; set; }

        /// <summary>
        /// Gets or Sets UniqId
        /// </summary>
        [DataMember(Name="uniqId", EmitDefaultValue=false)]
        public string UniqId { get; set; }

        /// <summary>
        /// Gets or Sets RemoteAddress
        /// </summary>
        [DataMember(Name="remoteAddress", EmitDefaultValue=false)]
        public string RemoteAddress { get; set; }

        /// <summary>
        /// Gets or Sets Leader
        /// </summary>
        [DataMember(Name="leader", EmitDefaultValue=false)]
        public bool? Leader { get; set; }

        /// <summary>
        /// Gets or Sets SecureCall
        /// </summary>
        [DataMember(Name="secureCall", EmitDefaultValue=false)]
        public bool? SecureCall { get; set; }

        /// <summary>
        /// Gets or Sets NatDetected
        /// </summary>
        [DataMember(Name="natDetected", EmitDefaultValue=false)]
        public bool? NatDetected { get; set; }

        /// <summary>
        /// Gets or Sets Proxy
        /// </summary>
        [DataMember(Name="proxy", EmitDefaultValue=false)]
        public bool? Proxy { get; set; }

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
        /// Gets or Sets VideoShare
        /// </summary>
        [DataMember(Name="videoShare", EmitDefaultValue=false)]
        public bool? VideoShare { get; set; }

        /// <summary>
        /// Gets or Sets Recording
        /// </summary>
        [DataMember(Name="recording", EmitDefaultValue=false)]
        public bool? Recording { get; set; }

        /// <summary>
        /// Gets or Sets CreationTime
        /// </summary>
        [DataMember(Name="creationTime", EmitDefaultValue=false)]
        public int? CreationTime { get; set; }

        /// <summary>
        /// Gets or Sets MeetingJoinTime
        /// </summary>
        [DataMember(Name="meetingJoinTime", EmitDefaultValue=false)]
        public int? MeetingJoinTime { get; set; }

        /// <summary>
        /// Gets or Sets MeetingLeaveTime
        /// </summary>
        [DataMember(Name="meetingLeaveTime", EmitDefaultValue=false)]
        public int? MeetingLeaveTime { get; set; }

        /// <summary>
        /// Gets or Sets DidNumber
        /// </summary>
        [DataMember(Name="didNumber", EmitDefaultValue=false)]
        public string DidNumber { get; set; }

        /// <summary>
        /// Gets or Sets Location
        /// </summary>
        [DataMember(Name="location", EmitDefaultValue=false)]
        public EndpointIndigoLocation Location { get; set; }

        /// <summary>
        /// Gets or Sets SummaryStats
        /// </summary>
        [DataMember(Name="summaryStats", EmitDefaultValue=false)]
        public EndpointIndigoSummaryStats SummaryStats { get; set; }

        /// <summary>
        /// Gets or Sets EndpointAttributes1
        /// </summary>
        [DataMember(Name="endpointAttributes1", EmitDefaultValue=false)]
        public EndpointIndigoEndpointAttributes1 EndpointAttributes1 { get; set; }

        /// <summary>
        /// Gets or Sets Traceroute
        /// </summary>
        [DataMember(Name="traceroute", EmitDefaultValue=false)]
        public EndpointIndigoTraceroute Traceroute { get; set; }

        /// <summary>
        /// Gets or Sets MhtaskStopped
        /// </summary>
        [DataMember(Name="mhtaskStopped", EmitDefaultValue=false)]
        public bool? MhtaskStopped { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class EndpointIndigo {\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  Callguid: ").Append(Callguid).Append("\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  Endpoint: ").Append(Endpoint).Append("\n");
            sb.Append("  Vendor: ").Append(Vendor).Append("\n");
            sb.Append("  Version: ").Append(Version).Append("\n");
            sb.Append("  UniqId: ").Append(UniqId).Append("\n");
            sb.Append("  RemoteAddress: ").Append(RemoteAddress).Append("\n");
            sb.Append("  Leader: ").Append(Leader).Append("\n");
            sb.Append("  SecureCall: ").Append(SecureCall).Append("\n");
            sb.Append("  NatDetected: ").Append(NatDetected).Append("\n");
            sb.Append("  Proxy: ").Append(Proxy).Append("\n");
            sb.Append("  RoiDistance: ").Append(RoiDistance).Append("\n");
            sb.Append("  Mpls: ").Append(Mpls).Append("\n");
            sb.Append("  VideoShare: ").Append(VideoShare).Append("\n");
            sb.Append("  Recording: ").Append(Recording).Append("\n");
            sb.Append("  CreationTime: ").Append(CreationTime).Append("\n");
            sb.Append("  MeetingJoinTime: ").Append(MeetingJoinTime).Append("\n");
            sb.Append("  MeetingLeaveTime: ").Append(MeetingLeaveTime).Append("\n");
            sb.Append("  DidNumber: ").Append(DidNumber).Append("\n");
            sb.Append("  Location: ").Append(Location).Append("\n");
            sb.Append("  SummaryStats: ").Append(SummaryStats).Append("\n");
            sb.Append("  EndpointAttributes1: ").Append(EndpointAttributes1).Append("\n");
            sb.Append("  Traceroute: ").Append(Traceroute).Append("\n");
            sb.Append("  MhtaskStopped: ").Append(MhtaskStopped).Append("\n");
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
            return this.Equals(input as EndpointIndigo);
        }

        /// <summary>
        /// Returns true if EndpointIndigo instances are equal
        /// </summary>
        /// <param name="input">Instance of EndpointIndigo to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(EndpointIndigo input)
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
                    this.Callguid == input.Callguid ||
                    (this.Callguid != null &&
                    this.Callguid.Equals(input.Callguid))
                ) && 
                (
                    this.Name == input.Name ||
                    (this.Name != null &&
                    this.Name.Equals(input.Name))
                ) && 
                (
                    this.Endpoint == input.Endpoint ||
                    (this.Endpoint != null &&
                    this.Endpoint.Equals(input.Endpoint))
                ) && 
                (
                    this.Vendor == input.Vendor ||
                    (this.Vendor != null &&
                    this.Vendor.Equals(input.Vendor))
                ) && 
                (
                    this.Version == input.Version ||
                    (this.Version != null &&
                    this.Version.Equals(input.Version))
                ) && 
                (
                    this.UniqId == input.UniqId ||
                    (this.UniqId != null &&
                    this.UniqId.Equals(input.UniqId))
                ) && 
                (
                    this.RemoteAddress == input.RemoteAddress ||
                    (this.RemoteAddress != null &&
                    this.RemoteAddress.Equals(input.RemoteAddress))
                ) && 
                (
                    this.Leader == input.Leader ||
                    (this.Leader != null &&
                    this.Leader.Equals(input.Leader))
                ) && 
                (
                    this.SecureCall == input.SecureCall ||
                    (this.SecureCall != null &&
                    this.SecureCall.Equals(input.SecureCall))
                ) && 
                (
                    this.NatDetected == input.NatDetected ||
                    (this.NatDetected != null &&
                    this.NatDetected.Equals(input.NatDetected))
                ) && 
                (
                    this.Proxy == input.Proxy ||
                    (this.Proxy != null &&
                    this.Proxy.Equals(input.Proxy))
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
                    this.VideoShare == input.VideoShare ||
                    (this.VideoShare != null &&
                    this.VideoShare.Equals(input.VideoShare))
                ) && 
                (
                    this.Recording == input.Recording ||
                    (this.Recording != null &&
                    this.Recording.Equals(input.Recording))
                ) && 
                (
                    this.CreationTime == input.CreationTime ||
                    (this.CreationTime != null &&
                    this.CreationTime.Equals(input.CreationTime))
                ) && 
                (
                    this.MeetingJoinTime == input.MeetingJoinTime ||
                    (this.MeetingJoinTime != null &&
                    this.MeetingJoinTime.Equals(input.MeetingJoinTime))
                ) && 
                (
                    this.MeetingLeaveTime == input.MeetingLeaveTime ||
                    (this.MeetingLeaveTime != null &&
                    this.MeetingLeaveTime.Equals(input.MeetingLeaveTime))
                ) && 
                (
                    this.DidNumber == input.DidNumber ||
                    (this.DidNumber != null &&
                    this.DidNumber.Equals(input.DidNumber))
                ) && 
                (
                    this.Location == input.Location ||
                    (this.Location != null &&
                    this.Location.Equals(input.Location))
                ) && 
                (
                    this.SummaryStats == input.SummaryStats ||
                    (this.SummaryStats != null &&
                    this.SummaryStats.Equals(input.SummaryStats))
                ) && 
                (
                    this.EndpointAttributes1 == input.EndpointAttributes1 ||
                    (this.EndpointAttributes1 != null &&
                    this.EndpointAttributes1.Equals(input.EndpointAttributes1))
                ) && 
                (
                    this.Traceroute == input.Traceroute ||
                    (this.Traceroute != null &&
                    this.Traceroute.Equals(input.Traceroute))
                ) && 
                (
                    this.MhtaskStopped == input.MhtaskStopped ||
                    (this.MhtaskStopped != null &&
                    this.MhtaskStopped.Equals(input.MhtaskStopped))
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
                if (this.Callguid != null)
                    hashCode = hashCode * 59 + this.Callguid.GetHashCode();
                if (this.Name != null)
                    hashCode = hashCode * 59 + this.Name.GetHashCode();
                if (this.Endpoint != null)
                    hashCode = hashCode * 59 + this.Endpoint.GetHashCode();
                if (this.Vendor != null)
                    hashCode = hashCode * 59 + this.Vendor.GetHashCode();
                if (this.Version != null)
                    hashCode = hashCode * 59 + this.Version.GetHashCode();
                if (this.UniqId != null)
                    hashCode = hashCode * 59 + this.UniqId.GetHashCode();
                if (this.RemoteAddress != null)
                    hashCode = hashCode * 59 + this.RemoteAddress.GetHashCode();
                if (this.Leader != null)
                    hashCode = hashCode * 59 + this.Leader.GetHashCode();
                if (this.SecureCall != null)
                    hashCode = hashCode * 59 + this.SecureCall.GetHashCode();
                if (this.NatDetected != null)
                    hashCode = hashCode * 59 + this.NatDetected.GetHashCode();
                if (this.Proxy != null)
                    hashCode = hashCode * 59 + this.Proxy.GetHashCode();
                if (this.RoiDistance != null)
                    hashCode = hashCode * 59 + this.RoiDistance.GetHashCode();
                if (this.Mpls != null)
                    hashCode = hashCode * 59 + this.Mpls.GetHashCode();
                if (this.VideoShare != null)
                    hashCode = hashCode * 59 + this.VideoShare.GetHashCode();
                if (this.Recording != null)
                    hashCode = hashCode * 59 + this.Recording.GetHashCode();
                if (this.CreationTime != null)
                    hashCode = hashCode * 59 + this.CreationTime.GetHashCode();
                if (this.MeetingJoinTime != null)
                    hashCode = hashCode * 59 + this.MeetingJoinTime.GetHashCode();
                if (this.MeetingLeaveTime != null)
                    hashCode = hashCode * 59 + this.MeetingLeaveTime.GetHashCode();
                if (this.DidNumber != null)
                    hashCode = hashCode * 59 + this.DidNumber.GetHashCode();
                if (this.Location != null)
                    hashCode = hashCode * 59 + this.Location.GetHashCode();
                if (this.SummaryStats != null)
                    hashCode = hashCode * 59 + this.SummaryStats.GetHashCode();
                if (this.EndpointAttributes1 != null)
                    hashCode = hashCode * 59 + this.EndpointAttributes1.GetHashCode();
                if (this.Traceroute != null)
                    hashCode = hashCode * 59 + this.Traceroute.GetHashCode();
                if (this.MhtaskStopped != null)
                    hashCode = hashCode * 59 + this.MhtaskStopped.GetHashCode();
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
