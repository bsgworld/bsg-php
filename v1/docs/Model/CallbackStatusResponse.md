# # CallbackStatusResponse

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **callback_id** | **string** | Unique callback identifier | |
| **status** | **string** | Current callback status | |
| **url** | **string** | Registered webhook URL | [optional] |
| **events** | **string[]** | Subscribed event types | [optional] |
| **last_success** | **\DateTime** | Last successful callback delivery | [optional] |
| **failure_count** | **int** | Number of consecutive failures | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
