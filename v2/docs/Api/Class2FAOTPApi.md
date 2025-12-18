# BSG\\Api\\V2\Class2FAOTPApi

All URIs are relative to https://one-api.bsg.world, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOtp()**](Class2FAOTPApi.md#cancelOtp) | **POST** /api/2fa/authentications/{id}/cancel | Cancel the authentication session |
| [**otpList()**](Class2FAOTPApi.md#otpList) | **GET** /api/2fa/authentications | List of authentication sessions |
| [**resendOtp()**](Class2FAOTPApi.md#resendOtp) | **POST** /api/2fa/authentications/otp/{id}/resend | Resend the one-time code |
| [**sendOtp()**](Class2FAOTPApi.md#sendOtp) | **POST** /api/2fa/authentications/otp | Send One-time password |
| [**statusOtp()**](Class2FAOTPApi.md#statusOtp) | **GET** /api/2fa/authentications/{id} | Check authentication status |
| [**verifyOtp()**](Class2FAOTPApi.md#verifyOtp) | **POST** /api/2fa/authentications/otp/{id}/verify | Check one-time Code |


## `cancelOtp()`

```php
cancelOtp($id): \BSG\\Api\\V2\Model\CancelOtp200Response
```

Cancel the authentication session

Used to cancel the authentication process. In this case, authentication must be in the Pending status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea5db413-e368-4952-b745-cc2030210c49; // string | Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters.

try {
    $result = $apiInstance->cancelOtp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->cancelOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters. | |

### Return type

[**\BSG\\Api\\V2\Model\CancelOtp200Response**](../Model/CancelOtp200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otpList()`

```php
otpList($filter_from, $filter_to, $page_offset, $page_limit, $filter_ids, $filter_status, $filter_channel, $filter_recipient, $filter_country_code, $way, $sort): \BSG\\Api\\V2\Model\OtpList200Response
```

List of authentication sessions

Use to get a list of authentications for a period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_from = Thu Dec 01 00:00:00 UTC 2022; // \DateTime | Period start date (date and time when the authentication session was created) in ISO 8601 format.
$filter_to = Sat Dec 31 00:00:00 UTC 2022; // \DateTime | End date of the period (date and time when the authentication was created) in ISO 8601 format.
$page_offset = 0; // int
$page_limit = 10; // int
$filter_ids = array('filter_ids_example'); // string[] | Authentication ID. The maximum number is 3.
$filter_status = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\OtpStatus(); // \BSG\\Api\\V2\Model\OtpStatus
$filter_channel = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\OtpChannel(); // \BSG\\Api\\V2\Model\OtpChannel
$filter_recipient = 'filter_recipient_example'; // string
$filter_country_code = 'filter_country_code_example'; // string
$way = new \BSG\\Api\\V2\Model\\BSG\\Api\\V2\Model\SortWay(); // \BSG\\Api\\V2\Model\SortWay
$sort = 'id'; // string | Sort by

try {
    $result = $apiInstance->otpList($filter_from, $filter_to, $page_offset, $page_limit, $filter_ids, $filter_status, $filter_channel, $filter_recipient, $filter_country_code, $way, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->otpList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_from** | **\DateTime**| Period start date (date and time when the authentication session was created) in ISO 8601 format. | |
| **filter_to** | **\DateTime**| End date of the period (date and time when the authentication was created) in ISO 8601 format. | |
| **page_offset** | **int**|  | [optional] [default to 0] |
| **page_limit** | **int**|  | [optional] [default to 10] |
| **filter_ids** | [**string[]**](../Model/string.md)| Authentication ID. The maximum number is 3. | [optional] |
| **filter_status** | [**\BSG\\Api\\V2\Model\OtpStatus**](../Model/.md)|  | [optional] |
| **filter_channel** | [**\BSG\\Api\\V2\Model\OtpChannel**](../Model/.md)|  | [optional] |
| **filter_recipient** | **string**|  | [optional] |
| **filter_country_code** | **string**|  | [optional] |
| **way** | [**\BSG\\Api\\V2\Model\SortWay**](../Model/.md)|  | [optional] |
| **sort** | **string**| Sort by | [optional] [default to &#39;id&#39;] |

### Return type

[**\BSG\\Api\\V2\Model\OtpList200Response**](../Model/OtpList200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendOtp()`

```php
resendOtp($id): \BSG\\Api\\V2\Model\CancelOtp200Response
```

Resend the one-time code

sed to resend the one-time password to the recipient: a new one-time password is generated and sent in the message, and the previous one becomes invalid. When resending, already saved data is used to generate the OTP from the request [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp).  *This API call is available only if the current authentication is not completed before its expiration date (the authentication validity period is specified in each 2FA API response).*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea5db413-e368-4952-b745-cc2030210c49; // string | Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters.

try {
    $result = $apiInstance->resendOtp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->resendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters. | |

### Return type

[**\BSG\\Api\\V2\Model\CancelOtp200Response**](../Model/CancelOtp200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOtp()`

```php
sendOtp($send_otp_request): \BSG\\Api\\V2\Model\CancelOtp200Response
```

Send One-time password

This API call is used to generate and send a one-time password to a user in an SMS or Viber message. **Please note:** authentication of recipients who are in the SMS or Viber stop list in your contact book is not possible using the corresponding method. (That is, if the recipient is in the SMS stop list, then when requesting authentication using the SMS method, the one-time password will not be sent, and you will receive an error in response).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_otp_request = {"recipient":"61401629754","channel":"sms","sender":"SENDER","template_id":"12","code_lifetime":300,"code_max_tries":3,"code_digits":5}; // \BSG\\Api\\V2\Model\SendOtpRequest

try {
    $result = $apiInstance->sendOtp($send_otp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->sendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_otp_request** | [**\BSG\\Api\\V2\Model\SendOtpRequest**](../Model/SendOtpRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\CancelOtp200Response**](../Model/CancelOtp200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusOtp()`

```php
statusOtp($id): \BSG\\Api\\V2\Model\StatusOtp200Response
```

Check authentication status

Use to get information about the current authentication status by specifying its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea5db413-e368-4952-b745-cc2030210c49; // string | Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters.

try {
    $result = $apiInstance->statusOtp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->statusOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters. | |

### Return type

[**\BSG\\Api\\V2\Model\StatusOtp200Response**](../Model/StatusOtp200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyOtp()`

```php
verifyOtp($id, $verify_otp_request): \BSG\\Api\\V2\Model\CancelOtp200Response
```

Check one-time Code

The API call is used to verify that the one-time password you received from the user matches the one sent by BSG

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ExternalAuth
$config = BSG\\Api\\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BSG\\Api\\V2\Api\Class2FAOTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea5db413-e368-4952-b745-cc2030210c49; // string | Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters.
$verify_otp_request = new \BSG\\Api\\V2\Model\VerifyOtpRequest(); // \BSG\\Api\\V2\Model\VerifyOtpRequest

try {
    $result = $apiInstance->verifyOtp($id, $verify_otp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2FAOTPApi->verifyOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Authentication ID received in response to [POST /api/2fa/authentications/otp](#tag/2FA/operation/send_otp) The maximum length is 36 characters. | |
| **verify_otp_request** | [**\BSG\\Api\\V2\Model\VerifyOtpRequest**](../Model/VerifyOtpRequest.md)|  | |

### Return type

[**\BSG\\Api\\V2\Model\CancelOtp200Response**](../Model/CancelOtp200Response.md)

### Authorization

[ExternalAuth](../../README.md#ExternalAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
