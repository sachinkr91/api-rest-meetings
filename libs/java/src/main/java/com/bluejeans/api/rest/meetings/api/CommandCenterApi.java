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

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class CommandCenterApi {
    private ApiClient apiClient;

    public CommandCenterApi() {
        this(Configuration.getDefaultApiClient());
    }

    public CommandCenterApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for getEndpointDistribution
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getEndpointDistributionCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));

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
    private com.squareup.okhttp.Call getEndpointDistributionValidateBeforeCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getEndpointDistribution(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getEndpointDistributionCall(enterpriseId, filter, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @return AnalyticsEndpointDistribution
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsEndpointDistribution getEndpointDistribution(Integer enterpriseId, String filter) throws ApiException {
        ApiResponse<AnalyticsEndpointDistribution> resp = getEndpointDistributionWithHttpInfo(enterpriseId, filter);
        return resp.getData();
    }

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @return ApiResponse&lt;AnalyticsEndpointDistribution&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsEndpointDistribution> getEndpointDistributionWithHttpInfo(Integer enterpriseId, String filter) throws ApiException {
        com.squareup.okhttp.Call call = getEndpointDistributionValidateBeforeCall(enterpriseId, filter, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsEndpointDistribution>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Endpoint Distribution (asynchronously)
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEndpointDistributionAsync(Integer enterpriseId, String filter, final ApiCallback<AnalyticsEndpointDistribution> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getEndpointDistributionValidateBeforeCall(enterpriseId, filter, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsEndpointDistribution>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getEndpointDistributionV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getEndpointDistributionV2Call(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getEndpointDistributionV2ValidateBeforeCall(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getEndpointDistributionV2(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getEndpointDistributionV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getEndpointDistributionV2Call(enterpriseId, filter, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsEndpointDistributionV2
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsEndpointDistributionV2 getEndpointDistributionV2(Integer enterpriseId, String filter, String appName) throws ApiException {
        ApiResponse<AnalyticsEndpointDistributionV2> resp = getEndpointDistributionV2WithHttpInfo(enterpriseId, filter, appName);
        return resp.getData();
    }

    /**
     * Endpoint Distribution
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsEndpointDistributionV2&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsEndpointDistributionV2> getEndpointDistributionV2WithHttpInfo(Integer enterpriseId, String filter, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getEndpointDistributionV2ValidateBeforeCall(enterpriseId, filter, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsEndpointDistributionV2>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Endpoint Distribution (asynchronously)
     * This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEndpointDistributionV2Async(Integer enterpriseId, String filter, String appName, final ApiCallback<AnalyticsEndpointDistributionV2> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getEndpointDistributionV2ValidateBeforeCall(enterpriseId, filter, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsEndpointDistributionV2>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getEnterpriseOverallSummary
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseOverallSummaryCall(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getEnterpriseOverallSummaryValidateBeforeCall(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getEnterpriseOverallSummary(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getEnterpriseOverallSummary(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getEnterpriseOverallSummaryCall(enterpriseId, filter, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Overall Enterprise Summary
     * This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return MeetingSummaryInfo
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingSummaryInfo getEnterpriseOverallSummary(Integer enterpriseId, String filter, String appName) throws ApiException {
        ApiResponse<MeetingSummaryInfo> resp = getEnterpriseOverallSummaryWithHttpInfo(enterpriseId, filter, appName);
        return resp.getData();
    }

    /**
     * Overall Enterprise Summary
     * This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;MeetingSummaryInfo&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingSummaryInfo> getEnterpriseOverallSummaryWithHttpInfo(Integer enterpriseId, String filter, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getEnterpriseOverallSummaryValidateBeforeCall(enterpriseId, filter, appName, null, null);
        Type localVarReturnType = new TypeToken<MeetingSummaryInfo>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Overall Enterprise Summary (asynchronously)
     * This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseOverallSummaryAsync(Integer enterpriseId, String filter, String appName, final ApiCallback<MeetingSummaryInfo> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getEnterpriseOverallSummaryValidateBeforeCall(enterpriseId, filter, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingSummaryInfo>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getEnterpriseUsersActive
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param clientTZ Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseUsersActiveCall(Integer enterpriseId, String filter, String clientTZ, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/users/active"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (clientTZ != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "clientTZ", clientTZ));
        if (limit != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "limit", limit));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getEnterpriseUsersActiveValidateBeforeCall(Integer enterpriseId, String filter, String clientTZ, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getEnterpriseUsersActive(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getEnterpriseUsersActive(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getEnterpriseUsersActiveCall(enterpriseId, filter, clientTZ, limit, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Enterprise User Summary
     * This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param clientTZ Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return EnterpriseUsersActive
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public EnterpriseUsersActive getEnterpriseUsersActive(Integer enterpriseId, String filter, String clientTZ, Integer limit, String appName) throws ApiException {
        ApiResponse<EnterpriseUsersActive> resp = getEnterpriseUsersActiveWithHttpInfo(enterpriseId, filter, clientTZ, limit, appName);
        return resp.getData();
    }

    /**
     * Enterprise User Summary
     * This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param clientTZ Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;EnterpriseUsersActive&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<EnterpriseUsersActive> getEnterpriseUsersActiveWithHttpInfo(Integer enterpriseId, String filter, String clientTZ, Integer limit, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getEnterpriseUsersActiveValidateBeforeCall(enterpriseId, filter, clientTZ, limit, appName, null, null);
        Type localVarReturnType = new TypeToken<EnterpriseUsersActive>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Enterprise User Summary (asynchronously)
     * This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param clientTZ Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseUsersActiveAsync(Integer enterpriseId, String filter, String clientTZ, Integer limit, String appName, final ApiCallback<EnterpriseUsersActive> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getEnterpriseUsersActiveValidateBeforeCall(enterpriseId, filter, clientTZ, limit, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<EnterpriseUsersActive>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getFeedbackComments
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCommentsCall(Integer enterpriseId, String start, String end, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (start != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "start", start));
        if (end != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "end", end));

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
    private com.squareup.okhttp.Call getFeedbackCommentsValidateBeforeCall(Integer enterpriseId, String start, String end, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getFeedbackComments(Async)");
        }
        
        // verify the required parameter 'start' is set
        if (start == null) {
            throw new ApiException("Missing the required parameter 'start' when calling getFeedbackComments(Async)");
        }
        
        // verify the required parameter 'end' is set
        if (end == null) {
            throw new ApiException("Missing the required parameter 'end' when calling getFeedbackComments(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getFeedbackCommentsCall(enterpriseId, start, end, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @return AnalyticsFeedbackComments
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsFeedbackComments getFeedbackComments(Integer enterpriseId, String start, String end) throws ApiException {
        ApiResponse<AnalyticsFeedbackComments> resp = getFeedbackCommentsWithHttpInfo(enterpriseId, start, end);
        return resp.getData();
    }

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @return ApiResponse&lt;AnalyticsFeedbackComments&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsFeedbackComments> getFeedbackCommentsWithHttpInfo(Integer enterpriseId, String start, String end) throws ApiException {
        com.squareup.okhttp.Call call = getFeedbackCommentsValidateBeforeCall(enterpriseId, start, end, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackComments>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Survey Feedback Comments (asynchronously)
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCommentsAsync(Integer enterpriseId, String start, String end, final ApiCallback<AnalyticsFeedbackComments> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getFeedbackCommentsValidateBeforeCall(enterpriseId, start, end, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackComments>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getFeedbackCommentsV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param limit The limit on the number of responses to return (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCommentsV2Call(Integer enterpriseId, String filter, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (limit != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "limit", limit));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getFeedbackCommentsV2ValidateBeforeCall(Integer enterpriseId, String filter, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getFeedbackCommentsV2(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getFeedbackCommentsV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getFeedbackCommentsV2Call(enterpriseId, filter, limit, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param limit The limit on the number of responses to return (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsFeedbackComments
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsFeedbackComments getFeedbackCommentsV2(Integer enterpriseId, String filter, Integer limit, String appName) throws ApiException {
        ApiResponse<AnalyticsFeedbackComments> resp = getFeedbackCommentsV2WithHttpInfo(enterpriseId, filter, limit, appName);
        return resp.getData();
    }

    /**
     * Survey Feedback Comments
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param limit The limit on the number of responses to return (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsFeedbackComments&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsFeedbackComments> getFeedbackCommentsV2WithHttpInfo(Integer enterpriseId, String filter, Integer limit, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getFeedbackCommentsV2ValidateBeforeCall(enterpriseId, filter, limit, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackComments>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Survey Feedback Comments (asynchronously)
     * This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param limit The limit on the number of responses to return (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCommentsV2Async(Integer enterpriseId, String filter, Integer limit, String appName, final ApiCallback<AnalyticsFeedbackComments> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getFeedbackCommentsV2ValidateBeforeCall(enterpriseId, filter, limit, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackComments>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getFeedbackCount
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCountCall(Integer enterpriseId, String start, String end, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/feedback/count"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (start != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "start", start));
        if (end != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "end", end));

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
    private com.squareup.okhttp.Call getFeedbackCountValidateBeforeCall(Integer enterpriseId, String start, String end, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getFeedbackCount(Async)");
        }
        
        // verify the required parameter 'start' is set
        if (start == null) {
            throw new ApiException("Missing the required parameter 'start' when calling getFeedbackCount(Async)");
        }
        
        // verify the required parameter 'end' is set
        if (end == null) {
            throw new ApiException("Missing the required parameter 'end' when calling getFeedbackCount(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getFeedbackCountCall(enterpriseId, start, end, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @return AnalyticsFeedbackScores
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsFeedbackScores getFeedbackCount(Integer enterpriseId, String start, String end) throws ApiException {
        ApiResponse<AnalyticsFeedbackScores> resp = getFeedbackCountWithHttpInfo(enterpriseId, start, end);
        return resp.getData();
    }

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @return ApiResponse&lt;AnalyticsFeedbackScores&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsFeedbackScores> getFeedbackCountWithHttpInfo(Integer enterpriseId, String start, String end) throws ApiException {
        com.squareup.okhttp.Call call = getFeedbackCountValidateBeforeCall(enterpriseId, start, end, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackScores>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Survey Feedback Scores (asynchronously)
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCountAsync(Integer enterpriseId, String start, String end, final ApiCallback<AnalyticsFeedbackScores> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getFeedbackCountValidateBeforeCall(enterpriseId, start, end, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackScores>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getFeedbackCountV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCountV2Call(Integer enterpriseId, String start, String end, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/feedback/count"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (start != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "start", start));
        if (end != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "end", end));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getFeedbackCountV2ValidateBeforeCall(Integer enterpriseId, String start, String end, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getFeedbackCountV2(Async)");
        }
        
        // verify the required parameter 'start' is set
        if (start == null) {
            throw new ApiException("Missing the required parameter 'start' when calling getFeedbackCountV2(Async)");
        }
        
        // verify the required parameter 'end' is set
        if (end == null) {
            throw new ApiException("Missing the required parameter 'end' when calling getFeedbackCountV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getFeedbackCountV2Call(enterpriseId, start, end, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsFeedbackScores
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsFeedbackScores getFeedbackCountV2(Integer enterpriseId, String start, String end, String appName) throws ApiException {
        ApiResponse<AnalyticsFeedbackScores> resp = getFeedbackCountV2WithHttpInfo(enterpriseId, start, end, appName);
        return resp.getData();
    }

    /**
     * Survey Feedback Scores
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsFeedbackScores&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsFeedbackScores> getFeedbackCountV2WithHttpInfo(Integer enterpriseId, String start, String end, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getFeedbackCountV2ValidateBeforeCall(enterpriseId, start, end, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackScores>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Survey Feedback Scores (asynchronously)
     * This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getFeedbackCountV2Async(Integer enterpriseId, String start, String end, String appName, final ApiCallback<AnalyticsFeedbackScores> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getFeedbackCountV2ValidateBeforeCall(enterpriseId, start, end, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsFeedbackScores>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getGeoMap
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getGeoMapCall(Integer enterpriseId, Map<String, String> filter, Integer offset, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (offset != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "offset", offset));
        if (limit != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "limit", limit));
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getGeoMapValidateBeforeCall(Integer enterpriseId, Map<String, String> filter, Integer offset, Integer limit, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getGeoMap(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getGeoMap(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getGeoMapCall(enterpriseId, filter, offset, limit, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Geographic Demographics
     * This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return EndpointLocationSummary
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public EndpointLocationSummary getGeoMap(Integer enterpriseId, Map<String, String> filter, Integer offset, Integer limit, String appName) throws ApiException {
        ApiResponse<EndpointLocationSummary> resp = getGeoMapWithHttpInfo(enterpriseId, filter, offset, limit, appName);
        return resp.getData();
    }

    /**
     * Geographic Demographics
     * This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;EndpointLocationSummary&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<EndpointLocationSummary> getGeoMapWithHttpInfo(Integer enterpriseId, Map<String, String> filter, Integer offset, Integer limit, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getGeoMapValidateBeforeCall(enterpriseId, filter, offset, limit, appName, null, null);
        Type localVarReturnType = new TypeToken<EndpointLocationSummary>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Geographic Demographics (asynchronously)
     * This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getGeoMapAsync(Integer enterpriseId, Map<String, String> filter, Integer offset, Integer limit, String appName, final ApiCallback<EndpointLocationSummary> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getGeoMapValidateBeforeCall(enterpriseId, filter, offset, limit, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<EndpointLocationSummary>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingEndpointsLiveByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingEndpointsLiveByEnterpriseCall(Integer enterpriseId, String meetingUuid, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()))
            .replaceAll("\\{" + "meeting_uuid" + "\\}", apiClient.escapeString(meetingUuid.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getMeetingEndpointsLiveByEnterpriseValidateBeforeCall(Integer enterpriseId, String meetingUuid, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingEndpointsLiveByEnterprise(Async)");
        }
        
        // verify the required parameter 'meetingUuid' is set
        if (meetingUuid == null) {
            throw new ApiException("Missing the required parameter 'meetingUuid' when calling getMeetingEndpointsLiveByEnterprise(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingEndpointsLiveByEnterpriseCall(enterpriseId, meetingUuid, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Live Meeting Endpoints by Enterprise
     * This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return MeetingExtendedIndigo
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingExtendedIndigo getMeetingEndpointsLiveByEnterprise(Integer enterpriseId, String meetingUuid, String appName) throws ApiException {
        ApiResponse<MeetingExtendedIndigo> resp = getMeetingEndpointsLiveByEnterpriseWithHttpInfo(enterpriseId, meetingUuid, appName);
        return resp.getData();
    }

    /**
     * List Live Meeting Endpoints by Enterprise
     * This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;MeetingExtendedIndigo&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingExtendedIndigo> getMeetingEndpointsLiveByEnterpriseWithHttpInfo(Integer enterpriseId, String meetingUuid, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingEndpointsLiveByEnterpriseValidateBeforeCall(enterpriseId, meetingUuid, appName, null, null);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Live Meeting Endpoints by Enterprise (asynchronously)
     * This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingEndpointsLiveByEnterpriseAsync(Integer enterpriseId, String meetingUuid, String appName, final ApiCallback<MeetingExtendedIndigo> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingEndpointsLiveByEnterpriseValidateBeforeCall(enterpriseId, meetingUuid, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingPastByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param includeEndpoints Option to include detailed data on endpoints (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingPastByEnterpriseCall(Integer enterpriseId, String meetingUuid, Boolean includeEndpoints, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()))
            .replaceAll("\\{" + "meeting_uuid" + "\\}", apiClient.escapeString(meetingUuid.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (includeEndpoints != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "includeEndpoints", includeEndpoints));

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
    private com.squareup.okhttp.Call getMeetingPastByEnterpriseValidateBeforeCall(Integer enterpriseId, String meetingUuid, Boolean includeEndpoints, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingPastByEnterprise(Async)");
        }
        
        // verify the required parameter 'meetingUuid' is set
        if (meetingUuid == null) {
            throw new ApiException("Missing the required parameter 'meetingUuid' when calling getMeetingPastByEnterprise(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingPastByEnterpriseCall(enterpriseId, meetingUuid, includeEndpoints, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Meeting Endpoints &amp; Stats by Enterprise
     * This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param includeEndpoints Option to include detailed data on endpoints (optional)
     * @return MeetingExtendedIndigo
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingExtendedIndigo getMeetingPastByEnterprise(Integer enterpriseId, String meetingUuid, Boolean includeEndpoints) throws ApiException {
        ApiResponse<MeetingExtendedIndigo> resp = getMeetingPastByEnterpriseWithHttpInfo(enterpriseId, meetingUuid, includeEndpoints);
        return resp.getData();
    }

    /**
     * List Meeting Endpoints &amp; Stats by Enterprise
     * This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param includeEndpoints Option to include detailed data on endpoints (optional)
     * @return ApiResponse&lt;MeetingExtendedIndigo&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingExtendedIndigo> getMeetingPastByEnterpriseWithHttpInfo(Integer enterpriseId, String meetingUuid, Boolean includeEndpoints) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingPastByEnterpriseValidateBeforeCall(enterpriseId, meetingUuid, includeEndpoints, null, null);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Meeting Endpoints &amp; Stats by Enterprise (asynchronously)
     * This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param includeEndpoints Option to include detailed data on endpoints (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingPastByEnterpriseAsync(Integer enterpriseId, String meetingUuid, Boolean includeEndpoints, final ApiCallback<MeetingExtendedIndigo> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingPastByEnterpriseValidateBeforeCall(enterpriseId, meetingUuid, includeEndpoints, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingPastByUser
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingPastByUserCall(Integer userId, String meetingUuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/indigo/meetings/{meeting_uuid}"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()))
            .replaceAll("\\{" + "meeting_uuid" + "\\}", apiClient.escapeString(meetingUuid.toString()));

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
    private com.squareup.okhttp.Call getMeetingPastByUserValidateBeforeCall(Integer userId, String meetingUuid, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getMeetingPastByUser(Async)");
        }
        
        // verify the required parameter 'meetingUuid' is set
        if (meetingUuid == null) {
            throw new ApiException("Missing the required parameter 'meetingUuid' when calling getMeetingPastByUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingPastByUserCall(userId, meetingUuid, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Meeting Endpoints &amp; Stats by User
     * This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @return MeetingExtendedIndigo
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingExtendedIndigo getMeetingPastByUser(Integer userId, String meetingUuid) throws ApiException {
        ApiResponse<MeetingExtendedIndigo> resp = getMeetingPastByUserWithHttpInfo(userId, meetingUuid);
        return resp.getData();
    }

    /**
     * List Meeting Endpoints &amp; Stats by User
     * This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @return ApiResponse&lt;MeetingExtendedIndigo&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingExtendedIndigo> getMeetingPastByUserWithHttpInfo(Integer userId, String meetingUuid) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingPastByUserValidateBeforeCall(userId, meetingUuid, null, null);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Meeting Endpoints &amp; Stats by User (asynchronously)
     * This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param meetingUuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingPastByUserAsync(Integer userId, String meetingUuid, final ApiCallback<MeetingExtendedIndigo> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingPastByUserValidateBeforeCall(userId, meetingUuid, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingExtendedIndigo>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingUsage
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingUsageCall(Integer enterpriseId, String clientTZ, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (clientTZ != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "clientTZ", clientTZ));
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));

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
    private com.squareup.okhttp.Call getMeetingUsageValidateBeforeCall(Integer enterpriseId, String clientTZ, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingUsage(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingUsageCall(enterpriseId, clientTZ, filter, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @return AnalyticsUsage
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsUsage getMeetingUsage(Integer enterpriseId, String clientTZ, String filter) throws ApiException {
        ApiResponse<AnalyticsUsage> resp = getMeetingUsageWithHttpInfo(enterpriseId, clientTZ, filter);
        return resp.getData();
    }

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @return ApiResponse&lt;AnalyticsUsage&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsUsage> getMeetingUsageWithHttpInfo(Integer enterpriseId, String clientTZ, String filter) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingUsageValidateBeforeCall(enterpriseId, clientTZ, filter, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsUsage>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Meeting Usage Over Time (asynchronously)
     * This endpoint reports on meeting usage. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingUsageAsync(Integer enterpriseId, String clientTZ, String filter, final ApiCallback<AnalyticsUsage> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingUsageValidateBeforeCall(enterpriseId, clientTZ, filter, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsUsage>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingUsageV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingUsageV2Call(Integer enterpriseId, String filter, String clientTZ, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (clientTZ != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "clientTZ", clientTZ));
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getMeetingUsageV2ValidateBeforeCall(Integer enterpriseId, String filter, String clientTZ, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingUsageV2(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getMeetingUsageV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingUsageV2Call(enterpriseId, filter, clientTZ, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsUsage
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsUsage getMeetingUsageV2(Integer enterpriseId, String filter, String clientTZ, String appName) throws ApiException {
        ApiResponse<AnalyticsUsage> resp = getMeetingUsageV2WithHttpInfo(enterpriseId, filter, clientTZ, appName);
        return resp.getData();
    }

    /**
     * Meeting Usage Over Time
     * This endpoint reports on meeting usage.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsUsage&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsUsage> getMeetingUsageV2WithHttpInfo(Integer enterpriseId, String filter, String clientTZ, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingUsageV2ValidateBeforeCall(enterpriseId, filter, clientTZ, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsUsage>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Meeting Usage Over Time (asynchronously)
     * This endpoint reports on meeting usage.  Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param clientTZ Based on standard TZ code. (optional, default to America/Denver)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingUsageV2Async(Integer enterpriseId, String filter, String clientTZ, String appName, final ApiCallback<AnalyticsUsage> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingUsageV2ValidateBeforeCall(enterpriseId, filter, clientTZ, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsUsage>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingsLiveByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingsLiveByEnterpriseCall(Integer enterpriseId, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/meetings/live"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getMeetingsLiveByEnterpriseValidateBeforeCall(Integer enterpriseId, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingsLiveByEnterprise(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingsLiveByEnterpriseCall(enterpriseId, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Live Meetings Summary by Enterprise
     * This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return MeetingIndigoList
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingIndigoList getMeetingsLiveByEnterprise(Integer enterpriseId, String appName) throws ApiException {
        ApiResponse<MeetingIndigoList> resp = getMeetingsLiveByEnterpriseWithHttpInfo(enterpriseId, appName);
        return resp.getData();
    }

    /**
     * Live Meetings Summary by Enterprise
     * This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;MeetingIndigoList&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingIndigoList> getMeetingsLiveByEnterpriseWithHttpInfo(Integer enterpriseId, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingsLiveByEnterpriseValidateBeforeCall(enterpriseId, appName, null, null);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Live Meetings Summary by Enterprise (asynchronously)
     * This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingsLiveByEnterpriseAsync(Integer enterpriseId, String appName, final ApiCallback<MeetingIndigoList> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingsLiveByEnterpriseValidateBeforeCall(enterpriseId, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingsPastByEnterprise
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param offset Page Number (optional)
     * @param limit Per page (optional)
     * @param filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param count Include total count of meetings in response (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingsPastByEnterpriseCall(Integer enterpriseId, Integer offset, Integer limit, Map<String, String> filter, Boolean count, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/meetings"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (offset != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "offset", offset));
        if (limit != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "limit", limit));
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (count != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "count", count));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getMeetingsPastByEnterpriseValidateBeforeCall(Integer enterpriseId, Integer offset, Integer limit, Map<String, String> filter, Boolean count, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getMeetingsPastByEnterprise(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingsPastByEnterpriseCall(enterpriseId, offset, limit, filter, count, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Past Meetings by Enterprise
     * This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param offset Page Number (optional)
     * @param limit Per page (optional)
     * @param filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param count Include total count of meetings in response (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return MeetingIndigoList
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingIndigoList getMeetingsPastByEnterprise(Integer enterpriseId, Integer offset, Integer limit, Map<String, String> filter, Boolean count, String appName) throws ApiException {
        ApiResponse<MeetingIndigoList> resp = getMeetingsPastByEnterpriseWithHttpInfo(enterpriseId, offset, limit, filter, count, appName);
        return resp.getData();
    }

    /**
     * List Past Meetings by Enterprise
     * This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param offset Page Number (optional)
     * @param limit Per page (optional)
     * @param filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param count Include total count of meetings in response (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;MeetingIndigoList&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingIndigoList> getMeetingsPastByEnterpriseWithHttpInfo(Integer enterpriseId, Integer offset, Integer limit, Map<String, String> filter, Boolean count, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingsPastByEnterpriseValidateBeforeCall(enterpriseId, offset, limit, filter, count, appName, null, null);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Past Meetings by Enterprise (asynchronously)
     * This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param offset Page Number (optional)
     * @param limit Per page (optional)
     * @param filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param count Include total count of meetings in response (optional)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingsPastByEnterpriseAsync(Integer enterpriseId, Integer offset, Integer limit, Map<String, String> filter, Boolean count, String appName, final ApiCallback<MeetingIndigoList> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingsPastByEnterpriseValidateBeforeCall(enterpriseId, offset, limit, filter, count, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getMeetingsPastByUser
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getMeetingsPastByUserCall(Integer userId, Map<String, String> filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/indigo/meetings"
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));

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
    private com.squareup.okhttp.Call getMeetingsPastByUserValidateBeforeCall(Integer userId, Map<String, String> filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getMeetingsPastByUser(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getMeetingsPastByUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getMeetingsPastByUserCall(userId, filter, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Past Meetings by User
     * This endpoint lists completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @return MeetingIndigoList
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public MeetingIndigoList getMeetingsPastByUser(Integer userId, Map<String, String> filter) throws ApiException {
        ApiResponse<MeetingIndigoList> resp = getMeetingsPastByUserWithHttpInfo(userId, filter);
        return resp.getData();
    }

    /**
     * List Past Meetings by User
     * This endpoint lists completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @return ApiResponse&lt;MeetingIndigoList&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<MeetingIndigoList> getMeetingsPastByUserWithHttpInfo(Integer userId, Map<String, String> filter) throws ApiException {
        com.squareup.okhttp.Call call = getMeetingsPastByUserValidateBeforeCall(userId, filter, null, null);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Past Meetings by User (asynchronously)
     * This endpoint lists completed meetings by user. Requires enterprise administrator access token
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getMeetingsPastByUserAsync(Integer userId, Map<String, String> filter, final ApiCallback<MeetingIndigoList> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getMeetingsPastByUserValidateBeforeCall(userId, filter, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<MeetingIndigoList>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getRoiRanges
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getRoiRangesCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));

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
    private com.squareup.okhttp.Call getRoiRangesValidateBeforeCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getRoiRanges(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getRoiRanges(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getRoiRangesCall(enterpriseId, filter, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (required)
     * @return AnalyticsRoiData
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsRoiData getRoiRanges(Integer enterpriseId, String filter) throws ApiException {
        ApiResponse<AnalyticsRoiData> resp = getRoiRangesWithHttpInfo(enterpriseId, filter);
        return resp.getData();
    }

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (required)
     * @return ApiResponse&lt;AnalyticsRoiData&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsRoiData> getRoiRangesWithHttpInfo(Integer enterpriseId, String filter) throws ApiException {
        com.squareup.okhttp.Call call = getRoiRangesValidateBeforeCall(enterpriseId, filter, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsRoiData>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * ROI Data (asynchronously)
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getRoiRangesAsync(Integer enterpriseId, String filter, final ApiCallback<AnalyticsRoiData> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getRoiRangesValidateBeforeCall(enterpriseId, filter, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsRoiData>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getRoiRangesV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getRoiRangesV2Call(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getRoiRangesV2ValidateBeforeCall(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getRoiRangesV2(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getRoiRangesV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getRoiRangesV2Call(enterpriseId, filter, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsRoiData
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsRoiData getRoiRangesV2(Integer enterpriseId, String filter, String appName) throws ApiException {
        ApiResponse<AnalyticsRoiData> resp = getRoiRangesV2WithHttpInfo(enterpriseId, filter, appName);
        return resp.getData();
    }

    /**
     * ROI Data
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsRoiData&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsRoiData> getRoiRangesV2WithHttpInfo(Integer enterpriseId, String filter, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getRoiRangesV2ValidateBeforeCall(enterpriseId, filter, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsRoiData>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * ROI Data (asynchronously)
     * This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getRoiRangesV2Async(Integer enterpriseId, String filter, String appName, final ApiCallback<AnalyticsRoiData> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getRoiRangesV2ValidateBeforeCall(enterpriseId, filter, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsRoiData>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getTopUsers
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getTopUsersCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));

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
    private com.squareup.okhttp.Call getTopUsersValidateBeforeCall(Integer enterpriseId, String filter, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getTopUsers(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getTopUsersCall(enterpriseId, filter, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @return AnalyticsTopUsers
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsTopUsers getTopUsers(Integer enterpriseId, String filter) throws ApiException {
        ApiResponse<AnalyticsTopUsers> resp = getTopUsersWithHttpInfo(enterpriseId, filter);
        return resp.getData();
    }

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @return ApiResponse&lt;AnalyticsTopUsers&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsTopUsers> getTopUsersWithHttpInfo(Integer enterpriseId, String filter) throws ApiException {
        com.squareup.okhttp.Call call = getTopUsersValidateBeforeCall(enterpriseId, filter, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsTopUsers>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Top Users (asynchronously)
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getTopUsersAsync(Integer enterpriseId, String filter, final ApiCallback<AnalyticsTopUsers> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getTopUsersValidateBeforeCall(enterpriseId, filter, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsTopUsers>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getTopUsersV2
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getTopUsersV2Call(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "filter", filter));
        if (appName != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "app_name", appName));

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
    private com.squareup.okhttp.Call getTopUsersV2ValidateBeforeCall(Integer enterpriseId, String filter, String appName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling getTopUsersV2(Async)");
        }
        
        // verify the required parameter 'filter' is set
        if (filter == null) {
            throw new ApiException("Missing the required parameter 'filter' when calling getTopUsersV2(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getTopUsersV2Call(enterpriseId, filter, appName, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return AnalyticsTopUsers
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public AnalyticsTopUsers getTopUsersV2(Integer enterpriseId, String filter, String appName) throws ApiException {
        ApiResponse<AnalyticsTopUsers> resp = getTopUsersV2WithHttpInfo(enterpriseId, filter, appName);
        return resp.getData();
    }

    /**
     * Top Users
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @return ApiResponse&lt;AnalyticsTopUsers&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<AnalyticsTopUsers> getTopUsersV2WithHttpInfo(Integer enterpriseId, String filter, String appName) throws ApiException {
        com.squareup.okhttp.Call call = getTopUsersV2ValidateBeforeCall(enterpriseId, filter, appName, null, null);
        Type localVarReturnType = new TypeToken<AnalyticsTopUsers>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Top Users (asynchronously)
     * This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param appName name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getTopUsersV2Async(Integer enterpriseId, String filter, String appName, final ApiCallback<AnalyticsTopUsers> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getTopUsersV2ValidateBeforeCall(enterpriseId, filter, appName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<AnalyticsTopUsers>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
