# ProjectTransactionLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tran_id** | **int** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date &amp;gt; The date the transaction was created. | [optional] 
**inventory_id** | **object** | Item ID &amp;gt; The identifier of the stock or non-stock item associated with the transaction. | [optional] 
**description** | **string** | Description &amp;gt; The description of the transaction. | [optional] 
**uom** | **string** | UoM &amp;gt; The unit of measure used to estimate the quantity for the transaction, such as HOUR or BOX. | [optional] 
**quantity** | **double** | Quantity &amp;gt;  The quantity for the transaction, such as the number of service hours provided to the customer. | [optional] 
**unit_rate** | **double** | Unit rate &amp;gt; The price of the item or the rate of the service. | [optional] 
**amount** | **double** | Amount &amp;gt; The amount of the transaction. | [optional] 
**billable** | **bool** | Invoiceable &amp;gt; A check box indicating whether the transaction is used in calculating the amount charged to the customer for the project task. | [optional] 
**released** | **bool** | Released &amp;gt; A check box indicating whether the transaction has been released. | [optional] 
**allocated** | **bool** | Allocated &amp;gt; A check box that indicates whether the amounts of the transactions were allocated for the project. | [optional] 
**billable_quantity** | **double** | Qty. that can be invoiced &amp;gt; The total invoiceable quantity for the transactions listed in the table. | [optional] 
**financial_period** | **string** | Period &amp;gt; The financial period associated with the transaction. | [optional] 
**batch_nbr** | **string** | Batch no. &amp;gt; The batch number of the transaction in the General ledger workspace. | [optional] 
**use_billable_qty** | **bool** | Use the quantity that can be invoiced in the amount formula &amp;gt; A check box that you select if you want the system to use the invoiceable quantity (the Invoiceable quantity column) instead of the overall quantity (the Quantity column) of the transaction when calculating the amount of transaction. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date &amp;gt; The start date for this transaction. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date &amp;gt; The end date for this transaction | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information | [optional] 
**earning_type** | **object** | Earning type &amp;gt; The earning type specified for the transaction to calculate the labour cost. | [optional] 
**overtime_multiplier** | **double** | Multiplier &amp;gt; The multiplier by which the unit rate is multiplied when the labour cost is calculated. | [optional] 
**project** | **object** | Project &amp;gt; The project associated with the transaction. | [optional] 
**project_task** | **object** | Project task &amp;gt; The project task associated with the transaction. | [optional] 
**debit_account** | **object** | Debit account &amp;gt; For released transactions, the account the transaction debited when it was released; for unreleased transactions, the account the transaction debits if it is released (mainly for the transactions that originate in the Projects module). | [optional] 
**debit_subaccount** | **object** | Debit subaccount &amp;gt; For released transactions, the subaccount the transaction debited when it was released; for unreleased transactions, the subaccount the transaction debits if it is released. | [optional] 
**credit_account** | **object** | Credit account &amp;gt; For released transactions, the account the transaction credited when it was released; for unreleased transactions, the account the transaction credits if it is released. | [optional] 
**credit_subaccount** | **object** | Credit subaccount &amp;gt;  For released transactions, the subaccount the transaction credited when it was released; for unreleased transactions, the subaccount the transaction credits if it is released. | [optional] 
**branch** | **object** | Branch &amp;gt; The branch in which the transaction was created. | [optional] 
**employee** | **object** | Employee &amp;gt; The employee associated with the transaction, such as the employee who worked on the project for the customer. | [optional] 
**customer_vendor** | **object** | Customer/supplier &amp;gt; The name of the supplier (if the transaction originated in the Supplier ledger workspace) or customer (if the transaction originated in another workspace). | [optional] 
**account_group** | **object** | Account group &amp;gt; The account group of the debit side account of the transaction. | [optional] 
**debit_account_group** | **object** | Debit Account group &amp;gt; The account group of the debit side account of the transaction. This field has been deprecated and will be removed in future versions. Use DebitAccountGroup. | [optional] 
**credit_account_group** | **object** | Debit Account group &amp;gt; The account group of the credit side account of the transaction. | [optional] 
**location** | **object** | Location &amp;gt; The location of the customer or supplier. | [optional] 
**note** | **string** |  | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


