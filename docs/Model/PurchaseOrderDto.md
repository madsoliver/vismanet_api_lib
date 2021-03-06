# PurchaseOrderDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_destination_type** | **string** | Shipping instructions tab &amp;gt; The Delivery address section &amp;gt; Shipping destination type &amp;gt; The type of the shipping destination, which is one of the following options: Branch location (meaning a branch of your company), Customer, Supplier, and Warehouse. | [optional] 
**ship_to** | **object** | Shipping instructions tab &amp;gt; The Delivery address section &amp;gt; Ship to &amp;gt; The particular destination of the selected type. | [optional] 
**shipping_location** | **object** | Mandatory field: The Shipping instructions tab &amp;gt; The Delivery address section &amp;gt; Shipping location* &amp;gt; The location from which the order is to be shipped. | [optional] 
**warehouse** | **object** | Document details tab &amp;gt; Warehouse &amp;gt; The warehouse to receive the item listed on the order. | [optional] 
**shipping_contact** | **object** | Supplier information tab &amp;gt; The Supplier contact section &amp;gt; The supplier contact for matters related to this purchase order. | [optional] 
**shipping_address** | **object** | Supplier info tab &amp;gt; The Supplier address section &amp;gt; The default shipping address for the supplier. | [optional] 
**fob_point** | **string** | Delivery instructions tab &amp;gt; The Delivery instructions section &amp;gt; FOB point &amp;gt; The FOB point where the title of goods (listed on this purchase order) is transferred from the supplier to the company. | [optional] 
**ship_via** | **string** | Delivery instructions tab &amp;gt; The Delivery instructions section &amp;gt; Ship via &amp;gt; The carrier selected to ship the goods for the purchase order. | [optional] 
**ship_terms** | **string** | Delivery instructions tab &amp;gt; The Delivery instructions section &amp;gt; Shipping terms &amp;gt; The shipping terms for the purchase order. | [optional] 
**remit_contact** | **object** | Supplier info tab &amp;gt; The Supplier contact section &amp;gt; The default contact settings for the supplier. | [optional] 
**remit_address** | **object** | Supplier info tab &amp;gt; The Supplier address section &amp;gt; The default contact setting for the supplier. | [optional] 
**terms** | **object** | Mandatory field: The Supplier info tab &amp;gt; The Info section &amp;gt; Terms* &amp;gt; The specific credit terms to be used for the purchase order. | [optional] 
**supplier_vat_zone** | **object** | Supplier info tab &amp;gt; The Info section &amp;gt; Supplier VAT zone &amp;gt; The VAT zone of the supplier&#39;s location. | [optional] 
**discount_details** | [**\Ekstralys\VismaNetApi\Model\DiscountDetailDto[]**](DiscountDetailDto.md) | Discount details tab &amp;gt; | [optional] 
**sales_order_type** | **string** | Other information tab &amp;gt; Sales order type &amp;gt; The type of the sales order associated with the purchase order. | [optional] 
**sales_order_nbr** | **string** | Other information tab &amp;gt; Sales order no. &amp;gt; The ID of the sales order associated with the purchase order. | [optional] 
**requisition_ref_nbr** | **string** | Other information tab &amp;gt; Requisition ref. no. &amp;gt; The reference number of the requisition document associated with the purchase order, if any. | [optional] 
**payment_ref_nbr** | **string** | Other information tab &amp;gt; Prepayment ref. no. &amp;gt; The reference number of the prepayment request linked to this purchase order, if any. | [optional] 
**workgroup_id** | **int** | Other information tab &amp;gt; Work group ID &amp;gt; The work group to which the purchase order was assigned for processing. | [optional] 
**dont_print** | **bool** | Other information &amp;gt; Do not print &amp;gt; A check box that indicates (if selected) that the current purchase order should not be printed. | [optional] 
**printed** | **bool** | Other information &amp;gt; Printed &amp;gt; A check box that indicates (if selected) that the current purchase order was printed. | [optional] 
**dont_email** | **bool** | Other information &amp;gt; Do not email &amp;gt; A check box that indicates (if selected) indicates that the purchase order should not be emailed. | [optional] 
**emailed** | **bool** | Other information &amp;gt; Emailed &amp;gt; A check box that indicates (if selected) indicates that the current purchase order was emailed. | [optional] 
**open_quantity** | **double** | Other information &amp;gt; Open Quantity &amp;gt; The difference between the quantities of ordered and received items. | [optional] 
**open_balance** | **double** | Other information &amp;gt; Open amount &amp;gt; The amount of these items that are ordered but not received. | [optional] 
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


