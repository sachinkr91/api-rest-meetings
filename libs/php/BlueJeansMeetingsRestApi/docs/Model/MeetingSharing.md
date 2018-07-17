# MeetingSharing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | This field is the Sharing Authorization unique identifier. | [optional] 
**meeting_guid** | **string** | The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes. | [optional] 
**owner_id** | **int** | The ownerId field is the unique Id number of the BlueJeans account that owns the recording | [optional] 
**sharing_url** | **string** |  | [optional] 
**recepient_type** | [**\BlueJeansMeetingsRestApi\Model\ComponentsRecepientOptions**](ComponentsRecepientOptions.md) |  | [optional] 
**properties** | [**\BlueJeansMeetingsRestApi\Model\MeetingSharingProperties**](MeetingSharingProperties.md) |  | [optional] 
**status** | **string** | This status field indicates the state of the sharing authorization record. | [optional] 
**downloadable** | **bool** | The downloadable field indicates whether the recording can be downloaded | [optional] 
**passcode** | **string** | TBD | [optional] 
**validity** | **string** | TBD | [optional] 
**created** | **int** | Date, since epoch time, that the recording was created (in milliseconds). | [optional] 
**lastmodified** | **int** | Date, since epoch time, that the recording was last modified (in milliseconds). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


