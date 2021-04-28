# InventoryAdjustmentLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse** | **object** | Mandatory field: Warehouse* &amp;gt; The warehouse where the item is stocked. | [optional] 
**unit_cost** | **double** | Unit cost &amp;gt; The cost of the unit used as base unit for the stock item. | [optional] 
**ext_cost** | **double** | Cost &amp;gt; The cost of the item. | [optional] 
**receipt_number** | **string** | Receipt no. &amp;gt; Reference number for the receipt for the stock item. | [optional] 
**line_number** | **int** |  | [optional] 
**inventory_item** | **object** | Mandatory field: Item ID* &amp;gt; The ID of the goods to be transferred. | [optional] 
**location** | **object** | Location &amp;gt; The warehouse location from which the goods are transferred. | [optional] 
**quantity** | **double** | Quantity &amp;gt; The quantity of the transferred goods (in the units indicated below). | [optional] 
**uom** | **string** | Mandatory field: UoM* &amp;gt; The unit of measure (UoM) used for the goods to be transferred. | [optional] 
**reason_code** | **object** | Reason code &amp;gt; The reason code associated with the transferred goods. | [optional] 
**description** | **string** | Description &amp;gt; A brief description of the goods transfer transaction. | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) |  | [optional] 
**branch_number** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


