# Ekstralys\VismaNetApi\ProjectBasicApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectBasicGetAll**](ProjectBasicApi.md#projectBasicGetAll) | **GET** /controller/api/v1/projectbasic | Get a range of Projects - ScreenId&#x3D;PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size


# **projectBasicGetAll**
> \Ekstralys\VismaNetApi\Model\ProjectBasicDto[] projectBasicGetAll($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Projects - ScreenId=PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ProjectBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | Select project status.
$description = "description_example"; // string | Project name/description
$project_id = "project_id_example"; // string | Identifies the Project
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Project's start date
$non_project = true; // bool | Set to true to return the non-project.
$project_id_desc = "project_id_desc_example"; // string | Identifies the Project by ID and description
$public_id = "public_id_example"; // string | Identifies the Project by its publicId
$restricted_employee = "restricted_employee_example"; // string | Id of the employee where access restrictions apply
$restricted_user = 789; // int | Id of the odp user where access restrictions apply
$visible_in_ap = true; // bool | If the project is visible in the Supplier ledger
$visible_in_ar = true; // bool | If the project is visible in the Customer ledger
$visible_in_ca = true; // bool | If the project is visible in the Cash management workspace
$visible_in_cr = true; // bool | If the project is visible in the CRM workspace
$visible_in_ea = true; // bool | If the project is visible in the Expense workspace
$visible_in_gl = true; // bool | If the project is visible in the General ledger workspace
$visible_in_in = true; // bool | If the project is visible in the Inventory workspace
$visible_in_po = true; // bool | If the project is visible in the Purchases workspace
$visible_in_so = true; // bool | If the project is visible in the Sales workspace
$visible_in_ta = true; // bool | If the project is visible in the Time entities workspace
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
    $result = $apiInstance->projectBasicGetAll($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBasicApi->projectBasicGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Select project status. | [optional]
 **description** | **string**| Project name/description | [optional]
 **project_id** | **string**| Identifies the Project | [optional]
 **start_date** | **\DateTime**| Project&#39;s start date | [optional]
 **non_project** | **bool**| Set to true to return the non-project. | [optional]
 **project_id_desc** | **string**| Identifies the Project by ID and description | [optional]
 **public_id** | [**string**](../Model/.md)| Identifies the Project by its publicId | [optional]
 **restricted_employee** | **string**| Id of the employee where access restrictions apply | [optional]
 **restricted_user** | **int**| Id of the odp user where access restrictions apply | [optional]
 **visible_in_ap** | **bool**| If the project is visible in the Supplier ledger | [optional]
 **visible_in_ar** | **bool**| If the project is visible in the Customer ledger | [optional]
 **visible_in_ca** | **bool**| If the project is visible in the Cash management workspace | [optional]
 **visible_in_cr** | **bool**| If the project is visible in the CRM workspace | [optional]
 **visible_in_ea** | **bool**| If the project is visible in the Expense workspace | [optional]
 **visible_in_gl** | **bool**| If the project is visible in the General ledger workspace | [optional]
 **visible_in_in** | **bool**| If the project is visible in the Inventory workspace | [optional]
 **visible_in_po** | **bool**| If the project is visible in the Purchases workspace | [optional]
 **visible_in_so** | **bool**| If the project is visible in the Sales workspace | [optional]
 **visible_in_ta** | **bool**| If the project is visible in the Time entities workspace | [optional]
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

[**\Ekstralys\VismaNetApi\Model\ProjectBasicDto[]**](../Model/ProjectBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

