<?php
/**
 * ProjectBasicApi
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
 * ProjectBasicApi Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectBasicApi
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
     * Operation projectBasicGetAll
     *
     * Get a range of Projects - ScreenId=PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
     *
     * @param  string $status Select project status. (optional)
     * @param  string $description Project name/description (optional)
     * @param  string $project_id Identifies the Project (optional)
     * @param  \DateTime $start_date Project&#39;s start date (optional)
     * @param  bool $non_project Set to true to return the non-project. (optional)
     * @param  string $project_id_desc Identifies the Project by ID and description (optional)
     * @param  string $public_id Identifies the Project by its publicId (optional)
     * @param  string $restricted_employee Id of the employee where access restrictions apply (optional)
     * @param  int $restricted_user Id of the odp user where access restrictions apply (optional)
     * @param  bool $visible_in_ap If the project is visible in the Supplier ledger (optional)
     * @param  bool $visible_in_ar If the project is visible in the Customer ledger (optional)
     * @param  bool $visible_in_ca If the project is visible in the Cash management workspace (optional)
     * @param  bool $visible_in_cr If the project is visible in the CRM workspace (optional)
     * @param  bool $visible_in_ea If the project is visible in the Expense workspace (optional)
     * @param  bool $visible_in_gl If the project is visible in the General ledger workspace (optional)
     * @param  bool $visible_in_in If the project is visible in the Inventory workspace (optional)
     * @param  bool $visible_in_po If the project is visible in the Purchases workspace (optional)
     * @param  bool $visible_in_so If the project is visible in the Sales workspace (optional)
     * @param  bool $visible_in_ta If the project is visible in the Time entities workspace (optional)
     * @param  int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  string $greater_than_value Greater than value. The item which is the object for this, varies from API to API. (optional)
     * @param  string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. (optional)
     * @param  string $last_modified_date_time_condition System retrieved information for state/condition. (optional)
     * @param  string $created_date_time Creation date and time. (optional)
     * @param  string $created_date_time_condition System-retrieved information for state/condition (optional)
     * @param  int $page_number Pagination parameter. Page number. (optional)
     * @param  int $page_size Pagination parameter. Number of items to be collected. (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ekstralys\VismaNetApi\Model\ProjectBasicDto[]
     */
    public function projectBasicGetAll($status = null, $description = null, $project_id = null, $start_date = null, $non_project = null, $project_id_desc = null, $public_id = null, $restricted_employee = null, $restricted_user = null, $visible_in_ap = null, $visible_in_ar = null, $visible_in_ca = null, $visible_in_cr = null, $visible_in_ea = null, $visible_in_gl = null, $visible_in_in = null, $visible_in_po = null, $visible_in_so = null, $visible_in_ta = null, $number_to_read = null, $skip_records = null, $greater_than_value = null, $last_modified_date_time = null, $last_modified_date_time_condition = null, $created_date_time = null, $created_date_time_condition = null, $page_number = null, $page_size = null)
    {
        list($response) = $this->projectBasicGetAllWithHttpInfo($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);
        return $response;
    }

    /**
     * Operation projectBasicGetAllWithHttpInfo
     *
     * Get a range of Projects - ScreenId=PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
     *
     * @param  string $status Select project status. (optional)
     * @param  string $description Project name/description (optional)
     * @param  string $project_id Identifies the Project (optional)
     * @param  \DateTime $start_date Project&#39;s start date (optional)
     * @param  bool $non_project Set to true to return the non-project. (optional)
     * @param  string $project_id_desc Identifies the Project by ID and description (optional)
     * @param  string $public_id Identifies the Project by its publicId (optional)
     * @param  string $restricted_employee Id of the employee where access restrictions apply (optional)
     * @param  int $restricted_user Id of the odp user where access restrictions apply (optional)
     * @param  bool $visible_in_ap If the project is visible in the Supplier ledger (optional)
     * @param  bool $visible_in_ar If the project is visible in the Customer ledger (optional)
     * @param  bool $visible_in_ca If the project is visible in the Cash management workspace (optional)
     * @param  bool $visible_in_cr If the project is visible in the CRM workspace (optional)
     * @param  bool $visible_in_ea If the project is visible in the Expense workspace (optional)
     * @param  bool $visible_in_gl If the project is visible in the General ledger workspace (optional)
     * @param  bool $visible_in_in If the project is visible in the Inventory workspace (optional)
     * @param  bool $visible_in_po If the project is visible in the Purchases workspace (optional)
     * @param  bool $visible_in_so If the project is visible in the Sales workspace (optional)
     * @param  bool $visible_in_ta If the project is visible in the Time entities workspace (optional)
     * @param  int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  string $greater_than_value Greater than value. The item which is the object for this, varies from API to API. (optional)
     * @param  string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. (optional)
     * @param  string $last_modified_date_time_condition System retrieved information for state/condition. (optional)
     * @param  string $created_date_time Creation date and time. (optional)
     * @param  string $created_date_time_condition System-retrieved information for state/condition (optional)
     * @param  int $page_number Pagination parameter. Page number. (optional)
     * @param  int $page_size Pagination parameter. Number of items to be collected. (optional)
     *
     * @throws \Ekstralys\VismaNetApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ekstralys\VismaNetApi\Model\ProjectBasicDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function projectBasicGetAllWithHttpInfo($status = null, $description = null, $project_id = null, $start_date = null, $non_project = null, $project_id_desc = null, $public_id = null, $restricted_employee = null, $restricted_user = null, $visible_in_ap = null, $visible_in_ar = null, $visible_in_ca = null, $visible_in_cr = null, $visible_in_ea = null, $visible_in_gl = null, $visible_in_in = null, $visible_in_po = null, $visible_in_so = null, $visible_in_ta = null, $number_to_read = null, $skip_records = null, $greater_than_value = null, $last_modified_date_time = null, $last_modified_date_time_condition = null, $created_date_time = null, $created_date_time_condition = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\ProjectBasicDto[]';
        $request = $this->projectBasicGetAllRequest($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);

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
                        '\Ekstralys\VismaNetApi\Model\ProjectBasicDto[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation projectBasicGetAllAsync
     *
     * Get a range of Projects - ScreenId=PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
     *
     * @param  string $status Select project status. (optional)
     * @param  string $description Project name/description (optional)
     * @param  string $project_id Identifies the Project (optional)
     * @param  \DateTime $start_date Project&#39;s start date (optional)
     * @param  bool $non_project Set to true to return the non-project. (optional)
     * @param  string $project_id_desc Identifies the Project by ID and description (optional)
     * @param  string $public_id Identifies the Project by its publicId (optional)
     * @param  string $restricted_employee Id of the employee where access restrictions apply (optional)
     * @param  int $restricted_user Id of the odp user where access restrictions apply (optional)
     * @param  bool $visible_in_ap If the project is visible in the Supplier ledger (optional)
     * @param  bool $visible_in_ar If the project is visible in the Customer ledger (optional)
     * @param  bool $visible_in_ca If the project is visible in the Cash management workspace (optional)
     * @param  bool $visible_in_cr If the project is visible in the CRM workspace (optional)
     * @param  bool $visible_in_ea If the project is visible in the Expense workspace (optional)
     * @param  bool $visible_in_gl If the project is visible in the General ledger workspace (optional)
     * @param  bool $visible_in_in If the project is visible in the Inventory workspace (optional)
     * @param  bool $visible_in_po If the project is visible in the Purchases workspace (optional)
     * @param  bool $visible_in_so If the project is visible in the Sales workspace (optional)
     * @param  bool $visible_in_ta If the project is visible in the Time entities workspace (optional)
     * @param  int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  string $greater_than_value Greater than value. The item which is the object for this, varies from API to API. (optional)
     * @param  string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. (optional)
     * @param  string $last_modified_date_time_condition System retrieved information for state/condition. (optional)
     * @param  string $created_date_time Creation date and time. (optional)
     * @param  string $created_date_time_condition System-retrieved information for state/condition (optional)
     * @param  int $page_number Pagination parameter. Page number. (optional)
     * @param  int $page_size Pagination parameter. Number of items to be collected. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectBasicGetAllAsync($status = null, $description = null, $project_id = null, $start_date = null, $non_project = null, $project_id_desc = null, $public_id = null, $restricted_employee = null, $restricted_user = null, $visible_in_ap = null, $visible_in_ar = null, $visible_in_ca = null, $visible_in_cr = null, $visible_in_ea = null, $visible_in_gl = null, $visible_in_in = null, $visible_in_po = null, $visible_in_so = null, $visible_in_ta = null, $number_to_read = null, $skip_records = null, $greater_than_value = null, $last_modified_date_time = null, $last_modified_date_time_condition = null, $created_date_time = null, $created_date_time_condition = null, $page_number = null, $page_size = null)
    {
        return $this->projectBasicGetAllAsyncWithHttpInfo($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectBasicGetAllAsyncWithHttpInfo
     *
     * Get a range of Projects - ScreenId=PM301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size
     *
     * @param  string $status Select project status. (optional)
     * @param  string $description Project name/description (optional)
     * @param  string $project_id Identifies the Project (optional)
     * @param  \DateTime $start_date Project&#39;s start date (optional)
     * @param  bool $non_project Set to true to return the non-project. (optional)
     * @param  string $project_id_desc Identifies the Project by ID and description (optional)
     * @param  string $public_id Identifies the Project by its publicId (optional)
     * @param  string $restricted_employee Id of the employee where access restrictions apply (optional)
     * @param  int $restricted_user Id of the odp user where access restrictions apply (optional)
     * @param  bool $visible_in_ap If the project is visible in the Supplier ledger (optional)
     * @param  bool $visible_in_ar If the project is visible in the Customer ledger (optional)
     * @param  bool $visible_in_ca If the project is visible in the Cash management workspace (optional)
     * @param  bool $visible_in_cr If the project is visible in the CRM workspace (optional)
     * @param  bool $visible_in_ea If the project is visible in the Expense workspace (optional)
     * @param  bool $visible_in_gl If the project is visible in the General ledger workspace (optional)
     * @param  bool $visible_in_in If the project is visible in the Inventory workspace (optional)
     * @param  bool $visible_in_po If the project is visible in the Purchases workspace (optional)
     * @param  bool $visible_in_so If the project is visible in the Sales workspace (optional)
     * @param  bool $visible_in_ta If the project is visible in the Time entities workspace (optional)
     * @param  int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  string $greater_than_value Greater than value. The item which is the object for this, varies from API to API. (optional)
     * @param  string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. (optional)
     * @param  string $last_modified_date_time_condition System retrieved information for state/condition. (optional)
     * @param  string $created_date_time Creation date and time. (optional)
     * @param  string $created_date_time_condition System-retrieved information for state/condition (optional)
     * @param  int $page_number Pagination parameter. Page number. (optional)
     * @param  int $page_size Pagination parameter. Number of items to be collected. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectBasicGetAllAsyncWithHttpInfo($status = null, $description = null, $project_id = null, $start_date = null, $non_project = null, $project_id_desc = null, $public_id = null, $restricted_employee = null, $restricted_user = null, $visible_in_ap = null, $visible_in_ar = null, $visible_in_ca = null, $visible_in_cr = null, $visible_in_ea = null, $visible_in_gl = null, $visible_in_in = null, $visible_in_po = null, $visible_in_so = null, $visible_in_ta = null, $number_to_read = null, $skip_records = null, $greater_than_value = null, $last_modified_date_time = null, $last_modified_date_time_condition = null, $created_date_time = null, $created_date_time_condition = null, $page_number = null, $page_size = null)
    {
        $returnType = '\Ekstralys\VismaNetApi\Model\ProjectBasicDto[]';
        $request = $this->projectBasicGetAllRequest($status, $description, $project_id, $start_date, $non_project, $project_id_desc, $public_id, $restricted_employee, $restricted_user, $visible_in_ap, $visible_in_ar, $visible_in_ca, $visible_in_cr, $visible_in_ea, $visible_in_gl, $visible_in_in, $visible_in_po, $visible_in_so, $visible_in_ta, $number_to_read, $skip_records, $greater_than_value, $last_modified_date_time, $last_modified_date_time_condition, $created_date_time, $created_date_time_condition, $page_number, $page_size);

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
     * Create request for operation 'projectBasicGetAll'
     *
     * @param  string $status Select project status. (optional)
     * @param  string $description Project name/description (optional)
     * @param  string $project_id Identifies the Project (optional)
     * @param  \DateTime $start_date Project&#39;s start date (optional)
     * @param  bool $non_project Set to true to return the non-project. (optional)
     * @param  string $project_id_desc Identifies the Project by ID and description (optional)
     * @param  string $public_id Identifies the Project by its publicId (optional)
     * @param  string $restricted_employee Id of the employee where access restrictions apply (optional)
     * @param  int $restricted_user Id of the odp user where access restrictions apply (optional)
     * @param  bool $visible_in_ap If the project is visible in the Supplier ledger (optional)
     * @param  bool $visible_in_ar If the project is visible in the Customer ledger (optional)
     * @param  bool $visible_in_ca If the project is visible in the Cash management workspace (optional)
     * @param  bool $visible_in_cr If the project is visible in the CRM workspace (optional)
     * @param  bool $visible_in_ea If the project is visible in the Expense workspace (optional)
     * @param  bool $visible_in_gl If the project is visible in the General ledger workspace (optional)
     * @param  bool $visible_in_in If the project is visible in the Inventory workspace (optional)
     * @param  bool $visible_in_po If the project is visible in the Purchases workspace (optional)
     * @param  bool $visible_in_so If the project is visible in the Sales workspace (optional)
     * @param  bool $visible_in_ta If the project is visible in the Time entities workspace (optional)
     * @param  int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. (optional)
     * @param  string $greater_than_value Greater than value. The item which is the object for this, varies from API to API. (optional)
     * @param  string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. (optional)
     * @param  string $last_modified_date_time_condition System retrieved information for state/condition. (optional)
     * @param  string $created_date_time Creation date and time. (optional)
     * @param  string $created_date_time_condition System-retrieved information for state/condition (optional)
     * @param  int $page_number Pagination parameter. Page number. (optional)
     * @param  int $page_size Pagination parameter. Number of items to be collected. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectBasicGetAllRequest($status = null, $description = null, $project_id = null, $start_date = null, $non_project = null, $project_id_desc = null, $public_id = null, $restricted_employee = null, $restricted_user = null, $visible_in_ap = null, $visible_in_ar = null, $visible_in_ca = null, $visible_in_cr = null, $visible_in_ea = null, $visible_in_gl = null, $visible_in_in = null, $visible_in_po = null, $visible_in_so = null, $visible_in_ta = null, $number_to_read = null, $skip_records = null, $greater_than_value = null, $last_modified_date_time = null, $last_modified_date_time_condition = null, $created_date_time = null, $created_date_time_condition = null, $page_number = null, $page_size = null)
    {

        $resourcePath = '/controller/api/v1/projectbasic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($description !== null) {
            $queryParams['description'] = ObjectSerializer::toQueryValue($description);
        }
        // query params
        if ($project_id !== null) {
            $queryParams['projectId'] = ObjectSerializer::toQueryValue($project_id);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($non_project !== null) {
            $queryParams['nonProject'] = ObjectSerializer::toQueryValue($non_project);
        }
        // query params
        if ($project_id_desc !== null) {
            $queryParams['projectIdDesc'] = ObjectSerializer::toQueryValue($project_id_desc);
        }
        // query params
        if ($public_id !== null) {
            $queryParams['publicId'] = ObjectSerializer::toQueryValue($public_id);
        }
        // query params
        if ($restricted_employee !== null) {
            $queryParams['restrictedEmployee'] = ObjectSerializer::toQueryValue($restricted_employee);
        }
        // query params
        if ($restricted_user !== null) {
            $queryParams['restrictedUser'] = ObjectSerializer::toQueryValue($restricted_user);
        }
        // query params
        if ($visible_in_ap !== null) {
            $queryParams['visibleInAp'] = ObjectSerializer::toQueryValue($visible_in_ap);
        }
        // query params
        if ($visible_in_ar !== null) {
            $queryParams['visibleInAr'] = ObjectSerializer::toQueryValue($visible_in_ar);
        }
        // query params
        if ($visible_in_ca !== null) {
            $queryParams['visibleInCa'] = ObjectSerializer::toQueryValue($visible_in_ca);
        }
        // query params
        if ($visible_in_cr !== null) {
            $queryParams['visibleInCr'] = ObjectSerializer::toQueryValue($visible_in_cr);
        }
        // query params
        if ($visible_in_ea !== null) {
            $queryParams['visibleInEa'] = ObjectSerializer::toQueryValue($visible_in_ea);
        }
        // query params
        if ($visible_in_gl !== null) {
            $queryParams['visibleInGl'] = ObjectSerializer::toQueryValue($visible_in_gl);
        }
        // query params
        if ($visible_in_in !== null) {
            $queryParams['visibleInIn'] = ObjectSerializer::toQueryValue($visible_in_in);
        }
        // query params
        if ($visible_in_po !== null) {
            $queryParams['visibleInPo'] = ObjectSerializer::toQueryValue($visible_in_po);
        }
        // query params
        if ($visible_in_so !== null) {
            $queryParams['visibleInSo'] = ObjectSerializer::toQueryValue($visible_in_so);
        }
        // query params
        if ($visible_in_ta !== null) {
            $queryParams['visibleInTa'] = ObjectSerializer::toQueryValue($visible_in_ta);
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
        if ($greater_than_value !== null) {
            $queryParams['greaterThanValue'] = ObjectSerializer::toQueryValue($greater_than_value);
        }
        // query params
        if ($last_modified_date_time !== null) {
            $queryParams['lastModifiedDateTime'] = ObjectSerializer::toQueryValue($last_modified_date_time);
        }
        // query params
        if ($last_modified_date_time_condition !== null) {
            $queryParams['lastModifiedDateTimeCondition'] = ObjectSerializer::toQueryValue($last_modified_date_time_condition);
        }
        // query params
        if ($created_date_time !== null) {
            $queryParams['createdDateTime'] = ObjectSerializer::toQueryValue($created_date_time);
        }
        // query params
        if ($created_date_time_condition !== null) {
            $queryParams['createdDateTimeCondition'] = ObjectSerializer::toQueryValue($created_date_time_condition);
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
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
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
