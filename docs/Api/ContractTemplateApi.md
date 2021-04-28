# Ekstralys\VismaNetApi\ContractTemplateApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractTemplateGetAll**](ContractTemplateApi.md#contractTemplateGetAll) | **GET** /controller/api/v1/contractTemplate | Get a range of Contract Templates - ScreenId&#x3D;CT202000


# **contractTemplateGetAll**
> \Ekstralys\VismaNetApi\Model\ContractTemplateDto[] contractTemplateGetAll($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $expand_attributes)

Get a range of Contract Templates - ScreenId=CT202000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\ContractTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | 
$skip_records = 56; // int | 
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$expand_attributes = true; // bool | 

try {
    $result = $apiInstance->contractTemplateGetAll($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition, $expand_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTemplateApi->contractTemplateGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**|  | [optional]
 **skip_records** | **int**|  | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **expand_attributes** | **bool**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ContractTemplateDto[]**](../Model/ContractTemplateDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

