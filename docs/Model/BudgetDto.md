# BudgetDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**financial_year** | **string** | Mandatory field: The top part &amp;gt; Financial year* &amp;gt; The financial year of the budget. | [optional] 
**released** | **bool** | The budget area &amp;gt; The budget articles pane &amp;gt; Released &amp;gt; A check box that indicates (if selected) that the budget article has been released. | [optional] 
**released_amount** | **double** | The budget area &amp;gt; The budget articles pane &amp;gt; Released amount &amp;gt; The amount that has been released for this article. | [optional] 
**account** | **object** | Mandatory field: The budget area &amp;gt; The budget articles pane &amp;gt; Account* &amp;gt; The account of the budget article if the article is a leaf on the budget tree. | [optional] 
**subaccount** | **object** | Mandatory field: The budget area &amp;gt; The budget articles pane &amp;gt; Subaccount* &amp;gt; The subaccount of the budget article if the article is a leaf on the budget tree. | [optional] 
**description** | **string** | Mandatory field: The budget area &amp;gt; The budget articles pane &amp;gt; Description* &amp;gt; A description of the budget article.By default, this column displays the account description. | [optional] 
**amount** | **double** | The budget area &amp;gt; The budget articles pane &amp;gt; Amount &amp;gt; The article amount. | [optional] 
**distributed_amount** | **double** | The budget area  The budget articles pane &amp;gt; Distributed amount &amp;gt; The amount distributed over the periods. | [optional] 
**periods** | [**\Ekstralys\VismaNetApi\Model\FinancialPeriodAmountDto[]**](FinancialPeriodAmountDto.md) | The budget area The budget articles pane &amp;gt; Period XX &amp;gt; Amount per period within the financial year. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | A system generated date/time not visible in the window. | [optional] 
**branch_number** | **object** | The Top part &amp;gt; Branch &amp;gt; Click the magnifier | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


