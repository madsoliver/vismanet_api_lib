<?php
/**
 * CashTransactionDto
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
 * CashTransactionDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashTransactionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashTransactionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tran_type' => 'string',
        'reference_nbr' => 'string',
        'status' => 'string',
        'hold' => 'bool',
        'tran_date' => '\DateTime',
        'fin_period' => 'string',
        'financial_period' => 'string',
        'cash_account' => 'object',
        'currency' => 'string',
        'entry_type' => 'object',
        'disb_receipt' => 'string',
        'document_ref' => 'string',
        'owner' => 'object',
        'description' => 'string',
        'amount' => 'double',
        'vat_taxable_total' => 'double',
        'vat_exempt_total' => 'double',
        'tax_total' => 'double',
        'control_total' => 'double',
        'tax_amount' => 'double',
        'last_modified_date_time' => '\DateTime',
        'transaction_details' => '\Ekstralys\VismaNetApi\Model\TransactionDetailDto[]',
        'tax_details' => '\Ekstralys\VismaNetApi\Model\CashTranTaxDetailDto[]',
        'financials_detail' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tran_type' => null,
        'reference_nbr' => null,
        'status' => null,
        'hold' => null,
        'tran_date' => 'date-time',
        'fin_period' => null,
        'financial_period' => null,
        'cash_account' => null,
        'currency' => null,
        'entry_type' => null,
        'disb_receipt' => null,
        'document_ref' => null,
        'owner' => null,
        'description' => null,
        'amount' => 'double',
        'vat_taxable_total' => 'double',
        'vat_exempt_total' => 'double',
        'tax_total' => 'double',
        'control_total' => 'double',
        'tax_amount' => 'double',
        'last_modified_date_time' => 'date-time',
        'transaction_details' => null,
        'tax_details' => null,
        'financials_detail' => null
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
        'tran_type' => 'tranType',
        'reference_nbr' => 'referenceNbr',
        'status' => 'status',
        'hold' => 'hold',
        'tran_date' => 'tranDate',
        'fin_period' => 'finPeriod',
        'financial_period' => 'financialPeriod',
        'cash_account' => 'cashAccount',
        'currency' => 'currency',
        'entry_type' => 'entryType',
        'disb_receipt' => 'disbReceipt',
        'document_ref' => 'documentRef',
        'owner' => 'owner',
        'description' => 'description',
        'amount' => 'amount',
        'vat_taxable_total' => 'vatTaxableTotal',
        'vat_exempt_total' => 'vatExemptTotal',
        'tax_total' => 'taxTotal',
        'control_total' => 'controlTotal',
        'tax_amount' => 'taxAmount',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'transaction_details' => 'transactionDetails',
        'tax_details' => 'taxDetails',
        'financials_detail' => 'financialsDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tran_type' => 'setTranType',
        'reference_nbr' => 'setReferenceNbr',
        'status' => 'setStatus',
        'hold' => 'setHold',
        'tran_date' => 'setTranDate',
        'fin_period' => 'setFinPeriod',
        'financial_period' => 'setFinancialPeriod',
        'cash_account' => 'setCashAccount',
        'currency' => 'setCurrency',
        'entry_type' => 'setEntryType',
        'disb_receipt' => 'setDisbReceipt',
        'document_ref' => 'setDocumentRef',
        'owner' => 'setOwner',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'vat_taxable_total' => 'setVatTaxableTotal',
        'vat_exempt_total' => 'setVatExemptTotal',
        'tax_total' => 'setTaxTotal',
        'control_total' => 'setControlTotal',
        'tax_amount' => 'setTaxAmount',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'transaction_details' => 'setTransactionDetails',
        'tax_details' => 'setTaxDetails',
        'financials_detail' => 'setFinancialsDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tran_type' => 'getTranType',
        'reference_nbr' => 'getReferenceNbr',
        'status' => 'getStatus',
        'hold' => 'getHold',
        'tran_date' => 'getTranDate',
        'fin_period' => 'getFinPeriod',
        'financial_period' => 'getFinancialPeriod',
        'cash_account' => 'getCashAccount',
        'currency' => 'getCurrency',
        'entry_type' => 'getEntryType',
        'disb_receipt' => 'getDisbReceipt',
        'document_ref' => 'getDocumentRef',
        'owner' => 'getOwner',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'vat_taxable_total' => 'getVatTaxableTotal',
        'vat_exempt_total' => 'getVatExemptTotal',
        'tax_total' => 'getTaxTotal',
        'control_total' => 'getControlTotal',
        'tax_amount' => 'getTaxAmount',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'transaction_details' => 'getTransactionDetails',
        'tax_details' => 'getTaxDetails',
        'financials_detail' => 'getFinancialsDetail'
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

    const TRAN_TYPE_TRANSFER_OUT = 'TransferOut';
    const TRAN_TYPE_TRANSFER_IN = 'TransferIn';
    const TRAN_TYPE_TRANSFER_EXP = 'TransferExp';
    const TRAN_TYPE_ADJUSTMENT = 'Adjustment';
    const STATUS_BALANCED = 'Balanced';
    const STATUS_HOLD = 'Hold';
    const STATUS_RELEASED = 'Released';
    const STATUS_PENDING = 'Pending';
    const STATUS_REJECTED = 'Rejected';
    const DISB_RECEIPT_DISBURSEMENT = 'Disbursement';
    const DISB_RECEIPT_RECEIPT = 'Receipt';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTranTypeAllowableValues()
    {
        return [
            self::TRAN_TYPE_TRANSFER_OUT,
            self::TRAN_TYPE_TRANSFER_IN,
            self::TRAN_TYPE_TRANSFER_EXP,
            self::TRAN_TYPE_ADJUSTMENT,
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
            self::STATUS_BALANCED,
            self::STATUS_HOLD,
            self::STATUS_RELEASED,
            self::STATUS_PENDING,
            self::STATUS_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisbReceiptAllowableValues()
    {
        return [
            self::DISB_RECEIPT_DISBURSEMENT,
            self::DISB_RECEIPT_RECEIPT,
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
        $this->container['tran_type'] = isset($data['tran_type']) ? $data['tran_type'] : null;
        $this->container['reference_nbr'] = isset($data['reference_nbr']) ? $data['reference_nbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['tran_date'] = isset($data['tran_date']) ? $data['tran_date'] : null;
        $this->container['fin_period'] = isset($data['fin_period']) ? $data['fin_period'] : null;
        $this->container['financial_period'] = isset($data['financial_period']) ? $data['financial_period'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['entry_type'] = isset($data['entry_type']) ? $data['entry_type'] : null;
        $this->container['disb_receipt'] = isset($data['disb_receipt']) ? $data['disb_receipt'] : null;
        $this->container['document_ref'] = isset($data['document_ref']) ? $data['document_ref'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat_taxable_total'] = isset($data['vat_taxable_total']) ? $data['vat_taxable_total'] : null;
        $this->container['vat_exempt_total'] = isset($data['vat_exempt_total']) ? $data['vat_exempt_total'] : null;
        $this->container['tax_total'] = isset($data['tax_total']) ? $data['tax_total'] : null;
        $this->container['control_total'] = isset($data['control_total']) ? $data['control_total'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['transaction_details'] = isset($data['transaction_details']) ? $data['transaction_details'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['financials_detail'] = isset($data['financials_detail']) ? $data['financials_detail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTranTypeAllowableValues();
        if (!is_null($this->container['tran_type']) && !in_array($this->container['tran_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tran_type', must be one of '%s'",
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

        $allowedValues = $this->getDisbReceiptAllowableValues();
        if (!is_null($this->container['disb_receipt']) && !in_array($this->container['disb_receipt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'disb_receipt', must be one of '%s'",
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
     * Gets tran_type
     *
     * @return string
     */
    public function getTranType()
    {
        return $this->container['tran_type'];
    }

    /**
     * Sets tran_type
     *
     * @param string $tran_type The top part &gt; Trans type &gt;  The type of cash transaction.
     *
     * @return $this
     */
    public function setTranType($tran_type)
    {
        $allowedValues = $this->getTranTypeAllowableValues();
        if (!is_null($tran_type) && !in_array($tran_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tran_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tran_type'] = $tran_type;

        return $this;
    }

    /**
     * Gets reference_nbr
     *
     * @return string
     */
    public function getReferenceNbr()
    {
        return $this->container['reference_nbr'];
    }

    /**
     * Sets reference_nbr
     *
     * @param string $reference_nbr The top part &gt; Ref. no. &gt; The unique identifier assigned to the cash transaction in accordance with the numbering sequence.
     *
     * @return $this
     */
    public function setReferenceNbr($reference_nbr)
    {
        $this->container['reference_nbr'] = $reference_nbr;

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
     * @param string $status The top part &gt; Status &gt; The status of the transaction, which is automatically assigned by the system.
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
     * @param bool $hold The top part &gt; Hold &gt; A check box that, if selected, indicates that the transaction is on hold, which means it may be edited but cannot be released.
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets tran_date
     *
     * @return \DateTime
     */
    public function getTranDate()
    {
        return $this->container['tran_date'];
    }

    /**
     * Sets tran_date
     *
     * @param \DateTime $tran_date Mandatory field: The top part &gt; Trans. date* &gt; The date of the transaction.
     *
     * @return $this
     */
    public function setTranDate($tran_date)
    {
        $this->container['tran_date'] = $tran_date;

        return $this;
    }

    /**
     * Gets fin_period
     *
     * @return string
     */
    public function getFinPeriod()
    {
        return $this->container['fin_period'];
    }

    /**
     * Sets fin_period
     *
     * @param string $fin_period The property is now considered obsolete. Use Financial Period instead
     *
     * @return $this
     */
    public function setFinPeriod($fin_period)
    {
        $this->container['fin_period'] = $fin_period;

        return $this;
    }

    /**
     * Gets financial_period
     *
     * @return string
     */
    public function getFinancialPeriod()
    {
        return $this->container['financial_period'];
    }

    /**
     * Sets financial_period
     *
     * @param string $financial_period Mandatory field: The top part &gt; Period* &gt; The financial period to which the transaction should be posted.
     *
     * @return $this
     */
    public function setFinancialPeriod($financial_period)
    {
        $this->container['financial_period'] = $financial_period;

        return $this;
    }

    /**
     * Gets cash_account
     *
     * @return object
     */
    public function getCashAccount()
    {
        return $this->container['cash_account'];
    }

    /**
     * Sets cash_account
     *
     * @param object $cash_account Mandatory field: The top part &gt; Cash account* &gt; The cash account that is a source account for the transaction.
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
     * @param string $currency The top part &gt; Currency &gt; The currency of the cash account.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets entry_type
     *
     * @return object
     */
    public function getEntryType()
    {
        return $this->container['entry_type'];
    }

    /**
     * Sets entry_type
     *
     * @param object $entry_type Mandatory field: The top part &gt; Entry type* &gt; The user-defined transaction type.
     *
     * @return $this
     */
    public function setEntryType($entry_type)
    {
        $this->container['entry_type'] = $entry_type;

        return $this;
    }

    /**
     * Gets disb_receipt
     *
     * @return string
     */
    public function getDisbReceipt()
    {
        return $this->container['disb_receipt'];
    }

    /**
     * Sets disb_receipt
     *
     * @param string $disb_receipt The top part &gt; Disb./receipt &gt; The basic type of the transaction.
     *
     * @return $this
     */
    public function setDisbReceipt($disb_receipt)
    {
        $allowedValues = $this->getDisbReceiptAllowableValues();
        if (!is_null($disb_receipt) && !in_array($disb_receipt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'disb_receipt', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['disb_receipt'] = $disb_receipt;

        return $this;
    }

    /**
     * Gets document_ref
     *
     * @return string
     */
    public function getDocumentRef()
    {
        return $this->container['document_ref'];
    }

    /**
     * Sets document_ref
     *
     * @param string $document_ref The top part &gt; Document ref. &gt; The external document reference number.
     *
     * @return $this
     */
    public function setDocumentRef($document_ref)
    {
        $this->container['document_ref'] = $document_ref;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return object
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param object $owner The top part &gt; Owner &gt; The user who created the cash transaction.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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
     * @param string $description The top part &gt; Description &gt; A detailed description of the transaction.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount The top part &gt; Amount &gt; The amount of the transaction.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat_taxable_total
     *
     * @return double
     */
    public function getVatTaxableTotal()
    {
        return $this->container['vat_taxable_total'];
    }

    /**
     * Sets vat_taxable_total
     *
     * @param double $vat_taxable_total The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT.
     *
     * @return $this
     */
    public function setVatTaxableTotal($vat_taxable_total)
    {
        $this->container['vat_taxable_total'] = $vat_taxable_total;

        return $this;
    }

    /**
     * Gets vat_exempt_total
     *
     * @return double
     */
    public function getVatExemptTotal()
    {
        return $this->container['vat_exempt_total'];
    }

    /**
     * Sets vat_exempt_total
     *
     * @param double $vat_exempt_total The top part &gt; VAT exempt total &gt;  The document total that is exempt from VAT.
     *
     * @return $this
     */
    public function setVatExemptTotal($vat_exempt_total)
    {
        $this->container['vat_exempt_total'] = $vat_exempt_total;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return double
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param double $tax_total The top part &gt; VAT total &gt; The total amount of tax paid in the document.
     *
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets control_total
     *
     * @return double
     */
    public function getControlTotal()
    {
        return $this->container['control_total'];
    }

    /**
     * Sets control_total
     *
     * @param double $control_total Mandatory field: The top part &gt; Control total &gt; The control total of the transaction.
     *
     * @return $this
     */
    public function setControlTotal($control_total)
    {
        $this->container['control_total'] = $control_total;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount The top part &gt; VAT amount &gt; The VAT amount to be paid for the document. A user enters this amount manually.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
     * @param \DateTime $last_modified_date_time System generated information.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets transaction_details
     *
     * @return \Ekstralys\VismaNetApi\Model\TransactionDetailDto[]
     */
    public function getTransactionDetails()
    {
        return $this->container['transaction_details'];
    }

    /**
     * Sets transaction_details
     *
     * @param \Ekstralys\VismaNetApi\Model\TransactionDetailDto[] $transaction_details Transaction details tab &gt;
     *
     * @return $this
     */
    public function setTransactionDetails($transaction_details)
    {
        $this->container['transaction_details'] = $transaction_details;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \Ekstralys\VismaNetApi\Model\CashTranTaxDetailDto[]
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \Ekstralys\VismaNetApi\Model\CashTranTaxDetailDto[] $tax_details VAT details tab &gt;
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets financials_detail
     *
     * @return object
     */
    public function getFinancialsDetail()
    {
        return $this->container['financials_detail'];
    }

    /**
     * Sets financials_detail
     *
     * @param object $financials_detail Financial details tab &gt;
     *
     * @return $this
     */
    public function setFinancialsDetail($financials_detail)
    {
        $this->container['financials_detail'] = $financials_detail;

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

