# Ekstralys\VismaNetApi\ServiceStatusApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allServiceStatus**](ServiceStatusApi.md#allServiceStatus) | **GET** /resources/v1/serviceStatus | Get the list of all available services


# **allServiceStatus**
> \Ekstralys\VismaNetApi\Model\StatusPageComponentDto[] allServiceStatus()

Get the list of all available services



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ekstralys\VismaNetApi\Api\ServiceStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allServiceStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceStatusApi->allServiceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\StatusPageComponentDto[]**](../Model/StatusPageComponentDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

