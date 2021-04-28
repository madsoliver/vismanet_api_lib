# Ekstralys\VismaNetApi\BudgetApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**budgetCreateBudget**](BudgetApi.md#budgetCreateBudget) | **POST** /controller/api/v1/budget | Create a Budget
[**budgetGetAll**](BudgetApi.md#budgetGetAll) | **GET** /controller/api/v1/budget | Get a range of General Ledger Budget Figures - ScreenId&#x3D;GL302010
[**budgetPut**](BudgetApi.md#budgetPut) | **PUT** /controller/api/v1/budget | Update a specific Budget


# **budgetCreateBudget**
> object budgetCreateBudget($budget)

Create a Budget

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

$apiInstance = new Ekstralys\VismaNetApi\Api\BudgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget = new \Ekstralys\VismaNetApi\Model\BudgetUpdateDto(); // \Ekstralys\VismaNetApi\Model\BudgetUpdateDto | Defines the data for the Budget to create

try {
    $result = $apiInstance->budgetCreateBudget($budget);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetApi->budgetCreateBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget** | [**\Ekstralys\VismaNetApi\Model\BudgetUpdateDto**](../Model/BudgetUpdateDto.md)| Defines the data for the Budget to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **budgetGetAll**
> \Ekstralys\VismaNetApi\Model\BudgetDto[] budgetGetAll($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $branch, $ledger, $financial_year, $subaccount)

Get a range of General Ledger Budget Figures - ScreenId=GL302010

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

$apiInstance = new Ekstralys\VismaNetApi\Api\BudgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | Filter by from date.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.
$order_by = "order_by_example"; // string | Order by Last modified date and time.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$branch = "branch_example"; // string | Mandatory. Filter by budgets Branch.
$ledger = "ledger_example"; // string | Mandatory. The budgets Ledger
$financial_year = "financial_year_example"; // string | The budgets financial year.
$subaccount = "subaccount_example"; // string | The Subaccount of the budget article.

try {
    $result = $apiInstance->budgetGetAll($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $branch, $ledger, $financial_year, $subaccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetApi->budgetGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**| Filter by from date. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **order_by** | **string**| Order by Last modified date and time. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **branch** | **string**| Mandatory. Filter by budgets Branch. | [optional]
 **ledger** | **string**| Mandatory. The budgets Ledger | [optional]
 **financial_year** | **string**| The budgets financial year. | [optional]
 **subaccount** | **string**| The Subaccount of the budget article. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\BudgetDto[]**](../Model/BudgetDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **budgetPut**
> object budgetPut($budget)

Update a specific Budget

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

$apiInstance = new Ekstralys\VismaNetApi\Api\BudgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget = new \Ekstralys\VismaNetApi\Model\BudgetUpdateDto(); // \Ekstralys\VismaNetApi\Model\BudgetUpdateDto | Defines the data for the Budget to update

try {
    $result = $apiInstance->budgetPut($budget);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetApi->budgetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget** | [**\Ekstralys\VismaNetApi\Model\BudgetUpdateDto**](../Model/BudgetUpdateDto.md)| Defines the data for the Budget to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

