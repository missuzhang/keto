<?php
/**
 * IntrospectionResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  keto\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Package main ORY Keto
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace keto\SDK\Model;

use \ArrayAccess;

/**
 * IntrospectionResponse Class Doc Comment
 *
 * @category    Class
 * @package     keto\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IntrospectionResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IntrospectionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'aud' => 'string[]',
        'client_id' => 'string',
        'exp' => 'int',
        'ext' => 'map[string,object]',
        'iat' => 'int',
        'iss' => 'string',
        'nbf' => 'int',
        'scope' => 'string',
        'sub' => 'string',
        'token_type' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'aud' => null,
        'client_id' => null,
        'exp' => 'int64',
        'ext' => null,
        'iat' => 'int64',
        'iss' => null,
        'nbf' => 'int64',
        'scope' => null,
        'sub' => null,
        'token_type' => null,
        'username' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
        'aud' => 'aud',
        'client_id' => 'client_id',
        'exp' => 'exp',
        'ext' => 'ext',
        'iat' => 'iat',
        'iss' => 'iss',
        'nbf' => 'nbf',
        'scope' => 'scope',
        'sub' => 'sub',
        'token_type' => 'token_type',
        'username' => 'username'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'aud' => 'setAud',
        'client_id' => 'setClientId',
        'exp' => 'setExp',
        'ext' => 'setExt',
        'iat' => 'setIat',
        'iss' => 'setIss',
        'nbf' => 'setNbf',
        'scope' => 'setScope',
        'sub' => 'setSub',
        'token_type' => 'setTokenType',
        'username' => 'setUsername'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'aud' => 'getAud',
        'client_id' => 'getClientId',
        'exp' => 'getExp',
        'ext' => 'getExt',
        'iat' => 'getIat',
        'iss' => 'getIss',
        'nbf' => 'getNbf',
        'scope' => 'getScope',
        'sub' => 'getSub',
        'token_type' => 'getTokenType',
        'username' => 'getUsername'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['iat'] = isset($data['iat']) ? $data['iat'] : null;
        $this->container['iss'] = isset($data['iss']) ? $data['iss'] : null;
        $this->container['nbf'] = isset($data['nbf']) ? $data['nbf'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets aud
     * @return string[]
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     * @param string[] $aud
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets exp
     * @return int
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     * @param int $exp
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets ext
     * @return map[string,object]
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     * @param map[string,object] $ext Session represents arbitrary session data.
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets iat
     * @return int
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     * @param int $iat
     * @return $this
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets iss
     * @return string
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     * @param string $iss
     * @return $this
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets nbf
     * @return int
     */
    public function getNbf()
    {
        return $this->container['nbf'];
    }

    /**
     * Sets nbf
     * @param int $nbf
     * @return $this
     */
    public function setNbf($nbf)
    {
        $this->container['nbf'] = $nbf;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sub
     * @return string
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     * @param string $sub Here, it's sub
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     * @param string $token_type
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\keto\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\keto\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


