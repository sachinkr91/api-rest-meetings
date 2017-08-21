# BlueJeansOnVideoRestApi\RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMeetingRecordings**](RecordingApi.md#getMeetingRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**getRecordingContent**](RecordingApi.md#getRecordingContent) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
[**startRecording**](RecordingApi.md#startRecording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
[**stopRecording**](RecordingApi.md#stopRecording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording
[**v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**](RecordingApi.md#v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
[**v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**](RecordingApi.md#v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter


# **getMeetingRecordings**
> \Swagger\Client\Model\RecordingHistoryList getMeetingRecordings($user_id, $meeting_id, $meeting_guid)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try {
    $result = $api_instance->getMeetingRecordings($user_id, $meeting_id, $meeting_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getMeetingRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | [optional]

### Return type

[**\Swagger\Client\Model\RecordingHistoryList**](../Model/RecordingHistoryList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingContent**
> \Swagger\Client\Model\Content getRecordingContent($user_id, $content_id, $is_downloadable)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$content_id = 56; // int | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
$is_downloadable = true; // bool | Set to true.

try {
    $result = $api_instance->getRecordingContent($user_id, $content_id, $is_downloadable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **content_id** | **int**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. |
 **is_downloadable** | **bool**| Set to true. | [default to true]

### Return type

[**\Swagger\Client\Model\Content**](../Model/Content.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startRecording**
> startRecording($user_id, $meeting_id, $action)

Start Recording

This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$action = "start"; // string | Always set to \"start\" in order to start recording.

try {
    $api_instance->startRecording($user_id, $meeting_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->startRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **action** | **string**| Always set to \&quot;start\&quot; in order to start recording. | [default to start]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopRecording**
> stopRecording($user_id, $meeting_id, $action)

Stop Recording

This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$action = "stop"; // string | Always set to \"stop\" in order to stop recording.

try {
    $api_instance->stopRecording($user_id, $meeting_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->stopRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **action** | **string**| Always set to \&quot;stop\&quot; in order to stop recording. | [default to stop]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**
> \Swagger\Client\Model\Meeting v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete($user_id, $meeting_guid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try {
    $result = $api_instance->v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete($user_id, $meeting_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**
> \Swagger\Client\Model\Meeting v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete($user_id, $meeting_id, $recording_chapter_id)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\RecordingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$recording_chapter_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete($user_id, $meeting_id, $recording_chapter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **recording_chapter_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

