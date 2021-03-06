<?php
/**
 * DtoSegmentValue
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
 * DtoSegmentValue Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DtoSegmentValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DtoSegmentValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'segment_id' => 'int',
        'value_id' => 'string',
        'description' => 'string',
        'public_id' => 'string',
        'active' => 'bool',
        'time_stamp' => 'string',
        'last_modified' => '\DateTime',
        'mapped_seg_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'segment_id' => 'int32',
        'value_id' => null,
        'description' => null,
        'public_id' => 'uuid',
        'active' => null,
        'time_stamp' => null,
        'last_modified' => 'date-time',
        'mapped_seg_value' => null
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
        'segment_id' => 'segmentId',
        'value_id' => 'valueId',
        'description' => 'description',
        'public_id' => 'publicId',
        'active' => 'active',
        'time_stamp' => 'timeStamp',
        'last_modified' => 'lastModified',
        'mapped_seg_value' => 'mappedSegValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'segment_id' => 'setSegmentId',
        'value_id' => 'setValueId',
        'description' => 'setDescription',
        'public_id' => 'setPublicId',
        'active' => 'setActive',
        'time_stamp' => 'setTimeStamp',
        'last_modified' => 'setLastModified',
        'mapped_seg_value' => 'setMappedSegValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'segment_id' => 'getSegmentId',
        'value_id' => 'getValueId',
        'description' => 'getDescription',
        'public_id' => 'getPublicId',
        'active' => 'getActive',
        'time_stamp' => 'getTimeStamp',
        'last_modified' => 'getLastModified',
        'mapped_seg_value' => 'getMappedSegValue'
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
        $this->container['segment_id'] = isset($data['segment_id']) ? $data['segment_id'] : null;
        $this->container['value_id'] = isset($data['value_id']) ? $data['value_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['time_stamp'] = isset($data['time_stamp']) ? $data['time_stamp'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['mapped_seg_value'] = isset($data['mapped_seg_value']) ? $data['mapped_seg_value'] : null;
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
     * Gets segment_id
     *
     * @return int
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     *
     * @param int $segment_id The top part &gt; Segment ID &gt; The system-generated number representing the order of the segment in the segmented key.
     *
     * @return $this
     */
    public function setSegmentId($segment_id)
    {
        $this->container['segment_id'] = $segment_id;

        return $this;
    }

    /**
     * Gets value_id
     *
     * @return string
     */
    public function getValueId()
    {
        return $this->container['value_id'];
    }

    /**
     * Sets value_id
     *
     * @param string $value_id The table &gt; Value &gt; The string that is the value of the selected segment.
     *
     * @return $this
     */
    public function setValueId($value_id)
    {
        $this->container['value_id'] = $value_id;

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
     * @param string $description The table &gt; Description &gt; The user-defined segment description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $public_id public_id
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

        return $this;
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
     * @param bool $active The table &gt; Active &gt; A check box that indicates (if selected) that the value is active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets time_stamp
     *
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->container['time_stamp'];
    }

    /**
     * Sets time_stamp
     *
     * @param string $time_stamp time_stamp
     *
     * @return $this
     */
    public function setTimeStamp($time_stamp)
    {
        $this->container['time_stamp'] = $time_stamp;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets mapped_seg_value
     *
     * @return string
     */
    public function getMappedSegValue()
    {
        return $this->container['mapped_seg_value'];
    }

    /**
     * Sets mapped_seg_value
     *
     * @param string $mapped_seg_value mapped_seg_value
     *
     * @return $this
     */
    public function setMappedSegValue($mapped_seg_value)
    {
        $this->container['mapped_seg_value'] = $mapped_seg_value;

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


