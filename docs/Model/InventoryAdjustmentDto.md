# InventoryAdjustmentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_cost** | **double** | The top part &amp;gt; Total cost &amp;gt; The total cost of the inventory items received. The system automatically calculates this value as a sum of all extended cost values of all received inventory items listed in the Transaction Details tab of this form. | [optional] 
**control_cost** | **double** | The top part &amp;gt; Control cost &amp;gt; The manually entered cost of stock items listed in the adjustment. Control cost is available only if the Validate document totals on Entry option is selected on the Inventory preferences window. The user enters this value manually to confirm the total cost as calculated automatically for the document. If the Control Cost and Total Cost values do not match, the system generates a warning message and the document cannot be saved. | [optional] 
**adjusment_lines** | [**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentLineDto[]**](InventoryAdjustmentLineDto.md) | Transaction details tab &amp;gt; The inventory adjusment lines | [optional] 
**reference_number** | **string** | The unique reference number of the receipt, which the system automatically assigns according to the numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form. | [optional] 
**status** | **string** | The current status of the receipt. The following options are available:   On Hold:The receipt/issue is a draft and can be edited. Receipts with this status cannot be released.  Balanced: The receipt/issue data has been validated by the system and the receipt can be released. It also can be modified or deleted, but changes can be saved only if the receipt is balanced.  Released: The receipt/issue has been released and cannot be edited or deleted. | [optional] 
**hold** | **bool** | A check box that you select to give the receipt the On Hold status. Clear the check box to save the receipt with the Balanced status. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date when the receipt was created. All transactions included in this document will have this transaction date. | [optional] 
**post_period** | **string** | The financial period to which the transactions recorded in the document should be posted. Format MMYYYY. | [optional] 
**external_reference** | **string** | The external reference number of the inventory issue document (for example, the vendor’s reference code). | [optional] 
**description** | **string** | A brief description of the inventory issue or its transactions. | [optional] 
**total_quantity** | **double** | The total quantity of inventory items, which the system calculates automatically, for the document. | [optional] 
**control_quantity** | **double** | The manually entered quantity of inventory items. Control Qty. is available only if the Validate Document Totals on Entry option is selected on the Inventory Preferences form. If the Control Qty. and Total Qty.values do not match, the system generates a warning message and the issue cannot be saved. | [optional] 
**batch_number** | **string** | The reference number of the batch generated for the receipt. Click the number to open the Journal Transactions (GL.30.10.00) form and view the details of the transactions. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | The date when the document was last modified. | [optional] 
**branch_number** | **object** | The Branch associated | [optional] 
**attachments** | [**\Ekstralys\VismaNetApi\Model\AttachmentDto[]**](AttachmentDto.md) | The data containing information about the document attachments | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


