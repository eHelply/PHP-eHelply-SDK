<?php
/**
 * StaffCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.107
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.107
 * Contact: support@ehelply.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * StaffCreate Class Doc Comment
 *
 * @category Class
 * @description **:param** project_uuid                        **type:** string or None  **:param** entity_uuid                         **type:** string or None  **:param** schedule_uuid                       **type:** string or None  **:param** catalog_uuid                        **type:** string or None  **:param** review_group_uuid                   **type:** string or None
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StaffCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StaffCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity_uuid' => 'string',
        'project_uuid' => 'string',
        'schedule_uuid' => 'string',
        'catalog_uuid' => 'string',
        'review_group_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entity_uuid' => null,
        'project_uuid' => null,
        'schedule_uuid' => null,
        'catalog_uuid' => null,
        'review_group_uuid' => null
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
        'entity_uuid' => 'entity_uuid',
        'project_uuid' => 'project_uuid',
        'schedule_uuid' => 'schedule_uuid',
        'catalog_uuid' => 'catalog_uuid',
        'review_group_uuid' => 'review_group_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity_uuid' => 'setEntityUuid',
        'project_uuid' => 'setProjectUuid',
        'schedule_uuid' => 'setScheduleUuid',
        'catalog_uuid' => 'setCatalogUuid',
        'review_group_uuid' => 'setReviewGroupUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity_uuid' => 'getEntityUuid',
        'project_uuid' => 'getProjectUuid',
        'schedule_uuid' => 'getScheduleUuid',
        'catalog_uuid' => 'getCatalogUuid',
        'review_group_uuid' => 'getReviewGroupUuid'
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
        $this->container['entity_uuid'] = $data['entity_uuid'] ?? null;
        $this->container['project_uuid'] = $data['project_uuid'] ?? null;
        $this->container['schedule_uuid'] = $data['schedule_uuid'] ?? null;
        $this->container['catalog_uuid'] = $data['catalog_uuid'] ?? null;
        $this->container['review_group_uuid'] = $data['review_group_uuid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entity_uuid'] === null) {
            $invalidProperties[] = "'entity_uuid' can't be null";
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
     * Gets entity_uuid
     *
     * @return string
     */
    public function getEntityUuid()
    {
        return $this->container['entity_uuid'];
    }

    /**
     * Sets entity_uuid
     *
     * @param string $entity_uuid entity_uuid
     *
     * @return self
     */
    public function setEntityUuid($entity_uuid)
    {
        $this->container['entity_uuid'] = $entity_uuid;

        return $this;
    }

    /**
     * Gets project_uuid
     *
     * @return string|null
     */
    public function getProjectUuid()
    {
        return $this->container['project_uuid'];
    }

    /**
     * Sets project_uuid
     *
     * @param string|null $project_uuid project_uuid
     *
     * @return self
     */
    public function setProjectUuid($project_uuid)
    {
        $this->container['project_uuid'] = $project_uuid;

        return $this;
    }

    /**
     * Gets schedule_uuid
     *
     * @return string|null
     */
    public function getScheduleUuid()
    {
        return $this->container['schedule_uuid'];
    }

    /**
     * Sets schedule_uuid
     *
     * @param string|null $schedule_uuid schedule_uuid
     *
     * @return self
     */
    public function setScheduleUuid($schedule_uuid)
    {
        $this->container['schedule_uuid'] = $schedule_uuid;

        return $this;
    }

    /**
     * Gets catalog_uuid
     *
     * @return string|null
     */
    public function getCatalogUuid()
    {
        return $this->container['catalog_uuid'];
    }

    /**
     * Sets catalog_uuid
     *
     * @param string|null $catalog_uuid catalog_uuid
     *
     * @return self
     */
    public function setCatalogUuid($catalog_uuid)
    {
        $this->container['catalog_uuid'] = $catalog_uuid;

        return $this;
    }

    /**
     * Gets review_group_uuid
     *
     * @return string|null
     */
    public function getReviewGroupUuid()
    {
        return $this->container['review_group_uuid'];
    }

    /**
     * Sets review_group_uuid
     *
     * @param string|null $review_group_uuid review_group_uuid
     *
     * @return self
     */
    public function setReviewGroupUuid($review_group_uuid)
    {
        $this->container['review_group_uuid'] = $review_group_uuid;

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


