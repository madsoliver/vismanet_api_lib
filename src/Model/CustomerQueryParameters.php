<?php
/**
 * CustomerQueryParameters
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
 * CustomerQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'greater_than_value' => 'string',
        'number_to_read' => 'int',
        'skip_records' => 'int',
        'name' => 'string',
        'status' => 'string',
        'corporate_id' => 'string',
        'vat_registration_id' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string',
        'created_date_time' => 'string',
        'created_date_time_condition' => 'string',
        'expand_account_information' => 'bool',
        'expand_payment_methods' => 'bool',
        'expand_direct_debit' => 'bool',
        'attributes' => 'string',
        'page_number' => 'int',
        'page_size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'greater_than_value' => null,
        'number_to_read' => 'int32',
        'skip_records' => 'int32',
        'name' => null,
        'status' => null,
        'corporate_id' => null,
        'vat_registration_id' => null,
        'email' => null,
        'phone' => null,
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null,
        'created_date_time' => null,
        'created_date_time_condition' => null,
        'expand_account_information' => null,
        'expand_payment_methods' => null,
        'expand_direct_debit' => null,
        'attributes' => null,
        'page_number' => 'int32',
        'page_size' => 'int32'
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
        'greater_than_value' => 'greaterThanValue',
        'number_to_read' => 'numberToRead',
        'skip_records' => 'skipRecords',
        'name' => 'name',
        'status' => 'status',
        'corporate_id' => 'corporateId',
        'vat_registration_id' => 'vatRegistrationId',
        'email' => 'email',
        'phone' => 'phone',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition',
        'created_date_time' => 'createdDateTime',
        'created_date_time_condition' => 'createdDateTimeCondition',
        'expand_account_information' => 'expandAccountInformation',
        'expand_payment_methods' => 'expandPaymentMethods',
        'expand_direct_debit' => 'expandDirectDebit',
        'attributes' => 'attributes',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'greater_than_value' => 'setGreaterThanValue',
        'number_to_read' => 'setNumberToRead',
        'skip_records' => 'setSkipRecords',
        'name' => 'setName',
        'status' => 'setStatus',
        'corporate_id' => 'setCorporateId',
        'vat_registration_id' => 'setVatRegistrationId',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition',
        'created_date_time' => 'setCreatedDateTime',
        'created_date_time_condition' => 'setCreatedDateTimeCondition',
        'expand_account_information' => 'setExpandAccountInformation',
        'expand_payment_methods' => 'setExpandPaymentMethods',
        'expand_direct_debit' => 'setExpandDirectDebit',
        'attributes' => 'setAttributes',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'greater_than_value' => 'getGreaterThanValue',
        'number_to_read' => 'getNumberToRead',
        'skip_records' => 'getSkipRecords',
        'name' => 'getName',
        'status' => 'getStatus',
        'corporate_id' => 'getCorporateId',
        'vat_registration_id' => 'getVatRegistrationId',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition',
        'created_date_time' => 'getCreatedDateTime',
        'created_date_time_condition' => 'getCreatedDateTimeCondition',
        'expand_account_information' => 'getExpandAccountInformation',
        'expand_payment_methods' => 'getExpandPaymentMethods',
        'expand_direct_debit' => 'getExpandDirectDebit',
        'attributes' => 'getAttributes',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize'
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

    const STATUS_ACTIVE = 'Active';
    const STATUS_ON_HOLD = 'OnHold';
    const STATUS_CREDIT_HOLD = 'CreditHold';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ONE_TIME = 'OneTime';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ON_HOLD,
            self::STATUS_CREDIT_HOLD,
            self::STATUS_INACTIVE,
            self::STATUS_ONE_TIME,
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
        $this->container['greater_than_value'] = isset($data['greater_than_value']) ? $data['greater_than_value'] : null;
        $this->container['number_to_read'] = isset($data['number_to_read']) ? $data['number_to_read'] : null;
        $this->container['skip_records'] = isset($data['skip_records']) ? $data['skip_records'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['corporate_id'] = isset($data['corporate_id']) ? $data['corporate_id'] : null;
        $this->container['vat_registration_id'] = isset($data['vat_registration_id']) ? $data['vat_registration_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['created_date_time_condition'] = isset($data['created_date_time_condition']) ? $data['created_date_time_condition'] : null;
        $this->container['expand_account_information'] = isset($data['expand_account_information']) ? $data['expand_account_information'] : null;
        $this->container['expand_payment_methods'] = isset($data['expand_payment_methods']) ? $data['expand_payment_methods'] : null;
        $this->container['expand_direct_debit'] = isset($data['expand_direct_debit']) ? $data['expand_direct_debit'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
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
     * Gets greater_than_value
     *
     * @return string
     */
    public function getGreaterThanValue()
    {
        return $this->container['greater_than_value'];
    }

    /**
     * Sets greater_than_value
     *
     * @param string $greater_than_value This field does not work and has been deprecated. It will be removed in future versions.
     *
     * @return $this
     */
    public function setGreaterThanValue($greater_than_value)
    {
        $this->container['greater_than_value'] = $greater_than_value;

        return $this;
    }

    /**
     * Gets number_to_read
     *
     * @return int
     */
    public function getNumberToRead()
    {
        return $this->container['number_to_read'];
    }

    /**
     * Sets number_to_read
     *
     * @param int $number_to_read [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only {numberToRead} number of records.
     *
     * @return $this
     */
    public function setNumberToRead($number_to_read)
    {
        $this->container['number_to_read'] = $number_to_read;

        return $this;
    }

    /**
     * Gets skip_records
     *
     * @return int
     */
    public function getSkipRecords()
    {
        return $this->container['skip_records'];
    }

    /**
     * Sets skip_records
     *
     * @param int $skip_records [This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords.]  Tells the service to return only records after the first {skipRecords} number of records.
     *
     * @return $this
     */
    public function setSkipRecords($skip_records)
    {
        $this->container['skip_records'] = $skip_records;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Equals Customer name.
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
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Drop down and select Status.
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
     * Gets corporate_id
     *
     * @return string
     */
    public function getCorporateId()
    {
        return $this->container['corporate_id'];
    }

    /**
     * Sets corporate_id
     *
     * @param string $corporate_id Equals Corporate ID from Delivery settings tab.
     *
     * @return $this
     */
    public function setCorporateId($corporate_id)
    {
        $this->container['corporate_id'] = $corporate_id;

        return $this;
    }

    /**
     * Gets vat_registration_id
     *
     * @return string
     */
    public function getVatRegistrationId()
    {
        return $this->container['vat_registration_id'];
    }

    /**
     * Sets vat_registration_id
     *
     * @param string $vat_registration_id Equals VAT registration ID from Delivery settings tab.
     *
     * @return $this
     */
    public function setVatRegistrationId($vat_registration_id)
    {
        $this->container['vat_registration_id'] = $vat_registration_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Equals Email for customer.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Equals Phone 1 for customer.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return string
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param string $last_modified_date_time System retrieved information for last modified date and time.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets last_modified_date_time_condition
     *
     * @return string
     */
    public function getLastModifiedDateTimeCondition()
    {
        return $this->container['last_modified_date_time_condition'];
    }

    /**
     * Sets last_modified_date_time_condition
     *
     * @param string $last_modified_date_time_condition System retrieved information for date, time and state/condition.
     *
     * @return $this
     */
    public function setLastModifiedDateTimeCondition($last_modified_date_time_condition)
    {
        $this->container['last_modified_date_time_condition'] = $last_modified_date_time_condition;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param string $created_date_time created_date_time
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets created_date_time_condition
     *
     * @return string
     */
    public function getCreatedDateTimeCondition()
    {
        return $this->container['created_date_time_condition'];
    }

    /**
     * Sets created_date_time_condition
     *
     * @param string $created_date_time_condition created_date_time_condition
     *
     * @return $this
     */
    public function setCreatedDateTimeCondition($created_date_time_condition)
    {
        $this->container['created_date_time_condition'] = $created_date_time_condition;

        return $this;
    }

    /**
     * Gets expand_account_information
     *
     * @return bool
     */
    public function getExpandAccountInformation()
    {
        return $this->container['expand_account_information'];
    }

    /**
     * Sets expand_account_information
     *
     * @param bool $expand_account_information expand_account_information
     *
     * @return $this
     */
    public function setExpandAccountInformation($expand_account_information)
    {
        $this->container['expand_account_information'] = $expand_account_information;

        return $this;
    }

    /**
     * Gets expand_payment_methods
     *
     * @return bool
     */
    public function getExpandPaymentMethods()
    {
        return $this->container['expand_payment_methods'];
    }

    /**
     * Sets expand_payment_methods
     *
     * @param bool $expand_payment_methods expand_payment_methods
     *
     * @return $this
     */
    public function setExpandPaymentMethods($expand_payment_methods)
    {
        $this->container['expand_payment_methods'] = $expand_payment_methods;

        return $this;
    }

    /**
     * Gets expand_direct_debit
     *
     * @return bool
     */
    public function getExpandDirectDebit()
    {
        return $this->container['expand_direct_debit'];
    }

    /**
     * Sets expand_direct_debit
     *
     * @param bool $expand_direct_debit Expand direct debit info
     *
     * @return $this
     */
    public function setExpandDirectDebit($expand_direct_debit)
    {
        $this->container['expand_direct_debit'] = $expand_direct_debit;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number Pagination parameter. Page number.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size Pagination parameter. Number of items to be collected.
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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


