# BlueJeansOnVideoRestApi.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](AuthenticationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**getAuthorizationCode**](AuthenticationApi.md#getAuthorizationCode) | **GET** /oauth2/authorize | Get Authorization Code
[**getTokenByClient**](AuthenticationApi.md#getTokenByClient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**getTokenByCode**](AuthenticationApi.md#getTokenByCode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**getTokenByMeeting**](AuthenticationApi.md#getTokenByMeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**getTokenByPassword**](AuthenticationApi.md#getTokenByPassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**getTokenByRefresh**](AuthenticationApi.md#getTokenByRefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**getTokenInfo**](AuthenticationApi.md#getTokenInfo) | **GET** /oauth2/tokenInfo | Validate a Token
[**regenerateClientApplicationSecret**](AuthenticationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**revokeAccessToken**](AuthenticationApi.md#revokeAccessToken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token
[**updateClientApplication**](AuthenticationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


<a name="createClientApplication"></a>
# **createClientApplication**
> Application createClientApplication(userId, application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

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

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var application = new BlueJeansOnVideoRestApi.Application(); // Application | The information about the new client application.


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

<a name="getAuthorizationCode"></a>
# **getAuthorizationCode**
> getAuthorizationCode(opts)

Get Authorization Code

This is NOT a REST endpoint. Documenting here for consistentcy. This URL shoujld be used by a client application user&#39;s browser to perform authorization.  User will be redirected back to client application upon completion with state and code parameters.

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

var opts = { 
  'clientId': "clientId_example", // String | The 32 character client ID generated when you created the client application.
  'redirectUri': "redirectUri_example", // String | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
  'state': "state_example", // String | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
  'scope': "scope_example", // String | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info
  'responseType': "code" // String | The type of authorization you are peforrming.  Set to \"code\".
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.getAuthorizationCode(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **String**| The 32 character client ID generated when you created the client application. | [optional] 
 **redirectUri** | **String**| The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. | [optional] 
 **state** | **String**| Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. | [optional] 
 **scope** | **String**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info | [optional] 
 **responseType** | **String**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getTokenByClient"></a>
# **getTokenByClient**
> GrantClient getTokenByClient(grantRequestClient)

Authentication via Client Grant Type

This API is typically called from an application.  Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console and given to the customer.

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

var grantRequestClient = new BlueJeansOnVideoRestApi.GrantRequestClient(); // GrantRequestClient | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenByClient(grantRequestClient, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestClient** | [**GrantRequestClient**](GrantRequestClient.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantClient**](GrantClient.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenByCode"></a>
# **getTokenByCode**
> GrantCode getTokenByCode(grantRequestCode)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

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

var grantRequestCode = new BlueJeansOnVideoRestApi.GrantRequestCode(); // GrantRequestCode | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenByCode(grantRequestCode, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestCode** | [**GrantRequestCode**](GrantRequestCode.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantCode**](GrantCode.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenByMeeting"></a>
# **getTokenByMeeting**
> GrantMeeting getTokenByMeeting(grantRequestMeeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type. The scope of access covers the meeting only. Call this API with the meetings&#39; numerid ID, and the meeting passcode (it one exists).  If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will grant attendee abilities.

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

var grantRequestMeeting = new BlueJeansOnVideoRestApi.GrantRequestMeeting(); // GrantRequestMeeting | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenByMeeting(grantRequestMeeting, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestMeeting** | [**GrantRequestMeeting**](GrantRequestMeeting.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantMeeting**](GrantMeeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenByPassword"></a>
# **getTokenByPassword**
> GrantPassword getTokenByPassword(grantRequestPassword)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password.  Set the grant_type to \&quot;password\&quot;.

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

var grantRequestPassword = new BlueJeansOnVideoRestApi.GrantRequestPassword(); // GrantRequestPassword | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenByPassword(grantRequestPassword, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestPassword** | [**GrantRequestPassword**](GrantRequestPassword.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantPassword**](GrantPassword.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenByRefresh"></a>
# **getTokenByRefresh**
> GrantRefresh getTokenByRefresh(grantRequestRefresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

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

var grantRequestRefresh = new BlueJeansOnVideoRestApi.GrantRequestRefresh(); // GrantRequestRefresh | Contains information about the type of grant you are requesting.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenByRefresh(grantRequestRefresh, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestRefresh** | [**GrantRequestRefresh**](GrantRequestRefresh.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantRefresh**](GrantRefresh.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenInfo"></a>
# **getTokenInfo**
> InlineResponse200 getTokenInfo()

Validate a Token

This endpoint will validate if a token is valid or not.

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

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenInfo(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](InlineResponse200.md)

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
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var clientId = 56; // Number | The ID of the client application of interest. This value was given as a response during client application creation.


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
 **clientId** | **Number**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="revokeAccessToken"></a>
# **revokeAccessToken**
> revokeAccessToken(grantRequestRevoke, opts)

Revoke Access Token

This API is part of the 3-legged OAuth 2.0 authorization flow.

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

var grantRequestRevoke = new BlueJeansOnVideoRestApi.GrantRequestRevoke(); // GrantRequestRevoke | Contains information about the type of grant you are revoking.

var opts = { 
  'accessToken': "accessToken_example" // String | 
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.revokeAccessToken(grantRequestRevoke, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestRevoke** | [**GrantRequestRevoke**](GrantRequestRevoke.md)| Contains information about the type of grant you are revoking. | 
 **accessToken** | **String**|  | [optional] 

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="updateClientApplication"></a>
# **updateClientApplication**
> Application updateClientApplication(userId, clientId, application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

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

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var clientId = 56; // Number | The ID of the client application of interest. This value was given as a response during client application creation.

var application = new BlueJeansOnVideoRestApi.Application(); // Application | The information about the new client application.


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
 **clientId** | **Number**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

