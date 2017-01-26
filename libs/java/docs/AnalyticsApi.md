# AnalyticsApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
[**v1EnterpriseEnterpriseIdIndigoFeedbackCountGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoFeedbackCountGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores


<a name="v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet"></a>
# **v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet**
> AnalyticsEndpointDistribution v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet(enterpriseId, filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsEndpointDistribution result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet");
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

<a name="v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet"></a>
# **v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet**
> AnalyticsFeedbackComments v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet(enterpriseId, start, end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String start = "2017-01-01T00:00:00-00:00"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String end = "2018-01-01T00:00:00-00:00"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
try {
    AnalyticsFeedbackComments result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet(enterpriseId, start, end);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackComments**](AnalyticsFeedbackComments.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet"></a>
# **v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet**
> AnalyticsUsage v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet(enterpriseId, clientTZ, filter)

Meeting Usage Over Time

This endpoint reports on meeting usage.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String clientTZ = "America/Denver"; // String | Based on standard TZ code.
String filter = "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsUsage result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet(enterpriseId, clientTZ, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet");
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

<a name="v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet"></a>
# **v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet**
> AnalyticsRoiData v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet(enterpriseId, filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsRoiData result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet");
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

<a name="v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet"></a>
# **v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet**
> AnalyticsTopUsers v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet(enterpriseId, filter)

Top Users

This endpoint retrieves the top useres by usage for an enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]"; // String | URL-encoded JSON string
try {
    AnalyticsTopUsers result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet(enterpriseId, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet");
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

<a name="v1EnterpriseEnterpriseIdIndigoFeedbackCountGet"></a>
# **v1EnterpriseEnterpriseIdIndigoFeedbackCountGet**
> AnalyticsFeedbackScores v1EnterpriseEnterpriseIdIndigoFeedbackCountGet(enterpriseId, start, end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.AnalyticsApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AnalyticsApi apiInstance = new AnalyticsApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String start = "2017-01-01T00:00:00-00:00"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
String end = "2018-01-01T00:00:00-00:00"; // String | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
try {
    AnalyticsFeedbackScores result = apiInstance.v1EnterpriseEnterpriseIdIndigoFeedbackCountGet(enterpriseId, start, end);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoFeedbackCountGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **String**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackScores**](AnalyticsFeedbackScores.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

