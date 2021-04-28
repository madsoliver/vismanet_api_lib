# GeneralLedgerTransactionsQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** | The branch CD | [optional] 
**ledger** | **string** | Mandatory. The ledger in which you want to view the account balances. | 
**from_period** | **string** | Mandatory. The financial period that begins the date range of the batches you want to view. Format YYYYPP | 
**to_period** | **string** | Mandatory. The financial period that ends the date range of the batches you want to view. Format YYYYPP | 
**account** | **string** | The account CD for which you want to view activities in the selected financial period. | [optional] 
**subaccount_id** | **string** | The Subaccount | [optional] 
**from_date** | **string** | The first date of the interval within the period. Format YYYY-MM-DD | [optional] 
**to_date** | **string** | The last date of the interval within the selected period. Format YYYY-MM-DD | [optional] 
**include_unposted** | **bool** | Checkmark indicating if unposted batches are included. | [optional] 
**include_unreleased** | **bool** | Checkmark indicating if unreleased (balanced) batches are included. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**last_modified_date_time** | **string** | System retrieved information for last modified date and time. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds. | [optional] 
**last_modified_date_time_condition** | **string** | Value to be used for filtering lastModifiedDateTime value. | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


