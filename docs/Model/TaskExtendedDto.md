# TaskExtendedDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **int** | Internal ID* &amp;gt; The internal ID of the task. | [optional] 
**project_internal_id** | **int** | Project Internal ID* &amp;gt; The internal ID of the project. | [optional] 
**def_account** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Default account &amp;gt; The account to be used as one of the sources of possible accounts for the invoices and transactions for the project task. | [optional] 
**def_sub** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Default subaccount* &amp;gt; The subaccount to be used as one of the sources of possible segment values for subaccounts to be used in the invoices and transactions for the project task. | [optional] 
**def_accrual_account** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Accrual account &amp;gt; The default accrual account to be used in project transactions for the project task. | [optional] 
**def_accrual_sub** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Accrual subaccount &amp;gt; The default accrual subaccount to be used in project transactions for the project task. | [optional] 
**tax_category** | **object** | VAT category &amp;gt; The tax category for the project task. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | Information collected from system. | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) | Information collected from the system. Not visible on the screen. | [optional] 
**task_id** | **string** | Mandatory field: &amp;gt; Task ID* &amp;gt; The ID of the task. | [optional] 
**description** | **string** | Mandatory field: Description &amp;gt; The description of the task. | [optional] 
**planned_start** | [**\DateTime**](\DateTime.md) |  | [optional] 
**planned_end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date &amp;gt; The date when the task was actually started. | [optional] 
**rate_table** | **object** | Rate table &amp;gt; The rate table to be used in the allocation rules, if applicable. | [optional] 
**status** | **string** | Mandatory field: Status* &amp;gt; The status of the task, which can be one of the following: In planning, Active, Cancelled, Completed. | [optional] 
**restrict_employees** | **bool** | Summary tab &amp;gt; Task properties section &amp;gt; Restrict employees &amp;gt; A check box that indicates (if selected) that only the employees listed on the Employees tab of this window can create activities and documents associated with the current task. | [optional] 
**visibility** | **object** | Information retrieved from the Summary tab | [optional] 
**employees** | [**\Ekstralys\VismaNetApi\Model\EmployeeDto[]**](EmployeeDto.md) | The Employees tab &amp;gt; Information in this tab is retreived from EP203000 (Employees) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


