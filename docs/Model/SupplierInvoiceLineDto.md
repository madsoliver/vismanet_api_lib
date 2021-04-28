# SupplierInvoiceLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | The table &amp;gt; Number at the left indicating the line number of the table. | [optional] 
**inventory_number** | **string** | The table &amp;gt; Item ID &amp;gt; The unique ID of the particular item or service delivered by the supplier. | [optional] 
**stock_item** | **bool** | Background information indicating whether the item is a stock item or not. | [optional] 
**transaction_description** | **string** | The table &amp;gt; Transaction descr. &amp;gt; Any description relevant to the transaction. An alphanumeric string of up to 30 characters may be used. | [optional] 
**quantity** | **double** | The table &amp;gt; Quantity &amp;gt; The quantity of the item or service to be delivered by the supplier. | [optional] 
**uom** | **string** | The table &amp;gt; UoM &amp;gt; The unit of measure for the item. | [optional] 
**unit_cost** | **double** | The table &amp;gt; Unit cost &amp;gt; The unit cost of the item. | [optional] 
**unit_cost_in_currency** | **double** | Background calculation giving you the Unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. | [optional] 
**cost** | **double** | The table &amp;gt; Cost &amp;gt; The unit cost of the item or service received from the supplier. | [optional] 
**cost_in_currency** | **double** | Background calculation giving you the Cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. | [optional] 
**discount_percent** | **double** | The table &amp;gt; Discount percent &amp;gt; The percent of the line-level discount that has been applied manually or automatically. | [optional] 
**discount_amount** | **double** | The table &amp;gt; Discount amount &amp;gt; The amount of the line-level discount that has been applied manually or automatically to this line. | [optional] 
**discount_amount_in_currency** | **double** | Background calculation giving you the Discount amount in the selected currency.This field is applicable if the amount is given in a another currency than your default. | [optional] 
**discount_unit_cost** | **double** | Background calculation giving you the Discount unit cost in the default currency. | [optional] 
**discount_unit_cost_in_currency** | **double** | Background calculation giving you the Discount unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. | [optional] 
**manual_discount** | **bool** | The table &amp;gt; Manual discount &amp;gt; A check box that indicates (if selected) that the discount has been applied manually. | [optional] 
**account** | **object** | The table &amp;gt; Mandatory field: Account* &amp;gt; The purchase account used for the invoice line. | [optional] 
**subaccount** | **object** | The table &amp;gt; Mandatory field: Subaccount* &amp;gt; The corresponding subaccount used for this invoice line. | [optional] 
**deferral_schedule** | **int** | The table &amp;gt; Original deferral schedule &amp;gt; A read-only column filled in by the system in the Debit adjustment documents created by the reversing process.It shows the ID of the deferral schedule associated with the original document (such as a purchase invoice). | [optional] 
**deferral_code** | **string** | The table &amp;gt; Deferral code &amp;gt; The deferral code assigned to the stock item or non-stock item specified in this document line. | [optional] 
**vat_code** | **object** | The table &amp;gt; VAT category &amp;gt; The VAT category (if applied) for the transaction. Unless you specify otherwise, it is the default VAT category of the supplier location&#39;s VAT zone. | [optional] 
**po_number** | **string** | The table &amp;gt; Purchase order number &amp;gt; The number of the purchase order linked to this line of the invoice. | [optional] 
**po_line_nr** | **int** | The table &amp;gt; Purchase order line &amp;gt; The line number of the purchase order line linked to this line of the invoice. | [optional] 
**po_receipt_nbr** | **string** | The table &amp;gt; Purchase order receipt no. &amp;gt; The number of the purchase receipt linked to this line of the invoice. | [optional] 
**po_receipt_line_nbr** | **int** | The table &amp;gt; Purchase order receipt line &amp;gt; The line number of the purchase receipt&#39;s line that is linked to this line of the invoice. | [optional] 
**branch_number** | **object** | The table &amp;gt; Mandatory field: Branch* &amp;gt; The branch that purchases the line item or service.  Note: The field type has been changed from string to BranchNumberDto, please consider doing changes accordingly. | [optional] 
**note** | **string** | The table &amp;gt; Icon Notes &amp;gt; Pop-up window for providing any user-defined text connected with to invoice. | [optional] 
**split_hierarchy** | **string** | The table &amp;gt; Split hierarchy &amp;gt; The number of the original row that has been split. | [optional] 
**project** | **object** | The table &amp;gt; Project &amp;gt; The project associated with the invoice line. | [optional] 
**project_task** | **object** | The table &amp;gt; Project task &amp;gt; The project task associated with the invoice line. | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) | The data containing information about the document attachments | [optional] 
**retainage_pct** | **double** |  | [optional] 
**cury_retainage_amt** | **double** |  | [optional] 
**term_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**term_end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


