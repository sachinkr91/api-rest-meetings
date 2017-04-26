# swagger_client.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_token_by_client**](AuthenticationApi.md#get_token_by_client) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**get_token_by_meeting**](AuthenticationApi.md#get_token_by_meeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**get_token_by_password**](AuthenticationApi.md#get_token_by_password) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**get_token_info**](AuthenticationApi.md#get_token_info) | **GET** /oauth2/tokenInfo | Validate a Token


# **get_token_by_client**
> GrantClient get_token_by_client(grant_request_client)

Authentication via Client Grant Type

This API is typically called from an application.  Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console and given to the customer.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.AuthenticationApi()
grant_request_client = swagger_client.GrantRequestClient() # GrantRequestClient | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Client Grant Type
    api_response = api_instance.get_token_by_client(grant_request_client)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_by_client: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_client** | [**GrantRequestClient**](GrantRequestClient.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantClient**](GrantClient.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_token_by_meeting**
> GrantMeeting get_token_by_meeting(grant_request_meeting)

Authentication via Meeting Grant Type

This API uses an OAuth-like grant/request method similar to the Password grant type. The scope of access covers the meeting only. Call this API with the meetings' numerid ID, and the meeting passcode (it one exists).  If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will grant attendee abilities.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.AuthenticationApi()
grant_request_meeting = swagger_client.GrantRequestMeeting() # GrantRequestMeeting | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Meeting Grant Type
    api_response = api_instance.get_token_by_meeting(grant_request_meeting)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_by_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_meeting** | [**GrantRequestMeeting**](GrantRequestMeeting.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantMeeting**](GrantMeeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_token_by_password**
> GrantPassword get_token_by_password(grant_request_password)

Authentication via Password Grant Type

This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password.  Set the grant_type to \"password\".

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.AuthenticationApi()
grant_request_password = swagger_client.GrantRequestPassword() # GrantRequestPassword | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Password Grant Type
    api_response = api_instance.get_token_by_password(grant_request_password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_by_password: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_password** | [**GrantRequestPassword**](GrantRequestPassword.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantPassword**](GrantPassword.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_token_info**
> InlineResponse200 get_token_info()

Validate a Token

This endpoint will validate if a token is valid or not.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
swagger_client.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# swagger_client.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = swagger_client.AuthenticationApi()

try: 
    # Validate a Token
    api_response = api_instance.get_token_info()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_info: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

