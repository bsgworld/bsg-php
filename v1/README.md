# BSG API PHP Client

Comprehensive API for sending SMS, Viber messages, HLR/MNP requests and service management

For more information, please visit [https://bsg.world](https://bsg.world).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bsgworld/php-api-sdk-v1.git"
    }
  ],
  "require": {
    "bsgworld/php-api-sdk-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/BSG API PHP Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BSG\Api\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BSG\Api\V1\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->commonGetBalanceBase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->commonGetBalanceBase: ', $e->getMessage(), PHP_EOL;
}

```

## Endpoints

All URIs are relative to *https://api.sms-service.local*

| Class | Method | HTTP request | Description |
| ------------ | ------------- | ------------- | ------------- |
| *CommonApi* | [**commonGetBalanceBase**](docs/Api/CommonApi.md#commongetbalancebase) | **GET** /rest/common/balance | Get account balance (basic) |
| *CommonApi* | [**commonGetBalanceBasePost**](docs/Api/CommonApi.md#commongetbalancebasepost) | **POST** /rest/common/balance | Get account balance (basic) (POST) |
| *CommonApi* | [**commonGetBalanceV2**](docs/Api/CommonApi.md#commongetbalancev2) | **GET** /rest/common/getbalance | Get account balance (extended) |
| *CommonApi* | [**commonGetBalanceV2Post**](docs/Api/CommonApi.md#commongetbalancev2post) | **POST** /rest/common/getbalance | Get account balance (extended) (POST) |
| *CommonApi* | [**commonGetPrice**](docs/Api/CommonApi.md#commongetprice) | **GET** /rest/common/price | Get SMS price |
| *CommonApi* | [**commonGetPricePost**](docs/Api/CommonApi.md#commongetpricepost) | **POST** /rest/common/price | Get SMS price (POST) |
| *CommonApi* | [**commonGetTariff**](docs/Api/CommonApi.md#commongettariff) | **GET** /rest/common/tariff | Get tariff information |
| *CommonApi* | [**commonGetTariffPost**](docs/Api/CommonApi.md#commongettariffpost) | **POST** /rest/common/tariff | Get tariff information (POST) |
| *ExportsApi* | [**exportsDeleteFile**](docs/Api/ExportsApi.md#exportsdeletefile) | **DELETE** /rest/exports/file | Delete export file |
| *ExportsApi* | [**exportsGetFile**](docs/Api/ExportsApi.md#exportsgetfile) | **GET** /rest/exports/file | Download export file |
| *ExportsApi* | [**exportsGetList**](docs/Api/ExportsApi.md#exportsgetlist) | **GET** /rest/exports/list | List export jobs |
| *ExportsApi* | [**exportsRequestExport**](docs/Api/ExportsApi.md#exportsrequestexport) | **POST** /rest/exports/create | Request data export |
| *ExportsApi* | [**exportsRequestExportPut**](docs/Api/ExportsApi.md#exportsrequestexportput) | **PUT** /rest/exports/create | Request data export (PUT) |
| *HLRApi* | [**hlrCreateObjects**](docs/Api/HLRApi.md#hlrcreateobjects) | **POST** /rest/hlr/create | Perform HLR lookup |
| *HLRApi* | [**hlrCreateObjectsPut**](docs/Api/HLRApi.md#hlrcreateobjectsput) | **PUT** /rest/hlr/create | Perform HLR lookup (PUT) |
| *HLRApi* | [**hlrCreateObjectsSync**](docs/Api/HLRApi.md#hlrcreateobjectssync) | **POST** /rest/hlr/check | Perform synchronous HLR lookup |
| *HLRApi* | [**hlrCreateObjectsSyncPut**](docs/Api/HLRApi.md#hlrcreateobjectssyncput) | **PUT** /rest/hlr/check | Perform synchronous HLR lookup (PUT) |
| *HLRApi* | [**hlrGetBalance**](docs/Api/HLRApi.md#hlrgetbalance) | **GET** /rest/hlr/balance | Get account balance |
| *HLRApi* | [**hlrGetBalancePost**](docs/Api/HLRApi.md#hlrgetbalancepost) | **POST** /rest/hlr/balance | Get account balance |
| *HLRApi* | [**hlrGetPrices**](docs/Api/HLRApi.md#hlrgetprices) | **GET** /rest/hlr/prices | Get HLR pricing |
| *HLRApi* | [**hlrGetStatusByExtId**](docs/Api/HLRApi.md#hlrgetstatusbyextid) | **GET** /rest/hlr/reference/{reference} | Get HLR result by reference |
| *MNPApi* | [**mnpCreateBatchMnp**](docs/Api/MNPApi.md#mnpcreatebatchmnp) | **POST** /rest/mnp/create | MNP lookup for multiple numbers (JSON body) |
| *MNPApi* | [**mnpCreateObjectsPut**](docs/Api/MNPApi.md#mnpcreateobjectsput) | **PUT** /rest/mnp/create | Perform MNP lookup (PUT) |
| *MNPApi* | [**mnpGetPrices**](docs/Api/MNPApi.md#mnpgetprices) | **GET** /rest/mnp/prices | Get MNP pricing |
| *MNPApi* | [**mnpGetStatusByExtId**](docs/Api/MNPApi.md#mnpgetstatusbyextid) | **GET** /rest/mnp/reference/{reference} | Get MNP result by reference |
| *MNPApi* | [**mnpGetStatusById**](docs/Api/MNPApi.md#mnpgetstatusbyid) | **GET** /rest/mnp/{id} | Get MNP result by ID |
| *MNPSyncApi* | [**mnpSyncCreateObjects**](docs/Api/MNPSyncApi.md#mnpsynccreateobjects) | **POST** /rest/mnp-sync/create | Perform synchronous MNP lookup |
| *MNPSyncApi* | [**mnpSyncCreateObjectsPut**](docs/Api/MNPSyncApi.md#mnpsynccreateobjectsput) | **PUT** /rest/mnp-sync/create | Perform synchronous MNP lookup (PUT) |
| *MNPSyncApi* | [**mnpSyncGetPrices**](docs/Api/MNPSyncApi.md#mnpsyncgetprices) | **GET** /rest/mnp-sync/prices | Get MNP pricing |
| *SMSApi* | [**smsCheckPrice**](docs/Api/SMSApi.md#smscheckprice) | **POST** /rest/sms/price | Check SMS price |
| *SMSApi* | [**smsCheckPricePut**](docs/Api/SMSApi.md#smscheckpriceput) | **PUT** /rest/sms/price | Check SMS price (PUT) |
| *SMSApi* | [**smsCreateObjects**](docs/Api/SMSApi.md#smscreateobjects) | **POST** /rest/sms/create | Send SMS message |
| *SMSApi* | [**smsCreateObjectsPut**](docs/Api/SMSApi.md#smscreateobjectsput) | **PUT** /rest/sms/create | Send SMS message (PUT) |
| *SMSApi* | [**smsGet2WayIncoming**](docs/Api/SMSApi.md#smsget2wayincoming) | **GET** /rest/sms/2wayIncoming | Get 2-way incoming messages |
| *SMSApi* | [**smsGet2WaySenders**](docs/Api/SMSApi.md#smsget2waysenders) | **GET** /rest/sms/2waySenders | Get 2-way senders |
| *SMSApi* | [**smsGetBalance**](docs/Api/SMSApi.md#smsgetbalance) | **GET** /rest/sms/balance | Get account balance |
| *SMSApi* | [**smsGetBalancePost**](docs/Api/SMSApi.md#smsgetbalancepost) | **POST** /rest/sms/balance | Get account balance |
| *SMSApi* | [**smsGetMassStatus**](docs/Api/SMSApi.md#smsgetmassstatus) | **POST** /rest/sms/getStatus | Get status for multiple SMS messages |
| *SMSApi* | [**smsGetPrices**](docs/Api/SMSApi.md#smsgetprices) | **GET** /rest/sms/prices | Get SMS pricing |
| *SMSApi* | [**smsGetStatusByExtId**](docs/Api/SMSApi.md#smsgetstatusbyextid) | **GET** /rest/sms/reference/{reference} | Get SMS status by reference |
| *SMSApi* | [**smsGetStatusById**](docs/Api/SMSApi.md#smsgetstatusbyid) | **GET** /rest/sms/{id} | Get SMS status by ID |
| *SMSApi* | [**smsGetTaskStatus**](docs/Api/SMSApi.md#smsgettaskstatus) | **GET** /rest/sms/task/{taskId} | Get task status |
| *ViberApi* | [**viberCheckPrice**](docs/Api/ViberApi.md#vibercheckprice) | **POST** /rest/viber/price | Check Viber message price |
| *ViberApi* | [**viberCheckPricePut**](docs/Api/ViberApi.md#vibercheckpriceput) | **PUT** /rest/viber/price | Check Viber message price (PUT) |
| *ViberApi* | [**viberCreateObjects**](docs/Api/ViberApi.md#vibercreateobjects) | **POST** /rest/viber/create | Send Viber message |
| *ViberApi* | [**viberCreateObjectsPut**](docs/Api/ViberApi.md#vibercreateobjectsput) | **PUT** /rest/viber/create | Send Viber message (PUT) |
| *ViberApi* | [**viberGetBalance**](docs/Api/ViberApi.md#vibergetbalance) | **GET** /rest/viber/balance | Get account balance |
| *ViberApi* | [**viberGetBalancePost**](docs/Api/ViberApi.md#vibergetbalancepost) | **POST** /rest/viber/balance | Get account balance |
| *ViberApi* | [**viberGetPrices**](docs/Api/ViberApi.md#vibergetprices) | **GET** /rest/viber/prices | Get Viber pricing |
| *ViberApi* | [**viberGetStatusByExtId**](docs/Api/ViberApi.md#vibergetstatusbyextid) | **GET** /rest/viber/reference/{reference} | Get Viber status by reference |

## Models

- [AltRouteMessagesschemaAltRouteMessagesItem](docs/Model/AltRouteMessagesschemaAltRouteMessagesItem.md)
- [AltRouteSchema](docs/Model/AltRouteSchema.md)
- [AltRouteschemaAltRouteItem](docs/Model/AltRouteschemaAltRouteItem.md)
- [BalanceResponse](docs/Model/BalanceResponse.md)
- [CallbackCreateRequest](docs/Model/CallbackCreateRequest.md)
- [CallbackCreateResponse](docs/Model/CallbackCreateResponse.md)
- [CallbackStatusResponse](docs/Model/CallbackStatusResponse.md)
- [CommonPriceRequest](docs/Model/CommonPriceRequest.md)
- [CommonPriceResponse](docs/Model/CommonPriceResponse.md)
- [CommonTariffResponse](docs/Model/CommonTariffResponse.md)
- [DataSchema](docs/Model/DataSchema.md)
- [DetailsSchema](docs/Model/DetailsSchema.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ExportCreateRequest](docs/Model/ExportCreateRequest.md)
- [ExportCreateResponse](docs/Model/ExportCreateResponse.md)
- [ExportsStatusResponse](docs/Model/ExportsStatusResponse.md)
- [FiltersSchema](docs/Model/FiltersSchema.md)
- [HlrBulkRequest](docs/Model/HlrBulkRequest.md)
- [HlrCreateRequest](docs/Model/HlrCreateRequest.md)
- [HlrCreateResponse](docs/Model/HlrCreateResponse.md)
- [HlrPricesResponse](docs/Model/HlrPricesResponse.md)
- [HlrSingleRequest](docs/Model/HlrSingleRequest.md)
- [HlrStatusResponse](docs/Model/HlrStatusResponse.md)
- [HlrSyncRequest](docs/Model/HlrSyncRequest.md)
- [HlrSyncResponse](docs/Model/HlrSyncResponse.md)
- [HlrbulkrequestHlrbulkrequestItem](docs/Model/HlrbulkrequestHlrbulkrequestItem.md)
- [HttpError400Response](docs/Model/HttpError400Response.md)
- [HttpError401Response](docs/Model/HttpError401Response.md)
- [HttpError403Response](docs/Model/HttpError403Response.md)
- [HttpError404Response](docs/Model/HttpError404Response.md)
- [HttpError422Response](docs/Model/HttpError422Response.md)
- [HttpError429Response](docs/Model/HttpError429Response.md)
- [HttpError500Response](docs/Model/HttpError500Response.md)
- [InfoSchema](docs/Model/InfoSchema.md)
- [MessagesschemaMessagesItem](docs/Model/MessagesschemaMessagesItem.md)
- [MessagesschemaMessagesItem1](docs/Model/MessagesschemaMessagesItem1.md)
- [MessagesschemaMessagesItem2](docs/Model/MessagesschemaMessagesItem2.md)
- [MnpBatchCreateRequest](docs/Model/MnpBatchCreateRequest.md)
- [MnpBulkRequest](docs/Model/MnpBulkRequest.md)
- [MnpCreateRequest](docs/Model/MnpCreateRequest.md)
- [MnpCreateResponse](docs/Model/MnpCreateResponse.md)
- [MnpPricesResponse](docs/Model/MnpPricesResponse.md)
- [MnpServiceStatusResponse](docs/Model/MnpServiceStatusResponse.md)
- [MnpSingleRequest](docs/Model/MnpSingleRequest.md)
- [MnpStatusResponse](docs/Model/MnpStatusResponse.md)
- [MnpbulkrequestmsisdnsMsisdnsItem](docs/Model/MnpbulkrequestmsisdnsMsisdnsItem.md)
- [MsisdnsschemaMsisdnsItem](docs/Model/MsisdnsschemaMsisdnsItem.md)
- [OptionsSchema](docs/Model/OptionsSchema.md)
- [PhonenumbersPhonesItem](docs/Model/PhonenumbersPhonesItem.md)
- [PhonenumbersPhonesItem1](docs/Model/PhonenumbersPhonesItem1.md)
- [PhonenumbersPhonesItem2](docs/Model/PhonenumbersPhonesItem2.md)
- [PricesschemaPricesItem](docs/Model/PricesschemaPricesItem.md)
- [PricesschemaPricesItem1](docs/Model/PricesschemaPricesItem1.md)
- [PricesschemaPricesItem2](docs/Model/PricesschemaPricesItem2.md)
- [ResultSchema](docs/Model/ResultSchema.md)
- [ResultschemaResultItem](docs/Model/ResultschemaResultItem.md)
- [ResultschemaResultItem1](docs/Model/ResultschemaResultItem1.md)
- [ResultschemaResultItem2](docs/Model/ResultschemaResultItem2.md)
- [ResultschemaResultItem3](docs/Model/ResultschemaResultItem3.md)
- [ResultschemaResultItem4](docs/Model/ResultschemaResultItem4.md)
- [ResultschemaResultItem5](docs/Model/ResultschemaResultItem5.md)
- [ServicesschemaServicesItem](docs/Model/ServicesschemaServicesItem.md)
- [Sms2WayIncomingRequest](docs/Model/Sms2WayIncomingRequest.md)
- [Sms2WayIncomingResponse](docs/Model/Sms2WayIncomingResponse.md)
- [SmsBalanceResponse](docs/Model/SmsBalanceResponse.md)
- [SmsCreateRequest](docs/Model/SmsCreateRequest.md)
- [SmsCreateResponse](docs/Model/SmsCreateResponse.md)
- [SmsIndividualCreateRequest](docs/Model/SmsIndividualCreateRequest.md)
- [SmsMassStatusRequest](docs/Model/SmsMassStatusRequest.md)
- [SmsMassStatusResponse](docs/Model/SmsMassStatusResponse.md)
- [SmsMultipleCreateRequest](docs/Model/SmsMultipleCreateRequest.md)
- [SmsMultipleResponse](docs/Model/SmsMultipleResponse.md)
- [SmsOtpCreateRequest](docs/Model/SmsOtpCreateRequest.md)
- [SmsPriceCheckMultiplePhones](docs/Model/SmsPriceCheckMultiplePhones.md)
- [SmsPriceCheckRequest](docs/Model/SmsPriceCheckRequest.md)
- [SmsPriceCheckResponse](docs/Model/SmsPriceCheckResponse.md)
- [SmsPriceCheckSinglePhone](docs/Model/SmsPriceCheckSinglePhone.md)
- [SmsPricesListResponse](docs/Model/SmsPricesListResponse.md)
- [SmsSingleCreateRequest](docs/Model/SmsSingleCreateRequest.md)
- [SmsSingleResponse](docs/Model/SmsSingleResponse.md)
- [SmsStatusResponse](docs/Model/SmsStatusResponse.md)
- [SmsTaskResponse](docs/Model/SmsTaskResponse.md)
- [SmsTaskStatusResponse](docs/Model/SmsTaskStatusResponse.md)
- [SmspriceslistPricesItem](docs/Model/SmspriceslistPricesItem.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [TaskresultsResultItem](docs/Model/TaskresultsResultItem.md)
- [ToschemaToItem](docs/Model/ToschemaToItem.md)
- [ToschemaToItem1](docs/Model/ToschemaToItem1.md)
- [ToschemaToItem2](docs/Model/ToschemaToItem2.md)
- [ViberCreateRequest](docs/Model/ViberCreateRequest.md)
- [ViberCreateResponse](docs/Model/ViberCreateResponse.md)
- [ViberMessageStatusResponse](docs/Model/ViberMessageStatusResponse.md)
- [ViberPriceCheckRequest](docs/Model/ViberPriceCheckRequest.md)
- [ViberPriceCheckResponse](docs/Model/ViberPriceCheckResponse.md)
- [ViberPricesRequest](docs/Model/ViberPricesRequest.md)
- [ViberPricesResponse](docs/Model/ViberPricesResponse.md)
- [ViberSchema](docs/Model/ViberSchema.md)
- [ViberStatusResponse](docs/Model/ViberStatusResponse.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@bsg.world

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
