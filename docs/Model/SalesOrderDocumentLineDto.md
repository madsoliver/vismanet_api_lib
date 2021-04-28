# SalesOrderDocumentLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_nbr** | **int** | Document details tab &amp;gt; Line no. &amp;gt; The line number of the document. | [optional] 
**sort_order** | **int** | Document details tab &amp;gt; Line order &amp;gt; The order number of the document line. The system regenerates this number automatically when you reorder the lines in the table. | [optional] 
**inventory** | **object** |  | [optional] 
**warehouse** | **object** |  | [optional] 
**uom** | **string** | Mandatory field: Document details tab &amp;gt; UoM* &amp;gt; The unit of measure (UoM) used for the item with this item ID. | [optional] 
**quantity** | **double** | Document details tab &amp;gt; Quantity &amp;gt; The quantity of the item sold, measured in the UoM. | [optional] 
**qty_on_shipments** | **double** | Document details tab &amp;gt; Qty. on shipments &amp;gt; A read-only column that displays the quantity of the stock item being prepared for shipment and already shipped for this order. | [optional] 
**open_qty** | **double** | Document details tab &amp;gt; Open qty. &amp;gt; The quantity of the item to be shipped; that is, the total quantity minus the quantity shipped according to closed shipment documents. | [optional] 
**unit_cost** | **double** | Document details tab &amp;gt; Unit Cost &amp;gt; The cost of the unit on the sales order. | [optional] 
**unit_price** | **double** | Document details tab &amp;gt; Unit price &amp;gt; The price of the unit on the sales order. | [optional] 
**unit_price_in_base_currency** | **double** |  | [optional] 
**discount_code** | **string** | Mandatory field: Document details tab &amp;gt; Discount details tab &amp;gt; Discount code* &amp;gt; The code of the discount that has been applied to this line. | [optional] 
**discount_percent** | **double** | Document details tab &amp;gt; Discount percent &amp;gt; The percent of the line-level discount that has been applied manually or automatically to this line item (if the item is not a free item). | [optional] 
**discount_amount** | **double** | Document details tab &amp;gt; Discount amount &amp;gt; The amount of the line-level discount that has been applied manually or automatically to this line item (if the item is not a free item). | [optional] 
**manual_discount** | **bool** | Document details tab &amp;gt; Manual discount &amp;gt; A check box that indicates (if selected) that the discount has been applied manually. | [optional] 
**disc_unit_price** | **double** | Document details tab &amp;gt; Disc. unit price &amp;gt; The unit price, which has been recalculated after the application of discounts. | [optional] 
**ext_price** | **double** | Document details tab &amp;gt; Extended cost &amp;gt; The extended price, which is the unit price multiplied by the quantity. | [optional] 
**unbilled_amount** | **double** | Document details tab &amp;gt; Amount not yet invoiced &amp;gt; The amount of cancelled shipments and cancelled remainders. | [optional] 
**line_description** | **string** | Document details tab &amp;gt; Line description &amp;gt; The description of the unit. | [optional] 
**branch_number** | **object** |  | [optional] 
**note** | **string** | Tables in tab &amp;gt; Icon Notes &amp;gt; Pop-up window for providing any user-defined text connected to the order. | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) | The data containing information about the document attachments | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


