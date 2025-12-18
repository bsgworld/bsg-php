# # SmsMultipleCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for multiple recipients | |
| **phones** | [**\BSG\Api\V1\Model\PhonenumbersPhonesItem[]**](PhonenumbersPhonesItem.md) | Array of phone objects (required for destination&#x3D;phones). Maximum 1000 recipients per request | |
| **reference** | **string** | Global reference ID for entire batch | [optional] |
| **originator** | **string** | Sender name for all messages in batch | |
| **body** | **string** | SMS text content for all recipients | |
| **callback_url** | **string** | HTTPS URL for receiving delivery reports | [optional] |
| **transliterate** | **bool** | Apply transliteration to SMS text. Converts Cyrillic characters to Latin equivalents to reduce message cost and ensure delivery | [optional] [default to false] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
