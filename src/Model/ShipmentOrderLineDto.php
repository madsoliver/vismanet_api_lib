<?php
/**
 * ShipmentOrderLineDto
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
 * ShipmentOrderLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentOrderLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentOrderLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_type' => 'string',
        'order_nbr' => 'string',
        'shipped_qty' => 'double',
        'shipped_weight' => 'double',
        'shipped_volume' => 'double',
        'invoice_type' => 'string',
        'invoice_nbr' => 'string',
        'inventory_doc_type' => 'string',
        'inventory_ref_nbr' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_type' => null,
        'order_nbr' => null,
        'shipped_qty' => 'double',
        'shipped_weight' => 'double',
        'shipped_volume' => 'double',
        'invoice_type' => null,
        'invoice_nbr' => null,
        'inventory_doc_type' => null,
        'inventory_ref_nbr' => null,
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
        'order_type' => 'orderType',
        'order_nbr' => 'orderNbr',
        'shipped_qty' => 'shippedQty',
        'shipped_weight' => 'shippedWeight',
        'shipped_volume' => 'shippedVolume',
        'invoice_type' => 'invoiceType',
        'invoice_nbr' => 'invoiceNbr',
        'inventory_doc_type' => 'inventoryDocType',
        'inventory_ref_nbr' => 'inventoryRefNbr',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_type' => 'setOrderType',
        'order_nbr' => 'setOrderNbr',
        'shipped_qty' => 'setShippedQty',
        'shipped_weight' => 'setShippedWeight',
        'shipped_volume' => 'setShippedVolume',
        'invoice_type' => 'setInvoiceType',
        'invoice_nbr' => 'setInvoiceNbr',
        'inventory_doc_type' => 'setInventoryDocType',
        'inventory_ref_nbr' => 'setInventoryRefNbr',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_type' => 'getOrderType',
        'order_nbr' => 'getOrderNbr',
        'shipped_qty' => 'getShippedQty',
        'shipped_weight' => 'getShippedWeight',
        'shipped_volume' => 'getShippedVolume',
        'invoice_type' => 'getInvoiceType',
        'invoice_nbr' => 'getInvoiceNbr',
        'inventory_doc_type' => 'getInventoryDocType',
        'inventory_ref_nbr' => 'getInventoryRefNbr',
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
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_nbr'] = isset($data['order_nbr']) ? $data['order_nbr'] : null;
        $this->container['shipped_qty'] = isset($data['shipped_qty']) ? $data['shipped_qty'] : null;
        $this->container['shipped_weight'] = isset($data['shipped_weight']) ? $data['shipped_weight'] : null;
        $this->container['shipped_volume'] = isset($data['shipped_volume']) ? $data['shipped_volume'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['invoice_nbr'] = isset($data['invoice_nbr']) ? $data['invoice_nbr'] : null;
        $this->container['inventory_doc_type'] = isset($data['inventory_doc_type']) ? $data['inventory_doc_type'] : null;
        $this->container['inventory_ref_nbr'] = isset($data['inventory_ref_nbr']) ? $data['inventory_ref_nbr'] : null;
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
     * @param string $order_type Orders tab &gt; Order typer &gt; The type of the order.
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
     * @param string $order_nbr Orders tab &gt; Order no. &gt; The reference number of the sales or transfer order.
     *
     * @return $this
     */
    public function setOrderNbr($order_nbr)
    {
        $this->container['order_nbr'] = $order_nbr;

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
     * @param double $shipped_qty Orders tab &gt; Shipped qty. &gt; The quantity of goods shipped in accordance with the order.
     *
     * @return $this
     */
    public function setShippedQty($shipped_qty)
    {
        $this->container['shipped_qty'] = $shipped_qty;

        return $this;
    }

    /**
     * Gets shipped_weight
     *
     * @return double
     */
    public function getShippedWeight()
    {
        return $this->container['shipped_weight'];
    }

    /**
     * Sets shipped_weight
     *
     * @param double $shipped_weight Orders tab &gt; Shipped weight &gt; The weight of the goods shipped in accordance with the order.
     *
     * @return $this
     */
    public function setShippedWeight($shipped_weight)
    {
        $this->container['shipped_weight'] = $shipped_weight;

        return $this;
    }

    /**
     * Gets shipped_volume
     *
     * @return double
     */
    public function getShippedVolume()
    {
        return $this->container['shipped_volume'];
    }

    /**
     * Sets shipped_volume
     *
     * @param double $shipped_volume Orders tab &gt; Shipped volume &gt; The volume of the goods shipped in accordance with the sales or transfer order.
     *
     * @return $this
     */
    public function setShippedVolume($shipped_volume)
    {
        $this->container['shipped_volume'] = $shipped_volume;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type Orders tab &gt; Invoice type &gt; The type of invoice for the goods shipped for the sales order.
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets invoice_nbr
     *
     * @return string
     */
    public function getInvoiceNbr()
    {
        return $this->container['invoice_nbr'];
    }

    /**
     * Sets invoice_nbr
     *
     * @param string $invoice_nbr Orders tab &gt; Invoice no. &gt; The reference number of the invoice for the goods shipped.
     *
     * @return $this
     */
    public function setInvoiceNbr($invoice_nbr)
    {
        $this->container['invoice_nbr'] = $invoice_nbr;

        return $this;
    }

    /**
     * Gets inventory_doc_type
     *
     * @return string
     */
    public function getInventoryDocType()
    {
        return $this->container['inventory_doc_type'];
    }

    /**
     * Sets inventory_doc_type
     *
     * @param string $inventory_doc_type Orders tab &gt; Inventory doc. type &gt; The type of the inventory document that lists the items for this shipment.
     *
     * @return $this
     */
    public function setInventoryDocType($inventory_doc_type)
    {
        $this->container['inventory_doc_type'] = $inventory_doc_type;

        return $this;
    }

    /**
     * Gets inventory_ref_nbr
     *
     * @return string
     */
    public function getInventoryRefNbr()
    {
        return $this->container['inventory_ref_nbr'];
    }

    /**
     * Sets inventory_ref_nbr
     *
     * @param string $inventory_ref_nbr Orders tab &gt; Inventory ref. no. &gt; The reference number of the inventory document that lists the items for this shipment.
     *
     * @return $this
     */
    public function setInventoryRefNbr($inventory_ref_nbr)
    {
        $this->container['inventory_ref_nbr'] = $inventory_ref_nbr;

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


