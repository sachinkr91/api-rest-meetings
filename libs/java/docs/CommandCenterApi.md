# CommandCenterApi

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
> AnalyticsEndpointDistribution getEndpointDistribution(enterpriseId, filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsEndpointDistribution result = apiInstance.getEndpointDistribution(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getEndpointDistribution");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsEndpointDistributionV2 getEndpointDistributionV2(enterpriseId, filter, appName)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsEndpointDistributionV2 result = apiInstance.getEndpointDistributionV2(enterpriseId, filter, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getEndpointDistributionV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> MeetingSummaryInfo getEnterpriseOverallSummary(enterpriseId, filter, appName)

Overall Enterprise Summary

This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-04T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-10T23:59:59-07:00\",\"field\":\"hights\"}]`
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    MeetingSummaryInfo result = apiInstance.getEnterpriseOverallSummary(enterpriseId, filter, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getEnterpriseOverallSummary");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> EnterpriseUsersActive getEnterpriseUsersActive(enterpriseId, filter, clientTZ, limit, appName)

Enterprise User Summary

This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"'%Y-%m-%d'\",\"field\":\"dateFormat\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-14T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-20T23:59:00-07:00\",\"field\":\"hights\"}]`
String clientTZ = "clientTZ_example"; // String | Timezone of the requesting site in the format `America/Los_Angeles`
Integer limit = 0; // Integer | The maximum number of records to return.  A value of `0` returns all records
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    EnterpriseUsersActive result = apiInstance.getEnterpriseUsersActive(enterpriseId, filter, clientTZ, limit, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getEnterpriseUsersActive");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **String**| A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; |
 **clientTZ** | **String**| Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; | [optional]
 **limit** | **Integer**| The maximum number of records to return.  A value of &#x60;0&#x60; returns all records | [optional] [default to 0]
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
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String end = "2018-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
try {
    AnalyticsFeedbackComments result = apiInstance.getFeedbackComments(enterpriseId, start, end);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getFeedbackComments");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsFeedbackComments getFeedbackCommentsV2(enterpriseId, filter, limit, appName)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"endTime\" }]
Integer limit = 56; // Integer | The limit on the number of responses to return
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsFeedbackComments result = apiInstance.getFeedbackCommentsV2(enterpriseId, filter, limit, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getFeedbackCommentsV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **String**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] |
 **limit** | **Integer**| The limit on the number of responses to return | [optional]
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
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String end = "2018-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
try {
    AnalyticsFeedbackScores result = apiInstance.getFeedbackCount(enterpriseId, start, end);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getFeedbackCount");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsFeedbackScores getFeedbackCountV2(enterpriseId, start, end, appName)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String start = "2017-01-01T00:00:00.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String end = "2018-01-01T23:59:59.000+0000"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsFeedbackScores result = apiInstance.getFeedbackCountV2(enterpriseId, start, end, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getFeedbackCountV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> EndpointLocationSummary getGeoMap(enterpriseId, filter, offset, limit, appName)

Geographic Demographics

This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. `[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-05-31T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-07T23:59:59-07:00\",\"field\":\"start_time\"}]`
Integer offset = 0; // Integer | Offset into the total set of datarecords.  If offset=0, return data includes size of data.
Integer limit = 0; // Integer | The Limit sets the maximum number of data records to return .  Limit=0 returns the full dataset
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    EndpointLocationSummary result = apiInstance.getGeoMap(enterpriseId, filter, offset, limit, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getGeoMap");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **String**| An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; |
 **offset** | **Integer**| Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. | [optional] [default to 0]
 **limit** | **Integer**| The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset | [optional] [default to 0]
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
> MeetingExtendedIndigo getMeetingEndpointsLiveByEnterprise(enterpriseId, meetingUuid, appName)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingEndpointsLiveByEnterprise(enterpriseId, meetingUuid, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingEndpointsLiveByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> MeetingExtendedIndigo getMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints)

List Meeting Endpoints &amp; Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
Boolean includeEndpoints = true; // Boolean | Option to include detailed data on endpoints
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingPastByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingPastByUser(userId, meetingUuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingPastByUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
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
> AnalyticsUsage getMeetingUsage(enterpriseId, clientTZ, filter)

Meeting Usage Over Time

This endpoint reports on meeting usage. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String clientTZ = "America/Denver"; // String | Based on standard TZ code.
String filter = "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsUsage result = apiInstance.getMeetingUsage(enterpriseId, clientTZ, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingUsage");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsUsage getMeetingUsageV2(enterpriseId, filter, clientTZ, appName)

Meeting Usage Over Time

This endpoint reports on meeting usage.  Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"hights\"}]
String clientTZ = "America/Denver"; // String | Based on standard TZ code.
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsUsage result = apiInstance.getMeetingUsageV2(enterpriseId, filter, clientTZ, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingUsageV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> MeetingIndigoList getMeetingsLiveByEnterprise(enterpriseId, appName)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    MeetingIndigoList result = apiInstance.getMeetingsLiveByEnterprise(enterpriseId, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsLiveByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> MeetingIndigoList getMeetingsPastByEnterprise(enterpriseId, offset, limit, filter, count, appName)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
Integer offset = 56; // Integer | Page Number
Integer limit = 56; // Integer | Per page
String filter = "filter_example"; // String | An array of search filter conditions that describe the limits of the search to perform. For example `[{\"type\":\"date\",\"value\":\"2018-06-05T00:00:00-07:00\",\"field\":\"startTime\",\"comparison\":\"gt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"endTime\",\"comparison\":\"lt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"startTime\",\"comparison\":\"lt\"}]`
Boolean count = true; // Boolean | Include total count of meetings in response
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    MeetingIndigoList result = apiInstance.getMeetingsPastByEnterprise(enterpriseId, offset, limit, filter, count, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsPastByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **offset** | **Integer**| Page Number | [optional]
 **limit** | **Integer**| Per page | [optional]
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
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String filter = "filter_example"; // String | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below.
try {
    MeetingIndigoList result = apiInstance.getMeetingsPastByUser(userId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsPastByUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
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
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsRoiData result = apiInstance.getRoiRanges(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getRoiRanges");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsRoiData getRoiRangesV2(enterpriseId, filter, appName)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"startTime\" }]
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsRoiData result = apiInstance.getRoiRangesV2(enterpriseId, filter, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getRoiRangesV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsTopUsers getTopUsers(enterpriseId, filter)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsTopUsers result = apiInstance.getTopUsers(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getTopUsers");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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
> AnalyticsTopUsers getTopUsersV2(enterpriseId, filter, appName)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "filter_example"; // String | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]
String appName = "api_developer"; // String | name of your application.  While not required, providing an app_name improves API performance
try {
    AnalyticsTopUsers result = apiInstance.getTopUsersV2(enterpriseId, filter, appName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getTopUsersV2");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **String**| A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] |
 **appName** | **String**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**AnalyticsTopUsers**](AnalyticsTopUsers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

