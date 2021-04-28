# ProjectQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Use drop down and select Status. | [optional] 
**system_template** | **bool** | If the project is a template | [optional] 
**visible_in_ap** | **bool** | If the project is visible in AP | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Project’s start date | [optional] 
**expand_attribute** | **bool** | Expands project atributes | [optional] 
**attributes** | **string** | Identifies the attributes | [optional] 
**task_status** | **string** | Use drop down and select Status. | [optional] 
**task_visible_in_ap** | **bool** | If the project task is visible in the Supplier ledger | [optional] 
**task_visible_in_ar** | **bool** | If the project task is visible in the Customer ledger | [optional] 
**task_visible_in_ca** | **bool** | If the project task is visible in the Cash management workspace | [optional] 
**task_visible_in_cr** | **bool** | If the project task is visible in the CRM workspace | [optional] 
**task_visible_in_ea** | **bool** | If the project task is visible in the Expense workspace | [optional] 
**task_visible_in_gl** | **bool** | If the project task is visible in the General ledger workspace | [optional] 
**task_visible_in_in** | **bool** | If the project task is visible in the Inventory workspace | [optional] 
**task_visible_in_po** | **bool** | If the project task is visible in the Purchases workspace | [optional] 
**task_visible_in_so** | **bool** | If the project task is visible in the Sales workspace | [optional] 
**task_visible_in_ta** | **bool** | If the project task is visible in the Time entities workspace | [optional] 
**non_project** | **bool** | Set to true to return the non-project. | [optional] 
**public_id** | **string** | Identifies the Project by its publicId | [optional] 
**restricted_employee** | **string** | ID of the employee where access restrictions apply | [optional] 
**restricted_user** | **int** | Id of the odp user where access restrictions apply | [optional] 
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


