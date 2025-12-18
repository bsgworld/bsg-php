# BSG\\Api\\V2\SendersApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**senderRequestLegal()**](SendersApi.md#senderRequestLegal) | **POST** /api/senders/requests/legal | Sender registration by a legal entity |
| [**senderRequestNatural()**](SendersApi.md#senderRequestNatural) | **POST** /api/senders/requests/natural | Sender registration by an individual |
| [**senderRequests()**](SendersApi.md#senderRequests) | **GET** /api/senders/requests/sms | List of Sender Requests |
| [**senders()**](SendersApi.md#senders) | **GET** /api/senders | List of Senders |


## `senderRequestLegal()`

```php
senderRequestLegal($sender_request_legal_request): \BSG\\Api\\V2\Model\SenderRequestLegal201Response
```

Sender registration by a legal entity

Method for submitting an application for registration of the SMS Sender’s name (Alpha-name) with a mobile operator by a subject legal entity.  **Please note:** that Sender registration is not available in Demo and Test account modes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_request_legal_request = new \BSG\\Api\\V2\Model\SenderRequestLegalRequest(); // \BSG\\Api\\V2\Model\SenderRequestLegalRequest

try {
    $result = $apiInstance->senderRequestLegal($sender_request_legal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->senderRequestLegal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_request_legal_request** | [**\BSG\\Api\\V2\Model\SenderRequestLegalRequest**](../Model/SenderRequestLegalRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\SenderRequestLegal201Response**](../Model/SenderRequestLegal201Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `senderRequestNatural()`

```php
senderRequestNatural($sender_request_natural_request): \BSG\\Api\\V2\Model\SenderRequestNatural201Response
```

Sender registration by an individual

Method for submitting an application for registration of the SMS Sender’s name (Alpha-name) with a mobile operator by a subject individual.  **Please note:** that Sender registration is not available in Demo and Test account modes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_request_natural_request = new \BSG\\Api\\V2\Model\SenderRequestNaturalRequest(); // \BSG\\Api\\V2\Model\SenderRequestNaturalRequest

try {
    $result = $apiInstance->senderRequestNatural($sender_request_natural_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->senderRequestNatural: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_request_natural_request** | [**\BSG\\Api\\V2\Model\SenderRequestNaturalRequest**](../Model/SenderRequestNaturalRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\SenderRequestNatural201Response**](../Model/SenderRequestNatural201Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `senderRequests()`

```php
senderRequests($page_limit, $page_offset, $sort, $way, $filter_status, $filter_id, $filter_country_code, $filter_sender, $filter_created_at): \BSG\\Api\\V2\Model\SenderRequests200Response
```

List of Sender Requests

Get SMS Senders request status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_limit = 50; // int
$page_offset = 0; // int
$sort = 'id'; // string
$way = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SortWay(); // \BSG\\Api\\V2\Model\SortWay
$filter_status = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SenderRequestStatus(); // \BSG\\Api\\V2\Model\SenderRequestStatus
$filter_id = 56; // int
$filter_country_code = 'filter_country_code_example'; // string
$filter_sender = 'filter_sender_example'; // string
$filter_created_at = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->senderRequests($page_limit, $page_offset, $sort, $way, $filter_status, $filter_id, $filter_country_code, $filter_sender, $filter_created_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->senderRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_limit** | **int**|  | [optional] [default to 50] |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **sort** | **string**|  | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\\Api\\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **filter_status** | [**\BSG\\Api\\V2\Model\SenderRequestStatus**](../Model/.md)|  | [optional] |
| **filter_id** | **int**|  | [optional] |
| **filter_country_code** | **string**|  | [optional] |
| **filter_sender** | **string**|  | [optional] |
| **filter_created_at** | **\DateTime**|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\SenderRequests200Response**](../Model/SenderRequests200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `senders()`

```php
senders($type): \BSG\\Api\\V2\Model\Senders200Response
```

List of Senders

Get the list of the registered senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Sender type to list

try {
    $result = $apiInstance->senders($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->senders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Sender type to list | |

### Return type

[**\BSG\\Api\\V2\Model\Senders200Response**](../Model/Senders200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
