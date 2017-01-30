# swagger_client.AnalyticsApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**v1_enterprise_enterprise_id_indigo_analytics_users_usage_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_analytics_users_usage_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
[**v1_enterprise_enterprise_id_indigo_feedback_count_get**](AnalyticsApi.md#v1_enterprise_enterprise_id_indigo_feedback_count_get) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores


# **v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get**
> AnalyticsEndpointDistribution v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get(enterprise_id, filter=filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])

try: 
    # Endpoint Distribution
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get(enterprise_id, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_analytics_endpoints_distribution_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get**
> AnalyticsFeedbackComments v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get(enterprise_id, start, end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
start = '2017-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
end = '2018-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

try: 
    # Survey Feedback Comments
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get(enterprise_id, start, end)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_analytics_feedback_comments_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get**
> AnalyticsUsage v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get(enterprise_id, client_tz=client_tz, filter=filter)

Meeting Usage Over Time

This endpoint reports on meeting usage.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
client_tz = 'America/Denver' # str | Based on standard TZ code. (optional) (default to America/Denver)
filter = '[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])

try: 
    # Meeting Usage Over Time
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get(enterprise_id, client_tz=client_tz, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_analytics_meetings_usage_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get**
> AnalyticsRoiData v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get(enterprise_id, filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]' # str | URL-encoded JSON string (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"startTime"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"startTime"}])

try: 
    # ROI Data
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get(enterprise_id, filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_analytics_roi_ranges_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_indigo_analytics_users_usage_get**
> AnalyticsTopUsers v1_enterprise_enterprise_id_indigo_analytics_users_usage_get(enterprise_id, filter=filter)

Top Users

This endpoint retrieves the top useres by usage for an enterprise.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
filter = '[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]' # str | URL-encoded JSON string (optional) (default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])

try: 
    # Top Users
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_analytics_users_usage_get(enterprise_id, filter=filter)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_analytics_users_usage_get: %s\n" % e
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

# **v1_enterprise_enterprise_id_indigo_feedback_count_get**
> AnalyticsFeedbackScores v1_enterprise_enterprise_id_indigo_feedback_count_get(enterprise_id, start, end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period.

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
api_instance = swagger_client.AnalyticsApi()
enterprise_id = 56 # int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
start = '2017-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2017-01-01T00:00:00-00:00)
end = '2018-01-01T00:00:00-00:00' # str | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (default to 2018-01-01T00:00:00-00:00)

try: 
    # Survey Feedback Scores
    api_response = api_instance.v1_enterprise_enterprise_id_indigo_feedback_count_get(enterprise_id, start, end)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AnalyticsApi->v1_enterprise_enterprise_id_indigo_feedback_count_get: %s\n" % e
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

