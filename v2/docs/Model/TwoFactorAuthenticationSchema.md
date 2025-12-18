# # TwoFactorAuthenticationSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **string** | The ID of the generated authentication | [optional] |
| **recipient** | **string** | Number of the recipient of the message with a one-time code | [optional] |
| **status** | [**\BSG\Api\V2\Model\OtpStatus**](OtpStatus.md) |  | [optional] |
| **channel** | [**\BSG\Api\V2\Model\OtpChannel**](OtpChannel.md) |  | [optional] |
| **sender** | **string** | Sender name | [optional] |
| **sender_alt** | **string** | SMS sender name | [optional] |
| **message_text** | **string** | Message text. | [optional] |
| **code_lifetime** | **int** | OTP expiration date | [optional] |
| **code_max_tries** | **int** | The number of OTP check attempts | [optional] |
| **code_digits** | **int** | The number of digits in the OTP | [optional] |
| **price** | **float** | Authentication cost. At the time of creating the authentication, 0 is indicated | [optional] |
| **currency** | **string** | The three-letter code of the currency in which the value is indicated. Corresponds to the user’s account currency | [optional] |
| **country_code** | **string** | The country code of the recipient of the one-time password according to the ISO 3166-1 alpha-2 standard | [optional] |
| **expired_at** | **\DateTime** | Date and time when the authentication expires in ISO 8601 format | [optional] |
| **created_at** | **\DateTime** | The date and time of the authentication session were created in ISO 8601 format | [optional] |
| **finished_at** | **\DateTime** | Date and time when the authentication session was closed. At the time of creating the authentication, the value “null” is indicated | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
