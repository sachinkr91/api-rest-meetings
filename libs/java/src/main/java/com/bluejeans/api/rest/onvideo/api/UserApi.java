/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


package com.bluejeans.api.rest.onvideo.api;

import com.bluejeans.api.rest.onvideo.ApiCallback;
import com.bluejeans.api.rest.onvideo.ApiClient;
import com.bluejeans.api.rest.onvideo.ApiException;
import com.bluejeans.api.rest.onvideo.ApiResponse;
import com.bluejeans.api.rest.onvideo.Configuration;
import com.bluejeans.api.rest.onvideo.Pair;
import com.bluejeans.api.rest.onvideo.ProgressRequestBody;
import com.bluejeans.api.rest.onvideo.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;

import com.bluejeans.api.rest.onvideo.model.Enterprise;
import com.bluejeans.api.rest.onvideo.model.Error;
import com.bluejeans.api.rest.onvideo.model.Room;
import com.bluejeans.api.rest.onvideo.model.User;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class UserApi {
    private ApiClient apiClient;

    public UserApi() {
        this(Configuration.getDefaultApiClient());
    }

    public UserApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /* Build call for getEnterpriseProfile */
    private com.squareup.okhttp.Call getEnterpriseProfileCall(Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getEnterpriseProfile(Async)");
        }
        

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/enterprise_profile".replaceAll("\\{format\\}","json")
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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    /**
     * Get Enterprise Profile
     * This endpoint retrieves the enterprise profile associated with the user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return Enterprise
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Enterprise getEnterpriseProfile(Integer userId) throws ApiException {
        ApiResponse<Enterprise> resp = getEnterpriseProfileWithHttpInfo(userId);
        return resp.getData();
    }

    /**
     * Get Enterprise Profile
     * This endpoint retrieves the enterprise profile associated with the user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return ApiResponse&lt;Enterprise&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Enterprise> getEnterpriseProfileWithHttpInfo(Integer userId) throws ApiException {
        com.squareup.okhttp.Call call = getEnterpriseProfileCall(userId, null, null);
        Type localVarReturnType = new TypeToken<Enterprise>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get Enterprise Profile (asynchronously)
     * This endpoint retrieves the enterprise profile associated with the user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getEnterpriseProfileAsync(Integer userId, final ApiCallback<Enterprise> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getEnterpriseProfileCall(userId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Enterprise>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /* Build call for getRoom */
    private com.squareup.okhttp.Call getRoomCall(Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getRoom(Async)");
        }
        

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/room".replaceAll("\\{format\\}","json")
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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    /**
     * Get User’s Default Meeting Settings
     * This endpoint gets a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return Room
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Room getRoom(Integer userId) throws ApiException {
        ApiResponse<Room> resp = getRoomWithHttpInfo(userId);
        return resp.getData();
    }

    /**
     * Get User’s Default Meeting Settings
     * This endpoint gets a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return ApiResponse&lt;Room&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Room> getRoomWithHttpInfo(Integer userId) throws ApiException {
        com.squareup.okhttp.Call call = getRoomCall(userId, null, null);
        Type localVarReturnType = new TypeToken<Room>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get User’s Default Meeting Settings (asynchronously)
     * This endpoint gets a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getRoomAsync(Integer userId, final ApiCallback<Room> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getRoomCall(userId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Room>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /* Build call for getUser */
    private com.squareup.okhttp.Call getUserCall(Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling getUser(Async)");
        }
        

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}".replaceAll("\\{format\\}","json")
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
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    /**
     * Get User Account Details
     * This endpoint retrieves the basic account details for a given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return User
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public User getUser(Integer userId) throws ApiException {
        ApiResponse<User> resp = getUserWithHttpInfo(userId);
        return resp.getData();
    }

    /**
     * Get User Account Details
     * This endpoint retrieves the basic account details for a given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return ApiResponse&lt;User&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<User> getUserWithHttpInfo(Integer userId) throws ApiException {
        com.squareup.okhttp.Call call = getUserCall(userId, null, null);
        Type localVarReturnType = new TypeToken<User>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get User Account Details (asynchronously)
     * This endpoint retrieves the basic account details for a given user.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getUserAsync(Integer userId, final ApiCallback<User> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getUserCall(userId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<User>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /* Build call for updateRoom */
    private com.squareup.okhttp.Call updateRoomCall(Integer userId, Room room, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = room;
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling updateRoom(Async)");
        }
        
        // verify the required parameter 'room' is set
        if (room == null) {
            throw new ApiException("Missing the required parameter 'room' when calling updateRoom(Async)");
        }
        

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}/room".replaceAll("\\{format\\}","json")
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
        return apiClient.buildCall(localVarPath, "PUT", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    /**
     * Update User’s Default Meeting Settings
     * This endpoint allows updating a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param room The user&#39;s room details that you wish to update. (required)
     * @return Room
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Room updateRoom(Integer userId, Room room) throws ApiException {
        ApiResponse<Room> resp = updateRoomWithHttpInfo(userId, room);
        return resp.getData();
    }

    /**
     * Update User’s Default Meeting Settings
     * This endpoint allows updating a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param room The user&#39;s room details that you wish to update. (required)
     * @return ApiResponse&lt;Room&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Room> updateRoomWithHttpInfo(Integer userId, Room room) throws ApiException {
        com.squareup.okhttp.Call call = updateRoomCall(userId, room, null, null);
        Type localVarReturnType = new TypeToken<Room>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Update User’s Default Meeting Settings (asynchronously)
     * This endpoint allows updating a user’s default meeting settings.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param room The user&#39;s room details that you wish to update. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call updateRoomAsync(Integer userId, Room room, final ApiCallback<Room> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = updateRoomCall(userId, room, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Room>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /* Build call for updateUser */
    private com.squareup.okhttp.Call updateUserCall(Integer userId, User user, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = user;
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling updateUser(Async)");
        }
        
        // verify the required parameter 'user' is set
        if (user == null) {
            throw new ApiException("Missing the required parameter 'user' when calling updateUser(Async)");
        }
        

        // create path and map variables
        String localVarPath = "/v1/user/{user_id}".replaceAll("\\{format\\}","json")
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
        return apiClient.buildCall(localVarPath, "PUT", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    /**
     * Update User Account Details
     * This endpoint allows updating a user’s basic account details.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param user The user details that you wish to update. (required)
     * @return User
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public User updateUser(Integer userId, User user) throws ApiException {
        ApiResponse<User> resp = updateUserWithHttpInfo(userId, user);
        return resp.getData();
    }

    /**
     * Update User Account Details
     * This endpoint allows updating a user’s basic account details.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param user The user details that you wish to update. (required)
     * @return ApiResponse&lt;User&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<User> updateUserWithHttpInfo(Integer userId, User user) throws ApiException {
        com.squareup.okhttp.Call call = updateUserCall(userId, user, null, null);
        Type localVarReturnType = new TypeToken<User>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Update User Account Details (asynchronously)
     * This endpoint allows updating a user’s basic account details.
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param user The user details that you wish to update. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call updateUserAsync(Integer userId, User user, final ApiCallback<User> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = updateUserCall(userId, user, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<User>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
