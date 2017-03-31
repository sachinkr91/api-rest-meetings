# swagger_client.CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1_enterprise_enterprise_id_indigo_meetings_get**](CommandCenterApi.md#v1_enterprise_enterprise_id_indigo_meetings_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**v1_enterprise_enterprise_id_indigo_meetings_live_get**](CommandCenterApi.md#v1_enterprise_enterprise_id_indigo_meetings_live_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get**](CommandCenterApi.md#v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_guid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get**](CommandCenterApi.md#v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by Enterprise
[**v1_user_user_id_indigo_meetings_get**](CommandCenterApi.md#v1_user_user_id_indigo_meetings_get) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**v1_user_user_id_indigo_meetings_meeting_guid_get**](CommandCenterApi.md#v1_user_user_id_indigo_meetings_meeting_guid_get) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by User


# **v1_enterprise_enterprise_id_indigo_meetings_get**
> Meeting v1_enterprise_enterprise_id_indigo_meetings_get(enterprise_id, offset=offset, limit=limit, filter=filter)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise.

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
api_instance = swagger_client.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
offset = 56 # int | Page Number (optional)
limit = 56 # int | Per page (optional)
filter = 'filter_example' # str | URL-encoded JSON string (optional)

try: 
    # List Past Meetings by Enterprise
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_meetings_get(enterprise_id, offset=offset, limit=limit, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_enterprise_enterprise_id_indigo_meetings_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **offset** | **int**| Page Number | [optional] 
 **limit** | **int**| Per page | [optional] 
 **filter** | **str**| URL-encoded JSON string | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_enterprise_enterprise_id_indigo_meetings_live_get**
> Meeting v1_enterprise_enterprise_id_indigo_meetings_live_get(enterprise_id)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise.

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
api_instance = swagger_client.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # Live Meetings Summary by Enterprise
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_meetings_live_get(enterprise_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_enterprise_enterprise_id_indigo_meetings_live_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get**
> Meeting v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get(enterprise_id, meeting_guid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress.

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
api_instance = swagger_client.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try: 
    # List Live Meeting Endpoints by Enterprise
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get(enterprise_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_enterprise_enterprise_id_indigo_meetings_live_meeting_guid_endpoints_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get**
> MeetingIndigo v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get(enterprise_id, meeting_guid, include_endpoints=include_endpoints)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise.

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
api_instance = swagger_client.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
include_endpoints = true # bool | Option to include detailed data on endpoints (optional)

try: 
    # List Meeting Endpoints & Stats by Enterprise
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get(enterprise_id, meeting_guid, include_endpoints=include_endpoints)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_enterprise_enterprise_id_indigo_meetings_meeting_guid_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 
 **include_endpoints** | **bool**| Option to include detailed data on endpoints | [optional] 

### Return type

[**MeetingIndigo**](MeetingIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_indigo_meetings_get**
> Meeting v1_user_user_id_indigo_meetings_get(user_id)

List Past Meetings by User

This endpoint lists completed meetings by user.

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
api_instance = swagger_client.CommandCenterApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # List Past Meetings by User
    api_response = api_instance.v1_user_user_id_indigo_meetings_get(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_user_user_id_indigo_meetings_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_indigo_meetings_meeting_guid_get**
> MeetingIndigo v1_user_user_id_indigo_meetings_meeting_guid_get(user_id, meeting_guid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user.

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
api_instance = swagger_client.CommandCenterApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try: 
    # List Meeting Endpoints & Stats by User
    api_response = api_instance.v1_user_user_id_indigo_meetings_meeting_guid_get(user_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->v1_user_user_id_indigo_meetings_meeting_guid_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**MeetingIndigo**](MeetingIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

