# EmployeeDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_user_id** | **string** | Employee internal user ID. This is the ID of the user linked to the employee | [optional] 
**employee_id** | **int** | Mandatory field: The top part &amp;gt; Employee ID* &amp;gt; The unique identifier, which is assigned to the employee in accordance with the configuration of the EMPLOYEE segmented key. | [optional] 
**employee_number** | **string** | General information tab &amp;gt; Employee settings section &amp;gt; Employee ref. no. &amp;gt; A reference number for the employee. | [optional] 
**employee_name** | **string** | The top part &amp;gt; Employee name &amp;gt; The name of this employee. | [optional] 
**status** | **string** | Mandatory field: The top part &amp;gt; Status &amp;gt; The status of the employee. The following options are available: Active, On hold, Hold payments, Inactive, One-time. | [optional] 
**department** | **string** | Mandatory field: General information tab &amp;gt; Employee section &amp;gt; Department* &amp;gt; The department the employee works for. | [optional] 
**contact** | **object** | General information tab &amp;gt; Contact section &amp;gt; | [optional] 
**address** | **object** | General information tab &amp;gt; Address info section &amp;gt; | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


