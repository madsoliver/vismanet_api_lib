<?php
/**
 * StocktakePagingQueryParameters
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
 * StocktakePagingQueryParameters Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StocktakePagingQueryParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StocktakePagingQueryParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warehouse' => 'string',
        'location' => 'string',
        'inventory' => 'string',
        'lot_serial_number' => 'string',
        'summary_status' => 'string',
        'start_with_line' => 'int',
        'end_with_line' => 'int',
        'freeze_date_time' => 'string',
        'freeze_date_time_condition' => 'string',
        'last_modified_date_time' => 'string',
        'last_modified_date_time_condition' => 'string',
        'expiration_date_time' => 'string',
        'expiration_date_time_condition' => 'string',
        'status' => 'string',
        'page_number' => 'int',
        'page_size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warehouse' => null,
        'location' => null,
        'inventory' => null,
        'lot_serial_number' => null,
        'summary_status' => null,
        'start_with_line' => 'int32',
        'end_with_line' => 'int32',
        'freeze_date_time' => null,
        'freeze_date_time_condition' => null,
        'last_modified_date_time' => null,
        'last_modified_date_time_condition' => null,
        'expiration_date_time' => null,
        'expiration_date_time_condition' => null,
        'status' => null,
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
        'warehouse' => 'warehouse',
        'location' => 'location',
        'inventory' => 'inventory',
        'lot_serial_number' => 'lotSerialNumber',
        'summary_status' => 'summaryStatus',
        'start_with_line' => 'startWithLine',
        'end_with_line' => 'endWithLine',
        'freeze_date_time' => 'freezeDateTime',
        'freeze_date_time_condition' => 'freezeDateTimeCondition',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'last_modified_date_time_condition' => 'lastModifiedDateTimeCondition',
        'expiration_date_time' => 'expirationDateTime',
        'expiration_date_time_condition' => 'expirationDateTimeCondition',
        'status' => 'status',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse' => 'setWarehouse',
        'location' => 'setLocation',
        'inventory' => 'setInventory',
        'lot_serial_number' => 'setLotSerialNumber',
        'summary_status' => 'setSummaryStatus',
        'start_with_line' => 'setStartWithLine',
        'end_with_line' => 'setEndWithLine',
        'freeze_date_time' => 'setFreezeDateTime',
        'freeze_date_time_condition' => 'setFreezeDateTimeCondition',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'last_modified_date_time_condition' => 'setLastModifiedDateTimeCondition',
        'expiration_date_time' => 'setExpirationDateTime',
        'expiration_date_time_condition' => 'setExpirationDateTimeCondition',
        'status' => 'setStatus',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse' => 'getWarehouse',
        'location' => 'getLocation',
        'inventory' => 'getInventory',
        'lot_serial_number' => 'getLotSerialNumber',
        'summary_status' => 'getSummaryStatus',
        'start_with_line' => 'getStartWithLine',
        'end_with_line' => 'getEndWithLine',
        'freeze_date_time' => 'getFreezeDateTime',
        'freeze_date_time_condition' => 'getFreezeDateTimeCondition',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'last_modified_date_time_condition' => 'getLastModifiedDateTimeCondition',
        'expiration_date_time' => 'getExpirationDateTime',
        'expiration_date_time_condition' => 'getExpirationDateTimeCondition',
        'status' => 'getStatus',
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

    const SUMMARY_STATUS_CANCELLED = 'Cancelled';
    const SUMMARY_STATUS_COMPLETED = 'Completed';
    const SUMMARY_STATUS_COUNTING = 'Counting';
    const SUMMARY_STATUS_ENTERING = 'Entering';
    const STATUS_NOT_ENTERED = 'NotEntered';
    const STATUS_ENTERED = 'Entered';
    const STATUS_SKIPPED = 'Skipped';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSummaryStatusAllowableValues()
    {
        return [
            self::SUMMARY_STATUS_CANCELLED,
            self::SUMMARY_STATUS_COMPLETED,
            self::SUMMARY_STATUS_COUNTING,
            self::SUMMARY_STATUS_ENTERING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_ENTERED,
            self::STATUS_ENTERED,
            self::STATUS_SKIPPED,
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
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['lot_serial_number'] = isset($data['lot_serial_number']) ? $data['lot_serial_number'] : null;
        $this->container['summary_status'] = isset($data['summary_status']) ? $data['summary_status'] : null;
        $this->container['start_with_line'] = isset($data['start_with_line']) ? $data['start_with_line'] : null;
        $this->container['end_with_line'] = isset($data['end_with_line']) ? $data['end_with_line'] : null;
        $this->container['freeze_date_time'] = isset($data['freeze_date_time']) ? $data['freeze_date_time'] : null;
        $this->container['freeze_date_time_condition'] = isset($data['freeze_date_time_condition']) ? $data['freeze_date_time_condition'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['last_modified_date_time_condition'] = isset($data['last_modified_date_time_condition']) ? $data['last_modified_date_time_condition'] : null;
        $this->container['expiration_date_time'] = isset($data['expiration_date_time']) ? $data['expiration_date_time'] : null;
        $this->container['expiration_date_time_condition'] = isset($data['expiration_date_time_condition']) ? $data['expiration_date_time_condition'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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

        $allowedValues = $this->getSummaryStatusAllowableValues();
        if (!is_null($this->container['summary_status']) && !in_array($this->container['summary_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'summary_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse Filter by Warehouse.
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Filter by Location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return string
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param string $inventory Filter by Inventory.
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets lot_serial_number
     *
     * @return string
     */
    public function getLotSerialNumber()
    {
        return $this->container['lot_serial_number'];
    }

    /**
     * Sets lot_serial_number
     *
     * @param string $lot_serial_number Filter by LotSerialNumber.
     *
     * @return $this
     */
    public function setLotSerialNumber($lot_serial_number)
    {
        $this->container['lot_serial_number'] = $lot_serial_number;

        return $this;
    }

    /**
     * Gets summary_status
     *
     * @return string
     */
    public function getSummaryStatus()
    {
        return $this->container['summary_status'];
    }

    /**
     * Sets summary_status
     *
     * @param string $summary_status Filter by SummaryStatus.
     *
     * @return $this
     */
    public function setSummaryStatus($summary_status)
    {
        $allowedValues = $this->getSummaryStatusAllowableValues();
        if (!is_null($summary_status) && !in_array($summary_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'summary_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['summary_status'] = $summary_status;

        return $this;
    }

    /**
     * Gets start_with_line
     *
     * @return int
     */
    public function getStartWithLine()
    {
        return $this->container['start_with_line'];
    }

    /**
     * Sets start_with_line
     *
     * @param int $start_with_line Filter by LineNumber GreaterEqual StartWithLine.
     *
     * @return $this
     */
    public function setStartWithLine($start_with_line)
    {
        $this->container['start_with_line'] = $start_with_line;

        return $this;
    }

    /**
     * Gets end_with_line
     *
     * @return int
     */
    public function getEndWithLine()
    {
        return $this->container['end_with_line'];
    }

    /**
     * Sets end_with_line
     *
     * @param int $end_with_line Filter by by LineNumber LessEqual EndWithLine.
     *
     * @return $this
     */
    public function setEndWithLine($end_with_line)
    {
        $this->container['end_with_line'] = $end_with_line;

        return $this;
    }

    /**
     * Gets freeze_date_time
     *
     * @return string
     */
    public function getFreezeDateTime()
    {
        return $this->container['freeze_date_time'];
    }

    /**
     * Sets freeze_date_time
     *
     * @param string $freeze_date_time Filter by FreezeDateTime.
     *
     * @return $this
     */
    public function setFreezeDateTime($freeze_date_time)
    {
        $this->container['freeze_date_time'] = $freeze_date_time;

        return $this;
    }

    /**
     * Gets freeze_date_time_condition
     *
     * @return string
     */
    public function getFreezeDateTimeCondition()
    {
        return $this->container['freeze_date_time_condition'];
    }

    /**
     * Sets freeze_date_time_condition
     *
     * @param string $freeze_date_time_condition Filter by FreezeDateTimeCondition.
     *
     * @return $this
     */
    public function setFreezeDateTimeCondition($freeze_date_time_condition)
    {
        $this->container['freeze_date_time_condition'] = $freeze_date_time_condition;

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
     * @param string $last_modified_date_time System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present..
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
     * @param string $last_modified_date_time_condition System retrieved information for state/condition.
     *
     * @return $this
     */
    public function setLastModifiedDateTimeCondition($last_modified_date_time_condition)
    {
        $this->container['last_modified_date_time_condition'] = $last_modified_date_time_condition;

        return $this;
    }

    /**
     * Gets expiration_date_time
     *
     * @return string
     */
    public function getExpirationDateTime()
    {
        return $this->container['expiration_date_time'];
    }

    /**
     * Sets expiration_date_time
     *
     * @param string $expiration_date_time Filter by ExpirationDateTime.
     *
     * @return $this
     */
    public function setExpirationDateTime($expiration_date_time)
    {
        $this->container['expiration_date_time'] = $expiration_date_time;

        return $this;
    }

    /**
     * Gets expiration_date_time_condition
     *
     * @return string
     */
    public function getExpirationDateTimeCondition()
    {
        return $this->container['expiration_date_time_condition'];
    }

    /**
     * Sets expiration_date_time_condition
     *
     * @param string $expiration_date_time_condition Filter by ExpirationDateTimeCondition.
     *
     * @return $this
     */
    public function setExpirationDateTimeCondition($expiration_date_time_condition)
    {
        $this->container['expiration_date_time_condition'] = $expiration_date_time_condition;

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
     * @param string $status Filter by StocktakeLineStatus.
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

