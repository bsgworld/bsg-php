# BSG\Api\V1\MNPSyncApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mnpSyncCreateObjects()**](MNPSyncApi.md#mnpSyncCreateObjects) | **POST** /rest/mnp-sync/create | Perform synchronous MNP lookup |
| [**mnpSyncCreateObjectsPut()**](MNPSyncApi.md#mnpSyncCreateObjectsPut) | **PUT** /rest/mnp-sync/create | Perform synchronous MNP lookup (PUT) |
| [**mnpSyncGetPrices()**](MNPSyncApi.md#mnpSyncGetPrices) | **GET** /rest/mnp-sync/prices | Get MNP pricing |


## `mnpSyncCreateObjects()`

```php
mnpSyncCreateObjects($msisdn, $tariff, $mnp_create_request): \BSG\Api\V1\Model\MnpCreateResponse
```

Perform synchronous MNP lookup

Perform synchronous MNP lookup with immediate response. Supports both JSON payload and query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $msisdn = 380953227271; // string | Phone number in international format (alternative to JSON body) |
| $tariff = 5; // int | Tariff code (optional, uses default if not provided) |
| $mnp_create_request = new \BSG\Api\V1\Model\MnpCreateRequest(); // \BSG\Api\V1\Model\MnpCreateRequest | JSON payload for batch requests or alternative to query parameters |

try {
    $result = $apiInstance->mnpSyncCreateObjects($msisdn, $tariff, $mnp_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPSyncApi->mnpSyncCreateObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **msisdn** | **string**| Phone number in international format (alternative to JSON body) | [optional] |
| **tariff** | **int**| Tariff code (optional, uses default if not provided) | [optional] |
| **mnp_create_request** | [**\BSG\Api\V1\Model\MnpCreateRequest**](../Model/MnpCreateRequest.md)| JSON payload for batch requests or alternative to query parameters | [optional] |

### Return type

[**\BSG\Api\V1\Model\MnpCreateResponse**](../Model/MnpCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mnpSyncCreateObjectsPut()`

```php
mnpSyncCreateObjectsPut($msisdn, $tariff, $mnp_create_request): \BSG\Api\V1\Model\MnpCreateResponse
```

Perform synchronous MNP lookup (PUT)

Perform synchronous MNP lookup with immediate response. Supports both JSON payload and query parameters. Using PUT method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $msisdn = 380953227271; // string | Phone number in international format (alternative to JSON body) |
| $tariff = 5; // int | Tariff code (optional, uses default if not provided) |
| $mnp_create_request = new \BSG\Api\V1\Model\MnpCreateRequest(); // \BSG\Api\V1\Model\MnpCreateRequest | JSON payload for batch requests or alternative to query parameters |

try {
    $result = $apiInstance->mnpSyncCreateObjectsPut($msisdn, $tariff, $mnp_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPSyncApi->mnpSyncCreateObjectsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **msisdn** | **string**| Phone number in international format (alternative to JSON body) | [optional] |
| **tariff** | **int**| Tariff code (optional, uses default if not provided) | [optional] |
| **mnp_create_request** | [**\BSG\Api\V1\Model\MnpCreateRequest**](../Model/MnpCreateRequest.md)| JSON payload for batch requests or alternative to query parameters | [optional] |

### Return type

[**\BSG\Api\V1\Model\MnpCreateResponse**](../Model/MnpCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mnpSyncGetPrices()`

```php
mnpSyncGetPrices(): \BSG\Api\V1\Model\MnpPricesResponse
```

Get MNP pricing

Get synchronous MNP pricing information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->mnpSyncGetPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPSyncApi->mnpSyncGetPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\MnpPricesResponse**](../Model/MnpPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
