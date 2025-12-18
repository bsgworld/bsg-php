# BSG\Api\V2\InternalCountryApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**internalCountriesList()**](InternalCountryApi.md#internalCountriesList) | **GET** /api/internal/countries | Get countries list |


## `internalCountriesList()`

```php
internalCountriesList($service): \BSG\Api\V2\Model\InternalCountriesList200Response
```

Get countries list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: InternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\InternalCountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = 'service_example'; // string

try {
    $result = $apiInstance->internalCountriesList($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalCountryApi->internalCountriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service** | **string**|  | [optional] |

### Return type

[**\BSG\Api\V2\Model\InternalCountriesList200Response**](../Model/InternalCountriesList200Response.md)

### Authorization

[InternalAuth](../../README.md#InternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
