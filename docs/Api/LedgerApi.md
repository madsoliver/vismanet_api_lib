# Ekstralys\VismaNetApi\LedgerApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ledgerGetAllLedgers**](LedgerApi.md#ledgerGetAllLedgers) | **GET** /controller/api/v1/ledger | Get a range of Ledgers - ScreenId&#x3D;GL201500


# **ledgerGetAllLedgers**
> \Ekstralys\VismaNetApi\Model\LedgerDto[] ledgerGetAllLedgers($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition)

Get a range of Ledgers - ScreenId=GL201500

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

$apiInstance = new Ekstralys\VismaNetApi\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greater_than_value = "greater_than_value_example"; // string | Excludes ledgers with value lower than entry
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions.
$last_modified_date_time = "last_modified_date_time_example"; // string | System retrieved information for state/condition. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | Values to be used for filtering lastModifiedDateTime value.  <remarks>Allowed values are \"&lt;\" \"&gt;\" \"&lt;=\" \"&gt;=\"</remarks>

try {
    $result = $apiInstance->ledgerGetAllLedgers($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->ledgerGetAllLedgers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greater_than_value** | **string**| Excludes ledgers with value lower than entry | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. | [optional]
 **last_modified_date_time** | **string**| System retrieved information for state/condition. Valid date/time format is yyyy-MM-dd, yyyy-MM-dd HH:mm:ss or yyyy-MM-dd HH:mm:ss.FFF. FFF stands for milliseconds | [optional]
 **last_modified_date_time_condition** | **string**| Values to be used for filtering lastModifiedDateTime value.  &lt;remarks&gt;Allowed values are \&quot;&amp;lt;\&quot; \&quot;&amp;gt;\&quot; \&quot;&amp;lt;&#x3D;\&quot; \&quot;&amp;gt;&#x3D;\&quot;&lt;/remarks&gt; | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\LedgerDto[]**](../Model/LedgerDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

