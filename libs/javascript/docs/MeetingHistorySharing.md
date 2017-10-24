# BlueJeansMeetingsRestApi.MeetingHistorySharing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** |  | [optional] 
**meetingGuid** | **String** |  | [optional] 
**ownerId** | **Number** | Numeric user ID for the meeting owner. | [optional] 
**sharingUrl** | **String** |  | [optional] 
**recepientType** | **String** |  | [optional] 
**properties** | **String** |  | [optional] 
**status** | **String** |  | [optional] 
**downloadable** | **Boolean** |  | [optional] 
**passcode** | **String** |  | [optional] 
**validity** | **String** |  | [optional] 
**created** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | [optional] 
**lastmodified** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | [optional] 


<a name="RecepientTypeEnum"></a>
## Enum: RecepientTypeEnum


* `ENTERPRISE` (value: `"ENTERPRISE"`)

* `PUBLIC` (value: `"PUBLIC"`)




<a name="StatusEnum"></a>
## Enum: StatusEnum


* `ACTIVE` (value: `"ACTIVE"`)




