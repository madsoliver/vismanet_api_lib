# StocktakeDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_nbr** | **string** | The top part &amp;gt; Ref. no. &amp;gt; The reference number of the stocktaking document to be reviewed. | [optional] 
**description** | **string** | The top part &amp;gt; Description &amp;gt; The description of the stocktaking. | [optional] 
**summary_status** | **string** | The top part &amp;gt; Status &amp;gt; An info field that shows the current status of this stocktaking document. | [optional] 
**freeze_date** | [**\DateTime**](\DateTime.md) | The top part &amp;gt; Freeze date &amp;gt; An info field that shows the date when the stocktaking document was created. | [optional] 
**number_of_lines** | **int** |  | [optional] 
**physical_qty** | **double** | The top part &amp;gt; Total physical qty. &amp;gt; An info field showing the total actual quantity of all stock items listed in the document. | [optional] 
**variance_qty** | **double** | The top part &amp;gt; Total variance qty. &amp;gt; An info field showing the total variance quantity for the document. | [optional] 
**variance_cost** | **double** | The top part &amp;gt; Total variance cost &amp;gt; An info field showing the total variance cost for all stock items listed in the document. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**lines** | [**\Ekstralys\VismaNetApi\Model\StocktakeLineDto[]**](StocktakeLineDto.md) | Stocktaking details tab &amp;gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


