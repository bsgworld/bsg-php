# # MessagesschemaMessagesItem

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **text** | **string** | Viber message text (required) | |
| **alpha_name** | **string** | Viber sender name (required, must be pre-registered) | |
| **to** | [**\BSG\Api\V1\Model\ToschemaToItem[]**](ToschemaToItem.md) | Recipients array (required) | |
| **is_promotional** | **int** | Message type: 1 &#x3D; promotional, 0 &#x3D; transactional | [optional] [default to self::IS_PROMOTIONAL_NUMBER_1] |
| **callback_url** | **string** | URL for receiving delivery reports | [optional] |
| **scheduled_datetime** | **\DateTime** | Schedule message for future delivery (UTC) | [optional] |
| **options** | [**\BSG\Api\V1\Model\OptionsSchema**](OptionsSchema.md) |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
