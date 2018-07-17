/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
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
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/Attendee', 'model/MeetingAdvancedMeetingOptions', 'model/MeetingModerator', 'model/MeetingRecurrencePattern', 'model/StartEnd'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./Attendee'), require('./MeetingAdvancedMeetingOptions'), require('./MeetingModerator'), require('./MeetingRecurrencePattern'), require('./StartEnd'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.Meeting = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.Attendee, root.BlueJeansMeetingsRestApi.MeetingAdvancedMeetingOptions, root.BlueJeansMeetingsRestApi.MeetingModerator, root.BlueJeansMeetingsRestApi.MeetingRecurrencePattern, root.BlueJeansMeetingsRestApi.StartEnd);
  }
}(this, function(ApiClient, Attendee, MeetingAdvancedMeetingOptions, MeetingModerator, MeetingRecurrencePattern, StartEnd) {
  'use strict';




  /**
   * The Meeting model module.
   * @module model/Meeting
   * @version 1.0.0.mm44 (7/06/2018)
   */

  /**
   * Constructs a new <code>Meeting</code>.
   * 2/5/2018 -- JSON object containing the  fields describing a BlueJeans meeting. Includes recurring meeting fields.
   * @alias module:model/Meeting
   * @class
   * @param title {String} 
   * @param start {Number} A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @param end {Number} A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @param endPointType {String} 
   * @param endPointVersion {String} 
   */
  var exports = function(title, start, end, endPointType, endPointVersion) {
    var _this = this;



    _this['title'] = title;

    _this['start'] = start;
    _this['end'] = end;














    _this['endPointType'] = endPointType;
    _this['endPointVersion'] = endPointVersion;


















  };

  /**
   * Constructs a <code>Meeting</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/Meeting} obj Optional instance to populate.
   * @return {module:model/Meeting} The populated <code>Meeting</code> instance.
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
        obj['advancedMeetingOptions'] = MeetingAdvancedMeetingOptions.constructFromObject(data['advancedMeetingOptions']);
      }
      if (data.hasOwnProperty('notificationUrl')) {
        obj['notificationUrl'] = ApiClient.convertToType(data['notificationUrl'], 'String');
      }
      if (data.hasOwnProperty('notificationData')) {
        obj['notificationData'] = ApiClient.convertToType(data['notificationData'], 'String');
      }
      if (data.hasOwnProperty('moderator')) {
        obj['moderator'] = MeetingModerator.constructFromObject(data['moderator']);
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
      if (data.hasOwnProperty('delete')) {
        obj['delete'] = ApiClient.convertToType(data['delete'], 'Boolean');
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
      if (data.hasOwnProperty('seqeuenceNumber')) {
        obj['seqeuenceNumber'] = ApiClient.convertToType(data['seqeuenceNumber'], 'Number');
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
        obj['attendees'] = ApiClient.convertToType(data['attendees'], [Attendee]);
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
        obj['nextOccurrence'] = ApiClient.convertToType(data['nextOccurrence'], 'String');
      }
      if (data.hasOwnProperty('timelessMeeting')) {
        obj['timelessMeeting'] = ApiClient.convertToType(data['timelessMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('endlessMeeting')) {
        obj['endlessMeeting'] = ApiClient.convertToType(data['endlessMeeting'], 'Boolean');
      }
      if (data.hasOwnProperty('recurrencePattern')) {
        obj['recurrencePattern'] = MeetingRecurrencePattern.constructFromObject(data['recurrencePattern']);
      }
      if (data.hasOwnProperty('first')) {
        obj['first'] = StartEnd.constructFromObject(data['first']);
      }
      if (data.hasOwnProperty('last')) {
        obj['last'] = StartEnd.constructFromObject(data['last']);
      }
      if (data.hasOwnProperty('next')) {
        obj['next'] = StartEnd.constructFromObject(data['next']);
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
   * Unique identifier for meeting.
   * @member {Number} id
   */
  exports.prototype['id'] = undefined;
  /**
   * @member {String} uuid
   */
  exports.prototype['uuid'] = undefined;
  /**
   * @member {String} title
   * @default 'My Test Meeting'
   */
  exports.prototype['title'] = 'My Test Meeting';
  /**
   * @member {String} description
   */
  exports.prototype['description'] = undefined;
  /**
   * A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @member {Number} start
   */
  exports.prototype['start'] = undefined;
  /**
   * A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @member {Number} end
   */
  exports.prototype['end'] = undefined;
  /**
   * @member {String} timezone
   * @default 'America/New_York'
   */
  exports.prototype['timezone'] = 'America/New_York';
  /**
   * @member {module:model/MeetingAdvancedMeetingOptions} advancedMeetingOptions
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
   * @member {module:model/MeetingModerator} moderator
   */
  exports.prototype['moderator'] = undefined;
  /**
   * The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
   * @member {String} numericMeetingId
   */
  exports.prototype['numericMeetingId'] = undefined;
  /**
   * @member {String} attendeePasscode
   */
  exports.prototype['attendeePasscode'] = undefined;
  /**
   * Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
   * @member {Boolean} addAttendeePasscode
   */
  exports.prototype['addAttendeePasscode'] = undefined;
  /**
   * @member {Boolean} delete
   */
  exports.prototype['delete'] = undefined;
  /**
   * @member {Boolean} allow720p
   */
  exports.prototype['allow720p'] = undefined;
  /**
   * @member {String} status
   */
  exports.prototype['status'] = undefined;
  /**
   * @member {Boolean} locked
   */
  exports.prototype['locked'] = undefined;
  /**
   * @member {Number} seqeuenceNumber
   */
  exports.prototype['seqeuenceNumber'] = undefined;
  /**
   * @member {String} icsUid
   */
  exports.prototype['icsUid'] = undefined;
  /**
   * @member {String} endPointType
   * @default 'WEB_APP'
   */
  exports.prototype['endPointType'] = 'WEB_APP';
  /**
   * @member {String} endPointVersion
   * @default '2.10'
   */
  exports.prototype['endPointVersion'] = '2.10';
  /**
   * @member {Array.<module:model/Attendee>} attendees
   */
  exports.prototype['attendees'] = undefined;
  /**
   * If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
   * @member {Boolean} isLargeMeeting
   */
  exports.prototype['isLargeMeeting'] = undefined;
  /**
   * This is the epoch-based time (in milliseconds) when the meeting was initially created.
   * @member {Number} created
   */
  exports.prototype['created'] = undefined;
  /**
   * This is the epoch-based time (in milliseconds) when the meeting was last changed.
   * @member {Number} lastModified
   */
  exports.prototype['lastModified'] = undefined;
  /**
   * @member {Boolean} isExpired
   */
  exports.prototype['isExpired'] = undefined;
  /**
   * This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.
   * @member {Number} parentMeetingId
   */
  exports.prototype['parentMeetingId'] = undefined;
  /**
   * @member {String} parentMeetingUUID
   */
  exports.prototype['parentMeetingUUID'] = undefined;
  /**
   * @member {String} nextOccurrence
   */
  exports.prototype['nextOccurrence'] = undefined;
  /**
   * @member {Boolean} timelessMeeting
   */
  exports.prototype['timelessMeeting'] = undefined;
  /**
   * @member {Boolean} endlessMeeting
   */
  exports.prototype['endlessMeeting'] = undefined;
  /**
   * @member {module:model/MeetingRecurrencePattern} recurrencePattern
   */
  exports.prototype['recurrencePattern'] = undefined;
  /**
   * Starting and ending times of the first meeting in a chain of recurring meetings.
   * @member {module:model/StartEnd} first
   */
  exports.prototype['first'] = undefined;
  /**
   * Starting and ending times of the last meeting in a chain of recurring meetings.
   * @member {module:model/StartEnd} last
   */
  exports.prototype['last'] = undefined;
  /**
   * Starting and ending times of the next meeting in a chain of recurring meetings.
   * @member {module:model/StartEnd} next
   */
  exports.prototype['next'] = undefined;
  /**
   * @member {Number} nextStart
   */
  exports.prototype['nextStart'] = undefined;
  /**
   * @member {Number} nextEnd
   */
  exports.prototype['nextEnd'] = undefined;
  /**
   * Use the scheduler's personal meeting room and Id for this meeting.
   * @member {Boolean} isPersonalMeeting
   * @default false
   */
  exports.prototype['isPersonalMeeting'] = false;
  /**
   * @member {Number} inviteeJoinOption
   */
  exports.prototype['inviteeJoinOption'] = undefined;



  return exports;
}));


