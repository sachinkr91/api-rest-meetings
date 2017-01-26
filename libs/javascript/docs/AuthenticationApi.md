# BlueJeansOnVideoRestApi.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2TokenclientPost**](AuthenticationApi.md#oauth2TokenclientPost) | **POST** /oauth2/token?client | Authentication via Client Grant Type
[**oauth2TokenmeetingPost**](AuthenticationApi.md#oauth2TokenmeetingPost) | **POST** /oauth2/token?meeting | Authentication via Meeting Grant Type
[**oauth2TokenpasswordPost**](AuthenticationApi.md#oauth2TokenpasswordPost) | **POST** /oauth2/token?password | Authentication via Password Grant Type


<a name="oauth2TokenclientPost"></a>
# **oauth2TokenclientPost**
> Grant oauth2TokenclientPost(payload)

Authentication via Client Grant Type

This grant type is commonly used by an app. Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var payload = new BlueJeansOnVideoRestApi.Payload(); // Payload | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.oauth2TokenclientPost(payload, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload**](Payload.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="oauth2TokenmeetingPost"></a>
# **oauth2TokenmeetingPost**
> Grant oauth2TokenmeetingPost(payload)

Authentication via Meeting Grant Type

This is not a traditional OAuth grant type, but it behaves closely to the password grant type. This level of authentication allows for obtaining access to the meeting only. If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will have a limited scope of access that an attendee has within a meeting.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var payload = new BlueJeansOnVideoRestApi.Payload1(); // Payload1 | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.oauth2TokenmeetingPost(payload, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload1**](Payload1.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="oauth2TokenpasswordPost"></a>
# **oauth2TokenpasswordPost**
> Grant oauth2TokenpasswordPost(payload)

Authentication via Password Grant Type

An access token can be obtained by using a user’s username and password.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var payload = new BlueJeansOnVideoRestApi.Payload2(); // Payload2 | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.oauth2TokenpasswordPost(payload, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload2**](Payload2.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

