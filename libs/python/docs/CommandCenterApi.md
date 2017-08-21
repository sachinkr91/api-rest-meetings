# BlueJeansOnVideoRestApi.CommandCenterApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_endpoint_distribution**](CommandCenterApi.md#get_endpoint_distribution) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**get_feedback_comments**](CommandCenterApi.md#get_feedback_comments) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**get_feedback_count**](CommandCenterApi.md#get_feedback_count) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
[**get_meeting_live_by_enterprise**](CommandCenterApi.md#get_meeting_live_by_enterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
[**get_meeting_past_by_enterprise**](CommandCenterApi.md#get_meeting_past_by_enterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
[**get_meeting_past_by_user**](CommandCenterApi.md#get_meeting_past_by_user) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
[**get_meeting_usage**](CommandCenterApi.md#get_meeting_usage) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**get_meetings_live_by_enterprise**](CommandCenterApi.md#get_meetings_live_by_enterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
[**get_meetings_past_by_enterprise**](CommandCenterApi.md#get_meetings_past_by_enterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
[**get_meetings_past_by_user**](CommandCenterApi.md#get_meetings_past_by_user) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
[**get_roi_ranges**](CommandCenterApi.md#get_roi_ranges) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**get_top_users**](CommandCenterApi.md#get_top_users) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users


# **get_endpoint_distribution**
> AnalyticsEndpointDistribution get_endpoint_distribution(enterprise_id, filter=filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])

try: 
    # Endpoint Distribution
    api_response = api_instance.get_endpoint_distribution(enterprise_id, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_endpoint_distribution: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **str**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}]]

### Return type

[**AnalyticsEndpointDistribution**](AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_feedback_comments**
> AnalyticsFeedbackComments get_feedback_comments(enterprise_id, start, end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
start = '2017-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
end = '2018-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

try: 
    # Survey Feedback Comments
    api_response = api_instance.get_feedback_comments(enterprise_id, start, end)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_feedback_comments: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **str**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **str**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackComments**](AnalyticsFeedbackComments.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_feedback_count**
> AnalyticsFeedbackScores get_feedback_count(enterprise_id, start, end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
start = '2017-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
end = '2018-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

try: 
    # Survey Feedback Scores
    api_response = api_instance.get_feedback_count(enterprise_id, start, end)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_feedback_count: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **start** | **str**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **str**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**AnalyticsFeedbackScores**](AnalyticsFeedbackScores.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_live_by_enterprise**
> MeetingExtendedIndigo get_meeting_live_by_enterprise(enterprise_id, meeting_uuid)

List Live Meeting Endpoints by Enterprise

This endpoint lists endpoints for a given meeting in progress. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
meeting_uuid = 'meeting_uuid_example' # str | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

try: 
    # List Live Meeting Endpoints by Enterprise
    api_response = api_instance.get_meeting_live_by_enterprise(enterprise_id, meeting_uuid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meeting_live_by_enterprise: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meeting_uuid** | **str**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_past_by_enterprise**
> MeetingExtendedIndigo get_meeting_past_by_enterprise(enterprise_id, meeting_uuid, include_endpoints=include_endpoints)

List Meeting Endpoints & Stats by Enterprise

This endpoint lists meeting endpoints for completed meetings by enterprise. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
meeting_uuid = 'meeting_uuid_example' # str | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.
include_endpoints = true # bool | Option to include detailed data on endpoints (optional)

try: 
    # List Meeting Endpoints & Stats by Enterprise
    api_response = api_instance.get_meeting_past_by_enterprise(enterprise_id, meeting_uuid, include_endpoints=include_endpoints)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meeting_past_by_enterprise: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **meeting_uuid** | **str**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 
 **include_endpoints** | **bool**| Option to include detailed data on endpoints | [optional] 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_past_by_user**
> MeetingExtendedIndigo get_meeting_past_by_user(user_id, meeting_uuid)

List Meeting Endpoints & Stats by User

This endpoint lists meeting endpoints for completed meetings by user. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_uuid = 'meeting_uuid_example' # str | The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes.

try: 
    # List Meeting Endpoints & Stats by User
    api_response = api_instance.get_meeting_past_by_user(user_id, meeting_uuid)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meeting_past_by_user: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_uuid** | **str**| The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. | 

### Return type

[**MeetingExtendedIndigo**](MeetingExtendedIndigo.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_usage**
> AnalyticsUsage get_meeting_usage(enterprise_id, client_tz=client_tz, filter=filter)

Meeting Usage Over Time

This endpoint reports on meeting usage. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
client_tz = 'America/Denver' # str | Based on standard TZ code. (optional) (default to America/Denver)
filter = '[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])

try: 
    # Meeting Usage Over Time
    api_response = api_instance.get_meeting_usage(enterprise_id, client_tz=client_tz, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meeting_usage: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **client_tz** | **str**| Based on standard TZ code. | [optional] [default to America/Denver]
 **filter** | **str**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}]]

### Return type

[**AnalyticsUsage**](AnalyticsUsage.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meetings_live_by_enterprise**
> MeetingIndigoList get_meetings_live_by_enterprise(enterprise_id)

Live Meetings Summary by Enterprise

This endpoint lists meetings in progress by enterprise. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.

try: 
    # Live Meetings Summary by Enterprise
    api_response = api_instance.get_meetings_live_by_enterprise(enterprise_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meetings_live_by_enterprise: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meetings_past_by_enterprise**
> MeetingIndigoList get_meetings_past_by_enterprise(enterprise_id, offset=offset, limit=limit, filter=filter)

List Past Meetings by Enterprise

This endpoint lists completed meetings by enterprise. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
offset = 56 # int | Page Number (optional)
limit = 56 # int | Per page (optional)
filter = 'filter_example' # str | URL-encoded JSON string (optional)

try: 
    # List Past Meetings by Enterprise
    api_response = api_instance.get_meetings_past_by_enterprise(enterprise_id, offset=offset, limit=limit, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meetings_past_by_enterprise: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **offset** | **int**| Page Number | [optional] 
 **limit** | **int**| Per page | [optional] 
 **filter** | **str**| URL-encoded JSON string | [optional] 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meetings_past_by_user**
> MeetingIndigoList get_meetings_past_by_user(user_id)

List Past Meetings by User

This endpoint lists completed meetings by user. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.

try: 
    # List Past Meetings by User
    api_response = api_instance.get_meetings_past_by_user(user_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_meetings_past_by_user: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 

### Return type

[**MeetingIndigoList**](MeetingIndigoList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_roi_ranges**
> AnalyticsRoiData get_roi_ranges(enterprise_id, filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]' # str | URL-encoded JSON string (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"startTime"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"startTime"}])

try: 
    # ROI Data
    api_response = api_instance.get_roi_ranges(enterprise_id, filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_roi_ranges: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **str**| URL-encoded JSON string | [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;}]]

### Return type

[**AnalyticsRoiData**](AnalyticsRoiData.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_top_users**
> AnalyticsTopUsers get_top_users(enterprise_id, filter=filter)

Top Users

This endpoint retrieves the top users by usage for an enterprise. Requires /oauth2/token?Password authentication.

### Example 
```python
import time
import BlueJeansOnVideoRestApi
from BlueJeansOnVideoRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansOnVideoRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansOnVideoRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansOnVideoRestApi.CommandCenterApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])

try: 
    # Top Users
    api_response = api_instance.get_top_users(enterprise_id, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CommandCenterApi->get_top_users: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. | 
 **filter** | **str**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}]]

### Return type

[**AnalyticsTopUsers**](AnalyticsTopUsers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

