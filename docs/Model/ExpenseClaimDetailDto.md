# ExpenseClaimDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claim_detail_id** | **int** | Identifies the expense claim detail id, necessary when updating detail information | [optional] 
**line_id** | **string** | The expense claim line id | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: Date &amp;gt; The date when the expense was incurred. | [optional] 
**expense_item** | **object** | Mandatory field: Expense item* &amp;gt; The expense identifier, if an expense of this type is listed as an inventory nonstock item. | [optional] 
**description** | **string** | Mandatory field: Description* &amp;gt; A description of the transaction. | [optional] 
**quantity** | **double** | Quantity &amp;gt; The quantity of this expense item. | [optional] 
**uom** | **string** | Mandatory field: UoM &amp;gt; The unit of measure in which the quantity is shown. | [optional] 
**unit_cost** | **double** | Unit cost &amp;gt; The cost of a unit of the item. | [optional] 
**currency** | **string** | Currency &amp;gt; The currency of the expense receipt. However, if you enter a claim line directly, the currency value is read-only and matching the claim currency. | [optional] 
**total_amount** | **double** | Amount &amp;gt; The total amount paid for the expense item in the specified quantity. | [optional] 
**invoiceable** | **bool** | Invoicable &amp;gt; A check box that, if selected, indicates that the claim amount is invoiceable to the customer (the total amount minus the employee&#39;s part). | [optional] 
**claim_amount** | **double** | Claim amount &amp;gt; The amount claimed by the employee, which is calculated as the total claim amount minus the employee part. | [optional] 
**amount_in_claim_curr** | **double** | Amount in claim currency &amp;gt; The amount claimed by the employee, which is expressed in the currency of the expense claim. | [optional] 
**project** | **object** | Mandatory field: Project &amp;gt; The project or customer contract associated with the expense claim, if the work performed was for a project or contract. Project Task The task associated with the contract or project. | [optional] 
**project_task** | **object** | Project task &amp;gt; The task associated with the contract or project. | [optional] 
**expense_account** | **object** | Mandatory field: Expense account &amp;gt; The expense account to which the system should record the part of the expense to be paid back to the employee. | [optional] 
**expense_subaccount** | **object** | MAndatory field: Expense sub. &amp;gt; The corresponding subaccount the system uses to record the part of the expense to be paid back to the employee. | [optional] 
**branch** | **object** | Mandatory field: Branch &amp;gt; The branch that will reimburse the expenses to the employee. | [optional] 
**tax_category** | **object** | VAT category &amp;gt; The VAT category associated with the expense item. | [optional] 
**ref_nbr** | **string** | Ref. no. &amp;gt; The identifier of the transaction. | [optional] 
**sales_account** | **object** | Sales account &amp;gt; The sales account to which the system should record the part of the amount to charge the customer for. This is applicable only when a customer has been specified. | [optional] 
**sales_subaccount** | **object** | Sales sub. &amp;gt; The corresponding subaccount the system uses to record the amount to charge the customer for. This is applicable only when a customer has been specified. | [optional] 
**employee_part** | **double** | Employee part &amp;gt; The part of the total amount that will not be paid back to the employee. The percentage depends on the company policy. | [optional] 
**customer** | **object** | Customer &amp;gt; The identifier of the customer associated with the expense. | [optional] 
**location** | **object** | Location &amp;gt; The identifier of the customer location associated with the expense. | [optional] 
**ar_reference_nbr** | **string** | REef.no. customer &amp;gt; The reference number of the customer ledger document. | [optional] 
**approval_status** | **string** | Approval status &amp;gt; The approval status, which indicates whether the detail row requires approval and, if it does, what the current state of approval is. | [optional] 
**approval_status_text** | **string** | Last approval comment &amp;gt; The approval status text suitable for display | [optional] 
**approver** | **string** | Pending approver &amp;gt; The identifier of the person authorized to approve the activity, if approval is required. This is either the approver of the project task or, if no approver is assigned to the project task, the project manager. | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) | Expense claim detail line attachtments | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


