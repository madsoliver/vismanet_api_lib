# LinkLineDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_type** | **string** | PurchaseTye can be either {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder} or {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}&lt;para&gt;  It should be noted that for stock-items, its only limited to {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, however,  for non-stock items we can choose either {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt} or {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder}&lt;/para&gt; | [optional] 
**purchase_number** | **object** | PurchaseNumber refers to either PurchaseOrder or PurchaseReceipt number depends on the value of {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType}  If {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType} is set to {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, then it should refer to the PruchaseReceipt number  otherwise it refers to the PurchaseOrder | [optional] 
**purchase_line_nbr** | **object** | PurchaseLineNbr refers to either PurchaseOrder or PurchaseReceipt line number depends on the value of {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType}  If {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType} is set to {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, then it should refer to the PruchaseReceipt line number  otherwise it refers to the PurchaseOrder | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


