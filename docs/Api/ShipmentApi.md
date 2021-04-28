# Ekstralys\VismaNetApi\ShipmentApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentConfirmShipmentByshipmentNumber**](ShipmentApi.md#shipmentConfirmShipmentByshipmentNumber) | **POST** /controller/api/v1/shipment/{shipmentNumber}/action/confirmShipment | Confirm shipment operation
[**shipmentCorrectShipmentByshipmentNumber**](ShipmentApi.md#shipmentCorrectShipmentByshipmentNumber) | **POST** /controller/api/v1/shipment/{shipmentNumber}/action/correctShipment | Correct shipment operation
[**shipmentGetAllShipments**](ShipmentApi.md#shipmentGetAllShipments) | **GET** /controller/api/v1/shipment | Get a range of SO Shipments - ScreenId&#x3D;SO302000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
[**shipmentGetByshipmentNbr**](ShipmentApi.md#shipmentGetByshipmentNbr) | **GET** /controller/api/v1/shipment/{shipmentNbr} | Get a specific Shipment
[**shipmentPost**](ShipmentApi.md#shipmentPost) | **POST** /controller/api/v1/shipment | Create a Shipment
[**shipmentPostByshipmentNumber**](ShipmentApi.md#shipmentPostByshipmentNumber) | **POST** /controller/api/v1/shipment/{shipmentNumber}/action/addSOLine | Adds a Sales Order Line to a specific Shipment
[**shipmentPostByshipmentNumber_0**](ShipmentApi.md#shipmentPostByshipmentNumber_0) | **POST** /controller/api/v1/shipment/{shipmentNumber}/action/addSOOrder | Adds a Sales Order to a specific Shipment
[**shipmentPrintPickListByshipmentNbr**](ShipmentApi.md#shipmentPrintPickListByshipmentNbr) | **GET** /controller/api/v1/shipment/{shipmentNbr}/printPickList | Get the pick list report
[**shipmentPrintShipmentConfirmationByshipmentNbr**](ShipmentApi.md#shipmentPrintShipmentConfirmationByshipmentNbr) | **GET** /controller/api/v1/shipment/{shipmentNbr}/printShipmentConfirmation | Get the shipment confirmation report
[**shipmentPutByshipmentNbr**](ShipmentApi.md#shipmentPutByshipmentNbr) | **PUT** /controller/api/v1/shipment/{shipmentNbr} | Update a specific Shipment


# **shipmentConfirmShipmentByshipmentNumber**
> \Ekstralys\VismaNetApi\Model\ConfirmShipmentActionResultDto shipmentConfirmShipmentByshipmentNumber($shipment_number)

Confirm shipment operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_number = "shipment_number_example"; // string | Reference number of the shipment to be confirmed

try {
    $result = $apiInstance->shipmentConfirmShipmentByshipmentNumber($shipment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentConfirmShipmentByshipmentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_number** | **string**| Reference number of the shipment to be confirmed |

### Return type

[**\Ekstralys\VismaNetApi\Model\ConfirmShipmentActionResultDto**](../Model/ConfirmShipmentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentCorrectShipmentByshipmentNumber**
> object shipmentCorrectShipmentByshipmentNumber($shipment_number)

Correct shipment operation

Response Message has StatusCode BadRequest or InternalServerError if POST operation failed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_number = "shipment_number_example"; // string | Reference number of the shipment to be corrected

try {
    $result = $apiInstance->shipmentCorrectShipmentByshipmentNumber($shipment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentCorrectShipmentByshipmentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_number** | **string**| Reference number of the shipment to be corrected |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetAllShipments**
> \Ekstralys\VismaNetApi\Model\ShipmentDto[] shipmentGetAllShipments($customer_id, $customer_number, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $status, $page_size, $page_number)

Get a range of SO Shipments - ScreenId=SO302000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 
$customer_number = "customer_number_example"; // string | 
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$status = "status_example"; // string | 
$page_size = 56; // int | 
$page_number = 56; // int | 

try {
    $result = $apiInstance->shipmentGetAllShipments($customer_id, $customer_number, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $status, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentGetAllShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  | [optional]
 **customer_number** | **string**|  | [optional]
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **page_size** | **int**|  | [optional]
 **page_number** | **int**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ShipmentDto[]**](../Model/ShipmentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetByshipmentNbr**
> \Ekstralys\VismaNetApi\Model\ShipmentDto shipmentGetByshipmentNbr($shipment_nbr)

Get a specific Shipment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_nbr = "shipment_nbr_example"; // string | Identifies the Shipment

try {
    $result = $apiInstance->shipmentGetByshipmentNbr($shipment_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentGetByshipmentNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_nbr** | **string**| Identifies the Shipment |

### Return type

[**\Ekstralys\VismaNetApi\Model\ShipmentDto**](../Model/ShipmentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPost**
> object shipmentPost($shipment_create_dto)

Create a Shipment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_create_dto = new \Ekstralys\VismaNetApi\Model\ShipmentCreateDto(); // \Ekstralys\VismaNetApi\Model\ShipmentCreateDto | Defines the data for the Shipment to create

try {
    $result = $apiInstance->shipmentPost($shipment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_create_dto** | [**\Ekstralys\VismaNetApi\Model\ShipmentCreateDto**](../Model/ShipmentCreateDto.md)| Defines the data for the Shipment to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPostByshipmentNumber**
> object shipmentPostByshipmentNumber($shipment_number, $shipment_so_line)

Adds a Sales Order Line to a specific Shipment

Response Message has StatusCode NoContent if POST operation succeeded

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_number = "shipment_number_example"; // string | Identifies the Shipment to update
$shipment_so_line = new \Ekstralys\VismaNetApi\Model\ShipmentSOLine(); // \Ekstralys\VismaNetApi\Model\ShipmentSOLine | Defines the data for the Sales Order Line to add

try {
    $result = $apiInstance->shipmentPostByshipmentNumber($shipment_number, $shipment_so_line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPostByshipmentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_number** | **string**| Identifies the Shipment to update |
 **shipment_so_line** | [**\Ekstralys\VismaNetApi\Model\ShipmentSOLine**](../Model/ShipmentSOLine.md)| Defines the data for the Sales Order Line to add |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPostByshipmentNumber_0**
> object shipmentPostByshipmentNumber_0($shipment_number, $shipment_so_order)

Adds a Sales Order to a specific Shipment

Response Message has StatusCode NoContent if POST operation succeeded

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_number = "shipment_number_example"; // string | Identifies the Shipment to update
$shipment_so_order = new \Ekstralys\VismaNetApi\Model\ShipmentSOOrder(); // \Ekstralys\VismaNetApi\Model\ShipmentSOOrder | Defines the data for the Sales Order to add

try {
    $result = $apiInstance->shipmentPostByshipmentNumber_0($shipment_number, $shipment_so_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPostByshipmentNumber_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_number** | **string**| Identifies the Shipment to update |
 **shipment_so_order** | [**\Ekstralys\VismaNetApi\Model\ShipmentSOOrder**](../Model/ShipmentSOOrder.md)| Defines the data for the Sales Order to add |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPrintPickListByshipmentNbr**
> object shipmentPrintPickListByshipmentNbr($shipment_nbr)

Get the pick list report

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_nbr = "shipment_nbr_example"; // string | Identifies the shipment

try {
    $result = $apiInstance->shipmentPrintPickListByshipmentNbr($shipment_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPrintPickListByshipmentNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_nbr** | **string**| Identifies the shipment |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPrintShipmentConfirmationByshipmentNbr**
> object shipmentPrintShipmentConfirmationByshipmentNbr($shipment_nbr)

Get the shipment confirmation report

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_nbr = "shipment_nbr_example"; // string | Identifies the shipment

try {
    $result = $apiInstance->shipmentPrintShipmentConfirmationByshipmentNbr($shipment_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPrintShipmentConfirmationByshipmentNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_nbr** | **string**| Identifies the shipment |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPutByshipmentNbr**
> object shipmentPutByshipmentNbr($shipment_nbr, $shipment_update_dto)

Update a specific Shipment

Response Message has StatusCode NoContent if PUT operation succeeded

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_nbr = "shipment_nbr_example"; // string | Identifies the Shipment to update
$shipment_update_dto = new \Ekstralys\VismaNetApi\Model\ShipmentUpdateDto(); // \Ekstralys\VismaNetApi\Model\ShipmentUpdateDto | Defines the data for the Shipment to update

try {
    $result = $apiInstance->shipmentPutByshipmentNbr($shipment_nbr, $shipment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentPutByshipmentNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_nbr** | **string**| Identifies the Shipment to update |
 **shipment_update_dto** | [**\Ekstralys\VismaNetApi\Model\ShipmentUpdateDto**](../Model/ShipmentUpdateDto.md)| Defines the data for the Shipment to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

