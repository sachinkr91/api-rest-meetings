# com.bluejeans.api.rest.meetings.Model.MeetingRecurrencePattern
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**RecurrenceType** | **string** |  | [optional] 
**EndDate** | **int?** | This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings. | [optional] 
**RecurrenceCount** | **int?** | The number of reoccurring meetings | [optional] 
**Frequency** | **int?** | the interval of reoccurring meetings. | [optional] 
**DaysOfWeekMask** | **int?** | bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64 | [optional] 
**DayOfMonth** | **int?** | the numerical day in the month for monthly reoccurring meetings. | [optional] 
**WeekOfMonth** | **string** | the numerical week in the month for reoccuring meetings. | [optional] [default to WeekOfMonthEnum.NONE]
**MonthOfYear** | **string** | the month in the year for reoccurring meetings. | [optional] [default to MonthOfYearEnum.NONE]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

