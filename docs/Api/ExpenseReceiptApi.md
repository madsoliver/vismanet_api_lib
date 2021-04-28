# Ekstralys\VismaNetApi\ExpenseReceiptApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseReceiptCreateAttachmentByreceiptNumber**](ExpenseReceiptApi.md#expenseReceiptCreateAttachmentByreceiptNumber) | **POST** /controller/api/v1/expenseReceipt/{receiptNumber}/attachment | Creates an attachment and associates it with an expense receipt. If the file already exists, a new revision is created.
[**expenseReceiptGetAll**](ExpenseReceiptApi.md#expenseReceiptGetAll) | **GET** /controller/api/v1/expenseReceipt | Get a range of Expense Receipts, a filter needs to be specified. ScreenId&#x3D;EP301020
[**expenseReceiptGetByreceiptNumber**](ExpenseReceiptApi.md#expenseReceiptGetByreceiptNumber) | **GET** /controller/api/v1/expenseReceipt/{receiptNumber} | Get a specific ExpenseReceipt
[**expenseReceiptPost**](ExpenseReceiptApi.md#expenseReceiptPost) | **POST** /controller/api/v1/expenseReceipt | Create a Expense Receipt
[**expenseReceiptPutByreceiptNumber**](ExpenseReceiptApi.md#expenseReceiptPutByreceiptNumber) | **PUT** /controller/api/v1/expenseReceipt/{receiptNumber} | Update a Expense Receipt


# **expenseReceiptCreateAttachmentByreceiptNumber**
> object expenseReceiptCreateAttachmentByreceiptNumber($receipt_number)

Creates an attachment and associates it with an expense receipt. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ExpenseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Identifies the credit note

try {
    $result = $apiInstance->expenseReceiptCreateAttachmentByreceiptNumber($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReceiptApi->expenseReceiptCreateAttachmentByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Identifies the credit note |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReceiptGetAll**
> \Ekstralys\VismaNetApi\Model\ExpenseReceiptDto[] expenseReceiptGetAll($date, $date_condition, $inventory, $project, $claimed_by, $project_task, $invoiceable, $status, $customer)

Get a range of Expense Receipts, a filter needs to be specified. ScreenId=EP301020

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ExpenseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | The date of the document
$date_condition = "date_condition_example"; // string | 
$inventory = "inventory_example"; // string | Identifies the inventory item from the document
$project = "project_example"; // string | Identifies the project from the document
$claimed_by = "claimed_by_example"; // string | Identifies the employee from the document
$project_task = "project_task_example"; // string | Filter on Task ID.
$invoiceable = true; // bool | If the document is invoiceable
$status = "status_example"; // string | The status of the document.
$customer = "customer_example"; // string | Identifies the customer from the document

try {
    $result = $apiInstance->expenseReceiptGetAll($date, $date_condition, $inventory, $project, $claimed_by, $project_task, $invoiceable, $status, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReceiptApi->expenseReceiptGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date of the document | [optional]
 **date_condition** | **string**|  | [optional]
 **inventory** | **string**| Identifies the inventory item from the document | [optional]
 **project** | **string**| Identifies the project from the document | [optional]
 **claimed_by** | **string**| Identifies the employee from the document | [optional]
 **project_task** | **string**| Filter on Task ID. | [optional]
 **invoiceable** | **bool**| If the document is invoiceable | [optional]
 **status** | **string**| The status of the document. | [optional]
 **customer** | **string**| Identifies the customer from the document | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ExpenseReceiptDto[]**](../Model/ExpenseReceiptDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReceiptGetByreceiptNumber**
> \Ekstralys\VismaNetApi\Model\ExpenseReceiptDto expenseReceiptGetByreceiptNumber($receipt_number)

Get a specific ExpenseReceipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ExpenseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Identifies the ExpenseReceipt

try {
    $result = $apiInstance->expenseReceiptGetByreceiptNumber($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReceiptApi->expenseReceiptGetByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Identifies the ExpenseReceipt |

### Return type

[**\Ekstralys\VismaNetApi\Model\ExpenseReceiptDto**](../Model/ExpenseReceiptDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReceiptPost**
> object expenseReceiptPost($expense_receipt_update_dto)

Create a Expense Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ExpenseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_receipt_update_dto = new \Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto(); // \Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto | Defines the data for the Expense Receipt to create

try {
    $result = $apiInstance->expenseReceiptPost($expense_receipt_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReceiptApi->expenseReceiptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_receipt_update_dto** | [**\Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto**](../Model/ExpenseReceiptUpdateDto.md)| Defines the data for the Expense Receipt to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReceiptPutByreceiptNumber**
> object expenseReceiptPutByreceiptNumber($receipt_number, $expense_receipt_update_dto)

Update a Expense Receipt

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ExpenseReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | Identifies the ExpenseReceipt
$expense_receipt_update_dto = new \Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto(); // \Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto | Defines the data for the Expense Receipt to create

try {
    $result = $apiInstance->expenseReceiptPutByreceiptNumber($receipt_number, $expense_receipt_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReceiptApi->expenseReceiptPutByreceiptNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| Identifies the ExpenseReceipt |
 **expense_receipt_update_dto** | [**\Ekstralys\VismaNetApi\Model\ExpenseReceiptUpdateDto**](../Model/ExpenseReceiptUpdateDto.md)| Defines the data for the Expense Receipt to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

