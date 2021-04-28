# WarehouseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **string** | Mandatory field: The top part &amp;gt; Warehouse ID* &amp;gt; The unique ID of the warehouse. | [optional] 
**branch** | **object** | Mandatory field: The top part &amp;gt; Branch* &amp;gt; The branch associated with the company. | [optional] 
**replenishment_class** | **object** | The top part &amp;gt; Replenishment class &amp;gt; The replenishment class associated with this warehouse. | [optional] 
**active** | **bool** | The top part &amp;gt; Active &amp;gt; This check box indicates (if selected) that the warehouse is active. | [optional] 
**lock_site_pi_count_entry** | **bool** | The top part &amp;gt; Freeze the inventory when the stocktaking is in data entry state &amp;gt; This check box indicates (if selected) that the inventory in the warehouse will be frozen during the stocktaking and data entry stages of stocktaking. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A brief description of the warehouse. | [optional] 
**location_entry** | **string** | The top part &amp;gt; Location entry &amp;gt; An option indicating whether warehouse locations can be added directly on any inventory document or only by using this window. | [optional] 
**avg_default_cost** | **string** | The top part &amp;gt; Avg. default return cost &amp;gt; For items with the Average valuation method, the option that defines which of costs should be used for returns and receipts. | [optional] 
**fifo_default_cost** | **string** | The top part &amp;gt; FIFO default returns cost &amp;gt; For items with the FIFO valuation method, the option that defines which of costs should be used for returns and receipts. | [optional] 
**receipt_location** | **object** | Location table tab &amp;gt; Receiving location &amp;gt; The warehouse location to be used to receive goods. | [optional] 
**ship_location** | **object** | Location table tab &amp;gt; Shipping location &amp;gt; The warehouse location to be used to ship goods. | [optional] 
**return_location** | **object** | Location table tab &amp;gt; RMA location &amp;gt; The RMA warehouse location. | [optional] 
**drop_ship_location** | **object** | Location table tab &amp;gt; Drop-ship location &amp;gt; The warehouse location used to account for drop shipments. | [optional] 
**contact** | **object** | Address information tab &amp;gt; Contact section &amp;gt; | [optional] 
**address** | **object** | Address information tab &amp;gt; Address section &amp;gt; | [optional] 
**locations** | [**\Ekstralys\VismaNetApi\Model\WarehouseLocationDto[]**](WarehouseLocationDto.md) | Location table tab &amp;gt; The location table &amp;gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


