# BlueJeansOnVideoRestApi.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_authorization_code**](AuthenticationApi.md#get_authorization_code) | **GET** /oauth2/authorize | Get Authorization Code
[**get_token_by_client**](AuthenticationApi.md#get_token_by_client) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
[**get_token_by_code**](AuthenticationApi.md#get_token_by_code) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
[**get_token_by_meeting**](AuthenticationApi.md#get_token_by_meeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
[**get_token_by_password**](AuthenticationApi.md#get_token_by_password) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
[**get_token_by_refresh**](AuthenticationApi.md#get_token_by_refresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
[**get_token_info**](AuthenticationApi.md#get_token_info) | **GET** /oauth2/tokenInfo | Validate a Token
[**revoke_access_token**](AuthenticationApi.md#revoke_access_token) | **DELETE** /oauth2/token?Revoke | Revoke Access Token


# **get_authorization_code**
> get_authorization_code(client_id=client_id, redirect_uri=redirect_uri, state=state, scope=scope, response_type=response_type, app_name=app_name, app_logo_url=app_logo_url)

Get Authorization Code

This is NOT a REST endpoint. Documenting here for consistentcy. This URL should be used by a client application user's browser to perform authorization.  User will be redirected back to client application upon completion with state and code parameters. Use \"bluejeans.com\" as hostname. The code returned is only good for 30 seconds. You will want to call /oauth2/token with it as soon as possible.

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
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
client_id = 'client_id_example' # str | The 32 character client ID generated when you created the client application. (optional)
redirect_uri = 'redirect_uri_example' # str | The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
state = 'state_example' # str | Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
scope = 'scope_example' # str | A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info (optional)
response_type = 'code' # str | The type of authorization you are peforrming.  Set to \"code\". (optional) (default to code)
app_name = 'app_name_example' # str | The name of the client application shown to user during authorization. (optional)
app_logo_url = 'app_logo_url_example' # str | URL to an 84x84 image shown to user during authorization. (optional)

try: 
    # Get Authorization Code
    api_instance.get_authorization_code(client_id=client_id, redirect_uri=redirect_uri, state=state, scope=scope, response_type=response_type, app_name=app_name, app_logo_url=app_logo_url)
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
 **app_name** | **str**| The name of the client application shown to user during authorization. | [optional] 
 **app_logo_url** | **str**| URL to an 84x84 image shown to user during authorization. | [optional] 

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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_client = BlueJeansOnVideoRestApi.GrantRequestClient() # GrantRequestClient | Contains information about the type of grant you are requesting.

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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_code = BlueJeansOnVideoRestApi.GrantRequestCode() # GrantRequestCode | Contains information about the type of grant you are requesting.

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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_meeting = BlueJeansOnVideoRestApi.GrantRequestMeeting() # GrantRequestMeeting | Contains information about the type of grant you are requesting.

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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_password = BlueJeansOnVideoRestApi.GrantRequestPassword() # GrantRequestPassword | Contains information about the type of grant you are requesting.

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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_refresh = BlueJeansOnVideoRestApi.GrantRequestRefresh() # GrantRequestRefresh | Contains information about the type of grant you are requesting.

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
> InlineResponse200 get_token_info(access_token=access_token)

Validate a Token

This endpoint will validate if a token is valid or not.

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
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
access_token = 'access_token_example' # str |  (optional)

try: 
    # Validate a Token
    api_response = api_instance.get_token_info(access_token=access_token)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthenticationApi->get_token_info: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **str**|  | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
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
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.AuthenticationApi()
grant_request_revoke = BlueJeansOnVideoRestApi.GrantRequestRevoke() # GrantRequestRevoke | Contains information about the type of grant you are revoking.
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

