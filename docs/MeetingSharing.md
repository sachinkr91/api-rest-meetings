# BlueJeansMeetingsRestApi.MeetingSharing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | This field is the Sharing Authorization unique identifier. | [optional] 
**meetingGuid** | **String** | The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes. | [optional] 
**ownerId** | **Number** | The ownerId field is the unique Id number of the BlueJeans account that owns the recording | [optional] 
**sharingUrl** | **String** |  | [optional] 
**recepientType** | [**RecepientOptionsComp**](RecepientOptionsComp.md) |  | [optional] 
**properties** | [**MeetingSharingProperties**](MeetingSharingProperties.md) |  | [optional] 
**status** | **String** | This status field indicates the state of the sharing authorization record. | [optional] 
**downloadable** | **Boolean** | The downloadable field indicates whether the recording can be downloaded | [optional] 
**passcode** | **String** | TBD | [optional] 
**validity** | **String** | TBD | [optional] 
**created** | **Number** | Date, since epoch time, that the recording was created (in milliseconds). | [optional] 
**lastmodified** | **Number** | Date, since epoch time, that the recording was last modified (in milliseconds). | [optional] 


<a name="StatusEnum"></a>
## Enum: StatusEnum


* `ACTIVE` (value: `"ACTIVE"`)

* `DELETED` (value: `"DELETED"`)




