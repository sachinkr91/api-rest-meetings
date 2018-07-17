# Meeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for meeting. | [optional] 
**uuid** | **str** |  | [optional] 
**title** | **str** |  | [default to 'My Test Meeting']
**description** | **str** |  | [optional] 
**start** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **str** |  | [optional] [default to 'America/New_York']
**advanced_meeting_options** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  | [optional] 
**notification_url** | **str** | this property is not used in the BlueJeans Meetings product | [optional] 
**notification_data** | **str** | this property is not used in the BlueJeans Meetings product | [optional] 
**moderator** | [**MeetingModerator**](MeetingModerator.md) |  | [optional] 
**numeric_meeting_id** | **str** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | [optional] 
**attendee_passcode** | **str** |  | [optional] 
**add_attendee_passcode** | **bool** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. | [optional] 
**delete** | **bool** |  | [optional] 
**allow720p** | **bool** |  | [optional] 
**status** | **str** |  | [optional] 
**locked** | **bool** |  | [optional] 
**seqeuence_number** | **int** |  | [optional] 
**ics_uid** | **str** |  | [optional] 
**end_point_type** | **str** |  | [default to 'WEB_APP']
**end_point_version** | **str** |  | [default to '2.10']
**attendees** | [**list[Attendee]**](Attendee.md) |  | [optional] 
**is_large_meeting** | **bool** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**created** | **int** | This is the epoch-based time (in milliseconds) when the meeting was initially created. | [optional] 
**last_modified** | **int** | This is the epoch-based time (in milliseconds) when the meeting was last changed. | [optional] 
**is_expired** | **bool** |  | [optional] 
**parent_meeting_id** | **int** | This field contains the Meeting Id of the first meeting in a recurrence chain of meetings. | [optional] 
**parent_meeting_uuid** | **str** |  | [optional] 
**next_occurrence** | **str** |  | [optional] 
**timeless_meeting** | **bool** |  | [optional] 
**endless_meeting** | **bool** |  | [optional] 
**recurrence_pattern** | [**MeetingRecurrencePattern**](MeetingRecurrencePattern.md) |  | [optional] 
**first** | [**StartEnd**](StartEnd.md) | Starting and ending times of the first meeting in a chain of recurring meetings. | [optional] 
**last** | [**StartEnd**](StartEnd.md) | Starting and ending times of the last meeting in a chain of recurring meetings. | [optional] 
**next** | [**StartEnd**](StartEnd.md) | Starting and ending times of the next meeting in a chain of recurring meetings. | [optional] 
**next_start** | **int** |  | [optional] 
**next_end** | **int** |  | [optional] 
**is_personal_meeting** | **bool** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to False]
**invitee_join_option** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


