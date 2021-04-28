# Ekstralys\VismaNetApi\GeneralLedgerTransactionsApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generalLedgerTransactionsGetAll**](GeneralLedgerTransactionsApi.md#generalLedgerTransactionsGetAll) | **GET** /controller/api/v1/GeneralLedgerTransactions | Get a range of General Ledger Transactions - ScreenId&#x3D;GL404000  Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.


# **generalLedgerTransactionsGetAll**
> \Ekstralys\VismaNetApi\Model\GeneralLedgerTransactionDetailsDto[] generalLedgerTransactionsGetAll($ledger, $from_period, $to_period, $branch, $account, $subaccount_id, $from_date, $to_date, $include_unposted, $include_unreleased, $skip_records, $number_to_read, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of General Ledger Transactions - ScreenId=GL404000  Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\GeneralLedgerTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = "ledger_example"; // string | Mandatory. The ledger in which you want to view the account balances.
$from_period = "from_period_example"; // string | Mandatory. The financial period that begins the date range of the batches you want to view. Format YYYYPP
$to_period = "to_period_example"; // string | Mandatory. The financial period that ends the date range of the batches you want to view. Format YYYYPP
$branch = "branch_example"; // string | The branch CD
$account = "account_example"; // string | The account CD for which you want to view activities in the selected financial period.
$subaccount_id = "subaccount_id_example"; // string | The Subaccount
$from_date = "from_date_example"; // string | The first date of the interval within the period. Format YYYY-MM-DD
$to_date = "to_date_example"; // string | The last date of the interval within the selected period. Format YYYY-MM-DD
$include_unposted = true; // bool | Checkmark indicating if unposted batches are included.
$include_unreleased = true; // bool | Checkmark indicating if unreleased (balanced) batches are included.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$last_modified_date_time = "last_modified_date_time_example"; // string | System retrieved information for last modified date and time. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | Value to be used for filtering lastModifiedDateTime value.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->generalLedgerTransactionsGetAll($ledger, $from_period, $to_period, $branch, $account, $subaccount_id, $from_date, $to_date, $include_unposted, $include_unreleased, $skip_records, $number_to_read, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerTransactionsApi->generalLedgerTransactionsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| Mandatory. The ledger in which you want to view the account balances. |
 **from_period** | **string**| Mandatory. The financial period that begins the date range of the batches you want to view. Format YYYYPP |
 **to_period** | **string**| Mandatory. The financial period that ends the date range of the batches you want to view. Format YYYYPP |
 **branch** | **string**| The branch CD | [optional]
 **account** | **string**| The account CD for which you want to view activities in the selected financial period. | [optional]
 **subaccount_id** | **string**| The Subaccount | [optional]
 **from_date** | **string**| The first date of the interval within the period. Format YYYY-MM-DD | [optional]
 **to_date** | **string**| The last date of the interval within the selected period. Format YYYY-MM-DD | [optional]
 **include_unposted** | **bool**| Checkmark indicating if unposted batches are included. | [optional]
 **include_unreleased** | **bool**| Checkmark indicating if unreleased (balanced) batches are included. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **last_modified_date_time** | **string**| System retrieved information for last modified date and time. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds. | [optional]
 **last_modified_date_time_condition** | **string**| Value to be used for filtering lastModifiedDateTime value. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\GeneralLedgerTransactionDetailsDto[]**](../Model/GeneralLedgerTransactionDetailsDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

