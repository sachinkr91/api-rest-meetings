# swagger_client.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_enterprise_user**](EnterpriseApi.md#create_enterprise_user) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
[**get_enterprise_profile**](EnterpriseApi.md#get_enterprise_profile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
[**list_users**](EnterpriseApi.md#list_users) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
[**remove_enterprise_user**](EnterpriseApi.md#remove_enterprise_user) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User


# **create_enterprise_user**
> Room create_enterprise_user(enterprise_id, force_password_change=force_password_change, send_verification_mail=send_verification_mail)

Create Enterprise User

This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.

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
api_instance = swagger_client.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
force_password_change = true # bool | Forces the user to change his or her password on first log in. (optional)
send_verification_mail = true # bool | Prevents welcome emails from being sent to the newly created user. (optional)

try: 
    # Create Enterprise User
    api_response = api_instance.create_enterprise_user(enterprise_id, force_password_change=force_password_change, send_verification_mail=send_verification_mail)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling EnterpriseApi->create_enterprise_user: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **force_password_change** | **bool**| Forces the user to change his or her password on first log in. | [optional] 
 **send_verification_mail** | **bool**| Prevents welcome emails from being sent to the newly created user. | [optional] 

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
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.EnterpriseApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Get Enterprise Profile
    api_response = api_instance.get_enterprise_profile(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling EnterpriseApi->get_enterprise_profile: %s\n" % e
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

# **list_users**
> EnterpriseUserList list_users(enterprise_id, page_size=page_size, page_number=page_number, email_id=email_id)

List Enterprise Users

This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.

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
api_instance = swagger_client.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
page_size = 56 # int | Sets number of items returned per page. (optional)
page_number = 56 # int | Selects which page of results to return. (optional)
email_id = 'email_id_example' # str | Allows filtering the response by a user’s email address. (optional)

try: 
    # List Enterprise Users
    api_response = api_instance.list_users(enterprise_id, page_size=page_size, page_number=page_number, email_id=email_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling EnterpriseApi->list_users: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **page_size** | **int**| Sets number of items returned per page. | [optional] 
 **page_number** | **int**| Selects which page of results to return. | [optional] 
 **email_id** | **str**| Allows filtering the response by a user’s email address. | [optional] 

### Return type

[**EnterpriseUserList**](EnterpriseUserList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **remove_enterprise_user**
> Room remove_enterprise_user(enterprise_id, user_id)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

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
api_instance = swagger_client.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Remove Enterprise User
    api_response = api_instance.remove_enterprise_user(enterprise_id, user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling EnterpriseApi->remove_enterprise_user: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Room**](Room.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

