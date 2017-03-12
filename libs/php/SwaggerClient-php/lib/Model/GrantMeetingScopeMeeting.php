<?php
/**
 * GrantMeetingScopeMeeting
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
 * GrantMeetingScopeMeeting Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GrantMeetingScopeMeeting implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GrantMeeting_scope_meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'leader_id' => 'int',
        'meeting_numeric_id' => 'string',
        'meeting_uri' => 'string',
        'is_moderator' => 'bool',
        'endpoint_uri_set' => 'object[]',
        'meeting_id' => 'string'
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
        'leader_id' => 'leaderId',
        'meeting_numeric_id' => 'meetingNumericId',
        'meeting_uri' => 'meetingUri',
        'is_moderator' => 'isModerator',
        'endpoint_uri_set' => 'endpointUriSet',
        'meeting_id' => 'meetingId'
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
        'leader_id' => 'setLeaderId',
        'meeting_numeric_id' => 'setMeetingNumericId',
        'meeting_uri' => 'setMeetingUri',
        'is_moderator' => 'setIsModerator',
        'endpoint_uri_set' => 'setEndpointUriSet',
        'meeting_id' => 'setMeetingId'
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
        'leader_id' => 'getLeaderId',
        'meeting_numeric_id' => 'getMeetingNumericId',
        'meeting_uri' => 'getMeetingUri',
        'is_moderator' => 'getIsModerator',
        'endpoint_uri_set' => 'getEndpointUriSet',
        'meeting_id' => 'getMeetingId'
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
        $this->container['leader_id'] = isset($data['leader_id']) ? $data['leader_id'] : null;
        $this->container['meeting_numeric_id'] = isset($data['meeting_numeric_id']) ? $data['meeting_numeric_id'] : null;
        $this->container['meeting_uri'] = isset($data['meeting_uri']) ? $data['meeting_uri'] : null;
        $this->container['is_moderator'] = isset($data['is_moderator']) ? $data['is_moderator'] : null;
        $this->container['endpoint_uri_set'] = isset($data['endpoint_uri_set']) ? $data['endpoint_uri_set'] : null;
        $this->container['meeting_id'] = isset($data['meeting_id']) ? $data['meeting_id'] : null;
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
     * Gets leader_id
     * @return int
     */
    public function getLeaderId()
    {
        return $this->container['leader_id'];
    }

    /**
     * Sets leader_id
     * @param int $leader_id
     * @return $this
     */
    public function setLeaderId($leader_id)
    {
        $this->container['leader_id'] = $leader_id;

        return $this;
    }

    /**
     * Gets meeting_numeric_id
     * @return string
     */
    public function getMeetingNumericId()
    {
        return $this->container['meeting_numeric_id'];
    }

    /**
     * Sets meeting_numeric_id
     * @param string $meeting_numeric_id
     * @return $this
     */
    public function setMeetingNumericId($meeting_numeric_id)
    {
        $this->container['meeting_numeric_id'] = $meeting_numeric_id;

        return $this;
    }

    /**
     * Gets meeting_uri
     * @return string
     */
    public function getMeetingUri()
    {
        return $this->container['meeting_uri'];
    }

    /**
     * Sets meeting_uri
     * @param string $meeting_uri
     * @return $this
     */
    public function setMeetingUri($meeting_uri)
    {
        $this->container['meeting_uri'] = $meeting_uri;

        return $this;
    }

    /**
     * Gets is_moderator
     * @return bool
     */
    public function getIsModerator()
    {
        return $this->container['is_moderator'];
    }

    /**
     * Sets is_moderator
     * @param bool $is_moderator
     * @return $this
     */
    public function setIsModerator($is_moderator)
    {
        $this->container['is_moderator'] = $is_moderator;

        return $this;
    }

    /**
     * Gets endpoint_uri_set
     * @return object[]
     */
    public function getEndpointUriSet()
    {
        return $this->container['endpoint_uri_set'];
    }

    /**
     * Sets endpoint_uri_set
     * @param object[] $endpoint_uri_set
     * @return $this
     */
    public function setEndpointUriSet($endpoint_uri_set)
    {
        $this->container['endpoint_uri_set'] = $endpoint_uri_set;

        return $this;
    }

    /**
     * Gets meeting_id
     * @return string
     */
    public function getMeetingId()
    {
        return $this->container['meeting_id'];
    }

    /**
     * Sets meeting_id
     * @param string $meeting_id
     * @return $this
     */
    public function setMeetingId($meeting_id)
    {
        $this->container['meeting_id'] = $meeting_id;

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


