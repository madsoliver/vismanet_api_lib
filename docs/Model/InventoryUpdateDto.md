# InventoryUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory_number** | **object** | Mandatory for POST, not applicable for PUT. The unique alphanumeric identifier of the  item that is used in UI. | [optional] 
**status** | **object** |  | [optional] 
**type** | **object** |  | [optional] 
**description** | **object** |  | [optional] 
**body** | **object** |  | [optional] 
**item_class** | **object** | Mandatory, the item class to which the item is assigned. Selecting a class provides default settings for the item. | [optional] 
**posting_class** | **object** | The posting class of the item, which by default is the posting class assigned to the item class. | [optional] 
**vat_code** | **object** | The vat category of the item, which by default is the vat category associated with the item class. | [optional] 
**default_price** | **object** | The price of the item. This price is used as the default price, if there are no other prices set. | [optional] 
**base_unit** | **object** |  | [optional] 
**sales_unit** | **object** |  | [optional] 
**purchase_unit** | **object** |  | [optional] 
**expense_accrual_account** | **object** | Only used for Non-stock items | [optional] 
**inventory_account** | **object** | Only used for Stock items | [optional] 
**expense_account** | **object** | Only used for Non-stock items | [optional] 
**cogs_account** | **object** | Only used for Stock items | [optional] 
**expense_non_taxable_account** | **object** |  | [optional] 
**expense_eu_account** | **object** |  | [optional] 
**expense_import_account** | **object** |  | [optional] 
**expense_subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) | Only used for Non-stock items | [optional] 
**cogs_subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) | Only used for Stock items | [optional] 
**sales_account** | **object** |  | [optional] 
**sales_non_taxable_account** | **object** |  | [optional] 
**sales_eu_account** | **object** |  | [optional] 
**sales_export_account** | **object** |  | [optional] 
**sales_subaccount** | [**\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]**](SegmentUpdateDto.md) |  | [optional] 
**attribute_lines** | [**\Ekstralys\VismaNetApi\Model\AttributeLineUpdateDto[]**](AttributeLineUpdateDto.md) |  | [optional] 
**packaging** | **object** |  | [optional] 
**supplier_details** | [**\Ekstralys\VismaNetApi\Model\SupplierDetailsDto[]**](SupplierDetailsDto.md) |  | [optional] 
**intrastat** | **object** |  | [optional] 
**default_warehouse** | **object** | General information tab &amp;gt; Warehouse defaults section &amp;gt; Default warehouse &amp;gt; The default warehouse used to store the stock item with the specified item ID. | [optional] 
**default_issue_from** | **object** | General information tab &amp;gt; Warehouse defaults section &amp;gt; Default issue from &amp;gt; The location of the warehouse to be used by default to issue quantities of the selected stock item. | [optional] 
**default_receipt_to** | **object** | General information tab &amp;gt; Warehouse defaults section &amp;gt; Default receipt to &amp;gt; The location of warehouse to be used by default to receive certain quantities of the specified stock item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


