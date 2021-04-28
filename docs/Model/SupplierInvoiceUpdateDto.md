# SupplierInvoiceUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type** | **object** |  | [optional] 
**reference_number** | **object** |  | [optional] 
**hold** | **object** |  | [optional] 
**date** | **object** |  | [optional] 
**orig_invoice_date** | **object** |  | [optional] 
**post_period** | **object** | The financial period to which the transactions recorded in the document should be posted. Use the format MMYYYY. | [optional] 
**financial_period** | **object** | The financial period to which the transactions recorded in the document should be posted. Use the format YYYYMM. | [optional] 
**supplier_reference** | **object** |  | [optional] 
**description** | **object** |  | [optional] 
**supplier_number** | **object** |  | [optional] 
**location_id** | **object** |  | [optional] 
**currency_id** | **object** |  | [optional] 
**payment_ref_no** | **object** |  | [optional] 
**credit_terms_id** | **object** |  | [optional] 
**due_date** | **object** |  | [optional] 
**cash_discount_date** | **object** |  | [optional] 
**note** | **object** |  | [optional] 
**exchange_rate** | **object** |  | [optional] 
**branch_number** | **object** |  | [optional] 
**rounding_diff_in_currency** | **object** |  | [optional] 
**tax_calculation_mode** | **object** |  | [optional] 
**supplier_tax_zone** | **object** |  | [optional] 
**cash_account** | **object** |  | [optional] 
**payment_method** | **object** |  | [optional] 
**pay_date** | **object** |  | [optional] 
**amount** | **object** |  | [optional] 
**vat_amount** | **object** |  | [optional] 
**payment_message** | **object** |  | [optional] 
**apply_retainage** | **object** |  | [optional] 
**tax_detail_lines** | [**\Ekstralys\VismaNetApi\Model\TaxDetailUpdateDto[]**](TaxDetailUpdateDto.md) |  | [optional] 
**invoice_lines** | [**\Ekstralys\VismaNetApi\Model\SupplierInvoiceLineUpdateDto[]**](SupplierInvoiceLineUpdateDto.md) |  | [optional] 
**approval_details** | **object** |  | [optional] 
**add_po_receipt_lines** | [**\Ekstralys\VismaNetApi\Model\AddPOReceiptLineDto[]**](AddPOReceiptLineDto.md) |  | [optional] 
**add_purchase_orders** | [**\Ekstralys\VismaNetApi\Model\AddPurchaseOrderDto[]**](AddPurchaseOrderDto.md) |  | [optional] 
**pay_selected** | **object** | The Financial details tab &amp;gt; The Default Payment Info section &amp;gt; When set to true indicates that the document is approved for payment. | [optional] 
**override_number_series** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


