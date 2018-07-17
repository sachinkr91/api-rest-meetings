
# PayloadMeetingState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locked** | **Boolean** | True to lock, false to unlock. |  [optional]
**status** | [**StatusEnum**](#StatusEnum) | Set to \&quot;terminated\&quot; to end the meeting. |  [optional]
**audioMuteOnEntry** | **Boolean** | True forces each party to automatically mute when the connect into the meeting |  [optional]
**isLargeMeeting** | **Boolean** | True causes BlueJeans to suppress playing announcement/tones when a party joins the meeting |  [optional]


<a name="StatusEnum"></a>
## Enum: StatusEnum
Name | Value
---- | -----
TERMINATED | &quot;terminated&quot;



