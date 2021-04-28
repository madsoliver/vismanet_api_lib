# Ekstralys\VismaNetApi\GeneralLedgerBalanceV2Api

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generalLedgerBalanceV2GetGeneralLedgerBalances**](GeneralLedgerBalanceV2Api.md#generalLedgerBalanceV2GetGeneralLedgerBalances) | **GET** /controller/api/v2/generalLedgerBalance | Get a range of General Ledger Balances. Complete documentation can be found under 8.21  release notes.   Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.


# **generalLedgerBalanceV2GetGeneralLedgerBalances**
> \Ekstralys\VismaNetApi\Model\GeneralLedgerBalanceDto[] generalLedgerBalanceV2GetGeneralLedgerBalances($period_id, $account, $ledger, $branch, $balance_type, $toggle_balance_signs, $last_modified_date_time, $page_number, $page_size)

Get a range of General Ledger Balances. Complete documentation can be found under 8.21  release notes.   Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\GeneralLedgerBalanceV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$period_id = "period_id_example"; // string | Period to retrieve balance for. Mandatory if 'LastModifiedDateTime' not provided. Format: 'yyyyMM'
$account = "account_example"; // string | Account to retrieve balance for
$ledger = "ledger_example"; // string | Ledger to retrieve balance for
$branch = "branch_example"; // string | Branch to retrieve balance for
$balance_type = "balance_type_example"; // string | Balance Type of the ledger to be exported
$toggle_balance_signs = true; // bool | Parameter can be used in order to change the balance sign for liability and income accounts
$last_modified_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When setting this parameter there will be exported only the balances that were changed since the provided date and time.  Mandatory if 'PeriodId' is not provided.  Format: 'yyyy-MM-dd HH:mm:ss'
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->generalLedgerBalanceV2GetGeneralLedgerBalances($period_id, $account, $ledger, $branch, $balance_type, $toggle_balance_signs, $last_modified_date_time, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerBalanceV2Api->generalLedgerBalanceV2GetGeneralLedgerBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **period_id** | **string**| Period to retrieve balance for. Mandatory if &#39;LastModifiedDateTime&#39; not provided. Format: &#39;yyyyMM&#39; | [optional]
 **account** | **string**| Account to retrieve balance for | [optional]
 **ledger** | **string**| Ledger to retrieve balance for | [optional]
 **branch** | **string**| Branch to retrieve balance for | [optional]
 **balance_type** | **string**| Balance Type of the ledger to be exported | [optional]
 **toggle_balance_signs** | **bool**| Parameter can be used in order to change the balance sign for liability and income accounts | [optional]
 **last_modified_date_time** | **\DateTime**| When setting this parameter there will be exported only the balances that were changed since the provided date and time.  Mandatory if &#39;PeriodId&#39; is not provided.  Format: &#39;yyyy-MM-dd HH:mm:ss&#39; | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\GeneralLedgerBalanceDto[]**](../Model/GeneralLedgerBalanceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

