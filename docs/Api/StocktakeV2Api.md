# Ekstralys\VismaNetApi\StocktakeV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stocktakeV2GetAllStocktakes**](StocktakeV2Api.md#stocktakeV2GetAllStocktakes) | **GET** /controller/api/v2/stocktake | Get a range of stocktakes - ScreenId&#x3D;IN305000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information. If requested page size is greater than allowed max page size, request will be limited to max page size.
[**stocktakeV2GetByreferenceNumber**](StocktakeV2Api.md#stocktakeV2GetByreferenceNumber) | **GET** /controller/api/v2/stocktake/{referenceNumber} | Get a specific
[**stocktakeV2PutByreferenceNumber**](StocktakeV2Api.md#stocktakeV2PutByreferenceNumber) | **PUT** /controller/api/v2/stocktake/{referenceNumber} | Update a specific stocktake


# **stocktakeV2GetAllStocktakes**
> \Ekstralys\VismaNetApi\Model\StocktakeV2Dto[] stocktakeV2GetAllStocktakes($warehouse, $location, $inventory, $lot_serial_number, $summary_status, $start_with_line, $end_with_line, $freeze_date_time, $freeze_date_time_condition, $last_modified_date_time, $last_modified_date_time_condition, $expiration_date_time, $expiration_date_time_condition, $status, $page_number, $page_size)

Get a range of stocktakes - ScreenId=IN305000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information. If requested page size is greater than allowed max page size, request will be limited to max page size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse = "warehouse_example"; // string | Filter by Warehouse.
$location = "location_example"; // string | Filter by Location.
$inventory = "inventory_example"; // string | Filter by Inventory.
$lot_serial_number = "lot_serial_number_example"; // string | Filter by LotSerialNumber.
$summary_status = "summary_status_example"; // string | Filter by SummaryStatus.
$start_with_line = 56; // int | Filter by LineNumber GreaterEqual StartWithLine.
$end_with_line = 56; // int | Filter by by LineNumber LessEqual EndWithLine.
$freeze_date_time = "freeze_date_time_example"; // string | Filter by FreezeDateTime.
$freeze_date_time_condition = "freeze_date_time_condition_example"; // string | Filter by FreezeDateTimeCondition.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present..
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$expiration_date_time = "expiration_date_time_example"; // string | Filter by ExpirationDateTime.
$expiration_date_time_condition = "expiration_date_time_condition_example"; // string | Filter by ExpirationDateTimeCondition.
$status = "status_example"; // string | Filter by StocktakeLineStatus.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->stocktakeV2GetAllStocktakes($warehouse, $location, $inventory, $lot_serial_number, $summary_status, $start_with_line, $end_with_line, $freeze_date_time, $freeze_date_time_condition, $last_modified_date_time, $last_modified_date_time_condition, $expiration_date_time, $expiration_date_time_condition, $status, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeV2Api->stocktakeV2GetAllStocktakes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse** | **string**| Filter by Warehouse. | [optional]
 **location** | **string**| Filter by Location. | [optional]
 **inventory** | **string**| Filter by Inventory. | [optional]
 **lot_serial_number** | **string**| Filter by LotSerialNumber. | [optional]
 **summary_status** | **string**| Filter by SummaryStatus. | [optional]
 **start_with_line** | **int**| Filter by LineNumber GreaterEqual StartWithLine. | [optional]
 **end_with_line** | **int**| Filter by by LineNumber LessEqual EndWithLine. | [optional]
 **freeze_date_time** | **string**| Filter by FreezeDateTime. | [optional]
 **freeze_date_time_condition** | **string**| Filter by FreezeDateTimeCondition. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **expiration_date_time** | **string**| Filter by ExpirationDateTime. | [optional]
 **expiration_date_time_condition** | **string**| Filter by ExpirationDateTimeCondition. | [optional]
 **status** | **string**| Filter by StocktakeLineStatus. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\StocktakeV2Dto[]**](../Model/StocktakeV2Dto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocktakeV2GetByreferenceNumber**
> \Ekstralys\VismaNetApi\Model\StocktakeV2Dto stocktakeV2GetByreferenceNumber($reference_number)

Get a specific

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | Identifies the Stocktake

try {
    $result = $apiInstance->stocktakeV2GetByreferenceNumber($reference_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeV2Api->stocktakeV2GetByreferenceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_number** | **string**| Identifies the Stocktake |

### Return type

[**\Ekstralys\VismaNetApi\Model\StocktakeV2Dto**](../Model/StocktakeV2Dto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocktakeV2PutByreferenceNumber**
> object stocktakeV2PutByreferenceNumber($reference_number, $stocktake)

Update a specific stocktake

Response Message has StatusCode NoContent if PUT operation succeed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | Identifies the stocktake to update
$stocktake = new \Ekstralys\VismaNetApi\Model\StocktakeUpdateDto(); // \Ekstralys\VismaNetApi\Model\StocktakeUpdateDto | The data to update for stocktake

try {
    $result = $apiInstance->stocktakeV2PutByreferenceNumber($reference_number, $stocktake);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeV2Api->stocktakeV2PutByreferenceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_number** | **string**| Identifies the stocktake to update |
 **stocktake** | [**\Ekstralys\VismaNetApi\Model\StocktakeUpdateDto**](../Model/StocktakeUpdateDto.md)| The data to update for stocktake |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

