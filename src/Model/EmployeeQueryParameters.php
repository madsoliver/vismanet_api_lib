<?php
/**
 * EmployeeQueryParameters
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
 * EmployeeQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linked_to_user' => 'bool',
        'greater_than_value' => 'string',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'order_by' => 'string',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string',
        'page_number' => 'int',
        'page_size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linked_to_user' => null,
        'greater_than_value' => null,
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'order_by' => null,
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null,
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
        'linked_to_user' => 'linkedToUser',
        'greater_than_value' => 'greaterThanValue',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'order_by' => 'orderBy',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_to_user' => 'setLinkedToUser',
        'greater_than_value' => 'setGreaterThanValue',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'order_by' => 'setOrderBy',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_to_user' => 'getLinkedToUser',
        'greater_than_value' => 'getGreaterThanValue',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'order_by' => 'getOrderBy',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition',
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
        $this->container['linked_to_user'] = isset($data['linked_to_user']) ? $data['linked_to_user'] : null;
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
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
     * Gets linked_to_user
     *
     * @return bool
     */
    public function getLinkedToUser()
    {
        return $this->container['linked_to_user'];
    }

    /**
     * Sets linked_to_user
     *
     * @param bool $linked_to_user If the employee is linked to a user.
     *
     * @return $this
     */
    public function setLinkedToUser($linked_to_user)
    {
        $this->container['linked_to_user'] = $linked_to_user;

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
     * @param string $greater_than_value Greater-than value. The item which is the object for this, varies from API to API.
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
     * @param string $order_by This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result.
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
     * @param string $last_modified_date_time System-generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
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
     * @param string $last_modified_date_time_condition System-retrieved information for state/condition.
     *
     * @return $this
     */
    public function setLastModifiedDateTimeCondition($last_modified_date_time_condition)
    {
        $this->container['last_modified_date_time_condition'] = $last_modified_date_time_condition;

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


