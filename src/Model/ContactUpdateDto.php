<?php
/**
 * ContactUpdateDto
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
 * ContactUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'object',
        'title' => 'object',
        'first_name' => 'object',
        'last_name' => 'object',
        'position' => 'object',
        'business_account' => 'object',
        'same_as_account' => 'object',
        'address' => 'object',
        'email' => 'object',
        'web' => 'object',
        'phone1' => 'object',
        'phone2' => 'object',
        'phone3' => 'object',
        'fax' => 'object',
        'contact_method' => 'object',
        'do_not_call' => 'object',
        'do_not_fax' => 'object',
        'do_not_email' => 'object',
        'do_not_mail' => 'object',
        'no_mass_mail' => 'object',
        'no_marketing' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'title' => null,
        'first_name' => null,
        'last_name' => null,
        'position' => null,
        'business_account' => null,
        'same_as_account' => null,
        'address' => null,
        'email' => null,
        'web' => null,
        'phone1' => null,
        'phone2' => null,
        'phone3' => null,
        'fax' => null,
        'contact_method' => null,
        'do_not_call' => null,
        'do_not_fax' => null,
        'do_not_email' => null,
        'do_not_mail' => null,
        'no_mass_mail' => null,
        'no_marketing' => null
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
        'active' => 'active',
        'title' => 'title',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'position' => 'position',
        'business_account' => 'businessAccount',
        'same_as_account' => 'sameAsAccount',
        'address' => 'address',
        'email' => 'email',
        'web' => 'web',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'phone3' => 'phone3',
        'fax' => 'fax',
        'contact_method' => 'contactMethod',
        'do_not_call' => 'doNotCall',
        'do_not_fax' => 'doNotFax',
        'do_not_email' => 'doNotEmail',
        'do_not_mail' => 'doNotMail',
        'no_mass_mail' => 'noMassMail',
        'no_marketing' => 'noMarketing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'position' => 'setPosition',
        'business_account' => 'setBusinessAccount',
        'same_as_account' => 'setSameAsAccount',
        'address' => 'setAddress',
        'email' => 'setEmail',
        'web' => 'setWeb',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'phone3' => 'setPhone3',
        'fax' => 'setFax',
        'contact_method' => 'setContactMethod',
        'do_not_call' => 'setDoNotCall',
        'do_not_fax' => 'setDoNotFax',
        'do_not_email' => 'setDoNotEmail',
        'do_not_mail' => 'setDoNotMail',
        'no_mass_mail' => 'setNoMassMail',
        'no_marketing' => 'setNoMarketing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'position' => 'getPosition',
        'business_account' => 'getBusinessAccount',
        'same_as_account' => 'getSameAsAccount',
        'address' => 'getAddress',
        'email' => 'getEmail',
        'web' => 'getWeb',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'phone3' => 'getPhone3',
        'fax' => 'getFax',
        'contact_method' => 'getContactMethod',
        'do_not_call' => 'getDoNotCall',
        'do_not_fax' => 'getDoNotFax',
        'do_not_email' => 'getDoNotEmail',
        'do_not_mail' => 'getDoNotMail',
        'no_mass_mail' => 'getNoMassMail',
        'no_marketing' => 'getNoMarketing'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['business_account'] = isset($data['business_account']) ? $data['business_account'] : null;
        $this->container['same_as_account'] = isset($data['same_as_account']) ? $data['same_as_account'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['web'] = isset($data['web']) ? $data['web'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['phone3'] = isset($data['phone3']) ? $data['phone3'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['contact_method'] = isset($data['contact_method']) ? $data['contact_method'] : null;
        $this->container['do_not_call'] = isset($data['do_not_call']) ? $data['do_not_call'] : null;
        $this->container['do_not_fax'] = isset($data['do_not_fax']) ? $data['do_not_fax'] : null;
        $this->container['do_not_email'] = isset($data['do_not_email']) ? $data['do_not_email'] : null;
        $this->container['do_not_mail'] = isset($data['do_not_mail']) ? $data['do_not_mail'] : null;
        $this->container['no_mass_mail'] = isset($data['no_mass_mail']) ? $data['no_mass_mail'] : null;
        $this->container['no_marketing'] = isset($data['no_marketing']) ? $data['no_marketing'] : null;
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
     * Gets title
     *
     * @return object
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param object $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return object
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param object $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return object
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param object $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return object
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param object $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets business_account
     *
     * @return object
     */
    public function getBusinessAccount()
    {
        return $this->container['business_account'];
    }

    /**
     * Sets business_account
     *
     * @param object $business_account business_account
     *
     * @return $this
     */
    public function setBusinessAccount($business_account)
    {
        $this->container['business_account'] = $business_account;

        return $this;
    }

    /**
     * Gets same_as_account
     *
     * @return object
     */
    public function getSameAsAccount()
    {
        return $this->container['same_as_account'];
    }

    /**
     * Sets same_as_account
     *
     * @param object $same_as_account same_as_account
     *
     * @return $this
     */
    public function setSameAsAccount($same_as_account)
    {
        $this->container['same_as_account'] = $same_as_account;

        return $this;
    }

    /**
     * Gets address
     *
     * @return object
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param object $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets phone3
     *
     * @return object
     */
    public function getPhone3()
    {
        return $this->container['phone3'];
    }

    /**
     * Sets phone3
     *
     * @param object $phone3 phone3
     *
     * @return $this
     */
    public function setPhone3($phone3)
    {
        $this->container['phone3'] = $phone3;

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
     * Gets contact_method
     *
     * @return object
     */
    public function getContactMethod()
    {
        return $this->container['contact_method'];
    }

    /**
     * Sets contact_method
     *
     * @param object $contact_method contact_method
     *
     * @return $this
     */
    public function setContactMethod($contact_method)
    {
        $this->container['contact_method'] = $contact_method;

        return $this;
    }

    /**
     * Gets do_not_call
     *
     * @return object
     */
    public function getDoNotCall()
    {
        return $this->container['do_not_call'];
    }

    /**
     * Sets do_not_call
     *
     * @param object $do_not_call do_not_call
     *
     * @return $this
     */
    public function setDoNotCall($do_not_call)
    {
        $this->container['do_not_call'] = $do_not_call;

        return $this;
    }

    /**
     * Gets do_not_fax
     *
     * @return object
     */
    public function getDoNotFax()
    {
        return $this->container['do_not_fax'];
    }

    /**
     * Sets do_not_fax
     *
     * @param object $do_not_fax do_not_fax
     *
     * @return $this
     */
    public function setDoNotFax($do_not_fax)
    {
        $this->container['do_not_fax'] = $do_not_fax;

        return $this;
    }

    /**
     * Gets do_not_email
     *
     * @return object
     */
    public function getDoNotEmail()
    {
        return $this->container['do_not_email'];
    }

    /**
     * Sets do_not_email
     *
     * @param object $do_not_email do_not_email
     *
     * @return $this
     */
    public function setDoNotEmail($do_not_email)
    {
        $this->container['do_not_email'] = $do_not_email;

        return $this;
    }

    /**
     * Gets do_not_mail
     *
     * @return object
     */
    public function getDoNotMail()
    {
        return $this->container['do_not_mail'];
    }

    /**
     * Sets do_not_mail
     *
     * @param object $do_not_mail do_not_mail
     *
     * @return $this
     */
    public function setDoNotMail($do_not_mail)
    {
        $this->container['do_not_mail'] = $do_not_mail;

        return $this;
    }

    /**
     * Gets no_mass_mail
     *
     * @return object
     */
    public function getNoMassMail()
    {
        return $this->container['no_mass_mail'];
    }

    /**
     * Sets no_mass_mail
     *
     * @param object $no_mass_mail no_mass_mail
     *
     * @return $this
     */
    public function setNoMassMail($no_mass_mail)
    {
        $this->container['no_mass_mail'] = $no_mass_mail;

        return $this;
    }

    /**
     * Gets no_marketing
     *
     * @return object
     */
    public function getNoMarketing()
    {
        return $this->container['no_marketing'];
    }

    /**
     * Sets no_marketing
     *
     * @param object $no_marketing no_marketing
     *
     * @return $this
     */
    public function setNoMarketing($no_marketing)
    {
        $this->container['no_marketing'] = $no_marketing;

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

