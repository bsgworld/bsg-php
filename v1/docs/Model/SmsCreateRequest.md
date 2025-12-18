# # SmsCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for OTP messages | |
| **msisdn** | **string** | Phone number for OTP delivery | |
| **reference** | **string** | Reference ID for OTP tracking | [optional] |
| **originator** | **string** | Sender name for OTP message | |
| **body** | **string** | OTP SMS text with auto-generation placeholders. Supported patterns: {gen_otp_09,4} - 4-digit numbers (0-9), {gen_otp_09,6} - 6-digit numbers, {gen_otp_AZ,4} - 4 uppercase letters (A-Z), {gen_otp_az,4} - 4 lowercase letters (a-z), {gen_otp_aZ,4} - 4 mixed case letters, {gen_otp_a9,8} - 8 chars letters+numbers, {gen_otp_**,6} - 6 chars with special symbols | |
| **callback_url** | **string** | HTTPS URL for receiving delivery reports | [optional] |
| **callback_url_2way** | **string** | HTTPS URL for receiving 2-way SMS responses. Only works if 2way&#x3D;true and sender supports incoming messages | [optional] |
| **transliterate** | **bool** | Apply transliteration to SMS text. Converts Cyrillic characters to Latin equivalents to reduce message cost and ensure delivery | [optional] [default to false] |
| **_2way** | **bool** | Enable two-way SMS communication for all messages | [optional] [default to false] |
| **tariff** | **int** | Tariff code for pricing all messages | [optional] |
| **scheduled_datetime** | **\DateTime** | Schedule all messages delivery for future time | [optional] |
| **data_coding_ucs2** | **bool** | Force UCS-2 (Unicode) encoding for message text. Useful for non-Latin characters (Cyrillic, Arabic, Chinese, etc). Reduces max message length to 355 characters | [optional] [default to false] |
| **validity** | **int** | Message validity period in hours for all messages | [optional] |
| **phones** | [**\BSG\Api\V1\Model\PhonenumbersPhonesItem1[]**](PhonenumbersPhonesItem1.md) | Array of phone objects with individual message content. Each phone has its own originator and message text | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
