# Ekstralys\VismaNetApi\JournalTransactionApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalTransactionCreateHeaderAttachmentByjournalTransactionNumber**](JournalTransactionApi.md#journalTransactionCreateHeaderAttachmentByjournalTransactionNumber) | **POST** /controller/api/v1/journaltransaction/{journalTransactionNumber}/attachment | Creates an attachment and associates it with an journalTransaction. If the file already exists, a new revision is created.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber**](JournalTransactionApi.md#journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber) | **POST** /controller/api/v1/journaltransaction/{journalTransactionNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain journalTransaction line. If the file already exists, a new revision is created.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionGetAllJournalTransactions**](JournalTransactionApi.md#journalTransactionGetAllJournalTransactions) | **GET** /controller/api/v1/journaltransaction | Get a range of Journal Transactions - ScreenId&#x3D;GL301000  When using pagination, the transactions for one specific batch can be split into several responses.  When using pagination, pagesize (totalcount) denotes number of JournalTransaction lines.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber**](JournalTransactionApi.md#journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber) | **GET** /controller/api/v1/journaltransaction/{journalTransactionNumber} | Get a specific Journal Transaction. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionPost**](JournalTransactionApi.md#journalTransactionPost) | **POST** /controller/api/v1/journaltransaction | Create a Journal Transaction.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionPutByjournalTransactionNumber**](JournalTransactionApi.md#journalTransactionPutByjournalTransactionNumber) | **PUT** /controller/api/v1/journaltransaction/{journalTransactionNumber} | Update a Journal Transaction. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2
[**journalTransactionReleaseJournalTransactionByjournalTransactionNumber**](JournalTransactionApi.md#journalTransactionReleaseJournalTransactionByjournalTransactionNumber) | **POST** /controller/api/v1/journaltransaction/{journalTransactionNumber}/action/release | Release journal transaction operation. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2


# **journalTransactionCreateHeaderAttachmentByjournalTransactionNumber**
> object journalTransactionCreateHeaderAttachmentByjournalTransactionNumber($journal_transaction_number)

Creates an attachment and associates it with an journalTransaction. If the file already exists, a new revision is created.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the journalTransaction

try {
    $result = $apiInstance->journalTransactionCreateHeaderAttachmentByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionCreateHeaderAttachmentByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction_number** | **string**| Identifies the journalTransaction |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber**
> object journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber($journal_transaction_number, $line_number)

Creates an attachment and associates it with a certain journalTransaction line. If the file already exists, a new revision is created.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the journalTransaction
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber($journal_transaction_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionCreateLineAttachmentByjournalTransactionNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction_number** | **string**| Identifies the journalTransaction |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionGetAllJournalTransactions**
> \Ekstralys\VismaNetApi\Model\JournalTransactionDto[] journalTransactionGetAllJournalTransactions($greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $customer_supplier_start, $customer_supplier_end, $released, $expand_attachments, $branch, $page_number, $page_size)

Get a range of Journal Transactions - ScreenId=GL301000  When using pagination, the transactions for one specific batch can be split into several responses.  When using pagination, pagesize (totalcount) denotes number of JournalTransaction lines.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | 
$last_modified_date_time = "last_modified_date_time_example"; // string | System retrieved information for last modified date and time.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for date, time and state/condition.
$customer_supplier_start = "customer_supplier_start_example"; // string | 
$customer_supplier_end = "customer_supplier_end_example"; // string | 
$released = 56; // int | Filter by the date when the batch was released.
$expand_attachments = true; // bool | Set to true if you want to see all attachments regarding batch.
$branch = "branch_example"; // string | Branch to query data for.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->journalTransactionGetAllJournalTransactions($greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $customer_supplier_start, $customer_supplier_end, $released, $expand_attachments, $branch, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionGetAllJournalTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**|  | [optional]
 **last_modified_date_time** | **string**| System retrieved information for last modified date and time. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for date, time and state/condition. | [optional]
 **customer_supplier_start** | **string**|  | [optional]
 **customer_supplier_end** | **string**|  | [optional]
 **released** | **int**| Filter by the date when the batch was released. | [optional]
 **expand_attachments** | **bool**| Set to true if you want to see all attachments regarding batch. | [optional]
 **branch** | **string**| Branch to query data for. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\JournalTransactionDto[]**](../Model/JournalTransactionDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber**
> \Ekstralys\VismaNetApi\Model\JournalTransactionDto journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber($journal_transaction_number)

Get a specific Journal Transaction. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the Journal Transaction

try {
    $result = $apiInstance->journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionGetSpecificJournalTransactionsByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction_number** | **string**| Identifies the Journal Transaction |

### Return type

[**\Ekstralys\VismaNetApi\Model\JournalTransactionDto**](../Model/JournalTransactionDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionPost**
> object journalTransactionPost($journal_transaction)

Create a Journal Transaction.   Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction = new \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto | Defines the data for the Journal Transaction to create

try {
    $result = $apiInstance->journalTransactionPost($journal_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction** | [**\Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto**](../Model/JournalTransactionUpdateDto.md)| Defines the data for the Journal Transaction to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionPutByjournalTransactionNumber**
> object journalTransactionPutByjournalTransactionNumber($journal_transaction_number, $journal_transaction)

Update a Journal Transaction. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the Journal Transaction to update
$journal_transaction = new \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto | Defines the data for the Journal Transaction to update

try {
    $result = $apiInstance->journalTransactionPutByjournalTransactionNumber($journal_transaction_number, $journal_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionPutByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction_number** | **string**| Identifies the Journal Transaction to update |
 **journal_transaction** | [**\Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto**](../Model/JournalTransactionUpdateDto.md)| Defines the data for the Journal Transaction to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalTransactionReleaseJournalTransactionByjournalTransactionNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseJournalTransactionActionResultDto journalTransactionReleaseJournalTransactionByjournalTransactionNumber($journal_transaction_number)

Release journal transaction operation. Method is deprecated and will be removed in September 2020 - start using new method on journalTransactionV2

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Reference number of the journal transaction to be released

try {
    $result = $apiInstance->journalTransactionReleaseJournalTransactionByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionApi->journalTransactionReleaseJournalTransactionByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_transaction_number** | **string**| Reference number of the journal transaction to be released |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseJournalTransactionActionResultDto**](../Model/ReleaseJournalTransactionActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

