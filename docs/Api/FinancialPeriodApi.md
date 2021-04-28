# Ekstralys\VismaNetApi\FinancialPeriodApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financialPeriodGetAll**](FinancialPeriodApi.md#financialPeriodGetAll) | **GET** /controller/api/v1/financialPeriod | Get a range of Financial Periods - ScreenId&#x3D;GL201000
[**financialPeriodGetByfinancialPeriodId**](FinancialPeriodApi.md#financialPeriodGetByfinancialPeriodId) | **GET** /controller/api/v1/financialPeriod/{financialPeriodId} | Get a specific Financial Period - ScreenId&#x3D;GL201000


# **financialPeriodGetAll**
> \Ekstralys\VismaNetApi\Model\FinancialPeriodDto[] financialPeriodGetAll($greater_than_value, $number_to_read, $skip_records)

Get a range of Financial Periods - ScreenId=GL201000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\FinancialPeriodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | Enter the year or year-period lower than the first period or year you want, format YYYY or YYYYPP
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.

try {
    $result = $apiInstance->financialPeriodGetAll($greater_than_value, $number_to_read, $skip_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialPeriodApi->financialPeriodGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**| Enter the year or year-period lower than the first period or year you want, format YYYY or YYYYPP | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\FinancialPeriodDto[]**](../Model/FinancialPeriodDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialPeriodGetByfinancialPeriodId**
> \Ekstralys\VismaNetApi\Model\FinancialPeriodDto financialPeriodGetByfinancialPeriodId($financial_period_id)

Get a specific Financial Period - ScreenId=GL201000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\FinancialPeriodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financial_period_id = "financial_period_id_example"; // string | Returns the financial period for the specified FinancialPeriodId, format YYYYPP

try {
    $result = $apiInstance->financialPeriodGetByfinancialPeriodId($financial_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialPeriodApi->financialPeriodGetByfinancialPeriodId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financial_period_id** | **string**| Returns the financial period for the specified FinancialPeriodId, format YYYYPP |

### Return type

[**\Ekstralys\VismaNetApi\Model\FinancialPeriodDto**](../Model/FinancialPeriodDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

