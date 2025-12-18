# BSG\\Api\\V2\ContactFieldApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactFieldCreate()**](ContactFieldApi.md#contactFieldCreate) | **POST** /api/contacts/fields | Create contact field |
| [**contactFieldUpdate()**](ContactFieldApi.md#contactFieldUpdate) | **PATCH** /api/contacts/fields/{id} | Update contact field |
| [**contactFields()**](ContactFieldApi.md#contactFields) | **GET** /api/contacts/fields | List of contact fields |
| [**ed8d272687f9ac68a20fe1c31dc3c042()**](ContactFieldApi.md#ed8d272687f9ac68a20fe1c31dc3c042) | **POST** /api/contacts/fields/delete | Delete contact fields by ids |


## `contactFieldCreate()`

```php
contactFieldCreate($contact_field_create_request): \BSG\\Api\\V2\Model\ContactFieldCreate201Response
```

Create contact field

The method allows the creation of additional custom fields for contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_field_create_request = new \BSG\\Api\\V2\Model\ContactFieldCreateRequest(); // \BSG\\Api\\V2\Model\ContactFieldCreateRequest

try {
    $result = $apiInstance->contactFieldCreate($contact_field_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->contactFieldCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_field_create_request** | [**\BSG\\Api\\V2\Model\ContactFieldCreateRequest**](../Model/ContactFieldCreateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ContactFieldCreate201Response**](../Model/ContactFieldCreate201Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactFieldUpdate()`

```php
contactFieldUpdate($id, $contact_field_update_request): \BSG\\Api\\V2\Model\ContactFieldCreate201Response
```

Update contact field

Method for editing custom contact field:  - change field name - change field description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Contact field id
$contact_field_update_request = new \BSG\\Api\\V2\Model\ContactFieldUpdateRequest(); // \BSG\\Api\\V2\Model\ContactFieldUpdateRequest

try {
    $result = $apiInstance->contactFieldUpdate($id, $contact_field_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->contactFieldUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact field id | |
| **contact_field_update_request** | [**\BSG\\Api\\V2\Model\ContactFieldUpdateRequest**](../Model/ContactFieldUpdateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ContactFieldCreate201Response**](../Model/ContactFieldCreate201Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactFields()`

```php
contactFields(): \BSG\\Api\\V2\Model\ContactFieldCollectionSchema
```

List of contact fields

Get a list of custom fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contactFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->contactFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\\Api\\V2\Model\ContactFieldCollectionSchema**](../Model/ContactFieldCollectionSchema.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ed8d272687f9ac68a20fe1c31dc3c042()`

```php
ed8d272687f9ac68a20fe1c31dc3c042($ed8d272687f9ac68a20fe1c31dc3c042_request): object
```

Delete contact fields by ids

Delete multiple (up to 30) contact fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed8d272687f9ac68a20fe1c31dc3c042_request = new \BSG\\Api\\V2\Model\Ed8d272687f9ac68a20fe1c31dc3c042Request(); // \BSG\\Api\\V2\Model\Ed8d272687f9ac68a20fe1c31dc3c042Request

try {
    $result = $apiInstance->ed8d272687f9ac68a20fe1c31dc3c042($ed8d272687f9ac68a20fe1c31dc3c042_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->ed8d272687f9ac68a20fe1c31dc3c042: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed8d272687f9ac68a20fe1c31dc3c042_request** | [**\BSG\\Api\\V2\Model\Ed8d272687f9ac68a20fe1c31dc3c042Request**](../Model/Ed8d272687f9ac68a20fe1c31dc3c042Request.md)|  | |

### Return type

**object**

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
