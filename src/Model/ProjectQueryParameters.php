<?php
/**
 * ProjectQueryParameters
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
 * ProjectQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'system_template' => 'bool',
        'visible_in_ap' => 'bool',
        'start_date' => '\DateTime',
        'expand_attribute' => 'bool',
        'attributes' => 'string',
        'task_status' => 'string',
        'task_visible_in_ap' => 'bool',
        'task_visible_in_ar' => 'bool',
        'task_visible_in_ca' => 'bool',
        'task_visible_in_cr' => 'bool',
        'task_visible_in_ea' => 'bool',
        'task_visible_in_gl' => 'bool',
        'task_visible_in_in' => 'bool',
        'task_visible_in_po' => 'bool',
        'task_visible_in_so' => 'bool',
        'task_visible_in_ta' => 'bool',
        'non_project' => 'bool',
        'public_id' => 'string',
        'restricted_employee' => 'string',
        'restricted_user' => 'int',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'greater_than_value' => 'string',
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
        'status' => null,
        'system_template' => null,
        'visible_in_ap' => null,
        'start_date' => 'date-time',
        'expand_attribute' => null,
        'attributes' => null,
        'task_status' => null,
        'task_visible_in_ap' => null,
        'task_visible_in_ar' => null,
        'task_visible_in_ca' => null,
        'task_visible_in_cr' => null,
        'task_visible_in_ea' => null,
        'task_visible_in_gl' => null,
        'task_visible_in_in' => null,
        'task_visible_in_po' => null,
        'task_visible_in_so' => null,
        'task_visible_in_ta' => null,
        'non_project' => null,
        'public_id' => 'uuid',
        'restricted_employee' => null,
        'restricted_user' => 'int64',
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'greater_than_value' => null,
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
        'status' => 'status',
        'system_template' => 'systemTemplate',
        'visible_in_ap' => 'visibleInAP',
        'start_date' => 'startDate',
        'expand_attribute' => 'expandAttribute',
        'attributes' => 'attributes',
        'task_status' => 'taskStatus',
        'task_visible_in_ap' => 'taskVisibleInAp',
        'task_visible_in_ar' => 'taskVisibleInAr',
        'task_visible_in_ca' => 'taskVisibleInCa',
        'task_visible_in_cr' => 'taskVisibleInCr',
        'task_visible_in_ea' => 'taskVisibleInEa',
        'task_visible_in_gl' => 'taskVisibleInGl',
        'task_visible_in_in' => 'taskVisibleInIn',
        'task_visible_in_po' => 'taskVisibleInPo',
        'task_visible_in_so' => 'taskVisibleInSo',
        'task_visible_in_ta' => 'taskVisibleInTa',
        'non_project' => 'nonProject',
        'public_id' => 'publicId',
        'restricted_employee' => 'restrictedEmployee',
        'restricted_user' => 'restrictedUser',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'greater_than_value' => 'greaterThanValue',
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
        'status' => 'setStatus',
        'system_template' => 'setSystemTemplate',
        'visible_in_ap' => 'setVisibleInAp',
        'start_date' => 'setStartDate',
        'expand_attribute' => 'setExpandAttribute',
        'attributes' => 'setAttributes',
        'task_status' => 'setTaskStatus',
        'task_visible_in_ap' => 'setTaskVisibleInAp',
        'task_visible_in_ar' => 'setTaskVisibleInAr',
        'task_visible_in_ca' => 'setTaskVisibleInCa',
        'task_visible_in_cr' => 'setTaskVisibleInCr',
        'task_visible_in_ea' => 'setTaskVisibleInEa',
        'task_visible_in_gl' => 'setTaskVisibleInGl',
        'task_visible_in_in' => 'setTaskVisibleInIn',
        'task_visible_in_po' => 'setTaskVisibleInPo',
        'task_visible_in_so' => 'setTaskVisibleInSo',
        'task_visible_in_ta' => 'setTaskVisibleInTa',
        'non_project' => 'setNonProject',
        'public_id' => 'setPublicId',
        'restricted_employee' => 'setRestrictedEmployee',
        'restricted_user' => 'setRestrictedUser',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'greater_than_value' => 'setGreaterThanValue',
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
        'status' => 'getStatus',
        'system_template' => 'getSystemTemplate',
        'visible_in_ap' => 'getVisibleInAp',
        'start_date' => 'getStartDate',
        'expand_attribute' => 'getExpandAttribute',
        'attributes' => 'getAttributes',
        'task_status' => 'getTaskStatus',
        'task_visible_in_ap' => 'getTaskVisibleInAp',
        'task_visible_in_ar' => 'getTaskVisibleInAr',
        'task_visible_in_ca' => 'getTaskVisibleInCa',
        'task_visible_in_cr' => 'getTaskVisibleInCr',
        'task_visible_in_ea' => 'getTaskVisibleInEa',
        'task_visible_in_gl' => 'getTaskVisibleInGl',
        'task_visible_in_in' => 'getTaskVisibleInIn',
        'task_visible_in_po' => 'getTaskVisibleInPo',
        'task_visible_in_so' => 'getTaskVisibleInSo',
        'task_visible_in_ta' => 'getTaskVisibleInTa',
        'non_project' => 'getNonProject',
        'public_id' => 'getPublicId',
        'restricted_employee' => 'getRestrictedEmployee',
        'restricted_user' => 'getRestrictedUser',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'greater_than_value' => 'getGreaterThanValue',
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
    const STATUS_COMPLETED = 'Completed';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_ON_HOLD = 'OnHold';
    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const TASK_STATUS_PLANNED = 'Planned';
    const TASK_STATUS_ACTIVE = 'Active';
    const TASK_STATUS_CANCELLED = 'Cancelled';
    const TASK_STATUS_COMPLETED = 'Completed';
    

    
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
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_ON_HOLD,
            self::STATUS_PENDING_APPROVAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_PLANNED,
            self::TASK_STATUS_ACTIVE,
            self::TASK_STATUS_CANCELLED,
            self::TASK_STATUS_COMPLETED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['system_template'] = isset($data['system_template']) ? $data['system_template'] : null;
        $this->container['visible_in_ap'] = isset($data['visible_in_ap']) ? $data['visible_in_ap'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['expand_attribute'] = isset($data['expand_attribute']) ? $data['expand_attribute'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['task_status'] = isset($data['task_status']) ? $data['task_status'] : null;
        $this->container['task_visible_in_ap'] = isset($data['task_visible_in_ap']) ? $data['task_visible_in_ap'] : null;
        $this->container['task_visible_in_ar'] = isset($data['task_visible_in_ar']) ? $data['task_visible_in_ar'] : null;
        $this->container['task_visible_in_ca'] = isset($data['task_visible_in_ca']) ? $data['task_visible_in_ca'] : null;
        $this->container['task_visible_in_cr'] = isset($data['task_visible_in_cr']) ? $data['task_visible_in_cr'] : null;
        $this->container['task_visible_in_ea'] = isset($data['task_visible_in_ea']) ? $data['task_visible_in_ea'] : null;
        $this->container['task_visible_in_gl'] = isset($data['task_visible_in_gl']) ? $data['task_visible_in_gl'] : null;
        $this->container['task_visible_in_in'] = isset($data['task_visible_in_in']) ? $data['task_visible_in_in'] : null;
        $this->container['task_visible_in_po'] = isset($data['task_visible_in_po']) ? $data['task_visible_in_po'] : null;
        $this->container['task_visible_in_so'] = isset($data['task_visible_in_so']) ? $data['task_visible_in_so'] : null;
        $this->container['task_visible_in_ta'] = isset($data['task_visible_in_ta']) ? $data['task_visible_in_ta'] : null;
        $this->container['non_project'] = isset($data['non_project']) ? $data['non_project'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['restricted_employee'] = isset($data['restricted_employee']) ? $data['restricted_employee'] : null;
        $this->container['restricted_user'] = isset($data['restricted_user']) ? $data['restricted_user'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
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

        $allowedValues = $this->getTaskStatusAllowableValues();
        if (!is_null($this->container['task_status']) && !in_array($this->container['task_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'task_status', must be one of '%s'",
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
     * @param string $status Use drop down and select Status.
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
     * Gets system_template
     *
     * @return bool
     */
    public function getSystemTemplate()
    {
        return $this->container['system_template'];
    }

    /**
     * Sets system_template
     *
     * @param bool $system_template If the project is a template
     *
     * @return $this
     */
    public function setSystemTemplate($system_template)
    {
        $this->container['system_template'] = $system_template;

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
     * @param bool $visible_in_ap If the project is visible in AP
     *
     * @return $this
     */
    public function setVisibleInAp($visible_in_ap)
    {
        $this->container['visible_in_ap'] = $visible_in_ap;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Project???s start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expand_attribute
     *
     * @return bool
     */
    public function getExpandAttribute()
    {
        return $this->container['expand_attribute'];
    }

    /**
     * Sets expand_attribute
     *
     * @param bool $expand_attribute Expands project atributes
     *
     * @return $this
     */
    public function setExpandAttribute($expand_attribute)
    {
        $this->container['expand_attribute'] = $expand_attribute;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string $attributes Identifies the attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets task_status
     *
     * @return string
     */
    public function getTaskStatus()
    {
        return $this->container['task_status'];
    }

    /**
     * Sets task_status
     *
     * @param string $task_status Use drop down and select Status.
     *
     * @return $this
     */
    public function setTaskStatus($task_status)
    {
        $allowedValues = $this->getTaskStatusAllowableValues();
        if (!is_null($task_status) && !in_array($task_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'task_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['task_status'] = $task_status;

        return $this;
    }

    /**
     * Gets task_visible_in_ap
     *
     * @return bool
     */
    public function getTaskVisibleInAp()
    {
        return $this->container['task_visible_in_ap'];
    }

    /**
     * Sets task_visible_in_ap
     *
     * @param bool $task_visible_in_ap If the project task is visible in the Supplier ledger
     *
     * @return $this
     */
    public function setTaskVisibleInAp($task_visible_in_ap)
    {
        $this->container['task_visible_in_ap'] = $task_visible_in_ap;

        return $this;
    }

    /**
     * Gets task_visible_in_ar
     *
     * @return bool
     */
    public function getTaskVisibleInAr()
    {
        return $this->container['task_visible_in_ar'];
    }

    /**
     * Sets task_visible_in_ar
     *
     * @param bool $task_visible_in_ar If the project task is visible in the Customer ledger
     *
     * @return $this
     */
    public function setTaskVisibleInAr($task_visible_in_ar)
    {
        $this->container['task_visible_in_ar'] = $task_visible_in_ar;

        return $this;
    }

    /**
     * Gets task_visible_in_ca
     *
     * @return bool
     */
    public function getTaskVisibleInCa()
    {
        return $this->container['task_visible_in_ca'];
    }

    /**
     * Sets task_visible_in_ca
     *
     * @param bool $task_visible_in_ca If the project task is visible in the Cash management workspace
     *
     * @return $this
     */
    public function setTaskVisibleInCa($task_visible_in_ca)
    {
        $this->container['task_visible_in_ca'] = $task_visible_in_ca;

        return $this;
    }

    /**
     * Gets task_visible_in_cr
     *
     * @return bool
     */
    public function getTaskVisibleInCr()
    {
        return $this->container['task_visible_in_cr'];
    }

    /**
     * Sets task_visible_in_cr
     *
     * @param bool $task_visible_in_cr If the project task is visible in the CRM workspace
     *
     * @return $this
     */
    public function setTaskVisibleInCr($task_visible_in_cr)
    {
        $this->container['task_visible_in_cr'] = $task_visible_in_cr;

        return $this;
    }

    /**
     * Gets task_visible_in_ea
     *
     * @return bool
     */
    public function getTaskVisibleInEa()
    {
        return $this->container['task_visible_in_ea'];
    }

    /**
     * Sets task_visible_in_ea
     *
     * @param bool $task_visible_in_ea If the project task is visible in the Expense workspace
     *
     * @return $this
     */
    public function setTaskVisibleInEa($task_visible_in_ea)
    {
        $this->container['task_visible_in_ea'] = $task_visible_in_ea;

        return $this;
    }

    /**
     * Gets task_visible_in_gl
     *
     * @return bool
     */
    public function getTaskVisibleInGl()
    {
        return $this->container['task_visible_in_gl'];
    }

    /**
     * Sets task_visible_in_gl
     *
     * @param bool $task_visible_in_gl If the project task is visible in the General ledger workspace
     *
     * @return $this
     */
    public function setTaskVisibleInGl($task_visible_in_gl)
    {
        $this->container['task_visible_in_gl'] = $task_visible_in_gl;

        return $this;
    }

    /**
     * Gets task_visible_in_in
     *
     * @return bool
     */
    public function getTaskVisibleInIn()
    {
        return $this->container['task_visible_in_in'];
    }

    /**
     * Sets task_visible_in_in
     *
     * @param bool $task_visible_in_in If the project task is visible in the Inventory workspace
     *
     * @return $this
     */
    public function setTaskVisibleInIn($task_visible_in_in)
    {
        $this->container['task_visible_in_in'] = $task_visible_in_in;

        return $this;
    }

    /**
     * Gets task_visible_in_po
     *
     * @return bool
     */
    public function getTaskVisibleInPo()
    {
        return $this->container['task_visible_in_po'];
    }

    /**
     * Sets task_visible_in_po
     *
     * @param bool $task_visible_in_po If the project task is visible in the Purchases workspace
     *
     * @return $this
     */
    public function setTaskVisibleInPo($task_visible_in_po)
    {
        $this->container['task_visible_in_po'] = $task_visible_in_po;

        return $this;
    }

    /**
     * Gets task_visible_in_so
     *
     * @return bool
     */
    public function getTaskVisibleInSo()
    {
        return $this->container['task_visible_in_so'];
    }

    /**
     * Sets task_visible_in_so
     *
     * @param bool $task_visible_in_so If the project task is visible in the Sales workspace
     *
     * @return $this
     */
    public function setTaskVisibleInSo($task_visible_in_so)
    {
        $this->container['task_visible_in_so'] = $task_visible_in_so;

        return $this;
    }

    /**
     * Gets task_visible_in_ta
     *
     * @return bool
     */
    public function getTaskVisibleInTa()
    {
        return $this->container['task_visible_in_ta'];
    }

    /**
     * Sets task_visible_in_ta
     *
     * @param bool $task_visible_in_ta If the project task is visible in the Time entities workspace
     *
     * @return $this
     */
    public function setTaskVisibleInTa($task_visible_in_ta)
    {
        $this->container['task_visible_in_ta'] = $task_visible_in_ta;

        return $this;
    }

    /**
     * Gets non_project
     *
     * @return bool
     */
    public function getNonProject()
    {
        return $this->container['non_project'];
    }

    /**
     * Sets non_project
     *
     * @param bool $non_project Set to true to return the non-project.
     *
     * @return $this
     */
    public function setNonProject($non_project)
    {
        $this->container['non_project'] = $non_project;

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
     * @param string $public_id Identifies the Project by its publicId
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

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
     * @param string $restricted_employee ID of the employee where access restrictions apply
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
     * @param int $restricted_user Id of the odp user where access restrictions apply
     *
     * @return $this
     */
    public function setRestrictedUser($restricted_user)
    {
        $this->container['restricted_user'] = $restricted_user;

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


