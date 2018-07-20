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
    public interface IHistoryApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Get Meeting History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistory</returns>
        MeetingHistory GetHistoryByEnterprise (int? enterpriseId, string meetingGuid);

        /// <summary>
        /// Get Meeting History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistory</returns>
        ApiResponse<MeetingHistory> GetHistoryByEnterpriseWithHttpInfo (int? enterpriseId, string meetingGuid);
        /// <summary>
        /// Get Meeting History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistory</returns>
        MeetingHistory GetHistoryByUser (int? userId, string meetingGuid);

        /// <summary>
        /// Get Meeting History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistory</returns>
        ApiResponse<MeetingHistory> GetHistoryByUserWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get Meeting History Sharing by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistorySharing</returns>
        MeetingHistorySharing GetHistorySharingByUser (int? userId, string meetingGuid);

        /// <summary>
        /// Get Meeting History Sharing by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistorySharing</returns>
        ApiResponse<MeetingHistorySharing> GetHistorySharingByUserWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get Recording
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the details about a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Recording</returns>
        Recording GetRecording (int? userId, int? recordingEntityId);

        /// <summary>
        /// Get Recording
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the details about a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>ApiResponse of Recording</returns>
        ApiResponse<Recording> GetRecordingWithHttpInfo (int? userId, int? recordingEntityId);
        /// <summary>
        /// List History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>List&lt;MeetingHistory&gt;</returns>
        List<MeetingHistory> ListHistoryByEnterprise (int? enterpriseId);

        /// <summary>
        /// List History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>ApiResponse of List&lt;MeetingHistory&gt;</returns>
        ApiResponse<List<MeetingHistory>> ListHistoryByEnterpriseWithHttpInfo (int? enterpriseId);
        /// <summary>
        /// List History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>List&lt;MeetingHistory&gt;</returns>
        List<MeetingHistory> ListHistoryByUser (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null);

        /// <summary>
        /// List History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>ApiResponse of List&lt;MeetingHistory&gt;</returns>
        ApiResponse<List<MeetingHistory>> ListHistoryByUserWithHttpInfo (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null);
        /// <summary>
        /// List Meeting Recordings
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting recordings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>List&lt;RecordingSummary&gt;</returns>
        List<RecordingSummary> ListRecordings (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null);

        /// <summary>
        /// List Meeting Recordings
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting recordings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>ApiResponse of List&lt;RecordingSummary&gt;</returns>
        ApiResponse<List<RecordingSummary>> ListRecordingsWithHttpInfo (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Get Meeting History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistory</returns>
        System.Threading.Tasks.Task<MeetingHistory> GetHistoryByEnterpriseAsync (int? enterpriseId, string meetingGuid);

        /// <summary>
        /// Get Meeting History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistory)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingHistory>> GetHistoryByEnterpriseAsyncWithHttpInfo (int? enterpriseId, string meetingGuid);
        /// <summary>
        /// Get Meeting History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistory</returns>
        System.Threading.Tasks.Task<MeetingHistory> GetHistoryByUserAsync (int? userId, string meetingGuid);

        /// <summary>
        /// Get Meeting History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistory)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingHistory>> GetHistoryByUserAsyncWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get Meeting History Sharing by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistorySharing</returns>
        System.Threading.Tasks.Task<MeetingHistorySharing> GetHistorySharingByUserAsync (int? userId, string meetingGuid);

        /// <summary>
        /// Get Meeting History Sharing by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistorySharing)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingHistorySharing>> GetHistorySharingByUserAsyncWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get Recording
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the details about a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Task of Recording</returns>
        System.Threading.Tasks.Task<Recording> GetRecordingAsync (int? userId, int? recordingEntityId);

        /// <summary>
        /// Get Recording
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the details about a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Task of ApiResponse (Recording)</returns>
        System.Threading.Tasks.Task<ApiResponse<Recording>> GetRecordingAsyncWithHttpInfo (int? userId, int? recordingEntityId);
        /// <summary>
        /// List History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of List&lt;MeetingHistory&gt;</returns>
        System.Threading.Tasks.Task<List<MeetingHistory>> ListHistoryByEnterpriseAsync (int? enterpriseId);

        /// <summary>
        /// List History by Enterprise
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of ApiResponse (List&lt;MeetingHistory&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<MeetingHistory>>> ListHistoryByEnterpriseAsyncWithHttpInfo (int? enterpriseId);
        /// <summary>
        /// List History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>Task of List&lt;MeetingHistory&gt;</returns>
        System.Threading.Tasks.Task<List<MeetingHistory>> ListHistoryByUserAsync (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null);

        /// <summary>
        /// List History by User
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting histories by the given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>Task of ApiResponse (List&lt;MeetingHistory&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<MeetingHistory>>> ListHistoryByUserAsyncWithHttpInfo (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null);
        /// <summary>
        /// List Meeting Recordings
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting recordings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>Task of List&lt;RecordingSummary&gt;</returns>
        System.Threading.Tasks.Task<List<RecordingSummary>> ListRecordingsAsync (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null);

        /// <summary>
        /// List Meeting Recordings
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a list of meeting recordings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>Task of ApiResponse (List&lt;RecordingSummary&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<RecordingSummary>>> ListRecordingsAsyncWithHttpInfo (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class HistoryApi : IHistoryApi
    {
        private com.bluejeans.api.rest.meetings.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="HistoryApi"/> class.
        /// </summary>
        /// <returns></returns>
        public HistoryApi(String basePath)
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
        /// Initializes a new instance of the <see cref="HistoryApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public HistoryApi(Configuration configuration = null)
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
        /// Get Meeting History by Enterprise This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistory</returns>
        public MeetingHistory GetHistoryByEnterprise (int? enterpriseId, string meetingGuid)
        {
             ApiResponse<MeetingHistory> localVarResponse = GetHistoryByEnterpriseWithHttpInfo(enterpriseId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting History by Enterprise This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistory</returns>
        public ApiResponse< MeetingHistory > GetHistoryByEnterpriseWithHttpInfo (int? enterpriseId, string meetingGuid)
        {
            // verify the required parameter 'enterpriseId' is set
            if (enterpriseId == null)
                throw new ApiException(400, "Missing required parameter 'enterpriseId' when calling HistoryApi->GetHistoryByEnterprise");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistoryByEnterprise");

            var localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}";
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

            if (enterpriseId != null) localVarPathParams.Add("enterprise_id", Configuration.ApiClient.ParameterToString(enterpriseId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistoryByEnterprise", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistory>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistory) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistory)));
        }

        /// <summary>
        /// Get Meeting History by Enterprise This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistory</returns>
        public async System.Threading.Tasks.Task<MeetingHistory> GetHistoryByEnterpriseAsync (int? enterpriseId, string meetingGuid)
        {
             ApiResponse<MeetingHistory> localVarResponse = await GetHistoryByEnterpriseAsyncWithHttpInfo(enterpriseId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting History by Enterprise This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistory)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingHistory>> GetHistoryByEnterpriseAsyncWithHttpInfo (int? enterpriseId, string meetingGuid)
        {
            // verify the required parameter 'enterpriseId' is set
            if (enterpriseId == null)
                throw new ApiException(400, "Missing required parameter 'enterpriseId' when calling HistoryApi->GetHistoryByEnterprise");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistoryByEnterprise");

            var localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}";
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

            if (enterpriseId != null) localVarPathParams.Add("enterprise_id", Configuration.ApiClient.ParameterToString(enterpriseId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistoryByEnterprise", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistory>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistory) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistory)));
        }

        /// <summary>
        /// Get Meeting History by User This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistory</returns>
        public MeetingHistory GetHistoryByUser (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingHistory> localVarResponse = GetHistoryByUserWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting History by User This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistory</returns>
        public ApiResponse< MeetingHistory > GetHistoryByUserWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetHistoryByUser");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistoryByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistoryByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistory>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistory) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistory)));
        }

        /// <summary>
        /// Get Meeting History by User This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistory</returns>
        public async System.Threading.Tasks.Task<MeetingHistory> GetHistoryByUserAsync (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingHistory> localVarResponse = await GetHistoryByUserAsyncWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting History by User This endpoint retrieves the meeting history for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistory)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingHistory>> GetHistoryByUserAsyncWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetHistoryByUser");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistoryByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistoryByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistory>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistory) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistory)));
        }

        /// <summary>
        /// Get Meeting History Sharing by User This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>MeetingHistorySharing</returns>
        public MeetingHistorySharing GetHistorySharingByUser (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingHistorySharing> localVarResponse = GetHistorySharingByUserWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting History Sharing by User This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of MeetingHistorySharing</returns>
        public ApiResponse< MeetingHistorySharing > GetHistorySharingByUserWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetHistorySharingByUser");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistorySharingByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistorySharingByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistorySharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistorySharing) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistorySharing)));
        }

        /// <summary>
        /// Get Meeting History Sharing by User This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of MeetingHistorySharing</returns>
        public async System.Threading.Tasks.Task<MeetingHistorySharing> GetHistorySharingByUserAsync (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingHistorySharing> localVarResponse = await GetHistorySharingByUserAsyncWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting History Sharing by User This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (MeetingHistorySharing)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingHistorySharing>> GetHistorySharingByUserAsyncWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetHistorySharingByUser");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling HistoryApi->GetHistorySharingByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetHistorySharingByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingHistorySharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingHistorySharing) Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingHistorySharing)));
        }

        /// <summary>
        /// Get Recording This endpoint retrieves the details about a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Recording</returns>
        public Recording GetRecording (int? userId, int? recordingEntityId)
        {
             ApiResponse<Recording> localVarResponse = GetRecordingWithHttpInfo(userId, recordingEntityId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Recording This endpoint retrieves the details about a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>ApiResponse of Recording</returns>
        public ApiResponse< Recording > GetRecordingWithHttpInfo (int? userId, int? recordingEntityId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetRecording");
            // verify the required parameter 'recordingEntityId' is set
            if (recordingEntityId == null)
                throw new ApiException(400, "Missing required parameter 'recordingEntityId' when calling HistoryApi->GetRecording");

            var localVarPath = "/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (recordingEntityId != null) localVarPathParams.Add("recording_entity_id", Configuration.ApiClient.ParameterToString(recordingEntityId)); // path parameter

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
                Exception exception = ExceptionFactory("GetRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Recording>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Recording) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Recording)));
        }

        /// <summary>
        /// Get Recording This endpoint retrieves the details about a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Task of Recording</returns>
        public async System.Threading.Tasks.Task<Recording> GetRecordingAsync (int? userId, int? recordingEntityId)
        {
             ApiResponse<Recording> localVarResponse = await GetRecordingAsyncWithHttpInfo(userId, recordingEntityId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Recording This endpoint retrieves the details about a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="recordingEntityId">The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.</param>
        /// <returns>Task of ApiResponse (Recording)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Recording>> GetRecordingAsyncWithHttpInfo (int? userId, int? recordingEntityId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->GetRecording");
            // verify the required parameter 'recordingEntityId' is set
            if (recordingEntityId == null)
                throw new ApiException(400, "Missing required parameter 'recordingEntityId' when calling HistoryApi->GetRecording");

            var localVarPath = "/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (recordingEntityId != null) localVarPathParams.Add("recording_entity_id", Configuration.ApiClient.ParameterToString(recordingEntityId)); // path parameter

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
                Exception exception = ExceptionFactory("GetRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Recording>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Recording) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Recording)));
        }

        /// <summary>
        /// List History by Enterprise This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>List&lt;MeetingHistory&gt;</returns>
        public List<MeetingHistory> ListHistoryByEnterprise (int? enterpriseId)
        {
             ApiResponse<List<MeetingHistory>> localVarResponse = ListHistoryByEnterpriseWithHttpInfo(enterpriseId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List History by Enterprise This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>ApiResponse of List&lt;MeetingHistory&gt;</returns>
        public ApiResponse< List<MeetingHistory> > ListHistoryByEnterpriseWithHttpInfo (int? enterpriseId)
        {
            // verify the required parameter 'enterpriseId' is set
            if (enterpriseId == null)
                throw new ApiException(400, "Missing required parameter 'enterpriseId' when calling HistoryApi->ListHistoryByEnterprise");

            var localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history";
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

            if (enterpriseId != null) localVarPathParams.Add("enterprise_id", Configuration.ApiClient.ParameterToString(enterpriseId)); // path parameter

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
                Exception exception = ExceptionFactory("ListHistoryByEnterprise", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<MeetingHistory>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<MeetingHistory>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<MeetingHistory>)));
        }

        /// <summary>
        /// List History by Enterprise This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of List&lt;MeetingHistory&gt;</returns>
        public async System.Threading.Tasks.Task<List<MeetingHistory>> ListHistoryByEnterpriseAsync (int? enterpriseId)
        {
             ApiResponse<List<MeetingHistory>> localVarResponse = await ListHistoryByEnterpriseAsyncWithHttpInfo(enterpriseId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List History by Enterprise This endpoint retrieves a list of meeting histories by the given enterprise.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enterpriseId">The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of ApiResponse (List&lt;MeetingHistory&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<MeetingHistory>>> ListHistoryByEnterpriseAsyncWithHttpInfo (int? enterpriseId)
        {
            // verify the required parameter 'enterpriseId' is set
            if (enterpriseId == null)
                throw new ApiException(400, "Missing required parameter 'enterpriseId' when calling HistoryApi->ListHistoryByEnterprise");

            var localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history";
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

            if (enterpriseId != null) localVarPathParams.Add("enterprise_id", Configuration.ApiClient.ParameterToString(enterpriseId)); // path parameter

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
                Exception exception = ExceptionFactory("ListHistoryByEnterprise", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<MeetingHistory>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<MeetingHistory>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<MeetingHistory>)));
        }

        /// <summary>
        /// List History by User This endpoint retrieves a list of meeting histories by the given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>List&lt;MeetingHistory&gt;</returns>
        public List<MeetingHistory> ListHistoryByUser (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)
        {
             ApiResponse<List<MeetingHistory>> localVarResponse = ListHistoryByUserWithHttpInfo(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List History by User This endpoint retrieves a list of meeting histories by the given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>ApiResponse of List&lt;MeetingHistory&gt;</returns>
        public ApiResponse< List<MeetingHistory> > ListHistoryByUserWithHttpInfo (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->ListHistoryByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarQueryParams.Add("meetingId", Configuration.ApiClient.ParameterToString(meetingId)); // query parameter
            if (startDate != null) localVarQueryParams.Add("startDate", Configuration.ApiClient.ParameterToString(startDate)); // query parameter
            if (endDate != null) localVarQueryParams.Add("endDate", Configuration.ApiClient.ParameterToString(endDate)); // query parameter
            if (pageSize != null) localVarQueryParams.Add("pageSize", Configuration.ApiClient.ParameterToString(pageSize)); // query parameter
            if (pageNumber != null) localVarQueryParams.Add("pageNumber", Configuration.ApiClient.ParameterToString(pageNumber)); // query parameter
            if (order != null) localVarQueryParams.Add("order", Configuration.ApiClient.ParameterToString(order)); // query parameter

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
                Exception exception = ExceptionFactory("ListHistoryByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<MeetingHistory>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<MeetingHistory>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<MeetingHistory>)));
        }

        /// <summary>
        /// List History by User This endpoint retrieves a list of meeting histories by the given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>Task of List&lt;MeetingHistory&gt;</returns>
        public async System.Threading.Tasks.Task<List<MeetingHistory>> ListHistoryByUserAsync (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)
        {
             ApiResponse<List<MeetingHistory>> localVarResponse = await ListHistoryByUserAsyncWithHttpInfo(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List History by User This endpoint retrieves a list of meeting histories by the given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">Return only meetings with the specified meeting numeric ID. (optional)</param>
        /// <param name="startDate">Return meetings starting from the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="endDate">Return meetings up until the specified date. MM/DD/YYYY (optional)</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional)</param>
        /// <param name="order">Puts results in ascending or descending order. asc/desc (optional)</param>
        /// <returns>Task of ApiResponse (List&lt;MeetingHistory&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<MeetingHistory>>> ListHistoryByUserAsyncWithHttpInfo (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->ListHistoryByUser");

            var localVarPath = "/v1/user/{user_id}/meeting_history";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarQueryParams.Add("meetingId", Configuration.ApiClient.ParameterToString(meetingId)); // query parameter
            if (startDate != null) localVarQueryParams.Add("startDate", Configuration.ApiClient.ParameterToString(startDate)); // query parameter
            if (endDate != null) localVarQueryParams.Add("endDate", Configuration.ApiClient.ParameterToString(endDate)); // query parameter
            if (pageSize != null) localVarQueryParams.Add("pageSize", Configuration.ApiClient.ParameterToString(pageSize)); // query parameter
            if (pageNumber != null) localVarQueryParams.Add("pageNumber", Configuration.ApiClient.ParameterToString(pageNumber)); // query parameter
            if (order != null) localVarQueryParams.Add("order", Configuration.ApiClient.ParameterToString(order)); // query parameter

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
                Exception exception = ExceptionFactory("ListHistoryByUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<MeetingHistory>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<MeetingHistory>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<MeetingHistory>)));
        }

        /// <summary>
        /// List Meeting Recordings This endpoint retrieves a list of meeting recordings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>List&lt;RecordingSummary&gt;</returns>
        public List<RecordingSummary> ListRecordings (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)
        {
             ApiResponse<List<RecordingSummary>> localVarResponse = ListRecordingsWithHttpInfo(userId, pageSize, pageNumber, sortBy, order);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List Meeting Recordings This endpoint retrieves a list of meeting recordings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>ApiResponse of List&lt;RecordingSummary&gt;</returns>
        public ApiResponse< List<RecordingSummary> > ListRecordingsWithHttpInfo (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->ListRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/recordings";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (pageSize != null) localVarQueryParams.Add("pageSize", Configuration.ApiClient.ParameterToString(pageSize)); // query parameter
            if (pageNumber != null) localVarQueryParams.Add("pageNumber", Configuration.ApiClient.ParameterToString(pageNumber)); // query parameter
            if (sortBy != null) localVarQueryParams.Add("sortBy", Configuration.ApiClient.ParameterToString(sortBy)); // query parameter
            if (order != null) localVarQueryParams.Add("order", Configuration.ApiClient.ParameterToString(order)); // query parameter

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
                Exception exception = ExceptionFactory("ListRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<RecordingSummary>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<RecordingSummary>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<RecordingSummary>)));
        }

        /// <summary>
        /// List Meeting Recordings This endpoint retrieves a list of meeting recordings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>Task of List&lt;RecordingSummary&gt;</returns>
        public async System.Threading.Tasks.Task<List<RecordingSummary>> ListRecordingsAsync (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)
        {
             ApiResponse<List<RecordingSummary>> localVarResponse = await ListRecordingsAsyncWithHttpInfo(userId, pageSize, pageNumber, sortBy, order);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List Meeting Recordings This endpoint retrieves a list of meeting recordings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="pageSize">Sets number of items returned per page. (optional, default to 10)</param>
        /// <param name="pageNumber">Selects which page of results to return. (optional, default to 1)</param>
        /// <param name="sortBy">Selects which page of results to return. (optional, default to start_time)</param>
        /// <param name="order">Puts results in ascending or descending order. (optional, default to desc)</param>
        /// <returns>Task of ApiResponse (List&lt;RecordingSummary&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<RecordingSummary>>> ListRecordingsAsyncWithHttpInfo (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling HistoryApi->ListRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/recordings";
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

            if (userId != null) localVarPathParams.Add("user_id", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (pageSize != null) localVarQueryParams.Add("pageSize", Configuration.ApiClient.ParameterToString(pageSize)); // query parameter
            if (pageNumber != null) localVarQueryParams.Add("pageNumber", Configuration.ApiClient.ParameterToString(pageNumber)); // query parameter
            if (sortBy != null) localVarQueryParams.Add("sortBy", Configuration.ApiClient.ParameterToString(sortBy)); // query parameter
            if (order != null) localVarQueryParams.Add("order", Configuration.ApiClient.ParameterToString(order)); // query parameter

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
                Exception exception = ExceptionFactory("ListRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<RecordingSummary>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<RecordingSummary>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<RecordingSummary>)));
        }

    }
}
