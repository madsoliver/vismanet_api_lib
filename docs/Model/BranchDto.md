# BranchDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Mandatory field: The top part &amp;gt; Organisation ID* &amp;gt; The unique identifier of the company, which you compose according to the rules defined by the BIZACCT segmented key. | [optional] 
**name** | **string** | The top part &amp;gt; Company name &amp;gt; The name of the company. | [optional] 
**organization_id** | **int** |  | [optional] 
**is_main_branch** | **bool** | The top part &amp;gt; Is main organisation &amp;gt; If you want this company to be the main company of your branches, select this check box. | [optional] 
**main_address** | **object** | The Organisation details tab &amp;gt; The Main address section &amp;gt; | [optional] 
**main_contact** | **object** | The Organisation details tab &amp;gt;  The Main contact section &amp;gt; | [optional] 
**delivery_address** | **object** | The Delivery settings tab &amp;gt; Delivery address section &amp;gt; | [optional] 
**delivery_contact** | **object** | The Delivery settings tab &amp;gt; Delivery contact section &amp;gt; | [optional] 
**corporate_id** | **string** | The Organisation details tab &amp;gt; VAT registration info section &amp;gt; Corporate ID &amp;gt; The corporate ID of the company. | [optional] 
**vat_registration_id** | **string** | The Organisation details tab &amp;gt; VAT registration info section &amp;gt; VAT registration ID &amp;gt; The company registration ID for the country’s tax authority. | [optional] 
**default_country** | **object** | Mandatory field: The organisation details tab &amp;gt; Configuration settings section &amp;gt; Default country* &amp;gt; The default country, which is the country of most of the company&#39;s customers and suppliers. | [optional] 
**industry_code** | **object** | The Organisation details tab &amp;gt; Configuration settings section &amp;gt; Industry code &amp;gt; The branch&#39;s industry code ID. | [optional] 
**currency** | **object** | The Organisation details tab &amp;gt; Base currency settings (shared) section &amp;gt; This group of elements holds information that is shared among all branches of the company. | [optional] 
**vat_zone** | **object** | The Delivery settings tab &amp;gt; Delivery instruction section &amp;gt; VAT zone ID &amp;gt; The VAT zone of the delivery location. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. This information is not visible in the window. | [optional] 
**ledger** | **object** | The ledgers tab &amp;gt; The ledger column and the Description column. | [optional] 
**bank_settings** | **object** | The payment settings tab. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


