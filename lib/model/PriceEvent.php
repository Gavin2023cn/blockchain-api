<?php
/**
 * PriceEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlockChainRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blockchain.com Exchange REST API
 *
 * ## Introduction Welcome to Blockchain.com's Exchange API and developer documentation. \\ These documents detail and give examples of various functionality offered by the API such as receiving real time market data, requesting balance information and performing trades. ## To Get Started Create or log into your existing Blockchain.com Exchange account \\ Select API from the drop down menu \\ Fill out form and click “Create New API Key Now” \\ Once generated you can view your keys under API Settings. \\ Please be aware that the API key can only be used once it was verified via email.  The API key must be set via the \\ `X-API-Token`\\ header.  The base URL to be used for all calls is \\ `https://api.blockchain.com/v3/exchange`  Autogenerated clients for this API can be found [here](https://github.com/blockchain/lib-exchange-client).
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BlockChainRest\Model;

use \ArrayAccess;
use \BlockChainRest\ObjectSerializer;

/**
 * PriceEvent Class Doc Comment
 *
 * @category Class
 * @package  BlockChainRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PriceEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'price_24h' => 'double',
        'volume_24h' => 'double',
        'last_trade_price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'symbol' => null,
        'price_24h' => 'double',
        'volume_24h' => 'double',
        'last_trade_price' => 'double'
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
        'symbol' => 'symbol',
        'price_24h' => 'price_24h',
        'volume_24h' => 'volume_24h',
        'last_trade_price' => 'last_trade_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'price_24h' => 'setPrice24h',
        'volume_24h' => 'setVolume24h',
        'last_trade_price' => 'setLastTradePrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'price_24h' => 'getPrice24h',
        'volume_24h' => 'getVolume24h',
        'last_trade_price' => 'getLastTradePrice'
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
    public $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['price_24h'] = isset($data['price_24h']) ? $data['price_24h'] : null;
        $this->container['volume_24h'] = isset($data['volume_24h']) ? $data['volume_24h'] : null;
        $this->container['last_trade_price'] = isset($data['last_trade_price']) ? $data['last_trade_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['symbol']) && !preg_match("/^[A-Z]{3,5}-[A-Z]{3,5}$/", $this->container['symbol'])) {
            $invalidProperties[] = "invalid value for 'symbol', must be conform to the pattern /^[A-Z]{3,5}-[A-Z]{3,5}$/.";
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
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Blockchain symbol identifier
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {

        if (!is_null($symbol) && (!preg_match("/^[A-Z]{3,5}-[A-Z]{3,5}$/", $symbol))) {
            throw new \InvalidArgumentException("invalid value for $symbol when calling PriceEvent., must conform to the pattern /^[A-Z]{3,5}-[A-Z]{3,5}$/.");
        }

        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets price_24h
     *
     * @return double|null
     */
    public function getPrice24h()
    {
        return $this->container['price_24h'];
    }

    /**
     * Sets price_24h
     *
     * @param double|null $price_24h price_24h
     *
     * @return $this
     */
    public function setPrice24h($price_24h)
    {
        $this->container['price_24h'] = $price_24h;

        return $this;
    }

    /**
     * Gets volume_24h
     *
     * @return double|null
     */
    public function getVolume24h()
    {
        return $this->container['volume_24h'];
    }

    /**
     * Sets volume_24h
     *
     * @param double|null $volume_24h volume_24h
     *
     * @return $this
     */
    public function setVolume24h($volume_24h)
    {
        $this->container['volume_24h'] = $volume_24h;

        return $this;
    }

    /**
     * Gets last_trade_price
     *
     * @return double|null
     */
    public function getLastTradePrice()
    {
        return $this->container['last_trade_price'];
    }

    /**
     * Sets last_trade_price
     *
     * @param double|null $last_trade_price last_trade_price
     *
     * @return $this
     */
    public function setLastTradePrice($last_trade_price)
    {
        $this->container['last_trade_price'] = $last_trade_price;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


