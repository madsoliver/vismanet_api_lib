# ExpenseClaimDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_nbr** | **string** | The top part &amp;gt; Ref. no. &amp;gt; The unique reference number of the expense claim document. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The current status of the expense claim: On Hold/Pending Approval/Approved/Rejected/Released. | [optional] 
**approval_status** | **string** | The top part &amp;gt; Approval status &amp;gt; The status of the claim in Approval. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Date* &amp;gt; The date when the claim was entered. | [optional] 
**description** | **string** | Mandatory field: The top part &amp;gt; Description &amp;gt; A description of the claim. | [optional] 
**claimed_by** | **object** | Mandatory field: The top part &amp;gt; Claimed by &amp;gt; The employee who is claiming the expenses. If the claim is released, an Accounts Payable bill will be generated to this employee. | [optional] 
**claim_total** | **double** | The top part &amp;gt; Claim total &amp;gt; The total amount of the claim. | [optional] 
**vat_taxable_total** | **double** | The top part &amp;gt; VAT taxable total &amp;gt; The document total that is subjected to VAT. | [optional] 
**vat_exempt_total** | **double** | The top part &amp;gt; VAT exempt total &amp;gt; The document total that is exempt from VAT. | [optional] 
**customer** | **object** | The top part &amp;gt; Customer &amp;gt; The applicable customer. | [optional] 
**currency** | **string** | The top part &amp;gt; Currency &amp;gt; The currency of the claim. | [optional] 
**approval_date** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Approval date &amp;gt; The date when the claim was approved. | [optional] 
**department** | **object** | Mandatory field: The top part &amp;gt; Department ID &amp;gt; The department associated with the expense claim. | [optional] 
**location** | **object** | The top part &amp;gt; Location &amp;gt; The company location associated with the claim. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information: The lastest time the expense claim was modified | [optional] 
**details** | [**\Ekstralys\VismaNetApi\Model\ExpenseClaimDetailDto[]**](ExpenseClaimDetailDto.md) | Expence claim details tab &amp;gt; | [optional] 
**approval_status_text** | **string** | The top part &amp;gt; Approval status &amp;gt; A text field. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


