# TaxDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_id** | **string** | Mandatory field: VAT ID* &amp;gt; The ID of the VAT applied to the document. | [optional] 
**record_id** | **int** | The id as stored in the database. It can be used when we want to update a VAT record. | [optional] 
**vat_id** | **object** | VAT ID &amp;gt; The ID of the specific VAT applied. | [optional] 
**vat_rate** | **double** | VAT rate &amp;gt; The rate of the VAT. | [optional] 
**taxable_amount** | **double** | Taxable amount &amp;gt; The taxable amount for the VAT, which is calculated at the document level. | [optional] 
**vat_amount** | **double** | VAT &amp;gt; The VAT amount for the specific VAT, which is calculated at the document level. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


