# # SenderSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** |  | [optional] |
| **status** | **string** |  | [optional] |
| **country** | [**\BSG\Api\V2\Model\SenderSchemaCountry**](SenderSchemaCountry.md) |  | [optional] |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **is_default** | **bool** |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
