
# FilterObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**TypeEnum**](#TypeEnum) | The data type of the comparison variable as selected from this list |  [optional]
**value** | **String** | Value for comparison testing.  A time field must be formatted as yyyy-mm-ddThh:mm:ss{gmt offset}. Example 2018-05-10T23:59:00-07:00 |  [optional]
**field** | [**FieldEnum**](#FieldEnum) |  |  [optional]
**comparison** | [**ComparisonEnum**](#ComparisonEnum) | A comparison operator selected from this list- less than, greater than, equal,and in |  [optional]


<a name="TypeEnum"></a>
## Enum: TypeEnum
Name | Value
---- | -----
STRING | &quot;string&quot;
BOOLEAN | &quot;boolean&quot;
NUMERIC | &quot;numeric&quot;
DATE | &quot;date&quot;
LIST | &quot;list&quot;


<a name="FieldEnum"></a>
## Enum: FieldEnum
Name | Value
---- | -----
STARTTIME | &quot;startTime&quot;
ENDTIME | &quot;endTime&quot;
MEETINGUUID | &quot;meetingUUID&quot;
USERID | &quot;userId&quot;
ENTERPRISEID | &quot;enterpriseId&quot;


<a name="ComparisonEnum"></a>
## Enum: ComparisonEnum
Name | Value
---- | -----
LT | &quot;lt&quot;
GT | &quot;gt&quot;
EQ | &quot;eq&quot;
IN | &quot;in&quot;



