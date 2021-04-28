# PurchaseOrderBasicDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_type** | **string** | The top part &amp;gt; Type &amp;gt; The type of the purchase order, which can be one of these options: Normal, Drop-ship, Blanket, Default | [optional] 
**order_nbr** | **string** | The top part &amp;gt; Order no. &amp;gt; The unique reference number of the purchase order, which the system assigns based on the number series assigned to purchase orders of this type, as specified in the PO101000 window. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that you select to give the purchase order the On hold status. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The system-generated status of the purchase order, which can be one of the following options: On hold, Open, Pending approval, Rejected, Pending printing, Pending e-mail, Closed, Cancelled. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Date* &amp;gt; The date when the purchase order was created. | [optional] 
**promised_on** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Delivery date &amp;gt; The date when the supplier promised that the items listed in the order will be received at their destination location. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A brief description of the purchase order. | [optional] 
**supplier** | **object** | Mandatory field: The top part &amp;gt; Supplier* &amp;gt; The supplier from which the items will be purchased. | [optional] 
**location** | **object** | Mandatory field: The top part &amp;gt; Location* &amp;gt; Click the magnifier. The supplier location from which the items will be received. | [optional] 
**owner** | **object** | The top part &amp;gt; Owner &amp;gt; The employee who is responsible for the purchase order. | [optional] 
**currency** | **string** | The top part &amp;gt; Currency &amp;gt; The currency the purchase order will be paid in. | [optional] 
**supplier_ref** | **string** | The top part &amp;gt; Supplier ref. &amp;gt; The reference number of the supplier document related to this purchase order. | [optional] 
**exchange_rate** | **double** |  | [optional] 
**line_total** | **double** | The top part &amp;gt; Line total &amp;gt; The total sum of the Extended amount entries for all lines in the current purchase order. This value is calculated by the system and users cannot manually change it. | [optional] 
**line_total_in_base_currency** | **double** | The top part &amp;gt; View base &amp;gt; A button that recalculates the Line total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. | [optional] 
**vat_exempt_total** | **double** | The Top part &amp;gt; VAT exempt total &amp;gt; The document total that is exempt from VAT. This total is calculated as the taxable amount for the VAT with the Include in VAT exempt total check box selected in the TX205000 window. | [optional] 
**vat_exempt_total_in_base_currency** | **double** | The top part &amp;gt; View base &amp;gt; A button that recalculates the VAT exempt total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. | [optional] 
**tax_total** | **double** | The Top part &amp;gt; VAT total &amp;gt; The total VAT amount for all lines added to the current purchase order. This value, also calculated by the system, is the sum of the VAT amounts for each line. | [optional] 
**tax_total_in_base_currency** | **double** | The top part &amp;gt; View base &amp;gt; A button that recalculates the VAT total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. | [optional] 
**order_total** | **double** | The Top part &amp;gt; Order total &amp;gt; The total sum for the purchase order, including VAT. This read-only value is the sum of the Line total and VAT total values. | [optional] 
**order_total_in_base_currency** | **double** | The top part &amp;gt; View base &amp;gt; A button that recalculates the Order total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. | [optional] 
**control_total** | **double** | The top part &amp;gt; Control total &amp;gt; The order&#39;s total amount (including VAT), which you must enter manually when you attempt to save the order with the Balanced status. | [optional] 
**control_total_in_base_currency** | **double** | The top part &amp;gt; View base &amp;gt; A button that recalculates the Control total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. | [optional] 
**branch** | **object** | Document details tab &amp;gt; Branch &amp;gt; The branch to receive the item. | [optional] 
**lines** | [**\Ekstralys\VismaNetApi\Model\PurchaseOrderLineDto[]**](PurchaseOrderLineDto.md) | Document details tab &amp;gt; The table &amp;gt; | [optional] 
**tax_details** | [**\Ekstralys\VismaNetApi\Model\TaxDetailDto[]**](TaxDetailDto.md) | VAT details tab &amp;gt; | [optional] 
**purchase_receipts** | [**\Ekstralys\VismaNetApi\Model\PurchaseReceiptsDto[]**](PurchaseReceiptsDto.md) | Purchase receipts tab &amp;gt; | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**note** | **string** | Icon Notes on top of the window &amp;gt; Pop-up window for providing any user-defined text connected to the document. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


