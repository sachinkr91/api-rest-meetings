/**
 * BlueJeans onVideo REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
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
    // AMD. Register as an anonymous module.
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansOnVideoRestApi) {
      root.BlueJeansOnVideoRestApi = {};
    }
    root.BlueJeansOnVideoRestApi.MeetingIndigo = factory(root.BlueJeansOnVideoRestApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The MeetingIndigo model module.
   * @module model/MeetingIndigo
   * @version 1.0.0
   */

  /**
   * Constructs a new <code>MeetingIndigo</code>.
   * @alias module:model/MeetingIndigo
   * @class
   */
  var exports = function() {
    var _this = this;




































  };

  /**
   * Constructs a <code>MeetingIndigo</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/MeetingIndigo} obj Optional instance to populate.
   * @return {module:model/MeetingIndigo} The populated <code>MeetingIndigo</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('meetingId')) {
        obj['meetingId'] = ApiClient.convertToType(data['meetingId'], 'String');
      }
      if (data.hasOwnProperty('meetingUUID')) {
        obj['meetingUUID'] = ApiClient.convertToType(data['meetingUUID'], 'String');
      }
      if (data.hasOwnProperty('userName')) {
        obj['userName'] = ApiClient.convertToType(data['userName'], 'String');
      }
      if (data.hasOwnProperty('email')) {
        obj['email'] = ApiClient.convertToType(data['email'], 'String');
      }
      if (data.hasOwnProperty('encryptionType')) {
        obj['encryptionType'] = ApiClient.convertToType(data['encryptionType'], 'Number');
      }
      if (data.hasOwnProperty('title')) {
        obj['title'] = ApiClient.convertToType(data['title'], 'String');
      }
      if (data.hasOwnProperty('userFullName')) {
        obj['userFullName'] = ApiClient.convertToType(data['userFullName'], 'String');
      }
      if (data.hasOwnProperty('phoneNumber')) {
        obj['phoneNumber'] = ApiClient.convertToType(data['phoneNumber'], 'String');
      }
      if (data.hasOwnProperty('userFeatures')) {
        obj['userFeatures'] = ApiClient.convertToType(data['userFeatures'], 'String');
      }
      if (data.hasOwnProperty('scheduledFrom')) {
        obj['scheduledFrom'] = ApiClient.convertToType(data['scheduledFrom'], 'String');
      }
      if (data.hasOwnProperty('inviteeCount')) {
        obj['inviteeCount'] = ApiClient.convertToType(data['inviteeCount'], 'Number');
      }
      if (data.hasOwnProperty('personal')) {
        obj['personal'] = ApiClient.convertToType(data['personal'], 'Boolean');
      }
      if (data.hasOwnProperty('muteOnEntry')) {
        obj['muteOnEntry'] = ApiClient.convertToType(data['muteOnEntry'], 'Boolean');
      }
      if (data.hasOwnProperty('autoRecord')) {
        obj['autoRecord'] = ApiClient.convertToType(data['autoRecord'], 'Boolean');
      }
      if (data.hasOwnProperty('enterpriseName')) {
        obj['enterpriseName'] = ApiClient.convertToType(data['enterpriseName'], 'String');
      }
      if (data.hasOwnProperty('moderatorLess')) {
        obj['moderatorLess'] = ApiClient.convertToType(data['moderatorLess'], 'Boolean');
      }
      if (data.hasOwnProperty('startTime')) {
        obj['startTime'] = ApiClient.convertToType(data['startTime'], 'Number');
      }
      if (data.hasOwnProperty('endTime')) {
        obj['endTime'] = ApiClient.convertToType(data['endTime'], 'Number');
      }
      if (data.hasOwnProperty('totalCallSeconds')) {
        obj['totalCallSeconds'] = ApiClient.convertToType(data['totalCallSeconds'], 'Number');
      }
      if (data.hasOwnProperty('createTime')) {
        obj['createTime'] = ApiClient.convertToType(data['createTime'], 'Number');
      }
      if (data.hasOwnProperty('endpointsCount')) {
        obj['endpointsCount'] = ApiClient.convertToType(data['endpointsCount'], 'Number');
      }
      if (data.hasOwnProperty('concurrentEndpoints')) {
        obj['concurrentEndpoints'] = ApiClient.convertToType(data['concurrentEndpoints'], 'Number');
      }
      if (data.hasOwnProperty('liveVisibleEndpointsCount')) {
        obj['liveVisibleEndpointsCount'] = ApiClient.convertToType(data['liveVisibleEndpointsCount'], 'Number');
      }
      if (data.hasOwnProperty('qualarooRating')) {
        obj['qualarooRating'] = ApiClient.convertToType(data['qualarooRating'], 'Number');
      }
      if (data.hasOwnProperty('qualarooCount')) {
        obj['qualarooCount'] = ApiClient.convertToType(data['qualarooCount'], 'Number');
      }
      if (data.hasOwnProperty('meetingRecording')) {
        obj['meetingRecording'] = ApiClient.convertToType(data['meetingRecording'], 'Boolean');
      }
      if (data.hasOwnProperty('videoShare')) {
        obj['videoShare'] = ApiClient.convertToType(data['videoShare'], 'Boolean');
      }
      if (data.hasOwnProperty('contentShare')) {
        obj['contentShare'] = ApiClient.convertToType(data['contentShare'], 'Boolean');
      }
      if (data.hasOwnProperty('liveRecording')) {
        obj['liveRecording'] = ApiClient.convertToType(data['liveRecording'], 'Boolean');
      }
      if (data.hasOwnProperty('liveVideoShare')) {
        obj['liveVideoShare'] = ApiClient.convertToType(data['liveVideoShare'], 'Boolean');
      }
      if (data.hasOwnProperty('liveContentShare')) {
        obj['liveContentShare'] = ApiClient.convertToType(data['liveContentShare'], 'Boolean');
      }
      if (data.hasOwnProperty('largeMeeting')) {
        obj['largeMeeting'] = ApiClient.convertToType(data['largeMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('roiDistance')) {
        obj['roiDistance'] = ApiClient.convertToType(data['roiDistance'], 'Number');
      }
      if (data.hasOwnProperty('mpls')) {
        obj['mpls'] = ApiClient.convertToType(data['mpls'], 'Boolean');
      }
      if (data.hasOwnProperty('id')) {
        obj['id'] = ApiClient.convertToType(data['id'], 'String');
      }
    }
    return obj;
  }

  /**
   * This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
   * @member {String} meetingId
   */
  exports.prototype['meetingId'] = undefined;
  /**
   * The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
   * @member {String} meetingUUID
   */
  exports.prototype['meetingUUID'] = undefined;
  /**
   * @member {String} userName
   */
  exports.prototype['userName'] = undefined;
  /**
   * @member {String} email
   */
  exports.prototype['email'] = undefined;
  /**
   * @member {Number} encryptionType
   */
  exports.prototype['encryptionType'] = undefined;
  /**
   * @member {String} title
   */
  exports.prototype['title'] = undefined;
  /**
   * @member {String} userFullName
   */
  exports.prototype['userFullName'] = undefined;
  /**
   * @member {String} phoneNumber
   */
  exports.prototype['phoneNumber'] = undefined;
  /**
   * @member {String} userFeatures
   */
  exports.prototype['userFeatures'] = undefined;
  /**
   * @member {module:model/MeetingIndigo.ScheduledFromEnum} scheduledFrom
   */
  exports.prototype['scheduledFrom'] = undefined;
  /**
   * @member {Number} inviteeCount
   */
  exports.prototype['inviteeCount'] = undefined;
  /**
   * @member {Boolean} personal
   */
  exports.prototype['personal'] = undefined;
  /**
   * @member {Boolean} muteOnEntry
   */
  exports.prototype['muteOnEntry'] = undefined;
  /**
   * @member {Boolean} autoRecord
   */
  exports.prototype['autoRecord'] = undefined;
  /**
   * @member {String} enterpriseName
   */
  exports.prototype['enterpriseName'] = undefined;
  /**
   * @member {Boolean} moderatorLess
   */
  exports.prototype['moderatorLess'] = undefined;
  /**
   * @member {Number} startTime
   */
  exports.prototype['startTime'] = undefined;
  /**
   * @member {Number} endTime
   */
  exports.prototype['endTime'] = undefined;
  /**
   * @member {Number} totalCallSeconds
   */
  exports.prototype['totalCallSeconds'] = undefined;
  /**
   * @member {Number} createTime
   */
  exports.prototype['createTime'] = undefined;
  /**
   * @member {Number} endpointsCount
   */
  exports.prototype['endpointsCount'] = undefined;
  /**
   * @member {Number} concurrentEndpoints
   */
  exports.prototype['concurrentEndpoints'] = undefined;
  /**
   * @member {Number} liveVisibleEndpointsCount
   */
  exports.prototype['liveVisibleEndpointsCount'] = undefined;
  /**
   * @member {Number} qualarooRating
   */
  exports.prototype['qualarooRating'] = undefined;
  /**
   * @member {Number} qualarooCount
   */
  exports.prototype['qualarooCount'] = undefined;
  /**
   * @member {Boolean} meetingRecording
   */
  exports.prototype['meetingRecording'] = undefined;
  /**
   * @member {Boolean} videoShare
   */
  exports.prototype['videoShare'] = undefined;
  /**
   * @member {Boolean} contentShare
   */
  exports.prototype['contentShare'] = undefined;
  /**
   * @member {Boolean} liveRecording
   */
  exports.prototype['liveRecording'] = undefined;
  /**
   * @member {Boolean} liveVideoShare
   */
  exports.prototype['liveVideoShare'] = undefined;
  /**
   * @member {Boolean} liveContentShare
   */
  exports.prototype['liveContentShare'] = undefined;
  /**
   * @member {Boolean} largeMeeting
   */
  exports.prototype['largeMeeting'] = undefined;
  /**
   * @member {Number} roiDistance
   */
  exports.prototype['roiDistance'] = undefined;
  /**
   * @member {Boolean} mpls
   */
  exports.prototype['mpls'] = undefined;
  /**
   * Same as the meetingUUID property in this object.
   * @member {String} id
   */
  exports.prototype['id'] = undefined;


  /**
   * Allowed values for the <code>scheduledFrom</code> property.
   * @enum {String}
   * @readonly
   */
  exports.ScheduledFromEnum = {
    /**
     * value: "WEB_APP"
     * @const
     */
    "APP": "WEB_APP"  };


  return exports;
}));


