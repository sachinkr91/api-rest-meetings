# Swagger\Client\CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEndpointDistribution**](CommandCenterApi.md#getEndpointDistribution) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**getFeedbackComments**](CommandCenterApi.md#getFeedbackComments) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**getFeedbackCount**](CommandCenterApi.md#getFeedbackCount) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
[**getMeetingLiveByEnterprise**](CommandCenterApi.md#getMeetingLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**getMeetingPastByEnterprise**](CommandCenterApi.md#getMeetingPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
[**getMeetingPastByUser**](CommandCenterApi.md#getMeetingPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
[**getMeetingUsage**](CommandCenterApi.md#getMeetingUsage) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**getMeetingsLiveByEnterprise**](CommandCenterApi.md#getMeetingsLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**getMeetingsPastByEnterprise**](CommandCenterApi.md#getMeetingsPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**getMeetingsPastByUser**](CommandCenterApi.md#getMeetingsPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**getRoiRanges**](CommandCenterApi.md#getRoiRanges) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**getTopUsers**](CommandCenterApi.md#getTopUsers) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users


# **getEndpointDistribution**
> \Swagger\Client\Model\AnalyticsEndpointDistribution getEndpointDistribution($enterprise_id, $filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->getEndpointDistribution($enterprise_id, $filter);
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

[**\Swagger\Client\Model\AnalyticsEndpointDistribution**](../Model/AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackComments**
> \Swagger\Client\Model\AnalyticsFeedbackComments getFeedbackComments($enterprise_id, $start, $end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $api_instance->getFeedbackComments($enterprise_id, $start, $end);
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
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**\Swagger\Client\Model\AnalyticsFeedbackComments**](../Model/AnalyticsFeedbackComments.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackCount**
> \Swagger\Client\Model\AnalyticsFeedbackScores getFeedbackCount($enterprise_id, $start, $end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $api_instance->getFeedbackCount($enterprise_id, $start, $end);
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
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**\Swagger\Client\Model\AnalyticsFeedbackScores**](../Model/AnalyticsFeedbackScores.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingLiveByEnterprise**
> \Swagger\Client\Model\MeetingExtendedIndigo getMeetingLiveByEnterprise($enterprise_id, $meeting_uuid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

try {
    $result = $api_instance->getMeetingLiveByEnterprise($enterprise_id, $meeting_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandCenterApi->getMeetingLiveByEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meeting_uuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |

### Return type

[**\Swagger\Client\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingPastByEnterprise**
> \Swagger\Client\Model\MeetingExtendedIndigo getMeetingPastByEnterprise($enterprise_id, $meeting_uuid, $include_endpoints)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
$include_endpoints = true; // bool | Option to include detailed data on endpoints

try {
    $result = $api_instance->getMeetingPastByEnterprise($enterprise_id, $meeting_uuid, $include_endpoints);
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

[**\Swagger\Client\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingPastByUser**
> \Swagger\Client\Model\MeetingExtendedIndigo getMeetingPastByUser($user_id, $meeting_uuid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_uuid = "meeting_uuid_example"; // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

try {
    $result = $api_instance->getMeetingPastByUser($user_id, $meeting_uuid);
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

[**\Swagger\Client\Model\MeetingExtendedIndigo**](../Model/MeetingExtendedIndigo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingUsage**
> \Swagger\Client\Model\AnalyticsUsage getMeetingUsage($enterprise_id, $client_tz, $filter)

Meeting Usage Over Time

This endpoint reports on meeting usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$client_tz = "America/Denver"; // string | Based on standard TZ code.
$filter = "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->getMeetingUsage($enterprise_id, $client_tz, $filter);
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

[**\Swagger\Client\Model\AnalyticsUsage**](../Model/AnalyticsUsage.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsLiveByEnterprise**
> \Swagger\Client\Model\MeetingIndigoList getMeetingsLiveByEnterprise($enterprise_id)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try {
    $result = $api_instance->getMeetingsLiveByEnterprise($enterprise_id);
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

### Return type

[**\Swagger\Client\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsPastByEnterprise**
> \Swagger\Client\Model\MeetingIndigoList getMeetingsPastByEnterprise($enterprise_id, $offset, $limit, $filter)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$offset = 56; // int | Page Number
$limit = 56; // int | Per page
$filter = "filter_example"; // string | URL-encoded JSON string

try {
    $result = $api_instance->getMeetingsPastByEnterprise($enterprise_id, $offset, $limit, $filter);
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
 **filter** | **string**| URL-encoded JSON string | [optional]

### Return type

[**\Swagger\Client\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingsPastByUser**
> \Swagger\Client\Model\MeetingIndigoList getMeetingsPastByUser($user_id)

List Past Meetings by User

This endpoint lists completed meetings by user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getMeetingsPastByUser($user_id);
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

### Return type

[**\Swagger\Client\Model\MeetingIndigoList**](../Model/MeetingIndigoList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoiRanges**
> \Swagger\Client\Model\AnalyticsRoiData getRoiRanges($enterprise_id, $filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->getRoiRanges($enterprise_id, $filter);
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

[**\Swagger\Client\Model\AnalyticsRoiData**](../Model/AnalyticsRoiData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopUsers**
> \Swagger\Client\Model\AnalyticsTopUsers getTopUsers($enterprise_id, $filter)

Top Users

This endpoint retrieves the top users by usage for an enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\CommandCenterApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->getTopUsers($enterprise_id, $filter);
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

[**\Swagger\Client\Model\AnalyticsTopUsers**](../Model/AnalyticsTopUsers.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

