<?php
/**
 * Pagination
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
 * Pagination Class Doc Comment
 *
 * @category Class
 * @description Pagination state
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Pagination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'page_size' => 'int',
        'total_items' => 'int',
        'total_pages' => 'int',
        'has_previous_page' => 'bool',
        'has_next_page' => 'bool',
        'previous_page' => 'int',
        'next_page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => null,
        'page_size' => null,
        'total_items' => null,
        'total_pages' => null,
        'has_previous_page' => null,
        'has_next_page' => null,
        'previous_page' => null,
        'next_page' => null
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
        'current_page' => 'current_page',
        'page_size' => 'page_size',
        'total_items' => 'total_items',
        'total_pages' => 'total_pages',
        'has_previous_page' => 'has_previous_page',
        'has_next_page' => 'has_next_page',
        'previous_page' => 'previous_page',
        'next_page' => 'next_page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'page_size' => 'setPageSize',
        'total_items' => 'setTotalItems',
        'total_pages' => 'setTotalPages',
        'has_previous_page' => 'setHasPreviousPage',
        'has_next_page' => 'setHasNextPage',
        'previous_page' => 'setPreviousPage',
        'next_page' => 'setNextPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'page_size' => 'getPageSize',
        'total_items' => 'getTotalItems',
        'total_pages' => 'getTotalPages',
        'has_previous_page' => 'getHasPreviousPage',
        'has_next_page' => 'getHasNextPage',
        'previous_page' => 'getPreviousPage',
        'next_page' => 'getNextPage'
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
        $this->container['current_page'] = $data['current_page'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['total_items'] = $data['total_items'] ?? null;
        $this->container['total_pages'] = $data['total_pages'] ?? null;
        $this->container['has_previous_page'] = $data['has_previous_page'] ?? null;
        $this->container['has_next_page'] = $data['has_next_page'] ?? null;
        $this->container['previous_page'] = $data['previous_page'] ?? null;
        $this->container['next_page'] = $data['next_page'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['current_page'] === null) {
            $invalidProperties[] = "'current_page' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['total_items'] === null) {
            $invalidProperties[] = "'total_items' can't be null";
        }
        if ($this->container['total_pages'] === null) {
            $invalidProperties[] = "'total_pages' can't be null";
        }
        if ($this->container['has_previous_page'] === null) {
            $invalidProperties[] = "'has_previous_page' can't be null";
        }
        if ($this->container['has_next_page'] === null) {
            $invalidProperties[] = "'has_next_page' can't be null";
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
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page current_page
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets total_items
     *
     * @return int
     */
    public function getTotalItems()
    {
        return $this->container['total_items'];
    }

    /**
     * Sets total_items
     *
     * @param int $total_items total_items
     *
     * @return self
     */
    public function setTotalItems($total_items)
    {
        $this->container['total_items'] = $total_items;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages total_pages
     *
     * @return self
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets has_previous_page
     *
     * @return bool
     */
    public function getHasPreviousPage()
    {
        return $this->container['has_previous_page'];
    }

    /**
     * Sets has_previous_page
     *
     * @param bool $has_previous_page has_previous_page
     *
     * @return self
     */
    public function setHasPreviousPage($has_previous_page)
    {
        $this->container['has_previous_page'] = $has_previous_page;

        return $this;
    }

    /**
     * Gets has_next_page
     *
     * @return bool
     */
    public function getHasNextPage()
    {
        return $this->container['has_next_page'];
    }

    /**
     * Sets has_next_page
     *
     * @param bool $has_next_page has_next_page
     *
     * @return self
     */
    public function setHasNextPage($has_next_page)
    {
        $this->container['has_next_page'] = $has_next_page;

        return $this;
    }

    /**
     * Gets previous_page
     *
     * @return int|null
     */
    public function getPreviousPage()
    {
        return $this->container['previous_page'];
    }

    /**
     * Sets previous_page
     *
     * @param int|null $previous_page previous_page
     *
     * @return self
     */
    public function setPreviousPage($previous_page)
    {
        $this->container['previous_page'] = $previous_page;

        return $this;
    }

    /**
     * Gets next_page
     *
     * @return int|null
     */
    public function getNextPage()
    {
        return $this->container['next_page'];
    }

    /**
     * Sets next_page
     *
     * @param int|null $next_page next_page
     *
     * @return self
     */
    public function setNextPage($next_page)
    {
        $this->container['next_page'] = $next_page;

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


