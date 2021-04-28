# Ekstralys\VismaNetApi\PaymentApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentCreatePayment**](PaymentApi.md#paymentCreatePayment) | **POST** /controller/api/v1/payment | Create a Payment  Payment is deprecated, please use CustomerPayment instead.
[**paymentGetAllPayments**](PaymentApi.md#paymentGetAllPayments) | **GET** /controller/api/v1/payment | Get a range of Payments - ScreenId&#x3D;AP302000  Payment is deprecated, please use CustomerPayment instead.
[**paymentGetBypaymentNumber**](PaymentApi.md#paymentGetBypaymentNumber) | **GET** /controller/api/v1/payment/{paymentNumber} | Get a specific Payment  Payment is deprecated, please use CustomerPayment instead.
[**paymentPutBypaymentNumber**](PaymentApi.md#paymentPutBypaymentNumber) | **PUT** /controller/api/v1/payment/{paymentNumber} | Update a specific Payment  Payment is deprecated, please use CustomerPayment instead.
[**paymentReleasePaymentBypaymentNumber**](PaymentApi.md#paymentReleasePaymentBypaymentNumber) | **POST** /controller/api/v1/payment/{paymentNumber}/action/release | Release payment operation  Payment is deprecated, please use CustomerPayment instead.
[**paymentVoidPaymentBypaymentNumber**](PaymentApi.md#paymentVoidPaymentBypaymentNumber) | **POST** /controller/api/v1/payment/{paymentNumber}/action/void | Void payment operation  Payment is deprecated, please use CustomerPayment instead.


# **paymentCreatePayment**
> object paymentCreatePayment($payment)

Create a Payment  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Ekstralys\VismaNetApi\Model\PaymentUpdateDto(); // \Ekstralys\VismaNetApi\Model\PaymentUpdateDto | Defines the data for the Payment to create

try {
    $result = $apiInstance->paymentCreatePayment($payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentCreatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment** | [**\Ekstralys\VismaNetApi\Model\PaymentUpdateDto**](../Model/PaymentUpdateDto.md)| Defines the data for the Payment to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentGetAllPayments**
> \Ekstralys\VismaNetApi\Model\PaymentDto[] paymentGetAllPayments($payment_type, $customer, $greater_than_value, $invoice_ref_nbr, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of Payments - ScreenId=AP302000  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_type = "payment_type_example"; // string | Select Type
$customer = "customer_example"; // string | Enter Customer
$greater_than_value = "greater_than_value_example"; // string | Enter the from-value for Ref. no.
$invoice_ref_nbr = "invoice_ref_nbr_example"; // string | Enter Invoice Ref Nbr
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | Enter field to order your records by.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->paymentGetAllPayments($payment_type, $customer, $greater_than_value, $invoice_ref_nbr, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentGetAllPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_type** | **string**| Select Type | [optional]
 **customer** | **string**| Enter Customer | [optional]
 **greater_than_value** | **string**| Enter the from-value for Ref. no. | [optional]
 **invoice_ref_nbr** | **string**| Enter Invoice Ref Nbr | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| Enter field to order your records by. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\PaymentDto[]**](../Model/PaymentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentGetBypaymentNumber**
> \Ekstralys\VismaNetApi\Model\PaymentDto paymentGetBypaymentNumber($payment_number)

Get a specific Payment  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Identifies the Payment

try {
    $result = $apiInstance->paymentGetBypaymentNumber($payment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentGetBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Identifies the Payment |

### Return type

[**\Ekstralys\VismaNetApi\Model\PaymentDto**](../Model/PaymentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPutBypaymentNumber**
> object paymentPutBypaymentNumber($payment_number, $payment)

Update a specific Payment  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Identifies the Payment to update
$payment = new \Ekstralys\VismaNetApi\Model\PaymentUpdateDto(); // \Ekstralys\VismaNetApi\Model\PaymentUpdateDto | Defines the data for the Payment to update

try {
    $result = $apiInstance->paymentPutBypaymentNumber($payment_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentPutBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Identifies the Payment to update |
 **payment** | [**\Ekstralys\VismaNetApi\Model\PaymentUpdateDto**](../Model/PaymentUpdateDto.md)| Defines the data for the Payment to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentReleasePaymentBypaymentNumber**
> \Ekstralys\VismaNetApi\Model\ReleasePaymentActionResultDto paymentReleasePaymentBypaymentNumber($payment_number, $release_action_dto)

Release payment operation  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Reference number of the payment to be released
$release_action_dto = new \Ekstralys\VismaNetApi\Model\ReleasePaymentActionDto(); // \Ekstralys\VismaNetApi\Model\ReleasePaymentActionDto | Contains the type of the payment

try {
    $result = $apiInstance->paymentReleasePaymentBypaymentNumber($payment_number, $release_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentReleasePaymentBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Reference number of the payment to be released |
 **release_action_dto** | [**\Ekstralys\VismaNetApi\Model\ReleasePaymentActionDto**](../Model/ReleasePaymentActionDto.md)| Contains the type of the payment |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleasePaymentActionResultDto**](../Model/ReleasePaymentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentVoidPaymentBypaymentNumber**
> \Ekstralys\VismaNetApi\Model\VoidPaymentActionResultDto paymentVoidPaymentBypaymentNumber($payment_number, $void_action_dto)

Void payment operation  Payment is deprecated, please use CustomerPayment instead.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_number = "payment_number_example"; // string | Reference number of the payment to be released
$void_action_dto = new \Ekstralys\VismaNetApi\Model\VoidPaymentActionDto(); // \Ekstralys\VismaNetApi\Model\VoidPaymentActionDto | Contains the type of the payment

try {
    $result = $apiInstance->paymentVoidPaymentBypaymentNumber($payment_number, $void_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentVoidPaymentBypaymentNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_number** | **string**| Reference number of the payment to be released |
 **void_action_dto** | [**\Ekstralys\VismaNetApi\Model\VoidPaymentActionDto**](../Model/VoidPaymentActionDto.md)| Contains the type of the payment |

### Return type

[**\Ekstralys\VismaNetApi\Model\VoidPaymentActionResultDto**](../Model/VoidPaymentActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

