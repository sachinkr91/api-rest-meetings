/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407102018
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.api;

import com.bluejeans.api.rest.meetings.ApiException;
import com.bluejeans.api.rest.meetings.model.DialoutPstn;
import com.bluejeans.api.rest.meetings.model.Endpoint;
import com.bluejeans.api.rest.meetings.model.Endpoints;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.Layout;
import com.bluejeans.api.rest.meetings.model.Meeting;
import com.bluejeans.api.rest.meetings.model.MeetingEmails;
import com.bluejeans.api.rest.meetings.model.MeetingState;
import com.bluejeans.api.rest.meetings.model.Numbers;
import com.bluejeans.api.rest.meetings.model.PairingCodePSTN;
import com.bluejeans.api.rest.meetings.model.PairingCodeSIP;
import com.bluejeans.api.rest.meetings.model.PairingCodeWebRTC;
import com.bluejeans.api.rest.meetings.model.PayloadDialout;
import com.bluejeans.api.rest.meetings.model.PayloadInvite;
import com.bluejeans.api.rest.meetings.model.PayloadMeetingState;
import com.bluejeans.api.rest.meetings.model.PayloadPairingCodePstn;
import com.bluejeans.api.rest.meetings.model.PayloadPairingCodeSIP;
import com.bluejeans.api.rest.meetings.model.PayloadPairingCodeWebRTC;
import com.bluejeans.api.rest.meetings.model.ScheduleMeetingMinComp;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for MeetingApi
 */
@Ignore
public class MeetingApiTest {

    private final MeetingApi api = new MeetingApi();

    
    /**
     * Cancel Meeting
     *
     * This endpoint deletes a scheuled meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void cancelMeetingTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        Boolean email = null;
        String cancellationMessage = null;
        api.cancelMeeting(userId, meetingId, email, cancellationMessage);

        // TODO: test validations
    }
    
    /**
     * Create Meeting
     *
     * This endpoint will create a scheduled meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createMeetingTest() throws ApiException {
        Integer userId = null;
        ScheduleMeetingMinComp meeting = null;
        Boolean email = null;
        Meeting response = api.createMeeting(userId, meeting, email);

        // TODO: test validations
    }
    
    /**
     * Dialout via PSTN
     *
     * Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void dialoutPstnTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadDialout payloadDialout = null;
        DialoutPstn response = api.dialoutPstn(userId, numericMeetingId, payloadDialout);

        // TODO: test validations
    }
    
    /**
     * Generate Pairing Code (PSTN)
     *
     * This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void generatePairingCodePstnTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadPairingCodePstn payloadPairingCodePstn = null;
        String role = null;
        PairingCodePSTN response = api.generatePairingCodePstn(userId, numericMeetingId, payloadPairingCodePstn, role);

        // TODO: test validations
    }
    
    /**
     * Generate Pairing Code (SIP)
     *
     * This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void generatePairingCodeSipTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadPairingCodeSIP payloadPairingCodeSIP = null;
        PairingCodeSIP response = api.generatePairingCodeSip(userId, numericMeetingId, payloadPairingCodeSIP);

        // TODO: test validations
    }
    
    /**
     * Generate Pairing Code (WebRTC)
     *
     * This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void generatePairingCodeWebRtcTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadPairingCodeWebRTC payloadPairingCodeWebRTC = null;
        String role = null;
        PairingCodeWebRTC response = api.generatePairingCodeWebRtc(userId, numericMeetingId, payloadPairingCodeWebRTC, role);

        // TODO: test validations
    }
    
    /**
     * Get Endpoint Layout
     *
     * This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEndpointLayoutTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        String endpointGuid = null;
        Layout response = api.getEndpointLayout(userId, numericMeetingId, endpointGuid);

        // TODO: test validations
    }
    
    /**
     * Get Meeting
     *
     * This endpoint gets the settings for a user&#39;s meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        Meeting response = api.getMeeting(userId, meetingId);

        // TODO: test validations
    }
    
    /**
     * Get Meeting Email
     *
     * This endpoint retrieves the email object for a scheduled meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingEmailsTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        String type = null;
        String role = null;
        String action = null;
        MeetingEmails response = api.getMeetingEmails(userId, meetingId, type, role, action);

        // TODO: test validations
    }
    
    /**
     * Get Endpoint Information
     *
     * This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingEndpointTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        String endpointGuid = null;
        Endpoint response = api.getMeetingEndpoint(userId, numericMeetingId, endpointGuid);

        // TODO: test validations
    }
    
    /**
     * List Meeting Endpoints
     *
     * This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingEndpointsTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        Endpoints response = api.getMeetingEndpoints(userId, numericMeetingId);

        // TODO: test validations
    }
    
    /**
     * Get Meeting Join Info
     *
     * This endpoint retrieves the join information for a scheduled meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingNumbersTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        Numbers response = api.getMeetingNumbers(userId, meetingId);

        // TODO: test validations
    }
    
    /**
     * Get Meeting State
     *
     * This endpoint’s purpose is to return whether the meeting is in progress or not.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingStateTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        MeetingState response = api.getMeetingState(userId, numericMeetingId);

        // TODO: test validations
    }
    
    /**
     * List Meetings
     *
     * This endpoint gets a list of the user&#39;s scheduled upcoming meetings.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void listMeetingsTest() throws ApiException {
        Integer userId = null;
        String numericMeetingId = null;
        List<Meeting> response = api.listMeetings(userId, numericMeetingId);

        // TODO: test validations
    }
    
    /**
     * Send Email Invite
     *
     * This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void sendMeetingInviteTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadInvite payloadInvite = null;
        api.sendMeetingInvite(userId, numericMeetingId, payloadInvite);

        // TODO: test validations
    }
    
    /**
     * Update Endpoint Layout
     *
     * This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateEndpointLayoutTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        String endpointGuid = null;
        Boolean isLeader = null;
        Boolean push = null;
        Layout response = api.updateEndpointLayout(userId, numericMeetingId, endpointGuid, isLeader, push);

        // TODO: test validations
    }
    
    /**
     * Update Meeting
     *
     * This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateMeetingTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        Meeting meeting = null;
        Meeting response = api.updateMeeting(userId, meetingId, meeting);

        // TODO: test validations
    }
    
    /**
     * Update Endpoint Video/Audio State
     *
     * This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateMeetingEndpointTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        String endpointGuid = null;
        Boolean muteAudio = null;
        Boolean muteVideo = null;
        Boolean leaveMeeting = null;
        Endpoint response = api.updateMeetingEndpoint(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);

        // TODO: test validations
    }
    
    /**
     * Update Meeting Endpoints State
     *
     * This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateMeetingEndpointsTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        Boolean mute = null;
        String media = null;
        api.updateMeetingEndpoints(userId, numericMeetingId, mute, media);

        // TODO: test validations
    }
    
    /**
     * Update Meeting State
     *
     * This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateMeetingStateTest() throws ApiException {
        Integer userId = null;
        Integer numericMeetingId = null;
        PayloadMeetingState payloadMeetingState = null;
        Integer delay = null;
        Meeting response = api.updateMeetingState(userId, numericMeetingId, payloadMeetingState, delay);

        // TODO: test validations
    }
    
}
