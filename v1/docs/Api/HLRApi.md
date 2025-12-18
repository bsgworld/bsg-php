# BSG\Api\V1\HLRApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hlrCreateObjects()**](HLRApi.md#hlrCreateObjects) | **POST** /rest/hlr/create | Perform HLR lookup |
| [**hlrCreateObjectsPut()**](HLRApi.md#hlrCreateObjectsPut) | **PUT** /rest/hlr/create | Perform HLR lookup (PUT) |
| [**hlrCreateObjectsSync()**](HLRApi.md#hlrCreateObjectsSync) | **POST** /rest/hlr/check | Perform synchronous HLR lookup |
| [**hlrCreateObjectsSyncPut()**](HLRApi.md#hlrCreateObjectsSyncPut) | **PUT** /rest/hlr/check | Perform synchronous HLR lookup (PUT) |
| [**hlrGetBalance()**](HLRApi.md#hlrGetBalance) | **GET** /rest/hlr/balance | Get account balance |
| [**hlrGetBalancePost()**](HLRApi.md#hlrGetBalancePost) | **POST** /rest/hlr/balance | Get account balance |
| [**hlrGetPrices()**](HLRApi.md#hlrGetPrices) | **GET** /rest/hlr/prices | Get HLR pricing |
| [**hlrGetStatusByExtId()**](HLRApi.md#hlrGetStatusByExtId) | **GET** /rest/hlr/reference/{reference} | Get HLR result by reference |


## `hlrCreateObjects()`

```php
hlrCreateObjects($hlr_create_request): \BSG\Api\V1\Model\HlrCreateResponse
```

Perform HLR lookup

Perform HLR (Home Location Register) lookup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hlr_create_request = new \BSG\Api\V1\Model\HlrCreateRequest(); // \BSG\Api\V1\Model\HlrCreateRequest

try {
    $result = $apiInstance->hlrCreateObjects($hlr_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrCreateObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hlr_create_request** | [**\BSG\Api\V1\Model\HlrCreateRequest**](../Model/HlrCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\HlrCreateResponse**](../Model/HlrCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrCreateObjectsPut()`

```php
hlrCreateObjectsPut($hlr_create_request): \BSG\Api\V1\Model\HlrCreateResponse
```

Perform HLR lookup (PUT)

Perform HLR (Home Location Register) lookup using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hlr_create_request = new \BSG\Api\V1\Model\HlrCreateRequest(); // \BSG\Api\V1\Model\HlrCreateRequest

try {
    $result = $apiInstance->hlrCreateObjectsPut($hlr_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrCreateObjectsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hlr_create_request** | [**\BSG\Api\V1\Model\HlrCreateRequest**](../Model/HlrCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\HlrCreateResponse**](../Model/HlrCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrCreateObjectsSync()`

```php
hlrCreateObjectsSync($hlr_sync_request): \BSG\Api\V1\Model\HlrSyncResponse
```

Perform synchronous HLR lookup

Perform synchronous HLR lookup with immediate response. Returns complete HLR information including operator, porting status, and roaming. Use this endpoint when you need real-time results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hlr_sync_request = new \BSG\Api\V1\Model\HlrSyncRequest(); // \BSG\Api\V1\Model\HlrSyncRequest

try {
    $result = $apiInstance->hlrCreateObjectsSync($hlr_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrCreateObjectsSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hlr_sync_request** | [**\BSG\Api\V1\Model\HlrSyncRequest**](../Model/HlrSyncRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\HlrSyncResponse**](../Model/HlrSyncResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrCreateObjectsSyncPut()`

```php
hlrCreateObjectsSyncPut($hlr_sync_request): \BSG\Api\V1\Model\HlrSyncResponse
```

Perform synchronous HLR lookup (PUT)

Perform synchronous HLR lookup with immediate response. Returns complete HLR information including operator, porting status, and roaming. Use this endpoint when you need real-time results. Using PUT method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hlr_sync_request = new \BSG\Api\V1\Model\HlrSyncRequest(); // \BSG\Api\V1\Model\HlrSyncRequest

try {
    $result = $apiInstance->hlrCreateObjectsSyncPut($hlr_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrCreateObjectsSyncPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hlr_sync_request** | [**\BSG\Api\V1\Model\HlrSyncRequest**](../Model/HlrSyncRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\HlrSyncResponse**](../Model/HlrSyncResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrGetBalance()`

```php
hlrGetBalance(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance

Get current account balance and credit information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->hlrGetBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrGetBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrGetBalancePost()`

```php
hlrGetBalancePost(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance

Get current account balance and credit information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->hlrGetBalancePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrGetBalancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrGetPrices()`

```php
hlrGetPrices(): \BSG\Api\V1\Model\HlrPricesResponse
```

Get HLR pricing

Get HLR pricing information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->hlrGetPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrGetPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\HlrPricesResponse**](../Model/HlrPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hlrGetStatusByExtId()`

```php
hlrGetStatusByExtId($reference): \BSG\Api\V1\Model\HlrStatusResponse
```

Get HLR result by reference

Get HLR lookup result using external reference ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\HLRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $reference = unique_ref_123; // string | External reference ID |

try {
    $result = $apiInstance->hlrGetStatusByExtId($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HLRApi->hlrGetStatusByExtId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| External reference ID | |

### Return type

[**\BSG\Api\V1\Model\HlrStatusResponse**](../Model/HlrStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
