<?php
/**
 * SupplierPaymentAdjustmentDto
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
 * SupplierPaymentAdjustmentDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierPaymentAdjustmentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierPaymentAdjustmentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branch' => 'string',
        'batch_number' => 'string',
        'doc_type' => 'string',
        'invoice_ref_nbr' => 'string',
        'amount_paid' => 'double',
        'cash_discount_taken' => 'double',
        'withholding_tax' => 'double',
        'application_period' => 'string',
        'date' => '\DateTime',
        'due_date' => '\DateTime',
        'cash_discount_date' => '\DateTime',
        'balance' => 'double',
        'cash_discount_balance' => 'double',
        'description' => 'string',
        'currency' => 'string',
        'post_period' => 'string',
        'supplier_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branch' => null,
        'batch_number' => null,
        'doc_type' => null,
        'invoice_ref_nbr' => null,
        'amount_paid' => 'double',
        'cash_discount_taken' => 'double',
        'withholding_tax' => 'double',
        'application_period' => null,
        'date' => 'date-time',
        'due_date' => 'date-time',
        'cash_discount_date' => 'date-time',
        'balance' => 'double',
        'cash_discount_balance' => 'double',
        'description' => null,
        'currency' => null,
        'post_period' => null,
        'supplier_ref' => null
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
        'branch' => 'branch',
        'batch_number' => 'batchNumber',
        'doc_type' => 'docType',
        'invoice_ref_nbr' => 'invoiceRefNbr',
        'amount_paid' => 'amountPaid',
        'cash_discount_taken' => 'cashDiscountTaken',
        'withholding_tax' => 'withholdingTax',
        'application_period' => 'applicationPeriod',
        'date' => 'date',
        'due_date' => 'dueDate',
        'cash_discount_date' => 'cashDiscountDate',
        'balance' => 'balance',
        'cash_discount_balance' => 'cashDiscountBalance',
        'description' => 'description',
        'currency' => 'currency',
        'post_period' => 'postPeriod',
        'supplier_ref' => 'supplierRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'batch_number' => 'setBatchNumber',
        'doc_type' => 'setDocType',
        'invoice_ref_nbr' => 'setInvoiceRefNbr',
        'amount_paid' => 'setAmountPaid',
        'cash_discount_taken' => 'setCashDiscountTaken',
        'withholding_tax' => 'setWithholdingTax',
        'application_period' => 'setApplicationPeriod',
        'date' => 'setDate',
        'due_date' => 'setDueDate',
        'cash_discount_date' => 'setCashDiscountDate',
        'balance' => 'setBalance',
        'cash_discount_balance' => 'setCashDiscountBalance',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'post_period' => 'setPostPeriod',
        'supplier_ref' => 'setSupplierRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'batch_number' => 'getBatchNumber',
        'doc_type' => 'getDocType',
        'invoice_ref_nbr' => 'getInvoiceRefNbr',
        'amount_paid' => 'getAmountPaid',
        'cash_discount_taken' => 'getCashDiscountTaken',
        'withholding_tax' => 'getWithholdingTax',
        'application_period' => 'getApplicationPeriod',
        'date' => 'getDate',
        'due_date' => 'getDueDate',
        'cash_discount_date' => 'getCashDiscountDate',
        'balance' => 'getBalance',
        'cash_discount_balance' => 'getCashDiscountBalance',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'post_period' => 'getPostPeriod',
        'supplier_ref' => 'getSupplierRef'
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

    const DOC_TYPE_INVOICE = 'Invoice';
    const DOC_TYPE_CREDIT_ADJ = 'CreditAdj';
    const DOC_TYPE_DEBIT_ADJ = 'DebitAdj';
    const DOC_TYPE_PREPAYMENT = 'Prepayment';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocTypeAllowableValues()
    {
        return [
            self::DOC_TYPE_INVOICE,
            self::DOC_TYPE_CREDIT_ADJ,
            self::DOC_TYPE_DEBIT_ADJ,
            self::DOC_TYPE_PREPAYMENT,
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['doc_type'] = isset($data['doc_type']) ? $data['doc_type'] : null;
        $this->container['invoice_ref_nbr'] = isset($data['invoice_ref_nbr']) ? $data['invoice_ref_nbr'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['cash_discount_taken'] = isset($data['cash_discount_taken']) ? $data['cash_discount_taken'] : null;
        $this->container['withholding_tax'] = isset($data['withholding_tax']) ? $data['withholding_tax'] : null;
        $this->container['application_period'] = isset($data['application_period']) ? $data['application_period'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['cash_discount_date'] = isset($data['cash_discount_date']) ? $data['cash_discount_date'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['cash_discount_balance'] = isset($data['cash_discount_balance']) ? $data['cash_discount_balance'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['supplier_ref'] = isset($data['supplier_ref']) ? $data['supplier_ref'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDocTypeAllowableValues();
        if (!is_null($this->container['doc_type']) && !in_array($this->container['doc_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'doc_type', must be one of '%s'",
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
     * Gets batch_number
     *
     * @return string
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string $batch_number batch_number
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param string $doc_type doc_type
     *
     * @return $this
     */
    public function setDocType($doc_type)
    {
        $allowedValues = $this->getDocTypeAllowableValues();
        if (!is_null($doc_type) && !in_array($doc_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'doc_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets invoice_ref_nbr
     *
     * @return string
     */
    public function getInvoiceRefNbr()
    {
        return $this->container['invoice_ref_nbr'];
    }

    /**
     * Sets invoice_ref_nbr
     *
     * @param string $invoice_ref_nbr invoice_ref_nbr
     *
     * @return $this
     */
    public function setInvoiceRefNbr($invoice_ref_nbr)
    {
        $this->container['invoice_ref_nbr'] = $invoice_ref_nbr;

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
     * @param double $amount_paid amount_paid
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
     * @param double $cash_discount_taken cash_discount_taken
     *
     * @return $this
     */
    public function setCashDiscountTaken($cash_discount_taken)
    {
        $this->container['cash_discount_taken'] = $cash_discount_taken;

        return $this;
    }

    /**
     * Gets withholding_tax
     *
     * @return double
     */
    public function getWithholdingTax()
    {
        return $this->container['withholding_tax'];
    }

    /**
     * Sets withholding_tax
     *
     * @param double $withholding_tax withholding_tax
     *
     * @return $this
     */
    public function setWithholdingTax($withholding_tax)
    {
        $this->container['withholding_tax'] = $withholding_tax;

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
     * @param string $application_period application_period
     *
     * @return $this
     */
    public function setApplicationPeriod($application_period)
    {
        $this->container['application_period'] = $application_period;

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
     * @param \DateTime $due_date due_date
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
     * @param \DateTime $cash_discount_date cash_discount_date
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
     * @param double $balance balance
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
     * @param double $cash_discount_balance cash_discount_balance
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
     * @param string $currency currency
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
     * Gets supplier_ref
     *
     * @return string
     */
    public function getSupplierRef()
    {
        return $this->container['supplier_ref'];
    }

    /**
     * Sets supplier_ref
     *
     * @param string $supplier_ref supplier_ref
     *
     * @return $this
     */
    public function setSupplierRef($supplier_ref)
    {
        $this->container['supplier_ref'] = $supplier_ref;

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


