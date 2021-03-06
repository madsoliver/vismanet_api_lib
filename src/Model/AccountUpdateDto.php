<?php
/**
 * AccountUpdateDto
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
 * AccountUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_cd' => 'object',
        'active' => 'object',
        'account_class' => 'object',
        'analysis_code' => 'object',
        'currency' => 'object',
        'description' => 'object',
        'extenal_code1' => 'object',
        'external_code2' => 'object',
        'account_group_cd' => 'object',
        'post_option' => 'object',
        'public_code1' => 'object',
        'type' => 'object',
        'use_default_sub' => 'object',
        'tax_category' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_cd' => null,
        'active' => null,
        'account_class' => null,
        'analysis_code' => null,
        'currency' => null,
        'description' => null,
        'extenal_code1' => null,
        'external_code2' => null,
        'account_group_cd' => null,
        'post_option' => null,
        'public_code1' => null,
        'type' => null,
        'use_default_sub' => null,
        'tax_category' => null
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
        'account_cd' => 'accountCD',
        'active' => 'active',
        'account_class' => 'accountClass',
        'analysis_code' => 'analysisCode',
        'currency' => 'currency',
        'description' => 'description',
        'extenal_code1' => 'extenalCode1',
        'external_code2' => 'externalCode2',
        'account_group_cd' => 'accountGroupCD',
        'post_option' => 'postOption',
        'public_code1' => 'publicCode1',
        'type' => 'type',
        'use_default_sub' => 'useDefaultSub',
        'tax_category' => 'taxCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_cd' => 'setAccountCd',
        'active' => 'setActive',
        'account_class' => 'setAccountClass',
        'analysis_code' => 'setAnalysisCode',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'extenal_code1' => 'setExtenalCode1',
        'external_code2' => 'setExternalCode2',
        'account_group_cd' => 'setAccountGroupCd',
        'post_option' => 'setPostOption',
        'public_code1' => 'setPublicCode1',
        'type' => 'setType',
        'use_default_sub' => 'setUseDefaultSub',
        'tax_category' => 'setTaxCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_cd' => 'getAccountCd',
        'active' => 'getActive',
        'account_class' => 'getAccountClass',
        'analysis_code' => 'getAnalysisCode',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'extenal_code1' => 'getExtenalCode1',
        'external_code2' => 'getExternalCode2',
        'account_group_cd' => 'getAccountGroupCd',
        'post_option' => 'getPostOption',
        'public_code1' => 'getPublicCode1',
        'type' => 'getType',
        'use_default_sub' => 'getUseDefaultSub',
        'tax_category' => 'getTaxCategory'
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
        $this->container['account_cd'] = isset($data['account_cd']) ? $data['account_cd'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['account_class'] = isset($data['account_class']) ? $data['account_class'] : null;
        $this->container['analysis_code'] = isset($data['analysis_code']) ? $data['analysis_code'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extenal_code1'] = isset($data['extenal_code1']) ? $data['extenal_code1'] : null;
        $this->container['external_code2'] = isset($data['external_code2']) ? $data['external_code2'] : null;
        $this->container['account_group_cd'] = isset($data['account_group_cd']) ? $data['account_group_cd'] : null;
        $this->container['post_option'] = isset($data['post_option']) ? $data['post_option'] : null;
        $this->container['public_code1'] = isset($data['public_code1']) ? $data['public_code1'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['use_default_sub'] = isset($data['use_default_sub']) ? $data['use_default_sub'] : null;
        $this->container['tax_category'] = isset($data['tax_category']) ? $data['tax_category'] : null;
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
     * Gets account_cd
     *
     * @return object
     */
    public function getAccountCd()
    {
        return $this->container['account_cd'];
    }

    /**
     * Sets account_cd
     *
     * @param object $account_cd account_cd
     *
     * @return $this
     */
    public function setAccountCd($account_cd)
    {
        $this->container['account_cd'] = $account_cd;

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
     * Gets account_class
     *
     * @return object
     */
    public function getAccountClass()
    {
        return $this->container['account_class'];
    }

    /**
     * Sets account_class
     *
     * @param object $account_class account_class
     *
     * @return $this
     */
    public function setAccountClass($account_class)
    {
        $this->container['account_class'] = $account_class;

        return $this;
    }

    /**
     * Gets analysis_code
     *
     * @return object
     */
    public function getAnalysisCode()
    {
        return $this->container['analysis_code'];
    }

    /**
     * Sets analysis_code
     *
     * @param object $analysis_code analysis_code
     *
     * @return $this
     */
    public function setAnalysisCode($analysis_code)
    {
        $this->container['analysis_code'] = $analysis_code;

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
     * Gets extenal_code1
     *
     * @return object
     */
    public function getExtenalCode1()
    {
        return $this->container['extenal_code1'];
    }

    /**
     * Sets extenal_code1
     *
     * @param object $extenal_code1 extenal_code1
     *
     * @return $this
     */
    public function setExtenalCode1($extenal_code1)
    {
        $this->container['extenal_code1'] = $extenal_code1;

        return $this;
    }

    /**
     * Gets external_code2
     *
     * @return object
     */
    public function getExternalCode2()
    {
        return $this->container['external_code2'];
    }

    /**
     * Sets external_code2
     *
     * @param object $external_code2 external_code2
     *
     * @return $this
     */
    public function setExternalCode2($external_code2)
    {
        $this->container['external_code2'] = $external_code2;

        return $this;
    }

    /**
     * Gets account_group_cd
     *
     * @return object
     */
    public function getAccountGroupCd()
    {
        return $this->container['account_group_cd'];
    }

    /**
     * Sets account_group_cd
     *
     * @param object $account_group_cd account_group_cd
     *
     * @return $this
     */
    public function setAccountGroupCd($account_group_cd)
    {
        $this->container['account_group_cd'] = $account_group_cd;

        return $this;
    }

    /**
     * Gets post_option
     *
     * @return object
     */
    public function getPostOption()
    {
        return $this->container['post_option'];
    }

    /**
     * Sets post_option
     *
     * @param object $post_option post_option
     *
     * @return $this
     */
    public function setPostOption($post_option)
    {
        $this->container['post_option'] = $post_option;

        return $this;
    }

    /**
     * Gets public_code1
     *
     * @return object
     */
    public function getPublicCode1()
    {
        return $this->container['public_code1'];
    }

    /**
     * Sets public_code1
     *
     * @param object $public_code1 public_code1
     *
     * @return $this
     */
    public function setPublicCode1($public_code1)
    {
        $this->container['public_code1'] = $public_code1;

        return $this;
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
     * @param object $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets use_default_sub
     *
     * @return object
     */
    public function getUseDefaultSub()
    {
        return $this->container['use_default_sub'];
    }

    /**
     * Sets use_default_sub
     *
     * @param object $use_default_sub use_default_sub
     *
     * @return $this
     */
    public function setUseDefaultSub($use_default_sub)
    {
        $this->container['use_default_sub'] = $use_default_sub;

        return $this;
    }

    /**
     * Gets tax_category
     *
     * @return object
     */
    public function getTaxCategory()
    {
        return $this->container['tax_category'];
    }

    /**
     * Sets tax_category
     *
     * @param object $tax_category tax_category
     *
     * @return $this
     */
    public function setTaxCategory($tax_category)
    {
        $this->container['tax_category'] = $tax_category;

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


