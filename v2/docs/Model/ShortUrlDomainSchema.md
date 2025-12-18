# # ShortUrlDomainSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **string** | Unique Id of short domain (uuid) | [optional] |
| **system_domain_id** | **string** |  | [optional] |
| **status** | **string** |  | [optional] |
| **name** | **string** | short domain | [optional] |
| **is_default** | **bool** |  | [optional] [default to true] |
| **slug_type** | [**\BSG\Api\V2\Model\ShortDomainSlugType**](ShortDomainSlugType.md) |  | [optional] |
| **init_deleted_at** | **\DateTime** |  | [optional] |
| **created_at** | **\DateTime** |  | [optional] |
| **not_found_page** | **string** | Url to redirect if original link return status 404 not found | [optional] |
| **can_refresh_status** | **bool** |  | [optional] [default to true] |
| **can_restore** | **bool** |  | [optional] [default to true] |
| **record_type** | **string** | if system_domain_id is null it is necessary to setup your dns | [optional] |
| **hostname** | **string** | if system_domain_id is null it is necessary to setup your dns | [optional] |
| **cname** | **string** | if system_domain_id is null it is necessary to setup your dns | [optional] |
| **count_short_links** | **int** |  | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
