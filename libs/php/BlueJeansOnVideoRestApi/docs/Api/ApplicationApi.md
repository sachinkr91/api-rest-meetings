# BlueJeansOnVideoRestApi\ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](ApplicationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**regenerateClientApplicationSecret**](ApplicationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**updateClientApplication**](ApplicationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


# **createClientApplication**
> \Swagger\Client\Model\Application createClientApplication($user_id, $application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\ApplicationApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$application = new \Swagger\Client\Model\Application(); // \Swagger\Client\Model\Application | The information about the new client application.

try {
    $result = $api_instance->createClientApplication($user_id, $application);
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
 **application** | [**\Swagger\Client\Model\Application**](../Model/\Swagger\Client\Model\Application.md)| The information about the new client application. |

### Return type

[**\Swagger\Client\Model\Application**](../Model/Application.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regenerateClientApplicationSecret**
> \Swagger\Client\Model\ApplicationSecret regenerateClientApplicationSecret($user_id, $client_id)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\ApplicationApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$client_id = "client_id_example"; // string | The ID of the client application of interest. This value was given as a response during client application creation.

try {
    $result = $api_instance->regenerateClientApplicationSecret($user_id, $client_id);
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

[**\Swagger\Client\Model\ApplicationSecret**](../Model/ApplicationSecret.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientApplication**
> \Swagger\Client\Model\Application updateClientApplication($user_id, $client_id, $application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\ApplicationApi();
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
$client_id = "client_id_example"; // string | The ID of the client application of interest. This value was given as a response during client application creation.
$application = new \Swagger\Client\Model\Application(); // \Swagger\Client\Model\Application | The information about the new client application.

try {
    $result = $api_instance->updateClientApplication($user_id, $client_id, $application);
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
 **application** | [**\Swagger\Client\Model\Application**](../Model/\Swagger\Client\Model\Application.md)| The information about the new client application. |

### Return type

[**\Swagger\Client\Model\Application**](../Model/Application.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

