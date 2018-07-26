/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
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
    public interface IRecordingApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Enable Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>MeetingSharing</returns>
        MeetingSharing CreateShareRecordings (int? userId, string meetingGuid, SetSharing setSharing);

        /// <summary>
        /// Enable Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        ApiResponse<MeetingSharing> CreateShareRecordingsWithHttpInfo (int? userId, string meetingGuid, SetSharing setSharing);
        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. 
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Meeting</returns>
        Meeting DeleteAllRecordingsByMeetingGuid (int? userId, string meetingGuid);

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. 
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> DeleteAllRecordingsByMeetingGuidWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Delete a Specified Recording Chapter
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Meeting</returns>
        Meeting DeleteRecordingChapter (int? userId, int? meetingId, int? recordingChapterId);

        /// <summary>
        /// Delete a Specified Recording Chapter
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> DeleteRecordingChapterWithHttpInfo (int? userId, int? meetingId, int? recordingChapterId);
        /// <summary>
        /// Delete Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns></returns>
        void DeleteShareRecordings (int? userId, string meetingGuid);

        /// <summary>
        /// Delete Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> DeleteShareRecordingsWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get All Recordings for a Specified Meeting ID
        /// </summary>
        /// <remarks>
        /// This endpoint lists the recordings for a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>RecordingHistoryList</returns>
        RecordingHistoryList GetMeetingRecordings (int? userId, int? meetingId, string meetingGuid = null);

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID
        /// </summary>
        /// <remarks>
        /// This endpoint lists the recordings for a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>ApiResponse of RecordingHistoryList</returns>
        ApiResponse<RecordingHistoryList> GetMeetingRecordingsWithHttpInfo (int? userId, int? meetingId, string meetingGuid = null);
        /// <summary>
        /// Get Recording Download Link
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves properties about the recording chapter.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Content</returns>
        Content GetRecordingContent (int? userId, int? contentId, bool? isDownloadable);

        /// <summary>
        /// Get Recording Download Link
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves properties about the recording chapter.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>ApiResponse of Content</returns>
        ApiResponse<Content> GetRecordingContentWithHttpInfo (int? userId, int? contentId, bool? isDownloadable);
        /// <summary>
        /// List Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>MeetingSharing</returns>
        MeetingSharing GetShareRecordings (int? userId, string meetingGuid);

        /// <summary>
        /// List Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        ApiResponse<MeetingSharing> GetShareRecordingsWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Modify Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>MeetingSharing</returns>
        MeetingSharing ModifyShareRecordings (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing);

        /// <summary>
        /// Modify Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        ApiResponse<MeetingSharing> ModifyShareRecordingsWithHttpInfo (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing);
        /// <summary>
        /// Move Recording Ownership
        /// </summary>
        /// <remarks>
        /// This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>RecordingMovedComp</returns>
        RecordingMovedComp MoveRecordingOwner (int? userId, int? originalOwner, int? newOwner);

        /// <summary>
        /// Move Recording Ownership
        /// </summary>
        /// <remarks>
        /// This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>ApiResponse of RecordingMovedComp</returns>
        ApiResponse<RecordingMovedComp> MoveRecordingOwnerWithHttpInfo (int? userId, int? originalOwner, int? newOwner);
        /// <summary>
        /// Start Recording
        /// </summary>
        /// <remarks>
        /// This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns></returns>
        void StartRecording (int? userId, int? meetingId, string action);

        /// <summary>
        /// Start Recording
        /// </summary>
        /// <remarks>
        /// This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> StartRecordingWithHttpInfo (int? userId, int? meetingId, string action);
        /// <summary>
        /// Stop Recording
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns></returns>
        void StopRecording (int? userId, int? meetingId, string action);

        /// <summary>
        /// Stop Recording
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> StopRecordingWithHttpInfo (int? userId, int? meetingId, string action);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Enable Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>Task of MeetingSharing</returns>
        System.Threading.Tasks.Task<MeetingSharing> CreateShareRecordingsAsync (int? userId, string meetingGuid, SetSharing setSharing);

        /// <summary>
        /// Enable Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> CreateShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid, SetSharing setSharing);
        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. 
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> DeleteAllRecordingsByMeetingGuidAsync (int? userId, string meetingGuid);

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. 
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> DeleteAllRecordingsByMeetingGuidAsyncWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Delete a Specified Recording Chapter
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> DeleteRecordingChapterAsync (int? userId, int? meetingId, int? recordingChapterId);

        /// <summary>
        /// Delete a Specified Recording Chapter
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> DeleteRecordingChapterAsyncWithHttpInfo (int? userId, int? meetingId, int? recordingChapterId);
        /// <summary>
        /// Delete Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task DeleteShareRecordingsAsync (int? userId, string meetingGuid);

        /// <summary>
        /// Delete Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> DeleteShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Get All Recordings for a Specified Meeting ID
        /// </summary>
        /// <remarks>
        /// This endpoint lists the recordings for a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>Task of RecordingHistoryList</returns>
        System.Threading.Tasks.Task<RecordingHistoryList> GetMeetingRecordingsAsync (int? userId, int? meetingId, string meetingGuid = null);

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID
        /// </summary>
        /// <remarks>
        /// This endpoint lists the recordings for a meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>Task of ApiResponse (RecordingHistoryList)</returns>
        System.Threading.Tasks.Task<ApiResponse<RecordingHistoryList>> GetMeetingRecordingsAsyncWithHttpInfo (int? userId, int? meetingId, string meetingGuid = null);
        /// <summary>
        /// Get Recording Download Link
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves properties about the recording chapter.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Task of Content</returns>
        System.Threading.Tasks.Task<Content> GetRecordingContentAsync (int? userId, int? contentId, bool? isDownloadable);

        /// <summary>
        /// Get Recording Download Link
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves properties about the recording chapter.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Task of ApiResponse (Content)</returns>
        System.Threading.Tasks.Task<ApiResponse<Content>> GetRecordingContentAsyncWithHttpInfo (int? userId, int? contentId, bool? isDownloadable);
        /// <summary>
        /// List Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of MeetingSharing</returns>
        System.Threading.Tasks.Task<MeetingSharing> GetShareRecordingsAsync (int? userId, string meetingGuid);

        /// <summary>
        /// List Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> GetShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid);
        /// <summary>
        /// Modify Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>Task of MeetingSharing</returns>
        System.Threading.Tasks.Task<MeetingSharing> ModifyShareRecordingsAsync (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing);

        /// <summary>
        /// Modify Recording Sharing
        /// </summary>
        /// <remarks>
        /// This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> ModifyShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing);
        /// <summary>
        /// Move Recording Ownership
        /// </summary>
        /// <remarks>
        /// This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>Task of RecordingMovedComp</returns>
        System.Threading.Tasks.Task<RecordingMovedComp> MoveRecordingOwnerAsync (int? userId, int? originalOwner, int? newOwner);

        /// <summary>
        /// Move Recording Ownership
        /// </summary>
        /// <remarks>
        /// This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>Task of ApiResponse (RecordingMovedComp)</returns>
        System.Threading.Tasks.Task<ApiResponse<RecordingMovedComp>> MoveRecordingOwnerAsyncWithHttpInfo (int? userId, int? originalOwner, int? newOwner);
        /// <summary>
        /// Start Recording
        /// </summary>
        /// <remarks>
        /// This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task StartRecordingAsync (int? userId, int? meetingId, string action);

        /// <summary>
        /// Start Recording
        /// </summary>
        /// <remarks>
        /// This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> StartRecordingAsyncWithHttpInfo (int? userId, int? meetingId, string action);
        /// <summary>
        /// Stop Recording
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task StopRecordingAsync (int? userId, int? meetingId, string action);

        /// <summary>
        /// Stop Recording
        /// </summary>
        /// <remarks>
        /// This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> StopRecordingAsyncWithHttpInfo (int? userId, int? meetingId, string action);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class RecordingApi : IRecordingApi
    {
        private com.bluejeans.api.rest.meetings.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="RecordingApi"/> class.
        /// </summary>
        /// <returns></returns>
        public RecordingApi(String basePath)
        {
            this.Configuration = new com.bluejeans.api.rest.meetings.Client.Configuration { BasePath = basePath };

            ExceptionFactory = com.bluejeans.api.rest.meetings.Client.Configuration.DefaultExceptionFactory;
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="RecordingApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public RecordingApi(com.bluejeans.api.rest.meetings.Client.Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = com.bluejeans.api.rest.meetings.Client.Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = com.bluejeans.api.rest.meetings.Client.Configuration.DefaultExceptionFactory;
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
        public com.bluejeans.api.rest.meetings.Client.Configuration Configuration {get; set;}

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
        public IDictionary<String, String> DefaultHeader()
        {
            return new ReadOnlyDictionary<string, string>(this.Configuration.DefaultHeader);
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
        /// Enable Recording Sharing This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>MeetingSharing</returns>
        public MeetingSharing CreateShareRecordings (int? userId, string meetingGuid, SetSharing setSharing)
        {
             ApiResponse<MeetingSharing> localVarResponse = CreateShareRecordingsWithHttpInfo(userId, meetingGuid, setSharing);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Enable Recording Sharing This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        public ApiResponse< MeetingSharing > CreateShareRecordingsWithHttpInfo (int? userId, string meetingGuid, SetSharing setSharing)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->CreateShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->CreateShareRecordings");
            // verify the required parameter 'setSharing' is set
            if (setSharing == null)
                throw new ApiException(400, "Missing required parameter 'setSharing' when calling RecordingApi->CreateShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter
            if (setSharing != null && setSharing.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(setSharing); // http body (model) parameter
            }
            else
            {
                localVarPostBody = setSharing; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("CreateShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// Enable Recording Sharing This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>Task of MeetingSharing</returns>
        public async System.Threading.Tasks.Task<MeetingSharing> CreateShareRecordingsAsync (int? userId, string meetingGuid, SetSharing setSharing)
        {
             ApiResponse<MeetingSharing> localVarResponse = await CreateShareRecordingsAsyncWithHttpInfo(userId, meetingGuid, setSharing);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Enable Recording Sharing This endpoint creates a sharing authorization record for the specified meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="setSharing"></param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> CreateShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid, SetSharing setSharing)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->CreateShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->CreateShareRecordings");
            // verify the required parameter 'setSharing' is set
            if (setSharing == null)
                throw new ApiException(400, "Missing required parameter 'setSharing' when calling RecordingApi->CreateShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter
            if (setSharing != null && setSharing.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(setSharing); // http body (model) parameter
            }
            else
            {
                localVarPostBody = setSharing; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("CreateShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID This endpoint stops recording for a meeting in progress. 
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Meeting</returns>
        public Meeting DeleteAllRecordingsByMeetingGuid (int? userId, string meetingGuid)
        {
             ApiResponse<Meeting> localVarResponse = DeleteAllRecordingsByMeetingGuidWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID This endpoint stops recording for a meeting in progress. 
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > DeleteAllRecordingsByMeetingGuidWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteAllRecordingsByMeetingGuid");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->DeleteAllRecordingsByMeetingGuid");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteAllRecordingsByMeetingGuid", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID This endpoint stops recording for a meeting in progress. 
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> DeleteAllRecordingsByMeetingGuidAsync (int? userId, string meetingGuid)
        {
             ApiResponse<Meeting> localVarResponse = await DeleteAllRecordingsByMeetingGuidAsyncWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Delete All Recordings for a Specified Meeting GUID This endpoint stops recording for a meeting in progress. 
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> DeleteAllRecordingsByMeetingGuidAsyncWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteAllRecordingsByMeetingGuid");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->DeleteAllRecordingsByMeetingGuid");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meeting_guid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteAllRecordingsByMeetingGuid", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Delete a Specified Recording Chapter This endpoint stops recording for a meeting in progress.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Meeting</returns>
        public Meeting DeleteRecordingChapter (int? userId, int? meetingId, int? recordingChapterId)
        {
             ApiResponse<Meeting> localVarResponse = DeleteRecordingChapterWithHttpInfo(userId, meetingId, recordingChapterId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Delete a Specified Recording Chapter This endpoint stops recording for a meeting in progress.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > DeleteRecordingChapterWithHttpInfo (int? userId, int? meetingId, int? recordingChapterId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteRecordingChapter");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->DeleteRecordingChapter");
            // verify the required parameter 'recordingChapterId' is set
            if (recordingChapterId == null)
                throw new ApiException(400, "Missing required parameter 'recordingChapterId' when calling RecordingApi->DeleteRecordingChapter");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (recordingChapterId != null) localVarPathParams.Add("recording_chapter_id", this.Configuration.ApiClient.ParameterToString(recordingChapterId)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteRecordingChapter", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Delete a Specified Recording Chapter This endpoint stops recording for a meeting in progress.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> DeleteRecordingChapterAsync (int? userId, int? meetingId, int? recordingChapterId)
        {
             ApiResponse<Meeting> localVarResponse = await DeleteRecordingChapterAsyncWithHttpInfo(userId, meetingId, recordingChapterId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Delete a Specified Recording Chapter This endpoint stops recording for a meeting in progress.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="recordingChapterId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> DeleteRecordingChapterAsyncWithHttpInfo (int? userId, int? meetingId, int? recordingChapterId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteRecordingChapter");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->DeleteRecordingChapter");
            // verify the required parameter 'recordingChapterId' is set
            if (recordingChapterId == null)
                throw new ApiException(400, "Missing required parameter 'recordingChapterId' when calling RecordingApi->DeleteRecordingChapter");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (recordingChapterId != null) localVarPathParams.Add("recording_chapter_id", this.Configuration.ApiClient.ParameterToString(recordingChapterId)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteRecordingChapter", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Delete Recording Sharing This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns></returns>
        public void DeleteShareRecordings (int? userId, string meetingGuid)
        {
             DeleteShareRecordingsWithHttpInfo(userId, meetingGuid);
        }

        /// <summary>
        /// Delete Recording Sharing This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> DeleteShareRecordingsWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->DeleteShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Delete Recording Sharing This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task DeleteShareRecordingsAsync (int? userId, string meetingGuid)
        {
             await DeleteShareRecordingsAsyncWithHttpInfo(userId, meetingGuid);

        }

        /// <summary>
        /// Delete Recording Sharing This endpoint deletes the sharing authorization associated with a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> DeleteShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->DeleteShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->DeleteShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.DELETE, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("DeleteShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID This endpoint lists the recordings for a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>RecordingHistoryList</returns>
        public RecordingHistoryList GetMeetingRecordings (int? userId, int? meetingId, string meetingGuid = null)
        {
             ApiResponse<RecordingHistoryList> localVarResponse = GetMeetingRecordingsWithHttpInfo(userId, meetingId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID This endpoint lists the recordings for a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>ApiResponse of RecordingHistoryList</returns>
        public ApiResponse< RecordingHistoryList > GetMeetingRecordingsWithHttpInfo (int? userId, int? meetingId, string meetingGuid = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetMeetingRecordings");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->GetMeetingRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (meetingGuid != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "meetingGuid", meetingGuid)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetMeetingRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<RecordingHistoryList>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (RecordingHistoryList) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(RecordingHistoryList)));
        }

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID This endpoint lists the recordings for a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>Task of RecordingHistoryList</returns>
        public async System.Threading.Tasks.Task<RecordingHistoryList> GetMeetingRecordingsAsync (int? userId, int? meetingId, string meetingGuid = null)
        {
             ApiResponse<RecordingHistoryList> localVarResponse = await GetMeetingRecordingsAsyncWithHttpInfo(userId, meetingId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get All Recordings for a Specified Meeting ID This endpoint lists the recordings for a meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)</param>
        /// <returns>Task of ApiResponse (RecordingHistoryList)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<RecordingHistoryList>> GetMeetingRecordingsAsyncWithHttpInfo (int? userId, int? meetingId, string meetingGuid = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetMeetingRecordings");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->GetMeetingRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (meetingGuid != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "meetingGuid", meetingGuid)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetMeetingRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<RecordingHistoryList>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (RecordingHistoryList) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(RecordingHistoryList)));
        }

        /// <summary>
        /// Get Recording Download Link This endpoint retrieves properties about the recording chapter.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Content</returns>
        public Content GetRecordingContent (int? userId, int? contentId, bool? isDownloadable)
        {
             ApiResponse<Content> localVarResponse = GetRecordingContentWithHttpInfo(userId, contentId, isDownloadable);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Recording Download Link This endpoint retrieves properties about the recording chapter.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>ApiResponse of Content</returns>
        public ApiResponse< Content > GetRecordingContentWithHttpInfo (int? userId, int? contentId, bool? isDownloadable)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetRecordingContent");
            // verify the required parameter 'contentId' is set
            if (contentId == null)
                throw new ApiException(400, "Missing required parameter 'contentId' when calling RecordingApi->GetRecordingContent");
            // verify the required parameter 'isDownloadable' is set
            if (isDownloadable == null)
                throw new ApiException(400, "Missing required parameter 'isDownloadable' when calling RecordingApi->GetRecordingContent");

            var localVarPath = "/v1/user/{user_id}/cms/{content_id}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (contentId != null) localVarPathParams.Add("content_id", this.Configuration.ApiClient.ParameterToString(contentId)); // path parameter
            if (isDownloadable != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "isDownloadable", isDownloadable)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetRecordingContent", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Content>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Content) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Content)));
        }

        /// <summary>
        /// Get Recording Download Link This endpoint retrieves properties about the recording chapter.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Task of Content</returns>
        public async System.Threading.Tasks.Task<Content> GetRecordingContentAsync (int? userId, int? contentId, bool? isDownloadable)
        {
             ApiResponse<Content> localVarResponse = await GetRecordingContentAsyncWithHttpInfo(userId, contentId, isDownloadable);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Recording Download Link This endpoint retrieves properties about the recording chapter.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="contentId">The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.</param>
        /// <param name="isDownloadable">Set to true.</param>
        /// <returns>Task of ApiResponse (Content)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Content>> GetRecordingContentAsyncWithHttpInfo (int? userId, int? contentId, bool? isDownloadable)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetRecordingContent");
            // verify the required parameter 'contentId' is set
            if (contentId == null)
                throw new ApiException(400, "Missing required parameter 'contentId' when calling RecordingApi->GetRecordingContent");
            // verify the required parameter 'isDownloadable' is set
            if (isDownloadable == null)
                throw new ApiException(400, "Missing required parameter 'isDownloadable' when calling RecordingApi->GetRecordingContent");

            var localVarPath = "/v1/user/{user_id}/cms/{content_id}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (contentId != null) localVarPathParams.Add("content_id", this.Configuration.ApiClient.ParameterToString(contentId)); // path parameter
            if (isDownloadable != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "isDownloadable", isDownloadable)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetRecordingContent", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Content>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Content) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Content)));
        }

        /// <summary>
        /// List Recording Sharing This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>MeetingSharing</returns>
        public MeetingSharing GetShareRecordings (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingSharing> localVarResponse = GetShareRecordingsWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List Recording Sharing This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        public ApiResponse< MeetingSharing > GetShareRecordingsWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->GetShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// List Recording Sharing This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of MeetingSharing</returns>
        public async System.Threading.Tasks.Task<MeetingSharing> GetShareRecordingsAsync (int? userId, string meetingGuid)
        {
             ApiResponse<MeetingSharing> localVarResponse = await GetShareRecordingsAsyncWithHttpInfo(userId, meetingGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List Recording Sharing This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> GetShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->GetShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->GetShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// Modify Recording Sharing This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>MeetingSharing</returns>
        public MeetingSharing ModifyShareRecordings (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing)
        {
             ApiResponse<MeetingSharing> localVarResponse = ModifyShareRecordingsWithHttpInfo(userId, meetingGuid, sharingId, modifySharing);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Modify Recording Sharing This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>ApiResponse of MeetingSharing</returns>
        public ApiResponse< MeetingSharing > ModifyShareRecordingsWithHttpInfo (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'sharingId' is set
            if (sharingId == null)
                throw new ApiException(400, "Missing required parameter 'sharingId' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'modifySharing' is set
            if (modifySharing == null)
                throw new ApiException(400, "Missing required parameter 'modifySharing' when calling RecordingApi->ModifyShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter
            if (sharingId != null) localVarPathParams.Add("sharingId", this.Configuration.ApiClient.ParameterToString(sharingId)); // path parameter
            if (modifySharing != null && modifySharing.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(modifySharing); // http body (model) parameter
            }
            else
            {
                localVarPostBody = modifySharing; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("ModifyShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// Modify Recording Sharing This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>Task of MeetingSharing</returns>
        public async System.Threading.Tasks.Task<MeetingSharing> ModifyShareRecordingsAsync (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing)
        {
             ApiResponse<MeetingSharing> localVarResponse = await ModifyShareRecordingsAsyncWithHttpInfo(userId, meetingGuid, sharingId, modifySharing);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Modify Recording Sharing This endpoint modifieds the sharing authorization attributes for a meeting recording.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingGuid">The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.</param>
        /// <param name="sharingId">The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing</param>
        /// <param name="modifySharing"></param>
        /// <returns>Task of ApiResponse (MeetingSharing)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingSharing>> ModifyShareRecordingsAsyncWithHttpInfo (int? userId, string meetingGuid, string sharingId, ModifySharing modifySharing)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'meetingGuid' is set
            if (meetingGuid == null)
                throw new ApiException(400, "Missing required parameter 'meetingGuid' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'sharingId' is set
            if (sharingId == null)
                throw new ApiException(400, "Missing required parameter 'sharingId' when calling RecordingApi->ModifyShareRecordings");
            // verify the required parameter 'modifySharing' is set
            if (modifySharing == null)
                throw new ApiException(400, "Missing required parameter 'modifySharing' when calling RecordingApi->ModifyShareRecordings");

            var localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingGuid != null) localVarPathParams.Add("meetingGuid", this.Configuration.ApiClient.ParameterToString(meetingGuid)); // path parameter
            if (sharingId != null) localVarPathParams.Add("sharingId", this.Configuration.ApiClient.ParameterToString(sharingId)); // path parameter
            if (modifySharing != null && modifySharing.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(modifySharing); // http body (model) parameter
            }
            else
            {
                localVarPostBody = modifySharing; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("ModifyShareRecordings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingSharing>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingSharing) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingSharing)));
        }

        /// <summary>
        /// Move Recording Ownership This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>RecordingMovedComp</returns>
        public RecordingMovedComp MoveRecordingOwner (int? userId, int? originalOwner, int? newOwner)
        {
             ApiResponse<RecordingMovedComp> localVarResponse = MoveRecordingOwnerWithHttpInfo(userId, originalOwner, newOwner);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Move Recording Ownership This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>ApiResponse of RecordingMovedComp</returns>
        public ApiResponse< RecordingMovedComp > MoveRecordingOwnerWithHttpInfo (int? userId, int? originalOwner, int? newOwner)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->MoveRecordingOwner");
            // verify the required parameter 'originalOwner' is set
            if (originalOwner == null)
                throw new ApiException(400, "Missing required parameter 'originalOwner' when calling RecordingApi->MoveRecordingOwner");
            // verify the required parameter 'newOwner' is set
            if (newOwner == null)
                throw new ApiException(400, "Missing required parameter 'newOwner' when calling RecordingApi->MoveRecordingOwner");

            var localVarPath = "/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (originalOwner != null) localVarPathParams.Add("originalOwner", this.Configuration.ApiClient.ParameterToString(originalOwner)); // path parameter
            if (newOwner != null) localVarPathParams.Add("newOwner", this.Configuration.ApiClient.ParameterToString(newOwner)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("MoveRecordingOwner", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<RecordingMovedComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (RecordingMovedComp) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(RecordingMovedComp)));
        }

        /// <summary>
        /// Move Recording Ownership This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>Task of RecordingMovedComp</returns>
        public async System.Threading.Tasks.Task<RecordingMovedComp> MoveRecordingOwnerAsync (int? userId, int? originalOwner, int? newOwner)
        {
             ApiResponse<RecordingMovedComp> localVarResponse = await MoveRecordingOwnerAsyncWithHttpInfo(userId, originalOwner, newOwner);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Move Recording Ownership This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="originalOwner">The ID of the recording&#39;s current owner.</param>
        /// <param name="newOwner">The ID of the intended owner for the recording.</param>
        /// <returns>Task of ApiResponse (RecordingMovedComp)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<RecordingMovedComp>> MoveRecordingOwnerAsyncWithHttpInfo (int? userId, int? originalOwner, int? newOwner)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->MoveRecordingOwner");
            // verify the required parameter 'originalOwner' is set
            if (originalOwner == null)
                throw new ApiException(400, "Missing required parameter 'originalOwner' when calling RecordingApi->MoveRecordingOwner");
            // verify the required parameter 'newOwner' is set
            if (newOwner == null)
                throw new ApiException(400, "Missing required parameter 'newOwner' when calling RecordingApi->MoveRecordingOwner");

            var localVarPath = "/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (originalOwner != null) localVarPathParams.Add("originalOwner", this.Configuration.ApiClient.ParameterToString(originalOwner)); // path parameter
            if (newOwner != null) localVarPathParams.Add("newOwner", this.Configuration.ApiClient.ParameterToString(newOwner)); // path parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("MoveRecordingOwner", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<RecordingMovedComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (RecordingMovedComp) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(RecordingMovedComp)));
        }

        /// <summary>
        /// Start Recording This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns></returns>
        public void StartRecording (int? userId, int? meetingId, string action)
        {
             StartRecordingWithHttpInfo(userId, meetingId, action);
        }

        /// <summary>
        /// Start Recording This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> StartRecordingWithHttpInfo (int? userId, int? meetingId, string action)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->StartRecording");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->StartRecording");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling RecordingApi->StartRecording");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("StartRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Start Recording This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task StartRecordingAsync (int? userId, int? meetingId, string action)
        {
             await StartRecordingAsyncWithHttpInfo(userId, meetingId, action);

        }

        /// <summary>
        /// Start Recording This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;start\&quot; in order to start recording.</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> StartRecordingAsyncWithHttpInfo (int? userId, int? meetingId, string action)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->StartRecording");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->StartRecording");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling RecordingApi->StartRecording");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("StartRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Stop Recording This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns></returns>
        public void StopRecording (int? userId, int? meetingId, string action)
        {
             StopRecordingWithHttpInfo(userId, meetingId, action);
        }

        /// <summary>
        /// Stop Recording This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> StopRecordingWithHttpInfo (int? userId, int? meetingId, string action)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->StopRecording");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->StopRecording");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling RecordingApi->StopRecording");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("StopRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Stop Recording This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task StopRecordingAsync (int? userId, int? meetingId, string action)
        {
             await StopRecordingAsyncWithHttpInfo(userId, meetingId, action);

        }

        /// <summary>
        /// Stop Recording This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="action">Always set to \&quot;stop\&quot; in order to stop recording.</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> StopRecordingAsyncWithHttpInfo (int? userId, int? meetingId, string action)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling RecordingApi->StopRecording");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling RecordingApi->StopRecording");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling RecordingApi->StopRecording");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (userId != null) localVarPathParams.Add("user_id", this.Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (meetingId != null) localVarPathParams.Add("meeting_id", this.Configuration.ApiClient.ParameterToString(meetingId)); // path parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(this.Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "access_token", this.Configuration.GetApiKeyWithPrefix("access_token")));
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("StopRecording", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

    }
}
