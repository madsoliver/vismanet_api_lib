# Ekstralys\VismaNetApi\ProjectApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectChangeProjectIDActionByinternalId**](ProjectApi.md#projectChangeProjectIDActionByinternalId) | **POST** /controller/api/v1/project/action/changeProjectId/{internalId} | Updates the ProjectID for the specified project
[**projectGetAll**](ProjectApi.md#projectGetAll) | **GET** /controller/api/v1/project | Get a range of Projects - ScreenId&#x3D;PM301000
[**projectGetByprojectID**](ProjectApi.md#projectGetByprojectID) | **GET** /controller/api/v1/project/{projectID} | Get a specific Project
[**projectGetTasks**](ProjectApi.md#projectGetTasks) | **GET** /controller/api/v1/project/tasks | Get all tasks for a project
[**projectPost**](ProjectApi.md#projectPost) | **POST** /controller/api/v1/project | Create an project
[**projectPutByinternalId**](ProjectApi.md#projectPutByinternalId) | **PUT** /controller/api/v1/project/internal/{internalId} | Update a specific Project
[**projectPutByprojectId**](ProjectApi.md#projectPutByprojectId) | **PUT** /controller/api/v1/project/{projectId} | Update a specific Project


# **projectChangeProjectIDActionByinternalId**
> \Ekstralys\VismaNetApi\Model\ChangeProjectIdActionResultDto projectChangeProjectIDActionByinternalId($internal_id, $change_project_id_action_dto)

Updates the ProjectID for the specified project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Internal identifier of the project for which the project ID will be changed
$change_project_id_action_dto = new \Ekstralys\VismaNetApi\Model\ChangeProjectIdActionDto(); // \Ekstralys\VismaNetApi\Model\ChangeProjectIdActionDto | Defines the new project ID for the poject

try {
    $result = $apiInstance->projectChangeProjectIDActionByinternalId($internal_id, $change_project_id_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectChangeProjectIDActionByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Internal identifier of the project for which the project ID will be changed |
 **change_project_id_action_dto** | [**\Ekstralys\VismaNetApi\Model\ChangeProjectIdActionDto**](../Model/ChangeProjectIdActionDto.md)| Defines the new project ID for the poject |

### Return type

[**\Ekstralys\VismaNetApi\Model\ChangeProjectIdActionResultDto**](../Model/ChangeProjectIdActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectGetAll**
> \Ekstralys\VismaNetApi\Model\ProjectDto[] projectGetAll($status, $system_template, $visible_in_ap, $start_date, $expand_attribute, $attributes, $task_status, $task_visible_in_ap, $task_visible_in_ar, $task_visible_in_ca, $task_visible_in_cr, $task_visible_in_ea, $task_visible_in_gl, $task_visible_in_in, $task_visible_in_po, $task_visible_in_so, $task_visible_in_ta, $non_project, $public_id, $restricted_employee, $restricted_user, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Projects - ScreenId=PM301000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | Use drop down and select Status.
$system_template = true; // bool | If the project is a template
$visible_in_ap = true; // bool | If the project is visible in AP
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Project’s start date
$expand_attribute = true; // bool | Expands project atributes
$attributes = "attributes_example"; // string | Identifies the attributes
$task_status = "task_status_example"; // string | Use drop down and select Status.
$task_visible_in_ap = true; // bool | If the project task is visible in the Supplier ledger
$task_visible_in_ar = true; // bool | If the project task is visible in the Customer ledger
$task_visible_in_ca = true; // bool | If the project task is visible in the Cash management workspace
$task_visible_in_cr = true; // bool | If the project task is visible in the CRM workspace
$task_visible_in_ea = true; // bool | If the project task is visible in the Expense workspace
$task_visible_in_gl = true; // bool | If the project task is visible in the General ledger workspace
$task_visible_in_in = true; // bool | If the project task is visible in the Inventory workspace
$task_visible_in_po = true; // bool | If the project task is visible in the Purchases workspace
$task_visible_in_so = true; // bool | If the project task is visible in the Sales workspace
$task_visible_in_ta = true; // bool | If the project task is visible in the Time entities workspace
$non_project = true; // bool | Set to true to return the non-project.
$public_id = "public_id_example"; // string | Identifies the Project by its publicId
$restricted_employee = "restricted_employee_example"; // string | ID of the employee where access restrictions apply
$restricted_user = 789; // int | Id of the odp user where access restrictions apply
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->projectGetAll($status, $system_template, $visible_in_ap, $start_date, $expand_attribute, $attributes, $task_status, $task_visible_in_ap, $task_visible_in_ar, $task_visible_in_ca, $task_visible_in_cr, $task_visible_in_ea, $task_visible_in_gl, $task_visible_in_in, $task_visible_in_po, $task_visible_in_so, $task_visible_in_ta, $non_project, $public_id, $restricted_employee, $restricted_user, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Use drop down and select Status. | [optional]
 **system_template** | **bool**| If the project is a template | [optional]
 **visible_in_ap** | **bool**| If the project is visible in AP | [optional]
 **start_date** | **\DateTime**| Project’s start date | [optional]
 **expand_attribute** | **bool**| Expands project atributes | [optional]
 **attributes** | **string**| Identifies the attributes | [optional]
 **task_status** | **string**| Use drop down and select Status. | [optional]
 **task_visible_in_ap** | **bool**| If the project task is visible in the Supplier ledger | [optional]
 **task_visible_in_ar** | **bool**| If the project task is visible in the Customer ledger | [optional]
 **task_visible_in_ca** | **bool**| If the project task is visible in the Cash management workspace | [optional]
 **task_visible_in_cr** | **bool**| If the project task is visible in the CRM workspace | [optional]
 **task_visible_in_ea** | **bool**| If the project task is visible in the Expense workspace | [optional]
 **task_visible_in_gl** | **bool**| If the project task is visible in the General ledger workspace | [optional]
 **task_visible_in_in** | **bool**| If the project task is visible in the Inventory workspace | [optional]
 **task_visible_in_po** | **bool**| If the project task is visible in the Purchases workspace | [optional]
 **task_visible_in_so** | **bool**| If the project task is visible in the Sales workspace | [optional]
 **task_visible_in_ta** | **bool**| If the project task is visible in the Time entities workspace | [optional]
 **non_project** | **bool**| Set to true to return the non-project. | [optional]
 **public_id** | [**string**](../Model/.md)| Identifies the Project by its publicId | [optional]
 **restricted_employee** | **string**| ID of the employee where access restrictions apply | [optional]
 **restricted_user** | **int**| Id of the odp user where access restrictions apply | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ProjectDto[]**](../Model/ProjectDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectGetByprojectID**
> \Ekstralys\VismaNetApi\Model\ProjectDto projectGetByprojectID($project_id)

Get a specific Project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | Identifies the Project

try {
    $result = $apiInstance->projectGetByprojectID($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectGetByprojectID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Identifies the Project |

### Return type

[**\Ekstralys\VismaNetApi\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectGetTasks**
> \Ekstralys\VismaNetApi\Model\TaskExtendedDto[] projectGetTasks($project_id, $public_id, $project_internal_id, $description, $task_cd, $task_cd_desc, $status, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $restricted_employee, $restricted_user, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get all tasks for a project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
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
    $result = $apiInstance->projectGetTasks($project_id, $public_id, $project_internal_id, $description, $task_cd, $task_cd_desc, $status, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $restricted_employee, $restricted_user, $greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectGetTasks: ', $e->getMessage(), PHP_EOL;
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

# **projectPost**
> object projectPost($project_update_dto)

Create an project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectUpdateDto | Define the data for the project to create

try {
    $result = $apiInstance->projectPost($project_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectUpdateDto**](../Model/ProjectUpdateDto.md)| Define the data for the project to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectPutByinternalId**
> object projectPutByinternalId($internal_id, $project_update_dto)

Update a specific Project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Identifies the Project by its internalID
$project_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectUpdateDto | Defines the data for the Project to update

try {
    $result = $apiInstance->projectPutByinternalId($internal_id, $project_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectPutByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Identifies the Project by its internalID |
 **project_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectUpdateDto**](../Model/ProjectUpdateDto.md)| Defines the data for the Project to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectPutByprojectId**
> object projectPutByprojectId($project_id, $project_update_dto)

Update a specific Project

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | Identifies the Project
$project_update_dto = new \Ekstralys\VismaNetApi\Model\ProjectUpdateDto(); // \Ekstralys\VismaNetApi\Model\ProjectUpdateDto | Defines the data for the Project to update

try {
    $result = $apiInstance->projectPutByprojectId($project_id, $project_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectPutByprojectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Identifies the Project |
 **project_update_dto** | [**\Ekstralys\VismaNetApi\Model\ProjectUpdateDto**](../Model/ProjectUpdateDto.md)| Defines the data for the Project to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

