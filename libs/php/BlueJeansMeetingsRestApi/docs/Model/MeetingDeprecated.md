# MeetingDeprecated

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
**is_personal_meeting** | **bool** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to false]
**is_large_meeting** | **bool** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**add_attendee_passcode** | **bool** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. | [optional] 
**end_point_version** | **string** |  | [default to '2.10']
**end_point_type** | **string** |  | [default to 'WEB_APP']
**attendees** | [**\BlueJeansMeetingsRestApi\Model\Attendee[]**](Attendee.md) |  | [optional] 
**advanced_meeting_options** | [**\BlueJeansMeetingsRestApi\Model\MeetingDeprecatedAdvancedMeetingOptions**](MeetingDeprecatedAdvancedMeetingOptions.md) |  | [optional] 
**recurrence_pattern** | [**\BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern**](MeetingRecurrencePattern.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


