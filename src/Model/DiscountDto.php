<?php
/**
 * DiscountDto
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
 * DiscountDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscountDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_code' => 'string',
        'series' => 'string',
        'description' => 'string',
        'discount_by' => 'string',
        'break_by' => 'string',
        'promotional' => 'bool',
        'active' => 'bool',
        'prorate_discount' => 'bool',
        'effective_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'last_update_date' => '\DateTime',
        'free_item' => 'int',
        'pending_free_item' => 'int',
        'last_free_item' => 'int',
        'line_cntr' => 'int',
        'created_date_time' => '\DateTime',
        'last_modified_date_time' => '\DateTime',
        'discount_breakpoints' => '\Ekstralys\VismaNetApi\Model\DiscountBreakpointDto[]',
        'customers' => '\Ekstralys\VismaNetApi\Model\DiscountCustomer2Dto[]',
        'items' => '\Ekstralys\VismaNetApi\Model\DiscountItemDto[]',
        'warehouses' => '\Ekstralys\VismaNetApi\Model\DiscountWarehouseDto[]',
        'customer_price_classes' => '\Ekstralys\VismaNetApi\Model\DiscountCustomerPriceClassDto[]',
        'item_price_classes' => '\Ekstralys\VismaNetApi\Model\DiscountItemPriceClassDto[]',
        'branches' => '\Ekstralys\VismaNetApi\Model\DiscountBranchDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_code' => null,
        'series' => null,
        'description' => null,
        'discount_by' => null,
        'break_by' => null,
        'promotional' => null,
        'active' => null,
        'prorate_discount' => null,
        'effective_date' => 'date-time',
        'expiration_date' => 'date-time',
        'last_update_date' => 'date-time',
        'free_item' => 'int32',
        'pending_free_item' => 'int32',
        'last_free_item' => 'int32',
        'line_cntr' => 'int32',
        'created_date_time' => 'date-time',
        'last_modified_date_time' => 'date-time',
        'discount_breakpoints' => null,
        'customers' => null,
        'items' => null,
        'warehouses' => null,
        'customer_price_classes' => null,
        'item_price_classes' => null,
        'branches' => null
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
        'series' => 'series',
        'description' => 'description',
        'discount_by' => 'discountBy',
        'break_by' => 'breakBy',
        'promotional' => 'promotional',
        'active' => 'active',
        'prorate_discount' => 'prorateDiscount',
        'effective_date' => 'effectiveDate',
        'expiration_date' => 'expirationDate',
        'last_update_date' => 'lastUpdateDate',
        'free_item' => 'freeItem',
        'pending_free_item' => 'pendingFreeItem',
        'last_free_item' => 'lastFreeItem',
        'line_cntr' => 'lineCntr',
        'created_date_time' => 'createdDateTime',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'discount_breakpoints' => 'discountBreakpoints',
        'customers' => 'customers',
        'items' => 'items',
        'warehouses' => 'warehouses',
        'customer_price_classes' => 'customerPriceClasses',
        'item_price_classes' => 'itemPriceClasses',
        'branches' => 'branches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_code' => 'setDiscountCode',
        'series' => 'setSeries',
        'description' => 'setDescription',
        'discount_by' => 'setDiscountBy',
        'break_by' => 'setBreakBy',
        'promotional' => 'setPromotional',
        'active' => 'setActive',
        'prorate_discount' => 'setProrateDiscount',
        'effective_date' => 'setEffectiveDate',
        'expiration_date' => 'setExpirationDate',
        'last_update_date' => 'setLastUpdateDate',
        'free_item' => 'setFreeItem',
        'pending_free_item' => 'setPendingFreeItem',
        'last_free_item' => 'setLastFreeItem',
        'line_cntr' => 'setLineCntr',
        'created_date_time' => 'setCreatedDateTime',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'discount_breakpoints' => 'setDiscountBreakpoints',
        'customers' => 'setCustomers',
        'items' => 'setItems',
        'warehouses' => 'setWarehouses',
        'customer_price_classes' => 'setCustomerPriceClasses',
        'item_price_classes' => 'setItemPriceClasses',
        'branches' => 'setBranches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_code' => 'getDiscountCode',
        'series' => 'getSeries',
        'description' => 'getDescription',
        'discount_by' => 'getDiscountBy',
        'break_by' => 'getBreakBy',
        'promotional' => 'getPromotional',
        'active' => 'getActive',
        'prorate_discount' => 'getProrateDiscount',
        'effective_date' => 'getEffectiveDate',
        'expiration_date' => 'getExpirationDate',
        'last_update_date' => 'getLastUpdateDate',
        'free_item' => 'getFreeItem',
        'pending_free_item' => 'getPendingFreeItem',
        'last_free_item' => 'getLastFreeItem',
        'line_cntr' => 'getLineCntr',
        'created_date_time' => 'getCreatedDateTime',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'discount_breakpoints' => 'getDiscountBreakpoints',
        'customers' => 'getCustomers',
        'items' => 'getItems',
        'warehouses' => 'getWarehouses',
        'customer_price_classes' => 'getCustomerPriceClasses',
        'item_price_classes' => 'getItemPriceClasses',
        'branches' => 'getBranches'
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
        $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_by'] = isset($data['discount_by']) ? $data['discount_by'] : null;
        $this->container['break_by'] = isset($data['break_by']) ? $data['break_by'] : null;
        $this->container['promotional'] = isset($data['promotional']) ? $data['promotional'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['prorate_discount'] = isset($data['prorate_discount']) ? $data['prorate_discount'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['last_update_date'] = isset($data['last_update_date']) ? $data['last_update_date'] : null;
        $this->container['free_item'] = isset($data['free_item']) ? $data['free_item'] : null;
        $this->container['pending_free_item'] = isset($data['pending_free_item']) ? $data['pending_free_item'] : null;
        $this->container['last_free_item'] = isset($data['last_free_item']) ? $data['last_free_item'] : null;
        $this->container['line_cntr'] = isset($data['line_cntr']) ? $data['line_cntr'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['discount_breakpoints'] = isset($data['discount_breakpoints']) ? $data['discount_breakpoints'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['warehouses'] = isset($data['warehouses']) ? $data['warehouses'] : null;
        $this->container['customer_price_classes'] = isset($data['customer_price_classes']) ? $data['customer_price_classes'] : null;
        $this->container['item_price_classes'] = isset($data['item_price_classes']) ? $data['item_price_classes'] : null;
        $this->container['branches'] = isset($data['branches']) ? $data['branches'] : null;
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
     * @param string $discount_code Mandatory field: The top part &gt; Discount code &gt; The code of the discount for which you want to create a new series or view an existing one.
     *
     * @return $this
     */
    public function setDiscountCode($discount_code)
    {
        $this->container['discount_code'] = $discount_code;

        return $this;
    }

    /**
     * Gets series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param string $series Mandatory field: The top part &gt; Series &gt; The ID of the series defined for the discount.
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

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
     * @param string $description The top part &gt; Description &gt; A brief description of the series.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_by
     *
     * @return string
     */
    public function getDiscountBy()
    {
        return $this->container['discount_by'];
    }

    /**
     * Sets discount_by
     *
     * @param string $discount_by The top part &gt; Discount by &gt; The way the discount for the series is specified. Percent, Amount, Free item.
     *
     * @return $this
     */
    public function setDiscountBy($discount_by)
    {
        $this->container['discount_by'] = $discount_by;

        return $this;
    }

    /**
     * Gets break_by
     *
     * @return string
     */
    public function getBreakBy()
    {
        return $this->container['break_by'];
    }

    /**
     * Sets break_by
     *
     * @param string $break_by The top part &gt; Break by &gt; The way the breakpoints for this discount series are specified. Quantity, Amount.
     *
     * @return $this
     */
    public function setBreakBy($break_by)
    {
        $this->container['break_by'] = $break_by;

        return $this;
    }

    /**
     * Gets promotional
     *
     * @return bool
     */
    public function getPromotional()
    {
        return $this->container['promotional'];
    }

    /**
     * Sets promotional
     *
     * @param bool $promotional The top part &gt; Promotional &gt; A check box that indicates (if selected) that the series is a promotional discount.
     *
     * @return $this
     */
    public function setPromotional($promotional)
    {
        $this->container['promotional'] = $promotional;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active The top part &gt; Active &gt; A check box that indicates (if selected) that the series is active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets prorate_discount
     *
     * @return bool
     */
    public function getProrateDiscount()
    {
        return $this->container['prorate_discount'];
    }

    /**
     * Sets prorate_discount
     *
     * @param bool $prorate_discount The top part &gt; Prorate discount &gt; A check box that indicates (if selected) that the discount can be prorated.
     *
     * @return $this
     */
    public function setProrateDiscount($prorate_discount)
    {
        $this->container['prorate_discount'] = $prorate_discount;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date The top part &gt; Effective date &gt; The date when the series becomes effective; this field appears for promotional discount series only.
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date The top part &gt; Expiration date &gt; The date when the promotional discount expires. This field appears for the series if the Promotional check box is selected.
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets last_update_date
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date
     *
     * @param \DateTime $last_update_date The top part &gt; Last update date &gt; A read-only field that shows the date when the discount series was last updated.
     *
     * @return $this
     */
    public function setLastUpdateDate($last_update_date)
    {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
    }

    /**
     * Gets free_item
     *
     * @return int
     */
    public function getFreeItem()
    {
        return $this->container['free_item'];
    }

    /**
     * Sets free_item
     *
     * @param int $free_item Free item tab &gt; Free item &gt; The free item (by its item ID) that is added to orders as the discount for this series.
     *
     * @return $this
     */
    public function setFreeItem($free_item)
    {
        $this->container['free_item'] = $free_item;

        return $this;
    }

    /**
     * Gets pending_free_item
     *
     * @return int
     */
    public function getPendingFreeItem()
    {
        return $this->container['pending_free_item'];
    }

    /**
     * Sets pending_free_item
     *
     * @param int $pending_free_item Free item tab &gt; Pending free item &gt; The free item (by its item ID) that will be added to orders as the discount for this series, starting on the date specified in the Pending date column on the Discount breakpoints tab.
     *
     * @return $this
     */
    public function setPendingFreeItem($pending_free_item)
    {
        $this->container['pending_free_item'] = $pending_free_item;

        return $this;
    }

    /**
     * Gets last_free_item
     *
     * @return int
     */
    public function getLastFreeItem()
    {
        return $this->container['last_free_item'];
    }

    /**
     * Sets last_free_item
     *
     * @param int $last_free_item Free item tab &gt; Last free item &gt; The free item (by its item ID) that had been added to orders as the discount for this series before the date shown in the Last date column on the Discount breakpoints tab.
     *
     * @return $this
     */
    public function setLastFreeItem($last_free_item)
    {
        $this->container['last_free_item'] = $last_free_item;

        return $this;
    }

    /**
     * Gets line_cntr
     *
     * @return int
     */
    public function getLineCntr()
    {
        return $this->container['line_cntr'];
    }

    /**
     * Sets line_cntr
     *
     * @param int $line_cntr Free item tab &gt; A line counter for the table.
     *
     * @return $this
     */
    public function setLineCntr($line_cntr)
    {
        $this->container['line_cntr'] = $line_cntr;

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
     * @param \DateTime $last_modified_date_time Free item tab &gt; Last update date &gt; A read-only field that shows the date when this discount series has been updated last.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets discount_breakpoints
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountBreakpointDto[]
     */
    public function getDiscountBreakpoints()
    {
        return $this->container['discount_breakpoints'];
    }

    /**
     * Sets discount_breakpoints
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountBreakpointDto[] $discount_breakpoints discount_breakpoints
     *
     * @return $this
     */
    public function setDiscountBreakpoints($discount_breakpoints)
    {
        $this->container['discount_breakpoints'] = $discount_breakpoints;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountCustomer2Dto[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountCustomer2Dto[] $customers Customers tab &gt; Customer &gt; The customer to which the series is applicable.
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountItemDto[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountItemDto[] $items Items tab &gt; Items ID &gt; The stock or non-stock item, by its item ID, to which the series can be applied.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets warehouses
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountWarehouseDto[]
     */
    public function getWarehouses()
    {
        return $this->container['warehouses'];
    }

    /**
     * Sets warehouses
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountWarehouseDto[] $warehouses Warehouses tab &gt; Warehouse ID &gt; The warehouse to which the series can be applied.
     *
     * @return $this
     */
    public function setWarehouses($warehouses)
    {
        $this->container['warehouses'] = $warehouses;

        return $this;
    }

    /**
     * Gets customer_price_classes
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountCustomerPriceClassDto[]
     */
    public function getCustomerPriceClasses()
    {
        return $this->container['customer_price_classes'];
    }

    /**
     * Sets customer_price_classes
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountCustomerPriceClassDto[] $customer_price_classes Customer price classes tab &gt; Customer price class ID &gt; The customer price class to which the series is applicable.
     *
     * @return $this
     */
    public function setCustomerPriceClasses($customer_price_classes)
    {
        $this->container['customer_price_classes'] = $customer_price_classes;

        return $this;
    }

    /**
     * Gets item_price_classes
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountItemPriceClassDto[]
     */
    public function getItemPriceClasses()
    {
        return $this->container['item_price_classes'];
    }

    /**
     * Sets item_price_classes
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountItemPriceClassDto[] $item_price_classes Item price classes tab &gt; Price class ID &gt; The item price class to which the series is applicable.
     *
     * @return $this
     */
    public function setItemPriceClasses($item_price_classes)
    {
        $this->container['item_price_classes'] = $item_price_classes;

        return $this;
    }

    /**
     * Gets branches
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountBranchDto[]
     */
    public function getBranches()
    {
        return $this->container['branches'];
    }

    /**
     * Sets branches
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountBranchDto[] $branches Branches tab &gt; Branch &gt; The branch to which the series can be applied.
     *
     * @return $this
     */
    public function setBranches($branches)
    {
        $this->container['branches'] = $branches;

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


