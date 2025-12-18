# BSG\Api\V2\AccountSettingsApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountSettingsAddressBookFields()**](AccountSettingsApi.md#accountSettingsAddressBookFields) | **GET** /api/settings/address-book-fields/{id} | Get settings value |


## `accountSettingsAddressBookFields()`

```php
accountSettingsAddressBookFields($id): object
```

Get settings value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 1; // int | Address Book ID |

try {
    $result = $apiInstance->accountSettingsAddressBookFields($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsAddressBookFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Address Book ID | |

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
