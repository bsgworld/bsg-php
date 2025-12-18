# BSG\Api\V1\MNPApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mnpCreateBatchMnp()**](MNPApi.md#mnpCreateBatchMnp) | **POST** /rest/mnp/create | MNP lookup for multiple numbers (JSON body) |
| [**mnpCreateObjectsPut()**](MNPApi.md#mnpCreateObjectsPut) | **PUT** /rest/mnp/create | Perform MNP lookup (PUT) |
| [**mnpGetPrices()**](MNPApi.md#mnpGetPrices) | **GET** /rest/mnp/prices | Get MNP pricing |
| [**mnpGetStatusByExtId()**](MNPApi.md#mnpGetStatusByExtId) | **GET** /rest/mnp/reference/{reference} | Get MNP result by reference |
| [**mnpGetStatusById()**](MNPApi.md#mnpGetStatusById) | **GET** /rest/mnp/{id} | Get MNP result by ID |


## `mnpCreateBatchMnp()`

```php
mnpCreateBatchMnp($mnp_batch_create_request): \BSG\Api\V1\Model\MnpCreateResponse
```

MNP lookup for multiple numbers (JSON body)

Perform MNP lookup for multiple phone numbers using JSON payload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mnp_batch_create_request = {"msisdns":[{"msisdn":"380953227271","tariff":5,"reference":"mnp_ref_001"},{"msisdn":"380953227272","tariff":5,"reference":"mnp_ref_002"}],"reference":"batch_mnp_123"}; // \BSG\Api\V1\Model\MnpBatchCreateRequest

try {
    $result = $apiInstance->mnpCreateBatchMnp($mnp_batch_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPApi->mnpCreateBatchMnp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mnp_batch_create_request** | [**\BSG\Api\V1\Model\MnpBatchCreateRequest**](../Model/MnpBatchCreateRequest.md)|  | |

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

## `mnpCreateObjectsPut()`

```php
mnpCreateObjectsPut($mnp_create_request): \BSG\Api\V1\Model\MnpCreateResponse
```

Perform MNP lookup (PUT)

Perform MNP lookup using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mnp_create_request = new \BSG\Api\V1\Model\MnpCreateRequest(); // \BSG\Api\V1\Model\MnpCreateRequest

try {
    $result = $apiInstance->mnpCreateObjectsPut($mnp_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPApi->mnpCreateObjectsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mnp_create_request** | [**\BSG\Api\V1\Model\MnpCreateRequest**](../Model/MnpCreateRequest.md)|  | |

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

## `mnpGetPrices()`

```php
mnpGetPrices(): \BSG\Api\V1\Model\MnpPricesResponse
```

Get MNP pricing

Get MNP pricing information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->mnpGetPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPApi->mnpGetPrices: ', $e->getMessage(), PHP_EOL;
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

## `mnpGetStatusByExtId()`

```php
mnpGetStatusByExtId($reference): \BSG\Api\V1\Model\MnpStatusResponse
```

Get MNP result by reference

Get MNP lookup result using external reference ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $reference = unique_ref_123; // string | External reference ID |

try {
    $result = $apiInstance->mnpGetStatusByExtId($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPApi->mnpGetStatusByExtId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| External reference ID | |

### Return type

[**\BSG\Api\V1\Model\MnpStatusResponse**](../Model/MnpStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mnpGetStatusById()`

```php
mnpGetStatusById($id): \BSG\Api\V1\Model\MnpStatusResponse
```

Get MNP result by ID

Get MNP lookup result using internal ID from api_external_ids table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\MNPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 123456; // string | Internal record ID from api_external_ids table |

try {
    $result = $apiInstance->mnpGetStatusById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MNPApi->mnpGetStatusById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Internal record ID from api_external_ids table | |

### Return type

[**\BSG\Api\V1\Model\MnpStatusResponse**](../Model/MnpStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
