# RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserUserIdCmsContentIdisDownloadabletrueGet**](RecordingApi.md#v1UserUserIdCmsContentIdisDownloadabletrueGet) | **GET** /v1/user/{user_id}/cms/{content_id}?isDownloadable&#x3D;true | Get Recording Download Link
[**v1UserUserIdLiveMeetingsMeetingIdRecordingsGet**](RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost**](RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?action&#x3D;start | Start Recording
[**v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut**](RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?action&#x3D;stop | Stop Recording
[**v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet**](RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?meetingGuid&#x3D;{meeting_guid} | Get All Recordings for a Specified Meeting GUID
[**v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**](RecordingApi.md#v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings | Delete All Recordings for a Specified Meeting GUID
[**v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**](RecordingApi.md#v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter


<a name="v1UserUserIdCmsContentIdisDownloadabletrueGet"></a>
# **v1UserUserIdCmsContentIdisDownloadabletrueGet**
> Content v1UserUserIdCmsContentIdisDownloadabletrueGet(userId, contentId)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer contentId = 56; // Integer | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
try {
    Content result = apiInstance.v1UserUserIdCmsContentIdisDownloadabletrueGet(userId, contentId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdCmsContentIdisDownloadabletrueGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **contentId** | **Integer**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. |

### Return type

[**Content**](Content.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdRecordingsGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdRecordingsGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdRecordingsGet(userId, meetingId)

Get All Recordings for a Specified Meeting ID

This endpoint stops recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdRecordingsGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdLiveMeetingsMeetingIdRecordingsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost"></a>
# **v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost**
> Meeting v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost(userId, meetingId)

Start Recording

This endpoint starts recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut**
> Meeting v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut(userId, meetingId)

Stop Recording

This endpoint stops recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet(userId, meetingId, meetingGuid)

Get All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet(userId, meetingId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete"></a>
# **v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**
> Meeting v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete(userId, meetingGuid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress. 

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
try {
    Meeting result = apiInstance.v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete(userId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete");
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

<a name="v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete"></a>
# **v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**
> Meeting v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete(userId, meetingId, recordingChapterId)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
Integer recordingChapterId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete(userId, meetingId, recordingChapterId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **recordingChapterId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

