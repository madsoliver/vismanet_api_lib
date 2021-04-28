# PurchaseReceiptLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allocations** | [**\Ekstralys\VismaNetApi\Model\AllocationsDto[]**](AllocationsDto.md) |  | [optional] 
**line_nbr** | **int** | The line number | [optional] 
**branch** | **object** | Branch is deprecated, please use BranchNumber instead. | [optional] 
**branch_number** | **object** | Mandatory field: Document details tab &amp;gt; Branch* &amp;gt; The branch for which the item is purchased. | [optional] 
**inventory** | **object** |  | [optional] 
**line_type** | **string** | Document details tab &amp;gt; Line type &amp;gt; The type of the purchase order line. | [optional] 
**warehouse** | **object** | Mandatory field: Document details tab &amp;gt; Warehouse* &amp;gt; The warehouse where the item has been received. | [optional] 
**location** | **object** | Document details tab &amp;gt; Location &amp;gt; The location where the item has been received. | [optional] 
**transaction_description** | **string** | Document details tab &amp;gt; Transaction descr. &amp;gt; The description of the receipt or return transaction. | [optional] 
**uom** | **string** | Document details tab &amp;gt; UoM &amp;gt; The unit of measure (UoM) used for the purchased or transferred item. | [optional] 
**order_qty** | **double** | Document details tab &amp;gt; Ordered qty.  &amp;gt; The quantity of the purchased item (in the specified UoM). | [optional] 
**open_qty** | **double** | Document details tab &amp;gt; Open qty. &amp;gt; The quantity of the stock item yet to be received on the purchase order. | [optional] 
**receipt_qty** | **double** | Document details tab &amp;gt; Receipts qty. &amp;gt;  The quantity of the item (with the specified subitem code) in the specified UoM that has been received (listed on released receipts). | [optional] 
**unit_cost** | **double** | Document details tab &amp;gt; Unit cost &amp;gt; The cost of a unit of the purchased item. | [optional] 
**ext_cost** | **double** | Document details tab &amp;gt; Cost &amp;gt; The cost of the item, which is the unit price multiplied by the quantity. | [optional] 
**discount_percent** | **double** | Document details tab &amp;gt; Discount percent &amp;gt; If the Supplier and customer discounts functionality is enabled, the percent of the discount that has been entered manually or calculated based on the discount amount entered manually for this line item. | [optional] 
**discount_amount** | **double** | Document details tab &amp;gt; Discount amount &amp;gt; If the Supplier and customer discounts functionality is enabled, the amount of the discount that has been specified manually or calculated based on the discount percent entered manually. | [optional] 
**manual_discount** | **bool** | Document details tab &amp;gt; Manual discount &amp;gt; A check box that indicates (if selected) that the discount has been applied manually. | [optional] 
**discount_code** | **object** | Document details tab &amp;gt; Discount code &amp;gt; The code of the line discount that has been applied to this line automatically. | [optional] 
**amount** | **double** | Document details tab &amp;gt; Amount &amp;gt; The amount calculated (after discount has been taken) for the item. | [optional] 
**tax_category** | **object** | Document details tab &amp;gt; VAT category &amp;gt; The VAT category assigned to the stock item. | [optional] 
**account** | **object** | Document details tab &amp;gt; Account &amp;gt; The account used to record the item amount on the purchase receipt; | [optional] 
**account_description** | **string** | Document details tab &amp;gt; Description &amp;gt; The description of this account. | [optional] 
**sub** | **object** | Document details tab &amp;gt; Sub ID &amp;gt; The subaccount to be used to record the non-stock item amount on the purchase receipt (for non-stock items for which receipts are not required). | [optional] 
**actual_account** | **object** | Document details tab &amp;gt; Accrual account &amp;gt; The accrual account to record the item amount on the purchase receipt; used for stock items and non-stock items for which a receipt is required. | [optional] 
**actual_sub** | **object** | Document details tab &amp;gt; Accrual sub. &amp;gt; The subaccount used to record the item amount on the purchase receipt, used for stock items and non-stock items for which a receipt is required. | [optional] 
**project** | **object** | Document details tab &amp;gt; Project &amp;gt; The project with which the document is associated. If the document is based on a purchase order, the project is automatically copied from the respective purchase order line. | [optional] 
**project_task** | **object** | Document details tab &amp;gt; Project task &amp;gt; The project task with which the document is associated. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Document details tab &amp;gt; Expiration date &amp;gt; The expiration date of the received item. | [optional] 
**lot_serial_number** | **string** | Document details tab &amp;gt; Lot/serial no. &amp;gt; The lot or serial number assigned to the received quantity of the purchased item. | [optional] 
**po_order_type** | **string** | Document details tab &amp;gt; Purchase order type &amp;gt; The type of the purchase order related to this purchase receipt. | [optional] 
**po_order_nbr** | **string** | Document details tab &amp;gt; Purchase order no. &amp;gt; The reference number of the purchase order related to this purchase receipt. | [optional] 
**po_order_line_nbr** | **int** | Document details tab &amp;gt; Purchase order line no. &amp;gt; The line number of the purchase order related to this line of the purchase receipt. | [optional] 
**transfer_order_type** | **string** | Document details tab &amp;gt; Transfer order type &amp;gt; The type of the transfer order to which this receipt is linked. | [optional] 
**transfer_order_nbr** | **string** | Document details tab &amp;gt; Transfer order no. &amp;gt; The reference number of the transfer order to which this receipt is linked. | [optional] 
**transfer_order_line_nbr** | **int** | Document details tab &amp;gt; Transfer line no &amp;gt; The line number in the transfer order to which this receipt is linked. | [optional] 
**complete_po_line** | **bool** | Document details tab &amp;gt; Complelete purchase line &amp;gt; A check box that indicates to the system (if selected) that the purchase order line added to this receipt line should be considered completed upon release of this purchase receipt. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


