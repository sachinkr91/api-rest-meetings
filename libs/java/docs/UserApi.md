# UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeUserTags**](UserApi.md#changeUserTags) | **PUT** /v1/user/{userId}/tags | Set User Tags
[**createRoom**](UserApi.md#createRoom) | **POST** /v1/user/{user_id}/room | Create User’s Default Meeting Settings
[**getEnterpriseProfile**](UserApi.md#getEnterpriseProfile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**getGrantedApplications**](UserApi.md#getGrantedApplications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**getGroups**](UserApi.md#getGroups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
[**getPersonalMeeting**](UserApi.md#getPersonalMeeting) | **GET** /v1/user/{user_id}/personal_meeting | Get Personal Meeting
[**getRoom**](UserApi.md#getRoom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**getUser**](UserApi.md#getUser) | **GET** /v1/user/{user_id} | Get User Account Details
[**getUserTags**](UserApi.md#getUserTags) | **GET** /v1/user/{userId}/tags | List User Tags
[**revokeGrantedApplication**](UserApi.md#revokeGrantedApplication) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**setGroups**](UserApi.md#setGroups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
[**updatePeresonalMeeting**](UserApi.md#updatePeresonalMeeting) | **PUT** /v1/user/{user_id}/personal_meeting | Update Personal Meeting
[**updateRoom**](UserApi.md#updateRoom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**updateUser**](UserApi.md#updateUser) | **PUT** /v1/user/{user_id} | Update User Account Details


<a name="changeUserTags"></a>
# **changeUserTags**
> TagListComp changeUserTags(userId, action, tag)

Set User Tags

This endpoint modifies the list of tags associated with the specified user. &lt;b&gt;NOTE&lt;/b&gt; Adding a tag that is not defined in the user&#39;s Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String action = "action_example"; // String | Type of operation to be done
String tag = "tag_example"; // String | The name of tag
try {
    TagListComp result = apiInstance.changeUserTags(userId, action, tag);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#changeUserTags");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **action** | **String**| Type of operation to be done | [enum: add, delete]
 **tag** | **String**| The name of tag |

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="createRoom"></a>
# **createRoom**
> Room createRoom(userId, room)

Create User’s Default Meeting Settings

This endpoint creates the user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Room room = new Room(); // Room | The user's room details
try {
    Room result = apiInstance.createRoom(userId, room);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#createRoom");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **room** | [**Room**](Room.md)| The user&#39;s room details |

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEnterpriseProfile"></a>
# **getEnterpriseProfile**
> Enterprise getEnterpriseProfile(userId)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    Enterprise result = apiInstance.getEnterpriseProfile(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getEnterpriseProfile");
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

<a name="getGrantedApplications"></a>
# **getGrantedApplications**
> GrantedApplications getGrantedApplications(userId)

Get Granted Applications

This endpoint retrieves the granted applications associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    GrantedApplications result = apiInstance.getGrantedApplications(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getGrantedApplications");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**GrantedApplications**](GrantedApplications.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getGroups"></a>
# **getGroups**
> List&lt;String&gt; getGroups(userId)

Get User Feature Groups

This endpoint retrieves the feature groups associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    List<String> result = apiInstance.getGroups(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getGroups");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

**List&lt;String&gt;**

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getPersonalMeeting"></a>
# **getPersonalMeeting**
> PersonalMeetingRoom getPersonalMeeting(userId)

Get Personal Meeting

This endpoint gets the settings for a user&#39;s personal meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    PersonalMeetingRoom result = apiInstance.getPersonalMeeting(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getPersonalMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRoom"></a>
# **getRoom**
> Room getRoom(userId)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    Room result = apiInstance.getRoom(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getRoom");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getUser"></a>
# **getUser**
> User getUser(userId)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    User result = apiInstance.getUser(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getUser");
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

<a name="getUserTags"></a>
# **getUserTags**
> TagListComp getUserTags(userId)

List User Tags

This endpoint retrieves all tags associated with the specified user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
try {
    TagListComp result = apiInstance.getUserTags(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#getUserTags");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="revokeGrantedApplication"></a>
# **revokeGrantedApplication**
> revokeGrantedApplication(userId, clientId)

Remoke Granted Application

This endpoint revokes the granted application associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String clientId = "clientId_example"; // String | The ID of the granted application.
try {
    apiInstance.revokeGrantedApplication(userId, clientId);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#revokeGrantedApplication");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **clientId** | **String**| The ID of the granted application. |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="setGroups"></a>
# **setGroups**
> setGroups(userId, enable, disable)

Set User Feature Groups

This endpoint sets the feature groups associated with the user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String enable = "enable_example"; // String | The feature group you want to enable.
String disable = "disable_example"; // String | The feature group you want to disable.
try {
    apiInstance.setGroups(userId, enable, disable);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#setGroups");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **enable** | **String**| The feature group you want to enable. | [optional] [enum: record, extended_capacity, lync, jabber, telepresence, isdn, facetime]
 **disable** | **String**| The feature group you want to disable. | [optional] [enum: record, extended_capacity, lync, jabber, telepresence, isdn, facetime]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updatePeresonalMeeting"></a>
# **updatePeresonalMeeting**
> PersonalMeetingRoom updatePeresonalMeeting(userId, personalMeeting)

Update Personal Meeting

This endpoint changes the settings for a user&#39;s personal meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
PersonalMeetingRoom personalMeeting = new PersonalMeetingRoom(); // PersonalMeetingRoom | The user's personal meeting room details that you wish to update.
try {
    PersonalMeetingRoom result = apiInstance.updatePeresonalMeeting(userId, personalMeeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#updatePeresonalMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **personalMeeting** | [**PersonalMeetingRoom**](PersonalMeetingRoom.md)| The user&#39;s personal meeting room details that you wish to update. |

### Return type

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateRoom"></a>
# **updateRoom**
> Room updateRoom(userId, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

UserApi apiInstance = new UserApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Room room = new Room(); // Room | The user's room details that you wish to update.
try {
    Room result = apiInstance.updateRoom(userId, room);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#updateRoom");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **room** | [**Room**](Room.md)| The user&#39;s room details that you wish to update. |

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateUser"></a>
# **updateUser**
> User updateUser(userId, user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.UserApi;

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
    User result = apiInstance.updateUser(userId, user);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling UserApi#updateUser");
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

