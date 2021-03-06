<?php
/**
 * AccountQueryParameters
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
 * AccountQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'greater_than_value' => 'string',
        'public_code' => 'int',
        'external_code1' => 'string',
        'external_code2' => 'string',
        'analysis_code' => 'string',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'greater_than_value' => null,
        'public_code' => 'int32',
        'external_code1' => null,
        'external_code2' => null,
        'analysis_code' => null,
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null
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
        'active' => 'active',
        'greater_than_value' => 'greaterThanValue',
        'public_code' => 'publicCode',
        'external_code1' => 'externalCode1',
        'external_code2' => 'externalCode2',
        'analysis_code' => 'analysisCode',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'greater_than_value' => 'setGreaterThanValue',
        'public_code' => 'setPublicCode',
        'external_code1' => 'setExternalCode1',
        'external_code2' => 'setExternalCode2',
        'analysis_code' => 'setAnalysisCode',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'greater_than_value' => 'getGreaterThanValue',
        'public_code' => 'getPublicCode',
        'external_code1' => 'getExternalCode1',
        'external_code2' => 'getExternalCode2',
        'analysis_code' => 'getAnalysisCode',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
        $this->container['public_code'] = isset($data['public_code']) ? $data['public_code'] : null;
        $this->container['external_code1'] = isset($data['external_code1']) ? $data['external_code1'] : null;
        $this->container['external_code2'] = isset($data['external_code2']) ? $data['external_code2'] : null;
        $this->container['analysis_code'] = isset($data['analysis_code']) ? $data['analysis_code'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Set to True to select active accounts.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param string $greater_than_value Enter the from-value for Account no.
     *
     * @return $this
     */
    public function setGreaterThanValue($greater_than_value)
    {
        $this->container['greater_than_value'] = $greater_than_value;

        return $this;
    }

    /**
     * Gets public_code
     *
     * @return int
     */
    public function getPublicCode()
    {
        return $this->container['public_code'];
    }

    /**
     * Sets public_code
     *
     * @param int $public_code Filter by the Public code 1, authorities mapped code to the account.
     *
     * @return $this
     */
    public function setPublicCode($public_code)
    {
        $this->container['public_code'] = $public_code;

        return $this;
    }

    /**
     * Gets external_code1
     *
     * @return string
     */
    public function getExternalCode1()
    {
        return $this->container['external_code1'];
    }

    /**
     * Sets external_code1
     *
     * @param string $external_code1 Filter by External code 1 (field used for sorting and inquiries.)
     *
     * @return $this
     */
    public function setExternalCode1($external_code1)
    {
        $this->container['external_code1'] = $external_code1;

        return $this;
    }

    /**
     * Gets external_code2
     *
     * @return string
     */
    public function getExternalCode2()
    {
        return $this->container['external_code2'];
    }

    /**
     * Sets external_code2
     *
     * @param string $external_code2 Filter by External code 2 (field used for sorting and inquiries.)
     *
     * @return $this
     */
    public function setExternalCode2($external_code2)
    {
        $this->container['external_code2'] = $external_code2;

        return $this;
    }

    /**
     * Gets analysis_code
     *
     * @return string
     */
    public function getAnalysisCode()
    {
        return $this->container['analysis_code'];
    }

    /**
     * Sets analysis_code
     *
     * @param string $analysis_code Filter by Analysis code (field used for sorting and inquiries.)
     *
     * @return $this
     */
    public function setAnalysisCode($analysis_code)
    {
        $this->container['analysis_code'] = $analysis_code;

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
     * @param string $last_modified_date_time System generated value for last modification of record. Use format: YYYY-MM-DD HH:MM (date and time) to filter by date
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
     * @param string $last_modified_date_time_condition Values to be used for filtering lastModifiedDateTime value.
     *
     * @return $this
     */
    public function setLastModifiedDateTimeCondition($last_modified_date_time_condition)
    {
        $this->container['last_modified_date_time_condition'] = $last_modified_date_time_condition;

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


