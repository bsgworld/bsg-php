# BSG\Api\V1\SMSApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**smsCheckPrice()**](SMSApi.md#smsCheckPrice) | **POST** /rest/sms/price | Check SMS price |
| [**smsCheckPricePut()**](SMSApi.md#smsCheckPricePut) | **PUT** /rest/sms/price | Check SMS price (PUT) |
| [**smsCreateObjects()**](SMSApi.md#smsCreateObjects) | **POST** /rest/sms/create | Send SMS message |
| [**smsCreateObjectsPut()**](SMSApi.md#smsCreateObjectsPut) | **PUT** /rest/sms/create | Send SMS message (PUT) |
| [**smsGet2WayIncoming()**](SMSApi.md#smsGet2WayIncoming) | **GET** /rest/sms/2wayIncoming | Get 2-way incoming messages |
| [**smsGet2WaySenders()**](SMSApi.md#smsGet2WaySenders) | **GET** /rest/sms/2waySenders | Get 2-way senders |
| [**smsGetBalance()**](SMSApi.md#smsGetBalance) | **GET** /rest/sms/balance | Get account balance |
| [**smsGetBalancePost()**](SMSApi.md#smsGetBalancePost) | **POST** /rest/sms/balance | Get account balance |
| [**smsGetMassStatus()**](SMSApi.md#smsGetMassStatus) | **POST** /rest/sms/getStatus | Get status for multiple SMS messages |
| [**smsGetPrices()**](SMSApi.md#smsGetPrices) | **GET** /rest/sms/prices | Get SMS pricing |
| [**smsGetStatusByExtId()**](SMSApi.md#smsGetStatusByExtId) | **GET** /rest/sms/reference/{reference} | Get SMS status by reference |
| [**smsGetStatusById()**](SMSApi.md#smsGetStatusById) | **GET** /rest/sms/{id} | Get SMS status by ID |
| [**smsGetTaskStatus()**](SMSApi.md#smsGetTaskStatus) | **GET** /rest/sms/task/{taskId} | Get task status |


## `smsCheckPrice()`

```php
smsCheckPrice($sms_price_check_request): \BSG\Api\V1\Model\SmsPriceCheckResponse
```

Check SMS price

Calculate SMS price without sending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_price_check_request = {"destination":"phone","msisdn":"380953227271","originator":"BSG","body":"Hello! This is a test message for price calculation.","transliterate":true}; // \BSG\Api\V1\Model\SmsPriceCheckRequest

try {
    $result = $apiInstance->smsCheckPrice($sms_price_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCheckPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_price_check_request** | [**\BSG\Api\V1\Model\SmsPriceCheckRequest**](../Model/SmsPriceCheckRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\SmsPriceCheckResponse**](../Model/SmsPriceCheckResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsCheckPricePut()`

```php
smsCheckPricePut($sms_price_check_request): \BSG\Api\V1\Model\SmsPriceCheckResponse
```

Check SMS price (PUT)

Calculate SMS price without sending using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_price_check_request = {"destination":"phone","msisdn":"380953227271","originator":"BSG","body":"Hello! This is a test message for price calculation.","transliterate":true}; // \BSG\Api\V1\Model\SmsPriceCheckRequest

try {
    $result = $apiInstance->smsCheckPricePut($sms_price_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCheckPricePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_price_check_request** | [**\BSG\Api\V1\Model\SmsPriceCheckRequest**](../Model/SmsPriceCheckRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\SmsPriceCheckResponse**](../Model/SmsPriceCheckResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsCreateObjects()`

```php
smsCreateObjects($sms_create_request): \BSG\Api\V1\Model\SmsCreateResponse
```

Send SMS message

Send SMS message to one or multiple recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_create_request = {"destination":"phone","msisdn":"380953227271","originator":"testsms","body":"k TEST Hello12 SMS 1115222","reference":"1737033400123","validity":72,"callback_url":"https://webhook.site/wh-delivery-reports","2way":0,"transliterate":false}; // \BSG\Api\V1\Model\SmsCreateRequest

try {
    $result = $apiInstance->smsCreateObjects($sms_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCreateObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_create_request** | [**\BSG\Api\V1\Model\SmsCreateRequest**](../Model/SmsCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\SmsCreateResponse**](../Model/SmsCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsCreateObjectsPut()`

```php
smsCreateObjectsPut($sms_create_request): \BSG\Api\V1\Model\SmsCreateResponse
```

Send SMS message (PUT)

Send SMS message to one or multiple recipients using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_create_request = {"destination":"phone","msisdn":"380953227271","originator":"testsms","body":"k TEST Hello12 SMS 1115222","reference":"1737033400123","validity":72,"callback_url":"https://webhook.site/wh-delivery-reports","2way":0,"transliterate":false}; // \BSG\Api\V1\Model\SmsCreateRequest

try {
    $result = $apiInstance->smsCreateObjectsPut($sms_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCreateObjectsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_create_request** | [**\BSG\Api\V1\Model\SmsCreateRequest**](../Model/SmsCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\SmsCreateResponse**](../Model/SmsCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGet2WayIncoming()`

```php
smsGet2WayIncoming(): \BSG\Api\V1\Model\Sms2WayIncomingResponse
```

Get 2-way incoming messages

Retrieve incoming SMS messages for 2-way communication within specified date range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsGet2WayIncoming();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGet2WayIncoming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\Sms2WayIncomingResponse**](../Model/Sms2WayIncomingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGet2WaySenders()`

```php
smsGet2WaySenders(): \BSG\Api\V1\Model\SuccessResponse
```

Get 2-way senders

Get list of available senders for 2-way SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsGet2WaySenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGet2WaySenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetBalance()`

```php
smsGetBalance(): \BSG\Api\V1\Model\SmsBalanceResponse
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


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsGetBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\SmsBalanceResponse**](../Model/SmsBalanceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetBalancePost()`

```php
smsGetBalancePost(): \BSG\Api\V1\Model\SmsBalanceResponse
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


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsGetBalancePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetBalancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\SmsBalanceResponse**](../Model/SmsBalanceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetMassStatus()`

```php
smsGetMassStatus($sms_mass_status_request): \BSG\Api\V1\Model\SmsMassStatusResponse
```

Get status for multiple SMS messages

Retrieve status information for multiple SMS messages by their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_mass_status_request = {"ids":[123,124,125]}; // \BSG\Api\V1\Model\SmsMassStatusRequest

try {
    $result = $apiInstance->smsGetMassStatus($sms_mass_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetMassStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_mass_status_request** | [**\BSG\Api\V1\Model\SmsMassStatusRequest**](../Model/SmsMassStatusRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\SmsMassStatusResponse**](../Model/SmsMassStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetPrices()`

```php
smsGetPrices(): \BSG\Api\V1\Model\SmsPricesListResponse
```

Get SMS pricing

Retrieve SMS pricing for all available destinations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsGetPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\SmsPricesListResponse**](../Model/SmsPricesListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetStatusByExtId()`

```php
smsGetStatusByExtId($reference): \BSG\Api\V1\Model\SmsStatusResponse
```

Get SMS status by reference

Get SMS delivery status using external reference ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $reference = unique_ref_123; // string | External reference ID |

try {
    $result = $apiInstance->smsGetStatusByExtId($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetStatusByExtId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| External reference ID | |

### Return type

[**\BSG\Api\V1\Model\SmsStatusResponse**](../Model/SmsStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetStatusById()`

```php
smsGetStatusById($id): \BSG\Api\V1\Model\SmsStatusResponse
```

Get SMS status by ID

Get SMS delivery status and details by message ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 123456; // string | Message ID |

try {
    $result = $apiInstance->smsGetStatusById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetStatusById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Message ID | |

### Return type

[**\BSG\Api\V1\Model\SmsStatusResponse**](../Model/SmsStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsGetTaskStatus()`

```php
smsGetTaskStatus($task_id): \BSG\Api\V1\Model\SmsTaskStatusResponse
```

Get task status

Get status of SMS processing task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $task_id = 123; // string | Task ID |

try {
    $result = $apiInstance->smsGetTaskStatus($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsGetTaskStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| Task ID | |

### Return type

[**\BSG\Api\V1\Model\SmsTaskStatusResponse**](../Model/SmsTaskStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
