
# PayloadPairingCodePstn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointName** | **String** | Typically, the first and last name of the user. |  [optional]
**endpointType** | [**EndpointTypeEnum**](#EndpointTypeEnum) | Type of physical device is pairing. |  [optional]
**userId** | **Integer** | (optional) The ID of a registered BlueJeans user associated with this outdial |  [optional]
**languageCode** | [**LanguageCodeEnum**](#LanguageCodeEnum) |  |  [optional]
**capabilities** | [**List&lt;CapabilitiesEnum&gt;**](#List&lt;CapabilitiesEnum&gt;) | Send a single element set to AUDIO at this time. |  [optional]


<a name="EndpointTypeEnum"></a>
## Enum: EndpointTypeEnum
Name | Value
---- | -----
PSTN | &quot;PSTN&quot;


<a name="LanguageCodeEnum"></a>
## Enum: LanguageCodeEnum
Name | Value
---- | -----
EN | &quot;en&quot;


<a name="List<CapabilitiesEnum>"></a>
## Enum: List&lt;CapabilitiesEnum&gt;
Name | Value
---- | -----
AUDIO | &quot;AUDIO&quot;



