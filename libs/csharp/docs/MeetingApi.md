# com.bluejeans.api.rest.meetings.Api.MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CancelMeeting**](MeetingApi.md#cancelmeeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**CreateMeeting**](MeetingApi.md#createmeeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
[**DialoutPstn**](MeetingApi.md#dialoutpstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn | Dialout via PSTN
[**GeneratePairingCodePstn**](MeetingApi.md#generatepairingcodepstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN | Generate Pairing Code (PSTN)
[**GeneratePairingCodeSip**](MeetingApi.md#generatepairingcodesip) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP | Generate Pairing Code (SIP)
[**GeneratePairingCodeWebRtc**](MeetingApi.md#generatepairingcodewebrtc) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc | Generate Pairing Code (WebRTC)
[**GetEndpointLayout**](MeetingApi.md#getendpointlayout) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**GetMeeting**](MeetingApi.md#getmeeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**GetMeetingEmails**](MeetingApi.md#getmeetingemails) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
[**GetMeetingEndpoint**](MeetingApi.md#getmeetingendpoint) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**GetMeetingEndpoints**](MeetingApi.md#getmeetingendpoints) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | List Meeting Endpoints
[**GetMeetingNumbers**](MeetingApi.md#getmeetingnumbers) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**GetMeetingState**](MeetingApi.md#getmeetingstate) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Get Meeting State
[**ListMeetings**](MeetingApi.md#listmeetings) | **GET** /v1/user/{user_id}/scheduled_meeting | List Meetings
[**SendMeetingInvite**](MeetingApi.md#sendmeetinginvite) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite | Send Email Invite
[**UpdateEndpointLayout**](MeetingApi.md#updateendpointlayout) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**UpdateMeeting**](MeetingApi.md#updatemeeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**UpdateMeetingEndpoint**](MeetingApi.md#updatemeetingendpoint) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**UpdateMeetingEndpoints**](MeetingApi.md#updatemeetingendpoints) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | Update Meeting Endpoints State
[**UpdateMeetingState**](MeetingApi.md#updatemeetingstate) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Update Meeting State


<a name="cancelmeeting"></a>
# **CancelMeeting**
> void CancelMeeting (int? userId, int? meetingId, bool? email = null, string cancellationMessage = null)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class CancelMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var email = true;  // bool? | Dispatch an email to participants with the specified cancellation message. (optional)  (default to false)
            var cancellationMessage = cancellationMessage_example;  // string | Message sent to participants when meeting is deleted and email is selected (optional) 

            try
            {
                // Cancel Meeting
                apiInstance.CancelMeeting(userId, meetingId, email, cancellationMessage);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.CancelMeeting: " + e.Message );
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
 **email** | **bool?**| Dispatch an email to participants with the specified cancellation message. | [optional] [default to false]
 **cancellationMessage** | **string**| Message sent to participants when meeting is deleted and email is selected | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="createmeeting"></a>
# **CreateMeeting**
> Meeting CreateMeeting (int? userId, ScheduleMeetingMinComp meeting, bool? email = null)

Create Meeting

This endpoint will create a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class CreateMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meeting = new ScheduleMeetingMinComp(); // ScheduleMeetingMinComp | The desired configuration for the meeting. (<b>NOTE</b> The model provided here is a <i>typical</i> minimum set of meeting parameters.)
            var email = true;  // bool? | If set to true, sends invitation emails to all listed participants. (optional) 

            try
            {
                // Create Meeting
                Meeting result = apiInstance.CreateMeeting(userId, meeting, email);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.CreateMeeting: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting** | [**ScheduleMeetingMinComp**](ScheduleMeetingMinComp.md)| The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) | 
 **email** | **bool?**| If set to true, sends invitation emails to all listed participants. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="dialoutpstn"></a>
# **DialoutPstn**
> DialoutPstn DialoutPstn (int? userId, int? numericMeetingId, PayloadDialout payloadDialout)

Dialout via PSTN

Places a PSTN call to a user to join meeting. **Note:** call this API using a meeting access token

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class DialoutPstnExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadDialout = new PayloadDialout(); // PayloadDialout | 

            try
            {
                // Dialout via PSTN
                DialoutPstn result = apiInstance.DialoutPstn(userId, numericMeetingId, payloadDialout);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.DialoutPstn: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadDialout** | [**PayloadDialout**](PayloadDialout.md)|  | 

### Return type

[**DialoutPstn**](DialoutPstn.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="generatepairingcodepstn"></a>
# **GeneratePairingCodePstn**
> PairingCodePSTN GeneratePairingCodePstn (int? userId, int? numericMeetingId, PayloadPairingCodePstn payloadPairingCodePstn, string role = null)

Generate Pairing Code (PSTN)

This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone. **Note:** call this API using a meeting access token

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GeneratePairingCodePstnExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadPairingCodePstn = new PayloadPairingCodePstn(); // PayloadPairingCodePstn | 
            var role = role_example;  // string |  (optional)  (default to USER)

            try
            {
                // Generate Pairing Code (PSTN)
                PairingCodePSTN result = apiInstance.GeneratePairingCodePstn(userId, numericMeetingId, payloadPairingCodePstn, role);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GeneratePairingCodePstn: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadPairingCodePstn** | [**PayloadPairingCodePstn**](PayloadPairingCodePstn.md)|  | 
 **role** | **string**|  | [optional] [default to USER]

### Return type

[**PairingCodePSTN**](PairingCodePSTN.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="generatepairingcodesip"></a>
# **GeneratePairingCodeSip**
> PairingCodeSIP GeneratePairingCodeSip (int? userId, int? numericMeetingId, PayloadPairingCodeSIP payloadPairingCodeSIP)

Generate Pairing Code (SIP)

This endpoint generates a SIP pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GeneratePairingCodeSipExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadPairingCodeSIP = new PayloadPairingCodeSIP(); // PayloadPairingCodeSIP | Information about the device that will be joining via SIP.

            try
            {
                // Generate Pairing Code (SIP)
                PairingCodeSIP result = apiInstance.GeneratePairingCodeSip(userId, numericMeetingId, payloadPairingCodeSIP);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GeneratePairingCodeSip: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadPairingCodeSIP** | [**PayloadPairingCodeSIP**](PayloadPairingCodeSIP.md)| Information about the device that will be joining via SIP. | 

### Return type

[**PairingCodeSIP**](PairingCodeSIP.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="generatepairingcodewebrtc"></a>
# **GeneratePairingCodeWebRtc**
> PairingCodeWebRTC GeneratePairingCodeWebRtc (int? userId, int? numericMeetingId, PayloadPairingCodeWebRTC payloadPairingCodeWebRTC, string role = null)

Generate Pairing Code (WebRTC)

This endpoint generates a WebRTC pairing code that can be used to connect to a meeting. **Note:** call this API using a meeting access token

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GeneratePairingCodeWebRtcExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadPairingCodeWebRTC = new PayloadPairingCodeWebRTC(); // PayloadPairingCodeWebRTC | 
            var role = role_example;  // string |  (optional)  (default to USER)

            try
            {
                // Generate Pairing Code (WebRTC)
                PairingCodeWebRTC result = apiInstance.GeneratePairingCodeWebRtc(userId, numericMeetingId, payloadPairingCodeWebRTC, role);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GeneratePairingCodeWebRtc: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadPairingCodeWebRTC** | [**PayloadPairingCodeWebRTC**](PayloadPairingCodeWebRTC.md)|  | 
 **role** | **string**|  | [optional] [default to USER]

### Return type

[**PairingCodeWebRTC**](PairingCodeWebRTC.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getendpointlayout"></a>
# **GetEndpointLayout**
> Layout GetEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.  Can use either of a general or meeting access token.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetEndpointLayoutExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

            try
            {
                // Get Endpoint Layout
                Layout result = apiInstance.GetEndpointLayout(userId, numericMeetingId, endpointGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetEndpointLayout: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeeting"></a>
# **GetMeeting**
> Meeting GetMeeting (int? userId, int? meetingId)

Get Meeting

This endpoint gets the settings for a user's meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. This is not the numeric meeting ID visible to users.

            try
            {
                // Get Meeting
                Meeting result = apiInstance.GetMeeting(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeeting: " + e.Message );
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

<a name="getmeetingemails"></a>
# **GetMeetingEmails**
> MeetingEmails GetMeetingEmails (int? userId, int? meetingId, string type = null, string role = null, string action = null)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingEmailsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var type = type_example;  // string | TEXT, ICS, HTML (optional) 
            var role = role_example;  // string | moderator, participant (optional) 
            var action = action_example;  // string | create, edit, delete (optional) 

            try
            {
                // Get Meeting Email
                MeetingEmails result = apiInstance.GetMeetingEmails(userId, meetingId, type, role, action);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeetingEmails: " + e.Message );
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

[**MeetingEmails**](MeetingEmails.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingendpoint"></a>
# **GetMeetingEndpoint**
> Endpoint GetMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.  Can use either of a general or meeting access token.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingEndpointExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

            try
            {
                // Get Endpoint Information
                Endpoint result = apiInstance.GetMeetingEndpoint(userId, numericMeetingId, endpointGuid);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeetingEndpoint: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpointGuid** | **string**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingendpoints"></a>
# **GetMeetingEndpoints**
> Endpoints GetMeetingEndpoints (int? userId, int? numericMeetingId)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.  Can use either of a general or meeting access token.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingEndpointsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

            try
            {
                // List Meeting Endpoints
                Endpoints result = apiInstance.GetMeetingEndpoints(userId, numericMeetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeetingEndpoints: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 

### Return type

[**Endpoints**](Endpoints.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getmeetingnumbers"></a>
# **GetMeetingNumbers**
> Numbers GetMeetingNumbers (int? userId, int? meetingId)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingNumbersExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

            try
            {
                // Get Meeting Join Info
                Numbers result = apiInstance.GetMeetingNumbers(userId, meetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeetingNumbers: " + e.Message );
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

<a name="getmeetingstate"></a>
# **GetMeetingState**
> MeetingState GetMeetingState (int? userId, int? numericMeetingId)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetMeetingStateExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

            try
            {
                // Get Meeting State
                MeetingState result = apiInstance.GetMeetingState(userId, numericMeetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.GetMeetingState: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 

### Return type

[**MeetingState**](MeetingState.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="listmeetings"></a>
# **ListMeetings**
> List<Meeting> ListMeetings (int? userId, string numericMeetingId = null)

List Meetings

This endpoint gets a list of the user's scheduled upcoming meetings.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class ListMeetingsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = numericMeetingId_example;  // string | Filter the results by the meeting ID that participants will see and use to join the conference. (optional) 

            try
            {
                // List Meetings
                List&lt;Meeting&gt; result = apiInstance.ListMeetings(userId, numericMeetingId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.ListMeetings: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **string**| Filter the results by the meeting ID that participants will see and use to join the conference. | [optional] 

### Return type

[**List<Meeting>**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="sendmeetinginvite"></a>
# **SendMeetingInvite**
> void SendMeetingInvite (int? userId, int? numericMeetingId, PayloadInvite payloadInvite)

Send Email Invite

This endpoint generates an email invite to the specified meeting. **Note:** call this API using a meeting access token

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class SendMeetingInviteExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadInvite = new PayloadInvite(); // PayloadInvite | 

            try
            {
                // Send Email Invite
                apiInstance.SendMeetingInvite(userId, numericMeetingId, payloadInvite);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.SendMeetingInvite: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadInvite** | [**PayloadInvite**](PayloadInvite.md)|  | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="updateendpointlayout"></a>
# **UpdateEndpointLayout**
> Layout UpdateEndpointLayout (int? userId, int? numericMeetingId, string endpointGuid, bool? isLeader = null, bool? push = null)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting. Requires Meeting access token with moderator privileges

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateEndpointLayoutExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
            var isLeader = true;  // bool? |  (optional) 
            var push = true;  // bool? |  (optional) 

            try
            {
                // Update Endpoint Layout
                Layout result = apiInstance.UpdateEndpointLayout(userId, numericMeetingId, endpointGuid, isLeader, push);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.UpdateEndpointLayout: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
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

<a name="updatemeeting"></a>
# **UpdateMeeting**
> Meeting UpdateMeeting (int? userId, int? meetingId, Meeting meeting)

Update Meeting

This endpoint changes the settings for a user's meeting. For example, use for rescheduling.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var meetingId = 56;  // int? | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
            var meeting = new Meeting(); // Meeting | The user's room details that you wish to update.

            try
            {
                // Update Meeting
                Meeting result = apiInstance.UpdateMeeting(userId, meetingId, meeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.UpdateMeeting: " + e.Message );
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

<a name="updatemeetingendpoint"></a>
# **UpdateMeetingEndpoint**
> Endpoint UpdateMeetingEndpoint (int? userId, int? numericMeetingId, string endpointGuid, bool? muteAudio = null, bool? muteVideo = null, bool? leaveMeeting = null)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting. Requires Meeting access token with moderator privileges

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateMeetingEndpointExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var endpointGuid = endpointGuid_example;  // string | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
            var muteAudio = true;  // bool? | Toggle the audio source mute. (optional) 
            var muteVideo = true;  // bool? | Toggle the video source mute. (optional) 
            var leaveMeeting = true;  // bool? | Remove the user from the meeting. (optional) 

            try
            {
                // Update Endpoint Video/Audio State
                Endpoint result = apiInstance.UpdateMeetingEndpoint(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.UpdateMeetingEndpoint: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
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

<a name="updatemeetingendpoints"></a>
# **UpdateMeetingEndpoints**
> void UpdateMeetingEndpoints (int? userId, int? numericMeetingId, bool? mute = null, string media = null)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Requires Meeting access token with moderator privileges

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateMeetingEndpointsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var mute = true;  // bool? | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional) 
            var media = media_example;  // string | Specify the type of media you which to mute/unmute. (optional) 

            try
            {
                // Update Meeting Endpoints State
                apiInstance.UpdateMeetingEndpoints(userId, numericMeetingId, mute, media);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.UpdateMeetingEndpoints: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
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

<a name="updatemeetingstate"></a>
# **UpdateMeetingState**
> Meeting UpdateMeetingState (int? userId, int? numericMeetingId, PayloadMeetingState payloadMeetingState, int? delay = null)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.  This API requires a meeting access token with moderator privileges.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateMeetingStateExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new MeetingApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var numericMeetingId = 56;  // int? | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
            var payloadMeetingState = new PayloadMeetingState(); // PayloadMeetingState | The meeting properties that you wish to update.
            var delay = 56;  // int? | Number of seconds to delay the end meeting operation. (optional) 

            try
            {
                // Update Meeting State
                Meeting result = apiInstance.UpdateMeetingState(userId, numericMeetingId, payloadMeetingState, delay);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling MeetingApi.UpdateMeetingState: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numericMeetingId** | **int?**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payloadMeetingState** | [**PayloadMeetingState**](PayloadMeetingState.md)| The meeting properties that you wish to update. | 
 **delay** | **int?**| Number of seconds to delay the end meeting operation. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

