# GeneralLedgerPeriodBalanceQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period_id** | **string** | Period to retrieve balance for. Mandatory if &#39;LastModifiedDateTime&#39; not provided. Format: &#39;yyyyMM&#39; | [optional] 
**account** | **string** | Account to retrieve balance for | [optional] 
**ledger** | **string** | Ledger to retrieve balance for | [optional] 
**branch** | **string** | Branch to retrieve balance for | [optional] 
**balance_type** | **string** | Balance Type of the ledger to be exported | [optional] 
**toggle_balance_signs** | **bool** | Parameter can be used in order to change the balance sign for liability and income accounts | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | When setting this parameter there will be exported only the balances that were changed since the provided date and time.  Mandatory if &#39;PeriodId&#39; is not provided.  Format: &#39;yyyy-MM-dd HH:mm:ss&#39; | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


