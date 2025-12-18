# # RcsStatusCallback

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **error** | **int** | error code, 0 - if successful | [optional] |
| **error_description** | **string** | error description | [optional] |
| **id** | **int** | Message ID – a unique identifier automatically generated on the Platform when the message is created | [optional] |
| **msisdn** | **string** | Phone number without leading plus, just digits | [optional] |
| **reference** | **string** | external unique ID. String up to 32 characters containing only alpha numeric characters.  **Please note:** messages with duplicate reference_id will be rejected | [optional] |
| **time_in** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **time_sent** | **\DateTime** | Date and time of sending the message | [optional] |
| **time_dr** | **\DateTime** | Date and time of receipt of the delivery report response | [optional] |
| **status** | [**\BSG\Api\V2\Model\MessageStatus**](MessageStatus.md) |  | [optional] |
| **price** | **float** | Message price | [optional] |
| **currency** | **string** | The currency code of the account. Specified according to the ISO-4217 standard | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
