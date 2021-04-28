# InventoryReceiptLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse** | **object** | Mandatory field: Warehouse* &amp;gt; The warehouse where the stock item is received. | [optional] 
**unit_cost** | **double** | Unit cost &amp;gt; The cost of a unit of the received stock item. | [optional] 
**ext_cost** | **double** | Cost &amp;gt; The extended cost of the received stock item. An extended cost is calculated automatically as the unit cost multiplied by the quantity (or amount) of item that was received. | [optional] 
**project** | **object** | Project | [optional] 
**project_task** | **object** | Project Task | [optional] 
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


