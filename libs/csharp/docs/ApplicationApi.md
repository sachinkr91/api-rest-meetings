# com.bluejeans.api.rest.meetings.Api.ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateClientApplication**](ApplicationApi.md#createclientapplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**ListClientApplications**](ApplicationApi.md#listclientapplications) | **GET** /v1/user/{user_id}/developer_applications | List Client Applications
[**RegenerateClientApplicationSecret**](ApplicationApi.md#regenerateclientapplicationsecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**UpdateClientApplication**](ApplicationApi.md#updateclientapplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


<a name="createclientapplication"></a>
# **CreateClientApplication**
> Application CreateClientApplication (int? userId, Application application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class CreateClientApplicationExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new ApplicationApi();
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
                Debug.Print("Exception when calling ApplicationApi.CreateClientApplication: " + e.Message );
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

<a name="listclientapplications"></a>
# **ListClientApplications**
> ApplicationList ListClientApplications (int? userId)

List Client Applications

This endpoint lists all the client applications associated with the access_token.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class ListClientApplicationsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new ApplicationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // List Client Applications
                ApplicationList result = apiInstance.ListClientApplications(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ApplicationApi.ListClientApplications: " + e.Message );
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

[**ApplicationList**](ApplicationList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="regenerateclientapplicationsecret"></a>
# **RegenerateClientApplicationSecret**
> ApplicationSecret RegenerateClientApplicationSecret (int? userId, string clientId)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class RegenerateClientApplicationSecretExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new ApplicationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var clientId = clientId_example;  // string | The ID of the client application of interest. This value was given as a response during client application creation.

            try
            {
                // Regenerate Client Application Secret
                ApplicationSecret result = apiInstance.RegenerateClientApplicationSecret(userId, clientId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ApplicationApi.RegenerateClientApplicationSecret: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **string**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="updateclientapplication"></a>
# **UpdateClientApplication**
> Application UpdateClientApplication (int? userId, string clientId, Application application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateClientApplicationExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new ApplicationApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var clientId = clientId_example;  // string | The ID of the client application of interest. This value was given as a response during client application creation.
            var application = new Application(); // Application | The information about the new client application.

            try
            {
                // Update Client Application
                Application result = apiInstance.UpdateClientApplication(userId, clientId, application);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ApplicationApi.UpdateClientApplication: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **string**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

