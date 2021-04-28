<?php
/**
 * VisibilityDto
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
 * VisibilityDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisibilityDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisibilityDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visible_in_gl' => 'bool',
        'visible_in_ap' => 'bool',
        'visible_in_ar' => 'bool',
        'visible_in_so' => 'bool',
        'visible_in_po' => 'bool',
        'visible_in_ea' => 'bool',
        'visible_in_ta' => 'bool',
        'visible_in_in' => 'bool',
        'visible_in_ca' => 'bool',
        'visible_in_cr' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'visible_in_gl' => null,
        'visible_in_ap' => null,
        'visible_in_ar' => null,
        'visible_in_so' => null,
        'visible_in_po' => null,
        'visible_in_ea' => null,
        'visible_in_ta' => null,
        'visible_in_in' => null,
        'visible_in_ca' => null,
        'visible_in_cr' => null
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
        'visible_in_gl' => 'visibleInGl',
        'visible_in_ap' => 'visibleInAp',
        'visible_in_ar' => 'visibleInAr',
        'visible_in_so' => 'visibleInSo',
        'visible_in_po' => 'visibleInPo',
        'visible_in_ea' => 'visibleInEa',
        'visible_in_ta' => 'visibleInTa',
        'visible_in_in' => 'visibleInIn',
        'visible_in_ca' => 'visibleInCa',
        'visible_in_cr' => 'visibleInCr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visible_in_gl' => 'setVisibleInGl',
        'visible_in_ap' => 'setVisibleInAp',
        'visible_in_ar' => 'setVisibleInAr',
        'visible_in_so' => 'setVisibleInSo',
        'visible_in_po' => 'setVisibleInPo',
        'visible_in_ea' => 'setVisibleInEa',
        'visible_in_ta' => 'setVisibleInTa',
        'visible_in_in' => 'setVisibleInIn',
        'visible_in_ca' => 'setVisibleInCa',
        'visible_in_cr' => 'setVisibleInCr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visible_in_gl' => 'getVisibleInGl',
        'visible_in_ap' => 'getVisibleInAp',
        'visible_in_ar' => 'getVisibleInAr',
        'visible_in_so' => 'getVisibleInSo',
        'visible_in_po' => 'getVisibleInPo',
        'visible_in_ea' => 'getVisibleInEa',
        'visible_in_ta' => 'getVisibleInTa',
        'visible_in_in' => 'getVisibleInIn',
        'visible_in_ca' => 'getVisibleInCa',
        'visible_in_cr' => 'getVisibleInCr'
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
        $this->container['visible_in_gl'] = isset($data['visible_in_gl']) ? $data['visible_in_gl'] : null;
        $this->container['visible_in_ap'] = isset($data['visible_in_ap']) ? $data['visible_in_ap'] : null;
        $this->container['visible_in_ar'] = isset($data['visible_in_ar']) ? $data['visible_in_ar'] : null;
        $this->container['visible_in_so'] = isset($data['visible_in_so']) ? $data['visible_in_so'] : null;
        $this->container['visible_in_po'] = isset($data['visible_in_po']) ? $data['visible_in_po'] : null;
        $this->container['visible_in_ea'] = isset($data['visible_in_ea']) ? $data['visible_in_ea'] : null;
        $this->container['visible_in_ta'] = isset($data['visible_in_ta']) ? $data['visible_in_ta'] : null;
        $this->container['visible_in_in'] = isset($data['visible_in_in']) ? $data['visible_in_in'] : null;
        $this->container['visible_in_ca'] = isset($data['visible_in_ca']) ? $data['visible_in_ca'] : null;
        $this->container['visible_in_cr'] = isset($data['visible_in_cr']) ? $data['visible_in_cr'] : null;
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
     * Gets visible_in_gl
     *
     * @return bool
     */
    public function getVisibleInGl()
    {
        return $this->container['visible_in_gl'];
    }

    /**
     * Sets visible_in_gl
     *
     * @param bool $visible_in_gl General ledger
     *
     * @return $this
     */
    public function setVisibleInGl($visible_in_gl)
    {
        $this->container['visible_in_gl'] = $visible_in_gl;

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
     * @param bool $visible_in_ap Supplier ledger
     *
     * @return $this
     */
    public function setVisibleInAp($visible_in_ap)
    {
        $this->container['visible_in_ap'] = $visible_in_ap;

        return $this;
    }

    /**
     * Gets visible_in_ar
     *
     * @return bool
     */
    public function getVisibleInAr()
    {
        return $this->container['visible_in_ar'];
    }

    /**
     * Sets visible_in_ar
     *
     * @param bool $visible_in_ar Customer ledger
     *
     * @return $this
     */
    public function setVisibleInAr($visible_in_ar)
    {
        $this->container['visible_in_ar'] = $visible_in_ar;

        return $this;
    }

    /**
     * Gets visible_in_so
     *
     * @return bool
     */
    public function getVisibleInSo()
    {
        return $this->container['visible_in_so'];
    }

    /**
     * Sets visible_in_so
     *
     * @param bool $visible_in_so Sales
     *
     * @return $this
     */
    public function setVisibleInSo($visible_in_so)
    {
        $this->container['visible_in_so'] = $visible_in_so;

        return $this;
    }

    /**
     * Gets visible_in_po
     *
     * @return bool
     */
    public function getVisibleInPo()
    {
        return $this->container['visible_in_po'];
    }

    /**
     * Sets visible_in_po
     *
     * @param bool $visible_in_po Purchases
     *
     * @return $this
     */
    public function setVisibleInPo($visible_in_po)
    {
        $this->container['visible_in_po'] = $visible_in_po;

        return $this;
    }

    /**
     * Gets visible_in_ea
     *
     * @return bool
     */
    public function getVisibleInEa()
    {
        return $this->container['visible_in_ea'];
    }

    /**
     * Sets visible_in_ea
     *
     * @param bool $visible_in_ea Expenses
     *
     * @return $this
     */
    public function setVisibleInEa($visible_in_ea)
    {
        $this->container['visible_in_ea'] = $visible_in_ea;

        return $this;
    }

    /**
     * Gets visible_in_ta
     *
     * @return bool
     */
    public function getVisibleInTa()
    {
        return $this->container['visible_in_ta'];
    }

    /**
     * Sets visible_in_ta
     *
     * @param bool $visible_in_ta Time entries
     *
     * @return $this
     */
    public function setVisibleInTa($visible_in_ta)
    {
        $this->container['visible_in_ta'] = $visible_in_ta;

        return $this;
    }

    /**
     * Gets visible_in_in
     *
     * @return bool
     */
    public function getVisibleInIn()
    {
        return $this->container['visible_in_in'];
    }

    /**
     * Sets visible_in_in
     *
     * @param bool $visible_in_in Inventory
     *
     * @return $this
     */
    public function setVisibleInIn($visible_in_in)
    {
        $this->container['visible_in_in'] = $visible_in_in;

        return $this;
    }

    /**
     * Gets visible_in_ca
     *
     * @return bool
     */
    public function getVisibleInCa()
    {
        return $this->container['visible_in_ca'];
    }

    /**
     * Sets visible_in_ca
     *
     * @param bool $visible_in_ca Cash management
     *
     * @return $this
     */
    public function setVisibleInCa($visible_in_ca)
    {
        $this->container['visible_in_ca'] = $visible_in_ca;

        return $this;
    }

    /**
     * Gets visible_in_cr
     *
     * @return bool
     */
    public function getVisibleInCr()
    {
        return $this->container['visible_in_cr'];
    }

    /**
     * Sets visible_in_cr
     *
     * @param bool $visible_in_cr visible_in_cr
     *
     * @return $this
     */
    public function setVisibleInCr($visible_in_cr)
    {
        $this->container['visible_in_cr'] = $visible_in_cr;

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

