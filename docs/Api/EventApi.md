# Ekstralys\VismaNetApi\EventApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllEvents**](EventApi.md#getAllEvents) | **GET** /resources/v1/event | Get all events


# **getAllEvents**
> \Ekstralys\VismaNetApi\Model\EventDto[] getAllEvents()

Get all events

Lists the events from Visma.net for which users can subscribe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ekstralys\VismaNetApi\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\EventDto[]**](../Model/EventDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

