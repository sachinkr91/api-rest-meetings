# com.bluejeans.api.rest.onvideo.Api.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GetTokenByClient**](AuthenticationApi.md#gettokenbyclient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**GetTokenByMeeting**](AuthenticationApi.md#gettokenbymeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**GetTokenByPassword**](AuthenticationApi.md#gettokenbypassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type


<a name="gettokenbyclient"></a>
# **GetTokenByClient**
> GrantClient GetTokenByClient (GrantRequestClient grantRequestClient)

Authentication via Client Grant Type

This API is typically called from an application.  Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console and given to the customer.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenByClientExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestClient = new GrantRequestClient(); // GrantRequestClient | Contains information about the type of grant you are requesting.

            try
            {
                // Authentication via Client Grant Type
                GrantClient result = apiInstance.GetTokenByClient(grantRequestClient);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenByClient: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestClient** | [**GrantRequestClient**](GrantRequestClient.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantClient**](GrantClient.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbymeeting"></a>
# **GetTokenByMeeting**
> GrantMeeting GetTokenByMeeting (GrantRequestMeeting grantRequestMeeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type. The scope of access covers the meeting only. Call this API with the meetings' numerid ID, and the meeting passcode (it one exists).  If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will grant attendee abilities.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenByMeetingExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestMeeting = new GrantRequestMeeting(); // GrantRequestMeeting | Contains information about the type of grant you are requesting.

            try
            {
                // Authentication via Meeting Grant Type
                GrantMeeting result = apiInstance.GetTokenByMeeting(grantRequestMeeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenByMeeting: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestMeeting** | [**GrantRequestMeeting**](GrantRequestMeeting.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantMeeting**](GrantMeeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbypassword"></a>
# **GetTokenByPassword**
> GrantPassword GetTokenByPassword (GrantRequestPassword grantRequestPassword)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password.  Set the grant_type to \"password\".

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenByPasswordExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestPassword = new GrantRequestPassword(); // GrantRequestPassword | Contains information about the type of grant you are requesting.

            try
            {
                // Authentication via Password Grant Type
                GrantPassword result = apiInstance.GetTokenByPassword(grantRequestPassword);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenByPassword: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestPassword** | [**GrantRequestPassword**](GrantRequestPassword.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantPassword**](GrantPassword.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

