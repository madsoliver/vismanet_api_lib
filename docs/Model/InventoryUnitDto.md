# InventoryUnitDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_type** | **int** |  | [optional] 
**item_class** | **object** |  | [optional] 
**inventory_id** | **int** | The top part &amp;gt; Item ID &amp;gt; The unique alphanumeric identifier of the stock item. | [optional] 
**to_unit** | **string** | To unit &amp;gt; The unit of measure selected as the base unit for the item. | [optional] 
**sample_to_unit** | **string** |  | [optional] 
**from_unit** | **string** | Mandatory field: From unit &amp;gt; The unit of measure for which the conversion parameters are specified. | [optional] 
**unit_mult_div** | **string** | Multiply/divide &amp;gt; The operation to be performed for unit conversion. | [optional] 
**unit_rate** | **double** |  | [optional] 
**price_adjustment_multiplier** | **double** | Price adjustment multiplier &amp;gt; Changes the price automatically if you change the UoM. | [optional] 
**record_id** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


