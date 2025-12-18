# # SmsSendGroupsRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **groups** | **int[]** | one or several contact list id to send messages. id of the lists can be obtained: using the Get [lists API](#tag/Contact-List) in your account [Contact Book → Lists](https://app.bsg.world/addressbook/lists) | [optional] |
| **sender** | **string** | Sender’s name: from 3 to 11 characters for the sender’s alphanumeric name (Latin letters, symbols, numbers, spaces); 3 to 15 characters for the sender’s numeric name. To setup senders visit the [account](https://app.bsg.world/sms/senders) | |
| **text** | **string** | SMS text, max length is 765 chars for GSM 7-bit encoding (Latin), and 355 for UCS-2 | |
| **tariff_code** | **int** | Tariff code null by default. Your can pass specified one if you have several. For more information please visit the [account prices](https://app.bsg.world/prices/sms) | [optional] |
| **validity** | **int** | validity time in hours. The default is 72 hours. Integer from 1 to 72 | [optional] [default to 72] |
| **start_at** | **\DateTime** | Start sending the messages at | [optional] |
| **short_links** | [**\BSG\Api\V2\Model\ShortLink[]**](ShortLink.md) |  | [optional] |
| **transliterate** | **bool** | apply transliteration to sms text if it necessary | [optional] [default to false] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
