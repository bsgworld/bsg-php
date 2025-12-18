# # SendRcsCampaign

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **phones** | [**\BSG\Api\V2\Model\Phone[]**](Phone.md) | The list of objects containing information about the mobile phone number (number) and (reference_id) to send a message to | |
| **sender** | **string** | The name of the agent used to send the rcs message | |
| **options** | [**\BSG\Api\V2\Model\Options**](Options.md) |  | |
| **alternative_channel** | [**\BSG\Api\V2\Model\AlternativeChannel**](AlternativeChannel.md) |  | [optional] |
| **start_at** | **\DateTime** | Start sending the messages at | [optional] |
| **tariff_code** | **int** | Tariff code null by default. Your can pass specified one if you have several. For more information please visit the [account prices](https://app.bsg.world/prices/sms) | [optional] |
| **validity_seconds** | **int** | Message validity period in seconds. After this period expires, the message will be in **EXPIRED** status or will be redirected to the SMS channel if it was specified in the request | [optional] |
| **validity** | **int** | validity time in hours. The default is 72 hours. Integer from 1 to 72 | [optional] [default to 72] |
| **add_to_contact_book** | **bool** | Specifies whether to add the specified phone number of the message recipient to the contact book | [optional] [default to true] |
| **check_stop_list** | **bool** | Check the recipient’s phone number for being in the stop list.  Possible values:    - true – if the number is found in the stop list, do not send the message  - false – ignore the stop list | [optional] [default to true] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
