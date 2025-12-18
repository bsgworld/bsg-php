# # ViberStatusResponse

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **error** | **int** | Error code (0 &#x3D; success, 40 &#x3D; not found) | |
| **error_description** | **string** | Error description | |
| **id** | **string** | Internal message ID | [optional] |
| **msisdn** | **string** | Destination phone number | [optional] |
| **reference** | **string** | External reference ID | [optional] |
| **time_in** | **string** | Timestamp when message was received | [optional] |
| **time_sent** | **string** | Timestamp when message was sent | [optional] |
| **time_dr** | **string** | Timestamp when delivery report was received | [optional] |
| **status** | **string** | Current message status | [optional] |
| **price** | **float** | Message cost | [optional] |
| **currency** | **string** | Price currency | [optional] |
| **alt_route** | [**\BSG\Api\V1\Model\AltRouteschemaAltRouteItem[]**](AltRouteschemaAltRouteItem.md) | Alternative route information (when resend_on_undelivery is used) | [optional] |
| **alt_route_messages** | [**\BSG\Api\V1\Model\AltRouteMessagesschemaAltRouteMessagesItem[]**](AltRouteMessagesschemaAltRouteMessagesItem.md) | Alternative route messages details | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
