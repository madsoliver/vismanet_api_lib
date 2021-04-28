# Ekstralys\VismaNetApi\EmployeeApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeeChangeEmployeeNrActionByinternalId**](EmployeeApi.md#employeeChangeEmployeeNrActionByinternalId) | **POST** /controller/api/v1/employee/action/changeEmployeeCd/{internalId} | Updates the EmployeeNr for the specified employee
[**employeeGetAllEmployees**](EmployeeApi.md#employeeGetAllEmployees) | **GET** /controller/api/v1/employee | Get a range of employees - ScreenId&#x3D;EP203000
[**employeeGetEmployeeByemployeeCd**](EmployeeApi.md#employeeGetEmployeeByemployeeCd) | **GET** /controller/api/v1/employee/{employeeCd} | Get a specific employee
[**employeeGetEmployeeExpenseClaimsByemployeeCd**](EmployeeApi.md#employeeGetEmployeeExpenseClaimsByemployeeCd) | **GET** /controller/api/v1/employee/{employeeCd}/expenseClaim | Get expense claims for a specific employee
[**employeeGetEmployeeExpenseReceiptsByemployeeCd**](EmployeeApi.md#employeeGetEmployeeExpenseReceiptsByemployeeCd) | **GET** /controller/api/v1/employee/{employeeCd}/expenseReceipt | Get expense receipts for a specific employee
[**employeeGetEmployeeTimeCardsByemployeeCd**](EmployeeApi.md#employeeGetEmployeeTimeCardsByemployeeCd) | **GET** /controller/api/v1/employee/{employeeCd}/timecards | Get a specific employee time cards


# **employeeChangeEmployeeNrActionByinternalId**
> \Ekstralys\VismaNetApi\Model\ChangeEmployeeNrActionResultDto employeeChangeEmployeeNrActionByinternalId($internal_id, $change_employee_nr_action_dto)

Updates the EmployeeNr for the specified employee

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Internal identifier of the employee for which the employee Nr will be changed
$change_employee_nr_action_dto = new \Ekstralys\VismaNetApi\Model\ChangeEmployeeNrActionDto(); // \Ekstralys\VismaNetApi\Model\ChangeEmployeeNrActionDto | Defines the new employee Nr for the employee

try {
    $result = $apiInstance->employeeChangeEmployeeNrActionByinternalId($internal_id, $change_employee_nr_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeChangeEmployeeNrActionByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Internal identifier of the employee for which the employee Nr will be changed |
 **change_employee_nr_action_dto** | [**\Ekstralys\VismaNetApi\Model\ChangeEmployeeNrActionDto**](../Model/ChangeEmployeeNrActionDto.md)| Defines the new employee Nr for the employee |

### Return type

[**\Ekstralys\VismaNetApi\Model\ChangeEmployeeNrActionResultDto**](../Model/ChangeEmployeeNrActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeGetAllEmployees**
> \Ekstralys\VismaNetApi\Model\EmployeeDto[] employeeGetAllEmployees($linked_to_user, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of employees - ScreenId=EP203000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linked_to_user = true; // bool | If the employee is linked to a user.
$greater_than_value = "greater_than_value_example"; // string | Greater-than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->employeeGetAllEmployees($linked_to_user, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetAllEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_to_user** | **bool**| If the employee is linked to a user. | [optional]
 **greater_than_value** | **string**| Greater-than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\EmployeeDto[]**](../Model/EmployeeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeGetEmployeeByemployeeCd**
> \Ekstralys\VismaNetApi\Model\EmployeeDto employeeGetEmployeeByemployeeCd($employee_cd)

Get a specific employee

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_cd = "employee_cd_example"; // string | Identifies the employee

try {
    $result = $apiInstance->employeeGetEmployeeByemployeeCd($employee_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetEmployeeByemployeeCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_cd** | **string**| Identifies the employee |

### Return type

[**\Ekstralys\VismaNetApi\Model\EmployeeDto**](../Model/EmployeeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeGetEmployeeExpenseClaimsByemployeeCd**
> \Ekstralys\VismaNetApi\Model\ExpenseClaimDto[] employeeGetEmployeeExpenseClaimsByemployeeCd($employee_cd, $status, $date, $customer, $department_id, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition)

Get expense claims for a specific employee

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_cd = "employee_cd_example"; // string | Identifies the employee
$status = "status_example"; // string | The status of the document.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the document
$customer = "customer_example"; // string | The customer from the document
$department_id = "department_id_example"; // string | Identifies the department
$greater_than_value = "greater_than_value_example"; // string | Greater-than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.

try {
    $result = $apiInstance->employeeGetEmployeeExpenseClaimsByemployeeCd($employee_cd, $status, $date, $customer, $department_id, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetEmployeeExpenseClaimsByemployeeCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_cd** | **string**| Identifies the employee |
 **status** | **string**| The status of the document. | [optional]
 **date** | **\DateTime**| The date of the document | [optional]
 **customer** | **string**| The customer from the document | [optional]
 **department_id** | **string**| Identifies the department | [optional]
 **greater_than_value** | **string**| Greater-than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ExpenseClaimDto[]**](../Model/ExpenseClaimDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeGetEmployeeExpenseReceiptsByemployeeCd**
> \Ekstralys\VismaNetApi\Model\ExpenseReceiptDto[] employeeGetEmployeeExpenseReceiptsByemployeeCd($employee_cd, $date, $date_condition, $inventory, $project, $claimed_by, $project_task, $invoiceable, $status, $customer)

Get expense receipts for a specific employee

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_cd = "employee_cd_example"; // string | Identifies the employee
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
    $result = $apiInstance->employeeGetEmployeeExpenseReceiptsByemployeeCd($employee_cd, $date, $date_condition, $inventory, $project, $claimed_by, $project_task, $invoiceable, $status, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetEmployeeExpenseReceiptsByemployeeCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_cd** | **string**| Identifies the employee |
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

# **employeeGetEmployeeTimeCardsByemployeeCd**
> \Ekstralys\VismaNetApi\Model\TimeCardDto[] employeeGetEmployeeTimeCardsByemployeeCd($employee_cd, $status, $week, $type, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition)

Get a specific employee time cards

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

$apiInstance = new Ekstralys\VismaNetApi\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_cd = "employee_cd_example"; // string | Identifies the employee
$status = "status_example"; // string | The status of the document.
$week = "week_example"; // string | Identifies the week number of the time card
$type = "type_example"; // string | Identifies the type of the time card (Normal, Corrected, NormalCorrected)
$greater_than_value = "greater_than_value_example"; // string | Greater-than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.

try {
    $result = $apiInstance->employeeGetEmployeeTimeCardsByemployeeCd($employee_cd, $status, $week, $type, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetEmployeeTimeCardsByemployeeCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_cd** | **string**| Identifies the employee |
 **status** | **string**| The status of the document. | [optional]
 **week** | **string**| Identifies the week number of the time card | [optional]
 **type** | **string**| Identifies the type of the time card (Normal, Corrected, NormalCorrected) | [optional]
 **greater_than_value** | **string**| Greater-than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\TimeCardDto[]**](../Model/TimeCardDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

