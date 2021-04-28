# Ekstralys\VismaNetApi\SalesOrderBasicV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderBasicV2CreateHeaderAttachmentByorderNumber**](SalesOrderBasicV2Api.md#salesOrderBasicV2CreateHeaderAttachmentByorderNumber) | **POST** /controller/api/v2/salesorderbasic/{orderNumber}/attachment | Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType**](SalesOrderBasicV2Api.md#salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType) | **POST** /controller/api/v2/salesorderbasic/orderType/{orderType}/{orderNumber}/attachment | Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created.
[**salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber**](SalesOrderBasicV2Api.md#salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber) | **POST** /controller/api/v2/salesorderbasic/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type.
[**salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber**](SalesOrderBasicV2Api.md#salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber) | **POST** /controller/api/v2/salesorderbasic/orderType/{orderType}/{orderNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created.
[**salesOrderBasicV2CreateShipmentActionBysaleOrderNumber**](SalesOrderBasicV2Api.md#salesOrderBasicV2CreateShipmentActionBysaleOrderNumber) | **POST** /controller/api/v2/salesorderbasic/{saleOrderNumber}/action/createShipment | Crete shipment operation
[**salesOrderBasicV2Post**](SalesOrderBasicV2Api.md#salesOrderBasicV2Post) | **POST** /controller/api/v2/salesorderbasic | Create a Sale Order


# **salesOrderBasicV2CreateHeaderAttachmentByorderNumber**
> object salesOrderBasicV2CreateHeaderAttachmentByorderNumber($order_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order

try {
    $result = $apiInstance->salesOrderBasicV2CreateHeaderAttachmentByorderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2CreateHeaderAttachmentByorderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType**
> object salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType($order_number, $order_type)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | Identifies the sales order type

try {
    $result = $apiInstance->salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType($order_number, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2CreateHeaderAttachmentByorderNumberorderType: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber**
> object salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber($order_number, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber($order_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2CreateLineAttachmentByorderNumberlineNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber**
> object salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Identifies the sales order
$order_type = "order_type_example"; // string | Identifies the sales order type
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber($order_number, $order_type, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicV2CreateShipmentActionBysaleOrderNumber**
> \Ekstralys\VismaNetApi\Model\CreateShipmentActionResultDto salesOrderBasicV2CreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_number = "sale_order_number_example"; // string | Reference number of the sale oreder from which the shipment will be created
$create_shipment_action_dto = new \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto(); // \Ekstralys\VismaNetApi\Model\CreateShipmentActionDto | Defines the data for the action

try {
    $result = $apiInstance->salesOrderBasicV2CreateShipmentActionBysaleOrderNumber($sale_order_number, $create_shipment_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2CreateShipmentActionBysaleOrderNumber: ', $e->getMessage(), PHP_EOL;
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

# **salesOrderBasicV2Post**
> object salesOrderBasicV2Post($sale_order_update_dto)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SalesOrderBasicV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_order_update_dto = new \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto(); // \Ekstralys\VismaNetApi\Model\SalesOrderBasicUpdateDto | Defines the data for the Sale Order to create

try {
    $result = $apiInstance->salesOrderBasicV2Post($sale_order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderBasicV2Api->salesOrderBasicV2Post: ', $e->getMessage(), PHP_EOL;
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

