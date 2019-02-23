# BlueJeansMeetingsRestApi.GrantRequestRefresh

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grantType** | **String** | The type of access token you are requesting. | [optional] [default to &#39;refresh_token&#39;]
**clientId** | **String** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | [optional] 
**clientSecret** | **String** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | [optional] 
**refreshToken** | **String** | Refresh token obtained after token authorization. | [optional] 


<a name="GrantTypeEnum"></a>
## Enum: GrantTypeEnum


* `refresh_token` (value: `"refresh_token"`)




