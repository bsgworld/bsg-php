# BSG\\Api\\V2\InternalCountryApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**c065d8cee4013124d36c455d76c5e2a8()**](InternalCountryApi.md#c065d8cee4013124d36c455d76c5e2a8) | **GET** /api/internal/countries | Get countries list |


## `c065d8cee4013124d36c455d76c5e2a8()`

```php
c065d8cee4013124d36c455d76c5e2a8($service): \BSG\\Api\\V2\Model\C065d8cee4013124d36c455d76c5e2a8200Response
```

Get countries list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\InternalCountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = 'service_example'; // string

try {
    $result = $apiInstance->c065d8cee4013124d36c455d76c5e2a8($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCountryApi->c065d8cee4013124d36c455d76c5e2a8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service** | **string**|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\C065d8cee4013124d36c455d76c5e2a8200Response**](../Model/C065d8cee4013124d36c455d76c5e2a8200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
