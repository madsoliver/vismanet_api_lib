<?php
/**
 * OrderToApplyDto
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
 * OrderToApplyDto Class Doc Comment
 *
 * @category Class
 * @description This class represents an OrderToApply in Payments
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderToApplyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderToApplyDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_type' => 'string',
        'order_no' => 'string',
        'status' => 'string',
        'applied_to_order' => 'double',
        'transferred_to_invoice' => 'double',
        'date' => '\DateTime',
        'due_date' => '\DateTime',
        'cash_discount_date' => '\DateTime',
        'balance' => 'double',
        'description' => 'string',
        'order_total' => 'double',
        'currency' => 'string',
        'invoice_nbr' => 'string',
        'invoice_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_type' => null,
        'order_no' => null,
        'status' => null,
        'applied_to_order' => 'double',
        'transferred_to_invoice' => 'double',
        'date' => 'date-time',
        'due_date' => 'date-time',
        'cash_discount_date' => 'date-time',
        'balance' => 'double',
        'description' => null,
        'order_total' => 'double',
        'currency' => null,
        'invoice_nbr' => null,
        'invoice_date' => 'date-time'
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
        'order_no' => 'orderNo',
        'status' => 'status',
        'applied_to_order' => 'appliedToOrder',
        'transferred_to_invoice' => 'transferredToInvoice',
        'date' => 'date',
        'due_date' => 'dueDate',
        'cash_discount_date' => 'cashDiscountDate',
        'balance' => 'balance',
        'description' => 'description',
        'order_total' => 'orderTotal',
        'currency' => 'currency',
        'invoice_nbr' => 'invoiceNbr',
        'invoice_date' => 'invoiceDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_type' => 'setOrderType',
        'order_no' => 'setOrderNo',
        'status' => 'setStatus',
        'applied_to_order' => 'setAppliedToOrder',
        'transferred_to_invoice' => 'setTransferredToInvoice',
        'date' => 'setDate',
        'due_date' => 'setDueDate',
        'cash_discount_date' => 'setCashDiscountDate',
        'balance' => 'setBalance',
        'description' => 'setDescription',
        'order_total' => 'setOrderTotal',
        'currency' => 'setCurrency',
        'invoice_nbr' => 'setInvoiceNbr',
        'invoice_date' => 'setInvoiceDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_type' => 'getOrderType',
        'order_no' => 'getOrderNo',
        'status' => 'getStatus',
        'applied_to_order' => 'getAppliedToOrder',
        'transferred_to_invoice' => 'getTransferredToInvoice',
        'date' => 'getDate',
        'due_date' => 'getDueDate',
        'cash_discount_date' => 'getCashDiscountDate',
        'balance' => 'getBalance',
        'description' => 'getDescription',
        'order_total' => 'getOrderTotal',
        'currency' => 'getCurrency',
        'invoice_nbr' => 'getInvoiceNbr',
        'invoice_date' => 'getInvoiceDate'
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

    const STATUS_OPEN = 'Open';
    const STATUS_HOLD = 'Hold';
    const STATUS_CREDIT_HOLD = 'CreditHold';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_BACK_ORDER = 'BackOrder';
    const STATUS_SHIPPING = 'Shipping';
    const STATUS_INVOICED = 'Invoiced';
    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_VOIDED = 'Voided';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_HOLD,
            self::STATUS_CREDIT_HOLD,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_BACK_ORDER,
            self::STATUS_SHIPPING,
            self::STATUS_INVOICED,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_VOIDED,
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
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applied_to_order'] = isset($data['applied_to_order']) ? $data['applied_to_order'] : null;
        $this->container['transferred_to_invoice'] = isset($data['transferred_to_invoice']) ? $data['transferred_to_invoice'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['cash_discount_date'] = isset($data['cash_discount_date']) ? $data['cash_discount_date'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_total'] = isset($data['order_total']) ? $data['order_total'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['invoice_nbr'] = isset($data['invoice_nbr']) ? $data['invoice_nbr'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string $order_type Mandatory field: Order type* &gt; The order type for which the payment is to be reserved.
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no Mandatory field: Order no.* &gt; The reference number of the order for which the payment is reserved.
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

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
     * @param string $status Status &gt; The status of the document, which is assigned automatically.
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
     * Gets applied_to_order
     *
     * @return double
     */
    public function getAppliedToOrder()
    {
        return $this->container['applied_to_order'];
    }

    /**
     * Sets applied_to_order
     *
     * @param double $applied_to_order Applied to order &gt; The total amount reserved for the order.
     *
     * @return $this
     */
    public function setAppliedToOrder($applied_to_order)
    {
        $this->container['applied_to_order'] = $applied_to_order;

        return $this;
    }

    /**
     * Gets transferred_to_invoice
     *
     * @return double
     */
    public function getTransferredToInvoice()
    {
        return $this->container['transferred_to_invoice'];
    }

    /**
     * Sets transferred_to_invoice
     *
     * @param double $transferred_to_invoice Transferred to invoice &gt; The amount that has been applied to invoice.
     *
     * @return $this
     */
    public function setTransferredToInvoice($transferred_to_invoice)
    {
        $this->container['transferred_to_invoice'] = $transferred_to_invoice;

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
     * @param \DateTime $date Date &gt; The creation date of the order.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date Due date &gt; The due date of the order.
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets cash_discount_date
     *
     * @return \DateTime
     */
    public function getCashDiscountDate()
    {
        return $this->container['cash_discount_date'];
    }

    /**
     * Sets cash_discount_date
     *
     * @param \DateTime $cash_discount_date Cash discount date &gt; The date through which the customer can take a cash discount.
     *
     * @return $this
     */
    public function setCashDiscountDate($cash_discount_date)
    {
        $this->container['cash_discount_date'] = $cash_discount_date;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance Balance &gt; The balance of the order after the cash discount is taken and the amount is paid.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string $description Description &gt; A description of the order.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_total
     *
     * @return double
     */
    public function getOrderTotal()
    {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total
     *
     * @param double $order_total Order total &gt; The total amount of the document.
     *
     * @return $this
     */
    public function setOrderTotal($order_total)
    {
        $this->container['order_total'] = $order_total;

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
     * @param string $currency Currency &gt; The currency of the document.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $invoice_nbr Invoice no. &gt; The reference number of the invoice generated for the order.
     *
     * @return $this
     */
    public function setInvoiceNbr($invoice_nbr)
    {
        $this->container['invoice_nbr'] = $invoice_nbr;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date Invoice date &gt; The date of the invoice.
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

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


