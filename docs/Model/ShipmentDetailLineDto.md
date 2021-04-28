# ShipmentDetailLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Document details tab &amp;gt; The line number indicating sequence. | [optional] 
**order_type** | **string** | Document details tab &amp;gt; The type of the document, which is one of the predefined order types or a custom order type. | [optional] 
**order_nbr** | **string** | Document details tab &amp;gt; Order no. &amp;gt; The reference number of the document. | [optional] 
**inventory_number** | **string** | Document details tab &amp;gt; Item ID &amp;gt; The ID of the item being shipped. | [optional] 
**free_item** | **bool** | Document details tab &amp;gt; Free item &amp;gt; The free item earned by the customer, if applicable. (This column does not appear for transfer.) | [optional] 
**warehouse** | **object** | Mandatory field: Document details tab &amp;gt; Warehouse* &amp;gt; The warehouse from which the items is shipped. | [optional] 
**location** | **object** | Document details tab &amp;gt; Location &amp;gt; The location in the warehouse from which the item is shipped. | [optional] 
**uom** | **string** | Document details tab &amp;gt; UoM &amp;gt; The unit of measure used for the item in shipment. | [optional] 
**shipped_qty** | **double** | Document details tab &amp;gt; Shipped qty. &amp;gt; The quantity of the item shipped with the specified properties. | [optional] 
**ordered_qty** | **double** | Document details tab &amp;gt; Ordered qty. &amp;gt; The quantity of the item ordered with the specified properties. | [optional] 
**open_qty** | **double** | Document details tab &amp;gt; Open qty. &amp;gt; The number of items with the specified quantities still to be shipped. | [optional] 
**lot_serial_nbr** | **string** | Document details tab &amp;gt; Lot/serial no. &amp;gt; The lot or serial number of particular items of the item. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Document details tab &amp;gt; Expiration date &amp;gt; The expiration date of the item, if it is traced for this item ID. | [optional] 
**reason_code** | **string** | Document details tab &amp;gt; Reason code &amp;gt; The reason code used for shipments. | [optional] 
**description** | **string** | Document details tab &amp;gt; Description &amp;gt; A short description for the shipment. | [optional] 
**allocations** | [**\Ekstralys\VismaNetApi\Model\AllocationsDto[]**](AllocationsDto.md) | Document details tab &amp;gt; Allocations button &amp;gt; Opens the Allocations dialog box, so that you can specify the locations, or lot or serial numbers for the units of the of the item. | [optional] 
**order_line_nbr** | **int** | Document details tab &amp;gt; Order line no. &amp;gt; Read only. The order&#39;s line number that matches this shipment line. | [optional] 
**note** | **string** |  | [optional] 
**external_link** | **string** |  | [optional] 
**alternate_id** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


