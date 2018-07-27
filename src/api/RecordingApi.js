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
    define(['ApiClient', 'model/Content', 'model/Error', 'model/Meeting', 'model/MeetingSharing', 'model/ModifySharing', 'model/RecordingHistoryList', 'model/RecordingMovedComp', 'model/SetSharing'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/Content'), require('../model/Error'), require('../model/Meeting'), require('../model/MeetingSharing'), require('../model/ModifySharing'), require('../model/RecordingHistoryList'), require('../model/RecordingMovedComp'), require('../model/SetSharing'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.RecordingApi = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.Content, root.BlueJeansMeetingsRestApi.Error, root.BlueJeansMeetingsRestApi.Meeting, root.BlueJeansMeetingsRestApi.MeetingSharing, root.BlueJeansMeetingsRestApi.ModifySharing, root.BlueJeansMeetingsRestApi.RecordingHistoryList, root.BlueJeansMeetingsRestApi.RecordingMovedComp, root.BlueJeansMeetingsRestApi.SetSharing);
  }
}(this, function(ApiClient, Content, Error, Meeting, MeetingSharing, ModifySharing, RecordingHistoryList, RecordingMovedComp, SetSharing) {
  'use strict';

  /**
   * Recording service.
   * @module api/RecordingApi
   * @version 1.0.4407232018
   */

  /**
   * Constructs a new RecordingApi. 
   * @alias module:api/RecordingApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createShareRecordings operation.
     * @callback module:api/RecordingApi~createShareRecordingsCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingSharing} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Enable Recording Sharing
     * This endpoint creates a sharing authorization record for the specified meeting recording.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
     * @param {module:model/SetSharing} setSharing 
     * @param {module:api/RecordingApi~createShareRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingSharing}
     */
    this.createShareRecordings = function(userId, meetingGuid, setSharing, callback) {
      var postBody = setSharing;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling createShareRecordings");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling createShareRecordings");
      }

      // verify the required parameter 'setSharing' is set
      if (setSharing === undefined || setSharing === null) {
        throw new Error("Missing the required parameter 'setSharing' when calling createShareRecordings");
      }


      var pathParams = {
        'user_id': userId,
        'meetingGuid': meetingGuid
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
      var returnType = MeetingSharing;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteAllRecordingsByMeetingGuid operation.
     * @callback module:api/RecordingApi~deleteAllRecordingsByMeetingGuidCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Meeting} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete All Recordings for a Specified Meeting GUID
     * This endpoint stops recording for a meeting in progress. 
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
     * @param {module:api/RecordingApi~deleteAllRecordingsByMeetingGuidCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Meeting}
     */
    this.deleteAllRecordingsByMeetingGuid = function(userId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling deleteAllRecordingsByMeetingGuid");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling deleteAllRecordingsByMeetingGuid");
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
      var returnType = Meeting;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/', 'DELETE',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteRecordingChapter operation.
     * @callback module:api/RecordingApi~deleteRecordingChapterCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Meeting} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete a Specified Recording Chapter
     * This endpoint stops recording for a meeting in progress.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.
     * @param {Number} recordingChapterId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.
     * @param {module:api/RecordingApi~deleteRecordingChapterCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Meeting}
     */
    this.deleteRecordingChapter = function(userId, meetingId, recordingChapterId, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling deleteRecordingChapter");
      }

      // verify the required parameter 'meetingId' is set
      if (meetingId === undefined || meetingId === null) {
        throw new Error("Missing the required parameter 'meetingId' when calling deleteRecordingChapter");
      }

      // verify the required parameter 'recordingChapterId' is set
      if (recordingChapterId === undefined || recordingChapterId === null) {
        throw new Error("Missing the required parameter 'recordingChapterId' when calling deleteRecordingChapter");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_id': meetingId,
        'recording_chapter_id': recordingChapterId
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
      var returnType = Meeting;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/', 'DELETE',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteShareRecordings operation.
     * @callback module:api/RecordingApi~deleteShareRecordingsCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete Recording Sharing
     * This endpoint deletes the sharing authorization associated with a meeting recording.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
     * @param {module:api/RecordingApi~deleteShareRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deleteShareRecordings = function(userId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling deleteShareRecordings");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling deleteShareRecordings");
      }


      var pathParams = {
        'user_id': userId,
        'meetingGuid': meetingGuid
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
      var returnType = null;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/', 'DELETE',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingRecordings operation.
     * @callback module:api/RecordingApi~getMeetingRecordingsCallback
     * @param {String} error Error message, if any.
     * @param {module:model/RecordingHistoryList} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get All Recordings for a Specified Meeting ID
     * This endpoint lists the recordings for a meeting.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.
     * @param {Object} opts Optional parameters
     * @param {String} opts.meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
     * @param {module:api/RecordingApi~getMeetingRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/RecordingHistoryList}
     */
    this.getMeetingRecordings = function(userId, meetingId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getMeetingRecordings");
      }

      // verify the required parameter 'meetingId' is set
      if (meetingId === undefined || meetingId === null) {
        throw new Error("Missing the required parameter 'meetingId' when calling getMeetingRecordings");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_id': meetingId
      };
      var queryParams = {
        'meetingGuid': opts['meetingGuid'],
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
      var returnType = RecordingHistoryList;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRecordingContent operation.
     * @callback module:api/RecordingApi~getRecordingContentCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Content} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Recording Download Link
     * This endpoint retrieves properties about the recording chapter.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} contentId The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
     * @param {Boolean} isDownloadable Set to true.
     * @param {module:api/RecordingApi~getRecordingContentCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Content}
     */
    this.getRecordingContent = function(userId, contentId, isDownloadable, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getRecordingContent");
      }

      // verify the required parameter 'contentId' is set
      if (contentId === undefined || contentId === null) {
        throw new Error("Missing the required parameter 'contentId' when calling getRecordingContent");
      }

      // verify the required parameter 'isDownloadable' is set
      if (isDownloadable === undefined || isDownloadable === null) {
        throw new Error("Missing the required parameter 'isDownloadable' when calling getRecordingContent");
      }


      var pathParams = {
        'user_id': userId,
        'content_id': contentId
      };
      var queryParams = {
        'isDownloadable': isDownloadable,
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
      var returnType = Content;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/cms/{content_id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getShareRecordings operation.
     * @callback module:api/RecordingApi~getShareRecordingsCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingSharing} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Recording Sharing
     * This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
     * @param {module:api/RecordingApi~getShareRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingSharing}
     */
    this.getShareRecordings = function(userId, meetingGuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getShareRecordings");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling getShareRecordings");
      }


      var pathParams = {
        'user_id': userId,
        'meetingGuid': meetingGuid
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
      var returnType = MeetingSharing;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the modifyShareRecordings operation.
     * @callback module:api/RecordingApi~modifyShareRecordingsCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingSharing} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Modify Recording Sharing
     * This endpoint modifieds the sharing authorization attributes for a meeting recording.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
     * @param {String} sharingId The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing
     * @param {module:model/ModifySharing} modifySharing 
     * @param {module:api/RecordingApi~modifyShareRecordingsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingSharing}
     */
    this.modifyShareRecordings = function(userId, meetingGuid, sharingId, modifySharing, callback) {
      var postBody = modifySharing;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling modifyShareRecordings");
      }

      // verify the required parameter 'meetingGuid' is set
      if (meetingGuid === undefined || meetingGuid === null) {
        throw new Error("Missing the required parameter 'meetingGuid' when calling modifyShareRecordings");
      }

      // verify the required parameter 'sharingId' is set
      if (sharingId === undefined || sharingId === null) {
        throw new Error("Missing the required parameter 'sharingId' when calling modifyShareRecordings");
      }

      // verify the required parameter 'modifySharing' is set
      if (modifySharing === undefined || modifySharing === null) {
        throw new Error("Missing the required parameter 'modifySharing' when calling modifyShareRecordings");
      }


      var pathParams = {
        'user_id': userId,
        'meetingGuid': meetingGuid,
        'sharingId': sharingId
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
      var returnType = MeetingSharing;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}', 'PUT',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the moveRecordingOwner operation.
     * @callback module:api/RecordingApi~moveRecordingOwnerCallback
     * @param {String} error Error message, if any.
     * @param {module:model/RecordingMovedComp} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Move Recording Ownership
     * This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
     * @param {Number} userId The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} originalOwner The ID of the recording&#39;s current owner.
     * @param {Number} newOwner The ID of the intended owner for the recording.
     * @param {module:api/RecordingApi~moveRecordingOwnerCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/RecordingMovedComp}
     */
    this.moveRecordingOwner = function(userId, originalOwner, newOwner, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling moveRecordingOwner");
      }

      // verify the required parameter 'originalOwner' is set
      if (originalOwner === undefined || originalOwner === null) {
        throw new Error("Missing the required parameter 'originalOwner' when calling moveRecordingOwner");
      }

      // verify the required parameter 'newOwner' is set
      if (newOwner === undefined || newOwner === null) {
        throw new Error("Missing the required parameter 'newOwner' when calling moveRecordingOwner");
      }


      var pathParams = {
        'user_id': userId,
        'originalOwner': originalOwner,
        'newOwner': newOwner
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
      var returnType = RecordingMovedComp;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the startRecording operation.
     * @callback module:api/RecordingApi~startRecordingCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Start Recording
     * This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.
     * @param {module:model/String} action Always set to \&quot;start\&quot; in order to start recording.
     * @param {module:api/RecordingApi~startRecordingCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.startRecording = function(userId, meetingId, action, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling startRecording");
      }

      // verify the required parameter 'meetingId' is set
      if (meetingId === undefined || meetingId === null) {
        throw new Error("Missing the required parameter 'meetingId' when calling startRecording");
      }

      // verify the required parameter 'action' is set
      if (action === undefined || action === null) {
        throw new Error("Missing the required parameter 'action' when calling startRecording");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_id': meetingId
      };
      var queryParams = {
        'action': action,
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
      var returnType = null;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the stopRecording operation.
     * @callback module:api/RecordingApi~stopRecordingCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Stop Recording
     * This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Number} meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.
     * @param {module:model/String} action Always set to \&quot;stop\&quot; in order to stop recording.
     * @param {module:api/RecordingApi~stopRecordingCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.stopRecording = function(userId, meetingId, action, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling stopRecording");
      }

      // verify the required parameter 'meetingId' is set
      if (meetingId === undefined || meetingId === null) {
        throw new Error("Missing the required parameter 'meetingId' when calling stopRecording");
      }

      // verify the required parameter 'action' is set
      if (action === undefined || action === null) {
        throw new Error("Missing the required parameter 'action' when calling stopRecording");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_id': meetingId
      };
      var queryParams = {
        'action': action,
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
      var returnType = null;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings', 'PUT',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
