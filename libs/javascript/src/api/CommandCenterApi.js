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
    define(['ApiClient', 'model/AnalyticsEndpointDistribution', 'model/AnalyticsEndpointDistributionV2', 'model/AnalyticsFeedbackComments', 'model/AnalyticsFeedbackScores', 'model/AnalyticsRoiData', 'model/AnalyticsTopUsers', 'model/AnalyticsUsage', 'model/EndpointLocationSummary', 'model/EnterpriseUsersActive', 'model/Error', 'model/MeetingExtendedIndigo', 'model/MeetingIndigoList', 'model/MeetingSummaryInfo'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/AnalyticsEndpointDistribution'), require('../model/AnalyticsEndpointDistributionV2'), require('../model/AnalyticsFeedbackComments'), require('../model/AnalyticsFeedbackScores'), require('../model/AnalyticsRoiData'), require('../model/AnalyticsTopUsers'), require('../model/AnalyticsUsage'), require('../model/EndpointLocationSummary'), require('../model/EnterpriseUsersActive'), require('../model/Error'), require('../model/MeetingExtendedIndigo'), require('../model/MeetingIndigoList'), require('../model/MeetingSummaryInfo'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.CommandCenterApi = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.AnalyticsEndpointDistribution, root.BlueJeansMeetingsRestApi.AnalyticsEndpointDistributionV2, root.BlueJeansMeetingsRestApi.AnalyticsFeedbackComments, root.BlueJeansMeetingsRestApi.AnalyticsFeedbackScores, root.BlueJeansMeetingsRestApi.AnalyticsRoiData, root.BlueJeansMeetingsRestApi.AnalyticsTopUsers, root.BlueJeansMeetingsRestApi.AnalyticsUsage, root.BlueJeansMeetingsRestApi.EndpointLocationSummary, root.BlueJeansMeetingsRestApi.EnterpriseUsersActive, root.BlueJeansMeetingsRestApi.Error, root.BlueJeansMeetingsRestApi.MeetingExtendedIndigo, root.BlueJeansMeetingsRestApi.MeetingIndigoList, root.BlueJeansMeetingsRestApi.MeetingSummaryInfo);
  }
}(this, function(ApiClient, AnalyticsEndpointDistribution, AnalyticsEndpointDistributionV2, AnalyticsFeedbackComments, AnalyticsFeedbackScores, AnalyticsRoiData, AnalyticsTopUsers, AnalyticsUsage, EndpointLocationSummary, EnterpriseUsersActive, Error, MeetingExtendedIndigo, MeetingIndigoList, MeetingSummaryInfo) {
  'use strict';

  /**
   * CommandCenter service.
   * @module api/CommandCenterApi
   * @version 1.0.0.mm44 (7/06/2018)
   */

  /**
   * Constructs a new CommandCenterApi. 
   * @alias module:api/CommandCenterApi
   * @class
   * @param {module:ApiClient} apiClient Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the getEndpointDistribution operation.
     * @callback module:api/CommandCenterApi~getEndpointDistributionCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsEndpointDistribution} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object} opts Optional parameters
     * @param {String} opts.filter URL-encoded JSON string (default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}])
     * @param {module:api/CommandCenterApi~getEndpointDistributionCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsEndpointDistribution}
     */
    this.getEndpointDistribution = function(enterpriseId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getEndpointDistribution");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': opts['filter']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsEndpointDistribution;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getEndpointDistributionV2 operation.
     * @callback module:api/CommandCenterApi~getEndpointDistributionV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsEndpointDistributionV2} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}]
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getEndpointDistributionV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsEndpointDistributionV2}
     */
    this.getEndpointDistributionV2 = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getEndpointDistributionV2");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getEndpointDistributionV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsEndpointDistributionV2;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getEnterpriseOverallSummary operation.
     * @callback module:api/CommandCenterApi~getEnterpriseOverallSummaryCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingSummaryInfo} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Overall Enterprise Summary
     * This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60;
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getEnterpriseOverallSummaryCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingSummaryInfo}
     */
    this.getEnterpriseOverallSummary = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getEnterpriseOverallSummary");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getEnterpriseOverallSummary");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingSummaryInfo;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getEnterpriseUsersActive operation.
     * @callback module:api/CommandCenterApi~getEnterpriseUsersActiveCallback
     * @param {String} error Error message, if any.
     * @param {module:model/EnterpriseUsersActive} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Enterprise User Summary
     * This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60;
     * @param {Object} opts Optional parameters
     * @param {String} opts.clientTZ Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60;
     * @param {Number} opts.limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (default to 0)
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getEnterpriseUsersActiveCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/EnterpriseUsersActive}
     */
    this.getEnterpriseUsersActive = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getEnterpriseUsersActive");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getEnterpriseUsersActive");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'clientTZ': opts['clientTZ'],
        'limit': opts['limit'],
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = EnterpriseUsersActive;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/users/active', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getFeedbackComments operation.
     * @callback module:api/CommandCenterApi~getFeedbackCommentsCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsFeedbackComments} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {String} end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {module:api/CommandCenterApi~getFeedbackCommentsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsFeedbackComments}
     */
    this.getFeedbackComments = function(enterpriseId, start, end, callback) {
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getFeedbackComments");
      }

      // verify the required parameter 'start' is set
      if (start === undefined || start === null) {
        throw new Error("Missing the required parameter 'start' when calling getFeedbackComments");
      }

      // verify the required parameter 'end' is set
      if (end === undefined || end === null) {
        throw new Error("Missing the required parameter 'end' when calling getFeedbackComments");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'start': start,
        'end': end
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsFeedbackComments;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getFeedbackCommentsV2 operation.
     * @callback module:api/CommandCenterApi~getFeedbackCommentsV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsFeedbackComments} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }]
     * @param {Object} opts Optional parameters
     * @param {Number} opts.limit The limit on the number of responses to return
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getFeedbackCommentsV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsFeedbackComments}
     */
    this.getFeedbackCommentsV2 = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getFeedbackCommentsV2");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getFeedbackCommentsV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'limit': opts['limit'],
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsFeedbackComments;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getFeedbackCount operation.
     * @callback module:api/CommandCenterApi~getFeedbackCountCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsFeedbackScores} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {String} end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {module:api/CommandCenterApi~getFeedbackCountCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsFeedbackScores}
     */
    this.getFeedbackCount = function(enterpriseId, start, end, callback) {
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getFeedbackCount");
      }

      // verify the required parameter 'start' is set
      if (start === undefined || start === null) {
        throw new Error("Missing the required parameter 'start' when calling getFeedbackCount");
      }

      // verify the required parameter 'end' is set
      if (end === undefined || end === null) {
        throw new Error("Missing the required parameter 'end' when calling getFeedbackCount");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'start': start,
        'end': end
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsFeedbackScores;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/feedback/count', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getFeedbackCountV2 operation.
     * @callback module:api/CommandCenterApi~getFeedbackCountV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsFeedbackScores} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {String} end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getFeedbackCountV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsFeedbackScores}
     */
    this.getFeedbackCountV2 = function(enterpriseId, start, end, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getFeedbackCountV2");
      }

      // verify the required parameter 'start' is set
      if (start === undefined || start === null) {
        throw new Error("Missing the required parameter 'start' when calling getFeedbackCountV2");
      }

      // verify the required parameter 'end' is set
      if (end === undefined || end === null) {
        throw new Error("Missing the required parameter 'end' when calling getFeedbackCountV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'start': start,
        'end': end,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsFeedbackScores;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/feedback/count', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getGeoMap operation.
     * @callback module:api/CommandCenterApi~getGeoMapCallback
     * @param {String} error Error message, if any.
     * @param {module:model/EndpointLocationSummary} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Geographic Demographics
     * This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object.<String, {String: String}>} filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60;
     * @param {Object} opts Optional parameters
     * @param {Number} opts.offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (default to 0)
     * @param {Number} opts.limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (default to 0)
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getGeoMapCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/EndpointLocationSummary}
     */
    this.getGeoMap = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getGeoMap");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getGeoMap");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'offset': opts['offset'],
        'limit': opts['limit'],
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = EndpointLocationSummary;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingEndpointsLiveByEnterprise operation.
     * @callback module:api/CommandCenterApi~getMeetingEndpointsLiveByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingExtendedIndigo} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Live Meeting Endpoints by Enterprise
     * This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getMeetingEndpointsLiveByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingExtendedIndigo}
     */
    this.getMeetingEndpointsLiveByEnterprise = function(enterpriseId, meetingUuid, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingEndpointsLiveByEnterprise");
      }

      // verify the required parameter 'meetingUuid' is set
      if (meetingUuid === undefined || meetingUuid === null) {
        throw new Error("Missing the required parameter 'meetingUuid' when calling getMeetingEndpointsLiveByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId,
        'meeting_uuid': meetingUuid
      };
      var queryParams = {
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingExtendedIndigo;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingPastByEnterprise operation.
     * @callback module:api/CommandCenterApi~getMeetingPastByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingExtendedIndigo} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Meeting Endpoints &amp; Stats by Enterprise
     * This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.includeEndpoints Option to include detailed data on endpoints
     * @param {module:api/CommandCenterApi~getMeetingPastByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingExtendedIndigo}
     */
    this.getMeetingPastByEnterprise = function(enterpriseId, meetingUuid, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingPastByEnterprise");
      }

      // verify the required parameter 'meetingUuid' is set
      if (meetingUuid === undefined || meetingUuid === null) {
        throw new Error("Missing the required parameter 'meetingUuid' when calling getMeetingPastByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId,
        'meeting_uuid': meetingUuid
      };
      var queryParams = {
        'includeEndpoints': opts['includeEndpoints']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingExtendedIndigo;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingPastByUser operation.
     * @callback module:api/CommandCenterApi~getMeetingPastByUserCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingExtendedIndigo} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Meeting Endpoints &amp; Stats by User
     * This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {String} meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
     * @param {module:api/CommandCenterApi~getMeetingPastByUserCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingExtendedIndigo}
     */
    this.getMeetingPastByUser = function(userId, meetingUuid, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getMeetingPastByUser");
      }

      // verify the required parameter 'meetingUuid' is set
      if (meetingUuid === undefined || meetingUuid === null) {
        throw new Error("Missing the required parameter 'meetingUuid' when calling getMeetingPastByUser");
      }


      var pathParams = {
        'user_id': userId,
        'meeting_uuid': meetingUuid
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingExtendedIndigo;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/indigo/meetings/{meeting_uuid}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingUsage operation.
     * @callback module:api/CommandCenterApi~getMeetingUsageCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsUsage} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object} opts Optional parameters
     * @param {String} opts.clientTZ Based on standard TZ code. (default to America/Denver)
     * @param {String} opts.filter URL-encoded JSON string (default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}])
     * @param {module:api/CommandCenterApi~getMeetingUsageCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsUsage}
     */
    this.getMeetingUsage = function(enterpriseId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingUsage");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'clientTZ': opts['clientTZ'],
        'filter': opts['filter']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsUsage;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingUsageV2 operation.
     * @callback module:api/CommandCenterApi~getMeetingUsageV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsUsage} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage.  Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]
     * @param {Object} opts Optional parameters
     * @param {String} opts.clientTZ Based on standard TZ code. (default to America/Denver)
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getMeetingUsageV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsUsage}
     */
    this.getMeetingUsageV2 = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingUsageV2");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getMeetingUsageV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'clientTZ': opts['clientTZ'],
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsUsage;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingsLiveByEnterprise operation.
     * @callback module:api/CommandCenterApi~getMeetingsLiveByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingIndigoList} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Live Meetings Summary by Enterprise
     * This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getMeetingsLiveByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingIndigoList}
     */
    this.getMeetingsLiveByEnterprise = function(enterpriseId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingsLiveByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingIndigoList;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/meetings/live', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingsPastByEnterprise operation.
     * @callback module:api/CommandCenterApi~getMeetingsPastByEnterpriseCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingIndigoList} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Past Meetings by Enterprise
     * This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object} opts Optional parameters
     * @param {Number} opts.offset Page Number
     * @param {Number} opts.limit Per page
     * @param {Object.<String, {String: String}>} opts.filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60;
     * @param {Boolean} opts.count Include total count of meetings in response
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getMeetingsPastByEnterpriseCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingIndigoList}
     */
    this.getMeetingsPastByEnterprise = function(enterpriseId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getMeetingsPastByEnterprise");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'offset': opts['offset'],
        'limit': opts['limit'],
        'filter': opts['filter'],
        'count': opts['count'],
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingIndigoList;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/meetings', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getMeetingsPastByUser operation.
     * @callback module:api/CommandCenterApi~getMeetingsPastByUserCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MeetingIndigoList} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List Past Meetings by User
     * This endpoint lists completed meetings by user. Requires enterprise administrator access token
     * @param {Number} userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
     * @param {Object.<String, {String: String}>} filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below.
     * @param {module:api/CommandCenterApi~getMeetingsPastByUserCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MeetingIndigoList}
     */
    this.getMeetingsPastByUser = function(userId, filter, callback) {
      var postBody = null;

      // verify the required parameter 'userId' is set
      if (userId === undefined || userId === null) {
        throw new Error("Missing the required parameter 'userId' when calling getMeetingsPastByUser");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getMeetingsPastByUser");
      }


      var pathParams = {
        'user_id': userId
      };
      var queryParams = {
        'filter': filter
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = MeetingIndigoList;

      return this.apiClient.callApi(
        '/v1/user/{user_id}/indigo/meetings', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRoiRanges operation.
     * @callback module:api/CommandCenterApi~getRoiRangesCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsRoiData} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter URL-encoded JSON string
     * @param {module:api/CommandCenterApi~getRoiRangesCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsRoiData}
     */
    this.getRoiRanges = function(enterpriseId, filter, callback) {
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getRoiRanges");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getRoiRanges");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsRoiData;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRoiRangesV2 operation.
     * @callback module:api/CommandCenterApi~getRoiRangesV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsRoiData} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }]
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getRoiRangesV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsRoiData}
     */
    this.getRoiRangesV2 = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getRoiRangesV2");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getRoiRangesV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsRoiData;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTopUsers operation.
     * @callback module:api/CommandCenterApi~getTopUsersCallback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsTopUsers} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {Object} opts Optional parameters
     * @param {String} opts.filter URL-encoded JSON string (default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}])
     * @param {module:api/CommandCenterApi~getTopUsersCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsTopUsers}
     */
    this.getTopUsers = function(enterpriseId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getTopUsers");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': opts['filter']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsTopUsers;

      return this.apiClient.callApi(
        '/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTopUsersV2 operation.
     * @callback module:api/CommandCenterApi~getTopUsersV2Callback
     * @param {String} error Error message, if any.
     * @param {module:model/AnalyticsTopUsers} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param {Number} enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
     * @param {String} filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}]
     * @param {Object} opts Optional parameters
     * @param {String} opts.appName name of your application.  While not required, providing an app_name improves API performance (default to api_developer)
     * @param {module:api/CommandCenterApi~getTopUsersV2Callback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/AnalyticsTopUsers}
     */
    this.getTopUsersV2 = function(enterpriseId, filter, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'enterpriseId' is set
      if (enterpriseId === undefined || enterpriseId === null) {
        throw new Error("Missing the required parameter 'enterpriseId' when calling getTopUsersV2");
      }

      // verify the required parameter 'filter' is set
      if (filter === undefined || filter === null) {
        throw new Error("Missing the required parameter 'filter' when calling getTopUsersV2");
      }


      var pathParams = {
        'enterprise_id': enterpriseId
      };
      var queryParams = {
        'filter': filter,
        'app_name': opts['appName']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = AnalyticsTopUsers;

      return this.apiClient.callApi(
        '/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
