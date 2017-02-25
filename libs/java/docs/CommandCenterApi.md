# CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1EnterpriseEnterpriseIdIndigoMeetingsGet**](CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet**](CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet**](CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_guid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet**](CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by Enterprise
[**v1UserUserIdIndigoMeetingsGet**](CommandCenterApi.md#v1UserUserIdIndigoMeetingsGet) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**v1UserUserIdIndigoMeetingsMeetingGuidGet**](CommandCenterApi.md#v1UserUserIdIndigoMeetingsMeetingGuidGet) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by User


<a name="v1EnterpriseEnterpriseIdIndigoMeetingsGet"></a>
# **v1EnterpriseEnterpriseIdIndigoMeetingsGet**
> Meeting v1EnterpriseEnterpriseIdIndigoMeetingsGet(enterpriseId, offset, limit, filter)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
Integer offset = 56; // Integer | Page Number
Integer limit = 56; // Integer | Per page
String filter = "filter_example"; // String | URL-encoded JSON string
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdIndigoMeetingsGet(enterpriseId, offset, limit, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1EnterpriseEnterpriseIdIndigoMeetingsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **offset** | **Integer**| Page Number | [optional]
 **limit** | **Integer**| Per page | [optional]
 **filter** | **String**| URL-encoded JSON string | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet"></a>
# **v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet**
> Meeting v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet(enterpriseId)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet(enterpriseId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet"></a>
# **v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet**
> Meeting v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet(enterpriseId, meetingGuid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet(enterpriseId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet"></a>
# **v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet**
> Meeting v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet(enterpriseId, meetingGuid)

List Meeting Endpoints &amp; Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet(enterpriseId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdIndigoMeetingsGet"></a>
# **v1UserUserIdIndigoMeetingsGet**
> Meeting v1UserUserIdIndigoMeetingsGet(userId)

List Past Meetings by User

This endpoint lists completed meetings by user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    Meeting result = apiInstance.v1UserUserIdIndigoMeetingsGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1UserUserIdIndigoMeetingsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdIndigoMeetingsMeetingGuidGet"></a>
# **v1UserUserIdIndigoMeetingsMeetingGuidGet**
> Meeting v1UserUserIdIndigoMeetingsMeetingGuidGet(userId, meetingGuid)

List Meeting Endpoints &amp; Stats by User

This endpoint lists meeting endpoints for completed meetings by user.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.onvideo.ApiClient;
//import com.bluejeans.api.rest.onvideo.ApiException;
//import com.bluejeans.api.rest.onvideo.Configuration;
//import com.bluejeans.api.rest.onvideo.auth.*;
//import com.bluejeans.api.rest.onvideo.api.CommandCenterApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

CommandCenterApi apiInstance = new CommandCenterApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1UserUserIdIndigoMeetingsMeetingGuidGet(userId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#v1UserUserIdIndigoMeetingsMeetingGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

