
# ScheduleMeetingMinComp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **String** |  | 
**description** | **String** |  |  [optional]
**start** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **String** |  | 
**endPointType** | **String** |  | 
**endPointVersion** | **String** |  | 
**attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  |  [optional]
**isLargeMeeting** | **Boolean** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. |  [optional]
**isPersonalMeeting** | **Boolean** | Use the scheduler&#39;s personal meeting room and Id for this meeting. |  [optional]



