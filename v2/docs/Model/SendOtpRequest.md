# # SendOtpRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **recipient** | **string** | The phone number of the recipient of the one-time password. 9 to 15 digits without the + sign. 3 to 15 characters for the sender’s numeric name. | |
| **channel** | **string** | A channel for sending a one-time password. Possible values: sms, viber. | |
| **sender** | **string** | Sender’s name: from 3 to 11 characters for the sender’s alphanumeric name (Latin letters, symbols, numbers, spaces); 3 to 15 characters for the sender’s numeric name. To setup senders visit the [account](https://app.bsg.world/sms/senders) | |
| **sender_alt** | **string** | Used only for the Viber channel to alternatively send a one-time code in SMS (if it was not possible to send the code in a Viber message, for example, if the recipient is not a Viber user).The name or number of the SMS sender. String up to 15 characters: from 3 to 11 characters for the sender’s alphanumeric name (Latin letters, symbols, numbers, spaces); 3 to 15 characters for the sender’s numeric name. | [optional] |
| **template_id** | **int** | Unique identifier of the [template](https://app.bsg.world/2fa/templates) with the Approved status. It’s not allowed to specify the template ID in other statuses. The template ID must be from 1 to 9 digits | |
| **code_lifetime** | **int** | The password expiration time after which the password becomes invalid. An integer from 30 seconds to 300 seconds. | |
| **code_max_tries** | **int** | The number of password verification attempts. An integer from 1 to 5. | |
| **code_digits** | **int** | The length of the numeric code, from 3 to 9 digits. | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
