# BlueJeansOnVideoRestApi\UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseProfile**](UserApi.md#getEnterpriseProfile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**getGrantedApplications**](UserApi.md#getGrantedApplications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**getGroups**](UserApi.md#getGroups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
[**getRoom**](UserApi.md#getRoom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**getUser**](UserApi.md#getUser) | **GET** /v1/user/{user_id} | Get User Account Details
[**revokeGrantedApplication**](UserApi.md#revokeGrantedApplication) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**setGroups**](UserApi.md#setGroups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
[**updateRoom**](UserApi.md#updateRoom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**updateUser**](UserApi.md#updateUser) | **PUT** /v1/user/{user_id} | Update User Account Details


# **getEnterpriseProfile**
> \Swagger\Client\Model\Enterprise getEnterpriseProfile($user_id)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

[**\Swagger\Client\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGrantedApplications**
> \Swagger\Client\Model\GrantedApplications getGrantedApplications($user_id)

Get Granted Applications

This endpoint retrieves the granted applications associated with the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

[**\Swagger\Client\Model\GrantedApplications**](../Model/GrantedApplications.md)

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
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

# **getRoom**
> \Swagger\Client\Model\Room getRoom($user_id)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

[**\Swagger\Client\Model\Room**](../Model/Room.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Swagger\Client\Model\User getUser($user_id)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

[**\Swagger\Client\Model\User**](../Model/User.md)

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
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
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

# **updateRoom**
> \Swagger\Client\Model\Room updateRoom($user_id, $room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$room = new \Swagger\Client\Model\Room(); // \Swagger\Client\Model\Room | The user's room details that you wish to update.

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
 **room** | [**\Swagger\Client\Model\Room**](../Model/\Swagger\Client\Model\Room.md)| The user&#39;s room details that you wish to update. |

### Return type

[**\Swagger\Client\Model\Room**](../Model/Room.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \Swagger\Client\Model\User updateUser($user_id, $user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\UserApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$user = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | The user details that you wish to update.

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
 **user** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| The user details that you wish to update. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

