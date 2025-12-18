# BSG\\Api\\V2\InternalCorePriceApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**d6429e9d3846f9ae5efa4c9d4d7bda10()**](InternalCorePriceApi.md#d6429e9d3846f9ae5efa4c9d4d7bda10) | **GET** /api/internal/core/prices/{countryCode} | Get prices for country |
| [**ef361cc4d966acb533399907bc7084c2()**](InternalCorePriceApi.md#ef361cc4d966acb533399907bc7084c2) | **GET** /api/internal/core/prices | Get price list for each country |


## `d6429e9d3846f9ae5efa4c9d4d7bda10()`

```php
d6429e9d3846f9ae5efa4c9d4d7bda10($country_code, $product): \BSG\\Api\\V2\Model\D6429e9d3846f9ae5efa4c9d4d7bda10200Response
```

Get prices for country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalCorePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = AB; // string | Country ISO Code
$product = 'product_example'; // string | Product value

try {
    $result = $apiInstance->d6429e9d3846f9ae5efa4c9d4d7bda10($country_code, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCorePriceApi->d6429e9d3846f9ae5efa4c9d4d7bda10: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country ISO Code | |
| **product** | **string**| Product value | |

### Return type

[**\BSG\\Api\\V2\Model\D6429e9d3846f9ae5efa4c9d4d7bda10200Response**](../Model/D6429e9d3846f9ae5efa4c9d4d7bda10200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ef361cc4d966acb533399907bc7084c2()`

```php
ef361cc4d966acb533399907bc7084c2($product): \BSG\\Api\\V2\Model\Ef361cc4d966acb533399907bc7084c2200Response
```

Get price list for each country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalCorePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product value

try {
    $result = $apiInstance->ef361cc4d966acb533399907bc7084c2($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCorePriceApi->ef361cc4d966acb533399907bc7084c2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product value | |

### Return type

[**\BSG\\Api\\V2\Model\Ef361cc4d966acb533399907bc7084c2200Response**](../Model/Ef361cc4d966acb533399907bc7084c2200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
