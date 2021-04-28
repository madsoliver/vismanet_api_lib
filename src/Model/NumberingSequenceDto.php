<?php
/**
 * NumberingSequenceDto
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
 * NumberingSequenceDto Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NumberingSequenceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NumberingSequenceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numbering_id' => 'string',
        'branch' => 'object',
        'start_nbr' => 'string',
        'end_nbr' => 'string',
        'start_date' => '\DateTime',
        'last_nbr' => 'string',
        'warn_nbr' => 'string',
        'nbr_step' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numbering_id' => null,
        'branch' => null,
        'start_nbr' => null,
        'end_nbr' => null,
        'start_date' => 'date-time',
        'last_nbr' => null,
        'warn_nbr' => null,
        'nbr_step' => 'int32'
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
        'numbering_id' => 'numberingId',
        'branch' => 'branch',
        'start_nbr' => 'startNbr',
        'end_nbr' => 'endNbr',
        'start_date' => 'startDate',
        'last_nbr' => 'lastNbr',
        'warn_nbr' => 'warnNbr',
        'nbr_step' => 'nbrStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numbering_id' => 'setNumberingId',
        'branch' => 'setBranch',
        'start_nbr' => 'setStartNbr',
        'end_nbr' => 'setEndNbr',
        'start_date' => 'setStartDate',
        'last_nbr' => 'setLastNbr',
        'warn_nbr' => 'setWarnNbr',
        'nbr_step' => 'setNbrStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numbering_id' => 'getNumberingId',
        'branch' => 'getBranch',
        'start_nbr' => 'getStartNbr',
        'end_nbr' => 'getEndNbr',
        'start_date' => 'getStartDate',
        'last_nbr' => 'getLastNbr',
        'warn_nbr' => 'getWarnNbr',
        'nbr_step' => 'getNbrStep'
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
        $this->container['numbering_id'] = isset($data['numbering_id']) ? $data['numbering_id'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['start_nbr'] = isset($data['start_nbr']) ? $data['start_nbr'] : null;
        $this->container['end_nbr'] = isset($data['end_nbr']) ? $data['end_nbr'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['last_nbr'] = isset($data['last_nbr']) ? $data['last_nbr'] : null;
        $this->container['warn_nbr'] = isset($data['warn_nbr']) ? $data['warn_nbr'] : null;
        $this->container['nbr_step'] = isset($data['nbr_step']) ? $data['nbr_step'] : null;
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
     * Gets numbering_id
     *
     * @return string
     */
    public function getNumberingId()
    {
        return $this->container['numbering_id'];
    }

    /**
     * Sets numbering_id
     *
     * @param string $numbering_id Mandatory field: The top part &gt; Numbering ID &gt; The unique ID of the numbering series, which is an alphanumeric string of up to 10 characters.
     *
     * @return $this
     */
    public function setNumberingId($numbering_id)
    {
        $this->container['numbering_id'] = $numbering_id;

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
     * @param object $branch The table &gt; Branch &gt; The branch using the numbering series.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets start_nbr
     *
     * @return string
     */
    public function getStartNbr()
    {
        return $this->container['start_nbr'];
    }

    /**
     * Sets start_nbr
     *
     * @param string $start_nbr Mandatory field: The table &gt; Start number* &gt; The number to be used first in this numbering series or subsequence.
     *
     * @return $this
     */
    public function setStartNbr($start_nbr)
    {
        $this->container['start_nbr'] = $start_nbr;

        return $this;
    }

    /**
     * Gets end_nbr
     *
     * @return string
     */
    public function getEndNbr()
    {
        return $this->container['end_nbr'];
    }

    /**
     * Sets end_nbr
     *
     * @param string $end_nbr Mandatory field: The table &gt; End number* &gt; The number to be used at the end of this series. The end number cannot be less than the Start number.
     *
     * @return $this
     */
    public function setEndNbr($end_nbr)
    {
        $this->container['end_nbr'] = $end_nbr;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Mandatory field: The table &gt; Start dat*e &gt; The date when this series will first be used.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets last_nbr
     *
     * @return string
     */
    public function getLastNbr()
    {
        return $this->container['last_nbr'];
    }

    /**
     * Sets last_nbr
     *
     * @param string $last_nbr Mandatory field: The table &gt; Last number* &gt; The most recent number used for an object in this series.
     *
     * @return $this
     */
    public function setLastNbr($last_nbr)
    {
        $this->container['last_nbr'] = $last_nbr;

        return $this;
    }

    /**
     * Gets warn_nbr
     *
     * @return string
     */
    public function getWarnNbr()
    {
        return $this->container['warn_nbr'];
    }

    /**
     * Sets warn_nbr
     *
     * @param string $warn_nbr Mandatory field: The table &gt; Warning number* &gt; The minimum number that triggers a warning that available numbers will be used up soon.
     *
     * @return $this
     */
    public function setWarnNbr($warn_nbr)
    {
        $this->container['warn_nbr'] = $warn_nbr;

        return $this;
    }

    /**
     * Gets nbr_step
     *
     * @return int
     */
    public function getNbrStep()
    {
        return $this->container['nbr_step'];
    }

    /**
     * Sets nbr_step
     *
     * @param int $nbr_step Mandatory field: The table &gt; Numbering step* &gt; The increment this series uses to generate the next number.
     *
     * @return $this
     */
    public function setNbrStep($nbr_step)
    {
        $this->container['nbr_step'] = $nbr_step;

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


