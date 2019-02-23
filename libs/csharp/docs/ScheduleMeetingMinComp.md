# com.bluejeans.api.rest.meetings.Model.ScheduleMeetingMinComp
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Title** | **string** |  | [default to "My Test Meeting"]
**Description** | **string** |  | [optional] 
**Start** | **long?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**End** | **long?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**Timezone** | **string** |  | [default to "America/New_York"]
**EndPointType** | **string** |  | [default to "WEB_APP"]
**EndPointVersion** | **string** |  | [default to "2.10"]
**Attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  | [optional] 
**IsLargeMeeting** | **bool?** | If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. | [optional] 
**IsPersonalMeeting** | **bool?** | Use the scheduler&#39;s personal meeting room and Id for this meeting. | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

