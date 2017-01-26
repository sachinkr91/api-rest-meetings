# MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Current Endpoint Layout
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
[**v1UserUserIdLiveMeetingsMeetingIdGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
[**v1UserUserIdLiveMeetingsMeetingIdInvitePost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdInvitePost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
[**v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
[**v1UserUserIdLiveMeetingsMeetingIdPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
[**v1UserUserIdScheduledMeetingGet**](MeetingApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdDelete**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdDelete) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdEmailsGet**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdEmailsGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdGet**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingMeetingIdPut**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdPut) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1UserUserIdScheduledMeetingPost**](MeetingApi.md#v1UserUserIdScheduledMeetingPost) | **POST** /v1/user/{user_id}/scheduled_meeting | Meeting


<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet(userId, meetingId, endpointGuid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet(userId, meetingId, endpointGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet(userId, meetingId, endpointGuid)

Get Current Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet(userId, meetingId, endpointGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**
> Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut(userId, meetingId, endpointGuid, isLeader, push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean isLeader = true; // Boolean | 
Boolean push = true; // Boolean | 
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut(userId, meetingId, endpointGuid, isLeader, push);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **isLeader** | **Boolean**|  | [optional]
 **push** | **Boolean**|  | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**
> Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut(userId, meetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean muteAudio = true; // Boolean | Toggle the audio source mute.
Boolean muteVideo = true; // Boolean | Toggle the video source mute.
Boolean leaveMeeting = true; // Boolean | Remove the user from the meeting.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut(userId, meetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |
 **muteAudio** | **Boolean**| Toggle the audio source mute. | [optional]
 **muteVideo** | **Boolean**| Toggle the video source mute. | [optional]
 **leaveMeeting** | **Boolean**| Remove the user from the meeting. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdEndpointsGet(userId, meetingId)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdGet**
> Meeting v1UserUserIdLiveMeetingsMeetingIdGet(userId, meetingId)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdInvitePost"></a>
# **v1UserUserIdLiveMeetingsMeetingIdInvitePost**
> Meeting v1UserUserIdLiveMeetingsMeetingIdInvitePost(userId, meetingId)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdInvitePost(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdInvitePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost"></a>
# **v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**
> Meeting v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost(userId, meetingId)

Generate SIP Pairing Code

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdPut**
> Meeting v1UserUserIdLiveMeetingsMeetingIdPut(userId, meetingId, meeting, mute, media, delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
Meeting meeting = new Meeting(); // Meeting | The meeting properties that you wish to update.
Boolean mute = true; // Boolean | Allows you to mute/unmute all participants in a meeting.
String media = "media_example"; // String | Specify \"audio\" or \"video\" for the prior mute parameter.
Integer delay = 56; // Integer | Number of seconds to delay the end meeting operation.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdPut(userId, meetingId, meeting, mute, media, delay);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**Meeting**](Meeting.md)| The meeting properties that you wish to update. |
 **mute** | **Boolean**| Allows you to mute/unmute all participants in a meeting. | [optional]
 **media** | **String**| Specify \&quot;audio\&quot; or \&quot;video\&quot; for the prior mute parameter. | [optional]
 **delay** | **Integer**| Number of seconds to delay the end meeting operation. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingGet"></a>
# **v1UserUserIdScheduledMeetingGet**
> List&lt;Meeting&gt; v1UserUserIdScheduledMeetingGet(userId)

Meeting

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    List<Meeting> result = apiInstance.v1UserUserIdScheduledMeetingGet(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**List&lt;Meeting&gt;**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingMeetingIdDelete"></a>
# **v1UserUserIdScheduledMeetingMeetingIdDelete**
> Meeting v1UserUserIdScheduledMeetingMeetingIdDelete(userId, meetingId)

Meeting

Cancel a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdScheduledMeetingMeetingIdDelete(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingMeetingIdDelete");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingMeetingIdEmailsGet"></a>
# **v1UserUserIdScheduledMeetingMeetingIdEmailsGet**
> Meeting v1UserUserIdScheduledMeetingMeetingIdEmailsGet(userId, meetingId, type, role, action)

Meeting

This endpoint retrieves the email object for a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String type = "type_example"; // String | TEXT, ICS, HTML
String role = "role_example"; // String | moderator, participant
String action = "action_example"; // String | create, edit, delete
try {
    Meeting result = apiInstance.v1UserUserIdScheduledMeetingMeetingIdEmailsGet(userId, meetingId, type, role, action);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingMeetingIdEmailsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
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

<a name="v1UserUserIdScheduledMeetingMeetingIdGet"></a>
# **v1UserUserIdScheduledMeetingMeetingIdGet**
> Meeting v1UserUserIdScheduledMeetingMeetingIdGet(userId, meetingId)

Meeting

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
try {
    Meeting result = apiInstance.v1UserUserIdScheduledMeetingMeetingIdGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingMeetingIdGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingMeetingIdPut"></a>
# **v1UserUserIdScheduledMeetingMeetingIdPut**
> Meeting v1UserUserIdScheduledMeetingMeetingIdPut(userId, meetingId, meeting)

Meeting

Update a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
Meeting meeting = new Meeting(); // Meeting | The user's room details that you wish to update.
try {
    Meeting result = apiInstance.v1UserUserIdScheduledMeetingMeetingIdPut(userId, meetingId, meeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingMeetingIdPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. |

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdScheduledMeetingPost"></a>
# **v1UserUserIdScheduledMeetingPost**
> Meeting v1UserUserIdScheduledMeetingPost(userId, meeting, email)

Meeting

Create a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.ApiClient;
//import com.bluejeans.api.ApiException;
//import com.bluejeans.api.Configuration;
//import com.bluejeans.api.auth.*;
//import com.bluejeans.api.rest.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Meeting meeting = new Meeting(); // Meeting | The user's room details that you wish to update.
Boolean email = true; // Boolean | If set to true, sends invitation emails to all listed participants.
try {
    Meeting result = apiInstance.v1UserUserIdScheduledMeetingPost(userId, meeting, email);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdScheduledMeetingPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest.  his value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. |
 **email** | **Boolean**| If set to true, sends invitation emails to all listed participants. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

