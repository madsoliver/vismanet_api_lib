<?php
/**
 * CustomerDebitNoteLineDto
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
 * CustomerDebitNoteLineDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDebitNoteLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerDebitNoteLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'term_start_date' => '\DateTime',
        'term_end_date' => '\DateTime',
        'is_rot_rut_deductible' => 'bool',
        'item_type' => 'string',
        'type_of_work' => 'object',
        'deductable_amount' => 'double',
        'attachments' => '\Ekstralys\VismaNetApi\Model\AttachmentDto[]',
        'line_number' => 'int',
        'inventory_number' => 'string',
        'description' => 'string',
        'quantity' => 'double',
        'unit_price' => 'double',
        'unit_price_in_currency' => 'double',
        'manual_amount' => 'double',
        'manual_amount_in_currency' => 'double',
        'amount' => 'double',
        'amount_in_currency' => 'double',
        'account' => 'object',
        'vat_code' => 'object',
        'uom' => 'string',
        'discount_percent' => 'double',
        'discount_amount' => 'double',
        'discount_amount_in_currency' => 'double',
        'manual_discount' => 'bool',
        'subaccount' => 'object',
        'salesperson' => 'string',
        'seller' => 'object',
        'deferral_schedule' => 'int',
        'deferral_code' => 'string',
        'discount_code' => 'string',
        'note' => 'string',
        'branch_number' => 'object',
        'external_link' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'term_start_date' => 'date-time',
        'term_end_date' => 'date-time',
        'is_rot_rut_deductible' => null,
        'item_type' => null,
        'type_of_work' => null,
        'deductable_amount' => 'double',
        'attachments' => null,
        'line_number' => 'int32',
        'inventory_number' => null,
        'description' => null,
        'quantity' => 'double',
        'unit_price' => 'double',
        'unit_price_in_currency' => 'double',
        'manual_amount' => 'double',
        'manual_amount_in_currency' => 'double',
        'amount' => 'double',
        'amount_in_currency' => 'double',
        'account' => null,
        'vat_code' => null,
        'uom' => null,
        'discount_percent' => 'double',
        'discount_amount' => 'double',
        'discount_amount_in_currency' => 'double',
        'manual_discount' => null,
        'subaccount' => null,
        'salesperson' => null,
        'seller' => null,
        'deferral_schedule' => 'int32',
        'deferral_code' => null,
        'discount_code' => null,
        'note' => null,
        'branch_number' => null,
        'external_link' => null
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
        'term_start_date' => 'termStartDate',
        'term_end_date' => 'termEndDate',
        'is_rot_rut_deductible' => 'isRotRutDeductible',
        'item_type' => 'itemType',
        'type_of_work' => 'typeOfWork',
        'deductable_amount' => 'deductableAmount',
        'attachments' => 'attachments',
        'line_number' => 'lineNumber',
        'inventory_number' => 'inventoryNumber',
        'description' => 'description',
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'unit_price_in_currency' => 'unitPriceInCurrency',
        'manual_amount' => 'manualAmount',
        'manual_amount_in_currency' => 'manualAmountInCurrency',
        'amount' => 'amount',
        'amount_in_currency' => 'amountInCurrency',
        'account' => 'account',
        'vat_code' => 'vatCode',
        'uom' => 'uom',
        'discount_percent' => 'discountPercent',
        'discount_amount' => 'discountAmount',
        'discount_amount_in_currency' => 'discountAmountInCurrency',
        'manual_discount' => 'manualDiscount',
        'subaccount' => 'subaccount',
        'salesperson' => 'salesperson',
        'seller' => 'seller',
        'deferral_schedule' => 'deferralSchedule',
        'deferral_code' => 'deferralCode',
        'discount_code' => 'discountCode',
        'note' => 'note',
        'branch_number' => 'branchNumber',
        'external_link' => 'externalLink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'term_start_date' => 'setTermStartDate',
        'term_end_date' => 'setTermEndDate',
        'is_rot_rut_deductible' => 'setIsRotRutDeductible',
        'item_type' => 'setItemType',
        'type_of_work' => 'setTypeOfWork',
        'deductable_amount' => 'setDeductableAmount',
        'attachments' => 'setAttachments',
        'line_number' => 'setLineNumber',
        'inventory_number' => 'setInventoryNumber',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'unit_price_in_currency' => 'setUnitPriceInCurrency',
        'manual_amount' => 'setManualAmount',
        'manual_amount_in_currency' => 'setManualAmountInCurrency',
        'amount' => 'setAmount',
        'amount_in_currency' => 'setAmountInCurrency',
        'account' => 'setAccount',
        'vat_code' => 'setVatCode',
        'uom' => 'setUom',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount' => 'setDiscountAmount',
        'discount_amount_in_currency' => 'setDiscountAmountInCurrency',
        'manual_discount' => 'setManualDiscount',
        'subaccount' => 'setSubaccount',
        'salesperson' => 'setSalesperson',
        'seller' => 'setSeller',
        'deferral_schedule' => 'setDeferralSchedule',
        'deferral_code' => 'setDeferralCode',
        'discount_code' => 'setDiscountCode',
        'note' => 'setNote',
        'branch_number' => 'setBranchNumber',
        'external_link' => 'setExternalLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'term_start_date' => 'getTermStartDate',
        'term_end_date' => 'getTermEndDate',
        'is_rot_rut_deductible' => 'getIsRotRutDeductible',
        'item_type' => 'getItemType',
        'type_of_work' => 'getTypeOfWork',
        'deductable_amount' => 'getDeductableAmount',
        'attachments' => 'getAttachments',
        'line_number' => 'getLineNumber',
        'inventory_number' => 'getInventoryNumber',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'unit_price_in_currency' => 'getUnitPriceInCurrency',
        'manual_amount' => 'getManualAmount',
        'manual_amount_in_currency' => 'getManualAmountInCurrency',
        'amount' => 'getAmount',
        'amount_in_currency' => 'getAmountInCurrency',
        'account' => 'getAccount',
        'vat_code' => 'getVatCode',
        'uom' => 'getUom',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount' => 'getDiscountAmount',
        'discount_amount_in_currency' => 'getDiscountAmountInCurrency',
        'manual_discount' => 'getManualDiscount',
        'subaccount' => 'getSubaccount',
        'salesperson' => 'getSalesperson',
        'seller' => 'getSeller',
        'deferral_schedule' => 'getDeferralSchedule',
        'deferral_code' => 'getDeferralCode',
        'discount_code' => 'getDiscountCode',
        'note' => 'getNote',
        'branch_number' => 'getBranchNumber',
        'external_link' => 'getExternalLink'
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

    const ITEM_TYPE_SERVICE = 'Service';
    const ITEM_TYPE_MATERIAL_COST = 'MaterialCost';
    const ITEM_TYPE_OTHER_COST = 'OtherCost';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemTypeAllowableValues()
    {
        return [
            self::ITEM_TYPE_SERVICE,
            self::ITEM_TYPE_MATERIAL_COST,
            self::ITEM_TYPE_OTHER_COST,
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
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_end_date'] = isset($data['term_end_date']) ? $data['term_end_date'] : null;
        $this->container['is_rot_rut_deductible'] = isset($data['is_rot_rut_deductible']) ? $data['is_rot_rut_deductible'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['type_of_work'] = isset($data['type_of_work']) ? $data['type_of_work'] : null;
        $this->container['deductable_amount'] = isset($data['deductable_amount']) ? $data['deductable_amount'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['unit_price_in_currency'] = isset($data['unit_price_in_currency']) ? $data['unit_price_in_currency'] : null;
        $this->container['manual_amount'] = isset($data['manual_amount']) ? $data['manual_amount'] : null;
        $this->container['manual_amount_in_currency'] = isset($data['manual_amount_in_currency']) ? $data['manual_amount_in_currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_in_currency'] = isset($data['amount_in_currency']) ? $data['amount_in_currency'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['vat_code'] = isset($data['vat_code']) ? $data['vat_code'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_amount_in_currency'] = isset($data['discount_amount_in_currency']) ? $data['discount_amount_in_currency'] : null;
        $this->container['manual_discount'] = isset($data['manual_discount']) ? $data['manual_discount'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['salesperson'] = isset($data['salesperson']) ? $data['salesperson'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['deferral_schedule'] = isset($data['deferral_schedule']) ? $data['deferral_schedule'] : null;
        $this->container['deferral_code'] = isset($data['deferral_code']) ? $data['deferral_code'] : null;
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['external_link'] = isset($data['external_link']) ? $data['external_link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($this->container['item_type']) && !in_array($this->container['item_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'item_type', must be one of '%s'",
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
     * @param \DateTime $term_start_date The date when the process of deferred revenue recognition should start for the  selected item; this date can be specified manually if the deferral code assigned  to the item is based on the Flexible by Periods, Prorate by days or Flexible by  Days in Period recognition method.This column appears only if the Deferred  Revenue Management feature is enabled on the Enable/Disable Features screen.
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
     * @param \DateTime $term_end_date The date when the process of the deferred revenue recognition should finish  for the selected item; this date can be specified manually if the deferral code  assigned to the item is based on the Flexible by Periods, Prorate by days or  Flexible by Days in Period recognition method.This column appears only if the  Deferred Revenue Management feature is enabled on the Enable/Disable Features form.
     *
     * @return $this
     */
    public function setTermEndDate($term_end_date)
    {
        $this->container['term_end_date'] = $term_end_date;

        return $this;
    }

    /**
     * Gets is_rot_rut_deductible
     *
     * @return bool
     */
    public function getIsRotRutDeductible()
    {
        return $this->container['is_rot_rut_deductible'];
    }

    /**
     * Sets is_rot_rut_deductible
     *
     * @param bool $is_rot_rut_deductible Domestic services deductible document &gt; A check box indicating if the document is Rot/rut deductible (applicable for the Swedish markets)
     *
     * @return $this
     */
    public function setIsRotRutDeductible($is_rot_rut_deductible)
    {
        $this->container['is_rot_rut_deductible'] = $is_rot_rut_deductible;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param string $item_type item_type
     *
     * @return $this
     */
    public function setItemType($item_type)
    {
        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($item_type) && !in_array($item_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'item_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param object $type_of_work type_of_work
     *
     * @return $this
     */
    public function setTypeOfWork($type_of_work)
    {
        $this->container['type_of_work'] = $type_of_work;

        return $this;
    }

    /**
     * Gets deductable_amount
     *
     * @return double
     */
    public function getDeductableAmount()
    {
        return $this->container['deductable_amount'];
    }

    /**
     * Sets deductable_amount
     *
     * @param double $deductable_amount deductable_amount
     *
     * @return $this
     */
    public function setDeductableAmount($deductable_amount)
    {
        $this->container['deductable_amount'] = $deductable_amount;

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
     * @param int $line_number Line no. &gt; A counter of lines in the overview of cash sales document overview.
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
     * @param string $inventory_number Item ID &gt; The item ID of the line item, if applicable. Only a non-stock item can be selected.
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        $this->container['inventory_number'] = $inventory_number;

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
     * @param string $description Transaction descr. &gt; Any brief comment relevant to the transaction.The alphanumeric string may contain up to 30 characters.
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
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity Quantity &gt; The quantity of items (goods or services) of a particular type sold to the customer.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price Unit price &gt; The unit price set for the item or service. If you want to update the unit price  automatically to the current value(that is, the applicable sales or default price),  you can use the Recalculate Prices and Discounts action.If you have modified  the unit price and saved the document, the value will not be updated by the  system if you change the document date.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_price_in_currency
     *
     * @return double
     */
    public function getUnitPriceInCurrency()
    {
        return $this->container['unit_price_in_currency'];
    }

    /**
     * Sets unit_price_in_currency
     *
     * @param double $unit_price_in_currency Background calculation giving you the Unit price in your default currency. This field is applicable if the amount is given in another currency than your default.
     *
     * @return $this
     */
    public function setUnitPriceInCurrency($unit_price_in_currency)
    {
        $this->container['unit_price_in_currency'] = $unit_price_in_currency;

        return $this;
    }

    /**
     * Gets manual_amount
     *
     * @return double
     */
    public function getManualAmount()
    {
        return $this->container['manual_amount'];
    }

    /**
     * Sets manual_amount
     *
     * @param double $manual_amount Manual amount &gt; a check box indicating that the amount has been entered manually.
     *
     * @return $this
     */
    public function setManualAmount($manual_amount)
    {
        $this->container['manual_amount'] = $manual_amount;

        return $this;
    }

    /**
     * Gets manual_amount_in_currency
     *
     * @return double
     */
    public function getManualAmountInCurrency()
    {
        return $this->container['manual_amount_in_currency'];
    }

    /**
     * Sets manual_amount_in_currency
     *
     * @param double $manual_amount_in_currency Background calculation giving you the Manual amount in your default currency. This field is applicable if the amount is given in another currency than your default.
     *
     * @return $this
     */
    public function setManualAmountInCurrency($manual_amount_in_currency)
    {
        $this->container['manual_amount_in_currency'] = $manual_amount_in_currency;

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
     * @param double $amount Amount &gt; The amount after the discount has been applied. The value of this read-only box  is calculated automatically by deducting the discount amount from the extended price.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_in_currency
     *
     * @return double
     */
    public function getAmountInCurrency()
    {
        return $this->container['amount_in_currency'];
    }

    /**
     * Sets amount_in_currency
     *
     * @param double $amount_in_currency Background calculation giving you the Amount in your default currency. This field is applicable if the amount is given in another currency than your default.
     *
     * @return $this
     */
    public function setAmountInCurrency($amount_in_currency)
    {
        $this->container['amount_in_currency'] = $amount_in_currency;

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
     * @param object $account Mandatory field: Account* &gt; The sales account used for the transaction.
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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
     * @param object $vat_code VAT category &gt; The VAT category (if applied) for the transaction. The category represents the type of goods or services.
     *
     * @return $this
     */
    public function setVatCode($vat_code)
    {
        $this->container['vat_code'] = $vat_code;

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
     * @param string $uom UoM &gt; The unit of measure (UoM) for the item.
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
     * @return double
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param double $discount_percent Discount percent &gt; The percent of the line-level discount that has been applied manually or  automatically.The system selects the Manual Discount check box and  calculates the discount amount after you have entered the percent manually and  saved your changes or added a new line.
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
     * @param double $discount_amount Discount amount &gt; The amount of the line-level discount that has been applied manually or  automatically to this line.The system selects the Manual Discount check box  and calculates the line amount after you have entered the discount amount  manually and save your changes or added a new line.
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
     * @param double $discount_amount_in_currency Background calculation giving you the Discount amount in your default currency. This field is applicable if the amount is given in another currency than your default.
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
     * @return bool
     */
    public function getManualDiscount()
    {
        return $this->container['manual_discount'];
    }

    /**
     * Sets manual_discount
     *
     * @param bool $manual_discount Manual discount &gt; A check box that indicates (if selected) that the discount has been applied  manually.If you clear the check box, the system clears entered discount percent,  or discount amount, or selected discount code.
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
     * @return object
     */
    public function getSubaccount()
    {
        return $this->container['subaccount'];
    }

    /**
     * Sets subaccount
     *
     * @param object $subaccount Mandatory field: Subaccount* &gt; The corresponding subaccount used for this transaction.
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
     * @return string
     */
    public function getSalesperson()
    {
        return $this->container['salesperson'];
    }

    /**
     * Sets salesperson
     *
     * @param string $salesperson The field is deprecated for customer document endpoints, please use Seller instead
     *
     * @return $this
     */
    public function setSalesperson($salesperson)
    {
        $this->container['salesperson'] = $salesperson;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return object
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param object $seller Salesperson ID &gt; The identifier of the salesperson involved.
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

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
     * @param int $deferral_schedule Original deferral schedule &gt; A read-only column filled in by the system in the Cash return documents created by the reversing process. It shows the identifier of the deferral schedule associated with the original Cash sale document.
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
     * @param string $deferral_code The deferral code assigned to the stock item or non-stock item specified in this  document line.Upon release of the document, the system generates a deferral  schedule (or schedules) based on the settings defined in this deferral code.
     *
     * @return $this
     */
    public function setDeferralCode($deferral_code)
    {
        $this->container['deferral_code'] = $deferral_code;

        return $this;
    }

    /**
     * Gets discount_code
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->container['discount_code'];
    }

    /**
     * Sets discount_code
     *
     * @param string $discount_code The code of the line discount that has been applied to this line automatically or manually.
     *
     * @return $this
     */
    public function setDiscountCode($discount_code)
    {
        $this->container['discount_code'] = $discount_code;

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
     * @param string $note Table &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected to the order.
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
     * @param object $branch_number Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
     *
     * @return $this
     */
    public function setBranchNumber($branch_number)
    {
        $this->container['branch_number'] = $branch_number;

        return $this;
    }

    /**
     * Gets external_link
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->container['external_link'];
    }

    /**
     * Sets external_link
     *
     * @param string $external_link external_link
     *
     * @return $this
     */
    public function setExternalLink($external_link)
    {
        $this->container['external_link'] = $external_link;

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

