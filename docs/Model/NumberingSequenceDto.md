# NumberingSequenceDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numbering_id** | **string** | Mandatory field: The top part &amp;gt; Numbering ID &amp;gt; The unique ID of the numbering series, which is an alphanumeric string of up to 10 characters. | [optional] 
**branch** | **object** | The table &amp;gt; Branch &amp;gt; The branch using the numbering series. | [optional] 
**start_nbr** | **string** | Mandatory field: The table &amp;gt; Start number* &amp;gt; The number to be used first in this numbering series or subsequence. | [optional] 
**end_nbr** | **string** | Mandatory field: The table &amp;gt; End number* &amp;gt; The number to be used at the end of this series. The end number cannot be less than the Start number. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Mandatory field: The table &amp;gt; Start dat*e &amp;gt; The date when this series will first be used. | [optional] 
**last_nbr** | **string** | Mandatory field: The table &amp;gt; Last number* &amp;gt; The most recent number used for an object in this series. | [optional] 
**warn_nbr** | **string** | Mandatory field: The table &amp;gt; Warning number* &amp;gt; The minimum number that triggers a warning that available numbers will be used up soon. | [optional] 
**nbr_step** | **int** | Mandatory field: The table &amp;gt; Numbering step* &amp;gt; The increment this series uses to generate the next number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


