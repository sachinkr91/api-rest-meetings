# com.bluejeans.api.rest.meetings.Model.MeetingSharing
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int?** | This field is the Sharing Authorization unique identifier. | [optional] 
**MeetingGuid** | **string** | The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes. | [optional] 
**OwnerId** | **int?** | The ownerId field is the unique Id number of the BlueJeans account that owns the recording | [optional] 
**SharingUrl** | **string** |  | [optional] 
**RecepientType** | [**RecepientOptionsComp**](RecepientOptionsComp.md) |  | [optional] 
**Properties** | [**MeetingSharingProperties**](MeetingSharingProperties.md) |  | [optional] 
**Status** | **string** | This status field indicates the state of the sharing authorization record. | [optional] 
**Downloadable** | **bool?** | The downloadable field indicates whether the recording can be downloaded | [optional] 
**Passcode** | **string** | TBD | [optional] 
**Validity** | **string** | TBD | [optional] 
**Created** | **int?** | Date, since epoch time, that the recording was created (in milliseconds). | [optional] 
**Lastmodified** | **int?** | Date, since epoch time, that the recording was last modified (in milliseconds). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

