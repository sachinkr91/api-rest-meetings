# Swagger\Client\AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2TokenclientPost**](AuthenticationApi.md#oauth2TokenclientPost) | **POST** /oauth2/token?client | Authentication via Client Grant Type
[**oauth2TokenmeetingPost**](AuthenticationApi.md#oauth2TokenmeetingPost) | **POST** /oauth2/token?meeting | Authentication via Meeting Grant Type
[**oauth2TokenpasswordPost**](AuthenticationApi.md#oauth2TokenpasswordPost) | **POST** /oauth2/token?password | Authentication via Password Grant Type


# **oauth2TokenclientPost**
> \Swagger\Client\Model\Grant oauth2TokenclientPost($payload)

Authentication via Client Grant Type

This grant type is commonly used by an app. Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$payload = new \Swagger\Client\Model\Payload(); // \Swagger\Client\Model\Payload | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->oauth2TokenclientPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2TokenclientPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Swagger\Client\Model\Payload**](../Model/\Swagger\Client\Model\Payload.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\Grant**](../Model/Grant.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2TokenmeetingPost**
> \Swagger\Client\Model\Grant oauth2TokenmeetingPost($payload)

Authentication via Meeting Grant Type

This is not a traditional OAuth grant type, but it behaves closely to the password grant type. This level of authentication allows for obtaining access to the meeting only. If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will have a limited scope of access that an attendee has within a meeting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$payload = new \Swagger\Client\Model\Payload1(); // \Swagger\Client\Model\Payload1 | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->oauth2TokenmeetingPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2TokenmeetingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Swagger\Client\Model\Payload1**](../Model/\Swagger\Client\Model\Payload1.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\Grant**](../Model/Grant.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2TokenpasswordPost**
> \Swagger\Client\Model\Grant oauth2TokenpasswordPost($payload)

Authentication via Password Grant Type

An access token can be obtained by using a user’s username and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$payload = new \Swagger\Client\Model\Payload2(); // \Swagger\Client\Model\Payload2 | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->oauth2TokenpasswordPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2TokenpasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Swagger\Client\Model\Payload2**](../Model/\Swagger\Client\Model\Payload2.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\Grant**](../Model/Grant.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

