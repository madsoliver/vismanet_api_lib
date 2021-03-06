<?php
/**
 * SupplierInvoiceLineDto
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
 * SupplierInvoiceLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierInvoiceLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierInvoiceLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_number' => 'int',
        'inventory_number' => 'string',
        'stock_item' => 'bool',
        'transaction_description' => 'string',
        'quantity' => 'double',
        'uom' => 'string',
        'unit_cost' => 'double',
        'unit_cost_in_currency' => 'double',
        'cost' => 'double',
        'cost_in_currency' => 'double',
        'discount_percent' => 'double',
        'discount_amount' => 'double',
        'discount_amount_in_currency' => 'double',
        'discount_unit_cost' => 'double',
        'discount_unit_cost_in_currency' => 'double',
        'manual_discount' => 'bool',
        'account' => 'object',
        'subaccount' => 'object',
        'deferral_schedule' => 'int',
        'deferral_code' => 'string',
        'vat_code' => 'object',
        'po_number' => 'string',
        'po_line_nr' => 'int',
        'po_receipt_nbr' => 'string',
        'po_receipt_line_nbr' => 'int',
        'branch_number' => 'object',
        'note' => 'string',
        'split_hierarchy' => 'string',
        'project' => 'object',
        'project_task' => 'object',
        'attachments' => '\Ekstralys\VismaNetApi\Model\AttachmentDto[]',
        'retainage_pct' => 'double',
        'cury_retainage_amt' => 'double',
        'term_start_date' => '\DateTime',
        'term_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_number' => 'int32',
        'inventory_number' => null,
        'stock_item' => null,
        'transaction_description' => null,
        'quantity' => 'double',
        'uom' => null,
        'unit_cost' => 'double',
        'unit_cost_in_currency' => 'double',
        'cost' => 'double',
        'cost_in_currency' => 'double',
        'discount_percent' => 'double',
        'discount_amount' => 'double',
        'discount_amount_in_currency' => 'double',
        'discount_unit_cost' => 'double',
        'discount_unit_cost_in_currency' => 'double',
        'manual_discount' => null,
        'account' => null,
        'subaccount' => null,
        'deferral_schedule' => 'int32',
        'deferral_code' => null,
        'vat_code' => null,
        'po_number' => null,
        'po_line_nr' => 'int32',
        'po_receipt_nbr' => null,
        'po_receipt_line_nbr' => 'int32',
        'branch_number' => null,
        'note' => null,
        'split_hierarchy' => null,
        'project' => null,
        'project_task' => null,
        'attachments' => null,
        'retainage_pct' => 'double',
        'cury_retainage_amt' => 'double',
        'term_start_date' => 'date-time',
        'term_end_date' => 'date-time'
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
        'line_number' => 'lineNumber',
        'inventory_number' => 'inventoryNumber',
        'stock_item' => 'stockItem',
        'transaction_description' => 'transactionDescription',
        'quantity' => 'quantity',
        'uom' => 'uom',
        'unit_cost' => 'unitCost',
        'unit_cost_in_currency' => 'unitCostInCurrency',
        'cost' => 'cost',
        'cost_in_currency' => 'costInCurrency',
        'discount_percent' => 'discountPercent',
        'discount_amount' => 'discountAmount',
        'discount_amount_in_currency' => 'discountAmountInCurrency',
        'discount_unit_cost' => 'discountUnitCost',
        'discount_unit_cost_in_currency' => 'discountUnitCostInCurrency',
        'manual_discount' => 'manualDiscount',
        'account' => 'account',
        'subaccount' => 'subaccount',
        'deferral_schedule' => 'deferralSchedule',
        'deferral_code' => 'deferralCode',
        'vat_code' => 'vatCode',
        'po_number' => 'poNumber',
        'po_line_nr' => 'poLineNr',
        'po_receipt_nbr' => 'poReceiptNbr',
        'po_receipt_line_nbr' => 'poReceiptLineNbr',
        'branch_number' => 'branchNumber',
        'note' => 'note',
        'split_hierarchy' => 'splitHierarchy',
        'project' => 'project',
        'project_task' => 'projectTask',
        'attachments' => 'attachments',
        'retainage_pct' => 'retainagePct',
        'cury_retainage_amt' => 'curyRetainageAmt',
        'term_start_date' => 'termStartDate',
        'term_end_date' => 'termEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_number' => 'setLineNumber',
        'inventory_number' => 'setInventoryNumber',
        'stock_item' => 'setStockItem',
        'transaction_description' => 'setTransactionDescription',
        'quantity' => 'setQuantity',
        'uom' => 'setUom',
        'unit_cost' => 'setUnitCost',
        'unit_cost_in_currency' => 'setUnitCostInCurrency',
        'cost' => 'setCost',
        'cost_in_currency' => 'setCostInCurrency',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount' => 'setDiscountAmount',
        'discount_amount_in_currency' => 'setDiscountAmountInCurrency',
        'discount_unit_cost' => 'setDiscountUnitCost',
        'discount_unit_cost_in_currency' => 'setDiscountUnitCostInCurrency',
        'manual_discount' => 'setManualDiscount',
        'account' => 'setAccount',
        'subaccount' => 'setSubaccount',
        'deferral_schedule' => 'setDeferralSchedule',
        'deferral_code' => 'setDeferralCode',
        'vat_code' => 'setVatCode',
        'po_number' => 'setPoNumber',
        'po_line_nr' => 'setPoLineNr',
        'po_receipt_nbr' => 'setPoReceiptNbr',
        'po_receipt_line_nbr' => 'setPoReceiptLineNbr',
        'branch_number' => 'setBranchNumber',
        'note' => 'setNote',
        'split_hierarchy' => 'setSplitHierarchy',
        'project' => 'setProject',
        'project_task' => 'setProjectTask',
        'attachments' => 'setAttachments',
        'retainage_pct' => 'setRetainagePct',
        'cury_retainage_amt' => 'setCuryRetainageAmt',
        'term_start_date' => 'setTermStartDate',
        'term_end_date' => 'setTermEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_number' => 'getLineNumber',
        'inventory_number' => 'getInventoryNumber',
        'stock_item' => 'getStockItem',
        'transaction_description' => 'getTransactionDescription',
        'quantity' => 'getQuantity',
        'uom' => 'getUom',
        'unit_cost' => 'getUnitCost',
        'unit_cost_in_currency' => 'getUnitCostInCurrency',
        'cost' => 'getCost',
        'cost_in_currency' => 'getCostInCurrency',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount' => 'getDiscountAmount',
        'discount_amount_in_currency' => 'getDiscountAmountInCurrency',
        'discount_unit_cost' => 'getDiscountUnitCost',
        'discount_unit_cost_in_currency' => 'getDiscountUnitCostInCurrency',
        'manual_discount' => 'getManualDiscount',
        'account' => 'getAccount',
        'subaccount' => 'getSubaccount',
        'deferral_schedule' => 'getDeferralSchedule',
        'deferral_code' => 'getDeferralCode',
        'vat_code' => 'getVatCode',
        'po_number' => 'getPoNumber',
        'po_line_nr' => 'getPoLineNr',
        'po_receipt_nbr' => 'getPoReceiptNbr',
        'po_receipt_line_nbr' => 'getPoReceiptLineNbr',
        'branch_number' => 'getBranchNumber',
        'note' => 'getNote',
        'split_hierarchy' => 'getSplitHierarchy',
        'project' => 'getProject',
        'project_task' => 'getProjectTask',
        'attachments' => 'getAttachments',
        'retainage_pct' => 'getRetainagePct',
        'cury_retainage_amt' => 'getCuryRetainageAmt',
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
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['stock_item'] = isset($data['stock_item']) ? $data['stock_item'] : null;
        $this->container['transaction_description'] = isset($data['transaction_description']) ? $data['transaction_description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['unit_cost_in_currency'] = isset($data['unit_cost_in_currency']) ? $data['unit_cost_in_currency'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['cost_in_currency'] = isset($data['cost_in_currency']) ? $data['cost_in_currency'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_amount_in_currency'] = isset($data['discount_amount_in_currency']) ? $data['discount_amount_in_currency'] : null;
        $this->container['discount_unit_cost'] = isset($data['discount_unit_cost']) ? $data['discount_unit_cost'] : null;
        $this->container['discount_unit_cost_in_currency'] = isset($data['discount_unit_cost_in_currency']) ? $data['discount_unit_cost_in_currency'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['deferral_schedule'] = isset($data['deferral_schedule']) ? $data['deferral_schedule'] : null;
        $this->container['deferral_code'] = isset($data['deferral_code']) ? $data['deferral_code'] : null;
        $this->container['vat_code'] = isset($data['vat_code']) ? $data['vat_code'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['po_line_nr'] = isset($data['po_line_nr']) ? $data['po_line_nr'] : null;
        $this->container['po_receipt_nbr'] = isset($data['po_receipt_nbr']) ? $data['po_receipt_nbr'] : null;
        $this->container['po_receipt_line_nbr'] = isset($data['po_receipt_line_nbr']) ? $data['po_receipt_line_nbr'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['split_hierarchy'] = isset($data['split_hierarchy']) ? $data['split_hierarchy'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_task'] = isset($data['project_task']) ? $data['project_task'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['retainage_pct'] = isset($data['retainage_pct']) ? $data['retainage_pct'] : null;
        $this->container['cury_retainage_amt'] = isset($data['cury_retainage_amt']) ? $data['cury_retainage_amt'] : null;
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
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number The table &gt; Number at the left indicating the line number of the table.
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
     * @return string
     */
    public function getInventoryNumber()
    {
        return $this->container['inventory_number'];
    }

    /**
     * Sets inventory_number
     *
     * @param string $inventory_number The table &gt; Item ID &gt; The unique ID of the particular item or service delivered by the supplier.
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

        return $this;
    }

    /**
     * Gets stock_item
     *
     * @return bool
     */
    public function getStockItem()
    {
        return $this->container['stock_item'];
    }

    /**
     * Sets stock_item
     *
     * @param bool $stock_item Background information indicating whether the item is a stock item or not.
     *
     * @return $this
     */
    public function setStockItem($stock_item)
    {
        $this->container['stock_item'] = $stock_item;

        return $this;
    }

    /**
     * Gets transaction_description
     *
     * @return string
     */
    public function getTransactionDescription()
    {
        return $this->container['transaction_description'];
    }

    /**
     * Sets transaction_description
     *
     * @param string $transaction_description The table &gt; Transaction descr. &gt; Any description relevant to the transaction. An alphanumeric string of up to 30 characters may be used.
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
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity The table &gt; Quantity &gt; The quantity of the item or service to be delivered by the supplier.
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
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom The table &gt; UoM &gt; The unit of measure for the item.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

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
     * @param double $unit_cost The table &gt; Unit cost &gt; The unit cost of the item.
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_cost_in_currency
     *
     * @return double
     */
    public function getUnitCostInCurrency()
    {
        return $this->container['unit_cost_in_currency'];
    }

    /**
     * Sets unit_cost_in_currency
     *
     * @param double $unit_cost_in_currency Background calculation giving you the Unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default.
     *
     * @return $this
     */
    public function setUnitCostInCurrency($unit_cost_in_currency)
    {
        $this->container['unit_cost_in_currency'] = $unit_cost_in_currency;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost The table &gt; Cost &gt; The unit cost of the item or service received from the supplier.
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets cost_in_currency
     *
     * @return double
     */
    public function getCostInCurrency()
    {
        return $this->container['cost_in_currency'];
    }

    /**
     * Sets cost_in_currency
     *
     * @param double $cost_in_currency Background calculation giving you the Cost in the selected currency.This field is applicable if the amount is given in a another currency than your default.
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
     * @return double
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param double $discount_percent The table &gt; Discount percent &gt; The percent of the line-level discount that has been applied manually or automatically.
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double $discount_amount The table &gt; Discount amount &gt; The amount of the line-level discount that has been applied manually or automatically to this line.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_amount_in_currency
     *
     * @return double
     */
    public function getDiscountAmountInCurrency()
    {
        return $this->container['discount_amount_in_currency'];
    }

    /**
     * Sets discount_amount_in_currency
     *
     * @param double $discount_amount_in_currency Background calculation giving you the Discount amount in the selected currency.This field is applicable if the amount is given in a another currency than your default.
     *
     * @return $this
     */
    public function setDiscountAmountInCurrency($discount_amount_in_currency)
    {
        $this->container['discount_amount_in_currency'] = $discount_amount_in_currency;

        return $this;
    }

    /**
     * Gets discount_unit_cost
     *
     * @return double
     */
    public function getDiscountUnitCost()
    {
        return $this->container['discount_unit_cost'];
    }

    /**
     * Sets discount_unit_cost
     *
     * @param double $discount_unit_cost Background calculation giving you the Discount unit cost in the default currency.
     *
     * @return $this
     */
    public function setDiscountUnitCost($discount_unit_cost)
    {
        $this->container['discount_unit_cost'] = $discount_unit_cost;

        return $this;
    }

    /**
     * Gets discount_unit_cost_in_currency
     *
     * @return double
     */
    public function getDiscountUnitCostInCurrency()
    {
        return $this->container['discount_unit_cost_in_currency'];
    }

    /**
     * Sets discount_unit_cost_in_currency
     *
     * @param double $discount_unit_cost_in_currency Background calculation giving you the Discount unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default.
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
     * @return bool
     */
    public function getManualDiscount()
    {
        return $this->container['manual_discount'];
    }

    /**
     * Sets manual_discount
     *
     * @param bool $manual_discount The table &gt; Manual discount &gt; A check box that indicates (if selected) that the discount has been applied manually.
     *
     * @return $this
     */
    public function setManualDiscount($manual_discount)
    {
        $this->container['manual_discount'] = $manual_discount;

        return $this;
    }

    /**
     * Gets account
     *
     * @return object
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param object $account The table &gt; Mandatory field: Account* &gt; The purchase account used for the invoice line.
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets subaccount
     *
     * @return object
     */
    public function getSubaccount()
    {
        return $this->container['subaccount'];
    }

    /**
     * Sets subaccount
     *
     * @param object $subaccount The table &gt; Mandatory field: Subaccount* &gt; The corresponding subaccount used for this invoice line.
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
     * @return int
     */
    public function getDeferralSchedule()
    {
        return $this->container['deferral_schedule'];
    }

    /**
     * Sets deferral_schedule
     *
     * @param int $deferral_schedule The table &gt; Original deferral schedule &gt; A read-only column filled in by the system in the Debit adjustment documents created by the reversing process.It shows the ID of the deferral schedule associated with the original document (such as a purchase invoice).
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
     * @return string
     */
    public function getDeferralCode()
    {
        return $this->container['deferral_code'];
    }

    /**
     * Sets deferral_code
     *
     * @param string $deferral_code The table &gt; Deferral code &gt; The deferral code assigned to the stock item or non-stock item specified in this document line.
     *
     * @return $this
     */
    public function setDeferralCode($deferral_code)
    {
        $this->container['deferral_code'] = $deferral_code;

        return $this;
    }

    /**
     * Gets vat_code
     *
     * @return object
     */
    public function getVatCode()
    {
        return $this->container['vat_code'];
    }

    /**
     * Sets vat_code
     *
     * @param object $vat_code The table &gt; VAT category &gt; The VAT category (if applied) for the transaction. Unless you specify otherwise, it is the default VAT category of the supplier location's VAT zone.
     *
     * @return $this
     */
    public function setVatCode($vat_code)
    {
        $this->container['vat_code'] = $vat_code;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return string
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param string $po_number The table &gt; Purchase order number &gt; The number of the purchase order linked to this line of the invoice.
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

        return $this;
    }

    /**
     * Gets po_line_nr
     *
     * @return int
     */
    public function getPoLineNr()
    {
        return $this->container['po_line_nr'];
    }

    /**
     * Sets po_line_nr
     *
     * @param int $po_line_nr The table &gt; Purchase order line &gt; The line number of the purchase order line linked to this line of the invoice.
     *
     * @return $this
     */
    public function setPoLineNr($po_line_nr)
    {
        $this->container['po_line_nr'] = $po_line_nr;

        return $this;
    }

    /**
     * Gets po_receipt_nbr
     *
     * @return string
     */
    public function getPoReceiptNbr()
    {
        return $this->container['po_receipt_nbr'];
    }

    /**
     * Sets po_receipt_nbr
     *
     * @param string $po_receipt_nbr The table &gt; Purchase order receipt no. &gt; The number of the purchase receipt linked to this line of the invoice.
     *
     * @return $this
     */
    public function setPoReceiptNbr($po_receipt_nbr)
    {
        $this->container['po_receipt_nbr'] = $po_receipt_nbr;

        return $this;
    }

    /**
     * Gets po_receipt_line_nbr
     *
     * @return int
     */
    public function getPoReceiptLineNbr()
    {
        return $this->container['po_receipt_line_nbr'];
    }

    /**
     * Sets po_receipt_line_nbr
     *
     * @param int $po_receipt_line_nbr The table &gt; Purchase order receipt line &gt; The line number of the purchase receipt's line that is linked to this line of the invoice.
     *
     * @return $this
     */
    public function setPoReceiptLineNbr($po_receipt_line_nbr)
    {
        $this->container['po_receipt_line_nbr'] = $po_receipt_line_nbr;

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
     * @param object $branch_number The table &gt; Mandatory field: Branch* &gt; The branch that purchases the line item or service.  Note: The field type has been changed from string to BranchNumberDto, please consider doing changes accordingly.
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
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note The table &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected with to invoice.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets split_hierarchy
     *
     * @return string
     */
    public function getSplitHierarchy()
    {
        return $this->container['split_hierarchy'];
    }

    /**
     * Sets split_hierarchy
     *
     * @param string $split_hierarchy The table &gt; Split hierarchy &gt; The number of the original row that has been split.
     *
     * @return $this
     */
    public function setSplitHierarchy($split_hierarchy)
    {
        $this->container['split_hierarchy'] = $split_hierarchy;

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
     * @param object $project The table &gt; Project &gt; The project associated with the invoice line.
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
     * @param object $project_task The table &gt; Project task &gt; The project task associated with the invoice line.
     *
     * @return $this
     */
    public function setProjectTask($project_task)
    {
        $this->container['project_task'] = $project_task;

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
     * @param \Ekstralys\VismaNetApi\Model\AttachmentDto[] $attachments The data containing information about the document attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets retainage_pct
     *
     * @return double
     */
    public function getRetainagePct()
    {
        return $this->container['retainage_pct'];
    }

    /**
     * Sets retainage_pct
     *
     * @param double $retainage_pct retainage_pct
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
     * @return double
     */
    public function getCuryRetainageAmt()
    {
        return $this->container['cury_retainage_amt'];
    }

    /**
     * Sets cury_retainage_amt
     *
     * @param double $cury_retainage_amt cury_retainage_amt
     *
     * @return $this
     */
    public function setCuryRetainageAmt($cury_retainage_amt)
    {
        $this->container['cury_retainage_amt'] = $cury_retainage_amt;

        return $this;
    }

    /**
     * Gets term_start_date
     *
     * @return \DateTime
     */
    public function getTermStartDate()
    {
        return $this->container['term_start_date'];
    }

    /**
     * Sets term_start_date
     *
     * @param \DateTime $term_start_date term_start_date
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
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->container['term_end_date'];
    }

    /**
     * Sets term_end_date
     *
     * @param \DateTime $term_end_date term_end_date
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


