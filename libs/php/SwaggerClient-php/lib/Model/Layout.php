<?php
/**
 * Layout
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Layout Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Layout implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Layout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'layout_mode' => 'string',
        'sub_layout_mode' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'layout_mode' => 'layoutMode',
        'sub_layout_mode' => 'subLayoutMode'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'layout_mode' => 'setLayoutMode',
        'sub_layout_mode' => 'setSubLayoutMode'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'layout_mode' => 'getLayoutMode',
        'sub_layout_mode' => 'getSubLayoutMode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LAYOUT_MODE_VIDEO = 'Video';
    const SUB_LAYOUT_MODE_VIDEO_CONTINIOUS_PRESENCE = 'VideoContiniousPresence';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLayoutModeAllowableValues()
    {
        return [
            self::LAYOUT_MODE_VIDEO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSubLayoutModeAllowableValues()
    {
        return [
            self::SUB_LAYOUT_MODE_VIDEO_CONTINIOUS_PRESENCE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['layout_mode'] = isset($data['layout_mode']) ? $data['layout_mode'] : null;
        $this->container['sub_layout_mode'] = isset($data['sub_layout_mode']) ? $data['sub_layout_mode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("Video");
        if (!in_array($this->container['layout_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'layout_mode', must be one of #{allowed_values}.";
        }

        $allowed_values = array("VideoContiniousPresence");
        if (!in_array($this->container['sub_layout_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sub_layout_mode', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("Video");
        if (!in_array($this->container['layout_mode'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("VideoContiniousPresence");
        if (!in_array($this->container['sub_layout_mode'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets layout_mode
     * @return string
     */
    public function getLayoutMode()
    {
        return $this->container['layout_mode'];
    }

    /**
     * Sets layout_mode
     * @param string $layout_mode
     * @return $this
     */
    public function setLayoutMode($layout_mode)
    {
        $allowed_values = array('Video');
        if (!in_array($layout_mode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'layout_mode', must be one of 'Video'");
        }
        $this->container['layout_mode'] = $layout_mode;

        return $this;
    }

    /**
     * Gets sub_layout_mode
     * @return string
     */
    public function getSubLayoutMode()
    {
        return $this->container['sub_layout_mode'];
    }

    /**
     * Sets sub_layout_mode
     * @param string $sub_layout_mode
     * @return $this
     */
    public function setSubLayoutMode($sub_layout_mode)
    {
        $allowed_values = array('VideoContiniousPresence');
        if (!in_array($sub_layout_mode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sub_layout_mode', must be one of 'VideoContiniousPresence'");
        }
        $this->container['sub_layout_mode'] = $sub_layout_mode;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


