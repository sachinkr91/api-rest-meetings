# Swagger\Client\MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Current Endpoint Layout
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
[**v1UserUserIdLiveMeetingsMeetingIdGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
[**v1UserUserIdLiveMeetingsMeetingIdInvitePost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdInvitePost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
[**v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
[**v1UserUserIdLiveMeetingsMeetingIdPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
[**v1UserUserIdScheduledMeetingGet**](MeetingApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdDelete**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdDelete) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdEmailsGet**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdEmailsGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdGet**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdPut**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdPut) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingPost**](MeetingApi.md#v1UserUserIdScheduledMeetingPost) | **POST** /v1/user/{user_id}/scheduled_meeting | Meeting


# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet($user_id, $meeting_id, $endpoint_guid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet($user_id, $meeting_id, $endpoint_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet($user_id, $meeting_id, $endpoint_guid)

Get Current Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet($user_id, $meeting_id, $endpoint_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut($user_id, $meeting_id, $endpoint_guid, $is_leader, $push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
$is_leader = true; // bool | 
$push = true; // bool | 

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut($user_id, $meeting_id, $endpoint_guid, $is_leader, $push);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **is_leader** | **bool**|  | [optional]
 **push** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut($user_id, $meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
$mute_audio = true; // bool | Toggle the audio source mute.
$mute_video = true; // bool | Toggle the video source mute.
$leave_meeting = true; // bool | Remove the user from the meeting.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut($user_id, $meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **mute_audio** | **bool**| Toggle the audio source mute. | [optional]
 **mute_video** | **bool**| Toggle the video source mute. | [optional]
 **leave_meeting** | **bool**| Remove the user from the meeting. | [optional]

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsGet($user_id, $meeting_id)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdEndpointsGet($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdEndpointsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdGet**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdGet($user_id, $meeting_id)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdGet($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdInvitePost**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdInvitePost($user_id, $meeting_id)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdInvitePost($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost($user_id, $meeting_id)

Generate SIP Pairing Code

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdLiveMeetingsMeetingIdPut**
> \Swagger\Client\Model\Meeting v1UserUserIdLiveMeetingsMeetingIdPut($user_id, $meeting_id, $meeting, $mute, $media, $delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$meeting = new \Swagger\Client\Model\Meeting(); // \Swagger\Client\Model\Meeting | The meeting properties that you wish to update.
$mute = true; // bool | Allows you to mute/unmute all participants in a meeting.
$media = "media_example"; // string | Specify \"audio\" or \"video\" for the prior mute parameter.
$delay = 56; // int | Number of seconds to delay the end meeting operation.

try {
    $result = $api_instance->v1UserUserIdLiveMeetingsMeetingIdPut($user_id, $meeting_id, $meeting, $mute, $media, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdLiveMeetingsMeetingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**\Swagger\Client\Model\Meeting**](../Model/\Swagger\Client\Model\Meeting.md)| The meeting properties that you wish to update. |
 **mute** | **bool**| Allows you to mute/unmute all participants in a meeting. | [optional]
 **media** | **string**| Specify \&quot;audio\&quot; or \&quot;video\&quot; for the prior mute parameter. | [optional]
 **delay** | **int**| Number of seconds to delay the end meeting operation. | [optional]

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingGet**
> \Swagger\Client\Model\Meeting[] v1UserUserIdScheduledMeetingGet($user_id)

Meeting

This endpoint gets a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\Swagger\Client\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingMeetingIdDelete**
> \Swagger\Client\Model\Meeting v1UserUserIdScheduledMeetingMeetingIdDelete($user_id, $meeting_id)

Meeting

Cancel a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingMeetingIdDelete($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingMeetingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingMeetingIdEmailsGet**
> \Swagger\Client\Model\Meeting v1UserUserIdScheduledMeetingMeetingIdEmailsGet($user_id, $meeting_id, $type, $role, $action)

Meeting

This endpoint retrieves the email object for a scheduled meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$type = "type_example"; // string | TEXT, ICS, HTML
$role = "role_example"; // string | moderator, participant
$action = "action_example"; // string | create, edit, delete

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingMeetingIdEmailsGet($user_id, $meeting_id, $type, $role, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingMeetingIdEmailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **type** | **string**| TEXT, ICS, HTML | [optional]
 **role** | **string**| moderator, participant | [optional]
 **action** | **string**| create, edit, delete | [optional]

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingMeetingIdGet**
> \Swagger\Client\Model\Meeting v1UserUserIdScheduledMeetingMeetingIdGet($user_id, $meeting_id)

Meeting

This endpoint gets a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingMeetingIdGet($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingMeetingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingMeetingIdPut**
> \Swagger\Client\Model\Meeting v1UserUserIdScheduledMeetingMeetingIdPut($user_id, $meeting_id, $meeting)

Meeting

Update a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$meeting = new \Swagger\Client\Model\Meeting(); // \Swagger\Client\Model\Meeting | The user's room details that you wish to update.

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingMeetingIdPut($user_id, $meeting_id, $meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingMeetingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**\Swagger\Client\Model\Meeting**](../Model/\Swagger\Client\Model\Meeting.md)| The user&#39;s room details that you wish to update. |

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserUserIdScheduledMeetingPost**
> \Swagger\Client\Model\Meeting v1UserUserIdScheduledMeetingPost($user_id, $meeting, $email)

Meeting

Create a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting = new \Swagger\Client\Model\Meeting(); // \Swagger\Client\Model\Meeting | The user's room details that you wish to update.
$email = true; // bool | If set to true, sends invitation emails to all listed participants.

try {
    $result = $api_instance->v1UserUserIdScheduledMeetingPost($user_id, $meeting, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->v1UserUserIdScheduledMeetingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting** | [**\Swagger\Client\Model\Meeting**](../Model/\Swagger\Client\Model\Meeting.md)| The user&#39;s room details that you wish to update. |
 **email** | **bool**| If set to true, sends invitation emails to all listed participants. | [optional]

### Return type

[**\Swagger\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

