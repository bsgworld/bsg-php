# # MessageApiSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | Message ID – a unique identifier automatically generated on the Platform when the message is created | [optional] |
| **campaign_id** | **int** | campaign unique identifier | [optional] |
| **reference_id** | **string** | external unique ID. String up to 32 characters containing only alpha numeric characters.  **Please note:** messages with duplicate reference_id will be rejected | [optional] |
| **type** | [**\BSG\Api\V2\Model\MessageType**](MessageType.md) |  | [optional] |
| **source** | [**\BSG\Api\V2\Model\MessageSource**](MessageSource.md) |  | [optional] |
| **text** | **string** | Message text to send | [optional] |
| **phone** | **int** | Phone number without leading plus, just digits | [optional] |
| **validity** | **int** | validity time in hours. The default is 72 hours. Integer from 1 to 72 | [optional] [default to 72] |
| **status** | [**\BSG\Api\V2\Model\MessageStatus**](MessageStatus.md) |  | [optional] |
| **amount** | [**\BSG\Api\V2\Model\MessagePriceObject**](MessagePriceObject.md) |  | [optional] |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **sent_at** | **\DateTime** | Date and time of sending the message | [optional] |
| **delivered_at** | **\DateTime** | Date and time of receipt of the delivery report response | [optional] |
| **country** | **string** | Country code according to ISO 3166-1 alpha-2 standard | [optional] |
| **parts** | **int** |  | [optional] |
| **rcs_options** | [**\BSG\Api\V2\Model\Options**](Options.md) |  | [optional] |
| **alternative_channels** | [**\BSG\Api\V2\Model\MessageApiSchemaAlternativeChannels**](MessageApiSchemaAlternativeChannels.md) |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
