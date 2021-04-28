<?php
/**
 * SupplierInvoiceLineUpdateDto
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
 * SupplierInvoiceLineUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierInvoiceLineUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierInvoiceLineUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'line_number' => 'object',
        'inventory_number' => 'object',
        'transaction_description' => 'object',
        'quantity' => 'object',
        'uom' => 'object',
        'unit_cost_in_currency' => 'object',
        'cost_in_currency' => 'object',
        'discount_percent' => 'object',
        'discount_amount_in_currency' => 'object',
        'discount_unit_cost_in_currency' => 'object',
        'manual_discount' => 'object',
        'account_number' => 'object',
        'subaccount' => '\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]',
        'deferral_schedule' => 'object',
        'deferral_code' => 'object',
        'vat_code_id' => 'object',
        'branch' => 'object',
        'branch_number' => 'object',
        'note' => 'object',
        'project_id' => 'object',
        'project_task_id' => 'object',
        'split_line' => 'object',
        'undo_split_line' => 'object',
        'split_hierarchy' => 'object',
        'retainage_pct' => 'object',
        'cury_retainage_amt' => 'object',
        'link_line' => 'object',
        'term_start_date' => 'object',
        'term_end_date' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'line_number' => null,
        'inventory_number' => null,
        'transaction_description' => null,
        'quantity' => null,
        'uom' => null,
        'unit_cost_in_currency' => null,
        'cost_in_currency' => null,
        'discount_percent' => null,
        'discount_amount_in_currency' => null,
        'discount_unit_cost_in_currency' => null,
        'manual_discount' => null,
        'account_number' => null,
        'subaccount' => null,
        'deferral_schedule' => null,
        'deferral_code' => null,
        'vat_code_id' => null,
        'branch' => null,
        'branch_number' => null,
        'note' => null,
        'project_id' => null,
        'project_task_id' => null,
        'split_line' => null,
        'undo_split_line' => null,
        'split_hierarchy' => null,
        'retainage_pct' => null,
        'cury_retainage_amt' => null,
        'link_line' => null,
        'term_start_date' => null,
        'term_end_date' => null
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
        'operation' => 'operation',
        'line_number' => 'lineNumber',
        'inventory_number' => 'inventoryNumber',
        'transaction_description' => 'transactionDescription',
        'quantity' => 'quantity',
        'uom' => 'uom',
        'unit_cost_in_currency' => 'unitCostInCurrency',
        'cost_in_currency' => 'costInCurrency',
        'discount_percent' => 'discountPercent',
        'discount_amount_in_currency' => 'discountAmountInCurrency',
        'discount_unit_cost_in_currency' => 'discountUnitCostInCurrency',
        'manual_discount' => 'manualDiscount',
        'account_number' => 'accountNumber',
        'subaccount' => 'subaccount',
        'deferral_schedule' => 'deferralSchedule',
        'deferral_code' => 'deferralCode',
        'vat_code_id' => 'vatCodeId',
        'branch' => 'branch',
        'branch_number' => 'branchNumber',
        'note' => 'note',
        'project_id' => 'projectId',
        'project_task_id' => 'projectTaskId',
        'split_line' => 'splitLine',
        'undo_split_line' => 'undoSplitLine',
        'split_hierarchy' => 'splitHierarchy',
        'retainage_pct' => 'retainagePct',
        'cury_retainage_amt' => 'curyRetainageAmt',
        'link_line' => 'linkLine',
        'term_start_date' => 'termStartDate',
        'term_end_date' => 'termEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'line_number' => 'setLineNumber',
        'inventory_number' => 'setInventoryNumber',
        'transaction_description' => 'setTransactionDescription',
        'quantity' => 'setQuantity',
        'uom' => 'setUom',
        'unit_cost_in_currency' => 'setUnitCostInCurrency',
        'cost_in_currency' => 'setCostInCurrency',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount_in_currency' => 'setDiscountAmountInCurrency',
        'discount_unit_cost_in_currency' => 'setDiscountUnitCostInCurrency',
        'manual_discount' => 'setManualDiscount',
        'account_number' => 'setAccountNumber',
        'subaccount' => 'setSubaccount',
        'deferral_schedule' => 'setDeferralSchedule',
        'deferral_code' => 'setDeferralCode',
        'vat_code_id' => 'setVatCodeId',
        'branch' => 'setBranch',
        'branch_number' => 'setBranchNumber',
        'note' => 'setNote',
        'project_id' => 'setProjectId',
        'project_task_id' => 'setProjectTaskId',
        'split_line' => 'setSplitLine',
        'undo_split_line' => 'setUndoSplitLine',
        'split_hierarchy' => 'setSplitHierarchy',
        'retainage_pct' => 'setRetainagePct',
        'cury_retainage_amt' => 'setCuryRetainageAmt',
        'link_line' => 'setLinkLine',
        'term_start_date' => 'setTermStartDate',
        'term_end_date' => 'setTermEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'line_number' => 'getLineNumber',
        'inventory_number' => 'getInventoryNumber',
        'transaction_description' => 'getTransactionDescription',
        'quantity' => 'getQuantity',
        'uom' => 'getUom',
        'unit_cost_in_currency' => 'getUnitCostInCurrency',
        'cost_in_currency' => 'getCostInCurrency',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount_in_currency' => 'getDiscountAmountInCurrency',
        'discount_unit_cost_in_currency' => 'getDiscountUnitCostInCurrency',
        'manual_discount' => 'getManualDiscount',
        'account_number' => 'getAccountNumber',
        'subaccount' => 'getSubaccount',
        'deferral_schedule' => 'getDeferralSchedule',
        'deferral_code' => 'getDeferralCode',
        'vat_code_id' => 'getVatCodeId',
        'branch' => 'getBranch',
        'branch_number' => 'getBranchNumber',
        'note' => 'getNote',
        'project_id' => 'getProjectId',
        'project_task_id' => 'getProjectTaskId',
        'split_line' => 'getSplitLine',
        'undo_split_line' => 'getUndoSplitLine',
        'split_hierarchy' => 'getSplitHierarchy',
        'retainage_pct' => 'getRetainagePct',
        'cury_retainage_amt' => 'getCuryRetainageAmt',
        'link_line' => 'getLinkLine',
        'term_start_date' => 'getTermStartDate',
        'term_end_date' => 'getTermEndDate'
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

    const OPERATION_INSERT = 'Insert';
    const OPERATION_UPDATE = 'Update';
    const OPERATION_DELETE = 'Delete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_INSERT,
            self::OPERATION_UPDATE,
            self::OPERATION_DELETE,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['transaction_description'] = isset($data['transaction_description']) ? $data['transaction_description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['unit_cost_in_currency'] = isset($data['unit_cost_in_currency']) ? $data['unit_cost_in_currency'] : null;
        $this->container['cost_in_currency'] = isset($data['cost_in_currency']) ? $data['cost_in_currency'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_amount_in_currency'] = isset($data['discount_amount_in_currency']) ? $data['discount_amount_in_currency'] : null;
        $this->container['discount_unit_cost_in_currency'] = isset($data['discount_unit_cost_in_currency']) ? $data['discount_unit_cost_in_currency'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['deferral_schedule'] = isset($data['deferral_schedule']) ? $data['deferral_schedule'] : null;
        $this->container['deferral_code'] = isset($data['deferral_code']) ? $data['deferral_code'] : null;
        $this->container['vat_code_id'] = isset($data['vat_code_id']) ? $data['vat_code_id'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['project_task_id'] = isset($data['project_task_id']) ? $data['project_task_id'] : null;
        $this->container['split_line'] = isset($data['split_line']) ? $data['split_line'] : null;
        $this->container['undo_split_line'] = isset($data['undo_split_line']) ? $data['undo_split_line'] : null;
        $this->container['split_hierarchy'] = isset($data['split_hierarchy']) ? $data['split_hierarchy'] : null;
        $this->container['retainage_pct'] = isset($data['retainage_pct']) ? $data['retainage_pct'] : null;
        $this->container['cury_retainage_amt'] = isset($data['cury_retainage_amt']) ? $data['cury_retainage_amt'] : null;
        $this->container['link_line'] = isset($data['link_line']) ? $data['link_line'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_end_date'] = isset($data['term_end_date']) ? $data['term_end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return object
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param object $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets inventory_number
     *
     * @return object
     */
    public function getInventoryNumber()
    {
        return $this->container['inventory_number'];
    }

    /**
     * Sets inventory_number
     *
     * @param object $inventory_number inventory_number
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

        return $this;
    }

    /**
     * Gets transaction_description
     *
     * @return object
     */
    public function getTransactionDescription()
    {
        return $this->container['transaction_description'];
    }

    /**
     * Sets transaction_description
     *
     * @param object $transaction_description transaction_description
     *
     * @return $this
     */
    public function setTransactionDescription($transaction_description)
    {
        $this->container['transaction_description'] = $transaction_description;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return object
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param object $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return object
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param object $uom uom
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets unit_cost_in_currency
     *
     * @return object
     */
    public function getUnitCostInCurrency()
    {
        return $this->container['unit_cost_in_currency'];
    }

    /**
     * Sets unit_cost_in_currency
     *
     * @param object $unit_cost_in_currency unit_cost_in_currency
     *
     * @return $this
     */
    public function setUnitCostInCurrency($unit_cost_in_currency)
    {
        $this->container['unit_cost_in_currency'] = $unit_cost_in_currency;

        return $this;
    }

    /**
     * Gets cost_in_currency
     *
     * @return object
     */
    public function getCostInCurrency()
    {
        return $this->container['cost_in_currency'];
    }

    /**
     * Sets cost_in_currency
     *
     * @param object $cost_in_currency cost_in_currency
     *
     * @return $this
     */
    public function setCostInCurrency($cost_in_currency)
    {
        $this->container['cost_in_currency'] = $cost_in_currency;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return object
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param object $discount_percent discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_amount_in_currency
     *
     * @return object
     */
    public function getDiscountAmountInCurrency()
    {
        return $this->container['discount_amount_in_currency'];
    }

    /**
     * Sets discount_amount_in_currency
     *
     * @param object $discount_amount_in_currency discount_amount_in_currency
     *
     * @return $this
     */
    public function setDiscountAmountInCurrency($discount_amount_in_currency)
    {
        $this->container['discount_amount_in_currency'] = $discount_amount_in_currency;

        return $this;
    }

    /**
     * Gets discount_unit_cost_in_currency
     *
     * @return object
     */
    public function getDiscountUnitCostInCurrency()
    {
        return $this->container['discount_unit_cost_in_currency'];
    }

    /**
     * Sets discount_unit_cost_in_currency
     *
     * @param object $discount_unit_cost_in_currency discount_unit_cost_in_currency
     *
     * @return $this
     */
    public function setDiscountUnitCostInCurrency($discount_unit_cost_in_currency)
    {
        $this->container['discount_unit_cost_in_currency'] = $discount_unit_cost_in_currency;

        return $this;
    }

    /**
     * Gets manual_discount
     *
     * @return object
     */
    public function getManualDiscount()
    {
        return $this->container['manual_discount'];
    }

    /**
     * Sets manual_discount
     *
     * @param object $manual_discount manual_discount
     *
     * @return $this
     */
    public function setManualDiscount($manual_discount)
    {
        $this->container['manual_discount'] = $manual_discount;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return object
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param object $account_number account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets subaccount
     *
     * @return \Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]
     */
    public function getSubaccount()
    {
        return $this->container['subaccount'];
    }

    /**
     * Sets subaccount
     *
     * @param \Ekstralys\VismaNetApi\Model\SegmentUpdateDto[] $subaccount subaccount
     *
     * @return $this
     */
    public function setSubaccount($subaccount)
    {
        $this->container['subaccount'] = $subaccount;

        return $this;
    }

    /**
     * Gets deferral_schedule
     *
     * @return object
     */
    public function getDeferralSchedule()
    {
        return $this->container['deferral_schedule'];
    }

    /**
     * Sets deferral_schedule
     *
     * @param object $deferral_schedule deferral_schedule
     *
     * @return $this
     */
    public function setDeferralSchedule($deferral_schedule)
    {
        $this->container['deferral_schedule'] = $deferral_schedule;

        return $this;
    }

    /**
     * Gets deferral_code
     *
     * @return object
     */
    public function getDeferralCode()
    {
        return $this->container['deferral_code'];
    }

    /**
     * Sets deferral_code
     *
     * @param object $deferral_code deferral_code
     *
     * @return $this
     */
    public function setDeferralCode($deferral_code)
    {
        $this->container['deferral_code'] = $deferral_code;

        return $this;
    }

    /**
     * Gets vat_code_id
     *
     * @return object
     */
    public function getVatCodeId()
    {
        return $this->container['vat_code_id'];
    }

    /**
     * Sets vat_code_id
     *
     * @param object $vat_code_id vat_code_id
     *
     * @return $this
     */
    public function setVatCodeId($vat_code_id)
    {
        $this->container['vat_code_id'] = $vat_code_id;

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
     * @param object $branch Branch is deprecated, please use BranchNumber instead.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets branch_number
     *
     * @return object
     */
    public function getBranchNumber()
    {
        return $this->container['branch_number'];
    }

    /**
     * Sets branch_number
     *
     * @param object $branch_number branch_number
     *
     * @return $this
     */
    public function setBranchNumber($branch_number)
    {
        $this->container['branch_number'] = $branch_number;

        return $this;
    }

    /**
     * Gets note
     *
     * @return object
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param object $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return object
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param object $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets project_task_id
     *
     * @return object
     */
    public function getProjectTaskId()
    {
        return $this->container['project_task_id'];
    }

    /**
     * Sets project_task_id
     *
     * @param object $project_task_id project_task_id
     *
     * @return $this
     */
    public function setProjectTaskId($project_task_id)
    {
        $this->container['project_task_id'] = $project_task_id;

        return $this;
    }

    /**
     * Gets split_line
     *
     * @return object
     */
    public function getSplitLine()
    {
        return $this->container['split_line'];
    }

    /**
     * Sets split_line
     *
     * @param object $split_line split_line
     *
     * @return $this
     */
    public function setSplitLine($split_line)
    {
        $this->container['split_line'] = $split_line;

        return $this;
    }

    /**
     * Gets undo_split_line
     *
     * @return object
     */
    public function getUndoSplitLine()
    {
        return $this->container['undo_split_line'];
    }

    /**
     * Sets undo_split_line
     *
     * @param object $undo_split_line undo_split_line
     *
     * @return $this
     */
    public function setUndoSplitLine($undo_split_line)
    {
        $this->container['undo_split_line'] = $undo_split_line;

        return $this;
    }

    /**
     * Gets split_hierarchy
     *
     * @return object
     */
    public function getSplitHierarchy()
    {
        return $this->container['split_hierarchy'];
    }

    /**
     * Sets split_hierarchy
     *
     * @param object $split_hierarchy split_hierarchy
     *
     * @return $this
     */
    public function setSplitHierarchy($split_hierarchy)
    {
        $this->container['split_hierarchy'] = $split_hierarchy;

        return $this;
    }

    /**
     * Gets retainage_pct
     *
     * @return object
     */
    public function getRetainagePct()
    {
        return $this->container['retainage_pct'];
    }

    /**
     * Sets retainage_pct
     *
     * @param object $retainage_pct retainage_pct
     *
     * @return $this
     */
    public function setRetainagePct($retainage_pct)
    {
        $this->container['retainage_pct'] = $retainage_pct;

        return $this;
    }

    /**
     * Gets cury_retainage_amt
     *
     * @return object
     */
    public function getCuryRetainageAmt()
    {
        return $this->container['cury_retainage_amt'];
    }

    /**
     * Sets cury_retainage_amt
     *
     * @param object $cury_retainage_amt cury_retainage_amt
     *
     * @return $this
     */
    public function setCuryRetainageAmt($cury_retainage_amt)
    {
        $this->container['cury_retainage_amt'] = $cury_retainage_amt;

        return $this;
    }

    /**
     * Gets link_line
     *
     * @return object
     */
    public function getLinkLine()
    {
        return $this->container['link_line'];
    }

    /**
     * Sets link_line
     *
     * @param object $link_line link_line
     *
     * @return $this
     */
    public function setLinkLine($link_line)
    {
        $this->container['link_line'] = $link_line;

        return $this;
    }

    /**
     * Gets term_start_date
     *
     * @return object
     */
    public function getTermStartDate()
    {
        return $this->container['term_start_date'];
    }

    /**
     * Sets term_start_date
     *
     * @param object $term_start_date term_start_date
     *
     * @return $this
     */
    public function setTermStartDate($term_start_date)
    {
        $this->container['term_start_date'] = $term_start_date;

        return $this;
    }

    /**
     * Gets term_end_date
     *
     * @return object
     */
    public function getTermEndDate()
    {
        return $this->container['term_end_date'];
    }

    /**
     * Sets term_end_date
     *
     * @param object $term_end_date term_end_date
     *
     * @return $this
     */
    public function setTermEndDate($term_end_date)
    {
        $this->container['term_end_date'] = $term_end_date;

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

