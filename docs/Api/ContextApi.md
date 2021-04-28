# Ekstralys\VismaNetApi\ContextApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableContexts**](ContextApi.md#getAvailableContexts) | **GET** /resources/v1/context | Get the companies available for this token.
[**getCompanyInfo**](ContextApi.md#getCompanyInfo) | **GET** /resources/v1/context/{companyId} | Get company details by company ID.
[**getUserInfo**](ContextApi.md#getUserInfo) | **GET** /resources/v1/context/userdetails | Get the user details available for this token.


# **getAvailableContexts**
> \Ekstralys\VismaNetApi\Model\ContextInformation[] getAvailableContexts()

Get the companies available for this token.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableContexts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->getAvailableContexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\ContextInformation[]**](../Model/ContextInformation.md)

### Authorization

[vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyInfo**
> \Ekstralys\VismaNetApi\Model\CompanyDto getCompanyInfo($company_id)

Get company details by company ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 789; // int | 

try {
    $result = $apiInstance->getCompanyInfo($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->getCompanyInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\CompanyDto**](../Model/CompanyDto.md)

### Authorization

[vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInfo**
> \Ekstralys\VismaNetApi\Model\UserDetailsDto getUserInfo()

Get the user details available for this token.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\ContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\UserDetailsDto**](../Model/UserDetailsDto.md)

### Authorization

[vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

