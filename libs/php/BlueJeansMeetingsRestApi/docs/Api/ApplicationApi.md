# BlueJeansMeetingsRestApi\ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](ApplicationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**listClientApplications**](ApplicationApi.md#listClientApplications) | **GET** /v1/user/{user_id}/developer_applications | List Client Applications
[**regenerateClientApplicationSecret**](ApplicationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**updateClientApplication**](ApplicationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


# **createClientApplication**
> \BlueJeansMeetingsRestApi\Model\Application createClientApplication($user_id, $application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$application = new \BlueJeansMeetingsRestApi\Model\Application(); // \BlueJeansMeetingsRestApi\Model\Application | The information about the new client application.

try {
    $result = $apiInstance->createClientApplication($user_id, $application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->createClientApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **application** | [**\BlueJeansMeetingsRestApi\Model\Application**](../Model/Application.md)| The information about the new client application. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Application**](../Model/Application.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClientApplications**
> \BlueJeansMeetingsRestApi\Model\ApplicationList listClientApplications($user_id)

List Client Applications

This endpoint lists all the client applications associated with the access_token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $result = $apiInstance->listClientApplications($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listClientApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\ApplicationList**](../Model/ApplicationList.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regenerateClientApplicationSecret**
> \BlueJeansMeetingsRestApi\Model\ApplicationSecret regenerateClientApplicationSecret($user_id, $client_id)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$client_id = "client_id_example"; // string | The ID of the client application of interest. This value was given as a response during client application creation.

try {
    $result = $apiInstance->regenerateClientApplicationSecret($user_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->regenerateClientApplicationSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **client_id** | **string**| The ID of the client application of interest. This value was given as a response during client application creation. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\ApplicationSecret**](../Model/ApplicationSecret.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientApplication**
> \BlueJeansMeetingsRestApi\Model\Application updateClientApplication($user_id, $client_id, $application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$client_id = "client_id_example"; // string | The ID of the client application of interest. This value was given as a response during client application creation.
$application = new \BlueJeansMeetingsRestApi\Model\Application(); // \BlueJeansMeetingsRestApi\Model\Application | The information about the new client application.

try {
    $result = $apiInstance->updateClientApplication($user_id, $client_id, $application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateClientApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **client_id** | **string**| The ID of the client application of interest. This value was given as a response during client application creation. |
 **application** | [**\BlueJeansMeetingsRestApi\Model\Application**](../Model/Application.md)| The information about the new client application. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\Application**](../Model/Application.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

