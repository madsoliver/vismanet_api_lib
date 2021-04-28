# PurchaseReceiptDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**landed_cost** | [**\Ekstralys\VismaNetApi\Model\LandedCostDto[]**](LandedCostDto.md) | Landed costs tab &amp;gt; Landed cost code &amp;gt; The landed cost code specified in the line of the landed cost document. | [optional] 
**receipt_type** | **string** | The top part &amp;gt; Type &amp;gt; The type of the document, which can be one of the following options: Receipt, Return, Transfer receipt. | [optional] 
**receipt_nbr** | **string** | The top part &amp;gt; Receipt no. &amp;gt; The unique reference number of the purchase receipt. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that indicates (if selected) that the document has the On hold status. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The current status of the purchase or transfer receipt, or return, which the system assigns automatically. On hold, Balanced, Released. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Date* &amp;gt; The date when the receipt document was created. | [optional] 
**post_period** | **string** | Mandatory field: The top part &amp;gt; Post period* &amp;gt; The financial period to which the transactions recorded in the document should be posted. Format MMYYYY. | [optional] 
**warehouse** | **object** | Mandatory field: The top part or the Documents details tab &amp;gt; Warehouse* &amp;gt; The warehouse from which the items have been received for transfer orders. | [optional] 
**supplier** | **object** | Mandatory field: The top part &amp;gt; Supplier* &amp;gt; The supplier from which the items have been received or to which they will be returned. | [optional] 
**location** | **object** | Mandatory field: The top part Location* &amp;gt; The supplier location from which the items should be received or to which they should be returned. | [optional] 
**currency** | **string** | The top part &amp;gt; Currency &amp;gt; The currency the supplier uses for invoicing. | [optional] 
**exchange_rate** | **double** |  | [optional] 
**create_bill** | **bool** | The top part &amp;gt; Create invoice &amp;gt; A check box that you select if the system must create an appropriate invoice (or adjustment) automatically when the purchase receipt is released. | [optional] 
**supplier_ref** | **string** | The top part &amp;gt; Supplier ref. &amp;gt; The reference number of the supplier document this receipt or return is based on. | [optional] 
**total_qty** | **double** | The top part &amp;gt; Total qty. &amp;gt; The total quantity of items received from or returned to the supplier. | [optional] 
**control_qty** | **double** | The top part &amp;gt; Control qty. &amp;gt; The total quantity of goods on the receipt or return | [optional] 
**vat_exempt_total** | **double** | The top part &amp;gt; VAT exempt total &amp;gt; The document total that is exempt from VAT. | [optional] 
**vat_taxable_total** | **double** | The top part &amp;gt; VAT taxable total &amp;gt; The document total that is subjected to VAT. | [optional] 
**total_amt** | **double** | The top part &amp;gt; Total amt. &amp;gt; The total amount calculated for items received from or returned to the supplier. | [optional] 
**control_total** | **double** | The top part &amp;gt; Control amt. &amp;gt; The total amount of the receipt or return, which you manually enter. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**branch_number** | **object** | Mandatory field: Document details tab &amp;gt; Branch* &amp;gt; The branch to which the document belongs. | [optional] 
**lines** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptLineDto[]**](PurchaseReceiptLineDto.md) | Document details tab &amp;gt; Line no &amp;gt; The number of the purchase receipt line on the document. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


