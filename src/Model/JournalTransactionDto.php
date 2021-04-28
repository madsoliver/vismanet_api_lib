<?php
/**
 * JournalTransactionDto
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
 * JournalTransactionDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a journal transaction in JournalTransactionController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalTransactionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalTransactionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'module' => 'string',
        'batch_number' => 'string',
        'status' => 'string',
        'hold' => 'bool',
        'transaction_date' => '\DateTime',
        'post_period' => 'string',
        'financial_period' => 'string',
        'ledger' => 'string',
        'ledger_description' => 'string',
        'currency_id' => 'string',
        'exchange_rate' => 'double',
        'auto_reversing' => 'bool',
        'reversing_entry' => 'bool',
        'description' => 'string',
        'original_batch_number' => 'string',
        'debit_total' => 'double',
        'debit_total_in_currency' => 'double',
        'credit_total' => 'double',
        'credit_total_in_currency' => 'double',
        'control_total' => 'double',
        'control_total_in_currency' => 'double',
        'create_vat_transaction' => 'bool',
        'skip_vat_amount_validation' => 'bool',
        'last_modified_date_time' => '\DateTime',
        'transaction_code' => 'string',
        'transaction_code_description' => 'string',
        'branch' => 'string',
        'journal_transaction_lines' => '\Ekstralys\VismaNetApi\Model\JournalTransactionLineDto[]',
        'attachments' => '\Ekstralys\VismaNetApi\Model\AttachmentDto[]',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'module' => null,
        'batch_number' => null,
        'status' => null,
        'hold' => null,
        'transaction_date' => 'date-time',
        'post_period' => null,
        'financial_period' => null,
        'ledger' => null,
        'ledger_description' => null,
        'currency_id' => null,
        'exchange_rate' => 'double',
        'auto_reversing' => null,
        'reversing_entry' => null,
        'description' => null,
        'original_batch_number' => null,
        'debit_total' => 'double',
        'debit_total_in_currency' => 'double',
        'credit_total' => 'double',
        'credit_total_in_currency' => 'double',
        'control_total' => 'double',
        'control_total_in_currency' => 'double',
        'create_vat_transaction' => null,
        'skip_vat_amount_validation' => null,
        'last_modified_date_time' => 'date-time',
        'transaction_code' => null,
        'transaction_code_description' => null,
        'branch' => null,
        'journal_transaction_lines' => null,
        'attachments' => null,
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
        'module' => 'module',
        'batch_number' => 'batchNumber',
        'status' => 'status',
        'hold' => 'hold',
        'transaction_date' => 'transactionDate',
        'post_period' => 'postPeriod',
        'financial_period' => 'financialPeriod',
        'ledger' => 'ledger',
        'ledger_description' => 'ledgerDescription',
        'currency_id' => 'currencyId',
        'exchange_rate' => 'exchangeRate',
        'auto_reversing' => 'autoReversing',
        'reversing_entry' => 'reversingEntry',
        'description' => 'description',
        'original_batch_number' => 'originalBatchNumber',
        'debit_total' => 'debitTotal',
        'debit_total_in_currency' => 'debitTotalInCurrency',
        'credit_total' => 'creditTotal',
        'credit_total_in_currency' => 'creditTotalInCurrency',
        'control_total' => 'controlTotal',
        'control_total_in_currency' => 'controlTotalInCurrency',
        'create_vat_transaction' => 'createVatTransaction',
        'skip_vat_amount_validation' => 'skipVatAmountValidation',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'transaction_code' => 'transactionCode',
        'transaction_code_description' => 'transactionCodeDescription',
        'branch' => 'branch',
        'journal_transaction_lines' => 'journalTransactionLines',
        'attachments' => 'attachments',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'module' => 'setModule',
        'batch_number' => 'setBatchNumber',
        'status' => 'setStatus',
        'hold' => 'setHold',
        'transaction_date' => 'setTransactionDate',
        'post_period' => 'setPostPeriod',
        'financial_period' => 'setFinancialPeriod',
        'ledger' => 'setLedger',
        'ledger_description' => 'setLedgerDescription',
        'currency_id' => 'setCurrencyId',
        'exchange_rate' => 'setExchangeRate',
        'auto_reversing' => 'setAutoReversing',
        'reversing_entry' => 'setReversingEntry',
        'description' => 'setDescription',
        'original_batch_number' => 'setOriginalBatchNumber',
        'debit_total' => 'setDebitTotal',
        'debit_total_in_currency' => 'setDebitTotalInCurrency',
        'credit_total' => 'setCreditTotal',
        'credit_total_in_currency' => 'setCreditTotalInCurrency',
        'control_total' => 'setControlTotal',
        'control_total_in_currency' => 'setControlTotalInCurrency',
        'create_vat_transaction' => 'setCreateVatTransaction',
        'skip_vat_amount_validation' => 'setSkipVatAmountValidation',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'transaction_code' => 'setTransactionCode',
        'transaction_code_description' => 'setTransactionCodeDescription',
        'branch' => 'setBranch',
        'journal_transaction_lines' => 'setJournalTransactionLines',
        'attachments' => 'setAttachments',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'module' => 'getModule',
        'batch_number' => 'getBatchNumber',
        'status' => 'getStatus',
        'hold' => 'getHold',
        'transaction_date' => 'getTransactionDate',
        'post_period' => 'getPostPeriod',
        'financial_period' => 'getFinancialPeriod',
        'ledger' => 'getLedger',
        'ledger_description' => 'getLedgerDescription',
        'currency_id' => 'getCurrencyId',
        'exchange_rate' => 'getExchangeRate',
        'auto_reversing' => 'getAutoReversing',
        'reversing_entry' => 'getReversingEntry',
        'description' => 'getDescription',
        'original_batch_number' => 'getOriginalBatchNumber',
        'debit_total' => 'getDebitTotal',
        'debit_total_in_currency' => 'getDebitTotalInCurrency',
        'credit_total' => 'getCreditTotal',
        'credit_total_in_currency' => 'getCreditTotalInCurrency',
        'control_total' => 'getControlTotal',
        'control_total_in_currency' => 'getControlTotalInCurrency',
        'create_vat_transaction' => 'getCreateVatTransaction',
        'skip_vat_amount_validation' => 'getSkipVatAmountValidation',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'transaction_code' => 'getTransactionCode',
        'transaction_code_description' => 'getTransactionCodeDescription',
        'branch' => 'getBranch',
        'journal_transaction_lines' => 'getJournalTransactionLines',
        'attachments' => 'getAttachments',
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

    const MODULE_MODULE_GL = 'ModuleGL';
    const MODULE_MODULE_AP = 'ModuleAP';
    const MODULE_MODULE_AR = 'ModuleAR';
    const MODULE_MODULE_CA = 'ModuleCA';
    const MODULE_MODULE_CM = 'ModuleCM';
    const MODULE_MODULE_IN = 'ModuleIN';
    const MODULE_MODULE_SO = 'ModuleSO';
    const MODULE_MODULE_PO = 'ModulePO';
    const MODULE_MODULE_DR = 'ModuleDR';
    const MODULE_MODULE_FA = 'ModuleFA';
    const MODULE_MODULE_EP = 'ModuleEP';
    const MODULE_MODULE_PM = 'ModulePM';
    const MODULE_MODULE_TX = 'ModuleTX';
    const MODULE_MODULE_CR = 'ModuleCR';
    const STATUS_HOLD = 'Hold';
    const STATUS_BALANCED = 'Balanced';
    const STATUS_UNPOSTED = 'Unposted';
    const STATUS_POSTED = 'Posted';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_VOIDED = 'Voided';
    const STATUS_RELEASED = 'Released';
    const STATUS_PARTIALLY_RELEASED = 'PartiallyReleased';
    const STATUS_SCHEDULED = 'Scheduled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModuleAllowableValues()
    {
        return [
            self::MODULE_MODULE_GL,
            self::MODULE_MODULE_AP,
            self::MODULE_MODULE_AR,
            self::MODULE_MODULE_CA,
            self::MODULE_MODULE_CM,
            self::MODULE_MODULE_IN,
            self::MODULE_MODULE_SO,
            self::MODULE_MODULE_PO,
            self::MODULE_MODULE_DR,
            self::MODULE_MODULE_FA,
            self::MODULE_MODULE_EP,
            self::MODULE_MODULE_PM,
            self::MODULE_MODULE_TX,
            self::MODULE_MODULE_CR,
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
            self::STATUS_UNPOSTED,
            self::STATUS_POSTED,
            self::STATUS_COMPLETED,
            self::STATUS_VOIDED,
            self::STATUS_RELEASED,
            self::STATUS_PARTIALLY_RELEASED,
            self::STATUS_SCHEDULED,
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
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['financial_period'] = isset($data['financial_period']) ? $data['financial_period'] : null;
        $this->container['ledger'] = isset($data['ledger']) ? $data['ledger'] : null;
        $this->container['ledger_description'] = isset($data['ledger_description']) ? $data['ledger_description'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['auto_reversing'] = isset($data['auto_reversing']) ? $data['auto_reversing'] : null;
        $this->container['reversing_entry'] = isset($data['reversing_entry']) ? $data['reversing_entry'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['original_batch_number'] = isset($data['original_batch_number']) ? $data['original_batch_number'] : null;
        $this->container['debit_total'] = isset($data['debit_total']) ? $data['debit_total'] : null;
        $this->container['debit_total_in_currency'] = isset($data['debit_total_in_currency']) ? $data['debit_total_in_currency'] : null;
        $this->container['credit_total'] = isset($data['credit_total']) ? $data['credit_total'] : null;
        $this->container['credit_total_in_currency'] = isset($data['credit_total_in_currency']) ? $data['credit_total_in_currency'] : null;
        $this->container['control_total'] = isset($data['control_total']) ? $data['control_total'] : null;
        $this->container['control_total_in_currency'] = isset($data['control_total_in_currency']) ? $data['control_total_in_currency'] : null;
        $this->container['create_vat_transaction'] = isset($data['create_vat_transaction']) ? $data['create_vat_transaction'] : null;
        $this->container['skip_vat_amount_validation'] = isset($data['skip_vat_amount_validation']) ? $data['skip_vat_amount_validation'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['transaction_code_description'] = isset($data['transaction_code_description']) ? $data['transaction_code_description'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['journal_transaction_lines'] = isset($data['journal_transaction_lines']) ? $data['journal_transaction_lines'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
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

        $allowedValues = $this->getModuleAllowableValues();
        if (!is_null($this->container['module']) && !in_array($this->container['module'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'module', must be one of '%s'",
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
     * Gets module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param string $module The top part &gt; Workspace &gt; The workspace where the batch originates. New batches can be created only for General ledger.
     *
     * @return $this
     */
    public function setModule($module)
    {
        $allowedValues = $this->getModuleAllowableValues();
        if (!is_null($module) && !in_array($module, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'module', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['module'] = $module;

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
     * @param string $batch_number The top part &gt; Batch number &gt; The unique ID of the batch, which is generated by the numbering sequence assigned to batches in the GL102000 window.
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

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
     * @param string $status The top part &gt; Status &gt; The current status of the batch. The status defines what processing can be applied to the batch. The following options are available: On hold, Balanced, Scheduled, Unposted, Posted, Void.
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
     * @param bool $hold The top part &gt; Hold &gt; A check box that indicates (if selected) that the batch has the On hold status and cannot be released or posted. You can clear the check box only if the batch has total debits equal to total credits.
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime $transaction_date Mandatory field: The top part &gt; Transaction date* &gt; The date when the batch was created, which relates to the transaction dates of the journal entries.
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

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
     * @param string $post_period Mandatory field: The top part &gt; Post period* &gt; The financial period to which the transactions recorded in the document should be posted. Format MMYYYY.
     *
     * @return $this
     */
    public function setPostPeriod($post_period)
    {
        $this->container['post_period'] = $post_period;

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
     * @param string $financial_period Mandatory field: The top part Post period* &gt; The financial period to which the transactions should be posted. Format YYYYMM.
     *
     * @return $this
     */
    public function setFinancialPeriod($financial_period)
    {
        $this->container['financial_period'] = $financial_period;

        return $this;
    }

    /**
     * Gets ledger
     *
     * @return string
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param string $ledger Mandatory field: The top part &gt; Ledger* &gt; The unique ID of the ledger to which batch transactions are posted. By default, it is the default posting ledger specified for the branch in the GL101010 window, but another posting ledger can be selected.
     *
     * @return $this
     */
    public function setLedger($ledger)
    {
        $this->container['ledger'] = $ledger;

        return $this;
    }

    /**
     * Gets ledger_description
     *
     * @return string
     */
    public function getLedgerDescription()
    {
        return $this->container['ledger_description'];
    }

    /**
     * Sets ledger_description
     *
     * @param string $ledger_description Mandatory field: The top part &gt; Ledger* &gt; Click the magnifier &gt; The description of the ledger to which batch transactions are posted. By default, it is the default posting ledger specified for the branch in the GL101010 window, but another posting ledger can be selected.
     *
     * @return $this
     */
    public function setLedgerDescription($ledger_description)
    {
        $this->container['ledger_description'] = $ledger_description;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id The top part &gt; Currency &gt; The currency used for all the journal transactions in the selected batch.
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return double
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param double $exchange_rate Ingformation collected from the system to calculate currency amount.
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets auto_reversing
     *
     * @return bool
     */
    public function getAutoReversing()
    {
        return $this->container['auto_reversing'];
    }

    /**
     * Sets auto_reversing
     *
     * @param bool $auto_reversing The top part &gt; Automatic reversing &gt; A check box that indicates (if selected) that the batch is auto-reversing.
     *
     * @return $this
     */
    public function setAutoReversing($auto_reversing)
    {
        $this->container['auto_reversing'] = $auto_reversing;

        return $this;
    }

    /**
     * Gets reversing_entry
     *
     * @return bool
     */
    public function getReversingEntry()
    {
        return $this->container['reversing_entry'];
    }

    /**
     * Sets reversing_entry
     *
     * @param bool $reversing_entry The top part &gt; Reversing entry &gt; A check box that indicates (if selected) that the batch is a reversing batch. The Orig.batch number field displays the ID of the batch that was reversed by this batch.
     *
     * @return $this
     */
    public function setReversingEntry($reversing_entry)
    {
        $this->container['reversing_entry'] = $reversing_entry;

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
     * @param string $description The top part &gt; Description &gt; A description of the batch.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets original_batch_number
     *
     * @return string
     */
    public function getOriginalBatchNumber()
    {
        return $this->container['original_batch_number'];
    }

    /**
     * Sets original_batch_number
     *
     * @param string $original_batch_number The top part &gt; Orig. batch number &gt; For a scheduled or auto-reversing batch, the reference number of the batch used as a template.
     *
     * @return $this
     */
    public function setOriginalBatchNumber($original_batch_number)
    {
        $this->container['original_batch_number'] = $original_batch_number;

        return $this;
    }

    /**
     * Gets debit_total
     *
     * @return double
     */
    public function getDebitTotal()
    {
        return $this->container['debit_total'];
    }

    /**
     * Sets debit_total
     *
     * @param double $debit_total The top part &gt; Debit total &gt; The total of transaction debit amounts for the batch; the value is calculated automatically.
     *
     * @return $this
     */
    public function setDebitTotal($debit_total)
    {
        $this->container['debit_total'] = $debit_total;

        return $this;
    }

    /**
     * Gets debit_total_in_currency
     *
     * @return double
     */
    public function getDebitTotalInCurrency()
    {
        return $this->container['debit_total_in_currency'];
    }

    /**
     * Sets debit_total_in_currency
     *
     * @param double $debit_total_in_currency Background calculation giving you the Debit total in your default currency. This field is applicable if the amount is given in another currency than your default.
     *
     * @return $this
     */
    public function setDebitTotalInCurrency($debit_total_in_currency)
    {
        $this->container['debit_total_in_currency'] = $debit_total_in_currency;

        return $this;
    }

    /**
     * Gets credit_total
     *
     * @return double
     */
    public function getCreditTotal()
    {
        return $this->container['credit_total'];
    }

    /**
     * Sets credit_total
     *
     * @param double $credit_total The top part &gt; Credit total &gt; The total of transaction credit amounts for the batch; the value is calculated automatically.
     *
     * @return $this
     */
    public function setCreditTotal($credit_total)
    {
        $this->container['credit_total'] = $credit_total;

        return $this;
    }

    /**
     * Gets credit_total_in_currency
     *
     * @return double
     */
    public function getCreditTotalInCurrency()
    {
        return $this->container['credit_total_in_currency'];
    }

    /**
     * Sets credit_total_in_currency
     *
     * @param double $credit_total_in_currency Background calculation giving you the Credit total in your default currency. This field is applicable if the amount is given in a another currency than your default.
     *
     * @return $this
     */
    public function setCreditTotalInCurrency($credit_total_in_currency)
    {
        $this->container['credit_total_in_currency'] = $credit_total_in_currency;

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
     * @param double $control_total The top part &gt; Control total &gt; The control total of the batch, which is used for batch status validation.
     *
     * @return $this
     */
    public function setControlTotal($control_total)
    {
        $this->container['control_total'] = $control_total;

        return $this;
    }

    /**
     * Gets control_total_in_currency
     *
     * @return double
     */
    public function getControlTotalInCurrency()
    {
        return $this->container['control_total_in_currency'];
    }

    /**
     * Sets control_total_in_currency
     *
     * @param double $control_total_in_currency Background calculation giving you the Control total in your default currency. This field is applicable if the amount is given in another currency than your default.
     *
     * @return $this
     */
    public function setControlTotalInCurrency($control_total_in_currency)
    {
        $this->container['control_total_in_currency'] = $control_total_in_currency;

        return $this;
    }

    /**
     * Gets create_vat_transaction
     *
     * @return bool
     */
    public function getCreateVatTransaction()
    {
        return $this->container['create_vat_transaction'];
    }

    /**
     * Sets create_vat_transaction
     *
     * @param bool $create_vat_transaction The top part &gt; Create VAT transactions &gt; A check box that indicates (if selected) that a VAT-related transaction can be created manually; select this check box when you begin to create the transaction.
     *
     * @return $this
     */
    public function setCreateVatTransaction($create_vat_transaction)
    {
        $this->container['create_vat_transaction'] = $create_vat_transaction;

        return $this;
    }

    /**
     * Gets skip_vat_amount_validation
     *
     * @return bool
     */
    public function getSkipVatAmountValidation()
    {
        return $this->container['skip_vat_amount_validation'];
    }

    /**
     * Sets skip_vat_amount_validation
     *
     * @param bool $skip_vat_amount_validation The top part &gt; Skip VAT amount validation &gt; A check box that (if selected) causes automatic validation of a VAT-related transaction that you create manually to be skipped.
     *
     * @return $this
     */
    public function setSkipVatAmountValidation($skip_vat_amount_validation)
    {
        $this->container['skip_vat_amount_validation'] = $skip_vat_amount_validation;

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
     * Gets transaction_code
     *
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->container['transaction_code'];
    }

    /**
     * Sets transaction_code
     *
     * @param string $transaction_code transaction_code
     *
     * @return $this
     */
    public function setTransactionCode($transaction_code)
    {
        $this->container['transaction_code'] = $transaction_code;

        return $this;
    }

    /**
     * Gets transaction_code_description
     *
     * @return string
     */
    public function getTransactionCodeDescription()
    {
        return $this->container['transaction_code_description'];
    }

    /**
     * Sets transaction_code_description
     *
     * @param string $transaction_code_description The Table part &gt; Transaction description &gt; A description of the transaction or any comments relevant to the transaction.
     *
     * @return $this
     */
    public function setTransactionCodeDescription($transaction_code_description)
    {
        $this->container['transaction_code_description'] = $transaction_code_description;

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
     * @param string $branch The top part &gt; Branch &gt;  The branch to which this batch is related. This field is available if your company is set up with branches.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets journal_transaction_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\JournalTransactionLineDto[]
     */
    public function getJournalTransactionLines()
    {
        return $this->container['journal_transaction_lines'];
    }

    /**
     * Sets journal_transaction_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\JournalTransactionLineDto[] $journal_transaction_lines journal_transaction_lines
     *
     * @return $this
     */
    public function setJournalTransactionLines($journal_transaction_lines)
    {
        $this->container['journal_transaction_lines'] = $journal_transaction_lines;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Ekstralys\VismaNetApi\Model\AttachmentDto[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Ekstralys\VismaNetApi\Model\AttachmentDto[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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

