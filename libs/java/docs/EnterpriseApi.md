# EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeEnterpriseTags**](EnterpriseApi.md#changeEnterpriseTags) | **PUT** /v1/enterprise/{enterpriseId}/tags | Set Enterprise Tags
[**createEnterpriseUser**](EnterpriseApi.md#createEnterpriseUser) | **POST** /v1/enterprise/{enterpriseId}/users | Create User
[**exportUsers**](EnterpriseApi.md#exportUsers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**getEnterpriseTags**](EnterpriseApi.md#getEnterpriseTags) | **GET** /v1/enterprise/{enterpriseId}/tags | List Enterprise Tags
[**removeUser**](EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**searchUsers**](EnterpriseApi.md#searchUsers) | **GET** /v1/enterprise/{enterpriseId}/users | Search for User(s)


<a name="changeEnterpriseTags"></a>
# **changeEnterpriseTags**
> ComponentstagList changeEnterpriseTags(enterpriseId, action, tag)

Set Enterprise Tags

This endpoint modifies the list of profile tags associated with the specified enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String action = "action_example"; // String | Type of operation to be done
String tag = "tag_example"; // String | The name of tag
try {
    ComponentstagList result = apiInstance.changeEnterpriseTags(enterpriseId, action, tag);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#changeEnterpriseTags");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **action** | **String**| Type of operation to be done | [enum: add, delete]
 **tag** | **String**| The name of tag |

### Return type

[**ComponentstagList**](ComponentstagList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="createEnterpriseUser"></a>
# **createEnterpriseUser**
> UserId createEnterpriseUser(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin)

Create User

This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user&#39;s personal meeting room.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
EnterpriseCreateUser enterpriseUser = new EnterpriseCreateUser(); // EnterpriseCreateUser | Basic Enterprise Account information
String billingCategory = "ENTERPRISE"; // String | What general billing group does this profile belong?
Boolean forcePasswordChange = true; // Boolean | Create profile and force user to change password on next login
Boolean isAdmin = true; // Boolean | Create this account to have Administrative Privileges for the enterprise
try {
    UserId result = apiInstance.createEnterpriseUser(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#createEnterpriseUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **enterpriseUser** | [**EnterpriseCreateUser**](EnterpriseCreateUser.md)| Basic Enterprise Account information |
 **billingCategory** | **String**| What general billing group does this profile belong? | [optional] [default to ENTERPRISE]
 **forcePasswordChange** | **Boolean**| Create profile and force user to change password on next login | [optional]
 **isAdmin** | **Boolean**| Create this account to have Administrative Privileges for the enterprise | [optional]

### Return type

[**UserId**](UserId.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="exportUsers"></a>
# **exportUsers**
> exportUsers(enterpriseId)

Export Enterprise Users

This endpoint exports existing users into a CSV file.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
try {
    apiInstance.exportUsers(enterpriseId);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#exportUsers");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

<a name="getEnterpriseTags"></a>
# **getEnterpriseTags**
> ComponentstagList getEnterpriseTags(enterpriseId)

List Enterprise Tags

This endpoint retrieves all profile tags defined for the specified enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
try {
    ComponentstagList result = apiInstance.getEnterpriseTags(enterpriseId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#getEnterpriseTags");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**ComponentstagList**](ComponentstagList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="removeUser"></a>
# **removeUser**
> removeUser(enterpriseId, userId)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    apiInstance.removeUser(enterpriseId, userId);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#removeUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="searchUsers"></a>
# **searchUsers**
> EnterpriseUserSearch searchUsers(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber)

Search for User(s)

This endpoint provides a search facility for the specified enterprise.  &lt;ul&gt;&lt;li&gt;If textSearch is provided, the results will be a partial string-match search of the given textSearch value.&lt;/li&gt;&lt;li&gt; Otherwise, the search will return an exact lookup by emailId.&lt;/li&gt;&lt;/ul&gt;

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.EnterpriseApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

EnterpriseApi apiInstance = new EnterpriseApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String fields = "fields_example"; // String | A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email
String order = "order_example"; // String | If specificed, order defines how the API sorts results- ascending or descending
String sortBy = "sortBy_example"; // String | Name of BlueJeans profile field by with API response data is sorted
String textSearch = "textSearch_example"; // String | If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users
String emailId = "emailId_example"; // String | If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value.
Integer pageSize = 56; // Integer | Sets number of items returned per page.
Integer pageNumber = 56; // Integer | Selects which page of results to return (1-based value)
try {
    EnterpriseUserSearch result = apiInstance.searchUsers(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#searchUsers");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **fields** | **String**| A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email | [optional]
 **order** | **String**| If specificed, order defines how the API sorts results- ascending or descending | [optional] [enum: asc, desc]
 **sortBy** | **String**| Name of BlueJeans profile field by with API response data is sorted | [optional]
 **textSearch** | **String**| If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users | [optional]
 **emailId** | **String**| If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. | [optional]
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional]
 **pageNumber** | **Integer**| Selects which page of results to return (1-based value) | [optional]

### Return type

[**EnterpriseUserSearch**](EnterpriseUserSearch.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

