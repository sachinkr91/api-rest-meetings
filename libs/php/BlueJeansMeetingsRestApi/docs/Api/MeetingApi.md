# BlueJeansMeetingsRestApi\MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMeeting**](MeetingApi.md#cancelMeeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**createMeeting**](MeetingApi.md#createMeeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
[**dialoutPstn**](MeetingApi.md#dialoutPstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn | Dialout via PSTN
[**generatePairingCodePstn**](MeetingApi.md#generatePairingCodePstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN | Generate Pairing Code (PSTN)
[**generatePairingCodeSip**](MeetingApi.md#generatePairingCodeSip) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP | Generate Pairing Code (SIP)
[**generatePairingCodeWebRtc**](MeetingApi.md#generatePairingCodeWebRtc) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc | Generate Pairing Code (WebRTC)
[**getEndpointLayout**](MeetingApi.md#getEndpointLayout) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**getMeeting**](MeetingApi.md#getMeeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**getMeetingEmails**](MeetingApi.md#getMeetingEmails) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
[**getMeetingEndpoint**](MeetingApi.md#getMeetingEndpoint) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**getMeetingEndpoints**](MeetingApi.md#getMeetingEndpoints) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | List Meeting Endpoints
[**getMeetingNumbers**](MeetingApi.md#getMeetingNumbers) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**getMeetingState**](MeetingApi.md#getMeetingState) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Get Meeting State
[**listMeetings**](MeetingApi.md#listMeetings) | **GET** /v1/user/{user_id}/scheduled_meeting | List Meetings
[**sendMeetingInvite**](MeetingApi.md#sendMeetingInvite) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite | Send Email Invite
[**updateEndpointLayout**](MeetingApi.md#updateEndpointLayout) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**updateMeeting**](MeetingApi.md#updateMeeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**updateMeetingEndpoint**](MeetingApi.md#updateMeetingEndpoint) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**updateMeetingEndpoints**](MeetingApi.md#updateMeetingEndpoints) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | Update Meeting Endpoints State
[**updateMeetingState**](MeetingApi.md#updateMeetingState) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Update Meeting State


# **cancelMeeting**
> cancelMeeting($user_id, $meeting_id, $email, $cancellation_message)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$email = true; // bool | Dispatch an email to participants with the specified cancellation message.
$cancellation_message = "cancellation_message_example"; // string | Message sent to participants when meeting is deleted and email is selected

try {
    $api_instance->cancelMeeting($user_id, $meeting_id, $email, $cancellation_message);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->cancelMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **email** | **bool**| Dispatch an email to participants with the specified cancellation message. |
 **cancellation_message** | **string**| Message sent to participants when meeting is deleted and email is selected |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMeeting**
> \BlueJeansMeetingsRestApi\Model\Meeting createMeeting($user_id, $meeting, $email)

Create Meeting

This endpoint will create a scheduled meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting = new \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMin(); // \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMin | The desired configuration for the meeting. (<b>NOTE</b> The model provided here is a <i>typical</i> minimum set of meeting parameters.)
$email = true; // bool | If set to true, sends invitation emails to all listed participants.

try {
    $result = $api_instance->createMeeting($user_id, $meeting, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting** | [**\BlueJeansMeetingsRestApi\Model\ScheduleMeetingMin**](../Model/ScheduleMeetingMin.md)| The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) |
 **email** | **bool**| If set to true, sends invitation emails to all listed participants. | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dialoutPstn**
> \BlueJeansMeetingsRestApi\Model\DialoutPstn dialoutPstn($user_id, $numeric_meeting_id, $payload_dialout)

Dialout via PSTN

Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_dialout = new \BlueJeansMeetingsRestApi\Model\PayloadDialout(); // \BlueJeansMeetingsRestApi\Model\PayloadDialout | 

try {
    $result = $api_instance->dialoutPstn($user_id, $numeric_meeting_id, $payload_dialout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->dialoutPstn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_dialout** | [**\BlueJeansMeetingsRestApi\Model\PayloadDialout**](../Model/PayloadDialout.md)|  |

### Return type

[**\BlueJeansMeetingsRestApi\Model\DialoutPstn**](../Model/DialoutPstn.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePairingCodePstn**
> \BlueJeansMeetingsRestApi\Model\PairingCodePSTN generatePairingCodePstn($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role)

Generate Pairing Code (PSTN)

This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_pairing_code_pstn = new \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn(); // \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn | 
$role = "USER"; // string | 

try {
    $result = $api_instance->generatePairingCodePstn($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->generatePairingCodePstn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_pairing_code_pstn** | [**\BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn**](../Model/PayloadPairingCodePstn.md)|  |
 **role** | **string**|  | [optional] [default to USER]

### Return type

[**\BlueJeansMeetingsRestApi\Model\PairingCodePSTN**](../Model/PairingCodePSTN.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePairingCodeSip**
> \BlueJeansMeetingsRestApi\Model\PairingCodeSIP generatePairingCodeSip($user_id, $numeric_meeting_id, $payload_pairing_code_sip)

Generate Pairing Code (SIP)

This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_pairing_code_sip = new \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP(); // \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP | Information about the device that will be joining via SIP.

try {
    $result = $api_instance->generatePairingCodeSip($user_id, $numeric_meeting_id, $payload_pairing_code_sip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->generatePairingCodeSip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_pairing_code_sip** | [**\BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP**](../Model/PayloadPairingCodeSIP.md)| Information about the device that will be joining via SIP. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\PairingCodeSIP**](../Model/PairingCodeSIP.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePairingCodeWebRtc**
> \BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC generatePairingCodeWebRtc($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role)

Generate Pairing Code (WebRTC)

This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_pairing_code_web_rtc = new \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC(); // \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC | 
$role = "USER"; // string | 

try {
    $result = $api_instance->generatePairingCodeWebRtc($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->generatePairingCodeWebRtc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_pairing_code_web_rtc** | [**\BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC**](../Model/PayloadPairingCodeWebRTC.md)|  |
 **role** | **string**|  | [optional] [default to USER]

### Return type

[**\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC**](../Model/PairingCodeWebRTC.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEndpointLayout**
> \BlueJeansMeetingsRestApi\Model\Layout getEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try {
    $result = $api_instance->getEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getEndpointLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Layout**](../Model/Layout.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeeting**
> \BlueJeansMeetingsRestApi\Model\Meeting getMeeting($user_id, $meeting_id)

Get Meeting

This endpoint gets the settings for a user's meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. This is not the numeric meeting ID visible to users.

try {
    $result = $api_instance->getMeeting($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingEmails**
> \BlueJeansMeetingsRestApi\Model\MeetingEmails getMeetingEmails($user_id, $meeting_id, $type, $role, $action)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$type = "type_example"; // string | TEXT, ICS, HTML
$role = "role_example"; // string | moderator, participant
$action = "action_example"; // string | create, edit, delete

try {
    $result = $api_instance->getMeetingEmails($user_id, $meeting_id, $type, $role, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeetingEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **type** | **string**| TEXT, ICS, HTML | [optional]
 **role** | **string**| moderator, participant | [optional]
 **action** | **string**| create, edit, delete | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingEmails**](../Model/MeetingEmails.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingEndpoint**
> \BlueJeansMeetingsRestApi\Model\Endpoint getMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try {
    $result = $api_instance->getMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeetingEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Endpoint**](../Model/Endpoint.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingEndpoints**
> \BlueJeansMeetingsRestApi\Model\Endpoints getMeetingEndpoints($user_id, $numeric_meeting_id)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

try {
    $result = $api_instance->getMeetingEndpoints($user_id, $numeric_meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeetingEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingNumbers**
> \BlueJeansMeetingsRestApi\Model\Numbers getMeetingNumbers($user_id, $meeting_id)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try {
    $result = $api_instance->getMeetingNumbers($user_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeetingNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Numbers**](../Model/Numbers.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeetingState**
> \BlueJeansMeetingsRestApi\Model\MeetingState getMeetingState($user_id, $numeric_meeting_id)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

try {
    $result = $api_instance->getMeetingState($user_id, $numeric_meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->getMeetingState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\MeetingState**](../Model/MeetingState.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMeetings**
> \BlueJeansMeetingsRestApi\Model\Meeting[] listMeetings($user_id, $numeric_meeting_id)

List Meetings

This endpoint gets a list of the user's scheduled upcoming meetings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = "numeric_meeting_id_example"; // string | Filter the results by the meeting ID that participants will see and use to join the conference.

try {
    $result = $api_instance->listMeetings($user_id, $numeric_meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->listMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **string**| Filter the results by the meeting ID that participants will see and use to join the conference. | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMeetingInvite**
> sendMeetingInvite($user_id, $numeric_meeting_id, $payload_invite)

Send Email Invite

This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_invite = new \BlueJeansMeetingsRestApi\Model\PayloadInvite(); // \BlueJeansMeetingsRestApi\Model\PayloadInvite | 

try {
    $api_instance->sendMeetingInvite($user_id, $numeric_meeting_id, $payload_invite);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->sendMeetingInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_invite** | [**\BlueJeansMeetingsRestApi\Model\PayloadInvite**](../Model/PayloadInvite.md)|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEndpointLayout**
> \BlueJeansMeetingsRestApi\Model\Layout updateEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
$is_leader = true; // bool | 
$push = true; // bool | 

try {
    $result = $api_instance->updateEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->updateEndpointLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **is_leader** | **bool**|  | [optional]
 **push** | **bool**|  | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\Layout**](../Model/Layout.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMeeting**
> \BlueJeansMeetingsRestApi\Model\Meeting updateMeeting($user_id, $meeting_id, $meeting)

Update Meeting

This endpoint changes the settings for a user's meeting. For example, use for rescheduling.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$meeting_id = 56; // int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
$meeting = new \BlueJeansMeetingsRestApi\Model\Meeting(); // \BlueJeansMeetingsRestApi\Model\Meeting | The user's room details that you wish to update.

try {
    $result = $api_instance->updateMeeting($user_id, $meeting_id, $meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->updateMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)| The user&#39;s room details that you wish to update. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMeetingEndpoint**
> \BlueJeansMeetingsRestApi\Model\Endpoint updateMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$endpoint_guid = "endpoint_guid_example"; // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
$mute_audio = true; // bool | Toggle the audio source mute.
$mute_video = true; // bool | Toggle the video source mute.
$leave_meeting = true; // bool | Remove the user from the meeting.

try {
    $result = $api_instance->updateMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->updateMeetingEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpoint_guid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **mute_audio** | **bool**| Toggle the audio source mute. | [optional]
 **mute_video** | **bool**| Toggle the video source mute. | [optional]
 **leave_meeting** | **bool**| Remove the user from the meeting. | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\Endpoint**](../Model/Endpoint.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMeetingEndpoints**
> updateMeetingEndpoints($user_id, $numeric_meeting_id, $mute, $media)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$mute = true; // bool | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute.
$media = "media_example"; // string | Specify the type of media you which to mute/unmute.

try {
    $api_instance->updateMeetingEndpoints($user_id, $numeric_meeting_id, $mute, $media);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->updateMeetingEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **mute** | **bool**| Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. | [optional]
 **media** | **string**| Specify the type of media you which to mute/unmute. | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMeetingState**
> \BlueJeansMeetingsRestApi\Model\Meeting updateMeetingState($user_id, $numeric_meeting_id, $payload_meeting_state, $delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\MeetingApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$numeric_meeting_id = 56; // int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
$payload_meeting_state = new \BlueJeansMeetingsRestApi\Model\PayloadMeetingState(); // \BlueJeansMeetingsRestApi\Model\PayloadMeetingState | The meeting properties that you wish to update.
$delay = 56; // int | Number of seconds to delay the end meeting operation.

try {
    $result = $api_instance->updateMeetingState($user_id, $numeric_meeting_id, $payload_meeting_state, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingApi->updateMeetingState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payload_meeting_state** | [**\BlueJeansMeetingsRestApi\Model\PayloadMeetingState**](../Model/PayloadMeetingState.md)| The meeting properties that you wish to update. |
 **delay** | **int**| Number of seconds to delay the end meeting operation. | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\Meeting**](../Model/Meeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

