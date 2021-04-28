# Ekstralys\VismaNetApi\AccountApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountGetAll**](AccountApi.md#accountGetAll) | **GET** /controller/api/v1/account | Get a range of General ledger accounts - ScreenId&#x3D;GL202500
[**accountGetByaccountCd**](AccountApi.md#accountGetByaccountCd) | **GET** /controller/api/v1/account/{accountCd} | Get a specific Account - ScreenId&#x3D;GL202500
[**accountPost**](AccountApi.md#accountPost) | **POST** /controller/api/v1/account | Creates an account
[**accountPutByaccountCd**](AccountApi.md#accountPutByaccountCd) | **PUT** /controller/api/v1/account/{accountCd} | Updates an account


# **accountGetAll**
> \Ekstralys\VismaNetApi\Model\AccountDto[] accountGetAll($active, $greater_than_value, $public_code, $external_code1, $external_code2, $analysis_code, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition)

Get a range of General ledger accounts - ScreenId=GL202500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = true; // bool | Set to True to select active accounts.
$greater_than_value = "greater_than_value_example"; // string | Enter the from-value for Account no.
$public_code = 56; // int | Filter by the Public code 1, authorities mapped code to the account.
$external_code1 = "external_code1_example"; // string | Filter by External code 1 (field used for sorting and inquiries.)
$external_code2 = "external_code2_example"; // string | Filter by External code 2 (field used for sorting and inquiries.)
$analysis_code = "analysis_code_example"; // string | Filter by Analysis code (field used for sorting and inquiries.)
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of record. Use format: YYYY-MM-DD HH:MM (date and time) to filter by date
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | Values to be used for filtering lastModifiedDateTime value.

try {
    $result = $apiInstance->accountGetAll($active, $greater_than_value, $public_code, $external_code1, $external_code2, $analysis_code, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **bool**| Set to True to select active accounts. | [optional]
 **greater_than_value** | **string**| Enter the from-value for Account no. | [optional]
 **public_code** | **int**| Filter by the Public code 1, authorities mapped code to the account. | [optional]
 **external_code1** | **string**| Filter by External code 1 (field used for sorting and inquiries.) | [optional]
 **external_code2** | **string**| Filter by External code 2 (field used for sorting and inquiries.) | [optional]
 **analysis_code** | **string**| Filter by Analysis code (field used for sorting and inquiries.) | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of record. Use format: YYYY-MM-DD HH:MM (date and time) to filter by date | [optional]
 **last_modified_date_time_condition** | **string**| Values to be used for filtering lastModifiedDateTime value. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\AccountDto[]**](../Model/AccountDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetByaccountCd**
> \Ekstralys\VismaNetApi\Model\AccountDto accountGetByaccountCd($account_cd)

Get a specific Account - ScreenId=GL202500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_cd = "account_cd_example"; // string | Return the Information from Chart of account for the specified AccountCD

try {
    $result = $apiInstance->accountGetByaccountCd($account_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetByaccountCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_cd** | **string**| Return the Information from Chart of account for the specified AccountCD |

### Return type

[**\Ekstralys\VismaNetApi\Model\AccountDto**](../Model/AccountDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPost**
> object accountPost($account_update_dto)

Creates an account

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

$apiInstance = new Ekstralys\VismaNetApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_update_dto = new \Ekstralys\VismaNetApi\Model\AccountUpdateDto(); // \Ekstralys\VismaNetApi\Model\AccountUpdateDto | Defines the fields and field values to be set on created account

try {
    $result = $apiInstance->accountPost($account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_update_dto** | [**\Ekstralys\VismaNetApi\Model\AccountUpdateDto**](../Model/AccountUpdateDto.md)| Defines the fields and field values to be set on created account |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPutByaccountCd**
> object accountPutByaccountCd($account_cd, $account_update_dto)

Updates an account

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

$apiInstance = new Ekstralys\VismaNetApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_cd = "account_cd_example"; // string | Identifies the account to update
$account_update_dto = new \Ekstralys\VismaNetApi\Model\AccountUpdateDto(); // \Ekstralys\VismaNetApi\Model\AccountUpdateDto | Defines the fields and field values to be updated

try {
    $result = $apiInstance->accountPutByaccountCd($account_cd, $account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPutByaccountCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_cd** | **string**| Identifies the account to update |
 **account_update_dto** | [**\Ekstralys\VismaNetApi\Model\AccountUpdateDto**](../Model/AccountUpdateDto.md)| Defines the fields and field values to be updated |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

