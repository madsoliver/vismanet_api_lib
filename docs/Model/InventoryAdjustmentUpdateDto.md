# InventoryAdjustmentUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**control_cost** | **object** | The manually entered summary cost for all specified inventory adjustment items. | [optional] 
**adjustment_lines** | [**\Ekstralys\VismaNetApi\Model\InventoryAdjustmentLineUpdateDto[]**](InventoryAdjustmentLineUpdateDto.md) | The inventory adjustment lines | [optional] 
**reference_number** | **object** | The unique reference number of the receipt, which the system automatically assigns according to the numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form. | [optional] 
**hold** | **object** | A check box that you select to give the receipt the On Hold status. Clear the check box to save the receipt with the Balanced status. | [optional] 
**date** | **object** | The date when the receipt was created. All transactions included in this document will have this transaction date. | [optional] 
**post_period** | **object** | The financial period to which the transactions recorded in the document should be posted. Use the format MMYYYY. | [optional] 
**external_reference** | **object** | The external reference number of the inventory issue document (for example, the vendor’s reference code). | [optional] 
**description** | **object** | A brief description of the inventory issue or its transactions. | [optional] 
**control_quantity** | **object** | The manually entered quantity of inventory items. Control Qty. is available only if the Validate Document Totals on Entry option is selected on the Inventory Preferences form. If the Control Qty. and Total Qty.values do not match, the system generates a warning message and the issue cannot be saved. | [optional] 
**branch_number** | **object** | The Branch associated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


