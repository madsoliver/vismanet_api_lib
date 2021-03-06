<?php
/**
 * PurchaseOrderContactUpdateDto
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
 * PurchaseOrderContactUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderContactUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderContactUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'override_contact' => 'object',
        'name' => 'object',
        'attention' => 'object',
        'email' => 'object',
        'web' => 'object',
        'phone1' => 'object',
        'phone2' => 'object',
        'fax' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'override_contact' => null,
        'name' => null,
        'attention' => null,
        'email' => null,
        'web' => null,
        'phone1' => null,
        'phone2' => null,
        'fax' => null
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
        'override_contact' => 'overrideContact',
        'name' => 'name',
        'attention' => 'attention',
        'email' => 'email',
        'web' => 'web',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'fax' => 'fax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'override_contact' => 'setOverrideContact',
        'name' => 'setName',
        'attention' => 'setAttention',
        'email' => 'setEmail',
        'web' => 'setWeb',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'fax' => 'setFax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'override_contact' => 'getOverrideContact',
        'name' => 'getName',
        'attention' => 'getAttention',
        'email' => 'getEmail',
        'web' => 'getWeb',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'fax' => 'getFax'
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
        $this->container['override_contact'] = isset($data['override_contact']) ? $data['override_contact'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['web'] = isset($data['web']) ? $data['web'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
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
     * Gets override_contact
     *
     * @return object
     */
    public function getOverrideContact()
    {
        return $this->container['override_contact'];
    }

    /**
     * Sets override_contact
     *
     * @param object $override_contact override_contact
     *
     * @return $this
     */
    public function setOverrideContact($override_contact)
    {
        $this->container['override_contact'] = $override_contact;

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
     * Gets attention
     *
     * @return object
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param object $attention attention
     *
     * @return $this
     */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets email
     *
     * @return object
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param object $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets web
     *
     * @return object
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param object $web web
     *
     * @return $this
     */
    public function setWeb($web)
    {
        $this->container['web'] = $web;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return object
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param object $phone1 phone1
     *
     * @return $this
     */
    public function setPhone1($phone1)
    {
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets phone2
     *
     * @return object
     */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
     * Sets phone2
     *
     * @param object $phone2 phone2
     *
     * @return $this
     */
    public function setPhone2($phone2)
    {
        $this->container['phone2'] = $phone2;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return object
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param object $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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


