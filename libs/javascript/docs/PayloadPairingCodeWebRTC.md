# BlueJeansMeetingsRestApi.PayloadPairingCodeWebRTC

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointType** | **String** | Type of physical device is pairing. | [optional] 
**userId** | **Number** |  | [optional] 
**languageCode** | **String** |  | [optional] 
**capabilities** | **[String]** | Reserved for future use. Pass just an empty array for now. No parameters are currently accepted. | [optional] 


<a name="EndpointTypeEnum"></a>
## Enum: EndpointTypeEnum


* `GENERIC` (value: `"GENERIC"`)

* `LYNC` (value: `"LYNC"`)

* `JABBER` (value: `"JABBER"`)

* `BlueJeansBrowserEndpoint` (value: `"BlueJeansBrowserEndpoint"`)

* `BlueJeansMobileEndpoint` (value: `"BlueJeansMobileEndpoint"`)

* `WranglerSkypeEndpoint` (value: `"WranglerSkypeEndpoint"`)

* `PSTN` (value: `"PSTN"`)

* `DCPAudioOnly` (value: `"DCPAudioOnly"`)




<a name="LanguageCodeEnum"></a>
## Enum: LanguageCodeEnum


* `en` (value: `"en"`)




<a name="[CapabilitiesEnum]"></a>
## Enum: [CapabilitiesEnum]


* `AUDIO` (value: `"AUDIO"`)

* `VIDEO` (value: `"VIDEO"`)

* `CONTENT` (value: `"CONTENT"`)




