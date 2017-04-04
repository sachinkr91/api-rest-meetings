# com.bluejeans.api.rest.onvideo.Api.CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**V1EnterpriseEnterpriseIdIndigoMeetingsGet**](CommandCenterApi.md#v1enterpriseenterpriseidindigomeetingsget) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**V1EnterpriseEnterpriseIdIndigoMeetingsLiveGet**](CommandCenterApi.md#v1enterpriseenterpriseidindigomeetingsliveget) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet**](CommandCenterApi.md#v1enterpriseenterpriseidindigomeetingslivemeetingguidendpointsget) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_guid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet**](CommandCenterApi.md#v1enterpriseenterpriseidindigomeetingsmeetingguidget) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by Enterprise
[**V1UserUserIdIndigoMeetingsGet**](CommandCenterApi.md#v1useruseridindigomeetingsget) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**V1UserUserIdIndigoMeetingsMeetingGuidGet**](CommandCenterApi.md#v1useruseridindigomeetingsmeetingguidget) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by User


<a name="v1enterpriseenterpriseidindigomeetingsget"></a>
# **V1EnterpriseEnterpriseIdIndigoMeetingsGet**
> Meeting V1EnterpriseEnterpriseIdIndigoMeetingsGet (int? enterpriseId, int? offset = null, int? limit = null, string filter = null)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdIndigoMeetingsGetExample
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
                Meeting result = apiInstance.V1EnterpriseEnterpriseIdIndigoMeetingsGet(enterpriseId, offset, limit, filter);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1EnterpriseEnterpriseIdIndigoMeetingsGet: " + e.Message );
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

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1enterpriseenterpriseidindigomeetingsliveget"></a>
# **V1EnterpriseEnterpriseIdIndigoMeetingsLiveGet**
> Meeting V1EnterpriseEnterpriseIdIndigoMeetingsLiveGet (int? enterpriseId)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdIndigoMeetingsLiveGetExample
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
                Meeting result = apiInstance.V1EnterpriseEnterpriseIdIndigoMeetingsLiveGet(enterpriseId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1EnterpriseEnterpriseIdIndigoMeetingsLiveGet: " + e.Message );
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

<a name="v1enterpriseenterpriseidindigomeetingslivemeetingguidendpointsget"></a>
# **V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet**
> Meeting V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet (int? enterpriseId, string meetingGuid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // List Live Meeting Endpoints by Enterprise
                Meeting result = apiInstance.V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet(enterpriseId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet: " + e.Message );
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

<a name="v1enterpriseenterpriseidindigomeetingsmeetingguidget"></a>
# **V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet**
> MeetingIndigo V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet (int? enterpriseId, string meetingGuid, bool? includeEndpoints = null)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
            var includeEndpoints = true;  // bool? | Option to include detailed data on endpoints (optional) 

            try
            {
                // List Meeting Endpoints & Stats by Enterprise
                MeetingIndigo result = apiInstance.V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet(enterpriseId, meetingGuid, includeEndpoints);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet: " + e.Message );
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
 **includeEndpoints** | **bool?**| Option to include detailed data on endpoints | [optional] 

### Return type

[**MeetingIndigo**](MeetingIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridindigomeetingsget"></a>
# **V1UserUserIdIndigoMeetingsGet**
> Meeting V1UserUserIdIndigoMeetingsGet (int? userId)

List Past Meetings by User

This endpoint lists completed meetings by user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1UserUserIdIndigoMeetingsGetExample
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
                Meeting result = apiInstance.V1UserUserIdIndigoMeetingsGet(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1UserUserIdIndigoMeetingsGet: " + e.Message );
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

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridindigomeetingsmeetingguidget"></a>
# **V1UserUserIdIndigoMeetingsMeetingGuidGet**
> MeetingIndigo V1UserUserIdIndigoMeetingsMeetingGuidGet (int? userId, string meetingGuid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class V1UserUserIdIndigoMeetingsMeetingGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new CommandCenterApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingGuid = meetingGuid_example;  // string | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

            try
            {
                // List Meeting Endpoints & Stats by User
                MeetingIndigo result = apiInstance.V1UserUserIdIndigoMeetingsMeetingGuidGet(userId, meetingGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommandCenterApi.V1UserUserIdIndigoMeetingsMeetingGuidGet: " + e.Message );
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

[**MeetingIndigo**](MeetingIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

