# Ekstralys\VismaNetApi\WebhookNotificationFeedbackApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookNotificationFeedbackPost**](WebhookNotificationFeedbackApi.md#webhookNotificationFeedbackPost) | **POST** /controller/api/v1/webhooknotificationfeedback | Creates/Inserts a WebhookNotificationFeedback


# **webhookNotificationFeedbackPost**
> object webhookNotificationFeedbackPost($webhook_notification_feedback)

Creates/Inserts a WebhookNotificationFeedback

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

$apiInstance = new Ekstralys\VismaNetApi\Api\WebhookNotificationFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_notification_feedback = new \Ekstralys\VismaNetApi\Model\WebhookNotificationFeedbackDto(); // \Ekstralys\VismaNetApi\Model\WebhookNotificationFeedbackDto | Define the data for the WebhookNotificationFeedback to create

try {
    $result = $apiInstance->webhookNotificationFeedbackPost($webhook_notification_feedback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookNotificationFeedbackApi->webhookNotificationFeedbackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_notification_feedback** | [**\Ekstralys\VismaNetApi\Model\WebhookNotificationFeedbackDto**](../Model/WebhookNotificationFeedbackDto.md)| Define the data for the WebhookNotificationFeedback to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

