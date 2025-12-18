# # MnpStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Error code (0 &#x3D; success, 80 &#x3D; not found) |
**error_description** | **string** | Human-readable error description |
**country** | **string** | Full country name in English | [optional]
**brand** | **string** | Mobile operator brand name | [optional]
**operator** | **string** | Full operator name with country | [optional]
**mcc** | **string** | Mobile Country Code (ITU-T E.212) | [optional]
**mnc** | **string** | Mobile Network Code identifying operator | [optional]
**ported** | **int** | Number portability status (0 &#x3D; not ported, 1 &#x3D; ported) | [optional]
**reference** | **string** | External reference ID for tracking | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
