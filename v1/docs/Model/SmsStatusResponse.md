# # SmsStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Error code: 0 for success, 20 for \&quot;SMS not found\&quot; |
**error_description** | **string** | Human-readable error description |
**id** | **string** | Internal message ID assigned by SMS Gateway | [optional]
**msisdn** | **string** | Destination phone number in international format | [optional]
**reference** | **string** | External reference ID provided during creation | [optional]
**time_in** | **\DateTime** | Timestamp when message was received | [optional]
**time_sent** | **\DateTime** | Timestamp when message was sent to operator | [optional]
**time_dr** | **\DateTime** | Timestamp when delivery report was received | [optional]
**status** | **string** | Current message status in delivery pipeline | [optional]
**price** | **float** | Actual cost charged for this message | [optional]
**currency** | **string** | Currency code for the price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
