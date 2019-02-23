# GrantRequestCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grant_type** | **string** | The type of access token you are requesting. Use \&quot;authorization_code\&quot;. | [optional] [default to 'authorization_code']
**client_id** | **string** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | [optional] 
**client_secret** | **string** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | [optional] 
**redirect_uri** | **string** | One of the registered url or sub-url of registered urls. | [optional] 
**code** | **string** | Code obtained after /oauth2/authorize redirect. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


