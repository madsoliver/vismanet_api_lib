<?php
/**
 * KitSpecificationUpdateDto
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
 * KitSpecificationUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KitSpecificationUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KitSpecificationUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'kit_inventory_id' => 'object',
        'revision_id' => 'object',
        'descr' => 'object',
        'is_active' => 'object',
        'allow_comp_addition' => 'object',
        'is_non_stock' => 'object',
        'stock_component_lines' => '\Ekstralys\VismaNetApi\Model\KitSpecificationStockComponentsUpdateDto[]',
        'non_stock_component_lines' => '\Ekstralys\VismaNetApi\Model\KitSpecificationNonStockComponentsUpdateDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'kit_inventory_id' => null,
        'revision_id' => null,
        'descr' => null,
        'is_active' => null,
        'allow_comp_addition' => null,
        'is_non_stock' => null,
        'stock_component_lines' => null,
        'non_stock_component_lines' => null
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
        'operation' => 'operation',
        'kit_inventory_id' => 'kitInventoryID',
        'revision_id' => 'revisionID',
        'descr' => 'descr',
        'is_active' => 'isActive',
        'allow_comp_addition' => 'allowCompAddition',
        'is_non_stock' => 'isNonStock',
        'stock_component_lines' => 'stockComponentLines',
        'non_stock_component_lines' => 'nonStockComponentLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'kit_inventory_id' => 'setKitInventoryId',
        'revision_id' => 'setRevisionId',
        'descr' => 'setDescr',
        'is_active' => 'setIsActive',
        'allow_comp_addition' => 'setAllowCompAddition',
        'is_non_stock' => 'setIsNonStock',
        'stock_component_lines' => 'setStockComponentLines',
        'non_stock_component_lines' => 'setNonStockComponentLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'kit_inventory_id' => 'getKitInventoryId',
        'revision_id' => 'getRevisionId',
        'descr' => 'getDescr',
        'is_active' => 'getIsActive',
        'allow_comp_addition' => 'getAllowCompAddition',
        'is_non_stock' => 'getIsNonStock',
        'stock_component_lines' => 'getStockComponentLines',
        'non_stock_component_lines' => 'getNonStockComponentLines'
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

    const OPERATION_INSERT = 'Insert';
    const OPERATION_UPDATE = 'Update';
    const OPERATION_DELETE = 'Delete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_INSERT,
            self::OPERATION_UPDATE,
            self::OPERATION_DELETE,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['kit_inventory_id'] = isset($data['kit_inventory_id']) ? $data['kit_inventory_id'] : null;
        $this->container['revision_id'] = isset($data['revision_id']) ? $data['revision_id'] : null;
        $this->container['descr'] = isset($data['descr']) ? $data['descr'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['allow_comp_addition'] = isset($data['allow_comp_addition']) ? $data['allow_comp_addition'] : null;
        $this->container['is_non_stock'] = isset($data['is_non_stock']) ? $data['is_non_stock'] : null;
        $this->container['stock_component_lines'] = isset($data['stock_component_lines']) ? $data['stock_component_lines'] : null;
        $this->container['non_stock_component_lines'] = isset($data['non_stock_component_lines']) ? $data['non_stock_component_lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets kit_inventory_id
     *
     * @return object
     */
    public function getKitInventoryId()
    {
        return $this->container['kit_inventory_id'];
    }

    /**
     * Sets kit_inventory_id
     *
     * @param object $kit_inventory_id kit_inventory_id
     *
     * @return $this
     */
    public function setKitInventoryId($kit_inventory_id)
    {
        $this->container['kit_inventory_id'] = $kit_inventory_id;

        return $this;
    }

    /**
     * Gets revision_id
     *
     * @return object
     */
    public function getRevisionId()
    {
        return $this->container['revision_id'];
    }

    /**
     * Sets revision_id
     *
     * @param object $revision_id revision_id
     *
     * @return $this
     */
    public function setRevisionId($revision_id)
    {
        $this->container['revision_id'] = $revision_id;

        return $this;
    }

    /**
     * Gets descr
     *
     * @return object
     */
    public function getDescr()
    {
        return $this->container['descr'];
    }

    /**
     * Sets descr
     *
     * @param object $descr descr
     *
     * @return $this
     */
    public function setDescr($descr)
    {
        $this->container['descr'] = $descr;

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
     * Gets allow_comp_addition
     *
     * @return object
     */
    public function getAllowCompAddition()
    {
        return $this->container['allow_comp_addition'];
    }

    /**
     * Sets allow_comp_addition
     *
     * @param object $allow_comp_addition allow_comp_addition
     *
     * @return $this
     */
    public function setAllowCompAddition($allow_comp_addition)
    {
        $this->container['allow_comp_addition'] = $allow_comp_addition;

        return $this;
    }

    /**
     * Gets is_non_stock
     *
     * @return object
     */
    public function getIsNonStock()
    {
        return $this->container['is_non_stock'];
    }

    /**
     * Sets is_non_stock
     *
     * @param object $is_non_stock is_non_stock
     *
     * @return $this
     */
    public function setIsNonStock($is_non_stock)
    {
        $this->container['is_non_stock'] = $is_non_stock;

        return $this;
    }

    /**
     * Gets stock_component_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\KitSpecificationStockComponentsUpdateDto[]
     */
    public function getStockComponentLines()
    {
        return $this->container['stock_component_lines'];
    }

    /**
     * Sets stock_component_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\KitSpecificationStockComponentsUpdateDto[] $stock_component_lines stock_component_lines
     *
     * @return $this
     */
    public function setStockComponentLines($stock_component_lines)
    {
        $this->container['stock_component_lines'] = $stock_component_lines;

        return $this;
    }

    /**
     * Gets non_stock_component_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\KitSpecificationNonStockComponentsUpdateDto[]
     */
    public function getNonStockComponentLines()
    {
        return $this->container['non_stock_component_lines'];
    }

    /**
     * Sets non_stock_component_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\KitSpecificationNonStockComponentsUpdateDto[] $non_stock_component_lines non_stock_component_lines
     *
     * @return $this
     */
    public function setNonStockComponentLines($non_stock_component_lines)
    {
        $this->container['non_stock_component_lines'] = $non_stock_component_lines;

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


