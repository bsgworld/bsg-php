# # SmsPriceCheckSinglePhone

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for single recipient | |
| **msisdn** | **string** | Phone number in international format for price calculation | |
| **originator** | **string** | Sender name for pricing calculation | |
| **body** | **string** | SMS text content for length/parts calculation | |
| **transliterate** | **bool** | Apply transliteration (affects message length and pricing) | [optional] [default to false] |
| **data_coding_ucs2** | **bool** | Force UCS-2 encoding (affects message length and pricing) | [optional] [default to false] |
| **tariff** | **int** | Specific tariff code for pricing (optional) | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
