# BlueJeansMeetingsRestApi.MeetingHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meetingGuid** | **String** |  | [optional] 
**meetingNumericId** | **String** |  | [optional] 
**title** | **String** |  | [optional] 
**description** | **String** |  | [optional] 
**leaderInfo** | [**MeetingHistoryLeaderInfo**](MeetingHistoryLeaderInfo.md) |  | [optional] 
**userId** | **Number** |  | [optional] 
**meetingDuration** | **Number** |  | [optional] 
**maxParticipantCount** | **Number** |  | [optional] 
**totalParticipantMinutes** | **Number** |  | [optional] 
**maxParticipantMinutes** | **Number** |  | [optional] 
**extraParticipantMinutes** | **Number** |  | [optional] 
**isdnEndpoints** | **Number** |  | [optional] 
**totalDialoutMinutes** | **Number** |  | [optional] 
**totalTollFreeMinutes** | **Number** |  | [optional] 
**callDIDMinutes** | **Number** |  | [optional] 
**startTime** | **Number** |  | [optional] 
**endTime** | **Number** |  | [optional] 
**meetingStatus** | **String** |  | [optional] 
**meetingThumbnail** | **String** |  | [optional] 
**startTimeZone** | **String** |  | [optional] 
**processingStatus** | **String** |  | [optional] 
**concurrentCalls** | **String** |  | [optional] 
**uploadStatus** | **String** |  | [optional] 
**pstnonly** | **Boolean** |  | [optional] 
**participantList** | [**[MeetingHistoryParticipantList]**](MeetingHistoryParticipantList.md) |  | [optional] 


<a name="MeetingStatusEnum"></a>
## Enum: MeetingStatusEnum


* `Complete` (value: `"Complete"`)




<a name="ProcessingStatusEnum"></a>
## Enum: ProcessingStatusEnum


* `PROCESSED` (value: `"PROCESSED"`)




