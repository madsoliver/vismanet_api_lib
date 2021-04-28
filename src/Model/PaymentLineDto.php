<?php
/**
 * PaymentLineDto
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
 * PaymentLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_type' => 'string',
        'ref_nbr' => 'string',
        'amount_paid' => 'double',
        'cash_discount_taken' => 'double',
        'balance_write_off' => 'double',
        'write_off_reason_code' => 'object',
        'date' => '\DateTime',
        'due_date' => '\DateTime',
        'cash_discount_date' => '\DateTime',
        'balance' => 'double',
        'cash_discount_balance' => 'double',
        'description' => 'string',
        'currency' => 'string',
        'post_period' => 'string',
        'customer_order' => 'string',
        'cross_rate' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_type' => null,
        'ref_nbr' => null,
        'amount_paid' => 'double',
        'cash_discount_taken' => 'double',
        'balance_write_off' => 'double',
        'write_off_reason_code' => null,
        'date' => 'date-time',
        'due_date' => 'date-time',
        'cash_discount_date' => 'date-time',
        'balance' => 'double',
        'cash_discount_balance' => 'double',
        'description' => null,
        'currency' => null,
        'post_period' => null,
        'customer_order' => null,
        'cross_rate' => 'double'
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
        'document_type' => 'documentType',
        'ref_nbr' => 'refNbr',
        'amount_paid' => 'amountPaid',
        'cash_discount_taken' => 'cashDiscountTaken',
        'balance_write_off' => 'balanceWriteOff',
        'write_off_reason_code' => 'writeOffReasonCode',
        'date' => 'date',
        'due_date' => 'dueDate',
        'cash_discount_date' => 'cashDiscountDate',
        'balance' => 'balance',
        'cash_discount_balance' => 'cashDiscountBalance',
        'description' => 'description',
        'currency' => 'currency',
        'post_period' => 'postPeriod',
        'customer_order' => 'customerOrder',
        'cross_rate' => 'crossRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type' => 'setDocumentType',
        'ref_nbr' => 'setRefNbr',
        'amount_paid' => 'setAmountPaid',
        'cash_discount_taken' => 'setCashDiscountTaken',
        'balance_write_off' => 'setBalanceWriteOff',
        'write_off_reason_code' => 'setWriteOffReasonCode',
        'date' => 'setDate',
        'due_date' => 'setDueDate',
        'cash_discount_date' => 'setCashDiscountDate',
        'balance' => 'setBalance',
        'cash_discount_balance' => 'setCashDiscountBalance',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'post_period' => 'setPostPeriod',
        'customer_order' => 'setCustomerOrder',
        'cross_rate' => 'setCrossRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type' => 'getDocumentType',
        'ref_nbr' => 'getRefNbr',
        'amount_paid' => 'getAmountPaid',
        'cash_discount_taken' => 'getCashDiscountTaken',
        'balance_write_off' => 'getBalanceWriteOff',
        'write_off_reason_code' => 'getWriteOffReasonCode',
        'date' => 'getDate',
        'due_date' => 'getDueDate',
        'cash_discount_date' => 'getCashDiscountDate',
        'balance' => 'getBalance',
        'cash_discount_balance' => 'getCashDiscountBalance',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'post_period' => 'getPostPeriod',
        'customer_order' => 'getCustomerOrder',
        'cross_rate' => 'getCrossRate'
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

    const DOCUMENT_TYPE_INVOICE = 'Invoice';
    const DOCUMENT_TYPE_DEBIT_NOTE = 'DebitNote';
    const DOCUMENT_TYPE_CREDIT_NOTE = 'CreditNote';
    const DOCUMENT_TYPE_PAYMENT = 'Payment';
    const DOCUMENT_TYPE_VOID_PAYMENT = 'VoidPayment';
    const DOCUMENT_TYPE_PREPAYMENT = 'Prepayment';
    const DOCUMENT_TYPE_REFUND = 'Refund';
    const DOCUMENT_TYPE_FIN_CHARGE = 'FinCharge';
    const DOCUMENT_TYPE_SMALL_BALANCE_WO = 'SmallBalanceWo';
    const DOCUMENT_TYPE_SMALL_CREDIT_WO = 'SmallCreditWo';
    const DOCUMENT_TYPE_CASH_SALE = 'CashSale';
    const DOCUMENT_TYPE_CASH_RETURN = 'CashReturn';
    const DOCUMENT_TYPE_UNDEFINED = 'Undefined';
    const DOCUMENT_TYPE_NO_UPDATE = 'NoUpdate';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_INVOICE,
            self::DOCUMENT_TYPE_DEBIT_NOTE,
            self::DOCUMENT_TYPE_CREDIT_NOTE,
            self::DOCUMENT_TYPE_PAYMENT,
            self::DOCUMENT_TYPE_VOID_PAYMENT,
            self::DOCUMENT_TYPE_PREPAYMENT,
            self::DOCUMENT_TYPE_REFUND,
            self::DOCUMENT_TYPE_FIN_CHARGE,
            self::DOCUMENT_TYPE_SMALL_BALANCE_WO,
            self::DOCUMENT_TYPE_SMALL_CREDIT_WO,
            self::DOCUMENT_TYPE_CASH_SALE,
            self::DOCUMENT_TYPE_CASH_RETURN,
            self::DOCUMENT_TYPE_UNDEFINED,
            self::DOCUMENT_TYPE_NO_UPDATE,
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
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['ref_nbr'] = isset($data['ref_nbr']) ? $data['ref_nbr'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['cash_discount_taken'] = isset($data['cash_discount_taken']) ? $data['cash_discount_taken'] : null;
        $this->container['balance_write_off'] = isset($data['balance_write_off']) ? $data['balance_write_off'] : null;
        $this->container['write_off_reason_code'] = isset($data['write_off_reason_code']) ? $data['write_off_reason_code'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['cash_discount_date'] = isset($data['cash_discount_date']) ? $data['cash_discount_date'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['cash_discount_balance'] = isset($data['cash_discount_balance']) ? $data['cash_discount_balance'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['customer_order'] = isset($data['customer_order']) ? $data['customer_order'] : null;
        $this->container['cross_rate'] = isset($data['cross_rate']) ? $data['cross_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
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
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type Doc. type &gt; The type of document to which the payment is applied.
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets ref_nbr
     *
     * @return string
     */
    public function getRefNbr()
    {
        return $this->container['ref_nbr'];
    }

    /**
     * Sets ref_nbr
     *
     * @param string $ref_nbr Mandatory field: Ref. no.* &gt; The reference number of the invoice or note to which the payment is applied.
     *
     * @return $this
     */
    public function setRefNbr($ref_nbr)
    {
        $this->container['ref_nbr'] = $ref_nbr;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return double
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param double $amount_paid Amount paid &gt; The amount to be paid which is displayed in the currency of the document that is selected in the window.
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets cash_discount_taken
     *
     * @return double
     */
    public function getCashDiscountTaken()
    {
        return $this->container['cash_discount_taken'];
    }

    /**
     * Sets cash_discount_taken
     *
     * @param double $cash_discount_taken Cash discount taken &gt; The cash discount to be taken.
     *
     * @return $this
     */
    public function setCashDiscountTaken($cash_discount_taken)
    {
        $this->container['cash_discount_taken'] = $cash_discount_taken;

        return $this;
    }

    /**
     * Gets balance_write_off
     *
     * @return double
     */
    public function getBalanceWriteOff()
    {
        return $this->container['balance_write_off'];
    }

    /**
     * Sets balance_write_off
     *
     * @param double $balance_write_off Balance write-off &gt; The amount to be written off.
     *
     * @return $this
     */
    public function setBalanceWriteOff($balance_write_off)
    {
        $this->container['balance_write_off'] = $balance_write_off;

        return $this;
    }

    /**
     * Gets write_off_reason_code
     *
     * @return object
     */
    public function getWriteOffReasonCode()
    {
        return $this->container['write_off_reason_code'];
    }

    /**
     * Sets write_off_reason_code
     *
     * @param object $write_off_reason_code Write-off reason code &gt; A reason code that defines an account and subaccount to be used for writing off credits or balances.
     *
     * @return $this
     */
    public function setWriteOffReasonCode($write_off_reason_code)
    {
        $this->container['write_off_reason_code'] = $write_off_reason_code;

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
     * @param \DateTime $date Date &gt; The creation date of the customer ledger document.
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
     * @param \DateTime $due_date Due date &gt; The due date of the customer ledger document.
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
     * @param \DateTime $cash_discount_date Cash disount date &gt; The date through which the customer can take a cash discount.
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
     * @param double $balance Balance &gt; The balance of the document after the cash discount is taken and the amount is paid.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets cash_discount_balance
     *
     * @return double
     */
    public function getCashDiscountBalance()
    {
        return $this->container['cash_discount_balance'];
    }

    /**
     * Sets cash_discount_balance
     *
     * @param double $cash_discount_balance Cash discount balance &gt; The unused amount of the cash discount, in case of partial payment.
     *
     * @return $this
     */
    public function setCashDiscountBalance($cash_discount_balance)
    {
        $this->container['cash_discount_balance'] = $cash_discount_balance;

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
     * @param string $description Description &gt; A description of the document.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $currency Currency &gt; The currency of the customer ledger document.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $post_period Post period &gt; The financial period to which the transactions recorded in the document should be posted. Format MMYYYY.
     *
     * @return $this
     */
    public function setPostPeriod($post_period)
    {
        $this->container['post_period'] = $post_period;

        return $this;
    }

    /**
     * Gets customer_order
     *
     * @return string
     */
    public function getCustomerOrder()
    {
        return $this->container['customer_order'];
    }

    /**
     * Sets customer_order
     *
     * @param string $customer_order Customer order &gt; A reference to a document of the customer, such as a purchase order number.
     *
     * @return $this
     */
    public function setCustomerOrder($customer_order)
    {
        $this->container['customer_order'] = $customer_order;

        return $this;
    }

    /**
     * Gets cross_rate
     *
     * @return double
     */
    public function getCrossRate()
    {
        return $this->container['cross_rate'];
    }

    /**
     * Sets cross_rate
     *
     * @param double $cross_rate Cross rate &gt; A cross rate that you can optionally specify between the currency of the payment and currency of the original document.
     *
     * @return $this
     */
    public function setCrossRate($cross_rate)
    {
        $this->container['cross_rate'] = $cross_rate;

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

