# Ekstralys\VismaNetApi\CashTransactionApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cashTransactionCreateCashTransaction**](CashTransactionApi.md#cashTransactionCreateCashTransaction) | **POST** /controller/api/v1/cashTransaction | Create a Cash Transaction- ScreenID&#x3D;CA304000
[**cashTransactionGetAll**](CashTransactionApi.md#cashTransactionGetAll) | **GET** /controller/api/v1/cashTransaction | Get all Transaction - ScreenID&#x3D;CA304000
[**cashTransactionGetByreferenceNbr**](CashTransactionApi.md#cashTransactionGetByreferenceNbr) | **GET** /controller/api/v1/cashTransaction/{referenceNbr} | Get a specific Transaction - ScreenID&#x3D;CA304000
[**cashTransactionPutByreferenceNbr**](CashTransactionApi.md#cashTransactionPutByreferenceNbr) | **PUT** /controller/api/v1/cashTransaction/{referenceNbr} | Update a specific CashTransaction - ScreenID&#x3D;CA304000
[**cashTransactionReleaseByreferenceNbr**](CashTransactionApi.md#cashTransactionReleaseByreferenceNbr) | **POST** /controller/api/v1/cashTransaction/{referenceNbr}/action/release | Release cash transaction - ScreenID&#x3D;CA304000
[**cashTransactionReverseByreferenceNbr**](CashTransactionApi.md#cashTransactionReverseByreferenceNbr) | **POST** /controller/api/v1/cashTransaction/{referenceNbr}/action/reverse | Reverse a Cash Transaction- ScreenID&#x3D;CA304000


# **cashTransactionCreateCashTransaction**
> object cashTransactionCreateCashTransaction($cash_transaction)

Create a Cash Transaction- ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cash_transaction = new \Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto | Defines the data for the Cash Transaction to create

try {
    $result = $apiInstance->cashTransactionCreateCashTransaction($cash_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionCreateCashTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cash_transaction** | [**\Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto**](../Model/CashTransactionUpdateDto.md)| Defines the data for the Cash Transaction to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashTransactionGetAll**
> \Ekstralys\VismaNetApi\Model\CashTransactionDto[] cashTransactionGetAll($number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition)

Get all Transaction - ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of record. Use format: YYYY-MM-DD HH:MM (date and time) to filter by date
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | Value to be used for filtering lastModifiedDateTime value.

try {
    $result = $apiInstance->cashTransactionGetAll($number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of record. Use format: YYYY-MM-DD HH:MM (date and time) to filter by date | [optional]
 **last_modified_date_time_condition** | **string**| Value to be used for filtering lastModifiedDateTime value. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CashTransactionDto[]**](../Model/CashTransactionDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashTransactionGetByreferenceNbr**
> \Ekstralys\VismaNetApi\Model\CashTransactionDto cashTransactionGetByreferenceNbr($reference_nbr)

Get a specific Transaction - ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_nbr = "reference_nbr_example"; // string | Returns data for the selected Cash transaction

try {
    $result = $apiInstance->cashTransactionGetByreferenceNbr($reference_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionGetByreferenceNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_nbr** | **string**| Returns data for the selected Cash transaction |

### Return type

[**\Ekstralys\VismaNetApi\Model\CashTransactionDto**](../Model/CashTransactionDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashTransactionPutByreferenceNbr**
> object cashTransactionPutByreferenceNbr($reference_nbr, $cash_transaction)

Update a specific CashTransaction - ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_nbr = "reference_nbr_example"; // string | Identifies the Cash Transaction to update
$cash_transaction = new \Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto | Defines the data for the Cash Transaction to update

try {
    $result = $apiInstance->cashTransactionPutByreferenceNbr($reference_nbr, $cash_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionPutByreferenceNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_nbr** | **string**| Identifies the Cash Transaction to update |
 **cash_transaction** | [**\Ekstralys\VismaNetApi\Model\CashTransactionUpdateDto**](../Model/CashTransactionUpdateDto.md)| Defines the data for the Cash Transaction to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashTransactionReleaseByreferenceNbr**
> \Ekstralys\VismaNetApi\Model\ReleaseCashTransactionActionResultDto cashTransactionReleaseByreferenceNbr($reference_nbr)

Release cash transaction - ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_nbr = "reference_nbr_example"; // string | Reference number of the cash transaction to be released.

try {
    $result = $apiInstance->cashTransactionReleaseByreferenceNbr($reference_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionReleaseByreferenceNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_nbr** | **string**| Reference number of the cash transaction to be released. |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseCashTransactionActionResultDto**](../Model/ReleaseCashTransactionActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashTransactionReverseByreferenceNbr**
> \Ekstralys\VismaNetApi\Model\ReverseCashTransactionActionResultDto cashTransactionReverseByreferenceNbr($reference_nbr, $reverse_action_dto)

Reverse a Cash Transaction- ScreenID=CA304000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CashTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_nbr = "reference_nbr_example"; // string | Reference number of the cash transaction to be reversed.
$reverse_action_dto = new \Ekstralys\VismaNetApi\Model\ReverseCashTransactionActionDto(); // \Ekstralys\VismaNetApi\Model\ReverseCashTransactionActionDto | The action dto use to condition the action

try {
    $result = $apiInstance->cashTransactionReverseByreferenceNbr($reference_nbr, $reverse_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashTransactionApi->cashTransactionReverseByreferenceNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_nbr** | **string**| Reference number of the cash transaction to be reversed. |
 **reverse_action_dto** | [**\Ekstralys\VismaNetApi\Model\ReverseCashTransactionActionDto**](../Model/ReverseCashTransactionActionDto.md)| The action dto use to condition the action |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReverseCashTransactionActionResultDto**](../Model/ReverseCashTransactionActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

