# StocktakeLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Stocktaking details tab &amp;gt; Status &amp;gt; The status of the line of the stocktaking document, which indicates whether the actual physical quantity has been specified for the line. | [optional] 
**line_nbr** | **int** | Stocktaking details tab &amp;gt; Line no. &amp;gt; The number of the line in the stocktaking document. | [optional] 
**tag_nbr** | **int** | Stocktaking details tab &amp;gt; Tag no. &amp;gt; The tag number for the line item, which is the stock item with the properties specified in the line, such as location, subitem, and lot or serial number. | [optional] 
**inventory** | **object** | Stocktaking details tab &amp;gt; Item ID &amp;gt; The item ID of the item. | [optional] 
**location** | **object** | Stocktaking details tab &amp;gt; Location &amp;gt; The warehouse location of the item. | [optional] 
**warehouse** | **object** | The top part &amp;gt; Warehouse &amp;gt; An info field that shows the warehouse where the stocktaking count is performed. | [optional] 
**lot_serial_nbr** | **string** | Stocktaking details tab &amp;gt; Lot/serial number &amp;gt; The lot or serial number of the item. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Stocktaking details tab &amp;gt; Expiration date &amp;gt; The expiration date of the item with this specific lot or serial number. | [optional] 
**book_quantity** | **double** | Stocktaking details tab &amp;gt; Book quantity &amp;gt; The book quantity of the item, which is calculated based on the system records. | [optional] 
**physical_quantity** | **double** | Stocktaking details tab &amp;gt; Physical quantity &amp;gt; The physical quantity of the item as entered manually. | [optional] 
**variance_quantity** | **double** | Stocktaking details tab &amp;gt; Variance quantity &amp;gt; The difference between the book quantity and the physical quantity for the line item. | [optional] 
**unit_cost** | **double** | Stocktaking details tab &amp;gt; Unit cost &amp;gt; The last cost of the item’s base unit as approximation of its unit cost during the count. | [optional] 
**ext_variance_cost** | **double** | Stocktaking details tab &amp;gt; Variance cost &amp;gt; The difference between the extended cost calculated based on the book quantity and the extended cost calculated based on the physical quantity for the item. | [optional] 
**reason_code** | **string** | Stocktaking details tab &amp;gt; Reason code &amp;gt; The reason code for the item. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


