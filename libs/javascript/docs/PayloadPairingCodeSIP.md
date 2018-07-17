# BlueJeansMeetingsRestApi.PayloadPairingCodeSIP

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointType** | **String** | Type of physical device is pairing. | 
**userId** | **Number** | Optional database id of user associated with endpoint | [optional] 
**languageCode** | **String** | Optional language code | [optional] [default to &#39;en&#39;]
**endpointName** | **String** | Optional name of endpoint | [optional] [default to &#39;My Test Endpoint&#39;]


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

* `en-us` (value: `"en-us"`)

* `en-gb` (value: `"en-gb"`)

* `de` (value: `"de"`)




