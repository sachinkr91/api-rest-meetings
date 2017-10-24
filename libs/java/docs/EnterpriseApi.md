# EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](EnterpriseApi.md#createUser) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
[**exportUsers**](EnterpriseApi.md#exportUsers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**listUsers**](EnterpriseApi.md#listUsers) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
[**removeUser**](EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User


<a name="createUser"></a>
# **createUser**
> UserId createUser(enterpriseId, user, forcePasswordChange, sendVerificationMail)

Create Enterprise User

This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.

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
User user = new User(); // User | The information about the new user.
Boolean forcePasswordChange = true; // Boolean | Forces the user to change his or her password on first log in.
Boolean sendVerificationMail = true; // Boolean | Prevents welcome emails from being sent to the newly created user.
try {
    UserId result = apiInstance.createUser(enterpriseId, user, forcePasswordChange, sendVerificationMail);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#createUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **user** | [**User**](User.md)| The information about the new user. |
 **forcePasswordChange** | **Boolean**| Forces the user to change his or her password on first log in. | [optional]
 **sendVerificationMail** | **Boolean**| Prevents welcome emails from being sent to the newly created user. | [optional]

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

<a name="listUsers"></a>
# **listUsers**
> EnterpriseUserList listUsers(enterpriseId, pageSize, pageNumber, emailId)

List Enterprise Users

This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.

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
Integer pageSize = 56; // Integer | Sets number of items returned per page.
Integer pageNumber = 56; // Integer | Selects which page of results to return.
String emailId = "emailId_example"; // String | Allows filtering the response by a user’s email address.
try {
    EnterpriseUserList result = apiInstance.listUsers(enterpriseId, pageSize, pageNumber, emailId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling EnterpriseApi#listUsers");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional]
 **pageNumber** | **Integer**| Selects which page of results to return. | [optional]
 **emailId** | **String**| Allows filtering the response by a user’s email address. | [optional]

### Return type

[**EnterpriseUserList**](EnterpriseUserList.md)

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

