# ProjectBasicDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **int** |  | [optional] 
**project_id** | **string** | Mandatory field: The top part &amp;gt; Project ID* &amp;gt; The unique ID for the project. | [optional] 
**customer** | **object** | The top part &amp;gt; Customer &amp;gt; The customer for the project if this project is external. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that you select to indicate that the project should have the In planning status. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the project, which can be one of the following options: In planning, Active, Completed, Suspended, Cancelled. | [optional] 
**description** | **string** | Mandatory field: The top part &amp;gt; Description* &amp;gt; The description of the project. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Mandatory field: Summary tab &amp;gt; Project properties section &amp;gt; Start date* &amp;gt; The date when the project starts. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Summary tab &amp;gt; Project properties section &amp;gt; End date &amp;gt; The date when the project is expected to end. | [optional] 
**auto_allocate** | **bool** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Run allocation when you release project transactions &amp;gt; A check box that indicates (if selected) that allocation is run automatically during the release of the documents associated with this project. | [optional] 
**automatic_release_ar** | **bool** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Automatically release customer documents &amp;gt; A check box that indicates (if selected) that invoice documents are released automatically after the project invoicing is completed. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | Systemgenerated information. | [optional] 
**public_id** | **string** |  | [optional] 
**visibility** | **object** | Summary tab &amp;gt; Visibility settings section &amp;gt; | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


