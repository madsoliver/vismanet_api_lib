# Ekstralys\VismaNetApi\KitAssemblyApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kitAssemblyDeleteBytyperefNo**](KitAssemblyApi.md#kitAssemblyDeleteBytyperefNo) | **DELETE** /controller/api/v1/kitassembly/{type}/{refNo} | Delete a specific Kit Assembly Document
[**kitAssemblyGetKitAssemblies**](KitAssemblyApi.md#kitAssemblyGetKitAssemblies) | **GET** /controller/api/v1/kitassembly | Get a range of Kit Assemblies - ScreenId &#x3D; IN307000
[**kitAssemblyGetKitAssemblyBytyperefNo**](KitAssemblyApi.md#kitAssemblyGetKitAssemblyBytyperefNo) | **GET** /controller/api/v1/kitassembly/{type}/{refNo} | Get a Kit Assembly - ScreenId &#x3D; IN307000
[**kitAssemblyPost**](KitAssemblyApi.md#kitAssemblyPost) | **POST** /controller/api/v1/kitassembly | Creates a Kit Assembly
[**kitAssemblyPutBytyperefNo**](KitAssemblyApi.md#kitAssemblyPutBytyperefNo) | **PUT** /controller/api/v1/kitassembly/{type}/{refNo} | Updates a specific Kit Assembly document
[**kitAssemblyReleaseKitAssemblyBytyperefNo**](KitAssemblyApi.md#kitAssemblyReleaseKitAssemblyBytyperefNo) | **POST** /controller/api/v1/kitassembly/{type}/{refNo}/action/release | Release Kit Assembly


# **kitAssemblyDeleteBytyperefNo**
> object kitAssemblyDeleteBytyperefNo($type, $ref_no)

Delete a specific Kit Assembly Document

Response Message has StatusCode NoContent if DELETE operation succeed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Kit Assembly Type
$ref_no = "ref_no_example"; // string | Kit Assembly Ref No

try {
    $result = $apiInstance->kitAssemblyDeleteBytyperefNo($type, $ref_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyDeleteBytyperefNo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Kit Assembly Type |
 **ref_no** | **string**| Kit Assembly Ref No |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitAssemblyGetKitAssemblies**
> \Ekstralys\VismaNetApi\Model\BasePaginationDtoKitAssemblyDto kitAssemblyGetKitAssemblies($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $type, $ref_no, $page_number, $page_size)

Get a range of Kit Assemblies - ScreenId = IN307000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | System retrieved information for created date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System retrieved information for state/condition.
$type = "type_example"; // string | 
$ref_no = "ref_no_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->kitAssemblyGetKitAssemblies($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $type, $ref_no, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyGetKitAssemblies: ', $e->getMessage(), PHP_EOL;
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
 **type** | **string**|  | [optional]
 **ref_no** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\BasePaginationDtoKitAssemblyDto**](../Model/BasePaginationDtoKitAssemblyDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitAssemblyGetKitAssemblyBytyperefNo**
> \Ekstralys\VismaNetApi\Model\KitAssemblyDto kitAssemblyGetKitAssemblyBytyperefNo($type, $ref_no)

Get a Kit Assembly - ScreenId = IN307000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Kit Assembly Type
$ref_no = "ref_no_example"; // string | Kit Assembly Ref No

try {
    $result = $apiInstance->kitAssemblyGetKitAssemblyBytyperefNo($type, $ref_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyGetKitAssemblyBytyperefNo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Kit Assembly Type |
 **ref_no** | **string**| Kit Assembly Ref No |

### Return type

[**\Ekstralys\VismaNetApi\Model\KitAssemblyDto**](../Model/KitAssemblyDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitAssemblyPost**
> object kitAssemblyPost($kit_assembly_update_dto)

Creates a Kit Assembly

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_assembly_update_dto = new \Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto(); // \Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto | Defines the data for the Kit Assembly to create

try {
    $result = $apiInstance->kitAssemblyPost($kit_assembly_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_assembly_update_dto** | [**\Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto**](../Model/KitAssemblyUpdateDto.md)| Defines the data for the Kit Assembly to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitAssemblyPutBytyperefNo**
> object kitAssemblyPutBytyperefNo($type, $ref_no, $kit_assembly_update_dto)

Updates a specific Kit Assembly document

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Kit Assembly Type
$ref_no = "ref_no_example"; // string | Kit Assembly Ref No
$kit_assembly_update_dto = new \Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto(); // \Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto | The data to update for the Kit Assembly

try {
    $result = $apiInstance->kitAssemblyPutBytyperefNo($type, $ref_no, $kit_assembly_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyPutBytyperefNo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Kit Assembly Type |
 **ref_no** | **string**| Kit Assembly Ref No |
 **kit_assembly_update_dto** | [**\Ekstralys\VismaNetApi\Model\KitAssemblyUpdateDto**](../Model/KitAssemblyUpdateDto.md)| The data to update for the Kit Assembly |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitAssemblyReleaseKitAssemblyBytyperefNo**
> object kitAssemblyReleaseKitAssemblyBytyperefNo($type, $ref_no)

Release Kit Assembly

The action result dto contains information about the result of running the action

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

$apiInstance = new Ekstralys\VismaNetApi\Api\KitAssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Kit Assembly Type
$ref_no = "ref_no_example"; // string | Kit Assembly Ref No

try {
    $result = $apiInstance->kitAssemblyReleaseKitAssemblyBytyperefNo($type, $ref_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitAssemblyApi->kitAssemblyReleaseKitAssemblyBytyperefNo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Kit Assembly Type |
 **ref_no** | **string**| Kit Assembly Ref No |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

