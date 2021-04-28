# Ekstralys\VismaNetApi\SupplierInvoiceApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/documentType/{documentType}/{invoiceNumber}/attachment | Creates an attachment and associates it with a supplier invoice. If the file already exists, a new revision is created.
[**supplierInvoiceCreateHeaderAttachmentByinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceCreateHeaderAttachmentByinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/{invoiceNumber}/attachment | Creates an attachment and associates it with a supplier invoice. If the file already exists, a new revision is created.
[**supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber**](SupplierInvoiceApi.md#supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber) | **POST** /controller/api/v1/supplierInvoice/documentType/{documentType}/{invoiceNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain supplier invoice line. If the file already exists, a new revision is created.
[**supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber**](SupplierInvoiceApi.md#supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber) | **POST** /controller/api/v1/supplierInvoice/{invoiceNumber}/{lineNumber}/attachment | Creates an attachment and associates it with a certain supplier invoice line. If the file already exists, a new revision is created.
[**supplierInvoiceDeleteBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceDeleteBydocumentTypeinvoiceNumber) | **DELETE** /controller/api/v1/supplierInvoice/{documentType}/{invoiceNumber} | Deletes a specific Supplier Invoice
[**supplierInvoiceDeleteByinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceDeleteByinvoiceNumber) | **DELETE** /controller/api/v1/supplierInvoice/{invoiceNumber} | Deletes a specific Supplier Invoice
[**supplierInvoiceGetAllInvoices**](SupplierInvoiceApi.md#supplierInvoiceGetAllInvoices) | **GET** /controller/api/v1/supplierInvoice | Get a range of Invoices - ScreenId&#x3D;AP301000.   Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
[**supplierInvoiceGetByApprovalDocumentId**](SupplierInvoiceApi.md#supplierInvoiceGetByApprovalDocumentId) | **GET** /controller/api/v1/supplierInvoice/approval | Get an invoice based on the systemId. SystemID is used for approving supplier invoices
[**supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber) | **GET** /controller/api/v1/supplierInvoice/{documentType}/{invoiceNumber} | Get a specific Invoice
[**supplierInvoiceGetByinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceGetByinvoiceNumber) | **GET** /controller/api/v1/supplierInvoice/{invoiceNumber} | Get a specific Invoice
[**supplierInvoicePost**](SupplierInvoiceApi.md#supplierInvoicePost) | **POST** /controller/api/v1/supplierInvoice | Create an SupplierInvoice
[**supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/{documentType}/{invoiceNumber}/action/prebook | Pre-Book invoice operation
[**supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber**](SupplierInvoiceApi.md#supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber) | **PUT** /controller/api/v1/supplierInvoice/{documentType}/{supplierInvoiceNumber} | Update a specific SupplierInvoice
[**supplierInvoicePutBysupplierInvoiceNumber**](SupplierInvoiceApi.md#supplierInvoicePutBysupplierInvoiceNumber) | **PUT** /controller/api/v1/supplierInvoice/{supplierInvoiceNumber} | Update a specific SupplierInvoice
[**supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/{documentType}/{invoiceNumber}/action/release | Release invoice operation
[**supplierInvoiceReleaseInvoiceByinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceReleaseInvoiceByinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/{invoiceNumber}/action/release | Release invoice operation
[**supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber**](SupplierInvoiceApi.md#supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber) | **POST** /controller/api/v1/supplierInvoice/{documentType}/{invoiceNumber}/action/voidinvoice | Void invoice operation


# **supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber**
> object supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number)

Creates an attachment and associates it with a supplier invoice. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$invoice_number = "invoice_number_example"; // string | Identifies the supplier invoice

try {
    $result = $apiInstance->supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **invoice_number** | **string**| Identifies the supplier invoice |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceCreateHeaderAttachmentByinvoiceNumber**
> object supplierInvoiceCreateHeaderAttachmentByinvoiceNumber($invoice_number)

Creates an attachment and associates it with a supplier invoice. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the supplier invoice

try {
    $result = $apiInstance->supplierInvoiceCreateHeaderAttachmentByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceCreateHeaderAttachmentByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the supplier invoice |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber**
> object supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber($document_type, $invoice_number, $line_number)

Creates an attachment and associates it with a certain supplier invoice line. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$invoice_number = "invoice_number_example"; // string | Identifies the supplier invoice
$line_number = 56; // int | Identifies the supplier invoice line

try {
    $result = $apiInstance->supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber($document_type, $invoice_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **invoice_number** | **string**| Identifies the supplier invoice |
 **line_number** | **int**| Identifies the supplier invoice line |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber**
> object supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber($invoice_number, $line_number)

Creates an attachment and associates it with a certain supplier invoice line. If the file already exists, a new revision is created.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the supplier invoice
$line_number = 56; // int | Specifies line number

try {
    $result = $apiInstance->supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber($invoice_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the supplier invoice |
 **line_number** | **int**| Specifies line number |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDeleteBydocumentTypeinvoiceNumber**
> object supplierInvoiceDeleteBydocumentTypeinvoiceNumber($document_type, $invoice_number)

Deletes a specific Supplier Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Identifies the docType of Supplier Invoice to delete
$invoice_number = "invoice_number_example"; // string | Identifies the Supplier Invoice to delete

try {
    $result = $apiInstance->supplierInvoiceDeleteBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceDeleteBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Identifies the docType of Supplier Invoice to delete |
 **invoice_number** | **string**| Identifies the Supplier Invoice to delete |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDeleteByinvoiceNumber**
> object supplierInvoiceDeleteByinvoiceNumber($invoice_number)

Deletes a specific Supplier Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the Supplier Invoice to delete

try {
    $result = $apiInstance->supplierInvoiceDeleteByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceDeleteByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the Supplier Invoice to delete |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceGetAllInvoices**
> \Ekstralys\VismaNetApi\Model\SupplierInvoiceDto[] supplierInvoiceGetAllInvoices($expand_attachment, $document_type, $released, $project, $expand_approval, $expand_note, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)

Get a range of Invoices - ScreenId=AP301000.   Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand_attachment = true; // bool | Set to true if you want to see all attachments regarding this document.
$document_type = "document_type_example"; // string | By type of document.
$released = 56; // int | The date when the document was released.
$project = "project_example"; // string | Filter by the project with which the document is associated.
$expand_approval = true; // bool | Set to true to include approval information.
$expand_note = true; // bool | Set to true to include description.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$created_date_time = "created_date_time_example"; // string | Creation date and time.
$created_date_time_condition = "created_date_time_condition_example"; // string | System-retrieved information for state/condition
$page_number = 56; // int | Pagination parameter. Page number.
$page_size = 56; // int | Pagination parameter. Number of items to be collected.

try {
    $result = $apiInstance->supplierInvoiceGetAllInvoices($expand_attachment, $document_type, $released, $project, $expand_approval, $expand_note, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceGetAllInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand_attachment** | **bool**| Set to true if you want to see all attachments regarding this document. | [optional]
 **document_type** | **string**| By type of document. | [optional]
 **released** | **int**| The date when the document was released. | [optional]
 **project** | **string**| Filter by the project with which the document is associated. | [optional]
 **expand_approval** | **bool**| Set to true to include approval information. | [optional]
 **expand_note** | **bool**| Set to true to include description. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **created_date_time** | **string**| Creation date and time. | [optional]
 **created_date_time_condition** | **string**| System-retrieved information for state/condition | [optional]
 **page_number** | **int**| Pagination parameter. Page number. | [optional]
 **page_size** | **int**| Pagination parameter. Number of items to be collected. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierInvoiceDto[]**](../Model/SupplierInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceGetByApprovalDocumentId**
> \Ekstralys\VismaNetApi\Model\SupplierInvoiceDto supplierInvoiceGetByApprovalDocumentId($system_id)

Get an invoice based on the systemId. SystemID is used for approving supplier invoices

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | SystemID referes to the approval document id created when the document is sent to approval

try {
    $result = $apiInstance->supplierInvoiceGetByApprovalDocumentId($system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceGetByApprovalDocumentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| SystemID referes to the approval document id created when the document is sent to approval |

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierInvoiceDto**](../Model/SupplierInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\SupplierInvoiceDto supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number)

Get a specific Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Identifies the Invoice
$invoice_number = "invoice_number_example"; // string | Identifies the Invoice

try {
    $result = $apiInstance->supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Identifies the Invoice |
 **invoice_number** | **string**| Identifies the Invoice |

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierInvoiceDto**](../Model/SupplierInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceGetByinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\SupplierInvoiceDto supplierInvoiceGetByinvoiceNumber($invoice_number)

Get a specific Invoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Identifies the Invoice

try {
    $result = $apiInstance->supplierInvoiceGetByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceGetByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Identifies the Invoice |

### Return type

[**\Ekstralys\VismaNetApi\Model\SupplierInvoiceDto**](../Model/SupplierInvoiceDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicePost**
> object supplierInvoicePost($supplier_invoice)

Create an SupplierInvoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_invoice = new \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto(); // \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto | Defines the data for the SupplierInvoice to create

try {
    $result = $apiInstance->supplierInvoicePost($supplier_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice** | [**\Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto**](../Model/SupplierInvoiceUpdateDto.md)| Defines the data for the SupplierInvoice to create |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\PrebookSupplierInvoiceActionResultDto supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber($document_type, $invoice_number)

Pre-Book invoice operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Document type of the document to be Pre-Booked
$invoice_number = "invoice_number_example"; // string | Reference number of the document to be Pre-Booked

try {
    $result = $apiInstance->supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Document type of the document to be Pre-Booked |
 **invoice_number** | **string**| Reference number of the document to be Pre-Booked |

### Return type

[**\Ekstralys\VismaNetApi\Model\PrebookSupplierInvoiceActionResultDto**](../Model/PrebookSupplierInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber**
> object supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber($document_type, $supplier_invoice_number, $supplier_invoice)

Update a specific SupplierInvoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Identifies the SupplierInvoice to update
$supplier_invoice_number = "supplier_invoice_number_example"; // string | Identifies the SupplierInvoice to update
$supplier_invoice = new \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto(); // \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto | Defines the data for the Invoice to update

try {
    $result = $apiInstance->supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber($document_type, $supplier_invoice_number, $supplier_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoicePutByTypeBydocumentTypesupplierInvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Identifies the SupplierInvoice to update |
 **supplier_invoice_number** | **string**| Identifies the SupplierInvoice to update |
 **supplier_invoice** | [**\Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto**](../Model/SupplierInvoiceUpdateDto.md)| Defines the data for the Invoice to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicePutBysupplierInvoiceNumber**
> object supplierInvoicePutBysupplierInvoiceNumber($supplier_invoice_number, $supplier_invoice)

Update a specific SupplierInvoice

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_invoice_number = "supplier_invoice_number_example"; // string | Identifies the SupplierInvoice to update
$supplier_invoice = new \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto(); // \Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto | Defines the data for the Invoice to update

try {
    $result = $apiInstance->supplierInvoicePutBysupplierInvoiceNumber($supplier_invoice_number, $supplier_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoicePutBysupplierInvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_number** | **string**| Identifies the SupplierInvoice to update |
 **supplier_invoice** | [**\Ekstralys\VismaNetApi\Model\SupplierInvoiceUpdateDto**](../Model/SupplierInvoiceUpdateDto.md)| Defines the data for the Invoice to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseSupplierInvoiceActionResultDto supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Document type of the released document to be reversed
$invoice_number = "invoice_number_example"; // string | Reference number of the document to be release

try {
    $result = $apiInstance->supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Document type of the released document to be reversed |
 **invoice_number** | **string**| Reference number of the document to be release |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseSupplierInvoiceActionResultDto**](../Model/ReleaseSupplierInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceReleaseInvoiceByinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\ReleaseSupplierInvoiceActionResultDto supplierInvoiceReleaseInvoiceByinvoiceNumber($invoice_number)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Reference number of the document to be release

try {
    $result = $apiInstance->supplierInvoiceReleaseInvoiceByinvoiceNumber($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceReleaseInvoiceByinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Reference number of the document to be release |

### Return type

[**\Ekstralys\VismaNetApi\Model\ReleaseSupplierInvoiceActionResultDto**](../Model/ReleaseSupplierInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber**
> \Ekstralys\VismaNetApi\Model\VoidSupplierInvoiceActionResultDto supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber($document_type, $invoice_number)

Void invoice operation

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

$apiInstance = new Ekstralys\VismaNetApi\Api\SupplierInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | Document type of the document to be Voided
$invoice_number = "invoice_number_example"; // string | Reference number of the document to be Voided

try {
    $result = $apiInstance->supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber($document_type, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceApi->supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**| Document type of the document to be Voided |
 **invoice_number** | **string**| Reference number of the document to be Voided |

### Return type

[**\Ekstralys\VismaNetApi\Model\VoidSupplierInvoiceActionResultDto**](../Model/VoidSupplierInvoiceActionResultDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

