/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407102018
 * Contact: glenn@bluejeans.com
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
    factory(root.expect, root.BlueJeansMeetingsRestApi);
  }
}(this, function(expect, BlueJeansMeetingsRestApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
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

  describe('EndpointIndigoSummaryStats', function() {
    it('should create an instance of EndpointIndigoSummaryStats', function() {
      // uncomment below and update the code to test EndpointIndigoSummaryStats
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be.a(BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats);
    });

    it('should have the property audioRecvCodec (base name: "audioRecvCodec")', function() {
      // uncomment below and update the code to test the property audioRecvCodec
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property audioSendCodec (base name: "audioSendCodec")', function() {
      // uncomment below and update the code to test the property audioSendCodec
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentRecv (base name: "contentRecv")', function() {
      // uncomment below and update the code to test the property contentRecv
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentSend (base name: "contentSend")', function() {
      // uncomment below and update the code to test the property contentSend
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property talkDetected (base name: "talkDetected")', function() {
      // uncomment below and update the code to test the property talkDetected
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property sessionRelay (base name: "sessionRelay")', function() {
      // uncomment below and update the code to test the property sessionRelay
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property sessionInRelay (base name: "sessionInRelay")', function() {
      // uncomment below and update the code to test the property sessionInRelay
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property sessionOutRelay (base name: "sessionOutRelay")', function() {
      // uncomment below and update the code to test the property sessionOutRelay
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property audioRtpRelay (base name: "audioRtpRelay")', function() {
      // uncomment below and update the code to test the property audioRtpRelay
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property callRate (base name: "callRate")', function() {
      // uncomment below and update the code to test the property callRate
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentAI (base name: "cumulLoss_Percent_AI")', function() {
      // uncomment below and update the code to test the property cumulLossPercentAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentAO (base name: "cumulLoss_Percent_AO")', function() {
      // uncomment below and update the code to test the property cumulLossPercentAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentVI (base name: "cumulLoss_Percent_VI")', function() {
      // uncomment below and update the code to test the property cumulLossPercentVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentVO (base name: "cumulLoss_Percent_VO")', function() {
      // uncomment below and update the code to test the property cumulLossPercentVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentVIC (base name: "cumulLoss_Percent_VIC")', function() {
      // uncomment below and update the code to test the property cumulLossPercentVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossPercentVOC (base name: "cumulLoss_Percent_VOC")', function() {
      // uncomment below and update the code to test the property cumulLossPercentVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossAI (base name: "cumulLoss_AI")', function() {
      // uncomment below and update the code to test the property cumulLossAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossAO (base name: "cumulLoss_AO")', function() {
      // uncomment below and update the code to test the property cumulLossAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossVI (base name: "cumulLoss_VI")', function() {
      // uncomment below and update the code to test the property cumulLossVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossVO (base name: "cumulLoss_VO")', function() {
      // uncomment below and update the code to test the property cumulLossVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossVIC (base name: "cumulLoss_VIC")', function() {
      // uncomment below and update the code to test the property cumulLossVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property cumulLossVOC (base name: "cumulLoss_VOC")', function() {
      // uncomment below and update the code to test the property cumulLossVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property discontinuityCount (base name: "discontinuityCount")', function() {
      // uncomment below and update the code to test the property discontinuityCount
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property droppedPacketsAI (base name: "droppedPackets_AI")', function() {
      // uncomment below and update the code to test the property droppedPacketsAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property droppedPacketsVI (base name: "droppedPackets_VI")', function() {
      // uncomment below and update the code to test the property droppedPacketsVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property droppedPacketsVIC (base name: "droppedPackets_VIC")', function() {
      // uncomment below and update the code to test the property droppedPacketsVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property mixUnderRunsAI (base name: "mixUnderRuns_AI")', function() {
      // uncomment below and update the code to test the property mixUnderRunsAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkAvgLossAI (base name: "networkAvgLoss_AI")', function() {
      // uncomment below and update the code to test the property networkAvgLossAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkAvgLossAO (base name: "networkAvgLoss_AO")', function() {
      // uncomment below and update the code to test the property networkAvgLossAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkAvgLossVI (base name: "networkAvgLoss_VI")', function() {
      // uncomment below and update the code to test the property networkAvgLossVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkAvgLossVO (base name: "networkAvgLoss_VO")', function() {
      // uncomment below and update the code to test the property networkAvgLossVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkCumulLossAI (base name: "networkCumulLoss_AI")', function() {
      // uncomment below and update the code to test the property networkCumulLossAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkCumulLossAO (base name: "networkCumulLoss_AO")', function() {
      // uncomment below and update the code to test the property networkCumulLossAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkCumulLossVI (base name: "networkCumulLoss_VI")', function() {
      // uncomment below and update the code to test the property networkCumulLossVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkCumulLossVO (base name: "networkCumulLoss_VO")', function() {
      // uncomment below and update the code to test the property networkCumulLossVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkLossAI (base name: "networkLoss_AI")', function() {
      // uncomment below and update the code to test the property networkLossAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkLossAO (base name: "networkLoss_AO")', function() {
      // uncomment below and update the code to test the property networkLossAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkLossVI (base name: "networkLoss_VI")', function() {
      // uncomment below and update the code to test the property networkLossVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property networkLossVO (base name: "networkLoss_VO")', function() {
      // uncomment below and update the code to test the property networkLossVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property callQualityMin (base name: "callQuality_Min")', function() {
      // uncomment below and update the code to test the property callQualityMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property callQualityMax (base name: "callQuality_Max")', function() {
      // uncomment below and update the code to test the property callQualityMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property callQualityAvg (base name: "callQuality_Avg")', function() {
      // uncomment below and update the code to test the property callQualityAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMinVI (base name: "fps_Min_VI")', function() {
      // uncomment below and update the code to test the property fpsMinVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMinVO (base name: "fps_Min_VO")', function() {
      // uncomment below and update the code to test the property fpsMinVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMinVIC (base name: "fps_Min_VIC")', function() {
      // uncomment below and update the code to test the property fpsMinVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMinVOC (base name: "fps_Min_VOC")', function() {
      // uncomment below and update the code to test the property fpsMinVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMaxVI (base name: "fps_Max_VI")', function() {
      // uncomment below and update the code to test the property fpsMaxVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMaxVO (base name: "fps_Max_VO")', function() {
      // uncomment below and update the code to test the property fpsMaxVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMaxVIC (base name: "fps_Max_VIC")', function() {
      // uncomment below and update the code to test the property fpsMaxVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsMaxVOC (base name: "fps_Max_VOC")', function() {
      // uncomment below and update the code to test the property fpsMaxVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsAvgVI (base name: "fps_Avg_VI")', function() {
      // uncomment below and update the code to test the property fpsAvgVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsAvgVO (base name: "fps_Avg_VO")', function() {
      // uncomment below and update the code to test the property fpsAvgVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsAvgVIC (base name: "fps_Avg_VIC")', function() {
      // uncomment below and update the code to test the property fpsAvgVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property fpsAvgVOC (base name: "fps_Avg_VOC")', function() {
      // uncomment below and update the code to test the property fpsAvgVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinAI (base name: "bitrate_Min_AI")', function() {
      // uncomment below and update the code to test the property bitrateMinAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinAO (base name: "bitrate_Min_AO")', function() {
      // uncomment below and update the code to test the property bitrateMinAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinVI (base name: "bitrate_Min_VI")', function() {
      // uncomment below and update the code to test the property bitrateMinVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinVO (base name: "bitrate_Min_VO")', function() {
      // uncomment below and update the code to test the property bitrateMinVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinVIC (base name: "bitrate_Min_VIC")', function() {
      // uncomment below and update the code to test the property bitrateMinVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMinVOC (base name: "bitrate_Min_VOC")', function() {
      // uncomment below and update the code to test the property bitrateMinVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxAI (base name: "bitrate_Max_AI")', function() {
      // uncomment below and update the code to test the property bitrateMaxAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxAO (base name: "bitrate_Max_AO")', function() {
      // uncomment below and update the code to test the property bitrateMaxAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxVI (base name: "bitrate_Max_VI")', function() {
      // uncomment below and update the code to test the property bitrateMaxVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxVO (base name: "bitrate_Max_VO")', function() {
      // uncomment below and update the code to test the property bitrateMaxVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxVIC (base name: "bitrate_Max_VIC")', function() {
      // uncomment below and update the code to test the property bitrateMaxVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateMaxVOC (base name: "bitrate_Max_VOC")', function() {
      // uncomment below and update the code to test the property bitrateMaxVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgAI (base name: "bitrate_Avg_AI")', function() {
      // uncomment below and update the code to test the property bitrateAvgAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgAO (base name: "bitrate_Avg_AO")', function() {
      // uncomment below and update the code to test the property bitrateAvgAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgVI (base name: "bitrate_Avg_VI")', function() {
      // uncomment below and update the code to test the property bitrateAvgVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgVO (base name: "bitrate_Avg_VO")', function() {
      // uncomment below and update the code to test the property bitrateAvgVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgVIC (base name: "bitrate_Avg_VIC")', function() {
      // uncomment below and update the code to test the property bitrateAvgVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property bitrateAvgVOC (base name: "bitrate_Avg_VOC")', function() {
      // uncomment below and update the code to test the property bitrateAvgVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinAI (base name: "jitter_Min_AI")', function() {
      // uncomment below and update the code to test the property jitterMinAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinAO (base name: "jitter_Min_AO")', function() {
      // uncomment below and update the code to test the property jitterMinAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinVI (base name: "jitter_Min_VI")', function() {
      // uncomment below and update the code to test the property jitterMinVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinVO (base name: "jitter_Min_VO")', function() {
      // uncomment below and update the code to test the property jitterMinVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinVIC (base name: "jitter_Min_VIC")', function() {
      // uncomment below and update the code to test the property jitterMinVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMinVOC (base name: "jitter_Min_VOC")', function() {
      // uncomment below and update the code to test the property jitterMinVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxAI (base name: "jitter_Max_AI")', function() {
      // uncomment below and update the code to test the property jitterMaxAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxAO (base name: "jitter_Max_AO")', function() {
      // uncomment below and update the code to test the property jitterMaxAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxVI (base name: "jitter_Max_VI")', function() {
      // uncomment below and update the code to test the property jitterMaxVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxVO (base name: "jitter_Max_VO")', function() {
      // uncomment below and update the code to test the property jitterMaxVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxVIC (base name: "jitter_Max_VIC")', function() {
      // uncomment below and update the code to test the property jitterMaxVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterMaxVOC (base name: "jitter_Max_VOC")', function() {
      // uncomment below and update the code to test the property jitterMaxVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgAI (base name: "jitter_Avg_AI")', function() {
      // uncomment below and update the code to test the property jitterAvgAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgAO (base name: "jitter_Avg_AO")', function() {
      // uncomment below and update the code to test the property jitterAvgAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgVI (base name: "jitter_Avg_VI")', function() {
      // uncomment below and update the code to test the property jitterAvgVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgVO (base name: "jitter_Avg_VO")', function() {
      // uncomment below and update the code to test the property jitterAvgVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgVIC (base name: "jitter_Avg_VIC")', function() {
      // uncomment below and update the code to test the property jitterAvgVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property jitterAvgVOC (base name: "jitter_Avg_VOC")', function() {
      // uncomment below and update the code to test the property jitterAvgVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMinAI (base name: "maxJitter_Min_AI")', function() {
      // uncomment below and update the code to test the property maxJitterMinAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMinVI (base name: "maxJitter_Min_VI")', function() {
      // uncomment below and update the code to test the property maxJitterMinVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMinVIC (base name: "maxJitter_Min_VIC")', function() {
      // uncomment below and update the code to test the property maxJitterMinVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMaxAI (base name: "maxJitter_Max_AI")', function() {
      // uncomment below and update the code to test the property maxJitterMaxAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMaxVI (base name: "maxJitter_Max_VI")', function() {
      // uncomment below and update the code to test the property maxJitterMaxVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterMaxVIC (base name: "maxJitter_Max_VIC")', function() {
      // uncomment below and update the code to test the property maxJitterMaxVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterAvgAI (base name: "maxJitter_Avg_AI")', function() {
      // uncomment below and update the code to test the property maxJitterAvgAI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterAvgVI (base name: "maxJitter_Avg_VI")', function() {
      // uncomment below and update the code to test the property maxJitterAvgVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property maxJitterAvgVIC (base name: "maxJitter_Avg_VIC")', function() {
      // uncomment below and update the code to test the property maxJitterAvgVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvHeightMin (base name: "videoRecvHeight_Min")', function() {
      // uncomment below and update the code to test the property videoRecvHeightMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvHeightMax (base name: "videoRecvHeight_Max")', function() {
      // uncomment below and update the code to test the property videoRecvHeightMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvWidthMin (base name: "videoRecvWidth_Min")', function() {
      // uncomment below and update the code to test the property videoRecvWidthMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvWidthMax (base name: "videoRecvWidth_Max")', function() {
      // uncomment below and update the code to test the property videoRecvWidthMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoSendHeightMin (base name: "videoSendHeight_Min")', function() {
      // uncomment below and update the code to test the property videoSendHeightMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoSendHeightMax (base name: "videoSendHeight_Max")', function() {
      // uncomment below and update the code to test the property videoSendHeightMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoSendWidthMin (base name: "videoSendWidth_Min")', function() {
      // uncomment below and update the code to test the property videoSendWidthMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property videoSendWidthMax (base name: "videoSendWidth_Max")', function() {
      // uncomment below and update the code to test the property videoSendWidthMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvHeightMin (base name: "contentRecvHeight_Min")', function() {
      // uncomment below and update the code to test the property contentRecvHeightMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvHeightMax (base name: "contentRecvHeight_Max")', function() {
      // uncomment below and update the code to test the property contentRecvHeightMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvWidthMin (base name: "contentRecvWidth_Min")', function() {
      // uncomment below and update the code to test the property contentRecvWidthMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentRecvWidthMax (base name: "contentRecvWidth_Max")', function() {
      // uncomment below and update the code to test the property contentRecvWidthMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentSendHeightMin (base name: "contentSendHeight_Min")', function() {
      // uncomment below and update the code to test the property contentSendHeightMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentSendHeightMax (base name: "contentSendHeight_Max")', function() {
      // uncomment below and update the code to test the property contentSendHeightMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentSendWidthMin (base name: "contentSendWidth_Min")', function() {
      // uncomment below and update the code to test the property contentSendWidthMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property contentSendWidthMax (base name: "contentSendWidth_Max")', function() {
      // uncomment below and update the code to test the property contentSendWidthMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayMin (base name: "roundTripDelay_Min")', function() {
      // uncomment below and update the code to test the property roundTripDelayMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayMax (base name: "roundTripDelay_Max")', function() {
      // uncomment below and update the code to test the property roundTripDelayMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayAvg (base name: "roundTripDelay_Avg")', function() {
      // uncomment below and update the code to test the property roundTripDelayAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property rfactorMin (base name: "rfactor_Min")', function() {
      // uncomment below and update the code to test the property rfactorMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property rfactorMax (base name: "rfactor_Max")', function() {
      // uncomment below and update the code to test the property rfactorMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property rfactorAvg (base name: "rfactor_Avg")', function() {
      // uncomment below and update the code to test the property rfactorAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property processCpuLoadMin (base name: "processCpuLoad_Min")', function() {
      // uncomment below and update the code to test the property processCpuLoadMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property processCpuLoadMax (base name: "processCpuLoad_Max")', function() {
      // uncomment below and update the code to test the property processCpuLoadMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property processCpuLoadAvg (base name: "processCpuLoad_Avg")', function() {
      // uncomment below and update the code to test the property processCpuLoadAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property systemCpuLoadMin (base name: "systemCpuLoad_Min")', function() {
      // uncomment below and update the code to test the property systemCpuLoadMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property systemCpuLoadMax (base name: "systemCpuLoad_Max")', function() {
      // uncomment below and update the code to test the property systemCpuLoadMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property systemCpuLoadAvg (base name: "systemCpuLoad_Avg")', function() {
      // uncomment below and update the code to test the property systemCpuLoadAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property wifiRecvStrengthMin (base name: "wifiRecvStrength_Min")', function() {
      // uncomment below and update the code to test the property wifiRecvStrengthMin
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property wifiRecvStrengthMax (base name: "wifiRecvStrength_Max")', function() {
      // uncomment below and update the code to test the property wifiRecvStrengthMax
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property wifiRecvStrengthAvg (base name: "wifiRecvStrength_Avg")', function() {
      // uncomment below and update the code to test the property wifiRecvStrengthAvg
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateAvgVI (base name: "keyFrameRate_Avg_VI")', function() {
      // uncomment below and update the code to test the property keyFrameRateAvgVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateAvgVO (base name: "keyFrameRate_Avg_VO")', function() {
      // uncomment below and update the code to test the property keyFrameRateAvgVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateAvgVIC (base name: "keyFrameRate_Avg_VIC")', function() {
      // uncomment below and update the code to test the property keyFrameRateAvgVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateAvgVOC (base name: "keyFrameRate_Avg_VOC")', function() {
      // uncomment below and update the code to test the property keyFrameRateAvgVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMinVI (base name: "keyFrameRate_Min_VI")', function() {
      // uncomment below and update the code to test the property keyFrameRateMinVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMinVO (base name: "keyFrameRate_Min_VO")', function() {
      // uncomment below and update the code to test the property keyFrameRateMinVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMinVIC (base name: "keyFrameRate_Min_VIC")', function() {
      // uncomment below and update the code to test the property keyFrameRateMinVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMinVOC (base name: "keyFrameRate_Min_VOC")', function() {
      // uncomment below and update the code to test the property keyFrameRateMinVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMaxVI (base name: "keyFrameRate_Max_VI")', function() {
      // uncomment below and update the code to test the property keyFrameRateMaxVI
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMaxVO (base name: "keyFrameRate_Max_VO")', function() {
      // uncomment below and update the code to test the property keyFrameRateMaxVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMaxVIC (base name: "keyFrameRate_Max_VIC")', function() {
      // uncomment below and update the code to test the property keyFrameRateMaxVIC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property keyFrameRateMaxVOC (base name: "keyFrameRate_Max_VOC")', function() {
      // uncomment below and update the code to test the property keyFrameRateMaxVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayAvgVO (base name: "roundTripDelay_Avg_VO")', function() {
      // uncomment below and update the code to test the property roundTripDelayAvgVO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayAvgVOC (base name: "roundTripDelay_Avg_VOC")', function() {
      // uncomment below and update the code to test the property roundTripDelayAvgVOC
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

    it('should have the property roundTripDelayAvgAO (base name: "roundTripDelay_Avg_AO")', function() {
      // uncomment below and update the code to test the property roundTripDelayAvgAO
      //var instane = new BlueJeansMeetingsRestApi.EndpointIndigoSummaryStats();
      //expect(instance).to.be();
    });

  });

}));
