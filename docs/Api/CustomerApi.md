# Ekstralys\VismaNetApi\CustomerApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerChangeCustomerNrActionByinternalId**](CustomerApi.md#customerChangeCustomerNrActionByinternalId) | **POST** /controller/api/v1/customer/action/changeCustomerCd/{internalId} | Updates the CustomerNr for the specified Customer
[**customerCreateDunningLetterActionBycustomer**](CustomerApi.md#customerCreateDunningLetterActionBycustomer) | **POST** /controller/api/v1/customer/{customer}/action/createDunningLetter | Creates dunning letters for a specific customer
[**customerGetAll**](CustomerApi.md#customerGetAll) | **GET** /controller/api/v1/customer | Get a range of customers - ScreenId&#x3D;AR303000
[**customerGetAllCashSalesForCustomerBycustomerNumber**](CustomerApi.md#customerGetAllCashSalesForCustomerBycustomerNumber) | **GET** /controller/api/v1/customer/{customerNumber}/cashSale | Get a range of cash sales for a specific customer
[**customerGetAllContactsForCustomerBycustomerCd**](CustomerApi.md#customerGetAllContactsForCustomerBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/contact | Get a range of Contacts of a specific customer
[**customerGetAllCustomerBalance**](CustomerApi.md#customerGetAllCustomerBalance) | **GET** /controller/api/v1/customer/balance | Get the balance for a range of customers
[**customerGetAllDocumentsForCustomerBycustomerNumber**](CustomerApi.md#customerGetAllDocumentsForCustomerBycustomerNumber) | **GET** /controller/api/v1/customer/{customerNumber}/document | Gets a range of documents for a specific customer
[**customerGetAllInvoicesForCustomerBycustomerNumber**](CustomerApi.md#customerGetAllInvoicesForCustomerBycustomerNumber) | **GET** /controller/api/v1/customer/{customerNumber}/invoice | Get a range of invoices for a specific customer
[**customerGetAllOrderForCustomerBycustomerCd**](CustomerApi.md#customerGetAllOrderForCustomerBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/salesorder | Get a range of SO Orders of a specific customer
[**customerGetAllSalesOrderBasicForCustomerBycustomerCd**](CustomerApi.md#customerGetAllSalesOrderBasicForCustomerBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/salesorderbasic | Get a range of SO Orders Basic of a specific customer
[**customerGetBycustomerCd**](CustomerApi.md#customerGetBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd} | Get a specific customer
[**customerGetCustomerBalanceBycustomerCd**](CustomerApi.md#customerGetCustomerBalanceBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/balance | Get a specific customer&#39;s balance - ScreenId&#x3D;AR303000
[**customerGetCustomerClasses**](CustomerApi.md#customerGetCustomerClasses) | **GET** /controller/api/v1/customer/customerClass | Get Customer Classes - ScreenId&#x3D;AR201000
[**customerGetCustomerDirectDebitBycustomerCd**](CustomerApi.md#customerGetCustomerDirectDebitBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/directdebit | Get direct debit information for a specific customer(only for Netherlands)
[**customerGetCustomerNoteBycustomerCd**](CustomerApi.md#customerGetCustomerNoteBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/note | Get a specific customer&#39;s note
[**customerGetSalesPersonsForCustomerBycustomerCd**](CustomerApi.md#customerGetSalesPersonsForCustomerBycustomerCd) | **GET** /controller/api/v1/customer/{customerCd}/salespersons | Get a range of Sales Persons of a specific customer
[**customerGetSpecificCustomerClassBycustomerClassId**](CustomerApi.md#customerGetSpecificCustomerClassBycustomerClassId) | **GET** /controller/api/v1/customer/customerClass/{customerClassId} | Get a specific customer class - ScreenId&#x3D;AR201000
[**customerPost**](CustomerApi.md#customerPost) | **POST** /controller/api/v1/customer | Creates a customer
[**customerPutBycustomerCd**](CustomerApi.md#customerPutBycustomerCd) | **PUT** /controller/api/v1/customer/{customerCd} | Updates a specific customer


# **customerChangeCustomerNrActionByinternalId**
> \Ekstralys\VismaNetApi\Model\ChangeCustomerCdActionResultDto customerChangeCustomerNrActionByinternalId($internal_id, $change_customer_nr_action_dto)

Updates the CustomerNr for the specified Customer

The action result dto contains information about the result of running the action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = 56; // int | Internal identifier of the Customer for which the Customer Nr will be changed
$change_customer_nr_action_dto = new \Ekstralys\VismaNetApi\Model\ChangeCustomerCdActionDto(); // \Ekstralys\VismaNetApi\Model\ChangeCustomerCdActionDto | 

try {
    $result = $apiInstance->customerChangeCustomerNrActionByinternalId($internal_id, $change_customer_nr_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerChangeCustomerNrActionByinternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **int**| Internal identifier of the Customer for which the Customer Nr will be changed |
 **change_customer_nr_action_dto** | [**\Ekstralys\VismaNetApi\Model\ChangeCustomerCdActionDto**](../Model/ChangeCustomerCdActionDto.md)|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\ChangeCustomerCdActionResultDto**](../Model/ChangeCustomerCdActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreateDunningLetterActionBycustomer**
> \Ekstralys\VismaNetApi\Model\CreateDunningLetterActionResultDto customerCreateDunningLetterActionBycustomer($customer, $create_dunning_letter_action_dto)

Creates dunning letters for a specific customer

The action result dto contains information about the result of running the action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = "customer_example"; // string | Reference number of the customer for which the dunning letters will be created
$create_dunning_letter_action_dto = new \Ekstralys\VismaNetApi\Model\CreateDunningLetterActionDto(); // \Ekstralys\VismaNetApi\Model\CreateDunningLetterActionDto | Defines the data for the dunning letters to be created

try {
    $result = $apiInstance->customerCreateDunningLetterActionBycustomer($customer, $create_dunning_letter_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateDunningLetterActionBycustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| Reference number of the customer for which the dunning letters will be created |
 **create_dunning_letter_action_dto** | [**\Ekstralys\VismaNetApi\Model\CreateDunningLetterActionDto**](../Model/CreateDunningLetterActionDto.md)| Defines the data for the dunning letters to be created |

### Return type

[**\Ekstralys\VismaNetApi\Model\CreateDunningLetterActionResultDto**](../Model/CreateDunningLetterActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAll**
> \Ekstralys\VismaNetApi\Model\CustomerDto[] customerGetAll($greater_than_value, $number_to_read, $skip_records, $name, $status, $corporate_id, $vat_registration_id, $email, $phone, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $expand_account_information, $expand_payment_methods, $expand_direct_debit, $attributes, $page_number, $page_size)

Get a range of customers - ScreenId=AR303000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | This field does not work and has been deprecated. It will be removed in future versions.
$number_to_read = 56; // int | [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only {numberToRead} number of records.
$skip_records = 56; // int | [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only records after the first {skipRecords} number of records.
$name = "name_example"; // string | Equals Customer name.
$status = "status_example"; // string | Drop down and select Status.
$corporate_id = "corporate_id_example"; // string | Equals Corporate ID from Delivery settings tab.
$vat_registration_id = "vat_registration_id_example"; // string | Equals VAT registration ID from Delivery settings tab.
$email = "email_example"; // string | Equals Email for customer.
$phone = "phone_example"; // string | Equals Phone 1 for customer.
$last_modified_date_time = "last_modified_date_time_example"; // string | System retrieved information for last modified date and time.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for date, time and state/condition.
$created_date_time = "created_date_time_example"; // string | 
$created_date_time_condition = "created_date_time_condition_example"; // string | 
$expand_account_information = true; // bool | 
$expand_payment_methods = true; // bool | 
$expand_direct_debit = true; // bool | Expand direct debit info
$attributes = "attributes_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAll($greater_than_value, $number_to_read, $skip_records, $name, $status, $corporate_id, $vat_registration_id, $email, $phone, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $expand_account_information, $expand_payment_methods, $expand_direct_debit, $attributes, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**| This field does not work and has been deprecated. It will be removed in future versions. | [optional]
 **number_to_read** | **int**| [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only {numberToRead} number of records. | [optional]
 **skip_records** | **int**| [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only records after the first {skipRecords} number of records. | [optional]
 **name** | **string**| Equals Customer name. | [optional]
 **status** | **string**| Drop down and select Status. | [optional]
 **corporate_id** | **string**| Equals Corporate ID from Delivery settings tab. | [optional]
 **vat_registration_id** | **string**| Equals VAT registration ID from Delivery settings tab. | [optional]
 **email** | **string**| Equals Email for customer. | [optional]
 **phone** | **string**| Equals Phone 1 for customer. | [optional]
 **last_modified_date_time** | **string**| System retrieved information for last modified date and time. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for date, time and state/condition. | [optional]
 **created_date_time** | **string**|  | [optional]
 **created_date_time_condition** | **string**|  | [optional]
 **expand_account_information** | **bool**|  | [optional]
 **expand_payment_methods** | **bool**|  | [optional]
 **expand_direct_debit** | **bool**| Expand direct debit info | [optional]
 **attributes** | **string**|  | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerDto[]**](../Model/CustomerDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllCashSalesForCustomerBycustomerNumber**
> \Ekstralys\VismaNetApi\Model\CashSaleDto[] customerGetAllCashSalesForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of cash sales for a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = "customer_number_example"; // string | Identifies the customer for which to return data
$document_type = "document_type_example"; // string | The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint.
$released = 56; // int | Parameter for showing if invoice has been released or not.
$dunning_level = 56; // int | The dunning level of the document.
$closed_financial_period = "closed_financial_period_example"; // string | The date of the closing of the financial period.
$dunning_letter_date_time = "dunning_letter_date_time_example"; // string | The date and time for when the document last released a dunning letter.
$dunning_letter_date_time_condition = "dunning_letter_date_time_condition_example"; // string | Set time/date as before (&lt;), after (&gt;), before and including (=&lt;) OR after and including (=&gt;) to filter on time frame.
$project = "project_example"; // string | The project with which the document is associated.
$expand_applications = true; // bool | True if you want to see all dunning information regarding this document.
$expand_dunning_information = true; // bool | 
$expand_attachments = true; // bool | True if you want to see all attachments regarding this document.
$expand_tax_details = true; // bool | True if you want to see all VAT details regarding this document.
$expand_invoice_address = true; // bool | True if you want to see all information regarding the invoice address for this document.
$financial_period = "financial_period_example"; // string | The financial period to which the transactions recorded in the document is posted. Format YYYYMM.
$document_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date when payment for the document is due, in accordance with the credit terms.
$status = "status_example"; // string | The status of the document. Use the dropdown to select status.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$external_reference = "external_reference_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$payment_reference = "payment_reference_example"; // string | The top part &gt; Payment ref. &gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window..
$customer_ref_number = "customer_ref_number_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAllCashSalesForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllCashSalesForCustomerBycustomerNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Identifies the customer for which to return data |
 **document_type** | **string**| The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint. | [optional]
 **released** | **int**| Parameter for showing if invoice has been released or not. | [optional]
 **dunning_level** | **int**| The dunning level of the document. | [optional]
 **closed_financial_period** | **string**| The date of the closing of the financial period. | [optional]
 **dunning_letter_date_time** | **string**| The date and time for when the document last released a dunning letter. | [optional]
 **dunning_letter_date_time_condition** | **string**| Set time/date as before (&amp;lt;), after (&amp;gt;), before and including (&#x3D;&amp;lt;) OR after and including (&#x3D;&amp;gt;) to filter on time frame. | [optional]
 **project** | **string**| The project with which the document is associated. | [optional]
 **expand_applications** | **bool**| True if you want to see all dunning information regarding this document. | [optional]
 **expand_dunning_information** | **bool**|  | [optional]
 **expand_attachments** | **bool**| True if you want to see all attachments regarding this document. | [optional]
 **expand_tax_details** | **bool**| True if you want to see all VAT details regarding this document. | [optional]
 **expand_invoice_address** | **bool**| True if you want to see all information regarding the invoice address for this document. | [optional]
 **financial_period** | **string**| The financial period to which the transactions recorded in the document is posted. Format YYYYMM. | [optional]
 **document_due_date** | **\DateTime**| The date when payment for the document is due, in accordance with the credit terms. | [optional]
 **status** | **string**| The status of the document. Use the dropdown to select status. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **external_reference** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **payment_reference** | **string**| The top part &amp;gt; Payment ref. &amp;gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window.. | [optional]
 **customer_ref_number** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CashSaleDto[]**](../Model/CashSaleDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllContactsForCustomerBycustomerCd**
> \Ekstralys\VismaNetApi\Model\ContactDto[] customerGetAllContactsForCustomerBycustomerCd($customer_cd, $display_name, $active, $first_name, $last_name, $business_account, $email, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition)

Get a range of Contacts of a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | 
$display_name = "display_name_example"; // string | 
$active = "active_example"; // string | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$business_account = "business_account_example"; // string | 
$email = "email_example"; // string | 
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | 
$skip_records = 56; // int | 
$order_by = "order_by_example"; // string | 
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 

try {
    $result = $apiInstance->customerGetAllContactsForCustomerBycustomerCd($customer_cd, $display_name, $active, $first_name, $last_name, $business_account, $email, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllContactsForCustomerBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**|  |
 **display_name** | **string**|  | [optional]
 **active** | **string**|  | [optional]
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **business_account** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**|  | [optional]
 **skip_records** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ContactDto[]**](../Model/ContactDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllCustomerBalance**
> \Ekstralys\VismaNetApi\Model\CustomerBalanceDto[] customerGetAllCustomerBalance($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition)

Get the balance for a range of customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | 
$number_to_read = 56; // int | 
$skip_records = 56; // int | 
$order_by = "order_by_example"; // string | 
$last_modified_date_time = "last_modified_date_time_example"; // string | 
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | 

try {
    $result = $apiInstance->customerGetAllCustomerBalance($greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllCustomerBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**|  | [optional]
 **number_to_read** | **int**|  | [optional]
 **skip_records** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **last_modified_date_time** | **string**|  | [optional]
 **last_modified_date_time_condition** | **string**|  | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerBalanceDto[]**](../Model/CustomerBalanceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllDocumentsForCustomerBycustomerNumber**
> \Ekstralys\VismaNetApi\Model\CustomerDocumentDto[] customerGetAllDocumentsForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Gets a range of documents for a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = "customer_number_example"; // string | Identifies the customer for which to return data
$document_type = "document_type_example"; // string | The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint.
$released = 56; // int | Parameter for showing if invoice has been released or not.
$dunning_level = 56; // int | The dunning level of the document.
$closed_financial_period = "closed_financial_period_example"; // string | The date of the closing of the financial period.
$dunning_letter_date_time = "dunning_letter_date_time_example"; // string | The date and time for when the document last released a dunning letter.
$dunning_letter_date_time_condition = "dunning_letter_date_time_condition_example"; // string | Set time/date as before (&lt;), after (&gt;), before and including (=&lt;) OR after and including (=&gt;) to filter on time frame.
$project = "project_example"; // string | The project with which the document is associated.
$expand_applications = true; // bool | True if you want to see all dunning information regarding this document.
$expand_dunning_information = true; // bool | 
$expand_attachments = true; // bool | True if you want to see all attachments regarding this document.
$expand_tax_details = true; // bool | True if you want to see all VAT details regarding this document.
$expand_invoice_address = true; // bool | True if you want to see all information regarding the invoice address for this document.
$financial_period = "financial_period_example"; // string | The financial period to which the transactions recorded in the document is posted. Format YYYYMM.
$document_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date when payment for the document is due, in accordance with the credit terms.
$status = "status_example"; // string | The status of the document. Use the dropdown to select status.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$external_reference = "external_reference_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$payment_reference = "payment_reference_example"; // string | The top part &gt; Payment ref. &gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window..
$customer_ref_number = "customer_ref_number_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAllDocumentsForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllDocumentsForCustomerBycustomerNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Identifies the customer for which to return data |
 **document_type** | **string**| The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint. | [optional]
 **released** | **int**| Parameter for showing if invoice has been released or not. | [optional]
 **dunning_level** | **int**| The dunning level of the document. | [optional]
 **closed_financial_period** | **string**| The date of the closing of the financial period. | [optional]
 **dunning_letter_date_time** | **string**| The date and time for when the document last released a dunning letter. | [optional]
 **dunning_letter_date_time_condition** | **string**| Set time/date as before (&amp;lt;), after (&amp;gt;), before and including (&#x3D;&amp;lt;) OR after and including (&#x3D;&amp;gt;) to filter on time frame. | [optional]
 **project** | **string**| The project with which the document is associated. | [optional]
 **expand_applications** | **bool**| True if you want to see all dunning information regarding this document. | [optional]
 **expand_dunning_information** | **bool**|  | [optional]
 **expand_attachments** | **bool**| True if you want to see all attachments regarding this document. | [optional]
 **expand_tax_details** | **bool**| True if you want to see all VAT details regarding this document. | [optional]
 **expand_invoice_address** | **bool**| True if you want to see all information regarding the invoice address for this document. | [optional]
 **financial_period** | **string**| The financial period to which the transactions recorded in the document is posted. Format YYYYMM. | [optional]
 **document_due_date** | **\DateTime**| The date when payment for the document is due, in accordance with the credit terms. | [optional]
 **status** | **string**| The status of the document. Use the dropdown to select status. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **external_reference** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **payment_reference** | **string**| The top part &amp;gt; Payment ref. &amp;gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window.. | [optional]
 **customer_ref_number** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerDocumentDto[]**](../Model/CustomerDocumentDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllInvoicesForCustomerBycustomerNumber**
> \Ekstralys\VismaNetApi\Model\CustomerInvoiceDto[] customerGetAllInvoicesForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of invoices for a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = "customer_number_example"; // string | Identifies the customer for which to return data
$document_type = "document_type_example"; // string | The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint.
$released = 56; // int | Parameter for showing if invoice has been released or not.
$dunning_level = 56; // int | The dunning level of the document.
$closed_financial_period = "closed_financial_period_example"; // string | The date of the closing of the financial period.
$dunning_letter_date_time = "dunning_letter_date_time_example"; // string | The date and time for when the document last released a dunning letter.
$dunning_letter_date_time_condition = "dunning_letter_date_time_condition_example"; // string | Set time/date as before (&lt;), after (&gt;), before and including (=&lt;) OR after and including (=&gt;) to filter on time frame.
$project = "project_example"; // string | The project with which the document is associated.
$expand_applications = true; // bool | True if you want to see all dunning information regarding this document.
$expand_dunning_information = true; // bool | 
$expand_attachments = true; // bool | True if you want to see all attachments regarding this document.
$expand_tax_details = true; // bool | True if you want to see all VAT details regarding this document.
$expand_invoice_address = true; // bool | True if you want to see all information regarding the invoice address for this document.
$financial_period = "financial_period_example"; // string | The financial period to which the transactions recorded in the document is posted. Format YYYYMM.
$document_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date when payment for the document is due, in accordance with the credit terms.
$status = "status_example"; // string | The status of the document. Use the dropdown to select status.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$external_reference = "external_reference_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$payment_reference = "payment_reference_example"; // string | The top part &gt; Payment ref. &gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window..
$customer_ref_number = "customer_ref_number_example"; // string | The top part &gt; External reference &gt; The external reference used in AutoInvoice.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAllInvoicesForCustomerBycustomerNumber($customer_number, $document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllInvoicesForCustomerBycustomerNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Identifies the customer for which to return data |
 **document_type** | **string**| The field is deprecated for specific customer document endpoints. It will only be usable from customer document endpoint. | [optional]
 **released** | **int**| Parameter for showing if invoice has been released or not. | [optional]
 **dunning_level** | **int**| The dunning level of the document. | [optional]
 **closed_financial_period** | **string**| The date of the closing of the financial period. | [optional]
 **dunning_letter_date_time** | **string**| The date and time for when the document last released a dunning letter. | [optional]
 **dunning_letter_date_time_condition** | **string**| Set time/date as before (&amp;lt;), after (&amp;gt;), before and including (&#x3D;&amp;lt;) OR after and including (&#x3D;&amp;gt;) to filter on time frame. | [optional]
 **project** | **string**| The project with which the document is associated. | [optional]
 **expand_applications** | **bool**| True if you want to see all dunning information regarding this document. | [optional]
 **expand_dunning_information** | **bool**|  | [optional]
 **expand_attachments** | **bool**| True if you want to see all attachments regarding this document. | [optional]
 **expand_tax_details** | **bool**| True if you want to see all VAT details regarding this document. | [optional]
 **expand_invoice_address** | **bool**| True if you want to see all information regarding the invoice address for this document. | [optional]
 **financial_period** | **string**| The financial period to which the transactions recorded in the document is posted. Format YYYYMM. | [optional]
 **document_due_date** | **\DateTime**| The date when payment for the document is due, in accordance with the credit terms. | [optional]
 **status** | **string**| The status of the document. Use the dropdown to select status. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **external_reference** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **payment_reference** | **string**| The top part &amp;gt; Payment ref. &amp;gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window.. | [optional]
 **customer_ref_number** | **string**| The top part &amp;gt; External reference &amp;gt; The external reference used in AutoInvoice. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerInvoiceDto[]**](../Model/CustomerInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllOrderForCustomerBycustomerCd**
> \Ekstralys\VismaNetApi\Model\SalesOrderDto[] customerGetAllOrderForCustomerBycustomerCd($customer_cd, $order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of SO Orders of a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | 
$order_type = "order_type_example"; // string | Filter by Order type.
$status = "status_example"; // string | Select to filter on status on order.
$greater_than_value = "greater_than_value_example"; // string | Filter on Order no. greater than value.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$show_notes = true; // bool | Set to true to include notes.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAllOrderForCustomerBycustomerCd($customer_cd, $order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllOrderForCustomerBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**|  |
 **order_type** | **string**| Filter by Order type. | [optional]
 **status** | **string**| Select to filter on status on order. | [optional]
 **greater_than_value** | **string**| Filter on Order no. greater than value. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **show_notes** | **bool**| Set to true to include notes. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderDto[]**](../Model/SalesOrderDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAllSalesOrderBasicForCustomerBycustomerCd**
> \Ekstralys\VismaNetApi\Model\SalesOrderBasicDto[] customerGetAllSalesOrderBasicForCustomerBycustomerCd($customer_cd, $order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size)

Get a range of SO Orders Basic of a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | 
$order_type = "order_type_example"; // string | Filter by Order type.
$status = "status_example"; // string | Select to filter on status on order.
$greater_than_value = "greater_than_value_example"; // string | Filter on Order no. greater than value.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$show_notes = true; // bool | Set to true to include notes.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetAllSalesOrderBasicForCustomerBycustomerCd($customer_cd, $order_type, $status, $greater_than_value, $number_to_read, $skip_records, $order_by, $show_notes, $last_modified_date_time, $last_modified_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAllSalesOrderBasicForCustomerBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**|  |
 **order_type** | **string**| Filter by Order type. | [optional]
 **status** | **string**| Select to filter on status on order. | [optional]
 **greater_than_value** | **string**| Filter on Order no. greater than value. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **show_notes** | **bool**| Set to true to include notes. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SalesOrderBasicDto[]**](../Model/SalesOrderBasicDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetBycustomerCd**
> \Ekstralys\VismaNetApi\Model\CustomerDto customerGetBycustomerCd($customer_cd)

Get a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | Identifies the customer

try {
    $result = $apiInstance->customerGetBycustomerCd($customer_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**| Identifies the customer |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerDto**](../Model/CustomerDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerBalanceBycustomerCd**
> \Ekstralys\VismaNetApi\Model\CustomerBalanceDto customerGetCustomerBalanceBycustomerCd($customer_cd)

Get a specific customer's balance - ScreenId=AR303000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | Identifies the customer for which to return data

try {
    $result = $apiInstance->customerGetCustomerBalanceBycustomerCd($customer_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerBalanceBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**| Identifies the customer for which to return data |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerBalanceDto**](../Model/CustomerBalanceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerClasses**
> \Ekstralys\VismaNetApi\Model\CustomerClassDto[] customerGetCustomerClasses()

Get Customer Classes - ScreenId=AR201000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerGetCustomerClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerClassDto[]**](../Model/CustomerClassDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerDirectDebitBycustomerCd**
> \Ekstralys\VismaNetApi\Model\CustomerDirectDebitDto[] customerGetCustomerDirectDebitBycustomerCd($customer_cd)

Get direct debit information for a specific customer(only for Netherlands)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | Identifies the customer for which to return data

try {
    $result = $apiInstance->customerGetCustomerDirectDebitBycustomerCd($customer_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerDirectDebitBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**| Identifies the customer for which to return data |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerDirectDebitDto[]**](../Model/CustomerDirectDebitDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerNoteBycustomerCd**
> \Ekstralys\VismaNetApi\Model\NoteDto customerGetCustomerNoteBycustomerCd($customer_cd)

Get a specific customer's note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | Identifies the customer for which to return data

try {
    $result = $apiInstance->customerGetCustomerNoteBycustomerCd($customer_cd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerNoteBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**| Identifies the customer for which to return data |

### Return type

[**\Ekstralys\VismaNetApi\Model\NoteDto**](../Model/NoteDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetSalesPersonsForCustomerBycustomerCd**
> \Ekstralys\VismaNetApi\Model\CustSalesPersonsDto[] customerGetSalesPersonsForCustomerBycustomerCd($customer_cd, $page_number, $page_size)

Get a range of Sales Persons of a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | 
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->customerGetSalesPersonsForCustomerBycustomerCd($customer_cd, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetSalesPersonsForCustomerBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**|  |
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\CustSalesPersonsDto[]**](../Model/CustSalesPersonsDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetSpecificCustomerClassBycustomerClassId**
> \Ekstralys\VismaNetApi\Model\CustomerClassDto customerGetSpecificCustomerClassBycustomerClassId($customer_class_id)

Get a specific customer class - ScreenId=AR201000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_class_id = "customer_class_id_example"; // string | Identifies the customer class

try {
    $result = $apiInstance->customerGetSpecificCustomerClassBycustomerClassId($customer_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetSpecificCustomerClassBycustomerClassId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_class_id** | **string**| Identifies the customer class |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerClassDto**](../Model/CustomerClassDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPost**
> object customerPost($customer)

Creates a customer

Response Message has StatusCode Created if POST operation succeed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = new \Ekstralys\VismaNetApi\Model\CustomerUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerUpdateDto | Defines the data for the customer to create

try {
    $result = $apiInstance->customerPost($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Ekstralys\VismaNetApi\Model\CustomerUpdateDto**](../Model/CustomerUpdateDto.md)| Defines the data for the customer to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPutBycustomerCd**
> object customerPutBycustomerCd($customer_cd, $customer)

Updates a specific customer

Response Message has StatusCode NoContent if PUT operation succeed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ipp-application-type
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-application-type', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-application-type', 'Bearer');
// Configure API key authorization: ipp-company-id
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKey('ipp-company-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ipp-company-id', 'Bearer');
// Configure OAuth2 access token for authorization: vna_oauth
$config = Ekstralys\VismaNetApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_cd = "customer_cd_example"; // string | Identifies the customer to update
$customer = new \Ekstralys\VismaNetApi\Model\CustomerUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerUpdateDto | The data to update for the customer

try {
    $result = $apiInstance->customerPutBycustomerCd($customer_cd, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPutBycustomerCd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_cd** | **string**| Identifies the customer to update |
 **customer** | [**\Ekstralys\VismaNetApi\Model\CustomerUpdateDto**](../Model/CustomerUpdateDto.md)| The data to update for the customer |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

