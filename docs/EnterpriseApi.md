# BlueJeansMeetingsRestApi.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeEnterpriseTags**](EnterpriseApi.md#changeEnterpriseTags) | **PUT** /v1/enterprise/{enterpriseId}/tags | Set Enterprise Tags
[**createEnterpriseUser**](EnterpriseApi.md#createEnterpriseUser) | **POST** /v1/enterprise/{enterpriseId}/users | Create User
[**exportUsers**](EnterpriseApi.md#exportUsers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**getEnterpriseTags**](EnterpriseApi.md#getEnterpriseTags) | **GET** /v1/enterprise/{enterpriseId}/tags | List Enterprise Tags
[**removeUser**](EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**searchUsers**](EnterpriseApi.md#searchUsers) | **GET** /v1/enterprise/{enterpriseId}/users | Search for User(s)


<a name="changeEnterpriseTags"></a>
# **changeEnterpriseTags**
> TagListComp changeEnterpriseTags(enterpriseId, action, tag)

Set Enterprise Tags

This endpoint modifies the list of profile tags associated with the specified enterprise.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var action = "action_example"; // String | Type of operation to be done

var tag = "tag_example"; // String | The name of tag


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.changeEnterpriseTags(enterpriseId, action, tag, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **action** | **String**| Type of operation to be done | 
 **tag** | **String**| The name of tag | 

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="createEnterpriseUser"></a>
# **createEnterpriseUser**
> UserId createEnterpriseUser(enterpriseId, enterpriseUser, opts)

Create User

This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user&#39;s personal meeting room.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var enterpriseUser = new BlueJeansMeetingsRestApi.EnterpriseCreateUser(); // EnterpriseCreateUser | Basic Enterprise Account information

var opts = { 
  'billingCategory': "ENTERPRISE", // String | What general billing group does this profile belong?
  'forcePasswordChange': true, // Boolean | Create profile and force user to change password on next login
  'isAdmin': true // Boolean | Create this account to have Administrative Privileges for the enterprise
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.createEnterpriseUser(enterpriseId, enterpriseUser, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **enterpriseUser** | [**EnterpriseCreateUser**](EnterpriseCreateUser.md)| Basic Enterprise Account information | 
 **billingCategory** | **String**| What general billing group does this profile belong? | [optional] [default to ENTERPRISE]
 **forcePasswordChange** | **Boolean**| Create profile and force user to change password on next login | [optional] 
 **isAdmin** | **Boolean**| Create this account to have Administrative Privileges for the enterprise | [optional] 

### Return type

[**UserId**](UserId.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="exportUsers"></a>
# **exportUsers**
> exportUsers(enterpriseId)

Export Enterprise Users

This endpoint exports existing users into a CSV file.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.exportUsers(enterpriseId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

<a name="getEnterpriseTags"></a>
# **getEnterpriseTags**
> TagListComp getEnterpriseTags(enterpriseId)

List Enterprise Tags

This endpoint retrieves all profile tags defined for the specified enterprise.

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getEnterpriseTags(enterpriseId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**TagListComp**](TagListComp.md)

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
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

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

<a name="searchUsers"></a>
# **searchUsers**
> EnterpriseUserSearch searchUsers(enterpriseId, opts)

Search for User(s)

This endpoint provides a search facility for the specified enterprise.  &lt;ul&gt;&lt;li&gt;If textSearch is provided, the results will be a partial string-match search of the given textSearch value.&lt;/li&gt;&lt;li&gt; Otherwise, the search will return an exact lookup by emailId.&lt;/li&gt;&lt;/ul&gt;

### Example
```javascript
var BlueJeansMeetingsRestApi = require('bluejeans-api-rest-meetings');
var defaultClient = BlueJeansMeetingsRestApi.ApiClient.instance;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR ACCESS TOKEN';
access_token.name   = "access_token";
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansMeetingsRestApi.EnterpriseApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'fields': "fields_example", // String | A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email
  'order': "order_example", // String | If specificed, order defines how the API sorts results- ascending or descending
  'sortBy': "sortBy_example", // String | Name of BlueJeans profile field by with API response data is sorted
  'textSearch': "textSearch_example", // String | If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users
  'emailId': "emailId_example", // String | If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value.
  'pageSize': 56, // Number | Sets number of items returned per page.
  'pageNumber': 56 // Number | Selects which page of results to return (1-based value)
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.searchUsers(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **fields** | **String**| A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email | [optional] 
 **order** | **String**| If specificed, order defines how the API sorts results- ascending or descending | [optional] 
 **sortBy** | **String**| Name of BlueJeans profile field by with API response data is sorted | [optional] 
 **textSearch** | **String**| If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users | [optional] 
 **emailId** | **String**| If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. | [optional] 
 **pageSize** | **Number**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **Number**| Selects which page of results to return (1-based value) | [optional] 

### Return type

[**EnterpriseUserSearch**](EnterpriseUserSearch.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

