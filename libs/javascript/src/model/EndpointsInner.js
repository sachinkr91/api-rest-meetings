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
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/EndpointsInnerConnections'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./EndpointsInnerConnections'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.EndpointsInner = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.EndpointsInnerConnections);
  }
}(this, function(ApiClient, EndpointsInnerConnections) {
  'use strict';




  /**
   * The EndpointsInner model module.
   * @module model/EndpointsInner
   * @version 1.0.0
   */

  /**
   * Constructs a new <code>EndpointsInner</code>.
   * @alias module:model/EndpointsInner
   * @class
   */
  var exports = function() {
    var _this = this;
































  };

  /**
   * Constructs a <code>EndpointsInner</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/EndpointsInner} obj Optional instance to populate.
   * @return {module:model/EndpointsInner} The populated <code>EndpointsInner</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('meetingid')) {
        obj['meetingid'] = ApiClient.convertToType(data['meetingid'], 'String');
      }
      if (data.hasOwnProperty('name')) {
        obj['name'] = ApiClient.convertToType(data['name'], 'String');
      }
      if (data.hasOwnProperty('CallQuality')) {
        obj['CallQuality'] = ApiClient.convertToType(data['CallQuality'], 'String');
      }
      if (data.hasOwnProperty('Leader')) {
        obj['Leader'] = ApiClient.convertToType(data['Leader'], 'String');
      }
      if (data.hasOwnProperty('callguid')) {
        obj['callguid'] = ApiClient.convertToType(data['callguid'], 'String');
      }
      if (data.hasOwnProperty('endpoint')) {
        obj['endpoint'] = ApiClient.convertToType(data['endpoint'], 'String');
      }
      if (data.hasOwnProperty('TalkDetected')) {
        obj['TalkDetected'] = ApiClient.convertToType(data['TalkDetected'], 'String');
      }
      if (data.hasOwnProperty('SecureCall')) {
        obj['SecureCall'] = ApiClient.convertToType(data['SecureCall'], 'String');
      }
      if (data.hasOwnProperty('Layout')) {
        obj['Layout'] = ApiClient.convertToType(data['Layout'], 'String');
      }
      if (data.hasOwnProperty('SubLayout')) {
        obj['SubLayout'] = ApiClient.convertToType(data['SubLayout'], 'String');
      }
      if (data.hasOwnProperty('VideoRecv')) {
        obj['VideoRecv'] = ApiClient.convertToType(data['VideoRecv'], 'String');
      }
      if (data.hasOwnProperty('VideoRecvLocalMute')) {
        obj['VideoRecvLocalMute'] = ApiClient.convertToType(data['VideoRecvLocalMute'], 'String');
      }
      if (data.hasOwnProperty('VideoRecvRemoteMute')) {
        obj['VideoRecvRemoteMute'] = ApiClient.convertToType(data['VideoRecvRemoteMute'], 'String');
      }
      if (data.hasOwnProperty('AudioRecv')) {
        obj['AudioRecv'] = ApiClient.convertToType(data['AudioRecv'], 'String');
      }
      if (data.hasOwnProperty('AudioRecvLocalMute')) {
        obj['AudioRecvLocalMute'] = ApiClient.convertToType(data['AudioRecvLocalMute'], 'String');
      }
      if (data.hasOwnProperty('AudioRecvRemoteMute')) {
        obj['AudioRecvRemoteMute'] = ApiClient.convertToType(data['AudioRecvRemoteMute'], 'String');
      }
      if (data.hasOwnProperty('AudioRecvCodec')) {
        obj['AudioRecvCodec'] = ApiClient.convertToType(data['AudioRecvCodec'], 'String');
      }
      if (data.hasOwnProperty('AudioSendCodec')) {
        obj['AudioSendCodec'] = ApiClient.convertToType(data['AudioSendCodec'], 'String');
      }
      if (data.hasOwnProperty('VideoRecvCodec')) {
        obj['VideoRecvCodec'] = ApiClient.convertToType(data['VideoRecvCodec'], 'String');
      }
      if (data.hasOwnProperty('VideoRecvHeight')) {
        obj['VideoRecvHeight'] = ApiClient.convertToType(data['VideoRecvHeight'], 'String');
      }
      if (data.hasOwnProperty('VideoRecvWidth')) {
        obj['VideoRecvWidth'] = ApiClient.convertToType(data['VideoRecvWidth'], 'String');
      }
      if (data.hasOwnProperty('VideoSendCodec')) {
        obj['VideoSendCodec'] = ApiClient.convertToType(data['VideoSendCodec'], 'String');
      }
      if (data.hasOwnProperty('VideoSendHeight')) {
        obj['VideoSendHeight'] = ApiClient.convertToType(data['VideoSendHeight'], 'String');
      }
      if (data.hasOwnProperty('VideoSendWidth')) {
        obj['VideoSendWidth'] = ApiClient.convertToType(data['VideoSendWidth'], 'String');
      }
      if (data.hasOwnProperty('visibility')) {
        obj['visibility'] = ApiClient.convertToType(data['visibility'], 'String');
      }
      if (data.hasOwnProperty('chatEndpointGuid')) {
        obj['chatEndpointGuid'] = ApiClient.convertToType(data['chatEndpointGuid'], 'String');
      }
      if (data.hasOwnProperty('endpointGuid')) {
        obj['endpointGuid'] = ApiClient.convertToType(data['endpointGuid'], 'String');
      }
      if (data.hasOwnProperty('RDCVersion')) {
        obj['RDCVersion'] = ApiClient.convertToType(data['RDCVersion'], 'String');
      }
      if (data.hasOwnProperty('RDCControllerCapable')) {
        obj['RDCControllerCapable'] = ApiClient.convertToType(data['RDCControllerCapable'], 'String');
      }
      if (data.hasOwnProperty('RDCControlleeCapable')) {
        obj['RDCControlleeCapable'] = ApiClient.convertToType(data['RDCControlleeCapable'], 'String');
      }
      if (data.hasOwnProperty('connections')) {
        obj['connections'] = ApiClient.convertToType(data['connections'], [EndpointsInnerConnections]);
      }
    }
    return obj;
  }

  /**
   * @member {String} meetingid
   */
  exports.prototype['meetingid'] = undefined;
  /**
   * @member {String} name
   */
  exports.prototype['name'] = undefined;
  /**
   * @member {String} CallQuality
   */
  exports.prototype['CallQuality'] = undefined;
  /**
   * @member {String} Leader
   */
  exports.prototype['Leader'] = undefined;
  /**
   * @member {String} callguid
   */
  exports.prototype['callguid'] = undefined;
  /**
   * @member {String} endpoint
   */
  exports.prototype['endpoint'] = undefined;
  /**
   * @member {String} TalkDetected
   */
  exports.prototype['TalkDetected'] = undefined;
  /**
   * @member {String} SecureCall
   */
  exports.prototype['SecureCall'] = undefined;
  /**
   * @member {String} Layout
   */
  exports.prototype['Layout'] = undefined;
  /**
   * @member {String} SubLayout
   */
  exports.prototype['SubLayout'] = undefined;
  /**
   * @member {String} VideoRecv
   */
  exports.prototype['VideoRecv'] = undefined;
  /**
   * @member {String} VideoRecvLocalMute
   */
  exports.prototype['VideoRecvLocalMute'] = undefined;
  /**
   * @member {String} VideoRecvRemoteMute
   */
  exports.prototype['VideoRecvRemoteMute'] = undefined;
  /**
   * @member {String} AudioRecv
   */
  exports.prototype['AudioRecv'] = undefined;
  /**
   * @member {String} AudioRecvLocalMute
   */
  exports.prototype['AudioRecvLocalMute'] = undefined;
  /**
   * @member {String} AudioRecvRemoteMute
   */
  exports.prototype['AudioRecvRemoteMute'] = undefined;
  /**
   * @member {String} AudioRecvCodec
   */
  exports.prototype['AudioRecvCodec'] = undefined;
  /**
   * @member {String} AudioSendCodec
   */
  exports.prototype['AudioSendCodec'] = undefined;
  /**
   * @member {String} VideoRecvCodec
   */
  exports.prototype['VideoRecvCodec'] = undefined;
  /**
   * @member {String} VideoRecvHeight
   */
  exports.prototype['VideoRecvHeight'] = undefined;
  /**
   * @member {String} VideoRecvWidth
   */
  exports.prototype['VideoRecvWidth'] = undefined;
  /**
   * @member {String} VideoSendCodec
   */
  exports.prototype['VideoSendCodec'] = undefined;
  /**
   * @member {String} VideoSendHeight
   */
  exports.prototype['VideoSendHeight'] = undefined;
  /**
   * @member {String} VideoSendWidth
   */
  exports.prototype['VideoSendWidth'] = undefined;
  /**
   * @member {String} visibility
   */
  exports.prototype['visibility'] = undefined;
  /**
   * @member {String} chatEndpointGuid
   */
  exports.prototype['chatEndpointGuid'] = undefined;
  /**
   * @member {String} endpointGuid
   */
  exports.prototype['endpointGuid'] = undefined;
  /**
   * @member {String} RDCVersion
   */
  exports.prototype['RDCVersion'] = undefined;
  /**
   * @member {String} RDCControllerCapable
   */
  exports.prototype['RDCControllerCapable'] = undefined;
  /**
   * @member {String} RDCControlleeCapable
   */
  exports.prototype['RDCControlleeCapable'] = undefined;
  /**
   * @member {Array.<module:model/EndpointsInnerConnections>} connections
   */
  exports.prototype['connections'] = undefined;



  return exports;
}));


