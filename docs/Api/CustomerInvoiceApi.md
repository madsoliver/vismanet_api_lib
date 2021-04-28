# Ekstralys\VismaNetApi\CustomerInvoiceApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerInvoiceCreate**](CustomerInvoiceApi.md#customerInvoiceCreate) | **POST** /controller/api/v1/customerinvoice | Create an Invoice. Method is deprecated and will be removed starting May 2021 - start using new method CustomerInvoiceV2 endpoint.
[**customerInvoiceCreateHeaderAttachmentByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceCreateHeaderAttachmentByinvoiceNumber) | **POST** /controller/api/v1/customerinvoice/{invoiceNumber}/attachment | Creates an attachment and associates it with an invoice. If the file already exists, a new revision is created.
[**customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber**](CustomerInvoiceApi.md#customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber) | **POST** /controller/api/v1/customerinvoice/{invoiceNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain invoice line. If the file already exists, a new revision is created.
[**customerInvoiceDeleteByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceDeleteByinvoiceNumber) | **DELETE** /controller/api/v1/customerinvoice/{invoiceNumber} | Deletes a specific Customer Invoice
[**customerInvoiceGetAll**](CustomerInvoiceApi.md#customerInvoiceGetAll) | **GET** /controller/api/v1/customerinvoice | Get a range of Invoices - ScreenId&#x3D;AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added forced pagination
[**customerInvoiceGetByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceGetByinvoiceNumber) | **GET** /controller/api/v1/customerinvoice/{invoiceNumber} | Get a specific Invoice
[**customerInvoiceGetRotRutByrefNbr**](CustomerInvoiceApi.md#customerInvoiceGetRotRutByrefNbr) | **GET** /controller/api/v1/customerinvoice/{refNbr}/rotrut | Get Rot Rut informations for a Customer Invoice
[**customerInvoiceGetWorkTypes**](CustomerInvoiceApi.md#customerInvoiceGetWorkTypes) | **GET** /controller/api/v1/customerinvoice/worktypes | Get all Work Types
[**customerInvoicePrintInvoiceByrefNbr**](CustomerInvoiceApi.md#customerInvoicePrintInvoiceByrefNbr) | **GET** /controller/api/v1/customerinvoice/{refNbr}/print | Get the print report of a Customer Invoice
[**customerInvoiceReleaseInvoiceByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceReleaseInvoiceByinvoiceNumber) | **POST** /controller/api/v1/customerinvoice/{invoiceNumber}/action/release | Release invoice operation
[**customerInvoiceReverseInvoiceByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceReverseInvoiceByinvoiceNumber) | **POST** /controller/api/v1/customerinvoice/{invoiceNumber}/action/reverse | Reverse an Invoice
[**customerInvoiceUpdateByinvoiceNumber**](CustomerInvoiceApi.md#customerInvoiceUpdateByinvoiceNumber) | **PUT** /controller/api/v1/customerinvoice/{invoiceNumber} | Update a specific Invoice


# **customerInvoiceCreate**
> object customerInvoiceCreate($invoice)

Create an Invoice. Method is deprecated and will be removed starting May 2021 - start using new method CustomerInvoiceV2 endpoint.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto | Defines the data for the Invoice to create

try {
    $result = $apiInstance->customerInvoiceCreate($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto**](../Model/CustomerInvoiceUpdateDto.md)| Defines the data for the Invoice to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceCreateHeaderAttachmentByinvoiceNumber**
> object customerInvoiceCreateHeaderAttachmentByinvoiceNumber($invoice_number)

Creates an attachment and associates it with an invoice. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the invoice

try {
    $result = $apiInstance->customerInvoiceCreateHeaderAttachmentByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceCreateHeaderAttachmentByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the invoice |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber**
> object customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber($invoice_number, $line_number)

Creates an attachment and associates it with a certain invoice line. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the invoice
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber($invoice_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the invoice |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDeleteByinvoiceNumber**
> object customerInvoiceDeleteByinvoiceNumber($invoice_number)

Deletes a specific Customer Invoice

Response Message has StatusCode NoContent if DELETE operation succeed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the Customer Invoice to delete

try {
    $result = $apiInstance->customerInvoiceDeleteByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceDeleteByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the Customer Invoice to delete |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceGetAll**
> \Ekstralys\VismaNetApi\Model\CustomerInvoiceDto[] customerInvoiceGetAll($document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Invoices - ScreenId=AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added forced pagination

Data for Customer Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
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
    $result = $apiInstance->customerInvoiceGetAll($document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **customerInvoiceGetByinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\CustomerInvoiceDto customerInvoiceGetByinvoiceNumber($invoice_number)

Get a specific Invoice

Data for Customer Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the Invoice

try {
    $result = $apiInstance->customerInvoiceGetByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceGetByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the Invoice |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerInvoiceDto**](../Model/CustomerInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceGetRotRutByrefNbr**
> \Ekstralys\VismaNetApi\Model\RotRutDto customerInvoiceGetRotRutByrefNbr($ref_nbr)

Get Rot Rut informations for a Customer Invoice

Data for the Rot Rut

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_nbr = "ref_nbr_example"; // string | Identify the customer invoice for which to return data

try {
    $result = $apiInstance->customerInvoiceGetRotRutByrefNbr($ref_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceGetRotRutByrefNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_nbr** | **string**| Identify the customer invoice for which to return data |

### Return type

[**\Ekstralys\VismaNetApi\Model\RotRutDto**](../Model/RotRutDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceGetWorkTypes**
> \Ekstralys\VismaNetApi\Model\WorkTypeDto[] customerInvoiceGetWorkTypes()

Get all Work Types

Data for the Work Type

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerInvoiceGetWorkTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceGetWorkTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\WorkTypeDto[]**](../Model/WorkTypeDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicePrintInvoiceByrefNbr**
> object customerInvoicePrintInvoiceByrefNbr($ref_nbr)

Get the print report of a Customer Invoice

The File is in Content of the message

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_nbr = "ref_nbr_example"; // string | Identifies the customer invoice

try {
    $result = $apiInstance->customerInvoicePrintInvoiceByrefNbr($ref_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoicePrintInvoiceByrefNbr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_nbr** | **string**| Identifies the customer invoice |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceReleaseInvoiceByinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseInvoiceActionResultDto customerInvoiceReleaseInvoiceByinvoiceNumber($invoice_number)

Release invoice operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Reference number of the invoice to be released

try {
    $result = $apiInstance->customerInvoiceReleaseInvoiceByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceReleaseInvoiceByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Reference number of the invoice to be released |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseInvoiceActionResultDto**](../Model/ReleaseInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceReverseInvoiceByinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\ReverseInvoiceActionResultDto customerInvoiceReverseInvoiceByinvoiceNumber($invoice_number, $reverse_action_dto)

Reverse an Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Reference number of the released invoice to be reversed
$reverse_action_dto = new \Ekstralys\VismaNetApi\Model\ReverseInvoiceActionDto(); // \Ekstralys\VismaNetApi\Model\ReverseInvoiceActionDto | The action the dto use to condition the action

try {
    $result = $apiInstance->customerInvoiceReverseInvoiceByinvoiceNumber($invoice_number, $reverse_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceReverseInvoiceByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Reference number of the released invoice to be reversed |
 **reverse_action_dto** | [**\Ekstralys\VismaNetApi\Model\ReverseInvoiceActionDto**](../Model/ReverseInvoiceActionDto.md)| The action the dto use to condition the action |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReverseInvoiceActionResultDto**](../Model/ReverseInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceUpdateByinvoiceNumber**
> object customerInvoiceUpdateByinvoiceNumber($invoice_number, $invoice)

Update a specific Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the Invoice to update
$invoice = new \Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto | Defines the data for the Invoice to update

try {
    $result = $apiInstance->customerInvoiceUpdateByinvoiceNumber($invoice_number, $invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->customerInvoiceUpdateByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the Invoice to update |
 **invoice** | [**\Ekstralys\VismaNetApi\Model\CustomerInvoiceUpdateDto**](../Model/CustomerInvoiceUpdateDto.md)| Defines the data for the Invoice to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

