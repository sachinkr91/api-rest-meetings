<?php
/**
 * MeetingSharing
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>
 *
 * OpenAPI spec version: 1.0.4407102018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;

/**
 * MeetingSharing Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingSharing implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'meetingSharing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'meeting_guid' => 'string',
        'owner_id' => 'int',
        'sharing_url' => 'string',
        'recepient_type' => '\BlueJeansMeetingsRestApi\Model\RecepientOptionsComp',
        'properties' => '\BlueJeansMeetingsRestApi\Model\MeetingSharingProperties',
        'status' => 'string',
        'downloadable' => 'bool',
        'passcode' => 'string',
        'validity' => 'string',
        'created' => 'int',
        'lastmodified' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'meeting_guid' => null,
        'owner_id' => null,
        'sharing_url' => null,
        'recepient_type' => null,
        'properties' => null,
        'status' => null,
        'downloadable' => null,
        'passcode' => null,
        'validity' => null,
        'created' => null,
        'lastmodified' => null
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
        'id' => 'id',
        'meeting_guid' => 'meetingGuid',
        'owner_id' => 'ownerId',
        'sharing_url' => 'sharingUrl',
        'recepient_type' => 'recepientType',
        'properties' => 'properties',
        'status' => 'status',
        'downloadable' => 'downloadable',
        'passcode' => 'passcode',
        'validity' => 'validity',
        'created' => 'created',
        'lastmodified' => 'lastmodified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'meeting_guid' => 'setMeetingGuid',
        'owner_id' => 'setOwnerId',
        'sharing_url' => 'setSharingUrl',
        'recepient_type' => 'setRecepientType',
        'properties' => 'setProperties',
        'status' => 'setStatus',
        'downloadable' => 'setDownloadable',
        'passcode' => 'setPasscode',
        'validity' => 'setValidity',
        'created' => 'setCreated',
        'lastmodified' => 'setLastmodified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'meeting_guid' => 'getMeetingGuid',
        'owner_id' => 'getOwnerId',
        'sharing_url' => 'getSharingUrl',
        'recepient_type' => 'getRecepientType',
        'properties' => 'getProperties',
        'status' => 'getStatus',
        'downloadable' => 'getDownloadable',
        'passcode' => 'getPasscode',
        'validity' => 'getValidity',
        'created' => 'getCreated',
        'lastmodified' => 'getLastmodified'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DELETED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['meeting_guid'] = isset($data['meeting_guid']) ? $data['meeting_guid'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['sharing_url'] = isset($data['sharing_url']) ? $data['sharing_url'] : null;
        $this->container['recepient_type'] = isset($data['recepient_type']) ? $data['recepient_type'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['downloadable'] = isset($data['downloadable']) ? $data['downloadable'] : null;
        $this->container['passcode'] = isset($data['passcode']) ? $data['passcode'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['lastmodified'] = isset($data['lastmodified']) ? $data['lastmodified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
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
     * @param int $id This field is the Sharing Authorization unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets meeting_guid
     * @return string
     */
    public function getMeetingGuid()
    {
        return $this->container['meeting_guid'];
    }

    /**
     * Sets meeting_guid
     * @param string $meeting_guid The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes.
     * @return $this
     */
    public function setMeetingGuid($meeting_guid)
    {
        $this->container['meeting_guid'] = $meeting_guid;

        return $this;
    }

    /**
     * Gets owner_id
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     * @param int $owner_id The ownerId field is the unique Id number of the BlueJeans account that owns the recording
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets sharing_url
     * @return string
     */
    public function getSharingUrl()
    {
        return $this->container['sharing_url'];
    }

    /**
     * Sets sharing_url
     * @param string $sharing_url
     * @return $this
     */
    public function setSharingUrl($sharing_url)
    {
        $this->container['sharing_url'] = $sharing_url;

        return $this;
    }

    /**
     * Gets recepient_type
     * @return \BlueJeansMeetingsRestApi\Model\RecepientOptionsComp
     */
    public function getRecepientType()
    {
        return $this->container['recepient_type'];
    }

    /**
     * Sets recepient_type
     * @param \BlueJeansMeetingsRestApi\Model\RecepientOptionsComp $recepient_type
     * @return $this
     */
    public function setRecepientType($recepient_type)
    {
        $this->container['recepient_type'] = $recepient_type;

        return $this;
    }

    /**
     * Gets properties
     * @return \BlueJeansMeetingsRestApi\Model\MeetingSharingProperties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param \BlueJeansMeetingsRestApi\Model\MeetingSharingProperties $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status This status field indicates the state of the sharing authorization record.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets downloadable
     * @return bool
     */
    public function getDownloadable()
    {
        return $this->container['downloadable'];
    }

    /**
     * Sets downloadable
     * @param bool $downloadable The downloadable field indicates whether the recording can be downloaded
     * @return $this
     */
    public function setDownloadable($downloadable)
    {
        $this->container['downloadable'] = $downloadable;

        return $this;
    }

    /**
     * Gets passcode
     * @return string
     */
    public function getPasscode()
    {
        return $this->container['passcode'];
    }

    /**
     * Sets passcode
     * @param string $passcode TBD
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->container['passcode'] = $passcode;

        return $this;
    }

    /**
     * Gets validity
     * @return string
     */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
     * Sets validity
     * @param string $validity TBD
     * @return $this
     */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;

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
     * @param int $created Date, since epoch time, that the recording was created (in milliseconds).
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets lastmodified
     * @return int
     */
    public function getLastmodified()
    {
        return $this->container['lastmodified'];
    }

    /**
     * Sets lastmodified
     * @param int $lastmodified Date, since epoch time, that the recording was last modified (in milliseconds).
     * @return $this
     */
    public function setLastmodified($lastmodified)
    {
        $this->container['lastmodified'] = $lastmodified;

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
            return json_encode(\BlueJeansMeetingsRestApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlueJeansMeetingsRestApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}


