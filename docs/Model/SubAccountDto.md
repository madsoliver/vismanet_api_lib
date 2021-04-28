# SubAccountDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subaccount_number** | **string** | Mandatory field: Subaccount* &amp;gt; The subaccount number. Format 9-XX. | [optional] 
**subaccount_id** | **int** | SubID &amp;gt; The  identifier of the subaccount. | [optional] 
**description** | **string** | Description &amp;gt; The description of the identifier. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | System generated information. | [optional] 
**active** | **bool** | Active &amp;gt; The status of the identifier. | [optional] 
**segments** | [**\Ekstralys\VismaNetApi\Model\SegmentDto[]**](SegmentDto.md) | Segments are entities that you use to define the structure of IDs for the subaccount.  This information is collected from window CS202000. | [optional] 
**error_info** | **string** |  | [optional] 
**metadata** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


