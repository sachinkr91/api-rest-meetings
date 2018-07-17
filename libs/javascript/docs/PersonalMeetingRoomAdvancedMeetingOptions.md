# BlueJeansMeetingsRestApi.PersonalMeetingRoomAdvancedMeetingOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**videoBestFit** | **Boolean** | Same user ID as passed in path parameter. | [optional] 
**publishMeeting** | **Boolean** | Same user ID as passed in path parameter. | [optional] 
**encryptionType** | **String** | How this meeting is to be encrypted. | [optional] 
**moderatorLess** | **Boolean** | If set require that a user enter&#39;s a moderator passcode to start meeting. | [optional] 
**allowStream** | **Boolean** | null | [optional] 
**autoRecord** | **Boolean** | By default start recording anytime 2 or more join this room. | [optional] 
**disallowChat** | **Boolean** | If set, disable the ability to send chat message within this meeting. | [optional] 
**muteParticipantsOnEntry** | **Boolean** | If set, force each joining participant to be muted. | [optional] 
**showAllAttendeesInMeetingInvite** | **Boolean** | When sending email invitations, include the exhaustive list of invited people. | [optional] 
**editability** | [**PersonalMeetingRoomAdvancedMeetingOptionsEditability**](PersonalMeetingRoomAdvancedMeetingOptionsEditability.md) |  | [optional] 


<a name="EncryptionTypeEnum"></a>
## Enum: EncryptionTypeEnum


* `NO_ENCRYPTION` (value: `"NO_ENCRYPTION"`)

* `ENCRYPTED_ONLY` (value: `"ENCRYPTED_ONLY"`)

* `ENCRYPTED_OR_PSTN_ONLY` (value: `"ENCRYPTED_OR_PSTN_ONLY"`)




