# FinancialsDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_number** | **string** | Link to general ledger section &amp;gt; Batch number &amp;gt; The number of the batch generated to implement the cash transaction. | [optional] 
**branch** | **object** | Link to general ledger section &amp;gt; Branch &amp;gt;  The branch that initiated the transaction. | [optional] 
**cleared** | **bool** | Link to general ledger section &amp;gt; Cleared &amp;gt; A check box that indicates (if selected) that the transaction was cleared. | [optional] 
**clear_date** | [**\DateTime**](\DateTime.md) | Link to general ledger section &amp;gt; Clear date &amp;gt;  The date when the transaction was cleared. | [optional] 
**tax_zone** | **object** | VAT settings section &amp;gt; VAT zone &amp;gt; The VAT zone that applies to the transaction. | [optional] 
**tax_calc_mode** | **string** | VAT settings section &amp;gt; VAT calculation &amp;gt; The VAT calculation mode, which defines which amounts (VAT-inclusive or VAT-exclusive) should be entered in the detail lines of a document. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


