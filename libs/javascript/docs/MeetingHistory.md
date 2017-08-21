# BlueJeansOnVideoRestApi.MeetingHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meetingGuid** | **String** |  | [optional] 
**meetingNumericId** | **String** |  | [optional] 
**title** | **String** |  | [optional] 
**description** | **String** |  | [optional] 
**leaderInfo** | [**MeetingHistoryLeaderInfo**](MeetingHistoryLeaderInfo.md) |  | [optional] 
**userId** | **Integer** |  | [optional] 
**meetingDuration** | **Integer** |  | [optional] 
**maxParticipantCount** | **Integer** |  | [optional] 
**totalParticipantMinutes** | **Integer** |  | [optional] 
**maxParticipantMinutes** | **Integer** |  | [optional] 
**extraParticipantMinutes** | **Integer** |  | [optional] 
**isdnEndpoints** | **Integer** |  | [optional] 
**totalDialoutMinutes** | **Integer** |  | [optional] 
**totalTollFreeMinutes** | **Integer** |  | [optional] 
**callDIDMinutes** | **Integer** |  | [optional] 
**startTime** | **Integer** |  | [optional] 
**endTime** | **Integer** |  | [optional] 
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




