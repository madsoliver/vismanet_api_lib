# CustomerContractDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_id** | **string** | Mandatory field: The top part &amp;gt; Contract ID* &amp;gt; The unique identifier of a contract. | [optional] 
**contract_template** | **object** | Mandatory field: The top part &amp;gt; Contract template* &amp;gt; The contract template that is used as a base for the contract. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the contract, which is one of the following: Draft, Pending activation, Active, Expired, Cancelled, Pending update. | [optional] 
**customer** | **object** | Mandatory field: The top part &amp;gt; Customer* &amp;gt; The customer associated with the contract. | [optional] 
**location** | **object** | The top part &amp;gt; Location &amp;gt; The customer location associated with the contract. | [optional] 
**description** | **string** | Mandatory field: The top part &amp;gt; Description* &amp;gt; The description of the contract, which includes any related comments. | [optional] 
**balance** | **double** | The top part &amp;gt; Balance &amp;gt; A read-only field that displays the sum of the balances of open invoices associated with the contract. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information | [optional] 
**summary** | **object** | Summary tab &amp;gt; | [optional] 
**details** | **object** | Details tab &amp;gt; | [optional] 
**attributes** | [**\Ekstralys\VismaNetApi\Model\AttributeIdValueDto[]**](AttributeIdValueDto.md) | Project attributes tab | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


