# # SmsSingleCreateRequest

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **destination** | **string** | Message destination type for single recipient | |
| **msisdn** | **string** | Phone number in international format without + sign. Required for destination&#x3D;phone/otp. Must be 8-15 digits starting with country code | |
| **reference** | **string** | External reference ID for tracking message. Must be unique. Auto-generated if not provided. Only alphanumeric characters, hyphens and underscores allowed | [optional] |
| **originator** | **string** | Sender&#39;s name: from 3 to 11 characters for alphanumeric name (Latin letters, symbols, numbers, spaces); 3 to 15 characters for numeric name. Required field | |
| **body** | **string** | SMS text content. Maximum length is 765 characters for GSM 7-bit encoding (Latin), and 355 characters for UCS-2 (Unicode). Required field | |
| **callback_url** | **string** | HTTPS URL for receiving delivery reports (DLR). Must be accessible from our servers. We will POST delivery status updates to this endpoint | [optional] |
| **callback_url_2way** | **string** | HTTPS URL for receiving 2-way SMS responses. Only works if 2way&#x3D;true and sender supports incoming messages | [optional] |
| **transliterate** | **bool** | Apply transliteration to SMS text if necessary. Converts Cyrillic characters to Latin equivalents to reduce message cost and ensure delivery | [optional] [default to false] |
| **_2way** | **bool** | Enable two-way SMS communication. Allows recipients to reply to your message. Requires callback_url_2way for receiving replies | [optional] [default to false] |
| **tariff** | **int** | Specific tariff code to use for pricing this message. Optional - uses user&#39;s default tariff if not specified. Must be a valid tariff code available to your account | [optional] |
| **scheduled_datetime** | **\DateTime** | Schedule message delivery for future time. Must be in UTC format (ISO 8601). Example: 2024-12-25T10:30:00Z. If not specified, message is sent immediately | [optional] |
| **data_coding_ucs2** | **bool** | Force UCS-2 (Unicode) encoding for message text. Useful for non-Latin characters (Cyrillic, Arabic, Chinese, etc). Reduces max message length to 355 characters | [optional] [default to false] |
| **validity** | **int** | Message validity period in hours. Default is 72 hours (3 days). Maximum is 87840 hours (10 years). After this time, undelivered message will expire | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
