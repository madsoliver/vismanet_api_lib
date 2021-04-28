<?php
/**
 * ProjectBudgetUpdateDto
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
 * ProjectBudgetUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectBudgetUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectBudgetUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_id' => 'object',
        'project_task_id' => 'object',
        'account_group_id' => 'object',
        'inventory_number' => 'object',
        'description' => 'object',
        'uom' => 'object',
        'rate' => 'object',
        'original_budget_qty' => 'object',
        'original_budget_amount' => 'object',
        'revised_budget_qty' => 'object',
        'revised_budget_amount' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_id' => null,
        'project_task_id' => null,
        'account_group_id' => null,
        'inventory_number' => null,
        'description' => null,
        'uom' => null,
        'rate' => null,
        'original_budget_qty' => null,
        'original_budget_amount' => null,
        'revised_budget_qty' => null,
        'revised_budget_amount' => null
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
        'project_id' => 'projectID',
        'project_task_id' => 'projectTaskID',
        'account_group_id' => 'accountGroupID',
        'inventory_number' => 'inventoryNumber',
        'description' => 'description',
        'uom' => 'uom',
        'rate' => 'rate',
        'original_budget_qty' => 'originalBudgetQty',
        'original_budget_amount' => 'originalBudgetAmount',
        'revised_budget_qty' => 'revisedBudgetQty',
        'revised_budget_amount' => 'revisedBudgetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_id' => 'setProjectId',
        'project_task_id' => 'setProjectTaskId',
        'account_group_id' => 'setAccountGroupId',
        'inventory_number' => 'setInventoryNumber',
        'description' => 'setDescription',
        'uom' => 'setUom',
        'rate' => 'setRate',
        'original_budget_qty' => 'setOriginalBudgetQty',
        'original_budget_amount' => 'setOriginalBudgetAmount',
        'revised_budget_qty' => 'setRevisedBudgetQty',
        'revised_budget_amount' => 'setRevisedBudgetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_id' => 'getProjectId',
        'project_task_id' => 'getProjectTaskId',
        'account_group_id' => 'getAccountGroupId',
        'inventory_number' => 'getInventoryNumber',
        'description' => 'getDescription',
        'uom' => 'getUom',
        'rate' => 'getRate',
        'original_budget_qty' => 'getOriginalBudgetQty',
        'original_budget_amount' => 'getOriginalBudgetAmount',
        'revised_budget_qty' => 'getRevisedBudgetQty',
        'revised_budget_amount' => 'getRevisedBudgetAmount'
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
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['project_task_id'] = isset($data['project_task_id']) ? $data['project_task_id'] : null;
        $this->container['account_group_id'] = isset($data['account_group_id']) ? $data['account_group_id'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['original_budget_qty'] = isset($data['original_budget_qty']) ? $data['original_budget_qty'] : null;
        $this->container['original_budget_amount'] = isset($data['original_budget_amount']) ? $data['original_budget_amount'] : null;
        $this->container['revised_budget_qty'] = isset($data['revised_budget_qty']) ? $data['revised_budget_qty'] : null;
        $this->container['revised_budget_amount'] = isset($data['revised_budget_amount']) ? $data['revised_budget_amount'] : null;
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
     * Gets project_id
     *
     * @return object
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param object $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets project_task_id
     *
     * @return object
     */
    public function getProjectTaskId()
    {
        return $this->container['project_task_id'];
    }

    /**
     * Sets project_task_id
     *
     * @param object $project_task_id project_task_id
     *
     * @return $this
     */
    public function setProjectTaskId($project_task_id)
    {
        $this->container['project_task_id'] = $project_task_id;

        return $this;
    }

    /**
     * Gets account_group_id
     *
     * @return object
     */
    public function getAccountGroupId()
    {
        return $this->container['account_group_id'];
    }

    /**
     * Sets account_group_id
     *
     * @param object $account_group_id account_group_id
     *
     * @return $this
     */
    public function setAccountGroupId($account_group_id)
    {
        $this->container['account_group_id'] = $account_group_id;

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
     * @param object $inventory_number inventory_number
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

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
     * Gets rate
     *
     * @return object
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param object $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets original_budget_qty
     *
     * @return object
     */
    public function getOriginalBudgetQty()
    {
        return $this->container['original_budget_qty'];
    }

    /**
     * Sets original_budget_qty
     *
     * @param object $original_budget_qty original_budget_qty
     *
     * @return $this
     */
    public function setOriginalBudgetQty($original_budget_qty)
    {
        $this->container['original_budget_qty'] = $original_budget_qty;

        return $this;
    }

    /**
     * Gets original_budget_amount
     *
     * @return object
     */
    public function getOriginalBudgetAmount()
    {
        return $this->container['original_budget_amount'];
    }

    /**
     * Sets original_budget_amount
     *
     * @param object $original_budget_amount original_budget_amount
     *
     * @return $this
     */
    public function setOriginalBudgetAmount($original_budget_amount)
    {
        $this->container['original_budget_amount'] = $original_budget_amount;

        return $this;
    }

    /**
     * Gets revised_budget_qty
     *
     * @return object
     */
    public function getRevisedBudgetQty()
    {
        return $this->container['revised_budget_qty'];
    }

    /**
     * Sets revised_budget_qty
     *
     * @param object $revised_budget_qty revised_budget_qty
     *
     * @return $this
     */
    public function setRevisedBudgetQty($revised_budget_qty)
    {
        $this->container['revised_budget_qty'] = $revised_budget_qty;

        return $this;
    }

    /**
     * Gets revised_budget_amount
     *
     * @return object
     */
    public function getRevisedBudgetAmount()
    {
        return $this->container['revised_budget_amount'];
    }

    /**
     * Sets revised_budget_amount
     *
     * @param object $revised_budget_amount revised_budget_amount
     *
     * @return $this
     */
    public function setRevisedBudgetAmount($revised_budget_amount)
    {
        $this->container['revised_budget_amount'] = $revised_budget_amount;

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


