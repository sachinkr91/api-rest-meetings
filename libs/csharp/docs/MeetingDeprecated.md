# com.bluejeans.api.rest.meetings.Model.MeetingDeprecated
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int?** | Unique identifier for meeting. | [optional] 
**Title** | **string** |  | [default to "My Test Meeting"]
**Description** | **string** |  | [optional] 
**Start** | **int?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**End** | **int?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**Timezone** | **string** |  | [optional] [default to "America/New_York"]
**NumericMeetingId** | **string** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | [optional] 
**AttendeePasscode** | **string** |  | [optional] 
**IsPersonalMeeting** | **bool?** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to false]
**IsLargeMeeting** | **bool?** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**AddAttendeePasscode** | **bool?** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. | [optional] 
**EndPointVersion** | **string** |  | [default to "2.10"]
**EndPointType** | **string** |  | [default to "WEB_APP"]
**Attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  | [optional] 
**AdvancedMeetingOptions** | [**MeetingDeprecatedAdvancedMeetingOptions**](MeetingDeprecatedAdvancedMeetingOptions.md) |  | [optional] 
**RecurrencePattern** | [**MeetingRecurrencePattern**](MeetingRecurrencePattern.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

