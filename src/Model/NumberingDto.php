<?php
/**
 * NumberingDto
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
 * NumberingDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NumberingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NumberingDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numbering_id' => 'string',
        'description' => 'string',
        'manual_numbering' => 'bool',
        'new_number_symbol' => 'string',
        'sequence' => '\Ekstralys\VismaNetApi\Model\NumberingSequenceDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numbering_id' => null,
        'description' => null,
        'manual_numbering' => null,
        'new_number_symbol' => null,
        'sequence' => null
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
        'numbering_id' => 'numberingId',
        'description' => 'description',
        'manual_numbering' => 'manualNumbering',
        'new_number_symbol' => 'newNumberSymbol',
        'sequence' => 'sequence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numbering_id' => 'setNumberingId',
        'description' => 'setDescription',
        'manual_numbering' => 'setManualNumbering',
        'new_number_symbol' => 'setNewNumberSymbol',
        'sequence' => 'setSequence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numbering_id' => 'getNumberingId',
        'description' => 'getDescription',
        'manual_numbering' => 'getManualNumbering',
        'new_number_symbol' => 'getNewNumberSymbol',
        'sequence' => 'getSequence'
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
        $this->container['numbering_id'] = isset($data['numbering_id']) ? $data['numbering_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['manual_numbering'] = isset($data['manual_numbering']) ? $data['manual_numbering'] : null;
        $this->container['new_number_symbol'] = isset($data['new_number_symbol']) ? $data['new_number_symbol'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
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
     * Gets numbering_id
     *
     * @return string
     */
    public function getNumberingId()
    {
        return $this->container['numbering_id'];
    }

    /**
     * Sets numbering_id
     *
     * @param string $numbering_id Mandatory field: The top part &gt; Numbering ID &gt; The unique ID of the numbering series, which is an alphanumeric string of up to 10 characters.
     *
     * @return $this
     */
    public function setNumberingId($numbering_id)
    {
        $this->container['numbering_id'] = $numbering_id;

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
     * @param string $description Mandatory field: The top part &gt; Description* &gt; The description of the numbering series.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets manual_numbering
     *
     * @return bool
     */
    public function getManualNumbering()
    {
        return $this->container['manual_numbering'];
    }

    /**
     * Sets manual_numbering
     *
     * @param bool $manual_numbering The top part &gt; Manual numbering &gt; A check box that indicates (if selected) that the system will not generate numbers for the series and users will need to specify document numbers manually.
     *
     * @return $this
     */
    public function setManualNumbering($manual_numbering)
    {
        $this->container['manual_numbering'] = $manual_numbering;

        return $this;
    }

    /**
     * Gets new_number_symbol
     *
     * @return string
     */
    public function getNewNumberSymbol()
    {
        return $this->container['new_number_symbol'];
    }

    /**
     * Sets new_number_symbol
     *
     * @param string $new_number_symbol Mandatory field: The top part &gt; New number symbol* &gt; An alphanumeric string used to indicate that a new number for an object will be assigned.
     *
     * @return $this
     */
    public function setNewNumberSymbol($new_number_symbol)
    {
        $this->container['new_number_symbol'] = $new_number_symbol;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return \Ekstralys\VismaNetApi\Model\NumberingSequenceDto[]
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param \Ekstralys\VismaNetApi\Model\NumberingSequenceDto[] $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

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

