
# PairingCodeWebRTC

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callguid** | **String** |  |  [optional]
**endpointGuid** | **String** |  |  [optional]
**forceTURN** | **Boolean** |  |  [optional]
**pairingCode** | **String** |  |  [optional]
**status** | **Integer** |  |  [optional]
**statusText** | [**StatusTextEnum**](#StatusTextEnum) |  |  [optional]
**turnservers** | [**List&lt;PairingCodeSIPTurnservers&gt;**](PairingCodeSIPTurnservers.md) |  |  [optional]
**uri** | **String** |  |  [optional]
**seamEndpointGuid** | **String** | Globally unique identifier associated with the media component of this endpoint for this meeting.  (Typically a string starting with \&quot;seamguid:\&quot;) |  [optional]
**connectionGuid** | **String** | Globally unique identifier associated with this endpoint in this meeting. (Typically a string starting with \&quot;connguid:\&quot;) |  [optional]
**endpointName** | **String** |  |  [optional]


<a name="StatusTextEnum"></a>
## Enum: StatusTextEnum
Name | Value
---- | -----
OK | &quot;OK&quot;



