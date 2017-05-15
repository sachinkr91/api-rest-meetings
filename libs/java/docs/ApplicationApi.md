# ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](ApplicationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**regenerateClientApplicationSecret**](ApplicationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**updateClientApplication**](ApplicationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


<a name="createClientApplication"></a>
# **createClientApplication**
> Application createClientApplication(userId, application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.ApplicationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

ApplicationApi apiInstance = new ApplicationApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Application application = new Application(); // Application | The information about the new client application.
try {
    Application result = apiInstance.createClientApplication(userId, application);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApplicationApi#createClientApplication");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **application** | [**Application**](Application.md)| The information about the new client application. |

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="regenerateClientApplicationSecret"></a>
# **regenerateClientApplicationSecret**
> ApplicationSecret regenerateClientApplicationSecret(userId, clientId)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.ApplicationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

ApplicationApi apiInstance = new ApplicationApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer clientId = 56; // Integer | The ID of the client application of interest. This value was given as a response during client application creation.
try {
    ApplicationSecret result = apiInstance.regenerateClientApplicationSecret(userId, clientId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApplicationApi#regenerateClientApplicationSecret");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **clientId** | **Integer**| The ID of the client application of interest. This value was given as a response during client application creation. |

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateClientApplication"></a>
# **updateClientApplication**
> Application updateClientApplication(userId, clientId, application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.ApplicationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

ApplicationApi apiInstance = new ApplicationApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer clientId = 56; // Integer | The ID of the client application of interest. This value was given as a response during client application creation.
Application application = new Application(); // Application | The information about the new client application.
try {
    Application result = apiInstance.updateClientApplication(userId, clientId, application);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApplicationApi#updateClientApplication");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **clientId** | **Integer**| The ID of the client application of interest. This value was given as a response during client application creation. |
 **application** | [**Application**](Application.md)| The information about the new client application. |

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

