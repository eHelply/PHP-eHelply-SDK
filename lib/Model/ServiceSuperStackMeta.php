<?php
/**
 * ServiceSuperStackMeta
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.115
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.115
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
 * ServiceSuperStackMeta Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ServiceSuperStackMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceSuperStackMeta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'human_name' => 'string',
        'route_name' => 'string',
        'service_name' => 'string',
        'advertise' => 'bool',
        'featured' => 'bool',
        'picture' => 'string',
        'background_picture' => 'string',
        'tag_line' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'features' => '\OpenAPI\Client\Model\ServiceSuperStackMetaFeature[]',
        'use_cases' => '\OpenAPI\Client\Model\ServiceSuperStackMetaUseCase[]',
        'getting_started' => '\OpenAPI\Client\Model\ServiceSuperStackMetaGettingStarted',
        'faqs' => '\OpenAPI\Client\Model\ServiceSuperStackMetaFaq[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'human_name' => null,
        'route_name' => null,
        'service_name' => null,
        'advertise' => null,
        'featured' => null,
        'picture' => null,
        'background_picture' => null,
        'tag_line' => null,
        'summary' => null,
        'description' => null,
        'features' => null,
        'use_cases' => null,
        'getting_started' => null,
        'faqs' => null
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
        'human_name' => 'human_name',
        'route_name' => 'route_name',
        'service_name' => 'service_name',
        'advertise' => 'advertise',
        'featured' => 'featured',
        'picture' => 'picture',
        'background_picture' => 'background_picture',
        'tag_line' => 'tag_line',
        'summary' => 'summary',
        'description' => 'description',
        'features' => 'features',
        'use_cases' => 'use_cases',
        'getting_started' => 'getting_started',
        'faqs' => 'faqs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'human_name' => 'setHumanName',
        'route_name' => 'setRouteName',
        'service_name' => 'setServiceName',
        'advertise' => 'setAdvertise',
        'featured' => 'setFeatured',
        'picture' => 'setPicture',
        'background_picture' => 'setBackgroundPicture',
        'tag_line' => 'setTagLine',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'features' => 'setFeatures',
        'use_cases' => 'setUseCases',
        'getting_started' => 'setGettingStarted',
        'faqs' => 'setFaqs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'human_name' => 'getHumanName',
        'route_name' => 'getRouteName',
        'service_name' => 'getServiceName',
        'advertise' => 'getAdvertise',
        'featured' => 'getFeatured',
        'picture' => 'getPicture',
        'background_picture' => 'getBackgroundPicture',
        'tag_line' => 'getTagLine',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'features' => 'getFeatures',
        'use_cases' => 'getUseCases',
        'getting_started' => 'getGettingStarted',
        'faqs' => 'getFaqs'
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
        $this->container['human_name'] = $data['human_name'] ?? null;
        $this->container['route_name'] = $data['route_name'] ?? null;
        $this->container['service_name'] = $data['service_name'] ?? null;
        $this->container['advertise'] = $data['advertise'] ?? null;
        $this->container['featured'] = $data['featured'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
        $this->container['background_picture'] = $data['background_picture'] ?? null;
        $this->container['tag_line'] = $data['tag_line'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['features'] = $data['features'] ?? null;
        $this->container['use_cases'] = $data['use_cases'] ?? null;
        $this->container['getting_started'] = $data['getting_started'] ?? null;
        $this->container['faqs'] = $data['faqs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['human_name'] === null) {
            $invalidProperties[] = "'human_name' can't be null";
        }
        if ($this->container['route_name'] === null) {
            $invalidProperties[] = "'route_name' can't be null";
        }
        if ($this->container['service_name'] === null) {
            $invalidProperties[] = "'service_name' can't be null";
        }
        if ($this->container['advertise'] === null) {
            $invalidProperties[] = "'advertise' can't be null";
        }
        if ($this->container['featured'] === null) {
            $invalidProperties[] = "'featured' can't be null";
        }
        if ($this->container['picture'] === null) {
            $invalidProperties[] = "'picture' can't be null";
        }
        if ($this->container['background_picture'] === null) {
            $invalidProperties[] = "'background_picture' can't be null";
        }
        if ($this->container['tag_line'] === null) {
            $invalidProperties[] = "'tag_line' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
        }
        if ($this->container['use_cases'] === null) {
            $invalidProperties[] = "'use_cases' can't be null";
        }
        if ($this->container['getting_started'] === null) {
            $invalidProperties[] = "'getting_started' can't be null";
        }
        if ($this->container['faqs'] === null) {
            $invalidProperties[] = "'faqs' can't be null";
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
     * Gets human_name
     *
     * @return string
     */
    public function getHumanName()
    {
        return $this->container['human_name'];
    }

    /**
     * Sets human_name
     *
     * @param string $human_name human_name
     *
     * @return self
     */
    public function setHumanName($human_name)
    {
        $this->container['human_name'] = $human_name;

        return $this;
    }

    /**
     * Gets route_name
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->container['route_name'];
    }

    /**
     * Sets route_name
     *
     * @param string $route_name route_name
     *
     * @return self
     */
    public function setRouteName($route_name)
    {
        $this->container['route_name'] = $route_name;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name service_name
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets advertise
     *
     * @return bool
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param bool $advertise advertise
     *
     * @return self
     */
    public function setAdvertise($advertise)
    {
        $this->container['advertise'] = $advertise;

        return $this;
    }

    /**
     * Gets featured
     *
     * @return bool
     */
    public function getFeatured()
    {
        return $this->container['featured'];
    }

    /**
     * Sets featured
     *
     * @param bool $featured featured
     *
     * @return self
     */
    public function setFeatured($featured)
    {
        $this->container['featured'] = $featured;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string $picture picture
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets background_picture
     *
     * @return string
     */
    public function getBackgroundPicture()
    {
        return $this->container['background_picture'];
    }

    /**
     * Sets background_picture
     *
     * @param string $background_picture background_picture
     *
     * @return self
     */
    public function setBackgroundPicture($background_picture)
    {
        $this->container['background_picture'] = $background_picture;

        return $this;
    }

    /**
     * Gets tag_line
     *
     * @return string
     */
    public function getTagLine()
    {
        return $this->container['tag_line'];
    }

    /**
     * Sets tag_line
     *
     * @param string $tag_line tag_line
     *
     * @return self
     */
    public function setTagLine($tag_line)
    {
        $this->container['tag_line'] = $tag_line;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
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
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \OpenAPI\Client\Model\ServiceSuperStackMetaFeature[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \OpenAPI\Client\Model\ServiceSuperStackMetaFeature[] $features features
     *
     * @return self
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets use_cases
     *
     * @return \OpenAPI\Client\Model\ServiceSuperStackMetaUseCase[]
     */
    public function getUseCases()
    {
        return $this->container['use_cases'];
    }

    /**
     * Sets use_cases
     *
     * @param \OpenAPI\Client\Model\ServiceSuperStackMetaUseCase[] $use_cases use_cases
     *
     * @return self
     */
    public function setUseCases($use_cases)
    {
        $this->container['use_cases'] = $use_cases;

        return $this;
    }

    /**
     * Gets getting_started
     *
     * @return \OpenAPI\Client\Model\ServiceSuperStackMetaGettingStarted
     */
    public function getGettingStarted()
    {
        return $this->container['getting_started'];
    }

    /**
     * Sets getting_started
     *
     * @param \OpenAPI\Client\Model\ServiceSuperStackMetaGettingStarted $getting_started getting_started
     *
     * @return self
     */
    public function setGettingStarted($getting_started)
    {
        $this->container['getting_started'] = $getting_started;

        return $this;
    }

    /**
     * Gets faqs
     *
     * @return \OpenAPI\Client\Model\ServiceSuperStackMetaFaq[]
     */
    public function getFaqs()
    {
        return $this->container['faqs'];
    }

    /**
     * Sets faqs
     *
     * @param \OpenAPI\Client\Model\ServiceSuperStackMetaFaq[] $faqs faqs
     *
     * @return self
     */
    public function setFaqs($faqs)
    {
        $this->container['faqs'] = $faqs;

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

