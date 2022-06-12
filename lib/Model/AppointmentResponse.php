<?php
/**
 * AppointmentResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.76
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.76
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
 * AppointmentResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppointmentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppointmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'project_uuid' => 'string',
        'place_uuid' => 'string',
        'review_group_uuid' => 'string',
        'expected_finish_at' => 'string',
        'expected_start_at' => 'string',
        'actual_start_at' => 'string',
        'actual_finish_at' => 'string',
        'products' => 'object',
        'meta_uuid' => 'string',
        'status' => 'string',
        'cancellation_at' => 'string',
        'cancellation_reason' => 'string',
        'cancellation_entity_uuid' => 'string',
        'uuid' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'deleted_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'project_uuid' => null,
        'place_uuid' => null,
        'review_group_uuid' => null,
        'expected_finish_at' => null,
        'expected_start_at' => null,
        'actual_start_at' => null,
        'actual_finish_at' => null,
        'products' => null,
        'meta_uuid' => null,
        'status' => null,
        'cancellation_at' => null,
        'cancellation_reason' => null,
        'cancellation_entity_uuid' => null,
        'uuid' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null
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
        'project_uuid' => 'project_uuid',
        'place_uuid' => 'place_uuid',
        'review_group_uuid' => 'review_group_uuid',
        'expected_finish_at' => 'expected_finish_at',
        'expected_start_at' => 'expected_start_at',
        'actual_start_at' => 'actual_start_at',
        'actual_finish_at' => 'actual_finish_at',
        'products' => 'products',
        'meta_uuid' => 'meta_uuid',
        'status' => 'status',
        'cancellation_at' => 'cancellation_at',
        'cancellation_reason' => 'cancellation_reason',
        'cancellation_entity_uuid' => 'cancellation_entity_uuid',
        'uuid' => 'uuid',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_uuid' => 'setProjectUuid',
        'place_uuid' => 'setPlaceUuid',
        'review_group_uuid' => 'setReviewGroupUuid',
        'expected_finish_at' => 'setExpectedFinishAt',
        'expected_start_at' => 'setExpectedStartAt',
        'actual_start_at' => 'setActualStartAt',
        'actual_finish_at' => 'setActualFinishAt',
        'products' => 'setProducts',
        'meta_uuid' => 'setMetaUuid',
        'status' => 'setStatus',
        'cancellation_at' => 'setCancellationAt',
        'cancellation_reason' => 'setCancellationReason',
        'cancellation_entity_uuid' => 'setCancellationEntityUuid',
        'uuid' => 'setUuid',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_uuid' => 'getProjectUuid',
        'place_uuid' => 'getPlaceUuid',
        'review_group_uuid' => 'getReviewGroupUuid',
        'expected_finish_at' => 'getExpectedFinishAt',
        'expected_start_at' => 'getExpectedStartAt',
        'actual_start_at' => 'getActualStartAt',
        'actual_finish_at' => 'getActualFinishAt',
        'products' => 'getProducts',
        'meta_uuid' => 'getMetaUuid',
        'status' => 'getStatus',
        'cancellation_at' => 'getCancellationAt',
        'cancellation_reason' => 'getCancellationReason',
        'cancellation_entity_uuid' => 'getCancellationEntityUuid',
        'uuid' => 'getUuid',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt'
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
        $this->container['project_uuid'] = $data['project_uuid'] ?? null;
        $this->container['place_uuid'] = $data['place_uuid'] ?? null;
        $this->container['review_group_uuid'] = $data['review_group_uuid'] ?? null;
        $this->container['expected_finish_at'] = $data['expected_finish_at'] ?? null;
        $this->container['expected_start_at'] = $data['expected_start_at'] ?? null;
        $this->container['actual_start_at'] = $data['actual_start_at'] ?? null;
        $this->container['actual_finish_at'] = $data['actual_finish_at'] ?? null;
        $this->container['products'] = $data['products'] ?? null;
        $this->container['meta_uuid'] = $data['meta_uuid'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['cancellation_at'] = $data['cancellation_at'] ?? null;
        $this->container['cancellation_reason'] = $data['cancellation_reason'] ?? null;
        $this->container['cancellation_entity_uuid'] = $data['cancellation_entity_uuid'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets place_uuid
     *
     * @return string|null
     */
    public function getPlaceUuid()
    {
        return $this->container['place_uuid'];
    }

    /**
     * Sets place_uuid
     *
     * @param string|null $place_uuid place_uuid
     *
     * @return self
     */
    public function setPlaceUuid($place_uuid)
    {
        $this->container['place_uuid'] = $place_uuid;

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
     * Gets expected_finish_at
     *
     * @return string|null
     */
    public function getExpectedFinishAt()
    {
        return $this->container['expected_finish_at'];
    }

    /**
     * Sets expected_finish_at
     *
     * @param string|null $expected_finish_at expected_finish_at
     *
     * @return self
     */
    public function setExpectedFinishAt($expected_finish_at)
    {
        $this->container['expected_finish_at'] = $expected_finish_at;

        return $this;
    }

    /**
     * Gets expected_start_at
     *
     * @return string|null
     */
    public function getExpectedStartAt()
    {
        return $this->container['expected_start_at'];
    }

    /**
     * Sets expected_start_at
     *
     * @param string|null $expected_start_at expected_start_at
     *
     * @return self
     */
    public function setExpectedStartAt($expected_start_at)
    {
        $this->container['expected_start_at'] = $expected_start_at;

        return $this;
    }

    /**
     * Gets actual_start_at
     *
     * @return string|null
     */
    public function getActualStartAt()
    {
        return $this->container['actual_start_at'];
    }

    /**
     * Sets actual_start_at
     *
     * @param string|null $actual_start_at actual_start_at
     *
     * @return self
     */
    public function setActualStartAt($actual_start_at)
    {
        $this->container['actual_start_at'] = $actual_start_at;

        return $this;
    }

    /**
     * Gets actual_finish_at
     *
     * @return string|null
     */
    public function getActualFinishAt()
    {
        return $this->container['actual_finish_at'];
    }

    /**
     * Sets actual_finish_at
     *
     * @param string|null $actual_finish_at actual_finish_at
     *
     * @return self
     */
    public function setActualFinishAt($actual_finish_at)
    {
        $this->container['actual_finish_at'] = $actual_finish_at;

        return $this;
    }

    /**
     * Gets products
     *
     * @return object|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param object|null $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets meta_uuid
     *
     * @return string|null
     */
    public function getMetaUuid()
    {
        return $this->container['meta_uuid'];
    }

    /**
     * Sets meta_uuid
     *
     * @param string|null $meta_uuid meta_uuid
     *
     * @return self
     */
    public function setMetaUuid($meta_uuid)
    {
        $this->container['meta_uuid'] = $meta_uuid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets cancellation_at
     *
     * @return string|null
     */
    public function getCancellationAt()
    {
        return $this->container['cancellation_at'];
    }

    /**
     * Sets cancellation_at
     *
     * @param string|null $cancellation_at cancellation_at
     *
     * @return self
     */
    public function setCancellationAt($cancellation_at)
    {
        $this->container['cancellation_at'] = $cancellation_at;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return string|null
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param string|null $cancellation_reason cancellation_reason
     *
     * @return self
     */
    public function setCancellationReason($cancellation_reason)
    {
        $this->container['cancellation_reason'] = $cancellation_reason;

        return $this;
    }

    /**
     * Gets cancellation_entity_uuid
     *
     * @return string|null
     */
    public function getCancellationEntityUuid()
    {
        return $this->container['cancellation_entity_uuid'];
    }

    /**
     * Sets cancellation_entity_uuid
     *
     * @param string|null $cancellation_entity_uuid cancellation_entity_uuid
     *
     * @return self
     */
    public function setCancellationEntityUuid($cancellation_entity_uuid)
    {
        $this->container['cancellation_entity_uuid'] = $cancellation_entity_uuid;

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
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return string|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param string|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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


