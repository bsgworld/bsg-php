# # SenderRequestLegalSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | Number of the application for Sender registration | [optional] |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | [optional] |
| **legal_name** | **string** | Legal entity name | [optional] |
| **address** | **string** | Legal Address | [optional] |
| **status** | [**\BSG\Api\V2\Model\SenderRequestStatus**](SenderRequestStatus.md) |  | [optional] |
| **type** | [**\BSG\Api\V2\Model\SenderRequestType**](SenderRequestType.md) |  | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **country_code** | **string** | Country code according to ISO 3166-1 alpha-2 standard | [optional] |
| **code_of_company** | **string** | National registration code of Company (ЄДРПОУ for Ukraine) | [optional] |
| **tax_number** | **string** | Taxpayer number | [optional] |
| **site_url** | **string** | Website URL of your service | [optional] |
| **informing_purpose** | **string** | Purpose of informing | [optional] |
| **comment** | **string** | any additional information | [optional] |
| **description** | **string** | Service description | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
