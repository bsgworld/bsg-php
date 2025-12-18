# BSG\\Api\\V2\AuthApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](AuthApi.md#login) | **POST** /api/auth/login | Receive JWT token |
| [**refreshToken()**](AuthApi.md#refreshToken) | **POST** /api/auth/refresh | Refresh JWT token |


## `login()`

```php
login($login_request): \BSG\\Api\\V2\Model\TokenSchema
```

Receive JWT token

Receive JWT token to use with other method. Use live/test api-key to login. JWT-token has limited lifetime and have to be refreshed before become expired

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BSG\\Api\\V2\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_request = new \BSG\\Api\\V2\Model\LoginRequest(); // \BSG\\Api\\V2\Model\LoginRequest

try {
    $result = $apiInstance->login($login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_request** | [**\BSG\\Api\\V2\Model\LoginRequest**](../Model/LoginRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshToken()`

```php
refreshToken(): \BSG\\Api\\V2\Model\TokenSchema
```

Refresh JWT token

Refresh JWT token. Return new JWT-token to new term. It's necessary to call when actual JWT-token almost expired

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->refreshToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BSG\\Api\\V2\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
