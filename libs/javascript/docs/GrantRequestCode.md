# BlueJeansMeetingsRestApi.GrantRequestCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grantType** | **String** | The type of access token you are requesting. Use \&quot;authorization_code\&quot;. | [optional] [default to &#39;authorization_code&#39;]
**clientId** | **String** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | [optional] 
**clientSecret** | **String** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | [optional] 
**redirectUri** | **String** | One of the registered url or sub-url of registered urls. | [optional] 
**code** | **String** | Code obtained after /oauth2/authorize redirect. | [optional] 


<a name="GrantTypeEnum"></a>
## Enum: GrantTypeEnum


* `authorization_code` (value: `"authorization_code"`)




