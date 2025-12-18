# BSG\Api\V1\ViberApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**viberCheckPrice()**](ViberApi.md#viberCheckPrice) | **POST** /rest/viber/price | Check Viber message price |
| [**viberCheckPricePut()**](ViberApi.md#viberCheckPricePut) | **PUT** /rest/viber/price | Check Viber message price (PUT) |
| [**viberCreateObjects()**](ViberApi.md#viberCreateObjects) | **POST** /rest/viber/create | Send Viber message |
| [**viberCreateObjectsPut()**](ViberApi.md#viberCreateObjectsPut) | **PUT** /rest/viber/create | Send Viber message (PUT) |
| [**viberGetBalance()**](ViberApi.md#viberGetBalance) | **GET** /rest/viber/balance | Get account balance |
| [**viberGetBalancePost()**](ViberApi.md#viberGetBalancePost) | **POST** /rest/viber/balance | Get account balance |
| [**viberGetPrices()**](ViberApi.md#viberGetPrices) | **GET** /rest/viber/prices | Get Viber pricing |
| [**viberGetStatusByExtId()**](ViberApi.md#viberGetStatusByExtId) | **GET** /rest/viber/reference/{reference} | Get Viber status by reference |


## `viberCheckPrice()`

```php
viberCheckPrice($viber_price_check_request): \BSG\Api\V1\Model\ViberPriceCheckResponse
```

Check Viber message price

Calculate cost for Viber message without sending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viber_price_check_request = {"to":[{"msisdn":"380953227271"}],"message":"Hello from Viber! This is a price check test.","originator":"BSG","validity":72}; // \BSG\Api\V1\Model\ViberPriceCheckRequest

try {
    $result = $apiInstance->viberCheckPrice($viber_price_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberCheckPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **viber_price_check_request** | [**\BSG\Api\V1\Model\ViberPriceCheckRequest**](../Model/ViberPriceCheckRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ViberPriceCheckResponse**](../Model/ViberPriceCheckResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viberCheckPricePut()`

```php
viberCheckPricePut($viber_price_check_request): \BSG\Api\V1\Model\ViberPriceCheckResponse
```

Check Viber message price (PUT)

Calculate cost for Viber message without sending using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viber_price_check_request = {"to":[{"msisdn":"380953227271"}],"message":"Hello from Viber! This is a price check test.","originator":"BSG","validity":72}; // \BSG\Api\V1\Model\ViberPriceCheckRequest

try {
    $result = $apiInstance->viberCheckPricePut($viber_price_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberCheckPricePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **viber_price_check_request** | [**\BSG\Api\V1\Model\ViberPriceCheckRequest**](../Model/ViberPriceCheckRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ViberPriceCheckResponse**](../Model/ViberPriceCheckResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viberCreateObjects()`

```php
viberCreateObjects($viber_create_request): \BSG\Api\V1\Model\ViberCreateResponse
```

Send Viber message

Send Viber message with text, images, and buttons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viber_create_request = {"to":[{"msisdn":"380953227271","reference":"viber_text_001"}],"message":"Hello from Viber! This is a test message.","originator":"BSG","callback_url":"https://webhook.site/viber-callback","validity":72,"resend_on_undelivery":false,"sms_text":"Hello from BSG! This is SMS fallback.","sms_originator":"BSG"}; // \BSG\Api\V1\Model\ViberCreateRequest

try {
    $result = $apiInstance->viberCreateObjects($viber_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberCreateObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **viber_create_request** | [**\BSG\Api\V1\Model\ViberCreateRequest**](../Model/ViberCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ViberCreateResponse**](../Model/ViberCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viberCreateObjectsPut()`

```php
viberCreateObjectsPut($viber_create_request): \BSG\Api\V1\Model\ViberCreateResponse
```

Send Viber message (PUT)

Send Viber message with text, images, and buttons (alternative method)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viber_create_request = {"to":[{"msisdn":"380953227271","reference":"viber_text_001"}],"message":"Hello from Viber! This is a test message.","originator":"BSG","callback_url":"https://webhook.site/viber-callback","validity":72,"resend_on_undelivery":false,"sms_text":"Hello from BSG! This is SMS fallback.","sms_originator":"BSG"}; // \BSG\Api\V1\Model\ViberCreateRequest

try {
    $result = $apiInstance->viberCreateObjectsPut($viber_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberCreateObjectsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **viber_create_request** | [**\BSG\Api\V1\Model\ViberCreateRequest**](../Model/ViberCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ViberCreateResponse**](../Model/ViberCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viberGetBalance()`

```php
viberGetBalance(): \BSG\Api\V1\Model\BalanceResponse
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


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->viberGetBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberGetBalance: ', $e->getMessage(), PHP_EOL;
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

## `viberGetBalancePost()`

```php
viberGetBalancePost(): \BSG\Api\V1\Model\BalanceResponse
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


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->viberGetBalancePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberGetBalancePost: ', $e->getMessage(), PHP_EOL;
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

## `viberGetPrices()`

```php
viberGetPrices(): \BSG\Api\V1\Model\ViberPricesResponse
```

Get Viber pricing

Retrieves current Viber pricing per destination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->viberGetPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberGetPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\ViberPricesResponse**](../Model/ViberPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viberGetStatusByExtId()`

```php
viberGetStatusByExtId($reference): \BSG\Api\V1\Model\ViberStatusResponse
```

Get Viber status by reference

Get Viber delivery status by external reference ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ViberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $reference = unique_ref_123; // string | External reference ID |

try {
    $result = $apiInstance->viberGetStatusByExtId($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViberApi->viberGetStatusByExtId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| External reference ID | |

### Return type

[**\BSG\Api\V1\Model\ViberStatusResponse**](../Model/ViberStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
