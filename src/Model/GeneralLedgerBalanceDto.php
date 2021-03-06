<?php
/**
 * GeneralLedgerBalanceDto
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
 * GeneralLedgerBalanceDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a General Ledger Balance in GeneralLedgerBalanceController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralLedgerBalanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeneralLedgerBalanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branch' => 'object',
        'ledger' => 'object',
        'balance_type' => 'string',
        'financial_period' => 'string',
        'account' => 'object',
        'subaccount_id' => 'string',
        'sub_account_cd' => 'string',
        'currency_id' => 'string',
        'period_to_date_debit' => 'double',
        'period_to_date_credit' => 'double',
        'beginning_balance' => 'double',
        'year_to_date_balance' => 'double',
        'period_to_date_debit_in_currency' => 'double',
        'period_to_date_credit_in_currency' => 'double',
        'beginning_balance_in_currency' => 'double',
        'year_to_date_balance_in_currency' => 'double',
        'year_closed' => 'bool',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branch' => null,
        'ledger' => null,
        'balance_type' => null,
        'financial_period' => null,
        'account' => null,
        'subaccount_id' => null,
        'sub_account_cd' => null,
        'currency_id' => null,
        'period_to_date_debit' => 'double',
        'period_to_date_credit' => 'double',
        'beginning_balance' => 'double',
        'year_to_date_balance' => 'double',
        'period_to_date_debit_in_currency' => 'double',
        'period_to_date_credit_in_currency' => 'double',
        'beginning_balance_in_currency' => 'double',
        'year_to_date_balance_in_currency' => 'double',
        'year_closed' => null,
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
        'branch' => 'branch',
        'ledger' => 'ledger',
        'balance_type' => 'balanceType',
        'financial_period' => 'financialPeriod',
        'account' => 'account',
        'subaccount_id' => 'subaccountId',
        'sub_account_cd' => 'subAccountCd',
        'currency_id' => 'currencyId',
        'period_to_date_debit' => 'periodToDateDebit',
        'period_to_date_credit' => 'periodToDateCredit',
        'beginning_balance' => 'beginningBalance',
        'year_to_date_balance' => 'yearToDateBalance',
        'period_to_date_debit_in_currency' => 'periodToDateDebitInCurrency',
        'period_to_date_credit_in_currency' => 'periodToDateCreditInCurrency',
        'beginning_balance_in_currency' => 'beginningBalanceInCurrency',
        'year_to_date_balance_in_currency' => 'yearToDateBalanceInCurrency',
        'year_closed' => 'yearClosed',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'ledger' => 'setLedger',
        'balance_type' => 'setBalanceType',
        'financial_period' => 'setFinancialPeriod',
        'account' => 'setAccount',
        'subaccount_id' => 'setSubaccountId',
        'sub_account_cd' => 'setSubAccountCd',
        'currency_id' => 'setCurrencyId',
        'period_to_date_debit' => 'setPeriodToDateDebit',
        'period_to_date_credit' => 'setPeriodToDateCredit',
        'beginning_balance' => 'setBeginningBalance',
        'year_to_date_balance' => 'setYearToDateBalance',
        'period_to_date_debit_in_currency' => 'setPeriodToDateDebitInCurrency',
        'period_to_date_credit_in_currency' => 'setPeriodToDateCreditInCurrency',
        'beginning_balance_in_currency' => 'setBeginningBalanceInCurrency',
        'year_to_date_balance_in_currency' => 'setYearToDateBalanceInCurrency',
        'year_closed' => 'setYearClosed',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'ledger' => 'getLedger',
        'balance_type' => 'getBalanceType',
        'financial_period' => 'getFinancialPeriod',
        'account' => 'getAccount',
        'subaccount_id' => 'getSubaccountId',
        'sub_account_cd' => 'getSubAccountCd',
        'currency_id' => 'getCurrencyId',
        'period_to_date_debit' => 'getPeriodToDateDebit',
        'period_to_date_credit' => 'getPeriodToDateCredit',
        'beginning_balance' => 'getBeginningBalance',
        'year_to_date_balance' => 'getYearToDateBalance',
        'period_to_date_debit_in_currency' => 'getPeriodToDateDebitInCurrency',
        'period_to_date_credit_in_currency' => 'getPeriodToDateCreditInCurrency',
        'beginning_balance_in_currency' => 'getBeginningBalanceInCurrency',
        'year_to_date_balance_in_currency' => 'getYearToDateBalanceInCurrency',
        'year_closed' => 'getYearClosed',
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

    const BALANCE_TYPE_ACTUAL = 'Actual';
    const BALANCE_TYPE_REPORT = 'Report';
    const BALANCE_TYPE_STATISTICAL = 'Statistical';
    const BALANCE_TYPE_BUDGET = 'Budget';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceTypeAllowableValues()
    {
        return [
            self::BALANCE_TYPE_ACTUAL,
            self::BALANCE_TYPE_REPORT,
            self::BALANCE_TYPE_STATISTICAL,
            self::BALANCE_TYPE_BUDGET,
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
        $this->container['ledger'] = isset($data['ledger']) ? $data['ledger'] : null;
        $this->container['balance_type'] = isset($data['balance_type']) ? $data['balance_type'] : null;
        $this->container['financial_period'] = isset($data['financial_period']) ? $data['financial_period'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['subaccount_id'] = isset($data['subaccount_id']) ? $data['subaccount_id'] : null;
        $this->container['sub_account_cd'] = isset($data['sub_account_cd']) ? $data['sub_account_cd'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['period_to_date_debit'] = isset($data['period_to_date_debit']) ? $data['period_to_date_debit'] : null;
        $this->container['period_to_date_credit'] = isset($data['period_to_date_credit']) ? $data['period_to_date_credit'] : null;
        $this->container['beginning_balance'] = isset($data['beginning_balance']) ? $data['beginning_balance'] : null;
        $this->container['year_to_date_balance'] = isset($data['year_to_date_balance']) ? $data['year_to_date_balance'] : null;
        $this->container['period_to_date_debit_in_currency'] = isset($data['period_to_date_debit_in_currency']) ? $data['period_to_date_debit_in_currency'] : null;
        $this->container['period_to_date_credit_in_currency'] = isset($data['period_to_date_credit_in_currency']) ? $data['period_to_date_credit_in_currency'] : null;
        $this->container['beginning_balance_in_currency'] = isset($data['beginning_balance_in_currency']) ? $data['beginning_balance_in_currency'] : null;
        $this->container['year_to_date_balance_in_currency'] = isset($data['year_to_date_balance_in_currency']) ? $data['year_to_date_balance_in_currency'] : null;
        $this->container['year_closed'] = isset($data['year_closed']) ? $data['year_closed'] : null;
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

        $allowedValues = $this->getBalanceTypeAllowableValues();
        if (!is_null($this->container['balance_type']) && !in_array($this->container['balance_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'balance_type', must be one of '%s'",
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
     * @return object
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param object $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets ledger
     *
     * @return object
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param object $ledger ledger
     *
     * @return $this
     */
    public function setLedger($ledger)
    {
        $this->container['ledger'] = $ledger;

        return $this;
    }

    /**
     * Gets balance_type
     *
     * @return string
     */
    public function getBalanceType()
    {
        return $this->container['balance_type'];
    }

    /**
     * Sets balance_type
     *
     * @param string $balance_type balance_type
     *
     * @return $this
     */
    public function setBalanceType($balance_type)
    {
        $allowedValues = $this->getBalanceTypeAllowableValues();
        if (!is_null($balance_type) && !in_array($balance_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'balance_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balance_type'] = $balance_type;

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
     * @param string $financial_period The financial period to which the transactions recorded in the document should be posted. Format YYYYMM.
     *
     * @return $this
     */
    public function setFinancialPeriod($financial_period)
    {
        $this->container['financial_period'] = $financial_period;

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
     * @param object $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets subaccount_id
     *
     * @return string
     */
    public function getSubaccountId()
    {
        return $this->container['subaccount_id'];
    }

    /**
     * Sets subaccount_id
     *
     * @param string $subaccount_id subaccount_id
     *
     * @return $this
     */
    public function setSubaccountId($subaccount_id)
    {
        $this->container['subaccount_id'] = $subaccount_id;

        return $this;
    }

    /**
     * Gets sub_account_cd
     *
     * @return string
     */
    public function getSubAccountCd()
    {
        return $this->container['sub_account_cd'];
    }

    /**
     * Sets sub_account_cd
     *
     * @param string $sub_account_cd sub_account_cd
     *
     * @return $this
     */
    public function setSubAccountCd($sub_account_cd)
    {
        $this->container['sub_account_cd'] = $sub_account_cd;

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
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets period_to_date_debit
     *
     * @return double
     */
    public function getPeriodToDateDebit()
    {
        return $this->container['period_to_date_debit'];
    }

    /**
     * Sets period_to_date_debit
     *
     * @param double $period_to_date_debit period_to_date_debit
     *
     * @return $this
     */
    public function setPeriodToDateDebit($period_to_date_debit)
    {
        $this->container['period_to_date_debit'] = $period_to_date_debit;

        return $this;
    }

    /**
     * Gets period_to_date_credit
     *
     * @return double
     */
    public function getPeriodToDateCredit()
    {
        return $this->container['period_to_date_credit'];
    }

    /**
     * Sets period_to_date_credit
     *
     * @param double $period_to_date_credit period_to_date_credit
     *
     * @return $this
     */
    public function setPeriodToDateCredit($period_to_date_credit)
    {
        $this->container['period_to_date_credit'] = $period_to_date_credit;

        return $this;
    }

    /**
     * Gets beginning_balance
     *
     * @return double
     */
    public function getBeginningBalance()
    {
        return $this->container['beginning_balance'];
    }

    /**
     * Sets beginning_balance
     *
     * @param double $beginning_balance beginning_balance
     *
     * @return $this
     */
    public function setBeginningBalance($beginning_balance)
    {
        $this->container['beginning_balance'] = $beginning_balance;

        return $this;
    }

    /**
     * Gets year_to_date_balance
     *
     * @return double
     */
    public function getYearToDateBalance()
    {
        return $this->container['year_to_date_balance'];
    }

    /**
     * Sets year_to_date_balance
     *
     * @param double $year_to_date_balance year_to_date_balance
     *
     * @return $this
     */
    public function setYearToDateBalance($year_to_date_balance)
    {
        $this->container['year_to_date_balance'] = $year_to_date_balance;

        return $this;
    }

    /**
     * Gets period_to_date_debit_in_currency
     *
     * @return double
     */
    public function getPeriodToDateDebitInCurrency()
    {
        return $this->container['period_to_date_debit_in_currency'];
    }

    /**
     * Sets period_to_date_debit_in_currency
     *
     * @param double $period_to_date_debit_in_currency period_to_date_debit_in_currency
     *
     * @return $this
     */
    public function setPeriodToDateDebitInCurrency($period_to_date_debit_in_currency)
    {
        $this->container['period_to_date_debit_in_currency'] = $period_to_date_debit_in_currency;

        return $this;
    }

    /**
     * Gets period_to_date_credit_in_currency
     *
     * @return double
     */
    public function getPeriodToDateCreditInCurrency()
    {
        return $this->container['period_to_date_credit_in_currency'];
    }

    /**
     * Sets period_to_date_credit_in_currency
     *
     * @param double $period_to_date_credit_in_currency period_to_date_credit_in_currency
     *
     * @return $this
     */
    public function setPeriodToDateCreditInCurrency($period_to_date_credit_in_currency)
    {
        $this->container['period_to_date_credit_in_currency'] = $period_to_date_credit_in_currency;

        return $this;
    }

    /**
     * Gets beginning_balance_in_currency
     *
     * @return double
     */
    public function getBeginningBalanceInCurrency()
    {
        return $this->container['beginning_balance_in_currency'];
    }

    /**
     * Sets beginning_balance_in_currency
     *
     * @param double $beginning_balance_in_currency beginning_balance_in_currency
     *
     * @return $this
     */
    public function setBeginningBalanceInCurrency($beginning_balance_in_currency)
    {
        $this->container['beginning_balance_in_currency'] = $beginning_balance_in_currency;

        return $this;
    }

    /**
     * Gets year_to_date_balance_in_currency
     *
     * @return double
     */
    public function getYearToDateBalanceInCurrency()
    {
        return $this->container['year_to_date_balance_in_currency'];
    }

    /**
     * Sets year_to_date_balance_in_currency
     *
     * @param double $year_to_date_balance_in_currency year_to_date_balance_in_currency
     *
     * @return $this
     */
    public function setYearToDateBalanceInCurrency($year_to_date_balance_in_currency)
    {
        $this->container['year_to_date_balance_in_currency'] = $year_to_date_balance_in_currency;

        return $this;
    }

    /**
     * Gets year_closed
     *
     * @return bool
     */
    public function getYearClosed()
    {
        return $this->container['year_closed'];
    }

    /**
     * Sets year_closed
     *
     * @param bool $year_closed year_closed
     *
     * @return $this
     */
    public function setYearClosed($year_closed)
    {
        $this->container['year_closed'] = $year_closed;

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


