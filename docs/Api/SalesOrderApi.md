# Ekstralys\VismaNetApi\SalesOrderApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderCancelSalesOrderBysaleOrderNumber**](SalesOrderApi.md#salesOrderCancelSalesOrderBysaleOrderNumber) | **POST** /controller/api/v1/salesorder/{saleOrderNumber}/action/cancelSalesOrder | Cancel Order action
[**salesOrderCreateHeaderAttachmentByorderNumber**](SalesOrderApi.md#salesOrderCreateHeaderAttachmentByorderNumber) | **POST** /controller/api/v1/salesorder/{orderNumber}/attachment | Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderCreateHeaderAttachmentByorderNumberorderType**](SalesOrderApi.md#salesOrderCreateHeaderAttachmentByorderNumberorderType) | **POST** /controller/api/v1/salesorder/orderType/{orderType}/{orderNumber}/attachment | Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created.
[**salesOrderCreateLineAttachmentByorderNumberlineNumber**](SalesOrderApi.md#salesOrderCreateLineAttachmentByorderNumberlineNumber) | **POST** /controller/api/v1/salesorder/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber**](SalesOrderApi.md#salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber) | **POST** /controller/api/v1/salesorder/orderType/{orderType}/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created.
[**salesOrderCreateShipmentActionBysaleOrderNumber**](SalesOrderApi.md#salesOrderCreateShipmentActionBysaleOrderNumber) | **POST** /controller/api/v1/salesorder/{saleOrderNumber}/action/createShipment | Create shipment operation
[**salesOrderGetAllOrders**](SalesOrderApi.md#salesOrderGetAllOrders) | **GET** /controller/api/v1/salesorder | Get a range of SO Orders - ScreenId&#x3D;SO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added force pagination
[**salesOrderGetByorderNbr**](SalesOrderApi.md#salesOrderGetByorderNbr) | **GET** /controller/api/v1/salesorder/{orderNbr} | Get a specific SO Order
[**salesOrderGetCommissionsByorderTypeorderNbr**](SalesOrderApi.md#salesOrderGetCommissionsByorderTypeorderNbr) | **GET** /controller/api/v1/salesorder/{orderType}/{orderNbr}/commissions | Get Sales Order Commissions - ScreenId&#x3D;SO301000, tab Commissions
[**salesOrderGetOrderByTypeByorderTypeorderNbr**](SalesOrderApi.md#salesOrderGetOrderByTypeByorderTypeorderNbr) | **GET** /controller/api/v1/salesorder/{orderType}/{orderNbr} | Get a specific type of Order
[**salesOrderGetROTRUTByorderTypeorderNbr**](SalesOrderApi.md#salesOrderGetROTRUTByorderTypeorderNbr) | **GET** /controller/api/v1/salesorder/{orderType}/{orderNbr}/rotrut | Get ROT/RUT details for a specific type of order
[**salesOrderPost**](SalesOrderApi.md#salesOrderPost) | **POST** /controller/api/v1/salesorder | Create a Sale Order
[**salesOrderPrintOrderByorderNumberorderType**](SalesOrderApi.md#salesOrderPrintOrderByorderNumberorderType) | **GET** /controller/api/v1/salesorder/{orderType}/{orderNumber}/printOrder | Get the print report of the Sales Order Quote
[**salesOrderPutByorderNbr**](SalesOrderApi.md#salesOrderPutByorderNbr) | **PUT** /controller/api/v1/salesorder/{orderNbr} | Update a specific Sale Order
[**salesOrderReopenSalesOrderBysalesOrderNumber**](SalesOrderApi.md#salesOrderReopenSalesOrderBysalesOrderNumber) | **POST** /controller/api/v1/salesorder/{salesOrderNumber}/action/reopenSalesOrder | Reopen and update a specific Sales Order. This method requires a sales order update dto where the order type is initialised.


# **salesOrderCancelSalesOrderBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionResultDto salesOrderCancelSalesOrderBysaleOrderNumber($sale_order_number, $cancel_sales_order_action_dto)

Cancel Order action

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder that will be cancelled
$cancel_sales_order_action_dto = new \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionDto(); // \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderCancelSalesOrderBysaleOrderNumber($sale_order_number, $cancel_sales_order_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCancelSalesOrderBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_order_number** | **string**| Reference number of the sale oreder that will be cancelled |
 **cancel_sales_order_action_dto** | [**\Ekstralys\VismaNetApi\Model\CancelSalesOrderActionDto**](../Model/CancelSalesOrderActionDto.md)| Defines the data for the action |

### Return type

[**\Ekstralys\VismaNetApi\Model\CancelSalesOrderActionResultDto**](../Model/CancelSalesOrderActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCreateHeaderAttachmentByorderNumber**
> object salesOrderCreateHeaderAttachmentByorderNumber($order_number)

Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order

try {
    $result = $apiInstance->salesOrderCreateHeaderAttachmentByorderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCreateHeaderAttachmentByorderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCreateHeaderAttachmentByorderNumberorderType**
> object salesOrderCreateHeaderAttachmentByorderNumberorderType($order_number, $order_type)

Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | 

try {
    $result = $apiInstance->salesOrderCreateHeaderAttachmentByorderNumberorderType($order_number, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCreateHeaderAttachmentByorderNumberorderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |
 **order_type** | **string**|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCreateLineAttachmentByorderNumberlineNumber**
> object salesOrderCreateLineAttachmentByorderNumberlineNumber($order_number, $line_number)

Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderCreateLineAttachmentByorderNumberlineNumber($order_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCreateLineAttachmentByorderNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber**
> object salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number)

Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | 
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |
 **order_type** | **string**|  |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCreateShipmentActionBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CreateShipmentActionResultDto salesOrderCreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto)

Create shipment operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder from which the shipment will be created
$create_shipment_action_dto = new \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto(); // \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderCreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCreateShipmentActionBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_order_number** | **string**| Reference number of the sale oreder from which the shipment will be created |
 **create_shipment_action_dto** | [**\Ekstralys\VismaNetApi\Model\CreateShipmentActionDto**](../Model/CreateShipmentActionDto.md)| Defines the data for the action |

### Return type

[**\Ekstralys\VismaNetApi\Model\CreateShipmentActionResultDto**](../Model/CreateShipmentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGetAllOrders**
> \Ekstralys\VismaNetApi\Model\SalesOrderDto[] salesOrderGetAllOrders($order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of SO Orders - ScreenId=SO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added force pagination

Data for all Sales Orders

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = "order_type_example"; // string | Filter by Order type.
$status = "status_example"; // string | Select to filter on status on order.
$greater_than_value = "greater_than_value_example"; // string | Filter on Order no. greater than value.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$show_notes = true; // bool | Set to true to include notes.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->salesOrderGetAllOrders($order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGetAllOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**| Filter by Order type. | [optional]
 **status** | **string**| Select to filter on status on order. | [optional]
 **greater_than_value** | **string**| Filter on Order no. greater than value. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **show_notes** | **bool**| Set to true to include notes. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderDto[]**](../Model/SalesOrderDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGetByorderNbr**
> \Ekstralys\VismaNetApi\Model\SalesOrderDto salesOrderGetByorderNbr($order_nbr)

Get a specific SO Order

Data for a single Sales Order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_nbr = "order_nbr_example"; // string | Identifies the Sales Order Number

try {
    $result = $apiInstance->salesOrderGetByorderNbr($order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGetByorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_nbr** | **string**| Identifies the Sales Order Number |

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderDto**](../Model/SalesOrderDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGetCommissionsByorderTypeorderNbr**
> \Ekstralys\VismaNetApi\Model\SOCommissionDto[] salesOrderGetCommissionsByorderTypeorderNbr($order_type, $order_nbr)

Get Sales Order Commissions - ScreenId=SO301000, tab Commissions

Data for all Sales Order Commissions

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = "order_type_example"; // string | 
$order_nbr = "order_nbr_example"; // string | 

try {
    $result = $apiInstance->salesOrderGetCommissionsByorderTypeorderNbr($order_type, $order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGetCommissionsByorderTypeorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**|  |
 **order_nbr** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\SOCommissionDto[]**](../Model/SOCommissionDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGetOrderByTypeByorderTypeorderNbr**
> \Ekstralys\VismaNetApi\Model\SalesOrderDto salesOrderGetOrderByTypeByorderTypeorderNbr($order_type, $order_nbr)

Get a specific type of Order

Data for a single Sales Order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = "order_type_example"; // string | Identifies the Sales Order Type
$order_nbr = "order_nbr_example"; // string | Identifies the Sales Order Number

try {
    $result = $apiInstance->salesOrderGetOrderByTypeByorderTypeorderNbr($order_type, $order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGetOrderByTypeByorderTypeorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**| Identifies the Sales Order Type |
 **order_nbr** | **string**| Identifies the Sales Order Number |

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderDto**](../Model/SalesOrderDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGetROTRUTByorderTypeorderNbr**
> \Ekstralys\VismaNetApi\Model\RotRutBasicDto salesOrderGetROTRUTByorderTypeorderNbr($order_type, $order_nbr)

Get ROT/RUT details for a specific type of order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = "order_type_example"; // string | 
$order_nbr = "order_nbr_example"; // string | 

try {
    $result = $apiInstance->salesOrderGetROTRUTByorderTypeorderNbr($order_type, $order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGetROTRUTByorderTypeorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**|  |
 **order_nbr** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\RotRutBasicDto**](../Model/RotRutBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPost**
> object salesOrderPost($sale_order_update_dto)

Create a Sale Order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto | Defines the data for the Sale Order to create

try {
    $result = $apiInstance->salesOrderPost($sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_order_update_dto** | [**\Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto**](../Model/SalesOrderUpdateDto.md)| Defines the data for the Sale Order to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPrintOrderByorderNumberorderType**
> object salesOrderPrintOrderByorderNumberorderType($order_number, $order_type)

Get the print report of the Sales Order Quote

The File is in Content of the message

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the order
$order_type = "order_type_example"; // string | Identifies the Sales Order Type

try {
    $result = $apiInstance->salesOrderPrintOrderByorderNumberorderType($order_number, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderPrintOrderByorderNumberorderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the order |
 **order_type** | **string**| Identifies the Sales Order Type |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPutByorderNbr**
> object salesOrderPutByorderNbr($order_nbr, $sale_order_update_dto)

Update a specific Sale Order

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_nbr = "order_nbr_example"; // string | Identifies the Sale Order to update
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto | Defines the data for the Sale Order to update

try {
    $result = $apiInstance->salesOrderPutByorderNbr($order_nbr, $sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderPutByorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_nbr** | **string**| Identifies the Sale Order to update |
 **sale_order_update_dto** | [**\Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto**](../Model/SalesOrderUpdateDto.md)| Defines the data for the Sale Order to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderReopenSalesOrderBysalesOrderNumber**
> \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionResultDto salesOrderReopenSalesOrderBysalesOrderNumber($sales_order_number, $reopen_sales_order_action_dto)

Reopen and update a specific Sales Order. This method requires a sales order update dto where the order type is initialised.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_number = "sales_order_number_example"; // string | Identifies the Sale Order to reopen
$reopen_sales_order_action_dto = new \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionDto(); // \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionDto | 

try {
    $result = $apiInstance->salesOrderReopenSalesOrderBysalesOrderNumber($sales_order_number, $reopen_sales_order_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderReopenSalesOrderBysalesOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_number** | **string**| Identifies the Sale Order to reopen |
 **reopen_sales_order_action_dto** | [**\Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionDto**](../Model/ReopenSalesOrderActionDto.md)|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionResultDto**](../Model/ReopenSalesOrderActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

