# BSG\\Api\\V2\ShortLinksApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shortUrlsClicks()**](ShortLinksApi.md#shortUrlsClicks) | **GET** /api/short-url/clicks | List of clicks |
| [**shortUrlsLink()**](ShortLinksApi.md#shortUrlsLink) | **GET** /api/short-url/links/{uuid}/statistics | Get short link statistic |
| [**shortUrlsLinkCreate()**](ShortLinksApi.md#shortUrlsLinkCreate) | **POST** /api/short-url/links | Create short link |
| [**shortUrlsLinkDelete()**](ShortLinksApi.md#shortUrlsLinkDelete) | **DELETE** /api/short-url/links/{uuid} | Remove short link |
| [**shortUrlsLinkUpdate()**](ShortLinksApi.md#shortUrlsLinkUpdate) | **PUT** /api/short-url/links/{uuid} | Update short link |
| [**shortUrlsLinks()**](ShortLinksApi.md#shortUrlsLinks) | **GET** /api/short-url/links | List of short links |


## `shortUrlsClicks()`

```php
shortUrlsClicks($from, $to, $page, $per_page, $campaign): \BSG\\Api\\V2\Model\ShortUrlsClicks200Response
```

List of clicks

List of all clicks for selected period *from* - *to* with pagination by *per_page*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2022-04-28; // string | From date
$to = 2022-04-28; // string | To date
$page = 1; // int | Get items starting from this page.
$per_page = 20; // int | The number of items in the page. Possible values are from 10 to 500.
$campaign = 56; // int | Campaign id to get only clicks on short link sent as part on [sms campaign](#tag/Campaign-SMS)

try {
    $result = $apiInstance->shortUrlsClicks($from, $to, $page, $per_page, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsClicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| From date | |
| **to** | **string**| To date | |
| **page** | **int**| Get items starting from this page. | [optional] [default to 1] |
| **per_page** | **int**| The number of items in the page. Possible values are from 10 to 500. | [optional] [default to 20] |
| **campaign** | **int**| Campaign id to get only clicks on short link sent as part on [sms campaign](#tag/Campaign-SMS) | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsClicks200Response**](../Model/ShortUrlsClicks200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsLink()`

```php
shortUrlsLink($uuid): \BSG\\Api\\V2\Model\ShortUrlsLink200Response
```

Get short link statistic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of entity

try {
    $result = $apiInstance->shortUrlsLink($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsLink200Response**](../Model/ShortUrlsLink200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsLinkCreate()`

```php
shortUrlsLinkCreate($link_store_request): \BSG\\Api\\V2\Model\ShortUrlsLinkUpdate200Response
```

Create short link

Create a short link for original link.  **Please note:** *Response contains new link status. If original link is used at first time it may not pass the moderation automatically. Be careful only link in **active** status can be used for redirect!*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_store_request = new \BSG\\Api\\V2\Model\LinkStoreRequest(); // \BSG\\Api\\V2\Model\LinkStoreRequest

try {
    $result = $apiInstance->shortUrlsLinkCreate($link_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsLinkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_store_request** | [**\BSG\\Api\\V2\Model\LinkStoreRequest**](../Model/LinkStoreRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsLinkUpdate200Response**](../Model/ShortUrlsLinkUpdate200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsLinkDelete()`

```php
shortUrlsLinkDelete($uuid)
```

Remove short link

If short link is *active* it will be *deleted*. Next few days this action can be reverted and link may become *active* again. If short link already *blocked* or *deleted* it will be removed permanently.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of entity

try {
    $apiInstance->shortUrlsLinkDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsLinkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |

### Return type

void (empty response body)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsLinkUpdate()`

```php
shortUrlsLinkUpdate($uuid, $link_update_request): \BSG\\Api\\V2\Model\ShortUrlsLinkUpdate200Response
```

Update short link

You can update short link name, slug or original link  **Please note:** If you change the original link to new one that hasn't been ever used before it may requires moderation and short link status may be changed to *blocked*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of entity
$link_update_request = {"name":"New name"}; // \BSG\\Api\\V2\Model\LinkUpdateRequest

try {
    $result = $apiInstance->shortUrlsLinkUpdate($uuid, $link_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsLinkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of entity | |
| **link_update_request** | [**\BSG\\Api\\V2\Model\LinkUpdateRequest**](../Model/LinkUpdateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ShortUrlsLinkUpdate200Response**](../Model/ShortUrlsLinkUpdate200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shortUrlsLinks()`

```php
shortUrlsLinks($from, $to, $page, $per_page): \BSG\\Api\\V2\Model\ShortUrlsLinks200Response
```

List of short links

List of all created short links of selected period *from* to *to* with pagination by *per_page*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ShortLinksApi(
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
    $result = $apiInstance->shortUrlsLinks($from, $to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->shortUrlsLinks: ', $e->getMessage(), PHP_EOL;
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

[**\BSG\\Api\\V2\Model\ShortUrlsLinks200Response**](../Model/ShortUrlsLinks200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
