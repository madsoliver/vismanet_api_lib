<?php
/**
 * SupplierPaymentUpdateDto
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
 * SupplierPaymentUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierPaymentUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierPaymentUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'object',
        'reference_number' => 'object',
        'hold' => 'object',
        'application_date' => 'object',
        'application_period' => 'object',
        'payment_ref' => 'object',
        'supplier' => 'object',
        'location' => 'object',
        'payment_method' => 'object',
        'cash_account' => 'object',
        'currency' => 'object',
        'description' => 'object',
        'payment_amount' => 'object',
        'payment_lines' => '\Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentUpdateDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'reference_number' => null,
        'hold' => null,
        'application_date' => null,
        'application_period' => null,
        'payment_ref' => null,
        'supplier' => null,
        'location' => null,
        'payment_method' => null,
        'cash_account' => null,
        'currency' => null,
        'description' => null,
        'payment_amount' => null,
        'payment_lines' => null
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
        'type' => 'type',
        'reference_number' => 'referenceNumber',
        'hold' => 'hold',
        'application_date' => 'applicationDate',
        'application_period' => 'applicationPeriod',
        'payment_ref' => 'paymentRef',
        'supplier' => 'supplier',
        'location' => 'location',
        'payment_method' => 'paymentMethod',
        'cash_account' => 'cashAccount',
        'currency' => 'currency',
        'description' => 'description',
        'payment_amount' => 'paymentAmount',
        'payment_lines' => 'paymentLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'reference_number' => 'setReferenceNumber',
        'hold' => 'setHold',
        'application_date' => 'setApplicationDate',
        'application_period' => 'setApplicationPeriod',
        'payment_ref' => 'setPaymentRef',
        'supplier' => 'setSupplier',
        'location' => 'setLocation',
        'payment_method' => 'setPaymentMethod',
        'cash_account' => 'setCashAccount',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'payment_amount' => 'setPaymentAmount',
        'payment_lines' => 'setPaymentLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'reference_number' => 'getReferenceNumber',
        'hold' => 'getHold',
        'application_date' => 'getApplicationDate',
        'application_period' => 'getApplicationPeriod',
        'payment_ref' => 'getPaymentRef',
        'supplier' => 'getSupplier',
        'location' => 'getLocation',
        'payment_method' => 'getPaymentMethod',
        'cash_account' => 'getCashAccount',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'payment_amount' => 'getPaymentAmount',
        'payment_lines' => 'getPaymentLines'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['application_date'] = isset($data['application_date']) ? $data['application_date'] : null;
        $this->container['application_period'] = isset($data['application_period']) ? $data['application_period'] : null;
        $this->container['payment_ref'] = isset($data['payment_ref']) ? $data['payment_ref'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['payment_lines'] = isset($data['payment_lines']) ? $data['payment_lines'] : null;
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
     * @param object $type Reference number for the document. Can be used when manual numbering is enabled.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return object
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param object $reference_number reference_number
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return object
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param object $hold hold
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets application_date
     *
     * @return object
     */
    public function getApplicationDate()
    {
        return $this->container['application_date'];
    }

    /**
     * Sets application_date
     *
     * @param object $application_date application_date
     *
     * @return $this
     */
    public function setApplicationDate($application_date)
    {
        $this->container['application_date'] = $application_date;

        return $this;
    }

    /**
     * Gets application_period
     *
     * @return object
     */
    public function getApplicationPeriod()
    {
        return $this->container['application_period'];
    }

    /**
     * Sets application_period
     *
     * @param object $application_period application_period
     *
     * @return $this
     */
    public function setApplicationPeriod($application_period)
    {
        $this->container['application_period'] = $application_period;

        return $this;
    }

    /**
     * Gets payment_ref
     *
     * @return object
     */
    public function getPaymentRef()
    {
        return $this->container['payment_ref'];
    }

    /**
     * Sets payment_ref
     *
     * @param object $payment_ref payment_ref
     *
     * @return $this
     */
    public function setPaymentRef($payment_ref)
    {
        $this->container['payment_ref'] = $payment_ref;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return object
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param object $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets location
     *
     * @return object
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param object $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return object
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param object $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets cash_account
     *
     * @return object
     */
    public function getCashAccount()
    {
        return $this->container['cash_account'];
    }

    /**
     * Sets cash_account
     *
     * @param object $cash_account cash_account
     *
     * @return $this
     */
    public function setCashAccount($cash_account)
    {
        $this->container['cash_account'] = $cash_account;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return object
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param object $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets payment_amount
     *
     * @return object
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param object $payment_amount payment_amount
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets payment_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentUpdateDto[]
     */
    public function getPaymentLines()
    {
        return $this->container['payment_lines'];
    }

    /**
     * Sets payment_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentUpdateDto[] $payment_lines payment_lines
     *
     * @return $this
     */
    public function setPaymentLines($payment_lines)
    {
        $this->container['payment_lines'] = $payment_lines;

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

