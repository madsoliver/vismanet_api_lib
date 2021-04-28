# Ekstralys\VismaNetApi\InventoryAdjustmentApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryAdjustmentGetAll**](InventoryAdjustmentApi.md#inventoryAdjustmentGetAll) | **GET** /controller/api/v1/inventoryadjustment | Get a range of Inventory Adjustment Dto - ScreenId&#x3D;IN303000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
[**inventoryAdjustmentGetByinventoryAdjustmentNumber**](InventoryAdjustmentApi.md#inventoryAdjustmentGetByinventoryAdjustmentNumber) | **GET** /controller/api/v1/inventoryadjustment/{inventoryAdjustmentNumber} | Get a specific Inventory Adjustment document
[**inventoryAdjustmentPost**](InventoryAdjustmentApi.md#inventoryAdjustmentPost) | **POST** /controller/api/v1/inventoryadjustment | Create an inventory item
[**inventoryAdjustmentPutByinventoryAdjustmentNumber**](InventoryAdjustmentApi.md#inventoryAdjustmentPutByinventoryAdjustmentNumber) | **PUT** /controller/api/v1/inventoryadjustment/{inventoryAdjustmentNumber} | Update a specific inventory item
[**inventoryAdjustmentReleaseDocumentByadjRefNumber**](InventoryAdjustmentApi.md#inventoryAdjustmentReleaseDocumentByadjRefNumber) | **POST** /controller/api/v1/inventoryadjustment/{adjRefNumber}/action/release | Release inventory document action


# **inventoryAdjustmentGetAll**
> \Ekstralys\VismaNetApi\Model\InventoryAdjustmentDto[] inventoryAdjustmentGetAll($status, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of Inventory Adjustment Dto - ScreenId=IN303000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | 
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->inventoryAdjustmentGetAll($status, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->inventoryAdjustmentGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional]
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentDto[]**](../Model/InventoryAdjustmentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAdjustmentGetByinventoryAdjustmentNumber**
> \Ekstralys\VismaNetApi\Model\InventoryAdjustmentDto inventoryAdjustmentGetByinventoryAdjustmentNumber($inventory_adjustment_number)

Get a specific Inventory Adjustment document

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_adjustment_number = "inventory_adjustment_number_example"; // string | Identifies the Inventory Adjustment document

try {
    $result = $apiInstance->inventoryAdjustmentGetByinventoryAdjustmentNumber($inventory_adjustment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->inventoryAdjustmentGetByinventoryAdjustmentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_number** | **string**| Identifies the Inventory Adjustment document |

### Return type

[**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentDto**](../Model/InventoryAdjustmentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAdjustmentPost**
> object inventoryAdjustmentPost($inventory_adjustment)

Create an inventory item

Response Message has StatusCode Created if POST operation succed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_adjustment = new \Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto | Define the data for the inventory adjustment to create

try {
    $result = $apiInstance->inventoryAdjustmentPost($inventory_adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->inventoryAdjustmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment** | [**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto**](../Model/InventoryAdjustmentUpdateDto.md)| Define the data for the inventory adjustment to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAdjustmentPutByinventoryAdjustmentNumber**
> object inventoryAdjustmentPutByinventoryAdjustmentNumber($inventory_adjustment_number, $adjustment)

Update a specific inventory item

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_adjustment_number = "inventory_adjustment_number_example"; // string | Identifies the inventory item to update
$adjustment = new \Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto | The data to update for inventory item

try {
    $result = $apiInstance->inventoryAdjustmentPutByinventoryAdjustmentNumber($inventory_adjustment_number, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->inventoryAdjustmentPutByinventoryAdjustmentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_number** | **string**| Identifies the inventory item to update |
 **adjustment** | [**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentUpdateDto**](../Model/InventoryAdjustmentUpdateDto.md)| The data to update for inventory item |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAdjustmentReleaseDocumentByadjRefNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseInventoryDocumentActionResultDto inventoryAdjustmentReleaseDocumentByadjRefNumber($adj_ref_number)

Release inventory document action

The action result dto contains information about the result of running the action

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adj_ref_number = "adj_ref_number_example"; // string | Reference number of the released adjustment to be released

try {
    $result = $apiInstance->inventoryAdjustmentReleaseDocumentByadjRefNumber($adj_ref_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->inventoryAdjustmentReleaseDocumentByadjRefNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adj_ref_number** | **string**| Reference number of the released adjustment to be released |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseInventoryDocumentActionResultDto**](../Model/ReleaseInventoryDocumentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

