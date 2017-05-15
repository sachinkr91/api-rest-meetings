# swagger_client.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_client_application**](AuthenticationApi.md#create_client_application) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
[**get_authorization_code**](AuthenticationApi.md#get_authorization_code) | **GET** /oauth2/authorize | Get Authorization Code
[**get_token_by_client**](AuthenticationApi.md#get_token_by_client) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**get_token_by_code**](AuthenticationApi.md#get_token_by_code) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**get_token_by_meeting**](AuthenticationApi.md#get_token_by_meeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**get_token_by_password**](AuthenticationApi.md#get_token_by_password) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**get_token_by_refresh**](AuthenticationApi.md#get_token_by_refresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**get_token_info**](AuthenticationApi.md#get_token_info) | **GET** /oauth2/tokenInfo | Validate a Token
[**regenerate_client_application_secret**](AuthenticationApi.md#regenerate_client_application_secret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
[**revoke_access_token**](AuthenticationApi.md#revoke_access_token) | **DELETE** /oauth2/token?Revoke | Revoke Access Token
[**update_client_application**](AuthenticationApi.md#update_client_application) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application


# **create_client_application**
> Application create_client_application(user_id, application)

Create Client Application

This endpoint creates a client application for use in 3-legged OAuth2 authorization.

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
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
application = swagger_client.Application() # Application | The information about the new client application.

try: 
    # Create Client Application
    api_response = api_instance.create_client_application(user_id, application)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->create_client_application: %s\n" % e)
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

# **get_authorization_code**
> get_authorization_code(client_id=client_id, redirect_uri=redirect_uri, state=state, scope=scope, response_type=response_type)

Get Authorization Code

This is NOT a REST endpoint. Documenting here for consistentcy. This URL shoujld be used by a client application user's browser to perform authorization.  User will be redirected back to client application upon completion with state and code parameters.

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
client_id = 'client_id_example' # str | The 32 character client ID generated when you created the client application. (optional)
redirect_uri = 'redirect_uri_example' # str | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
state = 'state_example' # str | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
scope = 'scope_example' # str | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info (optional)
response_type = 'code' # str | The type of authorization you are peforrming.  Set to \"code\". (optional) (default to code)

try: 
    # Get Authorization Code
    api_instance.get_authorization_code(client_id=client_id, redirect_uri=redirect_uri, state=state, scope=scope, response_type=response_type)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_authorization_code: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **str**| The 32 character client ID generated when you created the client application. | [optional] 
 **redirect_uri** | **str**| The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. | [optional] 
 **state** | **str**| Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. | [optional] 
 **scope** | **str**| A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info | [optional] 
 **response_type** | **str**| The type of authorization you are peforrming.  Set to \&quot;code\&quot;. | [optional] [default to code]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

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

# **get_token_by_code**
> GrantCode get_token_by_code(grant_request_code)

Authentication via Code Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

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
grant_request_code = swagger_client.GrantRequestCode() # GrantRequestCode | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Code Grant Type
    api_response = api_instance.get_token_by_code(grant_request_code)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_by_code: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_code** | [**GrantRequestCode**](GrantRequestCode.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantCode**](GrantCode.md)

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

# **get_token_by_refresh**
> GrantRefresh get_token_by_refresh(grant_request_refresh)

Authentication via Refresh Grant Type

This API is part of the 3-legged OAuth 2.0 authorization flow.

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
grant_request_refresh = swagger_client.GrantRequestRefresh() # GrantRequestRefresh | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Refresh Grant Type
    api_response = api_instance.get_token_by_refresh(grant_request_refresh)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_by_refresh: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_refresh** | [**GrantRequestRefresh**](GrantRequestRefresh.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**GrantRefresh**](GrantRefresh.md)

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

# **regenerate_client_application_secret**
> ApplicationSecret regenerate_client_application_secret(user_id, client_id)

Regenerate Client Application Secret

This endpoint forces the regeneration of a client application secret for use in 3-legged OAuth2 authorization.

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
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
client_id = 56 # int | The ID of the client application of interest. This value was given as a response during client application creation.

try: 
    # Regenerate Client Application Secret
    api_response = api_instance.regenerate_client_application_secret(user_id, client_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->regenerate_client_application_secret: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **client_id** | **int**| The ID of the client application of interest. This value was given as a response during client application creation. | 

### Return type

[**ApplicationSecret**](ApplicationSecret.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **revoke_access_token**
> revoke_access_token(grant_request_revoke, access_token=access_token)

Revoke Access Token

This API is part of the 3-legged OAuth 2.0 authorization flow.

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
grant_request_revoke = swagger_client.GrantRequestRevoke() # GrantRequestRevoke | Contains information about the type of grant you are revoking.
access_token = 'access_token_example' # str |  (optional)

try: 
    # Revoke Access Token
    api_instance.revoke_access_token(grant_request_revoke, access_token=access_token)
except ApiException as e:
    print("Exception when calling AuthenticationApi->revoke_access_token: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_request_revoke** | [**GrantRequestRevoke**](GrantRequestRevoke.md)| Contains information about the type of grant you are revoking. | 
 **access_token** | **str**|  | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_client_application**
> Application update_client_application(user_id, client_id, application)

Update Client Application

This endpoint updates a client application for use in 3-legged OAuth2 authorization.

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
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
client_id = 56 # int | The ID of the client application of interest. This value was given as a response during client application creation.
application = swagger_client.Application() # Application | The information about the new client application.

try: 
    # Update Client Application
    api_response = api_instance.update_client_application(user_id, client_id, application)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->update_client_application: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **client_id** | **int**| The ID of the client application of interest. This value was given as a response during client application creation. | 
 **application** | [**Application**](Application.md)| The information about the new client application. | 

### Return type

[**Application**](Application.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

