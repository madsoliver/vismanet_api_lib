<?php
/**
 * PurchaseReceiptsDto
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
 * PurchaseReceiptsDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseReceiptsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseReceiptsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'receipt_number' => 'string',
        'status' => 'string',
        'supplier_name' => 'string',
        'currency' => 'string',
        'total_qty' => 'double',
        'total_amt' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'receipt_number' => null,
        'status' => null,
        'supplier_name' => null,
        'currency' => null,
        'total_qty' => 'double',
        'total_amt' => 'double'
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
        'receipt_number' => 'receiptNumber',
        'status' => 'status',
        'supplier_name' => 'supplierName',
        'currency' => 'currency',
        'total_qty' => 'totalQty',
        'total_amt' => 'totalAmt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'receipt_number' => 'setReceiptNumber',
        'status' => 'setStatus',
        'supplier_name' => 'setSupplierName',
        'currency' => 'setCurrency',
        'total_qty' => 'setTotalQty',
        'total_amt' => 'setTotalAmt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'receipt_number' => 'getReceiptNumber',
        'status' => 'getStatus',
        'supplier_name' => 'getSupplierName',
        'currency' => 'getCurrency',
        'total_qty' => 'getTotalQty',
        'total_amt' => 'getTotalAmt'
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

    const TYPE_PO_RECEIPT = 'PoReceipt';
    const TYPE_PO_RETURN = 'PoReturn';
    const TYPE_TRANSFER_RECEIPT = 'TransferReceipt';
    const STATUS_HOLD = 'Hold';
    const STATUS_BALANCED = 'Balanced';
    const STATUS_RELEASED = 'Released';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PO_RECEIPT,
            self::TYPE_PO_RETURN,
            self::TYPE_TRANSFER_RECEIPT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HOLD,
            self::STATUS_BALANCED,
            self::STATUS_RELEASED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['total_qty'] = isset($data['total_qty']) ? $data['total_qty'] : null;
        $this->container['total_amt'] = isset($data['total_amt']) ? $data['total_amt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $type The top part &gt; Type &gt; The type of the document, which can be Receipt, Return, or Transfer receipt.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets receipt_number
     *
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     *
     * @param string $receipt_number The top part &gt; Receipt no. &gt; The unique reference number of the purchase receipt, transfer receipt, or return, which the system automatically assigns according to its number series.
     *
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->container['receipt_number'] = $receipt_number;

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
     * @param string $status The top part &gt; Status &gt; The current status of the purchase or transfer receipt, or return, which the system assigns automatically.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name The top part &gt; Supplier &gt; The supplier from which the items have been received or to which they will be returned.
     *
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The top part &gt; Currency &gt; The currency the supplier uses for invoicing.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets total_qty
     *
     * @return double
     */
    public function getTotalQty()
    {
        return $this->container['total_qty'];
    }

    /**
     * Sets total_qty
     *
     * @param double $total_qty The top part &gt; Total qty. &gt; The total quantity of items received from or returned to the supplier; the sum of all quantities of all stock items listed on the Document details tab.
     *
     * @return $this
     */
    public function setTotalQty($total_qty)
    {
        $this->container['total_qty'] = $total_qty;

        return $this;
    }

    /**
     * Gets total_amt
     *
     * @return double
     */
    public function getTotalAmt()
    {
        return $this->container['total_amt'];
    }

    /**
     * Sets total_amt
     *
     * @param double $total_amt The top part &gt; Total amt. &gt; The total amount calculated for items received from or returned to the supplier; the sum of all amounts of all stock items listed on the Document details tab.
     *
     * @return $this
     */
    public function setTotalAmt($total_amt)
    {
        $this->container['total_amt'] = $total_amt;

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


