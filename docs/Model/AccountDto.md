# AccountDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | The table &amp;gt; AccountID &amp;gt; The Account ID is the actual ID that the account have in the database and are used in other tables as the relation between the Chart of accounts table and other tables. | [optional] 
**account_cd** | **string** | Mandatory field: The table &amp;gt; Account* &amp;gt; The unique identifier of the general ledger account in the system. | [optional] 
**account_group_cd** | **string** | The table &amp;gt; Account group &amp;gt; The account group (used in project management if the Projects module has been activated) that includes this account. | [optional] 
**account_class** | **string** | The table &amp;gt; Account class &amp;gt; Optional. The account class to which the account is assigned. | [optional] 
**type** | **string** | The table &amp;gt; Type &amp;gt; The type of account: Asset, Liability, Income, or Expense. | [optional] 
**active** | **bool** | The table &amp;gt; Active &amp;gt; A check box that indicates that the account is active. | [optional] 
**description** | **string** | The table &amp;gt; Description &amp;gt; An alphanumeric string of up to 30 characters that describes the account. | [optional] 
**use_default_sub** | **bool** | The table &amp;gt; Use default sub &amp;gt; A check box that causes the system (if selected) to set the default subaccount as the Subaccount if the account is selected. | [optional] 
**post_option** | **string** | The table &amp;gt; Post option &amp;gt; An option that defines how transactions created in other workspaces are posted to this account. Summary (default) or Detail. | [optional] 
**currency** | **string** | The table &amp;gt; Currency &amp;gt; Optional: This column appears only if support for multiple currencies has been activated for the system. | [optional] 
**tax_category** | **string** | The table &amp;gt; VAT category &amp;gt; A tax category that you define for the selected account. When you create a journal transaction manually in the GL301000 window, based on this VAT category, the taxable amount will be calculated for the journal entry. | [optional] 
**cash_account** | **bool** | The table &amp;gt; Cash account &amp;gt; A check box that indicates (if selected) that the account has a cash account or multiple cash accounts linked to it. | [optional] 
**public_code1** | **int** | The table &amp;gt; Public code 1 &amp;gt; The authorities valid code mapped to the account. Used for example in SAF-T and in some nationals reporting to the authorities. | [optional] 
**external_code1** | **string** | The table &amp;gt; External code 1 &amp;gt; A field that can be used for sorting and inquiries.  Either enter in field or predfine in GL20251S. | [optional] 
**external_code2** | **string** | The table &amp;gt; External code 2 &amp;gt; A field that can be used for sorting and inquiries.  Either enter in field or predfine in GL20252S. | [optional] 
**analysis_code** | **string** | The table &amp;gt; Analysis code &amp;gt; A field that can be used for sorting and inquiries.  Either enter in field or predfine in GL20253S. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | This information is not visible in the window.  It is collected from the system. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


