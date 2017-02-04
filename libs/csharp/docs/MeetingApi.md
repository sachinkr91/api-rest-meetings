# IO.Swagger.Api.MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsendpointguidget) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsendpointguidlayoutget) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsendpointguidlayoutput) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsendpointguidput) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsGet**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsget) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
[**V1UserUserIdLiveMeetingsMeetingIdEndpointsPut**](MeetingApi.md#v1useruseridlivemeetingsmeetingidendpointsput) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | Update Meeting Endpoints State
[**V1UserUserIdLiveMeetingsMeetingIdGet**](MeetingApi.md#v1useruseridlivemeetingsmeetingidget) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
[**V1UserUserIdLiveMeetingsMeetingIdInvitePost**](MeetingApi.md#v1useruseridlivemeetingsmeetingidinvitepost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
[**V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**](MeetingApi.md#v1useruseridlivemeetingsmeetingidpairingcodesippost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
[**V1UserUserIdLiveMeetingsMeetingIdPut**](MeetingApi.md#v1useruseridlivemeetingsmeetingidput) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
[**V1UserUserIdMeetingsMeetingIdNumbersGet**](MeetingApi.md#v1useruseridmeetingsmeetingidnumbersget) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**V1UserUserIdScheduledMeetingGet**](MeetingApi.md#v1useruseridscheduledmeetingget) | **GET** /v1/user/{user_id}/scheduled_meeting | Get Meeting Settings
[**V1UserUserIdScheduledMeetingMeetingIdDelete**](MeetingApi.md#v1useruseridscheduledmeetingmeetingiddelete) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**V1UserUserIdScheduledMeetingMeetingIdEmailsGet**](MeetingApi.md#v1useruseridscheduledmeetingmeetingidemailsget) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
[**V1UserUserIdScheduledMeetingMeetingIdGet**](MeetingApi.md#v1useruseridscheduledmeetingmeetingidget) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**V1UserUserIdScheduledMeetingMeetingIdPut**](MeetingApi.md#v1useruseridscheduledmeetingmeetingidput) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**V1UserUserIdScheduledMeetingPost**](MeetingApi.md#v1useruseridscheduledmeetingpost) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting


<a name="v1useruseridlivemeetingsmeetingidendpointsendpointguidget"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**
> Endpoint V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet (int? userId, int? meetingId, string endpointGuid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

            try
            {
                // Get Endpoint Information
                Endpoint result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet(userId, meetingId, endpointGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet: " + e.Message );
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
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidendpointsendpointguidlayoutget"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**
> Layout V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet (int? userId, int? meetingId, string endpointGuid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

            try
            {
                // Get Endpoint Layout
                Layout result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet(userId, meetingId, endpointGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet: " + e.Message );
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
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidendpointsendpointguidlayoutput"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**
> Layout V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut (int? userId, int? meetingId, string endpointGuid, bool? isLeader = null, bool? push = null)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPutExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
            var isLeader = true;  // bool? |  (optional) 
            var push = true;  // bool? |  (optional) 

            try
            {
                // Update Endpoint Layout
                Layout result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut(userId, meetingId, endpointGuid, isLeader, push);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut: " + e.Message );
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
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **isLeader** | **bool?**|  | [optional] 
 **push** | **bool?**|  | [optional] 

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidendpointsendpointguidput"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**
> Endpoint V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut (int? userId, int? meetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPutExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
            var muteAudio = true;  // bool? | Toggle the audio source mute. (optional) 
            var muteVideo = true;  // bool? | Toggle the video source mute. (optional) 
            var leaveMeeting = true;  // bool? | Remove the user from the meeting. (optional) 

            try
            {
                // Update Endpoint Video/Audio State
                Endpoint result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut(userId, meetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut: " + e.Message );
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
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **muteAudio** | **bool?**| Toggle the audio source mute. | [optional] 
 **muteVideo** | **bool?**| Toggle the video source mute. | [optional] 
 **leaveMeeting** | **bool?**| Remove the user from the meeting. | [optional] 

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidendpointsget"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsGet**
> Endpoints V1UserUserIdLiveMeetingsMeetingIdEndpointsGet (int? userId, int? meetingId)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // List Meeting Endpoints
                Endpoints result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsGet(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsGet: " + e.Message );
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

[**Endpoints**](Endpoints.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidendpointsput"></a>
# **V1UserUserIdLiveMeetingsMeetingIdEndpointsPut**
> void V1UserUserIdLiveMeetingsMeetingIdEndpointsPut (int? userId, int? meetingId, bool? mute = null, string media = null)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Seems to require a Meeting-level access token.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdEndpointsPutExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var mute = true;  // bool? | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional) 
            var media = media_example;  // string | Specify the type of media you which to mute/unmute. (optional) 

            try
            {
                // Update Meeting Endpoints State
                apiInstance.V1UserUserIdLiveMeetingsMeetingIdEndpointsPut(userId, meetingId, mute, media);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdEndpointsPut: " + e.Message );
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
 **mute** | **bool?**| Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. | [optional] 
 **media** | **string**| Specify the type of media you which to mute/unmute. | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidget"></a>
# **V1UserUserIdLiveMeetingsMeetingIdGet**
> MeetingState V1UserUserIdLiveMeetingsMeetingIdGet (int? userId, int? meetingId)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Get Meeting State
                MeetingState result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdGet(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdGet: " + e.Message );
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

[**MeetingState**](MeetingState.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridlivemeetingsmeetingidinvitepost"></a>
# **V1UserUserIdLiveMeetingsMeetingIdInvitePost**
> Meeting V1UserUserIdLiveMeetingsMeetingIdInvitePost (int? userId, int? meetingId)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdInvitePostExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Send Email Invite
                Meeting result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdInvitePost(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdInvitePost: " + e.Message );
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

<a name="v1useruseridlivemeetingsmeetingidpairingcodesippost"></a>
# **V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**
> Meeting V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost (int? userId, int? meetingId)

Generate SIP Pairing Code

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPostExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Generate SIP Pairing Code
                Meeting result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost: " + e.Message );
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

<a name="v1useruseridlivemeetingsmeetingidput"></a>
# **V1UserUserIdLiveMeetingsMeetingIdPut**
> Meeting V1UserUserIdLiveMeetingsMeetingIdPut (int? userId, int? meetingId, Meeting meeting, int? delay = null)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdLiveMeetingsMeetingIdPutExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var meeting = new Meeting(); // Meeting | The meeting properties that you wish to update.
            var delay = 56;  // int? | Number of seconds to delay the end meeting operation. (optional) 

            try
            {
                // Update Meeting State
                Meeting result = apiInstance.V1UserUserIdLiveMeetingsMeetingIdPut(userId, meetingId, meeting, delay);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdLiveMeetingsMeetingIdPut: " + e.Message );
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
 **meeting** | [**Meeting**](Meeting.md)| The meeting properties that you wish to update. | 
 **delay** | **int?**| Number of seconds to delay the end meeting operation. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridmeetingsmeetingidnumbersget"></a>
# **V1UserUserIdMeetingsMeetingIdNumbersGet**
> Numbers V1UserUserIdMeetingsMeetingIdNumbersGet (int? userId, int? meetingId)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdMeetingsMeetingIdNumbersGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Get Meeting Join Info
                Numbers result = apiInstance.V1UserUserIdMeetingsMeetingIdNumbersGet(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdMeetingsMeetingIdNumbersGet: " + e.Message );
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

[**Numbers**](Numbers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridscheduledmeetingget"></a>
# **V1UserUserIdScheduledMeetingGet**
> List<Meeting> V1UserUserIdScheduledMeetingGet (int? userId)

Get Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get Meeting Settings
                List&lt;Meeting&gt; result = apiInstance.V1UserUserIdScheduledMeetingGet(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingGet: " + e.Message );
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

[**List<Meeting>**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridscheduledmeetingmeetingiddelete"></a>
# **V1UserUserIdScheduledMeetingMeetingIdDelete**
> void V1UserUserIdScheduledMeetingMeetingIdDelete (int? userId, int? meetingId)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingMeetingIdDeleteExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Cancel Meeting
                apiInstance.V1UserUserIdScheduledMeetingMeetingIdDelete(userId, meetingId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingMeetingIdDelete: " + e.Message );
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

<a name="v1useruseridscheduledmeetingmeetingidemailsget"></a>
# **V1UserUserIdScheduledMeetingMeetingIdEmailsGet**
> Meeting V1UserUserIdScheduledMeetingMeetingIdEmailsGet (int? userId, int? meetingId, string type = null, string role = null, string action = null)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingMeetingIdEmailsGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var type = type_example;  // string | TEXT, ICS, HTML (optional) 
            var role = role_example;  // string | moderator, participant (optional) 
            var action = action_example;  // string | create, edit, delete (optional) 

            try
            {
                // Get Meeting Email
                Meeting result = apiInstance.V1UserUserIdScheduledMeetingMeetingIdEmailsGet(userId, meetingId, type, role, action);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingMeetingIdEmailsGet: " + e.Message );
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
 **type** | **string**| TEXT, ICS, HTML | [optional] 
 **role** | **string**| moderator, participant | [optional] 
 **action** | **string**| create, edit, delete | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridscheduledmeetingmeetingidget"></a>
# **V1UserUserIdScheduledMeetingMeetingIdGet**
> Meeting V1UserUserIdScheduledMeetingMeetingIdGet (int? userId, int? meetingId)

Get Meeting

This endpoint gets the settings for a user's meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingMeetingIdGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. This is not the numeric meeting ID visible to users.

            try
            {
                // Get Meeting
                Meeting result = apiInstance.V1UserUserIdScheduledMeetingMeetingIdGet(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingMeetingIdGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridscheduledmeetingmeetingidput"></a>
# **V1UserUserIdScheduledMeetingMeetingIdPut**
> Meeting V1UserUserIdScheduledMeetingMeetingIdPut (int? userId, int? meetingId, Meeting meeting)

Update Meeting

This endpoint changes the settings for a user's meeting. For example, use for rescheduling.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingMeetingIdPutExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var meeting = new Meeting(); // Meeting | The user's room details that you wish to update.

            try
            {
                // Update Meeting
                Meeting result = apiInstance.V1UserUserIdScheduledMeetingMeetingIdPut(userId, meetingId, meeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingMeetingIdPut: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meetingId** | **int?**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridscheduledmeetingpost"></a>
# **V1UserUserIdScheduledMeetingPost**
> Meeting V1UserUserIdScheduledMeetingPost (int? userId, Meeting meeting, bool? email = null)

Create Meeting

This endpoint will create a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdScheduledMeetingPostExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meeting = new Meeting(); // Meeting | The user's room details that you wish to update.
            var email = true;  // bool? | If set to true, sends invitation emails to all listed participants. (optional) 

            try
            {
                // Create Meeting
                Meeting result = apiInstance.V1UserUserIdScheduledMeetingPost(userId, meeting, email);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.V1UserUserIdScheduledMeetingPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. | 
 **email** | **bool?**| If set to true, sends invitation emails to all listed participants. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

