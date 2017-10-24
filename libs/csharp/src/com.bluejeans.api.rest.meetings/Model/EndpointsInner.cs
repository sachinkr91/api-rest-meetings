/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
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
using SwaggerDateConverter = com.bluejeans.api.rest.meetings.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.meetings.Model
{
    /// <summary>
    /// EndpointsInner
    /// </summary>
    [DataContract]
    public partial class EndpointsInner :  IEquatable<EndpointsInner>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="EndpointsInner" /> class.
        /// </summary>
        /// <param name="Meetingid">Meetingid.</param>
        /// <param name="Name">Name.</param>
        /// <param name="CallQuality">CallQuality.</param>
        /// <param name="Leader">Leader.</param>
        /// <param name="Callguid">Callguid.</param>
        /// <param name="Endpoint">Endpoint.</param>
        /// <param name="TalkDetected">TalkDetected.</param>
        /// <param name="SecureCall">SecureCall.</param>
        /// <param name="Layout">Layout.</param>
        /// <param name="SubLayout">SubLayout.</param>
        /// <param name="VideoRecv">VideoRecv.</param>
        /// <param name="VideoRecvLocalMute">VideoRecvLocalMute.</param>
        /// <param name="VideoRecvRemoteMute">VideoRecvRemoteMute.</param>
        /// <param name="AudioRecv">AudioRecv.</param>
        /// <param name="AudioRecvLocalMute">AudioRecvLocalMute.</param>
        /// <param name="AudioRecvRemoteMute">AudioRecvRemoteMute.</param>
        /// <param name="AudioRecvCodec">AudioRecvCodec.</param>
        /// <param name="AudioSendCodec">AudioSendCodec.</param>
        /// <param name="VideoRecvCodec">VideoRecvCodec.</param>
        /// <param name="VideoRecvHeight">VideoRecvHeight.</param>
        /// <param name="VideoRecvWidth">VideoRecvWidth.</param>
        /// <param name="VideoSendCodec">VideoSendCodec.</param>
        /// <param name="VideoSendHeight">VideoSendHeight.</param>
        /// <param name="VideoSendWidth">VideoSendWidth.</param>
        /// <param name="Visibility">Visibility.</param>
        /// <param name="ChatEndpointGuid">ChatEndpointGuid.</param>
        /// <param name="EndpointGuid">EndpointGuid.</param>
        /// <param name="RDCVersion">RDCVersion.</param>
        /// <param name="RDCControllerCapable">RDCControllerCapable.</param>
        /// <param name="RDCControlleeCapable">RDCControlleeCapable.</param>
        /// <param name="Connections">Connections.</param>
        public EndpointsInner(string Meetingid = default(string), string Name = default(string), string CallQuality = default(string), string Leader = default(string), string Callguid = default(string), string Endpoint = default(string), string TalkDetected = default(string), string SecureCall = default(string), string Layout = default(string), string SubLayout = default(string), string VideoRecv = default(string), string VideoRecvLocalMute = default(string), string VideoRecvRemoteMute = default(string), string AudioRecv = default(string), string AudioRecvLocalMute = default(string), string AudioRecvRemoteMute = default(string), string AudioRecvCodec = default(string), string AudioSendCodec = default(string), string VideoRecvCodec = default(string), string VideoRecvHeight = default(string), string VideoRecvWidth = default(string), string VideoSendCodec = default(string), string VideoSendHeight = default(string), string VideoSendWidth = default(string), string Visibility = default(string), string ChatEndpointGuid = default(string), string EndpointGuid = default(string), string RDCVersion = default(string), string RDCControllerCapable = default(string), string RDCControlleeCapable = default(string), List<EndpointsInnerConnections> Connections = default(List<EndpointsInnerConnections>))
        {
            this.Meetingid = Meetingid;
            this.Name = Name;
            this.CallQuality = CallQuality;
            this.Leader = Leader;
            this.Callguid = Callguid;
            this.Endpoint = Endpoint;
            this.TalkDetected = TalkDetected;
            this.SecureCall = SecureCall;
            this.Layout = Layout;
            this.SubLayout = SubLayout;
            this.VideoRecv = VideoRecv;
            this.VideoRecvLocalMute = VideoRecvLocalMute;
            this.VideoRecvRemoteMute = VideoRecvRemoteMute;
            this.AudioRecv = AudioRecv;
            this.AudioRecvLocalMute = AudioRecvLocalMute;
            this.AudioRecvRemoteMute = AudioRecvRemoteMute;
            this.AudioRecvCodec = AudioRecvCodec;
            this.AudioSendCodec = AudioSendCodec;
            this.VideoRecvCodec = VideoRecvCodec;
            this.VideoRecvHeight = VideoRecvHeight;
            this.VideoRecvWidth = VideoRecvWidth;
            this.VideoSendCodec = VideoSendCodec;
            this.VideoSendHeight = VideoSendHeight;
            this.VideoSendWidth = VideoSendWidth;
            this.Visibility = Visibility;
            this.ChatEndpointGuid = ChatEndpointGuid;
            this.EndpointGuid = EndpointGuid;
            this.RDCVersion = RDCVersion;
            this.RDCControllerCapable = RDCControllerCapable;
            this.RDCControlleeCapable = RDCControlleeCapable;
            this.Connections = Connections;
        }
        
        /// <summary>
        /// Gets or Sets Meetingid
        /// </summary>
        [DataMember(Name="meetingid", EmitDefaultValue=false)]
        public string Meetingid { get; set; }

        /// <summary>
        /// Gets or Sets Name
        /// </summary>
        [DataMember(Name="name", EmitDefaultValue=false)]
        public string Name { get; set; }

        /// <summary>
        /// Gets or Sets CallQuality
        /// </summary>
        [DataMember(Name="CallQuality", EmitDefaultValue=false)]
        public string CallQuality { get; set; }

        /// <summary>
        /// Gets or Sets Leader
        /// </summary>
        [DataMember(Name="Leader", EmitDefaultValue=false)]
        public string Leader { get; set; }

        /// <summary>
        /// Gets or Sets Callguid
        /// </summary>
        [DataMember(Name="callguid", EmitDefaultValue=false)]
        public string Callguid { get; set; }

        /// <summary>
        /// Gets or Sets Endpoint
        /// </summary>
        [DataMember(Name="endpoint", EmitDefaultValue=false)]
        public string Endpoint { get; set; }

        /// <summary>
        /// Gets or Sets TalkDetected
        /// </summary>
        [DataMember(Name="TalkDetected", EmitDefaultValue=false)]
        public string TalkDetected { get; set; }

        /// <summary>
        /// Gets or Sets SecureCall
        /// </summary>
        [DataMember(Name="SecureCall", EmitDefaultValue=false)]
        public string SecureCall { get; set; }

        /// <summary>
        /// Gets or Sets Layout
        /// </summary>
        [DataMember(Name="Layout", EmitDefaultValue=false)]
        public string Layout { get; set; }

        /// <summary>
        /// Gets or Sets SubLayout
        /// </summary>
        [DataMember(Name="SubLayout", EmitDefaultValue=false)]
        public string SubLayout { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecv
        /// </summary>
        [DataMember(Name="VideoRecv", EmitDefaultValue=false)]
        public string VideoRecv { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvLocalMute
        /// </summary>
        [DataMember(Name="VideoRecvLocalMute", EmitDefaultValue=false)]
        public string VideoRecvLocalMute { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvRemoteMute
        /// </summary>
        [DataMember(Name="VideoRecvRemoteMute", EmitDefaultValue=false)]
        public string VideoRecvRemoteMute { get; set; }

        /// <summary>
        /// Gets or Sets AudioRecv
        /// </summary>
        [DataMember(Name="AudioRecv", EmitDefaultValue=false)]
        public string AudioRecv { get; set; }

        /// <summary>
        /// Gets or Sets AudioRecvLocalMute
        /// </summary>
        [DataMember(Name="AudioRecvLocalMute", EmitDefaultValue=false)]
        public string AudioRecvLocalMute { get; set; }

        /// <summary>
        /// Gets or Sets AudioRecvRemoteMute
        /// </summary>
        [DataMember(Name="AudioRecvRemoteMute", EmitDefaultValue=false)]
        public string AudioRecvRemoteMute { get; set; }

        /// <summary>
        /// Gets or Sets AudioRecvCodec
        /// </summary>
        [DataMember(Name="AudioRecvCodec", EmitDefaultValue=false)]
        public string AudioRecvCodec { get; set; }

        /// <summary>
        /// Gets or Sets AudioSendCodec
        /// </summary>
        [DataMember(Name="AudioSendCodec", EmitDefaultValue=false)]
        public string AudioSendCodec { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvCodec
        /// </summary>
        [DataMember(Name="VideoRecvCodec", EmitDefaultValue=false)]
        public string VideoRecvCodec { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvHeight
        /// </summary>
        [DataMember(Name="VideoRecvHeight", EmitDefaultValue=false)]
        public string VideoRecvHeight { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvWidth
        /// </summary>
        [DataMember(Name="VideoRecvWidth", EmitDefaultValue=false)]
        public string VideoRecvWidth { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendCodec
        /// </summary>
        [DataMember(Name="VideoSendCodec", EmitDefaultValue=false)]
        public string VideoSendCodec { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendHeight
        /// </summary>
        [DataMember(Name="VideoSendHeight", EmitDefaultValue=false)]
        public string VideoSendHeight { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendWidth
        /// </summary>
        [DataMember(Name="VideoSendWidth", EmitDefaultValue=false)]
        public string VideoSendWidth { get; set; }

        /// <summary>
        /// Gets or Sets Visibility
        /// </summary>
        [DataMember(Name="visibility", EmitDefaultValue=false)]
        public string Visibility { get; set; }

        /// <summary>
        /// Gets or Sets ChatEndpointGuid
        /// </summary>
        [DataMember(Name="chatEndpointGuid", EmitDefaultValue=false)]
        public string ChatEndpointGuid { get; set; }

        /// <summary>
        /// Gets or Sets EndpointGuid
        /// </summary>
        [DataMember(Name="endpointGuid", EmitDefaultValue=false)]
        public string EndpointGuid { get; set; }

        /// <summary>
        /// Gets or Sets RDCVersion
        /// </summary>
        [DataMember(Name="RDCVersion", EmitDefaultValue=false)]
        public string RDCVersion { get; set; }

        /// <summary>
        /// Gets or Sets RDCControllerCapable
        /// </summary>
        [DataMember(Name="RDCControllerCapable", EmitDefaultValue=false)]
        public string RDCControllerCapable { get; set; }

        /// <summary>
        /// Gets or Sets RDCControlleeCapable
        /// </summary>
        [DataMember(Name="RDCControlleeCapable", EmitDefaultValue=false)]
        public string RDCControlleeCapable { get; set; }

        /// <summary>
        /// Gets or Sets Connections
        /// </summary>
        [DataMember(Name="connections", EmitDefaultValue=false)]
        public List<EndpointsInnerConnections> Connections { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class EndpointsInner {\n");
            sb.Append("  Meetingid: ").Append(Meetingid).Append("\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  CallQuality: ").Append(CallQuality).Append("\n");
            sb.Append("  Leader: ").Append(Leader).Append("\n");
            sb.Append("  Callguid: ").Append(Callguid).Append("\n");
            sb.Append("  Endpoint: ").Append(Endpoint).Append("\n");
            sb.Append("  TalkDetected: ").Append(TalkDetected).Append("\n");
            sb.Append("  SecureCall: ").Append(SecureCall).Append("\n");
            sb.Append("  Layout: ").Append(Layout).Append("\n");
            sb.Append("  SubLayout: ").Append(SubLayout).Append("\n");
            sb.Append("  VideoRecv: ").Append(VideoRecv).Append("\n");
            sb.Append("  VideoRecvLocalMute: ").Append(VideoRecvLocalMute).Append("\n");
            sb.Append("  VideoRecvRemoteMute: ").Append(VideoRecvRemoteMute).Append("\n");
            sb.Append("  AudioRecv: ").Append(AudioRecv).Append("\n");
            sb.Append("  AudioRecvLocalMute: ").Append(AudioRecvLocalMute).Append("\n");
            sb.Append("  AudioRecvRemoteMute: ").Append(AudioRecvRemoteMute).Append("\n");
            sb.Append("  AudioRecvCodec: ").Append(AudioRecvCodec).Append("\n");
            sb.Append("  AudioSendCodec: ").Append(AudioSendCodec).Append("\n");
            sb.Append("  VideoRecvCodec: ").Append(VideoRecvCodec).Append("\n");
            sb.Append("  VideoRecvHeight: ").Append(VideoRecvHeight).Append("\n");
            sb.Append("  VideoRecvWidth: ").Append(VideoRecvWidth).Append("\n");
            sb.Append("  VideoSendCodec: ").Append(VideoSendCodec).Append("\n");
            sb.Append("  VideoSendHeight: ").Append(VideoSendHeight).Append("\n");
            sb.Append("  VideoSendWidth: ").Append(VideoSendWidth).Append("\n");
            sb.Append("  Visibility: ").Append(Visibility).Append("\n");
            sb.Append("  ChatEndpointGuid: ").Append(ChatEndpointGuid).Append("\n");
            sb.Append("  EndpointGuid: ").Append(EndpointGuid).Append("\n");
            sb.Append("  RDCVersion: ").Append(RDCVersion).Append("\n");
            sb.Append("  RDCControllerCapable: ").Append(RDCControllerCapable).Append("\n");
            sb.Append("  RDCControlleeCapable: ").Append(RDCControlleeCapable).Append("\n");
            sb.Append("  Connections: ").Append(Connections).Append("\n");
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
            return this.Equals(obj as EndpointsInner);
        }

        /// <summary>
        /// Returns true if EndpointsInner instances are equal
        /// </summary>
        /// <param name="other">Instance of EndpointsInner to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(EndpointsInner other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.Meetingid == other.Meetingid ||
                    this.Meetingid != null &&
                    this.Meetingid.Equals(other.Meetingid)
                ) && 
                (
                    this.Name == other.Name ||
                    this.Name != null &&
                    this.Name.Equals(other.Name)
                ) && 
                (
                    this.CallQuality == other.CallQuality ||
                    this.CallQuality != null &&
                    this.CallQuality.Equals(other.CallQuality)
                ) && 
                (
                    this.Leader == other.Leader ||
                    this.Leader != null &&
                    this.Leader.Equals(other.Leader)
                ) && 
                (
                    this.Callguid == other.Callguid ||
                    this.Callguid != null &&
                    this.Callguid.Equals(other.Callguid)
                ) && 
                (
                    this.Endpoint == other.Endpoint ||
                    this.Endpoint != null &&
                    this.Endpoint.Equals(other.Endpoint)
                ) && 
                (
                    this.TalkDetected == other.TalkDetected ||
                    this.TalkDetected != null &&
                    this.TalkDetected.Equals(other.TalkDetected)
                ) && 
                (
                    this.SecureCall == other.SecureCall ||
                    this.SecureCall != null &&
                    this.SecureCall.Equals(other.SecureCall)
                ) && 
                (
                    this.Layout == other.Layout ||
                    this.Layout != null &&
                    this.Layout.Equals(other.Layout)
                ) && 
                (
                    this.SubLayout == other.SubLayout ||
                    this.SubLayout != null &&
                    this.SubLayout.Equals(other.SubLayout)
                ) && 
                (
                    this.VideoRecv == other.VideoRecv ||
                    this.VideoRecv != null &&
                    this.VideoRecv.Equals(other.VideoRecv)
                ) && 
                (
                    this.VideoRecvLocalMute == other.VideoRecvLocalMute ||
                    this.VideoRecvLocalMute != null &&
                    this.VideoRecvLocalMute.Equals(other.VideoRecvLocalMute)
                ) && 
                (
                    this.VideoRecvRemoteMute == other.VideoRecvRemoteMute ||
                    this.VideoRecvRemoteMute != null &&
                    this.VideoRecvRemoteMute.Equals(other.VideoRecvRemoteMute)
                ) && 
                (
                    this.AudioRecv == other.AudioRecv ||
                    this.AudioRecv != null &&
                    this.AudioRecv.Equals(other.AudioRecv)
                ) && 
                (
                    this.AudioRecvLocalMute == other.AudioRecvLocalMute ||
                    this.AudioRecvLocalMute != null &&
                    this.AudioRecvLocalMute.Equals(other.AudioRecvLocalMute)
                ) && 
                (
                    this.AudioRecvRemoteMute == other.AudioRecvRemoteMute ||
                    this.AudioRecvRemoteMute != null &&
                    this.AudioRecvRemoteMute.Equals(other.AudioRecvRemoteMute)
                ) && 
                (
                    this.AudioRecvCodec == other.AudioRecvCodec ||
                    this.AudioRecvCodec != null &&
                    this.AudioRecvCodec.Equals(other.AudioRecvCodec)
                ) && 
                (
                    this.AudioSendCodec == other.AudioSendCodec ||
                    this.AudioSendCodec != null &&
                    this.AudioSendCodec.Equals(other.AudioSendCodec)
                ) && 
                (
                    this.VideoRecvCodec == other.VideoRecvCodec ||
                    this.VideoRecvCodec != null &&
                    this.VideoRecvCodec.Equals(other.VideoRecvCodec)
                ) && 
                (
                    this.VideoRecvHeight == other.VideoRecvHeight ||
                    this.VideoRecvHeight != null &&
                    this.VideoRecvHeight.Equals(other.VideoRecvHeight)
                ) && 
                (
                    this.VideoRecvWidth == other.VideoRecvWidth ||
                    this.VideoRecvWidth != null &&
                    this.VideoRecvWidth.Equals(other.VideoRecvWidth)
                ) && 
                (
                    this.VideoSendCodec == other.VideoSendCodec ||
                    this.VideoSendCodec != null &&
                    this.VideoSendCodec.Equals(other.VideoSendCodec)
                ) && 
                (
                    this.VideoSendHeight == other.VideoSendHeight ||
                    this.VideoSendHeight != null &&
                    this.VideoSendHeight.Equals(other.VideoSendHeight)
                ) && 
                (
                    this.VideoSendWidth == other.VideoSendWidth ||
                    this.VideoSendWidth != null &&
                    this.VideoSendWidth.Equals(other.VideoSendWidth)
                ) && 
                (
                    this.Visibility == other.Visibility ||
                    this.Visibility != null &&
                    this.Visibility.Equals(other.Visibility)
                ) && 
                (
                    this.ChatEndpointGuid == other.ChatEndpointGuid ||
                    this.ChatEndpointGuid != null &&
                    this.ChatEndpointGuid.Equals(other.ChatEndpointGuid)
                ) && 
                (
                    this.EndpointGuid == other.EndpointGuid ||
                    this.EndpointGuid != null &&
                    this.EndpointGuid.Equals(other.EndpointGuid)
                ) && 
                (
                    this.RDCVersion == other.RDCVersion ||
                    this.RDCVersion != null &&
                    this.RDCVersion.Equals(other.RDCVersion)
                ) && 
                (
                    this.RDCControllerCapable == other.RDCControllerCapable ||
                    this.RDCControllerCapable != null &&
                    this.RDCControllerCapable.Equals(other.RDCControllerCapable)
                ) && 
                (
                    this.RDCControlleeCapable == other.RDCControlleeCapable ||
                    this.RDCControlleeCapable != null &&
                    this.RDCControlleeCapable.Equals(other.RDCControlleeCapable)
                ) && 
                (
                    this.Connections == other.Connections ||
                    this.Connections != null &&
                    this.Connections.SequenceEqual(other.Connections)
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
                if (this.Meetingid != null)
                    hash = hash * 59 + this.Meetingid.GetHashCode();
                if (this.Name != null)
                    hash = hash * 59 + this.Name.GetHashCode();
                if (this.CallQuality != null)
                    hash = hash * 59 + this.CallQuality.GetHashCode();
                if (this.Leader != null)
                    hash = hash * 59 + this.Leader.GetHashCode();
                if (this.Callguid != null)
                    hash = hash * 59 + this.Callguid.GetHashCode();
                if (this.Endpoint != null)
                    hash = hash * 59 + this.Endpoint.GetHashCode();
                if (this.TalkDetected != null)
                    hash = hash * 59 + this.TalkDetected.GetHashCode();
                if (this.SecureCall != null)
                    hash = hash * 59 + this.SecureCall.GetHashCode();
                if (this.Layout != null)
                    hash = hash * 59 + this.Layout.GetHashCode();
                if (this.SubLayout != null)
                    hash = hash * 59 + this.SubLayout.GetHashCode();
                if (this.VideoRecv != null)
                    hash = hash * 59 + this.VideoRecv.GetHashCode();
                if (this.VideoRecvLocalMute != null)
                    hash = hash * 59 + this.VideoRecvLocalMute.GetHashCode();
                if (this.VideoRecvRemoteMute != null)
                    hash = hash * 59 + this.VideoRecvRemoteMute.GetHashCode();
                if (this.AudioRecv != null)
                    hash = hash * 59 + this.AudioRecv.GetHashCode();
                if (this.AudioRecvLocalMute != null)
                    hash = hash * 59 + this.AudioRecvLocalMute.GetHashCode();
                if (this.AudioRecvRemoteMute != null)
                    hash = hash * 59 + this.AudioRecvRemoteMute.GetHashCode();
                if (this.AudioRecvCodec != null)
                    hash = hash * 59 + this.AudioRecvCodec.GetHashCode();
                if (this.AudioSendCodec != null)
                    hash = hash * 59 + this.AudioSendCodec.GetHashCode();
                if (this.VideoRecvCodec != null)
                    hash = hash * 59 + this.VideoRecvCodec.GetHashCode();
                if (this.VideoRecvHeight != null)
                    hash = hash * 59 + this.VideoRecvHeight.GetHashCode();
                if (this.VideoRecvWidth != null)
                    hash = hash * 59 + this.VideoRecvWidth.GetHashCode();
                if (this.VideoSendCodec != null)
                    hash = hash * 59 + this.VideoSendCodec.GetHashCode();
                if (this.VideoSendHeight != null)
                    hash = hash * 59 + this.VideoSendHeight.GetHashCode();
                if (this.VideoSendWidth != null)
                    hash = hash * 59 + this.VideoSendWidth.GetHashCode();
                if (this.Visibility != null)
                    hash = hash * 59 + this.Visibility.GetHashCode();
                if (this.ChatEndpointGuid != null)
                    hash = hash * 59 + this.ChatEndpointGuid.GetHashCode();
                if (this.EndpointGuid != null)
                    hash = hash * 59 + this.EndpointGuid.GetHashCode();
                if (this.RDCVersion != null)
                    hash = hash * 59 + this.RDCVersion.GetHashCode();
                if (this.RDCControllerCapable != null)
                    hash = hash * 59 + this.RDCControllerCapable.GetHashCode();
                if (this.RDCControlleeCapable != null)
                    hash = hash * 59 + this.RDCControlleeCapable.GetHashCode();
                if (this.Connections != null)
                    hash = hash * 59 + this.Connections.GetHashCode();
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
