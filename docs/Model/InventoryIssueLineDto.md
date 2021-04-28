# InventoryIssueLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | Trans. type &amp;gt; The type of inventory issue transaction. Select one of the following types: Issue, Return, Invoice, Debit note, Credit note. | [optional] 
**warehouse** | **object** | Mandatory field: Warehouse &amp;gt; (This column appears only if the Warehouses functionality is enabled in your system.) The warehouse from which the item is issued. | [optional] 
**unit_cost** | **double** | Unit cost &amp;gt; The cost of the specified unit of this stock item. | [optional] 
**ext_cost** | **double** | Ext. cost &amp;gt; The extended cost of the specified stock item. An extended cost is calculated automatically as the unit cost multiplied by the quantity of units involved in this transaction. | [optional] 
**unit_price** | **double** | Unit price &amp;gt; The price of the specified unit of this stock item. | [optional] 
**ext_price** | **double** | Ext. price &amp;gt; The extended price of the specified stock item, calculated automatically as the unit price multiplied by the quantity of the stock item involved in the inventory issue operation. | [optional] 
**project** | **object** | Project | [optional] 
**project_task** | **object** | Project Task | [optional] 
**lot_serial_number** | **string** |  | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**allocations** | [**\Ekstralys\VismaNetApi\Model\INAllocationsDto[]**](INAllocationsDto.md) |  | [optional] 
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


