<?php
/**
 * ShipmentDetailLineDto
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
 * ShipmentDetailLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetailLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentDetailLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_number' => 'int',
        'order_type' => 'string',
        'order_nbr' => 'string',
        'inventory_number' => 'string',
        'free_item' => 'bool',
        'warehouse' => 'object',
        'location' => 'object',
        'uom' => 'string',
        'shipped_qty' => 'double',
        'ordered_qty' => 'double',
        'open_qty' => 'double',
        'lot_serial_nbr' => 'string',
        'expiration_date' => '\DateTime',
        'reason_code' => 'string',
        'description' => 'string',
        'allocations' => '\Ekstralys\VismaNetApi\Model\AllocationsDto[]',
        'order_line_nbr' => 'int',
        'note' => 'string',
        'external_link' => 'string',
        'alternate_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_number' => 'int32',
        'order_type' => null,
        'order_nbr' => null,
        'inventory_number' => null,
        'free_item' => null,
        'warehouse' => null,
        'location' => null,
        'uom' => null,
        'shipped_qty' => 'double',
        'ordered_qty' => 'double',
        'open_qty' => 'double',
        'lot_serial_nbr' => null,
        'expiration_date' => 'date-time',
        'reason_code' => null,
        'description' => null,
        'allocations' => null,
        'order_line_nbr' => 'int32',
        'note' => null,
        'external_link' => null,
        'alternate_id' => null
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
        'line_number' => 'lineNumber',
        'order_type' => 'orderType',
        'order_nbr' => 'orderNbr',
        'inventory_number' => 'inventoryNumber',
        'free_item' => 'freeItem',
        'warehouse' => 'warehouse',
        'location' => 'location',
        'uom' => 'uom',
        'shipped_qty' => 'shippedQty',
        'ordered_qty' => 'orderedQty',
        'open_qty' => 'openQty',
        'lot_serial_nbr' => 'lotSerialNbr',
        'expiration_date' => 'expirationDate',
        'reason_code' => 'reasonCode',
        'description' => 'description',
        'allocations' => 'allocations',
        'order_line_nbr' => 'orderLineNbr',
        'note' => 'note',
        'external_link' => 'externalLink',
        'alternate_id' => 'alternateID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_number' => 'setLineNumber',
        'order_type' => 'setOrderType',
        'order_nbr' => 'setOrderNbr',
        'inventory_number' => 'setInventoryNumber',
        'free_item' => 'setFreeItem',
        'warehouse' => 'setWarehouse',
        'location' => 'setLocation',
        'uom' => 'setUom',
        'shipped_qty' => 'setShippedQty',
        'ordered_qty' => 'setOrderedQty',
        'open_qty' => 'setOpenQty',
        'lot_serial_nbr' => 'setLotSerialNbr',
        'expiration_date' => 'setExpirationDate',
        'reason_code' => 'setReasonCode',
        'description' => 'setDescription',
        'allocations' => 'setAllocations',
        'order_line_nbr' => 'setOrderLineNbr',
        'note' => 'setNote',
        'external_link' => 'setExternalLink',
        'alternate_id' => 'setAlternateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_number' => 'getLineNumber',
        'order_type' => 'getOrderType',
        'order_nbr' => 'getOrderNbr',
        'inventory_number' => 'getInventoryNumber',
        'free_item' => 'getFreeItem',
        'warehouse' => 'getWarehouse',
        'location' => 'getLocation',
        'uom' => 'getUom',
        'shipped_qty' => 'getShippedQty',
        'ordered_qty' => 'getOrderedQty',
        'open_qty' => 'getOpenQty',
        'lot_serial_nbr' => 'getLotSerialNbr',
        'expiration_date' => 'getExpirationDate',
        'reason_code' => 'getReasonCode',
        'description' => 'getDescription',
        'allocations' => 'getAllocations',
        'order_line_nbr' => 'getOrderLineNbr',
        'note' => 'getNote',
        'external_link' => 'getExternalLink',
        'alternate_id' => 'getAlternateId'
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
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_nbr'] = isset($data['order_nbr']) ? $data['order_nbr'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['free_item'] = isset($data['free_item']) ? $data['free_item'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['shipped_qty'] = isset($data['shipped_qty']) ? $data['shipped_qty'] : null;
        $this->container['ordered_qty'] = isset($data['ordered_qty']) ? $data['ordered_qty'] : null;
        $this->container['open_qty'] = isset($data['open_qty']) ? $data['open_qty'] : null;
        $this->container['lot_serial_nbr'] = isset($data['lot_serial_nbr']) ? $data['lot_serial_nbr'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allocations'] = isset($data['allocations']) ? $data['allocations'] : null;
        $this->container['order_line_nbr'] = isset($data['order_line_nbr']) ? $data['order_line_nbr'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['external_link'] = isset($data['external_link']) ? $data['external_link'] : null;
        $this->container['alternate_id'] = isset($data['alternate_id']) ? $data['alternate_id'] : null;
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
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number Document details tab &gt; The line number indicating sequence.
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type Document details tab &gt; The type of the document, which is one of the predefined order types or a custom order type.
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_nbr
     *
     * @return string
     */
    public function getOrderNbr()
    {
        return $this->container['order_nbr'];
    }

    /**
     * Sets order_nbr
     *
     * @param string $order_nbr Document details tab &gt; Order no. &gt; The reference number of the document.
     *
     * @return $this
     */
    public function setOrderNbr($order_nbr)
    {
        $this->container['order_nbr'] = $order_nbr;

        return $this;
    }

    /**
     * Gets inventory_number
     *
     * @return string
     */
    public function getInventoryNumber()
    {
        return $this->container['inventory_number'];
    }

    /**
     * Sets inventory_number
     *
     * @param string $inventory_number Document details tab &gt; Item ID &gt; The ID of the item being shipped.
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

        return $this;
    }

    /**
     * Gets free_item
     *
     * @return bool
     */
    public function getFreeItem()
    {
        return $this->container['free_item'];
    }

    /**
     * Sets free_item
     *
     * @param bool $free_item Document details tab &gt; Free item &gt; The free item earned by the customer, if applicable. (This column does not appear for transfer.)
     *
     * @return $this
     */
    public function setFreeItem($free_item)
    {
        $this->container['free_item'] = $free_item;

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
     * @param object $warehouse Mandatory field: Document details tab &gt; Warehouse* &gt; The warehouse from which the items is shipped.
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
     * @return object
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param object $location Document details tab &gt; Location &gt; The location in the warehouse from which the item is shipped.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Document details tab &gt; UoM &gt; The unit of measure used for the item in shipment.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets shipped_qty
     *
     * @return double
     */
    public function getShippedQty()
    {
        return $this->container['shipped_qty'];
    }

    /**
     * Sets shipped_qty
     *
     * @param double $shipped_qty Document details tab &gt; Shipped qty. &gt; The quantity of the item shipped with the specified properties.
     *
     * @return $this
     */
    public function setShippedQty($shipped_qty)
    {
        $this->container['shipped_qty'] = $shipped_qty;

        return $this;
    }

    /**
     * Gets ordered_qty
     *
     * @return double
     */
    public function getOrderedQty()
    {
        return $this->container['ordered_qty'];
    }

    /**
     * Sets ordered_qty
     *
     * @param double $ordered_qty Document details tab &gt; Ordered qty. &gt; The quantity of the item ordered with the specified properties.
     *
     * @return $this
     */
    public function setOrderedQty($ordered_qty)
    {
        $this->container['ordered_qty'] = $ordered_qty;

        return $this;
    }

    /**
     * Gets open_qty
     *
     * @return double
     */
    public function getOpenQty()
    {
        return $this->container['open_qty'];
    }

    /**
     * Sets open_qty
     *
     * @param double $open_qty Document details tab &gt; Open qty. &gt; The number of items with the specified quantities still to be shipped.
     *
     * @return $this
     */
    public function setOpenQty($open_qty)
    {
        $this->container['open_qty'] = $open_qty;

        return $this;
    }

    /**
     * Gets lot_serial_nbr
     *
     * @return string
     */
    public function getLotSerialNbr()
    {
        return $this->container['lot_serial_nbr'];
    }

    /**
     * Sets lot_serial_nbr
     *
     * @param string $lot_serial_nbr Document details tab &gt; Lot/serial no. &gt; The lot or serial number of particular items of the item.
     *
     * @return $this
     */
    public function setLotSerialNbr($lot_serial_nbr)
    {
        $this->container['lot_serial_nbr'] = $lot_serial_nbr;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date Document details tab &gt; Expiration date &gt; The expiration date of the item, if it is traced for this item ID.
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * @param string $reason_code Document details tab &gt; Reason code &gt; The reason code used for shipments.
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
     * @param string $description Document details tab &gt; Description &gt; A short description for the shipment.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets allocations
     *
     * @return \Ekstralys\VismaNetApi\Model\AllocationsDto[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param \Ekstralys\VismaNetApi\Model\AllocationsDto[] $allocations Document details tab &gt; Allocations button &gt; Opens the Allocations dialog box, so that you can specify the locations, or lot or serial numbers for the units of the of the item.
     *
     * @return $this
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

        return $this;
    }

    /**
     * Gets order_line_nbr
     *
     * @return int
     */
    public function getOrderLineNbr()
    {
        return $this->container['order_line_nbr'];
    }

    /**
     * Sets order_line_nbr
     *
     * @param int $order_line_nbr Document details tab &gt; Order line no. &gt; Read only. The order's line number that matches this shipment line.
     *
     * @return $this
     */
    public function setOrderLineNbr($order_line_nbr)
    {
        $this->container['order_line_nbr'] = $order_line_nbr;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets external_link
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->container['external_link'];
    }

    /**
     * Sets external_link
     *
     * @param string $external_link external_link
     *
     * @return $this
     */
    public function setExternalLink($external_link)
    {
        $this->container['external_link'] = $external_link;

        return $this;
    }

    /**
     * Gets alternate_id
     *
     * @return string
     */
    public function getAlternateId()
    {
        return $this->container['alternate_id'];
    }

    /**
     * Sets alternate_id
     *
     * @param string $alternate_id alternate_id
     *
     * @return $this
     */
    public function setAlternateId($alternate_id)
    {
        $this->container['alternate_id'] = $alternate_id;

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

