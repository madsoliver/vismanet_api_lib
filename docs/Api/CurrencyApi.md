# Ekstralys\VismaNetApi\CurrencyApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyCreateCurrencyRateBytoCurrencyId**](CurrencyApi.md#currencyCreateCurrencyRateBytoCurrencyId) | **POST** /controller/api/v1/currency/exchangerates/{toCurrencyId} | 
[**currencyGetAllCurrencies**](CurrencyApi.md#currencyGetAllCurrencies) | **GET** /controller/api/v1/currency | Get all available Currencies - ScreenId&#x3D;CM202000
[**currencyGetExchangeRatesBytoCurrencyIdeffectiveDate**](CurrencyApi.md#currencyGetExchangeRatesBytoCurrencyIdeffectiveDate) | **GET** /controller/api/v1/currency/exchangerates/{toCurrencyId}/{effectiveDate} | Get all CurrencyRates for currencyId for a given date - ScreenId&#x3D;CM301000
[**currencyGetSpecificCurrencyBycuryId**](CurrencyApi.md#currencyGetSpecificCurrencyBycuryId) | **GET** /controller/api/v1/currency/{curyId} | Get a specific Currency - ScreenId&#x3D;CM202000
[**currencyPutBycurrencyRateId**](CurrencyApi.md#currencyPutBycurrencyRateId) | **PUT** /controller/api/v1/currency/exchangerates/{currencyRateId} | 


# **currencyCreateCurrencyRateBytoCurrencyId**
> object currencyCreateCurrencyRateBytoCurrencyId($currency_rate, $to_currency_id)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_rate = new \Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto(); // \Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto | 
$to_currency_id = "to_currency_id_example"; // string | 

try {
    $result = $apiInstance->currencyCreateCurrencyRateBytoCurrencyId($currency_rate, $to_currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyCreateCurrencyRateBytoCurrencyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_rate** | [**\Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto**](../Model/CurrencyRateUpdateDto.md)|  |
 **to_currency_id** | **string**|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyGetAllCurrencies**
> \Ekstralys\VismaNetApi\Model\CurrencyDto[] currencyGetAllCurrencies()

Get all available Currencies - ScreenId=CM202000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->currencyGetAllCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyGetAllCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ekstralys\VismaNetApi\Model\CurrencyDto[]**](../Model/CurrencyDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyGetExchangeRatesBytoCurrencyIdeffectiveDate**
> \Ekstralys\VismaNetApi\Model\CurrencyInfoDto[] currencyGetExchangeRatesBytoCurrencyIdeffectiveDate($to_currency_id, $effective_date)

Get all CurrencyRates for currencyId for a given date - ScreenId=CM301000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_currency_id = "to_currency_id_example"; // string | Select the to currency defined in CM301000 (Base currency)
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Select the date you want to get exchange rate for, format YYYY-MM-DD

try {
    $result = $apiInstance->currencyGetExchangeRatesBytoCurrencyIdeffectiveDate($to_currency_id, $effective_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyGetExchangeRatesBytoCurrencyIdeffectiveDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_currency_id** | **string**| Select the to currency defined in CM301000 (Base currency) |
 **effective_date** | **\DateTime**| Select the date you want to get exchange rate for, format YYYY-MM-DD |

### Return type

[**\Ekstralys\VismaNetApi\Model\CurrencyInfoDto[]**](../Model/CurrencyInfoDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyGetSpecificCurrencyBycuryId**
> \Ekstralys\VismaNetApi\Model\CurrencyDto currencyGetSpecificCurrencyBycuryId($cury_id)

Get a specific Currency - ScreenId=CM202000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cury_id = "cury_id_example"; // string | Returns data for the selected CurrencyId

try {
    $result = $apiInstance->currencyGetSpecificCurrencyBycuryId($cury_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyGetSpecificCurrencyBycuryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cury_id** | **string**| Returns data for the selected CurrencyId |

### Return type

[**\Ekstralys\VismaNetApi\Model\CurrencyDto**](../Model/CurrencyDto.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyPutBycurrencyRateId**
> object currencyPutBycurrencyRateId($currency_rate, $currency_rate_id)



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

$apiInstance = new Ekstralys\VismaNetApi\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_rate = new \Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto(); // \Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto | 
$currency_rate_id = 56; // int | 

try {
    $result = $apiInstance->currencyPutBycurrencyRateId($currency_rate, $currency_rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyPutBycurrencyRateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_rate** | [**\Ekstralys\VismaNetApi\Model\CurrencyRateUpdateDto**](../Model/CurrencyRateUpdateDto.md)|  |
 **currency_rate_id** | **int**|  |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

