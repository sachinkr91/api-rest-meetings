# IO.Swagger.Api.RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GetMeetingRecordings**](RecordingApi.md#getmeetingrecordings) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**GetRecordingContent**](RecordingApi.md#getrecordingcontent) | **GET** /v1/user/{user_id}/cms/{content_id}?isDownloadable&#x3D;true | Get Recording Download Link
[**StartRecording**](RecordingApi.md#startrecording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings/?action&#x3D;start | Start Recording
[**StopRecording**](RecordingApi.md#stoprecording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?action&#x3D;stop | Stop Recording
[**V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet**](RecordingApi.md#v1useruseridlivemeetingsmeetingidrecordingsmeetingguidmeetingguidget) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?meetingGuid&#x3D;{meeting_guid} | Get All Recordings for a Specified Meeting GUID
[**V1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**](RecordingApi.md#v1useruseridmeetinghistorymeetingguidrecordingsdelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings | Delete All Recordings for a Specified Meeting GUID
[**V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**](RecordingApi.md#v1useruseridmeetinghistorymeetingidrecordingsrecordingchapteriddelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter


<a name="getmeetingrecordings"></a>
# **GetMeetingRecordings**
> Meeting GetMeetingRecordings (int? userId, int? meetingId)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class GetMeetingRecordingsExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Get All Recordings for a Specified Meeting ID
                Meeting result = apiInstance.GetMeetingRecordings(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.GetMeetingRecordings: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getrecordingcontent"></a>
# **GetRecordingContent**
> Content GetRecordingContent (int? userId, int? contentId)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class GetRecordingContentExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var contentId = 56;  // int? | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.

            try
            {
                // Get Recording Download Link
                Content result = apiInstance.GetRecordingContent(userId, contentId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.GetRecordingContent: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **contentId** | **int?**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. | 

### Return type

[**Content**](Content.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="startrecording"></a>
# **StartRecording**
> void StartRecording (int? userId, int? meetingId)

Start Recording

This endpoint starts recording for a meeting in progress.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class StartRecordingExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Start Recording
                apiInstance.StartRecording(userId, meetingId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.StartRecording: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="stoprecording"></a>
# **StopRecording**
> void StopRecording (int? userId, int? meetingId)

Stop Recording

This endpoint stops recording for a meeting in progress.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class StopRecordingExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Stop Recording
                apiInstance.StopRecording(userId, meetingId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.StopRecording: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidrecordingsmeetingguidmeetingguidget"></a>
# **V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet**
> Meeting V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet (int? userId, int? meetingId, string meetingGuid)

Get All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // Get All Recordings for a Specified Meeting GUID
                Meeting result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet(userId, meetingId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.V1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meetingGuid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetinghistorymeetingguidrecordingsdelete"></a>
# **V1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**
> Meeting V1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete (int? userId, string meetingGuid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress. 

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // Delete All Recordings for a Specified Meeting GUID
                Meeting result = apiInstance.V1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete(userId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.V1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingGuid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetinghistorymeetingidrecordingsrecordingchapteriddelete"></a>
# **V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**
> Meeting V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete (int? userId, int? meetingId, int? recordingChapterId)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new RecordingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var recordingChapterId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Delete a Specified Recording Chapter
                Meeting result = apiInstance.V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete(userId, meetingId, recordingChapterId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RecordingApi.V1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **recordingChapterId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

