# com.bluejeans.api.rest.meetings.Api.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ChangeUserTags**](UserApi.md#changeusertags) | **PUT** /v1/user/{userId}/tags | Set User Tags
[**CreateRoom**](UserApi.md#createroom) | **POST** /v1/user/{user_id}/room | Create User’s Default Meeting Settings
[**GetEnterpriseProfile**](UserApi.md#getenterpriseprofile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**GetGrantedApplications**](UserApi.md#getgrantedapplications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**GetGroups**](UserApi.md#getgroups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
[**GetPersonalMeeting**](UserApi.md#getpersonalmeeting) | **GET** /v1/user/{user_id}/personal_meeting | Get Personal Meeting
[**GetRoom**](UserApi.md#getroom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**GetUser**](UserApi.md#getuser) | **GET** /v1/user/{user_id} | Get User Account Details
[**GetUserTags**](UserApi.md#getusertags) | **GET** /v1/user/{userId}/tags | List User Tags
[**RevokeGrantedApplication**](UserApi.md#revokegrantedapplication) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**SetGroups**](UserApi.md#setgroups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
[**UpdatePeresonalMeeting**](UserApi.md#updateperesonalmeeting) | **PUT** /v1/user/{user_id}/personal_meeting | Update Personal Meeting
[**UpdateRoom**](UserApi.md#updateroom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**UpdateUser**](UserApi.md#updateuser) | **PUT** /v1/user/{user_id} | Update User Account Details


<a name="changeusertags"></a>
# **ChangeUserTags**
> TagListComp ChangeUserTags (int? userId, string action, string tag)

Set User Tags

This endpoint modifies the list of tags associated with the specified user. <b>NOTE</b> Adding a tag that is not defined in the user's Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class ChangeUserTagsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
            var action = action_example;  // string | Type of operation to be done
            var tag = tag_example;  // string | The name of tag

            try
            {
                // Set User Tags
                TagListComp result = apiInstance.ChangeUserTags(userId, action, tag);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.ChangeUserTags: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
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

<a name="createroom"></a>
# **CreateRoom**
> Room CreateRoom (int? userId, Room room)

Create User’s Default Meeting Settings

This endpoint creates the user’s default meeting settings.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class CreateRoomExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var room = new Room(); // Room | The user's room details

            try
            {
                // Create User’s Default Meeting Settings
                Room result = apiInstance.CreateRoom(userId, room);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.CreateRoom: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **room** | [**Room**](Room.md)| The user&#39;s room details | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getenterpriseprofile"></a>
# **GetEnterpriseProfile**
> Enterprise GetEnterpriseProfile (int? userId)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetEnterpriseProfileExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get Enterprise Profile
                Enterprise result = apiInstance.GetEnterpriseProfile(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetEnterpriseProfile: " + e.Message );
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

<a name="getgrantedapplications"></a>
# **GetGrantedApplications**
> GrantedApplications GetGrantedApplications (int? userId)

Get Granted Applications

This endpoint retrieves the granted applications associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetGrantedApplicationsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get Granted Applications
                GrantedApplications result = apiInstance.GetGrantedApplications(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetGrantedApplications: " + e.Message );
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

[**GrantedApplications**](GrantedApplications.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getgroups"></a>
# **GetGroups**
> List<string> GetGroups (int? userId)

Get User Feature Groups

This endpoint retrieves the feature groups associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetGroupsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get User Feature Groups
                List&lt;string&gt; result = apiInstance.GetGroups(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetGroups: " + e.Message );
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

**List<string>**

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getpersonalmeeting"></a>
# **GetPersonalMeeting**
> PersonalMeetingRoom GetPersonalMeeting (int? userId)

Get Personal Meeting

This endpoint gets the settings for a user's personal meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetPersonalMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get Personal Meeting
                PersonalMeetingRoom result = apiInstance.GetPersonalMeeting(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetPersonalMeeting: " + e.Message );
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

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getroom"></a>
# **GetRoom**
> Room GetRoom (int? userId)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetRoomExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get User’s Default Meeting Settings
                Room result = apiInstance.GetRoom(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetRoom: " + e.Message );
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

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getuser"></a>
# **GetUser**
> User GetUser (int? userId)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetUserExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

            try
            {
                // Get User Account Details
                User result = apiInstance.GetUser(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetUser: " + e.Message );
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

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getusertags"></a>
# **GetUserTags**
> TagListComp GetUserTags (int? userId)

List User Tags

This endpoint retrieves all tags associated with the specified user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class GetUserTagsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

            try
            {
                // List User Tags
                TagListComp result = apiInstance.GetUserTags(userId);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.GetUserTags: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="revokegrantedapplication"></a>
# **RevokeGrantedApplication**
> void RevokeGrantedApplication (int? userId, string clientId)

Remoke Granted Application

This endpoint revokes the granted application associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class RevokeGrantedApplicationExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var clientId = clientId_example;  // string | The ID of the granted application.

            try
            {
                // Remoke Granted Application
                apiInstance.RevokeGrantedApplication(userId, clientId);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.RevokeGrantedApplication: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **clientId** | **string**| The ID of the granted application. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="setgroups"></a>
# **SetGroups**
> void SetGroups (int? userId, string enable = null, string disable = null)

Set User Feature Groups

This endpoint sets the feature groups associated with the user.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class SetGroupsExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var enable = enable_example;  // string | The feature group you want to enable. (optional) 
            var disable = disable_example;  // string | The feature group you want to disable. (optional) 

            try
            {
                // Set User Feature Groups
                apiInstance.SetGroups(userId, enable, disable);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.SetGroups: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **enable** | **string**| The feature group you want to enable. | [optional] 
 **disable** | **string**| The feature group you want to disable. | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="updateperesonalmeeting"></a>
# **UpdatePeresonalMeeting**
> PersonalMeetingRoom UpdatePeresonalMeeting (int? userId, PersonalMeetingRoom personalMeeting)

Update Personal Meeting

This endpoint changes the settings for a user's personal meeting.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdatePeresonalMeetingExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var personalMeeting = new PersonalMeetingRoom(); // PersonalMeetingRoom | The user's personal meeting room details that you wish to update.

            try
            {
                // Update Personal Meeting
                PersonalMeetingRoom result = apiInstance.UpdatePeresonalMeeting(userId, personalMeeting);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.UpdatePeresonalMeeting: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **personalMeeting** | [**PersonalMeetingRoom**](PersonalMeetingRoom.md)| The user&#39;s personal meeting room details that you wish to update. | 

### Return type

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="updateroom"></a>
# **UpdateRoom**
> Room UpdateRoom (int? userId, Room room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateRoomExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var room = new Room(); // Room | The user's room details that you wish to update.

            try
            {
                // Update User’s Default Meeting Settings
                Room result = apiInstance.UpdateRoom(userId, room);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.UpdateRoom: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **room** | [**Room**](Room.md)| The user&#39;s room details that you wish to update. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="updateuser"></a>
# **UpdateUser**
> User UpdateUser (int? userId, User user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example
```csharp
using System;
using System.Diagnostics;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Client;
using com.bluejeans.api.rest.meetings.Model;

namespace Example
{
    public class UpdateUserExample
    {
        public void main()
        {
            // Configure API key authorization: access_token
            Configuration.Default.AddApiKey("access_token", "YOUR_ACCESS_TOKEN");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("access_token", "Bearer");

            var apiInstance = new UserApi();
            var userId = 56;  // int? | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
            var user = new User(); // User | The user details that you wish to update.

            try
            {
                // Update User Account Details
                User result = apiInstance.UpdateUser(userId, user);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling UserApi.UpdateUser: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int?**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **user** | [**User**](User.md)| The user details that you wish to update. | 

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

