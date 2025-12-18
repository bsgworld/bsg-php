# BSG\\Api\\V2\ContactListApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactList()**](ContactListApi.md#contactList) | **GET** /api/groups/{id} | Get list by id |
| [**contactListAttach()**](ContactListApi.md#contactListAttach) | **POST** /api/groups/attach | Add contacts to the list |
| [**contactListCreate()**](ContactListApi.md#contactListCreate) | **POST** /api/groups | Create list |
| [**contactListDelete()**](ContactListApi.md#contactListDelete) | **DELETE** /api/groups/{id} | Delete list |
| [**contactListDetach()**](ContactListApi.md#contactListDetach) | **POST** /api/groups/detach | Remove contacts from the list |
| [**contactListSearch()**](ContactListApi.md#contactListSearch) | **GET** /api/groups/search | Search list |
| [**contactListUpdate()**](ContactListApi.md#contactListUpdate) | **PUT** /api/groups/{id} | Update list |
| [**contactLists()**](ContactListApi.md#contactLists) | **GET** /api/groups | List of contact lists |


## `contactList()`

```php
contactList($id): \BSG\\Api\\V2\Model\ContactList200Response
```

Get list by id

Get information about the contact list by its identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->contactList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\BSG\\Api\\V2\Model\ContactList200Response**](../Model/ContactList200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactListAttach()`

```php
contactListAttach($contact_list_attach_request): object
```

Add contacts to the list

The method provides the ability to add an existing contact to the list. The action can be single or bulk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_list_attach_request = {"contacts":[248452959,248452739,248452740],"groups":[1864623,1864621]}; // \BSG\\Api\\V2\Model\ContactListAttachRequest

try {
    $result = $apiInstance->contactListAttach($contact_list_attach_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListAttach: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_list_attach_request** | [**\BSG\\Api\\V2\Model\ContactListAttachRequest**](../Model/ContactListAttachRequest.md)|  | |

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

## `contactListCreate()`

```php
contactListCreate($contact_list_update_request): \BSG\\Api\\V2\Model\ContactList200Response
```

Create list

Create a contact list to group contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_list_update_request = {"name":"new list 123"}; // \BSG\\Api\\V2\Model\ContactListUpdateRequest

try {
    $result = $apiInstance->contactListCreate($contact_list_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_list_update_request** | [**\BSG\\Api\\V2\Model\ContactListUpdateRequest**](../Model/ContactListUpdateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ContactList200Response**](../Model/ContactList200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactListDelete()`

```php
contactListDelete($id)
```

Delete list

Method for deleting contact list. Please note that when you delete a contact list, all contacts that were added to it are not deleted from your Contact Book

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->contactListDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `contactListDetach()`

```php
contactListDetach($contact_list_attach_request): object
```

Remove contacts from the list

Performs the removal of contact from the list. The action can be single (string) or bulk (array)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_list_attach_request = {"contacts":[248452959,248452739,248452740],"groups":[1864623,1864621]}; // \BSG\\Api\\V2\Model\ContactListAttachRequest

try {
    $result = $apiInstance->contactListDetach($contact_list_attach_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListDetach: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_list_attach_request** | [**\BSG\\Api\\V2\Model\ContactListAttachRequest**](../Model/ContactListAttachRequest.md)|  | |

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

## `contactListSearch()`

```php
contactListSearch($page_offset, $page_limit, $sort, $way, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value): \BSG\\Api\\V2\Model\ContactListSearch200Response
```

Search list

Method for searching the list of contacts using operations like, =, >, >=, <, <=. Search is possible by the following fields:   - name - description - date - items - phone - id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 50; // int | The number of items in the response
$sort = 'id'; // string
$way = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SortWay(); // \BSG\\Api\\V2\Model\SortWay
$search_field = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\ContactGroupSearchField(); // \BSG\\Api\\V2\Model\ContactGroupSearchField
$search_operator = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SearchOperator(); // \BSG\\Api\\V2\Model\SearchOperator
$search_value = 'search_value_example'; // string
$search_fields_0_field = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\ContactGroupSearchField(); // \BSG\\Api\\V2\Model\ContactGroupSearchField
$search_fields_0_operator = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SearchOperator(); // \BSG\\Api\\V2\Model\SearchOperator
$search_fields_0_value = 'search_fields_0_value_example'; // string

try {
    $result = $apiInstance->contactListSearch($page_offset, $page_limit, $sort, $way, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |
| **sort** | **string**|  | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\\Api\\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **search_field** | [**\BSG\\Api\\V2\Model\ContactGroupSearchField**](../Model/.md)|  | [optional] |
| **search_operator** | [**\BSG\\Api\\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_value** | **string**|  | [optional] |
| **search_fields_0_field** | [**\BSG\\Api\\V2\Model\ContactGroupSearchField**](../Model/.md)|  | [optional] |
| **search_fields_0_operator** | [**\BSG\\Api\\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_fields_0_value** | **string**|  | [optional] |

### Return type

[**\BSG\\Api\\V2\Model\ContactListSearch200Response**](../Model/ContactListSearch200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactListUpdate()`

```php
contactListUpdate($id, $contact_list_update_request): \BSG\\Api\\V2\Model\ContactList200Response
```

Update list

Performs editing of the selected contacts list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$contact_list_update_request = new \BSG\\Api\\V2\Model\ContactListUpdateRequest(); // \BSG\\Api\\V2\Model\ContactListUpdateRequest

try {
    $result = $apiInstance->contactListUpdate($id, $contact_list_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactListUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **contact_list_update_request** | [**\BSG\\Api\\V2\Model\ContactListUpdateRequest**](../Model/ContactListUpdateRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\ContactList200Response**](../Model/ContactList200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactLists()`

```php
contactLists($page_offset, $page_limit): \BSG\\Api\\V2\Model\ContactLists200Response
```

List of contact lists

Provides an index of all the contact lists with data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
$page_limit = 50; // int | The number of items in the response

try {
    $result = $apiInstance->contactLists($page_offset, $page_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->contactLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |

### Return type

[**\BSG\\Api\\V2\Model\ContactLists200Response**](../Model/ContactLists200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
