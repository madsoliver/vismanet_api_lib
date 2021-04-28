# ExpenseClaimDetailUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** |  | [optional] 
**claim_detail_id** | **object** | Identifies the expense claim detail line to update | [optional] 
**date** | **object** | The date when the expense was incurred. | [optional] 
**expense_item** | **object** | The expense identifier, if an expense of this type is listed as an inventory nonstock item. | [optional] 
**description** | **object** | A description of the transaction. | [optional] 
**quantity** | **object** | The quantity of this expense item. | [optional] 
**uom** | **object** | The unit of measure in which the quantity is shown. | [optional] 
**unit_cost** | **object** | The cost of a unit of the item. | [optional] 
**invoiceable** | **object** | The currency of the expense receipt. However, if you enter a claim line directly, the currency value is read-only and matching the claim currency. | [optional] 
**project** | **object** | The project or customer contract associated with the expense claim, if the work performed was for a project or contract. Project Task The task associated with the contract or project. | [optional] 
**project_task** | **object** | The task associated with the contract or project. | [optional] 
**expense_account** | **object** | The expense account to which the system should record the part of the expense to be paid back to the employee. | [optional] 
**expense_subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) | The corresponding subaccount the system uses to record the part of the expense to be paid back to the employee. | [optional] 
**branch** | **object** | The branch that will reimburse the expenses to the employee. | [optional] 
**tax_category** | **object** | The tax category associated with the expense item. | [optional] 
**ref_nbr** | **object** | The identifier of the transaction. | [optional] 
**employee_part** | **object** | The part of the total amount that will not be paid back to the employee. The percentage depends on the company policy. | [optional] 
**customer** | **object** | The identifier of the customer associated with the expense. | [optional] 
**location** | **object** | The identifier of the customer location associated with the expense. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


