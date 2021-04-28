# ProjectTransactionQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**module** | **string** | Select to filter on module; e.g. AR, AP, IN etc. | [optional] 
**status** | **string** | The status of the document. | [optional] 
**project** | **string** | Filter on project ID. | [optional] 
**project_task** | **string** | Filter on Task ID. | [optional] 
**billable** | **bool** | Filter invoiceable project tasks. | [optional] 
**branch** | **string** | Filter on branch for the project transation. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Filter on the registration date for the project transaction. | [optional] 
**from_period** | **string** | Mandatory. Start date for the task. | [optional] 
**to_period** | **string** | Mandatory. End date for the task. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**expand_note** | **bool** | Expands project transaction notes | [optional] 
**greater_than_value** | **string** | Greater than value. The item which is the object for this, varies from API to API. | [optional] 
**last_modified_date_time** | **string** | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional] 
**last_modified_date_time_condition** | **string** | System retrieved information for state/condition. | [optional] 
**created_date_time** | **string** | Creation date and time. | [optional] 
**created_date_time_condition** | **string** | System-retrieved information for state/condition | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


