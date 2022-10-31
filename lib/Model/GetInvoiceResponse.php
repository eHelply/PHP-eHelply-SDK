<?php
/**
 * GetInvoiceResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.120
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.120
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
 * GetInvoiceResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetInvoiceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetInvoiceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_uuid' => 'string',
        'line_items' => '\OpenAPI\Client\Model\LineItem[]',
        'subtotal' => 'int',
        'discounts' => '\OpenAPI\Client\Model\Discount[]',
        'taxes' => '\OpenAPI\Client\Model\Tax[]',
        'total' => 'int',
        'notes' => '\OpenAPI\Client\Model\Note[]',
        'paid' => 'bool',
        'created_at' => 'string',
        'update_at' => 'string',
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
        'invoice_uuid' => null,
        'line_items' => null,
        'subtotal' => null,
        'discounts' => null,
        'taxes' => null,
        'total' => null,
        'notes' => null,
        'paid' => null,
        'created_at' => null,
        'update_at' => null,
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
        'invoice_uuid' => 'invoice_uuid',
        'line_items' => 'line_items',
        'subtotal' => 'subtotal',
        'discounts' => 'discounts',
        'taxes' => 'taxes',
        'total' => 'total',
        'notes' => 'notes',
        'paid' => 'paid',
        'created_at' => 'created_at',
        'update_at' => 'update_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_uuid' => 'setInvoiceUuid',
        'line_items' => 'setLineItems',
        'subtotal' => 'setSubtotal',
        'discounts' => 'setDiscounts',
        'taxes' => 'setTaxes',
        'total' => 'setTotal',
        'notes' => 'setNotes',
        'paid' => 'setPaid',
        'created_at' => 'setCreatedAt',
        'update_at' => 'setUpdateAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_uuid' => 'getInvoiceUuid',
        'line_items' => 'getLineItems',
        'subtotal' => 'getSubtotal',
        'discounts' => 'getDiscounts',
        'taxes' => 'getTaxes',
        'total' => 'getTotal',
        'notes' => 'getNotes',
        'paid' => 'getPaid',
        'created_at' => 'getCreatedAt',
        'update_at' => 'getUpdateAt',
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
        $this->container['invoice_uuid'] = $data['invoice_uuid'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['paid'] = $data['paid'] ?? false;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['update_at'] = $data['update_at'] ?? null;
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

        if ($this->container['invoice_uuid'] === null) {
            $invalidProperties[] = "'invoice_uuid' can't be null";
        }
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ($this->container['subtotal'] === null) {
            $invalidProperties[] = "'subtotal' can't be null";
        }
        if ($this->container['discounts'] === null) {
            $invalidProperties[] = "'discounts' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['update_at'] === null) {
            $invalidProperties[] = "'update_at' can't be null";
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
     * Gets invoice_uuid
     *
     * @return string
     */
    public function getInvoiceUuid()
    {
        return $this->container['invoice_uuid'];
    }

    /**
     * Sets invoice_uuid
     *
     * @param string $invoice_uuid invoice_uuid
     *
     * @return self
     */
    public function setInvoiceUuid($invoice_uuid)
    {
        $this->container['invoice_uuid'] = $invoice_uuid;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\LineItem[] $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int $subtotal subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\Client\Model\Discount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\Client\Model\Discount[] $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \OpenAPI\Client\Model\Tax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \OpenAPI\Client\Model\Tax[] $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Model\Note[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Model\Note[] $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool|null $paid paid
     *
     * @return self
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

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
     * Gets update_at
     *
     * @return string
     */
    public function getUpdateAt()
    {
        return $this->container['update_at'];
    }

    /**
     * Sets update_at
     *
     * @param string $update_at update_at
     *
     * @return self
     */
    public function setUpdateAt($update_at)
    {
        $this->container['update_at'] = $update_at;

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


