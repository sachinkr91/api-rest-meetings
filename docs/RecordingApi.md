# BlueJeansMeetingsRestApi.RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_share_recordings**](RecordingApi.md#create_share_recordings) | **POST** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | Enable Recording Sharing
[**delete_all_recordings_by_meeting_guid**](RecordingApi.md#delete_all_recordings_by_meeting_guid) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
[**delete_recording_chapter**](RecordingApi.md#delete_recording_chapter) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter
[**delete_share_recordings**](RecordingApi.md#delete_share_recordings) | **DELETE** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | Delete Recording Sharing
[**get_meeting_recordings**](RecordingApi.md#get_meeting_recordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**get_recording_content**](RecordingApi.md#get_recording_content) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
[**get_share_recordings**](RecordingApi.md#get_share_recordings) | **GET** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/ | List Recording Sharing
[**modify_share_recordings**](RecordingApi.md#modify_share_recordings) | **PUT** /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId} | Modify Recording Sharing
[**move_recording_owner**](RecordingApi.md#move_recording_owner) | **POST** /v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner} | Move Recording Ownership
[**start_recording**](RecordingApi.md#start_recording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
[**stop_recording**](RecordingApi.md#stop_recording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording


# **create_share_recordings**
> MeetingSharing create_share_recordings(user_id, meeting_guid, set_sharing)

Enable Recording Sharing

This endpoint creates a sharing authorization record for the specified meeting recording.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
set_sharing = BlueJeansMeetingsRestApi.SetSharing() # SetSharing | 

try:
    # Enable Recording Sharing
    api_response = api_instance.create_share_recordings(user_id, meeting_guid, set_sharing)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->create_share_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. | 
 **set_sharing** | [**SetSharing**](SetSharing.md)|  | 

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_all_recordings_by_meeting_guid**
> Meeting delete_all_recordings_by_meeting_guid(user_id, meeting_guid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress. 

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try:
    # Delete All Recordings for a Specified Meeting GUID
    api_response = api_instance.delete_all_recordings_by_meeting_guid(user_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->delete_all_recordings_by_meeting_guid: %s\n" % e)
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

# **delete_recording_chapter**
> Meeting delete_recording_chapter(user_id, meeting_id, recording_chapter_id)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
recording_chapter_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try:
    # Delete a Specified Recording Chapter
    api_response = api_instance.delete_recording_chapter(user_id, meeting_id, recording_chapter_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->delete_recording_chapter: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **recording_chapter_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_share_recordings**
> delete_share_recordings(user_id, meeting_guid)

Delete Recording Sharing

This endpoint deletes the sharing authorization associated with a meeting recording.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.

try:
    # Delete Recording Sharing
    api_instance.delete_share_recordings(user_id, meeting_guid)
except ApiException as e:
    print("Exception when calling RecordingApi->delete_share_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_recordings**
> RecordingHistoryList get_meeting_recordings(user_id, meeting_id, meeting_guid=meeting_guid)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)

try:
    # Get All Recordings for a Specified Meeting ID
    api_response = api_instance.get_meeting_recordings(user_id, meeting_id, meeting_guid=meeting_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->get_meeting_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | [optional] 

### Return type

[**RecordingHistoryList**](RecordingHistoryList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_recording_content**
> Content get_recording_content(user_id, content_id, is_downloadable)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
content_id = 56 # int | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
is_downloadable = true # bool | Set to true. (default to true)

try:
    # Get Recording Download Link
    api_response = api_instance.get_recording_content(user_id, content_id, is_downloadable)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->get_recording_content: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **content_id** | **int**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. | 
 **is_downloadable** | **bool**| Set to true. | [default to true]

### Return type

[**Content**](Content.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_share_recordings**
> MeetingSharing get_share_recordings(user_id, meeting_guid)

List Recording Sharing

This endpoint retrieves a the sharing authorization information for a meeting's recording. If no sharing has been authorized for the meeting, this API returns a 404 error.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.

try:
    # List Recording Sharing
    api_response = api_instance.get_share_recordings(user_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->get_share_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **modify_share_recordings**
> MeetingSharing modify_share_recordings(user_id, meeting_guid, sharing_id, modify_sharing)

Modify Recording Sharing

This endpoint modifieds the sharing authorization attributes for a meeting recording.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes.
sharing_id = 'sharing_id_example' # str | The identifier of the sharing authorization record.  This value can be obtained from the \"Id\" in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing
modify_sharing = BlueJeansMeetingsRestApi.ModifySharing() # ModifySharing | 

try:
    # Modify Recording Sharing
    api_response = api_instance.modify_share_recordings(user_id, meeting_guid, sharing_id, modify_sharing)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->modify_share_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. | 
 **sharing_id** | **str**| The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing | 
 **modify_sharing** | [**ModifySharing**](ModifySharing.md)|  | 

### Return type

[**MeetingSharing**](MeetingSharing.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **move_recording_owner**
> RecordingMovedComp move_recording_owner(user_id, original_owner, new_owner)

Move Recording Ownership

This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
original_owner = 56 # int | The ID of the recording's current owner.
new_owner = 56 # int | The ID of the intended owner for the recording.

try:
    # Move Recording Ownership
    api_response = api_instance.move_recording_owner(user_id, original_owner, new_owner)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->move_recording_owner: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **original_owner** | **int**| The ID of the recording&#39;s current owner. | 
 **new_owner** | **int**| The ID of the intended owner for the recording. | 

### Return type

[**RecordingMovedComp**](RecordingMovedComp.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **start_recording**
> start_recording(user_id, meeting_id, action)

Start Recording

This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
action = 'start' # str | Always set to \"start\" in order to start recording. (default to start)

try:
    # Start Recording
    api_instance.start_recording(user_id, meeting_id, action)
except ApiException as e:
    print("Exception when calling RecordingApi->start_recording: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **action** | **str**| Always set to \&quot;start\&quot; in order to start recording. | [default to start]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **stop_recording**
> stop_recording(user_id, meeting_id, action)

Stop Recording

This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.

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
api_instance = BlueJeansMeetingsRestApi.RecordingApi(BlueJeansMeetingsRestApi.ApiClient(configuration))
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
action = 'stop' # str | Always set to \"stop\" in order to stop recording. (default to stop)

try:
    # Stop Recording
    api_instance.stop_recording(user_id, meeting_id, action)
except ApiException as e:
    print("Exception when calling RecordingApi->stop_recording: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **action** | **str**| Always set to \&quot;stop\&quot; in order to stop recording. | [default to stop]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

