# # DetailCampaignSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | campaign unique identifier | [optional] |
| **name** | **string** | campaign auto generated name | [optional] |
| **sender** | **string** | Sender’s name: from 3 to 11 characters for the sender’s alphanumeric name (Latin letters, symbols, numbers, spaces); 3 to 15 characters for the sender’s numeric name. To setup senders visit the [account](https://app.bsg.world/sms/senders) | [optional] |
| **status** | [**\BSG\Api\V2\Model\CampaignStatus**](CampaignStatus.md) |  | [optional] |
| **type** | [**\BSG\Api\V2\Model\MessageType**](MessageType.md) |  | [optional] |
| **started_at** | **\DateTime** | Start sending the messages at | [optional] |
| **actual_start_at** | **\DateTime** | Real time when sending the messages starts | [optional] |
| **finished_at** | **\DateTime** |  | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **statistics** | [**\BSG\Api\V2\Model\StatisticsData**](StatisticsData.md) |  | [optional] |
| **alternative_channels** | [**\BSG\Api\V2\Model\DetailCampaignSchemaAlternativeChannels**](DetailCampaignSchemaAlternativeChannels.md) |  | [optional] |
| **total_messages** | **int** | Total count of messages sent in campaign | [optional] |
| **total_phones** | **int** | Total count if phone numbers in campaign | [optional] |
| **total_price** | **float** | Total price of all the messages sent in campaign | [optional] |
| **currency** | **string** | The currency code of the account. Specified according to the ISO-4217 standard | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
