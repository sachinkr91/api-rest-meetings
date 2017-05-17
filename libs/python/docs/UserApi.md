# BlueJeansOnVideoRestApi.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_enterprise_profile**](UserApi.md#get_enterprise_profile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**get_granted_applications**](UserApi.md#get_granted_applications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
[**get_room**](UserApi.md#get_room) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**get_user**](UserApi.md#get_user) | **GET** /v1/user/{user_id} | Get User Account Details
[**revoke_granted_application**](UserApi.md#revoke_granted_application) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
[**update_room**](UserApi.md#update_room) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**update_user**](UserApi.md#update_user) | **PUT** /v1/user/{user_id} | Update User Account Details


# **get_enterprise_profile**
> Enterprise get_enterprise_profile(user_id)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example 
```python
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
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
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
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

# **get_room**
> Room get_room(user_id)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example 
```python
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
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
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
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

# **revoke_granted_application**
> revoke_granted_application(user_id, client_id)

Remoke Granted Application

This endpoint revokes the granted application associated with the user.

### Example 
```python
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
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

# **update_room**
> Room update_room(user_id, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example 
```python
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
room = BlueJeansOnVideoRestApi.Room() # Room | The user's room details that you wish to update.

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
from __future__ import print_statement
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
user = BlueJeansOnVideoRestApi.User() # User | The user details that you wish to update.

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

