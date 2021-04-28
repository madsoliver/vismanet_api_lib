# Ekstralys\VismaNetApi\TimeCardApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeCardCreateTimeCard**](TimeCardApi.md#timeCardCreateTimeCard) | **POST** /controller/api/v1/timeCard | Creates a time card
[**timeCardGetAllEmployeeTimeCards**](TimeCardApi.md#timeCardGetAllEmployeeTimeCards) | **GET** /controller/api/v1/timeCard | Get all employee time cards, a filter needs to be specified - ScreenId&#x3D;EP305000
[**timeCardGetEmployeeTimeCardBytimeCardCd**](TimeCardApi.md#timeCardGetEmployeeTimeCardBytimeCardCd) | **GET** /controller/api/v1/timeCard/{timeCardCd} | Get a specific employee time cards
[**timeCardPutTimeCardOnHoldBytimeCardCd**](TimeCardApi.md#timeCardPutTimeCardOnHoldBytimeCardCd) | **POST** /controller/api/v1/timeCard/{timeCardCd}/action/hold | Put timecard on hold
[**timeCardSendTimeCardToApprovalBytimeCardCd**](TimeCardApi.md#timeCardSendTimeCardToApprovalBytimeCardCd) | **POST** /controller/api/v1/timeCard/{timeCardCd}/action/approval | Send time card to approval
[**timeCardSubmitTimeCardBytimeCardCd**](TimeCardApi.md#timeCardSubmitTimeCardBytimeCardCd) | **POST** /controller/api/v1/timeCard/{timeCardCd}/action/submit | Submit time card operation
[**timeCardUpdateTimeCardByreferenceNumber**](TimeCardApi.md#timeCardUpdateTimeCardByreferenceNumber) | **PUT** /controller/api/v1/timeCard/{referenceNumber} | Updates a specific time card


# **timeCardCreateTimeCard**
> object timeCardCreateTimeCard($time_card_update_dto)

Creates a time card

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_card_update_dto = new \Ekstralys\VismaNetApi\Model\TimeCardUpdateDto(); // \Ekstralys\VismaNetApi\Model\TimeCardUpdateDto | Defines the data for the time card to create

try {
    $result = $apiInstance->timeCardCreateTimeCard($time_card_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardCreateTimeCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_card_update_dto** | [**\Ekstralys\VismaNetApi\Model\TimeCardUpdateDto**](../Model/TimeCardUpdateDto.md)| Defines the data for the time card to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardGetAllEmployeeTimeCards**
> \Ekstralys\VismaNetApi\Model\TimeCardDto[] timeCardGetAllEmployeeTimeCards($status, $week, $type, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition)

Get all employee time cards, a filter needs to be specified - ScreenId=EP305000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | The status of the document.
$week = "week_example"; // string | Identifies the week number of the time card
$type = "type_example"; // string | Identifies the type of the time card (Normal, Corrected, NormalCorrected)
$greater_than_value = "greater_than_value_example"; // string | Greater-than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.

try {
    $result = $apiInstance->timeCardGetAllEmployeeTimeCards($status, $week, $type, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardGetAllEmployeeTimeCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| The status of the document. | [optional]
 **week** | **string**| Identifies the week number of the time card | [optional]
 **type** | **string**| Identifies the type of the time card (Normal, Corrected, NormalCorrected) | [optional]
 **greater_than_value** | **string**| Greater-than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\TimeCardDto[]**](../Model/TimeCardDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardGetEmployeeTimeCardBytimeCardCd**
> \Ekstralys\VismaNetApi\Model\TimeCardDto timeCardGetEmployeeTimeCardBytimeCardCd($time_card_cd)

Get a specific employee time cards

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_card_cd = "time_card_cd_example"; // string | Identifies the time card

try {
    $result = $apiInstance->timeCardGetEmployeeTimeCardBytimeCardCd($time_card_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardGetEmployeeTimeCardBytimeCardCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_card_cd** | **string**| Identifies the time card |

### Return type

[**\Ekstralys\VismaNetApi\Model\TimeCardDto**](../Model/TimeCardDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardPutTimeCardOnHoldBytimeCardCd**
> \Ekstralys\VismaNetApi\Model\PutTimeCardOnHoldActionResultDto timeCardPutTimeCardOnHoldBytimeCardCd($time_card_cd)

Put timecard on hold

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_card_cd = "time_card_cd_example"; // string | Reference number of the time card to be put on hold

try {
    $result = $apiInstance->timeCardPutTimeCardOnHoldBytimeCardCd($time_card_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardPutTimeCardOnHoldBytimeCardCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_card_cd** | **string**| Reference number of the time card to be put on hold |

### Return type

[**\Ekstralys\VismaNetApi\Model\PutTimeCardOnHoldActionResultDto**](../Model/PutTimeCardOnHoldActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardSendTimeCardToApprovalBytimeCardCd**
> \Ekstralys\VismaNetApi\Model\SendTimeCardToApprovalActionResultDto timeCardSendTimeCardToApprovalBytimeCardCd($time_card_cd)

Send time card to approval

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_card_cd = "time_card_cd_example"; // string | Reference number of the time card to be sent to approval

try {
    $result = $apiInstance->timeCardSendTimeCardToApprovalBytimeCardCd($time_card_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardSendTimeCardToApprovalBytimeCardCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_card_cd** | **string**| Reference number of the time card to be sent to approval |

### Return type

[**\Ekstralys\VismaNetApi\Model\SendTimeCardToApprovalActionResultDto**](../Model/SendTimeCardToApprovalActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardSubmitTimeCardBytimeCardCd**
> \Ekstralys\VismaNetApi\Model\SubmitTimeCardActionResultDto timeCardSubmitTimeCardBytimeCardCd($time_card_cd)

Submit time card operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_card_cd = "time_card_cd_example"; // string | Reference number of the time card to be submitted

try {
    $result = $apiInstance->timeCardSubmitTimeCardBytimeCardCd($time_card_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardSubmitTimeCardBytimeCardCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_card_cd** | **string**| Reference number of the time card to be submitted |

### Return type

[**\Ekstralys\VismaNetApi\Model\SubmitTimeCardActionResultDto**](../Model/SubmitTimeCardActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeCardUpdateTimeCardByreferenceNumber**
> object timeCardUpdateTimeCardByreferenceNumber($reference_number, $time_card_update_dto)

Updates a specific time card

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

$apiInstance = new Ekstralys\VismaNetApi\Api\TimeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_number = "reference_number_example"; // string | Identifies the time card to update
$time_card_update_dto = new \Ekstralys\VismaNetApi\Model\TimeCardUpdateDto(); // \Ekstralys\VismaNetApi\Model\TimeCardUpdateDto | The data to update the time card with

try {
    $result = $apiInstance->timeCardUpdateTimeCardByreferenceNumber($reference_number, $time_card_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeCardApi->timeCardUpdateTimeCardByreferenceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_number** | **string**| Identifies the time card to update |
 **time_card_update_dto** | [**\Ekstralys\VismaNetApi\Model\TimeCardUpdateDto**](../Model/TimeCardUpdateDto.md)| The data to update the time card with |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

