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
    define(['ApiClient', 'model/Error', 'model/GrantClient', 'model/GrantCode', 'model/GrantMeeting', 'model/GrantPassword', 'model/GrantRefresh', 'model/GrantRequestClient', 'model/GrantRequestCode', 'model/GrantRequestMeeting', 'model/GrantRequestPassword', 'model/GrantRequestRefresh', 'model/GrantRequestRevoke', 'model/InlineResponse200'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/Error'), require('../model/GrantClient'), require('../model/GrantCode'), require('../model/GrantMeeting'), require('../model/GrantPassword'), require('../model/GrantRefresh'), require('../model/GrantRequestClient'), require('../model/GrantRequestCode'), require('../model/GrantRequestMeeting'), require('../model/GrantRequestPassword'), require('../model/GrantRequestRefresh'), require('../model/GrantRequestRevoke'), require('../model/InlineResponse200'));
  } else {
    // Browser globals (root is window)
    if (!root.BlueJeansMeetingsRestApi) {
      root.BlueJeansMeetingsRestApi = {};
    }
    root.BlueJeansMeetingsRestApi.AuthenticationApi = factory(root.BlueJeansMeetingsRestApi.ApiClient, root.BlueJeansMeetingsRestApi.Error, root.BlueJeansMeetingsRestApi.GrantClient, root.BlueJeansMeetingsRestApi.GrantCode, root.BlueJeansMeetingsRestApi.GrantMeeting, root.BlueJeansMeetingsRestApi.GrantPassword, root.BlueJeansMeetingsRestApi.GrantRefresh, root.BlueJeansMeetingsRestApi.GrantRequestClient, root.BlueJeansMeetingsRestApi.GrantRequestCode, root.BlueJeansMeetingsRestApi.GrantRequestMeeting, root.BlueJeansMeetingsRestApi.GrantRequestPassword, root.BlueJeansMeetingsRestApi.GrantRequestRefresh, root.BlueJeansMeetingsRestApi.GrantRequestRevoke, root.BlueJeansMeetingsRestApi.InlineResponse200);
  }
}(this, function(ApiClient, Error, GrantClient, GrantCode, GrantMeeting, GrantPassword, GrantRefresh, GrantRequestClient, GrantRequestCode, GrantRequestMeeting, GrantRequestPassword, GrantRequestRefresh, GrantRequestRevoke, InlineResponse200) {
  'use strict';

  /**
   * Authentication service.
   * @module api/AuthenticationApi
   * @version 1.0.0
   */

  /**
   * Constructs a new AuthenticationApi. 
   * @alias module:api/AuthenticationApi
   * @class
   * @param {module:ApiClient} apiClient Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the getAuthorizationCode operation.
     * @callback module:api/AuthenticationApi~getAuthorizationCodeCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get Authorization Code
     * This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. Use \&quot;bluejeans.com\&quot; as hostname. &lt;br /&gt;**Note:**&lt;br /&gt;&amp;nbsp;&amp;nbsp;The code returned is only valid for *30 seconds.*  Your application must call as soon as possible the /oauth2/token API to generate an access token from the returned code.
     * @param {Object} opts Optional parameters
     * @param {String} opts.clientId The 32 character client ID generated when you created the client application.
     * @param {String} opts.redirectUri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
     * @param {String} opts.state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
     * @param {String} opts.scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time.
     * @param {String} opts.responseType The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (default to code)
     * @param {String} opts.appName The name of the client application shown to user during authorization.
     * @param {String} opts.appLogoUrl URL to an 84x84 image shown to user during authorization.
     * @param {module:api/AuthenticationApi~getAuthorizationCodeCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.getAuthorizationCode = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'clientId': opts['clientId'],
        'redirectUri': opts['redirectUri'],
        'state': opts['state'],
        'scope': opts['scope'],
        'responseType': opts['responseType'],
        'appName': opts['appName'],
        'appLogoUrl': opts['appLogoUrl']
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
        '/oauth2/authorize', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenByClient operation.
     * @callback module:api/AuthenticationApi~getTokenByClientCallback
     * @param {String} error Error message, if any.
     * @param {module:model/GrantClient} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Authentication via Client Grant Type
     * This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
     * @param {module:model/GrantRequestClient} grantRequestClient Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.
     * @param {module:api/AuthenticationApi~getTokenByClientCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/GrantClient}
     */
    this.getTokenByClient = function(grantRequestClient, callback) {
      var postBody = grantRequestClient;

      // verify the required parameter 'grantRequestClient' is set
      if (grantRequestClient === undefined || grantRequestClient === null) {
        throw new Error("Missing the required parameter 'grantRequestClient' when calling getTokenByClient");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = GrantClient;

      return this.apiClient.callApi(
        '/oauth2/token?Client', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenByCode operation.
     * @callback module:api/AuthenticationApi~getTokenByCodeCallback
     * @param {String} error Error message, if any.
     * @param {module:model/GrantCode} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Authentication via Code Grant Type
     * This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
     * @param {module:model/GrantRequestCode} grantRequestCode Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.
     * @param {module:api/AuthenticationApi~getTokenByCodeCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/GrantCode}
     */
    this.getTokenByCode = function(grantRequestCode, callback) {
      var postBody = grantRequestCode;

      // verify the required parameter 'grantRequestCode' is set
      if (grantRequestCode === undefined || grantRequestCode === null) {
        throw new Error("Missing the required parameter 'grantRequestCode' when calling getTokenByCode");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = GrantCode;

      return this.apiClient.callApi(
        '/oauth2/token?Code', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenByMeeting operation.
     * @callback module:api/AuthenticationApi~getTokenByMeetingCallback
     * @param {String} error Error message, if any.
     * @param {module:model/GrantMeeting} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Authentication via Meeting Grant Type
     * This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
     * @param {module:model/GrantRequestMeeting} grantRequestMeeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.
     * @param {module:api/AuthenticationApi~getTokenByMeetingCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/GrantMeeting}
     */
    this.getTokenByMeeting = function(grantRequestMeeting, callback) {
      var postBody = grantRequestMeeting;

      // verify the required parameter 'grantRequestMeeting' is set
      if (grantRequestMeeting === undefined || grantRequestMeeting === null) {
        throw new Error("Missing the required parameter 'grantRequestMeeting' when calling getTokenByMeeting");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = GrantMeeting;

      return this.apiClient.callApi(
        '/oauth2/token?Meeting', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenByPassword operation.
     * @callback module:api/AuthenticationApi~getTokenByPasswordCallback
     * @param {String} error Error message, if any.
     * @param {module:model/GrantPassword} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Authentication via Password Grant Type
     * This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
     * @param {module:model/GrantRequestPassword} grantRequestPassword Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.
     * @param {module:api/AuthenticationApi~getTokenByPasswordCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/GrantPassword}
     */
    this.getTokenByPassword = function(grantRequestPassword, callback) {
      var postBody = grantRequestPassword;

      // verify the required parameter 'grantRequestPassword' is set
      if (grantRequestPassword === undefined || grantRequestPassword === null) {
        throw new Error("Missing the required parameter 'grantRequestPassword' when calling getTokenByPassword");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = GrantPassword;

      return this.apiClient.callApi(
        '/oauth2/token?Password', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenByRefresh operation.
     * @callback module:api/AuthenticationApi~getTokenByRefreshCallback
     * @param {String} error Error message, if any.
     * @param {module:model/GrantRefresh} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Authentication via Refresh Grant Type
     * This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
     * @param {module:model/GrantRequestRefresh} grantRequestRefresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.
     * @param {module:api/AuthenticationApi~getTokenByRefreshCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/GrantRefresh}
     */
    this.getTokenByRefresh = function(grantRequestRefresh, callback) {
      var postBody = grantRequestRefresh;

      // verify the required parameter 'grantRequestRefresh' is set
      if (grantRequestRefresh === undefined || grantRequestRefresh === null) {
        throw new Error("Missing the required parameter 'grantRequestRefresh' when calling getTokenByRefresh");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = GrantRefresh;

      return this.apiClient.callApi(
        '/oauth2/token?Refresh', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenInfo operation.
     * @callback module:api/AuthenticationApi~getTokenInfoCallback
     * @param {String} error Error message, if any.
     * @param {module:model/InlineResponse200} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Validate a Token
     * This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
     * @param {Object} opts Optional parameters
     * @param {String} opts.accessToken 
     * @param {module:api/AuthenticationApi~getTokenInfoCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/InlineResponse200}
     */
    this.getTokenInfo = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'access_token': opts['accessToken']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = InlineResponse200;

      return this.apiClient.callApi(
        '/oauth2/tokenInfo', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the revokeAccessToken operation.
     * @callback module:api/AuthenticationApi~revokeAccessTokenCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Revoke Access Token
     * This API is part of the 3-legged OAuth 2.0 authorization flow.
     * @param {module:model/GrantRequestRevoke} grantRequestRevoke Contains information about the type of grant you are revoking.
     * @param {Object} opts Optional parameters
     * @param {String} opts.accessToken 
     * @param {module:api/AuthenticationApi~revokeAccessTokenCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.revokeAccessToken = function(grantRequestRevoke, opts, callback) {
      opts = opts || {};
      var postBody = grantRequestRevoke;

      // verify the required parameter 'grantRequestRevoke' is set
      if (grantRequestRevoke === undefined || grantRequestRevoke === null) {
        throw new Error("Missing the required parameter 'grantRequestRevoke' when calling revokeAccessToken");
      }


      var pathParams = {
      };
      var queryParams = {
        'access_token': opts['accessToken']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['access_token'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = null;

      return this.apiClient.callApi(
        '/oauth2/token?Revoke', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
