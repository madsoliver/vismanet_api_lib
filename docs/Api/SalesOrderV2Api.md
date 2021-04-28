# Ekstralys\VismaNetApi\SalesOrderV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderV2CancelSalesOrderBysaleOrderNumber**](SalesOrderV2Api.md#salesOrderV2CancelSalesOrderBysaleOrderNumber) | **POST** /controller/api/v2/salesorder/{saleOrderNumber}/action/cancelSalesOrder | Cancel Order action
[**salesOrderV2CreateHeaderAttachmentByorderNumber**](SalesOrderV2Api.md#salesOrderV2CreateHeaderAttachmentByorderNumber) | **POST** /controller/api/v2/salesorder/{orderNumber}/attachment | Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderV2CreateHeaderAttachmentByorderNumberorderType**](SalesOrderV2Api.md#salesOrderV2CreateHeaderAttachmentByorderNumberorderType) | **POST** /controller/api/v2/salesorder/orderType/{orderType}/{orderNumber}/attachment | Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created.
[**salesOrderV2CreateLineAttachmentByorderNumberlineNumber**](SalesOrderV2Api.md#salesOrderV2CreateLineAttachmentByorderNumberlineNumber) | **POST** /controller/api/v2/salesorder/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber**](SalesOrderV2Api.md#salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber) | **POST** /controller/api/v2/salesorder/orderType/{orderType}/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created.
[**salesOrderV2CreateShipmentActionBysaleOrderNumber**](SalesOrderV2Api.md#salesOrderV2CreateShipmentActionBysaleOrderNumber) | **POST** /controller/api/v2/salesorder/{saleOrderNumber}/action/createShipment | Create shipment operation
[**salesOrderV2Post**](SalesOrderV2Api.md#salesOrderV2Post) | **POST** /controller/api/v2/salesorder | Create a Sale Order
[**salesOrderV2ReopenSalesOrderBysalesOrderNumber**](SalesOrderV2Api.md#salesOrderV2ReopenSalesOrderBysalesOrderNumber) | **POST** /controller/api/v2/salesorder/{salesOrderNumber}/action/reopenSalesOrder | Reopen and update a specific Sales Order. This method requires a sales order update dto where the order type is initialised.


# **salesOrderV2CancelSalesOrderBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionResultDto salesOrderV2CancelSalesOrderBysaleOrderNumber($sale_order_number, $cancel_sales_order_action_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder that will be cancelled
$cancel_sales_order_action_dto = new \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionDto(); // \Ekstralys\VismaNetApi\Model\CancelSalesOrderActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderV2CancelSalesOrderBysaleOrderNumber($sale_order_number, $cancel_sales_order_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CancelSalesOrderBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2CreateHeaderAttachmentByorderNumber**
> object salesOrderV2CreateHeaderAttachmentByorderNumber($order_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order

try {
    $result = $apiInstance->salesOrderV2CreateHeaderAttachmentByorderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CreateHeaderAttachmentByorderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2CreateHeaderAttachmentByorderNumberorderType**
> object salesOrderV2CreateHeaderAttachmentByorderNumberorderType($order_number, $order_type)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | 

try {
    $result = $apiInstance->salesOrderV2CreateHeaderAttachmentByorderNumberorderType($order_number, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CreateHeaderAttachmentByorderNumberorderType: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2CreateLineAttachmentByorderNumberlineNumber**
> object salesOrderV2CreateLineAttachmentByorderNumberlineNumber($order_number, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderV2CreateLineAttachmentByorderNumberlineNumber($order_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CreateLineAttachmentByorderNumberlineNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber**
> object salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | 
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2CreateShipmentActionBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CreateShipmentActionResultDto salesOrderV2CreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder from which the shipment will be created
$create_shipment_action_dto = new \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto(); // \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderV2CreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2CreateShipmentActionBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2Post**
> object salesOrderV2Post($sale_order_update_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderUpdateDto | Defines the data for the Sale Order to create

try {
    $result = $apiInstance->salesOrderV2Post($sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2Post: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderV2ReopenSalesOrderBysalesOrderNumber**
> \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionResultDto salesOrderV2ReopenSalesOrderBysalesOrderNumber($sales_order_number, $reopen_sales_order_action_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_number = "sales_order_number_example"; // string | Identifies the Sale Order to reopen
$reopen_sales_order_action_dto = new \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionDto(); // \Ekstralys\VismaNetApi\Model\ReopenSalesOrderActionDto | 

try {
    $result = $apiInstance->salesOrderV2ReopenSalesOrderBysalesOrderNumber($sales_order_number, $reopen_sales_order_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderV2Api->salesOrderV2ReopenSalesOrderBysalesOrderNumber: ', $e->getMessage(), PHP_EOL;
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

