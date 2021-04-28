# InventoryAccountInformationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expense_accrual_account** | **object** | Only used for Non-stock items.  Purchase accrual account &amp;gt; Purchase order accrual account &amp;gt; The liability account to be used for this stock item to accrue amounts on purchase orders related to this item. | [optional] 
**inventory_account** | **object** | Only used for Stock items.  Inventory account &amp;gt; The asset account to be used to keep the inventory balance resulting from transactions with this stock item. | [optional] 
**expense_account** | **object** | Only used for Non-stock items.  Mandatory field: Expense account* &amp;gt; The default expense account to be used for this non-stock item. | [optional] 
**cogs_account** | **object** | Only used for Stock items.  COGS account &amp;gt; The expense account to be used for this stock item to record the cost of goods sold (COGS) once the sales order is released. | [optional] 
**expense_non_taxable_account** | **object** | Expense account, non-taxable &amp;gt; The income account to be used for this stock item to record non-taxable expenses. | [optional] 
**expense_eu_account** | **object** | Expense EU account &amp;gt; The income account to be used for this stock item to record EU expenses. | [optional] 
**expense_import_account** | **object** | Expense account, import &amp;gt; The income account to be used for this stock item to record import expenses. | [optional] 
**expense_subaccount** | **object** | Only used for Non-stock items.  Mandatory field: Expense sub* &amp;gt; The subaccount to be used by default with the expense account for transactions related to this non-stock item. | [optional] 
**cogs_subaccount** | **object** | Only used for Stock items.  COGS sub. &amp;gt; The subaccount to be used for this item with the COGS account. | [optional] 
**sales_account** | **object** | Mandatory field: Sales account *&amp;gt; The income account to be used for this stock item to record sales. | [optional] 
**sales_non_taxable_account** | **object** | Sales - non-taxable account &amp;gt; The income account to be used for this stock item to record non-taxable sales. | [optional] 
**sales_eu_account** | **object** | Sales - EU account &amp;gt; The income account to be used for this stock item to record EU sales. | [optional] 
**sales_export_account** | **object** | Sales - export account &amp;gt; The income account to be used for this stock item to record export sales. | [optional] 
**sales_subaccount** | **object** | Mandatory field: Sales sub. *&amp;gt; The subaccount to be used for this item to record sales. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


