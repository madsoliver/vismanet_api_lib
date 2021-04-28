# InventoryQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alternate_id** | **string** | Applies for both Stock and Non-stock items.  Some fields in this filter applies only for one of these. | [optional] 
**inventory_number** | **string** | The Item ID. | [optional] 
**sales_category** | **int** | The Category ID for the sales category, found on the Attributes tab. | [optional] 
**add_cost_price_statistics** | **bool** | This filter can be used only for stock items, from the Price/cost information tab. | [optional] 
**attributes** | **string** | Attributes (additional information) connected to the item. | [optional] 
**description** | **string** | A brief description of the stock item from the Top part of the window. | [optional] 
**availability_last_modified_date_time** | **string** | System retrieved information. | [optional] 
**availability_last_modified_date_time_condition** | **string** | System retrieved information for state/condition. | [optional] 
**inventory_types** | **string[]** | Filter on one or more inventory types: NonStockItem, LaborItem, ServiceItem, ChargeItem, ExpenseItem, FinishedGoodItem, ComponentPartItem or SubassemblyItem | [optional] 
**expand_cross_reference** | **bool** | These expand fields are by default set to true, but will be changed in the future.   Set to true to retrieve information about the cross-references (item ID and suppliers/customers ID for the item connected to the item. | [optional] 
**expand_attachment** | **bool** | Set to true to retrieve information about the attachments connected to the item. | [optional] 
**expand_attribute** | **bool** | Set to true to retrieve the attribute descriptions used for the item. | [optional] 
**expand_warehouse_detail** | **bool** | Set to true to retrieve information about the warehouse connected to the item. | [optional] 
**expand_account_information** | **bool** | Set to true to retrieve information about the account information connected to the item. | [optional] 
**expand_inventory_units** | **bool** | Set to true to retrieve information about the units of measure connected to the item. | [optional] 
**expand_supplier_details** | **bool** | Set to true to retrieve details about the supplier connected to the item. | [optional] 
**expand_sales_categories** | **bool** | Set to true to retrieve details about the sales categories connected to the item. | [optional] 
**attachment_last_modified_date_time** | **string** | System retrieved information for last modified date and time for attachment. | [optional] 
**attachment_last_modified_date_time_condition** | **string** | System retrieved information for state/condition for attachment. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**greater_than_value** | **string** | Greater than value. The item which is the object for this, varies from API to API. | [optional] 
**last_modified_date_time** | **string** | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional] 
**last_modified_date_time_condition** | **string** | System retrieved information for state/condition. | [optional] 
**created_date_time** | **string** | Creation date and time. | [optional] 
**created_date_time_condition** | **string** | System-retrieved information for state/condition | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


