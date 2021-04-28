# Ekstralys\VismaNetApi\KitSpecificationsApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kitSpecificationsGetAll**](KitSpecificationsApi.md#kitSpecificationsGetAll) | **GET** /controller/api/v1/KitSpecifications | Get a range of Kit Specifications - ScreenId &#x3D; IN209500
[**kitSpecificationsGetBykitInventoryID**](KitSpecificationsApi.md#kitSpecificationsGetBykitInventoryID) | **GET** /controller/api/v1/KitSpecifications/{kitInventoryID} | Get all revisions for a specific KitSpecification
[**kitSpecificationsGetBykitInventoryIDrevisionID**](KitSpecificationsApi.md#kitSpecificationsGetBykitInventoryIDrevisionID) | **GET** /controller/api/v1/KitSpecifications/{kitInventoryID}/{revisionID} | Get a specific KitSpecification
[**kitSpecificationsPost**](KitSpecificationsApi.md#kitSpecificationsPost) | **POST** /controller/api/v1/KitSpecifications | Creates a KitSpecification
[**kitSpecificationsPutBykitInventoryIDrevisionID**](KitSpecificationsApi.md#kitSpecificationsPutBykitInventoryIDrevisionID) | **PUT** /controller/api/v1/KitSpecifications/{kitInventoryID}/{revisionID} | Updates a specific KitSpecification


# **kitSpecificationsGetAll**
> \Ekstralys\VismaNetApi\Model\BasePaginationDtoKitSpecificationDto kitSpecificationsGetAll($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $kit_inventory_id, $revision_id, $page_number, $page_size)

Get a range of Kit Specifications - ScreenId = IN209500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 
$created_date_time = "created_date_time_example"; // string | 
$created_date_time_condition = "created_date_time_condition_example"; // string | 
$kit_inventory_id = "kit_inventory_id_example"; // string | 
$revision_id = "revision_id_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->kitSpecificationsGetAll($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $kit_inventory_id, $revision_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitSpecificationsApi->kitSpecificationsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]
 **created_date_time** | **string**|  | [optional]
 **created_date_time_condition** | **string**|  | [optional]
 **kit_inventory_id** | **string**|  | [optional]
 **revision_id** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\BasePaginationDtoKitSpecificationDto**](../Model/BasePaginationDtoKitSpecificationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitSpecificationsGetBykitInventoryID**
> \Ekstralys\VismaNetApi\Model\BasePaginationDtoKitSpecificationDto kitSpecificationsGetBykitInventoryID($kit_inventory_id)

Get all revisions for a specific KitSpecification

Data for the  INKitSpecHdr

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_inventory_id = "kit_inventory_id_example"; // string | kitInventoryID

try {
    $result = $apiInstance->kitSpecificationsGetBykitInventoryID($kit_inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitSpecificationsApi->kitSpecificationsGetBykitInventoryID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_inventory_id** | **string**| kitInventoryID |

### Return type

[**\Ekstralys\VismaNetApi\Model\BasePaginationDtoKitSpecificationDto**](../Model/BasePaginationDtoKitSpecificationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitSpecificationsGetBykitInventoryIDrevisionID**
> \Ekstralys\VismaNetApi\Model\KitSpecificationDto kitSpecificationsGetBykitInventoryIDrevisionID($kit_inventory_id, $revision_id)

Get a specific KitSpecification

Data for the  INKitSpecHdr

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_inventory_id = "kit_inventory_id_example"; // string | kitInventoryID
$revision_id = "revision_id_example"; // string | revisionID

try {
    $result = $apiInstance->kitSpecificationsGetBykitInventoryIDrevisionID($kit_inventory_id, $revision_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitSpecificationsApi->kitSpecificationsGetBykitInventoryIDrevisionID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_inventory_id** | **string**| kitInventoryID |
 **revision_id** | **string**| revisionID |

### Return type

[**\Ekstralys\VismaNetApi\Model\KitSpecificationDto**](../Model/KitSpecificationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitSpecificationsPost**
> object kitSpecificationsPost($kit_specification_update_dto)

Creates a KitSpecification

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_specification_update_dto = new \Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto(); // \Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto | Defines the data for the KitSpecification to create

try {
    $result = $apiInstance->kitSpecificationsPost($kit_specification_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitSpecificationsApi->kitSpecificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_specification_update_dto** | [**\Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto**](../Model/KitSpecificationUpdateDto.md)| Defines the data for the KitSpecification to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitSpecificationsPutBykitInventoryIDrevisionID**
> object kitSpecificationsPutBykitInventoryIDrevisionID($kit_inventory_id, $revision_id, $kit_specification_update_dto)

Updates a specific KitSpecification

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_inventory_id = "kit_inventory_id_example"; // string | kitInventoryID
$revision_id = "revision_id_example"; // string | revisionID
$kit_specification_update_dto = new \Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto(); // \Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto | The data to update for the KitSpecification

try {
    $result = $apiInstance->kitSpecificationsPutBykitInventoryIDrevisionID($kit_inventory_id, $revision_id, $kit_specification_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitSpecificationsApi->kitSpecificationsPutBykitInventoryIDrevisionID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_inventory_id** | **string**| kitInventoryID |
 **revision_id** | **string**| revisionID |
 **kit_specification_update_dto** | [**\Ekstralys\VismaNetApi\Model\KitSpecificationUpdateDto**](../Model/KitSpecificationUpdateDto.md)| The data to update for the KitSpecification |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

