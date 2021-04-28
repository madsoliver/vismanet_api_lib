# Ekstralys\VismaNetApi\MultilanguageApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**multilanguageAddDefaultLanguage**](MultilanguageApi.md#multilanguageAddDefaultLanguage) | **PUT** /controller/api/v1/multilanguage/defaultlanguage | Set default language (screenId:SM200550). We recommend to activate multilanguage for the first time using the System Locale screen (Screenid SM200550). Please use API only to switch default
[**multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**](MultilanguageApi.md#multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO) | **DELETE** /controller/api/v1/multilanguage/inventory/{inventoryNumber}/{languageISO} | Deletes the description of an item with the specific language ISO code (screenId:IN202500 and IN202000)
[**multilanguageGetAllActiveLanguages**](MultilanguageApi.md#multilanguageGetAllActiveLanguages) | **GET** /controller/api/v1/multilanguage/languages | Get all languages (screenId:SM200550)
[**multilanguageGetInventoryTranslationsByinventoryNumber**](MultilanguageApi.md#multilanguageGetInventoryTranslationsByinventoryNumber) | **GET** /controller/api/v1/multilanguage/inventory/{inventoryNumber} | Get all translations for a given item (screenId:IN202500 and IN202000)
[**multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**](MultilanguageApi.md#multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO) | **GET** /controller/api/v1/multilanguage/inventory/{inventoryNumber}/{languageISO} | Get a specific translation of the description for a given item and language ISO code (screenId:IN202500 and IN202000)
[**multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**](MultilanguageApi.md#multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO) | **POST** /controller/api/v1/multilanguage/inventory/{inventoryNumber}/{languageISO} | Creates item description for given item and language ISO code (screenId:IN202500 and IN202000)
[**multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**](MultilanguageApi.md#multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO) | **PUT** /controller/api/v1/multilanguage/inventory/{inventoryNumber}/{languageISO} | Updates item description for given item and language ISO code (screenId:IN202500 and IN202000)


# **multilanguageAddDefaultLanguage**
> object multilanguageAddDefaultLanguage($language_update_dto)

Set default language (screenId:SM200550). We recommend to activate multilanguage for the first time using the System Locale screen (Screenid SM200550). Please use API only to switch default

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language_update_dto = new \Ekstralys\VismaNetApi\Model\LanguageUpdateDto(); // \Ekstralys\VismaNetApi\Model\LanguageUpdateDto | 

try {
    $result = $apiInstance->multilanguageAddDefaultLanguage($language_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguageAddDefaultLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_update_dto** | [**\Ekstralys\VismaNetApi\Model\LanguageUpdateDto**](../Model/LanguageUpdateDto.md)|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**
> object multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso)

Deletes the description of an item with the specific language ISO code (screenId:IN202500 and IN202000)

Response Message has StatusCode NoContent if DEL operation succeed

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the inventory to update
$language_iso = "language_iso_example"; // string | Identifies the description language to update

try {
    $result = $apiInstance->multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageISO: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the inventory to update |
 **language_iso** | **string**| Identifies the description language to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguageGetAllActiveLanguages**
> \Ekstralys\VismaNetApi\Model\ActiveMultilanguageDto[] multilanguageGetAllActiveLanguages()

Get all languages (screenId:SM200550)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->multilanguageGetAllActiveLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguageGetAllActiveLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\ActiveMultilanguageDto[]**](../Model/ActiveMultilanguageDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguageGetInventoryTranslationsByinventoryNumber**
> \Ekstralys\VismaNetApi\Model\MultilanguageDto[] multilanguageGetInventoryTranslationsByinventoryNumber($inventory_number)

Get all translations for a given item (screenId:IN202500 and IN202000)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 

try {
    $result = $apiInstance->multilanguageGetInventoryTranslationsByinventoryNumber($inventory_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguageGetInventoryTranslationsByinventoryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\MultilanguageDto[]**](../Model/MultilanguageDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**
> \Ekstralys\VismaNetApi\Model\MultilanguageDto multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso)

Get a specific translation of the description for a given item and language ISO code (screenId:IN202500 and IN202000)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | 
$language_iso = "language_iso_example"; // string | 

try {
    $result = $apiInstance->multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageISO: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**|  |
 **language_iso** | **string**|  |

### Return type

[**\Ekstralys\VismaNetApi\Model\MultilanguageDto**](../Model/MultilanguageDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**
> object multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso, $translation_dto)

Creates item description for given item and language ISO code (screenId:IN202500 and IN202000)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the inventory
$language_iso = "language_iso_example"; // string | Identifies the description language
$translation_dto = new \Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto(); // \Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto | Defines the fields and field values to be set on created description

try {
    $result = $apiInstance->multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso, $translation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageISO: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the inventory |
 **language_iso** | **string**| Identifies the description language |
 **translation_dto** | [**\Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto**](../Model/MultilanguageTranslationDto.md)| Defines the fields and field values to be set on created description |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO**
> object multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso, $translation_dto)

Updates item description for given item and language ISO code (screenId:IN202500 and IN202000)

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

$apiInstance = new Ekstralys\VismaNetApi\Api\MultilanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_number = "inventory_number_example"; // string | Identifies the inventory to update
$language_iso = "language_iso_example"; // string | Identifies the description language to update
$translation_dto = new \Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto(); // \Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto | Defines the fields and field values to be updated

try {
    $result = $apiInstance->multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO($inventory_number, $language_iso, $translation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultilanguageApi->multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageISO: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_number** | **string**| Identifies the inventory to update |
 **language_iso** | **string**| Identifies the description language to update |
 **translation_dto** | [**\Ekstralys\VismaNetApi\Model\MultilanguageTranslationDto**](../Model/MultilanguageTranslationDto.md)| Defines the fields and field values to be updated |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

