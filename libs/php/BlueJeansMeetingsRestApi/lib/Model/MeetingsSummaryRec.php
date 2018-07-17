<?php
/**
 * MeetingsSummaryRec
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
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
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
 * MeetingsSummaryRec Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingsSummaryRec implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MeetingsSummaryRec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meetings_count' => 'int',
        'country_count' => 'int',
        'registered_users' => 'int',
        'active_users' => 'int',
        'total_minutes' => 'int',
        'average_call_duration' => 'float',
        'total_participants' => 'int',
        'recording_count' => 'int',
        'average_participants' => 'float',
        'video_share_count' => 'int',
        'city_count' => 'int',
        'recording_view_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meetings_count' => null,
        'country_count' => null,
        'registered_users' => null,
        'active_users' => null,
        'total_minutes' => null,
        'average_call_duration' => null,
        'total_participants' => null,
        'recording_count' => null,
        'average_participants' => null,
        'video_share_count' => null,
        'city_count' => null,
        'recording_view_count' => null
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
        'meetings_count' => 'meetings_count',
        'country_count' => 'country_count',
        'registered_users' => 'registered_users',
        'active_users' => 'active_users',
        'total_minutes' => 'total_minutes',
        'average_call_duration' => 'average_call_duration',
        'total_participants' => 'total_participants',
        'recording_count' => 'recording_count',
        'average_participants' => 'average_participants',
        'video_share_count' => 'video_share_count',
        'city_count' => 'city_count',
        'recording_view_count' => 'recording_view_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'meetings_count' => 'setMeetingsCount',
        'country_count' => 'setCountryCount',
        'registered_users' => 'setRegisteredUsers',
        'active_users' => 'setActiveUsers',
        'total_minutes' => 'setTotalMinutes',
        'average_call_duration' => 'setAverageCallDuration',
        'total_participants' => 'setTotalParticipants',
        'recording_count' => 'setRecordingCount',
        'average_participants' => 'setAverageParticipants',
        'video_share_count' => 'setVideoShareCount',
        'city_count' => 'setCityCount',
        'recording_view_count' => 'setRecordingViewCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'meetings_count' => 'getMeetingsCount',
        'country_count' => 'getCountryCount',
        'registered_users' => 'getRegisteredUsers',
        'active_users' => 'getActiveUsers',
        'total_minutes' => 'getTotalMinutes',
        'average_call_duration' => 'getAverageCallDuration',
        'total_participants' => 'getTotalParticipants',
        'recording_count' => 'getRecordingCount',
        'average_participants' => 'getAverageParticipants',
        'video_share_count' => 'getVideoShareCount',
        'city_count' => 'getCityCount',
        'recording_view_count' => 'getRecordingViewCount'
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
        $this->container['meetings_count'] = isset($data['meetings_count']) ? $data['meetings_count'] : null;
        $this->container['country_count'] = isset($data['country_count']) ? $data['country_count'] : null;
        $this->container['registered_users'] = isset($data['registered_users']) ? $data['registered_users'] : null;
        $this->container['active_users'] = isset($data['active_users']) ? $data['active_users'] : null;
        $this->container['total_minutes'] = isset($data['total_minutes']) ? $data['total_minutes'] : null;
        $this->container['average_call_duration'] = isset($data['average_call_duration']) ? $data['average_call_duration'] : null;
        $this->container['total_participants'] = isset($data['total_participants']) ? $data['total_participants'] : null;
        $this->container['recording_count'] = isset($data['recording_count']) ? $data['recording_count'] : null;
        $this->container['average_participants'] = isset($data['average_participants']) ? $data['average_participants'] : null;
        $this->container['video_share_count'] = isset($data['video_share_count']) ? $data['video_share_count'] : null;
        $this->container['city_count'] = isset($data['city_count']) ? $data['city_count'] : null;
        $this->container['recording_view_count'] = isset($data['recording_view_count']) ? $data['recording_view_count'] : null;
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
     * Gets meetings_count
     * @return int
     */
    public function getMeetingsCount()
    {
        return $this->container['meetings_count'];
    }

    /**
     * Sets meetings_count
     * @param int $meetings_count Number of meetings held
     * @return $this
     */
    public function setMeetingsCount($meetings_count)
    {
        $this->container['meetings_count'] = $meetings_count;

        return $this;
    }

    /**
     * Gets country_count
     * @return int
     */
    public function getCountryCount()
    {
        return $this->container['country_count'];
    }

    /**
     * Sets country_count
     * @param int $country_count Number of countries with participants in a meeting
     * @return $this
     */
    public function setCountryCount($country_count)
    {
        $this->container['country_count'] = $country_count;

        return $this;
    }

    /**
     * Gets registered_users
     * @return int
     */
    public function getRegisteredUsers()
    {
        return $this->container['registered_users'];
    }

    /**
     * Sets registered_users
     * @param int $registered_users Number of registered BlueJeans users who were in meetings.
     * @return $this
     */
    public function setRegisteredUsers($registered_users)
    {
        $this->container['registered_users'] = $registered_users;

        return $this;
    }

    /**
     * Gets active_users
     * @return int
     */
    public function getActiveUsers()
    {
        return $this->container['active_users'];
    }

    /**
     * Sets active_users
     * @param int $active_users
     * @return $this
     */
    public function setActiveUsers($active_users)
    {
        $this->container['active_users'] = $active_users;

        return $this;
    }

    /**
     * Gets total_minutes
     * @return int
     */
    public function getTotalMinutes()
    {
        return $this->container['total_minutes'];
    }

    /**
     * Sets total_minutes
     * @param int $total_minutes Total minutes of meetings.
     * @return $this
     */
    public function setTotalMinutes($total_minutes)
    {
        $this->container['total_minutes'] = $total_minutes;

        return $this;
    }

    /**
     * Gets average_call_duration
     * @return float
     */
    public function getAverageCallDuration()
    {
        return $this->container['average_call_duration'];
    }

    /**
     * Sets average_call_duration
     * @param float $average_call_duration Average number of minutes participants were in a meeting.
     * @return $this
     */
    public function setAverageCallDuration($average_call_duration)
    {
        $this->container['average_call_duration'] = $average_call_duration;

        return $this;
    }

    /**
     * Gets total_participants
     * @return int
     */
    public function getTotalParticipants()
    {
        return $this->container['total_participants'];
    }

    /**
     * Sets total_participants
     * @param int $total_participants Total people who were in meetings.
     * @return $this
     */
    public function setTotalParticipants($total_participants)
    {
        $this->container['total_participants'] = $total_participants;

        return $this;
    }

    /**
     * Gets recording_count
     * @return int
     */
    public function getRecordingCount()
    {
        return $this->container['recording_count'];
    }

    /**
     * Sets recording_count
     * @param int $recording_count Total number of meetings recorded.
     * @return $this
     */
    public function setRecordingCount($recording_count)
    {
        $this->container['recording_count'] = $recording_count;

        return $this;
    }

    /**
     * Gets average_participants
     * @return float
     */
    public function getAverageParticipants()
    {
        return $this->container['average_participants'];
    }

    /**
     * Sets average_participants
     * @param float $average_participants Average number of participants per meeting.
     * @return $this
     */
    public function setAverageParticipants($average_participants)
    {
        $this->container['average_participants'] = $average_participants;

        return $this;
    }

    /**
     * Gets video_share_count
     * @return int
     */
    public function getVideoShareCount()
    {
        return $this->container['video_share_count'];
    }

    /**
     * Sets video_share_count
     * @param int $video_share_count
     * @return $this
     */
    public function setVideoShareCount($video_share_count)
    {
        $this->container['video_share_count'] = $video_share_count;

        return $this;
    }

    /**
     * Gets city_count
     * @return int
     */
    public function getCityCount()
    {
        return $this->container['city_count'];
    }

    /**
     * Sets city_count
     * @param int $city_count Total number of cities with meeting participants.
     * @return $this
     */
    public function setCityCount($city_count)
    {
        $this->container['city_count'] = $city_count;

        return $this;
    }

    /**
     * Gets recording_view_count
     * @return int
     */
    public function getRecordingViewCount()
    {
        return $this->container['recording_view_count'];
    }

    /**
     * Sets recording_view_count
     * @param int $recording_view_count Total number of times that recordings were viewed.
     * @return $this
     */
    public function setRecordingViewCount($recording_view_count)
    {
        $this->container['recording_view_count'] = $recording_view_count;

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


