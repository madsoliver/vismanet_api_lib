# EntryTypeDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_type_id** | **string** | Entry type ID* &amp;gt; The entry type, selected by its identifier. | [optional] 
**disable_receipt** | **string** | Disb/receipt &amp;gt; The basic type of cash transaction designated by this entry type: Receipt or Disbursement. | [optional] 
**module** | **string** | Module &amp;gt; The way the entry type is used in the system. | [optional] 
**default_offset_account_branch** | **object** | The branch to which the default offset account belongs. | [optional] 
**default_offset_account** | **object** | Default offset account &amp;gt; The account that is used by default as the offset account for this entry type. | [optional] 
**default_offset_subaccount** | **object** | Default offset subaccount &amp;gt; The corresponding subaccount. | [optional] 
**reclasification_account** | **object** | Reclassification account &amp;gt;  &amp;gt; The cash account that is used to temporary hold payments that came to the bank account but cannot be entered as valid payments because the customer or supplier is unknown.  The parameter is used together with the Use for payments reclassification check box. | [optional] 
**business_account** | **object** | Business account &amp;gt; The supplier account, if the entry type is used to record transactions that involve a particular supplier, or the customer account,  if the entry type is used to record transactions that involve a particular customer. | [optional] 
**description** | **string** | Description &amp;gt; A detailed description of the entry type that is used as transaction description by default. | [optional] 
**use_for_payments_reclasification** | **bool** | A check box that you select if this entry type is used to record unknown payments that need to be reclassified later. | [optional] 
**reclasification_account_override** | **object** | The account that should be used instead of the reclassification account specified as the default one on the Entry types tab. | [optional] 
**offset_account_override** | **object** | Reclassification account override &amp;gt; The account that should be used as the offset account for this entry type with this cash account instead of the default offset account specified on the Entry types tab.   We recommend that for the disbursement type of transaction, you specify an expense account. For the receipt type of transaction, specify an asset account. | [optional] 
**offset_subaccount_override** | **object** | Offset account override &amp;gt; The subaccount for this entry type to be used with this cash account instead of the default offset subaccount specified in the Entry types window. | [optional] 
**offset_account_branch** | **object** | Default offset account branch &amp;gt; The branch to which the overriding offset account belongs. | [optional] 
**vat_zone** | **object** | VAT zone &amp;gt; The VAT zone to be used by default with this entry type. | [optional] 
**tax_calculation_mode** | **string** | Tax calculation mode &amp;gt; The tax calculation mode to be used by default with this entry type | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


