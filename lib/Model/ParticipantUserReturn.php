<?php
/**
 * ParticipantUserReturn
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.93
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.93
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
 * ParticipantUserReturn Class Doc Comment
 *
 * @category Class
 * @description Contains all fields required when doing a Participant GET but also has user fields (name, location, ect). This is what is returned from all participant endpoints.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ParticipantUserReturn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParticipantUserReturn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'user_uuid' => 'string',
        'participant_meta' => 'object',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => '\OpenAPI\Client\Model\Email',
        'phone_number' => 'string',
        'country' => 'string',
        'gps_location' => 'object',
        'picture' => 'string',
        'last_login' => '\DateTime',
        'verified_legal_terms' => 'bool',
        'date_created' => '\DateTime',
        'date_updated' => '\DateTime'
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
        'user_uuid' => null,
        'participant_meta' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'phone_number' => null,
        'country' => null,
        'gps_location' => null,
        'picture' => null,
        'last_login' => 'date-time',
        'verified_legal_terms' => null,
        'date_created' => 'date-time',
        'date_updated' => 'date-time'
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
        'user_uuid' => 'user_uuid',
        'participant_meta' => 'participant_meta',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'phone_number' => 'phone_number',
        'country' => 'country',
        'gps_location' => 'gps_location',
        'picture' => 'picture',
        'last_login' => 'last_login',
        'verified_legal_terms' => 'verified_legal_terms',
        'date_created' => 'date_created',
        'date_updated' => 'date_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'user_uuid' => 'setUserUuid',
        'participant_meta' => 'setParticipantMeta',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'country' => 'setCountry',
        'gps_location' => 'setGpsLocation',
        'picture' => 'setPicture',
        'last_login' => 'setLastLogin',
        'verified_legal_terms' => 'setVerifiedLegalTerms',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'user_uuid' => 'getUserUuid',
        'participant_meta' => 'getParticipantMeta',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'country' => 'getCountry',
        'gps_location' => 'getGpsLocation',
        'picture' => 'getPicture',
        'last_login' => 'getLastLogin',
        'verified_legal_terms' => 'getVerifiedLegalTerms',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated'
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
        $this->container['user_uuid'] = $data['user_uuid'] ?? null;
        $this->container['participant_meta'] = $data['participant_meta'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['gps_location'] = $data['gps_location'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
        $this->container['last_login'] = $data['last_login'] ?? null;
        $this->container['verified_legal_terms'] = $data['verified_legal_terms'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_updated'] = $data['date_updated'] ?? null;
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
     * Gets user_uuid
     *
     * @return string|null
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     *
     * @param string|null $user_uuid user_uuid
     *
     * @return self
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

        return $this;
    }

    /**
     * Gets participant_meta
     *
     * @return object|null
     */
    public function getParticipantMeta()
    {
        return $this->container['participant_meta'];
    }

    /**
     * Sets participant_meta
     *
     * @param object|null $participant_meta participant_meta
     *
     * @return self
     */
    public function setParticipantMeta($participant_meta)
    {
        $this->container['participant_meta'] = $participant_meta;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \OpenAPI\Client\Model\Email|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \OpenAPI\Client\Model\Email|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets gps_location
     *
     * @return object|null
     */
    public function getGpsLocation()
    {
        return $this->container['gps_location'];
    }

    /**
     * Sets gps_location
     *
     * @param object|null $gps_location gps_location
     *
     * @return self
     */
    public function setGpsLocation($gps_location)
    {
        $this->container['gps_location'] = $gps_location;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string|null $picture picture
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets last_login
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime|null $last_login last_login
     *
     * @return self
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets verified_legal_terms
     *
     * @return bool|null
     */
    public function getVerifiedLegalTerms()
    {
        return $this->container['verified_legal_terms'];
    }

    /**
     * Sets verified_legal_terms
     *
     * @param bool|null $verified_legal_terms verified_legal_terms
     *
     * @return self
     */
    public function setVerifiedLegalTerms($verified_legal_terms)
    {
        $this->container['verified_legal_terms'] = $verified_legal_terms;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return \DateTime|null
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param \DateTime|null $date_updated date_updated
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {
        $this->container['date_updated'] = $date_updated;

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


