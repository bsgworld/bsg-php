# # SmsTaskStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Error code: 0 for success, 30 for \&quot;Task not found\&quot; |
**error_description** | **string** | Human-readable error description |
**originator** | **string** | Sender name used for messages in this task | [optional]
**body** | **string** | Message text for bulk task | [optional]
**validity** | **int** | Message validity period in hours (max 3660 hours &#x3D; ~5 months) | [optional]
**totalprice** | **float** | Total cost for all messages in task | [optional]
**currency** | **string** | Currency code according to ISO-4217 | [optional]
**sent** | **int** | Number of messages submitted to operators | [optional]
**total** | **int** | Total number of messages in task | [optional]
**queued** | **int** | Number of messages still in queue | [optional]
**accepted** | **int** | Number of messages accepted by operators | [optional]
**enroute** | **int** | Number of messages en route to destination | [optional]
**delivered** | **int** | Number of successfully delivered messages | [optional]
**expired** | **int** | Number of expired messages | [optional]
**undeliverable** | **int** | Number of undeliverable messages | [optional]
**unknown** | **int** | Number of messages with unknown status | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
