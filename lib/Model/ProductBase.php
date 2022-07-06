<?php
/**
 * ProductBase
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.85
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.85
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
 * ProductBase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meta_data' => 'object',
        'collection_uuid' => 'string',
        'review_group_uuid' => 'string',
        'addons' => 'string[]',
        'name' => 'string',
        'price' => 'int',
        'quantity_for_public' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meta_data' => null,
        'collection_uuid' => null,
        'review_group_uuid' => null,
        'addons' => null,
        'name' => null,
        'price' => null,
        'quantity_for_public' => null
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
        'meta_data' => 'meta_data',
        'collection_uuid' => 'collection_uuid',
        'review_group_uuid' => 'review_group_uuid',
        'addons' => 'addons',
        'name' => 'name',
        'price' => 'price',
        'quantity_for_public' => 'quantity_for_public'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meta_data' => 'setMetaData',
        'collection_uuid' => 'setCollectionUuid',
        'review_group_uuid' => 'setReviewGroupUuid',
        'addons' => 'setAddons',
        'name' => 'setName',
        'price' => 'setPrice',
        'quantity_for_public' => 'setQuantityForPublic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meta_data' => 'getMetaData',
        'collection_uuid' => 'getCollectionUuid',
        'review_group_uuid' => 'getReviewGroupUuid',
        'addons' => 'getAddons',
        'name' => 'getName',
        'price' => 'getPrice',
        'quantity_for_public' => 'getQuantityForPublic'
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
        $this->container['meta_data'] = $data['meta_data'] ?? null;
        $this->container['collection_uuid'] = $data['collection_uuid'] ?? null;
        $this->container['review_group_uuid'] = $data['review_group_uuid'] ?? null;
        $this->container['addons'] = $data['addons'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['quantity_for_public'] = $data['quantity_for_public'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['quantity_for_public'] === null) {
            $invalidProperties[] = "'quantity_for_public' can't be null";
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
     * Gets meta_data
     *
     * @return object|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param object|null $meta_data meta_data
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets collection_uuid
     *
     * @return string|null
     */
    public function getCollectionUuid()
    {
        return $this->container['collection_uuid'];
    }

    /**
     * Sets collection_uuid
     *
     * @param string|null $collection_uuid collection_uuid
     *
     * @return self
     */
    public function setCollectionUuid($collection_uuid)
    {
        $this->container['collection_uuid'] = $collection_uuid;

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
     * Gets addons
     *
     * @return string[]|null
     */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
     * Sets addons
     *
     * @param string[]|null $addons addons
     *
     * @return self
     */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;

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
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity_for_public
     *
     * @return int
     */
    public function getQuantityForPublic()
    {
        return $this->container['quantity_for_public'];
    }

    /**
     * Sets quantity_for_public
     *
     * @param int $quantity_for_public quantity_for_public
     *
     * @return self
     */
    public function setQuantityForPublic($quantity_for_public)
    {
        $this->container['quantity_for_public'] = $quantity_for_public;

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


