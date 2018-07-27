# BlueJeansMeetingsRestApi\CommandCenterApi

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


# **getEndpointDistribution**
> \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution getEndpointDistribution($enterprise_id, $filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $apiInstance->getEndpointDistribution($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getEndpointDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}]]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution**](../Model/AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEndpointDistributionV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2 getEndpointDistributionV2($enterprise_id, $filter, $app_name)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getEndpointDistributionV2($enterprise_id, $filter, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getEndpointDistributionV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2**](../Model/AnalyticsEndpointDistributionV2.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseOverallSummary**
> \BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo getEnterpriseOverallSummary($enterprise_id, $filter, $app_name)

Overall Enterprise Summary

This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-04T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-10T23:59:59-07:00\",\"field\":\"hights\"}]`
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getEnterpriseOverallSummary($enterprise_id, $filter, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getEnterpriseOverallSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo**](../Model/MeetingSummaryInfo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseUsersActive**
> \BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive getEnterpriseUsersActive($enterprise_id, $filter, $client_tz, $limit, $app_name)

Enterprise User Summary

This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"'%Y-%m-%d'\",\"field\":\"dateFormat\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-14T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-20T23:59:00-07:00\",\"field\":\"hights\"}]`
$client_tz = "client_tz_example"; // string | Timezone of the requesting site in the format `America/Los_Angeles`
$limit = 0; // int | The maximum number of records to return.  A value of `0` returns all records
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getEnterpriseUsersActive($enterprise_id, $filter, $client_tz, $limit, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getEnterpriseUsersActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; |
 **client_tz** | **string**| Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; | [optional]
 **limit** | **int**| The maximum number of records to return.  A value of &#x60;0&#x60; returns all records | [optional] [default to 0]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive**](../Model/EnterpriseUsersActive.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackComments**
> \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments getFeedbackComments($enterprise_id, $start, $end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $apiInstance->getFeedbackComments($enterprise_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getFeedbackComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00.000+0000]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments**](../Model/AnalyticsFeedbackComments.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackCommentsV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments getFeedbackCommentsV2($enterprise_id, $filter, $limit, $app_name)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"endTime\" }]
$limit = 56; // int | The limit on the number of responses to return
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getFeedbackCommentsV2($enterprise_id, $filter, $limit, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getFeedbackCommentsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] |
 **limit** | **int**| The limit on the number of responses to return | [optional]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments**](../Model/AnalyticsFeedbackComments.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackCount**
> \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores getFeedbackCount($enterprise_id, $start, $end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $apiInstance->getFeedbackCount($enterprise_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getFeedbackCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00.000+0000]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores**](../Model/AnalyticsFeedbackScores.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackCountV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores getFeedbackCountV2($enterprise_id, $start, $end, $app_name)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T23:59:59.000+0000"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getFeedbackCountV2($enterprise_id, $start, $end, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getFeedbackCountV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00.000+0000]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T23:59:59.000+0000]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores**](../Model/AnalyticsFeedbackScores.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGeoMap**
> \BlueJeansMeetingsRestApi\Model\EndpointLocationSummary getGeoMap($enterprise_id, $filter, $offset, $limit, $app_name)

Geographic Demographics

This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. `[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-05-31T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-07T23:59:59-07:00\",\"field\":\"start_time\"}]`
$offset = 0; // int | Offset into the total set of datarecords.  If offset=0, return data includes size of data.
$limit = 0; // int | The Limit sets the maximum number of data records to return .  Limit=0 returns the full dataset
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getGeoMap($enterprise_id, $filter, $offset, $limit, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getGeoMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; |
 **offset** | **int**| Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. | [optional] [default to 0]
 **limit** | **int**| The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset | [optional] [default to 0]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary**](../Model/EndpointLocationSummary.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingEndpointsLiveByEnterprise**
> \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo getMeetingEndpointsLiveByEnterprise($enterprise_id, $meeting_uuid, $app_name)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getMeetingEndpointsLiveByEnterprise($enterprise_id, $meeting_uuid, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingEndpointsLiveByEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meeting_uuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingPastByEnterprise**
> \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo getMeetingPastByEnterprise($enterprise_id, $meeting_uuid, $include_endpoints)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
$include_endpoints = true; // bool | Option to include detailed data on endpoints

try {
    $result = $apiInstance->getMeetingPastByEnterprise($enterprise_id, $meeting_uuid, $include_endpoints);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingPastByEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meeting_uuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |
 **include_endpoints** | **bool**| Option to include detailed data on endpoints | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingPastByUser**
> \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo getMeetingPastByUser($user_id, $meeting_uuid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

try {
    $result = $apiInstance->getMeetingPastByUser($user_id, $meeting_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingPastByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_uuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingUsage**
> \BlueJeansMeetingsRestApi\Model\AnalyticsUsage getMeetingUsage($enterprise_id, $client_tz, $filter)

Meeting Usage Over Time

This endpoint reports on meeting usage. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$client_tz = "America/Denver"; // string | Based on standard TZ code.
$filter = "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]"; // string | URL-encoded JSON string

try {
    $result = $apiInstance->getMeetingUsage($enterprise_id, $client_tz, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **client_tz** | **string**| Based on standard TZ code. | [optional] [default to America/Denver]
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}]]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsUsage**](../Model/AnalyticsUsage.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingUsageV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsUsage getMeetingUsageV2($enterprise_id, $filter, $client_tz, $app_name)

Meeting Usage Over Time

This endpoint reports on meeting usage.  Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"hights\"}]
$client_tz = "America/Denver"; // string | Based on standard TZ code.
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getMeetingUsageV2($enterprise_id, $filter, $client_tz, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingUsageV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] |
 **client_tz** | **string**| Based on standard TZ code. | [optional] [default to America/Denver]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsUsage**](../Model/AnalyticsUsage.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsLiveByEnterprise**
> \BlueJeansMeetingsRestApi\Model\MeetingIndigoList getMeetingsLiveByEnterprise($enterprise_id, $app_name)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getMeetingsLiveByEnterprise($enterprise_id, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingsLiveByEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsPastByEnterprise**
> \BlueJeansMeetingsRestApi\Model\MeetingIndigoList getMeetingsPastByEnterprise($enterprise_id, $offset, $limit, $filter, $count, $app_name)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$offset = 56; // int | Page Number
$limit = 56; // int | Per page
$filter = "filter_example"; // string | An array of search filter conditions that describe the limits of the search to perform. For example `[{\"type\":\"date\",\"value\":\"2018-06-05T00:00:00-07:00\",\"field\":\"startTime\",\"comparison\":\"gt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"endTime\",\"comparison\":\"lt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"startTime\",\"comparison\":\"lt\"}]`
$count = true; // bool | Include total count of meetings in response
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getMeetingsPastByEnterprise($enterprise_id, $offset, $limit, $filter, $count, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingsPastByEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **offset** | **int**| Page Number | [optional]
 **limit** | **int**| Per page | [optional]
 **filter** | **string**| An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; | [optional]
 **count** | **bool**| Include total count of meetings in response | [optional]
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsPastByUser**
> \BlueJeansMeetingsRestApi\Model\MeetingIndigoList getMeetingsPastByUser($user_id, $filter)

List Past Meetings by User

This endpoint lists completed meetings by user. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$filter = "filter_example"; // string | An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below.

try {
    $result = $apiInstance->getMeetingsPastByUser($user_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingsPastByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **filter** | **string**| An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoiRanges**
> \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData getRoiRanges($enterprise_id, $filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // string | URL-encoded JSON string

try {
    $result = $apiInstance->getRoiRanges($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getRoiRanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;}]]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData**](../Model/AnalyticsRoiData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoiRangesV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData getRoiRangesV2($enterprise_id, $filter, $app_name)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"startTime\" }]
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getRoiRangesV2($enterprise_id, $filter, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getRoiRangesV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData**](../Model/AnalyticsRoiData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopUsers**
> \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers getTopUsers($enterprise_id, $filter)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $apiInstance->getTopUsers($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getTopUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}]]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers**](../Model/AnalyticsTopUsers.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopUsersV2**
> \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers getTopUsersV2($enterprise_id, $filter, $app_name)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\CommandCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "filter_example"; // string | A JSON array of objects that bracket the search time   [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}]
$app_name = "api_developer"; // string | name of your application.  While not required, providing an app_name improves API performance

try {
    $result = $apiInstance->getTopUsersV2($enterprise_id, $filter, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getTopUsersV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] |
 **app_name** | **string**| name of your application.  While not required, providing an app_name improves API performance | [optional] [default to api_developer]

### Return type

[**\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers**](../Model/AnalyticsTopUsers.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

