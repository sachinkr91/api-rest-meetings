# BlueJeansMeetingsRestApi.Meeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Unique identifier for meeting. | [optional] 
**title** | **String** |  | [default to &#39;My Test Meeting&#39;]
**description** | **String** |  | [optional] 
**start** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **String** |  | [optional] [default to &#39;America/New_York&#39;]
**numericMeetingId** | **String** | The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. | [optional] 
**attendeePasscode** | **String** |  | [optional] 
**addAttendeePasscode** | **Boolean** | Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. | [optional] 
**endPointVersion** | **String** |  | [default to &#39;2.10&#39;]
**endPointType** | **String** |  | [default to &#39;WEB_APP&#39;]
**attendees** | [**[Attendee]**](Attendee.md) |  | [optional] 
**advancedMeetingOptions** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  | [optional] 


