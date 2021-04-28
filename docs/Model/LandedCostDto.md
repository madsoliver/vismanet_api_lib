# LandedCostDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_nbr** | **int** | Landed costs tab &amp;gt; Line number | [optional] 
**landed_cost_code** | **string** | Mandatory field: Landed costs tab &amp;gt; Landed costs* &amp;gt; Landed cost code &amp;gt; The landed cost code associated with the landed costs incurred for this purchase or transfer receipt. | [optional] 
**description** | **string** | Mandatory field: Landed costs tab &amp;gt; Description* &amp;gt; The description of the landed cost code. | [optional] 
**purchase_invoice_nbr** | **string** |  | [optional] 
**supplier** | **object** | Mandatory field: Landed costs tab &amp;gt; Supplier* &amp;gt; The landed cost supplier to whom the landed cost amount will be paid. | [optional] 
**location** | **object** | Mandatory field: Landed costs tab &amp;gt; Location* &amp;gt; The location of the selected landed cost supplier. | [optional] 
**ap_bill_date** | [**\DateTime**](\DateTime.md) | Landed costs tab &amp;gt; Purchase invoice date &amp;gt; The date of the purchase invoice for the landed cost. | [optional] 
**currency** | **string** | Landed costs tab &amp;gt; Currency &amp;gt; The currency used for the landed cost. | [optional] 
**amount** | **double** | Landed costs tab &amp;gt; Amount &amp;gt; A non-zero amount of the landed cost. | [optional] 
**tax_category** | **object** | Landed costs tab &amp;gt; VAT category &amp;gt; VAT category associated with supplier&#39;s VAT zone. | [optional] 
**terms** | **object** | Landed costs tab &amp;gt; Terms &amp;gt; The credit terms used in relations with the landed cost supplier. | [optional] 
**inventory** | **object** |  | [optional] 
**ap_doc_type** | **string** | Landed costs tab &amp;gt; Supplier document type &amp;gt; The type of the supplier document generated for the landed cost. | [optional] 
**ap_ref_nbr** | **string** | Landed costs tab &amp;gt; Supplier ref. &amp;gt; The reference number of the supplier document generated for the landed cost. | [optional] 
**in_doc_type** | **string** | Landed costs tab &amp;gt; Inventory doc. type &amp;gt; The type of the document generated in the Inventory workspace for this landed cost. | [optional] 
**in_ref_nbr** | **string** | Landed costs tab &amp;gt; Inventory ref. no. &amp;gt; The reference number of the document generated in the Inventory workspace for this landed cost. | [optional] 
**postpone_purchase_invoice_creation** | **bool** | Landed costs tab &amp;gt; Postpone creation of purchase invoice &amp;gt; A check box that indicates (if selected) that a related supplier ledger invoice for the incurred landed costs must be created later. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


