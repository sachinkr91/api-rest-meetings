# BlueJeansMeetingsRestApi.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**change_user_tags**](UserApi.md#change_user_tags) | **PUT** /v1/user/{userId}/tags | Set User Tags
[**create_room**](UserApi.md#create_room) | **POST** /v1/user/{user_id}/room | Create User’s Default Meeting Settings
[**get_enterprise_profile**](UserApi.md#get_enterprise_profile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**get_granted_applications**](UserApi.md#get_granted_applications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**get_groups**](UserApi.md#get_groups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
[**get_personal_meeting**](UserApi.md#get_personal_meeting) | **GET** /v1/user/{user_id}/personal_meeting | Get Personal Meeting
[**get_room**](UserApi.md#get_room) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**get_user**](UserApi.md#get_user) | **GET** /v1/user/{user_id} | Get User Account Details
[**get_user_tags**](UserApi.md#get_user_tags) | **GET** /v1/user/{userId}/tags | List User Tags
[**revoke_granted_application**](UserApi.md#revoke_granted_application) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**set_groups**](UserApi.md#set_groups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
[**update_peresonal_meeting**](UserApi.md#update_peresonal_meeting) | **PUT** /v1/user/{user_id}/personal_meeting | Update Personal Meeting
[**update_room**](UserApi.md#update_room) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**update_user**](UserApi.md#update_user) | **PUT** /v1/user/{user_id} | Update User Account Details


# **change_user_tags**
> TagListComp change_user_tags(user_id, action, tag)

Set User Tags

This endpoint modifies the list of tags associated with the specified user. <b>NOTE</b> Adding a tag that is not defined in the user's Enterprise returns a 200 (success) status code.  It is recommended you validate the returned list of tags.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
action = 'action_example' # str | Type of operation to be done
tag = 'tag_example' # str | The name of tag

try: 
    # Set User Tags
    api_response = api_instance.change_user_tags(user_id, action, tag)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->change_user_tags: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **action** | **str**| Type of operation to be done | 
 **tag** | **str**| The name of tag | 

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_room**
> Room create_room(user_id, room)

Create User’s Default Meeting Settings

This endpoint creates the user’s default meeting settings.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
room = BlueJeansMeetingsRestApi.Room() # Room | The user's room details

try: 
    # Create User’s Default Meeting Settings
    api_response = api_instance.create_room(user_id, room)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->create_room: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **room** | [**Room**](Room.md)| The user&#39;s room details | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_enterprise_profile**
> Enterprise get_enterprise_profile(user_id)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Enterprise Profile
    api_response = api_instance.get_enterprise_profile(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_enterprise_profile: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Enterprise**](Enterprise.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_granted_applications**
> GrantedApplications get_granted_applications(user_id)

Get Granted Applications

This endpoint retrieves the granted applications associated with the user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Granted Applications
    api_response = api_instance.get_granted_applications(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_granted_applications: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**GrantedApplications**](GrantedApplications.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_groups**
> list[str] get_groups(user_id)

Get User Feature Groups

This endpoint retrieves the feature groups associated with the user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get User Feature Groups
    api_response = api_instance.get_groups(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_groups: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

**list[str]**

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_personal_meeting**
> PersonalMeetingRoom get_personal_meeting(user_id)

Get Personal Meeting

This endpoint gets the settings for a user's personal meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Personal Meeting
    api_response = api_instance.get_personal_meeting(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_personal_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_room**
> Room get_room(user_id)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get User’s Default Meeting Settings
    api_response = api_instance.get_room(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_room: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_user**
> User get_user(user_id)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get User Account Details
    api_response = api_instance.get_user(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_user: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_user_tags**
> TagListComp get_user_tags(user_id)

List User Tags

This endpoint retrieves all tags associated with the specified user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # List User Tags
    api_response = api_instance.get_user_tags(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->get_user_tags: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user ID for the account to retrieve tags.  This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**TagListComp**](TagListComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **revoke_granted_application**
> revoke_granted_application(user_id, client_id)

Remoke Granted Application

This endpoint revokes the granted application associated with the user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
client_id = 'client_id_example' # str | The ID of the granted application.

try: 
    # Remoke Granted Application
    api_instance.revoke_granted_application(user_id, client_id)
except ApiException as e:
    print("Exception when calling UserApi->revoke_granted_application: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **client_id** | **str**| The ID of the granted application. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **set_groups**
> set_groups(user_id, enable=enable, disable=disable)

Set User Feature Groups

This endpoint sets the feature groups associated with the user.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
enable = 'enable_example' # str | The feature group you want to enable. (optional)
disable = 'disable_example' # str | The feature group you want to disable. (optional)

try: 
    # Set User Feature Groups
    api_instance.set_groups(user_id, enable=enable, disable=disable)
except ApiException as e:
    print("Exception when calling UserApi->set_groups: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **enable** | **str**| The feature group you want to enable. | [optional] 
 **disable** | **str**| The feature group you want to disable. | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_peresonal_meeting**
> PersonalMeetingRoom update_peresonal_meeting(user_id, personal_meeting)

Update Personal Meeting

This endpoint changes the settings for a user's personal meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
personal_meeting = BlueJeansMeetingsRestApi.PersonalMeetingRoom() # PersonalMeetingRoom | The user's personal meeting room details that you wish to update.

try: 
    # Update Personal Meeting
    api_response = api_instance.update_peresonal_meeting(user_id, personal_meeting)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->update_peresonal_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **personal_meeting** | [**PersonalMeetingRoom**](PersonalMeetingRoom.md)| The user&#39;s personal meeting room details that you wish to update. | 

### Return type

[**PersonalMeetingRoom**](PersonalMeetingRoom.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_room**
> Room update_room(user_id, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
room = BlueJeansMeetingsRestApi.Room() # Room | The user's room details that you wish to update.

try: 
    # Update User’s Default Meeting Settings
    api_response = api_instance.update_room(user_id, room)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->update_room: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **room** | [**Room**](Room.md)| The user&#39;s room details that you wish to update. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_user**
> User update_user(user_id, user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
user = BlueJeansMeetingsRestApi.User() # User | The user details that you wish to update.

try: 
    # Update User Account Details
    api_response = api_instance.update_user(user_id, user)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UserApi->update_user: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **user** | [**User**](User.md)| The user details that you wish to update. | 

### Return type

[**User**](User.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

