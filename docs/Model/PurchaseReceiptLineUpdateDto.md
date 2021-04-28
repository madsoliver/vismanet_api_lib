# PurchaseReceiptLineUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allocations** | [**\Ekstralys\VismaNetApi\Model\AllocationsUpdateDto[]**](AllocationsUpdateDto.md) |  | [optional] 
**operation** | **string** |  | [optional] 
**line_nbr** | **object** | The Document details tab &amp;gt; The number of the purchase receipt line. | [optional] 
**line_type** | **object** | The Document details tab &amp;gt; The type of the purchase receipt line. | [optional] 
**branch_id** | **object** | BranchId is deprecated, please use BranchNumber instead. | [optional] 
**branch_number** | **object** | The Document details tab &amp;gt; The number of the branch to which the purchase receipt line belongs. | [optional] 
**inventory_id** | **object** | The Document details tab &amp;gt; The item ID of the received item. | [optional] 
**warehouse_id** | **object** | The Document details tab &amp;gt; The warehouse where the item has been received. | [optional] 
**location_id** | **object** | The Document details tab &amp;gt; The location where the item has been received. | [optional] 
**transaction_description** | **object** | The Document details tab &amp;gt; The description of the receipt or return transaction. | [optional] 
**uom** | **object** | The Document details tab &amp;gt; The unit of measure (UoM) used for the purchased or transferred item. By default, it is the purchase unit. | [optional] 
**receipt_qty** | **object** | The Document details tab &amp;gt; The quantity of the item in the specified UoM that has been received (listed on released receipts). | [optional] 
**unit_cost** | **object** | The Document details tab &amp;gt; The cost of a unit of the purchased item. | [optional] 
**ext_cost** | **object** | The Document details tab &amp;gt; The extended cost of the item, which is the unit price multiplied by the quantity. | [optional] 
**discount_percent** | **object** | The Document details tab &amp;gt; The automatically calculated or manually entered discount percent on the line. | [optional] 
**discount_amount** | **object** | The Document details tab &amp;gt; The automatically calculated or manually entered discount amount on the line. | [optional] 
**manual_discount** | **object** | The Document details tab &amp;gt; A check box that indicates (if selected) that the discount has been applied manually. | [optional] 
**discount_code_id** | **object** | The Document details tab &amp;gt; The code of the line discount that has been applied to this line automatically. | [optional] 
**amount** | **object** | The Document details tab &amp;gt; The amount calculated (after discount has been taken) for the item. | [optional] 
**tax_category_id** | **object** | The Document details tab &amp;gt; The VAT category assigned to the stock item. | [optional] 
**account_id** | **object** | The Document details tab &amp;gt; The account used to record the item amount on the purchase receipt; used for non-stock items for which receipt is not required. | [optional] 
**account_description** | **object** | The Document details tab &amp;gt; The description of this account. | [optional] 
**subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) | The Document details tab &amp;gt; The subaccount to be used to record the non-stock item amount on the purchase receipt (for non-stock items for which receipts are not required). | [optional] 
**actual_account_id** | **object** | The Document details tab &amp;gt; The accrual account to record the item amount on the purchase receipt; used for stock items and non-stock items for which a receipt is required. | [optional] 
**actual_subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) | The Document details tab &amp;gt; The subaccount used to record the item amount on the purchase receipt, used for stock items and non-stock items for which a receipt is required. | [optional] 
**project_id** | **object** | The Document details tab &amp;gt; The project with which the document is associated. | [optional] 
**project_task_id** | **object** | The Document details tab &amp;gt; The project task with which the document is associated. | [optional] 
**expiration_date** | **object** | The Document details tab &amp;gt; The expiration date of the received item. | [optional] 
**lot_serial_number** | **object** |  | [optional] 
**po_order_type** | **object** | The Document details tab &amp;gt; The type of the purchase order related to this purchase receipt. | [optional] 
**po_order_nbr** | **object** | This property replaced by an action, please use the following sub-endpoint:/controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorder. | [optional] 
**po_order_line_nbr** | **object** | This property replaced by an action please use the following sub-endpoint:/controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorderlines | [optional] 
**transfer_order_type** | **object** | The Document details tab &amp;gt; The type of the transfer order to which this receipt is linked. | [optional] 
**transfer_order_nbr** | **object** | The Document details tab &amp;gt; The reference number of the transfer order to which this receipt is linked. | [optional] 
**transfer_order_line_nbr** | **object** | The Document details tab &amp;gt; The line number in the transfer order to which this receipt is linked. | [optional] 
**complete_po_line** | **object** | The Document details tab &amp;gt; A check box that indicates to the system (if selected) that the purchase order line added to this receipt line should be considered completed upon release of this purchase receipt. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


