# ContractUsageLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_number** | **int** |  | [optional] 
**billed** | **bool** | Information indicating that the contract is collected from the Transaction history tab and the contract is invoiced. Not indicated on screen CT303000. | [optional] 
**branch** | **object** | Both tabs &amp;gt; Branch &amp;gt; | [optional] 
**item** | **object** | Both tabs | [optional] 
**description** | **string** | Both tabs &amp;gt; Description &amp;gt; A description of the non-stock item. | [optional] 
**uom** | **string** | Both tabs &amp;gt; UoM &amp;gt; The unit of measure used for the item. | [optional] 
**quantity** | **double** | Both tabs &amp;gt; Quantity &amp;gt; A number of units used for the item. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: Both tabs &amp;gt; Date* &amp;gt; The date of the activity, case, applied labour, or other usage (for the item). | [optional] 
**type** | **string** | Transaction history tab &amp;gt; Type &amp;gt; The type of the customer ledger document. | [optional] 
**reference_nbr** | **string** | Transaction history tab &amp;gt; Ref. no. &amp;gt; The reference number of the document/invoice. | [optional] 
**billing_date** | [**\DateTime**](\DateTime.md) | Transaction history tab &amp;gt; Invoicing date &amp;gt; The date when the invoice was issued. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | A system generated date/time that indicates the last change for the document. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


