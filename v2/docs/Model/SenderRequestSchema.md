# # SenderRequestSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | Number of the application for Sender registration | [optional] |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | [optional] |
| **status** | [**\BSG\Api\V2\Model\SenderRequestStatus**](SenderRequestStatus.md) |  | [optional] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **registered_at** | **\DateTime** | Sender registration date | [optional] |
| **status_changed_at** | **\DateTime** | Date and time when the status of the application for Sender registration changed. Format ISO 8601: yyyy-mm-dd hh:mm:ss | [optional] |
| **country_code** | **string** | Country code according to ISO 3166-1 alpha-2 standard | [optional] |
| **code_of_company** | **string** | National registration code of Company (ЄДРПОУ for Ukraine) | [optional] |
| **tax_number** | **string** | Taxpayer number | [optional] |
| **type** | [**\BSG\Api\V2\Model\SenderRequestType**](SenderRequestType.md) |  | [optional] |
| **site_url** | **string** | Website URL of your service | [optional] |
| **name** | **string** | Last name, first name, and middle name | [optional] |
| **legal_name** | **string** | Legal entity name | [optional] |
| **address** | **string** | Legal Address | [optional] |
| **informing_purpose** | **string** | Purpose of informing | [optional] |
| **comment** | **string** | any additional information | [optional] |
| **rejection_reason** | **string** | Reason for rejecting the application for Sender registration. Displayed only for the “rejected” application status | [optional] |
| **description** | **string** | Service description | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
