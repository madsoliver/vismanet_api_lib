# DiscountDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discount_code** | **string** | Mandatory field: The top part &amp;gt; Discount code &amp;gt; The code of the discount for which you want to create a new series or view an existing one. | [optional] 
**series** | **string** | Mandatory field: The top part &amp;gt; Series &amp;gt; The ID of the series defined for the discount. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; A brief description of the series. | [optional] 
**discount_by** | **string** | The top part &amp;gt; Discount by &amp;gt; The way the discount for the series is specified. Percent, Amount, Free item. | [optional] 
**break_by** | **string** | The top part &amp;gt; Break by &amp;gt; The way the breakpoints for this discount series are specified. Quantity, Amount. | [optional] 
**promotional** | **bool** | The top part &amp;gt; Promotional &amp;gt; A check box that indicates (if selected) that the series is a promotional discount. | [optional] 
**active** | **bool** | The top part &amp;gt; Active &amp;gt; A check box that indicates (if selected) that the series is active. | [optional] 
**prorate_discount** | **bool** | The top part &amp;gt; Prorate discount &amp;gt; A check box that indicates (if selected) that the discount can be prorated. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Effective date &amp;gt; The date when the series becomes effective; this field appears for promotional discount series only. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Expiration date &amp;gt; The date when the promotional discount expires. This field appears for the series if the Promotional check box is selected. | [optional] 
**last_update_date** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Last update date &amp;gt; A read-only field that shows the date when the discount series was last updated. | [optional] 
**free_item** | **int** | Free item tab &amp;gt; Free item &amp;gt; The free item (by its item ID) that is added to orders as the discount for this series. | [optional] 
**pending_free_item** | **int** | Free item tab &amp;gt; Pending free item &amp;gt; The free item (by its item ID) that will be added to orders as the discount for this series, starting on the date specified in the Pending date column on the Discount breakpoints tab. | [optional] 
**last_free_item** | **int** | Free item tab &amp;gt; Last free item &amp;gt; The free item (by its item ID) that had been added to orders as the discount for this series before the date shown in the Last date column on the Discount breakpoints tab. | [optional] 
**line_cntr** | **int** | Free item tab &amp;gt; A line counter for the table. | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | Free item tab &amp;gt; Last update date &amp;gt; A read-only field that shows the date when this discount series has been updated last. | [optional] 
**discount_breakpoints** | [**\Ekstralys\VismaNetApi\Model\DiscountBreakpointDto[]**](DiscountBreakpointDto.md) |  | [optional] 
**customers** | [**\Ekstralys\VismaNetApi\Model\DiscountCustomer2Dto[]**](DiscountCustomer2Dto.md) | Customers tab &amp;gt; Customer &amp;gt; The customer to which the series is applicable. | [optional] 
**items** | [**\Ekstralys\VismaNetApi\Model\DiscountItemDto[]**](DiscountItemDto.md) | Items tab &amp;gt; Items ID &amp;gt; The stock or non-stock item, by its item ID, to which the series can be applied. | [optional] 
**warehouses** | [**\Ekstralys\VismaNetApi\Model\DiscountWarehouseDto[]**](DiscountWarehouseDto.md) | Warehouses tab &amp;gt; Warehouse ID &amp;gt; The warehouse to which the series can be applied. | [optional] 
**customer_price_classes** | [**\Ekstralys\VismaNetApi\Model\DiscountCustomerPriceClassDto[]**](DiscountCustomerPriceClassDto.md) | Customer price classes tab &amp;gt; Customer price class ID &amp;gt; The customer price class to which the series is applicable. | [optional] 
**item_price_classes** | [**\Ekstralys\VismaNetApi\Model\DiscountItemPriceClassDto[]**](DiscountItemPriceClassDto.md) | Item price classes tab &amp;gt; Price class ID &amp;gt; The item price class to which the series is applicable. | [optional] 
**branches** | [**\Ekstralys\VismaNetApi\Model\DiscountBranchDto[]**](DiscountBranchDto.md) | Branches tab &amp;gt; Branch &amp;gt; The branch to which the series can be applied. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


