# # SendEmail

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **to** | [**\BSG\Api\V2\Model\EmailTo**](EmailTo.md) |  | |
| **from** | **string** | The sender’s email address | |
| **subject** | **string** | The subject line of the email | |
| **body** | **string** | Optional email body as plain text in addition to &#x60;htmlbody&#x60; for old email clients without html support | [optional] |
| **htmlbody** | **string** | The HTML-formatted content of the email body (can include rich text elements) | |
| **inlines** | [**\BSG\Api\V2\Model\EmailInlines**](EmailInlines.md) |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
