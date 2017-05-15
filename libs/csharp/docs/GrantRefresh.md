# com.bluejeans.api.rest.onvideo.Model.GrantRefresh
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AccessToken** | **string** | The access token acts as a kind of \&quot;valet key\&quot; that the application can include with its requests to the identity provider, which prove that it has permission from the user to access those APIs. | [optional] 
**RefreshToken** | **string** | A longer lasting token that may be used to retrieve new access tokens upon access token expiration. | [optional] 
**ExpiresIn** | **int?** | Seconds that access token is valid for from now. | [optional] 
**Scope** | [**GrantCodeScope**](GrantCodeScope.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

