# BlueJeansMeetingsRestApi.FilterObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **String** | The data type of the comparison variable as selected from this list | [optional] 
**value** | **String** | Value for comparison testing.  A time field must be formatted as yyyy-mm-ddThh:mm:ss (gmt offset). Example 2018-05-10T23:59:00-07:00 | [optional] 
**field** | **String** | One of the BlueJeans meetings fields selected from this list to be used for comparison testing | [optional] 
**comparison** | **String** | A comparison operator selected from this list- less than, greater than, equal,and in | [optional] 


<a name="TypeEnum"></a>
## Enum: TypeEnum


* `string` (value: `"string"`)

* `boolean` (value: `"boolean"`)

* `numeric` (value: `"numeric"`)

* `date` (value: `"date"`)

* `list` (value: `"list"`)




<a name="FieldEnum"></a>
## Enum: FieldEnum


* `startTime` (value: `"startTime"`)

* `endTime` (value: `"endTime"`)

* `meetingUUID` (value: `"meetingUUID"`)

* `userId` (value: `"userId"`)

* `enterpriseId` (value: `"enterpriseId"`)




<a name="ComparisonEnum"></a>
## Enum: ComparisonEnum


* `lt` (value: `"lt"`)

* `gt` (value: `"gt"`)

* `eq` (value: `"eq"`)

* `in` (value: `"in"`)




