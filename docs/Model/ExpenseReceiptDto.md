# ExpenseReceiptDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **int** |  | [optional] 
**receipt_id** | **string** | The top part &amp;gt; Employee &amp;gt;  The identifier of the employee whose expense receipts you want to manage. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Both tabs &amp;gt; Date &amp;gt; The date of the expense receipt. | [optional] 
**currency** | **object** | Both tabs &amp;gt; Currency &amp;gt; The currency of the expense receipt. | [optional] 
**ref_nbr** | **string** | Both tabs &amp;gt; Ref. no. &amp;gt; The reference number, which usually matches the number of the original receipt. | [optional] 
**inventory** | **object** |  | [optional] 
**description** | **string** | Open the receipt  Mandatory field: Receipt details tab &amp;gt; Expense details section &amp;gt; Description* &amp;gt; The expense description, which is displayed as a link. | [optional] 
**uom** | **string** | Receipt details tab &amp;gt; Expense details section &amp;gt; UoM &amp;gt; The unit of measure of the expense item. | [optional] 
**quantity** | **double** | Receipt details tab &amp;gt; Expense details section &amp;gt; Quantity &amp;gt; The quantity of the expense item that the employee purchased according to the receipt. | [optional] 
**unit_cost** | **double** | Receipt details tab &amp;gt; Expense details section &amp;gt; Unit cost &amp;gt; The cost of one unit of the expense item. | [optional] 
**total_amount** | **double** | Receipt details tab &amp;gt; Expense details section &amp;gt; Amount &amp;gt; The total amount of the receipt (for VAT-inclusive taxes), or the total amount before taxes (for VAT-exclusive taxes). | [optional] 
**employee_part** | **double** | Receipt details tab &amp;gt; Expense details section &amp;gt; Employee part  &amp;gt; The part of the total amount that will not be paid back to the employee. | [optional] 
**claim_amount** | **double** | Receipt details tab &amp;gt; Expense details section &amp;gt; Expense claim &amp;gt; The expense claim with which the expense receipt is associated. | [optional] 
**status** | **string** | Receipt details tab &amp;gt; Expense details section &amp;gt; Expense claim status &amp;gt; The current status of the associated expense claim, which can be one of the following options: On hold, Pending apporval, Approved, Rejected, Released. | [optional] 
**claimed_by** | **object** | Mandatory field: The top part &amp;gt; Claimed by* &amp;gt;  The name of the employee who is claiming the expenses. | [optional] 
**branch** | **object** | Mandatory field: The top part &amp;gt; Branch &amp;gt; The company branch that will incur the expenses. | [optional] 
**expense_claim** | **object** | Receipt details tab &amp;gt; Expense details section &amp;gt; Expense claim &amp;gt; The expense claim with which the expense receipt is associated. | [optional] 
**invoiceable** | **bool** | Receipt details tab &amp;gt; Financial details section &amp;gt; Invoiceable &amp;gt; A check box that indicates (if selected) that the customer should be invoiced for the claim amount. | [optional] 
**project** | **object** | Receipt details tab &amp;gt; Expense details section &amp;gt; Project/contract &amp;gt; The project or contract, which should be specified if the employee incurred the expenses while working on a particular project or contract. | [optional] 
**project_task** | **object** | Receipt details tab &amp;gt; Expense details section &amp;gt; Project task &amp;gt; The project task to which the expenses are related. | [optional] 
**customer** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Customer &amp;gt; The customer, which should be specified if the employee incurred the expenses while working for a particular customer. | [optional] 
**location** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Location &amp;gt; The location of the customer related to the expenses. | [optional] 
**expense_account** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Expense account &amp;gt; The expense account to which the system records the part of the expense to be paid back to the employee. | [optional] 
**expense_sub** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Expense sub. &amp;gt; The corresponding subaccount the system uses to record the part of the expense to be paid back to the employee. | [optional] 
**sales_account** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Sales account &amp;gt; The sales account to which the system records the part of the amount to charge the customer for. | [optional] 
**sales_sub** | **object** | Receipt details tab &amp;gt; Financial details section &amp;gt; Sales sub. &amp;gt; The corresponding subaccount the system uses to record the amount to charge the customer for. | [optional] 
**tax_category** | **object** | Receipt details tab &amp;gt; Expense details section &amp;gt; VAT category &amp;gt; The tax category for the expense receipt. | [optional] 
**image** | **object** | Receipt details tab &amp;gt; Image section | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


