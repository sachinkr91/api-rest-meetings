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
    instance = new BlueJeansOnVideoRestApi.MeetingIndigo();
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

  describe('MeetingIndigo', function() {
    it('should create an instance of MeetingIndigo', function() {
      // uncomment below and update the code to test MeetingIndigo
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be.a(BlueJeansOnVideoRestApi.MeetingIndigo);
    });

    it('should have the property meetingId (base name: "meetingId")', function() {
      // uncomment below and update the code to test the property meetingId
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property meetingUUID (base name: "meetingUUID")', function() {
      // uncomment below and update the code to test the property meetingUUID
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userName (base name: "userName")', function() {
      // uncomment below and update the code to test the property userName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property email (base name: "email")', function() {
      // uncomment below and update the code to test the property email
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property encryptionType (base name: "encryptionType")', function() {
      // uncomment below and update the code to test the property encryptionType
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property title (base name: "title")', function() {
      // uncomment below and update the code to test the property title
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userFullName (base name: "userFullName")', function() {
      // uncomment below and update the code to test the property userFullName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property phoneNumber (base name: "phoneNumber")', function() {
      // uncomment below and update the code to test the property phoneNumber
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userFeatures (base name: "userFeatures")', function() {
      // uncomment below and update the code to test the property userFeatures
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property scheduledFrom (base name: "scheduledFrom")', function() {
      // uncomment below and update the code to test the property scheduledFrom
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property inviteeCount (base name: "inviteeCount")', function() {
      // uncomment below and update the code to test the property inviteeCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property personal (base name: "personal")', function() {
      // uncomment below and update the code to test the property personal
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property muteOnEntry (base name: "muteOnEntry")', function() {
      // uncomment below and update the code to test the property muteOnEntry
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property autoRecord (base name: "autoRecord")', function() {
      // uncomment below and update the code to test the property autoRecord
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property enterpriseName (base name: "enterpriseName")', function() {
      // uncomment below and update the code to test the property enterpriseName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property moderatorLess (base name: "moderatorLess")', function() {
      // uncomment below and update the code to test the property moderatorLess
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property startTime (base name: "startTime")', function() {
      // uncomment below and update the code to test the property startTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property endTime (base name: "endTime")', function() {
      // uncomment below and update the code to test the property endTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property totalCallSeconds (base name: "totalCallSeconds")', function() {
      // uncomment below and update the code to test the property totalCallSeconds
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property createTime (base name: "createTime")', function() {
      // uncomment below and update the code to test the property createTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property endpointsCount (base name: "endpointsCount")', function() {
      // uncomment below and update the code to test the property endpointsCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property concurrentEndpoints (base name: "concurrentEndpoints")', function() {
      // uncomment below and update the code to test the property concurrentEndpoints
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveVisibleEndpointsCount (base name: "liveVisibleEndpointsCount")', function() {
      // uncomment below and update the code to test the property liveVisibleEndpointsCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property qualarooRating (base name: "qualarooRating")', function() {
      // uncomment below and update the code to test the property qualarooRating
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property qualarooCount (base name: "qualarooCount")', function() {
      // uncomment below and update the code to test the property qualarooCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property meetingRecording (base name: "meetingRecording")', function() {
      // uncomment below and update the code to test the property meetingRecording
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property videoShare (base name: "videoShare")', function() {
      // uncomment below and update the code to test the property videoShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property contentShare (base name: "contentShare")', function() {
      // uncomment below and update the code to test the property contentShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveRecording (base name: "liveRecording")', function() {
      // uncomment below and update the code to test the property liveRecording
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveVideoShare (base name: "liveVideoShare")', function() {
      // uncomment below and update the code to test the property liveVideoShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveContentShare (base name: "liveContentShare")', function() {
      // uncomment below and update the code to test the property liveContentShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property largeMeeting (base name: "largeMeeting")', function() {
      // uncomment below and update the code to test the property largeMeeting
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property roiDistance (base name: "roiDistance")', function() {
      // uncomment below and update the code to test the property roiDistance
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property mpls (base name: "mpls")', function() {
      // uncomment below and update the code to test the property mpls
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property id (base name: "id")', function() {
      // uncomment below and update the code to test the property id
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

  });

}));
