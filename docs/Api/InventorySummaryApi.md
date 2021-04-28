# Ekstralys\VismaNetApi\InventorySummaryApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventorySummaryGetAllInventorySummaryByinventoryNumber**](InventorySummaryApi.md#inventorySummaryGetAllInventorySummaryByinventoryNumber) | **GET** /controller/api/v1/inventorysummary/{inventoryNumber} | Get a range of InventorySummary - ScreenId&#x3D;IN401000


# **inventorySummaryGetAllInventorySummaryByinventoryNumber**
> \Ekstralys\VismaNetApi\Model\InventorySummaryDto[] inventorySummaryGetAllInventorySummaryByinventoryNumber($inventory_number, $warehouse, $location)

Get a range of InventorySummary - ScreenId=IN401000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\InventorySummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 
$warehouse = "warehouse_example"; // string | 
$location = "location_example"; // string | 

try {
    $result = $apiInstance->inventorySummaryGetAllInventorySummaryByinventoryNumber($inventory_number, $warehouse, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryApi->inventorySummaryGetAllInventorySummaryByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |
 **warehouse** | **string**|  | [optional]
 **location** | **string**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\InventorySummaryDto[]**](../Model/InventorySummaryDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

