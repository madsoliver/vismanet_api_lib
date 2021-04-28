<?php
/**
 * TaskQueryParameters
 *
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

namespace Ekstralys\VismaNetApi\Model;

use \ArrayAccess;
use \Ekstralys\VismaNetApi\ObjectSerializer;

/**
 * TaskQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_id' => 'string',
        'public_id' => 'string',
        'project_internal_id' => 'int',
        'description' => 'string',
        'task_cd' => 'string',
        'task_cd_desc' => 'string',
        'status' => 'string',
        'visible_in_ap' => 'bool',
        'visible_in_ar' => 'bool',
        'visible_in_ca' => 'bool',
        'visible_in_cr' => 'bool',
        'visible_in_ea' => 'bool',
        'visible_in_gl' => 'bool',
        'visible_in_in' => 'bool',
        'visible_in_po' => 'bool',
        'visible_in_so' => 'bool',
        'visible_in_ta' => 'bool',
        'restricted_employee' => 'string',
        'restricted_user' => 'int',
        'greater_than_value' => 'string',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string',
        'created_date_time' => 'string',
        'created_date_time_condition' => 'string',
        'page_number' => 'int',
        'page_size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_id' => null,
        'public_id' => 'uuid',
        'project_internal_id' => 'int32',
        'description' => null,
        'task_cd' => null,
        'task_cd_desc' => null,
        'status' => null,
        'visible_in_ap' => null,
        'visible_in_ar' => null,
        'visible_in_ca' => null,
        'visible_in_cr' => null,
        'visible_in_ea' => null,
        'visible_in_gl' => null,
        'visible_in_in' => null,
        'visible_in_po' => null,
        'visible_in_so' => null,
        'visible_in_ta' => null,
        'restricted_employee' => null,
        'restricted_user' => 'int64',
        'greater_than_value' => null,
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null,
        'created_date_time' => null,
        'created_date_time_condition' => null,
        'page_number' => 'int32',
        'page_size' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'project_id' => 'projectId',
        'public_id' => 'publicId',
        'project_internal_id' => 'projectInternalId',
        'description' => 'description',
        'task_cd' => 'taskCd',
        'task_cd_desc' => 'taskCdDesc',
        'status' => 'status',
        'visible_in_ap' => 'visibleInAp',
        'visible_in_ar' => 'visibleInAr',
        'visible_in_ca' => 'visibleInCa',
        'visible_in_cr' => 'visibleInCr',
        'visible_in_ea' => 'visibleInEa',
        'visible_in_gl' => 'visibleInGl',
        'visible_in_in' => 'visibleInIn',
        'visible_in_po' => 'visibleInPo',
        'visible_in_so' => 'visibleInSo',
        'visible_in_ta' => 'visibleInTa',
        'restricted_employee' => 'restrictedEmployee',
        'restricted_user' => 'restrictedUser',
        'greater_than_value' => 'greaterThanValue',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition',
        'created_date_time' => 'createdDateTime',
        'created_date_time_condition' => 'createdDateTimeCondition',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_id' => 'setProjectId',
        'public_id' => 'setPublicId',
        'project_internal_id' => 'setProjectInternalId',
        'description' => 'setDescription',
        'task_cd' => 'setTaskCd',
        'task_cd_desc' => 'setTaskCdDesc',
        'status' => 'setStatus',
        'visible_in_ap' => 'setVisibleInAp',
        'visible_in_ar' => 'setVisibleInAr',
        'visible_in_ca' => 'setVisibleInCa',
        'visible_in_cr' => 'setVisibleInCr',
        'visible_in_ea' => 'setVisibleInEa',
        'visible_in_gl' => 'setVisibleInGl',
        'visible_in_in' => 'setVisibleInIn',
        'visible_in_po' => 'setVisibleInPo',
        'visible_in_so' => 'setVisibleInSo',
        'visible_in_ta' => 'setVisibleInTa',
        'restricted_employee' => 'setRestrictedEmployee',
        'restricted_user' => 'setRestrictedUser',
        'greater_than_value' => 'setGreaterThanValue',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition',
        'created_date_time' => 'setCreatedDateTime',
        'created_date_time_condition' => 'setCreatedDateTimeCondition',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_id' => 'getProjectId',
        'public_id' => 'getPublicId',
        'project_internal_id' => 'getProjectInternalId',
        'description' => 'getDescription',
        'task_cd' => 'getTaskCd',
        'task_cd_desc' => 'getTaskCdDesc',
        'status' => 'getStatus',
        'visible_in_ap' => 'getVisibleInAp',
        'visible_in_ar' => 'getVisibleInAr',
        'visible_in_ca' => 'getVisibleInCa',
        'visible_in_cr' => 'getVisibleInCr',
        'visible_in_ea' => 'getVisibleInEa',
        'visible_in_gl' => 'getVisibleInGl',
        'visible_in_in' => 'getVisibleInIn',
        'visible_in_po' => 'getVisibleInPo',
        'visible_in_so' => 'getVisibleInSo',
        'visible_in_ta' => 'getVisibleInTa',
        'restricted_employee' => 'getRestrictedEmployee',
        'restricted_user' => 'getRestrictedUser',
        'greater_than_value' => 'getGreaterThanValue',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition',
        'created_date_time' => 'getCreatedDateTime',
        'created_date_time_condition' => 'getCreatedDateTimeCondition',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_PLANNED = 'Planned';
    const STATUS_ACTIVE = 'Active';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_COMPLETED = 'Completed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLANNED,
            self::STATUS_ACTIVE,
            self::STATUS_CANCELLED,
            self::STATUS_COMPLETED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['project_internal_id'] = isset($data['project_internal_id']) ? $data['project_internal_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['task_cd'] = isset($data['task_cd']) ? $data['task_cd'] : null;
        $this->container['task_cd_desc'] = isset($data['task_cd_desc']) ? $data['task_cd_desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['visible_in_ap'] = isset($data['visible_in_ap']) ? $data['visible_in_ap'] : null;
        $this->container['visible_in_ar'] = isset($data['visible_in_ar']) ? $data['visible_in_ar'] : null;
        $this->container['visible_in_ca'] = isset($data['visible_in_ca']) ? $data['visible_in_ca'] : null;
        $this->container['visible_in_cr'] = isset($data['visible_in_cr']) ? $data['visible_in_cr'] : null;
        $this->container['visible_in_ea'] = isset($data['visible_in_ea']) ? $data['visible_in_ea'] : null;
        $this->container['visible_in_gl'] = isset($data['visible_in_gl']) ? $data['visible_in_gl'] : null;
        $this->container['visible_in_in'] = isset($data['visible_in_in']) ? $data['visible_in_in'] : null;
        $this->container['visible_in_po'] = isset($data['visible_in_po']) ? $data['visible_in_po'] : null;
        $this->container['visible_in_so'] = isset($data['visible_in_so']) ? $data['visible_in_so'] : null;
        $this->container['visible_in_ta'] = isset($data['visible_in_ta']) ? $data['visible_in_ta'] : null;
        $this->container['restricted_employee'] = isset($data['restricted_employee']) ? $data['restricted_employee'] : null;
        $this->container['restricted_user'] = isset($data['restricted_user']) ? $data['restricted_user'] : null;
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['created_date_time_condition'] = isset($data['created_date_time_condition']) ? $data['created_date_time_condition'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id Identifies the Project
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets public_id
     *
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['public_id'];
    }

    /**
     * Sets public_id
     *
     * @param string $public_id Identifies the project by publicId
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

        return $this;
    }

    /**
     * Gets project_internal_id
     *
     * @return int
     */
    public function getProjectInternalId()
    {
        return $this->container['project_internal_id'];
    }

    /**
     * Sets project_internal_id
     *
     * @param int $project_internal_id Identifies the project by internal id
     *
     * @return $this
     */
    public function setProjectInternalId($project_internal_id)
    {
        $this->container['project_internal_id'] = $project_internal_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Identifies the Project task description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets task_cd
     *
     * @return string
     */
    public function getTaskCd()
    {
        return $this->container['task_cd'];
    }

    /**
     * Sets task_cd
     *
     * @param string $task_cd Identifies the Project task ID
     *
     * @return $this
     */
    public function setTaskCd($task_cd)
    {
        $this->container['task_cd'] = $task_cd;

        return $this;
    }

    /**
     * Gets task_cd_desc
     *
     * @return string
     */
    public function getTaskCdDesc()
    {
        return $this->container['task_cd_desc'];
    }

    /**
     * Sets task_cd_desc
     *
     * @param string $task_cd_desc Identifies the Project task ID and description
     *
     * @return $this
     */
    public function setTaskCdDesc($task_cd_desc)
    {
        $this->container['task_cd_desc'] = $task_cd_desc;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the document.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets visible_in_ap
     *
     * @return bool
     */
    public function getVisibleInAp()
    {
        return $this->container['visible_in_ap'];
    }

    /**
     * Sets visible_in_ap
     *
     * @param bool $visible_in_ap If the project task is visible in the Supplier ledger
     *
     * @return $this
     */
    public function setVisibleInAp($visible_in_ap)
    {
        $this->container['visible_in_ap'] = $visible_in_ap;

        return $this;
    }

    /**
     * Gets visible_in_ar
     *
     * @return bool
     */
    public function getVisibleInAr()
    {
        return $this->container['visible_in_ar'];
    }

    /**
     * Sets visible_in_ar
     *
     * @param bool $visible_in_ar If the project task is visible in the Customer ledger
     *
     * @return $this
     */
    public function setVisibleInAr($visible_in_ar)
    {
        $this->container['visible_in_ar'] = $visible_in_ar;

        return $this;
    }

    /**
     * Gets visible_in_ca
     *
     * @return bool
     */
    public function getVisibleInCa()
    {
        return $this->container['visible_in_ca'];
    }

    /**
     * Sets visible_in_ca
     *
     * @param bool $visible_in_ca If the project task is visible in the Cash management workspace
     *
     * @return $this
     */
    public function setVisibleInCa($visible_in_ca)
    {
        $this->container['visible_in_ca'] = $visible_in_ca;

        return $this;
    }

    /**
     * Gets visible_in_cr
     *
     * @return bool
     */
    public function getVisibleInCr()
    {
        return $this->container['visible_in_cr'];
    }

    /**
     * Sets visible_in_cr
     *
     * @param bool $visible_in_cr If the project task is visible in the CRM workspace
     *
     * @return $this
     */
    public function setVisibleInCr($visible_in_cr)
    {
        $this->container['visible_in_cr'] = $visible_in_cr;

        return $this;
    }

    /**
     * Gets visible_in_ea
     *
     * @return bool
     */
    public function getVisibleInEa()
    {
        return $this->container['visible_in_ea'];
    }

    /**
     * Sets visible_in_ea
     *
     * @param bool $visible_in_ea If the project task is visible in the Expense workspace
     *
     * @return $this
     */
    public function setVisibleInEa($visible_in_ea)
    {
        $this->container['visible_in_ea'] = $visible_in_ea;

        return $this;
    }

    /**
     * Gets visible_in_gl
     *
     * @return bool
     */
    public function getVisibleInGl()
    {
        return $this->container['visible_in_gl'];
    }

    /**
     * Sets visible_in_gl
     *
     * @param bool $visible_in_gl If the project task is visible in the General ledger workspace
     *
     * @return $this
     */
    public function setVisibleInGl($visible_in_gl)
    {
        $this->container['visible_in_gl'] = $visible_in_gl;

        return $this;
    }

    /**
     * Gets visible_in_in
     *
     * @return bool
     */
    public function getVisibleInIn()
    {
        return $this->container['visible_in_in'];
    }

    /**
     * Sets visible_in_in
     *
     * @param bool $visible_in_in If the project task is visible in the Inventory workspace
     *
     * @return $this
     */
    public function setVisibleInIn($visible_in_in)
    {
        $this->container['visible_in_in'] = $visible_in_in;

        return $this;
    }

    /**
     * Gets visible_in_po
     *
     * @return bool
     */
    public function getVisibleInPo()
    {
        return $this->container['visible_in_po'];
    }

    /**
     * Sets visible_in_po
     *
     * @param bool $visible_in_po If the project task is visible in the Purchases workspace
     *
     * @return $this
     */
    public function setVisibleInPo($visible_in_po)
    {
        $this->container['visible_in_po'] = $visible_in_po;

        return $this;
    }

    /**
     * Gets visible_in_so
     *
     * @return bool
     */
    public function getVisibleInSo()
    {
        return $this->container['visible_in_so'];
    }

    /**
     * Sets visible_in_so
     *
     * @param bool $visible_in_so If the project task is visible in the Sales workspace
     *
     * @return $this
     */
    public function setVisibleInSo($visible_in_so)
    {
        $this->container['visible_in_so'] = $visible_in_so;

        return $this;
    }

    /**
     * Gets visible_in_ta
     *
     * @return bool
     */
    public function getVisibleInTa()
    {
        return $this->container['visible_in_ta'];
    }

    /**
     * Sets visible_in_ta
     *
     * @param bool $visible_in_ta If the project task is visible in the Time entities workspace
     *
     * @return $this
     */
    public function setVisibleInTa($visible_in_ta)
    {
        $this->container['visible_in_ta'] = $visible_in_ta;

        return $this;
    }

    /**
     * Gets restricted_employee
     *
     * @return string
     */
    public function getRestrictedEmployee()
    {
        return $this->container['restricted_employee'];
    }

    /**
     * Sets restricted_employee
     *
     * @param string $restricted_employee Id of the employee where access restrictions apply
     *
     * @return $this
     */
    public function setRestrictedEmployee($restricted_employee)
    {
        $this->container['restricted_employee'] = $restricted_employee;

        return $this;
    }

    /**
     * Gets restricted_user
     *
     * @return int
     */
    public function getRestrictedUser()
    {
        return $this->container['restricted_user'];
    }

    /**
     * Sets restricted_user
     *
     * @param int $restricted_user Id of the Odp User where access restrictions apply
     *
     * @return $this
     */
    public function setRestrictedUser($restricted_user)
    {
        $this->container['restricted_user'] = $restricted_user;

        return $this;
    }

    /**
     * Gets greater_than_value
     *
     * @return string
     */
    public function getGreaterThanValue()
    {
        return $this->container['greater_than_value'];
    }

    /**
     * Sets greater_than_value
     *
     * @param string $greater_than_value Greater than value. The item which is the object for this, varies from API to API.
     *
     * @return $this
     */
    public function setGreaterThanValue($greater_than_value)
    {
        $this->container['greater_than_value'] = $greater_than_value;

        return $this;
    }

    /**
     * Gets number_to_read
     *
     * @return int
     */
    public function getNumberToRead()
    {
        return $this->container['number_to_read'];
    }

    /**
     * Sets number_to_read
     *
     * @param int $number_to_read This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
     *
     * @return $this
     */
    public function setNumberToRead($number_to_read)
    {
        $this->container['number_to_read'] = $number_to_read;

        return $this;
    }

    /**
     * Gets skip_records
     *
     * @return int
     */
    public function getSkipRecords()
    {
        return $this->container['skip_records'];
    }

    /**
     * Sets skip_records
     *
     * @param int $skip_records This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.
     *
     * @return $this
     */
    public function setSkipRecords($skip_records)
    {
        $this->container['skip_records'] = $skip_records;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return string
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets last_modified_date_time_condition
     *
     * @return string
     */
    public function getLastModifiedDateTimeCondition()
    {
        return $this->container['last_modified_date_time_condition'];
    }

    /**
     * Sets last_modified_date_time_condition
     *
     * @param string $last_modified_date_time_condition System retrieved information for state/condition.
     *
     * @return $this
     */
    public function setLastModifiedDateTimeCondition($last_modified_date_time_condition)
    {
        $this->container['last_modified_date_time_condition'] = $last_modified_date_time_condition;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param string $created_date_time Creation date and time.
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets created_date_time_condition
     *
     * @return string
     */
    public function getCreatedDateTimeCondition()
    {
        return $this->container['created_date_time_condition'];
    }

    /**
     * Sets created_date_time_condition
     *
     * @param string $created_date_time_condition System-retrieved information for state/condition
     *
     * @return $this
     */
    public function setCreatedDateTimeCondition($created_date_time_condition)
    {
        $this->container['created_date_time_condition'] = $created_date_time_condition;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number Pagination parameter. Page number.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size Pagination parameter. Number of items to be collected.
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


