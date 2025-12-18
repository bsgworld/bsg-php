# BSG\\Api\\V2\InternalCurrencyApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call1fdbf152055bcdd473b0a3c82567c161()**](InternalCurrencyApi.md#call1fdbf152055bcdd473b0a3c82567c161) | **GET** /api/internal/currencies | Get currencies list |


## `call1fdbf152055bcdd473b0a3c82567c161()`

```php
call1fdbf152055bcdd473b0a3c82567c161($currency_code): \BSG\\Api\\V2\Model\Model1fdbf152055bcdd473b0a3c82567c161200Response
```

Get currencies list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = USD; // string | Product value

try {
    $result = $apiInstance->call1fdbf152055bcdd473b0a3c82567c161($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCurrencyApi->call1fdbf152055bcdd473b0a3c82567c161: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_code** | **string**| Product value | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\Model1fdbf152055bcdd473b0a3c82567c161200Response**](../Model/1fdbf152055bcdd473b0a3c82567c161200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
