# BlueJeansMeetingsRestApi.EnterpriseApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**change_enterprise_tags**](EnterpriseApi.md#change_enterprise_tags) | **PUT** /v1/enterprise/{enterpriseId}/tags | Set Enterprise Tags
[**create_enterprise_user**](EnterpriseApi.md#create_enterprise_user) | **POST** /v1/enterprise/{enterpriseId}/users | Create User
[**export_users**](EnterpriseApi.md#export_users) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
[**get_enterprise_tags**](EnterpriseApi.md#get_enterprise_tags) | **GET** /v1/enterprise/{enterpriseId}/tags | List Enterprise Tags
[**remove_user**](EnterpriseApi.md#remove_user) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
[**search_users**](EnterpriseApi.md#search_users) | **GET** /v1/enterprise/{enterpriseId}/users | Search for User(s)


# **change_enterprise_tags**
> ComponentstagList change_enterprise_tags(enterprise_id, action, tag)

Set Enterprise Tags

This endpoint modifies the list of profile tags associated with the specified enterprise.

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
action = 'action_example' # str | Type of operation to be done
tag = 'tag_example' # str | The name of tag

try: 
    # Set Enterprise Tags
    api_response = api_instance.change_enterprise_tags(enterprise_id, action, tag)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling EnterpriseApi->change_enterprise_tags: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **action** | **str**| Type of operation to be done | 
 **tag** | **str**| The name of tag | 

### Return type

[**ComponentstagList**](ComponentstagList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_enterprise_user**
> UserId create_enterprise_user(enterprise_id, enterprise_user, billing_category=billing_category, force_password_change=force_password_change, is_admin=is_admin)

Create User

This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user's personal meeting room.

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
enterprise_user = BlueJeansMeetingsRestApi.EnterpriseCreateUser() # EnterpriseCreateUser | Basic Enterprise Account information
billing_category = 'ENTERPRISE' # str | What general billing group does this profile belong? (optional) (default to ENTERPRISE)
force_password_change = true # bool | Create profile and force user to change password on next login (optional)
is_admin = true # bool | Create this account to have Administrative Privileges for the enterprise (optional)

try: 
    # Create User
    api_response = api_instance.create_enterprise_user(enterprise_id, enterprise_user, billing_category=billing_category, force_password_change=force_password_change, is_admin=is_admin)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling EnterpriseApi->create_enterprise_user: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **enterprise_user** | [**EnterpriseCreateUser**](EnterpriseCreateUser.md)| Basic Enterprise Account information | 
 **billing_category** | **str**| What general billing group does this profile belong? | [optional] [default to ENTERPRISE]
 **force_password_change** | **bool**| Create profile and force user to change password on next login | [optional] 
 **is_admin** | **bool**| Create this account to have Administrative Privileges for the enterprise | [optional] 

### Return type

[**UserId**](UserId.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **export_users**
> export_users(enterprise_id)

Export Enterprise Users

This endpoint exports existing users into a CSV file.

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # Export Enterprise Users
    api_instance.export_users(enterprise_id)
except ApiException as e:
    print("Exception when calling EnterpriseApi->export_users: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_enterprise_tags**
> ComponentstagList get_enterprise_tags(enterprise_id)

List Enterprise Tags

This endpoint retrieves all profile tags defined for the specified enterprise.

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # List Enterprise Tags
    api_response = api_instance.get_enterprise_tags(enterprise_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling EnterpriseApi->get_enterprise_tags: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**ComponentstagList**](ComponentstagList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **remove_user**
> remove_user(enterprise_id, user_id)

Remove Enterprise User

This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Remove Enterprise User
    api_instance.remove_user(enterprise_id, user_id)
except ApiException as e:
    print("Exception when calling EnterpriseApi->remove_user: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **search_users**
> EnterpriseUserSearch search_users(enterprise_id, fields=fields, order=order, sort_by=sort_by, text_search=text_search, email_id=email_id, page_size=page_size, page_number=page_number)

Search for User(s)

This endpoint provides a search facility for the specified enterprise.  <ul><li>If textSearch is provided, the results will be a partial string-match search of the given textSearch value.</li><li> Otherwise, the search will return an exact lookup by emailId.</li></ul>

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
api_instance = BlueJeansMeetingsRestApi.EnterpriseApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
fields = 'fields_example' # str | A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
order = 'order_example' # str | If specificed, order defines how the API sorts results- ascending or descending (optional)
sort_by = 'sort_by_example' # str | Name of BlueJeans profile field by with API response data is sorted (optional)
text_search = 'text_search_example' # str | If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
email_id = 'email_id_example' # str | If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value. (optional)
page_size = 56 # int | Sets number of items returned per page. (optional)
page_number = 56 # int | Selects which page of results to return (1-based value) (optional)

try: 
    # Search for User(s)
    api_response = api_instance.search_users(enterprise_id, fields=fields, order=order, sort_by=sort_by, text_search=text_search, email_id=email_id, page_size=page_size, page_number=page_number)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling EnterpriseApi->search_users: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **fields** | **str**| A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email | [optional] 
 **order** | **str**| If specificed, order defines how the API sorts results- ascending or descending | [optional] 
 **sort_by** | **str**| Name of BlueJeans profile field by with API response data is sorted | [optional] 
 **text_search** | **str**| If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users | [optional] 
 **email_id** | **str**| If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. | [optional] 
 **page_size** | **int**| Sets number of items returned per page. | [optional] 
 **page_number** | **int**| Selects which page of results to return (1-based value) | [optional] 

### Return type

[**EnterpriseUserSearch**](EnterpriseUserSearch.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

