<?php
/**
 * AddressBase
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.99
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.99
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
 * AddressBase Class Doc Comment
 *
 * @category Class
 * @description **:param** address_type                        **type:** string or None  **:param** address_line_1                      **type:** string or None  **:param** address_line_2                      **type:** string or None  **:param** postal_zip_code                     **type:** string or None  **:param** city                                **type:** string or None  **:param** province_state                      **type:** string or None  **:param** country                             **type:** string or None  **:param** lat                                 **type:** string or None  **:param** lng                                 **type:** string or None
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_type' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'postal_zip_code' => 'string',
        'city' => 'string',
        'province_state' => 'string',
        'country' => 'string',
        'lat' => 'string',
        'lng' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_type' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'postal_zip_code' => null,
        'city' => null,
        'province_state' => null,
        'country' => null,
        'lat' => null,
        'lng' => null
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
        'address_type' => 'address_type',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'postal_zip_code' => 'postal_zip_code',
        'city' => 'city',
        'province_state' => 'province_state',
        'country' => 'country',
        'lat' => 'lat',
        'lng' => 'lng'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'postal_zip_code' => 'setPostalZipCode',
        'city' => 'setCity',
        'province_state' => 'setProvinceState',
        'country' => 'setCountry',
        'lat' => 'setLat',
        'lng' => 'setLng'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'postal_zip_code' => 'getPostalZipCode',
        'city' => 'getCity',
        'province_state' => 'getProvinceState',
        'country' => 'getCountry',
        'lat' => 'getLat',
        'lng' => 'getLng'
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
        $this->container['address_type'] = $data['address_type'] ?? null;
        $this->container['address_line_1'] = $data['address_line_1'] ?? null;
        $this->container['address_line_2'] = $data['address_line_2'] ?? null;
        $this->container['postal_zip_code'] = $data['postal_zip_code'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['province_state'] = $data['province_state'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['lat'] = $data['lat'] ?? null;
        $this->container['lng'] = $data['lng'] ?? null;
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
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type address_type
     *
     * @return self
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string|null $address_line_1 address_line_1
     *
     * @return self
     */
    public function setAddressLine1($address_line_1)
    {
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string|null $address_line_2 address_line_2
     *
     * @return self
     */
    public function setAddressLine2($address_line_2)
    {
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets postal_zip_code
     *
     * @return string|null
     */
    public function getPostalZipCode()
    {
        return $this->container['postal_zip_code'];
    }

    /**
     * Sets postal_zip_code
     *
     * @param string|null $postal_zip_code postal_zip_code
     *
     * @return self
     */
    public function setPostalZipCode($postal_zip_code)
    {
        $this->container['postal_zip_code'] = $postal_zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets province_state
     *
     * @return string|null
     */
    public function getProvinceState()
    {
        return $this->container['province_state'];
    }

    /**
     * Sets province_state
     *
     * @param string|null $province_state province_state
     *
     * @return self
     */
    public function setProvinceState($province_state)
    {
        $this->container['province_state'] = $province_state;

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
     * Gets lat
     *
     * @return string|null
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param string|null $lat lat
     *
     * @return self
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lng
     *
     * @return string|null
     */
    public function getLng()
    {
        return $this->container['lng'];
    }

    /**
     * Sets lng
     *
     * @param string|null $lng lng
     *
     * @return self
     */
    public function setLng($lng)
    {
        $this->container['lng'] = $lng;

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


