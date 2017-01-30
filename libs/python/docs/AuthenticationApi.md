# swagger_client.AuthenticationApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2_tokenclient_post**](AuthenticationApi.md#oauth2_tokenclient_post) | **POST** /oauth2/token?client | Authentication via Client Grant Type
[**oauth2_tokenmeeting_post**](AuthenticationApi.md#oauth2_tokenmeeting_post) | **POST** /oauth2/token?meeting | Authentication via Meeting Grant Type
[**oauth2_tokenpassword_post**](AuthenticationApi.md#oauth2_tokenpassword_post) | **POST** /oauth2/token?password | Authentication via Password Grant Type


# **oauth2_tokenclient_post**
> Grant oauth2_tokenclient_post(payload)

Authentication via Client Grant Type

This grant type is commonly used by an app. Client ID and Secret are provisioned within the BlueJeans Enterprise Administration console.

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
api_instance = swagger_client.AuthenticationApi()
payload = swagger_client.Payload() # Payload | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Client Grant Type
    api_response = api_instance.oauth2_tokenclient_post(payload)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AuthenticationApi->oauth2_tokenclient_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload**](Payload.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **oauth2_tokenmeeting_post**
> Grant oauth2_tokenmeeting_post(payload)

Authentication via Meeting Grant Type

This is not a traditional OAuth grant type, but it behaves closely to the password grant type. This level of authentication allows for obtaining access to the meeting only. If a Moderator passcode is sent, moderator privileges are granted. If an Attendee access code is passed, the access token will have a limited scope of access that an attendee has within a meeting.

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
api_instance = swagger_client.AuthenticationApi()
payload = swagger_client.Payload1() # Payload1 | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Meeting Grant Type
    api_response = api_instance.oauth2_tokenmeeting_post(payload)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AuthenticationApi->oauth2_tokenmeeting_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload1**](Payload1.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **oauth2_tokenpassword_post**
> Grant oauth2_tokenpassword_post(payload)

Authentication via Password Grant Type

An access token can be obtained by using a user’s username and password.

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
api_instance = swagger_client.AuthenticationApi()
payload = swagger_client.Payload2() # Payload2 | Contains information about the type of grant you are requesting.

try: 
    # Authentication via Password Grant Type
    api_response = api_instance.oauth2_tokenpassword_post(payload)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AuthenticationApi->oauth2_tokenpassword_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**Payload2**](Payload2.md)| Contains information about the type of grant you are requesting. | 

### Return type

[**Grant**](Grant.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

