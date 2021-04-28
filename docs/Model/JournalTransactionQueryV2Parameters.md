# JournalTransactionQueryV2Parameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period_id** | **string** | Financial Period to query data for. Mandatory if &#39;LastModifiedDateTime&#39; not provided. Format: YYYYPP | [optional] 
**last_modified_date_time** | **string** | When setting this parameter there will be exported only the batches changed or created since the provided date and time.   Mandatory if &#39;PeriodId&#39; is not provided.   Format: yyyy-MM-dd HH:mm:ss | [optional] 
**module** | **string** | Module to query data for. Allowed values: GL, AP, AR, CM, CA, IN, DR, FA, PM | [optional] 
**released_batch** | **bool** | If true there will be exported the batches having Released flag on true.   If false there will be exported the batches having Released flag on false.   If not set no filtering based on Released flag is applied | [optional] 
**expand_attachments** | **bool** | If true there will be included all attachments regarding batch. Default on false | [optional] 
**branch** | **string** | Branch to query data for. | [optional] 
**page_number** | **int** | Pagination parameter. Page number. | [optional] 
**page_size** | **int** | Pagination parameter. Number of items to be collected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


