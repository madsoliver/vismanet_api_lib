<?php
/**
 * PurchaseOrderUpdateDto
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
 * PurchaseOrderUpdateDto Class Doc Comment
 *
 * @category Class
 * @description This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for creating or updating an order
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderUpdateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_destination_type' => 'object',
        'ship_to' => 'object',
        'shipping_location' => 'object',
        'shipping_contact' => 'object',
        'shipping_address' => 'object',
        'fob_point' => 'object',
        'ship_via' => 'object',
        'ship_terms' => 'object',
        'remit_contact' => 'object',
        'remit_address' => 'object',
        'terms' => 'object',
        'supplier_vat_zone' => 'object',
        'discount_details' => '\Ekstralys\VismaNetApi\Model\DiscountDetailUpdateDto[]',
        'dont_print' => 'object',
        'dont_email' => 'object',
        'order_type' => 'object',
        'order_number' => 'object',
        'hold' => 'object',
        'date' => 'object',
        'promised_on' => 'object',
        'description' => 'object',
        'supplier' => 'object',
        'location' => 'object',
        'gln' => 'object',
        'vat_registration_id' => 'object',
        'owner' => 'object',
        'currency' => 'object',
        'exchange_rate' => 'object',
        'supplier_ref' => 'object',
        'control_total' => 'object',
        'branch' => 'object',
        'lines' => '\Ekstralys\VismaNetApi\Model\PurchaseOrderLineUpdateDto[]',
        'change_dates_on_lines' => 'bool',
        'note' => 'object',
        'override_number_series' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_destination_type' => null,
        'ship_to' => null,
        'shipping_location' => null,
        'shipping_contact' => null,
        'shipping_address' => null,
        'fob_point' => null,
        'ship_via' => null,
        'ship_terms' => null,
        'remit_contact' => null,
        'remit_address' => null,
        'terms' => null,
        'supplier_vat_zone' => null,
        'discount_details' => null,
        'dont_print' => null,
        'dont_email' => null,
        'order_type' => null,
        'order_number' => null,
        'hold' => null,
        'date' => null,
        'promised_on' => null,
        'description' => null,
        'supplier' => null,
        'location' => null,
        'gln' => null,
        'vat_registration_id' => null,
        'owner' => null,
        'currency' => null,
        'exchange_rate' => null,
        'supplier_ref' => null,
        'control_total' => null,
        'branch' => null,
        'lines' => null,
        'change_dates_on_lines' => null,
        'note' => null,
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
        'shipping_destination_type' => 'shippingDestinationType',
        'ship_to' => 'shipTo',
        'shipping_location' => 'shippingLocation',
        'shipping_contact' => 'shippingContact',
        'shipping_address' => 'shippingAddress',
        'fob_point' => 'fobPoint',
        'ship_via' => 'shipVia',
        'ship_terms' => 'shipTerms',
        'remit_contact' => 'remitContact',
        'remit_address' => 'remitAddress',
        'terms' => 'terms',
        'supplier_vat_zone' => 'supplierVatZone',
        'discount_details' => 'discountDetails',
        'dont_print' => 'dontPrint',
        'dont_email' => 'dontEmail',
        'order_type' => 'orderType',
        'order_number' => 'orderNumber',
        'hold' => 'hold',
        'date' => 'date',
        'promised_on' => 'promisedOn',
        'description' => 'description',
        'supplier' => 'supplier',
        'location' => 'location',
        'gln' => 'gln',
        'vat_registration_id' => 'vatRegistrationId',
        'owner' => 'owner',
        'currency' => 'currency',
        'exchange_rate' => 'exchangeRate',
        'supplier_ref' => 'supplierRef',
        'control_total' => 'controlTotal',
        'branch' => 'branch',
        'lines' => 'lines',
        'change_dates_on_lines' => 'changeDatesOnLines',
        'note' => 'note',
        'override_number_series' => 'overrideNumberSeries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_destination_type' => 'setShippingDestinationType',
        'ship_to' => 'setShipTo',
        'shipping_location' => 'setShippingLocation',
        'shipping_contact' => 'setShippingContact',
        'shipping_address' => 'setShippingAddress',
        'fob_point' => 'setFobPoint',
        'ship_via' => 'setShipVia',
        'ship_terms' => 'setShipTerms',
        'remit_contact' => 'setRemitContact',
        'remit_address' => 'setRemitAddress',
        'terms' => 'setTerms',
        'supplier_vat_zone' => 'setSupplierVatZone',
        'discount_details' => 'setDiscountDetails',
        'dont_print' => 'setDontPrint',
        'dont_email' => 'setDontEmail',
        'order_type' => 'setOrderType',
        'order_number' => 'setOrderNumber',
        'hold' => 'setHold',
        'date' => 'setDate',
        'promised_on' => 'setPromisedOn',
        'description' => 'setDescription',
        'supplier' => 'setSupplier',
        'location' => 'setLocation',
        'gln' => 'setGln',
        'vat_registration_id' => 'setVatRegistrationId',
        'owner' => 'setOwner',
        'currency' => 'setCurrency',
        'exchange_rate' => 'setExchangeRate',
        'supplier_ref' => 'setSupplierRef',
        'control_total' => 'setControlTotal',
        'branch' => 'setBranch',
        'lines' => 'setLines',
        'change_dates_on_lines' => 'setChangeDatesOnLines',
        'note' => 'setNote',
        'override_number_series' => 'setOverrideNumberSeries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_destination_type' => 'getShippingDestinationType',
        'ship_to' => 'getShipTo',
        'shipping_location' => 'getShippingLocation',
        'shipping_contact' => 'getShippingContact',
        'shipping_address' => 'getShippingAddress',
        'fob_point' => 'getFobPoint',
        'ship_via' => 'getShipVia',
        'ship_terms' => 'getShipTerms',
        'remit_contact' => 'getRemitContact',
        'remit_address' => 'getRemitAddress',
        'terms' => 'getTerms',
        'supplier_vat_zone' => 'getSupplierVatZone',
        'discount_details' => 'getDiscountDetails',
        'dont_print' => 'getDontPrint',
        'dont_email' => 'getDontEmail',
        'order_type' => 'getOrderType',
        'order_number' => 'getOrderNumber',
        'hold' => 'getHold',
        'date' => 'getDate',
        'promised_on' => 'getPromisedOn',
        'description' => 'getDescription',
        'supplier' => 'getSupplier',
        'location' => 'getLocation',
        'gln' => 'getGln',
        'vat_registration_id' => 'getVatRegistrationId',
        'owner' => 'getOwner',
        'currency' => 'getCurrency',
        'exchange_rate' => 'getExchangeRate',
        'supplier_ref' => 'getSupplierRef',
        'control_total' => 'getControlTotal',
        'branch' => 'getBranch',
        'lines' => 'getLines',
        'change_dates_on_lines' => 'getChangeDatesOnLines',
        'note' => 'getNote',
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
        $this->container['shipping_destination_type'] = isset($data['shipping_destination_type']) ? $data['shipping_destination_type'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['shipping_location'] = isset($data['shipping_location']) ? $data['shipping_location'] : null;
        $this->container['shipping_contact'] = isset($data['shipping_contact']) ? $data['shipping_contact'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['fob_point'] = isset($data['fob_point']) ? $data['fob_point'] : null;
        $this->container['ship_via'] = isset($data['ship_via']) ? $data['ship_via'] : null;
        $this->container['ship_terms'] = isset($data['ship_terms']) ? $data['ship_terms'] : null;
        $this->container['remit_contact'] = isset($data['remit_contact']) ? $data['remit_contact'] : null;
        $this->container['remit_address'] = isset($data['remit_address']) ? $data['remit_address'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['supplier_vat_zone'] = isset($data['supplier_vat_zone']) ? $data['supplier_vat_zone'] : null;
        $this->container['discount_details'] = isset($data['discount_details']) ? $data['discount_details'] : null;
        $this->container['dont_print'] = isset($data['dont_print']) ? $data['dont_print'] : null;
        $this->container['dont_email'] = isset($data['dont_email']) ? $data['dont_email'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['promised_on'] = isset($data['promised_on']) ? $data['promised_on'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['gln'] = isset($data['gln']) ? $data['gln'] : null;
        $this->container['vat_registration_id'] = isset($data['vat_registration_id']) ? $data['vat_registration_id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['supplier_ref'] = isset($data['supplier_ref']) ? $data['supplier_ref'] : null;
        $this->container['control_total'] = isset($data['control_total']) ? $data['control_total'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['change_dates_on_lines'] = isset($data['change_dates_on_lines']) ? $data['change_dates_on_lines'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
     * Gets shipping_destination_type
     *
     * @return object
     */
    public function getShippingDestinationType()
    {
        return $this->container['shipping_destination_type'];
    }

    /**
     * Sets shipping_destination_type
     *
     * @param object $shipping_destination_type shipping_destination_type
     *
     * @return $this
     */
    public function setShippingDestinationType($shipping_destination_type)
    {
        $this->container['shipping_destination_type'] = $shipping_destination_type;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return object
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param object $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets shipping_location
     *
     * @return object
     */
    public function getShippingLocation()
    {
        return $this->container['shipping_location'];
    }

    /**
     * Sets shipping_location
     *
     * @param object $shipping_location shipping_location
     *
     * @return $this
     */
    public function setShippingLocation($shipping_location)
    {
        $this->container['shipping_location'] = $shipping_location;

        return $this;
    }

    /**
     * Gets shipping_contact
     *
     * @return object
     */
    public function getShippingContact()
    {
        return $this->container['shipping_contact'];
    }

    /**
     * Sets shipping_contact
     *
     * @param object $shipping_contact shipping_contact
     *
     * @return $this
     */
    public function setShippingContact($shipping_contact)
    {
        $this->container['shipping_contact'] = $shipping_contact;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return object
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param object $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets fob_point
     *
     * @return object
     */
    public function getFobPoint()
    {
        return $this->container['fob_point'];
    }

    /**
     * Sets fob_point
     *
     * @param object $fob_point fob_point
     *
     * @return $this
     */
    public function setFobPoint($fob_point)
    {
        $this->container['fob_point'] = $fob_point;

        return $this;
    }

    /**
     * Gets ship_via
     *
     * @return object
     */
    public function getShipVia()
    {
        return $this->container['ship_via'];
    }

    /**
     * Sets ship_via
     *
     * @param object $ship_via ship_via
     *
     * @return $this
     */
    public function setShipVia($ship_via)
    {
        $this->container['ship_via'] = $ship_via;

        return $this;
    }

    /**
     * Gets ship_terms
     *
     * @return object
     */
    public function getShipTerms()
    {
        return $this->container['ship_terms'];
    }

    /**
     * Sets ship_terms
     *
     * @param object $ship_terms ship_terms
     *
     * @return $this
     */
    public function setShipTerms($ship_terms)
    {
        $this->container['ship_terms'] = $ship_terms;

        return $this;
    }

    /**
     * Gets remit_contact
     *
     * @return object
     */
    public function getRemitContact()
    {
        return $this->container['remit_contact'];
    }

    /**
     * Sets remit_contact
     *
     * @param object $remit_contact remit_contact
     *
     * @return $this
     */
    public function setRemitContact($remit_contact)
    {
        $this->container['remit_contact'] = $remit_contact;

        return $this;
    }

    /**
     * Gets remit_address
     *
     * @return object
     */
    public function getRemitAddress()
    {
        return $this->container['remit_address'];
    }

    /**
     * Sets remit_address
     *
     * @param object $remit_address remit_address
     *
     * @return $this
     */
    public function setRemitAddress($remit_address)
    {
        $this->container['remit_address'] = $remit_address;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return object
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param object $terms terms
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets supplier_vat_zone
     *
     * @return object
     */
    public function getSupplierVatZone()
    {
        return $this->container['supplier_vat_zone'];
    }

    /**
     * Sets supplier_vat_zone
     *
     * @param object $supplier_vat_zone supplier_vat_zone
     *
     * @return $this
     */
    public function setSupplierVatZone($supplier_vat_zone)
    {
        $this->container['supplier_vat_zone'] = $supplier_vat_zone;

        return $this;
    }

    /**
     * Gets discount_details
     *
     * @return \Ekstralys\VismaNetApi\Model\DiscountDetailUpdateDto[]
     */
    public function getDiscountDetails()
    {
        return $this->container['discount_details'];
    }

    /**
     * Sets discount_details
     *
     * @param \Ekstralys\VismaNetApi\Model\DiscountDetailUpdateDto[] $discount_details discount_details
     *
     * @return $this
     */
    public function setDiscountDetails($discount_details)
    {
        $this->container['discount_details'] = $discount_details;

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
     * Gets order_type
     *
     * @return object
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param object $order_type order_type
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return object
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param object $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

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
     * Gets date
     *
     * @return object
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param object $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets promised_on
     *
     * @return object
     */
    public function getPromisedOn()
    {
        return $this->container['promised_on'];
    }

    /**
     * Sets promised_on
     *
     * @param object $promised_on promised_on
     *
     * @return $this
     */
    public function setPromisedOn($promised_on)
    {
        $this->container['promised_on'] = $promised_on;

        return $this;
    }

    /**
     * Gets description
     *
     * @return object
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param object $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return object
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param object $supplier Mandatory field if GLN or VatRegistrationId is not specified.
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

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
     * @param object $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
     * @param object $gln Mandatory field if Supplier or VatRegistrationId is not specified.
     *
     * @return $this
     */
    public function setGln($gln)
    {
        $this->container['gln'] = $gln;

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
     * @param object $vat_registration_id Mandatory field if Supplier or GLN is not specified.
     *
     * @return $this
     */
    public function setVatRegistrationId($vat_registration_id)
    {
        $this->container['vat_registration_id'] = $vat_registration_id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return object
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param object $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return object
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param object $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return object
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param object $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets supplier_ref
     *
     * @return object
     */
    public function getSupplierRef()
    {
        return $this->container['supplier_ref'];
    }

    /**
     * Sets supplier_ref
     *
     * @param object $supplier_ref supplier_ref
     *
     * @return $this
     */
    public function setSupplierRef($supplier_ref)
    {
        $this->container['supplier_ref'] = $supplier_ref;

        return $this;
    }

    /**
     * Gets control_total
     *
     * @return object
     */
    public function getControlTotal()
    {
        return $this->container['control_total'];
    }

    /**
     * Sets control_total
     *
     * @param object $control_total control_total
     *
     * @return $this
     */
    public function setControlTotal($control_total)
    {
        $this->container['control_total'] = $control_total;

        return $this;
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
     * Gets lines
     *
     * @return \Ekstralys\VismaNetApi\Model\PurchaseOrderLineUpdateDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Ekstralys\VismaNetApi\Model\PurchaseOrderLineUpdateDto[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets change_dates_on_lines
     *
     * @return bool
     */
    public function getChangeDatesOnLines()
    {
        return $this->container['change_dates_on_lines'];
    }

    /**
     * Sets change_dates_on_lines
     *
     * @param bool $change_dates_on_lines change_dates_on_lines
     *
     * @return $this
     */
    public function setChangeDatesOnLines($change_dates_on_lines)
    {
        $this->container['change_dates_on_lines'] = $change_dates_on_lines;

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


