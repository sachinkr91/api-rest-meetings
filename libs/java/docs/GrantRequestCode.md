
# GrantRequestCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grantType** | [**GrantTypeEnum**](#GrantTypeEnum) | The type of access token you are requesting. Use \&quot;authorization_code\&quot;. | 
**clientId** | **String** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | 
**clientSecret** | **String** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | 
**redirectUri** | **String** | One of the registered url or sub-url of registered urls. | 
**code** | **String** | Code obtained after /oauth2/authorize redirect. | 


<a name="GrantTypeEnum"></a>
## Enum: GrantTypeEnum
Name | Value
---- | -----
AUTHORIZATION_CODE | &quot;authorization_code&quot;



