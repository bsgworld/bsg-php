# BSG\Api\V2\ContactApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contact()**](ContactApi.md#contact) | **GET** /api/contacts/{id} | Get contact by ID |
| [**contactCreate()**](ContactApi.md#contactCreate) | **POST** /api/contacts | Create a contact |
| [**contactDelete()**](ContactApi.md#contactDelete) | **DELETE** /api/contacts/{id} | Delete contact |
| [**contactUpdate()**](ContactApi.md#contactUpdate) | **PUT** /api/contacts/{id} | Update contact |
| [**contacts()**](ContactApi.md#contacts) | **GET** /api/contacts | List of contacts |
| [**contactsDelete()**](ContactApi.md#contactsDelete) | **POST** /api/contacts/delete | Delete multiple contacts |
| [**contactsSearch()**](ContactApi.md#contactsSearch) | **GET** /api/contacts/search | Search contacts |


## `contact()`

```php
contact($id): \BSG\Api\V2\Model\Contact200Response
```

Get contact by ID

The method allows you to receive detailed information about an existing contact, which is contained in the system, and user fields of the contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 248452739; // int | Contact id |

try {
    $result = $apiInstance->contact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact id | |

### Return type

[**\BSG\Api\V2\Model\Contact200Response**](../Model/Contact200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactCreate()`

```php
contactCreate($store_contact): \BSG\Api\V2\Model\ContactCreate201Response
```

Create a contact

The method allows adding new contacts to your Contact Book.   **Please note:** that in the TEST account mode there is a restriction for performing this method: it is possible to create a contact only for a verified phone number (number verification is performed in the personal account of the platform).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_contact = {"phone":61401629754}; // \BSG\Api\V2\Model\StoreContact

try {
    $result = $apiInstance->contactCreate($store_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_contact** | [**\BSG\Api\V2\Model\StoreContact**](../Model/StoreContact.md)|  | |

### Return type

[**\BSG\Api\V2\Model\ContactCreate201Response**](../Model/ContactCreate201Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactDelete()`

```php
contactDelete($id): object
```

Delete contact

Use this query to remove an existing contact from the Contact Book. When this query is made, the contact will also be removed from all lists where it was added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 56; // int | Contact id |

try {
    $result = $apiInstance->contactDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact id | |

### Return type

**object**

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactUpdate()`

```php
contactUpdate($id, $contact_update_request): \BSG\Api\V2\Model\ContactUpdate200Response
```

Update contact

The method allows you to make changes to an existing contact: change the phone number, data in the contact’s custom fields, and add the contact to the list.  **Please note:** that in the TEST account mode there is a restriction for performing this method: you can only change the contact’s phone number to a verified number (number verification is performed in the personal account at the platform)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $id = 56; // int | Contact id |
$contact_update_request = {"phone":61401629754,"fields":[{"id":387714,"value":"Ilya Muromets"}],"groups":[1864618]}; // \BSG\Api\V2\Model\ContactUpdateRequest

try {
    $result = $apiInstance->contactUpdate($id, $contact_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact id | |
| **contact_update_request** | [**\BSG\Api\V2\Model\ContactUpdateRequest**](../Model/ContactUpdateRequest.md)|  | |

### Return type

[**\BSG\Api\V2\Model\ContactUpdate200Response**](../Model/ContactUpdate200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contacts()`

```php
contacts($page_offset, $page_limit, $groups): \BSG\Api\V2\Model\Contacts200Response
```

List of contacts

Get a list of existing contacts in the Contact Book of your account with detailed information on each of them. The method also allows you to get contacts from the certain lists that you specified in the query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
| $page_limit = 50; // int | The number of items in the response |
| $groups = [1864618]; // int[] | Index of IDs of the lists for which you want to display contacts |

try {
    $result = $apiInstance->contacts($page_offset, $page_limit, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 20] |
| **groups** | [**int[]**](../Model/int.md)| Index of IDs of the lists for which you want to display contacts | [optional] |

### Return type

[**\BSG\Api\V2\Model\Contacts200Response**](../Model/Contacts200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsDelete()`

```php
contactsDelete($contact_ids, $group_ids): object
```

Delete multiple contacts

Method allow to delete multiple contacts (up to 5000) for a single request  It may be list of contact ids to delete or list of contact lists ids to delete **contacts** included into these lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
| $contact_ids = array(56); // int[] | Contact ids to delete |
| $group_ids = array(56); // int[] | Contact lists ids to delete **contacts** included into these lists |

try {
    $result = $apiInstance->contactsDelete($contact_ids, $group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_ids** | [**int[]**](../Model/int.md)| Contact ids to delete | [optional] |
| **group_ids** | [**int[]**](../Model/int.md)| Contact lists ids to delete **contacts** included into these lists | [optional] |

### Return type

**object**

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsSearch()`

```php
contactsSearch($page_offset, $page_limit, $sort, $way, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value): \BSG\Api\V2\Model\ContactsSearch200Response
```

Search contacts

Method for searching contacts in the Contact Book. In the search, it is possible to use operations: like, =, >, >=, <, <=.  Search is possible by the following fields:   - id:  =, >, >=, <, <= - phone: like, = - {field_id}:   - for field with \"Text\" type: like, =   - for field with \"Number\" type:  =, >, >=, <, <=   - for field with \"Date\" type: =, >, >=, <, <=  It’s possible to pass multiple criteria by pass `search_fields` array instead of `search`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\Api\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\Api\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_offset = 0; // int
| $page_limit = 50; // int | The number of items in the response |
| $sort = 'id'; // string | Sort by conditions: id, phone |
$way = new \BSG\Api\V2\Model\\BSG\Api\V2\Model\SortWay(); // \BSG\Api\V2\Model\SortWay
$search_field = 'search_field_example'; // string
$search_operator = new \BSG\Api\V2\Model\\BSG\Api\V2\Model\SearchOperator(); // \BSG\Api\V2\Model\SearchOperator
$search_value = 'search_value_example'; // string
$search_fields_0_field = 'search_fields_0_field_example'; // string
$search_fields_0_operator = new \BSG\Api\V2\Model\\BSG\Api\V2\Model\SearchOperator(); // \BSG\Api\V2\Model\SearchOperator
$search_fields_0_value = 'search_fields_0_value_example'; // string

try {
    $result = $apiInstance->contactsSearch($page_offset, $page_limit, $sort, $way, $search_field, $search_operator, $search_value, $search_fields_0_field, $search_fields_0_operator, $search_fields_0_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**| The number of items in the response | [optional] [default to 50] |
| **sort** | **string**| Sort by conditions: id, phone | [optional] [default to &#39;id&#39;] |
| **way** | [**\BSG\Api\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **search_field** | **string**|  | [optional] |
| **search_operator** | [**\BSG\Api\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_value** | **string**|  | [optional] |
| **search_fields_0_field** | **string**|  | [optional] |
| **search_fields_0_operator** | [**\BSG\Api\V2\Model\SearchOperator**](../Model/.md)|  | [optional] |
| **search_fields_0_value** | **string**|  | [optional] |

### Return type

[**\BSG\Api\V2\Model\ContactsSearch200Response**](../Model/ContactsSearch200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
