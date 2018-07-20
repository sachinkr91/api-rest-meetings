/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407102018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace com.bluejeans.api.rest.meetings.Api
{
    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public interface IAuthenticationApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Get Authorization Code
        /// </summary>
        /// <remarks>
        /// This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns></returns>
        void GetAuthorizationCode (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null);

        /// <summary>
        /// Get Authorization Code
        /// </summary>
        /// <remarks>
        /// This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> GetAuthorizationCodeWithHttpInfo (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null);
        /// <summary>
        /// Authentication via Client Grant Type
        /// </summary>
        /// <remarks>
        /// This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>GrantClient</returns>
        GrantClient GetTokenByClient (GrantRequestClient grantRequestClient);

        /// <summary>
        /// Authentication via Client Grant Type
        /// </summary>
        /// <remarks>
        /// This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>ApiResponse of GrantClient</returns>
        ApiResponse<GrantClient> GetTokenByClientWithHttpInfo (GrantRequestClient grantRequestClient);
        /// <summary>
        /// Authentication via Code Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>GrantCode</returns>
        GrantCode GetTokenByCode (GrantRequestCode grantRequestCode);

        /// <summary>
        /// Authentication via Code Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>ApiResponse of GrantCode</returns>
        ApiResponse<GrantCode> GetTokenByCodeWithHttpInfo (GrantRequestCode grantRequestCode);
        /// <summary>
        /// Authentication via Meeting Grant Type
        /// </summary>
        /// <remarks>
        /// This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>GrantMeeting</returns>
        GrantMeeting GetTokenByMeeting (GrantRequestMeeting grantRequestMeeting);

        /// <summary>
        /// Authentication via Meeting Grant Type
        /// </summary>
        /// <remarks>
        /// This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>ApiResponse of GrantMeeting</returns>
        ApiResponse<GrantMeeting> GetTokenByMeetingWithHttpInfo (GrantRequestMeeting grantRequestMeeting);
        /// <summary>
        /// Authentication via Password Grant Type
        /// </summary>
        /// <remarks>
        /// This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>GrantPassword</returns>
        GrantPassword GetTokenByPassword (GrantRequestPassword grantRequestPassword);

        /// <summary>
        /// Authentication via Password Grant Type
        /// </summary>
        /// <remarks>
        /// This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>ApiResponse of GrantPassword</returns>
        ApiResponse<GrantPassword> GetTokenByPasswordWithHttpInfo (GrantRequestPassword grantRequestPassword);
        /// <summary>
        /// Authentication via Refresh Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>GrantRefresh</returns>
        GrantRefresh GetTokenByRefresh (GrantRequestRefresh grantRequestRefresh);

        /// <summary>
        /// Authentication via Refresh Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>ApiResponse of GrantRefresh</returns>
        ApiResponse<GrantRefresh> GetTokenByRefreshWithHttpInfo (GrantRequestRefresh grantRequestRefresh);
        /// <summary>
        /// Validate a Token
        /// </summary>
        /// <remarks>
        /// This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>InlineResponse200</returns>
        InlineResponse200 GetTokenInfo (string accessToken = null);

        /// <summary>
        /// Validate a Token
        /// </summary>
        /// <remarks>
        /// This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>ApiResponse of InlineResponse200</returns>
        ApiResponse<InlineResponse200> GetTokenInfoWithHttpInfo (string accessToken = null);
        /// <summary>
        /// Revoke Access Token
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns></returns>
        void RevokeAccessToken (GrantRequestRevoke grantRequestRevoke, string accessToken = null);

        /// <summary>
        /// Revoke Access Token
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> RevokeAccessTokenWithHttpInfo (GrantRequestRevoke grantRequestRevoke, string accessToken = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Get Authorization Code
        /// </summary>
        /// <remarks>
        /// This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task GetAuthorizationCodeAsync (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null);

        /// <summary>
        /// Get Authorization Code
        /// </summary>
        /// <remarks>
        /// This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> GetAuthorizationCodeAsyncWithHttpInfo (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null);
        /// <summary>
        /// Authentication via Client Grant Type
        /// </summary>
        /// <remarks>
        /// This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>Task of GrantClient</returns>
        System.Threading.Tasks.Task<GrantClient> GetTokenByClientAsync (GrantRequestClient grantRequestClient);

        /// <summary>
        /// Authentication via Client Grant Type
        /// </summary>
        /// <remarks>
        /// This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>Task of ApiResponse (GrantClient)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantClient>> GetTokenByClientAsyncWithHttpInfo (GrantRequestClient grantRequestClient);
        /// <summary>
        /// Authentication via Code Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>Task of GrantCode</returns>
        System.Threading.Tasks.Task<GrantCode> GetTokenByCodeAsync (GrantRequestCode grantRequestCode);

        /// <summary>
        /// Authentication via Code Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>Task of ApiResponse (GrantCode)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantCode>> GetTokenByCodeAsyncWithHttpInfo (GrantRequestCode grantRequestCode);
        /// <summary>
        /// Authentication via Meeting Grant Type
        /// </summary>
        /// <remarks>
        /// This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>Task of GrantMeeting</returns>
        System.Threading.Tasks.Task<GrantMeeting> GetTokenByMeetingAsync (GrantRequestMeeting grantRequestMeeting);

        /// <summary>
        /// Authentication via Meeting Grant Type
        /// </summary>
        /// <remarks>
        /// This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>Task of ApiResponse (GrantMeeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantMeeting>> GetTokenByMeetingAsyncWithHttpInfo (GrantRequestMeeting grantRequestMeeting);
        /// <summary>
        /// Authentication via Password Grant Type
        /// </summary>
        /// <remarks>
        /// This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>Task of GrantPassword</returns>
        System.Threading.Tasks.Task<GrantPassword> GetTokenByPasswordAsync (GrantRequestPassword grantRequestPassword);

        /// <summary>
        /// Authentication via Password Grant Type
        /// </summary>
        /// <remarks>
        /// This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>Task of ApiResponse (GrantPassword)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantPassword>> GetTokenByPasswordAsyncWithHttpInfo (GrantRequestPassword grantRequestPassword);
        /// <summary>
        /// Authentication via Refresh Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>Task of GrantRefresh</returns>
        System.Threading.Tasks.Task<GrantRefresh> GetTokenByRefreshAsync (GrantRequestRefresh grantRequestRefresh);

        /// <summary>
        /// Authentication via Refresh Grant Type
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>Task of ApiResponse (GrantRefresh)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantRefresh>> GetTokenByRefreshAsyncWithHttpInfo (GrantRequestRefresh grantRequestRefresh);
        /// <summary>
        /// Validate a Token
        /// </summary>
        /// <remarks>
        /// This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of InlineResponse200</returns>
        System.Threading.Tasks.Task<InlineResponse200> GetTokenInfoAsync (string accessToken = null);

        /// <summary>
        /// Validate a Token
        /// </summary>
        /// <remarks>
        /// This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of ApiResponse (InlineResponse200)</returns>
        System.Threading.Tasks.Task<ApiResponse<InlineResponse200>> GetTokenInfoAsyncWithHttpInfo (string accessToken = null);
        /// <summary>
        /// Revoke Access Token
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task RevokeAccessTokenAsync (GrantRequestRevoke grantRequestRevoke, string accessToken = null);

        /// <summary>
        /// Revoke Access Token
        /// </summary>
        /// <remarks>
        /// This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> RevokeAccessTokenAsyncWithHttpInfo (GrantRequestRevoke grantRequestRevoke, string accessToken = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class AuthenticationApi : IAuthenticationApi
    {
        private com.bluejeans.api.rest.meetings.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="AuthenticationApi"/> class.
        /// </summary>
        /// <returns></returns>
        public AuthenticationApi(String basePath)
        {
            this.Configuration = new Configuration(new ApiClient(basePath));

            ExceptionFactory = com.bluejeans.api.rest.meetings.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="AuthenticationApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public AuthenticationApi(Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = com.bluejeans.api.rest.meetings.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Gets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        public String GetBasePath()
        {
            return this.Configuration.ApiClient.RestClient.BaseUrl.ToString();
        }

        /// <summary>
        /// Sets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
        public void SetBasePath(String basePath)
        {
            // do nothing
        }

        /// <summary>
        /// Gets or sets the configuration object
        /// </summary>
        /// <value>An instance of the Configuration</value>
        public Configuration Configuration {get; set;}

        /// <summary>
        /// Provides a factory method hook for the creation of exceptions.
        /// </summary>
        public com.bluejeans.api.rest.meetings.Client.ExceptionFactory ExceptionFactory
        {
            get
            {
                if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
                {
                    throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
                }
                return _exceptionFactory;
            }
            set { _exceptionFactory = value; }
        }

        /// <summary>
        /// Gets the default header.
        /// </summary>
        /// <returns>Dictionary of HTTP header</returns>
        [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
        public Dictionary<String, String> DefaultHeader()
        {
            return this.Configuration.DefaultHeader;
        }

        /// <summary>
        /// Add default header.
        /// </summary>
        /// <param name="key">Header field name.</param>
        /// <param name="value">Header field value.</param>
        /// <returns></returns>
        [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
        public void AddDefaultHeader(string key, string value)
        {
            this.Configuration.AddDefaultHeader(key, value);
        }

        /// <summary>
        /// Get Authorization Code This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns></returns>
        public void GetAuthorizationCode (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null)
        {
             GetAuthorizationCodeWithHttpInfo(clientId, redirectUri, state, scope, responseType, appName, appLogoUrl);
        }

        /// <summary>
        /// Get Authorization Code This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> GetAuthorizationCodeWithHttpInfo (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null)
        {

            var localVarPath = "/oauth2/authorize";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (clientId != null) localVarQueryParams.Add("clientId", Configuration.ApiClient.ParameterToString(clientId)); // query parameter
            if (redirectUri != null) localVarQueryParams.Add("redirectUri", Configuration.ApiClient.ParameterToString(redirectUri)); // query parameter
            if (state != null) localVarQueryParams.Add("state", Configuration.ApiClient.ParameterToString(state)); // query parameter
            if (scope != null) localVarQueryParams.Add("scope", Configuration.ApiClient.ParameterToString(scope)); // query parameter
            if (responseType != null) localVarQueryParams.Add("responseType", Configuration.ApiClient.ParameterToString(responseType)); // query parameter
            if (appName != null) localVarQueryParams.Add("appName", Configuration.ApiClient.ParameterToString(appName)); // query parameter
            if (appLogoUrl != null) localVarQueryParams.Add("appLogoUrl", Configuration.ApiClient.ParameterToString(appLogoUrl)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetAuthorizationCode", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Get Authorization Code This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task GetAuthorizationCodeAsync (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null)
        {
             await GetAuthorizationCodeAsyncWithHttpInfo(clientId, redirectUri, state, scope, responseType, appName, appLogoUrl);

        }

        /// <summary>
        /// Get Authorization Code This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. &lt;br /&gt;**Note**&lt;ul&gt;&lt;li&gt;This API is activated through &lt;b&gt; https://bluejeans.com/oauth2/authorize &lt;/b&gt;&lt;/li&gt;&lt;li&gt;The API&#39;s return code has a very short valid period of &lt;b&gt;30 seconds&lt;/b&gt;.  Your application must call the &lt;b&gt;/oauth2/token&lt;/b&gt; API as soon as possible once you receive this API&#39;s return code.&lt;/li&gt;&lt;/ul&gt;
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="clientId">The 32 character client ID generated when you created the client application. (optional)</param>
        /// <param name="redirectUri">The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)</param>
        /// <param name="state">Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)</param>
        /// <param name="scope">A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)</param>
        /// <param name="responseType">The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)</param>
        /// <param name="appName">The name of the client application shown to user during authorization. (optional)</param>
        /// <param name="appLogoUrl">URL to an 84x84 image shown to user during authorization. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> GetAuthorizationCodeAsyncWithHttpInfo (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null)
        {

            var localVarPath = "/oauth2/authorize";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (clientId != null) localVarQueryParams.Add("clientId", Configuration.ApiClient.ParameterToString(clientId)); // query parameter
            if (redirectUri != null) localVarQueryParams.Add("redirectUri", Configuration.ApiClient.ParameterToString(redirectUri)); // query parameter
            if (state != null) localVarQueryParams.Add("state", Configuration.ApiClient.ParameterToString(state)); // query parameter
            if (scope != null) localVarQueryParams.Add("scope", Configuration.ApiClient.ParameterToString(scope)); // query parameter
            if (responseType != null) localVarQueryParams.Add("responseType", Configuration.ApiClient.ParameterToString(responseType)); // query parameter
            if (appName != null) localVarQueryParams.Add("appName", Configuration.ApiClient.ParameterToString(appName)); // query parameter
            if (appLogoUrl != null) localVarQueryParams.Add("appLogoUrl", Configuration.ApiClient.ParameterToString(appLogoUrl)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetAuthorizationCode", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Authentication via Client Grant Type This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>GrantClient</returns>
        public GrantClient GetTokenByClient (GrantRequestClient grantRequestClient)
        {
             ApiResponse<GrantClient> localVarResponse = GetTokenByClientWithHttpInfo(grantRequestClient);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Authentication via Client Grant Type This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>ApiResponse of GrantClient</returns>
        public ApiResponse< GrantClient > GetTokenByClientWithHttpInfo (GrantRequestClient grantRequestClient)
        {
            // verify the required parameter 'grantRequestClient' is set
            if (grantRequestClient == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestClient' when calling AuthenticationApi->GetTokenByClient");

            var localVarPath = "/oauth2/token?Client";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestClient != null && grantRequestClient.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestClient); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestClient; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByClient", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantClient>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantClient) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantClient)));
        }

        /// <summary>
        /// Authentication via Client Grant Type This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>Task of GrantClient</returns>
        public async System.Threading.Tasks.Task<GrantClient> GetTokenByClientAsync (GrantRequestClient grantRequestClient)
        {
             ApiResponse<GrantClient> localVarResponse = await GetTokenByClientAsyncWithHttpInfo(grantRequestClient);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Authentication via Client Grant Type This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestClient">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.</param>
        /// <returns>Task of ApiResponse (GrantClient)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantClient>> GetTokenByClientAsyncWithHttpInfo (GrantRequestClient grantRequestClient)
        {
            // verify the required parameter 'grantRequestClient' is set
            if (grantRequestClient == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestClient' when calling AuthenticationApi->GetTokenByClient");

            var localVarPath = "/oauth2/token?Client";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestClient != null && grantRequestClient.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestClient); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestClient; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByClient", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantClient>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantClient) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantClient)));
        }

        /// <summary>
        /// Authentication via Code Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>GrantCode</returns>
        public GrantCode GetTokenByCode (GrantRequestCode grantRequestCode)
        {
             ApiResponse<GrantCode> localVarResponse = GetTokenByCodeWithHttpInfo(grantRequestCode);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Authentication via Code Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>ApiResponse of GrantCode</returns>
        public ApiResponse< GrantCode > GetTokenByCodeWithHttpInfo (GrantRequestCode grantRequestCode)
        {
            // verify the required parameter 'grantRequestCode' is set
            if (grantRequestCode == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestCode' when calling AuthenticationApi->GetTokenByCode");

            var localVarPath = "/oauth2/token?Code";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestCode != null && grantRequestCode.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestCode); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestCode; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByCode", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantCode>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantCode) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantCode)));
        }

        /// <summary>
        /// Authentication via Code Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>Task of GrantCode</returns>
        public async System.Threading.Tasks.Task<GrantCode> GetTokenByCodeAsync (GrantRequestCode grantRequestCode)
        {
             ApiResponse<GrantCode> localVarResponse = await GetTokenByCodeAsyncWithHttpInfo(grantRequestCode);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Authentication via Code Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestCode">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.</param>
        /// <returns>Task of ApiResponse (GrantCode)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantCode>> GetTokenByCodeAsyncWithHttpInfo (GrantRequestCode grantRequestCode)
        {
            // verify the required parameter 'grantRequestCode' is set
            if (grantRequestCode == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestCode' when calling AuthenticationApi->GetTokenByCode");

            var localVarPath = "/oauth2/token?Code";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestCode != null && grantRequestCode.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestCode); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestCode; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByCode", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantCode>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantCode) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantCode)));
        }

        /// <summary>
        /// Authentication via Meeting Grant Type This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>GrantMeeting</returns>
        public GrantMeeting GetTokenByMeeting (GrantRequestMeeting grantRequestMeeting)
        {
             ApiResponse<GrantMeeting> localVarResponse = GetTokenByMeetingWithHttpInfo(grantRequestMeeting);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Authentication via Meeting Grant Type This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>ApiResponse of GrantMeeting</returns>
        public ApiResponse< GrantMeeting > GetTokenByMeetingWithHttpInfo (GrantRequestMeeting grantRequestMeeting)
        {
            // verify the required parameter 'grantRequestMeeting' is set
            if (grantRequestMeeting == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestMeeting' when calling AuthenticationApi->GetTokenByMeeting");

            var localVarPath = "/oauth2/token?Meeting";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestMeeting != null && grantRequestMeeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestMeeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestMeeting; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantMeeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantMeeting) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantMeeting)));
        }

        /// <summary>
        /// Authentication via Meeting Grant Type This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>Task of GrantMeeting</returns>
        public async System.Threading.Tasks.Task<GrantMeeting> GetTokenByMeetingAsync (GrantRequestMeeting grantRequestMeeting)
        {
             ApiResponse<GrantMeeting> localVarResponse = await GetTokenByMeetingAsyncWithHttpInfo(grantRequestMeeting);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Authentication via Meeting Grant Type This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestMeeting">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.</param>
        /// <returns>Task of ApiResponse (GrantMeeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantMeeting>> GetTokenByMeetingAsyncWithHttpInfo (GrantRequestMeeting grantRequestMeeting)
        {
            // verify the required parameter 'grantRequestMeeting' is set
            if (grantRequestMeeting == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestMeeting' when calling AuthenticationApi->GetTokenByMeeting");

            var localVarPath = "/oauth2/token?Meeting";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestMeeting != null && grantRequestMeeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestMeeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestMeeting; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantMeeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantMeeting) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantMeeting)));
        }

        /// <summary>
        /// Authentication via Password Grant Type This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>GrantPassword</returns>
        public GrantPassword GetTokenByPassword (GrantRequestPassword grantRequestPassword)
        {
             ApiResponse<GrantPassword> localVarResponse = GetTokenByPasswordWithHttpInfo(grantRequestPassword);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Authentication via Password Grant Type This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>ApiResponse of GrantPassword</returns>
        public ApiResponse< GrantPassword > GetTokenByPasswordWithHttpInfo (GrantRequestPassword grantRequestPassword)
        {
            // verify the required parameter 'grantRequestPassword' is set
            if (grantRequestPassword == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestPassword' when calling AuthenticationApi->GetTokenByPassword");

            var localVarPath = "/oauth2/token?Password";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestPassword != null && grantRequestPassword.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestPassword); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestPassword; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByPassword", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantPassword>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantPassword) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantPassword)));
        }

        /// <summary>
        /// Authentication via Password Grant Type This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>Task of GrantPassword</returns>
        public async System.Threading.Tasks.Task<GrantPassword> GetTokenByPasswordAsync (GrantRequestPassword grantRequestPassword)
        {
             ApiResponse<GrantPassword> localVarResponse = await GetTokenByPasswordAsyncWithHttpInfo(grantRequestPassword);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Authentication via Password Grant Type This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestPassword">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.</param>
        /// <returns>Task of ApiResponse (GrantPassword)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantPassword>> GetTokenByPasswordAsyncWithHttpInfo (GrantRequestPassword grantRequestPassword)
        {
            // verify the required parameter 'grantRequestPassword' is set
            if (grantRequestPassword == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestPassword' when calling AuthenticationApi->GetTokenByPassword");

            var localVarPath = "/oauth2/token?Password";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestPassword != null && grantRequestPassword.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestPassword); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestPassword; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByPassword", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantPassword>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantPassword) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantPassword)));
        }

        /// <summary>
        /// Authentication via Refresh Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>GrantRefresh</returns>
        public GrantRefresh GetTokenByRefresh (GrantRequestRefresh grantRequestRefresh)
        {
             ApiResponse<GrantRefresh> localVarResponse = GetTokenByRefreshWithHttpInfo(grantRequestRefresh);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Authentication via Refresh Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>ApiResponse of GrantRefresh</returns>
        public ApiResponse< GrantRefresh > GetTokenByRefreshWithHttpInfo (GrantRequestRefresh grantRequestRefresh)
        {
            // verify the required parameter 'grantRequestRefresh' is set
            if (grantRequestRefresh == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestRefresh' when calling AuthenticationApi->GetTokenByRefresh");

            var localVarPath = "/oauth2/token?Refresh";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestRefresh != null && grantRequestRefresh.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestRefresh); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestRefresh; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByRefresh", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantRefresh>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantRefresh) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantRefresh)));
        }

        /// <summary>
        /// Authentication via Refresh Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>Task of GrantRefresh</returns>
        public async System.Threading.Tasks.Task<GrantRefresh> GetTokenByRefreshAsync (GrantRequestRefresh grantRequestRefresh)
        {
             ApiResponse<GrantRefresh> localVarResponse = await GetTokenByRefreshAsyncWithHttpInfo(grantRequestRefresh);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Authentication via Refresh Grant Type This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRefresh">Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.</param>
        /// <returns>Task of ApiResponse (GrantRefresh)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantRefresh>> GetTokenByRefreshAsyncWithHttpInfo (GrantRequestRefresh grantRequestRefresh)
        {
            // verify the required parameter 'grantRequestRefresh' is set
            if (grantRequestRefresh == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestRefresh' when calling AuthenticationApi->GetTokenByRefresh");

            var localVarPath = "/oauth2/token?Refresh";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (grantRequestRefresh != null && grantRequestRefresh.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestRefresh); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestRefresh; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenByRefresh", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantRefresh>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantRefresh) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantRefresh)));
        }

        /// <summary>
        /// Validate a Token This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>InlineResponse200</returns>
        public InlineResponse200 GetTokenInfo (string accessToken = null)
        {
             ApiResponse<InlineResponse200> localVarResponse = GetTokenInfoWithHttpInfo(accessToken);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Validate a Token This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>ApiResponse of InlineResponse200</returns>
        public ApiResponse< InlineResponse200 > GetTokenInfoWithHttpInfo (string accessToken = null)
        {

            var localVarPath = "/oauth2/tokenInfo";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (accessToken != null) localVarQueryParams.Add("access_token", Configuration.ApiClient.ParameterToString(accessToken)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenInfo", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<InlineResponse200>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (InlineResponse200) Configuration.ApiClient.Deserialize(localVarResponse, typeof(InlineResponse200)));
        }

        /// <summary>
        /// Validate a Token This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of InlineResponse200</returns>
        public async System.Threading.Tasks.Task<InlineResponse200> GetTokenInfoAsync (string accessToken = null)
        {
             ApiResponse<InlineResponse200> localVarResponse = await GetTokenInfoAsyncWithHttpInfo(accessToken);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Validate a Token This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of ApiResponse (InlineResponse200)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<InlineResponse200>> GetTokenInfoAsyncWithHttpInfo (string accessToken = null)
        {

            var localVarPath = "/oauth2/tokenInfo";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (accessToken != null) localVarQueryParams.Add("access_token", Configuration.ApiClient.ParameterToString(accessToken)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetTokenInfo", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<InlineResponse200>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (InlineResponse200) Configuration.ApiClient.Deserialize(localVarResponse, typeof(InlineResponse200)));
        }

        /// <summary>
        /// Revoke Access Token This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns></returns>
        public void RevokeAccessToken (GrantRequestRevoke grantRequestRevoke, string accessToken = null)
        {
             RevokeAccessTokenWithHttpInfo(grantRequestRevoke, accessToken);
        }

        /// <summary>
        /// Revoke Access Token This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> RevokeAccessTokenWithHttpInfo (GrantRequestRevoke grantRequestRevoke, string accessToken = null)
        {
            // verify the required parameter 'grantRequestRevoke' is set
            if (grantRequestRevoke == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestRevoke' when calling AuthenticationApi->RevokeAccessToken");

            var localVarPath = "/oauth2/token?Revoke";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (accessToken != null) localVarQueryParams.Add("access_token", Configuration.ApiClient.ParameterToString(accessToken)); // query parameter
            if (grantRequestRevoke != null && grantRequestRevoke.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestRevoke); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestRevoke; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("RevokeAccessToken", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Revoke Access Token This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task RevokeAccessTokenAsync (GrantRequestRevoke grantRequestRevoke, string accessToken = null)
        {
             await RevokeAccessTokenAsyncWithHttpInfo(grantRequestRevoke, accessToken);

        }

        /// <summary>
        /// Revoke Access Token This API is part of the 3-legged OAuth 2.0 authorization flow.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="grantRequestRevoke">Contains information about the type of grant you are revoking.</param>
        /// <param name="accessToken"> (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> RevokeAccessTokenAsyncWithHttpInfo (GrantRequestRevoke grantRequestRevoke, string accessToken = null)
        {
            // verify the required parameter 'grantRequestRevoke' is set
            if (grantRequestRevoke == null)
                throw new ApiException(400, "Missing required parameter 'grantRequestRevoke' when calling AuthenticationApi->RevokeAccessToken");

            var localVarPath = "/oauth2/token?Revoke";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (accessToken != null) localVarQueryParams.Add("access_token", Configuration.ApiClient.ParameterToString(accessToken)); // query parameter
            if (grantRequestRevoke != null && grantRequestRevoke.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(grantRequestRevoke); // http body (model) parameter
            }
            else
            {
                localVarPostBody = grantRequestRevoke; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("RevokeAccessToken", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

    }
}
