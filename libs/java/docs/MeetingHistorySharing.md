
# MeetingHistorySharing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Integer** |  |  [optional]
**meetingGuid** | **String** |  |  [optional]
**ownerId** | **Integer** | Numeric user ID for the meeting owner. |  [optional]
**sharingUrl** | **String** |  |  [optional]
**recepientType** | [**RecepientTypeEnum**](#RecepientTypeEnum) |  |  [optional]
**properties** | **String** |  |  [optional]
**status** | [**StatusEnum**](#StatusEnum) |  |  [optional]
**downloadable** | **Boolean** |  |  [optional]
**passcode** | **String** |  |  [optional]
**validity** | **String** |  |  [optional]
**created** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds |  [optional]
**lastmodified** | **Long** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds |  [optional]


<a name="RecepientTypeEnum"></a>
## Enum: RecepientTypeEnum
Name | Value
---- | -----
ENTERPRISE | &quot;ENTERPRISE&quot;
PUBLIC | &quot;PUBLIC&quot;


<a name="StatusEnum"></a>
## Enum: StatusEnum
Name | Value
---- | -----
ACTIVE | &quot;ACTIVE&quot;



