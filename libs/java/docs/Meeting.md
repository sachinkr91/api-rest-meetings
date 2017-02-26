
# Meeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Integer** | Unique identifier for meeting. |  [optional]
**title** | **String** |  | 
**description** | **String** |  |  [optional]
**start** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **String** |  |  [optional]
**numericMeetingId** | **String** |  |  [optional]
**attendeePasscode** | **String** |  |  [optional]
**endPointVersion** | **String** |  | 
**endPointType** | **String** |  | 
**attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  |  [optional]
**advancedMeetingOptions** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  |  [optional]



