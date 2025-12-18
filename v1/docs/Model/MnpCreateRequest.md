# # MnpCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **msisdn** | **string** | Phone number in international format for MNP lookup | |
| **reference** | **string** | Global reference ID for the entire batch | [optional] |
| **tariff** | **int** | Tariff code for pricing (optional, uses user default if not provided) | [optional] |
| **callback_url** | **string** | URL for delivery reports (optional) | [optional] |
| **msisdns** | [**\BSG\Api\V1\Model\MnpbulkrequestmsisdnsMsisdnsItem[]**](MnpbulkrequestmsisdnsMsisdnsItem.md) | Array of phone numbers for MNP lookup | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
