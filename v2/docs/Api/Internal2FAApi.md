# BSG\\Api\\V2\Internal2FAApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call9875ce37ddb2f995643cef7aa2439fb9()**](Internal2FAApi.md#call9875ce37ddb2f995643cef7aa2439fb9) | **GET** /api/internal/2fa/authentications/full-price | Show 2FA authentication full price |


## `call9875ce37ddb2f995643cef7aa2439fb9()`

```php
call9875ce37ddb2f995643cef7aa2439fb9($channel_type, $currency, $tariff_code, $country_code, $operator_id): \BSG\\Api\\V2\Model\Model9875ce37ddb2f995643cef7aa2439fb9200Response
```

Show 2FA authentication full price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Internal2FAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_type = 'channel_type_example'; // string
$currency = EUR; // string
$tariff_code = 28; // int
$country_code = UA; // string
$operator_id = 1; // int

try {
    $result = $apiInstance->call9875ce37ddb2f995643cef7aa2439fb9($channel_type, $currency, $tariff_code, $country_code, $operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Internal2FAApi->call9875ce37ddb2f995643cef7aa2439fb9: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_type** | **string**|  | |
| **currency** | **string**|  | |
| **tariff_code** | **int**|  | [optional] |
| **country_code** | **string**|  | [optional] |
| **operator_id** | **int**|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\Model9875ce37ddb2f995643cef7aa2439fb9200Response**](../Model/9875ce37ddb2f995643cef7aa2439fb9200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
