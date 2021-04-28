# CashTransactionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tran_type** | **string** | The top part &amp;gt; Trans type &amp;gt;  The type of cash transaction. | [optional] 
**reference_nbr** | **string** | The top part &amp;gt; Ref. no. &amp;gt; The unique identifier assigned to the cash transaction in accordance with the numbering sequence. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the transaction, which is automatically assigned by the system. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that, if selected, indicates that the transaction is on hold, which means it may be edited but cannot be released. | [optional] 
**tran_date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Trans. date* &amp;gt; The date of the transaction. | [optional] 
**fin_period** | **string** | The property is now considered obsolete. Use Financial Period instead | [optional] 
**financial_period** | **string** | Mandatory field: The top part &amp;gt; Period* &amp;gt; The financial period to which the transaction should be posted. | [optional] 
**cash_account** | **object** | Mandatory field: The top part &amp;gt; Cash account* &amp;gt; The cash account that is a source account for the transaction. | [optional] 
**currency** | **string** | The top part &amp;gt; Currency &amp;gt; The currency of the cash account. | [optional] 
**entry_type** | **object** | Mandatory field: The top part &amp;gt; Entry type* &amp;gt; The user-defined transaction type. | [optional] 
**disb_receipt** | **string** | The top part &amp;gt; Disb./receipt &amp;gt; The basic type of the transaction. | [optional] 
**document_ref** | **string** | The top part &amp;gt; Document ref. &amp;gt; The external document reference number. | [optional] 
**owner** | **object** | The top part &amp;gt; Owner &amp;gt; The user who created the cash transaction. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A detailed description of the transaction. | [optional] 
**amount** | **double** | The top part &amp;gt; Amount &amp;gt; The amount of the transaction. | [optional] 
**vat_taxable_total** | **double** | The top part &amp;gt; VAT taxable total &amp;gt; The document total that is subjected to VAT. | [optional] 
**vat_exempt_total** | **double** | The top part &amp;gt; VAT exempt total &amp;gt;  The document total that is exempt from VAT. | [optional] 
**tax_total** | **double** | The top part &amp;gt; VAT total &amp;gt; The total amount of tax paid in the document. | [optional] 
**control_total** | **double** | Mandatory field: The top part &amp;gt; Control total &amp;gt; The control total of the transaction. | [optional] 
**tax_amount** | **double** | The top part &amp;gt; VAT amount &amp;gt; The VAT amount to be paid for the document. A user enters this amount manually. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**transaction_details** | [**\Ekstralys\VismaNetApi\Model\TransactionDetailDto[]**](TransactionDetailDto.md) | Transaction details tab &amp;gt; | [optional] 
**tax_details** | [**\Ekstralys\VismaNetApi\Model\CashTranTaxDetailDto[]**](CashTranTaxDetailDto.md) | VAT details tab &amp;gt; | [optional] 
**financials_detail** | **object** | Financial details tab &amp;gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


