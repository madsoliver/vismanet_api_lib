<?php
/**
 * AccountNumberDescriptionDto
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
 * AccountNumberDescriptionDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountNumberDescriptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountNumberDescriptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'external_code1' => 'string',
        'external_code2' => 'string',
        'external_code1_info' => 'object',
        'external_code2_info' => 'object',
        'gl_consol_account_cd' => 'string',
        'number' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'external_code1' => null,
        'external_code2' => null,
        'external_code1_info' => null,
        'external_code2_info' => null,
        'gl_consol_account_cd' => null,
        'number' => null,
        'description' => null
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
        'external_code1' => 'externalCode1',
        'external_code2' => 'externalCode2',
        'external_code1_info' => 'externalCode1Info',
        'external_code2_info' => 'externalCode2Info',
        'gl_consol_account_cd' => 'glConsolAccountCD',
        'number' => 'number',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'external_code1' => 'setExternalCode1',
        'external_code2' => 'setExternalCode2',
        'external_code1_info' => 'setExternalCode1Info',
        'external_code2_info' => 'setExternalCode2Info',
        'gl_consol_account_cd' => 'setGlConsolAccountCd',
        'number' => 'setNumber',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'external_code1' => 'getExternalCode1',
        'external_code2' => 'getExternalCode2',
        'external_code1_info' => 'getExternalCode1Info',
        'external_code2_info' => 'getExternalCode2Info',
        'gl_consol_account_cd' => 'getGlConsolAccountCd',
        'number' => 'getNumber',
        'description' => 'getDescription'
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

    const TYPE_ASSET = 'Asset';
    const TYPE_LIABILITY = 'Liability';
    const TYPE_INCOME = 'Income';
    const TYPE_EXPENSE = 'Expense';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ASSET,
            self::TYPE_LIABILITY,
            self::TYPE_INCOME,
            self::TYPE_EXPENSE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['external_code1'] = isset($data['external_code1']) ? $data['external_code1'] : null;
        $this->container['external_code2'] = isset($data['external_code2']) ? $data['external_code2'] : null;
        $this->container['external_code1_info'] = isset($data['external_code1_info']) ? $data['external_code1_info'] : null;
        $this->container['external_code2_info'] = isset($data['external_code2_info']) ? $data['external_code2_info'] : null;
        $this->container['gl_consol_account_cd'] = isset($data['gl_consol_account_cd']) ? $data['gl_consol_account_cd'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets external_code1
     *
     * @return string
     */
    public function getExternalCode1()
    {
        return $this->container['external_code1'];
    }

    /**
     * Sets external_code1
     *
     * @param string $external_code1 ExternalCode1 is deprecated, please use ExternalCode1Info instead.
     *
     * @return $this
     */
    public function setExternalCode1($external_code1)
    {
        $this->container['external_code1'] = $external_code1;

        return $this;
    }

    /**
     * Gets external_code2
     *
     * @return string
     */
    public function getExternalCode2()
    {
        return $this->container['external_code2'];
    }

    /**
     * Sets external_code2
     *
     * @param string $external_code2 ExternalCode2 is deprecated, please use ExternalCode2Info instead.
     *
     * @return $this
     */
    public function setExternalCode2($external_code2)
    {
        $this->container['external_code2'] = $external_code2;

        return $this;
    }

    /**
     * Gets external_code1_info
     *
     * @return object
     */
    public function getExternalCode1Info()
    {
        return $this->container['external_code1_info'];
    }

    /**
     * Sets external_code1_info
     *
     * @param object $external_code1_info external_code1_info
     *
     * @return $this
     */
    public function setExternalCode1Info($external_code1_info)
    {
        $this->container['external_code1_info'] = $external_code1_info;

        return $this;
    }

    /**
     * Gets external_code2_info
     *
     * @return object
     */
    public function getExternalCode2Info()
    {
        return $this->container['external_code2_info'];
    }

    /**
     * Sets external_code2_info
     *
     * @param object $external_code2_info external_code2_info
     *
     * @return $this
     */
    public function setExternalCode2Info($external_code2_info)
    {
        $this->container['external_code2_info'] = $external_code2_info;

        return $this;
    }

    /**
     * Gets gl_consol_account_cd
     *
     * @return string
     */
    public function getGlConsolAccountCd()
    {
        return $this->container['gl_consol_account_cd'];
    }

    /**
     * Sets gl_consol_account_cd
     *
     * @param string $gl_consol_account_cd gl_consol_account_cd
     *
     * @return $this
     */
    public function setGlConsolAccountCd($gl_consol_account_cd)
    {
        $this->container['gl_consol_account_cd'] = $gl_consol_account_cd;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Number of item
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Name of item/description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


