<?php
/**
 * ProjectCreditResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.116
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.116
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
 * ProjectCreditResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectCreditResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectCreditResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'project_uuid' => 'string',
        'credits_granted' => 'int',
        'credits_consumed' => 'int',
        'granted_by' => 'string',
        'granted_reason' => 'string',
        'granted_at' => 'string',
        'fully_consumed_at' => 'string',
        'revoked_reason' => 'string',
        'revoked_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => null,
        'project_uuid' => null,
        'credits_granted' => null,
        'credits_consumed' => null,
        'granted_by' => null,
        'granted_reason' => null,
        'granted_at' => null,
        'fully_consumed_at' => null,
        'revoked_reason' => null,
        'revoked_at' => null
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
        'uuid' => 'uuid',
        'project_uuid' => 'project_uuid',
        'credits_granted' => 'credits_granted',
        'credits_consumed' => 'credits_consumed',
        'granted_by' => 'granted_by',
        'granted_reason' => 'granted_reason',
        'granted_at' => 'granted_at',
        'fully_consumed_at' => 'fully_consumed_at',
        'revoked_reason' => 'revoked_reason',
        'revoked_at' => 'revoked_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'project_uuid' => 'setProjectUuid',
        'credits_granted' => 'setCreditsGranted',
        'credits_consumed' => 'setCreditsConsumed',
        'granted_by' => 'setGrantedBy',
        'granted_reason' => 'setGrantedReason',
        'granted_at' => 'setGrantedAt',
        'fully_consumed_at' => 'setFullyConsumedAt',
        'revoked_reason' => 'setRevokedReason',
        'revoked_at' => 'setRevokedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'project_uuid' => 'getProjectUuid',
        'credits_granted' => 'getCreditsGranted',
        'credits_consumed' => 'getCreditsConsumed',
        'granted_by' => 'getGrantedBy',
        'granted_reason' => 'getGrantedReason',
        'granted_at' => 'getGrantedAt',
        'fully_consumed_at' => 'getFullyConsumedAt',
        'revoked_reason' => 'getRevokedReason',
        'revoked_at' => 'getRevokedAt'
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
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['project_uuid'] = $data['project_uuid'] ?? null;
        $this->container['credits_granted'] = $data['credits_granted'] ?? null;
        $this->container['credits_consumed'] = $data['credits_consumed'] ?? null;
        $this->container['granted_by'] = $data['granted_by'] ?? null;
        $this->container['granted_reason'] = $data['granted_reason'] ?? null;
        $this->container['granted_at'] = $data['granted_at'] ?? null;
        $this->container['fully_consumed_at'] = $data['fully_consumed_at'] ?? null;
        $this->container['revoked_reason'] = $data['revoked_reason'] ?? null;
        $this->container['revoked_at'] = $data['revoked_at'] ?? null;
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
        if ($this->container['project_uuid'] === null) {
            $invalidProperties[] = "'project_uuid' can't be null";
        }
        if ($this->container['credits_granted'] === null) {
            $invalidProperties[] = "'credits_granted' can't be null";
        }
        if ($this->container['granted_by'] === null) {
            $invalidProperties[] = "'granted_by' can't be null";
        }
        if ($this->container['granted_reason'] === null) {
            $invalidProperties[] = "'granted_reason' can't be null";
        }
        if ($this->container['granted_at'] === null) {
            $invalidProperties[] = "'granted_at' can't be null";
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
     * Gets project_uuid
     *
     * @return string
     */
    public function getProjectUuid()
    {
        return $this->container['project_uuid'];
    }

    /**
     * Sets project_uuid
     *
     * @param string $project_uuid project_uuid
     *
     * @return self
     */
    public function setProjectUuid($project_uuid)
    {
        $this->container['project_uuid'] = $project_uuid;

        return $this;
    }

    /**
     * Gets credits_granted
     *
     * @return int
     */
    public function getCreditsGranted()
    {
        return $this->container['credits_granted'];
    }

    /**
     * Sets credits_granted
     *
     * @param int $credits_granted credits_granted
     *
     * @return self
     */
    public function setCreditsGranted($credits_granted)
    {
        $this->container['credits_granted'] = $credits_granted;

        return $this;
    }

    /**
     * Gets credits_consumed
     *
     * @return int|null
     */
    public function getCreditsConsumed()
    {
        return $this->container['credits_consumed'];
    }

    /**
     * Sets credits_consumed
     *
     * @param int|null $credits_consumed credits_consumed
     *
     * @return self
     */
    public function setCreditsConsumed($credits_consumed)
    {
        $this->container['credits_consumed'] = $credits_consumed;

        return $this;
    }

    /**
     * Gets granted_by
     *
     * @return string
     */
    public function getGrantedBy()
    {
        return $this->container['granted_by'];
    }

    /**
     * Sets granted_by
     *
     * @param string $granted_by granted_by
     *
     * @return self
     */
    public function setGrantedBy($granted_by)
    {
        $this->container['granted_by'] = $granted_by;

        return $this;
    }

    /**
     * Gets granted_reason
     *
     * @return string
     */
    public function getGrantedReason()
    {
        return $this->container['granted_reason'];
    }

    /**
     * Sets granted_reason
     *
     * @param string $granted_reason granted_reason
     *
     * @return self
     */
    public function setGrantedReason($granted_reason)
    {
        $this->container['granted_reason'] = $granted_reason;

        return $this;
    }

    /**
     * Gets granted_at
     *
     * @return string
     */
    public function getGrantedAt()
    {
        return $this->container['granted_at'];
    }

    /**
     * Sets granted_at
     *
     * @param string $granted_at granted_at
     *
     * @return self
     */
    public function setGrantedAt($granted_at)
    {
        $this->container['granted_at'] = $granted_at;

        return $this;
    }

    /**
     * Gets fully_consumed_at
     *
     * @return string|null
     */
    public function getFullyConsumedAt()
    {
        return $this->container['fully_consumed_at'];
    }

    /**
     * Sets fully_consumed_at
     *
     * @param string|null $fully_consumed_at fully_consumed_at
     *
     * @return self
     */
    public function setFullyConsumedAt($fully_consumed_at)
    {
        $this->container['fully_consumed_at'] = $fully_consumed_at;

        return $this;
    }

    /**
     * Gets revoked_reason
     *
     * @return string|null
     */
    public function getRevokedReason()
    {
        return $this->container['revoked_reason'];
    }

    /**
     * Sets revoked_reason
     *
     * @param string|null $revoked_reason revoked_reason
     *
     * @return self
     */
    public function setRevokedReason($revoked_reason)
    {
        $this->container['revoked_reason'] = $revoked_reason;

        return $this;
    }

    /**
     * Gets revoked_at
     *
     * @return string|null
     */
    public function getRevokedAt()
    {
        return $this->container['revoked_at'];
    }

    /**
     * Sets revoked_at
     *
     * @param string|null $revoked_at revoked_at
     *
     * @return self
     */
    public function setRevokedAt($revoked_at)
    {
        $this->container['revoked_at'] = $revoked_at;

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


