# BlueJeansMeetingsRestApi.CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEndpointDistribution**](CommandCenterApi.md#getEndpointDistribution) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**getEndpointDistributionV2**](CommandCenterApi.md#getEndpointDistributionV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new | Endpoint Distribution
[**getEnterpriseOverallSummary**](CommandCenterApi.md#getEnterpriseOverallSummary) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary | Overall Enterprise Summary
[**getEnterpriseUsersActive**](CommandCenterApi.md#getEnterpriseUsersActive) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/users/active | Enterprise User Summary
[**getFeedbackComments**](CommandCenterApi.md#getFeedbackComments) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**getFeedbackCommentsV2**](CommandCenterApi.md#getFeedbackCommentsV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**getFeedbackCount**](CommandCenterApi.md#getFeedbackCount) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
[**getFeedbackCountV2**](CommandCenterApi.md#getFeedbackCountV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
[**getGeoMap**](CommandCenterApi.md#getGeoMap) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries | Geographic Demographics
[**getMeetingEndpointsLiveByEnterprise**](CommandCenterApi.md#getMeetingEndpointsLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**getMeetingPastByEnterprise**](CommandCenterApi.md#getMeetingPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
[**getMeetingPastByUser**](CommandCenterApi.md#getMeetingPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
[**getMeetingUsage**](CommandCenterApi.md#getMeetingUsage) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**getMeetingUsageV2**](CommandCenterApi.md#getMeetingUsageV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**getMeetingsLiveByEnterprise**](CommandCenterApi.md#getMeetingsLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**getMeetingsPastByEnterprise**](CommandCenterApi.md#getMeetingsPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**getMeetingsPastByUser**](CommandCenterApi.md#getMeetingsPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**getRoiRanges**](CommandCenterApi.md#getRoiRanges) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**getRoiRangesV2**](CommandCenterApi.md#getRoiRangesV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**getTopUsers**](CommandCenterApi.md#getTopUsers) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
[**getTopUsersV2**](CommandCenterApi.md#getTopUsersV2) | **GET** /v2/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users


<a name="getEndpointDistribution"></a>
# **getEndpointDistribution**
> AnalyticsEndpointDistribution getEndpointDistribution(enterpriseId, opts)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'filter': "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]" // String | URL-encoded JSON string
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getEndpointDistribution(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}]]

### Return type

[**AnalyticsEndpointDistribution**](AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEndpointDistributionV2"></a>
# **getEndpointDistributionV2**
> AnalyticsEndpointDistributionV2 getEndpointDistributionV2(enterpriseId, filter, opts)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getEndpointDistributionV2(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsEndpointDistributionV2**](AnalyticsEndpointDistributionV2.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEnterpriseOverallSummary"></a>
# **getEnterpriseOverallSummary**
> MeetingSummaryInfo getEnterpriseOverallSummary(enterpriseId, filter, opts)

Overall Enterprise Summary

This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-04T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-10T23:59:59-07:00\",\"field\":\"hights\"}]`

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getEnterpriseOverallSummary(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**MeetingSummaryInfo**](MeetingSummaryInfo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEnterpriseUsersActive"></a>
# **getEnterpriseUsersActive**
> EnterpriseUsersActive getEnterpriseUsersActive(enterpriseId, filter, opts)

Enterprise User Summary

This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"'%Y-%m-%d'\",\"field\":\"dateFormat\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-14T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-20T23:59:00-07:00\",\"field\":\"hights\"}]`

var opts = { 
  'clientTZ': "clientTZ_example", // String | Timezone of the requesting site in the format `America/Los_Angeles`
  'limit': 0, // Number | The maximum number of records to return.  A value of `0` returns all records
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getEnterpriseUsersActive(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; | 
 **clientTZ** | **String**| Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; | [optional] 
 **limit** | **Number**| The maximum number of records to return.  A value of &#x60;0&#x60; returns all records | [optional] [default to 0]
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**EnterpriseUsersActive**](EnterpriseUsersActive.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getFeedbackComments"></a>
# **getFeedbackComments**
> AnalyticsFeedbackComments getFeedbackComments(enterpriseId, start, end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

var end = "2018-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFeedbackComments(enterpriseId, start, end, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00.000+0000]

### Return type

[**AnalyticsFeedbackComments**](AnalyticsFeedbackComments.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getFeedbackCommentsV2"></a>
# **getFeedbackCommentsV2**
> AnalyticsFeedbackComments getFeedbackCommentsV2(enterpriseId, filter, opts)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"endTime\" }]

var opts = { 
  'limit': 56, // Number | The limit on the number of responses to return
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFeedbackCommentsV2(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] | 
 **limit** | **Number**| The limit on the number of responses to return | [optional] 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsFeedbackComments**](AnalyticsFeedbackComments.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getFeedbackCount"></a>
# **getFeedbackCount**
> AnalyticsFeedbackScores getFeedbackCount(enterpriseId, start, end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

var end = "2018-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFeedbackCount(enterpriseId, start, end, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00.000+0000]

### Return type

[**AnalyticsFeedbackScores**](AnalyticsFeedbackScores.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getFeedbackCountV2"></a>
# **getFeedbackCountV2**
> AnalyticsFeedbackScores getFeedbackCountV2(enterpriseId, start, end, opts)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

var end = "2018-01-01T23:59:59.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFeedbackCountV2(enterpriseId, start, end, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T23:59:59.000+0000]
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsFeedbackScores**](AnalyticsFeedbackScores.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getGeoMap"></a>
# **getGeoMap**
> EndpointLocationSummary getGeoMap(enterpriseId, filter, opts)

Geographic Demographics

This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. `[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-05-31T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-07T23:59:59-07:00\",\"field\":\"start_time\"}]`

var opts = { 
  'offset': 0, // Number | Offset into the total set of datarecords.  If offset=0, return data includes size of data.
  'limit': 0, // Number | The Limit sets the maximum number of data records to return .  Limit=0 returns the full dataset
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getGeoMap(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; | 
 **offset** | **Number**| Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. | [optional] [default to 0]
 **limit** | **Number**| The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset | [optional] [default to 0]
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**EndpointLocationSummary**](EndpointLocationSummary.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingEndpointsLiveByEnterprise"></a>
# **getMeetingEndpointsLiveByEnterprise**
> MeetingExtendedIndigo getMeetingEndpointsLiveByEnterprise(enterpriseId, meetingUuid, opts)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingEndpointsLiveByEnterprise(enterpriseId, meetingUuid, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingPastByEnterprise"></a>
# **getMeetingPastByEnterprise**
> MeetingExtendedIndigo getMeetingPastByEnterprise(enterpriseId, meetingUuid, opts)

List Meeting Endpoints &amp; Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

var opts = { 
  'includeEndpoints': true // Boolean | Option to include detailed data on endpoints
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingPastByEnterprise(enterpriseId, meetingUuid, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 
 **includeEndpoints** | **Boolean**| Option to include detailed data on endpoints | [optional] 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingPastByUser"></a>
# **getMeetingPastByUser**
> MeetingExtendedIndigo getMeetingPastByUser(userId, meetingUuid)

List Meeting Endpoints &amp; Stats by User

This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingPastByUser(userId, meetingUuid, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingUsage"></a>
# **getMeetingUsage**
> AnalyticsUsage getMeetingUsage(enterpriseId, opts)

Meeting Usage Over Time

This endpoint reports on meeting usage. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'clientTZ': "America/Denver", // String | Based on standard TZ code.
  'filter': "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]" // String | URL-encoded JSON string
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingUsage(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **clientTZ** | **String**| Based on standard TZ code. | [optional] [default to America/Denver]
 **filter** | **String**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}]]

### Return type

[**AnalyticsUsage**](AnalyticsUsage.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingUsageV2"></a>
# **getMeetingUsageV2**
> AnalyticsUsage getMeetingUsageV2(enterpriseId, filter, opts)

Meeting Usage Over Time

This endpoint reports on meeting usage.  Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"hights\"}]

var opts = { 
  'clientTZ': "America/Denver", // String | Based on standard TZ code.
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingUsageV2(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] | 
 **clientTZ** | **String**| Based on standard TZ code. | [optional] [default to America/Denver]
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsUsage**](AnalyticsUsage.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsLiveByEnterprise"></a>
# **getMeetingsLiveByEnterprise**
> MeetingIndigoList getMeetingsLiveByEnterprise(enterpriseId, opts)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingsLiveByEnterprise(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsPastByEnterprise"></a>
# **getMeetingsPastByEnterprise**
> MeetingIndigoList getMeetingsPastByEnterprise(enterpriseId, opts)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'offset': 56, // Number | Page Number
  'limit': 56, // Number | Per page
  'filter': "filter_example", // String | An array of search filter conditions that describe the limits of the search to perform. For example `[{\"type\":\"date\",\"value\":\"2018-06-05T00:00:00-07:00\",\"field\":\"startTime\",\"comparison\":\"gt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"endTime\",\"comparison\":\"lt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"startTime\",\"comparison\":\"lt\"}]`
  'count': true, // Boolean | Include total count of meetings in response
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingsPastByEnterprise(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **offset** | **Number**| Page Number | [optional] 
 **limit** | **Number**| Per page | [optional] 
 **filter** | **String**| An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; | [optional] 
 **count** | **Boolean**| Include total count of meetings in response | [optional] 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsPastByUser"></a>
# **getMeetingsPastByUser**
> MeetingIndigoList getMeetingsPastByUser(userId, filter)

List Past Meetings by User

This endpoint lists completed meetings by user. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var userId = 56; // Number | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

var filter = "filter_example"; // String | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getMeetingsPastByUser(userId, filter, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Number**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **filter** | **String**| An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. | 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRoiRanges"></a>
# **getRoiRanges**
> AnalyticsRoiData getRoiRanges(enterpriseId, filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // String | URL-encoded JSON string


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRoiRanges(enterpriseId, filter, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded JSON string | [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;}]]

### Return type

[**AnalyticsRoiData**](AnalyticsRoiData.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRoiRangesV2"></a>
# **getRoiRangesV2**
> AnalyticsRoiData getRoiRangesV2(enterpriseId, filter, opts)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"startTime\" }]

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRoiRangesV2(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsRoiData**](AnalyticsRoiData.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getTopUsers"></a>
# **getTopUsers**
> AnalyticsTopUsers getTopUsers(enterpriseId, opts)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var opts = { 
  'filter': "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]" // String | URL-encoded JSON string
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTopUsers(enterpriseId, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}]]

### Return type

[**AnalyticsTopUsers**](AnalyticsTopUsers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getTopUsersV2"></a>
# **getTopUsersV2**
> AnalyticsTopUsers getTopUsersV2(enterpriseId, filter, opts)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

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

var apiInstance = new BlueJeansMeetingsRestApi.CommandCenterApi();

var enterpriseId = 56; // Number | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

var filter = "filter_example"; // String | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]

var opts = { 
  'appName': "api_developer" // String | name of your application.  While not required, providing an app_name improves API performance
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getTopUsersV2(enterpriseId, filter, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Number**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **String**| A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] | 
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsTopUsers**](AnalyticsTopUsers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

