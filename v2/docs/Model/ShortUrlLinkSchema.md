# # ShortUrlLinkSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **string** | short link unique id | [optional] |
| **status** | [**\BSG\Api\V2\Model\ShortLinkStatus**](ShortLinkStatus.md) |  | [optional] |
| **name** | **string** | Name of short link. like a comment | [optional] |
| **slug** | **string** | part of short link after domain | [optional] |
| **campaign_id** | **int** | campaign ID if short link is part of sms campaign.  Campaign allow send messages to all the leads with different short link for each lead that follows to the same original link | [optional] |
| **message_id** | **int** | message id for short links created as part of [sms campaign](#tag/Campaign-SMS) | [optional] |
| **init_deleted_at** | **\DateTime** | Date and time when short link was deactivated | [optional] |
| **created_at** | **\DateTime** | Date and time when short link was created | [optional] |
| **short_link** | **string** | short link url that can be used to redirect to original link | [optional] |
| **original_link** | **string** | Original link where to short link will redirect | [optional] |
| **can_restore** | **bool** | For link marked as deleted it can be restored a few time if can_restore&#x3D;true | [optional] [default to true] |
| **count_clicks** | **int** | Number of clicks on a short link  *Please note: count of clicks updated with some latency* | [optional] |
| **count_human_clicks** | **int** | Number of clicks on a short link looks like human  We use some heuristics to determine is it real human or looks like bot | [optional] |
| **count_unique_clicks** | **int** | Number of unique clicks on a short link  We use combination of ip address user-agent cookies and so on to account the same user just once | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
