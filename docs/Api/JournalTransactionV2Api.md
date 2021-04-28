# Ekstralys\VismaNetApi\JournalTransactionV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber**](JournalTransactionV2Api.md#journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber) | **POST** /controller/api/v2/journaltransaction/{journalTransactionNumber}/attachment | Creates an attachment and associates it with an journalTransaction. If the file already exists, a new revision is created.
[**journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber**](JournalTransactionV2Api.md#journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber) | **POST** /controller/api/v2/journaltransaction/{journalTransactionNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain journalTransaction line. If the file already exists, a new revision is created.
[**journalTransactionV2GetAllJournalTransactions**](JournalTransactionV2Api.md#journalTransactionV2GetAllJournalTransactions) | **GET** /controller/api/v2/journaltransaction | Get a range of Journal Transactions - ScreenId&#x3D;GL301000.   On this particular endpoint, pagesize and totalcount denotes number of journaltransaction lines.   When using pagination, the transactions for one specific batch can be split into several responses.   Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.
[**journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber**](JournalTransactionV2Api.md#journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber) | **GET** /controller/api/v2/journaltransaction/{journalTransactionNumber} | Get a specific Journal Transaction
[**journalTransactionV2Post**](JournalTransactionV2Api.md#journalTransactionV2Post) | **POST** /controller/api/v2/journaltransaction | Create a Journal Transaction
[**journalTransactionV2PutByjournalTransactionNumber**](JournalTransactionV2Api.md#journalTransactionV2PutByjournalTransactionNumber) | **PUT** /controller/api/v2/journaltransaction/{journalTransactionNumber} | Update a Journal Transaction
[**journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber**](JournalTransactionV2Api.md#journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber) | **POST** /controller/api/v2/journaltransaction/{journalTransactionNumber}/action/release | Release journal transaction operation


# **journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber**
> object journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber($journal_transaction_number)

Creates an attachment and associates it with an journalTransaction. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the journalTransaction

try {
    $result = $apiInstance->journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
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

# **journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber**
> object journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber($journal_transaction_number, $line_number)

Creates an attachment and associates it with a certain journalTransaction line. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the journalTransaction
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber($journal_transaction_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber: ', $e->getMessage(), PHP_EOL;
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

# **journalTransactionV2GetAllJournalTransactions**
> \Ekstralys\VismaNetApi\Model\JournalTransactionDto[] journalTransactionV2GetAllJournalTransactions($period_id, $last_modified_date_time, $module, $released_batch, $expand_attachments, $branch, $page_number, $page_size)

Get a range of Journal Transactions - ScreenId=GL301000.   On this particular endpoint, pagesize and totalcount denotes number of journaltransaction lines.   When using pagination, the transactions for one specific batch can be split into several responses.   Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$period_id = "period_id_example"; // string | Financial Period to query data for. Mandatory if 'LastModifiedDateTime' not provided. Format: YYYYPP
$last_modified_date_time = "last_modified_date_time_example"; // string | When setting this parameter there will be exported only the batches changed or created since the provided date and time.   Mandatory if 'PeriodId' is not provided.   Format: yyyy-MM-dd HH:mm:ss
$module = "module_example"; // string | Module to query data for. Allowed values: GL, AP, AR, CM, CA, IN, DR, FA, PM
$released_batch = true; // bool | If true there will be exported the batches having Released flag on true.   If false there will be exported the batches having Released flag on false.   If not set no filtering based on Released flag is applied
$expand_attachments = true; // bool | If true there will be included all attachments regarding batch. Default on false
$branch = "branch_example"; // string | Branch to query data for.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->journalTransactionV2GetAllJournalTransactions($period_id, $last_modified_date_time, $module, $released_batch, $expand_attachments, $branch, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2GetAllJournalTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **period_id** | **string**| Financial Period to query data for. Mandatory if &#39;LastModifiedDateTime&#39; not provided. Format: YYYYPP | [optional]
 **last_modified_date_time** | **string**| When setting this parameter there will be exported only the batches changed or created since the provided date and time.   Mandatory if &#39;PeriodId&#39; is not provided.   Format: yyyy-MM-dd HH:mm:ss | [optional]
 **module** | **string**| Module to query data for. Allowed values: GL, AP, AR, CM, CA, IN, DR, FA, PM | [optional]
 **released_batch** | **bool**| If true there will be exported the batches having Released flag on true.   If false there will be exported the batches having Released flag on false.   If not set no filtering based on Released flag is applied | [optional]
 **expand_attachments** | **bool**| If true there will be included all attachments regarding batch. Default on false | [optional]
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

# **journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber**
> \Ekstralys\VismaNetApi\Model\JournalTransactionDto journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber($journal_transaction_number)

Get a specific Journal Transaction

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the Journal Transaction

try {
    $result = $apiInstance->journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
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

# **journalTransactionV2Post**
> object journalTransactionV2Post($journal_transaction)

Create a Journal Transaction

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction = new \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto | Defines the data for the Journal Transaction to create

try {
    $result = $apiInstance->journalTransactionV2Post($journal_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2Post: ', $e->getMessage(), PHP_EOL;
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

# **journalTransactionV2PutByjournalTransactionNumber**
> object journalTransactionV2PutByjournalTransactionNumber($journal_transaction_number, $journal_transaction)

Update a Journal Transaction

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Identifies the Journal Transaction to update
$journal_transaction = new \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto(); // \Ekstralys\VismaNetApi\Model\JournalTransactionUpdateDto | Defines the data for the Journal Transaction to update

try {
    $result = $apiInstance->journalTransactionV2PutByjournalTransactionNumber($journal_transaction_number, $journal_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2PutByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
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

# **journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseJournalTransactionActionResultDto journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber($journal_transaction_number)

Release journal transaction operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\JournalTransactionV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_transaction_number = "journal_transaction_number_example"; // string | Reference number of the journal transaction to be released

try {
    $result = $apiInstance->journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber($journal_transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTransactionV2Api->journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber: ', $e->getMessage(), PHP_EOL;
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

