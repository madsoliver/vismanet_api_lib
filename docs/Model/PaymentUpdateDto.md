# PaymentUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_number** | **object** | The top part &amp;gt; Ref. no &amp;gt; Reference number for the document. Can be used when manual numbering is enabled. | [optional] 
**type** | **object** | The top part &amp;gt; Type &amp;gt; The type of a document: Payment, Credit note, Prepayment, Customer refund, Void payment, Balance write-off. | [optional] 
**hold** | **object** | The top part &amp;gt; Hold &amp;gt; A check box that indicates (if selected) that the document is a draft with the On hold status. | [optional] 
**application_date** | **object** | Mandatory field: The top part &amp;gt; Date* &amp;gt; The date when a payment is applied to a document (invoice or note). The current business date for unapplied or partially applied payments and the latest application date for the closed payment. | [optional] 
**application_period** | **object** | Mandatory field: The top part &amp;gt; Financial period* &amp;gt; The financial period to which the payment should be applied, which the system fills in based on the date. | [optional] 
**payment_ref** | **object** | Mandatory field: The top part &amp;gt; Payment ref.* &amp;gt; A secondary payment reference identifier, which can be a system-generated number or an external reference number entered manually. | [optional] 
**customer** | **object** | Mandatory field: The top part &amp;gt; Customer* &amp;gt; The customer who issued the payment. | [optional] 
**location** | **object** | Mandatory field: The top part &amp;gt; Location* &amp;gt; The customer location associated with the sale. Once the customer is selected, this field displays the customer&#39;s default location. | [optional] 
**payment_method** | **object** | The top part &amp;gt; Payment method &amp;gt; The customer&#39;s default payment method. | [optional] 
**cash_account** | **object** | Mandatory field: The top part &amp;gt; Cash account* &amp;gt; The default cash account associated with the payment method. | [optional] 
**currency** | **object** | The top part &amp;gt; Currency &amp;gt; The currency of the payment document. Once the customer is selected, the system inserts the customer&#39;s default currency. | [optional] 
**payment_amount** | **object** | The top part &amp;gt; Payment amount &amp;gt; The total of the documents to which payment is to be applied. | [optional] 
**invoice_text** | **object** | The top part &amp;gt; Invoice text &amp;gt; A user-defined description of the payment. | [optional] 
**branch** | **object** |  | [optional] 
**orders_to_apply** | [**\Ekstralys\VismaNetApi\Model\PaymentOrdersLinesUpdateDto[]**](PaymentOrdersLinesUpdateDto.md) | The top part &amp;gt; Applied to orders &amp;gt; The total of the orders for which payment is reserved, minus the amount transferred to invoice. | [optional] 
**payment_lines** | [**\Ekstralys\VismaNetApi\Model\PaymentLinesUpdateDto[]**](PaymentLinesUpdateDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


