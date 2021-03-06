<?php
/**
 * EmployeeDto
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
 * EmployeeDto Class Doc Comment
 *
 * @category Class
 * @description This class represents an Employee in EmployeeController. Used for getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_user_id' => 'string',
        'employee_id' => 'int',
        'employee_number' => 'string',
        'employee_name' => 'string',
        'status' => 'string',
        'department' => 'string',
        'contact' => 'object',
        'address' => 'object',
        'last_modified_date_time' => '\DateTime',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_user_id' => 'uuid',
        'employee_id' => 'int32',
        'employee_number' => null,
        'employee_name' => null,
        'status' => null,
        'department' => null,
        'contact' => null,
        'address' => null,
        'last_modified_date_time' => 'date-time',
        'error_info' => null,
        'metadata' => null
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
        'employee_user_id' => 'employeeUserId',
        'employee_id' => 'employeeId',
        'employee_number' => 'employeeNumber',
        'employee_name' => 'employeeName',
        'status' => 'status',
        'department' => 'department',
        'contact' => 'contact',
        'address' => 'address',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_user_id' => 'setEmployeeUserId',
        'employee_id' => 'setEmployeeId',
        'employee_number' => 'setEmployeeNumber',
        'employee_name' => 'setEmployeeName',
        'status' => 'setStatus',
        'department' => 'setDepartment',
        'contact' => 'setContact',
        'address' => 'setAddress',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_user_id' => 'getEmployeeUserId',
        'employee_id' => 'getEmployeeId',
        'employee_number' => 'getEmployeeNumber',
        'employee_name' => 'getEmployeeName',
        'status' => 'getStatus',
        'department' => 'getDepartment',
        'contact' => 'getContact',
        'address' => 'getAddress',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'error_info' => 'getErrorInfo',
        'metadata' => 'getMetadata'
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

    const STATUS_ACTIVE = 'Active';
    const STATUS_ON_HOLD = 'OnHold';
    const STATUS_HOLD_PAYMENTS = 'HoldPayments';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ONE_TIME = 'OneTime';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ON_HOLD,
            self::STATUS_HOLD_PAYMENTS,
            self::STATUS_INACTIVE,
            self::STATUS_ONE_TIME,
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
        $this->container['employee_user_id'] = isset($data['employee_user_id']) ? $data['employee_user_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employee_number'] = isset($data['employee_number']) ? $data['employee_number'] : null;
        $this->container['employee_name'] = isset($data['employee_name']) ? $data['employee_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['error_info'] = isset($data['error_info']) ? $data['error_info'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * Gets employee_user_id
     *
     * @return string
     */
    public function getEmployeeUserId()
    {
        return $this->container['employee_user_id'];
    }

    /**
     * Sets employee_user_id
     *
     * @param string $employee_user_id Employee internal user ID. This is the ID of the user linked to the employee
     *
     * @return $this
     */
    public function setEmployeeUserId($employee_user_id)
    {
        $this->container['employee_user_id'] = $employee_user_id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id Mandatory field: The top part &gt; Employee ID* &gt; The unique identifier, which is assigned to the employee in accordance with the configuration of the EMPLOYEE segmented key.
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets employee_number
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->container['employee_number'];
    }

    /**
     * Sets employee_number
     *
     * @param string $employee_number General information tab &gt; Employee settings section &gt; Employee ref. no. &gt; A reference number for the employee.
     *
     * @return $this
     */
    public function setEmployeeNumber($employee_number)
    {
        $this->container['employee_number'] = $employee_number;

        return $this;
    }

    /**
     * Gets employee_name
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string $employee_name The top part &gt; Employee name &gt; The name of this employee.
     *
     * @return $this
     */
    public function setEmployeeName($employee_name)
    {
        $this->container['employee_name'] = $employee_name;

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
     * @param string $status Mandatory field: The top part &gt; Status &gt; The status of the employee. The following options are available: Active, On hold, Hold payments, Inactive, One-time.
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
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department Mandatory field: General information tab &gt; Employee section &gt; Department* &gt; The department the employee works for.
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return object
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param object $contact General information tab &gt; Contact section &gt;
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address
     *
     * @return object
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param object $address General information tab &gt; Address info section &gt;
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime $last_modified_date_time last_modified_date_time
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets error_info
     *
     * @return string
     */
    public function getErrorInfo()
    {
        return $this->container['error_info'];
    }

    /**
     * Sets error_info
     *
     * @param string $error_info error_info
     *
     * @return $this
     */
    public function setErrorInfo($error_info)
    {
        $this->container['error_info'] = $error_info;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


