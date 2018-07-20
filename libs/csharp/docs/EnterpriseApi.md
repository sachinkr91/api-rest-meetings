# com.bluejeans.api.rest.meetings.Api.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ChangeEnterpriseTags**](EnterpriseApi.md#changeenterprisetags) | **PUT** /v1/enterprise/{enterpriseId}/tags | Set Enterprise Tags
[**CreateEnterpriseUser**](EnterpriseApi.md#createenterpriseuser) | **POST** /v1/enterprise/{enterpriseId}/users | Create User
[**ExportUsers**](EnterpriseApi.md#exportusers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**GetEnterpriseTags**](EnterpriseApi.md#getenterprisetags) | **GET** /v1/enterprise/{enterpriseId}/tags | List Enterprise Tags
[**RemoveUser**](EnterpriseApi.md#removeuser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**SearchUsers**](EnterpriseApi.md#searchusers) | **GET** /v1/enterprise/{enterpriseId}/users | Search for User(s)


<a name="changeenterprisetags"></a>
# **ChangeEnterpriseTags**
> TagListComp ChangeEnterpriseTags (int? enterpriseId, string action, string tag)

Set Enterprise Tags

This endpoint modifies the list of profile tags associated with the specified enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class ChangeEnterpriseTagsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var action = action_example;  // string | Type of operation to be done
            var tag = tag_example;  // string | The name of tag

            try
            {
                // Set Enterprise Tags
                TagListComp result = apiInstance.ChangeEnterpriseTags(enterpriseId, action, tag);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.ChangeEnterpriseTags: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **action** | **string**| Type of operation to be done | 
 **tag** | **string**| The name of tag | 

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="createenterpriseuser"></a>
# **CreateEnterpriseUser**
> UserId CreateEnterpriseUser (int? enterpriseId, EnterpriseCreateUser enterpriseUser, string billingCategory = null, bool? forcePasswordChange = null, bool? isAdmin = null)

Create User

This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user's personal meeting room.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class CreateEnterpriseUserExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var enterpriseUser = new EnterpriseCreateUser(); // EnterpriseCreateUser | Basic Enterprise Account information
            var billingCategory = billingCategory_example;  // string | What general billing group does this profile belong? (optional)  (default to ENTERPRISE)
            var forcePasswordChange = true;  // bool? | Create profile and force user to change password on next login (optional) 
            var isAdmin = true;  // bool? | Create this account to have Administrative Privileges for the enterprise (optional) 

            try
            {
                // Create User
                UserId result = apiInstance.CreateEnterpriseUser(enterpriseId, enterpriseUser, billingCategory, forcePasswordChange, isAdmin);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.CreateEnterpriseUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **enterpriseUser** | [**EnterpriseCreateUser**](EnterpriseCreateUser.md)| Basic Enterprise Account information | 
 **billingCategory** | **string**| What general billing group does this profile belong? | [optional] [default to ENTERPRISE]
 **forcePasswordChange** | **bool?**| Create profile and force user to change password on next login | [optional] 
 **isAdmin** | **bool?**| Create this account to have Administrative Privileges for the enterprise | [optional] 

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
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

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

<a name="getenterprisetags"></a>
# **GetEnterpriseTags**
> TagListComp GetEnterpriseTags (int? enterpriseId)

List Enterprise Tags

This endpoint retrieves all profile tags defined for the specified enterprise.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetEnterpriseTagsExample
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
                // List Enterprise Tags
                TagListComp result = apiInstance.GetEnterpriseTags(enterpriseId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.GetEnterpriseTags: " + e.Message );
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

[**TagListComp**](TagListComp.md)

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
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

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

<a name="searchusers"></a>
# **SearchUsers**
> EnterpriseUserSearch SearchUsers (int? enterpriseId, string fields = null, string order = null, string sortBy = null, string textSearch = null, string emailId = null, int? pageSize = null, int? pageNumber = null)

Search for User(s)

This endpoint provides a search facility for the specified enterprise.  <ul><li>If textSearch is provided, the results will be a partial string-match search of the given textSearch value.</li><li> Otherwise, the search will return an exact lookup by emailId.</li></ul>

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class SearchUsersExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.ApiKey.Add("access_token", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.ApiKeyPrefix.Add("access_token", "Bearer");

            var apiInstance = new EnterpriseApi();
            var enterpriseId = 56;  // int? | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var fields = fields_example;  // string | A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional) 
            var order = order_example;  // string | If specificed, order defines how the API sorts results- ascending or descending (optional) 
            var sortBy = sortBy_example;  // string | Name of BlueJeans profile field by with API response data is sorted (optional) 
            var textSearch = textSearch_example;  // string | If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional) 
            var emailId = emailId_example;  // string | If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value. (optional) 
            var pageSize = 56;  // int? | Sets number of items returned per page. (optional) 
            var pageNumber = 56;  // int? | Selects which page of results to return (1-based value) (optional) 

            try
            {
                // Search for User(s)
                EnterpriseUserSearch result = apiInstance.SearchUsers(enterpriseId, fields, order, sortBy, textSearch, emailId, pageSize, pageNumber);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling EnterpriseApi.SearchUsers: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int?**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **fields** | **string**| A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email | [optional] 
 **order** | **string**| If specificed, order defines how the API sorts results- ascending or descending | [optional] 
 **sortBy** | **string**| Name of BlueJeans profile field by with API response data is sorted | [optional] 
 **textSearch** | **string**| If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users | [optional] 
 **emailId** | **string**| If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. | [optional] 
 **pageSize** | **int?**| Sets number of items returned per page. | [optional] 
 **pageNumber** | **int?**| Selects which page of results to return (1-based value) | [optional] 

### Return type

[**EnterpriseUserSearch**](EnterpriseUserSearch.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

