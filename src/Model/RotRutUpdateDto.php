<?php
/**
 * RotRutUpdateDto
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
 * RotRutUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RotRutUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RotRutUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distributed_automaticaly' => 'object',
        'type' => 'object',
        'appartment' => 'object',
        'estate' => 'object',
        'organization_nbr' => 'object',
        'distribution' => '\Ekstralys\VismaNetApi\Model\RotRutDistributionUpdateDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distributed_automaticaly' => null,
        'type' => null,
        'appartment' => null,
        'estate' => null,
        'organization_nbr' => null,
        'distribution' => null
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
        'distributed_automaticaly' => 'distributedAutomaticaly',
        'type' => 'type',
        'appartment' => 'appartment',
        'estate' => 'estate',
        'organization_nbr' => 'organizationNbr',
        'distribution' => 'distribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distributed_automaticaly' => 'setDistributedAutomaticaly',
        'type' => 'setType',
        'appartment' => 'setAppartment',
        'estate' => 'setEstate',
        'organization_nbr' => 'setOrganizationNbr',
        'distribution' => 'setDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distributed_automaticaly' => 'getDistributedAutomaticaly',
        'type' => 'getType',
        'appartment' => 'getAppartment',
        'estate' => 'getEstate',
        'organization_nbr' => 'getOrganizationNbr',
        'distribution' => 'getDistribution'
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
        $this->container['distributed_automaticaly'] = isset($data['distributed_automaticaly']) ? $data['distributed_automaticaly'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['appartment'] = isset($data['appartment']) ? $data['appartment'] : null;
        $this->container['estate'] = isset($data['estate']) ? $data['estate'] : null;
        $this->container['organization_nbr'] = isset($data['organization_nbr']) ? $data['organization_nbr'] : null;
        $this->container['distribution'] = isset($data['distribution']) ? $data['distribution'] : null;
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
     * Gets distributed_automaticaly
     *
     * @return object
     */
    public function getDistributedAutomaticaly()
    {
        return $this->container['distributed_automaticaly'];
    }

    /**
     * Sets distributed_automaticaly
     *
     * @param object $distributed_automaticaly distributed_automaticaly
     *
     * @return $this
     */
    public function setDistributedAutomaticaly($distributed_automaticaly)
    {
        $this->container['distributed_automaticaly'] = $distributed_automaticaly;

        return $this;
    }

    /**
     * Gets type
     *
     * @return object
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param object $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets appartment
     *
     * @return object
     */
    public function getAppartment()
    {
        return $this->container['appartment'];
    }

    /**
     * Sets appartment
     *
     * @param object $appartment appartment
     *
     * @return $this
     */
    public function setAppartment($appartment)
    {
        $this->container['appartment'] = $appartment;

        return $this;
    }

    /**
     * Gets estate
     *
     * @return object
     */
    public function getEstate()
    {
        return $this->container['estate'];
    }

    /**
     * Sets estate
     *
     * @param object $estate estate
     *
     * @return $this
     */
    public function setEstate($estate)
    {
        $this->container['estate'] = $estate;

        return $this;
    }

    /**
     * Gets organization_nbr
     *
     * @return object
     */
    public function getOrganizationNbr()
    {
        return $this->container['organization_nbr'];
    }

    /**
     * Sets organization_nbr
     *
     * @param object $organization_nbr organization_nbr
     *
     * @return $this
     */
    public function setOrganizationNbr($organization_nbr)
    {
        $this->container['organization_nbr'] = $organization_nbr;

        return $this;
    }

    /**
     * Gets distribution
     *
     * @return \Ekstralys\VismaNetApi\Model\RotRutDistributionUpdateDto[]
     */
    public function getDistribution()
    {
        return $this->container['distribution'];
    }

    /**
     * Sets distribution
     *
     * @param \Ekstralys\VismaNetApi\Model\RotRutDistributionUpdateDto[] $distribution distribution
     *
     * @return $this
     */
    public function setDistribution($distribution)
    {
        $this->container['distribution'] = $distribution;

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


