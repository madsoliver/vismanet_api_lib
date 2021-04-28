# WarehouseLocationUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **object** | Location ID &amp;gt; The unique ID of the warehouse location. | [optional] 
**description** | **object** | Description &amp;gt; A brief description of the warehouse location. | [optional] 
**active** | **object** | Active &amp;gt; This check box indicates whether this location is active. | [optional] 
**incl_qty_avail** | **object** | Include in qty. available &amp;gt; You select this check box if the quantities of goods available at this location will be included in the quantities of available goods and used in inventory transactions, such as issues and transfers. | [optional] 
**is_costed** | **object** | Cost separately &amp;gt; You select this check box if the costs for goods available at this location will be calculated separately from costs calculated at the system-level; that is, for FIFO and specific valuation methods, separate cost layers will be created for this location. | [optional] 
**sales_valid** | **object** | Sales allowed &amp;gt; You select this check box if sales are allowed from this location. | [optional] 
**receipts_valid** | **object** | Receipts allowed &amp;gt; You select this check box if receipts are allowed at this location. | [optional] 
**transfers_valid** | **object** | Transfers allowed &amp;gt; You select this check box if transfers are allowed for this location. | [optional] 
**assembly_valid** | **object** | Assembly allowed &amp;gt; You select this check box if assembly operations are allowed at this location. | [optional] 
**pick_priority** | **object** | Pick priority &amp;gt; The order of which location should have priority. | [optional] 
**primary_item_valid** | **object** | Primary item validation &amp;gt; An option indicating whether the operations with the primary item should be validated for this location and how. | [optional] 
**primary_item_id** | **object** | Primary item &amp;gt; The primary item for this location, which is the item that is received the most often or stored here in the highest volumes. | [optional] 
**primary_item_class_id** | **object** | Primary item class &amp;gt; The primary item class for this location; items of this class are received the most often or stored here in the highest volumes. | [optional] 
**project_id** | **object** | Project &amp;gt; The project to associate with this location by default. | [optional] 
**project_task_id** | **object** | Project task &amp;gt; The project task to associate with this location by default. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


