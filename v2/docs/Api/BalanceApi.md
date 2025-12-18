# BSG\\Api\\V2\BalanceApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountBalance()**](BalanceApi.md#accountBalance) | **GET** /api/accounts/balance | Get balance |
| [**accountTariffs()**](BalanceApi.md#accountTariffs) | **GET** /api/accounts/tariff | Get tariffs |


## `accountBalance()`

```php
accountBalance(): \BSG\\Api\\V2\Model\AccountBalance200Response
```

Get balance

Platform provides an API to get information about your account balance. The request allows you to obtain information about the current balance of your account, including the credit limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->accountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\\Api\\V2\Model\AccountBalance200Response**](../Model/AccountBalance200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountTariffs()`

```php
accountTariffs($page_offset, $page_limit): \BSG\\Api\\V2\Model\AccountTariffs200Response
```

Get tariffs

This API allows you to get detailed information about the tariffs for sending SMS and Viber messages, as well as phone Number Verifier requests.  All rates are specified in the currency that is set in the account settings on the Platform.  The method transmits information about all available account tariffs for the SMS / 2 Way SMS, Viber, and Number Verifier service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 50; // int | The number of items in the response

try {
    $result = $apiInstance->accountTariffs($page_offset, $page_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->accountTariffs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |

### Return type

[**\BSG\\Api\\V2\Model\AccountTariffs200Response**](../Model/AccountTariffs200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
