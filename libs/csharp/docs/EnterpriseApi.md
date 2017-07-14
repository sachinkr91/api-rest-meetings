# com.bluejeans.api.rest.onvideo.Api.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateUser**](EnterpriseApi.md#createuser) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
[**ExportUsers**](EnterpriseApi.md#exportusers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**ListUsers**](EnterpriseApi.md#listusers) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
[**RemoveUser**](EnterpriseApi.md#removeuser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User


<a name="createuser"></a>
# **CreateUser**
> UserId CreateUser (int? enterpriseId, User user, bool? forcePasswordChange = null, bool? sendVerificationMail = null)

Create Enterprise User

This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class CreateUserExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var user = new User(); // User | The information about the new user.
            var forcePasswordChange = true;  // bool? | Forces the user to change his or her password on first log in. (optional) 
            var sendVerificationMail = true;  // bool? | Prevents welcome emails from being sent to the newly created user. (optional) 

            try
            {
                // Create Enterprise User
                UserId result = apiInstance.CreateUser(enterpriseId, user, forcePasswordChange, sendVerificationMail);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.CreateUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **user** | [**User**](User.md)| The information about the new user. | 
 **forcePasswordChange** | **bool?**| Forces the user to change his or her password on first log in. | [optional] 
 **sendVerificationMail** | **bool?**| Prevents welcome emails from being sent to the newly created user. | [optional] 

### Return type

[**UserId**](UserId.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="exportusers"></a>
# **ExportUsers**
> void ExportUsers (int? enterpriseId)

Export Enterprise Users

This endpoint exports existing users into a CSV file.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class ExportUsersExample
    {
        public void main()
        {
            
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

            try
            {
                // Export Enterprise Users
                apiInstance.ExportUsers(enterpriseId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.ExportUsers: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="listusers"></a>
# **ListUsers**
> EnterpriseUserList ListUsers (int? enterpriseId, int? pageSize = null, int? pageNumber = null, string emailId = null)

List Enterprise Users

This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class ListUsersExample
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
                EnterpriseUserList result = apiInstance.ListUsers(enterpriseId, pageSize, pageNumber, emailId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.ListUsers: " + e.Message );
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

[**EnterpriseUserList**](EnterpriseUserList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="removeuser"></a>
# **RemoveUser**
> void RemoveUser (int? enterpriseId, int? userId)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Model;

namespace Example
{
    public class RemoveUserExample
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
                apiInstance.RemoveUser(enterpriseId, userId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.RemoveUser: " + e.Message );
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

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

