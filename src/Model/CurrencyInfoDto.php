<?php
/**
 * CurrencyInfoDto
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
 * CurrencyInfoDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CurrencyInfoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_info_id' => 'int',
        'currency_rate_id' => 'int',
        'currency_id' => 'string',
        'base_currency_id' => 'string',
        'rate_type' => 'string',
        'effective_date' => '\DateTime',
        'rate' => 'double',
        'recip_rate' => 'double',
        'mult_div' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_info_id' => 'int64',
        'currency_rate_id' => 'int32',
        'currency_id' => null,
        'base_currency_id' => null,
        'rate_type' => null,
        'effective_date' => 'date-time',
        'rate' => 'double',
        'recip_rate' => 'double',
        'mult_div' => null
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
        'currency_info_id' => 'currencyInfoId',
        'currency_rate_id' => 'currencyRateId',
        'currency_id' => 'currencyId',
        'base_currency_id' => 'baseCurrencyId',
        'rate_type' => 'rateType',
        'effective_date' => 'effectiveDate',
        'rate' => 'rate',
        'recip_rate' => 'recipRate',
        'mult_div' => 'multDiv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_info_id' => 'setCurrencyInfoId',
        'currency_rate_id' => 'setCurrencyRateId',
        'currency_id' => 'setCurrencyId',
        'base_currency_id' => 'setBaseCurrencyId',
        'rate_type' => 'setRateType',
        'effective_date' => 'setEffectiveDate',
        'rate' => 'setRate',
        'recip_rate' => 'setRecipRate',
        'mult_div' => 'setMultDiv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_info_id' => 'getCurrencyInfoId',
        'currency_rate_id' => 'getCurrencyRateId',
        'currency_id' => 'getCurrencyId',
        'base_currency_id' => 'getBaseCurrencyId',
        'rate_type' => 'getRateType',
        'effective_date' => 'getEffectiveDate',
        'rate' => 'getRate',
        'recip_rate' => 'getRecipRate',
        'mult_div' => 'getMultDiv'
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
        $this->container['currency_info_id'] = isset($data['currency_info_id']) ? $data['currency_info_id'] : null;
        $this->container['currency_rate_id'] = isset($data['currency_rate_id']) ? $data['currency_rate_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['base_currency_id'] = isset($data['base_currency_id']) ? $data['base_currency_id'] : null;
        $this->container['rate_type'] = isset($data['rate_type']) ? $data['rate_type'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['recip_rate'] = isset($data['recip_rate']) ? $data['recip_rate'] : null;
        $this->container['mult_div'] = isset($data['mult_div']) ? $data['mult_div'] : null;
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
     * Gets currency_info_id
     *
     * @return int
     */
    public function getCurrencyInfoId()
    {
        return $this->container['currency_info_id'];
    }

    /**
     * Sets currency_info_id
     *
     * @param int $currency_info_id currency_info_id
     *
     * @return $this
     */
    public function setCurrencyInfoId($currency_info_id)
    {
        $this->container['currency_info_id'] = $currency_info_id;

        return $this;
    }

    /**
     * Gets currency_rate_id
     *
     * @return int
     */
    public function getCurrencyRateId()
    {
        return $this->container['currency_rate_id'];
    }

    /**
     * Sets currency_rate_id
     *
     * @param int $currency_rate_id currency_rate_id
     *
     * @return $this
     */
    public function setCurrencyRateId($currency_rate_id)
    {
        $this->container['currency_rate_id'] = $currency_rate_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets base_currency_id
     *
     * @return string
     */
    public function getBaseCurrencyId()
    {
        return $this->container['base_currency_id'];
    }

    /**
     * Sets base_currency_id
     *
     * @param string $base_currency_id base_currency_id
     *
     * @return $this
     */
    public function setBaseCurrencyId($base_currency_id)
    {
        $this->container['base_currency_id'] = $base_currency_id;

        return $this;
    }

    /**
     * Gets rate_type
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param string $rate_type rate_type
     *
     * @return $this
     */
    public function setRateType($rate_type)
    {
        $this->container['rate_type'] = $rate_type;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date effective_date
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets recip_rate
     *
     * @return double
     */
    public function getRecipRate()
    {
        return $this->container['recip_rate'];
    }

    /**
     * Sets recip_rate
     *
     * @param double $recip_rate recip_rate
     *
     * @return $this
     */
    public function setRecipRate($recip_rate)
    {
        $this->container['recip_rate'] = $recip_rate;

        return $this;
    }

    /**
     * Gets mult_div
     *
     * @return string
     */
    public function getMultDiv()
    {
        return $this->container['mult_div'];
    }

    /**
     * Sets mult_div
     *
     * @param string $mult_div mult_div
     *
     * @return $this
     */
    public function setMultDiv($mult_div)
    {
        $this->container['mult_div'] = $mult_div;

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

