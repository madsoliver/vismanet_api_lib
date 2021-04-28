# TransactionDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | The line number in the table. | [optional] 
**branch** | **object** | Mandatory field: Branch &amp;gt; The branch that created the transaction. | [optional] 
**item** | **object** | Item ID &amp;gt; The ID of the non-stock item specified as the transaction subject. | [optional] 
**description** | **string** | Description &amp;gt; The description provided for the item. | [optional] 
**quantity** | **double** | Quantity &amp;gt; The quantity of the item. | [optional] 
**uom** | **string** | UoM &amp;gt; The unit of measure of the item. | [optional] 
**price** | **double** | Price &amp;gt; The unit price for the item. | [optional] 
**amount** | **double** | Amount &amp;gt; The total amount for all units or items. | [optional] 
**offset_cash_account** | [**\Ekstralys\VismaNetApi\Model\AccountNumberTypeDescriptionDto**](AccountNumberTypeDescriptionDto.md) | Offset cash account &amp;gt; The cash account to be used for the transaction. | [optional] 
**offset_account** | [**\Ekstralys\VismaNetApi\Model\AccountNumberTypeDescriptionDto**](AccountNumberTypeDescriptionDto.md) | Mandatory field: Offset account* &amp;gt; The account to be updated by the transaction. | [optional] 
**offset_sub_account** | **object** | Mandatory field: Offset subaccount* &amp;gt; The corresponding subaccount to be used for the transaction. | [optional] 
**tax_category** | **object** | VAT category &amp;gt; The category that applies to the transaction. | [optional] 
**non_billable** | **bool** | Non-invoiceable &amp;gt; A check box that indicates (if selected) that this transaction is non-invoiceable in the project. | [optional] 
**project** | **object** | Project &amp;gt; The project with which this transaction is associated, or the code indicating that this transaction is not associated with any project. | [optional] 
**project_task** | **object** | Project task &amp;gt; The particular task of the project with which this transaction is associated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


