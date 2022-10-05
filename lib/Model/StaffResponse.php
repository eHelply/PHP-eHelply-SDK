<?php
/**
 * StaffResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.111
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.111
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
 * StaffResponse Class Doc Comment
 *
 * @category Class
 * @description **:param** uuid                                **type:** string **:param** project_uuid                        **type:** string or None  **:param** entity                              **type:** string or None  **:param** place                               **type:** string or None  **:param** company                             **type:** string or None  **:param** schedule                            **type:** string or None  **:param** catalog                             **type:** string or None  **:param** reviews                             **type:** string or None  **:param** created_at                          **type:** string or None  **:param** updated_at                          **type:** string or None  **:param** deleted_at                          **type:** string or None
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StaffResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StaffResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'project_uuid' => 'string',
        'entity' => 'object',
        'place' => 'object',
        'place_roles' => 'string[]',
        'company' => 'object',
        'company_roles' => 'string[]',
        'schedule' => 'object',
        'catalog' => 'object',
        'reviews' => 'object',
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
        'uuid' => null,
        'project_uuid' => null,
        'entity' => null,
        'place' => null,
        'place_roles' => null,
        'company' => null,
        'company_roles' => null,
        'schedule' => null,
        'catalog' => null,
        'reviews' => null,
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
        'uuid' => 'uuid',
        'project_uuid' => 'project_uuid',
        'entity' => 'entity',
        'place' => 'place',
        'place_roles' => 'place_roles',
        'company' => 'company',
        'company_roles' => 'company_roles',
        'schedule' => 'schedule',
        'catalog' => 'catalog',
        'reviews' => 'reviews',
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
        'uuid' => 'setUuid',
        'project_uuid' => 'setProjectUuid',
        'entity' => 'setEntity',
        'place' => 'setPlace',
        'place_roles' => 'setPlaceRoles',
        'company' => 'setCompany',
        'company_roles' => 'setCompanyRoles',
        'schedule' => 'setSchedule',
        'catalog' => 'setCatalog',
        'reviews' => 'setReviews',
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
        'uuid' => 'getUuid',
        'project_uuid' => 'getProjectUuid',
        'entity' => 'getEntity',
        'place' => 'getPlace',
        'place_roles' => 'getPlaceRoles',
        'company' => 'getCompany',
        'company_roles' => 'getCompanyRoles',
        'schedule' => 'getSchedule',
        'catalog' => 'getCatalog',
        'reviews' => 'getReviews',
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
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['project_uuid'] = $data['project_uuid'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['place'] = $data['place'] ?? null;
        $this->container['place_roles'] = $data['place_roles'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['company_roles'] = $data['company_roles'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['catalog'] = $data['catalog'] ?? null;
        $this->container['reviews'] = $data['reviews'] ?? null;
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
     * Gets entity
     *
     * @return object|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param object|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets place
     *
     * @return object|null
     */
    public function getPlace()
    {
        return $this->container['place'];
    }

    /**
     * Sets place
     *
     * @param object|null $place place
     *
     * @return self
     */
    public function setPlace($place)
    {
        $this->container['place'] = $place;

        return $this;
    }

    /**
     * Gets place_roles
     *
     * @return string[]|null
     */
    public function getPlaceRoles()
    {
        return $this->container['place_roles'];
    }

    /**
     * Sets place_roles
     *
     * @param string[]|null $place_roles place_roles
     *
     * @return self
     */
    public function setPlaceRoles($place_roles)
    {
        $this->container['place_roles'] = $place_roles;

        return $this;
    }

    /**
     * Gets company
     *
     * @return object|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param object|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company_roles
     *
     * @return string[]|null
     */
    public function getCompanyRoles()
    {
        return $this->container['company_roles'];
    }

    /**
     * Sets company_roles
     *
     * @param string[]|null $company_roles company_roles
     *
     * @return self
     */
    public function setCompanyRoles($company_roles)
    {
        $this->container['company_roles'] = $company_roles;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return object|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param object|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets catalog
     *
     * @return object|null
     */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
     * Sets catalog
     *
     * @param object|null $catalog catalog
     *
     * @return self
     */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;

        return $this;
    }

    /**
     * Gets reviews
     *
     * @return object|null
     */
    public function getReviews()
    {
        return $this->container['reviews'];
    }

    /**
     * Sets reviews
     *
     * @param object|null $reviews reviews
     *
     * @return self
     */
    public function setReviews($reviews)
    {
        $this->container['reviews'] = $reviews;

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
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
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


