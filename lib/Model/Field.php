<?php
/**
 * Field
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.114
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.114
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
 * Field Class Doc Comment
 *
 * @category Class
 * @description Field
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Field implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Field';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'type' => 'int',
        'placeholder' => 'string',
        'validations' => '\OpenAPI\Client\Model\Validations',
        'hint' => 'string',
        'icon' => 'string',
        'label' => 'string',
        'options' => '\OpenAPI\Client\Model\Options'
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
        'type' => null,
        'placeholder' => null,
        'validations' => null,
        'hint' => null,
        'icon' => null,
        'label' => null,
        'options' => null
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
        'type' => 'type',
        'placeholder' => 'placeholder',
        'validations' => 'validations',
        'hint' => 'hint',
        'icon' => 'icon',
        'label' => 'label',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'type' => 'setType',
        'placeholder' => 'setPlaceholder',
        'validations' => 'setValidations',
        'hint' => 'setHint',
        'icon' => 'setIcon',
        'label' => 'setLabel',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'type' => 'getType',
        'placeholder' => 'getPlaceholder',
        'validations' => 'getValidations',
        'hint' => 'getHint',
        'icon' => 'getIcon',
        'label' => 'getLabel',
        'options' => 'getOptions'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['validations'] = $data['validations'] ?? null;
        $this->container['hint'] = $data['hint'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
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
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets validations
     *
     * @return \OpenAPI\Client\Model\Validations|null
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param \OpenAPI\Client\Model\Validations|null $validations validations
     *
     * @return self
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets hint
     *
     * @return string|null
     */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
     * Sets hint
     *
     * @param string|null $hint hint
     *
     * @return self
     */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\Options|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\Options|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


