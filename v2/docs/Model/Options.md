# # Options

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **cards** | [**\BSG\Api\V2\Model\Card[]**](Card.md) | The array contains information about the card. The maximum number of cards is 5. Messages with one card are called “Single card”, messages with 2 or more cards are called “Carousel”. Depending on the chosen tariff, the number of cards may be limited (for example, you can send only Single cards).  Details will be provided by manager. | |
| **text** | **string** | It is specified only for the “text” message type. RCS message text is  up to 160 characters. Can contain emojis (character count for emojis according to UTF-16 code points. Simple emojis take 2 code points, complex emojis take 4, Cyrillic emojis take 1). If the message contains a link in the format http://nosms.cc/XXXX, the System will generate an Unsubscribe link while sending the message | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
