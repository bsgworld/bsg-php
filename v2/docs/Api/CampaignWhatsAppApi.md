# BSG\Api\V2\CampaignWhatsAppApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**whatsappSend()**](CampaignWhatsAppApi.md#whatsappSend) | **POST** /api/campaigns/whatsapp/send |  |
| [**whatsappSingle()**](CampaignWhatsAppApi.md#whatsappSingle) | **POST** /api/messages/whatsapp/send | Send single WhatsApp message |


## `whatsappSend()`

```php
whatsappSend($send_whats_app_campaign): \BSG\Api\V2\Model\CampaignSchema
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignWhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_whats_app_campaign = new \BSG\Api\V2\Model\SendWhatsAppCampaign(); // \BSG\Api\V2\Model\SendWhatsAppCampaign

try {
    $result = $apiInstance->whatsappSend($send_whats_app_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWhatsAppApi->whatsappSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_whats_app_campaign** | [**\BSG\Api\V2\Model\SendWhatsAppCampaign**](../Model/SendWhatsAppCampaign.md)|  | |

### Return type

[**\BSG\Api\V2\Model\CampaignSchema**](../Model/CampaignSchema.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whatsappSingle()`

```php
whatsappSingle($whats_app_message): \BSG\Api\V2\Model\WhatsappSingle200Response
```

Send single WhatsApp message

This method allows you to send a single whatsapp message instantly. The message is sent without creating a campaign, provided that the client has enough funds on his/her balance. The ability to send messages via an alternative SMS channel is also supported

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\CampaignWhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whats_app_message = {"phone":{"number":"380661231231"},"sender":"whatsapp_sender","template":{"name":"whatsapp_test","language":{"code":"en"},"components":[{"type":"body","parameters":[{"type":"text","text":"Hello! ☺️"}]}]}}; // \BSG\Api\V2\Model\WhatsAppMessage

try {
    $result = $apiInstance->whatsappSingle($whats_app_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWhatsAppApi->whatsappSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whats_app_message** | [**\BSG\Api\V2\Model\WhatsAppMessage**](../Model/WhatsAppMessage.md)|  | |

### Return type

[**\BSG\Api\V2\Model\WhatsappSingle200Response**](../Model/WhatsappSingle200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
