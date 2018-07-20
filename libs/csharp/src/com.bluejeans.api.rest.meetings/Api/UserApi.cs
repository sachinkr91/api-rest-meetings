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
    public interface IUserApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Set User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>TagListComp</returns>
        TagListComp ChangeUserTags (int? userId, string action, string tag);

        /// <summary>
        /// Set User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>ApiResponse of TagListComp</returns>
        ApiResponse<TagListComp> ChangeUserTagsWithHttpInfo (int? userId, string action, string tag);
        /// <summary>
        /// Create User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint creates the user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Room</returns>
        Room CreateRoom (int? userId, Room room);

        /// <summary>
        /// Create User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint creates the user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>ApiResponse of Room</returns>
        ApiResponse<Room> CreateRoomWithHttpInfo (int? userId, Room room);
        /// <summary>
        /// Get Enterprise Profile
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the enterprise profile associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Enterprise</returns>
        Enterprise GetEnterpriseProfile (int? userId);

        /// <summary>
        /// Get Enterprise Profile
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the enterprise profile associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of Enterprise</returns>
        ApiResponse<Enterprise> GetEnterpriseProfileWithHttpInfo (int? userId);
        /// <summary>
        /// Get Granted Applications
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the granted applications associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>GrantedApplications</returns>
        GrantedApplications GetGrantedApplications (int? userId);

        /// <summary>
        /// Get Granted Applications
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the granted applications associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of GrantedApplications</returns>
        ApiResponse<GrantedApplications> GetGrantedApplicationsWithHttpInfo (int? userId);
        /// <summary>
        /// Get User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>List&lt;string&gt;</returns>
        List<string> GetGroups (int? userId);

        /// <summary>
        /// Get User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of List&lt;string&gt;</returns>
        ApiResponse<List<string>> GetGroupsWithHttpInfo (int? userId);
        /// <summary>
        /// Get Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>PersonalMeetingRoom</returns>
        PersonalMeetingRoom GetPersonalMeeting (int? userId);

        /// <summary>
        /// Get Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of PersonalMeetingRoom</returns>
        ApiResponse<PersonalMeetingRoom> GetPersonalMeetingWithHttpInfo (int? userId);
        /// <summary>
        /// Get User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Room</returns>
        Room GetRoom (int? userId);

        /// <summary>
        /// Get User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of Room</returns>
        ApiResponse<Room> GetRoomWithHttpInfo (int? userId);
        /// <summary>
        /// Get User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the basic account details for a given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>User</returns>
        User GetUser (int? userId);

        /// <summary>
        /// Get User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the basic account details for a given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of User</returns>
        ApiResponse<User> GetUserWithHttpInfo (int? userId);
        /// <summary>
        /// List User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves all tags associated with the specified user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>TagListComp</returns>
        TagListComp GetUserTags (int? userId);

        /// <summary>
        /// List User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves all tags associated with the specified user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>ApiResponse of TagListComp</returns>
        ApiResponse<TagListComp> GetUserTagsWithHttpInfo (int? userId);
        /// <summary>
        /// Remoke Granted Application
        /// </summary>
        /// <remarks>
        /// This endpoint revokes the granted application associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns></returns>
        void RevokeGrantedApplication (int? userId, string clientId);

        /// <summary>
        /// Remoke Granted Application
        /// </summary>
        /// <remarks>
        /// This endpoint revokes the granted application associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> RevokeGrantedApplicationWithHttpInfo (int? userId, string clientId);
        /// <summary>
        /// Set User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint sets the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns></returns>
        void SetGroups (int? userId, string enable = null, string disable = null);

        /// <summary>
        /// Set User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint sets the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> SetGroupsWithHttpInfo (int? userId, string enable = null, string disable = null);
        /// <summary>
        /// Update Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>PersonalMeetingRoom</returns>
        PersonalMeetingRoom UpdatePeresonalMeeting (int? userId, PersonalMeetingRoom personalMeeting);

        /// <summary>
        /// Update Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>ApiResponse of PersonalMeetingRoom</returns>
        ApiResponse<PersonalMeetingRoom> UpdatePeresonalMeetingWithHttpInfo (int? userId, PersonalMeetingRoom personalMeeting);
        /// <summary>
        /// Update User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Room</returns>
        Room UpdateRoom (int? userId, Room room);

        /// <summary>
        /// Update User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>ApiResponse of Room</returns>
        ApiResponse<Room> UpdateRoomWithHttpInfo (int? userId, Room room);
        /// <summary>
        /// Update User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s basic account details.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>User</returns>
        User UpdateUser (int? userId, User user);

        /// <summary>
        /// Update User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s basic account details.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>ApiResponse of User</returns>
        ApiResponse<User> UpdateUserWithHttpInfo (int? userId, User user);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Set User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>Task of TagListComp</returns>
        System.Threading.Tasks.Task<TagListComp> ChangeUserTagsAsync (int? userId, string action, string tag);

        /// <summary>
        /// Set User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>Task of ApiResponse (TagListComp)</returns>
        System.Threading.Tasks.Task<ApiResponse<TagListComp>> ChangeUserTagsAsyncWithHttpInfo (int? userId, string action, string tag);
        /// <summary>
        /// Create User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint creates the user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Task of Room</returns>
        System.Threading.Tasks.Task<Room> CreateRoomAsync (int? userId, Room room);

        /// <summary>
        /// Create User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint creates the user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        System.Threading.Tasks.Task<ApiResponse<Room>> CreateRoomAsyncWithHttpInfo (int? userId, Room room);
        /// <summary>
        /// Get Enterprise Profile
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the enterprise profile associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of Enterprise</returns>
        System.Threading.Tasks.Task<Enterprise> GetEnterpriseProfileAsync (int? userId);

        /// <summary>
        /// Get Enterprise Profile
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the enterprise profile associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (Enterprise)</returns>
        System.Threading.Tasks.Task<ApiResponse<Enterprise>> GetEnterpriseProfileAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Get Granted Applications
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the granted applications associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of GrantedApplications</returns>
        System.Threading.Tasks.Task<GrantedApplications> GetGrantedApplicationsAsync (int? userId);

        /// <summary>
        /// Get Granted Applications
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the granted applications associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (GrantedApplications)</returns>
        System.Threading.Tasks.Task<ApiResponse<GrantedApplications>> GetGrantedApplicationsAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Get User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of List&lt;string&gt;</returns>
        System.Threading.Tasks.Task<List<string>> GetGroupsAsync (int? userId);

        /// <summary>
        /// Get User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (List&lt;string&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<string>>> GetGroupsAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Get Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of PersonalMeetingRoom</returns>
        System.Threading.Tasks.Task<PersonalMeetingRoom> GetPersonalMeetingAsync (int? userId);

        /// <summary>
        /// Get Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (PersonalMeetingRoom)</returns>
        System.Threading.Tasks.Task<ApiResponse<PersonalMeetingRoom>> GetPersonalMeetingAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Get User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of Room</returns>
        System.Threading.Tasks.Task<Room> GetRoomAsync (int? userId);

        /// <summary>
        /// Get User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        System.Threading.Tasks.Task<ApiResponse<Room>> GetRoomAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Get User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the basic account details for a given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of User</returns>
        System.Threading.Tasks.Task<User> GetUserAsync (int? userId);

        /// <summary>
        /// Get User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the basic account details for a given user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (User)</returns>
        System.Threading.Tasks.Task<ApiResponse<User>> GetUserAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// List User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves all tags associated with the specified user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of TagListComp</returns>
        System.Threading.Tasks.Task<TagListComp> GetUserTagsAsync (int? userId);

        /// <summary>
        /// List User Tags
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves all tags associated with the specified user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of ApiResponse (TagListComp)</returns>
        System.Threading.Tasks.Task<ApiResponse<TagListComp>> GetUserTagsAsyncWithHttpInfo (int? userId);
        /// <summary>
        /// Remoke Granted Application
        /// </summary>
        /// <remarks>
        /// This endpoint revokes the granted application associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task RevokeGrantedApplicationAsync (int? userId, string clientId);

        /// <summary>
        /// Remoke Granted Application
        /// </summary>
        /// <remarks>
        /// This endpoint revokes the granted application associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> RevokeGrantedApplicationAsyncWithHttpInfo (int? userId, string clientId);
        /// <summary>
        /// Set User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint sets the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task SetGroupsAsync (int? userId, string enable = null, string disable = null);

        /// <summary>
        /// Set User Feature Groups
        /// </summary>
        /// <remarks>
        /// This endpoint sets the feature groups associated with the user.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> SetGroupsAsyncWithHttpInfo (int? userId, string enable = null, string disable = null);
        /// <summary>
        /// Update Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>Task of PersonalMeetingRoom</returns>
        System.Threading.Tasks.Task<PersonalMeetingRoom> UpdatePeresonalMeetingAsync (int? userId, PersonalMeetingRoom personalMeeting);

        /// <summary>
        /// Update Personal Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s personal meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (PersonalMeetingRoom)</returns>
        System.Threading.Tasks.Task<ApiResponse<PersonalMeetingRoom>> UpdatePeresonalMeetingAsyncWithHttpInfo (int? userId, PersonalMeetingRoom personalMeeting);
        /// <summary>
        /// Update User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of Room</returns>
        System.Threading.Tasks.Task<Room> UpdateRoomAsync (int? userId, Room room);

        /// <summary>
        /// Update User’s Default Meeting Settings
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s default meeting settings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        System.Threading.Tasks.Task<ApiResponse<Room>> UpdateRoomAsyncWithHttpInfo (int? userId, Room room);
        /// <summary>
        /// Update User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s basic account details.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>Task of User</returns>
        System.Threading.Tasks.Task<User> UpdateUserAsync (int? userId, User user);

        /// <summary>
        /// Update User Account Details
        /// </summary>
        /// <remarks>
        /// This endpoint allows updating a user’s basic account details.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>Task of ApiResponse (User)</returns>
        System.Threading.Tasks.Task<ApiResponse<User>> UpdateUserAsyncWithHttpInfo (int? userId, User user);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class UserApi : IUserApi
    {
        private com.bluejeans.api.rest.meetings.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="UserApi"/> class.
        /// </summary>
        /// <returns></returns>
        public UserApi(String basePath)
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
        /// Initializes a new instance of the <see cref="UserApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public UserApi(Configuration configuration = null)
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
        /// Set User Tags This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>TagListComp</returns>
        public TagListComp ChangeUserTags (int? userId, string action, string tag)
        {
             ApiResponse<TagListComp> localVarResponse = ChangeUserTagsWithHttpInfo(userId, action, tag);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Set User Tags This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>ApiResponse of TagListComp</returns>
        public ApiResponse< TagListComp > ChangeUserTagsWithHttpInfo (int? userId, string action, string tag)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->ChangeUserTags");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling UserApi->ChangeUserTags");
            // verify the required parameter 'tag' is set
            if (tag == null)
                throw new ApiException(400, "Missing required parameter 'tag' when calling UserApi->ChangeUserTags");

            var localVarPath = "/v1/user/{userId}/tags";
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

            if (userId != null) localVarPathParams.Add("userId", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (action != null) localVarQueryParams.Add("action", Configuration.ApiClient.ParameterToString(action)); // query parameter
            if (tag != null) localVarQueryParams.Add("tag", Configuration.ApiClient.ParameterToString(tag)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("ChangeUserTags", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<TagListComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (TagListComp) Configuration.ApiClient.Deserialize(localVarResponse, typeof(TagListComp)));
        }

        /// <summary>
        /// Set User Tags This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>Task of TagListComp</returns>
        public async System.Threading.Tasks.Task<TagListComp> ChangeUserTagsAsync (int? userId, string action, string tag)
        {
             ApiResponse<TagListComp> localVarResponse = await ChangeUserTagsAsyncWithHttpInfo(userId, action, tag);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Set User Tags This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <param name="action">Type of operation to be done</param>
        /// <param name="tag">The name of tag</param>
        /// <returns>Task of ApiResponse (TagListComp)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<TagListComp>> ChangeUserTagsAsyncWithHttpInfo (int? userId, string action, string tag)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->ChangeUserTags");
            // verify the required parameter 'action' is set
            if (action == null)
                throw new ApiException(400, "Missing required parameter 'action' when calling UserApi->ChangeUserTags");
            // verify the required parameter 'tag' is set
            if (tag == null)
                throw new ApiException(400, "Missing required parameter 'tag' when calling UserApi->ChangeUserTags");

            var localVarPath = "/v1/user/{userId}/tags";
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

            if (userId != null) localVarPathParams.Add("userId", Configuration.ApiClient.ParameterToString(userId)); // path parameter
            if (action != null) localVarQueryParams.Add("action", Configuration.ApiClient.ParameterToString(action)); // query parameter
            if (tag != null) localVarQueryParams.Add("tag", Configuration.ApiClient.ParameterToString(tag)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("ChangeUserTags", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<TagListComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (TagListComp) Configuration.ApiClient.Deserialize(localVarResponse, typeof(TagListComp)));
        }

        /// <summary>
        /// Create User’s Default Meeting Settings This endpoint creates the user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Room</returns>
        public Room CreateRoom (int? userId, Room room)
        {
             ApiResponse<Room> localVarResponse = CreateRoomWithHttpInfo(userId, room);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Create User’s Default Meeting Settings This endpoint creates the user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>ApiResponse of Room</returns>
        public ApiResponse< Room > CreateRoomWithHttpInfo (int? userId, Room room)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->CreateRoom");
            // verify the required parameter 'room' is set
            if (room == null)
                throw new ApiException(400, "Missing required parameter 'room' when calling UserApi->CreateRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
            if (room != null && room.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(room); // http body (model) parameter
            }
            else
            {
                localVarPostBody = room; // byte array
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
                Exception exception = ExceptionFactory("CreateRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Create User’s Default Meeting Settings This endpoint creates the user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Task of Room</returns>
        public async System.Threading.Tasks.Task<Room> CreateRoomAsync (int? userId, Room room)
        {
             ApiResponse<Room> localVarResponse = await CreateRoomAsyncWithHttpInfo(userId, room);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Create User’s Default Meeting Settings This endpoint creates the user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Room>> CreateRoomAsyncWithHttpInfo (int? userId, Room room)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->CreateRoom");
            // verify the required parameter 'room' is set
            if (room == null)
                throw new ApiException(400, "Missing required parameter 'room' when calling UserApi->CreateRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
            if (room != null && room.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(room); // http body (model) parameter
            }
            else
            {
                localVarPostBody = room; // byte array
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
                Exception exception = ExceptionFactory("CreateRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Get Enterprise Profile This endpoint retrieves the enterprise profile associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Enterprise</returns>
        public Enterprise GetEnterpriseProfile (int? userId)
        {
             ApiResponse<Enterprise> localVarResponse = GetEnterpriseProfileWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Enterprise Profile This endpoint retrieves the enterprise profile associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of Enterprise</returns>
        public ApiResponse< Enterprise > GetEnterpriseProfileWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetEnterpriseProfile");

            var localVarPath = "/v1/user/{user_id}/enterprise_profile";
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
                Exception exception = ExceptionFactory("GetEnterpriseProfile", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Enterprise>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Enterprise) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Enterprise)));
        }

        /// <summary>
        /// Get Enterprise Profile This endpoint retrieves the enterprise profile associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of Enterprise</returns>
        public async System.Threading.Tasks.Task<Enterprise> GetEnterpriseProfileAsync (int? userId)
        {
             ApiResponse<Enterprise> localVarResponse = await GetEnterpriseProfileAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Enterprise Profile This endpoint retrieves the enterprise profile associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (Enterprise)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Enterprise>> GetEnterpriseProfileAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetEnterpriseProfile");

            var localVarPath = "/v1/user/{user_id}/enterprise_profile";
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
                Exception exception = ExceptionFactory("GetEnterpriseProfile", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Enterprise>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Enterprise) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Enterprise)));
        }

        /// <summary>
        /// Get Granted Applications This endpoint retrieves the granted applications associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>GrantedApplications</returns>
        public GrantedApplications GetGrantedApplications (int? userId)
        {
             ApiResponse<GrantedApplications> localVarResponse = GetGrantedApplicationsWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Granted Applications This endpoint retrieves the granted applications associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of GrantedApplications</returns>
        public ApiResponse< GrantedApplications > GetGrantedApplicationsWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetGrantedApplications");

            var localVarPath = "/v1/user/{user_id}/granted_applications";
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
                Exception exception = ExceptionFactory("GetGrantedApplications", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantedApplications>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantedApplications) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantedApplications)));
        }

        /// <summary>
        /// Get Granted Applications This endpoint retrieves the granted applications associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of GrantedApplications</returns>
        public async System.Threading.Tasks.Task<GrantedApplications> GetGrantedApplicationsAsync (int? userId)
        {
             ApiResponse<GrantedApplications> localVarResponse = await GetGrantedApplicationsAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Granted Applications This endpoint retrieves the granted applications associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (GrantedApplications)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<GrantedApplications>> GetGrantedApplicationsAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetGrantedApplications");

            var localVarPath = "/v1/user/{user_id}/granted_applications";
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
                Exception exception = ExceptionFactory("GetGrantedApplications", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<GrantedApplications>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (GrantedApplications) Configuration.ApiClient.Deserialize(localVarResponse, typeof(GrantedApplications)));
        }

        /// <summary>
        /// Get User Feature Groups This endpoint retrieves the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>List&lt;string&gt;</returns>
        public List<string> GetGroups (int? userId)
        {
             ApiResponse<List<string>> localVarResponse = GetGroupsWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get User Feature Groups This endpoint retrieves the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of List&lt;string&gt;</returns>
        public ApiResponse< List<string> > GetGroupsWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetGroups");

            var localVarPath = "/v1/user/{user_id}/groups";
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
                Exception exception = ExceptionFactory("GetGroups", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<string>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<string>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<string>)));
        }

        /// <summary>
        /// Get User Feature Groups This endpoint retrieves the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of List&lt;string&gt;</returns>
        public async System.Threading.Tasks.Task<List<string>> GetGroupsAsync (int? userId)
        {
             ApiResponse<List<string>> localVarResponse = await GetGroupsAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get User Feature Groups This endpoint retrieves the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (List&lt;string&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<string>>> GetGroupsAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetGroups");

            var localVarPath = "/v1/user/{user_id}/groups";
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
                Exception exception = ExceptionFactory("GetGroups", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<string>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<string>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<string>)));
        }

        /// <summary>
        /// Get Personal Meeting This endpoint gets the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>PersonalMeetingRoom</returns>
        public PersonalMeetingRoom GetPersonalMeeting (int? userId)
        {
             ApiResponse<PersonalMeetingRoom> localVarResponse = GetPersonalMeetingWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Personal Meeting This endpoint gets the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of PersonalMeetingRoom</returns>
        public ApiResponse< PersonalMeetingRoom > GetPersonalMeetingWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetPersonalMeeting");

            var localVarPath = "/v1/user/{user_id}/personal_meeting";
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
                Exception exception = ExceptionFactory("GetPersonalMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PersonalMeetingRoom>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PersonalMeetingRoom) Configuration.ApiClient.Deserialize(localVarResponse, typeof(PersonalMeetingRoom)));
        }

        /// <summary>
        /// Get Personal Meeting This endpoint gets the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of PersonalMeetingRoom</returns>
        public async System.Threading.Tasks.Task<PersonalMeetingRoom> GetPersonalMeetingAsync (int? userId)
        {
             ApiResponse<PersonalMeetingRoom> localVarResponse = await GetPersonalMeetingAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Personal Meeting This endpoint gets the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (PersonalMeetingRoom)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<PersonalMeetingRoom>> GetPersonalMeetingAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetPersonalMeeting");

            var localVarPath = "/v1/user/{user_id}/personal_meeting";
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
                Exception exception = ExceptionFactory("GetPersonalMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PersonalMeetingRoom>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PersonalMeetingRoom) Configuration.ApiClient.Deserialize(localVarResponse, typeof(PersonalMeetingRoom)));
        }

        /// <summary>
        /// Get User’s Default Meeting Settings This endpoint gets a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Room</returns>
        public Room GetRoom (int? userId)
        {
             ApiResponse<Room> localVarResponse = GetRoomWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get User’s Default Meeting Settings This endpoint gets a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of Room</returns>
        public ApiResponse< Room > GetRoomWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
                Exception exception = ExceptionFactory("GetRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Get User’s Default Meeting Settings This endpoint gets a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of Room</returns>
        public async System.Threading.Tasks.Task<Room> GetRoomAsync (int? userId)
        {
             ApiResponse<Room> localVarResponse = await GetRoomAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get User’s Default Meeting Settings This endpoint gets a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Room>> GetRoomAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
                Exception exception = ExceptionFactory("GetRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Get User Account Details This endpoint retrieves the basic account details for a given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>User</returns>
        public User GetUser (int? userId)
        {
             ApiResponse<User> localVarResponse = GetUserWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get User Account Details This endpoint retrieves the basic account details for a given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>ApiResponse of User</returns>
        public ApiResponse< User > GetUserWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetUser");

            var localVarPath = "/v1/user/{user_id}";
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
                Exception exception = ExceptionFactory("GetUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<User>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (User) Configuration.ApiClient.Deserialize(localVarResponse, typeof(User)));
        }

        /// <summary>
        /// Get User Account Details This endpoint retrieves the basic account details for a given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of User</returns>
        public async System.Threading.Tasks.Task<User> GetUserAsync (int? userId)
        {
             ApiResponse<User> localVarResponse = await GetUserAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get User Account Details This endpoint retrieves the basic account details for a given user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <returns>Task of ApiResponse (User)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<User>> GetUserAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetUser");

            var localVarPath = "/v1/user/{user_id}";
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
                Exception exception = ExceptionFactory("GetUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<User>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (User) Configuration.ApiClient.Deserialize(localVarResponse, typeof(User)));
        }

        /// <summary>
        /// List User Tags This endpoint retrieves all tags associated with the specified user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>TagListComp</returns>
        public TagListComp GetUserTags (int? userId)
        {
             ApiResponse<TagListComp> localVarResponse = GetUserTagsWithHttpInfo(userId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List User Tags This endpoint retrieves all tags associated with the specified user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>ApiResponse of TagListComp</returns>
        public ApiResponse< TagListComp > GetUserTagsWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetUserTags");

            var localVarPath = "/v1/user/{userId}/tags";
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

            if (userId != null) localVarPathParams.Add("userId", Configuration.ApiClient.ParameterToString(userId)); // path parameter

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
                Exception exception = ExceptionFactory("GetUserTags", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<TagListComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (TagListComp) Configuration.ApiClient.Deserialize(localVarResponse, typeof(TagListComp)));
        }

        /// <summary>
        /// List User Tags This endpoint retrieves all tags associated with the specified user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of TagListComp</returns>
        public async System.Threading.Tasks.Task<TagListComp> GetUserTagsAsync (int? userId)
        {
             ApiResponse<TagListComp> localVarResponse = await GetUserTagsAsyncWithHttpInfo(userId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List User Tags This endpoint retrieves all tags associated with the specified user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.</param>
        /// <returns>Task of ApiResponse (TagListComp)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<TagListComp>> GetUserTagsAsyncWithHttpInfo (int? userId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->GetUserTags");

            var localVarPath = "/v1/user/{userId}/tags";
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

            if (userId != null) localVarPathParams.Add("userId", Configuration.ApiClient.ParameterToString(userId)); // path parameter

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
                Exception exception = ExceptionFactory("GetUserTags", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<TagListComp>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (TagListComp) Configuration.ApiClient.Deserialize(localVarResponse, typeof(TagListComp)));
        }

        /// <summary>
        /// Remoke Granted Application This endpoint revokes the granted application associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns></returns>
        public void RevokeGrantedApplication (int? userId, string clientId)
        {
             RevokeGrantedApplicationWithHttpInfo(userId, clientId);
        }

        /// <summary>
        /// Remoke Granted Application This endpoint revokes the granted application associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> RevokeGrantedApplicationWithHttpInfo (int? userId, string clientId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->RevokeGrantedApplication");
            // verify the required parameter 'clientId' is set
            if (clientId == null)
                throw new ApiException(400, "Missing required parameter 'clientId' when calling UserApi->RevokeGrantedApplication");

            var localVarPath = "/v1/user/{user_id}/granted_applications/{client_id}";
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
            if (clientId != null) localVarPathParams.Add("client_id", Configuration.ApiClient.ParameterToString(clientId)); // path parameter

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
                Exception exception = ExceptionFactory("RevokeGrantedApplication", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Remoke Granted Application This endpoint revokes the granted application associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task RevokeGrantedApplicationAsync (int? userId, string clientId)
        {
             await RevokeGrantedApplicationAsyncWithHttpInfo(userId, clientId);

        }

        /// <summary>
        /// Remoke Granted Application This endpoint revokes the granted application associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="clientId">The ID of the granted application.</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> RevokeGrantedApplicationAsyncWithHttpInfo (int? userId, string clientId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->RevokeGrantedApplication");
            // verify the required parameter 'clientId' is set
            if (clientId == null)
                throw new ApiException(400, "Missing required parameter 'clientId' when calling UserApi->RevokeGrantedApplication");

            var localVarPath = "/v1/user/{user_id}/granted_applications/{client_id}";
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
            if (clientId != null) localVarPathParams.Add("client_id", Configuration.ApiClient.ParameterToString(clientId)); // path parameter

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
                Exception exception = ExceptionFactory("RevokeGrantedApplication", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Set User Feature Groups This endpoint sets the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns></returns>
        public void SetGroups (int? userId, string enable = null, string disable = null)
        {
             SetGroupsWithHttpInfo(userId, enable, disable);
        }

        /// <summary>
        /// Set User Feature Groups This endpoint sets the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> SetGroupsWithHttpInfo (int? userId, string enable = null, string disable = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->SetGroups");

            var localVarPath = "/v1/user/{user_id}/groups";
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
            if (enable != null) localVarQueryParams.Add("enable", Configuration.ApiClient.ParameterToString(enable)); // query parameter
            if (disable != null) localVarQueryParams.Add("disable", Configuration.ApiClient.ParameterToString(disable)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("SetGroups", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Set User Feature Groups This endpoint sets the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task SetGroupsAsync (int? userId, string enable = null, string disable = null)
        {
             await SetGroupsAsyncWithHttpInfo(userId, enable, disable);

        }

        /// <summary>
        /// Set User Feature Groups This endpoint sets the feature groups associated with the user.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="enable">The feature group you want to enable. (optional)</param>
        /// <param name="disable">The feature group you want to disable. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> SetGroupsAsyncWithHttpInfo (int? userId, string enable = null, string disable = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->SetGroups");

            var localVarPath = "/v1/user/{user_id}/groups";
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
            if (enable != null) localVarQueryParams.Add("enable", Configuration.ApiClient.ParameterToString(enable)); // query parameter
            if (disable != null) localVarQueryParams.Add("disable", Configuration.ApiClient.ParameterToString(disable)); // query parameter

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("SetGroups", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Update Personal Meeting This endpoint changes the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>PersonalMeetingRoom</returns>
        public PersonalMeetingRoom UpdatePeresonalMeeting (int? userId, PersonalMeetingRoom personalMeeting)
        {
             ApiResponse<PersonalMeetingRoom> localVarResponse = UpdatePeresonalMeetingWithHttpInfo(userId, personalMeeting);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update Personal Meeting This endpoint changes the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>ApiResponse of PersonalMeetingRoom</returns>
        public ApiResponse< PersonalMeetingRoom > UpdatePeresonalMeetingWithHttpInfo (int? userId, PersonalMeetingRoom personalMeeting)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdatePeresonalMeeting");
            // verify the required parameter 'personalMeeting' is set
            if (personalMeeting == null)
                throw new ApiException(400, "Missing required parameter 'personalMeeting' when calling UserApi->UpdatePeresonalMeeting");

            var localVarPath = "/v1/user/{user_id}/personal_meeting";
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
            if (personalMeeting != null && personalMeeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(personalMeeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = personalMeeting; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdatePeresonalMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PersonalMeetingRoom>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PersonalMeetingRoom) Configuration.ApiClient.Deserialize(localVarResponse, typeof(PersonalMeetingRoom)));
        }

        /// <summary>
        /// Update Personal Meeting This endpoint changes the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>Task of PersonalMeetingRoom</returns>
        public async System.Threading.Tasks.Task<PersonalMeetingRoom> UpdatePeresonalMeetingAsync (int? userId, PersonalMeetingRoom personalMeeting)
        {
             ApiResponse<PersonalMeetingRoom> localVarResponse = await UpdatePeresonalMeetingAsyncWithHttpInfo(userId, personalMeeting);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update Personal Meeting This endpoint changes the settings for a user&#39;s personal meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="personalMeeting">The user&#39;s personal meeting room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (PersonalMeetingRoom)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<PersonalMeetingRoom>> UpdatePeresonalMeetingAsyncWithHttpInfo (int? userId, PersonalMeetingRoom personalMeeting)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdatePeresonalMeeting");
            // verify the required parameter 'personalMeeting' is set
            if (personalMeeting == null)
                throw new ApiException(400, "Missing required parameter 'personalMeeting' when calling UserApi->UpdatePeresonalMeeting");

            var localVarPath = "/v1/user/{user_id}/personal_meeting";
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
            if (personalMeeting != null && personalMeeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(personalMeeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = personalMeeting; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdatePeresonalMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PersonalMeetingRoom>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PersonalMeetingRoom) Configuration.ApiClient.Deserialize(localVarResponse, typeof(PersonalMeetingRoom)));
        }

        /// <summary>
        /// Update User’s Default Meeting Settings This endpoint allows updating a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Room</returns>
        public Room UpdateRoom (int? userId, Room room)
        {
             ApiResponse<Room> localVarResponse = UpdateRoomWithHttpInfo(userId, room);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update User’s Default Meeting Settings This endpoint allows updating a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>ApiResponse of Room</returns>
        public ApiResponse< Room > UpdateRoomWithHttpInfo (int? userId, Room room)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdateRoom");
            // verify the required parameter 'room' is set
            if (room == null)
                throw new ApiException(400, "Missing required parameter 'room' when calling UserApi->UpdateRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
            if (room != null && room.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(room); // http body (model) parameter
            }
            else
            {
                localVarPostBody = room; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdateRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Update User’s Default Meeting Settings This endpoint allows updating a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of Room</returns>
        public async System.Threading.Tasks.Task<Room> UpdateRoomAsync (int? userId, Room room)
        {
             ApiResponse<Room> localVarResponse = await UpdateRoomAsyncWithHttpInfo(userId, room);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update User’s Default Meeting Settings This endpoint allows updating a user’s default meeting settings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="room">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (Room)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Room>> UpdateRoomAsyncWithHttpInfo (int? userId, Room room)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdateRoom");
            // verify the required parameter 'room' is set
            if (room == null)
                throw new ApiException(400, "Missing required parameter 'room' when calling UserApi->UpdateRoom");

            var localVarPath = "/v1/user/{user_id}/room";
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
            if (room != null && room.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(room); // http body (model) parameter
            }
            else
            {
                localVarPostBody = room; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdateRoom", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Room>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Room) Configuration.ApiClient.Deserialize(localVarResponse, typeof(Room)));
        }

        /// <summary>
        /// Update User Account Details This endpoint allows updating a user’s basic account details.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>User</returns>
        public User UpdateUser (int? userId, User user)
        {
             ApiResponse<User> localVarResponse = UpdateUserWithHttpInfo(userId, user);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update User Account Details This endpoint allows updating a user’s basic account details.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>ApiResponse of User</returns>
        public ApiResponse< User > UpdateUserWithHttpInfo (int? userId, User user)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdateUser");
            // verify the required parameter 'user' is set
            if (user == null)
                throw new ApiException(400, "Missing required parameter 'user' when calling UserApi->UpdateUser");

            var localVarPath = "/v1/user/{user_id}";
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
            if (user != null && user.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(user); // http body (model) parameter
            }
            else
            {
                localVarPostBody = user; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdateUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<User>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (User) Configuration.ApiClient.Deserialize(localVarResponse, typeof(User)));
        }

        /// <summary>
        /// Update User Account Details This endpoint allows updating a user’s basic account details.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>Task of User</returns>
        public async System.Threading.Tasks.Task<User> UpdateUserAsync (int? userId, User user)
        {
             ApiResponse<User> localVarResponse = await UpdateUserAsyncWithHttpInfo(userId, user);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update User Account Details This endpoint allows updating a user’s basic account details.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="user">The user details that you wish to update.</param>
        /// <returns>Task of ApiResponse (User)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<User>> UpdateUserAsyncWithHttpInfo (int? userId, User user)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling UserApi->UpdateUser");
            // verify the required parameter 'user' is set
            if (user == null)
                throw new ApiException(400, "Missing required parameter 'user' when calling UserApi->UpdateUser");

            var localVarPath = "/v1/user/{user_id}";
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
            if (user != null && user.GetType() != typeof(byte[]))
            {
                localVarPostBody = Configuration.ApiClient.Serialize(user); // http body (model) parameter
            }
            else
            {
                localVarPostBody = user; // byte array
            }

            // authentication (access_token) required
            if (!String.IsNullOrEmpty(Configuration.GetApiKeyWithPrefix("access_token")))
            {
                localVarQueryParams["access_token"] = Configuration.GetApiKeyWithPrefix("access_token");
            }

            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.PUT, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("UpdateUser", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<User>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (User) Configuration.ApiClient.Deserialize(localVarResponse, typeof(User)));
        }

    }
}
