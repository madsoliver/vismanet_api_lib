<?php
/**
 * DiscountUpdateDto
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
 * DiscountUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscountUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_code' => 'object',
        'series' => 'object',
        'description' => 'object',
        'discount_by' => 'object',
        'break_by' => 'object',
        'promotional' => 'object',
        'active' => 'object',
        'prorate_discount' => 'object',
        'effective_date' => 'object',
        'expiration_date' => 'object',
        'discount_breakpoints' => '\Ekstralys\VismaNetApi\Model\DiscountBreakpointUpdateDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_code' => null,
        'series' => null,
        'description' => null,
        'discount_by' => null,
        'break_by' => null,
        'promotional' => null,
        'active' => null,
        'prorate_discount' => null,
        'effective_date' => null,
        'expiration_date' => null,
        'discount_breakpoints' => null
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
        'discount_code' => 'discountCode',
        'series' => 'series',
        'description' => 'description',
        'discount_by' => 'discountBy',
        'break_by' => 'breakBy',
        'promotional' => 'promotional',
        'active' => 'active',
        'prorate_discount' => 'prorateDiscount',
        'effective_date' => 'effectiveDate',
        'expiration_date' => 'expirationDate',
        'discount_breakpoints' => 'discountBreakpoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_code' => 'setDiscountCode',
        'series' => 'setSeries',
        'description' => 'setDescription',
        'discount_by' => 'setDiscountBy',
        'break_by' => 'setBreakBy',
        'promotional' => 'setPromotional',
        'active' => 'setActive',
        'prorate_discount' => 'setProrateDiscount',
        'effective_date' => 'setEffectiveDate',
        'expiration_date' => 'setExpirationDate',
        'discount_breakpoints' => 'setDiscountBreakpoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_code' => 'getDiscountCode',
        'series' => 'getSeries',
        'description' => 'getDescription',
        'discount_by' => 'getDiscountBy',
        'break_by' => 'getBreakBy',
        'promotional' => 'getPromotional',
        'active' => 'getActive',
        'prorate_discount' => 'getProrateDiscount',
        'effective_date' => 'getEffectiveDate',
        'expiration_date' => 'getExpirationDate',
        'discount_breakpoints' => 'getDiscountBreakpoints'
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
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_by'] = isset($data['discount_by']) ? $data['discount_by'] : null;
        $this->container['break_by'] = isset($data['break_by']) ? $data['break_by'] : null;
        $this->container['promotional'] = isset($data['promotional']) ? $data['promotional'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['prorate_discount'] = isset($data['prorate_discount']) ? $data['prorate_discount'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['discount_breakpoints'] = isset($data['discount_breakpoints']) ? $data['discount_breakpoints'] : null;
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
     * Gets discount_code
     *
     * @return object
     */
    public function getDiscountCode()
    {
        return $this->container['discount_code'];
    }

    /**
     * Sets discount_code
     *
     * @param object $discount_code discount_code
     *
     * @return $this
     */
    public function setDiscountCode($discount_code)
    {
        $this->container['discount_code'] = $discount_code;

        return $this;
    }

    /**
     * Gets series
     *
     * @return object
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param object $series series
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

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
     * @param object $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_by
     *
     * @return object
     */
    public function getDiscountBy()
    {
        return $this->container['discount_by'];
    }

    /**
     * Sets discount_by
     *
     * @param object $discount_by discount_by
     *
     * @return $this
     */
    public function setDiscountBy($discount_by)
    {
        $this->container['discount_by'] = $discount_by;

        return $this;
    }

    /**
     * Gets break_by
     *
     * @return object
     */
    public function getBreakBy()
    {
        return $this->container['break_by'];
    }

    /**
     * Sets break_by
     *
     * @param object $break_by break_by
     *
     * @return $this
     */
    public function setBreakBy($break_by)
    {
        $this->container['break_by'] = $break_by;

        return $this;
    }

    /**
     * Gets promotional
     *
     * @return object
     */
    public function getPromotional()
    {
        return $this->container['promotional'];
    }

    /**
     * Sets promotional
     *
     * @param object $promotional promotional
     *
     * @return $this
     */
    public function setPromotional($promotional)
    {
        $this->container['promotional'] = $promotional;

        return $this;
    }

    /**
     * Gets active
     *
     * @return object
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param object $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets prorate_discount
     *
     * @return object
     */
    public function getProrateDiscount()
    {
        return $this->container['prorate_discount'];
    }

    /**
     * Sets prorate_discount
     *
     * @param object $prorate_discount prorate_discount
     *
     * @return $this
     */
    public function setProrateDiscount($prorate_discount)
    {
        $this->container['prorate_discount'] = $prorate_discount;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return object
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param object $effective_date effective_date
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return object
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param object $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets discount_breakpoints
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountBreakpointUpdateDto[]
     */
    public function getDiscountBreakpoints()
    {
        return $this->container['discount_breakpoints'];
    }

    /**
     * Sets discount_breakpoints
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountBreakpointUpdateDto[] $discount_breakpoints discount_breakpoints
     *
     * @return $this
     */
    public function setDiscountBreakpoints($discount_breakpoints)
    {
        $this->container['discount_breakpoints'] = $discount_breakpoints;

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

