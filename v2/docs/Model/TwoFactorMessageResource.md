# # TwoFactorMessageResource

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | The unique ID of the message | [optional] |
| **recipient** | **string** | Number of the recipient of the message with a one-time code | [optional] |
| **status** | [**\BSG\Api\V2\Model\OtpMessageStatus**](OtpMessageStatus.md) |  | [optional] |
| **channel** | [**\BSG\Api\V2\Model\OtpChannel**](OtpChannel.md) |  | [optional] |
| **sender** | **string** | Sender name | [optional] |
| **price** | **float** | Message cost | [optional] |
| **currency** | **string** | The three-letter code of the currency in which the value is indicated. Corresponds to the user’s account currency | [optional] |
| **sent_at** | **string** | The date and time of the message were sent in ISO 8601 format | [optional] |
| **created_at** | **string** | The date and time the message was created in ISO 8601 format | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
