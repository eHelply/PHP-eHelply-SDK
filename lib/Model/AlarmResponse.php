<?php
/**
 * AlarmResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.121
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.121
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
 * AlarmResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlarmResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlarmResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'service_uuid' => 'string',
        'count' => 'int',
        'stage' => 'string',
        'process' => 'string',
        'severity' => 'string',
        'ticket_uuid' => 'string',
        'name' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'note' => 'object[]',
        'created_at' => 'string',
        'latest_at' => 'string',
        'acknowledged_at' => 'string',
        'ignored_at' => 'string',
        'cleared_at' => 'string',
        'terminated_at' => 'string',
        'assignee_uuid' => 'string',
        'acknowledger_uuid' => 'string',
        'ignorer_uuid' => 'string',
        'terminater_uuid' => 'string'
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
        'service_uuid' => null,
        'count' => null,
        'stage' => null,
        'process' => null,
        'severity' => null,
        'ticket_uuid' => null,
        'name' => null,
        'summary' => null,
        'description' => null,
        'note' => null,
        'created_at' => null,
        'latest_at' => null,
        'acknowledged_at' => null,
        'ignored_at' => null,
        'cleared_at' => null,
        'terminated_at' => null,
        'assignee_uuid' => null,
        'acknowledger_uuid' => null,
        'ignorer_uuid' => null,
        'terminater_uuid' => null
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
        'service_uuid' => 'service_uuid',
        'count' => 'count',
        'stage' => 'stage',
        'process' => 'process',
        'severity' => 'severity',
        'ticket_uuid' => 'ticket_uuid',
        'name' => 'name',
        'summary' => 'summary',
        'description' => 'description',
        'note' => 'note',
        'created_at' => 'created_at',
        'latest_at' => 'latest_at',
        'acknowledged_at' => 'acknowledged_at',
        'ignored_at' => 'ignored_at',
        'cleared_at' => 'cleared_at',
        'terminated_at' => 'terminated_at',
        'assignee_uuid' => 'assignee_uuid',
        'acknowledger_uuid' => 'acknowledger_uuid',
        'ignorer_uuid' => 'ignorer_uuid',
        'terminater_uuid' => 'terminater_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'service_uuid' => 'setServiceUuid',
        'count' => 'setCount',
        'stage' => 'setStage',
        'process' => 'setProcess',
        'severity' => 'setSeverity',
        'ticket_uuid' => 'setTicketUuid',
        'name' => 'setName',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'note' => 'setNote',
        'created_at' => 'setCreatedAt',
        'latest_at' => 'setLatestAt',
        'acknowledged_at' => 'setAcknowledgedAt',
        'ignored_at' => 'setIgnoredAt',
        'cleared_at' => 'setClearedAt',
        'terminated_at' => 'setTerminatedAt',
        'assignee_uuid' => 'setAssigneeUuid',
        'acknowledger_uuid' => 'setAcknowledgerUuid',
        'ignorer_uuid' => 'setIgnorerUuid',
        'terminater_uuid' => 'setTerminaterUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'service_uuid' => 'getServiceUuid',
        'count' => 'getCount',
        'stage' => 'getStage',
        'process' => 'getProcess',
        'severity' => 'getSeverity',
        'ticket_uuid' => 'getTicketUuid',
        'name' => 'getName',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'note' => 'getNote',
        'created_at' => 'getCreatedAt',
        'latest_at' => 'getLatestAt',
        'acknowledged_at' => 'getAcknowledgedAt',
        'ignored_at' => 'getIgnoredAt',
        'cleared_at' => 'getClearedAt',
        'terminated_at' => 'getTerminatedAt',
        'assignee_uuid' => 'getAssigneeUuid',
        'acknowledger_uuid' => 'getAcknowledgerUuid',
        'ignorer_uuid' => 'getIgnorerUuid',
        'terminater_uuid' => 'getTerminaterUuid'
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
        $this->container['service_uuid'] = $data['service_uuid'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
        $this->container['stage'] = $data['stage'] ?? null;
        $this->container['process'] = $data['process'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['ticket_uuid'] = $data['ticket_uuid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['latest_at'] = $data['latest_at'] ?? null;
        $this->container['acknowledged_at'] = $data['acknowledged_at'] ?? null;
        $this->container['ignored_at'] = $data['ignored_at'] ?? null;
        $this->container['cleared_at'] = $data['cleared_at'] ?? null;
        $this->container['terminated_at'] = $data['terminated_at'] ?? null;
        $this->container['assignee_uuid'] = $data['assignee_uuid'] ?? null;
        $this->container['acknowledger_uuid'] = $data['acknowledger_uuid'] ?? null;
        $this->container['ignorer_uuid'] = $data['ignorer_uuid'] ?? null;
        $this->container['terminater_uuid'] = $data['terminater_uuid'] ?? null;
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
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets service_uuid
     *
     * @return string|null
     */
    public function getServiceUuid()
    {
        return $this->container['service_uuid'];
    }

    /**
     * Sets service_uuid
     *
     * @param string|null $service_uuid service_uuid
     *
     * @return self
     */
    public function setServiceUuid($service_uuid)
    {
        $this->container['service_uuid'] = $service_uuid;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param string|null $stage stage
     *
     * @return self
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets process
     *
     * @return string|null
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param string|null $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets ticket_uuid
     *
     * @return string|null
     */
    public function getTicketUuid()
    {
        return $this->container['ticket_uuid'];
    }

    /**
     * Sets ticket_uuid
     *
     * @param string|null $ticket_uuid ticket_uuid
     *
     * @return self
     */
    public function setTicketUuid($ticket_uuid)
    {
        $this->container['ticket_uuid'] = $ticket_uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets note
     *
     * @return object[]|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param object[]|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets latest_at
     *
     * @return string|null
     */
    public function getLatestAt()
    {
        return $this->container['latest_at'];
    }

    /**
     * Sets latest_at
     *
     * @param string|null $latest_at latest_at
     *
     * @return self
     */
    public function setLatestAt($latest_at)
    {
        $this->container['latest_at'] = $latest_at;

        return $this;
    }

    /**
     * Gets acknowledged_at
     *
     * @return string|null
     */
    public function getAcknowledgedAt()
    {
        return $this->container['acknowledged_at'];
    }

    /**
     * Sets acknowledged_at
     *
     * @param string|null $acknowledged_at acknowledged_at
     *
     * @return self
     */
    public function setAcknowledgedAt($acknowledged_at)
    {
        $this->container['acknowledged_at'] = $acknowledged_at;

        return $this;
    }

    /**
     * Gets ignored_at
     *
     * @return string|null
     */
    public function getIgnoredAt()
    {
        return $this->container['ignored_at'];
    }

    /**
     * Sets ignored_at
     *
     * @param string|null $ignored_at ignored_at
     *
     * @return self
     */
    public function setIgnoredAt($ignored_at)
    {
        $this->container['ignored_at'] = $ignored_at;

        return $this;
    }

    /**
     * Gets cleared_at
     *
     * @return string|null
     */
    public function getClearedAt()
    {
        return $this->container['cleared_at'];
    }

    /**
     * Sets cleared_at
     *
     * @param string|null $cleared_at cleared_at
     *
     * @return self
     */
    public function setClearedAt($cleared_at)
    {
        $this->container['cleared_at'] = $cleared_at;

        return $this;
    }

    /**
     * Gets terminated_at
     *
     * @return string|null
     */
    public function getTerminatedAt()
    {
        return $this->container['terminated_at'];
    }

    /**
     * Sets terminated_at
     *
     * @param string|null $terminated_at terminated_at
     *
     * @return self
     */
    public function setTerminatedAt($terminated_at)
    {
        $this->container['terminated_at'] = $terminated_at;

        return $this;
    }

    /**
     * Gets assignee_uuid
     *
     * @return string|null
     */
    public function getAssigneeUuid()
    {
        return $this->container['assignee_uuid'];
    }

    /**
     * Sets assignee_uuid
     *
     * @param string|null $assignee_uuid assignee_uuid
     *
     * @return self
     */
    public function setAssigneeUuid($assignee_uuid)
    {
        $this->container['assignee_uuid'] = $assignee_uuid;

        return $this;
    }

    /**
     * Gets acknowledger_uuid
     *
     * @return string|null
     */
    public function getAcknowledgerUuid()
    {
        return $this->container['acknowledger_uuid'];
    }

    /**
     * Sets acknowledger_uuid
     *
     * @param string|null $acknowledger_uuid acknowledger_uuid
     *
     * @return self
     */
    public function setAcknowledgerUuid($acknowledger_uuid)
    {
        $this->container['acknowledger_uuid'] = $acknowledger_uuid;

        return $this;
    }

    /**
     * Gets ignorer_uuid
     *
     * @return string|null
     */
    public function getIgnorerUuid()
    {
        return $this->container['ignorer_uuid'];
    }

    /**
     * Sets ignorer_uuid
     *
     * @param string|null $ignorer_uuid ignorer_uuid
     *
     * @return self
     */
    public function setIgnorerUuid($ignorer_uuid)
    {
        $this->container['ignorer_uuid'] = $ignorer_uuid;

        return $this;
    }

    /**
     * Gets terminater_uuid
     *
     * @return string|null
     */
    public function getTerminaterUuid()
    {
        return $this->container['terminater_uuid'];
    }

    /**
     * Sets terminater_uuid
     *
     * @param string|null $terminater_uuid terminater_uuid
     *
     * @return self
     */
    public function setTerminaterUuid($terminater_uuid)
    {
        $this->container['terminater_uuid'] = $terminater_uuid;

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


