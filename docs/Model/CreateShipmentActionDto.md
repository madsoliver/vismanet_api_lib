# CreateShipmentActionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_type** | **string** | Mandatory field | 
**return_shipment_dto** | **bool** |  | [optional] 
**shipment_date** | [**\DateTime**](\DateTime.md) | Mandatory field | 
**shipment_warehouse** | **string** | Mandatory field | 
**operation** | **string** | Operation Type. Possible values: I or R, I &#x3D; Issue, R &#x3D; Receipt. If not set it will take the default one defined on Order Type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


