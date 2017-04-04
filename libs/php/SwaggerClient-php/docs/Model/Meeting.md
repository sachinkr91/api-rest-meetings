# Meeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for meeting. | [optional] 
**title** | **string** |  | [default to 'My Test Meeting']
**description** | **string** |  | [optional] 
**start** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **string** |  | [optional] [default to 'America/New_York']
**numeric_meeting_id** | **string** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | [optional] 
**attendee_passcode** | **string** |  | [optional] 
**end_point_version** | **string** |  | [default to '2.10']
**end_point_type** | **string** |  | [default to 'WEB_APP']
**attendees** | [**\Swagger\Client\Model\Attendee[]**](Attendee.md) |  | [optional] 
**advanced_meeting_options** | [**\Swagger\Client\Model\MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


