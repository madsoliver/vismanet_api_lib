<?php
/**
 * ExpenseReceiptDto
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
 * ExpenseReceiptDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a Expense Receipt in ExpenseReceiptController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpenseReceiptDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExpenseReceiptDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'internal_id' => 'int',
        'receipt_id' => 'string',
        'date' => '\DateTime',
        'currency' => 'object',
        'ref_nbr' => 'string',
        'inventory' => 'object',
        'description' => 'string',
        'uom' => 'string',
        'quantity' => 'double',
        'unit_cost' => 'double',
        'total_amount' => 'double',
        'employee_part' => 'double',
        'claim_amount' => 'double',
        'status' => 'string',
        'claimed_by' => 'object',
        'branch' => 'object',
        'expense_claim' => 'object',
        'invoiceable' => 'bool',
        'project' => 'object',
        'project_task' => 'object',
        'customer' => 'object',
        'location' => 'object',
        'expense_account' => 'object',
        'expense_sub' => 'object',
        'sales_account' => 'object',
        'sales_sub' => 'object',
        'tax_category' => 'object',
        'image' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'internal_id' => 'int32',
        'receipt_id' => null,
        'date' => 'date-time',
        'currency' => null,
        'ref_nbr' => null,
        'inventory' => null,
        'description' => null,
        'uom' => null,
        'quantity' => 'double',
        'unit_cost' => 'double',
        'total_amount' => 'double',
        'employee_part' => 'double',
        'claim_amount' => 'double',
        'status' => null,
        'claimed_by' => null,
        'branch' => null,
        'expense_claim' => null,
        'invoiceable' => null,
        'project' => null,
        'project_task' => null,
        'customer' => null,
        'location' => null,
        'expense_account' => null,
        'expense_sub' => null,
        'sales_account' => null,
        'sales_sub' => null,
        'tax_category' => null,
        'image' => null
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
        'internal_id' => 'internalId',
        'receipt_id' => 'receiptId',
        'date' => 'date',
        'currency' => 'currency',
        'ref_nbr' => 'refNbr',
        'inventory' => 'inventory',
        'description' => 'description',
        'uom' => 'uom',
        'quantity' => 'quantity',
        'unit_cost' => 'unitCost',
        'total_amount' => 'totalAmount',
        'employee_part' => 'employeePart',
        'claim_amount' => 'claimAmount',
        'status' => 'status',
        'claimed_by' => 'claimedBy',
        'branch' => 'branch',
        'expense_claim' => 'expenseClaim',
        'invoiceable' => 'invoiceable',
        'project' => 'project',
        'project_task' => 'projectTask',
        'customer' => 'customer',
        'location' => 'location',
        'expense_account' => 'expenseAccount',
        'expense_sub' => 'expenseSub',
        'sales_account' => 'salesAccount',
        'sales_sub' => 'salesSub',
        'tax_category' => 'taxCategory',
        'image' => 'image'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'internal_id' => 'setInternalId',
        'receipt_id' => 'setReceiptId',
        'date' => 'setDate',
        'currency' => 'setCurrency',
        'ref_nbr' => 'setRefNbr',
        'inventory' => 'setInventory',
        'description' => 'setDescription',
        'uom' => 'setUom',
        'quantity' => 'setQuantity',
        'unit_cost' => 'setUnitCost',
        'total_amount' => 'setTotalAmount',
        'employee_part' => 'setEmployeePart',
        'claim_amount' => 'setClaimAmount',
        'status' => 'setStatus',
        'claimed_by' => 'setClaimedBy',
        'branch' => 'setBranch',
        'expense_claim' => 'setExpenseClaim',
        'invoiceable' => 'setInvoiceable',
        'project' => 'setProject',
        'project_task' => 'setProjectTask',
        'customer' => 'setCustomer',
        'location' => 'setLocation',
        'expense_account' => 'setExpenseAccount',
        'expense_sub' => 'setExpenseSub',
        'sales_account' => 'setSalesAccount',
        'sales_sub' => 'setSalesSub',
        'tax_category' => 'setTaxCategory',
        'image' => 'setImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'internal_id' => 'getInternalId',
        'receipt_id' => 'getReceiptId',
        'date' => 'getDate',
        'currency' => 'getCurrency',
        'ref_nbr' => 'getRefNbr',
        'inventory' => 'getInventory',
        'description' => 'getDescription',
        'uom' => 'getUom',
        'quantity' => 'getQuantity',
        'unit_cost' => 'getUnitCost',
        'total_amount' => 'getTotalAmount',
        'employee_part' => 'getEmployeePart',
        'claim_amount' => 'getClaimAmount',
        'status' => 'getStatus',
        'claimed_by' => 'getClaimedBy',
        'branch' => 'getBranch',
        'expense_claim' => 'getExpenseClaim',
        'invoiceable' => 'getInvoiceable',
        'project' => 'getProject',
        'project_task' => 'getProjectTask',
        'customer' => 'getCustomer',
        'location' => 'getLocation',
        'expense_account' => 'getExpenseAccount',
        'expense_sub' => 'getExpenseSub',
        'sales_account' => 'getSalesAccount',
        'sales_sub' => 'getSalesSub',
        'tax_category' => 'getTaxCategory',
        'image' => 'getImage'
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
    const STATUS_PENDING = 'Pending';
    const STATUS_APPROVED = 'Approved';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_RELEASED = 'Released';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_PENDING,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
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
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['receipt_id'] = isset($data['receipt_id']) ? $data['receipt_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['ref_nbr'] = isset($data['ref_nbr']) ? $data['ref_nbr'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['employee_part'] = isset($data['employee_part']) ? $data['employee_part'] : null;
        $this->container['claim_amount'] = isset($data['claim_amount']) ? $data['claim_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['claimed_by'] = isset($data['claimed_by']) ? $data['claimed_by'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['expense_claim'] = isset($data['expense_claim']) ? $data['expense_claim'] : null;
        $this->container['invoiceable'] = isset($data['invoiceable']) ? $data['invoiceable'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_task'] = isset($data['project_task']) ? $data['project_task'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['expense_account'] = isset($data['expense_account']) ? $data['expense_account'] : null;
        $this->container['expense_sub'] = isset($data['expense_sub']) ? $data['expense_sub'] : null;
        $this->container['sales_account'] = isset($data['sales_account']) ? $data['sales_account'] : null;
        $this->container['sales_sub'] = isset($data['sales_sub']) ? $data['sales_sub'] : null;
        $this->container['tax_category'] = isset($data['tax_category']) ? $data['tax_category'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
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
     * Gets internal_id
     *
     * @return int
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param int $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

        return $this;
    }

    /**
     * Gets receipt_id
     *
     * @return string
     */
    public function getReceiptId()
    {
        return $this->container['receipt_id'];
    }

    /**
     * Sets receipt_id
     *
     * @param string $receipt_id The top part &gt; Employee &gt;  The identifier of the employee whose expense receipts you want to manage.
     *
     * @return $this
     */
    public function setReceiptId($receipt_id)
    {
        $this->container['receipt_id'] = $receipt_id;

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
     * @param \DateTime $date Both tabs &gt; Date &gt; The date of the expense receipt.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param object $currency Both tabs &gt; Currency &gt; The currency of the expense receipt.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $ref_nbr Both tabs &gt; Ref. no. &gt; The reference number, which usually matches the number of the original receipt.
     *
     * @return $this
     */
    public function setRefNbr($ref_nbr)
    {
        $this->container['ref_nbr'] = $ref_nbr;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return object
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param object $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

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
     * @param string $description Open the receipt  Mandatory field: Receipt details tab &gt; Expense details section &gt; Description* &gt; The expense description, which is displayed as a link.
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
     * @param string $uom Receipt details tab &gt; Expense details section &gt; UoM &gt; The unit of measure of the expense item.
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
     * @param double $quantity Receipt details tab &gt; Expense details section &gt; Quantity &gt; The quantity of the expense item that the employee purchased according to the receipt.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return double
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param double $unit_cost Receipt details tab &gt; Expense details section &gt; Unit cost &gt; The cost of one unit of the expense item.
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount Receipt details tab &gt; Expense details section &gt; Amount &gt; The total amount of the receipt (for VAT-inclusive taxes), or the total amount before taxes (for VAT-exclusive taxes).
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets employee_part
     *
     * @return double
     */
    public function getEmployeePart()
    {
        return $this->container['employee_part'];
    }

    /**
     * Sets employee_part
     *
     * @param double $employee_part Receipt details tab &gt; Expense details section &gt; Employee part  &gt; The part of the total amount that will not be paid back to the employee.
     *
     * @return $this
     */
    public function setEmployeePart($employee_part)
    {
        $this->container['employee_part'] = $employee_part;

        return $this;
    }

    /**
     * Gets claim_amount
     *
     * @return double
     */
    public function getClaimAmount()
    {
        return $this->container['claim_amount'];
    }

    /**
     * Sets claim_amount
     *
     * @param double $claim_amount Receipt details tab &gt; Expense details section &gt; Expense claim &gt; The expense claim with which the expense receipt is associated.
     *
     * @return $this
     */
    public function setClaimAmount($claim_amount)
    {
        $this->container['claim_amount'] = $claim_amount;

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
     * @param string $status Receipt details tab &gt; Expense details section &gt; Expense claim status &gt; The current status of the associated expense claim, which can be one of the following options: On hold, Pending apporval, Approved, Rejected, Released.
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
     * Gets claimed_by
     *
     * @return object
     */
    public function getClaimedBy()
    {
        return $this->container['claimed_by'];
    }

    /**
     * Sets claimed_by
     *
     * @param object $claimed_by Mandatory field: The top part &gt; Claimed by* &gt;  The name of the employee who is claiming the expenses.
     *
     * @return $this
     */
    public function setClaimedBy($claimed_by)
    {
        $this->container['claimed_by'] = $claimed_by;

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
     * @param object $branch Mandatory field: The top part &gt; Branch &gt; The company branch that will incur the expenses.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets expense_claim
     *
     * @return object
     */
    public function getExpenseClaim()
    {
        return $this->container['expense_claim'];
    }

    /**
     * Sets expense_claim
     *
     * @param object $expense_claim Receipt details tab &gt; Expense details section &gt; Expense claim &gt; The expense claim with which the expense receipt is associated.
     *
     * @return $this
     */
    public function setExpenseClaim($expense_claim)
    {
        $this->container['expense_claim'] = $expense_claim;

        return $this;
    }

    /**
     * Gets invoiceable
     *
     * @return bool
     */
    public function getInvoiceable()
    {
        return $this->container['invoiceable'];
    }

    /**
     * Sets invoiceable
     *
     * @param bool $invoiceable Receipt details tab &gt; Financial details section &gt; Invoiceable &gt; A check box that indicates (if selected) that the customer should be invoiced for the claim amount.
     *
     * @return $this
     */
    public function setInvoiceable($invoiceable)
    {
        $this->container['invoiceable'] = $invoiceable;

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
     * @param object $project Receipt details tab &gt; Expense details section &gt; Project/contract &gt; The project or contract, which should be specified if the employee incurred the expenses while working on a particular project or contract.
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
     * @param object $project_task Receipt details tab &gt; Expense details section &gt; Project task &gt; The project task to which the expenses are related.
     *
     * @return $this
     */
    public function setProjectTask($project_task)
    {
        $this->container['project_task'] = $project_task;

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
     * @param object $customer Receipt details tab &gt; Financial details section &gt; Customer &gt; The customer, which should be specified if the employee incurred the expenses while working for a particular customer.
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
     * @param object $location Receipt details tab &gt; Financial details section &gt; Location &gt; The location of the customer related to the expenses.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets expense_account
     *
     * @return object
     */
    public function getExpenseAccount()
    {
        return $this->container['expense_account'];
    }

    /**
     * Sets expense_account
     *
     * @param object $expense_account Receipt details tab &gt; Financial details section &gt; Expense account &gt; The expense account to which the system records the part of the expense to be paid back to the employee.
     *
     * @return $this
     */
    public function setExpenseAccount($expense_account)
    {
        $this->container['expense_account'] = $expense_account;

        return $this;
    }

    /**
     * Gets expense_sub
     *
     * @return object
     */
    public function getExpenseSub()
    {
        return $this->container['expense_sub'];
    }

    /**
     * Sets expense_sub
     *
     * @param object $expense_sub Receipt details tab &gt; Financial details section &gt; Expense sub. &gt; The corresponding subaccount the system uses to record the part of the expense to be paid back to the employee.
     *
     * @return $this
     */
    public function setExpenseSub($expense_sub)
    {
        $this->container['expense_sub'] = $expense_sub;

        return $this;
    }

    /**
     * Gets sales_account
     *
     * @return object
     */
    public function getSalesAccount()
    {
        return $this->container['sales_account'];
    }

    /**
     * Sets sales_account
     *
     * @param object $sales_account Receipt details tab &gt; Financial details section &gt; Sales account &gt; The sales account to which the system records the part of the amount to charge the customer for.
     *
     * @return $this
     */
    public function setSalesAccount($sales_account)
    {
        $this->container['sales_account'] = $sales_account;

        return $this;
    }

    /**
     * Gets sales_sub
     *
     * @return object
     */
    public function getSalesSub()
    {
        return $this->container['sales_sub'];
    }

    /**
     * Sets sales_sub
     *
     * @param object $sales_sub Receipt details tab &gt; Financial details section &gt; Sales sub. &gt; The corresponding subaccount the system uses to record the amount to charge the customer for.
     *
     * @return $this
     */
    public function setSalesSub($sales_sub)
    {
        $this->container['sales_sub'] = $sales_sub;

        return $this;
    }

    /**
     * Gets tax_category
     *
     * @return object
     */
    public function getTaxCategory()
    {
        return $this->container['tax_category'];
    }

    /**
     * Sets tax_category
     *
     * @param object $tax_category Receipt details tab &gt; Expense details section &gt; VAT category &gt; The tax category for the expense receipt.
     *
     * @return $this
     */
    public function setTaxCategory($tax_category)
    {
        $this->container['tax_category'] = $tax_category;

        return $this;
    }

    /**
     * Gets image
     *
     * @return object
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param object $image Receipt details tab &gt; Image section
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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


