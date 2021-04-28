<?php
/**
 * CustomerInvoiceLinesUpdateDto
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
 * CustomerInvoiceLinesUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceLinesUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerInvoiceLinesUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_code' => 'object',
        'domestic_services_deductible' => 'object',
        'item_type' => 'object',
        'type_of_work' => 'object',
        'task_id' => 'object',
        'start_date' => 'object',
        'end_date' => 'object',
        'operation' => 'string',
        'inventory_number' => 'object',
        'line_number' => 'object',
        'description' => 'object',
        'quantity' => 'object',
        'unit_price_in_currency' => 'object',
        'manual_amount_in_currency' => 'object',
        'account_number' => 'object',
        'vat_code_id' => 'object',
        'uom' => 'object',
        'discount_percent' => 'object',
        'discount_amount_in_currency' => 'object',
        'manual_discount' => 'object',
        'subaccount' => '\Ekstralys\VismaNetApi\Model\SegmentUpdateDto[]',
        'salesperson' => 'object',
        'deferral_schedule' => 'object',
        'deferral_code' => 'object',
        'term_start_date' => 'object',
        'term_end_date' => 'object',
        'note' => 'object',
        'branch_number' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_code' => null,
        'domestic_services_deductible' => null,
        'item_type' => null,
        'type_of_work' => null,
        'task_id' => null,
        'start_date' => null,
        'end_date' => null,
        'operation' => null,
        'inventory_number' => null,
        'line_number' => null,
        'description' => null,
        'quantity' => null,
        'unit_price_in_currency' => null,
        'manual_amount_in_currency' => null,
        'account_number' => null,
        'vat_code_id' => null,
        'uom' => null,
        'discount_percent' => null,
        'discount_amount_in_currency' => null,
        'manual_discount' => null,
        'subaccount' => null,
        'salesperson' => null,
        'deferral_schedule' => null,
        'deferral_code' => null,
        'term_start_date' => null,
        'term_end_date' => null,
        'note' => null,
        'branch_number' => null
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
        'discount_code' => 'discountCode',
        'domestic_services_deductible' => 'domesticServicesDeductible',
        'item_type' => 'itemType',
        'type_of_work' => 'typeOfWork',
        'task_id' => 'taskId',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'operation' => 'operation',
        'inventory_number' => 'inventoryNumber',
        'line_number' => 'lineNumber',
        'description' => 'description',
        'quantity' => 'quantity',
        'unit_price_in_currency' => 'unitPriceInCurrency',
        'manual_amount_in_currency' => 'manualAmountInCurrency',
        'account_number' => 'accountNumber',
        'vat_code_id' => 'vatCodeId',
        'uom' => 'uom',
        'discount_percent' => 'discountPercent',
        'discount_amount_in_currency' => 'discountAmountInCurrency',
        'manual_discount' => 'manualDiscount',
        'subaccount' => 'subaccount',
        'salesperson' => 'salesperson',
        'deferral_schedule' => 'deferralSchedule',
        'deferral_code' => 'deferralCode',
        'term_start_date' => 'termStartDate',
        'term_end_date' => 'termEndDate',
        'note' => 'note',
        'branch_number' => 'branchNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_code' => 'setDiscountCode',
        'domestic_services_deductible' => 'setDomesticServicesDeductible',
        'item_type' => 'setItemType',
        'type_of_work' => 'setTypeOfWork',
        'task_id' => 'setTaskId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'operation' => 'setOperation',
        'inventory_number' => 'setInventoryNumber',
        'line_number' => 'setLineNumber',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unit_price_in_currency' => 'setUnitPriceInCurrency',
        'manual_amount_in_currency' => 'setManualAmountInCurrency',
        'account_number' => 'setAccountNumber',
        'vat_code_id' => 'setVatCodeId',
        'uom' => 'setUom',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount_in_currency' => 'setDiscountAmountInCurrency',
        'manual_discount' => 'setManualDiscount',
        'subaccount' => 'setSubaccount',
        'salesperson' => 'setSalesperson',
        'deferral_schedule' => 'setDeferralSchedule',
        'deferral_code' => 'setDeferralCode',
        'term_start_date' => 'setTermStartDate',
        'term_end_date' => 'setTermEndDate',
        'note' => 'setNote',
        'branch_number' => 'setBranchNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_code' => 'getDiscountCode',
        'domestic_services_deductible' => 'getDomesticServicesDeductible',
        'item_type' => 'getItemType',
        'type_of_work' => 'getTypeOfWork',
        'task_id' => 'getTaskId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'operation' => 'getOperation',
        'inventory_number' => 'getInventoryNumber',
        'line_number' => 'getLineNumber',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unit_price_in_currency' => 'getUnitPriceInCurrency',
        'manual_amount_in_currency' => 'getManualAmountInCurrency',
        'account_number' => 'getAccountNumber',
        'vat_code_id' => 'getVatCodeId',
        'uom' => 'getUom',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount_in_currency' => 'getDiscountAmountInCurrency',
        'manual_discount' => 'getManualDiscount',
        'subaccount' => 'getSubaccount',
        'salesperson' => 'getSalesperson',
        'deferral_schedule' => 'getDeferralSchedule',
        'deferral_code' => 'getDeferralCode',
        'term_start_date' => 'getTermStartDate',
        'term_end_date' => 'getTermEndDate',
        'note' => 'getNote',
        'branch_number' => 'getBranchNumber'
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
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['domestic_services_deductible'] = isset($data['domestic_services_deductible']) ? $data['domestic_services_deductible'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['type_of_work'] = isset($data['type_of_work']) ? $data['type_of_work'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price_in_currency'] = isset($data['unit_price_in_currency']) ? $data['unit_price_in_currency'] : null;
        $this->container['manual_amount_in_currency'] = isset($data['manual_amount_in_currency']) ? $data['manual_amount_in_currency'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['vat_code_id'] = isset($data['vat_code_id']) ? $data['vat_code_id'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_amount_in_currency'] = isset($data['discount_amount_in_currency']) ? $data['discount_amount_in_currency'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['salesperson'] = isset($data['salesperson']) ? $data['salesperson'] : null;
        $this->container['deferral_schedule'] = isset($data['deferral_schedule']) ? $data['deferral_schedule'] : null;
        $this->container['deferral_code'] = isset($data['deferral_code']) ? $data['deferral_code'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_end_date'] = isset($data['term_end_date']) ? $data['term_end_date'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
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
     * Gets discount_code
     *
     * @return object
     */
    public function getDiscountCode()
    {
        return $this->container['discount_code'];
    }

    /**
     * Sets discount_code
     *
     * @param object $discount_code discount_code
     *
     * @return $this
     */
    public function setDiscountCode($discount_code)
    {
        $this->container['discount_code'] = $discount_code;

        return $this;
    }

    /**
     * Gets domestic_services_deductible
     *
     * @return object
     */
    public function getDomesticServicesDeductible()
    {
        return $this->container['domestic_services_deductible'];
    }

    /**
     * Sets domestic_services_deductible
     *
     * @param object $domestic_services_deductible domestic_services_deductible
     *
     * @return $this
     */
    public function setDomesticServicesDeductible($domestic_services_deductible)
    {
        $this->container['domestic_services_deductible'] = $domestic_services_deductible;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return object
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param object $item_type The property is now considered obsolete. Please define ItemType on the item level instead.
     *
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets type_of_work
     *
     * @return object
     */
    public function getTypeOfWork()
    {
        return $this->container['type_of_work'];
    }

    /**
     * Sets type_of_work
     *
     * @param object $type_of_work The property is now considered obsolete. Please define typeOfWork on the item level instead.
     *
     * @return $this
     */
    public function setTypeOfWork($type_of_work)
    {
        $this->container['type_of_work'] = $type_of_work;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return object
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param object $task_id task_id
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return object
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param object $start_date start_date
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
     * @return object
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param object $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
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
     * Gets description
     *
     * @return object
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param object $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets unit_price_in_currency
     *
     * @return object
     */
    public function getUnitPriceInCurrency()
    {
        return $this->container['unit_price_in_currency'];
    }

    /**
     * Sets unit_price_in_currency
     *
     * @param object $unit_price_in_currency unit_price_in_currency
     *
     * @return $this
     */
    public function setUnitPriceInCurrency($unit_price_in_currency)
    {
        $this->container['unit_price_in_currency'] = $unit_price_in_currency;

        return $this;
    }

    /**
     * Gets manual_amount_in_currency
     *
     * @return object
     */
    public function getManualAmountInCurrency()
    {
        return $this->container['manual_amount_in_currency'];
    }

    /**
     * Sets manual_amount_in_currency
     *
     * @param object $manual_amount_in_currency manual_amount_in_currency
     *
     * @return $this
     */
    public function setManualAmountInCurrency($manual_amount_in_currency)
    {
        $this->container['manual_amount_in_currency'] = $manual_amount_in_currency;

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
     * Gets salesperson
     *
     * @return object
     */
    public function getSalesperson()
    {
        return $this->container['salesperson'];
    }

    /**
     * Sets salesperson
     *
     * @param object $salesperson salesperson
     *
     * @return $this
     */
    public function setSalesperson($salesperson)
    {
        $this->container['salesperson'] = $salesperson;

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

