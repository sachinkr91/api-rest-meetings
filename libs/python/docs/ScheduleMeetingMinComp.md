# ScheduleMeetingMinComp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **str** |  | [default to 'My Test Meeting']
**description** | **str** |  | [optional] 
**start** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**end** | **int** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**timezone** | **str** |  | [default to 'America/New_York']
**end_point_type** | **str** |  | [default to 'WEB_APP']
**end_point_version** | **str** |  | [default to '2.10']
**attendees** | [**list[Attendee]**](Attendee.md) |  | [optional] 
**is_large_meeting** | **bool** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**is_personal_meeting** | **bool** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to False]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


