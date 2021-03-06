<?php
/**
 * TimeCardSummaryUpdateDto
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
 * TimeCardSummaryUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeCardSummaryUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeCardSummaryUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'line_number' => 'object',
        'earning_type' => 'object',
        'project' => 'object',
        'project_task' => 'object',
        'mon' => 'object',
        'tue' => 'object',
        'wed' => 'object',
        'thu' => 'object',
        'fri' => 'object',
        'sat' => 'object',
        'sun' => 'object',
        'invoiceable' => 'object',
        'description' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'line_number' => null,
        'earning_type' => null,
        'project' => null,
        'project_task' => null,
        'mon' => null,
        'tue' => null,
        'wed' => null,
        'thu' => null,
        'fri' => null,
        'sat' => null,
        'sun' => null,
        'invoiceable' => null,
        'description' => null
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
        'operation' => 'operation',
        'line_number' => 'lineNumber',
        'earning_type' => 'earningType',
        'project' => 'project',
        'project_task' => 'projectTask',
        'mon' => 'mon',
        'tue' => 'tue',
        'wed' => 'wed',
        'thu' => 'thu',
        'fri' => 'fri',
        'sat' => 'sat',
        'sun' => 'sun',
        'invoiceable' => 'invoiceable',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'line_number' => 'setLineNumber',
        'earning_type' => 'setEarningType',
        'project' => 'setProject',
        'project_task' => 'setProjectTask',
        'mon' => 'setMon',
        'tue' => 'setTue',
        'wed' => 'setWed',
        'thu' => 'setThu',
        'fri' => 'setFri',
        'sat' => 'setSat',
        'sun' => 'setSun',
        'invoiceable' => 'setInvoiceable',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'line_number' => 'getLineNumber',
        'earning_type' => 'getEarningType',
        'project' => 'getProject',
        'project_task' => 'getProjectTask',
        'mon' => 'getMon',
        'tue' => 'getTue',
        'wed' => 'getWed',
        'thu' => 'getThu',
        'fri' => 'getFri',
        'sat' => 'getSat',
        'sun' => 'getSun',
        'invoiceable' => 'getInvoiceable',
        'description' => 'getDescription'
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

    const OPERATION_INSERT = 'Insert';
    const OPERATION_UPDATE = 'Update';
    const OPERATION_DELETE = 'Delete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_INSERT,
            self::OPERATION_UPDATE,
            self::OPERATION_DELETE,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['earning_type'] = isset($data['earning_type']) ? $data['earning_type'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_task'] = isset($data['project_task']) ? $data['project_task'] : null;
        $this->container['mon'] = isset($data['mon']) ? $data['mon'] : null;
        $this->container['tue'] = isset($data['tue']) ? $data['tue'] : null;
        $this->container['wed'] = isset($data['wed']) ? $data['wed'] : null;
        $this->container['thu'] = isset($data['thu']) ? $data['thu'] : null;
        $this->container['fri'] = isset($data['fri']) ? $data['fri'] : null;
        $this->container['sat'] = isset($data['sat']) ? $data['sat'] : null;
        $this->container['sun'] = isset($data['sun']) ? $data['sun'] : null;
        $this->container['invoiceable'] = isset($data['invoiceable']) ? $data['invoiceable'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return object
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param object $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets earning_type
     *
     * @return object
     */
    public function getEarningType()
    {
        return $this->container['earning_type'];
    }

    /**
     * Sets earning_type
     *
     * @param object $earning_type The type of the work time spent by the employee
     *
     * @return $this
     */
    public function setEarningType($earning_type)
    {
        $this->container['earning_type'] = $earning_type;

        return $this;
    }

    /**
     * Gets project
     *
     * @return object
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param object $project The project that the employee worked on.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_task
     *
     * @return object
     */
    public function getProjectTask()
    {
        return $this->container['project_task'];
    }

    /**
     * Sets project_task
     *
     * @param object $project_task The project task that the employee worked on.
     *
     * @return $this
     */
    public function setProjectTask($project_task)
    {
        $this->container['project_task'] = $project_task;

        return $this;
    }

    /**
     * Gets mon
     *
     * @return object
     */
    public function getMon()
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param object $mon The work time reported for Monday, including overtime.
     *
     * @return $this
     */
    public function setMon($mon)
    {
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return object
     */
    public function getTue()
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param object $tue The work time reported for Tuesday, including overtime.
     *
     * @return $this
     */
    public function setTue($tue)
    {
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return object
     */
    public function getWed()
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param object $wed The work time reported for Wednesday, including overtime.
     *
     * @return $this
     */
    public function setWed($wed)
    {
        $this->container['wed'] = $wed;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return object
     */
    public function getThu()
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param object $thu The work time reported for Thursday, including overtime.
     *
     * @return $this
     */
    public function setThu($thu)
    {
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return object
     */
    public function getFri()
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param object $fri The work time reported for Friday, including overtime.
     *
     * @return $this
     */
    public function setFri($fri)
    {
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return object
     */
    public function getSat()
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param object $sat The work time reported for Saturday, including overtime.
     *
     * @return $this
     */
    public function setSat($sat)
    {
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return object
     */
    public function getSun()
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param object $sun The work time reported for Sunday, including overtime.
     *
     * @return $this
     */
    public function setSun($sun)
    {
        $this->container['sun'] = $sun;

        return $this;
    }

    /**
     * Gets invoiceable
     *
     * @return object
     */
    public function getInvoiceable()
    {
        return $this->container['invoiceable'];
    }

    /**
     * Sets invoiceable
     *
     * @param object $invoiceable A check box that you select to indicate that these work hours are invoiceable.
     *
     * @return $this
     */
    public function setInvoiceable($invoiceable)
    {
        $this->container['invoiceable'] = $invoiceable;

        return $this;
    }

    /**
     * Gets description
     *
     * @return object
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param object $description The description of the reported work hours.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


