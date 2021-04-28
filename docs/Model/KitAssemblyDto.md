# KitAssemblyDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type, possible values: P - Production, D - Disassembly | [optional] 
**ref_no** | **string** |  | [optional] 
**status** | **string** | Status, possible values: H - On Hold, B - Balanced, R - Released | [optional] 
**hold** | **bool** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**post_period** | **string** |  | [optional] 
**item_id** | **string** |  | [optional] 
**revision** | **string** |  | [optional] 
**reason_code** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**warehouse** | **string** |  | [optional] 
**location** | **string** |  | [optional] 
**uo_m** | **string** |  | [optional] 
**quantity** | **double** |  | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sales_order_link** | **string** |  | [optional] 
**stock_component_lines** | [**\Ekstralys\VismaNetApi\Model\KitAssemblyStockComponentsDto[]**](KitAssemblyStockComponentsDto.md) |  | [optional] 
**non_stock_component_lines** | [**\Ekstralys\VismaNetApi\Model\KitAssemblyNonStockComponentDto[]**](KitAssemblyNonStockComponentDto.md) |  | [optional] 
**kit_allocations** | [**\Ekstralys\VismaNetApi\Model\INAllocationsDto[]**](INAllocationsDto.md) |  | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


