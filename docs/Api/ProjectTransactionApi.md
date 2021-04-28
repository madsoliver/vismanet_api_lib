# Ekstralys\VismaNetApi\ProjectTransactionApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectTransactionGetAll**](ProjectTransactionApi.md#projectTransactionGetAll) | **GET** /controller/api/v1/projecttransaction | Get a range of Project transaction documents - ScreenId&#x3D;PM304000
[**projectTransactionGetByrefNbr**](ProjectTransactionApi.md#projectTransactionGetByrefNbr) | **GET** /controller/api/v1/projecttransaction/{refNbr} | Get a specific Project transaction document
[**projectTransactionPost**](ProjectTransactionApi.md#projectTransactionPost) | **POST** /controller/api/v1/projecttransaction | Create a project transaction document and lines
[**projectTransactionPutByrefNbr**](ProjectTransactionApi.md#projectTransactionPutByrefNbr) | **PUT** /controller/api/v1/projecttransaction/{refNbr} | Update a specific Project transaction document


# **projectTransactionGetAll**
> \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentDto[] projectTransactionGetAll($module, $status, $project, $project_task, $billable, $branch, $date, $from_period, $to_period, $number_to_read, $skip_records, $expand_note, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Project transaction documents - ScreenId=PM304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module = "module_example"; // string | Select to filter on module; e.g. AR, AP, IN etc.
$status = "status_example"; // string | The status of the document.
$project = "project_example"; // string | Filter on project ID.
$project_task = "project_task_example"; // string | Filter on Task ID.
$billable = true; // bool | Filter invoiceable project tasks.
$branch = "branch_example"; // string | Filter on branch for the project transation.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the registration date for the project transaction.
$from_period = "from_period_example"; // string | Mandatory. Start date for the task.
$to_period = "to_period_example"; // string | Mandatory. End date for the task.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$expand_note = true; // bool | Expands project transaction notes
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->projectTransactionGetAll($module, $status, $project, $project_task, $billable, $branch, $date, $from_period, $to_period, $number_to_read, $skip_records, $expand_note, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTransactionApi->projectTransactionGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **module** | **string**| Select to filter on module; e.g. AR, AP, IN etc. | [optional]
 **status** | **string**| The status of the document. | [optional]
 **project** | **string**| Filter on project ID. | [optional]
 **project_task** | **string**| Filter on Task ID. | [optional]
 **billable** | **bool**| Filter invoiceable project tasks. | [optional]
 **branch** | **string**| Filter on branch for the project transation. | [optional]
 **date** | **\DateTime**| Filter on the registration date for the project transaction. | [optional]
 **from_period** | **string**| Mandatory. Start date for the task. | [optional]
 **to_period** | **string**| Mandatory. End date for the task. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **expand_note** | **bool**| Expands project transaction notes | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentDto[]**](../Model/ProjectTransactionDocumentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTransactionGetByrefNbr**
> \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentDto projectTransactionGetByrefNbr($ref_nbr)

Get a specific Project transaction document

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_nbr = "ref_nbr_example"; // string | Identifies the project transaction document

try {
    $result = $apiInstance->projectTransactionGetByrefNbr($ref_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTransactionApi->projectTransactionGetByrefNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_nbr** | **string**| Identifies the project transaction document |

### Return type

[**\Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentDto**](../Model/ProjectTransactionDocumentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTransactionPost**
> object projectTransactionPost($project_transaction_document_update_dto)

Create a project transaction document and lines

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_transaction_document_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto | Define the data for the project transaction to create

try {
    $result = $apiInstance->projectTransactionPost($project_transaction_document_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTransactionApi->projectTransactionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_transaction_document_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto**](../Model/ProjectTransactionDocumentUpdateDto.md)| Define the data for the project transaction to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTransactionPutByrefNbr**
> object projectTransactionPutByrefNbr($ref_nbr, $project_transaction_document_update_dto)

Update a specific Project transaction document

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_nbr = "ref_nbr_example"; // string | Identifies the Project transaction document to update
$project_transaction_document_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto | Defines the data for the Project transaction document to update

try {
    $result = $apiInstance->projectTransactionPutByrefNbr($ref_nbr, $project_transaction_document_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTransactionApi->projectTransactionPutByrefNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_nbr** | **string**| Identifies the Project transaction document to update |
 **project_transaction_document_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectTransactionDocumentUpdateDto**](../Model/ProjectTransactionDocumentUpdateDto.md)| Defines the data for the Project transaction document to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

