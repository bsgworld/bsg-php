# # SendWhatsAppCampaign

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **phones** | [**\BSG\Api\V2\Model\Phone[]**](Phone.md) | $phones | |
| **sender** | **string** | The name of the agent used to send the whatsapp message | |
| **type** | **string** | Type of Whatsapp message, only \&quot;template\&quot; now is supported | |
| **template** | [**\BSG\Api\V2\Model\Template**](Template.md) |  | [optional] |
| **alternative_channel** | [**\BSG\Api\V2\Model\SendWhatsAppCampaignAlternativeChannel**](SendWhatsAppCampaignAlternativeChannel.md) |  | [optional] |
| **start_at** | **\DateTime** | Start sending the messages at | [optional] |
| **add_to_contact_book** | **bool** | Specifies whether to add the specified phone number of the message recipient to the contact book | [optional] [default to true] |
| **check_stop_list** | **bool** | Check the recipient’s phone number for being in the stop list.  Possible values:    - true – if the number is found in the stop list, do not send the message  - false – ignore the stop list | [optional] [default to true] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
