# BSG\Api\V2\InternalCorePriceApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**internalCorePricesByCountry()**](InternalCorePriceApi.md#internalCorePricesByCountry) | **GET** /api/internal/core/prices/{countryCode} | Get prices for country |
| [**internalCorePricesList()**](InternalCorePriceApi.md#internalCorePricesList) | **GET** /api/internal/core/prices | Get price list for each country |


## `internalCorePricesByCountry()`

```php
internalCorePricesByCountry($country_code, $product): \BSG\Api\V2\Model\InternalCorePricesByCountry200Response
```

Get prices for country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\InternalCorePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $country_code = AB; // string | Country ISO Code |
| $product = 'product_example'; // string | Product value |

try {
    $result = $apiInstance->internalCorePricesByCountry($country_code, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCorePriceApi->internalCorePricesByCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country ISO Code | |
| **product** | **string**| Product value | |

### Return type

[**\BSG\Api\V2\Model\InternalCorePricesByCountry200Response**](../Model/InternalCorePricesByCountry200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalCorePricesList()`

```php
internalCorePricesList($product): \BSG\Api\V2\Model\InternalCorePricesList200Response
```

Get price list for each country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\InternalCorePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $product = 'product_example'; // string | Product value |

try {
    $result = $apiInstance->internalCorePricesList($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCorePriceApi->internalCorePricesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product value | |

### Return type

[**\BSG\Api\V2\Model\InternalCorePricesList200Response**](../Model/InternalCorePricesList200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
