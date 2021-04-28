<?php
/**
 * SalesOrderBasicDto
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
 * SalesOrderBasicDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a SOOrder in SOOrderController. Used by getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrderBasicDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lines' => '\Ekstralys\VismaNetApi\Model\SalesOrderDocumentLineDto[]',
        'order_type' => 'string',
        'order_no' => 'string',
        'status' => 'string',
        'hold' => 'bool',
        'date' => '\DateTime',
        'request_on' => '\DateTime',
        'customer_order' => 'string',
        'customer_ref_no' => 'string',
        'customer' => 'object',
        'contact_id' => 'int',
        'location' => 'object',
        'currency' => 'string',
        'description' => 'string',
        'order_total' => 'double',
        'order_total_in_base_currency' => 'double',
        'vat_taxable_total' => 'double',
        'vat_taxable_total_in_base_currency' => 'double',
        'vat_exempt_total' => 'double',
        'vat_exempt_total_in_base_currency' => 'double',
        'tax_total' => 'double',
        'tax_total_in_base_currency' => 'double',
        'exchange_rate' => 'double',
        'discount_total' => 'double',
        'discount_total_in_base_currency' => 'double',
        'last_modified_date_time' => '\DateTime',
        'branch_number' => 'object',
        'note' => 'string',
        'attachments' => '\Ekstralys\VismaNetApi\Model\AttachmentDto[]',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lines' => null,
        'order_type' => null,
        'order_no' => null,
        'status' => null,
        'hold' => null,
        'date' => 'date-time',
        'request_on' => 'date-time',
        'customer_order' => null,
        'customer_ref_no' => null,
        'customer' => null,
        'contact_id' => 'int32',
        'location' => null,
        'currency' => null,
        'description' => null,
        'order_total' => 'double',
        'order_total_in_base_currency' => 'double',
        'vat_taxable_total' => 'double',
        'vat_taxable_total_in_base_currency' => 'double',
        'vat_exempt_total' => 'double',
        'vat_exempt_total_in_base_currency' => 'double',
        'tax_total' => 'double',
        'tax_total_in_base_currency' => 'double',
        'exchange_rate' => 'double',
        'discount_total' => 'double',
        'discount_total_in_base_currency' => 'double',
        'last_modified_date_time' => 'date-time',
        'branch_number' => null,
        'note' => null,
        'attachments' => null,
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
        'lines' => 'lines',
        'order_type' => 'orderType',
        'order_no' => 'orderNo',
        'status' => 'status',
        'hold' => 'hold',
        'date' => 'date',
        'request_on' => 'requestOn',
        'customer_order' => 'customerOrder',
        'customer_ref_no' => 'customerRefNo',
        'customer' => 'customer',
        'contact_id' => 'contactId',
        'location' => 'location',
        'currency' => 'currency',
        'description' => 'description',
        'order_total' => 'orderTotal',
        'order_total_in_base_currency' => 'orderTotalInBaseCurrency',
        'vat_taxable_total' => 'vatTaxableTotal',
        'vat_taxable_total_in_base_currency' => 'vatTaxableTotalInBaseCurrency',
        'vat_exempt_total' => 'vatExemptTotal',
        'vat_exempt_total_in_base_currency' => 'vatExemptTotalInBaseCurrency',
        'tax_total' => 'taxTotal',
        'tax_total_in_base_currency' => 'taxTotalInBaseCurrency',
        'exchange_rate' => 'exchangeRate',
        'discount_total' => 'discountTotal',
        'discount_total_in_base_currency' => 'discountTotalInBaseCurrency',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'branch_number' => 'branchNumber',
        'note' => 'note',
        'attachments' => 'attachments',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lines' => 'setLines',
        'order_type' => 'setOrderType',
        'order_no' => 'setOrderNo',
        'status' => 'setStatus',
        'hold' => 'setHold',
        'date' => 'setDate',
        'request_on' => 'setRequestOn',
        'customer_order' => 'setCustomerOrder',
        'customer_ref_no' => 'setCustomerRefNo',
        'customer' => 'setCustomer',
        'contact_id' => 'setContactId',
        'location' => 'setLocation',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'order_total' => 'setOrderTotal',
        'order_total_in_base_currency' => 'setOrderTotalInBaseCurrency',
        'vat_taxable_total' => 'setVatTaxableTotal',
        'vat_taxable_total_in_base_currency' => 'setVatTaxableTotalInBaseCurrency',
        'vat_exempt_total' => 'setVatExemptTotal',
        'vat_exempt_total_in_base_currency' => 'setVatExemptTotalInBaseCurrency',
        'tax_total' => 'setTaxTotal',
        'tax_total_in_base_currency' => 'setTaxTotalInBaseCurrency',
        'exchange_rate' => 'setExchangeRate',
        'discount_total' => 'setDiscountTotal',
        'discount_total_in_base_currency' => 'setDiscountTotalInBaseCurrency',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'branch_number' => 'setBranchNumber',
        'note' => 'setNote',
        'attachments' => 'setAttachments',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lines' => 'getLines',
        'order_type' => 'getOrderType',
        'order_no' => 'getOrderNo',
        'status' => 'getStatus',
        'hold' => 'getHold',
        'date' => 'getDate',
        'request_on' => 'getRequestOn',
        'customer_order' => 'getCustomerOrder',
        'customer_ref_no' => 'getCustomerRefNo',
        'customer' => 'getCustomer',
        'contact_id' => 'getContactId',
        'location' => 'getLocation',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'order_total' => 'getOrderTotal',
        'order_total_in_base_currency' => 'getOrderTotalInBaseCurrency',
        'vat_taxable_total' => 'getVatTaxableTotal',
        'vat_taxable_total_in_base_currency' => 'getVatTaxableTotalInBaseCurrency',
        'vat_exempt_total' => 'getVatExemptTotal',
        'vat_exempt_total_in_base_currency' => 'getVatExemptTotalInBaseCurrency',
        'tax_total' => 'getTaxTotal',
        'tax_total_in_base_currency' => 'getTaxTotalInBaseCurrency',
        'exchange_rate' => 'getExchangeRate',
        'discount_total' => 'getDiscountTotal',
        'discount_total_in_base_currency' => 'getDiscountTotalInBaseCurrency',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'branch_number' => 'getBranchNumber',
        'note' => 'getNote',
        'attachments' => 'getAttachments',
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

    const STATUS_OPEN = 'Open';
    const STATUS_HOLD = 'Hold';
    const STATUS_CREDIT_HOLD = 'CreditHold';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_BACK_ORDER = 'BackOrder';
    const STATUS_SHIPPING = 'Shipping';
    const STATUS_INVOICED = 'Invoiced';
    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_VOIDED = 'Voided';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_HOLD,
            self::STATUS_CREDIT_HOLD,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_BACK_ORDER,
            self::STATUS_SHIPPING,
            self::STATUS_INVOICED,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_VOIDED,
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
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['request_on'] = isset($data['request_on']) ? $data['request_on'] : null;
        $this->container['customer_order'] = isset($data['customer_order']) ? $data['customer_order'] : null;
        $this->container['customer_ref_no'] = isset($data['customer_ref_no']) ? $data['customer_ref_no'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_total'] = isset($data['order_total']) ? $data['order_total'] : null;
        $this->container['order_total_in_base_currency'] = isset($data['order_total_in_base_currency']) ? $data['order_total_in_base_currency'] : null;
        $this->container['vat_taxable_total'] = isset($data['vat_taxable_total']) ? $data['vat_taxable_total'] : null;
        $this->container['vat_taxable_total_in_base_currency'] = isset($data['vat_taxable_total_in_base_currency']) ? $data['vat_taxable_total_in_base_currency'] : null;
        $this->container['vat_exempt_total'] = isset($data['vat_exempt_total']) ? $data['vat_exempt_total'] : null;
        $this->container['vat_exempt_total_in_base_currency'] = isset($data['vat_exempt_total_in_base_currency']) ? $data['vat_exempt_total_in_base_currency'] : null;
        $this->container['tax_total'] = isset($data['tax_total']) ? $data['tax_total'] : null;
        $this->container['tax_total_in_base_currency'] = isset($data['tax_total_in_base_currency']) ? $data['tax_total_in_base_currency'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['discount_total'] = isset($data['discount_total']) ? $data['discount_total'] : null;
        $this->container['discount_total_in_base_currency'] = isset($data['discount_total_in_base_currency']) ? $data['discount_total_in_base_currency'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['branch_number'] = isset($data['branch_number']) ? $data['branch_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
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
     * Gets lines
     *
     * @return \Ekstralys\VismaNetApi\Model\SalesOrderDocumentLineDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Ekstralys\VismaNetApi\Model\SalesOrderDocumentLineDto[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type Mandatory field: The top part &gt; Order type &gt; The type of the document, which is one of the predefined order types or a custom order type created by using the (SO201000) window.
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no The top part &gt; Order no.: &gt; The reference number of the document.
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

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
     * @param string $status The top part &gt; Status &gt; The status of the document, which can be one of the following options: On hold, Credit hold, Pending aååroval, Rejected, Open, Cancelled, Shipping, Back order, Invoiced, Completed.
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
     * Gets hold
     *
     * @return bool
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param bool $hold The top part &gt; Hold &gt; A check box that you select if the document is on hold and should not be processed further at this time.
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

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
     * @param \DateTime $date Mandatory field: The top part &gt; Date* &gt;  The date of the document.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets request_on
     *
     * @return \DateTime
     */
    public function getRequestOn()
    {
        return $this->container['request_on'];
    }

    /**
     * Sets request_on
     *
     * @param \DateTime $request_on Mandatory field: The top part &gt; Requested on &gt; The date when the customer wants to receive the goods; this date provides the default values for the Requested on dates for order lines.
     *
     * @return $this
     */
    public function setRequestOn($request_on)
    {
        $this->container['request_on'] = $request_on;

        return $this;
    }

    /**
     * Gets customer_order
     *
     * @return string
     */
    public function getCustomerOrder()
    {
        return $this->container['customer_order'];
    }

    /**
     * Sets customer_order
     *
     * @param string $customer_order The top part &gt; Customer order &gt; The reference number of the original customer document that the sales order is based on.
     *
     * @return $this
     */
    public function setCustomerOrder($customer_order)
    {
        $this->container['customer_order'] = $customer_order;

        return $this;
    }

    /**
     * Gets customer_ref_no
     *
     * @return string
     */
    public function getCustomerRefNo()
    {
        return $this->container['customer_ref_no'];
    }

    /**
     * Sets customer_ref_no
     *
     * @param string $customer_ref_no The top part &gt; External reference &gt; The reference number of the sales order in a third-party application if Visma.net Financials is integrated with such an application and imports the sales orders from it.
     *
     * @return $this
     */
    public function setCustomerRefNo($customer_ref_no)
    {
        $this->container['customer_ref_no'] = $customer_ref_no;

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
     * @param object $customer The top part &gt; Customer &gt; The customer that has ordered the goods or services.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id The top part &gt; Contact &gt; The contact person of the customer.
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

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
     * @param object $location Mandatory field: The top part &gt; Location* &gt; The customer location from which the goods or services have been ordered or, if the sales order is created from an opportunity, the customer location specified for the opportunity.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The top part &gt; Currency &gt; The currency of the document.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $description The top part &gt; Description &gt; A brief description of the document.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_total
     *
     * @return double
     */
    public function getOrderTotal()
    {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total
     *
     * @param double $order_total The top part &gt; Order total &gt; The total amount of the document, which is calculated as follows:  Line Total + Misc.Charges + Freight + Premium Freight – Discount Total+ Tax Total
     *
     * @return $this
     */
    public function setOrderTotal($order_total)
    {
        $this->container['order_total'] = $order_total;

        return $this;
    }

    /**
     * Gets order_total_in_base_currency
     *
     * @return double
     */
    public function getOrderTotalInBaseCurrency()
    {
        return $this->container['order_total_in_base_currency'];
    }

    /**
     * Sets order_total_in_base_currency
     *
     * @param double $order_total_in_base_currency order_total_in_base_currency
     *
     * @return $this
     */
    public function setOrderTotalInBaseCurrency($order_total_in_base_currency)
    {
        $this->container['order_total_in_base_currency'] = $order_total_in_base_currency;

        return $this;
    }

    /**
     * Gets vat_taxable_total
     *
     * @return double
     */
    public function getVatTaxableTotal()
    {
        return $this->container['vat_taxable_total'];
    }

    /**
     * Sets vat_taxable_total
     *
     * @param double $vat_taxable_total The top part &gt; VAT taxable total &gt; The document total that is subject to VAT.
     *
     * @return $this
     */
    public function setVatTaxableTotal($vat_taxable_total)
    {
        $this->container['vat_taxable_total'] = $vat_taxable_total;

        return $this;
    }

    /**
     * Gets vat_taxable_total_in_base_currency
     *
     * @return double
     */
    public function getVatTaxableTotalInBaseCurrency()
    {
        return $this->container['vat_taxable_total_in_base_currency'];
    }

    /**
     * Sets vat_taxable_total_in_base_currency
     *
     * @param double $vat_taxable_total_in_base_currency vat_taxable_total_in_base_currency
     *
     * @return $this
     */
    public function setVatTaxableTotalInBaseCurrency($vat_taxable_total_in_base_currency)
    {
        $this->container['vat_taxable_total_in_base_currency'] = $vat_taxable_total_in_base_currency;

        return $this;
    }

    /**
     * Gets vat_exempt_total
     *
     * @return double
     */
    public function getVatExemptTotal()
    {
        return $this->container['vat_exempt_total'];
    }

    /**
     * Sets vat_exempt_total
     *
     * @param double $vat_exempt_total The top part &gt; VAT exempt total &gt; The document total that is exempt from VAT.
     *
     * @return $this
     */
    public function setVatExemptTotal($vat_exempt_total)
    {
        $this->container['vat_exempt_total'] = $vat_exempt_total;

        return $this;
    }

    /**
     * Gets vat_exempt_total_in_base_currency
     *
     * @return double
     */
    public function getVatExemptTotalInBaseCurrency()
    {
        return $this->container['vat_exempt_total_in_base_currency'];
    }

    /**
     * Sets vat_exempt_total_in_base_currency
     *
     * @param double $vat_exempt_total_in_base_currency vat_exempt_total_in_base_currency
     *
     * @return $this
     */
    public function setVatExemptTotalInBaseCurrency($vat_exempt_total_in_base_currency)
    {
        $this->container['vat_exempt_total_in_base_currency'] = $vat_exempt_total_in_base_currency;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return double
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param double $tax_total The top part &gt; VAT total &gt; The total amount of tax paid on the document.
     *
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets tax_total_in_base_currency
     *
     * @return double
     */
    public function getTaxTotalInBaseCurrency()
    {
        return $this->container['tax_total_in_base_currency'];
    }

    /**
     * Sets tax_total_in_base_currency
     *
     * @param double $tax_total_in_base_currency tax_total_in_base_currency
     *
     * @return $this
     */
    public function setTaxTotalInBaseCurrency($tax_total_in_base_currency)
    {
        $this->container['tax_total_in_base_currency'] = $tax_total_in_base_currency;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return double
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param double $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets discount_total
     *
     * @return double
     */
    public function getDiscountTotal()
    {
        return $this->container['discount_total'];
    }

    /**
     * Sets discount_total
     *
     * @param double $discount_total discount_total
     *
     * @return $this
     */
    public function setDiscountTotal($discount_total)
    {
        $this->container['discount_total'] = $discount_total;

        return $this;
    }

    /**
     * Gets discount_total_in_base_currency
     *
     * @return double
     */
    public function getDiscountTotalInBaseCurrency()
    {
        return $this->container['discount_total_in_base_currency'];
    }

    /**
     * Sets discount_total_in_base_currency
     *
     * @param double $discount_total_in_base_currency discount_total_in_base_currency
     *
     * @return $this
     */
    public function setDiscountTotalInBaseCurrency($discount_total_in_base_currency)
    {
        $this->container['discount_total_in_base_currency'] = $discount_total_in_base_currency;

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
     * @param \DateTime $last_modified_date_time Background information collected from the system.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

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
     * @param object $branch_number Mandatory field: Document details tab &gt; Branch* &gt; The branch of the company.
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
     * @param string $note Icon Notes on top of the window &gt; Pop-up window for providing any user-defined text connected to the order.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


