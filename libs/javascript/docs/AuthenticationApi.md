# BlueJeansOnVideoRestApi.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthorizationCode**](AuthenticationApi.md#getAuthorizationCode) | **GET** /oauth2/authorize | Get Authorization Code
[**getTokenByClient**](AuthenticationApi.md#getTokenByClient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**getTokenByCode**](AuthenticationApi.md#getTokenByCode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**getTokenByMeeting**](AuthenticationApi.md#getTokenByMeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**getTokenByPassword**](AuthenticationApi.md#getTokenByPassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**getTokenByRefresh**](AuthenticationApi.md#getTokenByRefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**getTokenInfo**](AuthenticationApi.md#getTokenInfo) | **GET** /oauth2/tokenInfo | Validate a Token
[**revokeAccessToken**](AuthenticationApi.md#revokeAccessToken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token


<a name="getAuthorizationCode"></a>
# **getAuthorizationCode**
> getAuthorizationCode(opts)

Get Authorization Code

This is **not a true REST endpoint**. &lt;br /&gt; This URL should be used by a user&#39;s browser-client application to perform authorization. &lt;br /&gt;Upon completion, the user will be redirected back to the client application with state and code return parameters. Use \&quot;bluejeans.com\&quot; as hostname. &lt;br /&gt;**Note:**&lt;br /&gt;&amp;nbsp;&amp;nbsp;The code returned is only valid for *30 seconds.*  Your application must call as soon as possible the /oauth2/token API to generate an access token from the returned code.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
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
  'scope': "scope_example", // String | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time.
  'responseType': "code", // String | The type of authorization you are peforrming.  Set to \"code\".
  'appName': "appName_example", // String | The name of the client application shown to user during authorization.
  'appLogoUrl': "appLogoUrl_example" // String | URL to an 84x84 image shown to user during authorization.
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
 **scope** | **String**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. | [optional] 
 **responseType** | **String**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]
 **appName** | **String**| The name of the client application shown to user during authorization. | [optional] 
 **appLogoUrl** | **String**| URL to an 84x84 image shown to user during authorization. | [optional] 

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

This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**client_credentials**\&quot; (string).

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var grantRequestClient = new BlueJeansOnVideoRestApi.GrantRequestClient(); // GrantRequestClient | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.


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
 **grantRequestClient** | [**GrantRequestClient**](GrantRequestClient.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. | 

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

This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**authorization_code**\&quot; (string).

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var grantRequestCode = new BlueJeansOnVideoRestApi.GrantRequestCode(); // GrantRequestCode | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.


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
 **grantRequestCode** | [**GrantRequestCode**](GrantRequestCode.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. | 

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

This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. &lt;br /&gt;Call this API with the meeting&#39;s numeric ID, and the meeting passcode (if one exists). &lt;br /&gt;&amp;nbsp;&amp;nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. &lt;br /&gt;&amp;nbsp;&amp;nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.&lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**meeting_passcode**\&quot; (string).

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var grantRequestMeeting = new BlueJeansOnVideoRestApi.GrantRequestMeeting(); // GrantRequestMeeting | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.


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
 **grantRequestMeeting** | [**GrantRequestMeeting**](GrantRequestMeeting.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. | 

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

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**password**\&quot; (string).

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var grantRequestPassword = new BlueJeansOnVideoRestApi.GrantRequestPassword(); // GrantRequestPassword | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.


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
 **grantRequestPassword** | [**GrantRequestPassword**](GrantRequestPassword.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. | 

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

This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  &lt;br /&gt;**NOTE:** &lt;br /&gt;&amp;nbsp;&amp;nbsp;When calling this API, you must set the field, **grant_type** to equal \&quot;**refresh_token**\&quot; (string).

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var grantRequestRefresh = new BlueJeansOnVideoRestApi.GrantRequestRefresh(); // GrantRequestRefresh | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.


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
 **grantRequestRefresh** | [**GrantRequestRefresh**](GrantRequestRefresh.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. | 

### Return type

[**GrantRefresh**](GrantRefresh.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTokenInfo"></a>
# **getTokenInfo**
> InlineResponse200 getTokenInfo(opts)

Validate a Token

This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.AuthenticationApi();

var opts = { 
  'accessToken': "accessToken_example" // String | 
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTokenInfo(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **String**|  | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="revokeAccessToken"></a>
# **revokeAccessToken**
> revokeAccessToken(grantRequestRevoke, opts)

Revoke Access Token

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
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

