<?php
/**
 * Content
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
 * Content Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Content implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'content_type' => 'string',
        'content_description' => 'string',
        'content_url' => 'string',
        'user_id' => 'int',
        'content_location' => 'string',
        'created' => 'int',
        'modified' => 'int',
        'content_status' => 'string',
        'content_name' => 'string',
        'content_category' => 'string',
        'content_size' => 'int',
        'content_duration' => 'int',
        'content_properties' => '\Swagger\Client\Model\ContentContentProperties'
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
        'id' => 'id',
        'content_type' => 'contentType',
        'content_description' => 'contentDescription',
        'content_url' => 'contentUrl',
        'user_id' => 'userId',
        'content_location' => 'contentLocation',
        'created' => 'created',
        'modified' => 'modified',
        'content_status' => 'contentStatus',
        'content_name' => 'contentName',
        'content_category' => 'contentCategory',
        'content_size' => 'contentSize',
        'content_duration' => 'contentDuration',
        'content_properties' => 'contentProperties'
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
        'id' => 'setId',
        'content_type' => 'setContentType',
        'content_description' => 'setContentDescription',
        'content_url' => 'setContentUrl',
        'user_id' => 'setUserId',
        'content_location' => 'setContentLocation',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'content_status' => 'setContentStatus',
        'content_name' => 'setContentName',
        'content_category' => 'setContentCategory',
        'content_size' => 'setContentSize',
        'content_duration' => 'setContentDuration',
        'content_properties' => 'setContentProperties'
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
        'id' => 'getId',
        'content_type' => 'getContentType',
        'content_description' => 'getContentDescription',
        'content_url' => 'getContentUrl',
        'user_id' => 'getUserId',
        'content_location' => 'getContentLocation',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'content_status' => 'getContentStatus',
        'content_name' => 'getContentName',
        'content_category' => 'getContentCategory',
        'content_size' => 'getContentSize',
        'content_duration' => 'getContentDuration',
        'content_properties' => 'getContentProperties'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['content_description'] = isset($data['content_description']) ? $data['content_description'] : null;
        $this->container['content_url'] = isset($data['content_url']) ? $data['content_url'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['content_location'] = isset($data['content_location']) ? $data['content_location'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['content_status'] = isset($data['content_status']) ? $data['content_status'] : null;
        $this->container['content_name'] = isset($data['content_name']) ? $data['content_name'] : null;
        $this->container['content_category'] = isset($data['content_category']) ? $data['content_category'] : null;
        $this->container['content_size'] = isset($data['content_size']) ? $data['content_size'] : null;
        $this->container['content_duration'] = isset($data['content_duration']) ? $data['content_duration'] : null;
        $this->container['content_properties'] = isset($data['content_properties']) ? $data['content_properties'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_description
     * @return string
     */
    public function getContentDescription()
    {
        return $this->container['content_description'];
    }

    /**
     * Sets content_description
     * @param string $content_description
     * @return $this
     */
    public function setContentDescription($content_description)
    {
        $this->container['content_description'] = $content_description;

        return $this;
    }

    /**
     * Gets content_url
     * @return string
     */
    public function getContentUrl()
    {
        return $this->container['content_url'];
    }

    /**
     * Sets content_url
     * @param string $content_url
     * @return $this
     */
    public function setContentUrl($content_url)
    {
        $this->container['content_url'] = $content_url;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets content_location
     * @return string
     */
    public function getContentLocation()
    {
        return $this->container['content_location'];
    }

    /**
     * Sets content_location
     * @param string $content_location
     * @return $this
     */
    public function setContentLocation($content_location)
    {
        $this->container['content_location'] = $content_location;

        return $this;
    }

    /**
     * Gets created
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param int $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return int
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param int $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets content_status
     * @return string
     */
    public function getContentStatus()
    {
        return $this->container['content_status'];
    }

    /**
     * Sets content_status
     * @param string $content_status
     * @return $this
     */
    public function setContentStatus($content_status)
    {
        $this->container['content_status'] = $content_status;

        return $this;
    }

    /**
     * Gets content_name
     * @return string
     */
    public function getContentName()
    {
        return $this->container['content_name'];
    }

    /**
     * Sets content_name
     * @param string $content_name
     * @return $this
     */
    public function setContentName($content_name)
    {
        $this->container['content_name'] = $content_name;

        return $this;
    }

    /**
     * Gets content_category
     * @return string
     */
    public function getContentCategory()
    {
        return $this->container['content_category'];
    }

    /**
     * Sets content_category
     * @param string $content_category
     * @return $this
     */
    public function setContentCategory($content_category)
    {
        $this->container['content_category'] = $content_category;

        return $this;
    }

    /**
     * Gets content_size
     * @return int
     */
    public function getContentSize()
    {
        return $this->container['content_size'];
    }

    /**
     * Sets content_size
     * @param int $content_size
     * @return $this
     */
    public function setContentSize($content_size)
    {
        $this->container['content_size'] = $content_size;

        return $this;
    }

    /**
     * Gets content_duration
     * @return int
     */
    public function getContentDuration()
    {
        return $this->container['content_duration'];
    }

    /**
     * Sets content_duration
     * @param int $content_duration
     * @return $this
     */
    public function setContentDuration($content_duration)
    {
        $this->container['content_duration'] = $content_duration;

        return $this;
    }

    /**
     * Gets content_properties
     * @return \Swagger\Client\Model\ContentContentProperties
     */
    public function getContentProperties()
    {
        return $this->container['content_properties'];
    }

    /**
     * Sets content_properties
     * @param \Swagger\Client\Model\ContentContentProperties $content_properties
     * @return $this
     */
    public function setContentProperties($content_properties)
    {
        $this->container['content_properties'] = $content_properties;

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


