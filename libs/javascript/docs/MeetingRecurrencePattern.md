# BlueJeansMeetingsRestApi.MeetingRecurrencePattern

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurrenceType** | **String** |  | [optional] 
**endDate** | **Number** | This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings. | [optional] 
**recurrenceCount** | **Number** | The number of reoccurring meetings | [optional] 
**frequency** | **Number** | the interval of reoccurring meetings. | [optional] 
**daysOfWeekMask** | **Number** | bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64 | [optional] 
**dayOfMonth** | **Number** | the numerical day in the month for monthly reoccurring meetings. | [optional] 
**weekOfMonth** | **String** | the numerical week in the month for reoccuring meetings. | [optional] [default to &#39;NONE&#39;]
**monthOfYear** | **String** | the month in the year for reoccurring meetings. | [optional] [default to &#39;NONE&#39;]


<a name="RecurrenceTypeEnum"></a>
## Enum: RecurrenceTypeEnum


* `DAILY` (value: `"DAILY"`)

* `WEEKLY` (value: `"WEEKLY"`)

* `MONTHLY` (value: `"MONTHLY"`)




<a name="WeekOfMonthEnum"></a>
## Enum: WeekOfMonthEnum


* `NONE` (value: `"NONE"`)

* `FIRST` (value: `"FIRST"`)

* `SECOND` (value: `"SECOND"`)

* `THIRD` (value: `"THIRD"`)

* `FOURTH` (value: `"FOURTH"`)

* `LAST` (value: `"LAST"`)




<a name="MonthOfYearEnum"></a>
## Enum: MonthOfYearEnum


* `NONE` (value: `"NONE"`)

* `JANUARY` (value: `"JANUARY"`)

* `FEBRUARY` (value: `"FEBRUARY"`)

* `MARCH` (value: `"MARCH"`)

* `APRIL` (value: `"APRIL"`)

* `MAY` (value: `"MAY"`)

* `JUNE` (value: `"JUNE"`)

* `JULY` (value: `"JULY"`)

* `AUGUST` (value: `"AUGUST"`)

* `SEPTEMBER` (value: `"SEPTEMBER"`)

* `OCTOBER` (value: `"OCTOBER"`)

* `NOVEMBER` (value: `"NOVEMBER"`)

* `DECEMBER` (value: `"DECEMBER"`)




