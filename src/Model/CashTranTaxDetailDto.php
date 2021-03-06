<?php
/**
 * CashTranTaxDetailDto
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
 * CashTranTaxDetailDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashTranTaxDetailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashTranTaxDetailDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax' => 'object',
        'tax_rate' => 'double',
        'taxable_amount' => 'double',
        'tax_amount' => 'double',
        'deductible_tax_rate' => 'double',
        'expense_amount' => 'double',
        'include_in_vat_exempt_total' => 'bool',
        'pending_vat' => 'bool',
        'statistical_vat' => 'bool',
        'reverse_vat' => 'bool',
        'tax_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax' => null,
        'tax_rate' => 'double',
        'taxable_amount' => 'double',
        'tax_amount' => 'double',
        'deductible_tax_rate' => 'double',
        'expense_amount' => 'double',
        'include_in_vat_exempt_total' => null,
        'pending_vat' => null,
        'statistical_vat' => null,
        'reverse_vat' => null,
        'tax_type' => null
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
        'tax' => 'tax',
        'tax_rate' => 'taxRate',
        'taxable_amount' => 'taxableAmount',
        'tax_amount' => 'taxAmount',
        'deductible_tax_rate' => 'deductibleTaxRate',
        'expense_amount' => 'expenseAmount',
        'include_in_vat_exempt_total' => 'includeInVatExemptTotal',
        'pending_vat' => 'pendingVat',
        'statistical_vat' => 'statisticalVat',
        'reverse_vat' => 'reverseVat',
        'tax_type' => 'taxType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax' => 'setTax',
        'tax_rate' => 'setTaxRate',
        'taxable_amount' => 'setTaxableAmount',
        'tax_amount' => 'setTaxAmount',
        'deductible_tax_rate' => 'setDeductibleTaxRate',
        'expense_amount' => 'setExpenseAmount',
        'include_in_vat_exempt_total' => 'setIncludeInVatExemptTotal',
        'pending_vat' => 'setPendingVat',
        'statistical_vat' => 'setStatisticalVat',
        'reverse_vat' => 'setReverseVat',
        'tax_type' => 'setTaxType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax' => 'getTax',
        'tax_rate' => 'getTaxRate',
        'taxable_amount' => 'getTaxableAmount',
        'tax_amount' => 'getTaxAmount',
        'deductible_tax_rate' => 'getDeductibleTaxRate',
        'expense_amount' => 'getExpenseAmount',
        'include_in_vat_exempt_total' => 'getIncludeInVatExemptTotal',
        'pending_vat' => 'getPendingVat',
        'statistical_vat' => 'getStatisticalVat',
        'reverse_vat' => 'getReverseVat',
        'tax_type' => 'getTaxType'
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

    const TAX_TYPE_SALES = 'Sales';
    const TAX_TYPE__USE = 'Use';
    const TAX_TYPE_VAT = 'Vat';
    const TAX_TYPE_WITHHOLDING = 'Withholding';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        return [
            self::TAX_TYPE_SALES,
            self::TAX_TYPE__USE,
            self::TAX_TYPE_VAT,
            self::TAX_TYPE_WITHHOLDING,
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
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['deductible_tax_rate'] = isset($data['deductible_tax_rate']) ? $data['deductible_tax_rate'] : null;
        $this->container['expense_amount'] = isset($data['expense_amount']) ? $data['expense_amount'] : null;
        $this->container['include_in_vat_exempt_total'] = isset($data['include_in_vat_exempt_total']) ? $data['include_in_vat_exempt_total'] : null;
        $this->container['pending_vat'] = isset($data['pending_vat']) ? $data['pending_vat'] : null;
        $this->container['statistical_vat'] = isset($data['statistical_vat']) ? $data['statistical_vat'] : null;
        $this->container['reverse_vat'] = isset($data['reverse_vat']) ? $data['reverse_vat'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($this->container['tax_type']) && !in_array($this->container['tax_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_type', must be one of '%s'",
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
     * Gets tax
     *
     * @return object
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param object $tax Mandatory field: VAT ID &gt; The VAT that applies to the cash transaction.
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return double
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param double $tax_rate VAT rate &gt; The rate of the VAT.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return double
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param double $taxable_amount Taxable amount &gt; The taxable amount of the transaction.
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

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
     * @param double $tax_amount VAT amount &gt; The VAT amount calculated for the transaction.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets deductible_tax_rate
     *
     * @return double
     */
    public function getDeductibleTaxRate()
    {
        return $this->container['deductible_tax_rate'];
    }

    /**
     * Sets deductible_tax_rate
     *
     * @param double $deductible_tax_rate Deductible VAT rate &gt; The percent of deduction that applies to the VAT amount paid to the supplier for specific purchases.
     *
     * @return $this
     */
    public function setDeductibleTaxRate($deductible_tax_rate)
    {
        $this->container['deductible_tax_rate'] = $deductible_tax_rate;

        return $this;
    }

    /**
     * Gets expense_amount
     *
     * @return double
     */
    public function getExpenseAmount()
    {
        return $this->container['expense_amount'];
    }

    /**
     * Sets expense_amount
     *
     * @param double $expense_amount Expense amount &gt; The percentage that is deducted from the VAT amount paid to the supplier for specific purchases.
     *
     * @return $this
     */
    public function setExpenseAmount($expense_amount)
    {
        $this->container['expense_amount'] = $expense_amount;

        return $this;
    }

    /**
     * Gets include_in_vat_exempt_total
     *
     * @return bool
     */
    public function getIncludeInVatExemptTotal()
    {
        return $this->container['include_in_vat_exempt_total'];
    }

    /**
     * Sets include_in_vat_exempt_total
     *
     * @param bool $include_in_vat_exempt_total Include in VAT exempt total &gt; A check box that indicates (if selected) that this value-added VAT has a zero rate and is used to calculate a document subtotal that is actually exempt from VAT.
     *
     * @return $this
     */
    public function setIncludeInVatExemptTotal($include_in_vat_exempt_total)
    {
        $this->container['include_in_vat_exempt_total'] = $include_in_vat_exempt_total;

        return $this;
    }

    /**
     * Gets pending_vat
     *
     * @return bool
     */
    public function getPendingVat()
    {
        return $this->container['pending_vat'];
    }

    /**
     * Sets pending_vat
     *
     * @param bool $pending_vat Pending VAT &gt; A check box that indicates (if selected) that the VAT that should be calculated in documents, but should not be recorded to the VAT report until the VAT invoice is received.
     *
     * @return $this
     */
    public function setPendingVat($pending_vat)
    {
        $this->container['pending_vat'] = $pending_vat;

        return $this;
    }

    /**
     * Gets statistical_vat
     *
     * @return bool
     */
    public function getStatisticalVat()
    {
        return $this->container['statistical_vat'];
    }

    /**
     * Sets statistical_vat
     *
     * @param bool $statistical_vat Statistical VAT &gt; A check box that indicates (if selected) that the VAT on documents will be calculated only for statistical purposes or will be reported only but not actually paid.
     *
     * @return $this
     */
    public function setStatisticalVat($statistical_vat)
    {
        $this->container['statistical_vat'] = $statistical_vat;

        return $this;
    }

    /**
     * Gets reverse_vat
     *
     * @return bool
     */
    public function getReverseVat()
    {
        return $this->container['reverse_vat'];
    }

    /**
     * Sets reverse_vat
     *
     * @param bool $reverse_vat Reverse VAT &gt; A check box that indicates (if selected) that this is a reverse VAT.
     *
     * @return $this
     */
    public function setReverseVat($reverse_vat)
    {
        $this->container['reverse_vat'] = $reverse_vat;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type VAT type &gt; The type of VAT.
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($tax_type) && !in_array($tax_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_type'] = $tax_type;

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


