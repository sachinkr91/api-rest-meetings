# BlueJeansMeetingsRestApi\RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareRecordings**](RecordingApi.md#createShareRecordings) | **POST** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | Enable Recording Sharing
[**deleteAllRecordingsByMeetingGuid**](RecordingApi.md#deleteAllRecordingsByMeetingGuid) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
[**deleteRecordingChapter**](RecordingApi.md#deleteRecordingChapter) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter
[**deleteShareRecordings**](RecordingApi.md#deleteShareRecordings) | **DELETE** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | Delete Recording Sharing
[**getMeetingRecordings**](RecordingApi.md#getMeetingRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**getRecordingContent**](RecordingApi.md#getRecordingContent) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
[**getShareRecordings**](RecordingApi.md#getShareRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | List Recording Sharing
[**modifyShareRecordings**](RecordingApi.md#modifyShareRecordings) | **PUT** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId} | Modify Recording Sharing
[**moveRecordingOwner**](RecordingApi.md#moveRecordingOwner) | **POST** /v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner} | Move Recording Ownership
[**startRecording**](RecordingApi.md#startRecording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
[**stopRecording**](RecordingApi.md#stopRecording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording


# **createShareRecordings**
> \BlueJeansMeetingsRestApi\Model\MeetingSharing createShareRecordings($user_id, $meeting_guid, $set_sharing)

Enable Recording Sharing

This endpoint creates a sharing authorization record for the specified meeting recording.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
$set_sharing = new \BlueJeansMeetingsRestApi\Model\SetSharing(); // \BlueJeansMeetingsRestApi\Model\SetSharing | 

try {
    $result = $apiInstance->createShareRecordings($user_id, $meeting_guid, $set_sharing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->createShareRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |
 **set_sharing** | [**\BlueJeansMeetingsRestApi\Model\SetSharing**](../Model/SetSharing.md)|  |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingSharing**](../Model/MeetingSharing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllRecordingsByMeetingGuid**
> \BlueJeansMeetingsRestApi\Model\Meeting deleteAllRecordingsByMeetingGuid($user_id, $meeting_guid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try {
    $result = $apiInstance->deleteAllRecordingsByMeetingGuid($user_id, $meeting_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteAllRecordingsByMeetingGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordingChapter**
> \BlueJeansMeetingsRestApi\Model\Meeting deleteRecordingChapter($user_id, $meeting_id, $recording_chapter_id)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$recording_chapter_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $apiInstance->deleteRecordingChapter($user_id, $meeting_id, $recording_chapter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteRecordingChapter: ', $e->getMessage(), PHP_EOL;
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

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShareRecordings**
> deleteShareRecordings($user_id, $meeting_guid)

Delete Recording Sharing

This endpoint deletes the sharing authorization associated with a meeting recording.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.

try {
    $apiInstance->deleteShareRecordings($user_id, $meeting_guid);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteShareRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingRecordings**
> \BlueJeansMeetingsRestApi\Model\RecordingHistoryList getMeetingRecordings($user_id, $meeting_id, $meeting_guid)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try {
    $result = $apiInstance->getMeetingRecordings($user_id, $meeting_id, $meeting_guid);
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

[**\BlueJeansMeetingsRestApi\Model\RecordingHistoryList**](../Model/RecordingHistoryList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingContent**
> \BlueJeansMeetingsRestApi\Model\Content getRecordingContent($user_id, $content_id, $is_downloadable)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$content_id = 56; // int | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
$is_downloadable = true; // bool | Set to true.

try {
    $result = $apiInstance->getRecordingContent($user_id, $content_id, $is_downloadable);
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

[**\BlueJeansMeetingsRestApi\Model\Content**](../Model/Content.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShareRecordings**
> \BlueJeansMeetingsRestApi\Model\MeetingSharing getShareRecordings($user_id, $meeting_guid)

List Recording Sharing

This endpoint retrieves a the sharing authorization information for a meeting's recording. If no sharing has been authorized for the meeting, this API returns a 404 error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.

try {
    $result = $apiInstance->getShareRecordings($user_id, $meeting_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getShareRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingSharing**](../Model/MeetingSharing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyShareRecordings**
> \BlueJeansMeetingsRestApi\Model\MeetingSharing modifyShareRecordings($user_id, $meeting_guid, $sharing_id, $modify_sharing)

Modify Recording Sharing

This endpoint modifieds the sharing authorization attributes for a meeting recording.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_guid = "meeting_guid_example"; // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
$sharing_id = "sharing_id_example"; // string | The identifier of the sharing authorization record.  This value can be obtained from the \"Id\" in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing
$modify_sharing = new \BlueJeansMeetingsRestApi\Model\ModifySharing(); // \BlueJeansMeetingsRestApi\Model\ModifySharing | 

try {
    $result = $apiInstance->modifyShareRecordings($user_id, $meeting_guid, $sharing_id, $modify_sharing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->modifyShareRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_guid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |
 **sharing_id** | **string**| The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing |
 **modify_sharing** | [**\BlueJeansMeetingsRestApi\Model\ModifySharing**](../Model/ModifySharing.md)|  |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingSharing**](../Model/MeetingSharing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveRecordingOwner**
> \BlueJeansMeetingsRestApi\Model\RecordingMovedComp moveRecordingOwner($user_id, $original_owner, $new_owner)

Move Recording Ownership

This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$original_owner = 56; // int | The ID of the recording's current owner.
$new_owner = 56; // int | The ID of the intended owner for the recording.

try {
    $result = $apiInstance->moveRecordingOwner($user_id, $original_owner, $new_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->moveRecordingOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **original_owner** | **int**| The ID of the recording&#39;s current owner. |
 **new_owner** | **int**| The ID of the intended owner for the recording. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\RecordingMovedComp**](../Model/RecordingMovedComp.md)

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
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$action = "start"; // string | Always set to \"start\" in order to start recording.

try {
    $apiInstance->startRecording($user_id, $meeting_id, $action);
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
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$action = "stop"; // string | Always set to \"stop\" in order to stop recording.

try {
    $apiInstance->stopRecording($user_id, $meeting_id, $action);
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

