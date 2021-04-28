# Ekstralys\VismaNetApi\InventoryApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryChangeInventoryNbrActionByinternalId**](InventoryApi.md#inventoryChangeInventoryNbrActionByinternalId) | **POST** /controller/api/v1/inventory/action/changeInventoryNbr/{internalId} | Updates the InventoryNbr for the specified Inventory
[**inventoryCreateInventoryAttachmentByinventoryNumber**](InventoryApi.md#inventoryCreateInventoryAttachmentByinventoryNumber) | **POST** /controller/api/v1/inventory/{inventoryNumber}/attachment | Creates an attachment and associates it with a Inventory Item. If the file already exists, a new revision is created.
[**inventoryCreateInventoryCrossReferencesByinventoryNumber**](InventoryApi.md#inventoryCreateInventoryCrossReferencesByinventoryNumber) | **POST** /controller/api/v1/inventory/{inventoryNumber}/crossReferences | Creates a cross reference for a specific inventory
[**inventoryGetAll**](InventoryApi.md#inventoryGetAll) | **GET** /controller/api/v1/inventory | Get a range of Inventory items - ScreenId&#x3D;IN202000 and IN202500
[**inventoryGetByinventoryNumber**](InventoryApi.md#inventoryGetByinventoryNumber) | **GET** /controller/api/v1/inventory/{inventoryNumber} | Get a specific Inventory item
[**inventoryGetInventoryCrossReferencesByinventoryNumber**](InventoryApi.md#inventoryGetInventoryCrossReferencesByinventoryNumber) | **GET** /controller/api/v1/inventory/{inventoryNumber}/crossReferences | Get a range of cross-reference for a specific inventory
[**inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr**](InventoryApi.md#inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr) | **GET** /controller/api/v1/inventory/barcode/purchasereceipt/{receiptNbr} | Get a range of barcodes for a specific purchase receipt
[**inventoryGetInventorySalesOrderBarCodesByorderNbr**](InventoryApi.md#inventoryGetInventorySalesOrderBarCodesByorderNbr) | **GET** /controller/api/v1/inventory/barcode/salesorder/{orderNbr} | Get a range of barcodes for a specific sales order
[**inventoryGetInventoryShipmentBarCodesByshipmentNbr**](InventoryApi.md#inventoryGetInventoryShipmentBarCodesByshipmentNbr) | **GET** /controller/api/v1/inventory/barcode/shipment/{shipmentNbr} | Get a range of barcodes for a specific shipment
[**inventoryGetInventoryStockTakeBarCodesByreferenceNumber**](InventoryApi.md#inventoryGetInventoryStockTakeBarCodesByreferenceNumber) | **GET** /controller/api/v1/inventory/barcode/stocktake/{referenceNumber} | Get a range of barcodes for a specific stock count
[**inventoryGetItemClasses**](InventoryApi.md#inventoryGetItemClasses) | **GET** /controller/api/v1/inventory/itemClass | Get Inventory Item Classes
[**inventoryGetItemPostClasses**](InventoryApi.md#inventoryGetItemPostClasses) | **GET** /controller/api/v1/inventory/itemPostClass | Get Inventory Item Post Classes
[**inventoryGetSpecificItemClassByitemClassNumber**](InventoryApi.md#inventoryGetSpecificItemClassByitemClassNumber) | **GET** /controller/api/v1/inventory/itemclass/{itemClassNumber} | Get Specific Inventory Item Class
[**inventoryPost**](InventoryApi.md#inventoryPost) | **POST** /controller/api/v1/inventory | Create an inventory item
[**inventoryPutByinventoryNumber**](InventoryApi.md#inventoryPutByinventoryNumber) | **PUT** /controller/api/v1/inventory/{inventoryNumber} | Update a specific inventory item
[**inventoryUpdateCostNonStockItemByinventoryCd**](InventoryApi.md#inventoryUpdateCostNonStockItemByinventoryCd) | **POST** /controller/api/v1/inventory/{inventoryCd}/action/updateCost | Update Cost action on Non-Stock Item
[**inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId**](InventoryApi.md#inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId) | **PUT** /controller/api/v1/inventory/{inventoryNumber}/crossReferences/{alternateType}/{alternateId} | Updates a specific cross reference for a specific inventory


# **inventoryChangeInventoryNbrActionByinternalId**
> \Ekstralys\VismaNetApi\Model\ChangeInventoryNbrActionResultDto inventoryChangeInventoryNbrActionByinternalId($internal_id, $change_inventory_nbr_action_dto)

Updates the InventoryNbr for the specified Inventory

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Internal identifier of the Inventory for which the Inventory Nbr will be changed
$change_inventory_nbr_action_dto = new \Ekstralys\VismaNetApi\Model\ChangeInventoryNbrActionDto(); // \Ekstralys\VismaNetApi\Model\ChangeInventoryNbrActionDto | Defines the new Inventory number for the Inventory

try {
    $result = $apiInstance->inventoryChangeInventoryNbrActionByinternalId($internal_id, $change_inventory_nbr_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryChangeInventoryNbrActionByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Internal identifier of the Inventory for which the Inventory Nbr will be changed |
 **change_inventory_nbr_action_dto** | [**\Ekstralys\VismaNetApi\Model\ChangeInventoryNbrActionDto**](../Model/ChangeInventoryNbrActionDto.md)| Defines the new Inventory number for the Inventory |

### Return type

[**\Ekstralys\VismaNetApi\Model\ChangeInventoryNbrActionResultDto**](../Model/ChangeInventoryNbrActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCreateInventoryAttachmentByinventoryNumber**
> object inventoryCreateInventoryAttachmentByinventoryNumber($inventory_number)

Creates an attachment and associates it with a Inventory Item. If the file already exists, a new revision is created.

Response Message has StatusCode Created if POST operation succeed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the Inventory Item

try {
    $result = $apiInstance->inventoryCreateInventoryAttachmentByinventoryNumber($inventory_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCreateInventoryAttachmentByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the Inventory Item |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCreateInventoryCrossReferencesByinventoryNumber**
> object inventoryCreateInventoryCrossReferencesByinventoryNumber($inventory_number, $cross_reference_update_dto)

Creates a cross reference for a specific inventory

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 
$cross_reference_update_dto = new \Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto | 

try {
    $result = $apiInstance->inventoryCreateInventoryCrossReferencesByinventoryNumber($inventory_number, $cross_reference_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCreateInventoryCrossReferencesByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |
 **cross_reference_update_dto** | [**\Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto**](../Model/InventoryCrossReferenceUpdateDto.md)|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetAll**
> \Ekstralys\VismaNetApi\Model\InventoryDto[] inventoryGetAll($alternate_id, $inventory_number, $sales_category, $add_cost_price_statistics, $attributes, $description, $availability_last_modified_date_time, $availability_last_modified_date_time_condition, $inventory_types, $expand_cross_reference, $expand_attachment, $expand_attribute, $expand_warehouse_detail, $expand_account_information, $expand_inventory_units, $expand_supplier_details, $expand_sales_categories, $attachment_last_modified_date_time, $attachment_last_modified_date_time_condition, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Inventory items - ScreenId=IN202000 and IN202500

Data for Inventory

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alternate_id = "alternate_id_example"; // string | Applies for both Stock and Non-stock items.  Some fields in this filter applies only for one of these.
$inventory_number = "inventory_number_example"; // string | The Item ID.
$sales_category = 56; // int | The Category ID for the sales category, found on the Attributes tab.
$add_cost_price_statistics = true; // bool | This filter can be used only for stock items, from the Price/cost information tab.
$attributes = "attributes_example"; // string | Attributes (additional information) connected to the item.
$description = "description_example"; // string | A brief description of the stock item from the Top part of the window.
$availability_last_modified_date_time = "availability_last_modified_date_time_example"; // string | System retrieved information.
$availability_last_modified_date_time_condition = "availability_last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$inventory_types = array("inventory_types_example"); // string[] | Filter on one or more inventory types: NonStockItem, LaborItem, ServiceItem, ChargeItem, ExpenseItem, FinishedGoodItem, ComponentPartItem or SubassemblyItem
$expand_cross_reference = true; // bool | These expand fields are by default set to true, but will be changed in the future.   Set to true to retrieve information about the cross-references (item ID and suppliers/customers ID for the item connected to the item.
$expand_attachment = true; // bool | Set to true to retrieve information about the attachments connected to the item.
$expand_attribute = true; // bool | Set to true to retrieve the attribute descriptions used for the item.
$expand_warehouse_detail = true; // bool | Set to true to retrieve information about the warehouse connected to the item.
$expand_account_information = true; // bool | Set to true to retrieve information about the account information connected to the item.
$expand_inventory_units = true; // bool | Set to true to retrieve information about the units of measure connected to the item.
$expand_supplier_details = true; // bool | Set to true to retrieve details about the supplier connected to the item.
$expand_sales_categories = true; // bool | Set to true to retrieve details about the sales categories connected to the item.
$attachment_last_modified_date_time = "attachment_last_modified_date_time_example"; // string | System retrieved information for last modified date and time for attachment.
$attachment_last_modified_date_time_condition = "attachment_last_modified_date_time_condition_example"; // string | System retrieved information for state/condition for attachment.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->inventoryGetAll($alternate_id, $inventory_number, $sales_category, $add_cost_price_statistics, $attributes, $description, $availability_last_modified_date_time, $availability_last_modified_date_time_condition, $inventory_types, $expand_cross_reference, $expand_attachment, $expand_attribute, $expand_warehouse_detail, $expand_account_information, $expand_inventory_units, $expand_supplier_details, $expand_sales_categories, $attachment_last_modified_date_time, $attachment_last_modified_date_time_condition, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alternate_id** | **string**| Applies for both Stock and Non-stock items.  Some fields in this filter applies only for one of these. | [optional]
 **inventory_number** | **string**| The Item ID. | [optional]
 **sales_category** | **int**| The Category ID for the sales category, found on the Attributes tab. | [optional]
 **add_cost_price_statistics** | **bool**| This filter can be used only for stock items, from the Price/cost information tab. | [optional]
 **attributes** | **string**| Attributes (additional information) connected to the item. | [optional]
 **description** | **string**| A brief description of the stock item from the Top part of the window. | [optional]
 **availability_last_modified_date_time** | **string**| System retrieved information. | [optional]
 **availability_last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **inventory_types** | [**string[]**](../Model/string.md)| Filter on one or more inventory types: NonStockItem, LaborItem, ServiceItem, ChargeItem, ExpenseItem, FinishedGoodItem, ComponentPartItem or SubassemblyItem | [optional]
 **expand_cross_reference** | **bool**| These expand fields are by default set to true, but will be changed in the future.   Set to true to retrieve information about the cross-references (item ID and suppliers/customers ID for the item connected to the item. | [optional]
 **expand_attachment** | **bool**| Set to true to retrieve information about the attachments connected to the item. | [optional]
 **expand_attribute** | **bool**| Set to true to retrieve the attribute descriptions used for the item. | [optional]
 **expand_warehouse_detail** | **bool**| Set to true to retrieve information about the warehouse connected to the item. | [optional]
 **expand_account_information** | **bool**| Set to true to retrieve information about the account information connected to the item. | [optional]
 **expand_inventory_units** | **bool**| Set to true to retrieve information about the units of measure connected to the item. | [optional]
 **expand_supplier_details** | **bool**| Set to true to retrieve details about the supplier connected to the item. | [optional]
 **expand_sales_categories** | **bool**| Set to true to retrieve details about the sales categories connected to the item. | [optional]
 **attachment_last_modified_date_time** | **string**| System retrieved information for last modified date and time for attachment. | [optional]
 **attachment_last_modified_date_time_condition** | **string**| System retrieved information for state/condition for attachment. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\InventoryDto[]**](../Model/InventoryDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetByinventoryNumber**
> \Ekstralys\VismaNetApi\Model\InventoryDto inventoryGetByinventoryNumber($inventory_number)

Get a specific Inventory item

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the Inventory item

try {
    $result = $apiInstance->inventoryGetByinventoryNumber($inventory_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the Inventory item |

### Return type

[**\Ekstralys\VismaNetApi\Model\InventoryDto**](../Model/InventoryDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetInventoryCrossReferencesByinventoryNumber**
> \Ekstralys\VismaNetApi\Model\InventoryCrossReferenceDto[] inventoryGetInventoryCrossReferencesByinventoryNumber($inventory_number)

Get a range of cross-reference for a specific inventory

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 

try {
    $result = $apiInstance->inventoryGetInventoryCrossReferencesByinventoryNumber($inventory_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetInventoryCrossReferencesByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\InventoryCrossReferenceDto[]**](../Model/InventoryCrossReferenceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr**
> \Ekstralys\VismaNetApi\Model\BarCodeDto[] inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr($receipt_nbr)

Get a range of barcodes for a specific purchase receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_nbr = "receipt_nbr_example"; // string | 

try {
    $result = $apiInstance->inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr($receipt_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetInventoryPOReceiptTakeBarCodesByreceiptNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_nbr** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\BarCodeDto[]**](../Model/BarCodeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetInventorySalesOrderBarCodesByorderNbr**
> \Ekstralys\VismaNetApi\Model\BarCodeDto[] inventoryGetInventorySalesOrderBarCodesByorderNbr($order_nbr)

Get a range of barcodes for a specific sales order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_nbr = "order_nbr_example"; // string | 

try {
    $result = $apiInstance->inventoryGetInventorySalesOrderBarCodesByorderNbr($order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetInventorySalesOrderBarCodesByorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_nbr** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\BarCodeDto[]**](../Model/BarCodeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetInventoryShipmentBarCodesByshipmentNbr**
> \Ekstralys\VismaNetApi\Model\BarCodeDto[] inventoryGetInventoryShipmentBarCodesByshipmentNbr($shipment_nbr)

Get a range of barcodes for a specific shipment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_nbr = "shipment_nbr_example"; // string | 

try {
    $result = $apiInstance->inventoryGetInventoryShipmentBarCodesByshipmentNbr($shipment_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetInventoryShipmentBarCodesByshipmentNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_nbr** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\BarCodeDto[]**](../Model/BarCodeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetInventoryStockTakeBarCodesByreferenceNumber**
> \Ekstralys\VismaNetApi\Model\BarCodeDto[] inventoryGetInventoryStockTakeBarCodesByreferenceNumber($reference_number)

Get a range of barcodes for a specific stock count

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | 

try {
    $result = $apiInstance->inventoryGetInventoryStockTakeBarCodesByreferenceNumber($reference_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetInventoryStockTakeBarCodesByreferenceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_number** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\BarCodeDto[]**](../Model/BarCodeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetItemClasses**
> \Ekstralys\VismaNetApi\Model\ItemClassDto[] inventoryGetItemClasses()

Get Inventory Item Classes

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inventoryGetItemClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetItemClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\ItemClassDto[]**](../Model/ItemClassDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetItemPostClasses**
> \Ekstralys\VismaNetApi\Model\PostingClassDto[] inventoryGetItemPostClasses()

Get Inventory Item Post Classes

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inventoryGetItemPostClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetItemPostClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\PostingClassDto[]**](../Model/PostingClassDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGetSpecificItemClassByitemClassNumber**
> \Ekstralys\VismaNetApi\Model\ItemClassDto inventoryGetSpecificItemClassByitemClassNumber($item_class_number)

Get Specific Inventory Item Class

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_class_number = "item_class_number_example"; // string | 

try {
    $result = $apiInstance->inventoryGetSpecificItemClassByitemClassNumber($item_class_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGetSpecificItemClassByitemClassNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_class_number** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\ItemClassDto**](../Model/ItemClassDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPost**
> object inventoryPost($inventory)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory = new \Ekstralys\VismaNetApi\Model\InventoryUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryUpdateDto | Define the data for the inventory item to create

try {
    $result = $apiInstance->inventoryPost($inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory** | [**\Ekstralys\VismaNetApi\Model\InventoryUpdateDto**](../Model/InventoryUpdateDto.md)| Define the data for the inventory item to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPutByinventoryNumber**
> object inventoryPutByinventoryNumber($inventory_number, $inventory)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the inventory item to update
$inventory = new \Ekstralys\VismaNetApi\Model\InventoryUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryUpdateDto | The data to update for inventory item

try {
    $result = $apiInstance->inventoryPutByinventoryNumber($inventory_number, $inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPutByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the inventory item to update |
 **inventory** | [**\Ekstralys\VismaNetApi\Model\InventoryUpdateDto**](../Model/InventoryUpdateDto.md)| The data to update for inventory item |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpdateCostNonStockItemByinventoryCd**
> \Ekstralys\VismaNetApi\Model\UpdateCostActionResultDto inventoryUpdateCostNonStockItemByinventoryCd($inventory_cd)

Update Cost action on Non-Stock Item

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_cd = "inventory_cd_example"; // string | Identifies the inventory item to update

try {
    $result = $apiInstance->inventoryUpdateCostNonStockItemByinventoryCd($inventory_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpdateCostNonStockItemByinventoryCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_cd** | **string**| Identifies the inventory item to update |

### Return type

[**\Ekstralys\VismaNetApi\Model\UpdateCostActionResultDto**](../Model/UpdateCostActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId**
> object inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId($inventory_number, $alternate_type, $alternate_id, $cross_reference_update_dto)

Updates a specific cross reference for a specific inventory

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 
$alternate_type = "alternate_type_example"; // string | 
$alternate_id = "alternate_id_example"; // string | 
$cross_reference_update_dto = new \Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto(); // \Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto | 

try {
    $result = $apiInstance->inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId($inventory_number, $alternate_type, $alternate_id, $cross_reference_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |
 **alternate_type** | **string**|  |
 **alternate_id** | **string**|  |
 **cross_reference_update_dto** | [**\Ekstralys\VismaNetApi\Model\InventoryCrossReferenceUpdateDto**](../Model/InventoryCrossReferenceUpdateDto.md)|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

