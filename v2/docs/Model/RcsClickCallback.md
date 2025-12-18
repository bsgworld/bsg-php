# # RcsClickCallback

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | Message ID – a unique identifier automatically generated on the Platform when the message is created | [optional] |
| **reference** | **string** | external unique ID. String up to 32 characters containing only alpha numeric characters.  **Please note:** messages with duplicate reference_id will be rejected | [optional] |
| **msisdn** | **string** | Phone number without leading plus, just digits | [optional] |
| **text** | **string** | Text on clicked button from suggestions | [optional] |
| **postback** | **string** | postback_data field value from suggestion button object | [optional] |
| **time_click** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
