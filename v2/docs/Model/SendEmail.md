# # SendEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string[]** | List of email addresses to send the email to |
**from** | **string** | The sender’s email address |
**subject** | **string** | The subject line of the email |
**body** | **string** | Optional email body as plain text in addition to &#x60;htmlbody&#x60; for old email clients without html support | [optional]
**htmlbody** | **string** | The HTML-formatted content of the email body (can include rich text elements) |
**inlines** | [**\BSG\\Api\\V2\Model\Inline[]**](Inline.md) | A list of inline attachments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
