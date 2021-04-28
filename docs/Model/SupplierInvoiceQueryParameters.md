# SupplierInvoiceQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expand_attachment** | **bool** | Set to true if you want to see all attachments regarding this document. | [optional] 
**document_type** | **string** | By type of document. | [optional] 
**released** | **int** | The date when the document was released. | [optional] 
**project** | **string** | Filter by the project with which the document is associated. | [optional] 
**expand_approval** | **bool** | Set to true to include approval information. | [optional] 
**expand_note** | **bool** | Set to true to include description. | [optional] 
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


