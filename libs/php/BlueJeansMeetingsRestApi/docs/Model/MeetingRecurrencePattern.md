# MeetingRecurrencePattern

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurrence_type** | **string** |  | [optional] 
**end_date** | **int** | This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings. | [optional] 
**recurrence_count** | **int** | The number of reoccurring meetings | [optional] 
**frequency** | **int** | the interval of reoccurring meetings. | [optional] 
**days_of_week_mask** | **int** | bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64 | [optional] 
**day_of_month** | **int** | the numerical day in the month for monthly reoccurring meetings. | [optional] 
**week_of_month** | **string** | the numerical week in the month for reoccuring meetings. | [optional] [default to 'NONE']
**month_of_year** | **string** | the month in the year for reoccurring meetings. | [optional] [default to 'NONE']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


