# HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1EnterpriseEnterpriseIdMeetingHistoryGet**](HistoryApi.md#v1EnterpriseEnterpriseIdMeetingHistoryGet) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List Meetings
[**v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | List Meetings
[**v1UserUserIdMeetingHistoryGet**](HistoryApi.md#v1UserUserIdMeetingHistoryGet) | **GET** /v1/user/{user_id}/meeting_history | List Meetings
[**v1UserUserIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1UserUserIdMeetingHistoryMeetingGuidGet) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | List Meetings
[**v1UserUserIdMeetingHistoryRecordingsGet**](HistoryApi.md#v1UserUserIdMeetingHistoryRecordingsGet) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings


<a name="v1EnterpriseEnterpriseIdMeetingHistoryGet"></a>
# **v1EnterpriseEnterpriseIdMeetingHistoryGet**
> Meeting v1EnterpriseEnterpriseIdMeetingHistoryGet(enterpriseId)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.HistoryApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

HistoryApi apiInstance = new HistoryApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdMeetingHistoryGet(enterpriseId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling HistoryApi#v1EnterpriseEnterpriseIdMeetingHistoryGet");
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

<a name="v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet"></a>
# **v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**
> Meeting v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet(enterpriseId, meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.HistoryApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

HistoryApi apiInstance = new HistoryApi();
Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet(enterpriseId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling HistoryApi#v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet");
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

<a name="v1UserUserIdMeetingHistoryGet"></a>
# **v1UserUserIdMeetingHistoryGet**
> Meeting v1UserUserIdMeetingHistoryGet(userId, meetingId, startDate, endDate, pageSize, pageNumber, order)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.HistoryApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

HistoryApi apiInstance = new HistoryApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingId = "meetingId_example"; // String | Return meetings with the specified Meeting ID (recurring & Personal Meeting ID).
String startDate = "startDate_example"; // String | Return meetings starting from the specified date. MM/DD/YYYY
String endDate = "endDate_example"; // String | Return meetings up until the specified date. MM/DD/YYYY
Integer pageSize = 56; // Integer | Sets number of items returned per page.
Integer pageNumber = 56; // Integer | Selects which page of results to return.
String order = "order_example"; // String | Puts results in ascending or descending order. asc/desc
try {
    Meeting result = apiInstance.v1UserUserIdMeetingHistoryGet(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling HistoryApi#v1UserUserIdMeetingHistoryGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **String**| Return meetings with the specified Meeting ID (recurring &amp; Personal Meeting ID). | [optional]
 **startDate** | **String**| Return meetings starting from the specified date. MM/DD/YYYY | [optional]
 **endDate** | **String**| Return meetings up until the specified date. MM/DD/YYYY | [optional]
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional]
 **pageNumber** | **Integer**| Selects which page of results to return. | [optional]
 **order** | **String**| Puts results in ascending or descending order. asc/desc | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdMeetingHistoryMeetingGuidGet"></a>
# **v1UserUserIdMeetingHistoryMeetingGuidGet**
> Meeting v1UserUserIdMeetingHistoryMeetingGuidGet(userId, meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.HistoryApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

HistoryApi apiInstance = new HistoryApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1UserUserIdMeetingHistoryMeetingGuidGet(userId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling HistoryApi#v1UserUserIdMeetingHistoryMeetingGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdMeetingHistoryRecordingsGet"></a>
# **v1UserUserIdMeetingHistoryRecordingsGet**
> Recording v1UserUserIdMeetingHistoryRecordingsGet(userId, pageSize, pageNumber, sortBy, order)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.HistoryApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

HistoryApi apiInstance = new HistoryApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer pageSize = 10; // Integer | Sets number of items returned per page.
Integer pageNumber = 1; // Integer | Selects which page of results to return.
String sortBy = "start_time"; // String | Selects which page of results to return.
String order = "desc"; // String | Puts results in ascending or descending order.
try {
    Recording result = apiInstance.v1UserUserIdMeetingHistoryRecordingsGet(userId, pageSize, pageNumber, sortBy, order);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling HistoryApi#v1UserUserIdMeetingHistoryRecordingsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **pageSize** | **Integer**| Sets number of items returned per page. | [optional] [default to 10]
 **pageNumber** | **Integer**| Selects which page of results to return. | [optional] [default to 1]
 **sortBy** | **String**| Selects which page of results to return. | [optional] [default to start_time]
 **order** | **String**| Puts results in ascending or descending order. | [optional] [default to desc] [enum: asc, desc]

### Return type

[**Recording**](Recording.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

