# Ekstralys\VismaNetApi\StocktakeApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stocktakeGetAllStocktakes**](StocktakeApi.md#stocktakeGetAllStocktakes) | **GET** /controller/api/v1/stocktake | Get a range of stocktakes - ScreenId&#x3D;IN305000  - Method is deprecated and will be removed from 1&#39;st of December 2021. Start using V2 for this method.
[**stocktakeGetByreferenceNumber**](StocktakeApi.md#stocktakeGetByreferenceNumber) | **GET** /controller/api/v1/stocktake/{referenceNumber} | Get a specific   - Method is deprecated and will be removed from 1&#39;st of December 2021. Start using V2 for this method.
[**stocktakePutByreferenceNumber**](StocktakeApi.md#stocktakePutByreferenceNumber) | **PUT** /controller/api/v1/stocktake/{referenceNumber} | Update a specific stocktake  - Method is deprecated and will be removed from 1&#39;st of December 2021. Start using V2 for this method.


# **stocktakeGetAllStocktakes**
> \Ekstralys\VismaNetApi\Model\StocktakeDto[] stocktakeGetAllStocktakes($warehouse, $location, $inventory, $lot_serial_number, $summary_status, $number_to_read, $start_with_line, $end_with_line, $freeze_date_time, $freeze_date_time_condition, $last_modified_date_time, $last_modified_date_time_condition, $expiration_date_time, $expiration_date_time_condition, $status, $skip_records)

Get a range of stocktakes - ScreenId=IN305000  - Method is deprecated and will be removed from 1'st of December 2021. Start using V2 for this method.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeApi(
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
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords
$start_with_line = 56; // int | Filter by LineNumber GreaterEqual StartWithLine.
$end_with_line = 56; // int | Filter by by LineNumber LessEqual EndWithLine.
$freeze_date_time = "freeze_date_time_example"; // string | Filter by FreezeDateTime.
$freeze_date_time_condition = "freeze_date_time_condition_example"; // string | Filter by FreezeDateTimeCondition.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present..
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$expiration_date_time = "expiration_date_time_example"; // string | Filter by ExpirationDateTime.
$expiration_date_time_condition = "expiration_date_time_condition_example"; // string | Filter by ExpirationDateTimeCondition.
$status = "status_example"; // string | Filter by StocktakeLineStatus.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.

try {
    $result = $apiInstance->stocktakeGetAllStocktakes($warehouse, $location, $inventory, $lot_serial_number, $summary_status, $number_to_read, $start_with_line, $end_with_line, $freeze_date_time, $freeze_date_time_condition, $last_modified_date_time, $last_modified_date_time_condition, $expiration_date_time, $expiration_date_time_condition, $status, $skip_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeApi->stocktakeGetAllStocktakes: ', $e->getMessage(), PHP_EOL;
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
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords | [optional]
 **start_with_line** | **int**| Filter by LineNumber GreaterEqual StartWithLine. | [optional]
 **end_with_line** | **int**| Filter by by LineNumber LessEqual EndWithLine. | [optional]
 **freeze_date_time** | **string**| Filter by FreezeDateTime. | [optional]
 **freeze_date_time_condition** | **string**| Filter by FreezeDateTimeCondition. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **expiration_date_time** | **string**| Filter by ExpirationDateTime. | [optional]
 **expiration_date_time_condition** | **string**| Filter by ExpirationDateTimeCondition. | [optional]
 **status** | **string**| Filter by StocktakeLineStatus. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\StocktakeDto[]**](../Model/StocktakeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocktakeGetByreferenceNumber**
> \Ekstralys\VismaNetApi\Model\StocktakeDto stocktakeGetByreferenceNumber($reference_number)

Get a specific   - Method is deprecated and will be removed from 1'st of December 2021. Start using V2 for this method.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | Identifies the Stocktake

try {
    $result = $apiInstance->stocktakeGetByreferenceNumber($reference_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeApi->stocktakeGetByreferenceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_number** | **string**| Identifies the Stocktake |

### Return type

[**\Ekstralys\VismaNetApi\Model\StocktakeDto**](../Model/StocktakeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocktakePutByreferenceNumber**
> object stocktakePutByreferenceNumber($reference_number, $stocktake)

Update a specific stocktake  - Method is deprecated and will be removed from 1'st of December 2021. Start using V2 for this method.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\StocktakeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | Identifies the stocktake to update
$stocktake = new \Ekstralys\VismaNetApi\Model\StocktakeUpdateDto(); // \Ekstralys\VismaNetApi\Model\StocktakeUpdateDto | The data to update for stocktake

try {
    $result = $apiInstance->stocktakePutByreferenceNumber($reference_number, $stocktake);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocktakeApi->stocktakePutByreferenceNumber: ', $e->getMessage(), PHP_EOL;
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

