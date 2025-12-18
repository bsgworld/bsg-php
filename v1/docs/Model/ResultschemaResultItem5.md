# # ResultschemaResultItem5

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **error** | **int** | Error code: 0 for success, 80-86 for MNP-specific errors | [optional] |
| **error_description** | **string** | Human-readable error description | [optional] |
| **msisdn** | **string** | Phone number for MNP lookup in international format | [optional] |
| **tariff_code** | **string** | Service tariff code used for pricing | [optional] |
| **price** | **float** | Price for MNP lookup request | [optional] |
| **currency** | **string** | Currency code according to ISO-4217 standard | [optional] |
| **info** | [**\BSG\Api\V1\Model\InfoSchema**](InfoSchema.md) |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
