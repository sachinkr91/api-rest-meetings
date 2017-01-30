# swagger_client.MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Current Endpoint Layout
[**v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**v1_user_user_id_live_meetings_meeting_id_endpoints_get**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_get) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
[**v1_user_user_id_live_meetings_meeting_id_endpoints_put**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_endpoints_put) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | Update Meeting Endpoints State
[**v1_user_user_id_live_meetings_meeting_id_get**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_get) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
[**v1_user_user_id_live_meetings_meeting_id_invite_post**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_invite_post) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
[**v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
[**v1_user_user_id_live_meetings_meeting_id_put**](MeetingApi.md#v1_user_user_id_live_meetings_meeting_id_put) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
[**v1_user_user_id_scheduled_meeting_get**](MeetingApi.md#v1_user_user_id_scheduled_meeting_get) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting
[**v1_user_user_id_scheduled_meeting_meeting_id_delete**](MeetingApi.md#v1_user_user_id_scheduled_meeting_meeting_id_delete) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1_user_user_id_scheduled_meeting_meeting_id_emails_get**](MeetingApi.md#v1_user_user_id_scheduled_meeting_meeting_id_emails_get) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Meeting
[**v1_user_user_id_scheduled_meeting_meeting_id_get**](MeetingApi.md#v1_user_user_id_scheduled_meeting_meeting_id_get) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1_user_user_id_scheduled_meeting_meeting_id_put**](MeetingApi.md#v1_user_user_id_scheduled_meeting_meeting_id_put) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
[**v1_user_user_id_scheduled_meeting_post**](MeetingApi.md#v1_user_user_id_scheduled_meeting_post) | **POST** /v1/user/{user_id}/scheduled_meeting | Meeting


# **v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get**
> Meeting v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get(user_id, meeting_id, endpoint_guid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try: 
    # Get Endpoint Information
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get(user_id, meeting_id, endpoint_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get**
> Meeting v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get(user_id, meeting_id, endpoint_guid)

Get Current Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try: 
    # Get Current Endpoint Layout
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get(user_id, meeting_id, endpoint_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put**
> Meeting v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put(user_id, meeting_id, endpoint_guid, is_leader=is_leader, push=push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
is_leader = true # bool |  (optional)
push = true # bool |  (optional)

try: 
    # Update Endpoint Layout
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put(user_id, meeting_id, endpoint_guid, is_leader=is_leader, push=push)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_layout_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **is_leader** | **bool**|  | [optional] 
 **push** | **bool**|  | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put**
> Meeting v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put(user_id, meeting_id, endpoint_guid, mute_audio=mute_audio, mute_video=mute_video, leave_meeting=leave_meeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
mute_audio = true # bool | Toggle the audio source mute. (optional)
mute_video = true # bool | Toggle the video source mute. (optional)
leave_meeting = true # bool | Remove the user from the meeting. (optional)

try: 
    # Update Endpoint Video/Audio State
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put(user_id, meeting_id, endpoint_guid, mute_audio=mute_audio, mute_video=mute_video, leave_meeting=leave_meeting)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_endpoint_guid_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **mute_audio** | **bool**| Toggle the audio source mute. | [optional] 
 **mute_video** | **bool**| Toggle the video source mute. | [optional] 
 **leave_meeting** | **bool**| Remove the user from the meeting. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_endpoints_get**
> Meeting v1_user_user_id_live_meetings_meeting_id_endpoints_get(user_id, meeting_id)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # List Meeting Endpoints
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_get(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_endpoints_put**
> v1_user_user_id_live_meetings_meeting_id_endpoints_put(user_id, meeting_id, mute=mute, media=media)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Seems to require a Meeting-level access token.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
mute = true # bool | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
media = 'media_example' # str | Specify the type of media you which to mute/unmute. (optional)

try: 
    # Update Meeting Endpoints State
    api_instance.v1_user_user_id_live_meetings_meeting_id_endpoints_put(user_id, meeting_id, mute=mute, media=media)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_endpoints_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **mute** | **bool**| Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. | [optional] 
 **media** | **str**| Specify the type of media you which to mute/unmute. | [optional] 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_get**
> Meeting v1_user_user_id_live_meetings_meeting_id_get(user_id, meeting_id)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Get Meeting State
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_get(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_invite_post**
> Meeting v1_user_user_id_live_meetings_meeting_id_invite_post(user_id, meeting_id)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Send Email Invite
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_invite_post(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_invite_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post**
> Meeting v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post(user_id, meeting_id)

Generate SIP Pairing Code

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Generate SIP Pairing Code
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_pairing_code_sip_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_live_meetings_meeting_id_put**
> Meeting v1_user_user_id_live_meetings_meeting_id_put(user_id, meeting_id, meeting, delay=delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
meeting = swagger_client.Meeting() # Meeting | The meeting properties that you wish to update.
delay = 56 # int | Number of seconds to delay the end meeting operation. (optional)

try: 
    # Update Meeting State
    api_response = api_instance.v1_user_user_id_live_meetings_meeting_id_put(user_id, meeting_id, meeting, delay=delay)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_live_meetings_meeting_id_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meeting** | [**Meeting**](Meeting.md)| The meeting properties that you wish to update. | 
 **delay** | **int**| Number of seconds to delay the end meeting operation. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_scheduled_meeting_get**
> list[Meeting] v1_user_user_id_scheduled_meeting_get(user_id)

Meeting

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_get: %s\n" % e
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

# **v1_user_user_id_scheduled_meeting_meeting_id_delete**
> Meeting v1_user_user_id_scheduled_meeting_meeting_id_delete(user_id, meeting_id)

Meeting

Cancel a meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_meeting_id_delete(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_meeting_id_delete: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_scheduled_meeting_meeting_id_emails_get**
> Meeting v1_user_user_id_scheduled_meeting_meeting_id_emails_get(user_id, meeting_id, type=type, role=role, action=action)

Meeting

This endpoint retrieves the email object for a scheduled meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
type = 'type_example' # str | TEXT, ICS, HTML (optional)
role = 'role_example' # str | moderator, participant (optional)
action = 'action_example' # str | create, edit, delete (optional)

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_meeting_id_emails_get(user_id, meeting_id, type=type, role=role, action=action)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_meeting_id_emails_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **type** | **str**| TEXT, ICS, HTML | [optional] 
 **role** | **str**| moderator, participant | [optional] 
 **action** | **str**| create, edit, delete | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_scheduled_meeting_meeting_id_get**
> Meeting v1_user_user_id_scheduled_meeting_meeting_id_get(user_id, meeting_id)

Meeting

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_meeting_id_get(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_meeting_id_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_scheduled_meeting_meeting_id_put**
> Meeting v1_user_user_id_scheduled_meeting_meeting_id_put(user_id, meeting_id, meeting)

Meeting

Update a meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
meeting = swagger_client.Meeting() # Meeting | The user's room details that you wish to update.

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_meeting_id_put(user_id, meeting_id, meeting)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_meeting_id_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_scheduled_meeting_post**
> Meeting v1_user_user_id_scheduled_meeting_post(user_id, meeting, email=email)

Meeting

Create a meeting.

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
api_instance = swagger_client.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting = swagger_client.Meeting() # Meeting | The user's room details that you wish to update.
email = true # bool | If set to true, sends invitation emails to all listed participants. (optional)

try: 
    # Meeting
    api_response = api_instance.v1_user_user_id_scheduled_meeting_post(user_id, meeting, email=email)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling MeetingApi->v1_user_user_id_scheduled_meeting_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting** | [**Meeting**](Meeting.md)| The user&#39;s room details that you wish to update. | 
 **email** | **bool**| If set to true, sends invitation emails to all listed participants. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

