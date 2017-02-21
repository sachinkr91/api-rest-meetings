# Swagger\Client\AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokenByClient**](AuthenticationApi.md#getTokenByClient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**getTokenByMeeting**](AuthenticationApi.md#getTokenByMeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**getTokenByPassword**](AuthenticationApi.md#getTokenByPassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type


# **getTokenByClient**
> \Swagger\Client\Model\GrantClient getTokenByClient($grant_type_client)

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
$grant_type_client = new \Swagger\Client\Model\GrantTypeClient(); // \Swagger\Client\Model\GrantTypeClient | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByClient($grant_type_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type_client** | [**\Swagger\Client\Model\GrantTypeClient**](../Model/\Swagger\Client\Model\GrantTypeClient.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\GrantClient**](../Model/GrantClient.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByMeeting**
> \Swagger\Client\Model\GrantMeeting getTokenByMeeting($grant_type_meeting)

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
$grant_type_meeting = new \Swagger\Client\Model\GrantTypeMeeting(); // \Swagger\Client\Model\GrantTypeMeeting | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByMeeting($grant_type_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type_meeting** | [**\Swagger\Client\Model\GrantTypeMeeting**](../Model/\Swagger\Client\Model\GrantTypeMeeting.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\GrantMeeting**](../Model/GrantMeeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByPassword**
> \Swagger\Client\Model\GrantPassword getTokenByPassword($grant_type_password)

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
$grant_type_password = new \Swagger\Client\Model\GrantTypePassword(); // \Swagger\Client\Model\GrantTypePassword | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByPassword($grant_type_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type_password** | [**\Swagger\Client\Model\GrantTypePassword**](../Model/\Swagger\Client\Model\GrantTypePassword.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\Swagger\Client\Model\GrantPassword**](../Model/GrantPassword.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

