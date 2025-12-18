# BSG\\Api\\V2\Class2FATemplatesApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**otpTemplate()**](Class2FATemplatesApi.md#otpTemplate) | **GET** /api/2fa/authentications/templates/{templateId} | Get message template |
| [**otpTemplateCreate()**](Class2FATemplatesApi.md#otpTemplateCreate) | **POST** /api/2fa/authentications/templates | Create a message template |
| [**otpTemplateDelete()**](Class2FATemplatesApi.md#otpTemplateDelete) | **DELETE** /api/2fa/authentications/templates/{templateId} | Delete a message template |
| [**otpTemplateList()**](Class2FATemplatesApi.md#otpTemplateList) | **GET** /api/2fa/authentications/templates | List of message templates |


## `otpTemplate()`

```php
otpTemplate($template_id): \BSG\\Api\\V2\Model\OtpTemplate200Response
```

Get message template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FATemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | Template id

try {
    $result = $apiInstance->otpTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FATemplatesApi->otpTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template id | |

### Return type

[**\BSG\\Api\\V2\Model\OtpTemplate200Response**](../Model/OtpTemplate200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otpTemplateCreate()`

```php
otpTemplateCreate($otp_template_create_request): \BSG\\Api\\V2\Model\OtpTemplate200Response
```

Create a message template

This method creates a new message template used for sending the OTP code.    **Please note** *that after creating the template, it is moderated. This template will be available for sending messages with the OTP code only after moderation. Once it’s ready, its status will be changed from Requested to Approved.*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FATemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$otp_template_create_request = new \BSG\\Api\\V2\Model\OtpTemplateCreateRequest(); // \BSG\\Api\\V2\Model\OtpTemplateCreateRequest

try {
    $result = $apiInstance->otpTemplateCreate($otp_template_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FATemplatesApi->otpTemplateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **otp_template_create_request** | [**\BSG\\Api\\V2\Model\OtpTemplateCreateRequest**](../Model/OtpTemplateCreateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\OtpTemplate200Response**](../Model/OtpTemplate200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otpTemplateDelete()`

```php
otpTemplateDelete($template_id): \BSG\\Api\\V2\Model\OtpTemplateDelete200Response
```

Delete a message template

This method deletes the message template for sending the OTP code based on its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FATemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | The ID of the message template that you want to delete. From 1 to 9 digits.

try {
    $result = $apiInstance->otpTemplateDelete($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FATemplatesApi->otpTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| The ID of the message template that you want to delete. From 1 to 9 digits. | |

### Return type

[**\BSG\\Api\\V2\Model\OtpTemplateDelete200Response**](../Model/OtpTemplateDelete200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otpTemplateList()`

```php
otpTemplateList($page_offset, $page_limit, $filter_ids, $filter_status, $sort, $way): \BSG\\Api\\V2\Model\OtpTemplateList200Response
```

List of message templates

This method returns a list of message templates for sending OTR code, allowing you to filter them by various parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FATemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 10; // int
$filter_ids = array(56); // int[]
$filter_status = 'filter_status_example'; // string
$sort = 'template_id'; // string | Sorting by
$way = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SortWay(); // \BSG\\Api\\V2\Model\SortWay

try {
    $result = $apiInstance->otpTemplateList($page_offset, $page_limit, $filter_ids, $filter_status, $sort, $way);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FATemplatesApi->otpTemplateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**|  | [optional] [default to 10] |
| **filter_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **filter_status** | **string**|  | [optional] |
| **sort** | **string**| Sorting by | [optional] [default to &#39;template_id&#39;] |
| **way** | [**\BSG\\Api\\V2\Model\SortWay**](../Model/.md)|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\OtpTemplateList200Response**](../Model/OtpTemplateList200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
