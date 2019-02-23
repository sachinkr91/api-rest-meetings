# BlueJeansMeetingsRestApi\AuthenticationApi

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

This is **not a true REST endpoint**. <br /> This URL should be used by a user's browser-client application to perform authorization. <br />This API call takes the user to a BlueJeans page that allows the user to login and approve application access.<br />Upon completion, the user will be redirected back to the client application with a code return value. <br />**Note**<ul><li>This API is activated through <b> https://bluejeans.com/oauth2/authorize </b></li><li>The API's return code has a very short valid period of <b>30 seconds</b>.</li><li>Your application must call the <b>/oauth2/token?Code</b> API as soon as possible to exchange the authorization code for an access token.</li></ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | The 32 character client ID generated when you created the client application.
$redirect_uri = "redirect_uri_example"; // string | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
$state = "state_example"; // string | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
$scope = "scope_example"; // string | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time.
$response_type = "code"; // string | The type of authorization you are peforrming.  Set to \"code\".
$app_name = "app_name_example"; // string | The name of the client application shown to user during authorization.
$app_logo_url = "app_logo_url_example"; // string | URL to an 84x84 image shown to user during authorization.

try {
    $apiInstance->getAuthorizationCode($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);
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
 **scope** | **string**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. | [optional]
 **response_type** | **string**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]
 **app_name** | **string**| The name of the client application shown to user during authorization. | [optional]
 **app_logo_url** | **string**| URL to an 84x84 image shown to user during authorization. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByClient**
> \BlueJeansMeetingsRestApi\Model\GrantClient getTokenByClient($grant_request_client)

Authentication via Client Grant Type

This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**client_credentials**\" (string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_request_client = new \BlueJeansMeetingsRestApi\Model\GrantRequestClient(); // \BlueJeansMeetingsRestApi\Model\GrantRequestClient | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.

try {
    $result = $apiInstance->getTokenByClient($grant_request_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_client** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestClient**](../Model/GrantRequestClient.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantClient**](../Model/GrantClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByCode**
> \BlueJeansMeetingsRestApi\Model\GrantCode getTokenByCode($grant_request_code)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected here after successfully authorizing BlueJeans to grant the application access.  You must pass to this API the authorization code received from BlueJeans along with the applications OAuth client_id and secret keys.  Include as well a *success URL* to which the user will be redirected upon successful authentication. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**authorization_code**\" (string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_request_code = new \BlueJeansMeetingsRestApi\Model\GrantRequestCode(); // \BlueJeansMeetingsRestApi\Model\GrantRequestCode | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.

try {
    $result = $apiInstance->getTokenByCode($grant_request_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_code** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestCode**](../Model/GrantRequestCode.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantCode**](../Model/GrantCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByMeeting**
> \BlueJeansMeetingsRestApi\Model\GrantMeeting getTokenByMeeting($grant_request_meeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. <br />Call this API with the meeting's numeric ID, and the meeting passcode (if one exists). <br />&nbsp;&nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. <br />&nbsp;&nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.<br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**meeting_passcode**\" (string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_request_meeting = new \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting(); // \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.

try {
    $result = $apiInstance->getTokenByMeeting($grant_request_meeting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_meeting** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestMeeting**](../Model/GrantRequestMeeting.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantMeeting**](../Model/GrantMeeting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByPassword**
> \BlueJeansMeetingsRestApi\Model\GrantPassword getTokenByPassword($grant_request_password)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**password**\" (string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_request_password = new \BlueJeansMeetingsRestApi\Model\GrantRequestPassword(); // \BlueJeansMeetingsRestApi\Model\GrantRequestPassword | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.

try {
    $result = $apiInstance->getTokenByPassword($grant_request_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_password** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestPassword**](../Model/GrantRequestPassword.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantPassword**](../Model/GrantPassword.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByRefresh**
> \BlueJeansMeetingsRestApi\Model\GrantRefresh getTokenByRefresh($grant_request_refresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**refresh_token**\" (string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_request_refresh = new \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh(); // \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.

try {
    $result = $apiInstance->getTokenByRefresh($grant_request_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenByRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_refresh** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestRefresh**](../Model/GrantRequestRefresh.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\GrantRefresh**](../Model/GrantRefresh.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenInfo**
> \BlueJeansMeetingsRestApi\Model\InlineResponse200 getTokenInfo($access_token)

Validate a Token

This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 

try {
    $result = $apiInstance->getTokenInfo($access_token);
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

[**\BlueJeansMeetingsRestApi\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

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
$config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_ACCESS_TOKEN');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new BlueJeansMeetingsRestApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_request_revoke = new \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke(); // \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke | Contains information about the type of grant you are revoking.
$access_token = "access_token_example"; // string | 

try {
    $apiInstance->revokeAccessToken($grant_request_revoke, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->revokeAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_revoke** | [**\BlueJeansMeetingsRestApi\Model\GrantRequestRevoke**](../Model/GrantRequestRevoke.md)| Contains information about the type of grant you are revoking. |
 **access_token** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

