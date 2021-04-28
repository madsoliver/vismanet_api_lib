# SupplierDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **int** |  | [optional] 
**number** | **string** | Mandatory field: The top part &amp;gt; Supplier ID* &amp;gt; The ID of the supplier account. | [optional] 
**name** | **string** | Mandatory field: The top part &amp;gt; Supplier name* &amp;gt; The name of the supplier to appear in the system, which may be a trade name or a doing-business-as (DBA) name. | [optional] 
**status** | **string** | Mandatory field: The top part &amp;gt; Status* &amp;gt; The status of the supplier account. | [optional] 
**main_address** | **object** | General information tab &amp;gt; Main address section &amp;gt; | [optional] 
**main_contact** | **object** | General information tab &amp;gt; Main contact section &amp;gt; | [optional] 
**account_reference** | **string** | General information tab &amp;gt; Main contact section &amp;gt; Account ref. &amp;gt; An optional text field that can contain a reference to your company&#39;s account number in the supplier&#39;s system. | [optional] 
**parent_record** | **object** | General information tab &amp;gt; Main contact section &amp;gt; Parent account &amp;gt; The parent supplier&#39;s account, which you can select from the list of existing supplier accounts. | [optional] 
**supplier_class** | **object** | Mandatory field: General information tab &amp;gt; Financial settings section &amp;gt; Supplier class* &amp;gt; The class of the supplier. | [optional] 
**credit_terms** | **object** | General information tab &amp;gt; Financial settings section &amp;gt; Terms &amp;gt; The type of credit terms used in operations with the supplier. | [optional] 
**document_language** | **string** | General information tab &amp;gt; Financial settings section &amp;gt; Document language &amp;gt; The language of the documents to be printed to the suppliers of the class. | [optional] 
**currency_id** | **string** | General information tab &amp;gt; Financial settings section &amp;gt; Currency ID &amp;gt; The currency that is used in operations with the supplier. | [optional] 
**remit_address** | **object** | Payment settings tab &amp;gt; Remittance address section &amp;gt; | [optional] 
**remit_contact** | **object** | Payment settings tab &amp;gt; Remittance contact section &amp;gt; | [optional] 
**payment_method** | **object** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Payment method &amp;gt; The default payment method to be used for the supplier. | [optional] 
**cash_account** | **string** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Cash account &amp;gt; The cash account to be used for operations with the supplier. You must select a cash account. | [optional] 
**charge_bearer** | **string** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Charge bearer &amp;gt; The party that will pay possible expenses connected with the payment. | [optional] 
**account_used_for_payment** | **string** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Account used for payment &amp;gt; The bank account to be used for payments to the supplier. | [optional] 
**payment_by** | **string** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Payment by &amp;gt; An option that defines how to calculate the date when this supplier should be paid. | [optional] 
**payment_lead_time** | **int** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Payment lead time (days) &amp;gt; The number of days required for the payment to be delivered to the supplier&#39;s location. | [optional] 
**payment_ref_display_mask** | **string** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Payment ref. display mask &amp;gt; This is a rule (mask) for how the payment reference number will be displayed. | [optional] 
**pay_separately** | **bool** | Payment settings tab &amp;gt; Payment settings section &amp;gt; Pay separately &amp;gt; A check box that indicates (if selected) that each supplier document should be paid by a separate payment. | [optional] 
**supplier_address** | **object** | Purchase settings tab &amp;gt; Shipping address section &amp;gt; | [optional] 
**supplier_contact** | **object** | Purchase settings tab &amp;gt; Shipping contact information section &amp;gt; | [optional] 
**location** | **object** | Purchase settings tab &amp;gt; Default location settings section &amp;gt; | [optional] 
**vat_registration_id** | **string** | Purchase settings tab &amp;gt; Default location settings section &amp;gt; VAT registration ID &amp;gt; The supplier&#39;s VAT registration ID associated with the location. | [optional] 
**corporate_id** | **string** | Purchase settings tab &amp;gt; Default location settings section &amp;gt; National insurance no. &amp;gt; The supplier’s national insurance number associated with the location. | [optional] 
**vat_zone** | **object** | Purchase settings tab &amp;gt; Default location settings section &amp;gt; VAT zone &amp;gt; The VAT zone of the supplier&#39;s default location. | [optional] 
**gl_accounts** | **object** | General ledger accounts tab &amp;gt; | [optional] 
**attributes** | [**\Ekstralys\VismaNetApi\Model\AttributeIdValueDto[]**](AttributeIdValueDto.md) | Attributes tab &amp;gt; | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**supplier_payment_method_details** | [**\Ekstralys\VismaNetApi\Model\SupplierPaymentMethodDetailDto[]**](SupplierPaymentMethodDetailDto.md) | This class represents a Payment Method Detail in SupplierController. Used to get data for SupplierPaymentMethodDetails of a Supplier. | [optional] 
**retainage_apply** | **bool** | Payment settings tab &amp;gt; Retainage settings section &amp;gt; Apply retainage &amp;gt; A check box that indicates (if selected) that by default, invoices with retainage are created for the supplier in the Purchase invoices window. | [optional] 
**retainage_cash_account_id** | **string** | Payment settings tab &amp;gt; Retainage settings section &amp;gt; Retainage cash account &amp;gt; The cash account to be used to record retainages for this supplier. | [optional] 
**retainage_pct** | **double** | Payment settings tab &amp;gt; Retainage settings section &amp;gt; Retainage (%) &amp;gt; The default percent to be retained in invoices for the supplier. | [optional] 
**note** | **string** |  | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


