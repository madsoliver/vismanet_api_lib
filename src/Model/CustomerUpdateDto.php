<?php
/**
 * CustomerUpdateDto
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
 * CustomerUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'object',
        'name' => 'object',
        'status' => 'object',
        'account_reference' => 'object',
        'parent_record_number' => 'object',
        'currency_id' => 'object',
        'credit_limit' => 'object',
        'credit_days_past_due' => 'object',
        'override_with_class_values' => 'bool',
        'customer_class_id' => 'object',
        'credit_terms_id' => 'object',
        'print_invoices' => 'object',
        'accept_auto_invoices' => 'object',
        'send_invoices_by_email' => 'object',
        'print_statements' => 'object',
        'send_statements_by_email' => 'object',
        'print_multi_currency_statements' => 'object',
        'invoice_to_default_location' => 'object',
        'vat_registration_id' => 'object',
        'corporate_id' => 'object',
        'vat_zone_id' => 'object',
        'gln' => 'object',
        'note' => 'object',
        'main_address' => 'object',
        'main_contact' => 'object',
        'credit_verification' => 'object',
        'invoice_address' => 'object',
        'invoice_contact' => 'object',
        'statement_type' => 'object',
        'delivery_address' => 'object',
        'delivery_contact' => 'object',
        'price_class_id' => 'object',
        'e_invoice_contract' => 'object',
        'default_payment_method' => 'object',
        'gl_accounts' => 'object',
        'direct_debit_lines' => '\Ekstralys\VismaNetApi\Model\CustomerDirectDebitUpdateDto[]',
        'attribute_lines' => '\Ekstralys\VismaNetApi\Model\AttributeLineUpdateDto[]',
        'override_number_series' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'name' => null,
        'status' => null,
        'account_reference' => null,
        'parent_record_number' => null,
        'currency_id' => null,
        'credit_limit' => null,
        'credit_days_past_due' => null,
        'override_with_class_values' => null,
        'customer_class_id' => null,
        'credit_terms_id' => null,
        'print_invoices' => null,
        'accept_auto_invoices' => null,
        'send_invoices_by_email' => null,
        'print_statements' => null,
        'send_statements_by_email' => null,
        'print_multi_currency_statements' => null,
        'invoice_to_default_location' => null,
        'vat_registration_id' => null,
        'corporate_id' => null,
        'vat_zone_id' => null,
        'gln' => null,
        'note' => null,
        'main_address' => null,
        'main_contact' => null,
        'credit_verification' => null,
        'invoice_address' => null,
        'invoice_contact' => null,
        'statement_type' => null,
        'delivery_address' => null,
        'delivery_contact' => null,
        'price_class_id' => null,
        'e_invoice_contract' => null,
        'default_payment_method' => null,
        'gl_accounts' => null,
        'direct_debit_lines' => null,
        'attribute_lines' => null,
        'override_number_series' => null
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
        'number' => 'number',
        'name' => 'name',
        'status' => 'status',
        'account_reference' => 'accountReference',
        'parent_record_number' => 'parentRecordNumber',
        'currency_id' => 'currencyId',
        'credit_limit' => 'creditLimit',
        'credit_days_past_due' => 'creditDaysPastDue',
        'override_with_class_values' => 'overrideWithClassValues',
        'customer_class_id' => 'customerClassId',
        'credit_terms_id' => 'creditTermsId',
        'print_invoices' => 'printInvoices',
        'accept_auto_invoices' => 'acceptAutoInvoices',
        'send_invoices_by_email' => 'sendInvoicesByEmail',
        'print_statements' => 'printStatements',
        'send_statements_by_email' => 'sendStatementsByEmail',
        'print_multi_currency_statements' => 'printMultiCurrencyStatements',
        'invoice_to_default_location' => 'invoiceToDefaultLocation',
        'vat_registration_id' => 'vatRegistrationId',
        'corporate_id' => 'corporateId',
        'vat_zone_id' => 'vatZoneId',
        'gln' => 'gln',
        'note' => 'note',
        'main_address' => 'mainAddress',
        'main_contact' => 'mainContact',
        'credit_verification' => 'creditVerification',
        'invoice_address' => 'invoiceAddress',
        'invoice_contact' => 'invoiceContact',
        'statement_type' => 'statementType',
        'delivery_address' => 'deliveryAddress',
        'delivery_contact' => 'deliveryContact',
        'price_class_id' => 'priceClassId',
        'e_invoice_contract' => 'eInvoiceContract',
        'default_payment_method' => 'defaultPaymentMethod',
        'gl_accounts' => 'glAccounts',
        'direct_debit_lines' => 'directDebitLines',
        'attribute_lines' => 'attributeLines',
        'override_number_series' => 'overrideNumberSeries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'name' => 'setName',
        'status' => 'setStatus',
        'account_reference' => 'setAccountReference',
        'parent_record_number' => 'setParentRecordNumber',
        'currency_id' => 'setCurrencyId',
        'credit_limit' => 'setCreditLimit',
        'credit_days_past_due' => 'setCreditDaysPastDue',
        'override_with_class_values' => 'setOverrideWithClassValues',
        'customer_class_id' => 'setCustomerClassId',
        'credit_terms_id' => 'setCreditTermsId',
        'print_invoices' => 'setPrintInvoices',
        'accept_auto_invoices' => 'setAcceptAutoInvoices',
        'send_invoices_by_email' => 'setSendInvoicesByEmail',
        'print_statements' => 'setPrintStatements',
        'send_statements_by_email' => 'setSendStatementsByEmail',
        'print_multi_currency_statements' => 'setPrintMultiCurrencyStatements',
        'invoice_to_default_location' => 'setInvoiceToDefaultLocation',
        'vat_registration_id' => 'setVatRegistrationId',
        'corporate_id' => 'setCorporateId',
        'vat_zone_id' => 'setVatZoneId',
        'gln' => 'setGln',
        'note' => 'setNote',
        'main_address' => 'setMainAddress',
        'main_contact' => 'setMainContact',
        'credit_verification' => 'setCreditVerification',
        'invoice_address' => 'setInvoiceAddress',
        'invoice_contact' => 'setInvoiceContact',
        'statement_type' => 'setStatementType',
        'delivery_address' => 'setDeliveryAddress',
        'delivery_contact' => 'setDeliveryContact',
        'price_class_id' => 'setPriceClassId',
        'e_invoice_contract' => 'setEInvoiceContract',
        'default_payment_method' => 'setDefaultPaymentMethod',
        'gl_accounts' => 'setGlAccounts',
        'direct_debit_lines' => 'setDirectDebitLines',
        'attribute_lines' => 'setAttributeLines',
        'override_number_series' => 'setOverrideNumberSeries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'name' => 'getName',
        'status' => 'getStatus',
        'account_reference' => 'getAccountReference',
        'parent_record_number' => 'getParentRecordNumber',
        'currency_id' => 'getCurrencyId',
        'credit_limit' => 'getCreditLimit',
        'credit_days_past_due' => 'getCreditDaysPastDue',
        'override_with_class_values' => 'getOverrideWithClassValues',
        'customer_class_id' => 'getCustomerClassId',
        'credit_terms_id' => 'getCreditTermsId',
        'print_invoices' => 'getPrintInvoices',
        'accept_auto_invoices' => 'getAcceptAutoInvoices',
        'send_invoices_by_email' => 'getSendInvoicesByEmail',
        'print_statements' => 'getPrintStatements',
        'send_statements_by_email' => 'getSendStatementsByEmail',
        'print_multi_currency_statements' => 'getPrintMultiCurrencyStatements',
        'invoice_to_default_location' => 'getInvoiceToDefaultLocation',
        'vat_registration_id' => 'getVatRegistrationId',
        'corporate_id' => 'getCorporateId',
        'vat_zone_id' => 'getVatZoneId',
        'gln' => 'getGln',
        'note' => 'getNote',
        'main_address' => 'getMainAddress',
        'main_contact' => 'getMainContact',
        'credit_verification' => 'getCreditVerification',
        'invoice_address' => 'getInvoiceAddress',
        'invoice_contact' => 'getInvoiceContact',
        'statement_type' => 'getStatementType',
        'delivery_address' => 'getDeliveryAddress',
        'delivery_contact' => 'getDeliveryContact',
        'price_class_id' => 'getPriceClassId',
        'e_invoice_contract' => 'getEInvoiceContract',
        'default_payment_method' => 'getDefaultPaymentMethod',
        'gl_accounts' => 'getGlAccounts',
        'direct_debit_lines' => 'getDirectDebitLines',
        'attribute_lines' => 'getAttributeLines',
        'override_number_series' => 'getOverrideNumberSeries'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['account_reference'] = isset($data['account_reference']) ? $data['account_reference'] : null;
        $this->container['parent_record_number'] = isset($data['parent_record_number']) ? $data['parent_record_number'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['credit_days_past_due'] = isset($data['credit_days_past_due']) ? $data['credit_days_past_due'] : null;
        $this->container['override_with_class_values'] = isset($data['override_with_class_values']) ? $data['override_with_class_values'] : null;
        $this->container['customer_class_id'] = isset($data['customer_class_id']) ? $data['customer_class_id'] : null;
        $this->container['credit_terms_id'] = isset($data['credit_terms_id']) ? $data['credit_terms_id'] : null;
        $this->container['print_invoices'] = isset($data['print_invoices']) ? $data['print_invoices'] : null;
        $this->container['accept_auto_invoices'] = isset($data['accept_auto_invoices']) ? $data['accept_auto_invoices'] : null;
        $this->container['send_invoices_by_email'] = isset($data['send_invoices_by_email']) ? $data['send_invoices_by_email'] : null;
        $this->container['print_statements'] = isset($data['print_statements']) ? $data['print_statements'] : null;
        $this->container['send_statements_by_email'] = isset($data['send_statements_by_email']) ? $data['send_statements_by_email'] : null;
        $this->container['print_multi_currency_statements'] = isset($data['print_multi_currency_statements']) ? $data['print_multi_currency_statements'] : null;
        $this->container['invoice_to_default_location'] = isset($data['invoice_to_default_location']) ? $data['invoice_to_default_location'] : null;
        $this->container['vat_registration_id'] = isset($data['vat_registration_id']) ? $data['vat_registration_id'] : null;
        $this->container['corporate_id'] = isset($data['corporate_id']) ? $data['corporate_id'] : null;
        $this->container['vat_zone_id'] = isset($data['vat_zone_id']) ? $data['vat_zone_id'] : null;
        $this->container['gln'] = isset($data['gln']) ? $data['gln'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['main_address'] = isset($data['main_address']) ? $data['main_address'] : null;
        $this->container['main_contact'] = isset($data['main_contact']) ? $data['main_contact'] : null;
        $this->container['credit_verification'] = isset($data['credit_verification']) ? $data['credit_verification'] : null;
        $this->container['invoice_address'] = isset($data['invoice_address']) ? $data['invoice_address'] : null;
        $this->container['invoice_contact'] = isset($data['invoice_contact']) ? $data['invoice_contact'] : null;
        $this->container['statement_type'] = isset($data['statement_type']) ? $data['statement_type'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['delivery_contact'] = isset($data['delivery_contact']) ? $data['delivery_contact'] : null;
        $this->container['price_class_id'] = isset($data['price_class_id']) ? $data['price_class_id'] : null;
        $this->container['e_invoice_contract'] = isset($data['e_invoice_contract']) ? $data['e_invoice_contract'] : null;
        $this->container['default_payment_method'] = isset($data['default_payment_method']) ? $data['default_payment_method'] : null;
        $this->container['gl_accounts'] = isset($data['gl_accounts']) ? $data['gl_accounts'] : null;
        $this->container['direct_debit_lines'] = isset($data['direct_debit_lines']) ? $data['direct_debit_lines'] : null;
        $this->container['attribute_lines'] = isset($data['attribute_lines']) ? $data['attribute_lines'] : null;
        $this->container['override_number_series'] = isset($data['override_number_series']) ? $data['override_number_series'] : null;
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
     * Gets number
     *
     * @return object
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param object $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return object
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param object $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets account_reference
     *
     * @return object
     */
    public function getAccountReference()
    {
        return $this->container['account_reference'];
    }

    /**
     * Sets account_reference
     *
     * @param object $account_reference account_reference
     *
     * @return $this
     */
    public function setAccountReference($account_reference)
    {
        $this->container['account_reference'] = $account_reference;

        return $this;
    }

    /**
     * Gets parent_record_number
     *
     * @return object
     */
    public function getParentRecordNumber()
    {
        return $this->container['parent_record_number'];
    }

    /**
     * Sets parent_record_number
     *
     * @param object $parent_record_number parent_record_number
     *
     * @return $this
     */
    public function setParentRecordNumber($parent_record_number)
    {
        $this->container['parent_record_number'] = $parent_record_number;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return object
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param object $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return object
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param object $credit_limit credit_limit
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets credit_days_past_due
     *
     * @return object
     */
    public function getCreditDaysPastDue()
    {
        return $this->container['credit_days_past_due'];
    }

    /**
     * Sets credit_days_past_due
     *
     * @param object $credit_days_past_due credit_days_past_due
     *
     * @return $this
     */
    public function setCreditDaysPastDue($credit_days_past_due)
    {
        $this->container['credit_days_past_due'] = $credit_days_past_due;

        return $this;
    }

    /**
     * Gets override_with_class_values
     *
     * @return bool
     */
    public function getOverrideWithClassValues()
    {
        return $this->container['override_with_class_values'];
    }

    /**
     * Sets override_with_class_values
     *
     * @param bool $override_with_class_values override_with_class_values
     *
     * @return $this
     */
    public function setOverrideWithClassValues($override_with_class_values)
    {
        $this->container['override_with_class_values'] = $override_with_class_values;

        return $this;
    }

    /**
     * Gets customer_class_id
     *
     * @return object
     */
    public function getCustomerClassId()
    {
        return $this->container['customer_class_id'];
    }

    /**
     * Sets customer_class_id
     *
     * @param object $customer_class_id customer_class_id
     *
     * @return $this
     */
    public function setCustomerClassId($customer_class_id)
    {
        $this->container['customer_class_id'] = $customer_class_id;

        return $this;
    }

    /**
     * Gets credit_terms_id
     *
     * @return object
     */
    public function getCreditTermsId()
    {
        return $this->container['credit_terms_id'];
    }

    /**
     * Sets credit_terms_id
     *
     * @param object $credit_terms_id credit_terms_id
     *
     * @return $this
     */
    public function setCreditTermsId($credit_terms_id)
    {
        $this->container['credit_terms_id'] = $credit_terms_id;

        return $this;
    }

    /**
     * Gets print_invoices
     *
     * @return object
     */
    public function getPrintInvoices()
    {
        return $this->container['print_invoices'];
    }

    /**
     * Sets print_invoices
     *
     * @param object $print_invoices print_invoices
     *
     * @return $this
     */
    public function setPrintInvoices($print_invoices)
    {
        $this->container['print_invoices'] = $print_invoices;

        return $this;
    }

    /**
     * Gets accept_auto_invoices
     *
     * @return object
     */
    public function getAcceptAutoInvoices()
    {
        return $this->container['accept_auto_invoices'];
    }

    /**
     * Sets accept_auto_invoices
     *
     * @param object $accept_auto_invoices accept_auto_invoices
     *
     * @return $this
     */
    public function setAcceptAutoInvoices($accept_auto_invoices)
    {
        $this->container['accept_auto_invoices'] = $accept_auto_invoices;

        return $this;
    }

    /**
     * Gets send_invoices_by_email
     *
     * @return object
     */
    public function getSendInvoicesByEmail()
    {
        return $this->container['send_invoices_by_email'];
    }

    /**
     * Sets send_invoices_by_email
     *
     * @param object $send_invoices_by_email send_invoices_by_email
     *
     * @return $this
     */
    public function setSendInvoicesByEmail($send_invoices_by_email)
    {
        $this->container['send_invoices_by_email'] = $send_invoices_by_email;

        return $this;
    }

    /**
     * Gets print_statements
     *
     * @return object
     */
    public function getPrintStatements()
    {
        return $this->container['print_statements'];
    }

    /**
     * Sets print_statements
     *
     * @param object $print_statements print_statements
     *
     * @return $this
     */
    public function setPrintStatements($print_statements)
    {
        $this->container['print_statements'] = $print_statements;

        return $this;
    }

    /**
     * Gets send_statements_by_email
     *
     * @return object
     */
    public function getSendStatementsByEmail()
    {
        return $this->container['send_statements_by_email'];
    }

    /**
     * Sets send_statements_by_email
     *
     * @param object $send_statements_by_email send_statements_by_email
     *
     * @return $this
     */
    public function setSendStatementsByEmail($send_statements_by_email)
    {
        $this->container['send_statements_by_email'] = $send_statements_by_email;

        return $this;
    }

    /**
     * Gets print_multi_currency_statements
     *
     * @return object
     */
    public function getPrintMultiCurrencyStatements()
    {
        return $this->container['print_multi_currency_statements'];
    }

    /**
     * Sets print_multi_currency_statements
     *
     * @param object $print_multi_currency_statements print_multi_currency_statements
     *
     * @return $this
     */
    public function setPrintMultiCurrencyStatements($print_multi_currency_statements)
    {
        $this->container['print_multi_currency_statements'] = $print_multi_currency_statements;

        return $this;
    }

    /**
     * Gets invoice_to_default_location
     *
     * @return object
     */
    public function getInvoiceToDefaultLocation()
    {
        return $this->container['invoice_to_default_location'];
    }

    /**
     * Sets invoice_to_default_location
     *
     * @param object $invoice_to_default_location invoice_to_default_location
     *
     * @return $this
     */
    public function setInvoiceToDefaultLocation($invoice_to_default_location)
    {
        $this->container['invoice_to_default_location'] = $invoice_to_default_location;

        return $this;
    }

    /**
     * Gets vat_registration_id
     *
     * @return object
     */
    public function getVatRegistrationId()
    {
        return $this->container['vat_registration_id'];
    }

    /**
     * Sets vat_registration_id
     *
     * @param object $vat_registration_id vat_registration_id
     *
     * @return $this
     */
    public function setVatRegistrationId($vat_registration_id)
    {
        $this->container['vat_registration_id'] = $vat_registration_id;

        return $this;
    }

    /**
     * Gets corporate_id
     *
     * @return object
     */
    public function getCorporateId()
    {
        return $this->container['corporate_id'];
    }

    /**
     * Sets corporate_id
     *
     * @param object $corporate_id corporate_id
     *
     * @return $this
     */
    public function setCorporateId($corporate_id)
    {
        $this->container['corporate_id'] = $corporate_id;

        return $this;
    }

    /**
     * Gets vat_zone_id
     *
     * @return object
     */
    public function getVatZoneId()
    {
        return $this->container['vat_zone_id'];
    }

    /**
     * Sets vat_zone_id
     *
     * @param object $vat_zone_id vat_zone_id
     *
     * @return $this
     */
    public function setVatZoneId($vat_zone_id)
    {
        $this->container['vat_zone_id'] = $vat_zone_id;

        return $this;
    }

    /**
     * Gets gln
     *
     * @return object
     */
    public function getGln()
    {
        return $this->container['gln'];
    }

    /**
     * Sets gln
     *
     * @param object $gln gln
     *
     * @return $this
     */
    public function setGln($gln)
    {
        $this->container['gln'] = $gln;

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
     * Gets main_address
     *
     * @return object
     */
    public function getMainAddress()
    {
        return $this->container['main_address'];
    }

    /**
     * Sets main_address
     *
     * @param object $main_address main_address
     *
     * @return $this
     */
    public function setMainAddress($main_address)
    {
        $this->container['main_address'] = $main_address;

        return $this;
    }

    /**
     * Gets main_contact
     *
     * @return object
     */
    public function getMainContact()
    {
        return $this->container['main_contact'];
    }

    /**
     * Sets main_contact
     *
     * @param object $main_contact main_contact
     *
     * @return $this
     */
    public function setMainContact($main_contact)
    {
        $this->container['main_contact'] = $main_contact;

        return $this;
    }

    /**
     * Gets credit_verification
     *
     * @return object
     */
    public function getCreditVerification()
    {
        return $this->container['credit_verification'];
    }

    /**
     * Sets credit_verification
     *
     * @param object $credit_verification credit_verification
     *
     * @return $this
     */
    public function setCreditVerification($credit_verification)
    {
        $this->container['credit_verification'] = $credit_verification;

        return $this;
    }

    /**
     * Gets invoice_address
     *
     * @return object
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }

    /**
     * Sets invoice_address
     *
     * @param object $invoice_address invoice_address
     *
     * @return $this
     */
    public function setInvoiceAddress($invoice_address)
    {
        $this->container['invoice_address'] = $invoice_address;

        return $this;
    }

    /**
     * Gets invoice_contact
     *
     * @return object
     */
    public function getInvoiceContact()
    {
        return $this->container['invoice_contact'];
    }

    /**
     * Sets invoice_contact
     *
     * @param object $invoice_contact invoice_contact
     *
     * @return $this
     */
    public function setInvoiceContact($invoice_contact)
    {
        $this->container['invoice_contact'] = $invoice_contact;

        return $this;
    }

    /**
     * Gets statement_type
     *
     * @return object
     */
    public function getStatementType()
    {
        return $this->container['statement_type'];
    }

    /**
     * Sets statement_type
     *
     * @param object $statement_type statement_type
     *
     * @return $this
     */
    public function setStatementType($statement_type)
    {
        $this->container['statement_type'] = $statement_type;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return object
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param object $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets delivery_contact
     *
     * @return object
     */
    public function getDeliveryContact()
    {
        return $this->container['delivery_contact'];
    }

    /**
     * Sets delivery_contact
     *
     * @param object $delivery_contact delivery_contact
     *
     * @return $this
     */
    public function setDeliveryContact($delivery_contact)
    {
        $this->container['delivery_contact'] = $delivery_contact;

        return $this;
    }

    /**
     * Gets price_class_id
     *
     * @return object
     */
    public function getPriceClassId()
    {
        return $this->container['price_class_id'];
    }

    /**
     * Sets price_class_id
     *
     * @param object $price_class_id price_class_id
     *
     * @return $this
     */
    public function setPriceClassId($price_class_id)
    {
        $this->container['price_class_id'] = $price_class_id;

        return $this;
    }

    /**
     * Gets e_invoice_contract
     *
     * @return object
     */
    public function getEInvoiceContract()
    {
        return $this->container['e_invoice_contract'];
    }

    /**
     * Sets e_invoice_contract
     *
     * @param object $e_invoice_contract e_invoice_contract
     *
     * @return $this
     */
    public function setEInvoiceContract($e_invoice_contract)
    {
        $this->container['e_invoice_contract'] = $e_invoice_contract;

        return $this;
    }

    /**
     * Gets default_payment_method
     *
     * @return object
     */
    public function getDefaultPaymentMethod()
    {
        return $this->container['default_payment_method'];
    }

    /**
     * Sets default_payment_method
     *
     * @param object $default_payment_method default_payment_method
     *
     * @return $this
     */
    public function setDefaultPaymentMethod($default_payment_method)
    {
        $this->container['default_payment_method'] = $default_payment_method;

        return $this;
    }

    /**
     * Gets gl_accounts
     *
     * @return object
     */
    public function getGlAccounts()
    {
        return $this->container['gl_accounts'];
    }

    /**
     * Sets gl_accounts
     *
     * @param object $gl_accounts gl_accounts
     *
     * @return $this
     */
    public function setGlAccounts($gl_accounts)
    {
        $this->container['gl_accounts'] = $gl_accounts;

        return $this;
    }

    /**
     * Gets direct_debit_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\CustomerDirectDebitUpdateDto[]
     */
    public function getDirectDebitLines()
    {
        return $this->container['direct_debit_lines'];
    }

    /**
     * Sets direct_debit_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\CustomerDirectDebitUpdateDto[] $direct_debit_lines Update direct debit information for a customer(only for Netherlands)
     *
     * @return $this
     */
    public function setDirectDebitLines($direct_debit_lines)
    {
        $this->container['direct_debit_lines'] = $direct_debit_lines;

        return $this;
    }

    /**
     * Gets attribute_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\AttributeLineUpdateDto[]
     */
    public function getAttributeLines()
    {
        return $this->container['attribute_lines'];
    }

    /**
     * Sets attribute_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\AttributeLineUpdateDto[] $attribute_lines attribute_lines
     *
     * @return $this
     */
    public function setAttributeLines($attribute_lines)
    {
        $this->container['attribute_lines'] = $attribute_lines;

        return $this;
    }

    /**
     * Gets override_number_series
     *
     * @return object
     */
    public function getOverrideNumberSeries()
    {
        return $this->container['override_number_series'];
    }

    /**
     * Sets override_number_series
     *
     * @param object $override_number_series override_number_series
     *
     * @return $this
     */
    public function setOverrideNumberSeries($override_number_series)
    {
        $this->container['override_number_series'] = $override_number_series;

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


