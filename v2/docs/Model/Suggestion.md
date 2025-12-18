# # Suggestion

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **text** | **string** | text of the button | |
| **url** | **string** | A link to go through a click on the button. The link should start with http/https.  If you need to add a button to unsubscribe the user from the mailing list, you can specify a link in the format http://nosms.cc/XXXX – the Platform will generate an Unsubscribe link for this action when sending the message. When the user clicks on the unsubscribe button, the user’s number will be added to the RCS email stop list. | |
| **postback_data** | **string** | Extra data to send on callback_url when user click on the button | [optional] |
| **phone** | **string** | Phone number to call with a click of a button. 9 – 15 characters (the length must take into account the country code and phone number, the phone number is indicated without +). When sending RCS messages to the country of Ukraine, the phone number to call via the button must be a Ukrainian number | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
