# Ekstralys\VismaNetApi\DiscountApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountDeleteBydiscountCodeseries**](DiscountApi.md#discountDeleteBydiscountCodeseries) | **DELETE** /controller/api/v1/discount/{discountCode}/{series} | 
[**discountGetDiscounts**](DiscountApi.md#discountGetDiscounts) | **GET** /controller/api/v1/discount | Get a range of discounts - ScreenId&#x3D;AR209500
[**discountPost**](DiscountApi.md#discountPost) | **POST** /controller/api/v1/discount | 
[**discountPutBydiscountCodeseries**](DiscountApi.md#discountPutBydiscountCodeseries) | **PUT** /controller/api/v1/discount/{discountCode}/{series} | 
[**discountUpdateDiscountsBydiscountCodeseries**](DiscountApi.md#discountUpdateDiscountsBydiscountCodeseries) | **POST** /controller/api/v1/discount/{discountCode}/{series}/action/updateDiscounts | 
[**discountUpdateDiscountsBydiscountCodeseriesfilerDate**](DiscountApi.md#discountUpdateDiscountsBydiscountCodeseriesfilerDate) | **POST** /controller/api/v1/discount/{discountCode}/{series}/{filerDate}/action/updateDiscounts | 


# **discountDeleteBydiscountCodeseries**
> object discountDeleteBydiscountCodeseries($discount_code, $series)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_code = "discount_code_example"; // string | 
$series = "series_example"; // string | 

try {
    $result = $apiInstance->discountDeleteBydiscountCodeseries($discount_code, $series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountDeleteBydiscountCodeseries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |
 **series** | **string**|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountGetDiscounts**
> \Ekstralys\VismaNetApi\Model\BasePaginationDtoDiscountDto discountGetDiscounts($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $discount_code, $series, $page_number, $page_size)

Get a range of discounts - ScreenId=AR209500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
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
$series = "series_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->discountGetDiscounts($last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $discount_code, $series, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountGetDiscounts: ', $e->getMessage(), PHP_EOL;
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
 **series** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\BasePaginationDtoDiscountDto**](../Model/BasePaginationDtoDiscountDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountPost**
> object discountPost($discount_update_dto)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_update_dto = new \Ekstralys\VismaNetApi\Model\DiscountUpdateDto(); // \Ekstralys\VismaNetApi\Model\DiscountUpdateDto | 

try {
    $result = $apiInstance->discountPost($discount_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_update_dto** | [**\Ekstralys\VismaNetApi\Model\DiscountUpdateDto**](../Model/DiscountUpdateDto.md)|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountPutBydiscountCodeseries**
> object discountPutBydiscountCodeseries($discount_code, $series, $discount_update_dto)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_code = "discount_code_example"; // string | 
$series = "series_example"; // string | 
$discount_update_dto = new \Ekstralys\VismaNetApi\Model\DiscountUpdateDto(); // \Ekstralys\VismaNetApi\Model\DiscountUpdateDto | 

try {
    $result = $apiInstance->discountPutBydiscountCodeseries($discount_code, $series, $discount_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountPutBydiscountCodeseries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |
 **series** | **string**|  |
 **discount_update_dto** | [**\Ekstralys\VismaNetApi\Model\DiscountUpdateDto**](../Model/DiscountUpdateDto.md)|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountUpdateDiscountsBydiscountCodeseries**
> \Ekstralys\VismaNetApi\Model\UpdateDiscountsActionResultDto discountUpdateDiscountsBydiscountCodeseries($discount_code, $series)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_code = "discount_code_example"; // string | 
$series = "series_example"; // string | 

try {
    $result = $apiInstance->discountUpdateDiscountsBydiscountCodeseries($discount_code, $series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountUpdateDiscountsBydiscountCodeseries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |
 **series** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\UpdateDiscountsActionResultDto**](../Model/UpdateDiscountsActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountUpdateDiscountsBydiscountCodeseriesfilerDate**
> \Ekstralys\VismaNetApi\Model\UpdateDiscountsActionResultDto discountUpdateDiscountsBydiscountCodeseriesfilerDate($discount_code, $series, $filter_date, $filer_date)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_code = "discount_code_example"; // string | 
$series = "series_example"; // string | 
$filter_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$filer_date = "filer_date_example"; // string | 

try {
    $result = $apiInstance->discountUpdateDiscountsBydiscountCodeseriesfilerDate($discount_code, $series, $filter_date, $filer_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountUpdateDiscountsBydiscountCodeseriesfilerDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |
 **series** | **string**|  |
 **filter_date** | **\DateTime**|  |
 **filer_date** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\UpdateDiscountsActionResultDto**](../Model/UpdateDiscountsActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

