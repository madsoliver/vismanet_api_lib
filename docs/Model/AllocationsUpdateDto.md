# AllocationsUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** | The operation &amp;gt;  Insert&#x3D;1, Update&#x3D;2, Delete&#x3D;3 | [optional] 
**line_nbr** | **object** | Line no. &amp;gt; The line of the purchase order that contains the selected item. | [optional] 
**location** | **object** | Location &amp;gt; The location in the warehouse. | [optional] 
**lot_serial_number** | **object** | Lot/Serial no. &amp;gt; The lot or serial number of the item. | [optional] 
**quantity** | **object** | Quantity &amp;gt; The quantity of the stock item with the same lot number. It is 1 for items with serial numbers. | [optional] 
**uom** | **object** | UoM &amp;gt; The unit of measure for the specified quantity of the inventory item. | [optional] 
**expiration_date** | **object** | Expiration date &amp;gt; The expiration date of the specified quantity of the stock item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


