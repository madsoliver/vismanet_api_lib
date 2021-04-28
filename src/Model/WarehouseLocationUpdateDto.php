<?php
/**
 * WarehouseLocationUpdateDto
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
 * WarehouseLocationUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseLocationUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WarehouseLocationUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_id' => 'object',
        'description' => 'object',
        'active' => 'object',
        'incl_qty_avail' => 'object',
        'is_costed' => 'object',
        'sales_valid' => 'object',
        'receipts_valid' => 'object',
        'transfers_valid' => 'object',
        'assembly_valid' => 'object',
        'pick_priority' => 'object',
        'primary_item_valid' => 'object',
        'primary_item_id' => 'object',
        'primary_item_class_id' => 'object',
        'project_id' => 'object',
        'project_task_id' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_id' => null,
        'description' => null,
        'active' => null,
        'incl_qty_avail' => null,
        'is_costed' => null,
        'sales_valid' => null,
        'receipts_valid' => null,
        'transfers_valid' => null,
        'assembly_valid' => null,
        'pick_priority' => null,
        'primary_item_valid' => null,
        'primary_item_id' => null,
        'primary_item_class_id' => null,
        'project_id' => null,
        'project_task_id' => null
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
        'location_id' => 'locationId',
        'description' => 'description',
        'active' => 'active',
        'incl_qty_avail' => 'inclQtyAvail',
        'is_costed' => 'isCosted',
        'sales_valid' => 'salesValid',
        'receipts_valid' => 'receiptsValid',
        'transfers_valid' => 'transfersValid',
        'assembly_valid' => 'assemblyValid',
        'pick_priority' => 'pickPriority',
        'primary_item_valid' => 'primaryItemValid',
        'primary_item_id' => 'primaryItemId',
        'primary_item_class_id' => 'primaryItemClassId',
        'project_id' => 'projectId',
        'project_task_id' => 'projectTaskId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_id' => 'setLocationId',
        'description' => 'setDescription',
        'active' => 'setActive',
        'incl_qty_avail' => 'setInclQtyAvail',
        'is_costed' => 'setIsCosted',
        'sales_valid' => 'setSalesValid',
        'receipts_valid' => 'setReceiptsValid',
        'transfers_valid' => 'setTransfersValid',
        'assembly_valid' => 'setAssemblyValid',
        'pick_priority' => 'setPickPriority',
        'primary_item_valid' => 'setPrimaryItemValid',
        'primary_item_id' => 'setPrimaryItemId',
        'primary_item_class_id' => 'setPrimaryItemClassId',
        'project_id' => 'setProjectId',
        'project_task_id' => 'setProjectTaskId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_id' => 'getLocationId',
        'description' => 'getDescription',
        'active' => 'getActive',
        'incl_qty_avail' => 'getInclQtyAvail',
        'is_costed' => 'getIsCosted',
        'sales_valid' => 'getSalesValid',
        'receipts_valid' => 'getReceiptsValid',
        'transfers_valid' => 'getTransfersValid',
        'assembly_valid' => 'getAssemblyValid',
        'pick_priority' => 'getPickPriority',
        'primary_item_valid' => 'getPrimaryItemValid',
        'primary_item_id' => 'getPrimaryItemId',
        'primary_item_class_id' => 'getPrimaryItemClassId',
        'project_id' => 'getProjectId',
        'project_task_id' => 'getProjectTaskId'
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
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['incl_qty_avail'] = isset($data['incl_qty_avail']) ? $data['incl_qty_avail'] : null;
        $this->container['is_costed'] = isset($data['is_costed']) ? $data['is_costed'] : null;
        $this->container['sales_valid'] = isset($data['sales_valid']) ? $data['sales_valid'] : null;
        $this->container['receipts_valid'] = isset($data['receipts_valid']) ? $data['receipts_valid'] : null;
        $this->container['transfers_valid'] = isset($data['transfers_valid']) ? $data['transfers_valid'] : null;
        $this->container['assembly_valid'] = isset($data['assembly_valid']) ? $data['assembly_valid'] : null;
        $this->container['pick_priority'] = isset($data['pick_priority']) ? $data['pick_priority'] : null;
        $this->container['primary_item_valid'] = isset($data['primary_item_valid']) ? $data['primary_item_valid'] : null;
        $this->container['primary_item_id'] = isset($data['primary_item_id']) ? $data['primary_item_id'] : null;
        $this->container['primary_item_class_id'] = isset($data['primary_item_class_id']) ? $data['primary_item_class_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['project_task_id'] = isset($data['project_task_id']) ? $data['project_task_id'] : null;
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
     * Gets location_id
     *
     * @return object
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param object $location_id Location ID &gt; The unique ID of the warehouse location.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
     * @param object $description Description &gt; A brief description of the warehouse location.
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
     * @return object
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param object $active Active &gt; This check box indicates whether this location is active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets incl_qty_avail
     *
     * @return object
     */
    public function getInclQtyAvail()
    {
        return $this->container['incl_qty_avail'];
    }

    /**
     * Sets incl_qty_avail
     *
     * @param object $incl_qty_avail Include in qty. available &gt; You select this check box if the quantities of goods available at this location will be included in the quantities of available goods and used in inventory transactions, such as issues and transfers.
     *
     * @return $this
     */
    public function setInclQtyAvail($incl_qty_avail)
    {
        $this->container['incl_qty_avail'] = $incl_qty_avail;

        return $this;
    }

    /**
     * Gets is_costed
     *
     * @return object
     */
    public function getIsCosted()
    {
        return $this->container['is_costed'];
    }

    /**
     * Sets is_costed
     *
     * @param object $is_costed Cost separately &gt; You select this check box if the costs for goods available at this location will be calculated separately from costs calculated at the system-level; that is, for FIFO and specific valuation methods, separate cost layers will be created for this location.
     *
     * @return $this
     */
    public function setIsCosted($is_costed)
    {
        $this->container['is_costed'] = $is_costed;

        return $this;
    }

    /**
     * Gets sales_valid
     *
     * @return object
     */
    public function getSalesValid()
    {
        return $this->container['sales_valid'];
    }

    /**
     * Sets sales_valid
     *
     * @param object $sales_valid Sales allowed &gt; You select this check box if sales are allowed from this location.
     *
     * @return $this
     */
    public function setSalesValid($sales_valid)
    {
        $this->container['sales_valid'] = $sales_valid;

        return $this;
    }

    /**
     * Gets receipts_valid
     *
     * @return object
     */
    public function getReceiptsValid()
    {
        return $this->container['receipts_valid'];
    }

    /**
     * Sets receipts_valid
     *
     * @param object $receipts_valid Receipts allowed &gt; You select this check box if receipts are allowed at this location.
     *
     * @return $this
     */
    public function setReceiptsValid($receipts_valid)
    {
        $this->container['receipts_valid'] = $receipts_valid;

        return $this;
    }

    /**
     * Gets transfers_valid
     *
     * @return object
     */
    public function getTransfersValid()
    {
        return $this->container['transfers_valid'];
    }

    /**
     * Sets transfers_valid
     *
     * @param object $transfers_valid Transfers allowed &gt; You select this check box if transfers are allowed for this location.
     *
     * @return $this
     */
    public function setTransfersValid($transfers_valid)
    {
        $this->container['transfers_valid'] = $transfers_valid;

        return $this;
    }

    /**
     * Gets assembly_valid
     *
     * @return object
     */
    public function getAssemblyValid()
    {
        return $this->container['assembly_valid'];
    }

    /**
     * Sets assembly_valid
     *
     * @param object $assembly_valid Assembly allowed &gt; You select this check box if assembly operations are allowed at this location.
     *
     * @return $this
     */
    public function setAssemblyValid($assembly_valid)
    {
        $this->container['assembly_valid'] = $assembly_valid;

        return $this;
    }

    /**
     * Gets pick_priority
     *
     * @return object
     */
    public function getPickPriority()
    {
        return $this->container['pick_priority'];
    }

    /**
     * Sets pick_priority
     *
     * @param object $pick_priority Pick priority &gt; The order of which location should have priority.
     *
     * @return $this
     */
    public function setPickPriority($pick_priority)
    {
        $this->container['pick_priority'] = $pick_priority;

        return $this;
    }

    /**
     * Gets primary_item_valid
     *
     * @return object
     */
    public function getPrimaryItemValid()
    {
        return $this->container['primary_item_valid'];
    }

    /**
     * Sets primary_item_valid
     *
     * @param object $primary_item_valid Primary item validation &gt; An option indicating whether the operations with the primary item should be validated for this location and how.
     *
     * @return $this
     */
    public function setPrimaryItemValid($primary_item_valid)
    {
        $this->container['primary_item_valid'] = $primary_item_valid;

        return $this;
    }

    /**
     * Gets primary_item_id
     *
     * @return object
     */
    public function getPrimaryItemId()
    {
        return $this->container['primary_item_id'];
    }

    /**
     * Sets primary_item_id
     *
     * @param object $primary_item_id Primary item &gt; The primary item for this location, which is the item that is received the most often or stored here in the highest volumes.
     *
     * @return $this
     */
    public function setPrimaryItemId($primary_item_id)
    {
        $this->container['primary_item_id'] = $primary_item_id;

        return $this;
    }

    /**
     * Gets primary_item_class_id
     *
     * @return object
     */
    public function getPrimaryItemClassId()
    {
        return $this->container['primary_item_class_id'];
    }

    /**
     * Sets primary_item_class_id
     *
     * @param object $primary_item_class_id Primary item class &gt; The primary item class for this location; items of this class are received the most often or stored here in the highest volumes.
     *
     * @return $this
     */
    public function setPrimaryItemClassId($primary_item_class_id)
    {
        $this->container['primary_item_class_id'] = $primary_item_class_id;

        return $this;
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
     * @param object $project_id Project &gt; The project to associate with this location by default.
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
     * @param object $project_task_id Project task &gt; The project task to associate with this location by default.
     *
     * @return $this
     */
    public function setProjectTaskId($project_task_id)
    {
        $this->container['project_task_id'] = $project_task_id;

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


