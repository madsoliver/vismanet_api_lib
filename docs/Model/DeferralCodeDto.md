# DeferralCodeDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deferral_code** | **string** | Mandatory field: Deferral code* &amp;gt;  The unique code for the deferral type. | [optional] 
**description** | **string** | Description &amp;gt; The description of the deferral code. | [optional] 
**deferred_revenue_from_item** | **bool** | Deferred revenue from item &amp;gt; When this check box is selected, the deferred revenue of the code will be retrieved from the connected item. | [optional] 
**recognition_method** | **string** | Recognition method &amp;gt; The method used to distribute the document amount over the periods. | [optional] 
**code_type** | **string** | Code type &amp;gt; The type of the deferral code. | [optional] 
**deferral_account** | **object** | Deferral account &amp;gt; The account used to hold the deferred amount until it is fully recognised. | [optional] 
**deferral_sub** | **object** | Deferral sub &amp;gt; The corresponding subaccount. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


