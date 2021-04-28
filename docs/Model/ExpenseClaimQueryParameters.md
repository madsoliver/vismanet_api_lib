# ExpenseClaimQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the document. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the document | [optional] 
**customer** | **string** | The customer from the document | [optional] 
**department_id** | **string** | Identifies the department | [optional] 
**greater_than_value** | **string** | Greater-than value. The item which is the object for this, varies from API to API. | [optional] 
**number_to_read** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**skip_records** | **int** | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional] 
**order_by** | **string** | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional] 
**last_modified_date_time** | **string** | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional] 
**last_modified_date_time_condition** | **string** | System-retrieved information for state/condition. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


