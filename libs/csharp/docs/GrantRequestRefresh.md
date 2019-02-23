# com.bluejeans.api.rest.meetings.Model.GrantRequestRefresh
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**GrantType** | **string** | The type of access token you are requesting. | [optional] [default to GrantTypeEnum.Refreshtoken]
**ClientId** | **string** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | [optional] 
**ClientSecret** | **string** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | [optional] 
**RefreshToken** | **string** | Refresh token obtained after token authorization. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

