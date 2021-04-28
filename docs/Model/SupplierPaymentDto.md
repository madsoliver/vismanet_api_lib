# SupplierPaymentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The top part &amp;gt; Type &amp;gt;The type of supplier ledger payment document. The following types are available: Payment, PUrchase credit note, Prepayment, Supplier refund, Voided payment. | [optional] 
**ref_nbr** | **string** | The top part &amp;gt; Voucher no. &amp;gt; The unique identifier of the supplier ledger document. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the supplier ledger document, which can be one of the following: On Hold, Printed, Open, Reserved, Closed, Voided, Released. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that means (if selected) that the status of the document is On hold. | [optional] 
**application_date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Date* &amp;gt; The date when the payment is applied. The default value is the current business date. | [optional] 
**application_period** | **string** | MAndatory field: The top part &amp;gt; Financial period* &amp;gt; The financial period of payment application. | [optional] 
**payment_ref** | **string** | The top part &amp;gt; Payment ref. &amp;gt; A payment reference number. | [optional] 
**supplier** | **object** | Mandatory field: The top part &amp;gt; Supplier* &amp;gt; The supplier. | [optional] 
**location** | **object** | Mandatory field: The top part &amp;gt; Location* &amp;gt; The supplier&#39;s location. Main location by default. | [optional] 
**payment_method** | **string** | Mandatory field: The top part &amp;gt; Payment method* &amp;gt; The payment method associated with the supplier. | [optional] 
**cash_account** | **string** | Mandatory field: The top part &amp;gt; Cash account* &amp;gt; The cash account associated with the payment method. | [optional] 
**currency** | **object** | The top part &amp;gt; Currency &amp;gt; The currency of the payment; by default, it is the currency associated with the cash account. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A description for the payment. You may use up to 50 alphanumeric characters. | [optional] 
**payment_amount** | **double** | The top part &amp;gt; Payment amount &amp;gt; The total payment amount that should be applied to the documents. | [optional] 
**finance_charges** | **double** | The top part &amp;gt; Finance charges &amp;gt; The total on all finance charges applied to this document. | [optional] 
**unapplied_balance** | **double** | The top part &amp;gt; Unapplied balance &amp;gt; The balance that has not been applied. This will be a non-zero value if the payment amount is not equal to a document&#39;s total amount. Checks shall always have a zero unapplied balance. | [optional] 
**applied_amount** | **double** | The top part &amp;gt; Amount &amp;gt; The amount to be applied on the application date. | [optional] 
**released** | **bool** | Background information: if this check box is selected, the document has been released. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | Background information: The date and time when the document has been last modified. | [optional] 
**payment_lines** | [**\Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentDto[]**](SupplierPaymentAdjustmentDto.md) |  | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


