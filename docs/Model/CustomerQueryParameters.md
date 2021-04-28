# CustomerQueryParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**greater_than_value** | **string** | This field does not work and has been deprecated. It will be removed in future versions. | [optional] 
**number_to_read** | **int** | [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only {numberToRead} number of records. | [optional] 
**skip_records** | **int** | [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only records after the first {skipRecords} number of records. | [optional] 
**name** | **string** | Equals Customer name. | [optional] 
**status** | **string** | Drop down and select Status. | [optional] 
**corporate_id** | **string** | Equals Corporate ID from Delivery settings tab. | [optional] 
**vat_registration_id** | **string** | Equals VAT registration ID from Delivery settings tab. | [optional] 
**email** | **string** | Equals Email for customer. | [optional] 
**phone** | **string** | Equals Phone 1 for customer. | [optional] 
**last_modified_date_time** | **string** | System retrieved information for last modified date and time. | [optional] 
**last_modified_date_time_condition** | **string** | System retrieved information for date, time and state/condition. | [optional] 
**created_date_time** | **string** |  | [optional] 
**created_date_time_condition** | **string** |  | [optional] 
**expand_account_information** | **bool** |  | [optional] 
**expand_payment_methods** | **bool** |  | [optional] 
**expand_direct_debit** | **bool** | Expand direct debit info | [optional] 
**attributes** | **string** |  | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


