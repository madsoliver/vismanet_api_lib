# Ekstralys\VismaNetApi\SupplierPaymentApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierPaymentCreateSupplierPayment**](SupplierPaymentApi.md#supplierPaymentCreateSupplierPayment) | **POST** /controller/api/v1/supplierPayment | Create a SupplierPayment
[**supplierPaymentGetAllPayments**](SupplierPaymentApi.md#supplierPaymentGetAllPayments) | **GET** /controller/api/v1/supplierPayment | Get all SupplierPayments.  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  ScreenId&#x3D;AP302000
[**supplierPaymentGetBypaymentNumber**](SupplierPaymentApi.md#supplierPaymentGetBypaymentNumber) | **GET** /controller/api/v1/supplierPayment/{paymentNumber} | Get a specific SupplierPayment
[**supplierPaymentPutBypaymentNumber**](SupplierPaymentApi.md#supplierPaymentPutBypaymentNumber) | **PUT** /controller/api/v1/supplierPayment/{paymentNumber} | Update a specific SupplierPayment
[**supplierPaymentReleasePaymentBypaymentNumber**](SupplierPaymentApi.md#supplierPaymentReleasePaymentBypaymentNumber) | **POST** /controller/api/v1/supplierPayment/{paymentNumber}/action/release | Release payment operation


# **supplierPaymentCreateSupplierPayment**
> object supplierPaymentCreateSupplierPayment($payment)

Create a SupplierPayment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto(); // \Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto | Defines the data for the SupplierPayment to create

try {
    $result = $apiInstance->supplierPaymentCreateSupplierPayment($payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierPaymentApi->supplierPaymentCreateSupplierPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment** | [**\Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto**](../Model/SupplierPaymentUpdateDto.md)| Defines the data for the SupplierPayment to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierPaymentGetAllPayments**
> \Ekstralys\VismaNetApi\Model\SupplierPaymentDto[] supplierPaymentGetAllPayments($invoice_ref_nbr, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $supplier, $page_number, $page_size)

Get all SupplierPayments.  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  ScreenId=AP302000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_ref_nbr = "invoice_ref_nbr_example"; // string | 
$greater_than_value = "greater_than_value_example"; // string | Enter the from-value for Ref. no.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$supplier = "supplier_example"; // string | Filter by Supplier
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->supplierPaymentGetAllPayments($invoice_ref_nbr, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $supplier, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierPaymentApi->supplierPaymentGetAllPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_ref_nbr** | **string**|  | [optional]
 **greater_than_value** | **string**| Enter the from-value for Ref. no. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **supplier** | **string**| Filter by Supplier | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierPaymentDto[]**](../Model/SupplierPaymentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierPaymentGetBypaymentNumber**
> \Ekstralys\VismaNetApi\Model\SupplierPaymentDto supplierPaymentGetBypaymentNumber($payment_number)

Get a specific SupplierPayment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Identifies the SupplierPayment

try {
    $result = $apiInstance->supplierPaymentGetBypaymentNumber($payment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierPaymentApi->supplierPaymentGetBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Identifies the SupplierPayment |

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierPaymentDto**](../Model/SupplierPaymentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierPaymentPutBypaymentNumber**
> object supplierPaymentPutBypaymentNumber($payment_number, $payment)

Update a specific SupplierPayment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Identifies the Payment to update
$payment = new \Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto(); // \Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto | Defines the data for the Payment to update

try {
    $result = $apiInstance->supplierPaymentPutBypaymentNumber($payment_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierPaymentApi->supplierPaymentPutBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Identifies the Payment to update |
 **payment** | [**\Ekstralys\VismaNetApi\Model\SupplierPaymentUpdateDto**](../Model/SupplierPaymentUpdateDto.md)| Defines the data for the Payment to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierPaymentReleasePaymentBypaymentNumber**
> \Ekstralys\VismaNetApi\Model\ReleasePaymentActionResultDto supplierPaymentReleasePaymentBypaymentNumber($payment_number, $release_action_dto)

Release payment operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Reference number of the payment to be released
$release_action_dto = new \Ekstralys\VismaNetApi\Model\ReleaseSupplierPaymentActionDto(); // \Ekstralys\VismaNetApi\Model\ReleaseSupplierPaymentActionDto | Contains the type of the payment

try {
    $result = $apiInstance->supplierPaymentReleasePaymentBypaymentNumber($payment_number, $release_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierPaymentApi->supplierPaymentReleasePaymentBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Reference number of the payment to be released |
 **release_action_dto** | [**\Ekstralys\VismaNetApi\Model\ReleaseSupplierPaymentActionDto**](../Model/ReleaseSupplierPaymentActionDto.md)| Contains the type of the payment |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleasePaymentActionResultDto**](../Model/ReleasePaymentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

