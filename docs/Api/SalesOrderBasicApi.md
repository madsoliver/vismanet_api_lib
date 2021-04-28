# Ekstralys\VismaNetApi\SalesOrderBasicApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderBasicCreateHeaderAttachmentByorderNumber**](SalesOrderBasicApi.md#salesOrderBasicCreateHeaderAttachmentByorderNumber) | **POST** /controller/api/v1/salesorderbasic/{orderNumber}/attachment | Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderBasicCreateHeaderAttachmentByorderNumberorderType**](SalesOrderBasicApi.md#salesOrderBasicCreateHeaderAttachmentByorderNumberorderType) | **POST** /controller/api/v1/salesorderbasic/orderType/{orderType}/{orderNumber}/attachment | Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created.
[**salesOrderBasicCreateLineAttachmentByorderNumberlineNumber**](SalesOrderBasicApi.md#salesOrderBasicCreateLineAttachmentByorderNumberlineNumber) | **POST** /controller/api/v1/salesorderbasic/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber**](SalesOrderBasicApi.md#salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber) | **POST** /controller/api/v1/salesorderbasic/orderType/{orderType}/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created.
[**salesOrderBasicCreateShipmentActionBysaleOrderNumber**](SalesOrderBasicApi.md#salesOrderBasicCreateShipmentActionBysaleOrderNumber) | **POST** /controller/api/v1/salesorderbasic/{saleOrderNumber}/action/createShipment | Crete shipment operation
[**salesOrderBasicGetAllOrders**](SalesOrderBasicApi.md#salesOrderBasicGetAllOrders) | **GET** /controller/api/v1/salesorderbasic | Get a range of Sale Orders - ScreenId&#x3D;SO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
[**salesOrderBasicGetByorderNbr**](SalesOrderBasicApi.md#salesOrderBasicGetByorderNbr) | **GET** /controller/api/v1/salesorderbasic/{orderNbr} | Get a specific SO Order
[**salesOrderBasicGetOrderByTypeByorderTypeorderNbr**](SalesOrderBasicApi.md#salesOrderBasicGetOrderByTypeByorderTypeorderNbr) | **GET** /controller/api/v1/salesorderbasic/{orderType}/{orderNbr} | Get a specific type of Order
[**salesOrderBasicPost**](SalesOrderBasicApi.md#salesOrderBasicPost) | **POST** /controller/api/v1/salesorderbasic | Create a Sale Order
[**salesOrderBasicPutByorderNbr**](SalesOrderBasicApi.md#salesOrderBasicPutByorderNbr) | **PUT** /controller/api/v1/salesorderbasic/{orderNbr} | Update a specific Sale Order


# **salesOrderBasicCreateHeaderAttachmentByorderNumber**
> object salesOrderBasicCreateHeaderAttachmentByorderNumber($order_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order

try {
    $result = $apiInstance->salesOrderBasicCreateHeaderAttachmentByorderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicCreateHeaderAttachmentByorderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicCreateHeaderAttachmentByorderNumberorderType**
> object salesOrderBasicCreateHeaderAttachmentByorderNumberorderType($order_number, $order_type)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | Identifies the sales order type

try {
    $result = $apiInstance->salesOrderBasicCreateHeaderAttachmentByorderNumberorderType($order_number, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicCreateHeaderAttachmentByorderNumberorderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |
 **order_type** | **string**| Identifies the sales order type |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicCreateLineAttachmentByorderNumberlineNumber**
> object salesOrderBasicCreateLineAttachmentByorderNumberlineNumber($order_number, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderBasicCreateLineAttachmentByorderNumberlineNumber($order_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicCreateLineAttachmentByorderNumberlineNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber**
> object salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | Identifies the sales order type
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Identifies the sales order |
 **order_type** | **string**| Identifies the sales order type |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicCreateShipmentActionBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CreateShipmentActionResultDto salesOrderBasicCreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto)

Crete shipment operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder from which the shipment will be created
$create_shipment_action_dto = new \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto(); // \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderBasicCreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicCreateShipmentActionBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicGetAllOrders**
> \Ekstralys\VismaNetApi\Model\SalesOrderBasicDto[] salesOrderBasicGetAllOrders($order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of Sale Orders - ScreenId=SO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

Data for all Sales Order Basic

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
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
    $result = $apiInstance->salesOrderBasicGetAllOrders($order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicGetAllOrders: ', $e->getMessage(), PHP_EOL;
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

[**\Ekstralys\VismaNetApi\Model\SalesOrderBasicDto[]**](../Model/SalesOrderBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicGetByorderNbr**
> \Ekstralys\VismaNetApi\Model\SalesOrderBasicDto salesOrderBasicGetByorderNbr($order_nbr)

Get a specific SO Order

Data for a single Sales Order Basic

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_nbr = "order_nbr_example"; // string | Identifies the Sales Order Number

try {
    $result = $apiInstance->salesOrderBasicGetByorderNbr($order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicGetByorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_nbr** | **string**| Identifies the Sales Order Number |

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderBasicDto**](../Model/SalesOrderBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicGetOrderByTypeByorderTypeorderNbr**
> \Ekstralys\VismaNetApi\Model\SalesOrderBasicDto salesOrderBasicGetOrderByTypeByorderTypeorderNbr($order_type, $order_nbr)

Get a specific type of Order

Data for a single Sales Order Basic

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = "order_type_example"; // string | Identifies the Sales Order Type
$order_nbr = "order_nbr_example"; // string | Identifies the Sales Order Number

try {
    $result = $apiInstance->salesOrderBasicGetOrderByTypeByorderTypeorderNbr($order_type, $order_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicGetOrderByTypeByorderTypeorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**| Identifies the Sales Order Type |
 **order_nbr** | **string**| Identifies the Sales Order Number |

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderBasicDto**](../Model/SalesOrderBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicPost**
> object salesOrderBasicPost($sale_order_update_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto | Defines the data for the Sale Order to create

try {
    $result = $apiInstance->salesOrderBasicPost($sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_order_update_dto** | [**\Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto**](../Model/SalesOrderBasicUpdateDto.md)| Defines the data for the Sale Order to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderBasicPutByorderNbr**
> object salesOrderBasicPutByorderNbr($order_nbr, $sale_order_update_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_nbr = "order_nbr_example"; // string | Identifies the Sale Order to update
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto | Defines the data for the Sale Order to update

try {
    $result = $apiInstance->salesOrderBasicPutByorderNbr($order_nbr, $sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicApi->salesOrderBasicPutByorderNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_nbr** | **string**| Identifies the Sale Order to update |
 **sale_order_update_dto** | [**\Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto**](../Model/SalesOrderBasicUpdateDto.md)| Defines the data for the Sale Order to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

