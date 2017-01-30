# IO.Swagger.Api.HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**V1EnterpriseEnterpriseIdMeetingHistoryGet**](HistoryApi.md#v1enterpriseenterpriseidmeetinghistoryget) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List Meetings
[**V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1enterpriseenterpriseidmeetinghistorymeetingguidget) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | List Meetings
[**V1UserUserIdMeetingHistoryGet**](HistoryApi.md#v1useruseridmeetinghistoryget) | **GET** /v1/user/{user_id}/meeting_history | List Meetings
[**V1UserUserIdMeetingHistoryMeetingGuidGet**](HistoryApi.md#v1useruseridmeetinghistorymeetingguidget) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | List Meetings
[**V1UserUserIdMeetingHistoryRecordingsGet**](HistoryApi.md#v1useruseridmeetinghistoryrecordingsget) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings
[**V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet**](HistoryApi.md#v1useruseridmeetinghistoryrecordingsrecordingentityidget) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | List Meeting Recordings


<a name="v1enterpriseenterpriseidmeetinghistoryget"></a>
# **V1EnterpriseEnterpriseIdMeetingHistoryGet**
> Meeting V1EnterpriseEnterpriseIdMeetingHistoryGet (int? enterpriseId)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdMeetingHistoryGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

            try
            {
                // List Meetings
                Meeting result = apiInstance.V1EnterpriseEnterpriseIdMeetingHistoryGet(enterpriseId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1EnterpriseEnterpriseIdMeetingHistoryGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1enterpriseenterpriseidmeetinghistorymeetingguidget"></a>
# **V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**
> Meeting V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet (int? enterpriseId, string meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // List Meetings
                Meeting result = apiInstance.V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet(enterpriseId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingGuid** | **string**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetinghistoryget"></a>
# **V1UserUserIdMeetingHistoryGet**
> Meeting V1UserUserIdMeetingHistoryGet (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = meetingId_example;  // string | Return meetings with the specified Meeting ID (recurring & Personal Meeting ID). (optional) 
            var startDate = startDate_example;  // string | Return meetings starting from the specified date. MM/DD/YYYY (optional) 
            var endDate = endDate_example;  // string | Return meetings up until the specified date. MM/DD/YYYY (optional) 
            var pageSize = 56;  // int? | Sets number of items returned per page. (optional) 
            var pageNumber = 56;  // int? | Selects which page of results to return. (optional) 
            var order = order_example;  // string | Puts results in ascending or descending order. asc/desc (optional) 

            try
            {
                // List Meetings
                Meeting result = apiInstance.V1UserUserIdMeetingHistoryGet(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1UserUserIdMeetingHistoryGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **string**| Return meetings with the specified Meeting ID (recurring &amp; Personal Meeting ID). | [optional] 
 **startDate** | **string**| Return meetings starting from the specified date. MM/DD/YYYY | [optional] 
 **endDate** | **string**| Return meetings up until the specified date. MM/DD/YYYY | [optional] 
 **pageSize** | **int?**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **int?**| Selects which page of results to return. | [optional] 
 **order** | **string**| Puts results in ascending or descending order. asc/desc | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetinghistorymeetingguidget"></a>
# **V1UserUserIdMeetingHistoryMeetingGuidGet**
> Meeting V1UserUserIdMeetingHistoryMeetingGuidGet (int? userId, string meetingGuid)

List Meetings

This endpoint retrieves a list of meetings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryMeetingGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // List Meetings
                Meeting result = apiInstance.V1UserUserIdMeetingHistoryMeetingGuidGet(userId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1UserUserIdMeetingHistoryMeetingGuidGet: " + e.Message );
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

<a name="v1useruseridmeetinghistoryrecordingsget"></a>
# **V1UserUserIdMeetingHistoryRecordingsGet**
> List<RecordingSummary> V1UserUserIdMeetingHistoryRecordingsGet (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryRecordingsGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var pageSize = 56;  // int? | Sets number of items returned per page. (optional)  (default to 10)
            var pageNumber = 56;  // int? | Selects which page of results to return. (optional)  (default to 1)
            var sortBy = sortBy_example;  // string | Selects which page of results to return. (optional)  (default to start_time)
            var order = order_example;  // string | Puts results in ascending or descending order. (optional)  (default to desc)

            try
            {
                // List Meeting Recordings
                List&lt;RecordingSummary&gt; result = apiInstance.V1UserUserIdMeetingHistoryRecordingsGet(userId, pageSize, pageNumber, sortBy, order);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1UserUserIdMeetingHistoryRecordingsGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **pageSize** | **int?**| Sets number of items returned per page. | [optional] [default to 10]
 **pageNumber** | **int?**| Selects which page of results to return. | [optional] [default to 1]
 **sortBy** | **string**| Selects which page of results to return. | [optional] [default to start_time]
 **order** | **string**| Puts results in ascending or descending order. | [optional] [default to desc]

### Return type

[**List<RecordingSummary>**](RecordingSummary.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetinghistoryrecordingsrecordingentityidget"></a>
# **V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet**
> Recording V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet (int? userId, int? recordingEntityId)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var recordingEntityId = 56;  // int? | The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.

            try
            {
                // List Meeting Recordings
                Recording result = apiInstance.V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet(userId, recordingEntityId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.V1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **recordingEntityId** | **int?**| The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. | 

### Return type

[**Recording**](Recording.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

