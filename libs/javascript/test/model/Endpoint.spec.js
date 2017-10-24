/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.BlueJeansOnVideoRestApi);
  }
}(this, function(expect, BlueJeansOnVideoRestApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new BlueJeansOnVideoRestApi.Endpoint();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('Endpoint', function() {
    it('should create an instance of Endpoint', function() {
      // uncomment below and update the code to test Endpoint
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be.a(BlueJeansOnVideoRestApi.Endpoint);
    });

    it('should have the property ecMode (base name: "EcMode")', function() {
      // uncomment below and update the code to test the property ecMode
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property creationtime (base name: "creationtime")', function() {
      // uncomment below and update the code to test the property creationtime
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRemoteRtcpAddress (base name: "audio.remote.rtcpAddress")', function() {
      // uncomment below and update the code to test the property audioRemoteRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoSendCodec (base name: "VideoSendCodec")', function() {
      // uncomment below and update the code to test the property videoSendCodec
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioPlayID (base name: "AudioPlayID")', function() {
      // uncomment below and update the code to test the property audioPlayID
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callQualityRecv (base name: "CallQualityRecv")', function() {
      // uncomment below and update the code to test the property callQualityRecv
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionOut (base name: "SessionOut")', function() {
      // uncomment below and update the code to test the property sessionOut
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioLocalAddress (base name: "audio.local.address")', function() {
      // uncomment below and update the code to test the property audioLocalAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property meetingid (base name: "meetingid")', function() {
      // uncomment below and update the code to test the property meetingid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoSendWidth (base name: "VideoSendWidth")', function() {
      // uncomment below and update the code to test the property videoSendWidth
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callQualitySend (base name: "CallQualitySend")', function() {
      // uncomment below and update the code to test the property callQualitySend
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property mhaddress (base name: "mhaddress")', function() {
      // uncomment below and update the code to test the property mhaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property rDCControlleeCapable (base name: "RDCControlleeCapable")', function() {
      // uncomment below and update the code to test the property rDCControlleeCapable
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioCapName (base name: "AudioCapName")', function() {
      // uncomment below and update the code to test the property audioCapName
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property proxyInfo (base name: "ProxyInfo")', function() {
      // uncomment below and update the code to test the property proxyInfo
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioSendCodec (base name: "AudioSendCodec")', function() {
      // uncomment below and update the code to test the property audioSendCodec
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property vendor (base name: "vendor")', function() {
      // uncomment below and update the code to test the property vendor
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvWidth (base name: "VideoRecvWidth")', function() {
      // uncomment below and update the code to test the property videoRecvWidth
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property conaddress (base name: "conaddress")', function() {
      // uncomment below and update the code to test the property conaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property talkDetected (base name: "TalkDetected")', function() {
      // uncomment below and update the code to test the property talkDetected
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property subLayout (base name: "SubLayout")', function() {
      // uncomment below and update the code to test the property subLayout
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRtcpRelay (base name: "AudioRtcpRelay")', function() {
      // uncomment below and update the code to test the property audioRtcpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvLocalMute (base name: "AudioRecvLocalMute")', function() {
      // uncomment below and update the code to test the property audioRecvLocalMute
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoLocalAddress (base name: "video.local.address")', function() {
      // uncomment below and update the code to test the property videoLocalAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioLocalRtcpAddress (base name: "audio.local.rtcpAddress")', function() {
      // uncomment below and update the code to test the property audioLocalRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRtpRelay (base name: "ContentRtpRelay")', function() {
      // uncomment below and update the code to test the property contentRtpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentLocalRtcpAddress (base name: "content.local.rtcpAddress")', function() {
      // uncomment below and update the code to test the property contentLocalRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property remoteConnectionCount (base name: "RemoteConnectionCount")', function() {
      // uncomment below and update the code to test the property remoteConnectionCount
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callrate (base name: "callrate")', function() {
      // uncomment below and update the code to test the property callrate
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property mixerGuid (base name: "MixerGuid")', function() {
      // uncomment below and update the code to test the property mixerGuid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property transport (base name: "transport")', function() {
      // uncomment below and update the code to test the property transport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioCapSelectID (base name: "AudioCapSelectID")', function() {
      // uncomment below and update the code to test the property audioCapSelectID
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property countryCode (base name: "CountryCode")', function() {
      // uncomment below and update the code to test the property countryCode
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property rDCControllerCapable (base name: "RDCControllerCapable")', function() {
      // uncomment below and update the code to test the property rDCControllerCapable
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property pairedname (base name: "pairedname")', function() {
      // uncomment below and update the code to test the property pairedname
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRtcpRelay (base name: "VideoRtcpRelay")', function() {
      // uncomment below and update the code to test the property videoRtcpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property endpointCpuParams (base name: "EndpointCpuParams")', function() {
      // uncomment below and update the code to test the property endpointCpuParams
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRemoteAddress (base name: "video.remote.address")', function() {
      // uncomment below and update the code to test the property videoRemoteAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property version (base name: "version")', function() {
      // uncomment below and update the code to test the property version
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRecv (base name: "ContentRecv")', function() {
      // uncomment below and update the code to test the property contentRecv
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property localName (base name: "localName")', function() {
      // uncomment below and update the code to test the property localName
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property bJNUserId (base name: "BJNUserId")', function() {
      // uncomment below and update the code to test the property bJNUserId
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRemoteAddress (base name: "content.remote.address")', function() {
      // uncomment below and update the code to test the property contentRemoteAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioSend (base name: "AudioSend")', function() {
      // uncomment below and update the code to test the property audioSend
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property participantDTMFMenus (base name: "ParticipantDTMFMenus")', function() {
      // uncomment below and update the code to test the property participantDTMFMenus
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRtcpTranspor (base name: "VideoRtcpTranspor")', function() {
      // uncomment below and update the code to test the property videoRtcpTranspor
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRtcpTransport (base name: "AudioRtcpTransport")', function() {
      // uncomment below and update the code to test the property audioRtcpTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property relayNodeId (base name: "RelayNodeId")', function() {
      // uncomment below and update the code to test the property relayNodeId
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRemoteRtcpAddress (base name: "content.remote.rtcpAddress")', function() {
      // uncomment below and update the code to test the property contentRemoteRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRtpRelay (base name: "AudioRtpRelay")', function() {
      // uncomment below and update the code to test the property audioRtpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRtpTransport (base name: "VideoRtpTransport")', function() {
      // uncomment below and update the code to test the property videoRtpTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvLocalMute (base name: "ContentRecvLocalMute")', function() {
      // uncomment below and update the code to test the property contentRecvLocalMute
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property layout (base name: "Layout")', function() {
      // uncomment below and update the code to test the property layout
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentSend (base name: "ContentSend")', function() {
      // uncomment below and update the code to test the property contentSend
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property remoteaddress (base name: "remoteaddress")', function() {
      // uncomment below and update the code to test the property remoteaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property meetingGuid (base name: "MeetingGuid")', function() {
      // uncomment below and update the code to test the property meetingGuid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property connecttime (base name: "connecttime")', function() {
      // uncomment below and update the code to test the property connecttime
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property localaddress (base name: "localaddress")', function() {
      // uncomment below and update the code to test the property localaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRemoteAddress (base name: "audio.remote.address")', function() {
      // uncomment below and update the code to test the property audioRemoteAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property bondedAudioGuid (base name: "BondedAudioGuid")', function() {
      // uncomment below and update the code to test the property bondedAudioGuid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvRemoteMute (base name: "AudioRecvRemoteMute")', function() {
      // uncomment below and update the code to test the property audioRecvRemoteMute
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionOutRelay (base name: "SessionOutRelay")', function() {
      // uncomment below and update the code to test the property sessionOutRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property leader (base name: "Leader")', function() {
      // uncomment below and update the code to test the property leader
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentLocalAddress (base name: "content.local.address")', function() {
      // uncomment below and update the code to test the property contentLocalAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property movieCapable (base name: "MovieCapable")', function() {
      // uncomment below and update the code to test the property movieCapable
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvLocalMute (base name: "VideoRecvLocalMute")', function() {
      // uncomment below and update the code to test the property videoRecvLocalMute
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRtpTransport (base name: "ContentRtpTransport")', function() {
      // uncomment below and update the code to test the property contentRtpTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property rDCVersion (base name: "RDCVersion")', function() {
      // uncomment below and update the code to test the property rDCVersion
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRecv (base name: "AudioRecv")', function() {
      // uncomment below and update the code to test the property audioRecv
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRelayServer (base name: "ContentRelayServer")', function() {
      // uncomment below and update the code to test the property contentRelayServer
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecv (base name: "VideoRecv")', function() {
      // uncomment below and update the code to test the property videoRecv
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property visibility (base name: "visibility")', function() {
      // uncomment below and update the code to test the property visibility
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionid (base name: "sessionid")', function() {
      // uncomment below and update the code to test the property sessionid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRtcpRelay (base name: "ContentRtcpRelay")', function() {
      // uncomment below and update the code to test the property contentRtcpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property locales (base name: "locales")', function() {
      // uncomment below and update the code to test the property locales
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property medaddress (base name: "medaddress")', function() {
      // uncomment below and update the code to test the property medaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property htmlLayoutGuid (base name: "HtmlLayoutGuid")', function() {
      // uncomment below and update the code to test the property htmlLayoutGuid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property endpoint (base name: "endpoint")', function() {
      // uncomment below and update the code to test the property endpoint
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoDrop (base name: "VideoDrop")', function() {
      // uncomment below and update the code to test the property videoDrop
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRtcpTransport (base name: "ContentRtcpTransport")', function() {
      // uncomment below and update the code to test the property contentRtcpTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRemoteRtcpAddress (base name: "video.remote.rtcpAddress")', function() {
      // uncomment below and update the code to test the property videoRemoteRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRtpRelay (base name: "VideoRtpRelay")', function() {
      // uncomment below and update the code to test the property videoRtpRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property mixaddress (base name: "mixaddress")', function() {
      // uncomment below and update the code to test the property mixaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sIPHTTPProxyTransport (base name: "SIPHTTPProxyTransport")', function() {
      // uncomment below and update the code to test the property sIPHTTPProxyTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvCodec (base name: "VideoRecvCodec")', function() {
      // uncomment below and update the code to test the property videoRecvCodec
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvCodec (base name: "AudioRecvCodec")', function() {
      // uncomment below and update the code to test the property audioRecvCodec
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionIn (base name: "SessionIn")', function() {
      // uncomment below and update the code to test the property sessionIn
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property bondedVideoGuid (base name: "BondedVideoGuid")', function() {
      // uncomment below and update the code to test the property bondedVideoGuid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callQuality (base name: "CallQuality")', function() {
      // uncomment below and update the code to test the property callQuality
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property meetingjointime (base name: "meetingjointime")', function() {
      // uncomment below and update the code to test the property meetingjointime
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionInRelay (base name: "SessionInRelay")', function() {
      // uncomment below and update the code to test the property sessionInRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property pairedremoteaddress (base name: "pairedremoteaddress")', function() {
      // uncomment below and update the code to test the property pairedremoteaddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoSendHeight (base name: "VideoSendHeight")', function() {
      // uncomment below and update the code to test the property videoSendHeight
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvHeight (base name: "VideoRecvHeight")', function() {
      // uncomment below and update the code to test the property videoRecvHeight
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property secureCall (base name: "SecureCall")', function() {
      // uncomment below and update the code to test the property secureCall
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoLocalRtcpAddress (base name: "video.local.rtcpAddress")', function() {
      // uncomment below and update the code to test the property videoLocalRtcpAddress
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioPlayName (base name: "AudioPlayName")', function() {
      // uncomment below and update the code to test the property audioPlayName
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoCapID (base name: "VideoCapID")', function() {
      // uncomment below and update the code to test the property videoCapID
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioRtpTransport (base name: "AudioRtpTransport")', function() {
      // uncomment below and update the code to test the property audioRtpTransport
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property meetingInfoMode (base name: "MeetingInfoMode")', function() {
      // uncomment below and update the code to test the property meetingInfoMode
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callhostname (base name: "callhostname")', function() {
      // uncomment below and update the code to test the property callhostname
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property callguid (base name: "callguid")', function() {
      // uncomment below and update the code to test the property callguid
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property audioCapID (base name: "AudioCapID")', function() {
      // uncomment below and update the code to test the property audioCapID
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoSend (base name: "VideoSend")', function() {
      // uncomment below and update the code to test the property videoSend
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvCodec (base name: "ContentRecvCodec")', function() {
      // uncomment below and update the code to test the property contentRecvCodec
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property sessionRelay (base name: "SessionRelay")', function() {
      // uncomment below and update the code to test the property sessionRelay
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvRemoteMute (base name: "VideoRecvRemoteMute")', function() {
      // uncomment below and update the code to test the property videoRecvRemoteMute
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property id (base name: "Id")', function() {
      // uncomment below and update the code to test the property id
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property bondedVideoName (base name: "BondedVideoName")', function() {
      // uncomment below and update the code to test the property bondedVideoName
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

    it('should have the property isInRoster (base name: "isInRoster")', function() {
      // uncomment below and update the code to test the property isInRoster
      //var instane = new BlueJeansOnVideoRestApi.Endpoint();
      //expect(instance).to.be();
    });

  });

}));
