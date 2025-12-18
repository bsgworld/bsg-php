# # HlrSyncResponse

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **error** | **int** | Error code (0 &#x3D; success) | |
| **error_description** | **string** | Error description | |
| **id** | **string** | Internal HLR message ID | [optional] |
| **msisdn** | **string** | Phone number in international format | [optional] |
| **reference** | **string** | External reference ID (if provided) | [optional] |
| **country_name** | **string** | Country name in English | [optional] |
| **brand** | **string** | Mobile operator brand | [optional] |
| **brand_name** | **string** | Full mobile operator name | [optional] |
| **network** | **string** | Network name | [optional] |
| **status** | **string** | HLR lookup status | [optional] |
| **details** | [**\BSG\Api\V1\Model\DetailsSchema**](DetailsSchema.md) |  | [optional] |
| **created_datetime** | **\DateTime** | HLR request creation timestamp | [optional] |
| **status_datetime** | **\DateTime** | HLR status update timestamp | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
