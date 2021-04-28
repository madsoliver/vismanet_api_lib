# SupplierDocumentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **object** | Mandatory field: Document details tab &amp;gt; Account* &amp;gt; The expense account to be updated by this transaction. | [optional] 
**subaccount** | **object** | Mandatory field: Document details tab &amp;gt; Subaccount* &amp;gt; The corresponding subaccount to be used for invoices and adjustments. | [optional] 
**amount** | **double** | Document details tab &amp;gt; Amount &amp;gt; Read-only. The total amount for the specified quantity of items or services of this type (after the discount has been taken). | [optional] 
**amount_in_currency** | **double** | An automatic calculation of the amount with the currency set as default for supplier. | [optional] 
**branch** | **object** | Branch is deprecated, please use BranchNumber instead. | [optional] 
**supplier** | **object** | The Top part &amp;gt; Supplier* &amp;gt; The identifier of the supplier referred to in the document. | [optional] 
**document_type** | **string** | The top part &amp;gt; Top part &amp;gt; Type &amp;gt; The type of the document. The following types are available: Purchase invoice, credit adjustment, purchase credit note, prepayment. | [optional] 
**reference_number** | **string** |  | [optional] 
**post_period** | **string** | The Top part &amp;gt; Post period* &amp;gt; The post period of the payment document. Format MMYYYY. | [optional] 
**financial_period** | **string** | The financial period to which the transactions recorded in the document should be posted. Format YYYYMM. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The Top part &amp;gt; Date* &amp;gt; The date of the original supplier ledger document; by default, it is the current date, which can be changed. | [optional] 
**orig_invoice_date** | [**\DateTime**](\DateTime.md) | The Top part &amp;gt; OrigInvoiceDate* &amp;gt; The original invoice date of the original supplier ledger document; by default, it is the current date, which can be changed. | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | The Top part &amp;gt; Due date* &amp;gt; The date when payment for the document is due in accordance with the supplier&#39;s credit terms. | [optional] 
**approval_status** | **string** | The Top part &amp;gt; Approval status &amp;gt; The status of the document in Visma.net Approval. [New, Canceled, SentToApproval, ReceivedByApproval, InProgressApproval, RejectedInApproval, ApprovedInApproval, ActiveWorkflowApproval. | [optional] 
**status** | **string** | The Top part &amp;gt; Document status &amp;gt; A read-only field that shows the status of the supplier ledger document:[Hold, Balanced, Voided, Scheduled, Open, Closed, Printed, Prebooked, Reserved] | [optional] 
**currency_id** | **string** | The Top part &amp;gt; Currency &amp;gt; The currency of the document. | [optional] 
**balance** | **double** | The Top part &amp;gt; Balance &amp;gt; The balance of the supplier ledger document after VAT (if inclusive) and the discount as specified in the tabs below. | [optional] 
**balance_in_currency** | **double** | Background calculation giving you the Balance in your default currency. This field is applicable if the amount is given in another currency than your default. | [optional] 
**cash_discount** | **double** | The Top part &amp;gt; Cash discount &amp;gt; The cash discount amount that has been or will be taken in the document, which the system calculates based in the specified credit terms. | [optional] 
**cash_discount_in_currency** | **double** | Background calculation giving you the Cash discount in your default currency. This field is applicable if the amount is given in another currency than your default. | [optional] 
**payment_method** | **object** | The Financial details tab &amp;gt; Payment method &amp;gt; The payment method used for the payment. | [optional] 
**supplier_reference** | **string** | The Top part &amp;gt; Supplier ref. &amp;gt; The document&#39;s original reference number as assigned by the supplier (for informational purposes). | [optional] 
**description** | **string** | The Top part &amp;gt; Description &amp;gt; A user-provided description for this supplier ledger document. | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**note** | **string** | The table &amp;gt; Document details tab and Applications tab &amp;gt; Icon Notes &amp;gt; Pop-up window for providing any user-defined text connected with to invoice. | [optional] 
**closed_financial_period** | **string** | Format YYYYMM. | [optional] 
**location** | **object** | The Top part &amp;gt; Location* &amp;gt; The supplier location associated with the purchase. | [optional] 
**vat_total** | **double** | The Top part &amp;gt; VAT total &amp;gt; The total amount of tax paid in the document. | [optional] 
**vat_total_in_currency** | **double** | Background calculation giving you the VAT total in your default currency. This field is applicable if the amount is given in another currency than your default. | [optional] 
**branch_number** | **object** |  | [optional] 
**pay_date** | [**\DateTime**](\DateTime.md) | The Financial details tab &amp;gt; The Payment information section &amp;gt; Pay date* &amp;gt; The date when the invoice should be paid. The date is the difference between the document due date or discount date and the number of days specified in the Payment lead time field in AP303000. | [optional] 
**payment_message** | **string** | The Financial details tab &amp;gt; The Payment information section &amp;gt; Payment message &amp;gt; The message connected with the payment. | [optional] 
**cash_account** | **string** | Financial details tab &amp;gt; The payment information section &amp;gt; Cash account &amp;gt; The cash account associated with the payment method. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


