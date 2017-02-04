# AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2TokenClientPost**](AuthenticationApi.md#oauth2TokenClientPost) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**oauth2TokenMeetingPost**](AuthenticationApi.md#oauth2TokenMeetingPost) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**oauth2TokenPasswordPost**](AuthenticationApi.md#oauth2TokenPasswordPost) | **POST** /oauth2/token?Password | Authentication via Password Grant Type


<a name="oauth2TokenClientPost"></a>
# **oauth2TokenClientPost**
> Grant oauth2TokenClientPost(payload)

Authentication via Client Grant Type

This grant type is commonly used by an app. Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.AuthenticationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AuthenticationApi apiInstance = new AuthenticationApi();
Payload payload = new Payload(); // Payload | Contains information about the type of grant you are requesting.
try {
    Grant result = apiInstance.oauth2TokenClientPost(payload);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AuthenticationApi#oauth2TokenClientPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload**](Payload.md)| Contains information about the type of grant you are requesting. |

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="oauth2TokenMeetingPost"></a>
# **oauth2TokenMeetingPost**
> Grant oauth2TokenMeetingPost(payload)

Authentication via Meeting Grant Type

This is not a traditional OAuth grant type, but it behaves closely to the password grant type. This level of authentication allows for obtaining access to the meeting only. If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will have a limited scope of access that an attendee has within a meeting.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.AuthenticationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AuthenticationApi apiInstance = new AuthenticationApi();
Payload1 payload = new Payload1(); // Payload1 | Contains information about the type of grant you are requesting.
try {
    Grant result = apiInstance.oauth2TokenMeetingPost(payload);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AuthenticationApi#oauth2TokenMeetingPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload1**](Payload1.md)| Contains information about the type of grant you are requesting. |

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="oauth2TokenPasswordPost"></a>
# **oauth2TokenPasswordPost**
> Grant oauth2TokenPasswordPost(payload)

Authentication via Password Grant Type

An access token can be obtained by using a user’s username and password.

### Example
```java
// Import classes:
//import com.bluejeans.api.rest.ApiClient;
//import com.bluejeans.api.rest.ApiException;
//import com.bluejeans.api.rest.Configuration;
//import com.bluejeans.api.rest.auth.*;
//import com.bluejeans.api.rest.onvideo.AuthenticationApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: access_token
ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
access_token.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//access_token.setApiKeyPrefix("Token");

AuthenticationApi apiInstance = new AuthenticationApi();
Payload2 payload = new Payload2(); // Payload2 | Contains information about the type of grant you are requesting.
try {
    Grant result = apiInstance.oauth2TokenPasswordPost(payload);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AuthenticationApi#oauth2TokenPasswordPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload2**](Payload2.md)| Contains information about the type of grant you are requesting. |

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

