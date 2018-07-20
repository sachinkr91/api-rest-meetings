# BlueJeansMeetingsRestApi\UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeUserTags**](UserApi.md#changeUserTags) | **PUT** /v1/user/{userId}/tags | Set User Tags
[**createRoom**](UserApi.md#createRoom) | **POST** /v1/user/{user_id}/room | Create User’s Default Meeting Settings
[**getEnterpriseProfile**](UserApi.md#getEnterpriseProfile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**getGrantedApplications**](UserApi.md#getGrantedApplications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**getGroups**](UserApi.md#getGroups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
[**getPersonalMeeting**](UserApi.md#getPersonalMeeting) | **GET** /v1/user/{user_id}/personal_meeting | Get Personal Meeting
[**getRoom**](UserApi.md#getRoom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**getUser**](UserApi.md#getUser) | **GET** /v1/user/{user_id} | Get User Account Details
[**getUserTags**](UserApi.md#getUserTags) | **GET** /v1/user/{userId}/tags | List User Tags
[**revokeGrantedApplication**](UserApi.md#revokeGrantedApplication) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**setGroups**](UserApi.md#setGroups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
[**updatePeresonalMeeting**](UserApi.md#updatePeresonalMeeting) | **PUT** /v1/user/{user_id}/personal_meeting | Update Personal Meeting
[**updateRoom**](UserApi.md#updateRoom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**updateUser**](UserApi.md#updateUser) | **PUT** /v1/user/{user_id} | Update User Account Details


# **changeUserTags**
> \BlueJeansMeetingsRestApi\Model\TagListComp changeUserTags($user_id, $action, $tag)

Set User Tags

This endpoint modifies the list of tags associated with the specified user. <b>NOTE</b> Adding a tag that is not defined in the user's Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$action = "action_example"; // string | Type of operation to be done
$tag = "tag_example"; // string | The name of tag

try {
    $result = $api_instance->changeUserTags($user_id, $action, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->changeUserTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **action** | **string**| Type of operation to be done |
 **tag** | **string**| The name of tag |

### Return type

[**\BlueJeansMeetingsRestApi\Model\TagListComp**](../Model/TagListComp.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoom**
> \BlueJeansMeetingsRestApi\Model\Room createRoom($user_id, $room)

Create User’s Default Meeting Settings

This endpoint creates the user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$room = new \BlueJeansMeetingsRestApi\Model\Room(); // \BlueJeansMeetingsRestApi\Model\Room | The user's room details

try {
    $result = $api_instance->createRoom($user_id, $room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **room** | [**\BlueJeansMeetingsRestApi\Model\Room**](../Model/Room.md)| The user&#39;s room details |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Room**](../Model/Room.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseProfile**
> \BlueJeansMeetingsRestApi\Model\Enterprise getEnterpriseProfile($user_id)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getEnterpriseProfile($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getEnterpriseProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGrantedApplications**
> \BlueJeansMeetingsRestApi\Model\GrantedApplications getGrantedApplications($user_id)

Get Granted Applications

This endpoint retrieves the granted applications associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getGrantedApplications($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGrantedApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantedApplications**](../Model/GrantedApplications.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> string[] getGroups($user_id)

Get User Feature Groups

This endpoint retrieves the feature groups associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getGroups($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

**string[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonalMeeting**
> \BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom getPersonalMeeting($user_id)

Get Personal Meeting

This endpoint gets the settings for a user's personal meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getPersonalMeeting($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPersonalMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom**](../Model/PersonalMeetingRoom.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoom**
> \BlueJeansMeetingsRestApi\Model\Room getRoom($user_id)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getRoom($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Room**](../Model/Room.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \BlueJeansMeetingsRestApi\Model\User getUser($user_id)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $api_instance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTags**
> \BlueJeansMeetingsRestApi\Model\TagListComp getUserTags($user_id)

List User Tags

This endpoint retrieves all tags associated with the specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try {
    $result = $api_instance->getUserTags($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\TagListComp**](../Model/TagListComp.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeGrantedApplication**
> revokeGrantedApplication($user_id, $client_id)

Remoke Granted Application

This endpoint revokes the granted application associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$client_id = "client_id_example"; // string | The ID of the granted application.

try {
    $api_instance->revokeGrantedApplication($user_id, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->revokeGrantedApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **client_id** | **string**| The ID of the granted application. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroups**
> setGroups($user_id, $enable, $disable)

Set User Feature Groups

This endpoint sets the feature groups associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$enable = "enable_example"; // string | The feature group you want to enable.
$disable = "disable_example"; // string | The feature group you want to disable.

try {
    $api_instance->setGroups($user_id, $enable, $disable);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **enable** | **string**| The feature group you want to enable. | [optional]
 **disable** | **string**| The feature group you want to disable. | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePeresonalMeeting**
> \BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom updatePeresonalMeeting($user_id, $personal_meeting)

Update Personal Meeting

This endpoint changes the settings for a user's personal meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$personal_meeting = new \BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom(); // \BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom | The user's personal meeting room details that you wish to update.

try {
    $result = $api_instance->updatePeresonalMeeting($user_id, $personal_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePeresonalMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **personal_meeting** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom**](../Model/PersonalMeetingRoom.md)| The user&#39;s personal meeting room details that you wish to update. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoom**](../Model/PersonalMeetingRoom.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoom**
> \BlueJeansMeetingsRestApi\Model\Room updateRoom($user_id, $room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$room = new \BlueJeansMeetingsRestApi\Model\Room(); // \BlueJeansMeetingsRestApi\Model\Room | The user's room details that you wish to update.

try {
    $result = $api_instance->updateRoom($user_id, $room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **room** | [**\BlueJeansMeetingsRestApi\Model\Room**](../Model/Room.md)| The user&#39;s room details that you wish to update. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Room**](../Model/Room.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \BlueJeansMeetingsRestApi\Model\User updateUser($user_id, $user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$user = new \BlueJeansMeetingsRestApi\Model\User(); // \BlueJeansMeetingsRestApi\Model\User | The user details that you wish to update.

try {
    $result = $api_instance->updateUser($user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **user** | [**\BlueJeansMeetingsRestApi\Model\User**](../Model/User.md)| The user details that you wish to update. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

