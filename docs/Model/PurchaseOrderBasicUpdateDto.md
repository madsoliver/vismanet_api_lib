# PurchaseOrderBasicUpdateDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_type** | **object** |  | [optional] 
**order_number** | **object** |  | [optional] 
**hold** | **object** |  | [optional] 
**date** | **object** |  | [optional] 
**promised_on** | **object** |  | [optional] 
**description** | **object** |  | [optional] 
**supplier** | **object** | Mandatory field if GLN or VatRegistrationId is not specified. | [optional] 
**location** | **object** |  | [optional] 
**gln** | **object** | Mandatory field if Supplier or VatRegistrationId is not specified. | [optional] 
**vat_registration_id** | **object** | Mandatory field if Supplier or GLN is not specified. | [optional] 
**owner** | **object** |  | [optional] 
**currency** | **object** |  | [optional] 
**exchange_rate** | **object** |  | [optional] 
**supplier_ref** | **object** |  | [optional] 
**control_total** | **object** |  | [optional] 
**branch** | **object** |  | [optional] 
**lines** | [**\Ekstralys\VismaNetApi\Model\PurchaseOrderLineUpdateDto[]**](PurchaseOrderLineUpdateDto.md) |  | [optional] 
**change_dates_on_lines** | **bool** |  | [optional] 
**note** | **object** |  | [optional] 
**override_number_series** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


