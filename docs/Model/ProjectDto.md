# ProjectDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **int** |  | [optional] 
**project_id** | **string** | Mandatory field: The top part &amp;gt; Project ID* &amp;gt; The unique ID for the project. | [optional] 
**customer** | **object** | The top part &amp;gt; Customer &amp;gt; The customer for the project if this project is external. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that you select to indicate that the project should have the In planning status. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the project, which can be one of the following options: In planning, Active, Completed, Suspended, Cancelled. | [optional] 
**template** | **object** | The top part &amp;gt; Templated ID &amp;gt; The template used for creating this project, if applicable. | [optional] 
**description** | **string** | Mandatory field: The top part &amp;gt; Description* &amp;gt; The description of the project. | [optional] 
**assets** | **double** | The top part &amp;gt; Assest &amp;gt; The actual assets for the project. | [optional] 
**liability** | **double** | The top part &amp;gt; Liabilities &amp;gt; The actual liabilities for the project. | [optional] 
**income** | **double** | The top part &amp;gt; Income &amp;gt; The income expected from the project. | [optional] 
**expenses** | **double** | The top part &amp;gt; Expenses &amp;gt; The total of the current expenses incurred by the project. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Mandatory field: Summary tab &amp;gt; Project properties section &amp;gt; Start date* &amp;gt; The date when the project starts. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Summary tab &amp;gt; Project properties section &amp;gt; End date &amp;gt; The date when the project is expected to end. | [optional] 
**project_manager** | **object** | Summary tab &amp;gt; Project properties section &amp;gt; Project manager &amp;gt; The person who is responsible for managing the project and authorised to approve the project task and task activities. | [optional] 
**restrict_employees** | **bool** | Summary tab &amp;gt; Project properties section &amp;gt; Restrict employees &amp;gt; A check box that indicates (if selected) that only the employees listed on the Employees tab of this window can create activities and documents associated with the current project. | [optional] 
**restrict_equipment** | **bool** |  | [optional] 
**visibility** | **object** | Summary tab &amp;gt; Visibility settings section &amp;gt; | [optional] 
**def_account** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Default account &amp;gt; The account to be used as one of the sources of possible accounts for the invoices and transactions for the project. | [optional] 
**def_sub** | **object** | Mandatory field: General ledger accounts tab &amp;gt; Default values section &amp;gt; Default subaccount* &amp;gt; The subaccount to be used as one of the sources of possible segment values for subaccounts to be used in the invoices and transactions for the project. | [optional] 
**def_accrual_account** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Accrual account &amp;gt; The default accrual account to be used in project transactions for the project. | [optional] 
**def_accrual_sub** | **object** | General ledger accounts tab &amp;gt; Default values section &amp;gt; Accrual subaccount &amp;gt; The default accrual subaccount to be used in project transactions for the project. | [optional] 
**billing_period** | **string** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Invoicing period &amp;gt; The frequency of invoicing, which can be one of the following options: Week, Month, Quarter, Year, On demand. | [optional] 
**next_billing_date** | [**\DateTime**](\DateTime.md) | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Next invoicing date &amp;gt; The date for which the next invoicing is scheduled for the project. | [optional] 
**last_billing_date** | [**\DateTime**](\DateTime.md) | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Last invoicing date &amp;gt; The date when the latest invoicing was performed for the project. | [optional] 
**customer_location** | **object** | Summary tab &amp;gt; Invoice to section &amp;gt; Customer location &amp;gt; The location of the project&#39;s customer. | [optional] 
**allocation_rule** | **object** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Allocation rule &amp;gt; The default allocation rule that is used for the tasks created for the project. | [optional] 
**billing_rule** | **object** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Invoicing rule &amp;gt; The default invoicing rule that is used for the tasks created for the project. | [optional] 
**rate_table** | **object** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Rate table &amp;gt; The rate table to be used with the allocation rules, if applicable. | [optional] 
**auto_allocate** | **bool** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Run allocation when you release project transactions &amp;gt; A check box that indicates (if selected) that allocation is run automatically during the release of the documents associated with this project. | [optional] 
**automatic_release_ar** | **bool** | Summary tab &amp;gt; Invoicing and allocation settings section &amp;gt; Automatically release customer documents &amp;gt; A check box that indicates (if selected) that invoice documents are released automatically after the project invoicing is completed. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information | [optional] 
**tasks** | [**\Ekstralys\VismaNetApi\Model\TaskDto[]**](TaskDto.md) | Tasks tab &amp;gt; | [optional] 
**employees** | [**\Ekstralys\VismaNetApi\Model\EmployeeDto[]**](EmployeeDto.md) | The Employees tab &amp;gt; Information in this tab is retreived from EP203000 (Employees) | [optional] 
**public_id** | **string** |  | [optional] 
**system_template** | **bool** |  | [optional] 
**attributes** | [**\Ekstralys\VismaNetApi\Model\AttributeIdValueDto[]**](AttributeIdValueDto.md) | Attributes tab &amp;gt; | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


