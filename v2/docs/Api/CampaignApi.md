# BSG\Api\V2\CampaignApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**campaign()**](CampaignApi.md#campaign) | **GET** /api/campaigns/{id} | Get campaign info |
| [**campaignDetails()**](CampaignApi.md#campaignDetails) | **GET** /api/campaigns/{id}/detail | Get campaign details |
| [**campaignPrice()**](CampaignApi.md#campaignPrice) | **POST** /api/campaigns/price | Calculate campaign price |
| [**campaignStop()**](CampaignApi.md#campaignStop) | **PATCH** /api/campaigns/{id}/stop | Cancel campaign |
| [**campaigns()**](CampaignApi.md#campaigns) | **GET** /api/campaigns | List of campaigns |


## `campaign()`

```php
campaign($id): \BSG\Api\V2\Model\Campaign200Response
```

Get campaign info

Retrieve campaign with all it’s properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 53651994; // int

try {
    $result = $apiInstance->campaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\BSG\Api\V2\Model\Campaign200Response**](../Model/Campaign200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignDetails()`

```php
campaignDetails($id): \BSG\Api\V2\Model\CampaignDetails200Response
```

Get campaign details

Campaign detail information and delivery statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 53651994; // int

try {
    $result = $apiInstance->campaignDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\BSG\Api\V2\Model\CampaignDetails200Response**](../Model/CampaignDetails200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignPrice()`

```php
campaignPrice($campaign_price_request): \BSG\Api\V2\Model\CampaignPrice200Response
```

Calculate campaign price

Calculate campaign estimated price before actually [send it](#operation/sms_send)  **Please note:** Method suitable only for SMS campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_price_request = {"sender":"Vet klinika","text":"hello!","messages":[{"phone":38267161234}]}; // \BSG\Api\V2\Model\CampaignPriceRequest

try {
    $result = $apiInstance->campaignPrice($campaign_price_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_price_request** | [**\BSG\Api\V2\Model\CampaignPriceRequest**](../Model/CampaignPriceRequest.md)|  | |

### Return type

[**\BSG\Api\V2\Model\CampaignPrice200Response**](../Model/CampaignPrice200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignStop()`

```php
campaignStop($id): \BSG\Api\V2\Model\CampaignStop200Response
```

Cancel campaign

Abort the campaign and move it to finally status stopped

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->campaignStop($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignStop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\BSG\Api\V2\Model\CampaignStop200Response**](../Model/CampaignStop200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaigns()`

```php
campaigns($page_offset, $page_limit, $sort, $way, $filter_from, $filter_to, $filter_type, $search_field, $search_value): \BSG\Api\V2\Model\SearchCampaignResource
```

List of campaigns

Get a list of campaigns based on specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
| $page_limit = 50; // int | The number of items in the response |
| $sort = 'id'; // string | Sort items by |
$way = new \BSG\Api\V2\Model\\BSG\Api\V2\Model\SortWay(); // \BSG\Api\V2\Model\SortWay
| $filter_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Include items from |
| $filter_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Include items to |
| $filter_type = 'filter_type_example'; // string | Filter items by type type |
| $search_field = 'search_field_example'; // string | Filter items by search[field]=search[value] |
| $search_value = 'search_value_example'; // string | Filter items by search[field]=search[value] |

try {
    $result = $apiInstance->campaigns($page_offset, $page_limit, $sort, $way, $filter_from, $filter_to, $filter_type, $search_field, $search_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |
| **sort** | **string**| Sort items by | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\Api\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **filter_from** | **\DateTime**| Include items from | [optional] |
| **filter_to** | **\DateTime**| Include items to | [optional] |
| **filter_type** | **string**| Filter items by type type | [optional] |
| **search_field** | **string**| Filter items by search[field]&#x3D;search[value] | [optional] |
| **search_value** | **string**| Filter items by search[field]&#x3D;search[value] | [optional] |

### Return type

[**\BSG\Api\V2\Model\SearchCampaignResource**](../Model/SearchCampaignResource.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
