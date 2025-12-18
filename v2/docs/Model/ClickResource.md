# # ClickResource

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **string** | click unique uuid | [optional] |
| **browser_language** | **string** | Language of user browser | [optional] |
| **country_code** | **string** | User country detected by geo ip | [optional] |
| **is_human** | **bool** | We use some heuristics to determine is it real human or looks like bot | [optional] |
| **is_unique** | **bool** | We use combination of ip address user-agent cookies and so on to account the same user just once | [optional] |
| **http_status** | **int** | Status code returned by GET original link when redirecting the user | [optional] |
| **http_method** | **string** | Http method used by user when click on short link | [optional] |
| **created_at** | **\DateTime** | Date and time of click | [optional] |
| **user_agent** | **string** | User-agent of first click | [optional] |
| **client_ip** | **string** | Client IP address of first click | [optional] |
| **browser** | **string** | User browser detected from user-agent | [optional] |
| **referrer_url** | **string** | source page from witch user click on short link | [optional] |
| **city** | **string** | User city detected by geo ip | [optional] |
| **device_os** | **string** | User device operation system detected from user-agent | [optional] |
| **short_link** | **string** | short link url that can be used to redirect to original link | [optional] |
| **original_link** | **string** | Original link where to short link will redirect | [optional] |
| **message_id** | **int** | message id for short links created as part of [sms campaign](#tag/Campaign-SMS) | [optional] |
| **phone_number** | **int** | Phone number without leading plus. For short links created as part of [sms campaign](#tag/Campaign-SMS) | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
