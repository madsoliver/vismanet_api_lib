# Ekstralys\VismaNetApi\NotificationApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findByNotificationDateOrEventType**](NotificationApi.md#findByNotificationDateOrEventType) | **GET** /resources/v1/notification | Get notifications filtered by event type and/or date.
[**getNotificationInfo**](NotificationApi.md#getNotificationInfo) | **GET** /resources/v1/notification/{notificationId} | Get notification details by notification ID.
[**getRetryNotificationList**](NotificationApi.md#getRetryNotificationList) | **GET** /resources/v1/notification/failed | Get failed notifications filtered by event type and/or date.


# **findByNotificationDateOrEventType**
> \Ekstralys\VismaNetApi\Model\NotificationDto findByNotificationDateOrEventType($event_type, $date_from, $date_to, $page_number, $page_size)

Get notifications filtered by event type and/or date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = "event_type_example"; // string | 
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Use format: YYYY-MM-DD HH:mm:ss
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Use format: YYYY-MM-DD HH:mm:ss
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->findByNotificationDateOrEventType($event_type, $date_from, $date_to, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->findByNotificationDateOrEventType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**|  | [optional]
 **date_from** | **\DateTime**| Use format: YYYY-MM-DD HH:mm:ss | [optional]
 **date_to** | **\DateTime**| Use format: YYYY-MM-DD HH:mm:ss | [optional]
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\NotificationDto**](../Model/NotificationDto.md)

### Authorization

[ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationInfo**
> \Ekstralys\VismaNetApi\Model\NotificationReceivedDto getNotificationInfo($notification_id)

Get notification details by notification ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ekstralys\VismaNetApi\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = "notification_id_example"; // string | 

try {
    $result = $apiInstance->getNotificationInfo($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getNotificationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\NotificationReceivedDto**](../Model/NotificationReceivedDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRetryNotificationList**
> \Ekstralys\VismaNetApi\Model\NotificationDto getRetryNotificationList($event_type, $date_from, $date_to, $page_number, $page_size)

Get failed notifications filtered by event type and/or date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = "event_type_example"; // string | 
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Use format: YYYY-MM-DD HH:mm:ss
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Use format: YYYY-MM-DD HH:mm:ss
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->getRetryNotificationList($event_type, $date_from, $date_to, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getRetryNotificationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**|  |
 **date_from** | **\DateTime**| Use format: YYYY-MM-DD HH:mm:ss | [optional]
 **date_to** | **\DateTime**| Use format: YYYY-MM-DD HH:mm:ss | [optional]
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\NotificationDto**](../Model/NotificationDto.md)

### Authorization

[ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

