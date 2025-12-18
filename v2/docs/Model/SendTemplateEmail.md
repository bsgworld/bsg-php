# # SendTemplateEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string[]** | List of email addresses to send the email to |
**from** | **string** | The sender’s email address |
**template_id** | **int** | ID of the email template to be used for the email’s content |
**subject** | **string** | The subject line of the email | [optional]
**template_content** | **array<string,mixed>[]** | JSON object with key-value pairs for dynamic content in the email template | [optional]
**inlines** | [**\BSG\\Api\\V2\Model\Inline[]**](Inline.md) | A list of inline attachments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
