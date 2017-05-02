# CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMeetingLiveByEnterprise**](CommandCenterApi.md#getMeetingLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**getMeetingPastByEnterprise**](CommandCenterApi.md#getMeetingPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
[**getMeetingPastByUser**](CommandCenterApi.md#getMeetingPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
[**getMeetingsLiveByEnterprise**](CommandCenterApi.md#getMeetingsLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**getMeetingsPastByEnterprise**](CommandCenterApi.md#getMeetingsPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**getMeetingsPastByUser**](CommandCenterApi.md#getMeetingsPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User


<a name="getMeetingLiveByEnterprise"></a>
# **getMeetingLiveByEnterprise**
> MeetingExtendedIndigo getMeetingLiveByEnterprise(enterpriseId, meetingUuid)

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
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingLiveByEnterprise(enterpriseId, meetingUuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingLiveByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingPastByEnterprise"></a>
# **getMeetingPastByEnterprise**
> MeetingExtendedIndigo getMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints)

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
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
Boolean includeEndpoints = true; // Boolean | Option to include detailed data on endpoints
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingPastByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |
 **includeEndpoints** | **Boolean**| Option to include detailed data on endpoints | [optional]

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingPastByUser"></a>
# **getMeetingPastByUser**
> MeetingExtendedIndigo getMeetingPastByUser(userId, meetingUuid)

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
String meetingUuid = "meetingUuid_example"; // String | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
try {
    MeetingExtendedIndigo result = apiInstance.getMeetingPastByUser(userId, meetingUuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingPastByUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingUuid** | **String**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. |

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsLiveByEnterprise"></a>
# **getMeetingsLiveByEnterprise**
> MeetingIndigoList getMeetingsLiveByEnterprise(enterpriseId)

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
    MeetingIndigoList result = apiInstance.getMeetingsLiveByEnterprise(enterpriseId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsLiveByEnterprise");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **Integer**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsPastByEnterprise"></a>
# **getMeetingsPastByEnterprise**
> MeetingIndigoList getMeetingsPastByEnterprise(enterpriseId, offset, limit, filter)

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
    MeetingIndigoList result = apiInstance.getMeetingsPastByEnterprise(enterpriseId, offset, limit, filter);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsPastByEnterprise");
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

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingsPastByUser"></a>
# **getMeetingsPastByUser**
> MeetingIndigoList getMeetingsPastByUser(userId)

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
    MeetingIndigoList result = apiInstance.getMeetingsPastByUser(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling CommandCenterApi#getMeetingsPastByUser");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

