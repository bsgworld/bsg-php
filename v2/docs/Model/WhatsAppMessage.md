# # WhatsAppMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | [**\BSG\\Api\\V2\Model\Phone**](Phone.md) |  |
**sender** | **string** |  |
**type** | **string** |  |
**template** | [**\BSG\\Api\\V2\Model\WhatsAppMessageTemplate**](WhatsAppMessageTemplate.md) |  | [optional]
**alternative_channel** | [**\BSG\\Api\\V2\Model\SendRcsCampaignGroupsAlternativeChannel**](SendRcsCampaignGroupsAlternativeChannel.md) |  | [optional]
**callback_url** | **mixed** | Link to get the delivery status of messages. If this parameter is specified in the method, it will take precedence over the value specified in the “Callback URL” field in the Personal Area. | [optional]
**add_to_contact_book** | **bool** |  | [optional] [default to true]
**check_stop_list** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
