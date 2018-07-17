
# PayloadPairingCodeWebRTC

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointType** | [**EndpointTypeEnum**](#EndpointTypeEnum) | Type of physical device is pairing. |  [optional]
**userId** | **Integer** |  |  [optional]
**languageCode** | [**LanguageCodeEnum**](#LanguageCodeEnum) |  |  [optional]
**capabilities** | [**List&lt;CapabilitiesEnum&gt;**](#List&lt;CapabilitiesEnum&gt;) | Reserved for future use. Pass just an empty array for now. No parameters are currently accepted. |  [optional]


<a name="EndpointTypeEnum"></a>
## Enum: EndpointTypeEnum
Name | Value
---- | -----
GENERIC | &quot;GENERIC&quot;
LYNC | &quot;LYNC&quot;
JABBER | &quot;JABBER&quot;
BLUEJEANSBROWSERENDPOINT | &quot;BlueJeansBrowserEndpoint&quot;
BLUEJEANSMOBILEENDPOINT | &quot;BlueJeansMobileEndpoint&quot;
WRANGLERSKYPEENDPOINT | &quot;WranglerSkypeEndpoint&quot;
PSTN | &quot;PSTN&quot;
DCPAUDIOONLY | &quot;DCPAudioOnly&quot;


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
VIDEO | &quot;VIDEO&quot;
CONTENT | &quot;CONTENT&quot;



