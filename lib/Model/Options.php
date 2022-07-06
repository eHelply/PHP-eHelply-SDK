<?php
/**
 * Options
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.95
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.95
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
 * Options Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Options implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'required' => 'bool',
        'label' => 'string',
        'inset_label' => 'string',
        'placeholder' => 'string',
        'hint' => 'string',
        'icon' => 'string',
        'max_length' => 'float',
        'counter' => 'bool',
        'caption' => 'string',
        'color' => 'string',
        'size' => 'string',
        'type' => 'string',
        'icon_position' => 'string',
        'selections' => '\OpenAPI\Client\Model\OptionGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'required' => null,
        'label' => null,
        'inset_label' => null,
        'placeholder' => null,
        'hint' => null,
        'icon' => null,
        'max_length' => null,
        'counter' => null,
        'caption' => null,
        'color' => null,
        'size' => null,
        'type' => null,
        'icon_position' => null,
        'selections' => null
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
        'required' => 'required',
        'label' => 'label',
        'inset_label' => 'insetLabel',
        'placeholder' => 'placeholder',
        'hint' => 'hint',
        'icon' => 'icon',
        'max_length' => 'maxLength',
        'counter' => 'counter',
        'caption' => 'caption',
        'color' => 'color',
        'size' => 'size',
        'type' => 'type',
        'icon_position' => 'iconPosition',
        'selections' => 'selections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'required' => 'setRequired',
        'label' => 'setLabel',
        'inset_label' => 'setInsetLabel',
        'placeholder' => 'setPlaceholder',
        'hint' => 'setHint',
        'icon' => 'setIcon',
        'max_length' => 'setMaxLength',
        'counter' => 'setCounter',
        'caption' => 'setCaption',
        'color' => 'setColor',
        'size' => 'setSize',
        'type' => 'setType',
        'icon_position' => 'setIconPosition',
        'selections' => 'setSelections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'required' => 'getRequired',
        'label' => 'getLabel',
        'inset_label' => 'getInsetLabel',
        'placeholder' => 'getPlaceholder',
        'hint' => 'getHint',
        'icon' => 'getIcon',
        'max_length' => 'getMaxLength',
        'counter' => 'getCounter',
        'caption' => 'getCaption',
        'color' => 'getColor',
        'size' => 'getSize',
        'type' => 'getType',
        'icon_position' => 'getIconPosition',
        'selections' => 'getSelections'
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
        $this->container['required'] = $data['required'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['inset_label'] = $data['inset_label'] ?? null;
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['hint'] = $data['hint'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['max_length'] = $data['max_length'] ?? null;
        $this->container['counter'] = $data['counter'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['icon_position'] = $data['icon_position'] ?? null;
        $this->container['selections'] = $data['selections'] ?? null;
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
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required required
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
     * Gets inset_label
     *
     * @return string|null
     */
    public function getInsetLabel()
    {
        return $this->container['inset_label'];
    }

    /**
     * Sets inset_label
     *
     * @param string|null $inset_label inset_label
     *
     * @return self
     */
    public function setInsetLabel($inset_label)
    {
        $this->container['inset_label'] = $inset_label;

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
     * Gets max_length
     *
     * @return float|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param float|null $max_length max_length
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return bool|null
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param bool|null $counter counter
     *
     * @return self
     */
    public function setCounter($counter)
    {
        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets icon_position
     *
     * @return string|null
     */
    public function getIconPosition()
    {
        return $this->container['icon_position'];
    }

    /**
     * Sets icon_position
     *
     * @param string|null $icon_position icon_position
     *
     * @return self
     */
    public function setIconPosition($icon_position)
    {
        $this->container['icon_position'] = $icon_position;

        return $this;
    }

    /**
     * Gets selections
     *
     * @return \OpenAPI\Client\Model\OptionGroup[]|null
     */
    public function getSelections()
    {
        return $this->container['selections'];
    }

    /**
     * Sets selections
     *
     * @param \OpenAPI\Client\Model\OptionGroup[]|null $selections selections
     *
     * @return self
     */
    public function setSelections($selections)
    {
        $this->container['selections'] = $selections;

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


