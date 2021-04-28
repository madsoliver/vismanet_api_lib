# Ekstralys\VismaNetApi\PurchaseReceiptApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseReceiptAddPurchaseOrderLinesByreceiptNumber**](PurchaseReceiptApi.md#purchaseReceiptAddPurchaseOrderLinesByreceiptNumber) | **POST** /controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorderlines | Add purchase order lines to receipt
[**purchaseReceiptAddPurchaseOrdersByreceiptNumber**](PurchaseReceiptApi.md#purchaseReceiptAddPurchaseOrdersByreceiptNumber) | **POST** /controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorder | Add purchase orders to receipt
[**purchaseReceiptGetAllReceiptBasic**](PurchaseReceiptApi.md#purchaseReceiptGetAllReceiptBasic) | **GET** /controller/api/v1/PurchaseReceipt | Get a range of Purchase Receipts - ScreenId&#x3D;PO302000  Please use a page size lower or equal to the allowed max page size which is 500
[**purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr**](PurchaseReceiptApi.md#purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr) | **GET** /controller/api/v1/PurchaseReceipt/{receiptNbr} | Get a specific Purchase Receipt
[**purchaseReceiptPost**](PurchaseReceiptApi.md#purchaseReceiptPost) | **POST** /controller/api/v1/PurchaseReceipt | Create a Purchase Receipt
[**purchaseReceiptPrintPurchaseReceiptByreceiptNbr**](PurchaseReceiptApi.md#purchaseReceiptPrintPurchaseReceiptByreceiptNbr) | **GET** /controller/api/v1/PurchaseReceipt/{receiptNbr}/print | Get the print report of a Purchase Receipt
[**purchaseReceiptPutBypoReceiptNumber**](PurchaseReceiptApi.md#purchaseReceiptPutBypoReceiptNumber) | **PUT** /controller/api/v1/PurchaseReceipt/{poReceiptNumber} | Update a specific Purchase Receipt
[**purchaseReceiptReleaseInvoiceByreceiptNumber**](PurchaseReceiptApi.md#purchaseReceiptReleaseInvoiceByreceiptNumber) | **POST** /controller/api/v1/PurchaseReceipt/{receiptNumber}/action/release | Release purchase receipt operation


# **purchaseReceiptAddPurchaseOrderLinesByreceiptNumber**
> \Ekstralys\VismaNetApi\Model\AddOrderLinesToPurchaseReceiptActionResultDto purchaseReceiptAddPurchaseOrderLinesByreceiptNumber($receipt_number, $purchase_order_lines_list)

Add purchase order lines to receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Reference number of the receipt to which to add the orders
$purchase_order_lines_list = new \Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderLinesListUpdateDto(); // \Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderLinesListUpdateDto | Object containing an array of reference numbers of the orders to be added to the receipt

try {
    $result = $apiInstance->purchaseReceiptAddPurchaseOrderLinesByreceiptNumber($receipt_number, $purchase_order_lines_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptAddPurchaseOrderLinesByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Reference number of the receipt to which to add the orders |
 **purchase_order_lines_list** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderLinesListUpdateDto**](../Model/PurchaseReceiptOrderLinesListUpdateDto.md)| Object containing an array of reference numbers of the orders to be added to the receipt |

### Return type

[**\Ekstralys\VismaNetApi\Model\AddOrderLinesToPurchaseReceiptActionResultDto**](../Model/AddOrderLinesToPurchaseReceiptActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptAddPurchaseOrdersByreceiptNumber**
> \Ekstralys\VismaNetApi\Model\AddOrdersToPurchaseReceiptActionResultDto purchaseReceiptAddPurchaseOrdersByreceiptNumber($receipt_number, $purchase_orders)

Add purchase orders to receipt

The action result DTO contains information about the result of running the action

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Reference number of the receipt to which to add the orders
$purchase_orders = new \Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderListUpdateDto(); // \Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderListUpdateDto | Object containing an array of reference numbers of the orders to be added to the receipt

try {
    $result = $apiInstance->purchaseReceiptAddPurchaseOrdersByreceiptNumber($receipt_number, $purchase_orders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptAddPurchaseOrdersByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Reference number of the receipt to which to add the orders |
 **purchase_orders** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptOrderListUpdateDto**](../Model/PurchaseReceiptOrderListUpdateDto.md)| Object containing an array of reference numbers of the orders to be added to the receipt |

### Return type

[**\Ekstralys\VismaNetApi\Model\AddOrdersToPurchaseReceiptActionResultDto**](../Model/AddOrdersToPurchaseReceiptActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptGetAllReceiptBasic**
> \Ekstralys\VismaNetApi\Model\PurchaseReceiptDto[] purchaseReceiptGetAllReceiptBasic($receipt_type, $status, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $supplier, $po_order_nbr, $page_number, $page_size)

Get a range of Purchase Receipts - ScreenId=PO302000  Please use a page size lower or equal to the allowed max page size which is 500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_type = "receipt_type_example"; // string | 
$status = "status_example"; // string | 
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$supplier = "supplier_example"; // string | 
$po_order_nbr = "po_order_nbr_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->purchaseReceiptGetAllReceiptBasic($receipt_type, $status, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $supplier, $po_order_nbr, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptGetAllReceiptBasic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_type** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **supplier** | **string**|  | [optional]
 **po_order_nbr** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\PurchaseReceiptDto[]**](../Model/PurchaseReceiptDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr**
> \Ekstralys\VismaNetApi\Model\PurchaseReceiptDto purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr($receipt_nbr)

Get a specific Purchase Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_nbr = "receipt_nbr_example"; // string | Identifies the Purchase Receipt

try {
    $result = $apiInstance->purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr($receipt_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptGetPurchaseReceiptBasicByreceiptNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_nbr** | **string**| Identifies the Purchase Receipt |

### Return type

[**\Ekstralys\VismaNetApi\Model\PurchaseReceiptDto**](../Model/PurchaseReceiptDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptPost**
> object purchaseReceiptPost($po_receipt_update_dto)

Create a Purchase Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$po_receipt_update_dto = new \Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto(); // \Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto | Defines the data for the  Purchase Receipt to create

try {
    $result = $apiInstance->purchaseReceiptPost($po_receipt_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **po_receipt_update_dto** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto**](../Model/PurchaseReceiptUpdateDto.md)| Defines the data for the  Purchase Receipt to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptPrintPurchaseReceiptByreceiptNbr**
> object purchaseReceiptPrintPurchaseReceiptByreceiptNbr($receipt_nbr)

Get the print report of a Purchase Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_nbr = "receipt_nbr_example"; // string | Identifies the receipt

try {
    $result = $apiInstance->purchaseReceiptPrintPurchaseReceiptByreceiptNbr($receipt_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptPrintPurchaseReceiptByreceiptNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_nbr** | **string**| Identifies the receipt |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptPutBypoReceiptNumber**
> object purchaseReceiptPutBypoReceiptNumber($po_receipt_number, $po_receipt_update_dto)

Update a specific Purchase Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$po_receipt_number = "po_receipt_number_example"; // string | Identifies the  Purchase Receipt  to update
$po_receipt_update_dto = new \Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto(); // \Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto | Defines the data for the  Purchase Receipt  to update

try {
    $result = $apiInstance->purchaseReceiptPutBypoReceiptNumber($po_receipt_number, $po_receipt_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptPutBypoReceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **po_receipt_number** | **string**| Identifies the  Purchase Receipt  to update |
 **po_receipt_update_dto** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptUpdateDto**](../Model/PurchaseReceiptUpdateDto.md)| Defines the data for the  Purchase Receipt  to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseReceiptReleaseInvoiceByreceiptNumber**
> \Ekstralys\VismaNetApi\Model\ReleasePurchaseReceiptActionResultDto purchaseReceiptReleaseInvoiceByreceiptNumber($receipt_number)

Release purchase receipt operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PurchaseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Reference number of the receipt to be released

try {
    $result = $apiInstance->purchaseReceiptReleaseInvoiceByreceiptNumber($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseReceiptApi->purchaseReceiptReleaseInvoiceByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Reference number of the receipt to be released |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleasePurchaseReceiptActionResultDto**](../Model/ReleasePurchaseReceiptActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

