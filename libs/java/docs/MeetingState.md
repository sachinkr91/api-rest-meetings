
# MeetingState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meetingId** | **String** |  |  [optional]
**meetingGuid** | **String** |  |  [optional]
**meetingState** | [**MeetingStateEnum**](#MeetingStateEnum) |  |  [optional]
**status** | [**StatusEnum**](#StatusEnum) |  |  [optional]
**isContentSharingActive** | **Boolean** |  |  [optional]
**bridged** | **Boolean** |  |  [optional]
**locked** | **Boolean** |  |  [optional]
**audioMuteOnEntry** | **Boolean** |  |  [optional]
**videoMuteOnEntry** | **Boolean** |  |  [optional]
**moderatorLess** | **Boolean** |  |  [optional]
**title** | **String** |  |  [optional]
**chatEnabled** | **Boolean** |  |  [optional]
**pinnedEndpointGuid** | **String** |  |  [optional]
**audioEndpointCount** | **Integer** |  |  [optional]
**videoEndpointCount** | **Integer** |  |  [optional]
**recordingEnabled** | **Boolean** |  |  [optional]
**participantWebJoinURL** | **String** |  |  [optional]
**isLargeMeeting** | **String** |  |  [optional]
**features** | **List&lt;String&gt;** |  |  [optional]
**delayedMeetingEndTime** | **Integer** |  |  [optional]
**smStreams** | **String** |  |  [optional]
**inactiveMeetingStatus** | **String** |  |  [optional]
**meetingMarkedForDelayedTermination** | **Boolean** |  |  [optional]
**recordinginfo** | [**MeetingStateRecordinginfo**](MeetingStateRecordinginfo.md) |  |  [optional]


<a name="MeetingStateEnum"></a>
## Enum: MeetingStateEnum
Name | Value
---- | -----
MEETINGSTARTED | &quot;MeetingStarted&quot;


<a name="StatusEnum"></a>
## Enum: StatusEnum
Name | Value
---- | -----
ACTIVE | &quot;active&quot;



