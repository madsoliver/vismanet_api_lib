<?php
/**
 * ExpenseClaimDto
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
 * ExpenseClaimDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a Expense Claim in ExpenseClaimController. Used for getting data.
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpenseClaimDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExpenseClaimDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_nbr' => 'string',
        'status' => 'string',
        'approval_status' => 'string',
        'date' => '\DateTime',
        'description' => 'string',
        'claimed_by' => 'object',
        'claim_total' => 'double',
        'vat_taxable_total' => 'double',
        'vat_exempt_total' => 'double',
        'customer' => 'object',
        'currency' => 'string',
        'approval_date' => '\DateTime',
        'department' => 'object',
        'location' => 'object',
        'last_modified_date_time' => '\DateTime',
        'details' => '\Ekstralys\VismaNetApi\Model\ExpenseClaimDetailDto[]',
        'approval_status_text' => 'string',
        'error_info' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ref_nbr' => null,
        'status' => null,
        'approval_status' => null,
        'date' => 'date-time',
        'description' => null,
        'claimed_by' => null,
        'claim_total' => 'double',
        'vat_taxable_total' => 'double',
        'vat_exempt_total' => 'double',
        'customer' => null,
        'currency' => null,
        'approval_date' => 'date-time',
        'department' => null,
        'location' => null,
        'last_modified_date_time' => 'date-time',
        'details' => null,
        'approval_status_text' => null,
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
        'ref_nbr' => 'refNbr',
        'status' => 'status',
        'approval_status' => 'approvalStatus',
        'date' => 'date',
        'description' => 'description',
        'claimed_by' => 'claimedBy',
        'claim_total' => 'claimTotal',
        'vat_taxable_total' => 'vatTaxableTotal',
        'vat_exempt_total' => 'vatExemptTotal',
        'customer' => 'customer',
        'currency' => 'currency',
        'approval_date' => 'approvalDate',
        'department' => 'department',
        'location' => 'location',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'details' => 'details',
        'approval_status_text' => 'approvalStatusText',
        'error_info' => 'errorInfo',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ref_nbr' => 'setRefNbr',
        'status' => 'setStatus',
        'approval_status' => 'setApprovalStatus',
        'date' => 'setDate',
        'description' => 'setDescription',
        'claimed_by' => 'setClaimedBy',
        'claim_total' => 'setClaimTotal',
        'vat_taxable_total' => 'setVatTaxableTotal',
        'vat_exempt_total' => 'setVatExemptTotal',
        'customer' => 'setCustomer',
        'currency' => 'setCurrency',
        'approval_date' => 'setApprovalDate',
        'department' => 'setDepartment',
        'location' => 'setLocation',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'details' => 'setDetails',
        'approval_status_text' => 'setApprovalStatusText',
        'error_info' => 'setErrorInfo',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ref_nbr' => 'getRefNbr',
        'status' => 'getStatus',
        'approval_status' => 'getApprovalStatus',
        'date' => 'getDate',
        'description' => 'getDescription',
        'claimed_by' => 'getClaimedBy',
        'claim_total' => 'getClaimTotal',
        'vat_taxable_total' => 'getVatTaxableTotal',
        'vat_exempt_total' => 'getVatExemptTotal',
        'customer' => 'getCustomer',
        'currency' => 'getCurrency',
        'approval_date' => 'getApprovalDate',
        'department' => 'getDepartment',
        'location' => 'getLocation',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'details' => 'getDetails',
        'approval_status_text' => 'getApprovalStatusText',
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

    const STATUS_HOLD = 'Hold';
    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_APPROVED = 'Approved';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_RELEASED = 'Released';
    const APPROVAL_STATUS__NEW = 'New';
    const APPROVAL_STATUS_CANCELED = 'Canceled';
    const APPROVAL_STATUS_SENT_TO_APPROVAL = 'SentToApproval';
    const APPROVAL_STATUS_RECEIVED_BY_APPROVAL = 'ReceivedByApproval';
    const APPROVAL_STATUS_IN_PROGRESS_APPROVAL = 'InProgressApproval';
    const APPROVAL_STATUS_REJECTED_IN_APPROVAL = 'RejectedInApproval';
    const APPROVAL_STATUS_APPROVED_IN_APPROVAL = 'ApprovedInApproval';
    const APPROVAL_STATUS_ACTIVE_WORKFLOW_APPROVAL = 'ActiveWorkflowApproval';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HOLD,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
            self::STATUS_RELEASED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApprovalStatusAllowableValues()
    {
        return [
            self::APPROVAL_STATUS__NEW,
            self::APPROVAL_STATUS_CANCELED,
            self::APPROVAL_STATUS_SENT_TO_APPROVAL,
            self::APPROVAL_STATUS_RECEIVED_BY_APPROVAL,
            self::APPROVAL_STATUS_IN_PROGRESS_APPROVAL,
            self::APPROVAL_STATUS_REJECTED_IN_APPROVAL,
            self::APPROVAL_STATUS_APPROVED_IN_APPROVAL,
            self::APPROVAL_STATUS_ACTIVE_WORKFLOW_APPROVAL,
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
        $this->container['ref_nbr'] = isset($data['ref_nbr']) ? $data['ref_nbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['approval_status'] = isset($data['approval_status']) ? $data['approval_status'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['claimed_by'] = isset($data['claimed_by']) ? $data['claimed_by'] : null;
        $this->container['claim_total'] = isset($data['claim_total']) ? $data['claim_total'] : null;
        $this->container['vat_taxable_total'] = isset($data['vat_taxable_total']) ? $data['vat_taxable_total'] : null;
        $this->container['vat_exempt_total'] = isset($data['vat_exempt_total']) ? $data['vat_exempt_total'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['approval_date'] = isset($data['approval_date']) ? $data['approval_date'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['approval_status_text'] = isset($data['approval_status_text']) ? $data['approval_status_text'] : null;
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

        $allowedValues = $this->getApprovalStatusAllowableValues();
        if (!is_null($this->container['approval_status']) && !in_array($this->container['approval_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'approval_status', must be one of '%s'",
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
     * Gets ref_nbr
     *
     * @return string
     */
    public function getRefNbr()
    {
        return $this->container['ref_nbr'];
    }

    /**
     * Sets ref_nbr
     *
     * @param string $ref_nbr The top part &gt; Ref. no. &gt; The unique reference number of the expense claim document.
     *
     * @return $this
     */
    public function setRefNbr($ref_nbr)
    {
        $this->container['ref_nbr'] = $ref_nbr;

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
     * @param string $status The top part &gt; Status &gt; The current status of the expense claim: On Hold/Pending Approval/Approved/Rejected/Released.
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
     * Gets approval_status
     *
     * @return string
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param string $approval_status The top part &gt; Approval status &gt; The status of the claim in Approval.
     *
     * @return $this
     */
    public function setApprovalStatus($approval_status)
    {
        $allowedValues = $this->getApprovalStatusAllowableValues();
        if (!is_null($approval_status) && !in_array($approval_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'approval_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['approval_status'] = $approval_status;

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
     * @param \DateTime $date Mandatory field: The top part &gt; Date* &gt; The date when the claim was entered.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param string $description Mandatory field: The top part &gt; Description &gt; A description of the claim.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets claimed_by
     *
     * @return object
     */
    public function getClaimedBy()
    {
        return $this->container['claimed_by'];
    }

    /**
     * Sets claimed_by
     *
     * @param object $claimed_by Mandatory field: The top part &gt; Claimed by &gt; The employee who is claiming the expenses. If the claim is released, an Accounts Payable bill will be generated to this employee.
     *
     * @return $this
     */
    public function setClaimedBy($claimed_by)
    {
        $this->container['claimed_by'] = $claimed_by;

        return $this;
    }

    /**
     * Gets claim_total
     *
     * @return double
     */
    public function getClaimTotal()
    {
        return $this->container['claim_total'];
    }

    /**
     * Sets claim_total
     *
     * @param double $claim_total The top part &gt; Claim total &gt; The total amount of the claim.
     *
     * @return $this
     */
    public function setClaimTotal($claim_total)
    {
        $this->container['claim_total'] = $claim_total;

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
     * @param double $vat_taxable_total The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT.
     *
     * @return $this
     */
    public function setVatTaxableTotal($vat_taxable_total)
    {
        $this->container['vat_taxable_total'] = $vat_taxable_total;

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
     * @param object $customer The top part &gt; Customer &gt; The applicable customer.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * @param string $currency The top part &gt; Currency &gt; The currency of the claim.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets approval_date
     *
     * @return \DateTime
     */
    public function getApprovalDate()
    {
        return $this->container['approval_date'];
    }

    /**
     * Sets approval_date
     *
     * @param \DateTime $approval_date The top part &gt; Approval date &gt; The date when the claim was approved.
     *
     * @return $this
     */
    public function setApprovalDate($approval_date)
    {
        $this->container['approval_date'] = $approval_date;

        return $this;
    }

    /**
     * Gets department
     *
     * @return object
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param object $department Mandatory field: The top part &gt; Department ID &gt; The department associated with the expense claim.
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

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
     * @param object $location The top part &gt; Location &gt; The company location associated with the claim.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
     * @param \DateTime $last_modified_date_time System generated information: The lastest time the expense claim was modified
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Ekstralys\VismaNetApi\Model\ExpenseClaimDetailDto[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Ekstralys\VismaNetApi\Model\ExpenseClaimDetailDto[] $details Expence claim details tab &gt;
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets approval_status_text
     *
     * @return string
     */
    public function getApprovalStatusText()
    {
        return $this->container['approval_status_text'];
    }

    /**
     * Sets approval_status_text
     *
     * @param string $approval_status_text The top part &gt; Approval status &gt; A text field.
     *
     * @return $this
     */
    public function setApprovalStatusText($approval_status_text)
    {
        $this->container['approval_status_text'] = $approval_status_text;

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


