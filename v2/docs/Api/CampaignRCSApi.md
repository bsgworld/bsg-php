# BSG\\Api\\V2\CampaignRCSApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rcsSend()**](CampaignRCSApi.md#rcsSend) | **POST** /api/campaigns/rcs/send | Send RCS message |
| [**rcsSendGroups()**](CampaignRCSApi.md#rcsSendGroups) | **POST** /api/campaigns/rcs/send-groups | Send RCS message to contact list |
| [**rcsSingle()**](CampaignRCSApi.md#rcsSingle) | **POST** /api/messages/rcs/send | Send single RCS message |


## `rcsSend()`

```php
rcsSend($send_rcs_campaign): \BSG\\Api\\V2\Model\RcsSend200Response
```

Send RCS message

This method provides the ability to send a single rcs message or to send a mass rcs message. It also supports sending messages via an alternative SMS channel if the rcs can’t be delivered

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\CampaignRCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_rcs_campaign = {"phones":[{"number":"380661231231"}],"sender":"rcs_sender","options":{"text":"Hello! ☺️"}}; // \BSG\\Api\\V2\Model\SendRcsCampaign

try {
    $result = $apiInstance->rcsSend($send_rcs_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRCSApi->rcsSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_rcs_campaign** | [**\BSG\\Api\\V2\Model\SendRcsCampaign**](../Model/SendRcsCampaign.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\RcsSend200Response**](../Model/RcsSend200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rcsSendGroups()`

```php
rcsSendGroups($send_rcs_campaign_groups): \BSG\\Api\\V2\Model\RcsSend200Response
```

Send RCS message to contact list

The method provides the ability to send rcs messages to a group of contacts (the group ID is created in the client’s contact book).  The ability to send messages via an alternative SMS channel is also supported

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\CampaignRCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_rcs_campaign_groups = {"groups":[1864275],"sender":"rcs_sender","options":{"text":"Hello! ☺️"}}; // \BSG\\Api\\V2\Model\SendRcsCampaignGroups

try {
    $result = $apiInstance->rcsSendGroups($send_rcs_campaign_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRCSApi->rcsSendGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_rcs_campaign_groups** | [**\BSG\\Api\\V2\Model\SendRcsCampaignGroups**](../Model/SendRcsCampaignGroups.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\RcsSend200Response**](../Model/RcsSend200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rcsSingle()`

```php
rcsSingle($rcs_message): \BSG\\Api\\V2\Model\RcsSingle200Response
```

Send single RCS message

This method allows you to send a single rcs message instantly. The message is sent without creating a campaign, provided that the client has enough funds on his/her balance. The ability to send messages via an alternative SMS channel is also supported

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\CampaignRCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rcs_message = {"phone":{"number":"380661231231"},"sender":"rcs_sender","options":{"text":"Hello! ☺️"}}; // \BSG\\Api\\V2\Model\RcsMessage

try {
    $result = $apiInstance->rcsSingle($rcs_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRCSApi->rcsSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rcs_message** | [**\BSG\\Api\\V2\Model\RcsMessage**](../Model/RcsMessage.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\RcsSingle200Response**](../Model/RcsSingle200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
