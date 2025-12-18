# BSG\Api\V2\EmailApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**emailSend()**](EmailApi.md#emailSend) | **POST** /api/email/send-emails | Send Email |
| [**emailTemplateSend()**](EmailApi.md#emailTemplateSend) | **POST** /api/email/send-template-emails | Send Email template |


## `emailSend()`

```php
emailSend($send_email): \BSG\Api\V2\Model\EmailResponse
```

Send Email

Method is designed for sending single email with optional parameters.    This request allows you to send emails with both text and HTML content, and optionally include inline media, such as images or other files, which are embedded directly in the email body for a richer user experience

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_email = {"to":["user@test.com"],"from":"Test.email 11_22 <user@test1.email.bsg.world>","subject":"test1","htmlbody":"<html><head><title>link to Symbl.cc</title></head><body><h1>Visit site</h1>Visit site <a href=\"https://symbl.cc\">Symbl.cc</a> for additional information.</body></html>"}; // \BSG\Api\V2\Model\SendEmail

try {
    $result = $apiInstance->emailSend($send_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_email** | [**\BSG\Api\V2\Model\SendEmail**](../Model/SendEmail.md)|  | |

### Return type

[**\BSG\Api\V2\Model\EmailResponse**](../Model/EmailResponse.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateSend()`

```php
emailTemplateSend($send_template_email): \BSG\Api\V2\Model\EmailResponse
```

Send Email template

Method allows you to send an email with dynamic content by referencing an email template (specifying template id). You can customize the content of the email with variables, and you also have the option to embed inline media files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_template_email = {"to":["user@test.com"],"from":"Test.email 11_22 <user@test1.email.bsg.world>","subject":"test1","template_id":19,"template_content":{"recipients_name":"Test User","company_name":"Company Name"}}; // \BSG\Api\V2\Model\SendTemplateEmail

try {
    $result = $apiInstance->emailTemplateSend($send_template_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailTemplateSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_template_email** | [**\BSG\Api\V2\Model\SendTemplateEmail**](../Model/SendTemplateEmail.md)|  | |

### Return type

[**\BSG\Api\V2\Model\EmailResponse**](../Model/EmailResponse.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
