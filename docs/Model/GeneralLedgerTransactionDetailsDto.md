# GeneralLedgerTransactionDetailsDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** |  | [optional] 
**module** | **string** | Workspace &amp;gt; The workspace where the transaction originated. | [optional] 
**batch_number** | **string** | Batch number &amp;gt; The reference number of the batch (generated for the transaction) that updated the balance of the selected account. | [optional] 
**tran_date** | [**\DateTime**](\DateTime.md) | Trans date &amp;gt; The date of the transaction. | [optional] 
**period** | **string** | Period &amp;gt; The financial period of the transaction. | [optional] 
**description** | **string** | Description &amp;gt; The user-defined description of the transaction. | [optional] 
**ref_number** | **string** | Ref. number &amp;gt; The reference number of the external document on which this transaction is based. | [optional] 
**branch** | **object** | Branch &amp;gt; The branch of the company. | [optional] 
**account** | **object** | Account &amp;gt; The account updated by the batch transactions. | [optional] 
**ledger** | **object** | Ledger &amp;gt; The ledger used for the batch. | [optional] 
**subaccount** | **string** | Subaccount &amp;gt; The subaccount used in the batch. | [optional] 
**beg_balance** | **double** | Beg. balance &amp;gt; The running total of the account&#39;s beginning balance calculated in the order of transactions displayed in the table. | [optional] 
**debit_amount** | **double** | Debit amount &amp;gt; The transaction debit amount charged to the account during the selected financial period. | [optional] 
**credit_amount** | **double** | Credit amount &amp;gt; The transaction credit amount charged to the account during the selected financial period. | [optional] 
**ending_balance** | **double** | Ending balance &amp;gt; The running total of the account&#39;s ending balance calculated in the order of transactions displayed in the table. | [optional] 
**currency** | **string** | Click the Show currency details check box to view the below fields in the window.  Currency &amp;gt; The currency of transactions in the account. If it is not specified, the balance is in the base currency. | [optional] 
**curr_beg_balance** | **double** | Beg. balance (currency) &amp;gt; The account balance in the selected currency at the start of the selected period. | [optional] 
**curr_debit_amount** | **double** | Debit amount (currency) &amp;gt; The debit amount in the selected currency for the specified account over the selected period. | [optional] 
**curr_credit_amount** | **double** | Credit amount (currency) &amp;gt; The credit amount in the selected currency for the specified account over the selected period. | [optional] 
**curr_ending_balance** | **double** | Ending balance (currency) &amp;gt; The account balance in the selected currency at the start of the selected period. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information reflecting when the last change was done. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


