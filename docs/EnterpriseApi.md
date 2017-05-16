# BlueJeansOnVideoRestApi.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](EnterpriseApi.md#createUser) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
[**listUsers**](EnterpriseApi.md#listUsers) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
[**removeUser**](EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User


<a name="createUser"></a>
# **createUser**
> UserId createUser(enterpriseId, user, opts)

Create Enterprise User

This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var user = new BlueJeansOnVideoRestApi.User(); // User | The information about the new user.

var opts = { 
  'forcePasswordChange': true, // Boolean | Forces the user to change his or her password on first log in.
  'sendVerificationMail': true // Boolean | Prevents welcome emails from being sent to the newly created user.
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.createUser(enterpriseId, user, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **user** | [**User**](User.md)| The information about the new user. | 
 **forcePasswordChange** | **Boolean**| Forces the user to change his or her password on first log in. | [optional] 
 **sendVerificationMail** | **Boolean**| Prevents welcome emails from being sent to the newly created user. | [optional] 

### Return type

[**UserId**](UserId.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listUsers"></a>
# **listUsers**
> EnterpriseUserList listUsers(enterpriseId, opts)

List Enterprise Users

This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'pageSize': 56, // Number | Sets number of items returned per page.
  'pageNumber': 56, // Number | Selects which page of results to return.
  'emailId': "emailId_example" // String | Allows filtering the response by a user’s email address.
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listUsers(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **pageSize** | **Number**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **Number**| Selects which page of results to return. | [optional] 
 **emailId** | **String**| Allows filtering the response by a user’s email address. | [optional] 

### Return type

[**EnterpriseUserList**](EnterpriseUserList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="removeUser"></a>
# **removeUser**
> removeUser(enterpriseId, userId)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('bluejeans-api-rest-onvideo');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.removeUser(enterpriseId, userId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

