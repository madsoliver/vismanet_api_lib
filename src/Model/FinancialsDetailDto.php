<?php
/**
 * FinancialsDetailDto
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
 * FinancialsDetailDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialsDetailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialsDetailDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_number' => 'string',
        'branch' => 'object',
        'cleared' => 'bool',
        'clear_date' => '\DateTime',
        'tax_zone' => 'object',
        'tax_calc_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_number' => null,
        'branch' => null,
        'cleared' => null,
        'clear_date' => 'date-time',
        'tax_zone' => null,
        'tax_calc_mode' => null
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
        'batch_number' => 'batchNumber',
        'branch' => 'branch',
        'cleared' => 'cleared',
        'clear_date' => 'clearDate',
        'tax_zone' => 'taxZone',
        'tax_calc_mode' => 'taxCalcMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_number' => 'setBatchNumber',
        'branch' => 'setBranch',
        'cleared' => 'setCleared',
        'clear_date' => 'setClearDate',
        'tax_zone' => 'setTaxZone',
        'tax_calc_mode' => 'setTaxCalcMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_number' => 'getBatchNumber',
        'branch' => 'getBranch',
        'cleared' => 'getCleared',
        'clear_date' => 'getClearDate',
        'tax_zone' => 'getTaxZone',
        'tax_calc_mode' => 'getTaxCalcMode'
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

    const TAX_CALC_MODE_TAX_SETTING = 'TaxSetting';
    const TAX_CALC_MODE_GROSS = 'Gross';
    const TAX_CALC_MODE_NET = 'Net';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxCalcModeAllowableValues()
    {
        return [
            self::TAX_CALC_MODE_TAX_SETTING,
            self::TAX_CALC_MODE_GROSS,
            self::TAX_CALC_MODE_NET,
        ];
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
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['clear_date'] = isset($data['clear_date']) ? $data['clear_date'] : null;
        $this->container['tax_zone'] = isset($data['tax_zone']) ? $data['tax_zone'] : null;
        $this->container['tax_calc_mode'] = isset($data['tax_calc_mode']) ? $data['tax_calc_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTaxCalcModeAllowableValues();
        if (!is_null($this->container['tax_calc_mode']) && !in_array($this->container['tax_calc_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_calc_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets batch_number
     *
     * @return string
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string $batch_number Link to general ledger section &gt; Batch number &gt; The number of the batch generated to implement the cash transaction.
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return object
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param object $branch Link to general ledger section &gt; Branch &gt;  The branch that initiated the transaction.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return bool
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param bool $cleared Link to general ledger section &gt; Cleared &gt; A check box that indicates (if selected) that the transaction was cleared.
     *
     * @return $this
     */
    public function setCleared($cleared)
    {
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets clear_date
     *
     * @return \DateTime
     */
    public function getClearDate()
    {
        return $this->container['clear_date'];
    }

    /**
     * Sets clear_date
     *
     * @param \DateTime $clear_date Link to general ledger section &gt; Clear date &gt;  The date when the transaction was cleared.
     *
     * @return $this
     */
    public function setClearDate($clear_date)
    {
        $this->container['clear_date'] = $clear_date;

        return $this;
    }

    /**
     * Gets tax_zone
     *
     * @return object
     */
    public function getTaxZone()
    {
        return $this->container['tax_zone'];
    }

    /**
     * Sets tax_zone
     *
     * @param object $tax_zone VAT settings section &gt; VAT zone &gt; The VAT zone that applies to the transaction.
     *
     * @return $this
     */
    public function setTaxZone($tax_zone)
    {
        $this->container['tax_zone'] = $tax_zone;

        return $this;
    }

    /**
     * Gets tax_calc_mode
     *
     * @return string
     */
    public function getTaxCalcMode()
    {
        return $this->container['tax_calc_mode'];
    }

    /**
     * Sets tax_calc_mode
     *
     * @param string $tax_calc_mode VAT settings section &gt; VAT calculation &gt; The VAT calculation mode, which defines which amounts (VAT-inclusive or VAT-exclusive) should be entered in the detail lines of a document.
     *
     * @return $this
     */
    public function setTaxCalcMode($tax_calc_mode)
    {
        $allowedValues = $this->getTaxCalcModeAllowableValues();
        if (!is_null($tax_calc_mode) && !in_array($tax_calc_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_calc_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_calc_mode'] = $tax_calc_mode;

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


