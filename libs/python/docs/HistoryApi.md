# swagger_client.HistoryApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1_enterprise_enterprise_id_meeting_history_get**](HistoryApi.md#v1_enterprise_enterprise_id_meeting_history_get) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List Meetings
[**v1_enterprise_enterprise_id_meeting_history_meeting_guid_get**](HistoryApi.md#v1_enterprise_enterprise_id_meeting_history_meeting_guid_get) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | List Meetings
[**v1_user_user_id_meeting_history_get**](HistoryApi.md#v1_user_user_id_meeting_history_get) | **GET** /v1/user/{user_id}/meeting_history | List Meetings
[**v1_user_user_id_meeting_history_meeting_guid_get**](HistoryApi.md#v1_user_user_id_meeting_history_meeting_guid_get) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | List Meetings
[**v1_user_user_id_meeting_history_recordings_get**](HistoryApi.md#v1_user_user_id_meeting_history_recordings_get) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings
[**v1_user_user_id_meeting_history_recordings_recording_entity_id_get**](HistoryApi.md#v1_user_user_id_meeting_history_recordings_recording_entity_id_get) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | List Meeting Recordings


# **v1_enterprise_enterprise_id_meeting_history_get**
> Meeting v1_enterprise_enterprise_id_meeting_history_get(enterprise_id)

List Meetings

This endpoint retrieves a list of meetings.

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
api_instance = swagger_client.HistoryApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # List Meetings
    api_response = api_instance.v1_enterprise_enterprise_id_meeting_history_get(enterprise_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_enterprise_enterprise_id_meeting_history_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_meeting_history_meeting_guid_get**
> Meeting v1_enterprise_enterprise_id_meeting_history_meeting_guid_get(enterprise_id, meeting_guid)

List Meetings

This endpoint retrieves a list of meetings.

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
api_instance = swagger_client.HistoryApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try: 
    # List Meetings
    api_response = api_instance.v1_enterprise_enterprise_id_meeting_history_meeting_guid_get(enterprise_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_enterprise_enterprise_id_meeting_history_meeting_guid_get: %s\n" % e
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

# **v1_user_user_id_meeting_history_get**
> Meeting v1_user_user_id_meeting_history_get(user_id, meeting_id=meeting_id, start_date=start_date, end_date=end_date, page_size=page_size, page_number=page_number, order=order)

List Meetings

This endpoint retrieves a list of meetings.

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
api_instance = swagger_client.HistoryApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 'meeting_id_example' # str | Return meetings with the specified Meeting ID (recurring & Personal Meeting ID). (optional)
start_date = 'start_date_example' # str | Return meetings starting from the specified date. MM/DD/YYYY (optional)
end_date = 'end_date_example' # str | Return meetings up until the specified date. MM/DD/YYYY (optional)
page_size = 56 # int | Sets number of items returned per page. (optional)
page_number = 56 # int | Selects which page of results to return. (optional)
order = 'order_example' # str | Puts results in ascending or descending order. asc/desc (optional)

try: 
    # List Meetings
    api_response = api_instance.v1_user_user_id_meeting_history_get(user_id, meeting_id=meeting_id, start_date=start_date, end_date=end_date, page_size=page_size, page_number=page_number, order=order)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_user_user_id_meeting_history_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **str**| Return meetings with the specified Meeting ID (recurring &amp; Personal Meeting ID). | [optional] 
 **start_date** | **str**| Return meetings starting from the specified date. MM/DD/YYYY | [optional] 
 **end_date** | **str**| Return meetings up until the specified date. MM/DD/YYYY | [optional] 
 **page_size** | **int**| Sets number of items returned per page. | [optional] 
 **page_number** | **int**| Selects which page of results to return. | [optional] 
 **order** | **str**| Puts results in ascending or descending order. asc/desc | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_meeting_history_meeting_guid_get**
> Meeting v1_user_user_id_meeting_history_meeting_guid_get(user_id, meeting_guid)

List Meetings

This endpoint retrieves a list of meetings.

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
api_instance = swagger_client.HistoryApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try: 
    # List Meetings
    api_response = api_instance.v1_user_user_id_meeting_history_meeting_guid_get(user_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_user_user_id_meeting_history_meeting_guid_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_meeting_history_recordings_get**
> list[RecordingSummary] v1_user_user_id_meeting_history_recordings_get(user_id, page_size=page_size, page_number=page_number, sort_by=sort_by, order=order)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

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
api_instance = swagger_client.HistoryApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
page_size = 10 # int | Sets number of items returned per page. (optional) (default to 10)
page_number = 1 # int | Selects which page of results to return. (optional) (default to 1)
sort_by = 'start_time' # str | Selects which page of results to return. (optional) (default to start_time)
order = 'desc' # str | Puts results in ascending or descending order. (optional) (default to desc)

try: 
    # List Meeting Recordings
    api_response = api_instance.v1_user_user_id_meeting_history_recordings_get(user_id, page_size=page_size, page_number=page_number, sort_by=sort_by, order=order)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_user_user_id_meeting_history_recordings_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **page_size** | **int**| Sets number of items returned per page. | [optional] [default to 10]
 **page_number** | **int**| Selects which page of results to return. | [optional] [default to 1]
 **sort_by** | **str**| Selects which page of results to return. | [optional] [default to start_time]
 **order** | **str**| Puts results in ascending or descending order. | [optional] [default to desc]

### Return type

[**list[RecordingSummary]**](RecordingSummary.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_meeting_history_recordings_recording_entity_id_get**
> Recording v1_user_user_id_meeting_history_recordings_recording_entity_id_get(user_id, recording_entity_id)

List Meeting Recordings

This endpoint retrieves a list of meeting recordings.

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
api_instance = swagger_client.HistoryApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
recording_entity_id = 56 # int | The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId.

try: 
    # List Meeting Recordings
    api_response = api_instance.v1_user_user_id_meeting_history_recordings_recording_entity_id_get(user_id, recording_entity_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling HistoryApi->v1_user_user_id_meeting_history_recordings_recording_entity_id_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **recording_entity_id** | **int**| The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. | 

### Return type

[**Recording**](Recording.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

