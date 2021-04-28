<?php
/**
 * PurchaseOrderLineUpdateDto
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
 * PurchaseOrderLineUpdateDto Class Doc Comment
 *
 * @category Class
 * @description This class represent a Purchase Order Line in Purchase Order Controller. Used to pass data to server for creating or updating an order line
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderLineUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderLineUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'line_number' => 'object',
        'branch' => 'object',
        'inventory' => 'object',
        'line_type' => 'object',
        'warehouse' => 'object',
        'line_description' => 'object',
        'uom' => 'object',
        'order_qty' => 'object',
        'unit_cost' => 'object',
        'ext_cost' => 'object',
        'discount_percent' => 'object',
        'manual_discount' => 'object',
        'discount_code' => 'object',
        'amount' => 'object',
        'alternate_id' => 'object',
        'min_receipt' => 'object',
        'max_receipt' => 'object',
        'complete_on' => 'object',
        'receipt_action' => 'object',
        'tax_category' => 'object',
        'account' => 'object',
        'sub' => '\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]',
        'project' => 'object',
        'project_task' => 'object',
        'requested' => 'object',
        'promised' => 'object',
        'note' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'line_number' => null,
        'branch' => null,
        'inventory' => null,
        'line_type' => null,
        'warehouse' => null,
        'line_description' => null,
        'uom' => null,
        'order_qty' => null,
        'unit_cost' => null,
        'ext_cost' => null,
        'discount_percent' => null,
        'manual_discount' => null,
        'discount_code' => null,
        'amount' => null,
        'alternate_id' => null,
        'min_receipt' => null,
        'max_receipt' => null,
        'complete_on' => null,
        'receipt_action' => null,
        'tax_category' => null,
        'account' => null,
        'sub' => null,
        'project' => null,
        'project_task' => null,
        'requested' => null,
        'promised' => null,
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
        'operation' => 'operation',
        'line_number' => 'lineNumber',
        'branch' => 'branch',
        'inventory' => 'inventory',
        'line_type' => 'lineType',
        'warehouse' => 'warehouse',
        'line_description' => 'lineDescription',
        'uom' => 'uom',
        'order_qty' => 'orderQty',
        'unit_cost' => 'unitCost',
        'ext_cost' => 'extCost',
        'discount_percent' => 'discountPercent',
        'manual_discount' => 'manualDiscount',
        'discount_code' => 'discountCode',
        'amount' => 'amount',
        'alternate_id' => 'alternateId',
        'min_receipt' => 'minReceipt',
        'max_receipt' => 'maxReceipt',
        'complete_on' => 'completeOn',
        'receipt_action' => 'receiptAction',
        'tax_category' => 'taxCategory',
        'account' => 'account',
        'sub' => 'sub',
        'project' => 'project',
        'project_task' => 'projectTask',
        'requested' => 'requested',
        'promised' => 'promised',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'line_number' => 'setLineNumber',
        'branch' => 'setBranch',
        'inventory' => 'setInventory',
        'line_type' => 'setLineType',
        'warehouse' => 'setWarehouse',
        'line_description' => 'setLineDescription',
        'uom' => 'setUom',
        'order_qty' => 'setOrderQty',
        'unit_cost' => 'setUnitCost',
        'ext_cost' => 'setExtCost',
        'discount_percent' => 'setDiscountPercent',
        'manual_discount' => 'setManualDiscount',
        'discount_code' => 'setDiscountCode',
        'amount' => 'setAmount',
        'alternate_id' => 'setAlternateId',
        'min_receipt' => 'setMinReceipt',
        'max_receipt' => 'setMaxReceipt',
        'complete_on' => 'setCompleteOn',
        'receipt_action' => 'setReceiptAction',
        'tax_category' => 'setTaxCategory',
        'account' => 'setAccount',
        'sub' => 'setSub',
        'project' => 'setProject',
        'project_task' => 'setProjectTask',
        'requested' => 'setRequested',
        'promised' => 'setPromised',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'line_number' => 'getLineNumber',
        'branch' => 'getBranch',
        'inventory' => 'getInventory',
        'line_type' => 'getLineType',
        'warehouse' => 'getWarehouse',
        'line_description' => 'getLineDescription',
        'uom' => 'getUom',
        'order_qty' => 'getOrderQty',
        'unit_cost' => 'getUnitCost',
        'ext_cost' => 'getExtCost',
        'discount_percent' => 'getDiscountPercent',
        'manual_discount' => 'getManualDiscount',
        'discount_code' => 'getDiscountCode',
        'amount' => 'getAmount',
        'alternate_id' => 'getAlternateId',
        'min_receipt' => 'getMinReceipt',
        'max_receipt' => 'getMaxReceipt',
        'complete_on' => 'getCompleteOn',
        'receipt_action' => 'getReceiptAction',
        'tax_category' => 'getTaxCategory',
        'account' => 'getAccount',
        'sub' => 'getSub',
        'project' => 'getProject',
        'project_task' => 'getProjectTask',
        'requested' => 'getRequested',
        'promised' => 'getPromised',
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['line_type'] = isset($data['line_type']) ? $data['line_type'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['line_description'] = isset($data['line_description']) ? $data['line_description'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['order_qty'] = isset($data['order_qty']) ? $data['order_qty'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['ext_cost'] = isset($data['ext_cost']) ? $data['ext_cost'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['alternate_id'] = isset($data['alternate_id']) ? $data['alternate_id'] : null;
        $this->container['min_receipt'] = isset($data['min_receipt']) ? $data['min_receipt'] : null;
        $this->container['max_receipt'] = isset($data['max_receipt']) ? $data['max_receipt'] : null;
        $this->container['complete_on'] = isset($data['complete_on']) ? $data['complete_on'] : null;
        $this->container['receipt_action'] = isset($data['receipt_action']) ? $data['receipt_action'] : null;
        $this->container['tax_category'] = isset($data['tax_category']) ? $data['tax_category'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_task'] = isset($data['project_task']) ? $data['project_task'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
        $this->container['promised'] = isset($data['promised']) ? $data['promised'] : null;
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
     * Gets line_number
     *
     * @return object
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param object $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return object
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param object $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return object
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param object $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets line_type
     *
     * @return object
     */
    public function getLineType()
    {
        return $this->container['line_type'];
    }

    /**
     * Sets line_type
     *
     * @param object $line_type line_type
     *
     * @return $this
     */
    public function setLineType($line_type)
    {
        $this->container['line_type'] = $line_type;

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
     * Gets order_qty
     *
     * @return object
     */
    public function getOrderQty()
    {
        return $this->container['order_qty'];
    }

    /**
     * Sets order_qty
     *
     * @param object $order_qty order_qty
     *
     * @return $this
     */
    public function setOrderQty($order_qty)
    {
        $this->container['order_qty'] = $order_qty;

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
     * Gets ext_cost
     *
     * @return object
     */
    public function getExtCost()
    {
        return $this->container['ext_cost'];
    }

    /**
     * Sets ext_cost
     *
     * @param object $ext_cost ext_cost
     *
     * @return $this
     */
    public function setExtCost($ext_cost)
    {
        $this->container['ext_cost'] = $ext_cost;

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
     * Gets amount
     *
     * @return object
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param object $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets alternate_id
     *
     * @return object
     */
    public function getAlternateId()
    {
        return $this->container['alternate_id'];
    }

    /**
     * Sets alternate_id
     *
     * @param object $alternate_id alternate_id
     *
     * @return $this
     */
    public function setAlternateId($alternate_id)
    {
        $this->container['alternate_id'] = $alternate_id;

        return $this;
    }

    /**
     * Gets min_receipt
     *
     * @return object
     */
    public function getMinReceipt()
    {
        return $this->container['min_receipt'];
    }

    /**
     * Sets min_receipt
     *
     * @param object $min_receipt min_receipt
     *
     * @return $this
     */
    public function setMinReceipt($min_receipt)
    {
        $this->container['min_receipt'] = $min_receipt;

        return $this;
    }

    /**
     * Gets max_receipt
     *
     * @return object
     */
    public function getMaxReceipt()
    {
        return $this->container['max_receipt'];
    }

    /**
     * Sets max_receipt
     *
     * @param object $max_receipt max_receipt
     *
     * @return $this
     */
    public function setMaxReceipt($max_receipt)
    {
        $this->container['max_receipt'] = $max_receipt;

        return $this;
    }

    /**
     * Gets complete_on
     *
     * @return object
     */
    public function getCompleteOn()
    {
        return $this->container['complete_on'];
    }

    /**
     * Sets complete_on
     *
     * @param object $complete_on complete_on
     *
     * @return $this
     */
    public function setCompleteOn($complete_on)
    {
        $this->container['complete_on'] = $complete_on;

        return $this;
    }

    /**
     * Gets receipt_action
     *
     * @return object
     */
    public function getReceiptAction()
    {
        return $this->container['receipt_action'];
    }

    /**
     * Sets receipt_action
     *
     * @param object $receipt_action receipt_action
     *
     * @return $this
     */
    public function setReceiptAction($receipt_action)
    {
        $this->container['receipt_action'] = $receipt_action;

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
     * Gets account
     *
     * @return object
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param object $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets sub
     *
     * @return \Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     *
     * @param \Ekstralys\VismaNetApi\Model\SegmentUpdateDto[] $sub sub
     *
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets project
     *
     * @return object
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param object $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_task
     *
     * @return object
     */
    public function getProjectTask()
    {
        return $this->container['project_task'];
    }

    /**
     * Sets project_task
     *
     * @param object $project_task project_task
     *
     * @return $this
     */
    public function setProjectTask($project_task)
    {
        $this->container['project_task'] = $project_task;

        return $this;
    }

    /**
     * Gets requested
     *
     * @return object
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     *
     * @param object $requested requested
     *
     * @return $this
     */
    public function setRequested($requested)
    {
        $this->container['requested'] = $requested;

        return $this;
    }

    /**
     * Gets promised
     *
     * @return object
     */
    public function getPromised()
    {
        return $this->container['promised'];
    }

    /**
     * Sets promised
     *
     * @param object $promised promised
     *
     * @return $this
     */
    public function setPromised($promised)
    {
        $this->container['promised'] = $promised;

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

