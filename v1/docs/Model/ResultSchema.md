# # ResultSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **error** | **int** | Error code: 0 for success, non-zero for various error conditions | |
| **error_description** | **string** | Human-readable error description. \&quot;No errors\&quot; when operation succeeds | |
| **reference** | **string** | External reference ID provided in request or auto-generated | [optional] |
| **id** | **string** | Internal message ID assigned by SMS Gateway | [optional] |
| **price** | **float** | Actual cost of sending this SMS message | [optional] |
| **currency** | **string** | Currency code according to ISO-4217 standard | [optional] |
| **otp_code** | **string** | Auto-generated OTP code (only present for destination&#x3D;otp requests) | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
