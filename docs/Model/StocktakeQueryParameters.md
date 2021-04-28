# StocktakeQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse** | **string** | Filter by Warehouse. | [optional] 
**location** | **string** | Filter by Location. | [optional] 
**inventory** | **string** | Filter by Inventory. | [optional] 
**lot_serial_number** | **string** | Filter by LotSerialNumber. | [optional] 
**summary_status** | **string** | Filter by SummaryStatus. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords | [optional] 
**start_with_line** | **int** | Filter by LineNumber GreaterEqual StartWithLine. | [optional] 
**end_with_line** | **int** | Filter by by LineNumber LessEqual EndWithLine. | [optional] 
**freeze_date_time** | **string** | Filter by FreezeDateTime. | [optional] 
**freeze_date_time_condition** | **string** | Filter by FreezeDateTimeCondition. | [optional] 
**last_modified_date_time** | **string** | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.. | [optional] 
**last_modified_date_time_condition** | **string** | System retrieved information for state/condition. | [optional] 
**expiration_date_time** | **string** | Filter by ExpirationDateTime. | [optional] 
**expiration_date_time_condition** | **string** | Filter by ExpirationDateTimeCondition. | [optional] 
**status** | **string** | Filter by StocktakeLineStatus. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


