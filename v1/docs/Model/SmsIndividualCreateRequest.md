# # SmsIndividualCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for individual customized messages per recipient | |
| **phones** | [**\BSG\Api\V1\Model\PhonenumbersPhonesItem1[]**](PhonenumbersPhonesItem1.md) | Array of phone objects with individual message content. Each phone has its own originator and message text | |
| **reference** | **string** | Global reference ID for entire individual batch | [optional] |
| **validity** | **int** | Message validity period in hours for all messages | [optional] |
| **tariff** | **int** | Tariff code for pricing all messages | [optional] |
| **_2way** | **bool** | Enable two-way SMS communication for all messages | [optional] [default to false] |
| **scheduled_datetime** | **\DateTime** | Schedule all messages delivery for future time | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
