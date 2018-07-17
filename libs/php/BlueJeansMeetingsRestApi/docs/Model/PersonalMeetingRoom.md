# PersonalMeetingRoom

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | This is a unique number that is associated with the personal meeting room. | [optional] 
**uuid** | **string** | This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room. | [optional] 
**title** | **string** | This is the name associated with personal room. | [optional] 
**description** | **string** | This is a short descriptive text for the personal meeting room. | [optional] 
**start** | **int** | This is the epoch-based starting time (in milliseconds) of the personal meeting. | [optional] 
**end** | **int** | This is the epoch-based ending time (in milliseconds) of the personal meeting. | [optional] 
**timezone** | **string** | This is the unix timezone string describing the timezone for the meeting | [optional] 
**advanced_meeting_options** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomAdvancedMeetingOptions**](PersonalMeetingRoomAdvancedMeetingOptions.md) |  | [optional] 
**notification_url** | **string** | this property is not used in the BlueJeans Meetings product | [optional] 
**notification_data** | **string** | this property is not used in the BlueJeans Meetings product | [optional] 
**moderator** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomModerator**](PersonalMeetingRoomModerator.md) |  | [optional] 
**numeric_meeting_id** | **string** | This is the number that a participant would enter when joining this meeting. | [optional] 
**attendee_passcode** | **string** | This is a passcode that must be provided by people joining the meeting. | [optional] 
**add_attendee_passcode** | **bool** | If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting. | [optional] 
**deleted** | **bool** | If set, indicates that this meeting has been deleted. | [optional] 
**allow720p** | **bool** | If set allows clients to send and receive 720p video resolution. | [optional] 
**status** | **string** | This string indicates the meeting&#39;s operational status. | [optional] 
**locked** | **bool** | If set the meeting has been locked, and future attendees require a member to allow them to join. | [optional] 
**sequence_number** | **int** | null | [optional] 
**ics_uid** | **string** | null | [optional] 
**end_point_type** | **string** | This string is the name of the type of scheduling entity. | [optional] [default to 'WEB_APP']
**end_point_version** | **string** | This is a string that describes the version number of the endpoint type. | [optional] 
**attendees** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomAttendees[]**](PersonalMeetingRoomAttendees.md) |  | [optional] 
**is_large_meeting** | **bool** | If set indicates that this meeting will have a large | [optional] 
**created** | **int** | This is the date and time (in milliseconds) when the meeting was created. | [optional] 
**last_modified** | **int** | This is the date and time (in milliseconds) when the meeting was last changed. | [optional] 
**is_expired** | **bool** | If set indicates that the meeting has expired. | [optional] 
**parent_meeting_id** | **int** | This is a unique number associated with the first meeting in a series of meetings. | [optional] 
**parent_meeting_uuid** | **string** | This is the guid for the first meeting in a series of meetings. | [optional] 
**next_occurrence** | **int** | This is a unique number associated with the next in a chain of meetings. | [optional] 
**timeless_meeting** | **bool** | This field, if set, indicates that this meeting is continously running. | [optional] 
**endless_meeting** | **bool** | This field, if set, indicates that there is no end of recurring meetings. | [optional] 
**first** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomFirst**](PersonalMeetingRoomFirst.md) |  | [optional] 
**last** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomLast**](PersonalMeetingRoomLast.md) |  | [optional] 
**next** | [**\BlueJeansMeetingsRestApi\Model\PersonalMeetingRoomNext**](PersonalMeetingRoomNext.md) |  | [optional] 
**next_start** | **int** | This is the epoch-based starting time for the next in chain of meetings. | [optional] 
**next_end** | **int** | This is the epoch-based ending time for the next in chain of meetings. | [optional] 
**is_personal_meeting** | **bool** | if set, indicates that this ia personal meeting. | [optional] 
**invitee_join_option** | **int** | null | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


