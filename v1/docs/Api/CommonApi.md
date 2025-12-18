# BSG\Api\V1\CommonApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commonGetBalanceBase()**](CommonApi.md#commonGetBalanceBase) | **GET** /rest/common/balance | Get account balance (basic) |
| [**commonGetBalanceBasePost()**](CommonApi.md#commonGetBalanceBasePost) | **POST** /rest/common/balance | Get account balance (basic) (POST) |
| [**commonGetBalanceV2()**](CommonApi.md#commonGetBalanceV2) | **GET** /rest/common/getbalance | Get account balance (extended) |
| [**commonGetBalanceV2Post()**](CommonApi.md#commonGetBalanceV2Post) | **POST** /rest/common/getbalance | Get account balance (extended) (POST) |
| [**commonGetPrice()**](CommonApi.md#commonGetPrice) | **GET** /rest/common/price | Get SMS price |
| [**commonGetPricePost()**](CommonApi.md#commonGetPricePost) | **POST** /rest/common/price | Get SMS price (POST) |
| [**commonGetTariff()**](CommonApi.md#commonGetTariff) | **GET** /rest/common/tariff | Get tariff information |
| [**commonGetTariffPost()**](CommonApi.md#commonGetTariffPost) | **POST** /rest/common/tariff | Get tariff information (POST) |


## `commonGetBalanceBase()`

```php
commonGetBalanceBase(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance (basic)

Get current account balance - always available base method from ApiRest class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetBalanceBase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetBalanceBase: ', $e->getMessage(), PHP_EOL;
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

## `commonGetBalanceBasePost()`

```php
commonGetBalanceBasePost(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance (basic) (POST)

Get current account balance - always available base method from ApiRest class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetBalanceBasePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetBalanceBasePost: ', $e->getMessage(), PHP_EOL;
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

## `commonGetBalanceV2()`

```php
commonGetBalanceV2(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance (extended)

Get current account balance and credit information. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetBalanceV2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetBalanceV2: ', $e->getMessage(), PHP_EOL;
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

## `commonGetBalanceV2Post()`

```php
commonGetBalanceV2Post(): \BSG\Api\V1\Model\BalanceResponse
```

Get account balance (extended) (POST)

Get current account balance and credit information. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetBalanceV2Post();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetBalanceV2Post: ', $e->getMessage(), PHP_EOL;
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

## `commonGetPrice()`

```php
commonGetPrice($mcc, $mnc, $product, $tariff_code): \BSG\Api\V1\Model\CommonPriceResponse
```

Get SMS price

Get SMS pricing for specific destination with optional parameters. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $mcc = 255; // string | Mobile Country Code |
| $mnc = 01; // string | Mobile Network Code |
| $product = sms; // string | Service type |
| $tariff_code = 9; // string | Tariff code |

try {
    $result = $apiInstance->commonGetPrice($mcc, $mnc, $product, $tariff_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mcc** | **string**| Mobile Country Code | [optional] |
| **mnc** | **string**| Mobile Network Code | [optional] |
| **product** | **string**| Service type | [optional] |
| **tariff_code** | **string**| Tariff code | [optional] |

### Return type

[**\BSG\Api\V1\Model\CommonPriceResponse**](../Model/CommonPriceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonGetPricePost()`

```php
commonGetPricePost($common_price_request): \BSG\Api\V1\Model\CommonPriceResponse
```

Get SMS price (POST)

Get SMS pricing for specific destination with optional parameters. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$common_price_request = {"mcc":"255","mnc":"01","product":"sms","tariff_code":"9"}; // \BSG\Api\V1\Model\CommonPriceRequest

try {
    $result = $apiInstance->commonGetPricePost($common_price_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetPricePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **common_price_request** | [**\BSG\Api\V1\Model\CommonPriceRequest**](../Model/CommonPriceRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\CommonPriceResponse**](../Model/CommonPriceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonGetTariff()`

```php
commonGetTariff(): \BSG\Api\V1\Model\CommonTariffResponse
```

Get tariff information

Get current user tariff configuration and pricing details. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetTariff();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetTariff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\CommonTariffResponse**](../Model/CommonTariffResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonGetTariffPost()`

```php
commonGetTariffPost(): \BSG\Api\V1\Model\CommonTariffResponse
```

Get tariff information (POST)

Get current user tariff configuration and pricing details. <span style=\"color: red; font-weight: bold;\">Available only when MAXTECH_SERVER is enabled</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetTariffPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetTariffPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\CommonTariffResponse**](../Model/CommonTariffResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
