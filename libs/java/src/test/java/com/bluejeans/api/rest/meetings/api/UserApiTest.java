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
import com.bluejeans.api.rest.meetings.model.Enterprise;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.GrantedApplications;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoom;
import com.bluejeans.api.rest.meetings.model.Room;
import com.bluejeans.api.rest.meetings.model.TagListComp;
import com.bluejeans.api.rest.meetings.model.User;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for UserApi
 */
@Ignore
public class UserApiTest {

    private final UserApi api = new UserApi();

    
    /**
     * Set User Tags
     *
     * This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void changeUserTagsTest() throws ApiException {
        Integer userId = null;
        String action = null;
        String tag = null;
        TagListComp response = api.changeUserTags(userId, action, tag);

        // TODO: test validations
    }
    
    /**
     * Create User’s Default Meeting Settings
     *
     * This endpoint creates the user’s default meeting settings.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createRoomTest() throws ApiException {
        Integer userId = null;
        Room room = null;
        Room response = api.createRoom(userId, room);

        // TODO: test validations
    }
    
    /**
     * Get Enterprise Profile
     *
     * This endpoint retrieves the enterprise profile associated with the user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEnterpriseProfileTest() throws ApiException {
        Integer userId = null;
        Enterprise response = api.getEnterpriseProfile(userId);

        // TODO: test validations
    }
    
    /**
     * Get Granted Applications
     *
     * This endpoint retrieves the granted applications associated with the user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getGrantedApplicationsTest() throws ApiException {
        Integer userId = null;
        GrantedApplications response = api.getGrantedApplications(userId);

        // TODO: test validations
    }
    
    /**
     * Get User Feature Groups
     *
     * This endpoint retrieves the feature groups associated with the user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getGroupsTest() throws ApiException {
        Integer userId = null;
        List<String> response = api.getGroups(userId);

        // TODO: test validations
    }
    
    /**
     * Get Personal Meeting
     *
     * This endpoint gets the settings for a user&#39;s personal meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getPersonalMeetingTest() throws ApiException {
        Integer userId = null;
        PersonalMeetingRoom response = api.getPersonalMeeting(userId);

        // TODO: test validations
    }
    
    /**
     * Get User’s Default Meeting Settings
     *
     * This endpoint gets a user’s default meeting settings.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getRoomTest() throws ApiException {
        Integer userId = null;
        Room response = api.getRoom(userId);

        // TODO: test validations
    }
    
    /**
     * Get User Account Details
     *
     * This endpoint retrieves the basic account details for a given user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getUserTest() throws ApiException {
        Integer userId = null;
        User response = api.getUser(userId);

        // TODO: test validations
    }
    
    /**
     * List User Tags
     *
     * This endpoint retrieves all tags associated with the specified user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getUserTagsTest() throws ApiException {
        Integer userId = null;
        TagListComp response = api.getUserTags(userId);

        // TODO: test validations
    }
    
    /**
     * Remoke Granted Application
     *
     * This endpoint revokes the granted application associated with the user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void revokeGrantedApplicationTest() throws ApiException {
        Integer userId = null;
        String clientId = null;
        api.revokeGrantedApplication(userId, clientId);

        // TODO: test validations
    }
    
    /**
     * Set User Feature Groups
     *
     * This endpoint sets the feature groups associated with the user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void setGroupsTest() throws ApiException {
        Integer userId = null;
        String enable = null;
        String disable = null;
        api.setGroups(userId, enable, disable);

        // TODO: test validations
    }
    
    /**
     * Update Personal Meeting
     *
     * This endpoint changes the settings for a user&#39;s personal meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updatePeresonalMeetingTest() throws ApiException {
        Integer userId = null;
        PersonalMeetingRoom personalMeeting = null;
        PersonalMeetingRoom response = api.updatePeresonalMeeting(userId, personalMeeting);

        // TODO: test validations
    }
    
    /**
     * Update User’s Default Meeting Settings
     *
     * This endpoint allows updating a user’s default meeting settings.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateRoomTest() throws ApiException {
        Integer userId = null;
        Room room = null;
        Room response = api.updateRoom(userId, room);

        // TODO: test validations
    }
    
    /**
     * Update User Account Details
     *
     * This endpoint allows updating a user’s basic account details.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateUserTest() throws ApiException {
        Integer userId = null;
        User user = null;
        User response = api.updateUser(userId, user);

        // TODO: test validations
    }
    
}
