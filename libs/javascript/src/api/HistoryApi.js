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
    define(['ApiClient', 'model/Error', 'model/MeetingHistory', 'model/MeetingHistorySharing', 'model/Recording', 'model/RecordingSummary'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/Error'), require('../model/MeetingHistory'), require('../model/MeetingHistorySharing'), require('../model/Recording'), require('../model/RecordingSummary'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.HistoryApi = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.Error, root.BlueJeansMeetingsRestApi.MeetingHistory, root.BlueJeansMeetingsRestApi.MeetingHistorySharing, root.BlueJeansMeetingsRestApi.Recording, root.BlueJeansMeetingsRestApi.RecordingSummary);
  }
}(this, function(ApiClient, Error, MeetingHistory, MeetingHistorySharing, Recording, RecordingSummary) {
  'use strict';

  /**
   * History service.
   * @module api/HistoryApi
   * @version 1.0.4407232018
   */

  /**
   * Constructs a new HistoryApi. 
   * @alias module:api/HistoryApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the getHistoryByEnterprise operation.
     * @callback module:api/HistoryApi~getHistoryByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingHistory} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Meeting History by Enterprise
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
     * @param {module:api/HistoryApi~getHistoryByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingHistory}
     */
    this.getHistoryByEnterprise = function(enterpriseId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getHistoryByEnterprise");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling getHistoryByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId,
        'meeting_guid': meetingGuid
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingHistory;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getHistoryByUser operation.
     * @callback module:api/HistoryApi~getHistoryByUserCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingHistory} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Meeting History by User
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
     * @param {module:api/HistoryApi~getHistoryByUserCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingHistory}
     */
    this.getHistoryByUser = function(userId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getHistoryByUser");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling getHistoryByUser");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_guid': meetingGuid
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingHistory;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meeting_guid}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getHistorySharingByUser operation.
     * @callback module:api/HistoryApi~getHistorySharingByUserCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingHistorySharing} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Meeting History Sharing by User
     * This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
     * @param {module:api/HistoryApi~getHistorySharingByUserCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingHistorySharing}
     */
    this.getHistorySharingByUser = function(userId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getHistorySharingByUser");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling getHistorySharingByUser");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_guid': meetingGuid
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingHistorySharing;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRecording operation.
     * @callback module:api/HistoryApi~getRecordingCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Recording} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Recording
     * This endpoint retrieves the details about a meeting recording.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} recordingEntityId The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.
     * @param {module:api/HistoryApi~getRecordingCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Recording}
     */
    this.getRecording = function(userId, recordingEntityId, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getRecording");
      }

      // verify the required parameter 'recordingEntityId' is set
      if (recordingEntityId === undefined || recordingEntityId === null) {
        throw new Error("Missing the required parameter 'recordingEntityId' when calling getRecording");
      }


      var pathParams = {
        'user_id': userId,
        'recording_entity_id': recordingEntityId
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = Recording;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the listHistoryByEnterprise operation.
     * @callback module:api/HistoryApi~listHistoryByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {Array.<module:model/MeetingHistory>} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List History by Enterprise
     * This endpoint retrieves a list of meeting histories by the given enterprise.
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {module:api/HistoryApi~listHistoryByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link Array.<module:model/MeetingHistory>}
     */
    this.listHistoryByEnterprise = function(enterpriseId, callback) {
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling listHistoryByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = [MeetingHistory];

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/meeting_history', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the listHistoryByUser operation.
     * @callback module:api/HistoryApi~listHistoryByUserCallback
     * @param {String} error Error message, if any.
     * @param {Array.<module:model/MeetingHistory>} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List History by User
     * This endpoint retrieves a list of meeting histories by the given user.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Object} opts Optional parameters
     * @param {String} opts.meetingId Return only meetings with the specified meeting numeric ID.
     * @param {String} opts.startDate Return meetings starting from the specified date. MM/DD/YYYY
     * @param {String} opts.endDate Return meetings up until the specified date. MM/DD/YYYY
     * @param {Number} opts.pageSize Sets number of items returned per page.
     * @param {Number} opts.pageNumber Selects which page of results to return.
     * @param {String} opts.order Puts results in ascending or descending order. asc/desc
     * @param {module:api/HistoryApi~listHistoryByUserCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link Array.<module:model/MeetingHistory>}
     */
    this.listHistoryByUser = function(userId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling listHistoryByUser");
      }


      var pathParams = {
        'user_id': userId
      };
      var queryParams = {
        'meetingId': opts['meetingId'],
        'startDate': opts['startDate'],
        'endDate': opts['endDate'],
        'pageSize': opts['pageSize'],
        'pageNumber': opts['pageNumber'],
        'order': opts['order'],
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = [MeetingHistory];

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the listRecordings operation.
     * @callback module:api/HistoryApi~listRecordingsCallback
     * @param {String} error Error message, if any.
     * @param {Array.<module:model/RecordingSummary>} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Meeting Recordings
     * This endpoint retrieves a list of meeting recordings.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Object} opts Optional parameters
     * @param {Number} opts.pageSize Sets number of items returned per page. (default to 10)
     * @param {Number} opts.pageNumber Selects which page of results to return. (default to 1)
     * @param {String} opts.sortBy Selects which page of results to return. (default to start_time)
     * @param {module:model/String} opts.order Puts results in ascending or descending order. (default to desc)
     * @param {module:api/HistoryApi~listRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link Array.<module:model/RecordingSummary>}
     */
    this.listRecordings = function(userId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling listRecordings");
      }


      var pathParams = {
        'user_id': userId
      };
      var queryParams = {
        'pageSize': opts['pageSize'],
        'pageNumber': opts['pageNumber'],
        'sortBy': opts['sortBy'],
        'order': opts['order'],
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = [RecordingSummary];

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/recordings', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
