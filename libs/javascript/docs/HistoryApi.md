# BlueJeansOnVideoRestApi.HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRecording**](HistoryApi.md#getRecording) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | Get Recording
[**listMeetingsByEnterprise**](HistoryApi.md#listMeetingsByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List Meetings
[**listMeetingsByUser**](HistoryApi.md#listMeetingsByUser) | **GET** /v1/user/{user_id}/meeting_history | List Meetings
[**listRecordings**](HistoryApi.md#listRecordings) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings
[**v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | List Meetings
[**v1UserUserIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1UserUserIdMeetingHistoryMeetingGuidGet) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | List Meetings


<a name="getRecording"></a>
# **getRecording**
> Recording getRecording(userId, recordingEntityId)

Get Recording

This endpoint retrieves the details about a meeting recording.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var recordingEntityId = 56; // Integer | The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.


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
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **recordingEntityId** | **Integer**| The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. | 

### Return type

[**Recording**](Recording.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listMeetingsByEnterprise"></a>
# **listMeetingsByEnterprise**
> [MeetingHistory] listMeetingsByEnterprise(enterpriseId)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listMeetingsByEnterprise(enterpriseId, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**[MeetingHistory]**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listMeetingsByUser"></a>
# **listMeetingsByUser**
> [MeetingHistory] listMeetingsByUser(userId, opts)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var opts = { 
  'meetingId': "meetingId_example", // String | Return meetings with the specified Meeting ID (recurring & Personal Meeting ID).
  'startDate': "startDate_example", // String | Return meetings starting from the specified date. MM/DD/YYYY
  'endDate': "endDate_example", // String | Return meetings up until the specified date. MM/DD/YYYY
  'pageSize': 56, // Integer | Sets number of items returned per page.
  'pageNumber': 56, // Integer | Selects which page of results to return.
  'order': "order_example" // String | Puts results in ascending or descending order. asc/desc
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.listMeetingsByUser(userId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **String**| Return meetings with the specified Meeting ID (recurring &amp; Personal Meeting ID). | [optional] 
 **startDate** | **String**| Return meetings starting from the specified date. MM/DD/YYYY | [optional] 
 **endDate** | **String**| Return meetings up until the specified date. MM/DD/YYYY | [optional] 
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **Integer**| Selects which page of results to return. | [optional] 
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
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var opts = { 
  'pageSize': 10, // Integer | Sets number of items returned per page.
  'pageNumber': 1, // Integer | Selects which page of results to return.
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
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional] [default to 10]
 **pageNumber** | **Integer**| Selects which page of results to return. | [optional] [default to 1]
 **sortBy** | **String**| Selects which page of results to return. | [optional] [default to start_time]
 **order** | **String**| Puts results in ascending or descending order. | [optional] [default to desc]

### Return type

[**[RecordingSummary]**](RecordingSummary.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet"></a>
# **v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**
> Meeting v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet(enterpriseId, meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet(enterpriseId, meetingGuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdMeetingHistoryMeetingGuidGet"></a>
# **v1UserUserIdMeetingHistoryMeetingGuidGet**
> Meeting v1UserUserIdMeetingHistoryMeetingGuidGet(userId, meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```javascript
var BlueJeansOnVideoRestApi = require('blue_jeans_on_video_rest_api');
var defaultClient = BlueJeansOnVideoRestApi.ApiClient.default;

// Configure API key authorization: access_token
var access_token = defaultClient.authentications['access_token'];
access_token.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.apiKeyPrefix = 'Token';

var apiInstance = new BlueJeansOnVideoRestApi.HistoryApi();

var userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.v1UserUserIdMeetingHistoryMeetingGuidGet(userId, meetingGuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

