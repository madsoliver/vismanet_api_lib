# Ekstralys\VismaNetApi\CustomerCreditNoteApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCreditNoteCreate**](CustomerCreditNoteApi.md#customerCreditNoteCreate) | **POST** /controller/api/v1/customerCreditNote | Create a Credit Note. Method is deprecated and will be removed starting May 2021 - start using new method CustomerCreditNoteV2 endpoint.
[**customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber) | **POST** /controller/api/v1/customerCreditNote/{creditNoteNumber}/attachment | Creates an attachment and associates it with a credit note. If the file already exists, a new revision is created.
[**customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber**](CustomerCreditNoteApi.md#customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber) | **POST** /controller/api/v1/customerCreditNote/{creditNoteNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain credit note line. If the file already exists, a new revision is created.
[**customerCreditNoteDeleteBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNoteDeleteBycreditNoteNumber) | **DELETE** /controller/api/v1/customerCreditNote/{creditNoteNumber} | Deletes a specific Customer Credit Note
[**customerCreditNoteGetAll**](CustomerCreditNoteApi.md#customerCreditNoteGetAll) | **GET** /controller/api/v1/customerCreditNote | Get a range of Customer Credit Notes - ScreenId&#x3D;AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
[**customerCreditNoteGetBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNoteGetBycreditNoteNumber) | **GET** /controller/api/v1/customerCreditNote/{creditNoteNumber} | Get a specific Customer Credit Note
[**customerCreditNotePrintBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNotePrintBycreditNoteNumber) | **GET** /controller/api/v1/customerCreditNote/{creditNoteNumber}/print | Get the print report of a Customer Credit Note
[**customerCreditNoteReleaseDocumentBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNoteReleaseDocumentBycreditNoteNumber) | **POST** /controller/api/v1/customerCreditNote/{creditNoteNumber}/action/release | Release credit note operation
[**customerCreditNoteUpdateBycreditNoteNumber**](CustomerCreditNoteApi.md#customerCreditNoteUpdateBycreditNoteNumber) | **PUT** /controller/api/v1/customerCreditNote/{creditNoteNumber} | Update a specific Credit Note


# **customerCreditNoteCreate**
> object customerCreditNoteCreate($credit_note)

Create a Credit Note. Method is deprecated and will be removed starting May 2021 - start using new method CustomerCreditNoteV2 endpoint.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note = new \Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto | Defines the data for the Credit Note to create

try {
    $result = $apiInstance->customerCreditNoteCreate($credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note** | [**\Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto**](../Model/CustomerCreditNoteUpdateDto.md)| Defines the data for the Credit Note to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber**
> object customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber($credit_note_number)

Creates an attachment and associates it with a credit note. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the credit note

try {
    $result = $apiInstance->customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber($credit_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteCreateHeaderAttachmentBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the credit note |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber**
> object customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber($credit_note_number, $line_number)

Creates an attachment and associates it with a certain credit note line. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the credit note
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber($credit_note_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the credit note |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteDeleteBycreditNoteNumber**
> object customerCreditNoteDeleteBycreditNoteNumber($credit_note_number)

Deletes a specific Customer Credit Note

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the Customer Credit Note to delete

try {
    $result = $apiInstance->customerCreditNoteDeleteBycreditNoteNumber($credit_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteDeleteBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the Customer Credit Note to delete |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteGetAll**
> \Ekstralys\VismaNetApi\Model\CustomerCreditNoteDto[] customerCreditNoteGetAll($document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Customer Credit Notes - ScreenId=AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

Data for Customer Credit Note

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
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
    $result = $apiInstance->customerCreditNoteGetAll($document_type, $released, $dunning_level, $closed_financial_period, $dunning_letter_date_time, $dunning_letter_date_time_condition, $project, $expand_applications, $expand_dunning_information, $expand_attachments, $expand_tax_details, $expand_invoice_address, $financial_period, $document_due_date, $status, $number_to_read, $skip_records, $external_reference, $payment_reference, $customer_ref_number, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteGetAll: ', $e->getMessage(), PHP_EOL;
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

[**\Ekstralys\VismaNetApi\Model\CustomerCreditNoteDto[]**](../Model/CustomerCreditNoteDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteGetBycreditNoteNumber**
> \Ekstralys\VismaNetApi\Model\CustomerCreditNoteDto customerCreditNoteGetBycreditNoteNumber($credit_note_number)

Get a specific Customer Credit Note

Data for Customer Credit Note

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the Customer Credit Note

try {
    $result = $apiInstance->customerCreditNoteGetBycreditNoteNumber($credit_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteGetBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the Customer Credit Note |

### Return type

[**\Ekstralys\VismaNetApi\Model\CustomerCreditNoteDto**](../Model/CustomerCreditNoteDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNotePrintBycreditNoteNumber**
> object customerCreditNotePrintBycreditNoteNumber($credit_note_number)

Get the print report of a Customer Credit Note

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the customer credit note

try {
    $result = $apiInstance->customerCreditNotePrintBycreditNoteNumber($credit_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNotePrintBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the customer credit note |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteReleaseDocumentBycreditNoteNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseCustomerCreditNoteActionResultDto customerCreditNoteReleaseDocumentBycreditNoteNumber($credit_note_number)

Release credit note operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Reference number of the credit note to be released

try {
    $result = $apiInstance->customerCreditNoteReleaseDocumentBycreditNoteNumber($credit_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteReleaseDocumentBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Reference number of the credit note to be released |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseCustomerCreditNoteActionResultDto**](../Model/ReleaseCustomerCreditNoteActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreditNoteUpdateBycreditNoteNumber**
> object customerCreditNoteUpdateBycreditNoteNumber($credit_note_number, $credit_note)

Update a specific Credit Note

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CustomerCreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_number = "credit_note_number_example"; // string | Identifies the Credit Note to update
$credit_note = new \Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto(); // \Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto | Defines the data for the Credit Note to update

try {
    $result = $apiInstance->customerCreditNoteUpdateBycreditNoteNumber($credit_note_number, $credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCreditNoteApi->customerCreditNoteUpdateBycreditNoteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_number** | **string**| Identifies the Credit Note to update |
 **credit_note** | [**\Ekstralys\VismaNetApi\Model\CustomerCreditNoteUpdateDto**](../Model/CustomerCreditNoteUpdateDto.md)| Defines the data for the Credit Note to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

