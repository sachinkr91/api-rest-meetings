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

import com.bluejeans.api.rest.meetings.ApiCallback;
import com.bluejeans.api.rest.meetings.ApiClient;
import com.bluejeans.api.rest.meetings.ApiException;
import com.bluejeans.api.rest.meetings.ApiResponse;
import com.bluejeans.api.rest.meetings.Configuration;
import com.bluejeans.api.rest.meetings.Pair;
import com.bluejeans.api.rest.meetings.ProgressRequestBody;
import com.bluejeans.api.rest.meetings.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import com.bluejeans.api.rest.meetings.model.EnterpriseCreateUser;
import com.bluejeans.api.rest.meetings.model.EnterpriseUserSearch;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.TagListComp;
import com.bluejeans.api.rest.meetings.model.UserId;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class EnterpriseApi {
    private ApiClient apiClient;

    public EnterpriseApi() {
        this(Configuration.getDefaultApiClient());
    }

    public EnterpriseApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for changeEnterpriseTags
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param action Type of operation to be done (required)
     * @param tag The name of tag (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call changeEnterpriseTagsCall(Integer enterpriseId, String action, String tag, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterpriseId}/tags"
            .replaceAll("\\{" + "enterpriseId" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (action != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "action", action));
        if (tag != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "tag", tag));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "PUT", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call changeEnterpriseTagsValidateBeforeCall(Integer enterpriseId, String action, String tag, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling changeEnterpriseTags(Async)");
        }
        
        // verify the required parameter 'action' is set
        if (action == null) {
            throw new ApiException("Missing the required parameter 'action' when calling changeEnterpriseTags(Async)");
        }
        
        // verify the required parameter 'tag' is set
        if (tag == null) {
            throw new ApiException("Missing the required parameter 'tag' when calling changeEnterpriseTags(Async)");
        }
        
        
        com.squareup.okhttp.Call call = changeEnterpriseTagsCall(enterpriseId, action, tag, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Set Enterprise Tags
     * This endpoint modifies the list of profile tags associated with the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param action Type of operation to be done (required)
     * @param tag The name of tag (required)
     * @return TagListComp
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public TagListComp changeEnterpriseTags(Integer enterpriseId, String action, String tag) throws ApiException {
        ApiResponse<TagListComp> resp = changeEnterpriseTagsWithHttpInfo(enterpriseId, action, tag);
        return resp.getData();
    }

    /**
     * Set Enterprise Tags
     * This endpoint modifies the list of profile tags associated with the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param action Type of operation to be done (required)
     * @param tag The name of tag (required)
     * @return ApiResponse&lt;TagListComp&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<TagListComp> changeEnterpriseTagsWithHttpInfo(Integer enterpriseId, String action, String tag) throws ApiException {
        com.squareup.okhttp.Call call = changeEnterpriseTagsValidateBeforeCall(enterpriseId, action, tag, null, null);
        Type localVarReturnType = new TypeToken<TagListComp>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Set Enterprise Tags (asynchronously)
     * This endpoint modifies the list of profile tags associated with the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param action Type of operation to be done (required)
     * @param tag The name of tag (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call changeEnterpriseTagsAsync(Integer enterpriseId, String action, String tag, final ApiCallback<TagListComp> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = changeEnterpriseTagsValidateBeforeCall(enterpriseId, action, tag, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<TagListComp>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for createEnterpriseUser
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param enterpriseUser Basic Enterprise Account information (required)
     * @param billingCategory What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param forcePasswordChange Create profile and force user to change password on next login (optional)
     * @param isAdmin Create this account to have Administrative Privileges for the enterprise (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call createEnterpriseUserCall(Integer enterpriseId, EnterpriseCreateUser enterpriseUser, String billingCategory, Boolean forcePasswordChange, Boolean isAdmin, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = enterpriseUser;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterpriseId}/users"
            .replaceAll("\\{" + "enterpriseId" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (billingCategory != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "billingCategory", billingCategory));
        if (forcePasswordChange != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "forcePasswordChange", forcePasswordChange));
        if (isAdmin != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "isAdmin", isAdmin));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call createEnterpriseUserValidateBeforeCall(Integer enterpriseId, EnterpriseCreateUser enterpriseUser, String billingCategory, Boolean forcePasswordChange, Boolean isAdmin, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling createEnterpriseUser(Async)");
        }
        
        // verify the required parameter 'enterpriseUser' is set
        if (enterpriseUser == null) {
            throw new ApiException("Missing the required parameter 'enterpriseUser' when calling createEnterpriseUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = createEnterpriseUserCall(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Create User
     * This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user&#39;s personal meeting room.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param enterpriseUser Basic Enterprise Account information (required)
     * @param billingCategory What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param forcePasswordChange Create profile and force user to change password on next login (optional)
     * @param isAdmin Create this account to have Administrative Privileges for the enterprise (optional)
     * @return UserId
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public UserId createEnterpriseUser(Integer enterpriseId, EnterpriseCreateUser enterpriseUser, String billingCategory, Boolean forcePasswordChange, Boolean isAdmin) throws ApiException {
        ApiResponse<UserId> resp = createEnterpriseUserWithHttpInfo(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin);
        return resp.getData();
    }

    /**
     * Create User
     * This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user&#39;s personal meeting room.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param enterpriseUser Basic Enterprise Account information (required)
     * @param billingCategory What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param forcePasswordChange Create profile and force user to change password on next login (optional)
     * @param isAdmin Create this account to have Administrative Privileges for the enterprise (optional)
     * @return ApiResponse&lt;UserId&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<UserId> createEnterpriseUserWithHttpInfo(Integer enterpriseId, EnterpriseCreateUser enterpriseUser, String billingCategory, Boolean forcePasswordChange, Boolean isAdmin) throws ApiException {
        com.squareup.okhttp.Call call = createEnterpriseUserValidateBeforeCall(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin, null, null);
        Type localVarReturnType = new TypeToken<UserId>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Create User (asynchronously)
     * This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user&#39;s personal meeting room.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param enterpriseUser Basic Enterprise Account information (required)
     * @param billingCategory What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param forcePasswordChange Create profile and force user to change password on next login (optional)
     * @param isAdmin Create this account to have Administrative Privileges for the enterprise (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call createEnterpriseUserAsync(Integer enterpriseId, EnterpriseCreateUser enterpriseUser, String billingCategory, Boolean forcePasswordChange, Boolean isAdmin, final ApiCallback<UserId> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = createEnterpriseUserValidateBeforeCall(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<UserId>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for exportUsers
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call exportUsersCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users/export"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "text/csv"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call exportUsersValidateBeforeCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling exportUsers(Async)");
        }
        
        
        com.squareup.okhttp.Call call = exportUsersCall(enterpriseId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Export Enterprise Users
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void exportUsers(Integer enterpriseId) throws ApiException {
        exportUsersWithHttpInfo(enterpriseId);
    }

    /**
     * Export Enterprise Users
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> exportUsersWithHttpInfo(Integer enterpriseId) throws ApiException {
        com.squareup.okhttp.Call call = exportUsersValidateBeforeCall(enterpriseId, null, null);
        return apiClient.execute(call);
    }

    /**
     * Export Enterprise Users (asynchronously)
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call exportUsersAsync(Integer enterpriseId, final ApiCallback<Void> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = exportUsersValidateBeforeCall(enterpriseId, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for getEnterpriseTags
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseTagsCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterpriseId}/tags"
            .replaceAll("\\{" + "enterpriseId" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getEnterpriseTagsValidateBeforeCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getEnterpriseTags(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getEnterpriseTagsCall(enterpriseId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Enterprise Tags
     * This endpoint retrieves all profile tags defined for the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return TagListComp
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public TagListComp getEnterpriseTags(Integer enterpriseId) throws ApiException {
        ApiResponse<TagListComp> resp = getEnterpriseTagsWithHttpInfo(enterpriseId);
        return resp.getData();
    }

    /**
     * List Enterprise Tags
     * This endpoint retrieves all profile tags defined for the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return ApiResponse&lt;TagListComp&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<TagListComp> getEnterpriseTagsWithHttpInfo(Integer enterpriseId) throws ApiException {
        com.squareup.okhttp.Call call = getEnterpriseTagsValidateBeforeCall(enterpriseId, null, null);
        Type localVarReturnType = new TypeToken<TagListComp>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Enterprise Tags (asynchronously)
     * This endpoint retrieves all profile tags defined for the specified enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseTagsAsync(Integer enterpriseId, final ApiCallback<TagListComp> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = getEnterpriseTagsValidateBeforeCall(enterpriseId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<TagListComp>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for removeUser
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call removeUserCall(Integer enterpriseId, Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users/{user_id}"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()))
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "DELETE", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call removeUserValidateBeforeCall(Integer enterpriseId, Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling removeUser(Async)");
        }
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling removeUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = removeUserCall(enterpriseId, userId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Remove Enterprise User
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void removeUser(Integer enterpriseId, Integer userId) throws ApiException {
        removeUserWithHttpInfo(enterpriseId, userId);
    }

    /**
     * Remove Enterprise User
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> removeUserWithHttpInfo(Integer enterpriseId, Integer userId) throws ApiException {
        com.squareup.okhttp.Call call = removeUserValidateBeforeCall(enterpriseId, userId, null, null);
        return apiClient.execute(call);
    }

    /**
     * Remove Enterprise User (asynchronously)
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call removeUserAsync(Integer enterpriseId, Integer userId, final ApiCallback<Void> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = removeUserValidateBeforeCall(enterpriseId, userId, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for searchUsers
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param sortBy Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param textSearch If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param emailId If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return (1-based value) (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call searchUsersCall(Integer enterpriseId, String fields, String order, String sortBy, String textSearch, String emailId, Integer pageSize, Integer pageNumber, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterpriseId}/users"
            .replaceAll("\\{" + "enterpriseId" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (fields != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "fields", fields));
        if (order != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "order", order));
        if (sortBy != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "sortBy", sortBy));
        if (textSearch != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "textSearch", textSearch));
        if (emailId != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "emailId", emailId));
        if (pageSize != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "pageSize", pageSize));
        if (pageNumber != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "pageNumber", pageNumber));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call searchUsersValidateBeforeCall(Integer enterpriseId, String fields, String order, String sortBy, String textSearch, String emailId, Integer pageSize, Integer pageNumber, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling searchUsers(Async)");
        }
        
        
        com.squareup.okhttp.Call call = searchUsersCall(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Search for User(s)
     * This endpoint provides a search facility for the specified enterprise.  &lt;ul&gt;&lt;li&gt;If textSearch is provided, the results will be a partial string-match search of the given textSearch value.&lt;/li&gt;&lt;li&gt; Otherwise, the search will return an exact lookup by emailId.&lt;/li&gt;&lt;/ul&gt;
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param sortBy Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param textSearch If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param emailId If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return (1-based value) (optional)
     * @return EnterpriseUserSearch
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public EnterpriseUserSearch searchUsers(Integer enterpriseId, String fields, String order, String sortBy, String textSearch, String emailId, Integer pageSize, Integer pageNumber) throws ApiException {
        ApiResponse<EnterpriseUserSearch> resp = searchUsersWithHttpInfo(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber);
        return resp.getData();
    }

    /**
     * Search for User(s)
     * This endpoint provides a search facility for the specified enterprise.  &lt;ul&gt;&lt;li&gt;If textSearch is provided, the results will be a partial string-match search of the given textSearch value.&lt;/li&gt;&lt;li&gt; Otherwise, the search will return an exact lookup by emailId.&lt;/li&gt;&lt;/ul&gt;
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param sortBy Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param textSearch If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param emailId If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return (1-based value) (optional)
     * @return ApiResponse&lt;EnterpriseUserSearch&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<EnterpriseUserSearch> searchUsersWithHttpInfo(Integer enterpriseId, String fields, String order, String sortBy, String textSearch, String emailId, Integer pageSize, Integer pageNumber) throws ApiException {
        com.squareup.okhttp.Call call = searchUsersValidateBeforeCall(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber, null, null);
        Type localVarReturnType = new TypeToken<EnterpriseUserSearch>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Search for User(s) (asynchronously)
     * This endpoint provides a search facility for the specified enterprise.  &lt;ul&gt;&lt;li&gt;If textSearch is provided, the results will be a partial string-match search of the given textSearch value.&lt;/li&gt;&lt;li&gt; Otherwise, the search will return an exact lookup by emailId.&lt;/li&gt;&lt;/ul&gt;
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param sortBy Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param textSearch If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param emailId If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return (1-based value) (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call searchUsersAsync(Integer enterpriseId, String fields, String order, String sortBy, String textSearch, String emailId, Integer pageSize, Integer pageNumber, final ApiCallback<EnterpriseUserSearch> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = searchUsersValidateBeforeCall(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<EnterpriseUserSearch>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
