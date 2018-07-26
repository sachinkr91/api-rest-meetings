# BlueJeansMeetingsRestApi.HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoryByEnterprise**](HistoryApi.md#getHistoryByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | Get Meeting History by Enterprise
[**getHistoryByUser**](HistoryApi.md#getHistoryByUser) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | Get Meeting History by User
[**getHistorySharingByUser**](HistoryApi.md#getHistorySharingByUser) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid}/sharing | Get Meeting History Sharing by User
[**getRecording**](HistoryApi.md#getRecording) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | Get Recording
[**listHistoryByEnterprise**](HistoryApi.md#listHistoryByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List History by Enterprise
[**listHistoryByUser**](HistoryApi.md#listHistoryByUser) | **GET** /v1/user/{user_id}/meeting_history | List History by User
[**listRecordings**](HistoryApi.md#listRecordings) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings


<a name="getHistoryByEnterprise"></a>
# **getHistoryByEnterprise**
> MeetingHistory getHistoryByEnterprise(enterpriseId, meetingGuid)

Get Meeting History by Enterprise

This endpoint retrieves the meeting history for a specific instance of a meeting.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getHistoryByEnterprise(enterpriseId, meetingGuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**MeetingHistory**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getHistoryByUser"></a>
# **getHistoryByUser**
> MeetingHistory getHistoryByUser(userId, meetingGuid)

Get Meeting History by User

This endpoint retrieves the meeting history for a specific instance of a meeting.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getHistoryByUser(userId, meetingGuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**MeetingHistory**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getHistorySharingByUser"></a>
# **getHistorySharingByUser**
> MeetingHistorySharing getHistorySharingByUser(userId, meetingGuid)

Get Meeting History Sharing by User

This endpoint retrieves the meeting history sharing for a specific instance of a meeting.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getHistorySharingByUser(userId, meetingGuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**MeetingHistorySharing**](MeetingHistorySharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRecording"></a>
# **getRecording**
> Recording getRecording(userId, recordingEntityId)

Get Recording

This endpoint retrieves the details about a meeting recording.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var recordingEntityId = 56; // Number | The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRecording(userId, recordingEntityId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **recordingEntityId** | **Number**| The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. | 

### Return type

[**Recording**](Recording.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listHistoryByEnterprise"></a>
# **listHistoryByEnterprise**
> [MeetingHistory] listHistoryByEnterprise(enterpriseId)

List History by Enterprise

This endpoint retrieves a list of meeting histories by the given enterprise.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listHistoryByEnterprise(enterpriseId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**[MeetingHistory]**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listHistoryByUser"></a>
# **listHistoryByUser**
> [MeetingHistory] listHistoryByUser(userId, opts)

List History by User

This endpoint retrieves a list of meeting histories by the given user.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var opts = { 
  'meetingId': "meetingId_example", // String | Return only meetings with the specified meeting numeric ID.
  'startDate': "startDate_example", // String | Return meetings starting from the specified date. MM/DD/YYYY
  'endDate': "endDate_example", // String | Return meetings up until the specified date. MM/DD/YYYY
  'pageSize': 56, // Number | Sets number of items returned per page.
  'pageNumber': 56, // Number | Selects which page of results to return.
  'order': "order_example" // String | Puts results in ascending or descending order. asc/desc
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listHistoryByUser(userId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **String**| Return only meetings with the specified meeting numeric ID. | [optional] 
 **startDate** | **String**| Return meetings starting from the specified date. MM/DD/YYYY | [optional] 
 **endDate** | **String**| Return meetings up until the specified date. MM/DD/YYYY | [optional] 
 **pageSize** | **Number**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **Number**| Selects which page of results to return. | [optional] 
 **order** | **String**| Puts results in ascending or descending order. asc/desc | [optional] 

### Return type

[**[MeetingHistory]**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listRecordings"></a>
# **listRecordings**
> [RecordingSummary] listRecordings(userId, opts)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

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

var apiInstance = new BlueJeansMeetingsRestApi.HistoryApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var opts = { 
  'pageSize': 10, // Number | Sets number of items returned per page.
  'pageNumber': 1, // Number | Selects which page of results to return.
  'sortBy': "start_time", // String | Selects which page of results to return.
  'order': "desc" // String | Puts results in ascending or descending order.
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listRecordings(userId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **pageSize** | **Number**| Sets number of items returned per page. | [optional] [default to 10]
 **pageNumber** | **Number**| Selects which page of results to return. | [optional] [default to 1]
 **sortBy** | **String**| Selects which page of results to return. | [optional] [default to start_time]
 **order** | **String**| Puts results in ascending or descending order. | [optional] [default to desc]

### Return type

[**[RecordingSummary]**](RecordingSummary.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

