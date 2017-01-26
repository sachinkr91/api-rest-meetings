# UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserUserIdEnterpriseProfileGet**](UserApi.md#v1UserUserIdEnterpriseProfileGet) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**v1UserUserIdGet**](UserApi.md#v1UserUserIdGet) | **GET** /v1/user/{user_id} | Get User Account Details
[**v1UserUserIdPut**](UserApi.md#v1UserUserIdPut) | **PUT** /v1/user/{user_id} | Update User Account Details
[**v1UserUserIdRoomGet**](UserApi.md#v1UserUserIdRoomGet) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**v1UserUserIdRoomPut**](UserApi.md#v1UserUserIdRoomPut) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**v1UserUserIdScheduledMeetingGet**](UserApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting


<a name="v1UserUserIdEnterpriseProfileGet"></a>
# **v1UserUserIdEnterpriseProfileGet**
> Enterprise v1UserUserIdEnterpriseProfileGet(userId)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    Enterprise result = apiInstance.v1UserUserIdEnterpriseProfileGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdEnterpriseProfileGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**Enterprise**](Enterprise.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdGet"></a>
# **v1UserUserIdGet**
> User v1UserUserIdGet(userId)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    User result = apiInstance.v1UserUserIdGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdPut"></a>
# **v1UserUserIdPut**
> User v1UserUserIdPut(userId, user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
User user = new User(); // User | The user details that you wish to update.
try {
    User result = apiInstance.v1UserUserIdPut(userId, user);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **user** | [**User**](User.md)| The user details that you wish to update. |

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdRoomGet"></a>
# **v1UserUserIdRoomGet**
> Room v1UserUserIdRoomGet(userId)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    Room result = apiInstance.v1UserUserIdRoomGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdRoomGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdRoomPut"></a>
# **v1UserUserIdRoomPut**
> Room v1UserUserIdRoomPut(userId, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Room room = new Room(); // Room | The user's room details that you wish to update.
try {
    Room result = apiInstance.v1UserUserIdRoomPut(userId, room);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdRoomPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **room** | [**Room**](Room.md)| The user&#39;s room details that you wish to update. |

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingGet"></a>
# **v1UserUserIdScheduledMeetingGet**
> List&lt;Meeting&gt; v1UserUserIdScheduledMeetingGet(userId)

Meeting

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    List<Meeting> result = apiInstance.v1UserUserIdScheduledMeetingGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#v1UserUserIdScheduledMeetingGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**List&lt;Meeting&gt;**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

