# Ekstralys\VismaNetApi\SubaccountApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subaccountGetAllSubaccounts**](SubaccountApi.md#subaccountGetAllSubaccounts) | **GET** /controller/api/v1/subaccount | Get all SubAccounts - ScreenId&#x3D;GL203000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added force pagination.
[**subaccountGetSubaccountBysubAccountNumber**](SubaccountApi.md#subaccountGetSubaccountBysubAccountNumber) | **GET** /controller/api/v1/subaccount/{subAccountNumber} | Get a specific SubAccount
[**subaccountPost**](SubaccountApi.md#subaccountPost) | **POST** /controller/api/v1/subaccount | Create a Subaccount
[**subaccountPutBysubAccountNumber**](SubaccountApi.md#subaccountPutBysubAccountNumber) | **PUT** /controller/api/v1/subaccount/{subAccountNumber} | Update a specific Subaccount


# **subaccountGetAllSubaccounts**
> \Ekstralys\VismaNetApi\Model\SubAccountDto[] subaccountGetAllSubaccounts($last_modified_date_time, $last_modified_date_time_condition, $active, $page_number, $page_size)

Get all SubAccounts - ScreenId=GL203000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added force pagination.

Data for SubAccount

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.
$active = true; // bool | If the SubAccount is active
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected

try {
    $result = $apiInstance->subaccountGetAllSubaccounts($last_modified_date_time, $last_modified_date_time_condition, $active, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountGetAllSubaccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]
 **active** | **bool**| If the SubAccount is active | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SubAccountDto[]**](../Model/SubAccountDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountGetSubaccountBysubAccountNumber**
> \Ekstralys\VismaNetApi\Model\SubAccountDto subaccountGetSubaccountBysubAccountNumber($sub_account_number)

Get a specific SubAccount

Data for SubAccount

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_number = "sub_account_number_example"; // string | Identifies the SubAccount

try {
    $result = $apiInstance->subaccountGetSubaccountBysubAccountNumber($sub_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountGetSubaccountBysubAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_number** | **string**| Identifies the SubAccount |

### Return type

[**\Ekstralys\VismaNetApi\Model\SubAccountDto**](../Model/SubAccountDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountPost**
> object subaccountPost($sub_account_update_dto)

Create a Subaccount

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_update_dto = new \Ekstralys\VismaNetApi\Model\SubAccountUpdateDto(); // \Ekstralys\VismaNetApi\Model\SubAccountUpdateDto | Defines the data for Subaccount to create

try {
    $result = $apiInstance->subaccountPost($sub_account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_update_dto** | [**\Ekstralys\VismaNetApi\Model\SubAccountUpdateDto**](../Model/SubAccountUpdateDto.md)| Defines the data for Subaccount to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountPutBysubAccountNumber**
> object subaccountPutBysubAccountNumber($sub_account_number, $sub_account_update_dto)

Update a specific Subaccount

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_number = "sub_account_number_example"; // string | Identifies the Subaccount to update
$sub_account_update_dto = new \Ekstralys\VismaNetApi\Model\SubAccountUpdateDto(); // \Ekstralys\VismaNetApi\Model\SubAccountUpdateDto | Defines the data for the Subaccount to update

try {
    $result = $apiInstance->subaccountPutBysubAccountNumber($sub_account_number, $sub_account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountPutBysubAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_number** | **string**| Identifies the Subaccount to update |
 **sub_account_update_dto** | [**\Ekstralys\VismaNetApi\Model\SubAccountUpdateDto**](../Model/SubAccountUpdateDto.md)| Defines the data for the Subaccount to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

