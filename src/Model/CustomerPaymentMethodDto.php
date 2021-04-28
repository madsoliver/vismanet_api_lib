<?php
/**
 * CustomerPaymentMethodDto
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
 * CustomerPaymentMethodDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerPaymentMethodDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerPaymentMethodDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => 'object',
        'payment_method' => 'object',
        'active' => 'bool',
        'cash_account' => 'object',
        'card_or_account_no' => 'string',
        'payment_method_details' => '\Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDetailDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'payment_method' => null,
        'active' => null,
        'cash_account' => null,
        'card_or_account_no' => null,
        'payment_method_details' => null
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
        'customer' => 'customer',
        'payment_method' => 'paymentMethod',
        'active' => 'active',
        'cash_account' => 'cashAccount',
        'card_or_account_no' => 'cardOrAccountNo',
        'payment_method_details' => 'paymentMethodDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'payment_method' => 'setPaymentMethod',
        'active' => 'setActive',
        'cash_account' => 'setCashAccount',
        'card_or_account_no' => 'setCardOrAccountNo',
        'payment_method_details' => 'setPaymentMethodDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'payment_method' => 'getPaymentMethod',
        'active' => 'getActive',
        'cash_account' => 'getCashAccount',
        'card_or_account_no' => 'getCardOrAccountNo',
        'payment_method_details' => 'getPaymentMethodDetails'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['card_or_account_no'] = isset($data['card_or_account_no']) ? $data['card_or_account_no'] : null;
        $this->container['payment_method_details'] = isset($data['payment_method_details']) ? $data['payment_method_details'] : null;
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
     * Gets customer
     *
     * @return object
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param object $customer Mandatory field: The top part &gt; Customer* &gt; The customer whose payment method you want to view or add; select a customer from the list of customers defined in the system.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * @param object $payment_method Mandatory field: The top part &gt; Payment method* &gt; The payment method used as a template for a customer payment method you are currently viewing; select a payment method to use its settings for creating a new customer payment method.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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
     * @param bool $active The top part &gt; Active &gt; A check box that indicates (if selected) that the selected customer payment method is active (that is, available for recording payments).
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param object $cash_account The top part &gt; Cash account &gt; The cash account to accrue customer payments made by this payment method, if it differs from the default cash account specified for the payment method selected.
     *
     * @return $this
     */
    public function setCashAccount($cash_account)
    {
        $this->container['cash_account'] = $cash_account;

        return $this;
    }

    /**
     * Gets card_or_account_no
     *
     * @return string
     */
    public function getCardOrAccountNo()
    {
        return $this->container['card_or_account_no'];
    }

    /**
     * Sets card_or_account_no
     *
     * @param string $card_or_account_no The top part &gt; Card/account no. &gt; The identifier for the customer's payment method.
     *
     * @return $this
     */
    public function setCardOrAccountNo($card_or_account_no)
    {
        $this->container['card_or_account_no'] = $card_or_account_no;

        return $this;
    }

    /**
     * Gets payment_method_details
     *
     * @return \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDetailDto[]
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     *
     * @param \Ekstralys\VismaNetApi\Model\CustomerPaymentMethodDetailDto[] $payment_method_details Payment method details tab &gt; The specific elements on this tab depend on the selected payment method, which is defined in the window.
     *
     * @return $this
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

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

