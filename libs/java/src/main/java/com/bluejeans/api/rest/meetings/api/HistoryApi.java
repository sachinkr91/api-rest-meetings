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


import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.MeetingHistory;
import com.bluejeans.api.rest.meetings.model.MeetingHistorySharing;
import com.bluejeans.api.rest.meetings.model.Recording;
import com.bluejeans.api.rest.meetings.model.RecordingSummary;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class HistoryApi {
    private ApiClient apiClient;

    public HistoryApi() {
        this(Configuration.getDefaultApiClient());
    }

    public HistoryApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for getHistoryByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getHistoryByEnterpriseCall(Integer enterpriseId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()))
            .replaceAll("\\{" + "meeting_guid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getHistoryByEnterpriseValidateBeforeCall(Integer enterpriseId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getHistoryByEnterprise(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling getHistoryByEnterprise(Async)");
        }
        

        com.squareup.okhttp.Call call = getHistoryByEnterpriseCall(enterpriseId, meetingGuid, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Get Meeting History by Enterprise
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return MeetingHistory
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingHistory getHistoryByEnterprise(Integer enterpriseId, String meetingGuid) throws ApiException {
        ApiResponse<MeetingHistory> resp = getHistoryByEnterpriseWithHttpInfo(enterpriseId, meetingGuid);
        return resp.getData();
    }

    /**
     * Get Meeting History by Enterprise
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return ApiResponse&lt;MeetingHistory&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingHistory> getHistoryByEnterpriseWithHttpInfo(Integer enterpriseId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = getHistoryByEnterpriseValidateBeforeCall(enterpriseId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<MeetingHistory>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Meeting History by Enterprise (asynchronously)
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getHistoryByEnterpriseAsync(Integer enterpriseId, String meetingGuid, final ApiCallback<MeetingHistory> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getHistoryByEnterpriseValidateBeforeCall(enterpriseId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingHistory>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getHistoryByUser
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getHistoryByUserCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_guid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getHistoryByUserValidateBeforeCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getHistoryByUser(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling getHistoryByUser(Async)");
        }
        

        com.squareup.okhttp.Call call = getHistoryByUserCall(userId, meetingGuid, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Get Meeting History by User
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return MeetingHistory
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingHistory getHistoryByUser(Integer userId, String meetingGuid) throws ApiException {
        ApiResponse<MeetingHistory> resp = getHistoryByUserWithHttpInfo(userId, meetingGuid);
        return resp.getData();
    }

    /**
     * Get Meeting History by User
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return ApiResponse&lt;MeetingHistory&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingHistory> getHistoryByUserWithHttpInfo(Integer userId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = getHistoryByUserValidateBeforeCall(userId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<MeetingHistory>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Meeting History by User (asynchronously)
     * This endpoint retrieves the meeting history for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getHistoryByUserAsync(Integer userId, String meetingGuid, final ApiCallback<MeetingHistory> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getHistoryByUserValidateBeforeCall(userId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingHistory>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getHistorySharingByUser
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getHistorySharingByUserCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_guid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getHistorySharingByUserValidateBeforeCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getHistorySharingByUser(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling getHistorySharingByUser(Async)");
        }
        

        com.squareup.okhttp.Call call = getHistorySharingByUserCall(userId, meetingGuid, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Get Meeting History Sharing by User
     * This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return MeetingHistorySharing
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingHistorySharing getHistorySharingByUser(Integer userId, String meetingGuid) throws ApiException {
        ApiResponse<MeetingHistorySharing> resp = getHistorySharingByUserWithHttpInfo(userId, meetingGuid);
        return resp.getData();
    }

    /**
     * Get Meeting History Sharing by User
     * This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return ApiResponse&lt;MeetingHistorySharing&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingHistorySharing> getHistorySharingByUserWithHttpInfo(Integer userId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = getHistorySharingByUserValidateBeforeCall(userId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<MeetingHistorySharing>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Meeting History Sharing by User (asynchronously)
     * This endpoint retrieves the meeting history sharing for a specific instance of a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getHistorySharingByUserAsync(Integer userId, String meetingGuid, final ApiCallback<MeetingHistorySharing> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getHistorySharingByUserValidateBeforeCall(userId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingHistorySharing>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getRecording
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param recordingEntityId The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getRecordingCall(Integer userId, Integer recordingEntityId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "recording_entity_id" + "\\}", apiClient.escapeString(recordingEntityId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getRecordingValidateBeforeCall(Integer userId, Integer recordingEntityId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getRecording(Async)");
        }
        
        // verify the required parameter 'recordingEntityId' is set
        if (recordingEntityId == null) {
            throw new ApiException("Missing the required parameter 'recordingEntityId' when calling getRecording(Async)");
        }
        

        com.squareup.okhttp.Call call = getRecordingCall(userId, recordingEntityId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Get Recording
     * This endpoint retrieves the details about a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param recordingEntityId The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @return Recording
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Recording getRecording(Integer userId, Integer recordingEntityId) throws ApiException {
        ApiResponse<Recording> resp = getRecordingWithHttpInfo(userId, recordingEntityId);
        return resp.getData();
    }

    /**
     * Get Recording
     * This endpoint retrieves the details about a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param recordingEntityId The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @return ApiResponse&lt;Recording&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Recording> getRecordingWithHttpInfo(Integer userId, Integer recordingEntityId) throws ApiException {
        com.squareup.okhttp.Call call = getRecordingValidateBeforeCall(userId, recordingEntityId, null, null);
        Type localVarReturnType = new TypeToken<Recording>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Recording (asynchronously)
     * This endpoint retrieves the details about a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param recordingEntityId The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getRecordingAsync(Integer userId, Integer recordingEntityId, final ApiCallback<Recording> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getRecordingValidateBeforeCall(userId, recordingEntityId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Recording>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for listHistoryByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call listHistoryByEnterpriseCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/meeting_history"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call listHistoryByEnterpriseValidateBeforeCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling listHistoryByEnterprise(Async)");
        }
        

        com.squareup.okhttp.Call call = listHistoryByEnterpriseCall(enterpriseId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * List History by Enterprise
     * This endpoint retrieves a list of meeting histories by the given enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return List&lt;MeetingHistory&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public List<MeetingHistory> listHistoryByEnterprise(Integer enterpriseId) throws ApiException {
        ApiResponse<List<MeetingHistory>> resp = listHistoryByEnterpriseWithHttpInfo(enterpriseId);
        return resp.getData();
    }

    /**
     * List History by Enterprise
     * This endpoint retrieves a list of meeting histories by the given enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return ApiResponse&lt;List&lt;MeetingHistory&gt;&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<List<MeetingHistory>> listHistoryByEnterpriseWithHttpInfo(Integer enterpriseId) throws ApiException {
        com.squareup.okhttp.Call call = listHistoryByEnterpriseValidateBeforeCall(enterpriseId, null, null);
        Type localVarReturnType = new TypeToken<List<MeetingHistory>>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List History by Enterprise (asynchronously)
     * This endpoint retrieves a list of meeting histories by the given enterprise.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call listHistoryByEnterpriseAsync(Integer enterpriseId, final ApiCallback<List<MeetingHistory>> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = listHistoryByEnterpriseValidateBeforeCall(enterpriseId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<List<MeetingHistory>>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for listHistoryByUser
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId Return only meetings with the specified meeting numeric ID. (optional)
     * @param startDate Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param endDate Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param order Puts results in ascending or descending order. asc/desc (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call listHistoryByUserCall(Integer userId, String meetingId, String startDate, String endDate, Integer pageSize, Integer pageNumber, String order, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();
        if (meetingId != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("meetingId", meetingId));
        if (startDate != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("startDate", startDate));
        if (endDate != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("endDate", endDate));
        if (pageSize != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("pageSize", pageSize));
        if (pageNumber != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("pageNumber", pageNumber));
        if (order != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("order", order));

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call listHistoryByUserValidateBeforeCall(Integer userId, String meetingId, String startDate, String endDate, Integer pageSize, Integer pageNumber, String order, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling listHistoryByUser(Async)");
        }
        

        com.squareup.okhttp.Call call = listHistoryByUserCall(userId, meetingId, startDate, endDate, pageSize, pageNumber, order, progressListener, progressRequestListener);
        return call;

    }

    /**
     * List History by User
     * This endpoint retrieves a list of meeting histories by the given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId Return only meetings with the specified meeting numeric ID. (optional)
     * @param startDate Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param endDate Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param order Puts results in ascending or descending order. asc/desc (optional)
     * @return List&lt;MeetingHistory&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public List<MeetingHistory> listHistoryByUser(Integer userId, String meetingId, String startDate, String endDate, Integer pageSize, Integer pageNumber, String order) throws ApiException {
        ApiResponse<List<MeetingHistory>> resp = listHistoryByUserWithHttpInfo(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
        return resp.getData();
    }

    /**
     * List History by User
     * This endpoint retrieves a list of meeting histories by the given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId Return only meetings with the specified meeting numeric ID. (optional)
     * @param startDate Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param endDate Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param order Puts results in ascending or descending order. asc/desc (optional)
     * @return ApiResponse&lt;List&lt;MeetingHistory&gt;&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<List<MeetingHistory>> listHistoryByUserWithHttpInfo(Integer userId, String meetingId, String startDate, String endDate, Integer pageSize, Integer pageNumber, String order) throws ApiException {
        com.squareup.okhttp.Call call = listHistoryByUserValidateBeforeCall(userId, meetingId, startDate, endDate, pageSize, pageNumber, order, null, null);
        Type localVarReturnType = new TypeToken<List<MeetingHistory>>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List History by User (asynchronously)
     * This endpoint retrieves a list of meeting histories by the given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId Return only meetings with the specified meeting numeric ID. (optional)
     * @param startDate Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param endDate Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param order Puts results in ascending or descending order. asc/desc (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call listHistoryByUserAsync(Integer userId, String meetingId, String startDate, String endDate, Integer pageSize, Integer pageNumber, String order, final ApiCallback<List<MeetingHistory>> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = listHistoryByUserValidateBeforeCall(userId, meetingId, startDate, endDate, pageSize, pageNumber, order, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<List<MeetingHistory>>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for listRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional, default to 10)
     * @param pageNumber Selects which page of results to return. (optional, default to 1)
     * @param sortBy Selects which page of results to return. (optional, default to start_time)
     * @param order Puts results in ascending or descending order. (optional, default to desc)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call listRecordingsCall(Integer userId, Integer pageSize, Integer pageNumber, String sortBy, String order, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/recordings"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();
        if (pageSize != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("pageSize", pageSize));
        if (pageNumber != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("pageNumber", pageNumber));
        if (sortBy != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("sortBy", sortBy));
        if (order != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("order", order));

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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call listRecordingsValidateBeforeCall(Integer userId, Integer pageSize, Integer pageNumber, String sortBy, String order, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling listRecordings(Async)");
        }
        

        com.squareup.okhttp.Call call = listRecordingsCall(userId, pageSize, pageNumber, sortBy, order, progressListener, progressRequestListener);
        return call;

    }

    /**
     * List Meeting Recordings
     * This endpoint retrieves a list of meeting recordings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional, default to 10)
     * @param pageNumber Selects which page of results to return. (optional, default to 1)
     * @param sortBy Selects which page of results to return. (optional, default to start_time)
     * @param order Puts results in ascending or descending order. (optional, default to desc)
     * @return List&lt;RecordingSummary&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public List<RecordingSummary> listRecordings(Integer userId, Integer pageSize, Integer pageNumber, String sortBy, String order) throws ApiException {
        ApiResponse<List<RecordingSummary>> resp = listRecordingsWithHttpInfo(userId, pageSize, pageNumber, sortBy, order);
        return resp.getData();
    }

    /**
     * List Meeting Recordings
     * This endpoint retrieves a list of meeting recordings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional, default to 10)
     * @param pageNumber Selects which page of results to return. (optional, default to 1)
     * @param sortBy Selects which page of results to return. (optional, default to start_time)
     * @param order Puts results in ascending or descending order. (optional, default to desc)
     * @return ApiResponse&lt;List&lt;RecordingSummary&gt;&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<List<RecordingSummary>> listRecordingsWithHttpInfo(Integer userId, Integer pageSize, Integer pageNumber, String sortBy, String order) throws ApiException {
        com.squareup.okhttp.Call call = listRecordingsValidateBeforeCall(userId, pageSize, pageNumber, sortBy, order, null, null);
        Type localVarReturnType = new TypeToken<List<RecordingSummary>>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Meeting Recordings (asynchronously)
     * This endpoint retrieves a list of meeting recordings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional, default to 10)
     * @param pageNumber Selects which page of results to return. (optional, default to 1)
     * @param sortBy Selects which page of results to return. (optional, default to start_time)
     * @param order Puts results in ascending or descending order. (optional, default to desc)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call listRecordingsAsync(Integer userId, Integer pageSize, Integer pageNumber, String sortBy, String order, final ApiCallback<List<RecordingSummary>> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = listRecordingsValidateBeforeCall(userId, pageSize, pageNumber, sortBy, order, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<List<RecordingSummary>>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
