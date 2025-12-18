# BSG\Api\V1\ExportsApi

All URIs are relative to https://api.sms-service.local, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportsDeleteFile()**](ExportsApi.md#exportsDeleteFile) | **DELETE** /rest/exports/file | Delete export file |
| [**exportsGetFile()**](ExportsApi.md#exportsGetFile) | **GET** /rest/exports/file | Download export file |
| [**exportsGetList()**](ExportsApi.md#exportsGetList) | **GET** /rest/exports/list | List export jobs |
| [**exportsRequestExport()**](ExportsApi.md#exportsRequestExport) | **POST** /rest/exports/create | Request data export |
| [**exportsRequestExportPut()**](ExportsApi.md#exportsRequestExportPut) | **PUT** /rest/exports/create | Request data export (PUT) |


## `exportsDeleteFile()`

```php
exportsDeleteFile($id): \BSG\Api\V1\Model\ExportsStatusResponse
```

Delete export file

Delete generated export file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = export_123.csv; // string | Export file ID or filename |

try {
    $result = $apiInstance->exportsDeleteFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsDeleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Export file ID or filename | |

### Return type

[**\BSG\Api\V1\Model\ExportsStatusResponse**](../Model/ExportsStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsGetFile()`

```php
exportsGetFile($id, $format): \BSG\Api\V1\Model\ExportsStatusResponse
```

Download export file

Download generated export file in specified format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = export_123.csv; // string | Export file ID or filename |
| $format = csv; // string | File format for download (json, xml, csv) |

try {
    $result = $apiInstance->exportsGetFile($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Export file ID or filename | |
| **format** | **string**| File format for download (json, xml, csv) | [optional] [default to &#39;json&#39;] |

### Return type

[**\BSG\Api\V1\Model\ExportsStatusResponse**](../Model/ExportsStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsGetList()`

```php
exportsGetList(): \BSG\Api\V1\Model\ExportsStatusResponse
```

List export jobs

Get list of export jobs and their status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exportsGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\Api\V1\Model\ExportsStatusResponse**](../Model/ExportsStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsRequestExport()`

```php
exportsRequestExport($export_create_request): \BSG\Api\V1\Model\ExportCreateResponse
```

Request data export

Request export of data (messages, statistics, reports)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_create_request = new \BSG\Api\V1\Model\ExportCreateRequest(); // \BSG\Api\V1\Model\ExportCreateRequest

try {
    $result = $apiInstance->exportsRequestExport($export_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsRequestExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_create_request** | [**\BSG\Api\V1\Model\ExportCreateRequest**](../Model/ExportCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ExportCreateResponse**](../Model/ExportCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsRequestExportPut()`

```php
exportsRequestExportPut($export_create_request): \BSG\Api\V1\Model\ExportCreateResponse
```

Request data export (PUT)

Request export of data (messages, statistics, reports) using PUT method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_create_request = new \BSG\Api\V1\Model\ExportCreateRequest(); // \BSG\Api\V1\Model\ExportCreateRequest

try {
    $result = $apiInstance->exportsRequestExportPut($export_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsRequestExportPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_create_request** | [**\BSG\Api\V1\Model\ExportCreateRequest**](../Model/ExportCreateRequest.md)|  | |

### Return type

[**\BSG\Api\V1\Model\ExportCreateResponse**](../Model/ExportCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
