# BSG\\Api\\V2\InternalWstPriceApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call080fd855565c5398b6a59d479c5269ef()**](InternalWstPriceApi.md#call080fd855565c5398b6a59d479c5269ef) | **GET** /api/internal/wst/prices | Get price list for each country |
| [**call399285196dea87b1e684e5d7d70116b7()**](InternalWstPriceApi.md#call399285196dea87b1e684e5d7d70116b7) | **GET** /api/internal/wst/prices/{countryCode} | Get prices for country |


## `call080fd855565c5398b6a59d479c5269ef()`

```php
call080fd855565c5398b6a59d479c5269ef($product): \BSG\\Api\\V2\Model\Model080fd855565c5398b6a59d479c5269ef200Response
```

Get price list for each country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalWstPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product value

try {
    $result = $apiInstance->call080fd855565c5398b6a59d479c5269ef($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalWstPriceApi->call080fd855565c5398b6a59d479c5269ef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product value | |

### Return type

[**\BSG\\Api\\V2\Model\Model080fd855565c5398b6a59d479c5269ef200Response**](../Model/080fd855565c5398b6a59d479c5269ef200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call399285196dea87b1e684e5d7d70116b7()`

```php
call399285196dea87b1e684e5d7d70116b7($country_code, $product): \BSG\\Api\\V2\Model\Model399285196dea87b1e684e5d7d70116b7200Response
```

Get prices for country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalWstPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = AB; // string | Country ISO Code
$product = 'product_example'; // string | Product value

try {
    $result = $apiInstance->call399285196dea87b1e684e5d7d70116b7($country_code, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalWstPriceApi->call399285196dea87b1e684e5d7d70116b7: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country ISO Code | |
| **product** | **string**| Product value | |

### Return type

[**\BSG\\Api\\V2\Model\Model399285196dea87b1e684e5d7d70116b7200Response**](../Model/399285196dea87b1e684e5d7d70116b7200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
