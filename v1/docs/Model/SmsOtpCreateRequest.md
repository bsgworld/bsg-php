# # SmsOtpCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for OTP messages | |
| **msisdn** | **string** | Phone number for OTP delivery | |
| **reference** | **string** | Reference ID for OTP tracking | [optional] |
| **originator** | **string** | Sender name for OTP message | |
| **body** | **string** | OTP SMS text with auto-generation placeholders. Supported patterns: {gen_otp_09,4} - 4-digit numbers (0-9), {gen_otp_09,6} - 6-digit numbers, {gen_otp_AZ,4} - 4 uppercase letters (A-Z), {gen_otp_az,4} - 4 lowercase letters (a-z), {gen_otp_aZ,4} - 4 mixed case letters, {gen_otp_a9,8} - 8 chars letters+numbers, {gen_otp_**,6} - 6 chars with special symbols | |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
