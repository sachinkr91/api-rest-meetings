<?php
/**
 * PayloadPairingCodeSIP
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * PayloadPairingCodeSIP Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayloadPairingCodeSIP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayloadPairingCodeSIP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endpoint_type' => 'string',
        'user_id' => 'int',
        'language_code' => 'string',
        'endpoint_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'endpoint_type' => null,
        'user_id' => null,
        'language_code' => null,
        'endpoint_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'endpoint_type' => 'endpointType',
        'user_id' => 'userId',
        'language_code' => 'languageCode',
        'endpoint_name' => 'endpointName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endpoint_type' => 'setEndpointType',
        'user_id' => 'setUserId',
        'language_code' => 'setLanguageCode',
        'endpoint_name' => 'setEndpointName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endpoint_type' => 'getEndpointType',
        'user_id' => 'getUserId',
        'language_code' => 'getLanguageCode',
        'endpoint_name' => 'getEndpointName'
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
        return self::$swaggerModelName;
    }

    const ENDPOINT_TYPE_GENERIC = 'GENERIC';
    const ENDPOINT_TYPE_LYNC = 'LYNC';
    const ENDPOINT_TYPE_JABBER = 'JABBER';
    const ENDPOINT_TYPE_BLUE_JEANS_BROWSER_ENDPOINT = 'BlueJeansBrowserEndpoint';
    const ENDPOINT_TYPE_BLUE_JEANS_MOBILE_ENDPOINT = 'BlueJeansMobileEndpoint';
    const ENDPOINT_TYPE_WRANGLER_SKYPE_ENDPOINT = 'WranglerSkypeEndpoint';
    const ENDPOINT_TYPE_PSTN = 'PSTN';
    const ENDPOINT_TYPE_DCP_AUDIO_ONLY = 'DCPAudioOnly';
    const LANGUAGE_CODE_EN = 'en';
    const LANGUAGE_CODE_EN_US = 'en-us';
    const LANGUAGE_CODE_EN_GB = 'en-gb';
    const LANGUAGE_CODE_DE = 'de';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndpointTypeAllowableValues()
    {
        return [
            self::ENDPOINT_TYPE_GENERIC,
            self::ENDPOINT_TYPE_LYNC,
            self::ENDPOINT_TYPE_JABBER,
            self::ENDPOINT_TYPE_BLUE_JEANS_BROWSER_ENDPOINT,
            self::ENDPOINT_TYPE_BLUE_JEANS_MOBILE_ENDPOINT,
            self::ENDPOINT_TYPE_WRANGLER_SKYPE_ENDPOINT,
            self::ENDPOINT_TYPE_PSTN,
            self::ENDPOINT_TYPE_DCP_AUDIO_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageCodeAllowableValues()
    {
        return [
            self::LANGUAGE_CODE_EN,
            self::LANGUAGE_CODE_EN_US,
            self::LANGUAGE_CODE_EN_GB,
            self::LANGUAGE_CODE_DE,
        ];
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
        $this->container['endpoint_type'] = isset($data['endpoint_type']) ? $data['endpoint_type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : 'en';
        $this->container['endpoint_name'] = isset($data['endpoint_name']) ? $data['endpoint_name'] : 'My Test Endpoint';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['endpoint_type'] === null) {
            $invalidProperties[] = "'endpoint_type' can't be null";
        }
        $allowedValues = $this->getEndpointTypeAllowableValues();
        if (!is_null($this->container['endpoint_type']) && !in_array($this->container['endpoint_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'endpoint_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLanguageCodeAllowableValues();
        if (!is_null($this->container['language_code']) && !in_array($this->container['language_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets endpoint_type
     *
     * @return string
     */
    public function getEndpointType()
    {
        return $this->container['endpoint_type'];
    }

    /**
     * Sets endpoint_type
     *
     * @param string $endpoint_type Type of physical device is pairing.
     *
     * @return $this
     */
    public function setEndpointType($endpoint_type)
    {
        $allowedValues = $this->getEndpointTypeAllowableValues();
        if (!in_array($endpoint_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'endpoint_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['endpoint_type'] = $endpoint_type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id Optional database id of user associated with endpoint
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code Optional language code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $allowedValues = $this->getLanguageCodeAllowableValues();
        if (!is_null($language_code) && !in_array($language_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets endpoint_name
     *
     * @return string
     */
    public function getEndpointName()
    {
        return $this->container['endpoint_name'];
    }

    /**
     * Sets endpoint_name
     *
     * @param string $endpoint_name Optional name of endpoint
     *
     * @return $this
     */
    public function setEndpointName($endpoint_name)
    {
        $this->container['endpoint_name'] = $endpoint_name;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


