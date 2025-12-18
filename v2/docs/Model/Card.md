# # Card

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **title** | **string** | Message title | [optional] |
| **text** | **string** | It is specified only for the “text” message type. RCS message text is up to 1000 characters. Can contain emojis (character count for emojis according to UTF-16 code points. Simple emojis take 2 code points, complex emojis take 4, Cyrillic emojis take 1). If the message contains a link in the format http://nosms.cc/XXXX, the System will generate an Unsubscribe link while sending the message  **Please note:** If the message contains a media object, the text parameter is optional and can be omitted | [optional] |
| **media** | [**\BSG\Api\V2\Model\Media**](Media.md) |  | [optional] |
| **suggestions** | [**\BSG\Api\V2\Model\Suggestion[]**](Suggestion.md) | An array of objects containing information about nested buttons. Only up to 2 buttons can be added to a card. | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
