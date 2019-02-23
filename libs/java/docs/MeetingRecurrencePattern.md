
# MeetingRecurrencePattern

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurrenceType** | [**RecurrenceTypeEnum**](#RecurrenceTypeEnum) |  |  [optional]
**endDate** | **Long** | This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings. |  [optional]
**recurrenceCount** | **Integer** | The number of reoccurring meetings |  [optional]
**frequency** | **Integer** | the interval of reoccurring meetings. |  [optional]
**daysOfWeekMask** | **Integer** | bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64 |  [optional]
**dayOfMonth** | **Integer** | the numerical day in the month for monthly reoccurring meetings. |  [optional]
**weekOfMonth** | [**WeekOfMonthEnum**](#WeekOfMonthEnum) | the numerical week in the month for reoccuring meetings. |  [optional]
**monthOfYear** | [**MonthOfYearEnum**](#MonthOfYearEnum) | the month in the year for reoccurring meetings. |  [optional]


<a name="RecurrenceTypeEnum"></a>
## Enum: RecurrenceTypeEnum
Name | Value
---- | -----
DAILY | &quot;DAILY&quot;
WEEKLY | &quot;WEEKLY&quot;
MONTHLY | &quot;MONTHLY&quot;


<a name="WeekOfMonthEnum"></a>
## Enum: WeekOfMonthEnum
Name | Value
---- | -----
NONE | &quot;NONE&quot;
FIRST | &quot;FIRST&quot;
SECOND | &quot;SECOND&quot;
THIRD | &quot;THIRD&quot;
FOURTH | &quot;FOURTH&quot;
LAST | &quot;LAST&quot;


<a name="MonthOfYearEnum"></a>
## Enum: MonthOfYearEnum
Name | Value
---- | -----
NONE | &quot;NONE&quot;
JANUARY | &quot;JANUARY&quot;
FEBRUARY | &quot;FEBRUARY&quot;
MARCH | &quot;MARCH&quot;
APRIL | &quot;APRIL&quot;
MAY | &quot;MAY&quot;
JUNE | &quot;JUNE&quot;
JULY | &quot;JULY&quot;
AUGUST | &quot;AUGUST&quot;
SEPTEMBER | &quot;SEPTEMBER&quot;
OCTOBER | &quot;OCTOBER&quot;
NOVEMBER | &quot;NOVEMBER&quot;
DECEMBER | &quot;DECEMBER&quot;



