<?php
/**
 * PaymentDto
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
 * PaymentDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a Payment in PaymentController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentDto';

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
        'customer' => 'object',
        'location' => 'object',
        'payment_method' => 'object',
        'cash_account' => 'string',
        'currency' => 'string',
        'payment_amount' => 'double',
        'invoice_text' => 'string',
        'applied_to_documents' => 'double',
        'applied_to_orders' => 'double',
        'available_balance' => 'double',
        'write_off_amount' => 'double',
        'finance_charges' => 'double',
        'deducted_charges' => 'double',
        'branch' => 'string',
        'last_modified_date_time' => '\DateTime',
        'payment_lines' => '\Ekstralys\VismaNetApi\Model\PaymentLineDto[]',
        'orders_to_apply' => '\Ekstralys\VismaNetApi\Model\OrderToApplyDto[]',
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
        'customer' => null,
        'location' => null,
        'payment_method' => null,
        'cash_account' => null,
        'currency' => null,
        'payment_amount' => 'double',
        'invoice_text' => null,
        'applied_to_documents' => 'double',
        'applied_to_orders' => 'double',
        'available_balance' => 'double',
        'write_off_amount' => 'double',
        'finance_charges' => 'double',
        'deducted_charges' => 'double',
        'branch' => null,
        'last_modified_date_time' => 'date-time',
        'payment_lines' => null,
        'orders_to_apply' => null,
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
        'customer' => 'customer',
        'location' => 'location',
        'payment_method' => 'paymentMethod',
        'cash_account' => 'cashAccount',
        'currency' => 'currency',
        'payment_amount' => 'paymentAmount',
        'invoice_text' => 'invoiceText',
        'applied_to_documents' => 'appliedToDocuments',
        'applied_to_orders' => 'appliedToOrders',
        'available_balance' => 'availableBalance',
        'write_off_amount' => 'writeOffAmount',
        'finance_charges' => 'financeCharges',
        'deducted_charges' => 'deductedCharges',
        'branch' => 'branch',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'payment_lines' => 'paymentLines',
        'orders_to_apply' => 'ordersToApply',
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
        'customer' => 'setCustomer',
        'location' => 'setLocation',
        'payment_method' => 'setPaymentMethod',
        'cash_account' => 'setCashAccount',
        'currency' => 'setCurrency',
        'payment_amount' => 'setPaymentAmount',
        'invoice_text' => 'setInvoiceText',
        'applied_to_documents' => 'setAppliedToDocuments',
        'applied_to_orders' => 'setAppliedToOrders',
        'available_balance' => 'setAvailableBalance',
        'write_off_amount' => 'setWriteOffAmount',
        'finance_charges' => 'setFinanceCharges',
        'deducted_charges' => 'setDeductedCharges',
        'branch' => 'setBranch',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'payment_lines' => 'setPaymentLines',
        'orders_to_apply' => 'setOrdersToApply',
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
        'customer' => 'getCustomer',
        'location' => 'getLocation',
        'payment_method' => 'getPaymentMethod',
        'cash_account' => 'getCashAccount',
        'currency' => 'getCurrency',
        'payment_amount' => 'getPaymentAmount',
        'invoice_text' => 'getInvoiceText',
        'applied_to_documents' => 'getAppliedToDocuments',
        'applied_to_orders' => 'getAppliedToOrders',
        'available_balance' => 'getAvailableBalance',
        'write_off_amount' => 'getWriteOffAmount',
        'finance_charges' => 'getFinanceCharges',
        'deducted_charges' => 'getDeductedCharges',
        'branch' => 'getBranch',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'payment_lines' => 'getPaymentLines',
        'orders_to_apply' => 'getOrdersToApply',
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
    const TYPE_CREDIT_NOTE = 'CreditNote';
    const TYPE_PREPAYMENT = 'Prepayment';
    const TYPE_REFUND = 'Refund';
    const TYPE_VOID_PAYMENT = 'VoidPayment';
    const TYPE_SMALL_BALANCE_WO = 'SmallBalanceWo';
    const TYPE_VOID_REFUND = 'VoidRefund';
    const STATUS_HOLD = 'Hold';
    const STATUS_BALANCED = 'Balanced';
    const STATUS_VOIDED = 'Voided';
    const STATUS_SCHEDULED = 'Scheduled';
    const STATUS_OPEN = 'Open';
    const STATUS_CLOSED = 'Closed';
    const STATUS_PENDING_PRINT = 'PendingPrint';
    const STATUS_PENDING_EMAIL = 'PendingEmail';
    const STATUS_CREDIT_HOLD = 'CreditHold';
    const STATUS_CC_HOLD = 'CcHold';
    const STATUS_RESERVED = 'Reserved';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYMENT,
            self::TYPE_CREDIT_NOTE,
            self::TYPE_PREPAYMENT,
            self::TYPE_REFUND,
            self::TYPE_VOID_PAYMENT,
            self::TYPE_SMALL_BALANCE_WO,
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
            self::STATUS_PENDING_PRINT,
            self::STATUS_PENDING_EMAIL,
            self::STATUS_CREDIT_HOLD,
            self::STATUS_CC_HOLD,
            self::STATUS_RESERVED,
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['invoice_text'] = isset($data['invoice_text']) ? $data['invoice_text'] : null;
        $this->container['applied_to_documents'] = isset($data['applied_to_documents']) ? $data['applied_to_documents'] : null;
        $this->container['applied_to_orders'] = isset($data['applied_to_orders']) ? $data['applied_to_orders'] : null;
        $this->container['available_balance'] = isset($data['available_balance']) ? $data['available_balance'] : null;
        $this->container['write_off_amount'] = isset($data['write_off_amount']) ? $data['write_off_amount'] : null;
        $this->container['finance_charges'] = isset($data['finance_charges']) ? $data['finance_charges'] : null;
        $this->container['deducted_charges'] = isset($data['deducted_charges']) ? $data['deducted_charges'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['payment_lines'] = isset($data['payment_lines']) ? $data['payment_lines'] : null;
        $this->container['orders_to_apply'] = isset($data['orders_to_apply']) ? $data['orders_to_apply'] : null;
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
     * @param string $type The top part &gt; Type &gt; The type of a document. The following types are available: Payment, CreditNote, Prepayment, Customer refund, Void payment, Balance write-off
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
     * @param string $ref_nbr The top part &gt; Ref.no &gt; The unique identifier for the payment. This number is automatically generated by the system for a new payment document, based on the number series in the AR101000 window.
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
     * @param string $status The top part &gt; Status &gt; The status of the customer payment, which for a new document is either Balanced or On hold. [On hold, Balanced, Voided, Scheduled, Open, Closed, Pending print, Pending email, Credit hold, CcHold, Reserved]
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
     * @param bool $hold The top part &gt; Hold &gt;  A check box that indicates (if selected) that the document is a draft with the On hold status. This check box is unavailable for debit adjustments.
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
     * @param \DateTime $application_date Mandatory field: The top part &gt; Date* &gt; The date when a payment is applied to a document (invoice or note). The field display the current business date for tunapplied or partially applied payments and the latest application date for the closed payment
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
     * @param string $application_period Mandatory field: The top part &gt; Financial period* &gt; The period to which the payment should be applied, which the system fills in based on the date.
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
     * @param string $payment_ref Mandatory field: The top part &gt; Payment ref.* &gt; A secondary payment reference identifier, which can be a system-generated number or an external reference number entered manually.
     *
     * @return $this
     */
    public function setPaymentRef($payment_ref)
    {
        $this->container['payment_ref'] = $payment_ref;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return object
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param object $customer Mandatory field: The top part &gt; Customer* &gt; The customer who issued the payment.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * @param object $location Mandatory field: The top part &gt; Location* &gt; The customer location associated with the sale.
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
     * @return object
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param object $payment_method The top part &gt; Payment method &gt; The customer's default payment method; this field is not available for credit notes.
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
     * @param string $cash_account Mandatory field: The top part &gt; Cash account* &gt; The default cash account associated with the payment method; this field is not available for credit notes.
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
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The top part &gt; Currency &gt; The currency of the payment document.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param double $payment_amount The top part &gt; Payment amount &gt; The total of the payment that is entered manually.
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets invoice_text
     *
     * @return string
     */
    public function getInvoiceText()
    {
        return $this->container['invoice_text'];
    }

    /**
     * Sets invoice_text
     *
     * @param string $invoice_text The top part &gt; Invoice text &gt; A user-defined description of the payment. 50 alphanumeric characters.
     *
     * @return $this
     */
    public function setInvoiceText($invoice_text)
    {
        $this->container['invoice_text'] = $invoice_text;

        return $this;
    }

    /**
     * Gets applied_to_documents
     *
     * @return double
     */
    public function getAppliedToDocuments()
    {
        return $this->container['applied_to_documents'];
    }

    /**
     * Sets applied_to_documents
     *
     * @param double $applied_to_documents The top part &gt; Applied to documents &gt; The total of the documents to which payment is to be applied.
     *
     * @return $this
     */
    public function setAppliedToDocuments($applied_to_documents)
    {
        $this->container['applied_to_documents'] = $applied_to_documents;

        return $this;
    }

    /**
     * Gets applied_to_orders
     *
     * @return double
     */
    public function getAppliedToOrders()
    {
        return $this->container['applied_to_orders'];
    }

    /**
     * Sets applied_to_orders
     *
     * @param double $applied_to_orders The top part &gt; Applied to orders &gt; The total of the orders for which payment is reserved, minus the amount transferred to invoice.
     *
     * @return $this
     */
    public function setAppliedToOrders($applied_to_orders)
    {
        $this->container['applied_to_orders'] = $applied_to_orders;

        return $this;
    }

    /**
     * Gets available_balance
     *
     * @return double
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance
     *
     * @param double $available_balance The top part &gt; Available balance &gt; The amount that has not been applied.
     *
     * @return $this
     */
    public function setAvailableBalance($available_balance)
    {
        $this->container['available_balance'] = $available_balance;

        return $this;
    }

    /**
     * Gets write_off_amount
     *
     * @return double
     */
    public function getWriteOffAmount()
    {
        return $this->container['write_off_amount'];
    }

    /**
     * Sets write_off_amount
     *
     * @param double $write_off_amount The top part &gt; Write-off amount &gt; The amount that has been written off.
     *
     * @return $this
     */
    public function setWriteOffAmount($write_off_amount)
    {
        $this->container['write_off_amount'] = $write_off_amount;

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
     * Gets deducted_charges
     *
     * @return double
     */
    public function getDeductedCharges()
    {
        return $this->container['deducted_charges'];
    }

    /**
     * Sets deducted_charges
     *
     * @param double $deducted_charges The top part &gt; Deducted charges &gt; The total amount of bank charges deducted by bank from the payment amount on your cash account (bank account).
     *
     * @return $this
     */
    public function setDeductedCharges($deducted_charges)
    {
        $this->container['deducted_charges'] = $deducted_charges;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

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
     * @param \DateTime $last_modified_date_time Systemgenerated information.
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
     * @return \Ekstralys\VismaNetApi\Model\PaymentLineDto[]
     */
    public function getPaymentLines()
    {
        return $this->container['payment_lines'];
    }

    /**
     * Sets payment_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\PaymentLineDto[] $payment_lines Documents to apply tab &gt;
     *
     * @return $this
     */
    public function setPaymentLines($payment_lines)
    {
        $this->container['payment_lines'] = $payment_lines;

        return $this;
    }

    /**
     * Gets orders_to_apply
     *
     * @return \Ekstralys\VismaNetApi\Model\OrderToApplyDto[]
     */
    public function getOrdersToApply()
    {
        return $this->container['orders_to_apply'];
    }

    /**
     * Sets orders_to_apply
     *
     * @param \Ekstralys\VismaNetApi\Model\OrderToApplyDto[] $orders_to_apply Orders to apply tab &gt;
     *
     * @return $this
     */
    public function setOrdersToApply($orders_to_apply)
    {
        $this->container['orders_to_apply'] = $orders_to_apply;

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

