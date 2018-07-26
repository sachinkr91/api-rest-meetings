# BlueJeansMeetingsRestApi.ApplicationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_client_application**](ApplicationApi.md#create_client_application) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**list_client_applications**](ApplicationApi.md#list_client_applications) | **GET** /v1/user/{user_id}/developer_applications | List Client Applications
[**regenerate_client_application_secret**](ApplicationApi.md#regenerate_client_application_secret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**update_client_application**](ApplicationApi.md#update_client_application) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


# **create_client_application**
> Application create_client_application(user_id, application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

### Example
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
configuration = BlueJeansMeetingsRestApi.Configuration()
configuration.api_key['access_token'] = 'YOUR_ACCESS_TOKEN'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.ApplicationApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
application = BlueJeansMeetingsRestApi.Application() # Application | The information about the new client application.

try:
    # Create Client Application
    api_response = api_instance.create_client_application(user_id, application)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ApplicationApi->create_client_application: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **list_client_applications**
> ApplicationList list_client_applications(user_id)

List Client Applications

This endpoint lists all the client applications associated with the access_token.

### Example
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
configuration = BlueJeansMeetingsRestApi.Configuration()
configuration.api_key['access_token'] = 'YOUR_ACCESS_TOKEN'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.ApplicationApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try:
    # List Client Applications
    api_response = api_instance.list_client_applications(user_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ApplicationApi->list_client_applications: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**ApplicationList**](ApplicationList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **regenerate_client_application_secret**
> ApplicationSecret regenerate_client_application_secret(user_id, client_id)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

### Example
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
configuration = BlueJeansMeetingsRestApi.Configuration()
configuration.api_key['access_token'] = 'YOUR_ACCESS_TOKEN'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.ApplicationApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
client_id = 'client_id_example' # str | The ID of the client application of interest. This value was given as a response during client application creation.

try:
    # Regenerate Client Application Secret
    api_response = api_instance.regenerate_client_application_secret(user_id, client_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ApplicationApi->regenerate_client_application_secret: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **client_id** | **str**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_client_application**
> Application update_client_application(user_id, client_id, application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

### Example
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
configuration = BlueJeansMeetingsRestApi.Configuration()
configuration.api_key['access_token'] = 'YOUR_ACCESS_TOKEN'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.ApplicationApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
client_id = 'client_id_example' # str | The ID of the client application of interest. This value was given as a response during client application creation.
application = BlueJeansMeetingsRestApi.Application() # Application | The information about the new client application.

try:
    # Update Client Application
    api_response = api_instance.update_client_application(user_id, client_id, application)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ApplicationApi->update_client_application: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **client_id** | **str**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

