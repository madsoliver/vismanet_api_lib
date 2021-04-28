# Ekstralys\VismaNetApi\CustomerContractApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerContractActivateContractBycontractId**](CustomerContractApi.md#customerContractActivateContractBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/activateContract | Activate contract operation
[**customerContractActivateUpgradeBycontractId**](CustomerContractApi.md#customerContractActivateUpgradeBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/activateUpgrade | Activate upgrade contract operation
[**customerContractCreateCustomerContract**](CustomerContractApi.md#customerContractCreateCustomerContract) | **POST** /controller/api/v1/customerContract | Create a CustomerContract
[**customerContractGetAll**](CustomerContractApi.md#customerContractGetAll) | **GET** /controller/api/v1/customerContract | Get a range of Customer Contracts, a filter needs to be specified - ScreenId&#x3D;CT301000
[**customerContractGetCustomerContractBycontractId**](CustomerContractApi.md#customerContractGetCustomerContractBycontractId) | **GET** /controller/api/v1/customerContract/{contractId} | Get a specific Customer Contract
[**customerContractGetCustomerContractDetailsBycontractId**](CustomerContractApi.md#customerContractGetCustomerContractDetailsBycontractId) | **GET** /controller/api/v1/customerContract/{contractId}/details | Get a specific Customer Contract Details
[**customerContractGetCustomerContractRecurringSummaryBycontractId**](CustomerContractApi.md#customerContractGetCustomerContractRecurringSummaryBycontractId) | **GET** /controller/api/v1/customerContract/{contractId}/recurringSummary | Get a specific Customer Contract Recurring Summary
[**customerContractGetCustomerContractSummaryBycontractId**](CustomerContractApi.md#customerContractGetCustomerContractSummaryBycontractId) | **GET** /controller/api/v1/customerContract/{contractId}/summary | Get a specific Customer Contract Summary
[**customerContractPutBycontractId**](CustomerContractApi.md#customerContractPutBycontractId) | **PUT** /controller/api/v1/customerContract/{contractId} | Update a specific CustomerContract
[**customerContractSetupAndActivateContractBycontractId**](CustomerContractApi.md#customerContractSetupAndActivateContractBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/setupAndActivateContract | Setup and Activate contract operation
[**customerContractSetupContractBycontractId**](CustomerContractApi.md#customerContractSetupContractBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/setupContract | Setup contract operation
[**customerContractTerminateContractBycontractId**](CustomerContractApi.md#customerContractTerminateContractBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/terminateContract | Terminate contract operation
[**customerContractUpgradeContractBycontractId**](CustomerContractApi.md#customerContractUpgradeContractBycontractId) | **POST** /controller/api/v1/customerContract/{contractId}/action/upgradeContract | Upgrade contract operation


# **customerContractActivateContractBycontractId**
> object customerContractActivateContractBycontractId($contract_id, $activation_date)

Activate contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be activated
$activation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional Activation Date

try {
    $result = $apiInstance->customerContractActivateContractBycontractId($contract_id, $activation_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractActivateContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be activated |
 **activation_date** | **\DateTime**| Optional Activation Date | [optional]

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractActivateUpgradeBycontractId**
> object customerContractActivateUpgradeBycontractId($contract_id, $activation_date)

Activate upgrade contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be activated
$activation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional Activation Date

try {
    $result = $apiInstance->customerContractActivateUpgradeBycontractId($contract_id, $activation_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractActivateUpgradeBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be activated |
 **activation_date** | **\DateTime**| Optional Activation Date | [optional]

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractCreateCustomerContract**
> object customerContractCreateCustomerContract($customer_contract)

Create a CustomerContract

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_contract = new \Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto | Defines the data for the CustomerContract to create

try {
    $result = $apiInstance->customerContractCreateCustomerContract($customer_contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractCreateCustomerContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_contract** | [**\Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto**](../Model/CustomerContractUpdateDto.md)| Defines the data for the CustomerContract to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractGetAll**
> \Ekstralys\VismaNetApi\Model\CustomerContractDto[] customerContractGetAll($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $contract_template, $status, $customer, $expand_summary, $expand_details, $attributes, $expand_attributes)

Get a range of Customer Contracts, a filter needs to be specified - ScreenId=CT301000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | 
$skip_records = 56; // int | 
$order_by = "order_by_example"; // string | 
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$contract_template = "contract_template_example"; // string | 
$status = "status_example"; // string | 
$customer = "customer_example"; // string | 
$expand_summary = true; // bool | 
$expand_details = true; // bool | 
$attributes = "attributes_example"; // string | 
$expand_attributes = true; // bool | 

try {
    $result = $apiInstance->customerContractGetAll($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $contract_template, $status, $customer, $expand_summary, $expand_details, $attributes, $expand_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**|  | [optional]
 **skip_records** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **contract_template** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **customer** | **string**|  | [optional]
 **expand_summary** | **bool**|  | [optional]
 **expand_details** | **bool**|  | [optional]
 **attributes** | **string**|  | [optional]
 **expand_attributes** | **bool**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerContractDto[]**](../Model/CustomerContractDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractGetCustomerContractBycontractId**
> \Ekstralys\VismaNetApi\Model\CustomerContractDto customerContractGetCustomerContractBycontractId($contract_id)

Get a specific Customer Contract

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Identifies the customer contract

try {
    $result = $apiInstance->customerContractGetCustomerContractBycontractId($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractGetCustomerContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Identifies the customer contract |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerContractDto**](../Model/CustomerContractDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractGetCustomerContractDetailsBycontractId**
> \Ekstralys\VismaNetApi\Model\CustomerContractDetailsDto customerContractGetCustomerContractDetailsBycontractId($contract_id)

Get a specific Customer Contract Details

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Identifies the customer contract

try {
    $result = $apiInstance->customerContractGetCustomerContractDetailsBycontractId($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractGetCustomerContractDetailsBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Identifies the customer contract |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerContractDetailsDto**](../Model/CustomerContractDetailsDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractGetCustomerContractRecurringSummaryBycontractId**
> \Ekstralys\VismaNetApi\Model\CustomerContractRecurringSummaryDto customerContractGetCustomerContractRecurringSummaryBycontractId($contract_id)

Get a specific Customer Contract Recurring Summary

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Identifies the customer contract

try {
    $result = $apiInstance->customerContractGetCustomerContractRecurringSummaryBycontractId($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractGetCustomerContractRecurringSummaryBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Identifies the customer contract |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerContractRecurringSummaryDto**](../Model/CustomerContractRecurringSummaryDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractGetCustomerContractSummaryBycontractId**
> \Ekstralys\VismaNetApi\Model\CustomerContractSummaryDto customerContractGetCustomerContractSummaryBycontractId($contract_id)

Get a specific Customer Contract Summary

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Identifies the customer contract

try {
    $result = $apiInstance->customerContractGetCustomerContractSummaryBycontractId($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractGetCustomerContractSummaryBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Identifies the customer contract |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerContractSummaryDto**](../Model/CustomerContractSummaryDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractPutBycontractId**
> object customerContractPutBycontractId($contract_id, $customer_contract)

Update a specific CustomerContract

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Identifies the CustomerContract to update
$customer_contract = new \Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto | Defines the data for the CustomerContract to update

try {
    $result = $apiInstance->customerContractPutBycontractId($contract_id, $customer_contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractPutBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Identifies the CustomerContract to update |
 **customer_contract** | [**\Ekstralys\VismaNetApi\Model\CustomerContractUpdateDto**](../Model/CustomerContractUpdateDto.md)| Defines the data for the CustomerContract to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractSetupAndActivateContractBycontractId**
> object customerContractSetupAndActivateContractBycontractId($contract_id, $activation_date)

Setup and Activate contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be setup and activated
$activation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional Activation Date

try {
    $result = $apiInstance->customerContractSetupAndActivateContractBycontractId($contract_id, $activation_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractSetupAndActivateContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be setup and activated |
 **activation_date** | **\DateTime**| Optional Activation Date | [optional]

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractSetupContractBycontractId**
> object customerContractSetupContractBycontractId($contract_id, $setup_date)

Setup contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be set up
$setup_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional Setup Date

try {
    $result = $apiInstance->customerContractSetupContractBycontractId($contract_id, $setup_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractSetupContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be set up |
 **setup_date** | **\DateTime**| Optional Setup Date | [optional]

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractTerminateContractBycontractId**
> object customerContractTerminateContractBycontractId($contract_id, $termination_date)

Terminate contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be terminated
$termination_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional Termination Date

try {
    $result = $apiInstance->customerContractTerminateContractBycontractId($contract_id, $termination_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractTerminateContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be terminated |
 **termination_date** | **\DateTime**| Optional Termination Date | [optional]

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerContractUpgradeContractBycontractId**
> object customerContractUpgradeContractBycontractId($contract_id)

Upgrade contract operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | Reference number of the customer contract to be upgraded

try {
    $result = $apiInstance->customerContractUpgradeContractBycontractId($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->customerContractUpgradeContractBycontractId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| Reference number of the customer contract to be upgraded |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

