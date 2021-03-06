<?php
/**
 * PackagingUpdateDto
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
 * PackagingUpdateDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a Packaging part of InventoryItem in InventoryItemController. Used for insert/update data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackagingUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackagingUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_item_weight' => 'object',
        'weight_uom' => 'object',
        'base_item_volume' => 'object',
        'volume_uom' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_item_weight' => null,
        'weight_uom' => null,
        'base_item_volume' => null,
        'volume_uom' => null
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
        'base_item_weight' => 'baseItemWeight',
        'weight_uom' => 'weightUOM',
        'base_item_volume' => 'baseItemVolume',
        'volume_uom' => 'volumeUOM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_item_weight' => 'setBaseItemWeight',
        'weight_uom' => 'setWeightUom',
        'base_item_volume' => 'setBaseItemVolume',
        'volume_uom' => 'setVolumeUom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_item_weight' => 'getBaseItemWeight',
        'weight_uom' => 'getWeightUom',
        'base_item_volume' => 'getBaseItemVolume',
        'volume_uom' => 'getVolumeUom'
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
        $this->container['base_item_weight'] = isset($data['base_item_weight']) ? $data['base_item_weight'] : null;
        $this->container['weight_uom'] = isset($data['weight_uom']) ? $data['weight_uom'] : null;
        $this->container['base_item_volume'] = isset($data['base_item_volume']) ? $data['base_item_volume'] : null;
        $this->container['volume_uom'] = isset($data['volume_uom']) ? $data['volume_uom'] : null;
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
     * Gets base_item_weight
     *
     * @return object
     */
    public function getBaseItemWeight()
    {
        return $this->container['base_item_weight'];
    }

    /**
     * Sets base_item_weight
     *
     * @param object $base_item_weight The weight of the <see cref=\"!:BaseUnit\">Base Unit</see> of the item.
     *
     * @return $this
     */
    public function setBaseItemWeight($base_item_weight)
    {
        $this->container['base_item_weight'] = $base_item_weight;

        return $this;
    }

    /**
     * Gets weight_uom
     *
     * @return object
     */
    public function getWeightUom()
    {
        return $this->container['weight_uom'];
    }

    /**
     * Sets weight_uom
     *
     * @param object $weight_uom The <see cref=\"!:INUnit\">Unit of Measure</see> used for the <see cref=\"P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingUpdateDto.BaseItemWeight\">Weight</see> of the item.
     *
     * @return $this
     */
    public function setWeightUom($weight_uom)
    {
        $this->container['weight_uom'] = $weight_uom;

        return $this;
    }

    /**
     * Gets base_item_volume
     *
     * @return object
     */
    public function getBaseItemVolume()
    {
        return $this->container['base_item_volume'];
    }

    /**
     * Sets base_item_volume
     *
     * @param object $base_item_volume The volume of the <see cref=\"!:BaseUnit\">Base Unit</see> of the item.
     *
     * @return $this
     */
    public function setBaseItemVolume($base_item_volume)
    {
        $this->container['base_item_volume'] = $base_item_volume;

        return $this;
    }

    /**
     * Gets volume_uom
     *
     * @return object
     */
    public function getVolumeUom()
    {
        return $this->container['volume_uom'];
    }

    /**
     * Sets volume_uom
     *
     * @param object $volume_uom The <see cref=\"!:INUnit\">Unit of Measure</see> used for the <see cref=\"P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingUpdateDto.BaseItemVolume\">Volume</see> of the item.
     *
     * @return $this
     */
    public function setVolumeUom($volume_uom)
    {
        $this->container['volume_uom'] = $volume_uom;

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


