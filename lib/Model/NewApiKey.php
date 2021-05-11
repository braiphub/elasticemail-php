<?php
/**
 * NewApiKey
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a href=\"https://api.elasticemail.com/public/help\">here</a>.
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;

use \ArrayAccess;
use \ElasticEmail\ObjectSerializer;

/**
 * NewApiKey Class Doc Comment
 *
 * @category Class
 * @description Newly generated ApiKey with Token
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NewApiKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewApiKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token' => 'string',
        'access_level' => '\ElasticEmail\Model\AccessLevel[]',
        'name' => 'string',
        'date_created' => '\DateTime',
        'last_use' => '\DateTime',
        'expires' => '\DateTime',
        'restrict_access_to_ip_range' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token' => 'string',
        'access_level' => null,
        'name' => 'string',
        'date_created' => 'date-time',
        'last_use' => 'date-time',
        'expires' => 'date-time',
        'restrict_access_to_ip_range' => 'string'
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
        'token' => 'Token',
        'access_level' => 'AccessLevel',
        'name' => 'Name',
        'date_created' => 'DateCreated',
        'last_use' => 'LastUse',
        'expires' => 'Expires',
        'restrict_access_to_ip_range' => 'RestrictAccessToIPRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'access_level' => 'setAccessLevel',
        'name' => 'setName',
        'date_created' => 'setDateCreated',
        'last_use' => 'setLastUse',
        'expires' => 'setExpires',
        'restrict_access_to_ip_range' => 'setRestrictAccessToIpRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'access_level' => 'getAccessLevel',
        'name' => 'getName',
        'date_created' => 'getDateCreated',
        'last_use' => 'getLastUse',
        'expires' => 'getExpires',
        'restrict_access_to_ip_range' => 'getRestrictAccessToIpRange'
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
        $this->container['token'] = $data['token'] ?? null;
        $this->container['access_level'] = $data['access_level'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['last_use'] = $data['last_use'] ?? null;
        $this->container['expires'] = $data['expires'] ?? null;
        $this->container['restrict_access_to_ip_range'] = $data['restrict_access_to_ip_range'] ?? null;
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
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token Unique token to be used in the system
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets access_level
     *
     * @return \ElasticEmail\Model\AccessLevel[]|null
     */
    public function getAccessLevel()
    {
        return $this->container['access_level'];
    }

    /**
     * Sets access_level
     *
     * @param \ElasticEmail\Model\AccessLevel[]|null $access_level Access level or permission to be assigned to this ApiKey.
     *
     * @return self
     */
    public function setAccessLevel($access_level)
    {
        $this->container['access_level'] = $access_level;

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
     * @param string|null $name Name of the ApiKey.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \DateTime|null $date_created Date this ApiKey was created.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets last_use
     *
     * @return \DateTime|null
     */
    public function getLastUse()
    {
        return $this->container['last_use'];
    }

    /**
     * Sets last_use
     *
     * @param \DateTime|null $last_use Date this ApiKey was last used.
     *
     * @return self
     */
    public function setLastUse($last_use)
    {
        $this->container['last_use'] = $last_use;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime|null $expires Date this ApiKey expires.
     *
     * @return self
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets restrict_access_to_ip_range
     *
     * @return string[]|null
     */
    public function getRestrictAccessToIpRange()
    {
        return $this->container['restrict_access_to_ip_range'];
    }

    /**
     * Sets restrict_access_to_ip_range
     *
     * @param string[]|null $restrict_access_to_ip_range Which IPs can use this ApiKey
     *
     * @return self
     */
    public function setRestrictAccessToIpRange($restrict_access_to_ip_range)
    {
        $this->container['restrict_access_to_ip_range'] = $restrict_access_to_ip_range;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


