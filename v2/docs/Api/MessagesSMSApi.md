# BSG\Api\V2\MessagesSMSApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**smsMessagesFind()**](MessagesSMSApi.md#smsMessagesFind) | **GET** /api/messages | Find messages |


## `smsMessagesFind()`

```php
smsMessagesFind($page_offset, $page_limit, $sort, $way, $filter_id, $filter_campaign_id, $filter_reference_id, $filter_from, $filter_to): \BSG\Api\V2\Model\SmsMessagesFind200Response
```

Find messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\MessagesSMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
| $page_limit = 50; // int | The number of items in the response |
| $sort = id; // string | Field to sort the results |
$way = new \BSG\Api\V2\Model\\BSG\Api\V2\Model\SortWay(); // \BSG\Api\V2\Model\SortWay
$filter_id = 56; // int
| $filter_campaign_id = 56; // int | Filter by campaign Id received when [send message](#operation/sms_send) |
| $filter_reference_id = 'filter_reference_id_example'; // string | Filter by reference passed when [send message](#operation/sms_send) |
| $filter_from = 2025-03-20 00:00:00; // \DateTime | Filter message from this date. format ― Y-m-d H:i:s |
| $filter_to = 2025-03-31 00:00:00; // \DateTime | Filter message up to this date. format ― Y-m-d H:i:s |

try {
    $result = $apiInstance->smsMessagesFind($page_offset, $page_limit, $sort, $way, $filter_id, $filter_campaign_id, $filter_reference_id, $filter_from, $filter_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesSMSApi->smsMessagesFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |
| **sort** | **string**| Field to sort the results | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\Api\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **filter_id** | **int**|  | [optional] |
| **filter_campaign_id** | **int**| Filter by campaign Id received when [send message](#operation/sms_send) | [optional] |
| **filter_reference_id** | **string**| Filter by reference passed when [send message](#operation/sms_send) | [optional] |
| **filter_from** | **\DateTime**| Filter message from this date. format ― Y-m-d H:i:s | [optional] |
| **filter_to** | **\DateTime**| Filter message up to this date. format ― Y-m-d H:i:s | [optional] |

### Return type

[**\BSG\Api\V2\Model\SmsMessagesFind200Response**](../Model/SmsMessagesFind200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
