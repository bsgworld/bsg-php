# # SenderRequestLegalRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **country_code** | **string** | Country code according to ISO 3166-1 alpha-2 standard | |
| **type** | [**\BSG\Api\V2\Model\SenderRequestType**](SenderRequestType.md) |  | |
| **sender** | **string** | Sender name.   Up to 11 Latin letters or digits, up to 15 – only digits. To setup senders visit the [account](https://app.bsg.world/sms/senders) or use [sender api](#tag/Senders) | |
| **code_of_company** | **string** | National registration code of Company (ЄДРПОУ for Ukraine) | |
| **tax_number** | **string** | Taxpayer number | |
| **description** | **string** | Service description | |
| **informing_purpose** | **string** | Purpose of informing | |
| **site_url** | **string** | Website URL of your service | [optional] |
| **comment** | **string** | any additional information | [optional] |
| **legal_name** | **string** | Legal entity name | [optional] |
| **address** | **string** | Legal Address | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
