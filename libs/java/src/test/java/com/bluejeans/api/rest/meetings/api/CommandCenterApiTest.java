/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.api;

import com.bluejeans.api.rest.meetings.ApiException;
import com.bluejeans.api.rest.meetings.model.AnalyticsEndpointDistribution;
import com.bluejeans.api.rest.meetings.model.AnalyticsEndpointDistributionV2;
import com.bluejeans.api.rest.meetings.model.AnalyticsFeedbackComments;
import com.bluejeans.api.rest.meetings.model.AnalyticsFeedbackScores;
import com.bluejeans.api.rest.meetings.model.AnalyticsRoiData;
import com.bluejeans.api.rest.meetings.model.AnalyticsTopUsers;
import com.bluejeans.api.rest.meetings.model.AnalyticsUsage;
import com.bluejeans.api.rest.meetings.model.EndpointLocationSummary;
import com.bluejeans.api.rest.meetings.model.EnterpriseUsersActive;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.MeetingExtendedIndigo;
import com.bluejeans.api.rest.meetings.model.MeetingIndigoList;
import com.bluejeans.api.rest.meetings.model.MeetingSummaryInfo;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for CommandCenterApi
 */
@Ignore
public class CommandCenterApiTest {

    private final CommandCenterApi api = new CommandCenterApi();

    
    /**
     * Endpoint Distribution
     *
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEndpointDistributionTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        AnalyticsEndpointDistribution response = api.getEndpointDistribution(enterpriseId, filter);

        // TODO: test validations
    }
    
    /**
     * Endpoint Distribution
     *
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEndpointDistributionV2Test() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String appName = null;
        AnalyticsEndpointDistributionV2 response = api.getEndpointDistributionV2(enterpriseId, filter, appName);

        // TODO: test validations
    }
    
    /**
     * Overall Enterprise Summary
     *
     * This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEnterpriseOverallSummaryTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String appName = null;
        MeetingSummaryInfo response = api.getEnterpriseOverallSummary(enterpriseId, filter, appName);

        // TODO: test validations
    }
    
    /**
     * Enterprise User Summary
     *
     * This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEnterpriseUsersActiveTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String clientTZ = null;
        Integer limit = null;
        String appName = null;
        EnterpriseUsersActive response = api.getEnterpriseUsersActive(enterpriseId, filter, clientTZ, limit, appName);

        // TODO: test validations
    }
    
    /**
     * Survey Feedback Comments
     *
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFeedbackCommentsTest() throws ApiException {
        Integer enterpriseId = null;
        String start = null;
        String end = null;
        AnalyticsFeedbackComments response = api.getFeedbackComments(enterpriseId, start, end);

        // TODO: test validations
    }
    
    /**
     * Survey Feedback Comments
     *
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFeedbackCommentsV2Test() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        Integer limit = null;
        String appName = null;
        AnalyticsFeedbackComments response = api.getFeedbackCommentsV2(enterpriseId, filter, limit, appName);

        // TODO: test validations
    }
    
    /**
     * Survey Feedback Scores
     *
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFeedbackCountTest() throws ApiException {
        Integer enterpriseId = null;
        String start = null;
        String end = null;
        AnalyticsFeedbackScores response = api.getFeedbackCount(enterpriseId, start, end);

        // TODO: test validations
    }
    
    /**
     * Survey Feedback Scores
     *
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFeedbackCountV2Test() throws ApiException {
        Integer enterpriseId = null;
        String start = null;
        String end = null;
        String appName = null;
        AnalyticsFeedbackScores response = api.getFeedbackCountV2(enterpriseId, start, end, appName);

        // TODO: test validations
    }
    
    /**
     * Geographic Demographics
     *
     * This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getGeoMapTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        Integer offset = null;
        Integer limit = null;
        String appName = null;
        EndpointLocationSummary response = api.getGeoMap(enterpriseId, filter, offset, limit, appName);

        // TODO: test validations
    }
    
    /**
     * List Live Meeting Endpoints by Enterprise
     *
     * This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingEndpointsLiveByEnterpriseTest() throws ApiException {
        Integer enterpriseId = null;
        String meetingUuid = null;
        String appName = null;
        MeetingExtendedIndigo response = api.getMeetingEndpointsLiveByEnterprise(enterpriseId, meetingUuid, appName);

        // TODO: test validations
    }
    
    /**
     * List Meeting Endpoints &amp; Stats by Enterprise
     *
     * This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingPastByEnterpriseTest() throws ApiException {
        Integer enterpriseId = null;
        String meetingUuid = null;
        Boolean includeEndpoints = null;
        MeetingExtendedIndigo response = api.getMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints);

        // TODO: test validations
    }
    
    /**
     * List Meeting Endpoints &amp; Stats by User
     *
     * This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingPastByUserTest() throws ApiException {
        Integer userId = null;
        String meetingUuid = null;
        MeetingExtendedIndigo response = api.getMeetingPastByUser(userId, meetingUuid);

        // TODO: test validations
    }
    
    /**
     * Meeting Usage Over Time
     *
     * This endpoint reports on meeting usage. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingUsageTest() throws ApiException {
        Integer enterpriseId = null;
        String clientTZ = null;
        String filter = null;
        AnalyticsUsage response = api.getMeetingUsage(enterpriseId, clientTZ, filter);

        // TODO: test validations
    }
    
    /**
     * Meeting Usage Over Time
     *
     * This endpoint reports on meeting usage.  Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingUsageV2Test() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String clientTZ = null;
        String appName = null;
        AnalyticsUsage response = api.getMeetingUsageV2(enterpriseId, filter, clientTZ, appName);

        // TODO: test validations
    }
    
    /**
     * Live Meetings Summary by Enterprise
     *
     * This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingsLiveByEnterpriseTest() throws ApiException {
        Integer enterpriseId = null;
        String appName = null;
        MeetingIndigoList response = api.getMeetingsLiveByEnterprise(enterpriseId, appName);

        // TODO: test validations
    }
    
    /**
     * List Past Meetings by Enterprise
     *
     * This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingsPastByEnterpriseTest() throws ApiException {
        Integer enterpriseId = null;
        Integer offset = null;
        Integer limit = null;
        String filter = null;
        Boolean count = null;
        String appName = null;
        MeetingIndigoList response = api.getMeetingsPastByEnterprise(enterpriseId, offset, limit, filter, count, appName);

        // TODO: test validations
    }
    
    /**
     * List Past Meetings by User
     *
     * This endpoint lists completed meetings by user. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingsPastByUserTest() throws ApiException {
        Integer userId = null;
        String filter = null;
        MeetingIndigoList response = api.getMeetingsPastByUser(userId, filter);

        // TODO: test validations
    }
    
    /**
     * ROI Data
     *
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getRoiRangesTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        AnalyticsRoiData response = api.getRoiRanges(enterpriseId, filter);

        // TODO: test validations
    }
    
    /**
     * ROI Data
     *
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getRoiRangesV2Test() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String appName = null;
        AnalyticsRoiData response = api.getRoiRangesV2(enterpriseId, filter, appName);

        // TODO: test validations
    }
    
    /**
     * Top Users
     *
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTopUsersTest() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        AnalyticsTopUsers response = api.getTopUsers(enterpriseId, filter);

        // TODO: test validations
    }
    
    /**
     * Top Users
     *
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTopUsersV2Test() throws ApiException {
        Integer enterpriseId = null;
        String filter = null;
        String appName = null;
        AnalyticsTopUsers response = api.getTopUsersV2(enterpriseId, filter, appName);

        // TODO: test validations
    }
    
}
