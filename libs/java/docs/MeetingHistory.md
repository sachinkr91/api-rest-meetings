
# MeetingHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meetingGuid** | **String** |  |  [optional]
**meetingNumericId** | **String** |  |  [optional]
**title** | **String** |  |  [optional]
**description** | **String** |  |  [optional]
**leaderInfo** | [**MeetingHistoryLeaderInfo**](MeetingHistoryLeaderInfo.md) |  |  [optional]
**userId** | **Integer** |  |  [optional]
**meetingDuration** | **Long** |  |  [optional]
**maxParticipantCount** | **Integer** |  |  [optional]
**totalParticipantMinutes** | **Integer** |  |  [optional]
**maxParticipantMinutes** | **Integer** |  |  [optional]
**extraParticipantMinutes** | **Integer** |  |  [optional]
**isdnEndpoints** | **Integer** |  |  [optional]
**totalDialoutMinutes** | **Integer** |  |  [optional]
**totalTollFreeMinutes** | **Integer** |  |  [optional]
**callDIDMinutes** | **Integer** |  |  [optional]
**startTime** | **Long** |  |  [optional]
**endTime** | **Long** |  |  [optional]
**meetingStatus** | [**MeetingStatusEnum**](#MeetingStatusEnum) |  |  [optional]
**meetingThumbnail** | **String** |  |  [optional]
**startTimeZone** | **String** |  |  [optional]
**processingStatus** | [**ProcessingStatusEnum**](#ProcessingStatusEnum) |  |  [optional]
**concurrentCalls** | **String** |  |  [optional]
**uploadStatus** | **String** |  |  [optional]
**pstnonly** | **Boolean** |  |  [optional]
**participantList** | [**List&lt;MeetingHistoryParticipantList&gt;**](MeetingHistoryParticipantList.md) |  |  [optional]


<a name="MeetingStatusEnum"></a>
## Enum: MeetingStatusEnum
Name | Value
---- | -----
COMPLETE | &quot;Complete&quot;


<a name="ProcessingStatusEnum"></a>
## Enum: ProcessingStatusEnum
Name | Value
---- | -----
PROCESSED | &quot;PROCESSED&quot;



