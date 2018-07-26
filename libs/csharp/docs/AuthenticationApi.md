# com.bluejeans.api.rest.meetings.Api.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GetAuthorizationCode**](AuthenticationApi.md#getauthorizationcode) | **GET** /oauth2/authorize | Get Authorization Code
[**GetTokenByClient**](AuthenticationApi.md#gettokenbyclient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**GetTokenByCode**](AuthenticationApi.md#gettokenbycode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**GetTokenByMeeting**](AuthenticationApi.md#gettokenbymeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**GetTokenByPassword**](AuthenticationApi.md#gettokenbypassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**GetTokenByRefresh**](AuthenticationApi.md#gettokenbyrefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**GetTokenInfo**](AuthenticationApi.md#gettokeninfo) | **GET** /oauth2/tokenInfo | Validate a Token
[**RevokeAccessToken**](AuthenticationApi.md#revokeaccesstoken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token


<a name="getauthorizationcode"></a>
# **GetAuthorizationCode**
> void GetAuthorizationCode (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null, string appName = null, string appLogoUrl = null)

Get Authorization Code

This is **not a true REST endpoint**. <br /> This URL should be used by a user's browser-client application to perform authorization. <br />Upon completion, the user will be redirected back to the client application with state and code return parameters. <br />**Note**<ul><li>This API is activated through <b> https://bluejeans.com/oauth2/authorize </b></li><li>The API's return code has a very short valid period of <b>30 seconds</b>.  Your application must call the <b>/oauth2/token</b> API as soon as possible once you receive this API's return code.</li></ul>

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetAuthorizationCodeExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var clientId = clientId_example;  // string | The 32 character client ID generated when you created the client application. (optional) 
            var redirectUri = redirectUri_example;  // string | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional) 
            var state = state_example;  // string | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional) 
            var scope = scope_example;  // string | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional) 
            var responseType = responseType_example;  // string | The type of authorization you are peforrming.  Set to \"code\". (optional)  (default to code)
            var appName = appName_example;  // string | The name of the client application shown to user during authorization. (optional) 
            var appLogoUrl = appLogoUrl_example;  // string | URL to an 84x84 image shown to user during authorization. (optional) 

            try
            {
                // Get Authorization Code
                apiInstance.GetAuthorizationCode(clientId, redirectUri, state, scope, responseType, appName, appLogoUrl);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetAuthorizationCode: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| The 32 character client ID generated when you created the client application. | [optional] 
 **redirectUri** | **string**| The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. | [optional] 
 **state** | **string**| Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. | [optional] 
 **scope** | **string**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. | [optional] 
 **responseType** | **string**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]
 **appName** | **string**| The name of the client application shown to user during authorization. | [optional] 
 **appLogoUrl** | **string**| URL to an 84x84 image shown to user during authorization. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbyclient"></a>
# **GetTokenByClient**
> GrantClient GetTokenByClient (GrantRequestClient grantRequestClient)

Authentication via Client Grant Type

This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**client_credentials**\" (string).

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenByClientExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var grantRequestClient = new GrantRequestClient(); // GrantRequestClient | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*.

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
 **grantRequestClient** | [**GrantRequestClient**](GrantRequestClient.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. | 

### Return type

[**GrantClient**](GrantClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbycode"></a>
# **GetTokenByCode**
> GrantCode GetTokenByCode (GrantRequestCode grantRequestCode)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**authorization_code**\" (string).

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenByCodeExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var grantRequestCode = new GrantRequestCode(); // GrantRequestCode | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*.

            try
            {
                // Authentication via Code Grant Type
                GrantCode result = apiInstance.GetTokenByCode(grantRequestCode);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenByCode: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestCode** | [**GrantRequestCode**](GrantRequestCode.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. | 

### Return type

[**GrantCode**](GrantCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbymeeting"></a>
# **GetTokenByMeeting**
> GrantMeeting GetTokenByMeeting (GrantRequestMeeting grantRequestMeeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. <br />Call this API with the meeting's numeric ID, and the meeting passcode (if one exists). <br />&nbsp;&nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. <br />&nbsp;&nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.<br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**meeting_passcode**\" (string).

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenByMeetingExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var grantRequestMeeting = new GrantRequestMeeting(); // GrantRequestMeeting | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*.

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
 **grantRequestMeeting** | [**GrantRequestMeeting**](GrantRequestMeeting.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. | 

### Return type

[**GrantMeeting**](GrantMeeting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbypassword"></a>
# **GetTokenByPassword**
> GrantPassword GetTokenByPassword (GrantRequestPassword grantRequestPassword)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**password**\" (string).

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenByPasswordExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var grantRequestPassword = new GrantRequestPassword(); // GrantRequestPassword | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*.

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
 **grantRequestPassword** | [**GrantRequestPassword**](GrantRequestPassword.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. | 

### Return type

[**GrantPassword**](GrantPassword.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokenbyrefresh"></a>
# **GetTokenByRefresh**
> GrantRefresh GetTokenByRefresh (GrantRequestRefresh grantRequestRefresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**refresh_token**\" (string).

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenByRefreshExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestRefresh = new GrantRequestRefresh(); // GrantRequestRefresh | Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*.

            try
            {
                // Authentication via Refresh Grant Type
                GrantRefresh result = apiInstance.GetTokenByRefresh(grantRequestRefresh);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenByRefresh: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestRefresh** | [**GrantRequestRefresh**](GrantRequestRefresh.md)| Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. | 

### Return type

[**GrantRefresh**](GrantRefresh.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="gettokeninfo"></a>
# **GetTokenInfo**
> InlineResponse200 GetTokenInfo (string accessToken = null)

Validate a Token

This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetTokenInfoExample
    {
        public void main()
        {
            var apiInstance = new AuthenticationApi();
            var accessToken = accessToken_example;  // string |  (optional) 

            try
            {
                // Validate a Token
                InlineResponse200 result = apiInstance.GetTokenInfo(accessToken);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.GetTokenInfo: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**|  | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="revokeaccesstoken"></a>
# **RevokeAccessToken**
> void RevokeAccessToken (GrantRequestRevoke grantRequestRevoke, string accessToken = null)

Revoke Access Token

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class RevokeAccessTokenExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestRevoke = new GrantRequestRevoke(); // GrantRequestRevoke | Contains information about the type of grant you are revoking.
            var accessToken = accessToken_example;  // string |  (optional) 

            try
            {
                // Revoke Access Token
                apiInstance.RevokeAccessToken(grantRequestRevoke, accessToken);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.RevokeAccessToken: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantRequestRevoke** | [**GrantRequestRevoke**](GrantRequestRevoke.md)| Contains information about the type of grant you are revoking. | 
 **accessToken** | **string**|  | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

