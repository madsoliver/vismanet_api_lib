<?php
/**
 * SalesPersonUpdateDto
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
 * SalesPersonUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesPersonUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesPersonUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'salesperson_id' => 'object',
        'name' => 'object',
        'is_active' => 'object',
        'commission_pct' => 'object',
        'sales_sub' => 'object',
        'customers' => '\Ekstralys\VismaNetApi\Model\CustSalesPeopleUpdateDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'salesperson_id' => null,
        'name' => null,
        'is_active' => null,
        'commission_pct' => null,
        'sales_sub' => null,
        'customers' => null
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
        'salesperson_id' => 'salespersonID',
        'name' => 'name',
        'is_active' => 'isActive',
        'commission_pct' => 'commissionPct',
        'sales_sub' => 'salesSub',
        'customers' => 'customers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salesperson_id' => 'setSalespersonId',
        'name' => 'setName',
        'is_active' => 'setIsActive',
        'commission_pct' => 'setCommissionPct',
        'sales_sub' => 'setSalesSub',
        'customers' => 'setCustomers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salesperson_id' => 'getSalespersonId',
        'name' => 'getName',
        'is_active' => 'getIsActive',
        'commission_pct' => 'getCommissionPct',
        'sales_sub' => 'getSalesSub',
        'customers' => 'getCustomers'
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
        $this->container['salesperson_id'] = isset($data['salesperson_id']) ? $data['salesperson_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['commission_pct'] = isset($data['commission_pct']) ? $data['commission_pct'] : null;
        $this->container['sales_sub'] = isset($data['sales_sub']) ? $data['sales_sub'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
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
     * Gets salesperson_id
     *
     * @return object
     */
    public function getSalespersonId()
    {
        return $this->container['salesperson_id'];
    }

    /**
     * Sets salesperson_id
     *
     * @param object $salesperson_id salesperson_id
     *
     * @return $this
     */
    public function setSalespersonId($salesperson_id)
    {
        $this->container['salesperson_id'] = $salesperson_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return object
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param object $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return object
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param object $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets commission_pct
     *
     * @return object
     */
    public function getCommissionPct()
    {
        return $this->container['commission_pct'];
    }

    /**
     * Sets commission_pct
     *
     * @param object $commission_pct commission_pct
     *
     * @return $this
     */
    public function setCommissionPct($commission_pct)
    {
        $this->container['commission_pct'] = $commission_pct;

        return $this;
    }

    /**
     * Gets sales_sub
     *
     * @return object
     */
    public function getSalesSub()
    {
        return $this->container['sales_sub'];
    }

    /**
     * Sets sales_sub
     *
     * @param object $sales_sub sales_sub
     *
     * @return $this
     */
    public function setSalesSub($sales_sub)
    {
        $this->container['sales_sub'] = $sales_sub;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Ekstralys\VismaNetApi\Model\CustSalesPeopleUpdateDto[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Ekstralys\VismaNetApi\Model\CustSalesPeopleUpdateDto[] $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

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


