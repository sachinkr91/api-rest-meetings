# BlueJeansOnVideoRestApi\AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthorizationCode**](AuthenticationApi.md#getAuthorizationCode) | **GET** /oauth2/authorize | Get Authorization Code
[**getTokenByClient**](AuthenticationApi.md#getTokenByClient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**getTokenByCode**](AuthenticationApi.md#getTokenByCode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**getTokenByMeeting**](AuthenticationApi.md#getTokenByMeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**getTokenByPassword**](AuthenticationApi.md#getTokenByPassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**getTokenByRefresh**](AuthenticationApi.md#getTokenByRefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**getTokenInfo**](AuthenticationApi.md#getTokenInfo) | **GET** /oauth2/tokenInfo | Validate a Token
[**revokeAccessToken**](AuthenticationApi.md#revokeAccessToken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token


# **getAuthorizationCode**
> getAuthorizationCode($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url)

Get Authorization Code

This is NOT a REST endpoint. Documenting here for consistentcy. This URL should be used by a client application user's browser to perform authorization.  User will be redirected back to client application upon completion with state and code parameters. Use \"bluejeans.com\" as hostname. The code returned is only good for 30 seconds. You will want to call /oauth2/token with it as soon as possible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$client_id = "client_id_example"; // string | The 32 character client ID generated when you created the client application.
$redirect_uri = "redirect_uri_example"; // string | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
$state = "state_example"; // string | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
$scope = "scope_example"; // string | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info
$response_type = "code"; // string | The type of authorization you are peforrming.  Set to \"code\".
$app_name = "app_name_example"; // string | The name of the client application shown to user during authorization.
$app_logo_url = "app_logo_url_example"; // string | URL to an 84x84 image shown to user during authorization.

try {
    $api_instance->getAuthorizationCode($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The 32 character client ID generated when you created the client application. | [optional]
 **redirect_uri** | **string**| The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. | [optional]
 **state** | **string**| Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. | [optional]
 **scope** | **string**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info | [optional]
 **response_type** | **string**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]
 **app_name** | **string**| The name of the client application shown to user during authorization. | [optional]
 **app_logo_url** | **string**| URL to an 84x84 image shown to user during authorization. | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByClient**
> \BlueJeansOnVideoRestApi\Model\GrantClient getTokenByClient($grant_request_client)

Authentication via Client Grant Type

This API is typically called from an application.  Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console and given to the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_client = new \BlueJeansOnVideoRestApi\Model\GrantRequestClient(); // \BlueJeansOnVideoRestApi\Model\GrantRequestClient | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByClient($grant_request_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_client** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestClient**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestClient.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\BlueJeansOnVideoRestApi\Model\GrantClient**](../Model/GrantClient.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByCode**
> \BlueJeansOnVideoRestApi\Model\GrantCode getTokenByCode($grant_request_code)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_code = new \BlueJeansOnVideoRestApi\Model\GrantRequestCode(); // \BlueJeansOnVideoRestApi\Model\GrantRequestCode | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByCode($grant_request_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_code** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestCode**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestCode.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\BlueJeansOnVideoRestApi\Model\GrantCode**](../Model/GrantCode.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByMeeting**
> \BlueJeansOnVideoRestApi\Model\GrantMeeting getTokenByMeeting($grant_request_meeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type. The scope of access covers the meeting only. Call this API with the meetings' numerid ID, and the meeting passcode (it one exists).  If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will grant attendee abilities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_meeting = new \BlueJeansOnVideoRestApi\Model\GrantRequestMeeting(); // \BlueJeansOnVideoRestApi\Model\GrantRequestMeeting | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByMeeting($grant_request_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_meeting** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestMeeting**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestMeeting.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\BlueJeansOnVideoRestApi\Model\GrantMeeting**](../Model/GrantMeeting.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByPassword**
> \BlueJeansOnVideoRestApi\Model\GrantPassword getTokenByPassword($grant_request_password)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password.  Set the grant_type to \"password\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_password = new \BlueJeansOnVideoRestApi\Model\GrantRequestPassword(); // \BlueJeansOnVideoRestApi\Model\GrantRequestPassword | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByPassword($grant_request_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_password** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestPassword**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestPassword.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\BlueJeansOnVideoRestApi\Model\GrantPassword**](../Model/GrantPassword.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByRefresh**
> \BlueJeansOnVideoRestApi\Model\GrantRefresh getTokenByRefresh($grant_request_refresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_refresh = new \BlueJeansOnVideoRestApi\Model\GrantRequestRefresh(); // \BlueJeansOnVideoRestApi\Model\GrantRequestRefresh | Contains information about the type of grant you are requesting.

try {
    $result = $api_instance->getTokenByRefresh($grant_request_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_refresh** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestRefresh**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestRefresh.md)| Contains information about the type of grant you are requesting. |

### Return type

[**\BlueJeansOnVideoRestApi\Model\GrantRefresh**](../Model/GrantRefresh.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenInfo**
> \BlueJeansOnVideoRestApi\Model\InlineResponse200 getTokenInfo($access_token)

Validate a Token

This endpoint will validate if a token is valid or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$access_token = "access_token_example"; // string | 

try {
    $result = $api_instance->getTokenInfo($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]

### Return type

[**\BlueJeansOnVideoRestApi\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeAccessToken**
> revokeAccessToken($grant_request_revoke, $access_token)

Revoke Access Token

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansOnVideoRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansOnVideoRestApi\Api\AuthenticationApi();
$grant_request_revoke = new \BlueJeansOnVideoRestApi\Model\GrantRequestRevoke(); // \BlueJeansOnVideoRestApi\Model\GrantRequestRevoke | Contains information about the type of grant you are revoking.
$access_token = "access_token_example"; // string | 

try {
    $api_instance->revokeAccessToken($grant_request_revoke, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->revokeAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_revoke** | [**\BlueJeansOnVideoRestApi\Model\GrantRequestRevoke**](../Model/\BlueJeansOnVideoRestApi\Model\GrantRequestRevoke.md)| Contains information about the type of grant you are revoking. |
 **access_token** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

