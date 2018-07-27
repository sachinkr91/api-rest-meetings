# BlueJeansMeetingsRestApi.ScheduleMeetingMinComp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **String** |  | [default to &#39;My Test Meeting&#39;]
**description** | **String** |  | [optional] 
**start** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **Number** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **String** |  | [default to &#39;America/New_York&#39;]
**endPointType** | **String** |  | [default to &#39;WEB_APP&#39;]
**endPointVersion** | **String** |  | [default to &#39;2.10&#39;]
**attendees** | [**[Attendee]**](Attendee.md) |  | [optional] 
**isLargeMeeting** | **Boolean** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**isPersonalMeeting** | **Boolean** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to false]


