# BlueJeansMeetingsRestApi.ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](ApplicationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**regenerateClientApplicationSecret**](ApplicationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**updateClientApplication**](ApplicationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


<a name="createClientApplication"></a>
# **createClientApplication**
> Application createClientApplication(userId, application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.ApplicationApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var application = new BlueJeansMeetingsRestApi.Application(); // Application | The information about the new client application.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.createClientApplication(userId, application, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="regenerateClientApplicationSecret"></a>
# **regenerateClientApplicationSecret**
> ApplicationSecret regenerateClientApplicationSecret(userId, clientId)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.ApplicationApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var clientId = "clientId_example"; // String | The ID of the client application of interest. This value was given as a response during client application creation.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.regenerateClientApplicationSecret(userId, clientId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **String**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateClientApplication"></a>
# **updateClientApplication**
> Application updateClientApplication(userId, clientId, application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.ApplicationApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var clientId = "clientId_example"; // String | The ID of the client application of interest. This value was given as a response during client application creation.

var application = new BlueJeansMeetingsRestApi.Application(); // Application | The information about the new client application.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.updateClientApplication(userId, clientId, application, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **String**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

