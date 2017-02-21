# IO.Swagger.Api.HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GetHistoryByEnterprise**](HistoryApi.md#gethistorybyenterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | Get Meeting History by Enterprise
[**GetHistoryByUser**](HistoryApi.md#gethistorybyuser) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | Get Meeting History by User
[**GetRecording**](HistoryApi.md#getrecording) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | Get Recording
[**ListHistoryByEnterprise**](HistoryApi.md#listhistorybyenterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List History by Enterprise
[**ListHistoryByUser**](HistoryApi.md#listhistorybyuser) | **GET** /v1/user/{user_id}/meeting_history | List History by User
[**ListRecordings**](HistoryApi.md#listrecordings) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings


<a name="gethistorybyenterprise"></a>
# **GetHistoryByEnterprise**
> Meeting GetHistoryByEnterprise (int? enterpriseId, string meetingGuid)

Get Meeting History by Enterprise

This endpoint retrieves the meeting history for a specific instance of a meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class GetHistoryByEnterpriseExample
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
                // Get Meeting History by Enterprise
                Meeting result = apiInstance.GetHistoryByEnterprise(enterpriseId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.GetHistoryByEnterprise: " + e.Message );
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

<a name="gethistorybyuser"></a>
# **GetHistoryByUser**
> Meeting GetHistoryByUser (int? userId, string meetingGuid)

Get Meeting History by User

This endpoint retrieves the meeting history for a specific instance of a meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class GetHistoryByUserExample
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
                // Get Meeting History by User
                Meeting result = apiInstance.GetHistoryByUser(userId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.GetHistoryByUser: " + e.Message );
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

<a name="getrecording"></a>
# **GetRecording**
> Recording GetRecording (int? userId, int? recordingEntityId)

Get Recording

This endpoint retrieves the details about a meeting recording.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class GetRecordingExample
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
                // Get Recording
                Recording result = apiInstance.GetRecording(userId, recordingEntityId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.GetRecording: " + e.Message );
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

<a name="listhistorybyenterprise"></a>
# **ListHistoryByEnterprise**
> List<MeetingHistory> ListHistoryByEnterprise (int? enterpriseId)

List History by Enterprise

This endpoint retrieves a list of meeting histories by the given enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ListHistoryByEnterpriseExample
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
                // List History by Enterprise
                List&lt;MeetingHistory&gt; result = apiInstance.ListHistoryByEnterprise(enterpriseId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.ListHistoryByEnterprise: " + e.Message );
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

[**List<MeetingHistory>**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="listhistorybyuser"></a>
# **ListHistoryByUser**
> List<MeetingHistory> ListHistoryByUser (int? userId, string meetingId = null, string startDate = null, string endDate = null, int? pageSize = null, int? pageNumber = null, string order = null)

List History by User

This endpoint retrieves a list of meeting histories by the given user.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ListHistoryByUserExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new HistoryApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = meetingId_example;  // string | Return only meetings with the specified meeting numeric ID. (optional) 
            var startDate = startDate_example;  // string | Return meetings starting from the specified date. MM/DD/YYYY (optional) 
            var endDate = endDate_example;  // string | Return meetings up until the specified date. MM/DD/YYYY (optional) 
            var pageSize = 56;  // int? | Sets number of items returned per page. (optional) 
            var pageNumber = 56;  // int? | Selects which page of results to return. (optional) 
            var order = order_example;  // string | Puts results in ascending or descending order. asc/desc (optional) 

            try
            {
                // List History by User
                List&lt;MeetingHistory&gt; result = apiInstance.ListHistoryByUser(userId, meetingId, startDate, endDate, pageSize, pageNumber, order);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.ListHistoryByUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **string**| Return only meetings with the specified meeting numeric ID. | [optional] 
 **startDate** | **string**| Return meetings starting from the specified date. MM/DD/YYYY | [optional] 
 **endDate** | **string**| Return meetings up until the specified date. MM/DD/YYYY | [optional] 
 **pageSize** | **int?**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **int?**| Selects which page of results to return. | [optional] 
 **order** | **string**| Puts results in ascending or descending order. asc/desc | [optional] 

### Return type

[**List<MeetingHistory>**](MeetingHistory.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="listrecordings"></a>
# **ListRecordings**
> List<RecordingSummary> ListRecordings (int? userId, int? pageSize = null, int? pageNumber = null, string sortBy = null, string order = null)

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
    public class ListRecordingsExample
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
                List&lt;RecordingSummary&gt; result = apiInstance.ListRecordings(userId, pageSize, pageNumber, sortBy, order);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling HistoryApi.ListRecordings: " + e.Message );
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

