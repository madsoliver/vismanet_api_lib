<?php
/**
 * ProjectTransactionLineDto
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
 * ProjectTransactionLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectTransactionLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectTransactionLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tran_id' => 'int',
        'date' => '\DateTime',
        'inventory_id' => 'object',
        'description' => 'string',
        'uom' => 'string',
        'quantity' => 'double',
        'unit_rate' => 'double',
        'amount' => 'double',
        'billable' => 'bool',
        'released' => 'bool',
        'allocated' => 'bool',
        'billable_quantity' => 'double',
        'financial_period' => 'string',
        'batch_nbr' => 'string',
        'use_billable_qty' => 'bool',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'last_modified_date_time' => '\DateTime',
        'earning_type' => 'object',
        'overtime_multiplier' => 'double',
        'project' => 'object',
        'project_task' => 'object',
        'debit_account' => 'object',
        'debit_subaccount' => 'object',
        'credit_account' => 'object',
        'credit_subaccount' => 'object',
        'branch' => 'object',
        'employee' => 'object',
        'customer_vendor' => 'object',
        'account_group' => 'object',
        'debit_account_group' => 'object',
        'credit_account_group' => 'object',
        'location' => 'object',
        'note' => 'string',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tran_id' => 'int64',
        'date' => 'date-time',
        'inventory_id' => null,
        'description' => null,
        'uom' => null,
        'quantity' => 'double',
        'unit_rate' => 'double',
        'amount' => 'double',
        'billable' => null,
        'released' => null,
        'allocated' => null,
        'billable_quantity' => 'double',
        'financial_period' => null,
        'batch_nbr' => null,
        'use_billable_qty' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'last_modified_date_time' => 'date-time',
        'earning_type' => null,
        'overtime_multiplier' => 'double',
        'project' => null,
        'project_task' => null,
        'debit_account' => null,
        'debit_subaccount' => null,
        'credit_account' => null,
        'credit_subaccount' => null,
        'branch' => null,
        'employee' => null,
        'customer_vendor' => null,
        'account_group' => null,
        'debit_account_group' => null,
        'credit_account_group' => null,
        'location' => null,
        'note' => null,
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
        'tran_id' => 'tranId',
        'date' => 'date',
        'inventory_id' => 'inventoryId',
        'description' => 'description',
        'uom' => 'uom',
        'quantity' => 'quantity',
        'unit_rate' => 'unitRate',
        'amount' => 'amount',
        'billable' => 'billable',
        'released' => 'released',
        'allocated' => 'allocated',
        'billable_quantity' => 'billableQuantity',
        'financial_period' => 'financialPeriod',
        'batch_nbr' => 'batchNbr',
        'use_billable_qty' => 'useBillableQty',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'earning_type' => 'earningType',
        'overtime_multiplier' => 'overtimeMultiplier',
        'project' => 'project',
        'project_task' => 'projectTask',
        'debit_account' => 'debitAccount',
        'debit_subaccount' => 'debitSubaccount',
        'credit_account' => 'creditAccount',
        'credit_subaccount' => 'creditSubaccount',
        'branch' => 'branch',
        'employee' => 'employee',
        'customer_vendor' => 'customerVendor',
        'account_group' => 'accountGroup',
        'debit_account_group' => 'debitAccountGroup',
        'credit_account_group' => 'creditAccountGroup',
        'location' => 'location',
        'note' => 'note',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tran_id' => 'setTranId',
        'date' => 'setDate',
        'inventory_id' => 'setInventoryId',
        'description' => 'setDescription',
        'uom' => 'setUom',
        'quantity' => 'setQuantity',
        'unit_rate' => 'setUnitRate',
        'amount' => 'setAmount',
        'billable' => 'setBillable',
        'released' => 'setReleased',
        'allocated' => 'setAllocated',
        'billable_quantity' => 'setBillableQuantity',
        'financial_period' => 'setFinancialPeriod',
        'batch_nbr' => 'setBatchNbr',
        'use_billable_qty' => 'setUseBillableQty',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'earning_type' => 'setEarningType',
        'overtime_multiplier' => 'setOvertimeMultiplier',
        'project' => 'setProject',
        'project_task' => 'setProjectTask',
        'debit_account' => 'setDebitAccount',
        'debit_subaccount' => 'setDebitSubaccount',
        'credit_account' => 'setCreditAccount',
        'credit_subaccount' => 'setCreditSubaccount',
        'branch' => 'setBranch',
        'employee' => 'setEmployee',
        'customer_vendor' => 'setCustomerVendor',
        'account_group' => 'setAccountGroup',
        'debit_account_group' => 'setDebitAccountGroup',
        'credit_account_group' => 'setCreditAccountGroup',
        'location' => 'setLocation',
        'note' => 'setNote',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tran_id' => 'getTranId',
        'date' => 'getDate',
        'inventory_id' => 'getInventoryId',
        'description' => 'getDescription',
        'uom' => 'getUom',
        'quantity' => 'getQuantity',
        'unit_rate' => 'getUnitRate',
        'amount' => 'getAmount',
        'billable' => 'getBillable',
        'released' => 'getReleased',
        'allocated' => 'getAllocated',
        'billable_quantity' => 'getBillableQuantity',
        'financial_period' => 'getFinancialPeriod',
        'batch_nbr' => 'getBatchNbr',
        'use_billable_qty' => 'getUseBillableQty',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'earning_type' => 'getEarningType',
        'overtime_multiplier' => 'getOvertimeMultiplier',
        'project' => 'getProject',
        'project_task' => 'getProjectTask',
        'debit_account' => 'getDebitAccount',
        'debit_subaccount' => 'getDebitSubaccount',
        'credit_account' => 'getCreditAccount',
        'credit_subaccount' => 'getCreditSubaccount',
        'branch' => 'getBranch',
        'employee' => 'getEmployee',
        'customer_vendor' => 'getCustomerVendor',
        'account_group' => 'getAccountGroup',
        'debit_account_group' => 'getDebitAccountGroup',
        'credit_account_group' => 'getCreditAccountGroup',
        'location' => 'getLocation',
        'note' => 'getNote',
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
        $this->container['tran_id'] = isset($data['tran_id']) ? $data['tran_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_rate'] = isset($data['unit_rate']) ? $data['unit_rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['released'] = isset($data['released']) ? $data['released'] : null;
        $this->container['allocated'] = isset($data['allocated']) ? $data['allocated'] : null;
        $this->container['billable_quantity'] = isset($data['billable_quantity']) ? $data['billable_quantity'] : null;
        $this->container['financial_period'] = isset($data['financial_period']) ? $data['financial_period'] : null;
        $this->container['batch_nbr'] = isset($data['batch_nbr']) ? $data['batch_nbr'] : null;
        $this->container['use_billable_qty'] = isset($data['use_billable_qty']) ? $data['use_billable_qty'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['earning_type'] = isset($data['earning_type']) ? $data['earning_type'] : null;
        $this->container['overtime_multiplier'] = isset($data['overtime_multiplier']) ? $data['overtime_multiplier'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_task'] = isset($data['project_task']) ? $data['project_task'] : null;
        $this->container['debit_account'] = isset($data['debit_account']) ? $data['debit_account'] : null;
        $this->container['debit_subaccount'] = isset($data['debit_subaccount']) ? $data['debit_subaccount'] : null;
        $this->container['credit_account'] = isset($data['credit_account']) ? $data['credit_account'] : null;
        $this->container['credit_subaccount'] = isset($data['credit_subaccount']) ? $data['credit_subaccount'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['customer_vendor'] = isset($data['customer_vendor']) ? $data['customer_vendor'] : null;
        $this->container['account_group'] = isset($data['account_group']) ? $data['account_group'] : null;
        $this->container['debit_account_group'] = isset($data['debit_account_group']) ? $data['debit_account_group'] : null;
        $this->container['credit_account_group'] = isset($data['credit_account_group']) ? $data['credit_account_group'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
     * Gets tran_id
     *
     * @return int
     */
    public function getTranId()
    {
        return $this->container['tran_id'];
    }

    /**
     * Sets tran_id
     *
     * @param int $tran_id tran_id
     *
     * @return $this
     */
    public function setTranId($tran_id)
    {
        $this->container['tran_id'] = $tran_id;

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
     * @param \DateTime $date Date &gt; The date the transaction was created.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets inventory_id
     *
     * @return object
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     *
     * @param object $inventory_id Item ID &gt; The identifier of the stock or non-stock item associated with the transaction.
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

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
     * @param string $description Description &gt; The description of the transaction.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $uom UoM &gt; The unit of measure used to estimate the quantity for the transaction, such as HOUR or BOX.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity Quantity &gt;  The quantity for the transaction, such as the number of service hours provided to the customer.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_rate
     *
     * @return double
     */
    public function getUnitRate()
    {
        return $this->container['unit_rate'];
    }

    /**
     * Sets unit_rate
     *
     * @param double $unit_rate Unit rate &gt; The price of the item or the rate of the service.
     *
     * @return $this
     */
    public function setUnitRate($unit_rate)
    {
        $this->container['unit_rate'] = $unit_rate;

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
     * @param double $amount Amount &gt; The amount of the transaction.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable Invoiceable &gt; A check box indicating whether the transaction is used in calculating the amount charged to the customer for the project task.
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

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
     * @param bool $released Released &gt; A check box indicating whether the transaction has been released.
     *
     * @return $this
     */
    public function setReleased($released)
    {
        $this->container['released'] = $released;

        return $this;
    }

    /**
     * Gets allocated
     *
     * @return bool
     */
    public function getAllocated()
    {
        return $this->container['allocated'];
    }

    /**
     * Sets allocated
     *
     * @param bool $allocated Allocated &gt; A check box that indicates whether the amounts of the transactions were allocated for the project.
     *
     * @return $this
     */
    public function setAllocated($allocated)
    {
        $this->container['allocated'] = $allocated;

        return $this;
    }

    /**
     * Gets billable_quantity
     *
     * @return double
     */
    public function getBillableQuantity()
    {
        return $this->container['billable_quantity'];
    }

    /**
     * Sets billable_quantity
     *
     * @param double $billable_quantity Qty. that can be invoiced &gt; The total invoiceable quantity for the transactions listed in the table.
     *
     * @return $this
     */
    public function setBillableQuantity($billable_quantity)
    {
        $this->container['billable_quantity'] = $billable_quantity;

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
     * @param string $financial_period Period &gt; The financial period associated with the transaction.
     *
     * @return $this
     */
    public function setFinancialPeriod($financial_period)
    {
        $this->container['financial_period'] = $financial_period;

        return $this;
    }

    /**
     * Gets batch_nbr
     *
     * @return string
     */
    public function getBatchNbr()
    {
        return $this->container['batch_nbr'];
    }

    /**
     * Sets batch_nbr
     *
     * @param string $batch_nbr Batch no. &gt; The batch number of the transaction in the General ledger workspace.
     *
     * @return $this
     */
    public function setBatchNbr($batch_nbr)
    {
        $this->container['batch_nbr'] = $batch_nbr;

        return $this;
    }

    /**
     * Gets use_billable_qty
     *
     * @return bool
     */
    public function getUseBillableQty()
    {
        return $this->container['use_billable_qty'];
    }

    /**
     * Sets use_billable_qty
     *
     * @param bool $use_billable_qty Use the quantity that can be invoiced in the amount formula &gt; A check box that you select if you want the system to use the invoiceable quantity (the Invoiceable quantity column) instead of the overall quantity (the Quantity column) of the transaction when calculating the amount of transaction.
     *
     * @return $this
     */
    public function setUseBillableQty($use_billable_qty)
    {
        $this->container['use_billable_qty'] = $use_billable_qty;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date &gt; The start date for this transaction.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date &gt; The end date for this transaction
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param \DateTime $last_modified_date_time System generated information
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets earning_type
     *
     * @return object
     */
    public function getEarningType()
    {
        return $this->container['earning_type'];
    }

    /**
     * Sets earning_type
     *
     * @param object $earning_type Earning type &gt; The earning type specified for the transaction to calculate the labour cost.
     *
     * @return $this
     */
    public function setEarningType($earning_type)
    {
        $this->container['earning_type'] = $earning_type;

        return $this;
    }

    /**
     * Gets overtime_multiplier
     *
     * @return double
     */
    public function getOvertimeMultiplier()
    {
        return $this->container['overtime_multiplier'];
    }

    /**
     * Sets overtime_multiplier
     *
     * @param double $overtime_multiplier Multiplier &gt; The multiplier by which the unit rate is multiplied when the labour cost is calculated.
     *
     * @return $this
     */
    public function setOvertimeMultiplier($overtime_multiplier)
    {
        $this->container['overtime_multiplier'] = $overtime_multiplier;

        return $this;
    }

    /**
     * Gets project
     *
     * @return object
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param object $project Project &gt; The project associated with the transaction.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_task
     *
     * @return object
     */
    public function getProjectTask()
    {
        return $this->container['project_task'];
    }

    /**
     * Sets project_task
     *
     * @param object $project_task Project task &gt; The project task associated with the transaction.
     *
     * @return $this
     */
    public function setProjectTask($project_task)
    {
        $this->container['project_task'] = $project_task;

        return $this;
    }

    /**
     * Gets debit_account
     *
     * @return object
     */
    public function getDebitAccount()
    {
        return $this->container['debit_account'];
    }

    /**
     * Sets debit_account
     *
     * @param object $debit_account Debit account &gt; For released transactions, the account the transaction debited when it was released; for unreleased transactions, the account the transaction debits if it is released (mainly for the transactions that originate in the Projects module).
     *
     * @return $this
     */
    public function setDebitAccount($debit_account)
    {
        $this->container['debit_account'] = $debit_account;

        return $this;
    }

    /**
     * Gets debit_subaccount
     *
     * @return object
     */
    public function getDebitSubaccount()
    {
        return $this->container['debit_subaccount'];
    }

    /**
     * Sets debit_subaccount
     *
     * @param object $debit_subaccount Debit subaccount &gt; For released transactions, the subaccount the transaction debited when it was released; for unreleased transactions, the subaccount the transaction debits if it is released.
     *
     * @return $this
     */
    public function setDebitSubaccount($debit_subaccount)
    {
        $this->container['debit_subaccount'] = $debit_subaccount;

        return $this;
    }

    /**
     * Gets credit_account
     *
     * @return object
     */
    public function getCreditAccount()
    {
        return $this->container['credit_account'];
    }

    /**
     * Sets credit_account
     *
     * @param object $credit_account Credit account &gt; For released transactions, the account the transaction credited when it was released; for unreleased transactions, the account the transaction credits if it is released.
     *
     * @return $this
     */
    public function setCreditAccount($credit_account)
    {
        $this->container['credit_account'] = $credit_account;

        return $this;
    }

    /**
     * Gets credit_subaccount
     *
     * @return object
     */
    public function getCreditSubaccount()
    {
        return $this->container['credit_subaccount'];
    }

    /**
     * Sets credit_subaccount
     *
     * @param object $credit_subaccount Credit subaccount &gt;  For released transactions, the subaccount the transaction credited when it was released; for unreleased transactions, the subaccount the transaction credits if it is released.
     *
     * @return $this
     */
    public function setCreditSubaccount($credit_subaccount)
    {
        $this->container['credit_subaccount'] = $credit_subaccount;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return object
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param object $branch Branch &gt; The branch in which the transaction was created.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return object
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param object $employee Employee &gt; The employee associated with the transaction, such as the employee who worked on the project for the customer.
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets customer_vendor
     *
     * @return object
     */
    public function getCustomerVendor()
    {
        return $this->container['customer_vendor'];
    }

    /**
     * Sets customer_vendor
     *
     * @param object $customer_vendor Customer/supplier &gt; The name of the supplier (if the transaction originated in the Supplier ledger workspace) or customer (if the transaction originated in another workspace).
     *
     * @return $this
     */
    public function setCustomerVendor($customer_vendor)
    {
        $this->container['customer_vendor'] = $customer_vendor;

        return $this;
    }

    /**
     * Gets account_group
     *
     * @return object
     */
    public function getAccountGroup()
    {
        return $this->container['account_group'];
    }

    /**
     * Sets account_group
     *
     * @param object $account_group Account group &gt; The account group of the debit side account of the transaction.
     *
     * @return $this
     */
    public function setAccountGroup($account_group)
    {
        $this->container['account_group'] = $account_group;

        return $this;
    }

    /**
     * Gets debit_account_group
     *
     * @return object
     */
    public function getDebitAccountGroup()
    {
        return $this->container['debit_account_group'];
    }

    /**
     * Sets debit_account_group
     *
     * @param object $debit_account_group Debit Account group &gt; The account group of the debit side account of the transaction. This field has been deprecated and will be removed in future versions. Use DebitAccountGroup.
     *
     * @return $this
     */
    public function setDebitAccountGroup($debit_account_group)
    {
        $this->container['debit_account_group'] = $debit_account_group;

        return $this;
    }

    /**
     * Gets credit_account_group
     *
     * @return object
     */
    public function getCreditAccountGroup()
    {
        return $this->container['credit_account_group'];
    }

    /**
     * Sets credit_account_group
     *
     * @param object $credit_account_group Debit Account group &gt; The account group of the credit side account of the transaction.
     *
     * @return $this
     */
    public function setCreditAccountGroup($credit_account_group)
    {
        $this->container['credit_account_group'] = $credit_account_group;

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
     * @param object $location Location &gt; The location of the customer or supplier.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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


