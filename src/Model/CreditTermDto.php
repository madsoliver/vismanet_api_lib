<?php
/**
 * CreditTermDto
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
 * CreditTermDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditTermDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditTermDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terms_id' => 'string',
        'description' => 'string',
        'visible_to' => 'string',
        'due_date_type' => 'string',
        'move_due_date_if_on_the_weekend' => 'string',
        'due_day1' => 'int',
        'due_day1_day_from1' => 'int',
        'due_day1_day_to1' => 'int',
        'due_day2' => 'int',
        'due_day2_day_from1' => 'int',
        'due_day2_day_to1' => 'int',
        'discount_type' => 'string',
        'discount_day' => 'int',
        'discount_percent' => 'double',
        'delay_days' => 'int',
        'calculation_type' => 'string',
        'instalment_type' => 'string',
        'number_of_instalments' => 'int',
        'instalment_frequency' => 'string',
        'instalment_method' => 'string',
        'instalments_schedule' => '\Ekstralys\VismaNetApi\Model\InstalmentSchedule[]',
        'created_date_time' => '\DateTime',
        'last_modified_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terms_id' => null,
        'description' => null,
        'visible_to' => null,
        'due_date_type' => null,
        'move_due_date_if_on_the_weekend' => null,
        'due_day1' => 'int32',
        'due_day1_day_from1' => 'int32',
        'due_day1_day_to1' => 'int32',
        'due_day2' => 'int32',
        'due_day2_day_from1' => 'int32',
        'due_day2_day_to1' => 'int32',
        'discount_type' => null,
        'discount_day' => 'int32',
        'discount_percent' => 'double',
        'delay_days' => 'int32',
        'calculation_type' => null,
        'instalment_type' => null,
        'number_of_instalments' => 'int32',
        'instalment_frequency' => null,
        'instalment_method' => null,
        'instalments_schedule' => null,
        'created_date_time' => 'date-time',
        'last_modified_date_time' => 'date-time'
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
        'terms_id' => 'termsId',
        'description' => 'description',
        'visible_to' => 'visibleTo',
        'due_date_type' => 'dueDateType',
        'move_due_date_if_on_the_weekend' => 'moveDueDateIfOnTheWeekend',
        'due_day1' => 'dueDay1',
        'due_day1_day_from1' => 'dueDay1DayFrom1',
        'due_day1_day_to1' => 'dueDay1DayTo1',
        'due_day2' => 'dueDay2',
        'due_day2_day_from1' => 'dueDay2DayFrom1',
        'due_day2_day_to1' => 'dueDay2DayTo1',
        'discount_type' => 'discountType',
        'discount_day' => 'discountDay',
        'discount_percent' => 'discountPercent',
        'delay_days' => 'delayDays',
        'calculation_type' => 'calculationType',
        'instalment_type' => 'instalmentType',
        'number_of_instalments' => 'numberOfInstalments',
        'instalment_frequency' => 'instalmentFrequency',
        'instalment_method' => 'instalmentMethod',
        'instalments_schedule' => 'instalmentsSchedule',
        'created_date_time' => 'createdDateTime',
        'last_modified_date_time' => 'lastModifiedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terms_id' => 'setTermsId',
        'description' => 'setDescription',
        'visible_to' => 'setVisibleTo',
        'due_date_type' => 'setDueDateType',
        'move_due_date_if_on_the_weekend' => 'setMoveDueDateIfOnTheWeekend',
        'due_day1' => 'setDueDay1',
        'due_day1_day_from1' => 'setDueDay1DayFrom1',
        'due_day1_day_to1' => 'setDueDay1DayTo1',
        'due_day2' => 'setDueDay2',
        'due_day2_day_from1' => 'setDueDay2DayFrom1',
        'due_day2_day_to1' => 'setDueDay2DayTo1',
        'discount_type' => 'setDiscountType',
        'discount_day' => 'setDiscountDay',
        'discount_percent' => 'setDiscountPercent',
        'delay_days' => 'setDelayDays',
        'calculation_type' => 'setCalculationType',
        'instalment_type' => 'setInstalmentType',
        'number_of_instalments' => 'setNumberOfInstalments',
        'instalment_frequency' => 'setInstalmentFrequency',
        'instalment_method' => 'setInstalmentMethod',
        'instalments_schedule' => 'setInstalmentsSchedule',
        'created_date_time' => 'setCreatedDateTime',
        'last_modified_date_time' => 'setLastModifiedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terms_id' => 'getTermsId',
        'description' => 'getDescription',
        'visible_to' => 'getVisibleTo',
        'due_date_type' => 'getDueDateType',
        'move_due_date_if_on_the_weekend' => 'getMoveDueDateIfOnTheWeekend',
        'due_day1' => 'getDueDay1',
        'due_day1_day_from1' => 'getDueDay1DayFrom1',
        'due_day1_day_to1' => 'getDueDay1DayTo1',
        'due_day2' => 'getDueDay2',
        'due_day2_day_from1' => 'getDueDay2DayFrom1',
        'due_day2_day_to1' => 'getDueDay2DayTo1',
        'discount_type' => 'getDiscountType',
        'discount_day' => 'getDiscountDay',
        'discount_percent' => 'getDiscountPercent',
        'delay_days' => 'getDelayDays',
        'calculation_type' => 'getCalculationType',
        'instalment_type' => 'getInstalmentType',
        'number_of_instalments' => 'getNumberOfInstalments',
        'instalment_frequency' => 'getInstalmentFrequency',
        'instalment_method' => 'getInstalmentMethod',
        'instalments_schedule' => 'getInstalmentsSchedule',
        'created_date_time' => 'getCreatedDateTime',
        'last_modified_date_time' => 'getLastModifiedDateTime'
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
        $this->container['terms_id'] = isset($data['terms_id']) ? $data['terms_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['due_date_type'] = isset($data['due_date_type']) ? $data['due_date_type'] : null;
        $this->container['move_due_date_if_on_the_weekend'] = isset($data['move_due_date_if_on_the_weekend']) ? $data['move_due_date_if_on_the_weekend'] : null;
        $this->container['due_day1'] = isset($data['due_day1']) ? $data['due_day1'] : null;
        $this->container['due_day1_day_from1'] = isset($data['due_day1_day_from1']) ? $data['due_day1_day_from1'] : null;
        $this->container['due_day1_day_to1'] = isset($data['due_day1_day_to1']) ? $data['due_day1_day_to1'] : null;
        $this->container['due_day2'] = isset($data['due_day2']) ? $data['due_day2'] : null;
        $this->container['due_day2_day_from1'] = isset($data['due_day2_day_from1']) ? $data['due_day2_day_from1'] : null;
        $this->container['due_day2_day_to1'] = isset($data['due_day2_day_to1']) ? $data['due_day2_day_to1'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['discount_day'] = isset($data['discount_day']) ? $data['discount_day'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['delay_days'] = isset($data['delay_days']) ? $data['delay_days'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['instalment_type'] = isset($data['instalment_type']) ? $data['instalment_type'] : null;
        $this->container['number_of_instalments'] = isset($data['number_of_instalments']) ? $data['number_of_instalments'] : null;
        $this->container['instalment_frequency'] = isset($data['instalment_frequency']) ? $data['instalment_frequency'] : null;
        $this->container['instalment_method'] = isset($data['instalment_method']) ? $data['instalment_method'] : null;
        $this->container['instalments_schedule'] = isset($data['instalments_schedule']) ? $data['instalments_schedule'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
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
     * Gets terms_id
     *
     * @return string
     */
    public function getTermsId()
    {
        return $this->container['terms_id'];
    }

    /**
     * Sets terms_id
     *
     * @param string $terms_id terms_id
     *
     * @return $this
     */
    public function setTermsId($terms_id)
    {
        $this->container['terms_id'] = $terms_id;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return string
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param string $visible_to VisibleTo: AL - All, VE - Suppliers, CU - Customers, DS - Disabled
     *
     * @return $this
     */
    public function setVisibleTo($visible_to)
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets due_date_type
     *
     * @return string
     */
    public function getDueDateType()
    {
        return $this->container['due_date_type'];
    }

    /**
     * Sets due_date_type
     *
     * @param string $due_date_type Due Date Type , values:  N - Fixed Number of Days,   D - Day of Next Month,   E - End of the Month,   M - End of Next Month,   T - Day of the Month,   P - Fixed Number of Days starting Next Month,   C - Custom.
     *
     * @return $this
     */
    public function setDueDateType($due_date_type)
    {
        $this->container['due_date_type'] = $due_date_type;

        return $this;
    }

    /**
     * Gets move_due_date_if_on_the_weekend
     *
     * @return string
     */
    public function getMoveDueDateIfOnTheWeekend()
    {
        return $this->container['move_due_date_if_on_the_weekend'];
    }

    /**
     * Sets move_due_date_if_on_the_weekend
     *
     * @param string $move_due_date_if_on_the_weekend Move Due Date If On The Weekend, values:  1 - Keep the exact date,   2 - Day before (Friday),    3 - Day after (Monday).
     *
     * @return $this
     */
    public function setMoveDueDateIfOnTheWeekend($move_due_date_if_on_the_weekend)
    {
        $this->container['move_due_date_if_on_the_weekend'] = $move_due_date_if_on_the_weekend;

        return $this;
    }

    /**
     * Gets due_day1
     *
     * @return int
     */
    public function getDueDay1()
    {
        return $this->container['due_day1'];
    }

    /**
     * Sets due_day1
     *
     * @param int $due_day1 due_day1
     *
     * @return $this
     */
    public function setDueDay1($due_day1)
    {
        $this->container['due_day1'] = $due_day1;

        return $this;
    }

    /**
     * Gets due_day1_day_from1
     *
     * @return int
     */
    public function getDueDay1DayFrom1()
    {
        return $this->container['due_day1_day_from1'];
    }

    /**
     * Sets due_day1_day_from1
     *
     * @param int $due_day1_day_from1 due_day1_day_from1
     *
     * @return $this
     */
    public function setDueDay1DayFrom1($due_day1_day_from1)
    {
        $this->container['due_day1_day_from1'] = $due_day1_day_from1;

        return $this;
    }

    /**
     * Gets due_day1_day_to1
     *
     * @return int
     */
    public function getDueDay1DayTo1()
    {
        return $this->container['due_day1_day_to1'];
    }

    /**
     * Sets due_day1_day_to1
     *
     * @param int $due_day1_day_to1 due_day1_day_to1
     *
     * @return $this
     */
    public function setDueDay1DayTo1($due_day1_day_to1)
    {
        $this->container['due_day1_day_to1'] = $due_day1_day_to1;

        return $this;
    }

    /**
     * Gets due_day2
     *
     * @return int
     */
    public function getDueDay2()
    {
        return $this->container['due_day2'];
    }

    /**
     * Sets due_day2
     *
     * @param int $due_day2 due_day2
     *
     * @return $this
     */
    public function setDueDay2($due_day2)
    {
        $this->container['due_day2'] = $due_day2;

        return $this;
    }

    /**
     * Gets due_day2_day_from1
     *
     * @return int
     */
    public function getDueDay2DayFrom1()
    {
        return $this->container['due_day2_day_from1'];
    }

    /**
     * Sets due_day2_day_from1
     *
     * @param int $due_day2_day_from1 due_day2_day_from1
     *
     * @return $this
     */
    public function setDueDay2DayFrom1($due_day2_day_from1)
    {
        $this->container['due_day2_day_from1'] = $due_day2_day_from1;

        return $this;
    }

    /**
     * Gets due_day2_day_to1
     *
     * @return int
     */
    public function getDueDay2DayTo1()
    {
        return $this->container['due_day2_day_to1'];
    }

    /**
     * Sets due_day2_day_to1
     *
     * @param int $due_day2_day_to1 due_day2_day_to1
     *
     * @return $this
     */
    public function setDueDay2DayTo1($due_day2_day_to1)
    {
        $this->container['due_day2_day_to1'] = $due_day2_day_to1;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type Discount Type , values:  N - Fixed Number of Days,   D - Day of Next Month,   E - End of the Month,   M - End of Next Month,   T - Day of the Month,   P - Fixed Number of Days starting Next Month.
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets discount_day
     *
     * @return int
     */
    public function getDiscountDay()
    {
        return $this->container['discount_day'];
    }

    /**
     * Sets discount_day
     *
     * @param int $discount_day discount_day
     *
     * @return $this
     */
    public function setDiscountDay($discount_day)
    {
        $this->container['discount_day'] = $discount_day;

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
     * @param double $discount_percent discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets delay_days
     *
     * @return int
     */
    public function getDelayDays()
    {
        return $this->container['delay_days'];
    }

    /**
     * Sets delay_days
     *
     * @param int $delay_days delay_days
     *
     * @return $this
     */
    public function setDelayDays($delay_days)
    {
        $this->container['delay_days'] = $delay_days;

        return $this;
    }

    /**
     * Gets calculation_type
     *
     * @return string
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param string $calculation_type Calculation Type: G - Gross amount, N - Net amount
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {
        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }

    /**
     * Gets instalment_type
     *
     * @return string
     */
    public function getInstalmentType()
    {
        return $this->container['instalment_type'];
    }

    /**
     * Sets instalment_type
     *
     * @param string $instalment_type Instalment Type: S - Simple, M - Multiple
     *
     * @return $this
     */
    public function setInstalmentType($instalment_type)
    {
        $this->container['instalment_type'] = $instalment_type;

        return $this;
    }

    /**
     * Gets number_of_instalments
     *
     * @return int
     */
    public function getNumberOfInstalments()
    {
        return $this->container['number_of_instalments'];
    }

    /**
     * Sets number_of_instalments
     *
     * @param int $number_of_instalments number_of_instalments
     *
     * @return $this
     */
    public function setNumberOfInstalments($number_of_instalments)
    {
        $this->container['number_of_instalments'] = $number_of_instalments;

        return $this;
    }

    /**
     * Gets instalment_frequency
     *
     * @return string
     */
    public function getInstalmentFrequency()
    {
        return $this->container['instalment_frequency'];
    }

    /**
     * Sets instalment_frequency
     *
     * @param string $instalment_frequency Instalment Frequency, values:  W - Weekly,  M - Monthly,  B - Semi-monthly (the second installment comes a half a month after the first one, and so on).
     *
     * @return $this
     */
    public function setInstalmentFrequency($instalment_frequency)
    {
        $this->container['instalment_frequency'] = $instalment_frequency;

        return $this;
    }

    /**
     * Gets instalment_method
     *
     * @return string
     */
    public function getInstalmentMethod()
    {
        return $this->container['instalment_method'];
    }

    /**
     * Sets instalment_method
     *
     * @param string $instalment_method Instalment Method, values:  E - Equal Parts,  A - All Tax in First Installment (the total amount before tax is split equally between installments and the entire amount of tax is added to the first installment),  S - Split by Percents in Table (the days and amounts of installments are defined by the related Instalments Schedule records).
     *
     * @return $this
     */
    public function setInstalmentMethod($instalment_method)
    {
        $this->container['instalment_method'] = $instalment_method;

        return $this;
    }

    /**
     * Gets instalments_schedule
     *
     * @return \Ekstralys\VismaNetApi\Model\InstalmentSchedule[]
     */
    public function getInstalmentsSchedule()
    {
        return $this->container['instalments_schedule'];
    }

    /**
     * Sets instalments_schedule
     *
     * @param \Ekstralys\VismaNetApi\Model\InstalmentSchedule[] $instalments_schedule instalments_schedule
     *
     * @return $this
     */
    public function setInstalmentsSchedule($instalments_schedule)
    {
        $this->container['instalments_schedule'] = $instalments_schedule;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime $created_date_time created_date_time
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

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
     * @param \DateTime $last_modified_date_time last_modified_date_time
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

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


