<?php
/**
 * CustomerDocumentContactDto
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
 * CustomerDocumentContactDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDocumentContactDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerDocumentContactDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_id' => 'int',
        'business_name' => 'string',
        'attention' => 'string',
        'email' => 'string',
        'phone1' => 'string',
        'override_contact' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_id' => 'int32',
        'business_name' => null,
        'attention' => null,
        'email' => null,
        'phone1' => null,
        'override_contact' => null
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
        'contact_id' => 'contactId',
        'business_name' => 'businessName',
        'attention' => 'attention',
        'email' => 'email',
        'phone1' => 'phone1',
        'override_contact' => 'overrideContact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'business_name' => 'setBusinessName',
        'attention' => 'setAttention',
        'email' => 'setEmail',
        'phone1' => 'setPhone1',
        'override_contact' => 'setOverrideContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'business_name' => 'getBusinessName',
        'attention' => 'getAttention',
        'email' => 'getEmail',
        'phone1' => 'getPhone1',
        'override_contact' => 'getOverrideContact'
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['override_contact'] = isset($data['override_contact']) ? $data['override_contact'] : null;
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
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name business_name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets attention
     *
     * @return string
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string $attention attention
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
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param string $phone1 phone1
     *
     * @return $this
     */
    public function setPhone1($phone1)
    {
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets override_contact
     *
     * @return bool
     */
    public function getOverrideContact()
    {
        return $this->container['override_contact'];
    }

    /**
     * Sets override_contact
     *
     * @param bool $override_contact override_contact
     *
     * @return $this
     */
    public function setOverrideContact($override_contact)
    {
        $this->container['override_contact'] = $override_contact;

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


