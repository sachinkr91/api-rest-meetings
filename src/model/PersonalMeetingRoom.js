/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/PersonalMeetingRoomAdvancedMeetingOptions', 'model/PersonalMeetingRoomAttendees', 'model/PersonalMeetingRoomFirst', 'model/PersonalMeetingRoomLast', 'model/PersonalMeetingRoomModerator', 'model/PersonalMeetingRoomNext'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./PersonalMeetingRoomAdvancedMeetingOptions'), require('./PersonalMeetingRoomAttendees'), require('./PersonalMeetingRoomFirst'), require('./PersonalMeetingRoomLast'), require('./PersonalMeetingRoomModerator'), require('./PersonalMeetingRoomNext'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.PersonalMeetingRoom = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomAdvancedMeetingOptions, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomAttendees, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomFirst, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomLast, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomModerator, root.BlueJeansMeetingsRestApi.PersonalMeetingRoomNext);
  }
}(this, function(ApiClient, PersonalMeetingRoomAdvancedMeetingOptions, PersonalMeetingRoomAttendees, PersonalMeetingRoomFirst, PersonalMeetingRoomLast, PersonalMeetingRoomModerator, PersonalMeetingRoomNext) {
  'use strict';




  /**
   * The PersonalMeetingRoom model module.
   * @module model/PersonalMeetingRoom
   * @version 1.0.4407232018
   */

  /**
   * Constructs a new <code>PersonalMeetingRoom</code>.
   * @alias module:model/PersonalMeetingRoom
   * @class
   */
  var exports = function() {
    var _this = this;








































  };

  /**
   * Constructs a <code>PersonalMeetingRoom</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/PersonalMeetingRoom} obj Optional instance to populate.
   * @return {module:model/PersonalMeetingRoom} The populated <code>PersonalMeetingRoom</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('id')) {
        obj['id'] = ApiClient.convertToType(data['id'], 'Number');
      }
      if (data.hasOwnProperty('uuid')) {
        obj['uuid'] = ApiClient.convertToType(data['uuid'], 'String');
      }
      if (data.hasOwnProperty('title')) {
        obj['title'] = ApiClient.convertToType(data['title'], 'String');
      }
      if (data.hasOwnProperty('description')) {
        obj['description'] = ApiClient.convertToType(data['description'], 'String');
      }
      if (data.hasOwnProperty('start')) {
        obj['start'] = ApiClient.convertToType(data['start'], 'Number');
      }
      if (data.hasOwnProperty('end')) {
        obj['end'] = ApiClient.convertToType(data['end'], 'Number');
      }
      if (data.hasOwnProperty('timezone')) {
        obj['timezone'] = ApiClient.convertToType(data['timezone'], 'String');
      }
      if (data.hasOwnProperty('advancedMeetingOptions')) {
        obj['advancedMeetingOptions'] = PersonalMeetingRoomAdvancedMeetingOptions.constructFromObject(data['advancedMeetingOptions']);
      }
      if (data.hasOwnProperty('notificationUrl')) {
        obj['notificationUrl'] = ApiClient.convertToType(data['notificationUrl'], 'String');
      }
      if (data.hasOwnProperty('notificationData')) {
        obj['notificationData'] = ApiClient.convertToType(data['notificationData'], 'String');
      }
      if (data.hasOwnProperty('moderator')) {
        obj['moderator'] = PersonalMeetingRoomModerator.constructFromObject(data['moderator']);
      }
      if (data.hasOwnProperty('numericMeetingId')) {
        obj['numericMeetingId'] = ApiClient.convertToType(data['numericMeetingId'], 'String');
      }
      if (data.hasOwnProperty('attendeePasscode')) {
        obj['attendeePasscode'] = ApiClient.convertToType(data['attendeePasscode'], 'String');
      }
      if (data.hasOwnProperty('addAttendeePasscode')) {
        obj['addAttendeePasscode'] = ApiClient.convertToType(data['addAttendeePasscode'], 'Boolean');
      }
      if (data.hasOwnProperty('deleted')) {
        obj['deleted'] = ApiClient.convertToType(data['deleted'], 'Boolean');
      }
      if (data.hasOwnProperty('allow720p')) {
        obj['allow720p'] = ApiClient.convertToType(data['allow720p'], 'Boolean');
      }
      if (data.hasOwnProperty('status')) {
        obj['status'] = ApiClient.convertToType(data['status'], 'String');
      }
      if (data.hasOwnProperty('locked')) {
        obj['locked'] = ApiClient.convertToType(data['locked'], 'Boolean');
      }
      if (data.hasOwnProperty('sequenceNumber')) {
        obj['sequenceNumber'] = ApiClient.convertToType(data['sequenceNumber'], 'Number');
      }
      if (data.hasOwnProperty('icsUid')) {
        obj['icsUid'] = ApiClient.convertToType(data['icsUid'], 'String');
      }
      if (data.hasOwnProperty('endPointType')) {
        obj['endPointType'] = ApiClient.convertToType(data['endPointType'], 'String');
      }
      if (data.hasOwnProperty('endPointVersion')) {
        obj['endPointVersion'] = ApiClient.convertToType(data['endPointVersion'], 'String');
      }
      if (data.hasOwnProperty('attendees')) {
        obj['attendees'] = ApiClient.convertToType(data['attendees'], [PersonalMeetingRoomAttendees]);
      }
      if (data.hasOwnProperty('isLargeMeeting')) {
        obj['isLargeMeeting'] = ApiClient.convertToType(data['isLargeMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('created')) {
        obj['created'] = ApiClient.convertToType(data['created'], 'Number');
      }
      if (data.hasOwnProperty('lastModified')) {
        obj['lastModified'] = ApiClient.convertToType(data['lastModified'], 'Number');
      }
      if (data.hasOwnProperty('isExpired')) {
        obj['isExpired'] = ApiClient.convertToType(data['isExpired'], 'Boolean');
      }
      if (data.hasOwnProperty('parentMeetingId')) {
        obj['parentMeetingId'] = ApiClient.convertToType(data['parentMeetingId'], 'Number');
      }
      if (data.hasOwnProperty('parentMeetingUUID')) {
        obj['parentMeetingUUID'] = ApiClient.convertToType(data['parentMeetingUUID'], 'String');
      }
      if (data.hasOwnProperty('nextOccurrence')) {
        obj['nextOccurrence'] = ApiClient.convertToType(data['nextOccurrence'], 'Number');
      }
      if (data.hasOwnProperty('timelessMeeting')) {
        obj['timelessMeeting'] = ApiClient.convertToType(data['timelessMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('endlessMeeting')) {
        obj['endlessMeeting'] = ApiClient.convertToType(data['endlessMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('first')) {
        obj['first'] = PersonalMeetingRoomFirst.constructFromObject(data['first']);
      }
      if (data.hasOwnProperty('last')) {
        obj['last'] = PersonalMeetingRoomLast.constructFromObject(data['last']);
      }
      if (data.hasOwnProperty('next')) {
        obj['next'] = PersonalMeetingRoomNext.constructFromObject(data['next']);
      }
      if (data.hasOwnProperty('nextStart')) {
        obj['nextStart'] = ApiClient.convertToType(data['nextStart'], 'Number');
      }
      if (data.hasOwnProperty('nextEnd')) {
        obj['nextEnd'] = ApiClient.convertToType(data['nextEnd'], 'Number');
      }
      if (data.hasOwnProperty('isPersonalMeeting')) {
        obj['isPersonalMeeting'] = ApiClient.convertToType(data['isPersonalMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('inviteeJoinOption')) {
        obj['inviteeJoinOption'] = ApiClient.convertToType(data['inviteeJoinOption'], 'Number');
      }
    }
    return obj;
  }

  /**
   * This is a unique number that is associated with the personal meeting room.
   * @member {Number} id
   */
  exports.prototype['id'] = undefined;
  /**
   * This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room.
   * @member {String} uuid
   */
  exports.prototype['uuid'] = undefined;
  /**
   * This is the name associated with personal room.
   * @member {String} title
   */
  exports.prototype['title'] = undefined;
  /**
   * This is a short descriptive text for the personal meeting room.
   * @member {String} description
   */
  exports.prototype['description'] = undefined;
  /**
   * This is the epoch-based starting time (in milliseconds) of the personal meeting.
   * @member {Number} start
   */
  exports.prototype['start'] = undefined;
  /**
   * This is the epoch-based ending time (in milliseconds) of the personal meeting.
   * @member {Number} end
   */
  exports.prototype['end'] = undefined;
  /**
   * This is the unix timezone string describing the timezone for the meeting
   * @member {String} timezone
   */
  exports.prototype['timezone'] = undefined;
  /**
   * @member {module:model/PersonalMeetingRoomAdvancedMeetingOptions} advancedMeetingOptions
   */
  exports.prototype['advancedMeetingOptions'] = undefined;
  /**
   * this property is not used in the BlueJeans Meetings product
   * @member {String} notificationUrl
   */
  exports.prototype['notificationUrl'] = undefined;
  /**
   * this property is not used in the BlueJeans Meetings product
   * @member {String} notificationData
   */
  exports.prototype['notificationData'] = undefined;
  /**
   * @member {module:model/PersonalMeetingRoomModerator} moderator
   */
  exports.prototype['moderator'] = undefined;
  /**
   * This is the number that a participant would enter when joining this meeting.
   * @member {String} numericMeetingId
   */
  exports.prototype['numericMeetingId'] = undefined;
  /**
   * This is a passcode that must be provided by people joining the meeting.
   * @member {String} attendeePasscode
   */
  exports.prototype['attendeePasscode'] = undefined;
  /**
   * If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting.
   * @member {Boolean} addAttendeePasscode
   */
  exports.prototype['addAttendeePasscode'] = undefined;
  /**
   * If set, indicates that this meeting has been deleted.
   * @member {Boolean} deleted
   */
  exports.prototype['deleted'] = undefined;
  /**
   * If set allows clients to send and receive 720p video resolution.
   * @member {Boolean} allow720p
   */
  exports.prototype['allow720p'] = undefined;
  /**
   * This string indicates the meeting's operational status.
   * @member {String} status
   */
  exports.prototype['status'] = undefined;
  /**
   * If set the meeting has been locked, and future attendees require a member to allow them to join.
   * @member {Boolean} locked
   */
  exports.prototype['locked'] = undefined;
  /**
   * Internal tracking number
   * @member {Number} sequenceNumber
   */
  exports.prototype['sequenceNumber'] = undefined;
  /**
   * Internal tracking number
   * @member {String} icsUid
   */
  exports.prototype['icsUid'] = undefined;
  /**
   * This string is the name of the type of scheduling entity.
   * @member {String} endPointType
   * @default 'WEB_APP'
   */
  exports.prototype['endPointType'] = 'WEB_APP';
  /**
   * This is a string that describes the version number of the endpoint type.
   * @member {String} endPointVersion
   */
  exports.prototype['endPointVersion'] = undefined;
  /**
   * @member {Array.<module:model/PersonalMeetingRoomAttendees>} attendees
   */
  exports.prototype['attendees'] = undefined;
  /**
   * If set indicates that this meeting will have a large
   * @member {Boolean} isLargeMeeting
   */
  exports.prototype['isLargeMeeting'] = undefined;
  /**
   * This is the date and time (in milliseconds) when the meeting was created.
   * @member {Number} created
   */
  exports.prototype['created'] = undefined;
  /**
   * This is the date and time (in milliseconds) when the meeting was last changed.
   * @member {Number} lastModified
   */
  exports.prototype['lastModified'] = undefined;
  /**
   * If set indicates that the meeting has expired.
   * @member {Boolean} isExpired
   */
  exports.prototype['isExpired'] = undefined;
  /**
   * This is a unique number associated with the first meeting in a series of meetings.
   * @member {Number} parentMeetingId
   */
  exports.prototype['parentMeetingId'] = undefined;
  /**
   * This is the guid for the first meeting in a series of meetings.
   * @member {String} parentMeetingUUID
   */
  exports.prototype['parentMeetingUUID'] = undefined;
  /**
   * This is a unique number associated with the next in a chain of meetings.
   * @member {Number} nextOccurrence
   */
  exports.prototype['nextOccurrence'] = undefined;
  /**
   * This field, if set, indicates that this meeting is continously running.
   * @member {Boolean} timelessMeeting
   */
  exports.prototype['timelessMeeting'] = undefined;
  /**
   * This field, if set, indicates that there is no end of recurring meetings.
   * @member {Boolean} endlessMeeting
   */
  exports.prototype['endlessMeeting'] = undefined;
  /**
   * @member {module:model/PersonalMeetingRoomFirst} first
   */
  exports.prototype['first'] = undefined;
  /**
   * @member {module:model/PersonalMeetingRoomLast} last
   */
  exports.prototype['last'] = undefined;
  /**
   * @member {module:model/PersonalMeetingRoomNext} next
   */
  exports.prototype['next'] = undefined;
  /**
   * This is the epoch-based starting time for the next in chain of meetings.
   * @member {Number} nextStart
   */
  exports.prototype['nextStart'] = undefined;
  /**
   * This is the epoch-based ending time for the next in chain of meetings.
   * @member {Number} nextEnd
   */
  exports.prototype['nextEnd'] = undefined;
  /**
   * if set, indicates that this ia personal meeting.
   * @member {Boolean} isPersonalMeeting
   */
  exports.prototype['isPersonalMeeting'] = undefined;
  /**
   * How Invitee should join
   * @member {Number} inviteeJoinOption
   */
  exports.prototype['inviteeJoinOption'] = undefined;



  return exports;
}));


