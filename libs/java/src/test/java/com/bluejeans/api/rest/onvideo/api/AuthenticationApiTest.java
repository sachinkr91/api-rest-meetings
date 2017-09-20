/*
 * BlueJeans onVideo REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.onvideo.api;

import com.bluejeans.api.rest.onvideo.ApiException;
import com.bluejeans.api.rest.onvideo.model.Error;
import com.bluejeans.api.rest.onvideo.model.GrantClient;
import com.bluejeans.api.rest.onvideo.model.GrantCode;
import com.bluejeans.api.rest.onvideo.model.GrantMeeting;
import com.bluejeans.api.rest.onvideo.model.GrantPassword;
import com.bluejeans.api.rest.onvideo.model.GrantRefresh;
import com.bluejeans.api.rest.onvideo.model.GrantRequestClient;
import com.bluejeans.api.rest.onvideo.model.GrantRequestCode;
import com.bluejeans.api.rest.onvideo.model.GrantRequestMeeting;
import com.bluejeans.api.rest.onvideo.model.GrantRequestPassword;
import com.bluejeans.api.rest.onvideo.model.GrantRequestRefresh;
import com.bluejeans.api.rest.onvideo.model.GrantRequestRevoke;
import com.bluejeans.api.rest.onvideo.model.InlineResponse200;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for AuthenticationApi
 */
@Ignore
public class AuthenticationApiTest {

    private final AuthenticationApi api = new AuthenticationApi();

    
    /**
     * Get Authorization Code
     *
     * This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. Use \&quot;bluejeans.com\&quot; as hostname. &lt;br /&gt;**Note:**&lt;br /&gt;&amp;nbsp;&amp;nbsp;The code returned is only valid for *30 seconds.*  Your application must call as soon as possible the /oauth2/token API to generate an access token from the returned code.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getAuthorizationCodeTest() throws ApiException {
        String clientId = null;
        String redirectUri = null;
        String state = null;
        String scope = null;
        String responseType = null;
        String appName = null;
        String appLogoUrl = null;
        api.getAuthorizationCode(clientId, redirectUri, state, scope, responseType, appName, appLogoUrl);

        // TODO: test validations
    }
    
    /**
     * Authentication via Client Grant Type
     *
     * This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenByClientTest() throws ApiException {
        GrantRequestClient grantRequestClient = null;
        GrantClient response = api.getTokenByClient(grantRequestClient);

        // TODO: test validations
    }
    
    /**
     * Authentication via Code Grant Type
     *
     * This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenByCodeTest() throws ApiException {
        GrantRequestCode grantRequestCode = null;
        GrantCode response = api.getTokenByCode(grantRequestCode);

        // TODO: test validations
    }
    
    /**
     * Authentication via Meeting Grant Type
     *
     * This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenByMeetingTest() throws ApiException {
        GrantRequestMeeting grantRequestMeeting = null;
        GrantMeeting response = api.getTokenByMeeting(grantRequestMeeting);

        // TODO: test validations
    }
    
    /**
     * Authentication via Password Grant Type
     *
     * This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenByPasswordTest() throws ApiException {
        GrantRequestPassword grantRequestPassword = null;
        GrantPassword response = api.getTokenByPassword(grantRequestPassword);

        // TODO: test validations
    }
    
    /**
     * Authentication via Refresh Grant Type
     *
     * This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenByRefreshTest() throws ApiException {
        GrantRequestRefresh grantRequestRefresh = null;
        GrantRefresh response = api.getTokenByRefresh(grantRequestRefresh);

        // TODO: test validations
    }
    
    /**
     * Validate a Token
     *
     * This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenInfoTest() throws ApiException {
        String accessToken = null;
        InlineResponse200 response = api.getTokenInfo(accessToken);

        // TODO: test validations
    }
    
    /**
     * Revoke Access Token
     *
     * This API is part of the 3-legged OAuth 2.0 authorization flow.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void revokeAccessTokenTest() throws ApiException {
        GrantRequestRevoke grantRequestRevoke = null;
        String accessToken = null;
        api.revokeAccessToken(grantRequestRevoke, accessToken);

        // TODO: test validations
    }
    
}
