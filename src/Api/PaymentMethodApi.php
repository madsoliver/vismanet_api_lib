<?php
/**
 * PaymentMethodApi
 * PHP version 5
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visma Net API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 8.43.00.1002
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ekstralys\VismaNetApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ekstralys\VismaNetApi\ApiException;
use Ekstralys\VismaNetApi\Configuration;
use Ekstralys\VismaNetApi\HeaderSelector;
use Ekstralys\VismaNetApi\ObjectSerializer;

/**
 * PaymentMethodApi Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation paymentMethodGetAllPaymentMethod
     *
     * Get a range of Payment Method - ScreenId=CA204000
     *
     * @param  string $greater_than_value greater_than_value (optional)
     * @param  int $number_to_read number_to_read (optional)
     * @param  int $skip_records skip_records (optional)
     * @param  string $last_modified_date_time last_modified_date_time (optional)
     * @param  string $last_modified_date_time_condition last_modified_date_time_condition (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\PaymentMethodDto[]
     */
    public function paymentMethodGetAllPaymentMethod($greater_than_value = null, $number_to_read = null, $skip_records = null, $last_modified_date_time = null, $last_modified_date_time_condition = null)
    {
        list($response) = $this->paymentMethodGetAllPaymentMethodWithHttpInfo($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);
        return $response;
    }

    /**
     * Operation paymentMethodGetAllPaymentMethodWithHttpInfo
     *
     * Get a range of Payment Method - ScreenId=CA204000
     *
     * @param  string $greater_than_value (optional)
     * @param  int $number_to_read (optional)
     * @param  int $skip_records (optional)
     * @param  string $last_modified_date_time (optional)
     * @param  string $last_modified_date_time_condition (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\PaymentMethodDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentMethodGetAllPaymentMethodWithHttpInfo($greater_than_value = null, $number_to_read = null, $skip_records = null, $last_modified_date_time = null, $last_modified_date_time_condition = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\PaymentMethodDto[]';
        $request = $this->paymentMethodGetAllPaymentMethodRequest($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ekstralys\VismaNetApi\Model\PaymentMethodDto[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation paymentMethodGetAllPaymentMethodAsync
     *
     * Get a range of Payment Method - ScreenId=CA204000
     *
     * @param  string $greater_than_value (optional)
     * @param  int $number_to_read (optional)
     * @param  int $skip_records (optional)
     * @param  string $last_modified_date_time (optional)
     * @param  string $last_modified_date_time_condition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentMethodGetAllPaymentMethodAsync($greater_than_value = null, $number_to_read = null, $skip_records = null, $last_modified_date_time = null, $last_modified_date_time_condition = null)
    {
        return $this->paymentMethodGetAllPaymentMethodAsyncWithHttpInfo($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation paymentMethodGetAllPaymentMethodAsyncWithHttpInfo
     *
     * Get a range of Payment Method - ScreenId=CA204000
     *
     * @param  string $greater_than_value (optional)
     * @param  int $number_to_read (optional)
     * @param  int $skip_records (optional)
     * @param  string $last_modified_date_time (optional)
     * @param  string $last_modified_date_time_condition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentMethodGetAllPaymentMethodAsyncWithHttpInfo($greater_than_value = null, $number_to_read = null, $skip_records = null, $last_modified_date_time = null, $last_modified_date_time_condition = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\PaymentMethodDto[]';
        $request = $this->paymentMethodGetAllPaymentMethodRequest($greater_than_value, $number_to_read, $skip_records, $last_modified_date_time, $last_modified_date_time_condition);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'paymentMethodGetAllPaymentMethod'
     *
     * @param  string $greater_than_value (optional)
     * @param  int $number_to_read (optional)
     * @param  int $skip_records (optional)
     * @param  string $last_modified_date_time (optional)
     * @param  string $last_modified_date_time_condition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function paymentMethodGetAllPaymentMethodRequest($greater_than_value = null, $number_to_read = null, $skip_records = null, $last_modified_date_time = null, $last_modified_date_time_condition = null)
    {

        $resourcePath = '/controller/api/v1/paymentmethod';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($greater_than_value !== null) {
            $queryParams['greaterThanValue'] = ObjectSerializer::toQueryValue($greater_than_value);
        }
        // query params
        if ($number_to_read !== null) {
            $queryParams['numberToRead'] = ObjectSerializer::toQueryValue($number_to_read);
        }
        // query params
        if ($skip_records !== null) {
            $queryParams['skipRecords'] = ObjectSerializer::toQueryValue($skip_records);
        }
        // query params
        if ($last_modified_date_time !== null) {
            $queryParams['lastModifiedDateTime'] = ObjectSerializer::toQueryValue($last_modified_date_time);
        }
        // query params
        if ($last_modified_date_time_condition !== null) {
            $queryParams['lastModifiedDateTimeCondition'] = ObjectSerializer::toQueryValue($last_modified_date_time_condition);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ipp-application-type');
        if ($apiKey !== null) {
            $headers['ipp-application-type'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ipp-company-id');
        if ($apiKey !== null) {
            $headers['ipp-company-id'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation paymentMethodGetBypaymentMethodNumber
     *
     * Get a specific Payment Method
     *
     * @param  string $payment_method_number Identifies the Payment Method (required)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\PaymentMethodDto
     */
    public function paymentMethodGetBypaymentMethodNumber($payment_method_number)
    {
        list($response) = $this->paymentMethodGetBypaymentMethodNumberWithHttpInfo($payment_method_number);
        return $response;
    }

    /**
     * Operation paymentMethodGetBypaymentMethodNumberWithHttpInfo
     *
     * Get a specific Payment Method
     *
     * @param  string $payment_method_number Identifies the Payment Method (required)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\PaymentMethodDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentMethodGetBypaymentMethodNumberWithHttpInfo($payment_method_number)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\PaymentMethodDto';
        $request = $this->paymentMethodGetBypaymentMethodNumberRequest($payment_method_number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ekstralys\VismaNetApi\Model\PaymentMethodDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation paymentMethodGetBypaymentMethodNumberAsync
     *
     * Get a specific Payment Method
     *
     * @param  string $payment_method_number Identifies the Payment Method (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentMethodGetBypaymentMethodNumberAsync($payment_method_number)
    {
        return $this->paymentMethodGetBypaymentMethodNumberAsyncWithHttpInfo($payment_method_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation paymentMethodGetBypaymentMethodNumberAsyncWithHttpInfo
     *
     * Get a specific Payment Method
     *
     * @param  string $payment_method_number Identifies the Payment Method (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentMethodGetBypaymentMethodNumberAsyncWithHttpInfo($payment_method_number)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\PaymentMethodDto';
        $request = $this->paymentMethodGetBypaymentMethodNumberRequest($payment_method_number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'paymentMethodGetBypaymentMethodNumber'
     *
     * @param  string $payment_method_number Identifies the Payment Method (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function paymentMethodGetBypaymentMethodNumberRequest($payment_method_number)
    {
        // verify the required parameter 'payment_method_number' is set
        if ($payment_method_number === null || (is_array($payment_method_number) && count($payment_method_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_number when calling paymentMethodGetBypaymentMethodNumber'
            );
        }

        $resourcePath = '/controller/api/v1/paymentmethod/{paymentMethodNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_method_number !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodNumber' . '}',
                ObjectSerializer::toPathValue($payment_method_number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ipp-application-type');
        if ($apiKey !== null) {
            $headers['ipp-application-type'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ipp-company-id');
        if ($apiKey !== null) {
            $headers['ipp-company-id'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
