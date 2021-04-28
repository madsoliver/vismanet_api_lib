<?php
/**
 * InventoryAdjustmentUpdateDto
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
 * InventoryAdjustmentUpdateDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a inventory issue in InventoryIssueController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAdjustmentUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryAdjustmentUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'control_cost' => 'object',
        'adjustment_lines' => '\Ekstralys\VismaNetApi\Model\InventoryAdjustmentLineUpdateDto[]',
        'reference_number' => 'object',
        'hold' => 'object',
        'date' => 'object',
        'post_period' => 'object',
        'external_reference' => 'object',
        'description' => 'object',
        'control_quantity' => 'object',
        'branch_number' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'control_cost' => null,
        'adjustment_lines' => null,
        'reference_number' => null,
        'hold' => null,
        'date' => null,
        'post_period' => null,
        'external_reference' => null,
        'description' => null,
        'control_quantity' => null,
        'branch_number' => null
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
        'control_cost' => 'controlCost',
        'adjustment_lines' => 'adjustmentLines',
        'reference_number' => 'referenceNumber',
        'hold' => 'hold',
        'date' => 'date',
        'post_period' => 'postPeriod',
        'external_reference' => 'externalReference',
        'description' => 'description',
        'control_quantity' => 'controlQuantity',
        'branch_number' => 'branchNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'control_cost' => 'setControlCost',
        'adjustment_lines' => 'setAdjustmentLines',
        'reference_number' => 'setReferenceNumber',
        'hold' => 'setHold',
        'date' => 'setDate',
        'post_period' => 'setPostPeriod',
        'external_reference' => 'setExternalReference',
        'description' => 'setDescription',
        'control_quantity' => 'setControlQuantity',
        'branch_number' => 'setBranchNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'control_cost' => 'getControlCost',
        'adjustment_lines' => 'getAdjustmentLines',
        'reference_number' => 'getReferenceNumber',
        'hold' => 'getHold',
        'date' => 'getDate',
        'post_period' => 'getPostPeriod',
        'external_reference' => 'getExternalReference',
        'description' => 'getDescription',
        'control_quantity' => 'getControlQuantity',
        'branch_number' => 'getBranchNumber'
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
        $this->container['control_cost'] = isset($data['control_cost']) ? $data['control_cost'] : null;
        $this->container['adjustment_lines'] = isset($data['adjustment_lines']) ? $data['adjustment_lines'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['control_quantity'] = isset($data['control_quantity']) ? $data['control_quantity'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
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
     * Gets control_cost
     *
     * @return object
     */
    public function getControlCost()
    {
        return $this->container['control_cost'];
    }

    /**
     * Sets control_cost
     *
     * @param object $control_cost The manually entered summary cost for all specified inventory adjustment items.
     *
     * @return $this
     */
    public function setControlCost($control_cost)
    {
        $this->container['control_cost'] = $control_cost;

        return $this;
    }

    /**
     * Gets adjustment_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\InventoryAdjustmentLineUpdateDto[]
     */
    public function getAdjustmentLines()
    {
        return $this->container['adjustment_lines'];
    }

    /**
     * Sets adjustment_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\InventoryAdjustmentLineUpdateDto[] $adjustment_lines The inventory adjustment lines
     *
     * @return $this
     */
    public function setAdjustmentLines($adjustment_lines)
    {
        $this->container['adjustment_lines'] = $adjustment_lines;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return object
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param object $reference_number The unique reference number of the receipt, which the system automatically assigns according to the numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form.
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return object
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param object $hold A check box that you select to give the receipt the On Hold status. Clear the check box to save the receipt with the Balanced status.
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets date
     *
     * @return object
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param object $date The date when the receipt was created. All transactions included in this document will have this transaction date.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets post_period
     *
     * @return object
     */
    public function getPostPeriod()
    {
        return $this->container['post_period'];
    }

    /**
     * Sets post_period
     *
     * @param object $post_period The financial period to which the transactions recorded in the document should be posted. Use the format MMYYYY.
     *
     * @return $this
     */
    public function setPostPeriod($post_period)
    {
        $this->container['post_period'] = $post_period;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return object
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param object $external_reference The external reference number of the inventory issue document (for example, the vendor’s reference code).
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

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
     * @param object $description A brief description of the inventory issue or its transactions.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets control_quantity
     *
     * @return object
     */
    public function getControlQuantity()
    {
        return $this->container['control_quantity'];
    }

    /**
     * Sets control_quantity
     *
     * @param object $control_quantity The manually entered quantity of inventory items. Control Qty. is available only if the Validate Document Totals on Entry option is selected on the Inventory Preferences form. If the Control Qty. and Total Qty.values do not match, the system generates a warning message and the issue cannot be saved.
     *
     * @return $this
     */
    public function setControlQuantity($control_quantity)
    {
        $this->container['control_quantity'] = $control_quantity;

        return $this;
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
     * @param object $branch_number The Branch associated
     *
     * @return $this
     */
    public function setBranchNumber($branch_number)
    {
        $this->container['branch_number'] = $branch_number;

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


