# swagger_client.UserApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1_user_user_id_enterprise_profile_get**](UserApi.md#v1_user_user_id_enterprise_profile_get) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**v1_user_user_id_get**](UserApi.md#v1_user_user_id_get) | **GET** /v1/user/{user_id} | Get User Account Details
[**v1_user_user_id_put**](UserApi.md#v1_user_user_id_put) | **PUT** /v1/user/{user_id} | Update User Account Details
[**v1_user_user_id_room_get**](UserApi.md#v1_user_user_id_room_get) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
[**v1_user_user_id_room_put**](UserApi.md#v1_user_user_id_room_put) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
[**v1_user_user_id_scheduled_meeting_get**](UserApi.md#v1_user_user_id_scheduled_meeting_get) | **GET** /v1/user/{user_id}/scheduled_meeting | Get Meeting Settings


# **v1_user_user_id_enterprise_profile_get**
> Enterprise v1_user_user_id_enterprise_profile_get(user_id)

Get Enterprise Profile

This endpoint retrieves the enterprise profile associated with the user.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Enterprise Profile
    api_response = api_instance.v1_user_user_id_enterprise_profile_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_enterprise_profile_get: %s\n" % e
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

# **v1_user_user_id_get**
> User v1_user_user_id_get(user_id)

Get User Account Details

This endpoint retrieves the basic account details for a given user.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get User Account Details
    api_response = api_instance.v1_user_user_id_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_get: %s\n" % e
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

# **v1_user_user_id_put**
> User v1_user_user_id_put(user_id, user)

Update User Account Details

This endpoint allows updating a user’s basic account details.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
user = swagger_client.User() # User | The user details that you wish to update.

try: 
    # Update User Account Details
    api_response = api_instance.v1_user_user_id_put(user_id, user)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_put: %s\n" % e
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

# **v1_user_user_id_room_get**
> Room v1_user_user_id_room_get(user_id)

Get User’s Default Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get User’s Default Meeting Settings
    api_response = api_instance.v1_user_user_id_room_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_room_get: %s\n" % e
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

# **v1_user_user_id_room_put**
> Room v1_user_user_id_room_put(user_id, room)

Update User’s Default Meeting Settings

This endpoint allows updating a user’s default meeting settings.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
room = swagger_client.Room() # Room | The user's room details that you wish to update.

try: 
    # Update User’s Default Meeting Settings
    api_response = api_instance.v1_user_user_id_room_put(user_id, room)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_room_put: %s\n" % e
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

# **v1_user_user_id_scheduled_meeting_get**
> list[Meeting] v1_user_user_id_scheduled_meeting_get(user_id)

Get Meeting Settings

This endpoint gets a user’s default meeting settings.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.UserApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Meeting Settings
    api_response = api_instance.v1_user_user_id_scheduled_meeting_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UserApi->v1_user_user_id_scheduled_meeting_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**list[Meeting]**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

