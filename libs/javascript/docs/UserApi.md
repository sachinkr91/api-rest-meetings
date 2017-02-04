# BlueJeansOnVideoRestApi.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserUserIdEnterpriseProfileGet**](UserApi.md#v1UserUserIdEnterpriseProfileGet) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**v1UserUserIdGet**](UserApi.md#v1UserUserIdGet) | **GET** /v1/user/{user_id} | Get User Account Details
[**v1UserUserIdPut**](UserApi.md#v1UserUserIdPut) | **PUT** /v1/user/{user_id} | Update User Account Details
[**v1UserUserIdRoomGet**](UserApi.md#v1UserUserIdRoomGet) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**v1UserUserIdRoomPut**](UserApi.md#v1UserUserIdRoomPut) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**v1UserUserIdScheduledMeetingGet**](UserApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Get Meeting Settings


<a name="v1UserUserIdEnterpriseProfileGet"></a>
# **v1UserUserIdEnterpriseProfileGet**
> Enterprise v1UserUserIdEnterpriseProfileGet(userId)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdEnterpriseProfileGet(userId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Enterprise**](Enterprise.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdGet"></a>
# **v1UserUserIdGet**
> User v1UserUserIdGet(userId)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdGet(userId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdPut"></a>
# **v1UserUserIdPut**
> User v1UserUserIdPut(userId, user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var user = new BlueJeansOnVideoRestApi.User(); // User | The user details that you wish to update.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdPut(userId, user, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **user** | [**User**](User.md)| The user details that you wish to update. | 

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdRoomGet"></a>
# **v1UserUserIdRoomGet**
> Room v1UserUserIdRoomGet(userId)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdRoomGet(userId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdRoomPut"></a>
# **v1UserUserIdRoomPut**
> Room v1UserUserIdRoomPut(userId, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var room = new BlueJeansOnVideoRestApi.Room(); // Room | The user's room details that you wish to update.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdRoomPut(userId, room, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **room** | [**Room**](Room.md)| The user&#39;s room details that you wish to update. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingGet"></a>
# **v1UserUserIdScheduledMeetingGet**
> [Meeting] v1UserUserIdScheduledMeetingGet(userId)

Get Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.UserApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdScheduledMeetingGet(userId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**[Meeting]**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

