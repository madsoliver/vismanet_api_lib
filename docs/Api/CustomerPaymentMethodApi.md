# Ekstralys\VismaNetApi\CustomerPaymentMethodApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerPaymentMethodCreateCustomerPaymentMethod**](CustomerPaymentMethodApi.md#customerPaymentMethodCreateCustomerPaymentMethod) | **POST** /controller/api/v1/customerpaymentmethod | Create a Customer payment method
[**customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId**](CustomerPaymentMethodApi.md#customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId) | **GET** /controller/api/v1/customerpaymentmethod/{customerId}/{customerPaymentMethodId} | Get one specific Customer payment method for one specific customer. ScreenId&#x3D;AR303010
[**customerPaymentMethodGetCustomerPaymentMethods**](CustomerPaymentMethodApi.md#customerPaymentMethodGetCustomerPaymentMethods) | **GET** /controller/api/v1/customerpaymentmethod | Get Customer payment methods
[**customerPaymentMethodGetCustomerPaymentMethodsBycustomerId**](CustomerPaymentMethodApi.md#customerPaymentMethodGetCustomerPaymentMethodsBycustomerId) | **GET** /controller/api/v1/customerpaymentmethod/{customerId} | Get all Customer payment methods for one specific customer. ScreenId&#x3D;AR303010 and AR303000
[**customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId**](CustomerPaymentMethodApi.md#customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId) | **PUT** /controller/api/v1/customerpaymentmethod/{customerId}/{customerPaymentMethodId} | Update a specific Customer payment method


# **customerPaymentMethodCreateCustomerPaymentMethod**
> object customerPaymentMethodCreateCustomerPaymentMethod($payment_method)

Create a Customer payment method

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerPaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method = new \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodCreateDto(); // \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodCreateDto | Defines the data for the Customer payment method to create

try {
    $result = $apiInstance->customerPaymentMethodCreateCustomerPaymentMethod($payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentMethodApi->customerPaymentMethodCreateCustomerPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | [**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodCreateDto**](../Model/CustomerPaymentMethodCreateDto.md)| Defines the data for the Customer payment method to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId**
> \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDto customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId($customer_id, $customer_payment_method_id)

Get one specific Customer payment method for one specific customer. ScreenId=AR303010

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerPaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Identifies the Customer
$customer_payment_method_id = "customer_payment_method_id_example"; // string | Identifies the Customer payment method

try {
    $result = $apiInstance->customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId($customer_id, $customer_payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentMethodApi->customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Identifies the Customer |
 **customer_payment_method_id** | **string**| Identifies the Customer payment method |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDto**](../Model/CustomerPaymentMethodDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentMethodGetCustomerPaymentMethods**
> \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodsDto[] customerPaymentMethodGetCustomerPaymentMethods($page_number, $page_size)

Get Customer payment methods

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerPaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerPaymentMethodGetCustomerPaymentMethods($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentMethodApi->customerPaymentMethodGetCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodsDto[]**](../Model/CustomerPaymentMethodsDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentMethodGetCustomerPaymentMethodsBycustomerId**
> \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDto[] customerPaymentMethodGetCustomerPaymentMethodsBycustomerId($customer_id, $page_number, $page_size)

Get all Customer payment methods for one specific customer. ScreenId=AR303010 and AR303000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerPaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Identifies the Customer
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerPaymentMethodGetCustomerPaymentMethodsBycustomerId($customer_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentMethodApi->customerPaymentMethodGetCustomerPaymentMethodsBycustomerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Identifies the Customer |
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDto[]**](../Model/CustomerPaymentMethodDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId**
> object customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId($customer_id, $customer_payment_method_id, $payment_method)

Update a specific Customer payment method

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerPaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Identifies the Customer
$customer_payment_method_id = "customer_payment_method_id_example"; // string | Identifies the Customer payment method to update
$payment_method = new \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodUpdateDto | Defines the data for the Customer payment method to update

try {
    $result = $apiInstance->customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId($customer_id, $customer_payment_method_id, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentMethodApi->customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Identifies the Customer |
 **customer_payment_method_id** | **string**| Identifies the Customer payment method to update |
 **payment_method** | [**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodUpdateDto**](../Model/CustomerPaymentMethodUpdateDto.md)| Defines the data for the Customer payment method to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

