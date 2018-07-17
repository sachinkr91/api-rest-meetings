
# Meeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Integer** | Unique identifier for meeting. |  [optional]
**uuid** | **String** |  |  [optional]
**title** | **String** |  | 
**description** | **String** |  |  [optional]
**start** | **Integer** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **Integer** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **String** |  |  [optional]
**advancedMeetingOptions** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  |  [optional]
**notificationUrl** | **String** | this property is not used in the BlueJeans Meetings product |  [optional]
**notificationData** | **String** | this property is not used in the BlueJeans Meetings product |  [optional]
**moderator** | [**MeetingModerator**](MeetingModerator.md) |  |  [optional]
**numericMeetingId** | **String** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. |  [optional]
**attendeePasscode** | **String** |  |  [optional]
**addAttendeePasscode** | **Boolean** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. |  [optional]
**delete** | **Boolean** |  |  [optional]
**allow720p** | **Boolean** |  |  [optional]
**status** | **String** |  |  [optional]
**locked** | **Boolean** |  |  [optional]
**seqeuenceNumber** | **Integer** |  |  [optional]
**icsUid** | **String** |  |  [optional]
**endPointType** | **String** |  | 
**endPointVersion** | **String** |  | 
**attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  |  [optional]
**isLargeMeeting** | **Boolean** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. |  [optional]
**created** | **Integer** | This is the epoch-based time (in milliseconds) when the meeting was initially created. |  [optional]
**lastModified** | **Integer** | This is the epoch-based time (in milliseconds) when the meeting was last changed. |  [optional]
**isExpired** | **Boolean** |  |  [optional]
**parentMeetingId** | **Integer** | This field contains the Meeting Id of the first meeting in a recurrence chain of meetings. |  [optional]
**parentMeetingUUID** | **String** |  |  [optional]
**nextOccurrence** | **String** |  |  [optional]
**timelessMeeting** | **Boolean** |  |  [optional]
**endlessMeeting** | **Boolean** |  |  [optional]
**recurrencePattern** | [**MeetingRecurrencePattern**](MeetingRecurrencePattern.md) |  |  [optional]
**first** | [**StartEnd**](StartEnd.md) | Starting and ending times of the first meeting in a chain of recurring meetings. |  [optional]
**last** | [**StartEnd**](StartEnd.md) | Starting and ending times of the last meeting in a chain of recurring meetings. |  [optional]
**next** | [**StartEnd**](StartEnd.md) | Starting and ending times of the next meeting in a chain of recurring meetings. |  [optional]
**nextStart** | **Integer** |  |  [optional]
**nextEnd** | **Integer** |  |  [optional]
**isPersonalMeeting** | **Boolean** | Use the scheduler&#39;s personal meeting room and Id for this meeting. |  [optional]
**inviteeJoinOption** | **Integer** |  |  [optional]



