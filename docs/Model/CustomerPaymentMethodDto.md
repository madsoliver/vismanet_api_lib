# CustomerPaymentMethodDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **object** | Mandatory field: The top part &amp;gt; Customer* &amp;gt; The customer whose payment method you want to view or add; select a customer from the list of customers defined in the system. | [optional] 
**payment_method** | **object** | Mandatory field: The top part &amp;gt; Payment method* &amp;gt; The payment method used as a template for a customer payment method you are currently viewing; select a payment method to use its settings for creating a new customer payment method. | [optional] 
**active** | **bool** | The top part &amp;gt; Active &amp;gt; A check box that indicates (if selected) that the selected customer payment method is active (that is, available for recording payments). | [optional] 
**cash_account** | **object** | The top part &amp;gt; Cash account &amp;gt; The cash account to accrue customer payments made by this payment method, if it differs from the default cash account specified for the payment method selected. | [optional] 
**card_or_account_no** | **string** | The top part &amp;gt; Card/account no. &amp;gt; The identifier for the customer&#39;s payment method. | [optional] 
**payment_method_details** | [**\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDetailDto[]**](CustomerPaymentMethodDetailDto.md) | Payment method details tab &amp;gt; The specific elements on this tab depend on the selected payment method, which is defined in the window. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


