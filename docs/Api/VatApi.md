# Ekstralys\VismaNetApi\VatApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatGetAllVats**](VatApi.md#vatGetAllVats) | **GET** /controller/api/v1/vat | Get a range of Vats - ScreenId&#x3D;TX205000
[**vatGetVatByvatId**](VatApi.md#vatGetVatByvatId) | **GET** /controller/api/v1/vat/{vatId} | Get a specific Vat - TX205000


# **vatGetAllVats**
> \Ekstralys\VismaNetApi\Model\VatInformationDto[] vatGetAllVats($number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition)

Get a range of Vats - ScreenId=TX205000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\VatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.
$last_modified_date_time = "last_modified_date_time_example"; // string | System retrieved information for state/condition. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | Value to be used for filtering lastModifiedDateTime value.

try {
    $result = $apiInstance->vatGetAllVats($number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatApi->vatGetAllVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **last_modified_date_time** | **string**| System retrieved information for state/condition. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds | [optional]
 **last_modified_date_time_condition** | **string**| Value to be used for filtering lastModifiedDateTime value. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\VatInformationDto[]**](../Model/VatInformationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatGetVatByvatId**
> \Ekstralys\VismaNetApi\Model\VatInformationDto vatGetVatByvatId($vat_id)

Get a specific Vat - TX205000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\VatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_id = "vat_id_example"; // string | Mandatory. Value for VatID to be looked for.

try {
    $result = $apiInstance->vatGetVatByvatId($vat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatApi->vatGetVatByvatId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_id** | **string**| Mandatory. Value for VatID to be looked for. |

### Return type

[**\Ekstralys\VismaNetApi\Model\VatInformationDto**](../Model/VatInformationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

