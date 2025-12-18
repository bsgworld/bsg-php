# # ShortUrlsLink200ResponseData

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **count_clicks** | **int** | Number of clicks on a short link  *Please note: count of clicks updated with some latency* | [optional] |
| **short_link** | **string** | short link url that can be used to redirect to original link | [optional] |
| **click_date** | **\DateTime** | Date of first click | [optional] |
| **click_id** | **string** | click unique uuid | [optional] |
| **user_agent** | **string** | User-agent of first click | [optional] |
| **client_ip** | **string** | Client IP address of first click | [optional] |
| **original_link** | **string** | Original link where to short link will redirect | [optional] |
| **phone** | **int** | Phone number without leading plus. For short links created as part of [sms campaign](#tag/Campaign-SMS) | [optional] |
| **is_human** | **bool** | We use some heuristics to determine is it real human or looks like bot | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
