# Ekstralys\VismaNetApi\SecurityApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableUserContexts**](SecurityApi.md#getAvailableUserContexts) | **GET** /security/api/v1/token/usercontexts | Get the companies available for this token.
[**revokeSecurityToken**](SecurityApi.md#revokeSecurityToken) | **DELETE** /security/api/v1/token | 
[**testConnection**](SecurityApi.md#testConnection) | **GET** /security/api/v1/testconnection | Test connection


# **getAvailableUserContexts**
> \Ekstralys\VismaNetApi\Model\ContextInformation[] getAvailableUserContexts($authorization)

Get the companies available for this token.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->getAvailableUserContexts($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getAvailableUserContexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ContextInformation[]**](../Model/ContextInformation.md)

### Authorization

[vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeSecurityToken**
> revokeSecurityToken($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ekstralys\VismaNetApi\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | 

try {
    $apiInstance->revokeSecurityToken($authorization);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->revokeSecurityToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testConnection**
> string testConnection()

Test connection

Returns \"OK\" as plain text if the test connection succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ekstralys\VismaNetApi\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->testConnection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->testConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

