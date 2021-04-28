# Ekstralys\VismaNetApi\VatZoneApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatZoneGetVatZoneByvatZoneId**](VatZoneApi.md#vatZoneGetVatZoneByvatZoneId) | **GET** /controller/api/v1/vatZone/{vatZoneId} | Get a specific Vat Zone
[**vatZoneGetVatZones**](VatZoneApi.md#vatZoneGetVatZones) | **GET** /controller/api/v1/vatZone | Get Tax Zones - ScreenId&#x3D;TX206000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size


# **vatZoneGetVatZoneByvatZoneId**
> \Ekstralys\VismaNetApi\Model\VatZoneDto vatZoneGetVatZoneByvatZoneId($vat_zone_id)

Get a specific Vat Zone

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

$apiInstance = new Ekstralys\VismaNetApi\Api\VatZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_zone_id = "vat_zone_id_example"; // string | Identifies the Vat Zone

try {
    $result = $apiInstance->vatZoneGetVatZoneByvatZoneId($vat_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatZoneApi->vatZoneGetVatZoneByvatZoneId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_zone_id** | **string**| Identifies the Vat Zone |

### Return type

[**\Ekstralys\VismaNetApi\Model\VatZoneDto**](../Model/VatZoneDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatZoneGetVatZones**
> \Ekstralys\VismaNetApi\Model\VatZoneDto[] vatZoneGetVatZones($page_number, $page_size)

Get Tax Zones - ScreenId=TX206000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

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

$apiInstance = new Ekstralys\VismaNetApi\Api\VatZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->vatZoneGetVatZones($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatZoneApi->vatZoneGetVatZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\VatZoneDto[]**](../Model/VatZoneDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

