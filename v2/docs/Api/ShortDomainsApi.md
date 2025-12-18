# BSG\\Api\\V2\ShortDomainsApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shortUrlsDomain()**](ShortDomainsApi.md#shortUrlsDomain) | **GET** /api/short-url/domains/{uuid} | Get domain by uuid |
| [**shortUrlsDomainCreate()**](ShortDomainsApi.md#shortUrlsDomainCreate) | **POST** /api/short-url/domains | Add domain |
| [**shortUrlsDomainRemove()**](ShortDomainsApi.md#shortUrlsDomainRemove) | **DELETE** /api/short-url/domains/{uuid} | Remove domain |
| [**shortUrlsDomainUpdate()**](ShortDomainsApi.md#shortUrlsDomainUpdate) | **PUT** /api/short-url/domains/{uuid} | Update domain |
| [**shortUrlsDomains()**](ShortDomainsApi.md#shortUrlsDomains) | **GET** /api/short-url/domains | List of domains |


## `shortUrlsDomain()`

```php
shortUrlsDomain($uuid): \BSG\\Api\\V2\Model\ShortUrlsDomain200Response
```

Get domain by uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = db05af9e-107e-4ed6-b1ac-a373d90109c8; // string | Uuid of entity

try {
    $result = $apiInstance->shortUrlsDomain($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortDomainsApi->shortUrlsDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsDomain200Response**](../Model/ShortUrlsDomain200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsDomainCreate()`

```php
shortUrlsDomainCreate($domain_store_request): \BSG\\Api\\V2\Model\ShortUrlsDomain200Response
```

Add domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_store_request = {"name":"short.ai","slug_type":"random"}; // \BSG\\Api\\V2\Model\DomainStoreRequest

try {
    $result = $apiInstance->shortUrlsDomainCreate($domain_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortDomainsApi->shortUrlsDomainCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_store_request** | [**\BSG\\Api\\V2\Model\DomainStoreRequest**](../Model/DomainStoreRequest.md)|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsDomain200Response**](../Model/ShortUrlsDomain200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsDomainRemove()`

```php
shortUrlsDomainRemove($uuid): object
```

Remove domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of entity

try {
    $result = $apiInstance->shortUrlsDomainRemove($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortDomainsApi->shortUrlsDomainRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |

### Return type

**object**

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsDomainUpdate()`

```php
shortUrlsDomainUpdate($uuid, $domain_update_request): \BSG\\Api\\V2\Model\ShortUrlsDomain200Response
```

Update domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of entity
$domain_update_request = {"is_default":true}; // \BSG\\Api\\V2\Model\DomainUpdateRequest

try {
    $result = $apiInstance->shortUrlsDomainUpdate($uuid, $domain_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortDomainsApi->shortUrlsDomainUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |
| **domain_update_request** | [**\BSG\\Api\\V2\Model\DomainUpdateRequest**](../Model/DomainUpdateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsDomain200Response**](../Model/ShortUrlsDomain200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsDomains()`

```php
shortUrlsDomains($from, $to, $page, $per_page): \BSG\\Api\\V2\Model\ShortUrlsDomains200Response
```

List of domains

Get list of short urls domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2022-04-28; // string | From date
$to = 2022-04-28; // string | To date
$page = 1; // int | Get items starting from this page.
$per_page = 20; // int | The number of items in the page. Possible values are from 10 to 500.

try {
    $result = $apiInstance->shortUrlsDomains($from, $to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortDomainsApi->shortUrlsDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| From date | |
| **to** | **string**| To date | |
| **page** | **int**| Get items starting from this page. | [optional] [default to 1] |
| **per_page** | **int**| The number of items in the page. Possible values are from 10 to 500. | [optional] [default to 20] |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsDomains200Response**](../Model/ShortUrlsDomains200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
