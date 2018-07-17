# com.bluejeans.api.rest.meetings.Model.Meeting
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int?** | Unique identifier for meeting. | [optional] 
**Uuid** | **string** |  | [optional] 
**Title** | **string** |  | [default to "My Test Meeting"]
**Description** | **string** |  | [optional] 
**Start** | **int?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**End** | **int?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**Timezone** | **string** |  | [optional] [default to "America/New_York"]
**AdvancedMeetingOptions** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  | [optional] 
**NotificationUrl** | **string** | this property is not used in the BlueJeans Meetings product | [optional] 
**NotificationData** | **string** | this property is not used in the BlueJeans Meetings product | [optional] 
**Moderator** | [**MeetingModerator**](MeetingModerator.md) |  | [optional] 
**NumericMeetingId** | **string** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | [optional] 
**AttendeePasscode** | **string** |  | [optional] 
**AddAttendeePasscode** | **bool?** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. | [optional] 
**Delete** | **bool?** |  | [optional] 
**Allow720p** | **bool?** |  | [optional] 
**Status** | **string** |  | [optional] 
**Locked** | **bool?** |  | [optional] 
**SeqeuenceNumber** | **int?** |  | [optional] 
**IcsUid** | **string** |  | [optional] 
**EndPointType** | **string** |  | [default to "WEB_APP"]
**EndPointVersion** | **string** |  | [default to "2.10"]
**Attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  | [optional] 
**IsLargeMeeting** | **bool?** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**Created** | **int?** | This is the epoch-based time (in milliseconds) when the meeting was initially created. | [optional] 
**LastModified** | **int?** | This is the epoch-based time (in milliseconds) when the meeting was last changed. | [optional] 
**IsExpired** | **bool?** |  | [optional] 
**ParentMeetingId** | **int?** | This field contains the Meeting Id of the first meeting in a recurrence chain of meetings. | [optional] 
**ParentMeetingUUID** | **string** |  | [optional] 
**NextOccurrence** | **string** |  | [optional] 
**TimelessMeeting** | **bool?** |  | [optional] 
**EndlessMeeting** | **bool?** |  | [optional] 
**RecurrencePattern** | [**MeetingRecurrencePattern**](MeetingRecurrencePattern.md) |  | [optional] 
**First** | [**StartEnd**](StartEnd.md) | Starting and ending times of the first meeting in a chain of recurring meetings. | [optional] 
**Last** | [**StartEnd**](StartEnd.md) | Starting and ending times of the last meeting in a chain of recurring meetings. | [optional] 
**Next** | [**StartEnd**](StartEnd.md) | Starting and ending times of the next meeting in a chain of recurring meetings. | [optional] 
**NextStart** | **int?** |  | [optional] 
**NextEnd** | **int?** |  | [optional] 
**IsPersonalMeeting** | **bool?** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to false]
**InviteeJoinOption** | **int?** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

