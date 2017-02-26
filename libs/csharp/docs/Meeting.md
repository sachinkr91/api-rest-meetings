# IO.Swagger.Model.Meeting
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int?** | Unique identifier for meeting. | [optional] 
**Title** | **string** |  | [default to "My Test Meeting"]
**Description** | **string** |  | [optional] 
**Start** | **long?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**End** | **long?** | A [UNIX Timestamp](https://currentmillis.com/) in milliseconds | 
**Timezone** | **string** |  | [optional] [default to "America/New_York"]
**NumericMeetingId** | **string** |  | [optional] 
**AttendeePasscode** | **string** |  | [optional] 
**EndPointVersion** | **string** |  | [default to "2.10"]
**EndPointType** | **string** |  | [default to "WEB_APP"]
**Attendees** | [**List&lt;Attendee&gt;**](Attendee.md) |  | [optional] 
**AdvancedMeetingOptions** | [**MeetingAdvancedMeetingOptions**](MeetingAdvancedMeetingOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

