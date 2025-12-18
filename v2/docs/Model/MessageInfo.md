# # MessageInfo

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | Message ID – a unique identifier automatically generated on the Platform when the message is created | [optional] |
| **reference_id** | **string** | external unique ID. String up to 32 characters containing only alpha numeric characters.  **Please note:** messages with duplicate reference_id will be rejected | [optional] |
| **source** | [**\BSG\Api\V2\Model\MessageSource**](MessageSource.md) |  | [optional] |
| **type** | [**\BSG\Api\V2\Model\MessageType**](MessageType.md) |  | [optional] |
| **phone** | **int** | Phone number without leading plus, just digits | [optional] |
| **status** | [**\BSG\Api\V2\Model\MessageStatus**](MessageStatus.md) |  | [optional] |
| **validity** | **int** | validity time in hours. The default is 72 hours. Integer from 1 to 72 | [optional] [default to 72] |
| **amount** | [**\BSG\Api\V2\Model\MessagePriceObject**](MessagePriceObject.md) |  | [optional] |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **sent_at** | **\DateTime** | Date and time of sending the message | [optional] |
| **delivered_at** | **\DateTime** | Date and time of receipt of the delivery report response | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
