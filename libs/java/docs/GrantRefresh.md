
# GrantRefresh

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessToken** | **String** | The access token acts as a kind of \&quot;valet key\&quot; that the application can include with its requests to the identity provider, which prove that it has permission from the user to access those APIs. |  [optional]
**refreshToken** | **String** | A longer lasting token that may be used to retrieve new access tokens upon access token expiration. |  [optional]
**expiresIn** | **Integer** | Seconds that access token is valid for from now. |  [optional]
**scope** | [**GrantRefreshScope**](GrantRefreshScope.md) |  |  [optional]



