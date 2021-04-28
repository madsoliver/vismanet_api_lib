# Ekstralys\VismaNetApi\ProjectTaskApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectTaskGetAllTasks**](ProjectTaskApi.md#projectTaskGetAllTasks) | **GET** /controller/api/v1/projecttask | 
[**projectTaskGetTaskByinternalId**](ProjectTaskApi.md#projectTaskGetTaskByinternalId) | **GET** /controller/api/v1/projecttask/{internalId} | 
[**projectTaskPostByinternalProjectId**](ProjectTaskApi.md#projectTaskPostByinternalProjectId) | **POST** /controller/api/v1/projecttask/{internalProjectId} | Create a Task
[**projectTaskPutByinternalId**](ProjectTaskApi.md#projectTaskPutByinternalId) | **PUT** /controller/api/v1/projecttask/{internalId} | Update a specific Task


# **projectTaskGetAllTasks**
> \Ekstralys\VismaNetApi\Model\TaskExtendedDto[] projectTaskGetAllTasks($project_id, $public_id, $project_internal_id, $description, $task_cd, $task_cd_desc, $status, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $restricted_employee, $restricted_user, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | Identifies the Project
$public_id = "public_id_example"; // string | Identifies the project by publicId
$project_internal_id = 56; // int | Identifies the project by internal id
$description = "description_example"; // string | Identifies the Project task description
$task_cd = "task_cd_example"; // string | Identifies the Project task ID
$task_cd_desc = "task_cd_desc_example"; // string | Identifies the Project task ID and description
$status = "status_example"; // string | The status of the document.
$visible_in_ap = true; // bool | If the project task is visible in the Supplier ledger
$visible_in_ar = true; // bool | If the project task is visible in the Customer ledger
$visible_in_ca = true; // bool | If the project task is visible in the Cash management workspace
$visible_in_cr = true; // bool | If the project task is visible in the CRM workspace
$visible_in_ea = true; // bool | If the project task is visible in the Expense workspace
$visible_in_gl = true; // bool | If the project task is visible in the General ledger workspace
$visible_in_in = true; // bool | If the project task is visible in the Inventory workspace
$visible_in_po = true; // bool | If the project task is visible in the Purchases workspace
$visible_in_so = true; // bool | If the project task is visible in the Sales workspace
$visible_in_ta = true; // bool | If the project task is visible in the Time entities workspace
$restricted_employee = "restricted_employee_example"; // string | Id of the employee where access restrictions apply
$restricted_user = 789; // int | Id of the Odp User where access restrictions apply
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->projectTaskGetAllTasks($project_id, $public_id, $project_internal_id, $description, $task_cd, $task_cd_desc, $status, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $restricted_employee, $restricted_user, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->projectTaskGetAllTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Identifies the Project | [optional]
 **public_id** | [**string**](../Model/.md)| Identifies the project by publicId | [optional]
 **project_internal_id** | **int**| Identifies the project by internal id | [optional]
 **description** | **string**| Identifies the Project task description | [optional]
 **task_cd** | **string**| Identifies the Project task ID | [optional]
 **task_cd_desc** | **string**| Identifies the Project task ID and description | [optional]
 **status** | **string**| The status of the document. | [optional]
 **visible_in_ap** | **bool**| If the project task is visible in the Supplier ledger | [optional]
 **visible_in_ar** | **bool**| If the project task is visible in the Customer ledger | [optional]
 **visible_in_ca** | **bool**| If the project task is visible in the Cash management workspace | [optional]
 **visible_in_cr** | **bool**| If the project task is visible in the CRM workspace | [optional]
 **visible_in_ea** | **bool**| If the project task is visible in the Expense workspace | [optional]
 **visible_in_gl** | **bool**| If the project task is visible in the General ledger workspace | [optional]
 **visible_in_in** | **bool**| If the project task is visible in the Inventory workspace | [optional]
 **visible_in_po** | **bool**| If the project task is visible in the Purchases workspace | [optional]
 **visible_in_so** | **bool**| If the project task is visible in the Sales workspace | [optional]
 **visible_in_ta** | **bool**| If the project task is visible in the Time entities workspace | [optional]
 **restricted_employee** | **string**| Id of the employee where access restrictions apply | [optional]
 **restricted_user** | **int**| Id of the Odp User where access restrictions apply | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\TaskExtendedDto[]**](../Model/TaskExtendedDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTaskGetTaskByinternalId**
> \Ekstralys\VismaNetApi\Model\TaskExtendedDto projectTaskGetTaskByinternalId($internal_id)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | 

try {
    $result = $apiInstance->projectTaskGetTaskByinternalId($internal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->projectTaskGetTaskByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\TaskExtendedDto**](../Model/TaskExtendedDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTaskPostByinternalProjectId**
> object projectTaskPostByinternalProjectId($internal_project_id, $project_task_update_dto)

Create a Task

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_project_id = 56; // int | Identifies the project by its internalID
$project_task_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto | Defines the data for the Task to update

try {
    $result = $apiInstance->projectTaskPostByinternalProjectId($internal_project_id, $project_task_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->projectTaskPostByinternalProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_project_id** | **int**| Identifies the project by its internalID |
 **project_task_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto**](../Model/ProjectTaskUpdateDto.md)| Defines the data for the Task to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectTaskPutByinternalId**
> object projectTaskPutByinternalId($internal_id, $project_task_update_dto)

Update a specific Task

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Identifies the task by its internalID
$project_task_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto | Defines the data for the Task to update

try {
    $result = $apiInstance->projectTaskPutByinternalId($internal_id, $project_task_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->projectTaskPutByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Identifies the task by its internalID |
 **project_task_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectTaskUpdateDto**](../Model/ProjectTaskUpdateDto.md)| Defines the data for the Task to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

