# Ekstralys\VismaNetApi\CustomerDebitNoteV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerDebitNoteV2Create**](CustomerDebitNoteV2Api.md#customerDebitNoteV2Create) | **POST** /controller/api/v2/customerDebitNote | Create a Customer Debit Note. ScreenID&#x3D;AR301000


# **customerDebitNoteV2Create**
> object customerDebitNoteV2Create($debit_note)

Create a Customer Debit Note. ScreenID=AR301000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerDebitNoteV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debit_note = new \Ekstralys\VismaNetApi\Model\CustomerDebitNoteUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerDebitNoteUpdateDto | Defines the data for the Debit Note to create

try {
    $result = $apiInstance->customerDebitNoteV2Create($debit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDebitNoteV2Api->customerDebitNoteV2Create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_note** | [**\Ekstralys\VismaNetApi\Model\CustomerDebitNoteUpdateDto**](../Model/CustomerDebitNoteUpdateDto.md)| Defines the data for the Debit Note to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

