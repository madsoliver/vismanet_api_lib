<?php
/**
 * NotificationApi
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
 * NotificationApi Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationApi
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
     * Operation findByNotificationDateOrEventType
     *
     * Get notifications filtered by event type and/or date.
     *
     * @param  string $event_type event_type (optional)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number page_number (optional)
     * @param  int $page_size page_size (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\NotificationDto
     */
    public function findByNotificationDateOrEventType($event_type = null, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        list($response) = $this->findByNotificationDateOrEventTypeWithHttpInfo($event_type, $date_from, $date_to, $page_number, $page_size);
        return $response;
    }

    /**
     * Operation findByNotificationDateOrEventTypeWithHttpInfo
     *
     * Get notifications filtered by event type and/or date.
     *
     * @param  string $event_type (optional)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\NotificationDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function findByNotificationDateOrEventTypeWithHttpInfo($event_type = null, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationDto';
        $request = $this->findByNotificationDateOrEventTypeRequest($event_type, $date_from, $date_to, $page_number, $page_size);

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
                        '\Ekstralys\VismaNetApi\Model\NotificationDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findByNotificationDateOrEventTypeAsync
     *
     * Get notifications filtered by event type and/or date.
     *
     * @param  string $event_type (optional)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findByNotificationDateOrEventTypeAsync($event_type = null, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        return $this->findByNotificationDateOrEventTypeAsyncWithHttpInfo($event_type, $date_from, $date_to, $page_number, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findByNotificationDateOrEventTypeAsyncWithHttpInfo
     *
     * Get notifications filtered by event type and/or date.
     *
     * @param  string $event_type (optional)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findByNotificationDateOrEventTypeAsyncWithHttpInfo($event_type = null, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationDto';
        $request = $this->findByNotificationDateOrEventTypeRequest($event_type, $date_from, $date_to, $page_number, $page_size);

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
     * Create request for operation 'findByNotificationDateOrEventType'
     *
     * @param  string $event_type (optional)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findByNotificationDateOrEventTypeRequest($event_type = null, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {

        $resourcePath = '/resources/v1/notification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($event_type !== null) {
            $queryParams['eventType'] = ObjectSerializer::toQueryValue($event_type);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['dateTo'] = ObjectSerializer::toQueryValue($date_to);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($page_number);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation getNotificationInfo
     *
     * Get notification details by notification ID.
     *
     * @param  string $notification_id notification_id (required)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\NotificationReceivedDto
     */
    public function getNotificationInfo($notification_id)
    {
        list($response) = $this->getNotificationInfoWithHttpInfo($notification_id);
        return $response;
    }

    /**
     * Operation getNotificationInfoWithHttpInfo
     *
     * Get notification details by notification ID.
     *
     * @param  string $notification_id (required)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\NotificationReceivedDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotificationInfoWithHttpInfo($notification_id)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationReceivedDto';
        $request = $this->getNotificationInfoRequest($notification_id);

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
                        '\Ekstralys\VismaNetApi\Model\NotificationReceivedDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getNotificationInfoAsync
     *
     * Get notification details by notification ID.
     *
     * @param  string $notification_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNotificationInfoAsync($notification_id)
    {
        return $this->getNotificationInfoAsyncWithHttpInfo($notification_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNotificationInfoAsyncWithHttpInfo
     *
     * Get notification details by notification ID.
     *
     * @param  string $notification_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNotificationInfoAsyncWithHttpInfo($notification_id)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationReceivedDto';
        $request = $this->getNotificationInfoRequest($notification_id);

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
     * Create request for operation 'getNotificationInfo'
     *
     * @param  string $notification_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getNotificationInfoRequest($notification_id)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null || (is_array($notification_id) && count($notification_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $notification_id when calling getNotificationInfo'
            );
        }

        $resourcePath = '/resources/v1/notification/{notificationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($notification_id !== null) {
            $resourcePath = str_replace(
                '{' . 'notificationId' . '}',
                ObjectSerializer::toPathValue($notification_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation getRetryNotificationList
     *
     * Get failed notifications filtered by event type and/or date.
     *
     * @param  string $event_type event_type (required)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number page_number (optional)
     * @param  int $page_size page_size (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\NotificationDto
     */
    public function getRetryNotificationList($event_type, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        list($response) = $this->getRetryNotificationListWithHttpInfo($event_type, $date_from, $date_to, $page_number, $page_size);
        return $response;
    }

    /**
     * Operation getRetryNotificationListWithHttpInfo
     *
     * Get failed notifications filtered by event type and/or date.
     *
     * @param  string $event_type (required)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\NotificationDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRetryNotificationListWithHttpInfo($event_type, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationDto';
        $request = $this->getRetryNotificationListRequest($event_type, $date_from, $date_to, $page_number, $page_size);

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
                        '\Ekstralys\VismaNetApi\Model\NotificationDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRetryNotificationListAsync
     *
     * Get failed notifications filtered by event type and/or date.
     *
     * @param  string $event_type (required)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRetryNotificationListAsync($event_type, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        return $this->getRetryNotificationListAsyncWithHttpInfo($event_type, $date_from, $date_to, $page_number, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRetryNotificationListAsyncWithHttpInfo
     *
     * Get failed notifications filtered by event type and/or date.
     *
     * @param  string $event_type (required)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRetryNotificationListAsyncWithHttpInfo($event_type, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\NotificationDto';
        $request = $this->getRetryNotificationListRequest($event_type, $date_from, $date_to, $page_number, $page_size);

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
     * Create request for operation 'getRetryNotificationList'
     *
     * @param  string $event_type (required)
     * @param  \DateTime $date_from Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  \DateTime $date_to Use format: YYYY-MM-DD HH:mm:ss (optional)
     * @param  int $page_number (optional)
     * @param  int $page_size (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRetryNotificationListRequest($event_type, $date_from = null, $date_to = null, $page_number = null, $page_size = null)
    {
        // verify the required parameter 'event_type' is set
        if ($event_type === null || (is_array($event_type) && count($event_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $event_type when calling getRetryNotificationList'
            );
        }

        $resourcePath = '/resources/v1/notification/failed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($event_type !== null) {
            $queryParams['eventType'] = ObjectSerializer::toQueryValue($event_type);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['dateTo'] = ObjectSerializer::toQueryValue($date_to);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($page_number);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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