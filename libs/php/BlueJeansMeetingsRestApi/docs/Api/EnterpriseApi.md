# BlueJeansMeetingsRestApi\EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeEnterpriseTags**](EnterpriseApi.md#changeEnterpriseTags) | **PUT** /v1/enterprise/{enterpriseId}/tags | Set Enterprise Tags
[**createEnterpriseUser**](EnterpriseApi.md#createEnterpriseUser) | **POST** /v1/enterprise/{enterpriseId}/users | Create User
[**exportUsers**](EnterpriseApi.md#exportUsers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**getEnterpriseTags**](EnterpriseApi.md#getEnterpriseTags) | **GET** /v1/enterprise/{enterpriseId}/tags | List Enterprise Tags
[**removeUser**](EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**searchUsers**](EnterpriseApi.md#searchUsers) | **GET** /v1/enterprise/{enterpriseId}/users | Search for User(s)


# **changeEnterpriseTags**
> \BlueJeansMeetingsRestApi\Model\TagListComp changeEnterpriseTags($enterprise_id, $action, $tag)

Set Enterprise Tags

This endpoint modifies the list of profile tags associated with the specified enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$action = "action_example"; // string | Type of operation to be done
$tag = "tag_example"; // string | The name of tag

try {
    $result = $api_instance->changeEnterpriseTags($enterprise_id, $action, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->changeEnterpriseTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
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

# **createEnterpriseUser**
> \BlueJeansMeetingsRestApi\Model\UserId createEnterpriseUser($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin)

Create User

This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user's personal meeting room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$enterprise_user = new \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser(); // \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser | Basic Enterprise Account information
$billing_category = "ENTERPRISE"; // string | What general billing group does this profile belong?
$force_password_change = true; // bool | Create profile and force user to change password on next login
$is_admin = true; // bool | Create this account to have Administrative Privileges for the enterprise

try {
    $result = $api_instance->createEnterpriseUser($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->createEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **enterprise_user** | [**\BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser**](../Model/EnterpriseCreateUser.md)| Basic Enterprise Account information |
 **billing_category** | **string**| What general billing group does this profile belong? | [optional] [default to ENTERPRISE]
 **force_password_change** | **bool**| Create profile and force user to change password on next login | [optional]
 **is_admin** | **bool**| Create this account to have Administrative Privileges for the enterprise | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\UserId**](../Model/UserId.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportUsers**
> exportUsers($enterprise_id)

Export Enterprise Users

This endpoint exports existing users into a CSV file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try {
    $api_instance->exportUsers($enterprise_id);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->exportUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseTags**
> \BlueJeansMeetingsRestApi\Model\TagListComp getEnterpriseTags($enterprise_id)

List Enterprise Tags

This endpoint retrieves all profile tags defined for the specified enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try {
    $result = $api_instance->getEnterpriseTags($enterprise_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->getEnterpriseTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**\BlueJeansMeetingsRestApi\Model\TagListComp**](../Model/TagListComp.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUser**
> removeUser($enterprise_id, $user_id)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$user_id = 56; // int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try {
    $api_instance->removeUser($enterprise_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->removeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsers**
> \BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch searchUsers($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number)

Search for User(s)

This endpoint provides a search facility for the specified enterprise.  <ul><li>If textSearch is provided, the results will be a partial string-match search of the given textSearch value.</li><li> Otherwise, the search will return an exact lookup by emailId.</li></ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlueJeansMeetingsRestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new BlueJeansMeetingsRestApi\Api\EnterpriseApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$fields = "fields_example"; // string | A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email
$order = "order_example"; // string | If specificed, order defines how the API sorts results- ascending or descending
$sort_by = "sort_by_example"; // string | Name of BlueJeans profile field by with API response data is sorted
$text_search = "text_search_example"; // string | If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users
$email_id = "email_id_example"; // string | If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value.
$page_size = 56; // int | Sets number of items returned per page.
$page_number = 56; // int | Selects which page of results to return (1-based value)

try {
    $result = $api_instance->searchUsers($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **fields** | **string**| A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email | [optional]
 **order** | **string**| If specificed, order defines how the API sorts results- ascending or descending | [optional]
 **sort_by** | **string**| Name of BlueJeans profile field by with API response data is sorted | [optional]
 **text_search** | **string**| If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users | [optional]
 **email_id** | **string**| If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. | [optional]
 **page_size** | **int**| Sets number of items returned per page. | [optional]
 **page_number** | **int**| Selects which page of results to return (1-based value) | [optional]

### Return type

[**\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch**](../Model/EnterpriseUserSearch.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

