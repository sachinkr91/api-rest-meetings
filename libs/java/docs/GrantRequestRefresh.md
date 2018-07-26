
# GrantRequestRefresh

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grantType** | [**GrantTypeEnum**](#GrantTypeEnum) | The type of access token you are requesting. | 
**clientId** | **String** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | 
**clientSecret** | **String** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | 
**refreshToken** | **String** | Refresh token obtained after token authorization. | 


<a name="GrantTypeEnum"></a>
## Enum: GrantTypeEnum
Name | Value
---- | -----
REFRESH_TOKEN | &quot;refresh_token&quot;



