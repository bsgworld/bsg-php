# BSG\\Api\\V2\StopListApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stoplistAdd()**](StopListApi.md#stoplistAdd) | **POST** /api/stoplist/attach | Add contacts to stop list |
| [**stoplistItems()**](StopListApi.md#stoplistItems) | **GET** /api/stoplist | List the contacts of stop lists |
| [**stoplistRemove()**](StopListApi.md#stoplistRemove) | **POST** /api/stoplist/detach | Remove contacts from stop list |
| [**stoplistSearch()**](StopListApi.md#stoplistSearch) | **GET** /api/stoplist/search | Search contacts in Stop lists |


## `stoplistAdd()`

```php
stoplistAdd($stoplist_add_request): \BSG\\Api\\V2\Model\StoplistAdd200Response
```

Add contacts to stop list

Performs adding one or more contacts to the stop list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\StopListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stoplist_add_request = new \BSG\\Api\\V2\Model\StoplistAddRequest(); // \BSG\\Api\\V2\Model\StoplistAddRequest

try {
    $result = $apiInstance->stoplistAdd($stoplist_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StopListApi->stoplistAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stoplist_add_request** | [**\BSG\\Api\\V2\Model\StoplistAddRequest**](../Model/StoplistAddRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\StoplistAdd200Response**](../Model/StoplistAdd200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stoplistItems()`

```php
stoplistItems($page_offset, $page_limit, $type): \BSG\\Api\\V2\Model\StoplistItems200Response
```

List the contacts of stop lists

The method allows getting a list of contacts that were added to the SMS and/or Viber stop list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\StopListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 50; // int | The number of items in the response
$type = 'type_example'; // string | Specify the type of the stop list for which we need to return the contact list. If the stop list type is not specified, the method will return data for all the stop list types

try {
    $result = $apiInstance->stoplistItems($page_offset, $page_limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StopListApi->stoplistItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 20] |
| **type** | **string**| Specify the type of the stop list for which we need to return the contact list. If the stop list type is not specified, the method will return data for all the stop list types | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\StoplistItems200Response**](../Model/StoplistItems200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stoplistRemove()`

```php
stoplistRemove($stoplist_remove_request): object
```

Remove contacts from stop list

Performs the removal of one or more contacts from the stop list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\StopListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stoplist_remove_request = new \BSG\\Api\\V2\Model\StoplistRemoveRequest(); // \BSG\\Api\\V2\Model\StoplistRemoveRequest

try {
    $result = $apiInstance->stoplistRemove($stoplist_remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StopListApi->stoplistRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stoplist_remove_request** | [**\BSG\\Api\\V2\Model\StoplistRemoveRequest**](../Model/StoplistRemoveRequest.md)|  | |

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

## `stoplistSearch()`

```php
stoplistSearch($page_offset, $page_limit, $sort, $way, $contact_group_id, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value): \BSG\\Api\\V2\Model\StoplistSearch200Response
```

Search contacts in Stop lists

Search contacts in stop lists by criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\StopListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 50; // int | The number of items in the response
$sort = 'id'; // string | Sort by conditions: id, phone
$way = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SortWay(); // \BSG\\Api\\V2\Model\SortWay
$contact_group_id = 56; // int | Find only phone numbers in stop list that included into specified contact list
$search_field = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\StoplistSearchField(); // \BSG\\Api\\V2\Model\StoplistSearchField
$search_operator = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SearchOperator(); // \BSG\\Api\\V2\Model\SearchOperator
$search_value = 'search_value_example'; // string
$search_fields_0_field = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\StoplistSearchField(); // \BSG\\Api\\V2\Model\StoplistSearchField
$search_fields_0_operator = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SearchOperator(); // \BSG\\Api\\V2\Model\SearchOperator
$search_fields_0_value = 'search_fields_0_value_example'; // string

try {
    $result = $apiInstance->stoplistSearch($page_offset, $page_limit, $sort, $way, $contact_group_id, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StopListApi->stoplistSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |
| **sort** | **string**| Sort by conditions: id, phone | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\\Api\\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **contact_group_id** | **int**| Find only phone numbers in stop list that included into specified contact list | [optional] |
| **search_field** | [**\BSG\\Api\\V2\Model\StoplistSearchField**](../Model/.md)|  | [optional] |
| **search_operator** | [**\BSG\\Api\\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_value** | **string**|  | [optional] |
| **search_fields_0_field** | [**\BSG\\Api\\V2\Model\StoplistSearchField**](../Model/.md)|  | [optional] |
| **search_fields_0_operator** | [**\BSG\\Api\\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_fields_0_value** | **string**|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\StoplistSearch200Response**](../Model/StoplistSearch200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
