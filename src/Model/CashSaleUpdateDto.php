<?php
/**
 * CashSaleUpdateDto
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
 * CashSaleUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashSaleUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashSaleUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_method_id' => 'object',
        'credit_terms_id' => 'object',
        'payment_reference' => 'object',
        'cash_sale_lines' => '\Ekstralys\VismaNetApi\Model\CashSaleLinesUpdateDto[]',
        'reference_number' => 'object',
        'customer_number' => 'object',
        'document_date' => 'object',
        'orig_invoice_date' => 'object',
        'hold' => 'object',
        'post_period' => 'object',
        'financial_period' => 'object',
        'invoice_text' => 'object',
        'location_id' => 'object',
        'sales_person_id' => 'object',
        'salesperson' => 'object',
        'note' => 'object',
        'branch_number' => 'object',
        'cash_account' => 'object',
        'dont_print' => 'object',
        'dont_email' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_method_id' => null,
        'credit_terms_id' => null,
        'payment_reference' => null,
        'cash_sale_lines' => null,
        'reference_number' => null,
        'customer_number' => null,
        'document_date' => null,
        'orig_invoice_date' => null,
        'hold' => null,
        'post_period' => null,
        'financial_period' => null,
        'invoice_text' => null,
        'location_id' => null,
        'sales_person_id' => null,
        'salesperson' => null,
        'note' => null,
        'branch_number' => null,
        'cash_account' => null,
        'dont_print' => null,
        'dont_email' => null
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
        'payment_method_id' => 'paymentMethodId',
        'credit_terms_id' => 'creditTermsId',
        'payment_reference' => 'paymentReference',
        'cash_sale_lines' => 'cashSaleLines',
        'reference_number' => 'referenceNumber',
        'customer_number' => 'customerNumber',
        'document_date' => 'documentDate',
        'orig_invoice_date' => 'origInvoiceDate',
        'hold' => 'hold',
        'post_period' => 'postPeriod',
        'financial_period' => 'financialPeriod',
        'invoice_text' => 'invoiceText',
        'location_id' => 'locationId',
        'sales_person_id' => 'salesPersonID',
        'salesperson' => 'salesperson',
        'note' => 'note',
        'branch_number' => 'branchNumber',
        'cash_account' => 'cashAccount',
        'dont_print' => 'dontPrint',
        'dont_email' => 'dontEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_method_id' => 'setPaymentMethodId',
        'credit_terms_id' => 'setCreditTermsId',
        'payment_reference' => 'setPaymentReference',
        'cash_sale_lines' => 'setCashSaleLines',
        'reference_number' => 'setReferenceNumber',
        'customer_number' => 'setCustomerNumber',
        'document_date' => 'setDocumentDate',
        'orig_invoice_date' => 'setOrigInvoiceDate',
        'hold' => 'setHold',
        'post_period' => 'setPostPeriod',
        'financial_period' => 'setFinancialPeriod',
        'invoice_text' => 'setInvoiceText',
        'location_id' => 'setLocationId',
        'sales_person_id' => 'setSalesPersonId',
        'salesperson' => 'setSalesperson',
        'note' => 'setNote',
        'branch_number' => 'setBranchNumber',
        'cash_account' => 'setCashAccount',
        'dont_print' => 'setDontPrint',
        'dont_email' => 'setDontEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_method_id' => 'getPaymentMethodId',
        'credit_terms_id' => 'getCreditTermsId',
        'payment_reference' => 'getPaymentReference',
        'cash_sale_lines' => 'getCashSaleLines',
        'reference_number' => 'getReferenceNumber',
        'customer_number' => 'getCustomerNumber',
        'document_date' => 'getDocumentDate',
        'orig_invoice_date' => 'getOrigInvoiceDate',
        'hold' => 'getHold',
        'post_period' => 'getPostPeriod',
        'financial_period' => 'getFinancialPeriod',
        'invoice_text' => 'getInvoiceText',
        'location_id' => 'getLocationId',
        'sales_person_id' => 'getSalesPersonId',
        'salesperson' => 'getSalesperson',
        'note' => 'getNote',
        'branch_number' => 'getBranchNumber',
        'cash_account' => 'getCashAccount',
        'dont_print' => 'getDontPrint',
        'dont_email' => 'getDontEmail'
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
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['credit_terms_id'] = isset($data['credit_terms_id']) ? $data['credit_terms_id'] : null;
        $this->container['payment_reference'] = isset($data['payment_reference']) ? $data['payment_reference'] : null;
        $this->container['cash_sale_lines'] = isset($data['cash_sale_lines']) ? $data['cash_sale_lines'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['orig_invoice_date'] = isset($data['orig_invoice_date']) ? $data['orig_invoice_date'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['post_period'] = isset($data['post_period']) ? $data['post_period'] : null;
        $this->container['financial_period'] = isset($data['financial_period']) ? $data['financial_period'] : null;
        $this->container['invoice_text'] = isset($data['invoice_text']) ? $data['invoice_text'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['sales_person_id'] = isset($data['sales_person_id']) ? $data['sales_person_id'] : null;
        $this->container['salesperson'] = isset($data['salesperson']) ? $data['salesperson'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['cash_account'] = isset($data['cash_account']) ? $data['cash_account'] : null;
        $this->container['dont_print'] = isset($data['dont_print']) ? $data['dont_print'] : null;
        $this->container['dont_email'] = isset($data['dont_email']) ? $data['dont_email'] : null;
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
     * Gets payment_method_id
     *
     * @return object
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param object $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

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
     * Gets payment_reference
     *
     * @return object
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param object $payment_reference Mandatory
     *
     * @return $this
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets cash_sale_lines
     *
     * @return \Ekstralys\VismaNetApi\Model\CashSaleLinesUpdateDto[]
     */
    public function getCashSaleLines()
    {
        return $this->container['cash_sale_lines'];
    }

    /**
     * Sets cash_sale_lines
     *
     * @param \Ekstralys\VismaNetApi\Model\CashSaleLinesUpdateDto[] $cash_sale_lines cash_sale_lines
     *
     * @return $this
     */
    public function setCashSaleLines($cash_sale_lines)
    {
        $this->container['cash_sale_lines'] = $cash_sale_lines;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return object
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param object $reference_number reference_number
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return object
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param object $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return object
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param object $document_date document_date
     *
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets orig_invoice_date
     *
     * @return object
     */
    public function getOrigInvoiceDate()
    {
        return $this->container['orig_invoice_date'];
    }

    /**
     * Sets orig_invoice_date
     *
     * @param object $orig_invoice_date orig_invoice_date
     *
     * @return $this
     */
    public function setOrigInvoiceDate($orig_invoice_date)
    {
        $this->container['orig_invoice_date'] = $orig_invoice_date;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return object
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param object $hold hold
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

        return $this;
    }

    /**
     * Gets post_period
     *
     * @return object
     */
    public function getPostPeriod()
    {
        return $this->container['post_period'];
    }

    /**
     * Sets post_period
     *
     * @param object $post_period The financial period to which the transactions recorded in the document should be posted. Use the format MMYYYY.
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
     * @return object
     */
    public function getFinancialPeriod()
    {
        return $this->container['financial_period'];
    }

    /**
     * Sets financial_period
     *
     * @param object $financial_period The financial period to which the transactions recorded in the document should be posted. Use the format YYYYMM.
     *
     * @return $this
     */
    public function setFinancialPeriod($financial_period)
    {
        $this->container['financial_period'] = $financial_period;

        return $this;
    }

    /**
     * Gets invoice_text
     *
     * @return object
     */
    public function getInvoiceText()
    {
        return $this->container['invoice_text'];
    }

    /**
     * Sets invoice_text
     *
     * @param object $invoice_text invoice_text
     *
     * @return $this
     */
    public function setInvoiceText($invoice_text)
    {
        $this->container['invoice_text'] = $invoice_text;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return object
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param object $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets sales_person_id
     *
     * @return object
     */
    public function getSalesPersonId()
    {
        return $this->container['sales_person_id'];
    }

    /**
     * Sets sales_person_id
     *
     * @param object $sales_person_id The field is deprecated for customer document endpoints, please use Salesperson instead
     *
     * @return $this
     */
    public function setSalesPersonId($sales_person_id)
    {
        $this->container['sales_person_id'] = $sales_person_id;

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
     * @param object $salesperson The identifier of the salesperson involved.
     *
     * @return $this
     */
    public function setSalesperson($salesperson)
    {
        $this->container['salesperson'] = $salesperson;

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
     * Gets cash_account
     *
     * @return object
     */
    public function getCashAccount()
    {
        return $this->container['cash_account'];
    }

    /**
     * Sets cash_account
     *
     * @param object $cash_account cash_account
     *
     * @return $this
     */
    public function setCashAccount($cash_account)
    {
        $this->container['cash_account'] = $cash_account;

        return $this;
    }

    /**
     * Gets dont_print
     *
     * @return object
     */
    public function getDontPrint()
    {
        return $this->container['dont_print'];
    }

    /**
     * Sets dont_print
     *
     * @param object $dont_print dont_print
     *
     * @return $this
     */
    public function setDontPrint($dont_print)
    {
        $this->container['dont_print'] = $dont_print;

        return $this;
    }

    /**
     * Gets dont_email
     *
     * @return object
     */
    public function getDontEmail()
    {
        return $this->container['dont_email'];
    }

    /**
     * Sets dont_email
     *
     * @param object $dont_email dont_email
     *
     * @return $this
     */
    public function setDontEmail($dont_email)
    {
        $this->container['dont_email'] = $dont_email;

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


