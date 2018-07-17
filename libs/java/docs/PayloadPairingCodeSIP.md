
# PayloadPairingCodeSIP

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointType** | [**EndpointTypeEnum**](#EndpointTypeEnum) | Type of physical device is pairing. | 
**userId** | **Integer** | Optional database id of user associated with endpoint |  [optional]
**languageCode** | [**LanguageCodeEnum**](#LanguageCodeEnum) | Optional language code |  [optional]
**endpointName** | **String** | Optional name of endpoint |  [optional]


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
EN_US | &quot;en-us&quot;
EN_GB | &quot;en-gb&quot;
DE | &quot;de&quot;



