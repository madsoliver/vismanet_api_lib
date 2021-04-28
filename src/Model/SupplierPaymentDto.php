<?php
/**
 * SupplierPaymentDto
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
 * SupplierPaymentDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierPaymentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierPaymentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'ref_nbr' => 'string',
        'status' => 'string',
        'hold' => 'bool',
        'application_date' => '\DateTime',
        'application_period' => 'string',
        'payment_ref' => 'string',
        'supplier' => 'object',
        'location' => 'object',
        'payment_method' => 'string',
        'cash_account' => 'string',
        'currency' => 'object',
        'description' => 'string',
        'payment_amount' => 'double',
        'finance_charges' => 'double',
        'unapplied_balance' => 'double',
        'applied_amount' => 'double',
        'released' => 'bool',
        'last_modified_date_time' => '\DateTime',
        'payment_lines' => '\Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentDto[]',
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
        'ref_nbr' => null,
        'status' => null,
        'hold' => null,
        'application_date' => 'date-time',
        'application_period' => null,
        'payment_ref' => null,
        'supplier' => null,
        'location' => null,
        'payment_method' => null,
        'cash_account' => null,
        'currency' => null,
        'description' => null,
        'payment_amount' => 'double',
        'finance_charges' => 'double',
        'unapplied_balance' => 'double',
        'applied_amount' => 'double',
        'released' => null,
        'last_modified_date_time' => 'date-time',
        'payment_lines' => null,
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
        'ref_nbr' => 'refNbr',
        'status' => 'status',
        'hold' => 'hold',
        'application_date' => 'applicationDate',
        'application_period' => 'applicationPeriod',
        'payment_ref' => 'paymentRef',
        'supplier' => 'supplier',
        'location' => 'location',
        'payment_method' => 'paymentMethod',
        'cash_account' => 'cashAccount',
        'currency' => 'currency',
        'description' => 'description',
        'payment_amount' => 'paymentAmount',
        'finance_charges' => 'financeCharges',
        'unapplied_balance' => 'unappliedBalance',
        'applied_amount' => 'appliedAmount',
        'released' => 'released',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'payment_lines' => 'paymentLines',
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
        'ref_nbr' => 'setRefNbr',
        'status' => 'setStatus',
        'hold' => 'setHold',
        'application_date' => 'setApplicationDate',
        'application_period' => 'setApplicationPeriod',
        'payment_ref' => 'setPaymentRef',
        'supplier' => 'setSupplier',
        'location' => 'setLocation',
        'payment_method' => 'setPaymentMethod',
        'cash_account' => 'setCashAccount',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'payment_amount' => 'setPaymentAmount',
        'finance_charges' => 'setFinanceCharges',
        'unapplied_balance' => 'setUnappliedBalance',
        'applied_amount' => 'setAppliedAmount',
        'released' => 'setReleased',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'payment_lines' => 'setPaymentLines',
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
        'ref_nbr' => 'getRefNbr',
        'status' => 'getStatus',
        'hold' => 'getHold',
        'application_date' => 'getApplicationDate',
        'application_period' => 'getApplicationPeriod',
        'payment_ref' => 'getPaymentRef',
        'supplier' => 'getSupplier',
        'location' => 'getLocation',
        'payment_method' => 'getPaymentMethod',
        'cash_account' => 'getCashAccount',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'payment_amount' => 'getPaymentAmount',
        'finance_charges' => 'getFinanceCharges',
        'unapplied_balance' => 'getUnappliedBalance',
        'applied_amount' => 'getAppliedAmount',
        'released' => 'getReleased',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'payment_lines' => 'getPaymentLines',
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

    const TYPE_PAYMENT = 'Payment';
    const TYPE_DEBIT_ADJ = 'DebitAdj';
    const TYPE_PREPAYMENT = 'Prepayment';
    const TYPE_REFUND = 'Refund';
    const TYPE_VOID_PAYMENT = 'VoidPayment';
    const TYPE_VOID_REFUND = 'VoidRefund';
    const STATUS_HOLD = 'Hold';
    const STATUS_BALANCED = 'Balanced';
    const STATUS_VOIDED = 'Voided';
    const STATUS_SCHEDULED = 'Scheduled';
    const STATUS_OPEN = 'Open';
    const STATUS_CLOSED = 'Closed';
    const STATUS_PRINTED = 'Printed';
    const STATUS_PREBOOKED = 'Prebooked';
    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_RESERVED = 'Reserved';
    const STATUS_PENDING_PRINT = 'PendingPrint';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYMENT,
            self::TYPE_DEBIT_ADJ,
            self::TYPE_PREPAYMENT,
            self::TYPE_REFUND,
            self::TYPE_VOID_PAYMENT,
            self::TYPE_VOID_REFUND,
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
            self::STATUS_VOIDED,
            self::STATUS_SCHEDULED,
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
            self::STATUS_PRINTED,
            self::STATUS_PREBOOKED,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_REJECTED,
            self::STATUS_RESERVED,
            self::STATUS_PENDING_PRINT,
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
        $this->container['ref_nbr'] = isset($data['ref_nbr']) ? $data['ref_nbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['application_date'] = isset($data['application_date']) ? $data['application_date'] : null;
        $this->container['application_period'] = isset($data['application_period']) ? $data['application_period'] : null;
        $this->container['payment_ref'] = isset($data['payment_ref']) ? $data['payment_ref'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['finance_charges'] = isset($data['finance_charges']) ? $data['finance_charges'] : null;
        $this->container['unapplied_balance'] = isset($data['unapplied_balance']) ? $data['unapplied_balance'] : null;
        $this->container['applied_amount'] = isset($data['applied_amount']) ? $data['applied_amount'] : null;
        $this->container['released'] = isset($data['released']) ? $data['released'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['payment_lines'] = isset($data['payment_lines']) ? $data['payment_lines'] : null;
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
     * @param string $type The top part &gt; Type &gt;The type of supplier ledger payment document. The following types are available: Payment, PUrchase credit note, Prepayment, Supplier refund, Voided payment.
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
     * @param string $ref_nbr The top part &gt; Voucher no. &gt; The unique identifier of the supplier ledger document.
     *
     * @return $this
     */
    public function setRefNbr($ref_nbr)
    {
        $this->container['ref_nbr'] = $ref_nbr;

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
     * @param string $status The top part &gt; Status &gt; The status of the supplier ledger document, which can be one of the following: On Hold, Printed, Open, Reserved, Closed, Voided, Released.
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
     * @param bool $hold The top part &gt; Hold &gt; A check box that means (if selected) that the status of the document is On hold.
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets application_date
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->container['application_date'];
    }

    /**
     * Sets application_date
     *
     * @param \DateTime $application_date Mandatory field: The top part &gt; Date* &gt; The date when the payment is applied. The default value is the current business date.
     *
     * @return $this
     */
    public function setApplicationDate($application_date)
    {
        $this->container['application_date'] = $application_date;

        return $this;
    }

    /**
     * Gets application_period
     *
     * @return string
     */
    public function getApplicationPeriod()
    {
        return $this->container['application_period'];
    }

    /**
     * Sets application_period
     *
     * @param string $application_period MAndatory field: The top part &gt; Financial period* &gt; The financial period of payment application.
     *
     * @return $this
     */
    public function setApplicationPeriod($application_period)
    {
        $this->container['application_period'] = $application_period;

        return $this;
    }

    /**
     * Gets payment_ref
     *
     * @return string
     */
    public function getPaymentRef()
    {
        return $this->container['payment_ref'];
    }

    /**
     * Sets payment_ref
     *
     * @param string $payment_ref The top part &gt; Payment ref. &gt; A payment reference number.
     *
     * @return $this
     */
    public function setPaymentRef($payment_ref)
    {
        $this->container['payment_ref'] = $payment_ref;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return object
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param object $supplier Mandatory field: The top part &gt; Supplier* &gt; The supplier.
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

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
     * @param object $location Mandatory field: The top part &gt; Location* &gt; The supplier's location. Main location by default.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Mandatory field: The top part &gt; Payment method* &gt; The payment method associated with the supplier.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets cash_account
     *
     * @return string
     */
    public function getCashAccount()
    {
        return $this->container['cash_account'];
    }

    /**
     * Sets cash_account
     *
     * @param string $cash_account Mandatory field: The top part &gt; Cash account* &gt; The cash account associated with the payment method.
     *
     * @return $this
     */
    public function setCashAccount($cash_account)
    {
        $this->container['cash_account'] = $cash_account;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return object
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param object $currency The top part &gt; Currency &gt; The currency of the payment; by default, it is the currency associated with the cash account.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $description The top part &gt; Description &gt; A description for the payment. You may use up to 50 alphanumeric characters.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets payment_amount
     *
     * @return double
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param double $payment_amount The top part &gt; Payment amount &gt; The total payment amount that should be applied to the documents.
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets finance_charges
     *
     * @return double
     */
    public function getFinanceCharges()
    {
        return $this->container['finance_charges'];
    }

    /**
     * Sets finance_charges
     *
     * @param double $finance_charges The top part &gt; Finance charges &gt; The total on all finance charges applied to this document.
     *
     * @return $this
     */
    public function setFinanceCharges($finance_charges)
    {
        $this->container['finance_charges'] = $finance_charges;

        return $this;
    }

    /**
     * Gets unapplied_balance
     *
     * @return double
     */
    public function getUnappliedBalance()
    {
        return $this->container['unapplied_balance'];
    }

    /**
     * Sets unapplied_balance
     *
     * @param double $unapplied_balance The top part &gt; Unapplied balance &gt; The balance that has not been applied. This will be a non-zero value if the payment amount is not equal to a document's total amount. Checks shall always have a zero unapplied balance.
     *
     * @return $this
     */
    public function setUnappliedBalance($unapplied_balance)
    {
        $this->container['unapplied_balance'] = $unapplied_balance;

        return $this;
    }

    /**
     * Gets applied_amount
     *
     * @return double
     */
    public function getAppliedAmount()
    {
        return $this->container['applied_amount'];
    }

    /**
     * Sets applied_amount
     *
     * @param double $applied_amount The top part &gt; Amount &gt; The amount to be applied on the application date.
     *
     * @return $this
     */
    public function setAppliedAmount($applied_amount)
    {
        $this->container['applied_amount'] = $applied_amount;

        return $this;
    }

    /**
     * Gets released
     *
     * @return bool
     */
    public function getReleased()
    {
        return $this->container['released'];
    }

    /**
     * Sets released
     *
     * @param bool $released Background information: if this check box is selected, the document has been released.
     *
     * @return $this
     */
    public function setReleased($released)
    {
        $this->container['released'] = $released;

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
     * @param \DateTime $last_modified_date_time Background information: The date and time when the document has been last modified.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets payment_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentDto[]
     */
    public function getPaymentLines()
    {
        return $this->container['payment_lines'];
    }

    /**
     * Sets payment_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\SupplierPaymentAdjustmentDto[] $payment_lines payment_lines
     *
     * @return $this
     */
    public function setPaymentLines($payment_lines)
    {
        $this->container['payment_lines'] = $payment_lines;

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

