<?php
/**
 * KitAssemblyDto
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
 * KitAssemblyDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KitAssemblyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KitAssemblyDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'ref_no' => 'string',
        'status' => 'string',
        'hold' => 'bool',
        'date' => '\DateTime',
        'post_period' => 'string',
        'item_id' => 'string',
        'revision' => 'string',
        'reason_code' => 'string',
        'description' => 'string',
        'warehouse' => 'string',
        'location' => 'string',
        'uo_m' => 'string',
        'quantity' => 'double',
        'created_date_time' => '\DateTime',
        'last_modified_date_time' => '\DateTime',
        'sales_order_link' => 'string',
        'stock_component_lines' => '\Ekstralys\VismaNetApi\Model\KitAssemblyStockComponentsDto[]',
        'non_stock_component_lines' => '\Ekstralys\VismaNetApi\Model\KitAssemblyNonStockComponentDto[]',
        'kit_allocations' => '\Ekstralys\VismaNetApi\Model\INAllocationsDto[]',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'ref_no' => null,
        'status' => null,
        'hold' => null,
        'date' => 'date-time',
        'post_period' => null,
        'item_id' => null,
        'revision' => null,
        'reason_code' => null,
        'description' => null,
        'warehouse' => null,
        'location' => null,
        'uo_m' => null,
        'quantity' => 'double',
        'created_date_time' => 'date-time',
        'last_modified_date_time' => 'date-time',
        'sales_order_link' => null,
        'stock_component_lines' => null,
        'non_stock_component_lines' => null,
        'kit_allocations' => null,
        'error_info' => null,
        'metadata' => null
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
        'ref_no' => 'refNo',
        'status' => 'status',
        'hold' => 'hold',
        'date' => 'date',
        'post_period' => 'postPeriod',
        'item_id' => 'itemID',
        'revision' => 'revision',
        'reason_code' => 'reasonCode',
        'description' => 'description',
        'warehouse' => 'warehouse',
        'location' => 'location',
        'uo_m' => 'uoM',
        'quantity' => 'quantity',
        'created_date_time' => 'createdDateTime',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'sales_order_link' => 'salesOrderLink',
        'stock_component_lines' => 'stockComponentLines',
        'non_stock_component_lines' => 'nonStockComponentLines',
        'kit_allocations' => 'kitAllocations',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'ref_no' => 'setRefNo',
        'status' => 'setStatus',
        'hold' => 'setHold',
        'date' => 'setDate',
        'post_period' => 'setPostPeriod',
        'item_id' => 'setItemId',
        'revision' => 'setRevision',
        'reason_code' => 'setReasonCode',
        'description' => 'setDescription',
        'warehouse' => 'setWarehouse',
        'location' => 'setLocation',
        'uo_m' => 'setUoM',
        'quantity' => 'setQuantity',
        'created_date_time' => 'setCreatedDateTime',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'sales_order_link' => 'setSalesOrderLink',
        'stock_component_lines' => 'setStockComponentLines',
        'non_stock_component_lines' => 'setNonStockComponentLines',
        'kit_allocations' => 'setKitAllocations',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'ref_no' => 'getRefNo',
        'status' => 'getStatus',
        'hold' => 'getHold',
        'date' => 'getDate',
        'post_period' => 'getPostPeriod',
        'item_id' => 'getItemId',
        'revision' => 'getRevision',
        'reason_code' => 'getReasonCode',
        'description' => 'getDescription',
        'warehouse' => 'getWarehouse',
        'location' => 'getLocation',
        'uo_m' => 'getUoM',
        'quantity' => 'getQuantity',
        'created_date_time' => 'getCreatedDateTime',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'sales_order_link' => 'getSalesOrderLink',
        'stock_component_lines' => 'getStockComponentLines',
        'non_stock_component_lines' => 'getNonStockComponentLines',
        'kit_allocations' => 'getKitAllocations',
        'error_info' => 'getErrorInfo',
        'metadata' => 'getMetadata'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ref_no'] = isset($data['ref_no']) ? $data['ref_no'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['uo_m'] = isset($data['uo_m']) ? $data['uo_m'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['sales_order_link'] = isset($data['sales_order_link']) ? $data['sales_order_link'] : null;
        $this->container['stock_component_lines'] = isset($data['stock_component_lines']) ? $data['stock_component_lines'] : null;
        $this->container['non_stock_component_lines'] = isset($data['non_stock_component_lines']) ? $data['non_stock_component_lines'] : null;
        $this->container['kit_allocations'] = isset($data['kit_allocations']) ? $data['kit_allocations'] : null;
        $this->container['error_info'] = isset($data['error_info']) ? $data['error_info'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * @param string $type Type, possible values: P - Production, D - Disassembly
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ref_no
     *
     * @return string
     */
    public function getRefNo()
    {
        return $this->container['ref_no'];
    }

    /**
     * Sets ref_no
     *
     * @param string $ref_no ref_no
     *
     * @return $this
     */
    public function setRefNo($ref_no)
    {
        $this->container['ref_no'] = $ref_no;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status, possible values: H - On Hold, B - Balanced, R - Released
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return bool
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param bool $hold hold
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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
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
     * @return string
     */
    public function getPostPeriod()
    {
        return $this->container['post_period'];
    }

    /**
     * Sets post_period
     *
     * @param string $post_period post_period
     *
     * @return $this
     */
    public function setPostPeriod($post_period)
    {
        $this->container['post_period'] = $post_period;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code reason_code
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets uo_m
     *
     * @return string
     */
    public function getUoM()
    {
        return $this->container['uo_m'];
    }

    /**
     * Sets uo_m
     *
     * @param string $uo_m uo_m
     *
     * @return $this
     */
    public function setUoM($uo_m)
    {
        $this->container['uo_m'] = $uo_m;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime $created_date_time created_date_time
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

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
     * @param \DateTime $last_modified_date_time last_modified_date_time
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets sales_order_link
     *
     * @return string
     */
    public function getSalesOrderLink()
    {
        return $this->container['sales_order_link'];
    }

    /**
     * Sets sales_order_link
     *
     * @param string $sales_order_link sales_order_link
     *
     * @return $this
     */
    public function setSalesOrderLink($sales_order_link)
    {
        $this->container['sales_order_link'] = $sales_order_link;

        return $this;
    }

    /**
     * Gets stock_component_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\KitAssemblyStockComponentsDto[]
     */
    public function getStockComponentLines()
    {
        return $this->container['stock_component_lines'];
    }

    /**
     * Sets stock_component_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\KitAssemblyStockComponentsDto[] $stock_component_lines stock_component_lines
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
     * @return \Ekstralys\VismaNetApi\Model\KitAssemblyNonStockComponentDto[]
     */
    public function getNonStockComponentLines()
    {
        return $this->container['non_stock_component_lines'];
    }

    /**
     * Sets non_stock_component_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\KitAssemblyNonStockComponentDto[] $non_stock_component_lines non_stock_component_lines
     *
     * @return $this
     */
    public function setNonStockComponentLines($non_stock_component_lines)
    {
        $this->container['non_stock_component_lines'] = $non_stock_component_lines;

        return $this;
    }

    /**
     * Gets kit_allocations
     *
     * @return \Ekstralys\VismaNetApi\Model\INAllocationsDto[]
     */
    public function getKitAllocations()
    {
        return $this->container['kit_allocations'];
    }

    /**
     * Sets kit_allocations
     *
     * @param \Ekstralys\VismaNetApi\Model\INAllocationsDto[] $kit_allocations kit_allocations
     *
     * @return $this
     */
    public function setKitAllocations($kit_allocations)
    {
        $this->container['kit_allocations'] = $kit_allocations;

        return $this;
    }

    /**
     * Gets error_info
     *
     * @return string
     */
    public function getErrorInfo()
    {
        return $this->container['error_info'];
    }

    /**
     * Sets error_info
     *
     * @param string $error_info error_info
     *
     * @return $this
     */
    public function setErrorInfo($error_info)
    {
        $this->container['error_info'] = $error_info;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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

