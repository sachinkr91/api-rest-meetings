# MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMeeting**](MeetingApi.md#cancelMeeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**createMeeting**](MeetingApi.md#createMeeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
[**dialoutPstn**](MeetingApi.md#dialoutPstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn | Dialout via PSTN
[**generatePairingCodePstn**](MeetingApi.md#generatePairingCodePstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN | Generate Pairing Code (PSTN)
[**generatePairingCodeSip**](MeetingApi.md#generatePairingCodeSip) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP | Generate Pairing Code (SIP)
[**generatePairingCodeWebRtc**](MeetingApi.md#generatePairingCodeWebRtc) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc | Generate Pairing Code (WebRTC)
[**getEndpointLayout**](MeetingApi.md#getEndpointLayout) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**getMeeting**](MeetingApi.md#getMeeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**getMeetingEmails**](MeetingApi.md#getMeetingEmails) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
[**getMeetingEndpoint**](MeetingApi.md#getMeetingEndpoint) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**getMeetingEndpoints**](MeetingApi.md#getMeetingEndpoints) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | List Meeting Endpoints
[**getMeetingNumbers**](MeetingApi.md#getMeetingNumbers) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**getMeetingState**](MeetingApi.md#getMeetingState) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Get Meeting State
[**listMeetings**](MeetingApi.md#listMeetings) | **GET** /v1/user/{user_id}/scheduled_meeting | List Meetings
[**sendMeetingInvite**](MeetingApi.md#sendMeetingInvite) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite | Send Email Invite
[**updateEndpointLayout**](MeetingApi.md#updateEndpointLayout) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**updateMeeting**](MeetingApi.md#updateMeeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**updateMeetingEndpoint**](MeetingApi.md#updateMeetingEndpoint) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**updateMeetingEndpoints**](MeetingApi.md#updateMeetingEndpoints) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | Update Meeting Endpoints State
[**updateMeetingState**](MeetingApi.md#updateMeetingState) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Update Meeting State


<a name="cancelMeeting"></a>
# **cancelMeeting**
> cancelMeeting(userId, meetingId)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    apiInstance.cancelMeeting(userId, meetingId);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#cancelMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="createMeeting"></a>
# **createMeeting**
> Meeting createMeeting(userId, meeting, email)

Create Meeting

This endpoint will create a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Meeting meeting = new Meeting(); // Meeting | The details of the meeting.
Boolean email = true; // Boolean | If set to true, sends invitation emails to all listed participants.
try {
    Meeting result = apiInstance.createMeeting(userId, meeting, email);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#createMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting** | [**Meeting**](Meeting.md)| The details of the meeting. |
 **email** | **Boolean**| If set to true, sends invitation emails to all listed participants. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="dialoutPstn"></a>
# **dialoutPstn**
> List&lt;DialoutPstn&gt; dialoutPstn(userId, numericMeetingId, payloadDialout)

Dialout via PSTN

Places a PSTN call to a user to join meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadDialout payloadDialout = new PayloadDialout(); // PayloadDialout | 
try {
    List<DialoutPstn> result = apiInstance.dialoutPstn(userId, numericMeetingId, payloadDialout);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#dialoutPstn");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadDialout** | [**PayloadDialout**](PayloadDialout.md)|  |

### Return type

[**List&lt;DialoutPstn&gt;**](DialoutPstn.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="generatePairingCodePstn"></a>
# **generatePairingCodePstn**
> PairingCodeWebRTC generatePairingCodePstn(userId, numericMeetingId, payloadPairingCodePstn, role)

Generate Pairing Code (PSTN)

This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadPairingCodePstn payloadPairingCodePstn = new PayloadPairingCodePstn(); // PayloadPairingCodePstn | 
String role = "USER"; // String | 
try {
    PairingCodeWebRTC result = apiInstance.generatePairingCodePstn(userId, numericMeetingId, payloadPairingCodePstn, role);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#generatePairingCodePstn");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadPairingCodePstn** | [**PayloadPairingCodePstn**](PayloadPairingCodePstn.md)|  |
 **role** | **String**|  | [optional] [default to USER]

### Return type

[**PairingCodeWebRTC**](PairingCodeWebRTC.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="generatePairingCodeSip"></a>
# **generatePairingCodeSip**
> PairingCodeSIP generatePairingCodeSip(userId, numericMeetingId, payloadPairingCodeSIP)

Generate Pairing Code (SIP)

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadPairingCodeSIP payloadPairingCodeSIP = new PayloadPairingCodeSIP(); // PayloadPairingCodeSIP | Information about the device that will be joining via SIP.
try {
    PairingCodeSIP result = apiInstance.generatePairingCodeSip(userId, numericMeetingId, payloadPairingCodeSIP);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#generatePairingCodeSip");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadPairingCodeSIP** | [**PayloadPairingCodeSIP**](PayloadPairingCodeSIP.md)| Information about the device that will be joining via SIP. |

### Return type

[**PairingCodeSIP**](PairingCodeSIP.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="generatePairingCodeWebRtc"></a>
# **generatePairingCodeWebRtc**
> PairingCodeWebRTC generatePairingCodeWebRtc(userId, numericMeetingId, payloadPairingCodeWebRTC, role)

Generate Pairing Code (WebRTC)

This endpoint generates a WebRTC pairing code that can be used to connect to a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadPairingCodeWebRTC payloadPairingCodeWebRTC = new PayloadPairingCodeWebRTC(); // PayloadPairingCodeWebRTC | 
String role = "USER"; // String | 
try {
    PairingCodeWebRTC result = apiInstance.generatePairingCodeWebRtc(userId, numericMeetingId, payloadPairingCodeWebRTC, role);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#generatePairingCodeWebRtc");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadPairingCodeWebRTC** | [**PayloadPairingCodeWebRTC**](PayloadPairingCodeWebRTC.md)|  |
 **role** | **String**|  | [optional] [default to USER]

### Return type

[**PairingCodeWebRTC**](PairingCodeWebRTC.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEndpointLayout"></a>
# **getEndpointLayout**
> Layout getEndpointLayout(userId, numericMeetingId, endpointGuid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Layout result = apiInstance.getEndpointLayout(userId, numericMeetingId, endpointGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getEndpointLayout");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeeting"></a>
# **getMeeting**
> Meeting getMeeting(userId, meetingId)

Get Meeting

This endpoint gets the settings for a user&#39;s meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. This is not the numeric meeting ID visible to users.
try {
    Meeting result = apiInstance.getMeeting(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingEmails"></a>
# **getMeetingEmails**
> Meeting getMeetingEmails(userId, meetingId, type, role, action)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String type = "type_example"; // String | TEXT, ICS, HTML
String role = "role_example"; // String | moderator, participant
String action = "action_example"; // String | create, edit, delete
try {
    Meeting result = apiInstance.getMeetingEmails(userId, meetingId, type, role, action);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeetingEmails");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **type** | **String**| TEXT, ICS, HTML | [optional] [enum: TEXT, ICS, HTML]
 **role** | **String**| moderator, participant | [optional] [enum: moderator, participant]
 **action** | **String**| create, edit, delete | [optional] [enum: create, edit, delete]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingEndpoint"></a>
# **getMeetingEndpoint**
> Endpoint getMeetingEndpoint(userId, numericMeetingId, endpointGuid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Endpoint result = apiInstance.getMeetingEndpoint(userId, numericMeetingId, endpointGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeetingEndpoint");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingEndpoints"></a>
# **getMeetingEndpoints**
> Endpoints getMeetingEndpoints(userId, numericMeetingId)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
try {
    Endpoints result = apiInstance.getMeetingEndpoints(userId, numericMeetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeetingEndpoints");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |

### Return type

[**Endpoints**](Endpoints.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingNumbers"></a>
# **getMeetingNumbers**
> Numbers getMeetingNumbers(userId, meetingId)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Numbers result = apiInstance.getMeetingNumbers(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeetingNumbers");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Numbers**](Numbers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getMeetingState"></a>
# **getMeetingState**
> MeetingState getMeetingState(userId, numericMeetingId)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
try {
    MeetingState result = apiInstance.getMeetingState(userId, numericMeetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getMeetingState");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |

### Return type

[**MeetingState**](MeetingState.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="listMeetings"></a>
# **listMeetings**
> List&lt;Meeting&gt; listMeetings(userId, numericMeetingId)

List Meetings

This endpoint gets a list of the user&#39;s scheduled upcoming meetings.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
String numericMeetingId = "numericMeetingId_example"; // String | Filter the results by the meeting ID that participants will see and use to join the conference.
try {
    List<Meeting> result = apiInstance.listMeetings(userId, numericMeetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#listMeetings");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **String**| Filter the results by the meeting ID that participants will see and use to join the conference. | [optional]

### Return type

[**List&lt;Meeting&gt;**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="sendMeetingInvite"></a>
# **sendMeetingInvite**
> sendMeetingInvite(userId, numericMeetingId, payloadInvite)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadInvite payloadInvite = new PayloadInvite(); // PayloadInvite | 
try {
    apiInstance.sendMeetingInvite(userId, numericMeetingId, payloadInvite);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#sendMeetingInvite");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadInvite** | [**PayloadInvite**](PayloadInvite.md)|  |

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateEndpointLayout"></a>
# **updateEndpointLayout**
> Layout updateEndpointLayout(userId, numericMeetingId, endpointGuid, isLeader, push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean isLeader = true; // Boolean | 
Boolean push = true; // Boolean | 
try {
    Layout result = apiInstance.updateEndpointLayout(userId, numericMeetingId, endpointGuid, isLeader, push);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#updateEndpointLayout");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **isLeader** | **Boolean**|  | [optional]
 **push** | **Boolean**|  | [optional]

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateMeeting"></a>
# **updateMeeting**
> Meeting updateMeeting(userId, meetingId, meeting)

Update Meeting

This endpoint changes the settings for a user&#39;s meeting. For example, use for rescheduling.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
Meeting meeting = new Meeting(); // Meeting | The user's room details that you wish to update.
try {
    Meeting result = apiInstance.updateMeeting(userId, meetingId, meeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#updateMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateMeetingEndpoint"></a>
# **updateMeetingEndpoint**
> Endpoint updateMeetingEndpoint(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean muteAudio = true; // Boolean | Toggle the audio source mute.
Boolean muteVideo = true; // Boolean | Toggle the video source mute.
Boolean leaveMeeting = true; // Boolean | Remove the user from the meeting.
try {
    Endpoint result = apiInstance.updateMeetingEndpoint(userId, numericMeetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#updateMeetingEndpoint");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **muteAudio** | **Boolean**| Toggle the audio source mute. | [optional]
 **muteVideo** | **Boolean**| Toggle the video source mute. | [optional]
 **leaveMeeting** | **Boolean**| Remove the user from the meeting. | [optional]

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateMeetingEndpoints"></a>
# **updateMeetingEndpoints**
> updateMeetingEndpoints(userId, numericMeetingId, mute, media)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Seems to require a Meeting-level access token.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
Boolean mute = true; // Boolean | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute.
String media = "media_example"; // String | Specify the type of media you which to mute/unmute.
try {
    apiInstance.updateMeetingEndpoints(userId, numericMeetingId, mute, media);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#updateMeetingEndpoints");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **mute** | **Boolean**| Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. | [optional]
 **media** | **String**| Specify the type of media you which to mute/unmute. | [optional] [enum: audio, video]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="updateMeetingState"></a>
# **updateMeetingState**
> Meeting updateMeetingState(userId, numericMeetingId, payloadMeetingState, delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.meetings.ApiClient;
//import com.bluejeans.api.rest.meetings.ApiException;
//import com.bluejeans.api.rest.meetings.Configuration;
//import com.bluejeans.api.rest.meetings.auth.*;
//import com.bluejeans.api.rest.meetings.api.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer numericMeetingId = 56; // Integer | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
PayloadMeetingState payloadMeetingState = new PayloadMeetingState(); // PayloadMeetingState | The meeting properties that you wish to update.
Integer delay = 56; // Integer | Number of seconds to delay the end meeting operation.
try {
    Meeting result = apiInstance.updateMeetingState(userId, numericMeetingId, payloadMeetingState, delay);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#updateMeetingState");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **numericMeetingId** | **Integer**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |
 **payloadMeetingState** | [**PayloadMeetingState**](PayloadMeetingState.md)| The meeting properties that you wish to update. |
 **delay** | **Integer**| Number of seconds to delay the end meeting operation. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

