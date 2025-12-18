# # SmsPriceCheckMultiplePhones

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for multiple recipients | |
| **phones** | [**\BSG\Api\V1\Model\PhonenumbersPhonesItem2[]**](PhonenumbersPhonesItem2.md) | Array of phone objects for bulk price calculation | |
| **originator** | **string** | Sender name for all messages | |
| **body** | **string** | SMS text content for all recipients | |
| **transliterate** | **bool** | Apply transliteration to SMS text | [optional] [default to false] |
| **tariff** | **int** | Specific tariff code for pricing (optional) | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
