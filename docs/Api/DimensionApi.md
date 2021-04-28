# Ekstralys\VismaNetApi\DimensionApi

All URIs are relative to *https://localhost/API*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dimensionGetDimensionBydimensionId**](DimensionApi.md#dimensionGetDimensionBydimensionId) | **GET** /controller/api/v1/dimension/{dimensionId} | Get a specific Dimension
[**dimensionGetDimensionList**](DimensionApi.md#dimensionGetDimensionList) | **GET** /controller/api/v1/dimension | Get a list of all Dimension names/IDs ScreenId&#x3D;CS202000
[**dimensionGetSegmentBydimensionIdsegmentId**](DimensionApi.md#dimensionGetSegmentBydimensionIdsegmentId) | **GET** /controller/api/v1/dimension/{dimensionId}/{segmentId} | Get a specific Segment for a specific Dimension
[**dimensionGetSegmentValueBydimensionIdsegmentIdpublicId**](DimensionApi.md#dimensionGetSegmentValueBydimensionIdsegmentIdpublicId) | **GET** /controller/api/v1/dimension/{dimensionId}/{segmentId}/publicid/{publicId} | Get a specific SegmentValue for a specific Segment for a specific Dimension
[**dimensionGetSegmentValueBydimensionIdsegmentIdvalueId**](DimensionApi.md#dimensionGetSegmentValueBydimensionIdsegmentIdvalueId) | **GET** /controller/api/v1/dimension/{dimensionId}/{segmentId}/{valueId} | Get a specific SegmentValue for a specific Segment for a specific Dimension
[**dimensionUpdateSegmentBydimensionIdsegmentId**](DimensionApi.md#dimensionUpdateSegmentBydimensionIdsegmentId) | **PUT** /controller/api/v1/dimension/{dimensionId}/{segmentId} | Update a Segment


# **dimensionGetDimensionBydimensionId**
> \Ekstralys\VismaNetApi\Model\DtoDimension dimensionGetDimensionBydimensionId($dimension_id, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $expand_segments_values)

Get a specific Dimension

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimension_id = "dimension_id_example"; // string | Identifies the dimension
$greater_than_value = "greater_than_value_example"; // string | Greater-than value. The item which is the object for this, varies from API to API.
$number_to_read = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
$skip_records = 56; // int | This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.        ///
$order_by = "order_by_example"; // string | This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
$last_modified_date_time = "last_modified_date_time_example"; // string | System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
$last_modified_date_time_condition = "last_modified_date_time_condition_example"; // string | System-retrieved information for state/condition.
$expand_segments_values = true; // bool | Flag can be used to return data without the segment values.

try {
    $result = $apiInstance->dimensionGetDimensionBydimensionId($dimension_id, $greater_than_value, $number_to_read, $skip_records, $order_by, $last_modified_date_time, $last_modified_date_time_condition, $expand_segments_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionGetDimensionBydimensionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| Identifies the dimension |
 **greater_than_value** | **string**| Greater-than value. The item which is the object for this, varies from API to API. | [optional]
 **number_to_read** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. | [optional]
 **skip_records** | **int**| This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.        /// | [optional]
 **order_by** | **string**| This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. | [optional]
 **last_modified_date_time** | **string**| System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. | [optional]
 **last_modified_date_time_condition** | **string**| System-retrieved information for state/condition. | [optional]
 **expand_segments_values** | **bool**| Flag can be used to return data without the segment values. | [optional]

### Return type

[**\Ekstralys\VismaNetApi\Model\DtoDimension**](../Model/DtoDimension.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dimensionGetDimensionList**
> string[] dimensionGetDimensionList()

Get a list of all Dimension names/IDs ScreenId=CS202000

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dimensionGetDimensionList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionGetDimensionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dimensionGetSegmentBydimensionIdsegmentId**
> \Ekstralys\VismaNetApi\Model\DtoSegment dimensionGetSegmentBydimensionIdsegmentId($dimension_id, $segment_id)

Get a specific Segment for a specific Dimension

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimension_id = "dimension_id_example"; // string | Identifies the Dimension
$segment_id = 56; // int | Identifies the Segment

try {
    $result = $apiInstance->dimensionGetSegmentBydimensionIdsegmentId($dimension_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionGetSegmentBydimensionIdsegmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| Identifies the Dimension |
 **segment_id** | **int**| Identifies the Segment |

### Return type

[**\Ekstralys\VismaNetApi\Model\DtoSegment**](../Model/DtoSegment.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dimensionGetSegmentValueBydimensionIdsegmentIdpublicId**
> \Ekstralys\VismaNetApi\Model\DtoSegmentValue dimensionGetSegmentValueBydimensionIdsegmentIdpublicId($dimension_id, $segment_id, $public_id)

Get a specific SegmentValue for a specific Segment for a specific Dimension

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimension_id = "dimension_id_example"; // string | Identifies the Dimension
$segment_id = 56; // int | Identifies the Segment
$public_id = "public_id_example"; // string | Identifies the SegmentValue by its publicId

try {
    $result = $apiInstance->dimensionGetSegmentValueBydimensionIdsegmentIdpublicId($dimension_id, $segment_id, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionGetSegmentValueBydimensionIdsegmentIdpublicId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| Identifies the Dimension |
 **segment_id** | **int**| Identifies the Segment |
 **public_id** | [**string**](../Model/.md)| Identifies the SegmentValue by its publicId |

### Return type

[**\Ekstralys\VismaNetApi\Model\DtoSegmentValue**](../Model/DtoSegmentValue.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dimensionGetSegmentValueBydimensionIdsegmentIdvalueId**
> \Ekstralys\VismaNetApi\Model\DtoSegmentValue dimensionGetSegmentValueBydimensionIdsegmentIdvalueId($dimension_id, $segment_id, $value_id)

Get a specific SegmentValue for a specific Segment for a specific Dimension

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimension_id = "dimension_id_example"; // string | Identifies the Dimension
$segment_id = 56; // int | Identifies the Segment
$value_id = "value_id_example"; // string | Identifies the SegmentValue by Id. Must be Base64 encoded.

try {
    $result = $apiInstance->dimensionGetSegmentValueBydimensionIdsegmentIdvalueId($dimension_id, $segment_id, $value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionGetSegmentValueBydimensionIdsegmentIdvalueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| Identifies the Dimension |
 **segment_id** | **int**| Identifies the Segment |
 **value_id** | **string**| Identifies the SegmentValue by Id. Must be Base64 encoded. |

### Return type

[**\Ekstralys\VismaNetApi\Model\DtoSegmentValue**](../Model/DtoSegmentValue.md)

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dimensionUpdateSegmentBydimensionIdsegmentId**
> object dimensionUpdateSegmentBydimensionIdsegmentId($dimension_id, $segment_id, $update)

Update a Segment

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

$apiInstance = new Ekstralys\VismaNetApi\Api\DimensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimension_id = "dimension_id_example"; // string | Identifies the Dimension for which the Segment is defined
$segment_id = 56; // int | Identifies the Segment
$update = new \Ekstralys\VismaNetApi\Model\DtoSegmentUpdateDto(); // \Ekstralys\VismaNetApi\Model\DtoSegmentUpdateDto | Defines the data for the Segment to update

try {
    $result = $apiInstance->dimensionUpdateSegmentBydimensionIdsegmentId($dimension_id, $segment_id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DimensionApi->dimensionUpdateSegmentBydimensionIdsegmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| Identifies the Dimension for which the Segment is defined |
 **segment_id** | **int**| Identifies the Segment |
 **update** | [**\Ekstralys\VismaNetApi\Model\DtoSegmentUpdateDto**](../Model/DtoSegmentUpdateDto.md)| Defines the data for the Segment to update |

### Return type

**object**

### Authorization

[ipp-application-type](../../README.md#ipp-application-type), [ipp-company-id](../../README.md#ipp-company-id), [vna_oauth](../../README.md#vna_oauth)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

