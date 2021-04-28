# PurchaseOrderLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_nbr** | **int** | The line number | [optional] 
**branch** | **object** | Branch &amp;gt; The branch associated with the purchase order. | [optional] 
**inventory** | **object** | Item ID &amp;gt; The ID of the item. | [optional] 
**line_type** | **string** | Line type &amp;gt;  The type of the order line, which can be one of the following options: Goods for inventory, Non-stock, Service, Freight, Good for sales order, Non-stock for drop-ship, Drop-ship, Goods for RP, Description. | [optional] 
**warehouse** | **object** | Warehouse &amp;gt; The warehouse to receive the item listed on the order. | [optional] 
**line_description** | **string** | A description of the order line, which is copied from the item&#39;s description. | [optional] 
**uom** | **string** | UoM &amp;gt; The unit of measure (UoM) in which the quantity of the item is specified. | [optional] 
**order_qty** | **double** | Order qty. &amp;gt; The quantity of the item that has been ordered. | [optional] 
**qty_on_receipts** | **double** | Qty. on receipts &amp;gt; The quantity of the item that has been received according to all receipts, including the unreleased ones. | [optional] 
**unit_cost** | **double** | Unit cost &amp;gt; The cost per UoM of the stock item. | [optional] 
**unit_cost_in_base_currency** | **double** | Background calculation connected with the View base/View currency function in the top part. Changes the values in Unit cost, Amount, Disc. unit cost and Cost fields. | [optional] 
**ext_cost** | **double** | Ext. cost &amp;gt; The extended cost of the item, which is the unit cost multiplied by the quantity. | [optional] 
**discount_percent** | **double** | Discount percent &amp;gt; If the Supplier customer discounts functionality is enabled in the Enable/disable functionalities (CS100000) window, the percent of the discount that has been entered manually or calculated based on the discount amount entered manually for this line item. | [optional] 
**discount_amount** | **double** | Discount amount &amp;gt; If the Supplier customer discounts functionality is enabled in the Enable/disable functionalities (CS100000) window, the amount of the discount that has been specified manually or calculated based on the discount percent entered manually. | [optional] 
**manual_discount** | **bool** | Manual discount &amp;gt; A check box that indicates (if selected) that the discount has been applied manually. | [optional] 
**discount_code** | **object** | Discount code &amp;gt; The code of the line discount that has been applied to this line automatically. | [optional] 
**amount** | **double** | Amount &amp;gt; The amount calculated (after the discount has been taken) for the item. | [optional] 
**received_amt** | **double** | Received amt. &amp;gt; The amount received on this purchase order for this item. | [optional] 
**alternate_id** | **string** | Alternate ID &amp;gt; The alternate ID used for this stock item-subitem pair by the supplier. | [optional] 
**min_receipt** | **double** | Min. receipt (%) &amp;gt; The minimum quantity of the item, expressed as a percentage of the ordered quantity, that is required for the item to be accepted at the warehouse if the Receipt action is Rejected. | [optional] 
**max_receipt** | **double** | Max. receipt (%) &amp;gt; The maximum quantity of the item, expressed as a percentage of the ordered quantity, that is required for the item to be accepted at the warehouse if the Receipt action is Rejected. | [optional] 
**complete_on** | **double** | Complete on (%) &amp;gt; The minimum percentage of the ordered quantity for the stock item that must be received to complete the purchase order line (gets the default value from the Threshold receipt (%) setting of the supplier in the (AP303000) window). | [optional] 
**receipt_action** | **string** | Receipt action &amp;gt; The action that should be perform when the ordered item is received if its quantity is greater than the Max. receipt value or less than the Min. receipt value calculated based on the line&#39;s ordered quantity. Values: Reject, Accept but warn, Accept. | [optional] 
**tax_category** | **object** | VAT category &amp;gt; The VAT category assigned to the ordered stock item. | [optional] 
**account** | **object** | Account &amp;gt; The expense account used to record the purchased non-stock item that does not require receipt (by default, the account specified for the item in the Combine COGS/expense sub. from field in the Posting classes (IN206000) window). | [optional] 
**sub** | **object** | Sub. ID &amp;gt; The subaccount used to record the purchased non-stock item that does not require receipt (by default, the subaccount generated in accordance with the rule defined in the Combine COGS/expense sub. from field in the Posting classes (IN206000) window). | [optional] 
**project** | **object** | Project &amp;gt; The project with which this purchase order line is associated. | [optional] 
**project_task** | **object** | Project task &amp;gt; The project task with which this purchase order is associated. | [optional] 
**requested** | [**\DateTime**](\DateTime.md) | Requested &amp;gt; The date when the item was requested. | [optional] 
**promised** | [**\DateTime**](\DateTime.md) | Promised &amp;gt; The date when the item&#39;s deliver was promised. | [optional] 
**completed** | **bool** | Completed &amp;gt; A check box that indicates (if selected) that the purchasing of the item requested by this line of the purchase order has been completed. | [optional] 
**canceled** | **bool** | Cancelled &amp;gt; A check box that indicates (if selected) that this line of the purchase order has been cancelled. | [optional] 
**order_type** | **string** | Order type &amp;gt; The order type this order is related to (for normal orders based on blanket or standard orders). | [optional] 
**order_number** | **string** | Order no. &amp;gt;  The reference number of the blanket or standard order (for normal orders based on blanket or standard orders). | [optional] 
**note** | **string** | Table &amp;gt; Icon Notes &amp;gt; Pop-up window for providing any user-defined text connected to the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


