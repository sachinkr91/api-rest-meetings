# com.bluejeans.api.rest.onvideo.Api.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateClientApplication**](AuthenticationApi.md#createclientapplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**GetAuthorizationCode**](AuthenticationApi.md#getauthorizationcode) | **GET** /oauth2/authorize | Get Authorization Code
[**GetTokenByClient**](AuthenticationApi.md#gettokenbyclient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**GetTokenByCode**](AuthenticationApi.md#gettokenbycode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**GetTokenByMeeting**](AuthenticationApi.md#gettokenbymeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**GetTokenByPassword**](AuthenticationApi.md#gettokenbypassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**GetTokenByRefresh**](AuthenticationApi.md#gettokenbyrefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**GetTokenInfo**](AuthenticationApi.md#gettokeninfo) | **GET** /oauth2/tokenInfo | Validate a Token
[**RegenerateClientApplicationSecret**](AuthenticationApi.md#regenerateclientapplicationsecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**RevokeAccessToken**](AuthenticationApi.md#revokeaccesstoken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token
[**UpdateClientApplication**](AuthenticationApi.md#updateclientapplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


<a name="createclientapplication"></a>
# **CreateClientApplication**
> Application CreateClientApplication (int? userId, Application application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class CreateClientApplicationExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var application = new Application(); // Application | The information about the new client application.

            try
            {
                // Create Client Application
                Application result = apiInstance.CreateClientApplication(userId, application);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.CreateClientApplication: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getauthorizationcode"></a>
# **GetAuthorizationCode**
> void GetAuthorizationCode (string clientId = null, string redirectUri = null, string state = null, string scope = null, string responseType = null)

Get Authorization Code

This is NOT a REST endpoint. Documenting here for consistentcy. This URL shoujld be used by a client application user's browser to perform authorization.  User will be redirected back to client application upon completion with state and code parameters.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetAuthorizationCodeExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var clientId = clientId_example;  // string | The 32 character client ID generated when you created the client application. (optional) 
            var redirectUri = redirectUri_example;  // string | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional) 
            var state = state_example;  // string | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional) 
            var scope = scope_example;  // string | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info (optional) 
            var responseType = responseType_example;  // string | The type of authorization you are peforrming.  Set to \"code\". (optional)  (default to code)

            try
            {
                // Get Authorization Code
                apiInstance.GetAuthorizationCode(clientId, redirectUri, state, scope, responseType);
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
 **scope** | **string**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info | [optional] 
 **responseType** | **string**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

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

<a name="gettokenbycode"></a>
# **GetTokenByCode**
> GrantCode GetTokenByCode (GrantRequestCode grantRequestCode)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenByCodeExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestCode = new GrantRequestCode(); // GrantRequestCode | Contains information about the type of grant you are requesting.

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
 **grantRequestCode** | [**GrantRequestCode**](GrantRequestCode.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantCode**](GrantCode.md)

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

<a name="gettokenbyrefresh"></a>
# **GetTokenByRefresh**
> GrantRefresh GetTokenByRefresh (GrantRequestRefresh grantRequestRefresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenByRefreshExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var grantRequestRefresh = new GrantRequestRefresh(); // GrantRequestRefresh | Contains information about the type of grant you are requesting.

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
 **grantRequestRefresh** | [**GrantRequestRefresh**](GrantRequestRefresh.md)| Contains information about the type of grant you are requesting. | 

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
> InlineResponse200 GetTokenInfo ()

Validate a Token

This endpoint will validate if a token is valid or not.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class GetTokenInfoExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();

            try
            {
                // Validate a Token
                InlineResponse200 result = apiInstance.GetTokenInfo();
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
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="regenerateclientapplicationsecret"></a>
# **RegenerateClientApplicationSecret**
> ApplicationSecret RegenerateClientApplicationSecret (int? userId, int? clientId)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class RegenerateClientApplicationSecretExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var clientId = 56;  // int? | The ID of the client application of interest. This value was given as a response during client application creation.

            try
            {
                // Regenerate Client Application Secret
                ApplicationSecret result = apiInstance.RegenerateClientApplicationSecret(userId, clientId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.RegenerateClientApplicationSecret: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **int?**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
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
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class RevokeAccessTokenExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

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

<a name="updateclientapplication"></a>
# **UpdateClientApplication**
> Application UpdateClientApplication (int? userId, int? clientId, Application application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class UpdateClientApplicationExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new AuthenticationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var clientId = 56;  // int? | The ID of the client application of interest. This value was given as a response during client application creation.
            var application = new Application(); // Application | The information about the new client application.

            try
            {
                // Update Client Application
                Application result = apiInstance.UpdateClientApplication(userId, clientId, application);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AuthenticationApi.UpdateClientApplication: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **int?**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

