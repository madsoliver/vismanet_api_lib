<?php
/**
 * BranchQueryParameters
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
 * BranchQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BranchQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BranchQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'greater_than_value' => 'string',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'order_by' => 'string',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string',
        'expand_bank_settings' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'greater_than_value' => null,
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'order_by' => null,
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null,
        'expand_bank_settings' => null
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
        'greater_than_value' => 'greaterThanValue',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'order_by' => 'orderBy',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition',
        'expand_bank_settings' => 'expandBankSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'greater_than_value' => 'setGreaterThanValue',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'order_by' => 'setOrderBy',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition',
        'expand_bank_settings' => 'setExpandBankSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'greater_than_value' => 'getGreaterThanValue',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'order_by' => 'getOrderBy',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition',
        'expand_bank_settings' => 'getExpandBankSettings'
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
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
        $this->container['expand_bank_settings'] = isset($data['expand_bank_settings']) ? $data['expand_bank_settings'] : null;
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
     * @param string $greater_than_value Filter by branch ID greater than.
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
     * @param int $number_to_read This field has been deprecated and will be removed in future versions.
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
     * @param int $skip_records This field has been deprecated and will be removed in future versions.
     *
     * @return $this
     */
    public function setSkipRecords($skip_records)
    {
        $this->container['skip_records'] = $skip_records;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param string $order_by Order by Branch ID
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

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
     * Gets expand_bank_settings
     *
     * @return bool
     */
    public function getExpandBankSettings()
    {
        return $this->container['expand_bank_settings'];
    }

    /**
     * Sets expand_bank_settings
     *
     * @param bool $expand_bank_settings True to get payment settings for Branch.
     *
     * @return $this
     */
    public function setExpandBankSettings($expand_bank_settings)
    {
        $this->container['expand_bank_settings'] = $expand_bank_settings;

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


