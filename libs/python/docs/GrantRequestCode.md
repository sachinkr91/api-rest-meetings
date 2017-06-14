# GrantRequestCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grant_type** | **str** | The type of access token you are requesting. Use \&quot;authorization_code\&quot;. | [default to 'authorization_code']
**client_id** | **str** | The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string. | 
**client_secret** | **str** | The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate. | 
**redirect_uri** | **str** | One of the registered url or sub-url of registered urls. | 
**code** | **str** | Code obtained after /oauth2/authorize redirect. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


