# Ekstralys\VismaNetApi\DiscountCodeApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountCodeGetDiscountCodes**](DiscountCodeApi.md#discountCodeGetDiscountCodes) | **GET** /controller/api/v1/discountCode | Get a range of discount codes - ScreenId&#x3D;AR209000


# **discountCodeGetDiscountCodes**
> \Ekstralys\VismaNetApi\Model\BasePaginationDtoDiscountCodeDto discountCodeGetDiscountCodes($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $discount_code, $page_number, $page_size)

Get a range of discount codes - ScreenId=AR209000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | System retrieved information for created date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System retrieved information for state/condition.
$discount_code = "discount_code_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->discountCodeGetDiscountCodes($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $discount_code, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountCodeApi->discountCodeGetDiscountCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| System retrieved information for created date and time. | [optional]
 **created_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **discount_code** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\BasePaginationDtoDiscountCodeDto**](../Model/BasePaginationDtoDiscountCodeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

