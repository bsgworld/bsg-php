# # SmsPriceCheckResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Error code: 0 for success. Common errors: 1&#x3D;Invalid phone, 7&#x3D;Invalid originator, 24&#x3D;Invalid payload JSON, 14&#x3D;Not enough balance, 15&#x3D;Invalid price grid |
**error_description** | **string** | Human-readable error description |
**totalprice** | **float** | Total calculated price for the SMS message(s) that would be sent |
**currency** | **string** | Currency code according to ISO-4217 standard |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
