# com.bluejeans.api.rest.onvideo.Api.CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GetEndpointDistribution**](CommandCenterApi.md#getendpointdistribution) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**GetFeedbackComments**](CommandCenterApi.md#getfeedbackcomments) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**GetFeedbackCount**](CommandCenterApi.md#getfeedbackcount) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
[**GetMeetingLiveByEnterprise**](CommandCenterApi.md#getmeetinglivebyenterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**GetMeetingPastByEnterprise**](CommandCenterApi.md#getmeetingpastbyenterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
[**GetMeetingPastByUser**](CommandCenterApi.md#getmeetingpastbyuser) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
[**GetMeetingUsage**](CommandCenterApi.md#getmeetingusage) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**GetMeetingsLiveByEnterprise**](CommandCenterApi.md#getmeetingslivebyenterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**GetMeetingsPastByEnterprise**](CommandCenterApi.md#getmeetingspastbyenterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**GetMeetingsPastByUser**](CommandCenterApi.md#getmeetingspastbyuser) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**GetRoiRanges**](CommandCenterApi.md#getroiranges) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**GetTopUsers**](CommandCenterApi.md#gettopusers) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users


<a name="getendpointdistribution"></a>
# **GetEndpointDistribution**
> AnalyticsEndpointDistribution GetEndpointDistribution (int? enterpriseId, string filter = null)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetEndpointDistributionExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var filter = filter_example;  // string | URL-encoded JSON string (optional)  (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])

            try
            {
                // Endpoint Distribution
                AnalyticsEndpointDistribution result = apiInstance.GetEndpointDistribution(enterpriseId, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetEndpointDistribution: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}]]

### Return type

[**AnalyticsEndpointDistribution**](AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getfeedbackcomments"></a>
# **GetFeedbackComments**
> AnalyticsFeedbackComments GetFeedbackComments (int? enterpriseId, string start, string end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetFeedbackCommentsExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var start = start_example;  // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
            var end = end_example;  // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

            try
            {
                // Survey Feedback Comments
                AnalyticsFeedbackComments result = apiInstance.GetFeedbackComments(enterpriseId, start, end);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetFeedbackComments: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackComments**](AnalyticsFeedbackComments.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getfeedbackcount"></a>
# **GetFeedbackCount**
> AnalyticsFeedbackScores GetFeedbackCount (int? enterpriseId, string start, string end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetFeedbackCountExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var start = start_example;  // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
            var end = end_example;  // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

            try
            {
                // Survey Feedback Scores
                AnalyticsFeedbackScores result = apiInstance.GetFeedbackCount(enterpriseId, start, end);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetFeedbackCount: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackScores**](AnalyticsFeedbackScores.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetinglivebyenterprise"></a>
# **GetMeetingLiveByEnterprise**
> MeetingExtendedIndigo GetMeetingLiveByEnterprise (int? enterpriseId, string meetingUuid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingLiveByEnterpriseExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var meetingUuid = meetingUuid_example;  // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

            try
            {
                // List Live Meeting Endpoints by Enterprise
                MeetingExtendedIndigo result = apiInstance.GetMeetingLiveByEnterprise(enterpriseId, meetingUuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingLiveByEnterprise: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingUuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingpastbyenterprise"></a>
# **GetMeetingPastByEnterprise**
> MeetingExtendedIndigo GetMeetingPastByEnterprise (int? enterpriseId, string meetingUuid, bool? includeEndpoints = null)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingPastByEnterpriseExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var meetingUuid = meetingUuid_example;  // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
            var includeEndpoints = true;  // bool? | Option to include detailed data on endpoints (optional) 

            try
            {
                // List Meeting Endpoints & Stats by Enterprise
                MeetingExtendedIndigo result = apiInstance.GetMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingPastByEnterprise: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meetingUuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 
 **includeEndpoints** | **bool?**| Option to include detailed data on endpoints | [optional] 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingpastbyuser"></a>
# **GetMeetingPastByUser**
> MeetingExtendedIndigo GetMeetingPastByUser (int? userId, string meetingUuid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingPastByUserExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingUuid = meetingUuid_example;  // string | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

            try
            {
                // List Meeting Endpoints & Stats by User
                MeetingExtendedIndigo result = apiInstance.GetMeetingPastByUser(userId, meetingUuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingPastByUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingUuid** | **string**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingusage"></a>
# **GetMeetingUsage**
> AnalyticsUsage GetMeetingUsage (int? enterpriseId, string clientTZ = null, string filter = null)

Meeting Usage Over Time

This endpoint reports on meeting usage. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingUsageExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var clientTZ = clientTZ_example;  // string | Based on standard TZ code. (optional)  (default to America/Denver)
            var filter = filter_example;  // string | URL-encoded JSON string (optional)  (default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])

            try
            {
                // Meeting Usage Over Time
                AnalyticsUsage result = apiInstance.GetMeetingUsage(enterpriseId, clientTZ, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingUsage: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **clientTZ** | **string**| Based on standard TZ code. | [optional] [default to America/Denver]
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}]]

### Return type

[**AnalyticsUsage**](AnalyticsUsage.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingslivebyenterprise"></a>
# **GetMeetingsLiveByEnterprise**
> MeetingIndigoList GetMeetingsLiveByEnterprise (int? enterpriseId)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingsLiveByEnterpriseExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

            try
            {
                // Live Meetings Summary by Enterprise
                MeetingIndigoList result = apiInstance.GetMeetingsLiveByEnterprise(enterpriseId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingsLiveByEnterprise: " + e.Message );
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

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingspastbyenterprise"></a>
# **GetMeetingsPastByEnterprise**
> MeetingIndigoList GetMeetingsPastByEnterprise (int? enterpriseId, int? offset = null, int? limit = null, string filter = null)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingsPastByEnterpriseExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var offset = 56;  // int? | Page Number (optional) 
            var limit = 56;  // int? | Per page (optional) 
            var filter = filter_example;  // string | URL-encoded JSON string (optional) 

            try
            {
                // List Past Meetings by Enterprise
                MeetingIndigoList result = apiInstance.GetMeetingsPastByEnterprise(enterpriseId, offset, limit, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingsPastByEnterprise: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **offset** | **int?**| Page Number | [optional] 
 **limit** | **int?**| Per page | [optional] 
 **filter** | **string**| URL-encoded JSON string | [optional] 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingspastbyuser"></a>
# **GetMeetingsPastByUser**
> MeetingIndigoList GetMeetingsPastByUser (int? userId)

List Past Meetings by User

This endpoint lists completed meetings by user. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetMeetingsPastByUserExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // List Past Meetings by User
                MeetingIndigoList result = apiInstance.GetMeetingsPastByUser(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetMeetingsPastByUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getroiranges"></a>
# **GetRoiRanges**
> AnalyticsRoiData GetRoiRanges (int? enterpriseId, string filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetRoiRangesExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var filter = filter_example;  // string | URL-encoded JSON string (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"startTime"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"startTime"}])

            try
            {
                // ROI Data
                AnalyticsRoiData result = apiInstance.GetRoiRanges(enterpriseId, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetRoiRanges: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **string**| URL-encoded JSON string | [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;}]]

### Return type

[**AnalyticsRoiData**](AnalyticsRoiData.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettopusers"></a>
# **GetTopUsers**
> AnalyticsTopUsers GetTopUsers (int? enterpriseId, string filter = null)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires /oauth2/token?Password authentication.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTopUsersExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var filter = filter_example;  // string | URL-encoded JSON string (optional)  (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])

            try
            {
                // Top Users
                AnalyticsTopUsers result = apiInstance.GetTopUsers(enterpriseId, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.GetTopUsers: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}]]

### Return type

[**AnalyticsTopUsers**](AnalyticsTopUsers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

