/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
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


import com.bluejeans.api.rest.meetings.model.ComponentsrecordingMoved;
import com.bluejeans.api.rest.meetings.model.Content;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.Meeting;
import com.bluejeans.api.rest.meetings.model.MeetingSharing;
import com.bluejeans.api.rest.meetings.model.ModifySharing;
import com.bluejeans.api.rest.meetings.model.RecordingHistoryList;
import com.bluejeans.api.rest.meetings.model.SetSharing;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class RecordingApi {
    private ApiClient apiClient;

    public RecordingApi() {
        this(Configuration.getDefaultApiClient());
    }

    public RecordingApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for createShareRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param setSharing  (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call createShareRecordingsCall(Integer userId, String meetingGuid, SetSharing setSharing, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = setSharing;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meetingGuid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

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
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call createShareRecordingsValidateBeforeCall(Integer userId, String meetingGuid, SetSharing setSharing, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling createShareRecordings(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling createShareRecordings(Async)");
        }
        
        // verify the required parameter 'setSharing' is set
        if (setSharing == null) {
            throw new ApiException("Missing the required parameter 'setSharing' when calling createShareRecordings(Async)");
        }
        
        
        com.squareup.okhttp.Call call = createShareRecordingsCall(userId, meetingGuid, setSharing, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Enable Recording Sharing
     * This endpoint creates a sharing authorization record for the specified meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param setSharing  (required)
     * @return MeetingSharing
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingSharing createShareRecordings(Integer userId, String meetingGuid, SetSharing setSharing) throws ApiException {
        ApiResponse<MeetingSharing> resp = createShareRecordingsWithHttpInfo(userId, meetingGuid, setSharing);
        return resp.getData();
    }

    /**
     * Enable Recording Sharing
     * This endpoint creates a sharing authorization record for the specified meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param setSharing  (required)
     * @return ApiResponse&lt;MeetingSharing&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingSharing> createShareRecordingsWithHttpInfo(Integer userId, String meetingGuid, SetSharing setSharing) throws ApiException {
        com.squareup.okhttp.Call call = createShareRecordingsValidateBeforeCall(userId, meetingGuid, setSharing, null, null);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Enable Recording Sharing (asynchronously)
     * This endpoint creates a sharing authorization record for the specified meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param setSharing  (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call createShareRecordingsAsync(Integer userId, String meetingGuid, SetSharing setSharing, final ApiCallback<MeetingSharing> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = createShareRecordingsValidateBeforeCall(userId, meetingGuid, setSharing, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for deleteAllRecordingsByMeetingGuid
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call deleteAllRecordingsByMeetingGuidCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_guid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

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
    private com.squareup.okhttp.Call deleteAllRecordingsByMeetingGuidValidateBeforeCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling deleteAllRecordingsByMeetingGuid(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling deleteAllRecordingsByMeetingGuid(Async)");
        }
        
        
        com.squareup.okhttp.Call call = deleteAllRecordingsByMeetingGuidCall(userId, meetingGuid, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Delete All Recordings for a Specified Meeting GUID
     * This endpoint stops recording for a meeting in progress. 
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return Meeting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Meeting deleteAllRecordingsByMeetingGuid(Integer userId, String meetingGuid) throws ApiException {
        ApiResponse<Meeting> resp = deleteAllRecordingsByMeetingGuidWithHttpInfo(userId, meetingGuid);
        return resp.getData();
    }

    /**
     * Delete All Recordings for a Specified Meeting GUID
     * This endpoint stops recording for a meeting in progress. 
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @return ApiResponse&lt;Meeting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Meeting> deleteAllRecordingsByMeetingGuidWithHttpInfo(Integer userId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = deleteAllRecordingsByMeetingGuidValidateBeforeCall(userId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<Meeting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Delete All Recordings for a Specified Meeting GUID (asynchronously)
     * This endpoint stops recording for a meeting in progress. 
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call deleteAllRecordingsByMeetingGuidAsync(Integer userId, String meetingGuid, final ApiCallback<Meeting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = deleteAllRecordingsByMeetingGuidValidateBeforeCall(userId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Meeting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for deleteRecordingChapter
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param recordingChapterId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call deleteRecordingChapterCall(Integer userId, Integer meetingId, Integer recordingChapterId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_id" + "\\}", apiClient.escapeString(meetingId.toString()))
            .replaceAll("\\{" + "recording_chapter_id" + "\\}", apiClient.escapeString(recordingChapterId.toString()));

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
    private com.squareup.okhttp.Call deleteRecordingChapterValidateBeforeCall(Integer userId, Integer meetingId, Integer recordingChapterId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling deleteRecordingChapter(Async)");
        }
        
        // verify the required parameter 'meetingId' is set
        if (meetingId == null) {
            throw new ApiException("Missing the required parameter 'meetingId' when calling deleteRecordingChapter(Async)");
        }
        
        // verify the required parameter 'recordingChapterId' is set
        if (recordingChapterId == null) {
            throw new ApiException("Missing the required parameter 'recordingChapterId' when calling deleteRecordingChapter(Async)");
        }
        
        
        com.squareup.okhttp.Call call = deleteRecordingChapterCall(userId, meetingId, recordingChapterId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Delete a Specified Recording Chapter
     * This endpoint stops recording for a meeting in progress.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param recordingChapterId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @return Meeting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Meeting deleteRecordingChapter(Integer userId, Integer meetingId, Integer recordingChapterId) throws ApiException {
        ApiResponse<Meeting> resp = deleteRecordingChapterWithHttpInfo(userId, meetingId, recordingChapterId);
        return resp.getData();
    }

    /**
     * Delete a Specified Recording Chapter
     * This endpoint stops recording for a meeting in progress.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param recordingChapterId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @return ApiResponse&lt;Meeting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Meeting> deleteRecordingChapterWithHttpInfo(Integer userId, Integer meetingId, Integer recordingChapterId) throws ApiException {
        com.squareup.okhttp.Call call = deleteRecordingChapterValidateBeforeCall(userId, meetingId, recordingChapterId, null, null);
        Type localVarReturnType = new TypeToken<Meeting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Delete a Specified Recording Chapter (asynchronously)
     * This endpoint stops recording for a meeting in progress.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param recordingChapterId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call deleteRecordingChapterAsync(Integer userId, Integer meetingId, Integer recordingChapterId, final ApiCallback<Meeting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = deleteRecordingChapterValidateBeforeCall(userId, meetingId, recordingChapterId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Meeting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for deleteShareRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call deleteShareRecordingsCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meetingGuid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

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
    private com.squareup.okhttp.Call deleteShareRecordingsValidateBeforeCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling deleteShareRecordings(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling deleteShareRecordings(Async)");
        }
        
        
        com.squareup.okhttp.Call call = deleteShareRecordingsCall(userId, meetingGuid, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Delete Recording Sharing
     * This endpoint deletes the sharing authorization associated with a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void deleteShareRecordings(Integer userId, String meetingGuid) throws ApiException {
        deleteShareRecordingsWithHttpInfo(userId, meetingGuid);
    }

    /**
     * Delete Recording Sharing
     * This endpoint deletes the sharing authorization associated with a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> deleteShareRecordingsWithHttpInfo(Integer userId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = deleteShareRecordingsValidateBeforeCall(userId, meetingGuid, null, null);
        return apiClient.execute(call);
    }

    /**
     * Delete Recording Sharing (asynchronously)
     * This endpoint deletes the sharing authorization associated with a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call deleteShareRecordingsAsync(Integer userId, String meetingGuid, final ApiCallback<Void> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = deleteShareRecordingsValidateBeforeCall(userId, meetingGuid, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for getMeetingRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingRecordingsCall(Integer userId, Integer meetingId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_id" + "\\}", apiClient.escapeString(meetingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (meetingGuid != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "meetingGuid", meetingGuid));

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
    private com.squareup.okhttp.Call getMeetingRecordingsValidateBeforeCall(Integer userId, Integer meetingId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getMeetingRecordings(Async)");
        }
        
        // verify the required parameter 'meetingId' is set
        if (meetingId == null) {
            throw new ApiException("Missing the required parameter 'meetingId' when calling getMeetingRecordings(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingRecordingsCall(userId, meetingId, meetingGuid, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Get All Recordings for a Specified Meeting ID
     * This endpoint lists the recordings for a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @return RecordingHistoryList
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public RecordingHistoryList getMeetingRecordings(Integer userId, Integer meetingId, String meetingGuid) throws ApiException {
        ApiResponse<RecordingHistoryList> resp = getMeetingRecordingsWithHttpInfo(userId, meetingId, meetingGuid);
        return resp.getData();
    }

    /**
     * Get All Recordings for a Specified Meeting ID
     * This endpoint lists the recordings for a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @return ApiResponse&lt;RecordingHistoryList&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<RecordingHistoryList> getMeetingRecordingsWithHttpInfo(Integer userId, Integer meetingId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingRecordingsValidateBeforeCall(userId, meetingId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<RecordingHistoryList>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get All Recordings for a Specified Meeting ID (asynchronously)
     * This endpoint lists the recordings for a meeting.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingRecordingsAsync(Integer userId, Integer meetingId, String meetingGuid, final ApiCallback<RecordingHistoryList> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingRecordingsValidateBeforeCall(userId, meetingId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<RecordingHistoryList>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getRecordingContent
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param contentId The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param isDownloadable Set to true. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getRecordingContentCall(Integer userId, Integer contentId, Boolean isDownloadable, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/cms/{content_id}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "content_id" + "\\}", apiClient.escapeString(contentId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (isDownloadable != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "isDownloadable", isDownloadable));

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
    private com.squareup.okhttp.Call getRecordingContentValidateBeforeCall(Integer userId, Integer contentId, Boolean isDownloadable, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getRecordingContent(Async)");
        }
        
        // verify the required parameter 'contentId' is set
        if (contentId == null) {
            throw new ApiException("Missing the required parameter 'contentId' when calling getRecordingContent(Async)");
        }
        
        // verify the required parameter 'isDownloadable' is set
        if (isDownloadable == null) {
            throw new ApiException("Missing the required parameter 'isDownloadable' when calling getRecordingContent(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getRecordingContentCall(userId, contentId, isDownloadable, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Get Recording Download Link
     * This endpoint retrieves properties about the recording chapter.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param contentId The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param isDownloadable Set to true. (required)
     * @return Content
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Content getRecordingContent(Integer userId, Integer contentId, Boolean isDownloadable) throws ApiException {
        ApiResponse<Content> resp = getRecordingContentWithHttpInfo(userId, contentId, isDownloadable);
        return resp.getData();
    }

    /**
     * Get Recording Download Link
     * This endpoint retrieves properties about the recording chapter.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param contentId The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param isDownloadable Set to true. (required)
     * @return ApiResponse&lt;Content&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Content> getRecordingContentWithHttpInfo(Integer userId, Integer contentId, Boolean isDownloadable) throws ApiException {
        com.squareup.okhttp.Call call = getRecordingContentValidateBeforeCall(userId, contentId, isDownloadable, null, null);
        Type localVarReturnType = new TypeToken<Content>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Recording Download Link (asynchronously)
     * This endpoint retrieves properties about the recording chapter.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param contentId The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param isDownloadable Set to true. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getRecordingContentAsync(Integer userId, Integer contentId, Boolean isDownloadable, final ApiCallback<Content> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getRecordingContentValidateBeforeCall(userId, contentId, isDownloadable, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Content>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getShareRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getShareRecordingsCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meetingGuid" + "\\}", apiClient.escapeString(meetingGuid.toString()));

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
    private com.squareup.okhttp.Call getShareRecordingsValidateBeforeCall(Integer userId, String meetingGuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getShareRecordings(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling getShareRecordings(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getShareRecordingsCall(userId, meetingGuid, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Recording Sharing
     * This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @return MeetingSharing
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingSharing getShareRecordings(Integer userId, String meetingGuid) throws ApiException {
        ApiResponse<MeetingSharing> resp = getShareRecordingsWithHttpInfo(userId, meetingGuid);
        return resp.getData();
    }

    /**
     * List Recording Sharing
     * This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @return ApiResponse&lt;MeetingSharing&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingSharing> getShareRecordingsWithHttpInfo(Integer userId, String meetingGuid) throws ApiException {
        com.squareup.okhttp.Call call = getShareRecordingsValidateBeforeCall(userId, meetingGuid, null, null);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Recording Sharing (asynchronously)
     * This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getShareRecordingsAsync(Integer userId, String meetingGuid, final ApiCallback<MeetingSharing> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getShareRecordingsValidateBeforeCall(userId, meetingGuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for modifyShareRecordings
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param sharingId The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param modifySharing  (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call modifyShareRecordingsCall(Integer userId, String meetingGuid, String sharingId, ModifySharing modifySharing, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = modifySharing;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meetingGuid" + "\\}", apiClient.escapeString(meetingGuid.toString()))
            .replaceAll("\\{" + "sharingId" + "\\}", apiClient.escapeString(sharingId.toString()));

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
        return apiClient.buildCall(localVarPath, "PUT", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call modifyShareRecordingsValidateBeforeCall(Integer userId, String meetingGuid, String sharingId, ModifySharing modifySharing, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling modifyShareRecordings(Async)");
        }
        
        // verify the required parameter 'meetingGuid' is set
        if (meetingGuid == null) {
            throw new ApiException("Missing the required parameter 'meetingGuid' when calling modifyShareRecordings(Async)");
        }
        
        // verify the required parameter 'sharingId' is set
        if (sharingId == null) {
            throw new ApiException("Missing the required parameter 'sharingId' when calling modifyShareRecordings(Async)");
        }
        
        // verify the required parameter 'modifySharing' is set
        if (modifySharing == null) {
            throw new ApiException("Missing the required parameter 'modifySharing' when calling modifyShareRecordings(Async)");
        }
        
        
        com.squareup.okhttp.Call call = modifyShareRecordingsCall(userId, meetingGuid, sharingId, modifySharing, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Modify Recording Sharing
     * This endpoint modifieds the sharing authorization attributes for a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param sharingId The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param modifySharing  (required)
     * @return MeetingSharing
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingSharing modifyShareRecordings(Integer userId, String meetingGuid, String sharingId, ModifySharing modifySharing) throws ApiException {
        ApiResponse<MeetingSharing> resp = modifyShareRecordingsWithHttpInfo(userId, meetingGuid, sharingId, modifySharing);
        return resp.getData();
    }

    /**
     * Modify Recording Sharing
     * This endpoint modifieds the sharing authorization attributes for a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param sharingId The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param modifySharing  (required)
     * @return ApiResponse&lt;MeetingSharing&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingSharing> modifyShareRecordingsWithHttpInfo(Integer userId, String meetingGuid, String sharingId, ModifySharing modifySharing) throws ApiException {
        com.squareup.okhttp.Call call = modifyShareRecordingsValidateBeforeCall(userId, meetingGuid, sharingId, modifySharing, null, null);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Modify Recording Sharing (asynchronously)
     * This endpoint modifieds the sharing authorization attributes for a meeting recording.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingGuid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param sharingId The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param modifySharing  (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call modifyShareRecordingsAsync(Integer userId, String meetingGuid, String sharingId, ModifySharing modifySharing, final ApiCallback<MeetingSharing> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = modifyShareRecordingsValidateBeforeCall(userId, meetingGuid, sharingId, modifySharing, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingSharing>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for moveRecordingOwner
     * @param userId The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param originalOwner The ID of the recording&#39;s current owner. (required)
     * @param newOwner The ID of the intended owner for the recording. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call moveRecordingOwnerCall(Integer userId, Integer originalOwner, Integer newOwner, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "originalOwner" + "\\}", apiClient.escapeString(originalOwner.toString()))
            .replaceAll("\\{" + "newOwner" + "\\}", apiClient.escapeString(newOwner.toString()));

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
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call moveRecordingOwnerValidateBeforeCall(Integer userId, Integer originalOwner, Integer newOwner, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling moveRecordingOwner(Async)");
        }
        
        // verify the required parameter 'originalOwner' is set
        if (originalOwner == null) {
            throw new ApiException("Missing the required parameter 'originalOwner' when calling moveRecordingOwner(Async)");
        }
        
        // verify the required parameter 'newOwner' is set
        if (newOwner == null) {
            throw new ApiException("Missing the required parameter 'newOwner' when calling moveRecordingOwner(Async)");
        }
        
        
        com.squareup.okhttp.Call call = moveRecordingOwnerCall(userId, originalOwner, newOwner, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Move Recording Ownership
     * This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
     * @param userId The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param originalOwner The ID of the recording&#39;s current owner. (required)
     * @param newOwner The ID of the intended owner for the recording. (required)
     * @return ComponentsrecordingMoved
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ComponentsrecordingMoved moveRecordingOwner(Integer userId, Integer originalOwner, Integer newOwner) throws ApiException {
        ApiResponse<ComponentsrecordingMoved> resp = moveRecordingOwnerWithHttpInfo(userId, originalOwner, newOwner);
        return resp.getData();
    }

    /**
     * Move Recording Ownership
     * This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
     * @param userId The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param originalOwner The ID of the recording&#39;s current owner. (required)
     * @param newOwner The ID of the intended owner for the recording. (required)
     * @return ApiResponse&lt;ComponentsrecordingMoved&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<ComponentsrecordingMoved> moveRecordingOwnerWithHttpInfo(Integer userId, Integer originalOwner, Integer newOwner) throws ApiException {
        com.squareup.okhttp.Call call = moveRecordingOwnerValidateBeforeCall(userId, originalOwner, newOwner, null, null);
        Type localVarReturnType = new TypeToken<ComponentsrecordingMoved>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Move Recording Ownership (asynchronously)
     * This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
     * @param userId The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param originalOwner The ID of the recording&#39;s current owner. (required)
     * @param newOwner The ID of the intended owner for the recording. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call moveRecordingOwnerAsync(Integer userId, Integer originalOwner, Integer newOwner, final ApiCallback<ComponentsrecordingMoved> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = moveRecordingOwnerValidateBeforeCall(userId, originalOwner, newOwner, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<ComponentsrecordingMoved>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for startRecording
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call startRecordingCall(Integer userId, Integer meetingId, String action, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_id" + "\\}", apiClient.escapeString(meetingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (action != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "action", action));

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
    private com.squareup.okhttp.Call startRecordingValidateBeforeCall(Integer userId, Integer meetingId, String action, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling startRecording(Async)");
        }
        
        // verify the required parameter 'meetingId' is set
        if (meetingId == null) {
            throw new ApiException("Missing the required parameter 'meetingId' when calling startRecording(Async)");
        }
        
        // verify the required parameter 'action' is set
        if (action == null) {
            throw new ApiException("Missing the required parameter 'action' when calling startRecording(Async)");
        }
        
        
        com.squareup.okhttp.Call call = startRecordingCall(userId, meetingId, action, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Start Recording
     * This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void startRecording(Integer userId, Integer meetingId, String action) throws ApiException {
        startRecordingWithHttpInfo(userId, meetingId, action);
    }

    /**
     * Start Recording
     * This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> startRecordingWithHttpInfo(Integer userId, Integer meetingId, String action) throws ApiException {
        com.squareup.okhttp.Call call = startRecordingValidateBeforeCall(userId, meetingId, action, null, null);
        return apiClient.execute(call);
    }

    /**
     * Start Recording (asynchronously)
     * This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call startRecordingAsync(Integer userId, Integer meetingId, String action, final ApiCallback<Void> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = startRecordingValidateBeforeCall(userId, meetingId, action, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for stopRecording
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call stopRecordingCall(Integer userId, Integer meetingId, String action, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_id" + "\\}", apiClient.escapeString(meetingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (action != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "action", action));

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
    private com.squareup.okhttp.Call stopRecordingValidateBeforeCall(Integer userId, Integer meetingId, String action, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling stopRecording(Async)");
        }
        
        // verify the required parameter 'meetingId' is set
        if (meetingId == null) {
            throw new ApiException("Missing the required parameter 'meetingId' when calling stopRecording(Async)");
        }
        
        // verify the required parameter 'action' is set
        if (action == null) {
            throw new ApiException("Missing the required parameter 'action' when calling stopRecording(Async)");
        }
        
        
        com.squareup.okhttp.Call call = stopRecordingCall(userId, meetingId, action, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Stop Recording
     * This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void stopRecording(Integer userId, Integer meetingId, String action) throws ApiException {
        stopRecordingWithHttpInfo(userId, meetingId, action);
    }

    /**
     * Stop Recording
     * This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> stopRecordingWithHttpInfo(Integer userId, Integer meetingId, String action) throws ApiException {
        com.squareup.okhttp.Call call = stopRecordingValidateBeforeCall(userId, meetingId, action, null, null);
        return apiClient.execute(call);
    }

    /**
     * Stop Recording (asynchronously)
     * This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingId The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call stopRecordingAsync(Integer userId, Integer meetingId, String action, final ApiCallback<Void> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = stopRecordingValidateBeforeCall(userId, meetingId, action, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
}
