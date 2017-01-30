# IO.Swagger.Api.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**V1EnterpriseEnterpriseIdUsersGet**](EnterpriseApi.md#v1enterpriseenterpriseidusersget) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
[**V1EnterpriseEnterpriseIdUsersPost**](EnterpriseApi.md#v1enterpriseenterpriseiduserspost) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
[**V1EnterpriseEnterpriseIdUsersUserIdDelete**](EnterpriseApi.md#v1enterpriseenterpriseidusersuseriddelete) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**V1UserUserIdEnterpriseProfileGet**](EnterpriseApi.md#v1useruseridenterpriseprofileget) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile


<a name="v1enterpriseenterpriseidusersget"></a>
# **V1EnterpriseEnterpriseIdUsersGet**
> Room V1EnterpriseEnterpriseIdUsersGet (int? enterpriseId, int? pageSize = null, int? pageNumber = null, string emailId = null)

List Enterprise Users

This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdUsersGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var pageSize = 56;  // int? | Sets number of items returned per page. (optional) 
            var pageNumber = 56;  // int? | Selects which page of results to return. (optional) 
            var emailId = emailId_example;  // string | Allows filtering the response by a user’s email address. (optional) 

            try
            {
                // List Enterprise Users
                Room result = apiInstance.V1EnterpriseEnterpriseIdUsersGet(enterpriseId, pageSize, pageNumber, emailId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.V1EnterpriseEnterpriseIdUsersGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **pageSize** | **int?**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **int?**| Selects which page of results to return. | [optional] 
 **emailId** | **string**| Allows filtering the response by a user’s email address. | [optional] 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1enterpriseenterpriseiduserspost"></a>
# **V1EnterpriseEnterpriseIdUsersPost**
> Room V1EnterpriseEnterpriseIdUsersPost (int? enterpriseId, bool? forcePasswordChange = null, bool? sendVerificationMail = null)

Create Enterprise User

This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdUsersPostExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var forcePasswordChange = true;  // bool? | Forces the user to change his or her password on first log in. (optional) 
            var sendVerificationMail = true;  // bool? | Prevents welcome emails from being sent to the newly created user. (optional) 

            try
            {
                // Create Enterprise User
                Room result = apiInstance.V1EnterpriseEnterpriseIdUsersPost(enterpriseId, forcePasswordChange, sendVerificationMail);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.V1EnterpriseEnterpriseIdUsersPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **forcePasswordChange** | **bool?**| Forces the user to change his or her password on first log in. | [optional] 
 **sendVerificationMail** | **bool?**| Prevents welcome emails from being sent to the newly created user. | [optional] 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1enterpriseenterpriseidusersuseriddelete"></a>
# **V1EnterpriseEnterpriseIdUsersUserIdDelete**
> Room V1EnterpriseEnterpriseIdUsersUserIdDelete (int? enterpriseId, int? userId)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1EnterpriseEnterpriseIdUsersUserIdDeleteExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Remove Enterprise User
                Room result = apiInstance.V1EnterpriseEnterpriseIdUsersUserIdDelete(enterpriseId, userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.V1EnterpriseEnterpriseIdUsersUserIdDelete: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="v1useruseridenterpriseprofileget"></a>
# **V1UserUserIdEnterpriseProfileGet**
> Enterprise V1UserUserIdEnterpriseProfileGet (int? userId)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class V1UserUserIdEnterpriseProfileGetExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get Enterprise Profile
                Enterprise result = apiInstance.V1UserUserIdEnterpriseProfileGet(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.V1UserUserIdEnterpriseProfileGet: " + e.Message );
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

[**Enterprise**](Enterprise.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

