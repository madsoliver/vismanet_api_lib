# SalesOrderBasicDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lines** | [**\Ekstralys\VismaNetApi\Model\SalesOrderDocumentLineDto[]**](SalesOrderDocumentLineDto.md) |  | [optional] 
**order_type** | **string** | Mandatory field: The top part &amp;gt; Order type &amp;gt; The type of the document, which is one of the predefined order types or a custom order type created by using the (SO201000) window. | [optional] 
**order_no** | **string** | The top part &amp;gt; Order no.: &amp;gt; The reference number of the document. | [optional] 
**status** | **string** | The top part &amp;gt; Status &amp;gt; The status of the document, which can be one of the following options: On hold, Credit hold, Pending aååroval, Rejected, Open, Cancelled, Shipping, Back order, Invoiced, Completed. | [optional] 
**hold** | **bool** | The top part &amp;gt; Hold &amp;gt; A check box that you select if the document is on hold and should not be processed further at this time. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Date* &amp;gt;  The date of the document. | [optional] 
**request_on** | [**\DateTime**](\DateTime.md) | Mandatory field: The top part &amp;gt; Requested on &amp;gt; The date when the customer wants to receive the goods; this date provides the default values for the Requested on dates for order lines. | [optional] 
**customer_order** | **string** | The top part &amp;gt; Customer order &amp;gt; The reference number of the original customer document that the sales order is based on. | [optional] 
**customer_ref_no** | **string** | The top part &amp;gt; External reference &amp;gt; The reference number of the sales order in a third-party application if Visma.net Financials is integrated with such an application and imports the sales orders from it. | [optional] 
**customer** | **object** | The top part &amp;gt; Customer &amp;gt; The customer that has ordered the goods or services. | [optional] 
**contact_id** | **int** | The top part &amp;gt; Contact &amp;gt; The contact person of the customer. | [optional] 
**location** | **object** | Mandatory field: The top part &amp;gt; Location* &amp;gt; The customer location from which the goods or services have been ordered or, if the sales order is created from an opportunity, the customer location specified for the opportunity. | [optional] 
**currency** | **string** | The top part &amp;gt; Currency &amp;gt; The currency of the document. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A brief description of the document. | [optional] 
**order_total** | **double** | The top part &amp;gt; Order total &amp;gt; The total amount of the document, which is calculated as follows:  Line Total + Misc.Charges + Freight + Premium Freight – Discount Total+ Tax Total | [optional] 
**order_total_in_base_currency** | **double** |  | [optional] 
**vat_taxable_total** | **double** | The top part &amp;gt; VAT taxable total &amp;gt; The document total that is subject to VAT. | [optional] 
**vat_taxable_total_in_base_currency** | **double** |  | [optional] 
**vat_exempt_total** | **double** | The top part &amp;gt; VAT exempt total &amp;gt; The document total that is exempt from VAT. | [optional] 
**vat_exempt_total_in_base_currency** | **double** |  | [optional] 
**tax_total** | **double** | The top part &amp;gt; VAT total &amp;gt; The total amount of tax paid on the document. | [optional] 
**tax_total_in_base_currency** | **double** |  | [optional] 
**exchange_rate** | **double** |  | [optional] 
**discount_total** | **double** |  | [optional] 
**discount_total_in_base_currency** | **double** |  | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | Background information collected from the system. | [optional] 
**branch_number** | **object** | Mandatory field: Document details tab &amp;gt; Branch* &amp;gt; The branch of the company. | [optional] 
**note** | **string** | Icon Notes on top of the window &amp;gt; Pop-up window for providing any user-defined text connected to the order. | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) | The data containing information about the document attachments | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


