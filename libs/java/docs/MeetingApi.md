# MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMeeting**](MeetingApi.md#cancelMeeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**createMeeting**](MeetingApi.md#createMeeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
[**getDefaultMeeting**](MeetingApi.md#getDefaultMeeting) | **GET** /v1/user/{user_id}/scheduled_meeting | Get Meeting Settings
[**getEndpointLayout**](MeetingApi.md#getEndpointLayout) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**getMeeting**](MeetingApi.md#getMeeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**updateEndpointLayout**](MeetingApi.md#updateEndpointLayout) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**updateMeeting**](MeetingApi.md#updateMeeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
[**v1UserUserIdLiveMeetingsMeetingIdEndpointsPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | Update Meeting Endpoints State
[**v1UserUserIdLiveMeetingsMeetingIdGet**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
[**v1UserUserIdLiveMeetingsMeetingIdInvitePost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdInvitePost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
[**v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
[**v1UserUserIdLiveMeetingsMeetingIdPut**](MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
[**v1UserUserIdMeetingsMeetingIdNumbersGet**](MeetingApi.md#v1UserUserIdMeetingsMeetingIdNumbersGet) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**v1UserUserIdScheduledMeetingMeetingIdEmailsGet**](MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdEmailsGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email


<a name="cancelMeeting"></a>
# **cancelMeeting**
> cancelMeeting(userId, meetingId)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Meeting meeting = new Meeting(); // Meeting | The user's room details that you wish to update.
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
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. |
 **email** | **Boolean**| If set to true, sends invitation emails to all listed participants. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getDefaultMeeting"></a>
# **getDefaultMeeting**
> List&lt;Meeting&gt; getDefaultMeeting(userId)

Get Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
try {
    List<Meeting> result = apiInstance.getDefaultMeeting(userId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#getDefaultMeeting");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |

### Return type

[**List&lt;Meeting&gt;**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getEndpointLayout"></a>
# **getEndpointLayout**
> Layout getEndpointLayout(userId, meetingId, endpointGuid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Layout result = apiInstance.getEndpointLayout(userId, meetingId, endpointGuid);
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
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
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
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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

<a name="updateEndpointLayout"></a>
# **updateEndpointLayout**
> Layout updateEndpointLayout(userId, meetingId, endpointGuid, isLeader, push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean isLeader = true; // Boolean | 
Boolean push = true; // Boolean | 
try {
    Layout result = apiInstance.updateEndpointLayout(userId, meetingId, endpointGuid, isLeader, push);
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
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
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
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**
> Endpoint v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet(userId, meetingId, endpointGuid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
try {
    Endpoint result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet(userId, meetingId, endpointGuid);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **endpointGuid** | **String**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. |

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**
> Endpoint v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut(userId, meetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
String endpointGuid = "endpointGuid_example"; // String | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
Boolean muteAudio = true; // Boolean | Toggle the audio source mute.
Boolean muteVideo = true; // Boolean | Toggle the video source mute.
Boolean leaveMeeting = true; // Boolean | Remove the user from the meeting.
try {
    Endpoint result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut(userId, meetingId, endpointGuid, muteAudio, muteVideo, leaveMeeting);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
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

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**
> Endpoints v1UserUserIdLiveMeetingsMeetingIdEndpointsGet(userId, meetingId)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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
    Endpoints result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**Endpoints**](Endpoints.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdEndpointsPut"></a>
# **v1UserUserIdLiveMeetingsMeetingIdEndpointsPut**
> v1UserUserIdLiveMeetingsMeetingIdEndpointsPut(userId, meetingId, mute, media)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Seems to require a Meeting-level access token.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
Boolean mute = true; // Boolean | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute.
String media = "media_example"; // String | Specify the type of media you which to mute/unmute.
try {
    apiInstance.v1UserUserIdLiveMeetingsMeetingIdEndpointsPut(userId, meetingId, mute, media);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdEndpointsPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **mute** | **Boolean**| Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. | [optional]
 **media** | **String**| Specify the type of media you which to mute/unmute. | [optional] [enum: audio, video]

### Return type

null (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdGet"></a>
# **v1UserUserIdLiveMeetingsMeetingIdGet**
> MeetingState v1UserUserIdLiveMeetingsMeetingIdGet(userId, meetingId)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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
    MeetingState result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |

### Return type

[**MeetingState**](MeetingState.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdLiveMeetingsMeetingIdInvitePost"></a>
# **v1UserUserIdLiveMeetingsMeetingIdInvitePost**
> v1UserUserIdLiveMeetingsMeetingIdInvitePost(userId, meetingId, payloadInvite)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
PayloadInvite payloadInvite = new PayloadInvite(); // PayloadInvite | 
try {
    apiInstance.v1UserUserIdLiveMeetingsMeetingIdInvitePost(userId, meetingId, payloadInvite);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdInvitePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **payloadInvite** | [**PayloadInvite**](PayloadInvite.md)|  |

### Return type

null (empty response body)

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
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
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
> Meeting v1UserUserIdLiveMeetingsMeetingIdPut(userId, meetingId, payloadMeetingState, delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

MeetingApi apiInstance = new MeetingApi();
Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
Integer meetingId = 56; // Integer | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
PayloadMeetingState payloadMeetingState = new PayloadMeetingState(); // PayloadMeetingState | The meeting properties that you wish to update.
Integer delay = 56; // Integer | Number of seconds to delay the end meeting operation.
try {
    Meeting result = apiInstance.v1UserUserIdLiveMeetingsMeetingIdPut(userId, meetingId, payloadMeetingState, delay);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdLiveMeetingsMeetingIdPut");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **Integer**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. |
 **meetingId** | **Integer**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. |
 **payloadMeetingState** | [**PayloadMeetingState**](PayloadMeetingState.md)| The meeting properties that you wish to update. |
 **delay** | **Integer**| Number of seconds to delay the end meeting operation. | [optional]

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="v1UserUserIdMeetingsMeetingIdNumbersGet"></a>
# **v1UserUserIdMeetingsMeetingIdNumbersGet**
> Numbers v1UserUserIdMeetingsMeetingIdNumbersGet(userId, meetingId)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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
    Numbers result = apiInstance.v1UserUserIdMeetingsMeetingIdNumbersGet(userId, meetingId);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling MeetingApi#v1UserUserIdMeetingsMeetingIdNumbersGet");
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

<a name="v1UserUserIdScheduledMeetingMeetingIdEmailsGet"></a>
# **v1UserUserIdScheduledMeetingMeetingIdEmailsGet**
> Meeting v1UserUserIdScheduledMeetingMeetingIdEmailsGet(userId, meetingId, type, role, action)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.MeetingApi;

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

