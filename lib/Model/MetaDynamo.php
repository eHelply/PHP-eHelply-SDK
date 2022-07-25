<?php
/**
 * MetaDynamo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.92
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.92
 * Contact: support@ehelply.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MetaDynamo Class Doc Comment
 *
 * @category Class
 * @description A meta from DynamoDB
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MetaDynamo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MetaDynamo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'basic' => '\OpenAPI\Client\Model\Basic',
        'detailed' => '\OpenAPI\Client\Model\Detailed',
        'custom' => '\OpenAPI\Client\Model\MetaCustom',
        'dates' => '\OpenAPI\Client\Model\DatesMeta',
        'fields' => '\OpenAPI\Client\Model\Field[]',
        'children' => '\OpenAPI\Client\Model\MetaChildren[]',
        'parent_uuid' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'basic' => null,
        'detailed' => null,
        'custom' => null,
        'dates' => null,
        'fields' => null,
        'children' => null,
        'parent_uuid' => null,
        'uuid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'basic' => 'basic',
        'detailed' => 'detailed',
        'custom' => 'custom',
        'dates' => 'dates',
        'fields' => 'fields',
        'children' => 'children',
        'parent_uuid' => 'parent_uuid',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basic' => 'setBasic',
        'detailed' => 'setDetailed',
        'custom' => 'setCustom',
        'dates' => 'setDates',
        'fields' => 'setFields',
        'children' => 'setChildren',
        'parent_uuid' => 'setParentUuid',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basic' => 'getBasic',
        'detailed' => 'getDetailed',
        'custom' => 'getCustom',
        'dates' => 'getDates',
        'fields' => 'getFields',
        'children' => 'getChildren',
        'parent_uuid' => 'getParentUuid',
        'uuid' => 'getUuid'
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
        return self::$openAPIModelName;
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
        $this->container['basic'] = $data['basic'] ?? null;
        $this->container['detailed'] = $data['detailed'] ?? null;
        $this->container['custom'] = $data['custom'] ?? null;
        $this->container['dates'] = $data['dates'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['parent_uuid'] = $data['parent_uuid'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
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
     * Gets basic
     *
     * @return \OpenAPI\Client\Model\Basic|null
     */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
     * Sets basic
     *
     * @param \OpenAPI\Client\Model\Basic|null $basic basic
     *
     * @return self
     */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;

        return $this;
    }

    /**
     * Gets detailed
     *
     * @return \OpenAPI\Client\Model\Detailed|null
     */
    public function getDetailed()
    {
        return $this->container['detailed'];
    }

    /**
     * Sets detailed
     *
     * @param \OpenAPI\Client\Model\Detailed|null $detailed detailed
     *
     * @return self
     */
    public function setDetailed($detailed)
    {
        $this->container['detailed'] = $detailed;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return \OpenAPI\Client\Model\MetaCustom|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param \OpenAPI\Client\Model\MetaCustom|null $custom custom
     *
     * @return self
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \OpenAPI\Client\Model\DatesMeta|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \OpenAPI\Client\Model\DatesMeta|null $dates dates
     *
     * @return self
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \OpenAPI\Client\Model\Field[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \OpenAPI\Client\Model\Field[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\Client\Model\MetaChildren[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\MetaChildren[]|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets parent_uuid
     *
     * @return string|null
     */
    public function getParentUuid()
    {
        return $this->container['parent_uuid'];
    }

    /**
     * Sets parent_uuid
     *
     * @param string|null $parent_uuid parent_uuid
     *
     * @return self
     */
    public function setParentUuid($parent_uuid)
    {
        $this->container['parent_uuid'] = $parent_uuid;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


