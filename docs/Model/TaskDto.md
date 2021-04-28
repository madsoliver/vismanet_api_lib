# TaskDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** | Mandatory field: &amp;gt; Task ID* &amp;gt; The ID of the task. | [optional] 
**description** | **string** | Mandatory field: Description &amp;gt; The description of the task. | [optional] 
**planned_start** | [**\DateTime**](\DateTime.md) |  | [optional] 
**planned_end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date &amp;gt; The date when the task was actually started. | [optional] 
**rate_table** | [**\Ekstralys\VismaNetApi\Model\RateTableIdDescriptionDto**](RateTableIdDescriptionDto.md) | Rate table &amp;gt; The rate table to be used in the allocation rules, if applicable. | [optional] 
**status** | **string** | Mandatory field: Status* &amp;gt; The status of the task, which can be one of the following: In planning, Active, Cancelled, Completed. | [optional] 
**restrict_employees** | **bool** | Summary tab &amp;gt; Task properties section &amp;gt; Restrict employees &amp;gt; A check box that indicates (if selected) that only the employees listed on the Employees tab of this window can create activities and documents associated with the current task. | [optional] 
**visibility** | [**\Ekstralys\VismaNetApi\Model\VisibilityDto**](VisibilityDto.md) | Information retrieved from the Summary tab | [optional] 
**employees** | [**\Ekstralys\VismaNetApi\Model\EmployeeDto[]**](EmployeeDto.md) | The Employees tab &amp;gt; Information in this tab is retreived from EP203000 (Employees) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


