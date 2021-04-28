# SalesOrderQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_type** | **string** | Filter by Order type. | [optional] 
**status** | **string** | Select to filter on status on order. | [optional] 
**greater_than_value** | **string** | Filter on Order no. greater than value. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**order_by** | **string** | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional] 
**show_notes** | **bool** | Set to true to include notes. | [optional] 
**last_modified_date_time** | **string** | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional] 
**last_modified_date_time_condition** | **string** | System retrieved information for state/condition. | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


