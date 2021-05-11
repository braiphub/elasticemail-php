<?php
/**
 * Options
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
 * Options Class Doc Comment
 *
 * @category Class
 * @description E-mail configuration
 * @package  ElasticEmail
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
        'time_offset' => 'int',
        'pool_name' => 'string',
        'channel_name' => 'string',
        'encoding' => 'EncodingType',
        'track_opens' => 'bool',
        'track_clicks' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'time_offset' => 'int32',
        'pool_name' => 'string',
        'channel_name' => 'string',
        'encoding' => null,
        'track_opens' => 'boolean',
        'track_clicks' => 'boolean'
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
        'time_offset' => 'TimeOffset',
        'pool_name' => 'PoolName',
        'channel_name' => 'ChannelName',
        'encoding' => 'Encoding',
        'track_opens' => 'TrackOpens',
        'track_clicks' => 'TrackClicks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_offset' => 'setTimeOffset',
        'pool_name' => 'setPoolName',
        'channel_name' => 'setChannelName',
        'encoding' => 'setEncoding',
        'track_opens' => 'setTrackOpens',
        'track_clicks' => 'setTrackClicks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_offset' => 'getTimeOffset',
        'pool_name' => 'getPoolName',
        'channel_name' => 'getChannelName',
        'encoding' => 'getEncoding',
        'track_opens' => 'getTrackOpens',
        'track_clicks' => 'getTrackClicks'
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
        $this->container['time_offset'] = $data['time_offset'] ?? null;
        $this->container['pool_name'] = $data['pool_name'] ?? null;
        $this->container['channel_name'] = $data['channel_name'] ?? null;
        $this->container['encoding'] = $data['encoding'] ?? null;
        $this->container['track_opens'] = $data['track_opens'] ?? null;
        $this->container['track_clicks'] = $data['track_clicks'] ?? null;
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
     * Gets time_offset
     *
     * @return int|null
     */
    public function getTimeOffset()
    {
        return $this->container['time_offset'];
    }

    /**
     * Sets time_offset
     *
     * @param int|null $time_offset By how long should an e-mail be delayed (in minutes). Maximum is 35 days.
     *
     * @return self
     */
    public function setTimeOffset($time_offset)
    {
        $this->container['time_offset'] = $time_offset;

        return $this;
    }

    /**
     * Gets pool_name
     *
     * @return string|null
     */
    public function getPoolName()
    {
        return $this->container['pool_name'];
    }

    /**
     * Sets pool_name
     *
     * @param string|null $pool_name Name of your custom IP Pool to be used in the sending process
     *
     * @return self
     */
    public function setPoolName($pool_name)
    {
        $this->container['pool_name'] = $pool_name;

        return $this;
    }

    /**
     * Gets channel_name
     *
     * @return string|null
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param string|null $channel_name Name of selected channel.
     *
     * @return self
     */
    public function setChannelName($channel_name)
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return EncodingType|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param EncodingType|null $encoding 0 for None, 1 for Raw7Bit, 2 for Raw8Bit, 3 for QuotedPrintable, 4 for Base64 (Default), 5 for Uue note that you can also provide the text version such as \"Raw7Bit\" for value 1. NOTE: Base64 or QuotedPrintable is recommended if you are validating your domain(s) with DKIM.
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets track_opens
     *
     * @return bool|null
     */
    public function getTrackOpens()
    {
        return $this->container['track_opens'];
    }

    /**
     * Sets track_opens
     *
     * @param bool|null $track_opens Should the opens be tracked? If no value has been provided, Account's default setting will be used.
     *
     * @return self
     */
    public function setTrackOpens($track_opens)
    {
        $this->container['track_opens'] = $track_opens;

        return $this;
    }

    /**
     * Gets track_clicks
     *
     * @return bool|null
     */
    public function getTrackClicks()
    {
        return $this->container['track_clicks'];
    }

    /**
     * Sets track_clicks
     *
     * @param bool|null $track_clicks Should the clicks be tracked? If no value has been provided, Account's default setting will be used.
     *
     * @return self
     */
    public function setTrackClicks($track_clicks)
    {
        $this->container['track_clicks'] = $track_clicks;

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


