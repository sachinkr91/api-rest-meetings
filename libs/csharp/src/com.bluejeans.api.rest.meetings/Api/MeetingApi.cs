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
    public interface IMeetingApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Cancel Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint deletes a scheuled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns></returns>
        void CancelMeeting (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null);

        /// <summary>
        /// Cancel Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint deletes a scheuled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> CancelMeetingWithHttpInfo (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null);
        /// <summary>
        /// Create Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint will create a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Meeting</returns>
        Meeting CreateMeeting (int? userId, ScheduleMeetingMinComp meeting, bool? email = null);

        /// <summary>
        /// Create Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint will create a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> CreateMeetingWithHttpInfo (int? userId, ScheduleMeetingMinComp meeting, bool? email = null);
        /// <summary>
        /// Dialout via PSTN
        /// </summary>
        /// <remarks>
        /// Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>DialoutPstn</returns>
        DialoutPstn DialoutPstn (int? userId, int? numericMeetingId, PayloadDialout payloadDialout);

        /// <summary>
        /// Dialout via PSTN
        /// </summary>
        /// <remarks>
        /// Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>ApiResponse of DialoutPstn</returns>
        ApiResponse<DialoutPstn> DialoutPstnWithHttpInfo (int? userId, int? numericMeetingId, PayloadDialout payloadDialout);
        /// <summary>
        /// Generate Pairing Code (PSTN)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>PairingCodePSTN</returns>
        PairingCodePSTN GeneratePairingCodePstn (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null);

        /// <summary>
        /// Generate Pairing Code (PSTN)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>ApiResponse of PairingCodePSTN</returns>
        ApiResponse<PairingCodePSTN> GeneratePairingCodePstnWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null);
        /// <summary>
        /// Generate Pairing Code (SIP)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>PairingCodeSIP</returns>
        PairingCodeSIP GeneratePairingCodeSip (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP);

        /// <summary>
        /// Generate Pairing Code (SIP)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>ApiResponse of PairingCodeSIP</returns>
        ApiResponse<PairingCodeSIP> GeneratePairingCodeSipWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP);
        /// <summary>
        /// Generate Pairing Code (WebRTC)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>PairingCodeWebRTC</returns>
        PairingCodeWebRTC GeneratePairingCodeWebRtc (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null);

        /// <summary>
        /// Generate Pairing Code (WebRTC)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>ApiResponse of PairingCodeWebRTC</returns>
        ApiResponse<PairingCodeWebRTC> GeneratePairingCodeWebRtcWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null);
        /// <summary>
        /// Get Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Layout</returns>
        Layout GetEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid);

        /// <summary>
        /// Get Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>ApiResponse of Layout</returns>
        ApiResponse<Layout> GetEndpointLayoutWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid);
        /// <summary>
        /// Get Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Meeting</returns>
        Meeting GetMeeting (int? userId, int? meetingId);

        /// <summary>
        /// Get Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> GetMeetingWithHttpInfo (int? userId, int? meetingId);
        /// <summary>
        /// Get Meeting Email
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the email object for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>MeetingEmails</returns>
        MeetingEmails GetMeetingEmails (int? userId, int? meetingId, string type = null, string role = null, string action = null);

        /// <summary>
        /// Get Meeting Email
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the email object for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>ApiResponse of MeetingEmails</returns>
        ApiResponse<MeetingEmails> GetMeetingEmailsWithHttpInfo (int? userId, int? meetingId, string type = null, string role = null, string action = null);
        /// <summary>
        /// Get Endpoint Information
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Endpoint</returns>
        Endpoint GetMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid);

        /// <summary>
        /// Get Endpoint Information
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>ApiResponse of Endpoint</returns>
        ApiResponse<Endpoint> GetMeetingEndpointWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid);
        /// <summary>
        /// List Meeting Endpoints
        /// </summary>
        /// <remarks>
        /// This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Endpoints</returns>
        Endpoints GetMeetingEndpoints (int? userId, int? numericMeetingId);

        /// <summary>
        /// List Meeting Endpoints
        /// </summary>
        /// <remarks>
        /// This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>ApiResponse of Endpoints</returns>
        ApiResponse<Endpoints> GetMeetingEndpointsWithHttpInfo (int? userId, int? numericMeetingId);
        /// <summary>
        /// Get Meeting Join Info
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the join information for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Numbers</returns>
        Numbers GetMeetingNumbers (int? userId, int? meetingId);

        /// <summary>
        /// Get Meeting Join Info
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the join information for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>ApiResponse of Numbers</returns>
        ApiResponse<Numbers> GetMeetingNumbersWithHttpInfo (int? userId, int? meetingId);
        /// <summary>
        /// Get Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>MeetingState</returns>
        MeetingState GetMeetingState (int? userId, int? numericMeetingId);

        /// <summary>
        /// Get Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>ApiResponse of MeetingState</returns>
        ApiResponse<MeetingState> GetMeetingStateWithHttpInfo (int? userId, int? numericMeetingId);
        /// <summary>
        /// List Meetings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>List&lt;Meeting&gt;</returns>
        List<Meeting> ListMeetings (int? userId, string numericMeetingId = null);

        /// <summary>
        /// List Meetings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>ApiResponse of List&lt;Meeting&gt;</returns>
        ApiResponse<List<Meeting>> ListMeetingsWithHttpInfo (int? userId, string numericMeetingId = null);
        /// <summary>
        /// Send Email Invite
        /// </summary>
        /// <remarks>
        /// This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns></returns>
        void SendMeetingInvite (int? userId, int? numericMeetingId, PayloadInvite payloadInvite);

        /// <summary>
        /// Send Email Invite
        /// </summary>
        /// <remarks>
        /// This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> SendMeetingInviteWithHttpInfo (int? userId, int? numericMeetingId, PayloadInvite payloadInvite);
        /// <summary>
        /// Update Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Layout</returns>
        Layout UpdateEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null);

        /// <summary>
        /// Update Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>ApiResponse of Layout</returns>
        ApiResponse<Layout> UpdateEndpointLayoutWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null);
        /// <summary>
        /// Update Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Meeting</returns>
        Meeting UpdateMeeting (int? userId, int? meetingId, Meeting meeting);

        /// <summary>
        /// Update Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> UpdateMeetingWithHttpInfo (int? userId, int? meetingId, Meeting meeting);
        /// <summary>
        /// Update Endpoint Video/Audio State
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Endpoint</returns>
        Endpoint UpdateMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null);

        /// <summary>
        /// Update Endpoint Video/Audio State
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>ApiResponse of Endpoint</returns>
        ApiResponse<Endpoint> UpdateMeetingEndpointWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null);
        /// <summary>
        /// Update Meeting Endpoints State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns></returns>
        void UpdateMeetingEndpoints (int? userId, int? numericMeetingId, bool? mute = null, string media = null);

        /// <summary>
        /// Update Meeting Endpoints State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> UpdateMeetingEndpointsWithHttpInfo (int? userId, int? numericMeetingId, bool? mute = null, string media = null);
        /// <summary>
        /// Update Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Meeting</returns>
        Meeting UpdateMeetingState (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null);

        /// <summary>
        /// Update Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>ApiResponse of Meeting</returns>
        ApiResponse<Meeting> UpdateMeetingStateWithHttpInfo (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Cancel Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint deletes a scheuled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task CancelMeetingAsync (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null);

        /// <summary>
        /// Cancel Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint deletes a scheuled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> CancelMeetingAsyncWithHttpInfo (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null);
        /// <summary>
        /// Create Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint will create a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> CreateMeetingAsync (int? userId, ScheduleMeetingMinComp meeting, bool? email = null);

        /// <summary>
        /// Create Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint will create a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> CreateMeetingAsyncWithHttpInfo (int? userId, ScheduleMeetingMinComp meeting, bool? email = null);
        /// <summary>
        /// Dialout via PSTN
        /// </summary>
        /// <remarks>
        /// Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>Task of DialoutPstn</returns>
        System.Threading.Tasks.Task<DialoutPstn> DialoutPstnAsync (int? userId, int? numericMeetingId, PayloadDialout payloadDialout);

        /// <summary>
        /// Dialout via PSTN
        /// </summary>
        /// <remarks>
        /// Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>Task of ApiResponse (DialoutPstn)</returns>
        System.Threading.Tasks.Task<ApiResponse<DialoutPstn>> DialoutPstnAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadDialout payloadDialout);
        /// <summary>
        /// Generate Pairing Code (PSTN)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of PairingCodePSTN</returns>
        System.Threading.Tasks.Task<PairingCodePSTN> GeneratePairingCodePstnAsync (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null);

        /// <summary>
        /// Generate Pairing Code (PSTN)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of ApiResponse (PairingCodePSTN)</returns>
        System.Threading.Tasks.Task<ApiResponse<PairingCodePSTN>> GeneratePairingCodePstnAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null);
        /// <summary>
        /// Generate Pairing Code (SIP)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>Task of PairingCodeSIP</returns>
        System.Threading.Tasks.Task<PairingCodeSIP> GeneratePairingCodeSipAsync (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP);

        /// <summary>
        /// Generate Pairing Code (SIP)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>Task of ApiResponse (PairingCodeSIP)</returns>
        System.Threading.Tasks.Task<ApiResponse<PairingCodeSIP>> GeneratePairingCodeSipAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP);
        /// <summary>
        /// Generate Pairing Code (WebRTC)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of PairingCodeWebRTC</returns>
        System.Threading.Tasks.Task<PairingCodeWebRTC> GeneratePairingCodeWebRtcAsync (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null);

        /// <summary>
        /// Generate Pairing Code (WebRTC)
        /// </summary>
        /// <remarks>
        /// This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of ApiResponse (PairingCodeWebRTC)</returns>
        System.Threading.Tasks.Task<ApiResponse<PairingCodeWebRTC>> GeneratePairingCodeWebRtcAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null);
        /// <summary>
        /// Get Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of Layout</returns>
        System.Threading.Tasks.Task<Layout> GetEndpointLayoutAsync (int? userId, int? numericMeetingId, string endpointGuid);

        /// <summary>
        /// Get Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of ApiResponse (Layout)</returns>
        System.Threading.Tasks.Task<ApiResponse<Layout>> GetEndpointLayoutAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid);
        /// <summary>
        /// Get Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> GetMeetingAsync (int? userId, int? meetingId);

        /// <summary>
        /// Get Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint gets the settings for a user&#39;s meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> GetMeetingAsyncWithHttpInfo (int? userId, int? meetingId);
        /// <summary>
        /// Get Meeting Email
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the email object for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>Task of MeetingEmails</returns>
        System.Threading.Tasks.Task<MeetingEmails> GetMeetingEmailsAsync (int? userId, int? meetingId, string type = null, string role = null, string action = null);

        /// <summary>
        /// Get Meeting Email
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the email object for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>Task of ApiResponse (MeetingEmails)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingEmails>> GetMeetingEmailsAsyncWithHttpInfo (int? userId, int? meetingId, string type = null, string role = null, string action = null);
        /// <summary>
        /// Get Endpoint Information
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of Endpoint</returns>
        System.Threading.Tasks.Task<Endpoint> GetMeetingEndpointAsync (int? userId, int? numericMeetingId, string endpointGuid);

        /// <summary>
        /// Get Endpoint Information
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of ApiResponse (Endpoint)</returns>
        System.Threading.Tasks.Task<ApiResponse<Endpoint>> GetMeetingEndpointAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid);
        /// <summary>
        /// List Meeting Endpoints
        /// </summary>
        /// <remarks>
        /// This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of Endpoints</returns>
        System.Threading.Tasks.Task<Endpoints> GetMeetingEndpointsAsync (int? userId, int? numericMeetingId);

        /// <summary>
        /// List Meeting Endpoints
        /// </summary>
        /// <remarks>
        /// This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of ApiResponse (Endpoints)</returns>
        System.Threading.Tasks.Task<ApiResponse<Endpoints>> GetMeetingEndpointsAsyncWithHttpInfo (int? userId, int? numericMeetingId);
        /// <summary>
        /// Get Meeting Join Info
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the join information for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of Numbers</returns>
        System.Threading.Tasks.Task<Numbers> GetMeetingNumbersAsync (int? userId, int? meetingId);

        /// <summary>
        /// Get Meeting Join Info
        /// </summary>
        /// <remarks>
        /// This endpoint retrieves the join information for a scheduled meeting.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of ApiResponse (Numbers)</returns>
        System.Threading.Tasks.Task<ApiResponse<Numbers>> GetMeetingNumbersAsyncWithHttpInfo (int? userId, int? meetingId);
        /// <summary>
        /// Get Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of MeetingState</returns>
        System.Threading.Tasks.Task<MeetingState> GetMeetingStateAsync (int? userId, int? numericMeetingId);

        /// <summary>
        /// Get Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of ApiResponse (MeetingState)</returns>
        System.Threading.Tasks.Task<ApiResponse<MeetingState>> GetMeetingStateAsyncWithHttpInfo (int? userId, int? numericMeetingId);
        /// <summary>
        /// List Meetings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>Task of List&lt;Meeting&gt;</returns>
        System.Threading.Tasks.Task<List<Meeting>> ListMeetingsAsync (int? userId, string numericMeetingId = null);

        /// <summary>
        /// List Meetings
        /// </summary>
        /// <remarks>
        /// This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>Task of ApiResponse (List&lt;Meeting&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<Meeting>>> ListMeetingsAsyncWithHttpInfo (int? userId, string numericMeetingId = null);
        /// <summary>
        /// Send Email Invite
        /// </summary>
        /// <remarks>
        /// This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task SendMeetingInviteAsync (int? userId, int? numericMeetingId, PayloadInvite payloadInvite);

        /// <summary>
        /// Send Email Invite
        /// </summary>
        /// <remarks>
        /// This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> SendMeetingInviteAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadInvite payloadInvite);
        /// <summary>
        /// Update Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Task of Layout</returns>
        System.Threading.Tasks.Task<Layout> UpdateEndpointLayoutAsync (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null);

        /// <summary>
        /// Update Endpoint Layout
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Task of ApiResponse (Layout)</returns>
        System.Threading.Tasks.Task<ApiResponse<Layout>> UpdateEndpointLayoutAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null);
        /// <summary>
        /// Update Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> UpdateMeetingAsync (int? userId, int? meetingId, Meeting meeting);

        /// <summary>
        /// Update Meeting
        /// </summary>
        /// <remarks>
        /// This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> UpdateMeetingAsyncWithHttpInfo (int? userId, int? meetingId, Meeting meeting);
        /// <summary>
        /// Update Endpoint Video/Audio State
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Task of Endpoint</returns>
        System.Threading.Tasks.Task<Endpoint> UpdateMeetingEndpointAsync (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null);

        /// <summary>
        /// Update Endpoint Video/Audio State
        /// </summary>
        /// <remarks>
        /// This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Task of ApiResponse (Endpoint)</returns>
        System.Threading.Tasks.Task<ApiResponse<Endpoint>> UpdateMeetingEndpointAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null);
        /// <summary>
        /// Update Meeting Endpoints State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task UpdateMeetingEndpointsAsync (int? userId, int? numericMeetingId, bool? mute = null, string media = null);

        /// <summary>
        /// Update Meeting Endpoints State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> UpdateMeetingEndpointsAsyncWithHttpInfo (int? userId, int? numericMeetingId, bool? mute = null, string media = null);
        /// <summary>
        /// Update Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Task of Meeting</returns>
        System.Threading.Tasks.Task<Meeting> UpdateMeetingStateAsync (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null);

        /// <summary>
        /// Update Meeting State
        /// </summary>
        /// <remarks>
        /// This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </remarks>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        System.Threading.Tasks.Task<ApiResponse<Meeting>> UpdateMeetingStateAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class MeetingApi : IMeetingApi
    {
        private com.bluejeans.api.rest.meetings.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingApi"/> class.
        /// </summary>
        /// <returns></returns>
        public MeetingApi(String basePath)
        {
            this.Configuration = new com.bluejeans.api.rest.meetings.Client.Configuration { BasePath = basePath };

            ExceptionFactory = com.bluejeans.api.rest.meetings.Client.Configuration.DefaultExceptionFactory;
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public MeetingApi(com.bluejeans.api.rest.meetings.Client.Configuration configuration = null)
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
        /// Cancel Meeting This endpoint deletes a scheuled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns></returns>
        public void CancelMeeting (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null)
        {
             CancelMeetingWithHttpInfo(userId, meetingId, email, cancellationMessage);
        }

        /// <summary>
        /// Cancel Meeting This endpoint deletes a scheuled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> CancelMeetingWithHttpInfo (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->CancelMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->CancelMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
            if (email != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "email", email)); // query parameter
            if (cancellationMessage != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "cancellationMessage", cancellationMessage)); // query parameter

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
                Exception exception = ExceptionFactory("CancelMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Cancel Meeting This endpoint deletes a scheuled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task CancelMeetingAsync (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null)
        {
             await CancelMeetingAsyncWithHttpInfo(userId, meetingId, email, cancellationMessage);

        }

        /// <summary>
        /// Cancel Meeting This endpoint deletes a scheuled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="email">Dispatch an email to participants with the specified cancellation message. (optional, default to false)</param>
        /// <param name="cancellationMessage">Message sent to participants when meeting is deleted and email is selected (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> CancelMeetingAsyncWithHttpInfo (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->CancelMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->CancelMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
            if (email != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "email", email)); // query parameter
            if (cancellationMessage != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "cancellationMessage", cancellationMessage)); // query parameter

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
                Exception exception = ExceptionFactory("CancelMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Create Meeting This endpoint will create a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Meeting</returns>
        public Meeting CreateMeeting (int? userId, ScheduleMeetingMinComp meeting, bool? email = null)
        {
             ApiResponse<Meeting> localVarResponse = CreateMeetingWithHttpInfo(userId, meeting, email);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Create Meeting This endpoint will create a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > CreateMeetingWithHttpInfo (int? userId, ScheduleMeetingMinComp meeting, bool? email = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->CreateMeeting");
            // verify the required parameter 'meeting' is set
            if (meeting == null)
                throw new ApiException(400, "Missing required parameter 'meeting' when calling MeetingApi->CreateMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting";
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
            if (email != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "email", email)); // query parameter
            if (meeting != null && meeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(meeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = meeting; // byte array
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
                Exception exception = ExceptionFactory("CreateMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Create Meeting This endpoint will create a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> CreateMeetingAsync (int? userId, ScheduleMeetingMinComp meeting, bool? email = null)
        {
             ApiResponse<Meeting> localVarResponse = await CreateMeetingAsyncWithHttpInfo(userId, meeting, email);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Create Meeting This endpoint will create a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meeting">The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.)</param>
        /// <param name="email">If set to true, sends invitation emails to all listed participants. (optional)</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> CreateMeetingAsyncWithHttpInfo (int? userId, ScheduleMeetingMinComp meeting, bool? email = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->CreateMeeting");
            // verify the required parameter 'meeting' is set
            if (meeting == null)
                throw new ApiException(400, "Missing required parameter 'meeting' when calling MeetingApi->CreateMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting";
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
            if (email != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "email", email)); // query parameter
            if (meeting != null && meeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(meeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = meeting; // byte array
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
                Exception exception = ExceptionFactory("CreateMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Dialout via PSTN Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>DialoutPstn</returns>
        public DialoutPstn DialoutPstn (int? userId, int? numericMeetingId, PayloadDialout payloadDialout)
        {
             ApiResponse<DialoutPstn> localVarResponse = DialoutPstnWithHttpInfo(userId, numericMeetingId, payloadDialout);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Dialout via PSTN Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>ApiResponse of DialoutPstn</returns>
        public ApiResponse< DialoutPstn > DialoutPstnWithHttpInfo (int? userId, int? numericMeetingId, PayloadDialout payloadDialout)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->DialoutPstn");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->DialoutPstn");
            // verify the required parameter 'payloadDialout' is set
            if (payloadDialout == null)
                throw new ApiException(400, "Missing required parameter 'payloadDialout' when calling MeetingApi->DialoutPstn");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadDialout != null && payloadDialout.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadDialout); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadDialout; // byte array
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
                Exception exception = ExceptionFactory("DialoutPstn", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<DialoutPstn>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (DialoutPstn) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(DialoutPstn)));
        }

        /// <summary>
        /// Dialout via PSTN Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>Task of DialoutPstn</returns>
        public async System.Threading.Tasks.Task<DialoutPstn> DialoutPstnAsync (int? userId, int? numericMeetingId, PayloadDialout payloadDialout)
        {
             ApiResponse<DialoutPstn> localVarResponse = await DialoutPstnAsyncWithHttpInfo(userId, numericMeetingId, payloadDialout);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Dialout via PSTN Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadDialout"></param>
        /// <returns>Task of ApiResponse (DialoutPstn)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<DialoutPstn>> DialoutPstnAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadDialout payloadDialout)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->DialoutPstn");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->DialoutPstn");
            // verify the required parameter 'payloadDialout' is set
            if (payloadDialout == null)
                throw new ApiException(400, "Missing required parameter 'payloadDialout' when calling MeetingApi->DialoutPstn");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadDialout != null && payloadDialout.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadDialout); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadDialout; // byte array
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
                Exception exception = ExceptionFactory("DialoutPstn", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<DialoutPstn>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (DialoutPstn) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(DialoutPstn)));
        }

        /// <summary>
        /// Generate Pairing Code (PSTN) This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>PairingCodePSTN</returns>
        public PairingCodePSTN GeneratePairingCodePstn (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null)
        {
             ApiResponse<PairingCodePSTN> localVarResponse = GeneratePairingCodePstnWithHttpInfo(userId, numericMeetingId, payloadPairingCodePstn, role);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Generate Pairing Code (PSTN) This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>ApiResponse of PairingCodePSTN</returns>
        public ApiResponse< PairingCodePSTN > GeneratePairingCodePstnWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodePstn");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodePstn");
            // verify the required parameter 'payloadPairingCodePstn' is set
            if (payloadPairingCodePstn == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodePstn' when calling MeetingApi->GeneratePairingCodePstn");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (payloadPairingCodePstn != null && payloadPairingCodePstn.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodePstn); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodePstn; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodePstn", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodePSTN>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodePSTN) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodePSTN)));
        }

        /// <summary>
        /// Generate Pairing Code (PSTN) This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of PairingCodePSTN</returns>
        public async System.Threading.Tasks.Task<PairingCodePSTN> GeneratePairingCodePstnAsync (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null)
        {
             ApiResponse<PairingCodePSTN> localVarResponse = await GeneratePairingCodePstnAsyncWithHttpInfo(userId, numericMeetingId, payloadPairingCodePstn, role);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Generate Pairing Code (PSTN) This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodePstn"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of ApiResponse (PairingCodePSTN)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<PairingCodePSTN>> GeneratePairingCodePstnAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodePstn");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodePstn");
            // verify the required parameter 'payloadPairingCodePstn' is set
            if (payloadPairingCodePstn == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodePstn' when calling MeetingApi->GeneratePairingCodePstn");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (payloadPairingCodePstn != null && payloadPairingCodePstn.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodePstn); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodePstn; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodePstn", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodePSTN>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodePSTN) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodePSTN)));
        }

        /// <summary>
        /// Generate Pairing Code (SIP) This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>PairingCodeSIP</returns>
        public PairingCodeSIP GeneratePairingCodeSip (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP)
        {
             ApiResponse<PairingCodeSIP> localVarResponse = GeneratePairingCodeSipWithHttpInfo(userId, numericMeetingId, payloadPairingCodeSIP);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Generate Pairing Code (SIP) This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>ApiResponse of PairingCodeSIP</returns>
        public ApiResponse< PairingCodeSIP > GeneratePairingCodeSipWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodeSip");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodeSip");
            // verify the required parameter 'payloadPairingCodeSIP' is set
            if (payloadPairingCodeSIP == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodeSIP' when calling MeetingApi->GeneratePairingCodeSip");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadPairingCodeSIP != null && payloadPairingCodeSIP.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodeSIP); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodeSIP; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodeSip", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodeSIP>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodeSIP) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodeSIP)));
        }

        /// <summary>
        /// Generate Pairing Code (SIP) This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>Task of PairingCodeSIP</returns>
        public async System.Threading.Tasks.Task<PairingCodeSIP> GeneratePairingCodeSipAsync (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP)
        {
             ApiResponse<PairingCodeSIP> localVarResponse = await GeneratePairingCodeSipAsyncWithHttpInfo(userId, numericMeetingId, payloadPairingCodeSIP);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Generate Pairing Code (SIP) This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeSIP">Information about the device that will be joining via SIP.</param>
        /// <returns>Task of ApiResponse (PairingCodeSIP)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<PairingCodeSIP>> GeneratePairingCodeSipAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodeSip");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodeSip");
            // verify the required parameter 'payloadPairingCodeSIP' is set
            if (payloadPairingCodeSIP == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodeSIP' when calling MeetingApi->GeneratePairingCodeSip");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadPairingCodeSIP != null && payloadPairingCodeSIP.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodeSIP); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodeSIP; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodeSip", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodeSIP>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodeSIP) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodeSIP)));
        }

        /// <summary>
        /// Generate Pairing Code (WebRTC) This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>PairingCodeWebRTC</returns>
        public PairingCodeWebRTC GeneratePairingCodeWebRtc (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null)
        {
             ApiResponse<PairingCodeWebRTC> localVarResponse = GeneratePairingCodeWebRtcWithHttpInfo(userId, numericMeetingId, payloadPairingCodeWebRTC, role);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Generate Pairing Code (WebRTC) This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>ApiResponse of PairingCodeWebRTC</returns>
        public ApiResponse< PairingCodeWebRTC > GeneratePairingCodeWebRtcWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodeWebRtc");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodeWebRtc");
            // verify the required parameter 'payloadPairingCodeWebRTC' is set
            if (payloadPairingCodeWebRTC == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodeWebRTC' when calling MeetingApi->GeneratePairingCodeWebRtc");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (payloadPairingCodeWebRTC != null && payloadPairingCodeWebRTC.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodeWebRTC); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodeWebRTC; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodeWebRtc", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodeWebRTC>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodeWebRTC) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodeWebRTC)));
        }

        /// <summary>
        /// Generate Pairing Code (WebRTC) This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of PairingCodeWebRTC</returns>
        public async System.Threading.Tasks.Task<PairingCodeWebRTC> GeneratePairingCodeWebRtcAsync (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null)
        {
             ApiResponse<PairingCodeWebRTC> localVarResponse = await GeneratePairingCodeWebRtcAsyncWithHttpInfo(userId, numericMeetingId, payloadPairingCodeWebRTC, role);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Generate Pairing Code (WebRTC) This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadPairingCodeWebRTC"></param>
        /// <param name="role"> (optional, default to USER)</param>
        /// <returns>Task of ApiResponse (PairingCodeWebRTC)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<PairingCodeWebRTC>> GeneratePairingCodeWebRtcAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GeneratePairingCodeWebRtc");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GeneratePairingCodeWebRtc");
            // verify the required parameter 'payloadPairingCodeWebRTC' is set
            if (payloadPairingCodeWebRTC == null)
                throw new ApiException(400, "Missing required parameter 'payloadPairingCodeWebRTC' when calling MeetingApi->GeneratePairingCodeWebRtc");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (payloadPairingCodeWebRTC != null && payloadPairingCodeWebRTC.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadPairingCodeWebRTC); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadPairingCodeWebRTC; // byte array
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
                Exception exception = ExceptionFactory("GeneratePairingCodeWebRtc", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<PairingCodeWebRTC>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (PairingCodeWebRTC) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(PairingCodeWebRTC)));
        }

        /// <summary>
        /// Get Endpoint Layout This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Layout</returns>
        public Layout GetEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid)
        {
             ApiResponse<Layout> localVarResponse = GetEndpointLayoutWithHttpInfo(userId, numericMeetingId, endpointGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Endpoint Layout This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>ApiResponse of Layout</returns>
        public ApiResponse< Layout > GetEndpointLayoutWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetEndpointLayout");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetEndpointLayout");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->GetEndpointLayout");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetEndpointLayout", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Layout>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Layout) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Layout)));
        }

        /// <summary>
        /// Get Endpoint Layout This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of Layout</returns>
        public async System.Threading.Tasks.Task<Layout> GetEndpointLayoutAsync (int? userId, int? numericMeetingId, string endpointGuid)
        {
             ApiResponse<Layout> localVarResponse = await GetEndpointLayoutAsyncWithHttpInfo(userId, numericMeetingId, endpointGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Endpoint Layout This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of ApiResponse (Layout)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Layout>> GetEndpointLayoutAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetEndpointLayout");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetEndpointLayout");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->GetEndpointLayout");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetEndpointLayout", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Layout>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Layout) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Layout)));
        }

        /// <summary>
        /// Get Meeting This endpoint gets the settings for a user&#39;s meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Meeting</returns>
        public Meeting GetMeeting (int? userId, int? meetingId)
        {
             ApiResponse<Meeting> localVarResponse = GetMeetingWithHttpInfo(userId, meetingId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting This endpoint gets the settings for a user&#39;s meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > GetMeetingWithHttpInfo (int? userId, int? meetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
                Exception exception = ExceptionFactory("GetMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Get Meeting This endpoint gets the settings for a user&#39;s meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> GetMeetingAsync (int? userId, int? meetingId)
        {
             ApiResponse<Meeting> localVarResponse = await GetMeetingAsyncWithHttpInfo(userId, meetingId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting This endpoint gets the settings for a user&#39;s meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> GetMeetingAsyncWithHttpInfo (int? userId, int? meetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
                Exception exception = ExceptionFactory("GetMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Get Meeting Email This endpoint retrieves the email object for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>MeetingEmails</returns>
        public MeetingEmails GetMeetingEmails (int? userId, int? meetingId, string type = null, string role = null, string action = null)
        {
             ApiResponse<MeetingEmails> localVarResponse = GetMeetingEmailsWithHttpInfo(userId, meetingId, type, role, action);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting Email This endpoint retrieves the email object for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>ApiResponse of MeetingEmails</returns>
        public ApiResponse< MeetingEmails > GetMeetingEmailsWithHttpInfo (int? userId, int? meetingId, string type = null, string role = null, string action = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEmails");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeetingEmails");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails";
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
            if (type != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "type", type)); // query parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

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
                Exception exception = ExceptionFactory("GetMeetingEmails", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingEmails>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingEmails) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingEmails)));
        }

        /// <summary>
        /// Get Meeting Email This endpoint retrieves the email object for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>Task of MeetingEmails</returns>
        public async System.Threading.Tasks.Task<MeetingEmails> GetMeetingEmailsAsync (int? userId, int? meetingId, string type = null, string role = null, string action = null)
        {
             ApiResponse<MeetingEmails> localVarResponse = await GetMeetingEmailsAsyncWithHttpInfo(userId, meetingId, type, role, action);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting Email This endpoint retrieves the email object for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="type">TEXT, ICS, HTML (optional)</param>
        /// <param name="role">moderator, participant (optional)</param>
        /// <param name="action">create, edit, delete (optional)</param>
        /// <returns>Task of ApiResponse (MeetingEmails)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingEmails>> GetMeetingEmailsAsyncWithHttpInfo (int? userId, int? meetingId, string type = null, string role = null, string action = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEmails");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeetingEmails");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails";
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
            if (type != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "type", type)); // query parameter
            if (role != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "role", role)); // query parameter
            if (action != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "action", action)); // query parameter

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
                Exception exception = ExceptionFactory("GetMeetingEmails", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingEmails>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingEmails) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingEmails)));
        }

        /// <summary>
        /// Get Endpoint Information This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Endpoint</returns>
        public Endpoint GetMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid)
        {
             ApiResponse<Endpoint> localVarResponse = GetMeetingEndpointWithHttpInfo(userId, numericMeetingId, endpointGuid);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Endpoint Information This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>ApiResponse of Endpoint</returns>
        public ApiResponse< Endpoint > GetMeetingEndpointWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEndpoint");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingEndpoint");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->GetMeetingEndpoint");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingEndpoint", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoint>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoint) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoint)));
        }

        /// <summary>
        /// Get Endpoint Information This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of Endpoint</returns>
        public async System.Threading.Tasks.Task<Endpoint> GetMeetingEndpointAsync (int? userId, int? numericMeetingId, string endpointGuid)
        {
             ApiResponse<Endpoint> localVarResponse = await GetMeetingEndpointAsyncWithHttpInfo(userId, numericMeetingId, endpointGuid);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Endpoint Information This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <returns>Task of ApiResponse (Endpoint)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Endpoint>> GetMeetingEndpointAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEndpoint");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingEndpoint");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->GetMeetingEndpoint");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingEndpoint", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoint>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoint) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoint)));
        }

        /// <summary>
        /// List Meeting Endpoints This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Endpoints</returns>
        public Endpoints GetMeetingEndpoints (int? userId, int? numericMeetingId)
        {
             ApiResponse<Endpoints> localVarResponse = GetMeetingEndpointsWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List Meeting Endpoints This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>ApiResponse of Endpoints</returns>
        public ApiResponse< Endpoints > GetMeetingEndpointsWithHttpInfo (int? userId, int? numericMeetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEndpoints");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingEndpoints");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingEndpoints", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoints>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoints) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoints)));
        }

        /// <summary>
        /// List Meeting Endpoints This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of Endpoints</returns>
        public async System.Threading.Tasks.Task<Endpoints> GetMeetingEndpointsAsync (int? userId, int? numericMeetingId)
        {
             ApiResponse<Endpoints> localVarResponse = await GetMeetingEndpointsAsyncWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List Meeting Endpoints This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of ApiResponse (Endpoints)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Endpoints>> GetMeetingEndpointsAsyncWithHttpInfo (int? userId, int? numericMeetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingEndpoints");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingEndpoints");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingEndpoints", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoints>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoints) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoints)));
        }

        /// <summary>
        /// Get Meeting Join Info This endpoint retrieves the join information for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Numbers</returns>
        public Numbers GetMeetingNumbers (int? userId, int? meetingId)
        {
             ApiResponse<Numbers> localVarResponse = GetMeetingNumbersWithHttpInfo(userId, meetingId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting Join Info This endpoint retrieves the join information for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>ApiResponse of Numbers</returns>
        public ApiResponse< Numbers > GetMeetingNumbersWithHttpInfo (int? userId, int? meetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingNumbers");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeetingNumbers");

            var localVarPath = "/v1/user/{user_id}/meetings/{meeting_id}/numbers";
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
                Exception exception = ExceptionFactory("GetMeetingNumbers", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Numbers>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Numbers) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Numbers)));
        }

        /// <summary>
        /// Get Meeting Join Info This endpoint retrieves the join information for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of Numbers</returns>
        public async System.Threading.Tasks.Task<Numbers> GetMeetingNumbersAsync (int? userId, int? meetingId)
        {
             ApiResponse<Numbers> localVarResponse = await GetMeetingNumbersAsyncWithHttpInfo(userId, meetingId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting Join Info This endpoint retrieves the join information for a scheduled meeting.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <returns>Task of ApiResponse (Numbers)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Numbers>> GetMeetingNumbersAsyncWithHttpInfo (int? userId, int? meetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingNumbers");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->GetMeetingNumbers");

            var localVarPath = "/v1/user/{user_id}/meetings/{meeting_id}/numbers";
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
                Exception exception = ExceptionFactory("GetMeetingNumbers", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Numbers>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Numbers) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Numbers)));
        }

        /// <summary>
        /// Get Meeting State This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>MeetingState</returns>
        public MeetingState GetMeetingState (int? userId, int? numericMeetingId)
        {
             ApiResponse<MeetingState> localVarResponse = GetMeetingStateWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get Meeting State This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>ApiResponse of MeetingState</returns>
        public ApiResponse< MeetingState > GetMeetingStateWithHttpInfo (int? userId, int? numericMeetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingState");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingState");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingState", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingState>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingState) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingState)));
        }

        /// <summary>
        /// Get Meeting State This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of MeetingState</returns>
        public async System.Threading.Tasks.Task<MeetingState> GetMeetingStateAsync (int? userId, int? numericMeetingId)
        {
             ApiResponse<MeetingState> localVarResponse = await GetMeetingStateAsyncWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get Meeting State This endpoint’s purpose is to return whether the meeting is in progress or not.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <returns>Task of ApiResponse (MeetingState)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<MeetingState>> GetMeetingStateAsyncWithHttpInfo (int? userId, int? numericMeetingId)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->GetMeetingState");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->GetMeetingState");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter

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
                Exception exception = ExceptionFactory("GetMeetingState", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<MeetingState>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (MeetingState) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(MeetingState)));
        }

        /// <summary>
        /// List Meetings This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>List&lt;Meeting&gt;</returns>
        public List<Meeting> ListMeetings (int? userId, string numericMeetingId = null)
        {
             ApiResponse<List<Meeting>> localVarResponse = ListMeetingsWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// List Meetings This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>ApiResponse of List&lt;Meeting&gt;</returns>
        public ApiResponse< List<Meeting> > ListMeetingsWithHttpInfo (int? userId, string numericMeetingId = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->ListMeetings");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting";
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
            if (numericMeetingId != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "numericMeetingId", numericMeetingId)); // query parameter

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
                Exception exception = ExceptionFactory("ListMeetings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<Meeting>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<Meeting>) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<Meeting>)));
        }

        /// <summary>
        /// List Meetings This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>Task of List&lt;Meeting&gt;</returns>
        public async System.Threading.Tasks.Task<List<Meeting>> ListMeetingsAsync (int? userId, string numericMeetingId = null)
        {
             ApiResponse<List<Meeting>> localVarResponse = await ListMeetingsAsyncWithHttpInfo(userId, numericMeetingId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// List Meetings This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">Filter the results by the meeting ID that participants will see and use to join the conference. (optional)</param>
        /// <returns>Task of ApiResponse (List&lt;Meeting&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<Meeting>>> ListMeetingsAsyncWithHttpInfo (int? userId, string numericMeetingId = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->ListMeetings");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting";
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
            if (numericMeetingId != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "numericMeetingId", numericMeetingId)); // query parameter

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
                Exception exception = ExceptionFactory("ListMeetings", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<Meeting>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<Meeting>) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<Meeting>)));
        }

        /// <summary>
        /// Send Email Invite This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns></returns>
        public void SendMeetingInvite (int? userId, int? numericMeetingId, PayloadInvite payloadInvite)
        {
             SendMeetingInviteWithHttpInfo(userId, numericMeetingId, payloadInvite);
        }

        /// <summary>
        /// Send Email Invite This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> SendMeetingInviteWithHttpInfo (int? userId, int? numericMeetingId, PayloadInvite payloadInvite)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->SendMeetingInvite");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->SendMeetingInvite");
            // verify the required parameter 'payloadInvite' is set
            if (payloadInvite == null)
                throw new ApiException(400, "Missing required parameter 'payloadInvite' when calling MeetingApi->SendMeetingInvite");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadInvite != null && payloadInvite.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadInvite); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadInvite; // byte array
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
                Exception exception = ExceptionFactory("SendMeetingInvite", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Send Email Invite This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task SendMeetingInviteAsync (int? userId, int? numericMeetingId, PayloadInvite payloadInvite)
        {
             await SendMeetingInviteAsyncWithHttpInfo(userId, numericMeetingId, payloadInvite);

        }

        /// <summary>
        /// Send Email Invite This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadInvite"></param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> SendMeetingInviteAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadInvite payloadInvite)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->SendMeetingInvite");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->SendMeetingInvite");
            // verify the required parameter 'payloadInvite' is set
            if (payloadInvite == null)
                throw new ApiException(400, "Missing required parameter 'payloadInvite' when calling MeetingApi->SendMeetingInvite");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (payloadInvite != null && payloadInvite.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadInvite); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadInvite; // byte array
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
                Exception exception = ExceptionFactory("SendMeetingInvite", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Update Endpoint Layout This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Layout</returns>
        public Layout UpdateEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null)
        {
             ApiResponse<Layout> localVarResponse = UpdateEndpointLayoutWithHttpInfo(userId, numericMeetingId, endpointGuid, isLeader, push);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update Endpoint Layout This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>ApiResponse of Layout</returns>
        public ApiResponse< Layout > UpdateEndpointLayoutWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateEndpointLayout");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateEndpointLayout");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->UpdateEndpointLayout");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter
            if (isLeader != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "isLeader", isLeader)); // query parameter
            if (push != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "push", push)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateEndpointLayout", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Layout>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Layout) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Layout)));
        }

        /// <summary>
        /// Update Endpoint Layout This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Task of Layout</returns>
        public async System.Threading.Tasks.Task<Layout> UpdateEndpointLayoutAsync (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null)
        {
             ApiResponse<Layout> localVarResponse = await UpdateEndpointLayoutAsyncWithHttpInfo(userId, numericMeetingId, endpointGuid, isLeader, push);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update Endpoint Layout This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="isLeader"> (optional)</param>
        /// <param name="push"> (optional)</param>
        /// <returns>Task of ApiResponse (Layout)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Layout>> UpdateEndpointLayoutAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateEndpointLayout");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateEndpointLayout");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->UpdateEndpointLayout");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter
            if (isLeader != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "isLeader", isLeader)); // query parameter
            if (push != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "push", push)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateEndpointLayout", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Layout>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Layout) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Layout)));
        }

        /// <summary>
        /// Update Meeting This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Meeting</returns>
        public Meeting UpdateMeeting (int? userId, int? meetingId, Meeting meeting)
        {
             ApiResponse<Meeting> localVarResponse = UpdateMeetingWithHttpInfo(userId, meetingId, meeting);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update Meeting This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > UpdateMeetingWithHttpInfo (int? userId, int? meetingId, Meeting meeting)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->UpdateMeeting");
            // verify the required parameter 'meeting' is set
            if (meeting == null)
                throw new ApiException(400, "Missing required parameter 'meeting' when calling MeetingApi->UpdateMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
            if (meeting != null && meeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(meeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = meeting; // byte array
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
                Exception exception = ExceptionFactory("UpdateMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Update Meeting This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> UpdateMeetingAsync (int? userId, int? meetingId, Meeting meeting)
        {
             ApiResponse<Meeting> localVarResponse = await UpdateMeetingAsyncWithHttpInfo(userId, meetingId, meeting);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update Meeting This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="meetingId">The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property.</param>
        /// <param name="meeting">The user&#39;s room details that you wish to update.</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> UpdateMeetingAsyncWithHttpInfo (int? userId, int? meetingId, Meeting meeting)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeeting");
            // verify the required parameter 'meetingId' is set
            if (meetingId == null)
                throw new ApiException(400, "Missing required parameter 'meetingId' when calling MeetingApi->UpdateMeeting");
            // verify the required parameter 'meeting' is set
            if (meeting == null)
                throw new ApiException(400, "Missing required parameter 'meeting' when calling MeetingApi->UpdateMeeting");

            var localVarPath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
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
            if (meeting != null && meeting.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(meeting); // http body (model) parameter
            }
            else
            {
                localVarPostBody = meeting; // byte array
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
                Exception exception = ExceptionFactory("UpdateMeeting", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Update Endpoint Video/Audio State This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Endpoint</returns>
        public Endpoint UpdateMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)
        {
             ApiResponse<Endpoint> localVarResponse = UpdateMeetingEndpointWithHttpInfo(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update Endpoint Video/Audio State This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>ApiResponse of Endpoint</returns>
        public ApiResponse< Endpoint > UpdateMeetingEndpointWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingEndpoint");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingEndpoint");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->UpdateMeetingEndpoint");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter
            if (muteAudio != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "muteAudio", muteAudio)); // query parameter
            if (muteVideo != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "muteVideo", muteVideo)); // query parameter
            if (leaveMeeting != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "leaveMeeting", leaveMeeting)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateMeetingEndpoint", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoint>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoint) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoint)));
        }

        /// <summary>
        /// Update Endpoint Video/Audio State This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Task of Endpoint</returns>
        public async System.Threading.Tasks.Task<Endpoint> UpdateMeetingEndpointAsync (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)
        {
             ApiResponse<Endpoint> localVarResponse = await UpdateMeetingEndpointAsyncWithHttpInfo(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update Endpoint Video/Audio State This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="endpointGuid">The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.</param>
        /// <param name="muteAudio">Toggle the audio source mute. (optional)</param>
        /// <param name="muteVideo">Toggle the video source mute. (optional)</param>
        /// <param name="leaveMeeting">Remove the user from the meeting. (optional)</param>
        /// <returns>Task of ApiResponse (Endpoint)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Endpoint>> UpdateMeetingEndpointAsyncWithHttpInfo (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingEndpoint");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingEndpoint");
            // verify the required parameter 'endpointGuid' is set
            if (endpointGuid == null)
                throw new ApiException(400, "Missing required parameter 'endpointGuid' when calling MeetingApi->UpdateMeetingEndpoint");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (endpointGuid != null) localVarPathParams.Add("endpoint_guid", this.Configuration.ApiClient.ParameterToString(endpointGuid)); // path parameter
            if (muteAudio != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "muteAudio", muteAudio)); // query parameter
            if (muteVideo != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "muteVideo", muteVideo)); // query parameter
            if (leaveMeeting != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "leaveMeeting", leaveMeeting)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateMeetingEndpoint", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Endpoint>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Endpoint) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Endpoint)));
        }

        /// <summary>
        /// Update Meeting Endpoints State This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns></returns>
        public void UpdateMeetingEndpoints (int? userId, int? numericMeetingId, bool? mute = null, string media = null)
        {
             UpdateMeetingEndpointsWithHttpInfo(userId, numericMeetingId, mute, media);
        }

        /// <summary>
        /// Update Meeting Endpoints State This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> UpdateMeetingEndpointsWithHttpInfo (int? userId, int? numericMeetingId, bool? mute = null, string media = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingEndpoints");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingEndpoints");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (mute != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "mute", mute)); // query parameter
            if (media != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "media", media)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateMeetingEndpoints", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Update Meeting Endpoints State This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task UpdateMeetingEndpointsAsync (int? userId, int? numericMeetingId, bool? mute = null, string media = null)
        {
             await UpdateMeetingEndpointsAsyncWithHttpInfo(userId, numericMeetingId, mute, media);

        }

        /// <summary>
        /// Update Meeting Endpoints State This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="mute">Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)</param>
        /// <param name="media">Specify the type of media you which to mute/unmute. (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> UpdateMeetingEndpointsAsyncWithHttpInfo (int? userId, int? numericMeetingId, bool? mute = null, string media = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingEndpoints");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingEndpoints");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (mute != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "mute", mute)); // query parameter
            if (media != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "media", media)); // query parameter

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
                Exception exception = ExceptionFactory("UpdateMeetingEndpoints", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Update Meeting State This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Meeting</returns>
        public Meeting UpdateMeetingState (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null)
        {
             ApiResponse<Meeting> localVarResponse = UpdateMeetingStateWithHttpInfo(userId, numericMeetingId, payloadMeetingState, delay);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Update Meeting State This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>ApiResponse of Meeting</returns>
        public ApiResponse< Meeting > UpdateMeetingStateWithHttpInfo (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingState");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingState");
            // verify the required parameter 'payloadMeetingState' is set
            if (payloadMeetingState == null)
                throw new ApiException(400, "Missing required parameter 'payloadMeetingState' when calling MeetingApi->UpdateMeetingState");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (delay != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "delay", delay)); // query parameter
            if (payloadMeetingState != null && payloadMeetingState.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadMeetingState); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadMeetingState; // byte array
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
                Exception exception = ExceptionFactory("UpdateMeetingState", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

        /// <summary>
        /// Update Meeting State This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Task of Meeting</returns>
        public async System.Threading.Tasks.Task<Meeting> UpdateMeetingStateAsync (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null)
        {
             ApiResponse<Meeting> localVarResponse = await UpdateMeetingStateAsyncWithHttpInfo(userId, numericMeetingId, payloadMeetingState, delay);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Update Meeting State This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
        /// </summary>
        /// <exception cref="com.bluejeans.api.rest.meetings.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="userId">The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.</param>
        /// <param name="numericMeetingId">The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.</param>
        /// <param name="payloadMeetingState">The meeting properties that you wish to update.</param>
        /// <param name="delay">Number of seconds to delay the end meeting operation. (optional)</param>
        /// <returns>Task of ApiResponse (Meeting)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Meeting>> UpdateMeetingStateAsyncWithHttpInfo (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null)
        {
            // verify the required parameter 'userId' is set
            if (userId == null)
                throw new ApiException(400, "Missing required parameter 'userId' when calling MeetingApi->UpdateMeetingState");
            // verify the required parameter 'numericMeetingId' is set
            if (numericMeetingId == null)
                throw new ApiException(400, "Missing required parameter 'numericMeetingId' when calling MeetingApi->UpdateMeetingState");
            // verify the required parameter 'payloadMeetingState' is set
            if (payloadMeetingState == null)
                throw new ApiException(400, "Missing required parameter 'payloadMeetingState' when calling MeetingApi->UpdateMeetingState");

            var localVarPath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
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
            if (numericMeetingId != null) localVarPathParams.Add("numeric_meeting_id", this.Configuration.ApiClient.ParameterToString(numericMeetingId)); // path parameter
            if (delay != null) localVarQueryParams.AddRange(this.Configuration.ApiClient.ParameterToKeyValuePairs("", "delay", delay)); // query parameter
            if (payloadMeetingState != null && payloadMeetingState.GetType() != typeof(byte[]))
            {
                localVarPostBody = this.Configuration.ApiClient.Serialize(payloadMeetingState); // http body (model) parameter
            }
            else
            {
                localVarPostBody = payloadMeetingState; // byte array
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
                Exception exception = ExceptionFactory("UpdateMeetingState", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<Meeting>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (Meeting) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Meeting)));
        }

    }
}
