<?php
/**
 * VatCategoryDto
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
 * VatCategoryDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VatCategoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VatCategoryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vat_category_id' => 'string',
        'description' => 'string',
        'active' => 'bool',
        'exclude_listed_taxes' => 'bool',
        'last_modified_date_time' => '\DateTime',
        'vat_category_lines' => '\Ekstralys\VismaNetApi\Model\VatCategoryLineDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vat_category_id' => null,
        'description' => null,
        'active' => null,
        'exclude_listed_taxes' => null,
        'last_modified_date_time' => 'date-time',
        'vat_category_lines' => null
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
        'vat_category_id' => 'vatCategoryId',
        'description' => 'description',
        'active' => 'active',
        'exclude_listed_taxes' => 'excludeListedTaxes',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'vat_category_lines' => 'vatCategoryLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vat_category_id' => 'setVatCategoryId',
        'description' => 'setDescription',
        'active' => 'setActive',
        'exclude_listed_taxes' => 'setExcludeListedTaxes',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'vat_category_lines' => 'setVatCategoryLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vat_category_id' => 'getVatCategoryId',
        'description' => 'getDescription',
        'active' => 'getActive',
        'exclude_listed_taxes' => 'getExcludeListedTaxes',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'vat_category_lines' => 'getVatCategoryLines'
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
        $this->container['vat_category_id'] = isset($data['vat_category_id']) ? $data['vat_category_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['exclude_listed_taxes'] = isset($data['exclude_listed_taxes']) ? $data['exclude_listed_taxes'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['vat_category_lines'] = isset($data['vat_category_lines']) ? $data['vat_category_lines'] : null;
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
     * Gets vat_category_id
     *
     * @return string
     */
    public function getVatCategoryId()
    {
        return $this->container['vat_category_id'];
    }

    /**
     * Sets vat_category_id
     *
     * @param string $vat_category_id Mandatory field: The top part &gt; VAT category ID* &gt; The unique ID of the VAT category. An alphanumeric string of up to six characters can be used.
     *
     * @return $this
     */
    public function setVatCategoryId($vat_category_id)
    {
        $this->container['vat_category_id'] = $vat_category_id;

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
     * @param string $description The top part &gt; Description &gt; A detailed description of the category.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param bool $active The top part &gt; Active &gt; A check box that means (if selected) that this VAT category is active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets exclude_listed_taxes
     *
     * @return bool
     */
    public function getExcludeListedTaxes()
    {
        return $this->container['exclude_listed_taxes'];
    }

    /**
     * Sets exclude_listed_taxes
     *
     * @param bool $exclude_listed_taxes The top part &gt; Exclude listed taxes &gt; A check box that indicates (if selected) this VAT category should exclude the listed taxes from VAT zones.
     *
     * @return $this
     */
    public function setExcludeListedTaxes($exclude_listed_taxes)
    {
        $this->container['exclude_listed_taxes'] = $exclude_listed_taxes;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime $last_modified_date_time Systemgenerated information.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets vat_category_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\VatCategoryLineDto[]
     */
    public function getVatCategoryLines()
    {
        return $this->container['vat_category_lines'];
    }

    /**
     * Sets vat_category_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\VatCategoryLineDto[] $vat_category_lines The table &gt;
     *
     * @return $this
     */
    public function setVatCategoryLines($vat_category_lines)
    {
        $this->container['vat_category_lines'] = $vat_category_lines;

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


