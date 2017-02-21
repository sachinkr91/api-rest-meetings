# BlueJeansOnVideoRestApi.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseProfile**](UserApi.md#getEnterpriseProfile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**getRoom**](UserApi.md#getRoom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**getUser**](UserApi.md#getUser) | **GET** /v1/user/{user_id} | Get User Account Details
[**updateRoom**](UserApi.md#updateRoom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**updateUser**](UserApi.md#updateUser) | **PUT** /v1/user/{user_id} | Update User Account Details


<a name="getEnterpriseProfile"></a>
# **getEnterpriseProfile**
> Enterprise getEnterpriseProfile(userId)

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
apiInstance.getEnterpriseProfile(userId, callback);
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

<a name="getRoom"></a>
# **getRoom**
> Room getRoom(userId)

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
apiInstance.getRoom(userId, callback);
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

<a name="getUser"></a>
# **getUser**
> User getUser(userId)

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
apiInstance.getUser(userId, callback);
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

<a name="updateRoom"></a>
# **updateRoom**
> Room updateRoom(userId, room)

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
apiInstance.updateRoom(userId, room, callback);
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

<a name="updateUser"></a>
# **updateUser**
> User updateUser(userId, user)

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
apiInstance.updateUser(userId, user, callback);
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

