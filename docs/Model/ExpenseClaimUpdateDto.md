# ExpenseClaimUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **object** | The date when the claim was entered. | [optional] 
**description** | **object** | A description of the claim. | [optional] 
**claimed_by** | **object** | The employee who is claiming the expenses. If the claim is released, an Accounts Payable bill will be generated to this employee. | [optional] 
**customer** | **object** | The applicable customer. | [optional] 
**customer_update_answer** | **string** | If the customer is updated the claim details customer information can be updated using the provided answer. By default &#39;SelectedCustomer&#39; is selected. | [optional] 
**location** | **object** | The company location associated with the claim. | [optional] 
**details** | [**\Ekstralys\VismaNetApi\Model\ExpenseClaimDetailUpdateDto[]**](ExpenseClaimDetailUpdateDto.md) | Expense Claim detail information | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


