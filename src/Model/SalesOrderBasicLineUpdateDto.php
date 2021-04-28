<?php
/**
 * SalesOrderBasicLineUpdateDto
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
 * SalesOrderBasicLineUpdateDto Class Doc Comment
 *
 * @category Class
 * @description This class represent a Sales Order Line in Sales Order Controller. Used to pass data to server for creating or updating an order line
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderBasicLineUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrderBasicLineUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branch_number' => 'object',
        'operation' => 'string',
        'line_nbr' => 'object',
        'inventory_id' => 'object',
        'inventory_number' => 'object',
        'warehouse' => 'object',
        'uom' => 'object',
        'quantity' => 'object',
        'unit_cost' => 'object',
        'unit_price' => 'object',
        'discount_percent' => 'object',
        'discount_amount' => 'object',
        'discount_code' => 'object',
        'manual_discount' => 'object',
        'disc_unit_price' => 'object',
        'line_description' => 'object',
        'note' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branch_number' => null,
        'operation' => null,
        'line_nbr' => null,
        'inventory_id' => null,
        'inventory_number' => null,
        'warehouse' => null,
        'uom' => null,
        'quantity' => null,
        'unit_cost' => null,
        'unit_price' => null,
        'discount_percent' => null,
        'discount_amount' => null,
        'discount_code' => null,
        'manual_discount' => null,
        'disc_unit_price' => null,
        'line_description' => null,
        'note' => null
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
        'branch_number' => 'branchNumber',
        'operation' => 'operation',
        'line_nbr' => 'lineNbr',
        'inventory_id' => 'inventoryId',
        'inventory_number' => 'inventoryNumber',
        'warehouse' => 'warehouse',
        'uom' => 'uom',
        'quantity' => 'quantity',
        'unit_cost' => 'unitCost',
        'unit_price' => 'unitPrice',
        'discount_percent' => 'discountPercent',
        'discount_amount' => 'discountAmount',
        'discount_code' => 'discountCode',
        'manual_discount' => 'manualDiscount',
        'disc_unit_price' => 'discUnitPrice',
        'line_description' => 'lineDescription',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch_number' => 'setBranchNumber',
        'operation' => 'setOperation',
        'line_nbr' => 'setLineNbr',
        'inventory_id' => 'setInventoryId',
        'inventory_number' => 'setInventoryNumber',
        'warehouse' => 'setWarehouse',
        'uom' => 'setUom',
        'quantity' => 'setQuantity',
        'unit_cost' => 'setUnitCost',
        'unit_price' => 'setUnitPrice',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount' => 'setDiscountAmount',
        'discount_code' => 'setDiscountCode',
        'manual_discount' => 'setManualDiscount',
        'disc_unit_price' => 'setDiscUnitPrice',
        'line_description' => 'setLineDescription',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch_number' => 'getBranchNumber',
        'operation' => 'getOperation',
        'line_nbr' => 'getLineNbr',
        'inventory_id' => 'getInventoryId',
        'inventory_number' => 'getInventoryNumber',
        'warehouse' => 'getWarehouse',
        'uom' => 'getUom',
        'quantity' => 'getQuantity',
        'unit_cost' => 'getUnitCost',
        'unit_price' => 'getUnitPrice',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount' => 'getDiscountAmount',
        'discount_code' => 'getDiscountCode',
        'manual_discount' => 'getManualDiscount',
        'disc_unit_price' => 'getDiscUnitPrice',
        'line_description' => 'getLineDescription',
        'note' => 'getNote'
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
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['line_nbr'] = isset($data['line_nbr']) ? $data['line_nbr'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['disc_unit_price'] = isset($data['disc_unit_price']) ? $data['disc_unit_price'] : null;
        $this->container['line_description'] = isset($data['line_description']) ? $data['line_description'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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

        if ($this->container['inventory_number'] === null) {
            $invalidProperties[] = "'inventory_number' can't be null";
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
     * Gets branch_number
     *
     * @return object
     */
    public function getBranchNumber()
    {
        return $this->container['branch_number'];
    }

    /**
     * Sets branch_number
     *
     * @param object $branch_number branch_number
     *
     * @return $this
     */
    public function setBranchNumber($branch_number)
    {
        $this->container['branch_number'] = $branch_number;

        return $this;
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
     * Gets line_nbr
     *
     * @return object
     */
    public function getLineNbr()
    {
        return $this->container['line_nbr'];
    }

    /**
     * Sets line_nbr
     *
     * @param object $line_nbr line_nbr
     *
     * @return $this
     */
    public function setLineNbr($line_nbr)
    {
        $this->container['line_nbr'] = $line_nbr;

        return $this;
    }

    /**
     * Gets inventory_id
     *
     * @return object
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     *
     * @param object $inventory_id InventoryId is deprecated, please use InventoryNumber instead.
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets inventory_number
     *
     * @return object
     */
    public function getInventoryNumber()
    {
        return $this->container['inventory_number'];
    }

    /**
     * Sets inventory_number
     *
     * @param object $inventory_number Mandatory field
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return object
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param object $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return object
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param object $uom uom
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return object
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param object $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return object
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param object $unit_cost unit_cost
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return object
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param object $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return object
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param object $discount_percent discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return object
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param object $discount_amount discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_code
     *
     * @return object
     */
    public function getDiscountCode()
    {
        return $this->container['discount_code'];
    }

    /**
     * Sets discount_code
     *
     * @param object $discount_code discount_code
     *
     * @return $this
     */
    public function setDiscountCode($discount_code)
    {
        $this->container['discount_code'] = $discount_code;

        return $this;
    }

    /**
     * Gets manual_discount
     *
     * @return object
     */
    public function getManualDiscount()
    {
        return $this->container['manual_discount'];
    }

    /**
     * Sets manual_discount
     *
     * @param object $manual_discount manual_discount
     *
     * @return $this
     */
    public function setManualDiscount($manual_discount)
    {
        $this->container['manual_discount'] = $manual_discount;

        return $this;
    }

    /**
     * Gets disc_unit_price
     *
     * @return object
     */
    public function getDiscUnitPrice()
    {
        return $this->container['disc_unit_price'];
    }

    /**
     * Sets disc_unit_price
     *
     * @param object $disc_unit_price disc_unit_price
     *
     * @return $this
     */
    public function setDiscUnitPrice($disc_unit_price)
    {
        $this->container['disc_unit_price'] = $disc_unit_price;

        return $this;
    }

    /**
     * Gets line_description
     *
     * @return object
     */
    public function getLineDescription()
    {
        return $this->container['line_description'];
    }

    /**
     * Sets line_description
     *
     * @param object $line_description line_description
     *
     * @return $this
     */
    public function setLineDescription($line_description)
    {
        $this->container['line_description'] = $line_description;

        return $this;
    }

    /**
     * Gets note
     *
     * @return object
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param object $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


