# RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareRecordings**](RecordingApi.md#createShareRecordings) | **POST** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing | Enable Recording Sharing
[**deleteAllRecordingsByMeetingGuid**](RecordingApi.md#deleteAllRecordingsByMeetingGuid) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
[**deleteRecordingChapter**](RecordingApi.md#deleteRecordingChapter) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter
[**deleteShareRecordings**](RecordingApi.md#deleteShareRecordings) | **DELETE** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing | Delete Recording Sharing
[**getMeetingRecordings**](RecordingApi.md#getMeetingRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**getRecordingContent**](RecordingApi.md#getRecordingContent) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
[**getShareRecordings**](RecordingApi.md#getShareRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing | List Recording Sharing
[**modifyShareRecordings**](RecordingApi.md#modifyShareRecordings) | **PUT** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId} | Modify Recording Sharing
[**moveRecordingOwner**](RecordingApi.md#moveRecordingOwner) | **POST** /v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner} | Move Recording Ownership
[**startRecording**](RecordingApi.md#startRecording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
[**stopRecording**](RecordingApi.md#stopRecording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording


<a name="createShareRecordings"></a>
# **createShareRecordings**
> MeetingSharing createShareRecordings(userId, meetingGuid, setSharing)

Enable Recording Sharing

This endpoint creates a sharing authorization record for the specified meeting recording.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
SetSharing setSharing = new SetSharing(); // SetSharing | 
try {
    MeetingSharing result = apiInstance.createShareRecordings(userId, meetingGuid, setSharing);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#createShareRecordings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |
 **setSharing** | [**SetSharing**](SetSharing.md)|  |

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="deleteAllRecordingsByMeetingGuid"></a>
# **deleteAllRecordingsByMeetingGuid**
> Meeting deleteAllRecordingsByMeetingGuid(userId, meetingGuid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress. 

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

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
    Meeting result = apiInstance.deleteAllRecordingsByMeetingGuid(userId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#deleteAllRecordingsByMeetingGuid");
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

<a name="deleteRecordingChapter"></a>
# **deleteRecordingChapter**
> Meeting deleteRecordingChapter(userId, meetingId, recordingChapterId)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

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
    Meeting result = apiInstance.deleteRecordingChapter(userId, meetingId, recordingChapterId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#deleteRecordingChapter");
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

<a name="deleteShareRecordings"></a>
# **deleteShareRecordings**
> deleteShareRecordings(userId, meetingGuid)

Delete Recording Sharing

This endpoint deletes the sharing authorization associated with a meeting recording.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
try {
    apiInstance.deleteShareRecordings(userId, meetingGuid);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#deleteShareRecordings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingRecordings"></a>
# **getMeetingRecordings**
> RecordingHistoryList getMeetingRecordings(userId, meetingId, meetingGuid)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

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
    RecordingHistoryList result = apiInstance.getMeetingRecordings(userId, meetingId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#getMeetingRecordings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | [optional]

### Return type

[**RecordingHistoryList**](RecordingHistoryList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRecordingContent"></a>
# **getRecordingContent**
> Content getRecordingContent(userId, contentId, isDownloadable)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer contentId = 56; // Integer | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
Boolean isDownloadable = true; // Boolean | Set to true.
try {
    Content result = apiInstance.getRecordingContent(userId, contentId, isDownloadable);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#getRecordingContent");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **contentId** | **Integer**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. |
 **isDownloadable** | **Boolean**| Set to true. | [default to true]

### Return type

[**Content**](Content.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getShareRecordings"></a>
# **getShareRecordings**
> MeetingSharing getShareRecordings(userId, meetingGuid)

List Recording Sharing

This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
try {
    MeetingSharing result = apiInstance.getShareRecordings(userId, meetingGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#getShareRecordings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="modifyShareRecordings"></a>
# **modifyShareRecordings**
> MeetingSharing modifyShareRecordings(userId, meetingGuid, sharingId, modifySharing)

Modify Recording Sharing

This endpoint modifieds the sharing authorization attributes for a meeting recording.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String meetingGuid = "meetingGuid_example"; // String | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
String sharingId = "sharingId_example"; // String | The identifier of the sharing authorization record.  This value can be obtained from the \"Id\" in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing
ModifySharing modifySharing = new ModifySharing(); // ModifySharing | 
try {
    MeetingSharing result = apiInstance.modifyShareRecordings(userId, meetingGuid, sharingId, modifySharing);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#modifyShareRecordings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingGuid** | **String**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. |
 **sharingId** | **String**| The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing |
 **modifySharing** | [**ModifySharing**](ModifySharing.md)|  |

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="moveRecordingOwner"></a>
# **moveRecordingOwner**
> RecordingMovedComp moveRecordingOwner(userId, originalOwner, newOwner)

Move Recording Ownership

This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer originalOwner = 56; // Integer | The ID of the recording's current owner.
Integer newOwner = 56; // Integer | The ID of the intended owner for the recording.
try {
    RecordingMovedComp result = apiInstance.moveRecordingOwner(userId, originalOwner, newOwner);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#moveRecordingOwner");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **originalOwner** | **Integer**| The ID of the recording&#39;s current owner. |
 **newOwner** | **Integer**| The ID of the intended owner for the recording. |

### Return type

[**RecordingMovedComp**](RecordingMovedComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="startRecording"></a>
# **startRecording**
> startRecording(userId, meetingId, action)

Start Recording

This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String action = "start"; // String | Always set to \"start\" in order to start recording.
try {
    apiInstance.startRecording(userId, meetingId, action);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#startRecording");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **action** | **String**| Always set to \&quot;start\&quot; in order to start recording. | [default to start] [enum: start]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="stopRecording"></a>
# **stopRecording**
> stopRecording(userId, meetingId, action)

Stop Recording

This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.RecordingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

RecordingApi apiInstance = new RecordingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String action = "stop"; // String | Always set to \"stop\" in order to stop recording.
try {
    apiInstance.stopRecording(userId, meetingId, action);
} catch (ApiException e) {
    System.err.println("Exception when calling RecordingApi#stopRecording");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **action** | **String**| Always set to \&quot;stop\&quot; in order to stop recording. | [default to stop] [enum: stop]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

