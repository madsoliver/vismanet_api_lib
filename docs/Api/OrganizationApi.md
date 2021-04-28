# Ekstralys\VismaNetApi\OrganizationApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationGetAll**](OrganizationApi.md#organizationGetAll) | **GET** /controller/api/v1/organization | Get all organisations
[**organizationGetByOrganizationCdByorganizationNumber**](OrganizationApi.md#organizationGetByOrganizationCdByorganizationNumber) | **GET** /controller/api/v1/organization/{organizationNumber} | Get organisation information by organization number.
[**organizationPutBankSettingsForOrganizationByorganizationNumber**](OrganizationApi.md#organizationPutBankSettingsForOrganizationByorganizationNumber) | **PUT** /controller/api/v1/organization/{organizationNumber}/BankSettings | Update bank settings for organization


# **organizationGetAll**
> \Ekstralys\VismaNetApi\Model\ExtendedOrganizationDto[] organizationGetAll($expand_branches, $expand_bank_settings, $last_modified_date_time, $last_modified_date_time_condition, $greater_than_value)

Get all organisations

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

$apiInstance = new Ekstralys\VismaNetApi\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand_branches = true; // bool | True to expand all Branches related to this Organization.
$expand_bank_settings = true; // bool | True to expand payment settings for organization.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.

try {
    $result = $apiInstance->organizationGetAll($expand_branches, $expand_bank_settings, $last_modified_date_time, $last_modified_date_time_condition, $greater_than_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand_branches** | **bool**| True to expand all Branches related to this Organization. | [optional]
 **expand_bank_settings** | **bool**| True to expand payment settings for organization. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ExtendedOrganizationDto[]**](../Model/ExtendedOrganizationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationGetByOrganizationCdByorganizationNumber**
> \Ekstralys\VismaNetApi\Model\ExtendedOrganizationDto organizationGetByOrganizationCdByorganizationNumber($organization_number, $expand_branches, $expand_bank_settings, $last_modified_date_time, $last_modified_date_time_condition, $greater_than_value)

Get organisation information by organization number.

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

$apiInstance = new Ekstralys\VismaNetApi\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_number = "organization_number_example"; // string | The organisation code.
$expand_branches = true; // bool | True to expand all Branches related to this Organization.
$expand_bank_settings = true; // bool | True to expand payment settings for organization.
$last_modified_date_time = "last_modified_date_time_example"; // string | System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System retrieved information for state/condition.
$greater_than_value = "greater_than_value_example"; // string | Greater than value. The item which is the object for this, varies from API to API.

try {
    $result = $apiInstance->organizationGetByOrganizationCdByorganizationNumber($organization_number, $expand_branches, $expand_bank_settings, $last_modified_date_time, $last_modified_date_time_condition, $greater_than_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationGetByOrganizationCdByorganizationNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_number** | **string**| The organisation code. |
 **expand_branches** | **bool**| True to expand all Branches related to this Organization. | [optional]
 **expand_bank_settings** | **bool**| True to expand payment settings for organization. | [optional]
 **last_modified_date_time** | **string**| System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System retrieved information for state/condition. | [optional]
 **greater_than_value** | **string**| Greater than value. The item which is the object for this, varies from API to API. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\ExtendedOrganizationDto**](../Model/ExtendedOrganizationDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationPutBankSettingsForOrganizationByorganizationNumber**
> object organizationPutBankSettingsForOrganizationByorganizationNumber($bank_settings, $organization_number)

Update bank settings for organization

Response Message has StatusCode No Content if PUT operation succeed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_settings = new \Ekstralys\VismaNetApi\Model\BankSettingsUpdateDto(); // \Ekstralys\VismaNetApi\Model\BankSettingsUpdateDto | Defines the data for the bank settings to update
$organization_number = "organization_number_example"; // string | organization number to update

try {
    $result = $apiInstance->organizationPutBankSettingsForOrganizationByorganizationNumber($bank_settings, $organization_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationPutBankSettingsForOrganizationByorganizationNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_settings** | [**\Ekstralys\VismaNetApi\Model\BankSettingsUpdateDto**](../Model/BankSettingsUpdateDto.md)| Defines the data for the bank settings to update |
 **organization_number** | **string**| organization number to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

