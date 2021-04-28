<?php
/**
 * DepartmentDto
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
 * DepartmentDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DepartmentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DepartmentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'department_id' => 'string',
        'public_id' => 'string',
        'description' => 'string',
        'expense_account' => 'object',
        'expense_subaccount' => 'object',
        'last_modified_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'department_id' => null,
        'public_id' => 'uuid',
        'description' => null,
        'expense_account' => null,
        'expense_subaccount' => null,
        'last_modified_date_time' => 'date-time'
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
        'department_id' => 'departmentId',
        'public_id' => 'publicId',
        'description' => 'description',
        'expense_account' => 'expenseAccount',
        'expense_subaccount' => 'expenseSubaccount',
        'last_modified_date_time' => 'lastModifiedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'department_id' => 'setDepartmentId',
        'public_id' => 'setPublicId',
        'description' => 'setDescription',
        'expense_account' => 'setExpenseAccount',
        'expense_subaccount' => 'setExpenseSubaccount',
        'last_modified_date_time' => 'setLastModifiedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'department_id' => 'getDepartmentId',
        'public_id' => 'getPublicId',
        'description' => 'getDescription',
        'expense_account' => 'getExpenseAccount',
        'expense_subaccount' => 'getExpenseSubaccount',
        'last_modified_date_time' => 'getLastModifiedDateTime'
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
        $this->container['department_id'] = isset($data['department_id']) ? $data['department_id'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expense_account'] = isset($data['expense_account']) ? $data['expense_account'] : null;
        $this->container['expense_subaccount'] = isset($data['expense_subaccount']) ? $data['expense_subaccount'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets department_id
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     *
     * @param string $department_id Mandatory field : The table &gt; Department ID* &gt; The unique identifier for the department.
     *
     * @return $this
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

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
     * @param string $public_id Identifies the Department by its publicId
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

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
     * @param string $description The table &gt; Description &gt; A detailed description of the department.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expense_account
     *
     * @return object
     */
    public function getExpenseAccount()
    {
        return $this->container['expense_account'];
    }

    /**
     * Sets expense_account
     *
     * @param object $expense_account The table &gt; Expense account &gt; The expense account to be used for recording department-related expenses.
     *
     * @return $this
     */
    public function setExpenseAccount($expense_account)
    {
        $this->container['expense_account'] = $expense_account;

        return $this;
    }

    /**
     * Gets expense_subaccount
     *
     * @return object
     */
    public function getExpenseSubaccount()
    {
        return $this->container['expense_subaccount'];
    }

    /**
     * Sets expense_subaccount
     *
     * @param object $expense_subaccount The table &gt; Expense sub. &gt; The subaccount to be used for recording department related expenses.
     *
     * @return $this
     */
    public function setExpenseSubaccount($expense_subaccount)
    {
        $this->container['expense_subaccount'] = $expense_subaccount;

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
     * @param \DateTime $last_modified_date_time A system generated date/time that indicates the last change for the department.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

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


