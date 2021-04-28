# SalesOrderBasicUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lines** | [**\Ekstralys\VismaNetApi\Model\SalesOrderBasicLineUpdateDto[]**](SalesOrderBasicLineUpdateDto.md) |  | [optional] 
**order_type** | **object** | Mandatory field | 
**order_number** | **object** |  | [optional] 
**hold** | **object** |  | [optional] 
**date** | **object** |  | [optional] 
**request_on** | **object** |  | [optional] 
**customer_order** | **object** |  | [optional] 
**customer_ref_no** | **object** |  | [optional] 
**customer** | **object** | Mandatory field if GLN or VatRegistrationId is not specified. | [optional] 
**location** | **object** |  | [optional] 
**contact_id** | **object** |  | [optional] 
**gln** | **object** | Mandatory field if Customer or VatRegistrationId is not specified. | [optional] 
**vat_registration_id** | **object** | Mandatory field if Customer or GLN is not specified. | [optional] 
**currency** | **object** |  | [optional] 
**description** | **object** |  | [optional] 
**recalculate_shipment** | **object** |  | [optional] 
**branch_number** | **object** |  | [optional] 
**note** | **object** |  | [optional] 
**override_number_series** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


