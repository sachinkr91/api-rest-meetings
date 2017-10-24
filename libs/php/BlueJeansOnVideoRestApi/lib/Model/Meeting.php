<?php
/**
 * Meeting
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansOnVideoRestApi\Model;

use \ArrayAccess;

/**
 * Meeting Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansOnVideoRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Meeting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'start' => 'int',
        'end' => 'int',
        'timezone' => 'string',
        'numeric_meeting_id' => 'string',
        'attendee_passcode' => 'string',
        'add_attendee_passcode' => 'bool',
        'end_point_version' => 'string',
        'end_point_type' => 'string',
        'attendees' => '\BlueJeansOnVideoRestApi\Model\Attendee[]',
        'advanced_meeting_options' => '\BlueJeansOnVideoRestApi\Model\MeetingAdvancedMeetingOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'description' => null,
        'start' => 'int64',
        'end' => 'int64',
        'timezone' => null,
        'numeric_meeting_id' => null,
        'attendee_passcode' => null,
        'add_attendee_passcode' => null,
        'end_point_version' => null,
        'end_point_type' => null,
        'attendees' => null,
        'advanced_meeting_options' => null
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
        'title' => 'title',
        'description' => 'description',
        'start' => 'start',
        'end' => 'end',
        'timezone' => 'timezone',
        'numeric_meeting_id' => 'numericMeetingId',
        'attendee_passcode' => 'attendeePasscode',
        'add_attendee_passcode' => 'addAttendeePasscode',
        'end_point_version' => 'endPointVersion',
        'end_point_type' => 'endPointType',
        'attendees' => 'attendees',
        'advanced_meeting_options' => 'advancedMeetingOptions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'start' => 'setStart',
        'end' => 'setEnd',
        'timezone' => 'setTimezone',
        'numeric_meeting_id' => 'setNumericMeetingId',
        'attendee_passcode' => 'setAttendeePasscode',
        'add_attendee_passcode' => 'setAddAttendeePasscode',
        'end_point_version' => 'setEndPointVersion',
        'end_point_type' => 'setEndPointType',
        'attendees' => 'setAttendees',
        'advanced_meeting_options' => 'setAdvancedMeetingOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'start' => 'getStart',
        'end' => 'getEnd',
        'timezone' => 'getTimezone',
        'numeric_meeting_id' => 'getNumericMeetingId',
        'attendee_passcode' => 'getAttendeePasscode',
        'add_attendee_passcode' => 'getAddAttendeePasscode',
        'end_point_version' => 'getEndPointVersion',
        'end_point_type' => 'getEndPointType',
        'attendees' => 'getAttendees',
        'advanced_meeting_options' => 'getAdvancedMeetingOptions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : 'My Test Meeting';
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : 'America/New_York';
        $this->container['numeric_meeting_id'] = isset($data['numeric_meeting_id']) ? $data['numeric_meeting_id'] : null;
        $this->container['attendee_passcode'] = isset($data['attendee_passcode']) ? $data['attendee_passcode'] : null;
        $this->container['add_attendee_passcode'] = isset($data['add_attendee_passcode']) ? $data['add_attendee_passcode'] : null;
        $this->container['end_point_version'] = isset($data['end_point_version']) ? $data['end_point_version'] : '2.10';
        $this->container['end_point_type'] = isset($data['end_point_type']) ? $data['end_point_type'] : 'WEB_APP';
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['advanced_meeting_options'] = isset($data['advanced_meeting_options']) ? $data['advanced_meeting_options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalid_properties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalid_properties[] = "'end' can't be null";
        }
        if ($this->container['end_point_version'] === null) {
            $invalid_properties[] = "'end_point_version' can't be null";
        }
        if ($this->container['end_point_type'] === null) {
            $invalid_properties[] = "'end_point_type' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['end'] === null) {
            return false;
        }
        if ($this->container['end_point_version'] === null) {
            return false;
        }
        if ($this->container['end_point_type'] === null) {
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
     * @param int $id Unique identifier for meeting.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param int $start A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     * @return int
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     * @param int $end A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets numeric_meeting_id
     * @return string
     */
    public function getNumericMeetingId()
    {
        return $this->container['numeric_meeting_id'];
    }

    /**
     * Sets numeric_meeting_id
     * @param string $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
     * @return $this
     */
    public function setNumericMeetingId($numeric_meeting_id)
    {
        $this->container['numeric_meeting_id'] = $numeric_meeting_id;

        return $this;
    }

    /**
     * Gets attendee_passcode
     * @return string
     */
    public function getAttendeePasscode()
    {
        return $this->container['attendee_passcode'];
    }

    /**
     * Sets attendee_passcode
     * @param string $attendee_passcode
     * @return $this
     */
    public function setAttendeePasscode($attendee_passcode)
    {
        $this->container['attendee_passcode'] = $attendee_passcode;

        return $this;
    }

    /**
     * Gets add_attendee_passcode
     * @return bool
     */
    public function getAddAttendeePasscode()
    {
        return $this->container['add_attendee_passcode'];
    }

    /**
     * Sets add_attendee_passcode
     * @param bool $add_attendee_passcode Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
     * @return $this
     */
    public function setAddAttendeePasscode($add_attendee_passcode)
    {
        $this->container['add_attendee_passcode'] = $add_attendee_passcode;

        return $this;
    }

    /**
     * Gets end_point_version
     * @return string
     */
    public function getEndPointVersion()
    {
        return $this->container['end_point_version'];
    }

    /**
     * Sets end_point_version
     * @param string $end_point_version
     * @return $this
     */
    public function setEndPointVersion($end_point_version)
    {
        $this->container['end_point_version'] = $end_point_version;

        return $this;
    }

    /**
     * Gets end_point_type
     * @return string
     */
    public function getEndPointType()
    {
        return $this->container['end_point_type'];
    }

    /**
     * Sets end_point_type
     * @param string $end_point_type
     * @return $this
     */
    public function setEndPointType($end_point_type)
    {
        $this->container['end_point_type'] = $end_point_type;

        return $this;
    }

    /**
     * Gets attendees
     * @return \BlueJeansOnVideoRestApi\Model\Attendee[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     * @param \BlueJeansOnVideoRestApi\Model\Attendee[] $attendees
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets advanced_meeting_options
     * @return \BlueJeansOnVideoRestApi\Model\MeetingAdvancedMeetingOptions
     */
    public function getAdvancedMeetingOptions()
    {
        return $this->container['advanced_meeting_options'];
    }

    /**
     * Sets advanced_meeting_options
     * @param \BlueJeansOnVideoRestApi\Model\MeetingAdvancedMeetingOptions $advanced_meeting_options
     * @return $this
     */
    public function setAdvancedMeetingOptions($advanced_meeting_options)
    {
        $this->container['advanced_meeting_options'] = $advanced_meeting_options;

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
            return json_encode(\BlueJeansOnVideoRestApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlueJeansOnVideoRestApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}


