# BlueJeansMeetingsRestApi.MeetingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel_meeting**](MeetingApi.md#cancel_meeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
[**create_meeting**](MeetingApi.md#create_meeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
[**dialout_pstn**](MeetingApi.md#dialout_pstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn | Dialout via PSTN
[**generate_pairing_code_pstn**](MeetingApi.md#generate_pairing_code_pstn) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN | Generate Pairing Code (PSTN)
[**generate_pairing_code_sip**](MeetingApi.md#generate_pairing_code_sip) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP | Generate Pairing Code (SIP)
[**generate_pairing_code_web_rtc**](MeetingApi.md#generate_pairing_code_web_rtc) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc | Generate Pairing Code (WebRTC)
[**get_endpoint_layout**](MeetingApi.md#get_endpoint_layout) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
[**get_meeting**](MeetingApi.md#get_meeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
[**get_meeting_emails**](MeetingApi.md#get_meeting_emails) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
[**get_meeting_endpoint**](MeetingApi.md#get_meeting_endpoint) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
[**get_meeting_endpoints**](MeetingApi.md#get_meeting_endpoints) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | List Meeting Endpoints
[**get_meeting_numbers**](MeetingApi.md#get_meeting_numbers) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
[**get_meeting_state**](MeetingApi.md#get_meeting_state) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Get Meeting State
[**list_meetings**](MeetingApi.md#list_meetings) | **GET** /v1/user/{user_id}/scheduled_meeting | List Meetings
[**send_meeting_invite**](MeetingApi.md#send_meeting_invite) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite | Send Email Invite
[**update_endpoint_layout**](MeetingApi.md#update_endpoint_layout) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
[**update_meeting**](MeetingApi.md#update_meeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
[**update_meeting_endpoint**](MeetingApi.md#update_meeting_endpoint) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
[**update_meeting_endpoints**](MeetingApi.md#update_meeting_endpoints) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | Update Meeting Endpoints State
[**update_meeting_state**](MeetingApi.md#update_meeting_state) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Update Meeting State


# **cancel_meeting**
> cancel_meeting(user_id, meeting_id)

Cancel Meeting

This endpoint deletes a scheuled meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Cancel Meeting
    api_instance.cancel_meeting(user_id, meeting_id)
except ApiException as e:
    print("Exception when calling MeetingApi->cancel_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_meeting**
> Meeting create_meeting(user_id, meeting, email=email)

Create Meeting

This endpoint will create a scheduled meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting = BlueJeansMeetingsRestApi.Meeting() # Meeting | The details of the meeting.
email = true # bool | If set to true, sends invitation emails to all listed participants. (optional)

try: 
    # Create Meeting
    api_response = api_instance.create_meeting(user_id, meeting, email=email)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->create_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting** | [**Meeting**](Meeting.md)| The details of the meeting. | 
 **email** | **bool**| If set to true, sends invitation emails to all listed participants. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **dialout_pstn**
> list[DialoutPstn] dialout_pstn(user_id, numeric_meeting_id, payload_dialout)

Dialout via PSTN

Places a PSTN call to a user to join meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_dialout = BlueJeansMeetingsRestApi.PayloadDialout() # PayloadDialout | 

try: 
    # Dialout via PSTN
    api_response = api_instance.dialout_pstn(user_id, numeric_meeting_id, payload_dialout)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->dialout_pstn: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_dialout** | [**PayloadDialout**](PayloadDialout.md)|  | 

### Return type

[**list[DialoutPstn]**](DialoutPstn.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **generate_pairing_code_pstn**
> PairingCodeWebRTC generate_pairing_code_pstn(user_id, numeric_meeting_id, payload_pairing_code_pstn, role=role)

Generate Pairing Code (PSTN)

This endpoint generates a PSTN pairing code that can be used to connect to a meeting via telephone.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_pairing_code_pstn = BlueJeansMeetingsRestApi.PayloadPairingCodePstn() # PayloadPairingCodePstn | 
role = 'USER' # str |  (optional) (default to USER)

try: 
    # Generate Pairing Code (PSTN)
    api_response = api_instance.generate_pairing_code_pstn(user_id, numeric_meeting_id, payload_pairing_code_pstn, role=role)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->generate_pairing_code_pstn: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_pairing_code_pstn** | [**PayloadPairingCodePstn**](PayloadPairingCodePstn.md)|  | 
 **role** | **str**|  | [optional] [default to USER]

### Return type

[**PairingCodeWebRTC**](PairingCodeWebRTC.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **generate_pairing_code_sip**
> PairingCodeSIP generate_pairing_code_sip(user_id, numeric_meeting_id, payload_pairing_code_sip)

Generate Pairing Code (SIP)

This endpoint generates a SIP pairing code that can be used to connect to a meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_pairing_code_sip = BlueJeansMeetingsRestApi.PayloadPairingCodeSIP() # PayloadPairingCodeSIP | Information about the device that will be joining via SIP.

try: 
    # Generate Pairing Code (SIP)
    api_response = api_instance.generate_pairing_code_sip(user_id, numeric_meeting_id, payload_pairing_code_sip)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->generate_pairing_code_sip: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_pairing_code_sip** | [**PayloadPairingCodeSIP**](PayloadPairingCodeSIP.md)| Information about the device that will be joining via SIP. | 

### Return type

[**PairingCodeSIP**](PairingCodeSIP.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **generate_pairing_code_web_rtc**
> PairingCodeWebRTC generate_pairing_code_web_rtc(user_id, numeric_meeting_id, payload_pairing_code_web_rtc, role=role)

Generate Pairing Code (WebRTC)

This endpoint generates a WebRTC pairing code that can be used to connect to a meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_pairing_code_web_rtc = BlueJeansMeetingsRestApi.PayloadPairingCodeWebRTC() # PayloadPairingCodeWebRTC | 
role = 'USER' # str |  (optional) (default to USER)

try: 
    # Generate Pairing Code (WebRTC)
    api_response = api_instance.generate_pairing_code_web_rtc(user_id, numeric_meeting_id, payload_pairing_code_web_rtc, role=role)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->generate_pairing_code_web_rtc: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_pairing_code_web_rtc** | [**PayloadPairingCodeWebRTC**](PayloadPairingCodeWebRTC.md)|  | 
 **role** | **str**|  | [optional] [default to USER]

### Return type

[**PairingCodeWebRTC**](PairingCodeWebRTC.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_endpoint_layout**
> Layout get_endpoint_layout(user_id, numeric_meeting_id, endpoint_guid)

Get Endpoint Layout

This endpoint allows you to retrieve an individual endpoint’s current layout setting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try: 
    # Get Endpoint Layout
    api_response = api_instance.get_endpoint_layout(user_id, numeric_meeting_id, endpoint_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_endpoint_layout: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting**
> Meeting get_meeting(user_id, meeting_id)

Get Meeting

This endpoint gets the settings for a user's meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. This is not the numeric meeting ID visible to users.

try: 
    # Get Meeting
    api_response = api_instance.get_meeting(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_emails**
> Meeting get_meeting_emails(user_id, meeting_id, type=type, role=role, action=action)

Get Meeting Email

This endpoint retrieves the email object for a scheduled meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
type = 'type_example' # str | TEXT, ICS, HTML (optional)
role = 'role_example' # str | moderator, participant (optional)
action = 'action_example' # str | create, edit, delete (optional)

try: 
    # Get Meeting Email
    api_response = api_instance.get_meeting_emails(user_id, meeting_id, type=type, role=role, action=action)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting_emails: %s\n" % e)
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

# **get_meeting_endpoint**
> Endpoint get_meeting_endpoint(user_id, numeric_meeting_id, endpoint_guid)

Get Endpoint Information

This endpoint allows you to retrieve information about an endpoint in the meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.

try: 
    # Get Endpoint Information
    api_response = api_instance.get_meeting_endpoint(user_id, numeric_meeting_id, endpoint_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting_endpoint: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_endpoints**
> Endpoints get_meeting_endpoints(user_id, numeric_meeting_id)

List Meeting Endpoints

This endpoint returns an array of all endpoints in the current meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

try: 
    # List Meeting Endpoints
    api_response = api_instance.get_meeting_endpoints(user_id, numeric_meeting_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting_endpoints: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 

### Return type

[**Endpoints**](Endpoints.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_numbers**
> Numbers get_meeting_numbers(user_id, meeting_id)

Get Meeting Join Info

This endpoint retrieves the join information for a scheduled meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Get Meeting Join Info
    api_response = api_instance.get_meeting_numbers(user_id, meeting_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting_numbers: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Numbers**](Numbers.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_meeting_state**
> MeetingState get_meeting_state(user_id, numeric_meeting_id)

Get Meeting State

This endpoint’s purpose is to return whether the meeting is in progress or not.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

try: 
    # Get Meeting State
    api_response = api_instance.get_meeting_state(user_id, numeric_meeting_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->get_meeting_state: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 

### Return type

[**MeetingState**](MeetingState.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **list_meetings**
> list[Meeting] list_meetings(user_id, numeric_meeting_id=numeric_meeting_id)

List Meetings

This endpoint gets a list of the user's scheduled upcoming meetings.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 'numeric_meeting_id_example' # str | Filter the results by the meeting ID that participants will see and use to join the conference. (optional)

try: 
    # List Meetings
    api_response = api_instance.list_meetings(user_id, numeric_meeting_id=numeric_meeting_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->list_meetings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **str**| Filter the results by the meeting ID that participants will see and use to join the conference. | [optional] 

### Return type

[**list[Meeting]**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **send_meeting_invite**
> send_meeting_invite(user_id, numeric_meeting_id, payload_invite)

Send Email Invite

This endpoint generates an email invite to the specified meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_invite = BlueJeansMeetingsRestApi.PayloadInvite() # PayloadInvite | 

try: 
    # Send Email Invite
    api_instance.send_meeting_invite(user_id, numeric_meeting_id, payload_invite)
except ApiException as e:
    print("Exception when calling MeetingApi->send_meeting_invite: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_invite** | [**PayloadInvite**](PayloadInvite.md)|  | 

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_endpoint_layout**
> Layout update_endpoint_layout(user_id, numeric_meeting_id, endpoint_guid, is_leader=is_leader, push=push)

Update Endpoint Layout

This endpoint allows you to update an individual endpoint’s current layout setting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
is_leader = true # bool |  (optional)
push = true # bool |  (optional)

try: 
    # Update Endpoint Layout
    api_response = api_instance.update_endpoint_layout(user_id, numeric_meeting_id, endpoint_guid, is_leader=is_leader, push=push)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->update_endpoint_layout: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **is_leader** | **bool**|  | [optional] 
 **push** | **bool**|  | [optional] 

### Return type

[**Layout**](Layout.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_meeting**
> Meeting update_meeting(user_id, meeting_id, meeting)

Update Meeting

This endpoint changes the settings for a user's meeting. For example, use for rescheduling.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
meeting = BlueJeansMeetingsRestApi.Meeting() # Meeting | The user's room details that you wish to update.

try: 
    # Update Meeting
    api_response = api_instance.update_meeting(user_id, meeting_id, meeting)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->update_meeting: %s\n" % e)
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

# **update_meeting_endpoint**
> Endpoint update_meeting_endpoint(user_id, numeric_meeting_id, endpoint_guid, mute_audio=mute_audio, mute_video=mute_video, leave_meeting=leave_meeting)

Update Endpoint Video/Audio State

This endpoint allows you to update an individual endpoint’s ability to send audio or video, and also allows removing an endpoint from the meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
endpoint_guid = 'endpoint_guid_example' # str | The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint.
mute_audio = true # bool | Toggle the audio source mute. (optional)
mute_video = true # bool | Toggle the video source mute. (optional)
leave_meeting = true # bool | Remove the user from the meeting. (optional)

try: 
    # Update Endpoint Video/Audio State
    api_response = api_instance.update_meeting_endpoint(user_id, numeric_meeting_id, endpoint_guid, mute_audio=mute_audio, mute_video=mute_video, leave_meeting=leave_meeting)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->update_meeting_endpoint: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **endpoint_guid** | **str**| The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. | 
 **mute_audio** | **bool**| Toggle the audio source mute. | [optional] 
 **mute_video** | **bool**| Toggle the video source mute. | [optional] 
 **leave_meeting** | **bool**| Remove the user from the meeting. | [optional] 

### Return type

[**Endpoint**](Endpoint.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_meeting_endpoints**
> update_meeting_endpoints(user_id, numeric_meeting_id, mute=mute, media=media)

Update Meeting Endpoints State

This endpoint’s purpose is to be able to modify the endpoints in a meeting. Seems to require a Meeting-level access token.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
mute = true # bool | Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
media = 'media_example' # str | Specify the type of media you which to mute/unmute. (optional)

try: 
    # Update Meeting Endpoints State
    api_instance.update_meeting_endpoints(user_id, numeric_meeting_id, mute=mute, media=media)
except ApiException as e:
    print("Exception when calling MeetingApi->update_meeting_endpoints: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
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

# **update_meeting_state**
> Meeting update_meeting_state(user_id, numeric_meeting_id, payload_meeting_state, delay=delay)

Update Meeting State

This endpoint’s purpose is to be able to modify a meeting. Actions include locking the meeting, or terminating the meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.MeetingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
numeric_meeting_id = 56 # int | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
payload_meeting_state = BlueJeansMeetingsRestApi.PayloadMeetingState() # PayloadMeetingState | The meeting properties that you wish to update.
delay = 56 # int | Number of seconds to delay the end meeting operation. (optional)

try: 
    # Update Meeting State
    api_response = api_instance.update_meeting_state(user_id, numeric_meeting_id, payload_meeting_state, delay=delay)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling MeetingApi->update_meeting_state: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **numeric_meeting_id** | **int**| The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | 
 **payload_meeting_state** | [**PayloadMeetingState**](PayloadMeetingState.md)| The meeting properties that you wish to update. | 
 **delay** | **int**| Number of seconds to delay the end meeting operation. | [optional] 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

