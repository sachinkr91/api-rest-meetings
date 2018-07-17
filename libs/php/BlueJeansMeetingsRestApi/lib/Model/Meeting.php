<?php
/**
 * Meeting
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
 * Meeting Class Doc Comment
 *
 * @category    Class
 * @description 2/5/2018 -- JSON object containing the  fields describing a BlueJeans meeting. Includes recurring meeting fields.
 * @package     BlueJeansMeetingsRestApi
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
        'uuid' => 'string',
        'title' => 'string',
        'description' => 'string',
        'start' => 'int',
        'end' => 'int',
        'timezone' => 'string',
        'advanced_meeting_options' => '\BlueJeansMeetingsRestApi\Model\MeetingAdvancedMeetingOptions',
        'notification_url' => 'string',
        'notification_data' => 'string',
        'moderator' => '\BlueJeansMeetingsRestApi\Model\MeetingModerator',
        'numeric_meeting_id' => 'string',
        'attendee_passcode' => 'string',
        'add_attendee_passcode' => 'bool',
        'delete' => 'bool',
        'allow720p' => 'bool',
        'status' => 'string',
        'locked' => 'bool',
        'seqeuence_number' => 'int',
        'ics_uid' => 'string',
        'end_point_type' => 'string',
        'end_point_version' => 'string',
        'attendees' => '\BlueJeansMeetingsRestApi\Model\Attendee[]',
        'is_large_meeting' => 'bool',
        'created' => 'int',
        'last_modified' => 'int',
        'is_expired' => 'bool',
        'parent_meeting_id' => 'int',
        'parent_meeting_uuid' => 'string',
        'next_occurrence' => 'string',
        'timeless_meeting' => 'bool',
        'endless_meeting' => 'bool',
        'recurrence_pattern' => '\BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern',
        'first' => '\BlueJeansMeetingsRestApi\Model\StartEnd',
        'last' => '\BlueJeansMeetingsRestApi\Model\StartEnd',
        'next' => '\BlueJeansMeetingsRestApi\Model\StartEnd',
        'next_start' => 'int',
        'next_end' => 'int',
        'is_personal_meeting' => 'bool',
        'invitee_join_option' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'uuid' => null,
        'title' => null,
        'description' => null,
        'start' => 'integer',
        'end' => 'integer',
        'timezone' => null,
        'advanced_meeting_options' => null,
        'notification_url' => null,
        'notification_data' => null,
        'moderator' => null,
        'numeric_meeting_id' => null,
        'attendee_passcode' => null,
        'add_attendee_passcode' => null,
        'delete' => null,
        'allow720p' => null,
        'status' => null,
        'locked' => null,
        'seqeuence_number' => null,
        'ics_uid' => null,
        'end_point_type' => null,
        'end_point_version' => null,
        'attendees' => null,
        'is_large_meeting' => null,
        'created' => null,
        'last_modified' => null,
        'is_expired' => null,
        'parent_meeting_id' => null,
        'parent_meeting_uuid' => null,
        'next_occurrence' => null,
        'timeless_meeting' => null,
        'endless_meeting' => null,
        'recurrence_pattern' => null,
        'first' => null,
        'last' => null,
        'next' => null,
        'next_start' => null,
        'next_end' => null,
        'is_personal_meeting' => null,
        'invitee_join_option' => null
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
        'uuid' => 'uuid',
        'title' => 'title',
        'description' => 'description',
        'start' => 'start',
        'end' => 'end',
        'timezone' => 'timezone',
        'advanced_meeting_options' => 'advancedMeetingOptions',
        'notification_url' => 'notificationUrl',
        'notification_data' => 'notificationData',
        'moderator' => 'moderator',
        'numeric_meeting_id' => 'numericMeetingId',
        'attendee_passcode' => 'attendeePasscode',
        'add_attendee_passcode' => 'addAttendeePasscode',
        'delete' => 'delete',
        'allow720p' => 'allow720p',
        'status' => 'status',
        'locked' => 'locked',
        'seqeuence_number' => 'seqeuenceNumber',
        'ics_uid' => 'icsUid',
        'end_point_type' => 'endPointType',
        'end_point_version' => 'endPointVersion',
        'attendees' => 'attendees',
        'is_large_meeting' => 'isLargeMeeting',
        'created' => 'created',
        'last_modified' => 'lastModified',
        'is_expired' => 'isExpired',
        'parent_meeting_id' => 'parentMeetingId',
        'parent_meeting_uuid' => 'parentMeetingUUID',
        'next_occurrence' => 'nextOccurrence',
        'timeless_meeting' => 'timelessMeeting',
        'endless_meeting' => 'endlessMeeting',
        'recurrence_pattern' => 'recurrencePattern',
        'first' => 'first',
        'last' => 'last',
        'next' => 'next',
        'next_start' => 'nextStart',
        'next_end' => 'nextEnd',
        'is_personal_meeting' => 'isPersonalMeeting',
        'invitee_join_option' => 'inviteeJoinOption'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'start' => 'setStart',
        'end' => 'setEnd',
        'timezone' => 'setTimezone',
        'advanced_meeting_options' => 'setAdvancedMeetingOptions',
        'notification_url' => 'setNotificationUrl',
        'notification_data' => 'setNotificationData',
        'moderator' => 'setModerator',
        'numeric_meeting_id' => 'setNumericMeetingId',
        'attendee_passcode' => 'setAttendeePasscode',
        'add_attendee_passcode' => 'setAddAttendeePasscode',
        'delete' => 'setDelete',
        'allow720p' => 'setAllow720p',
        'status' => 'setStatus',
        'locked' => 'setLocked',
        'seqeuence_number' => 'setSeqeuenceNumber',
        'ics_uid' => 'setIcsUid',
        'end_point_type' => 'setEndPointType',
        'end_point_version' => 'setEndPointVersion',
        'attendees' => 'setAttendees',
        'is_large_meeting' => 'setIsLargeMeeting',
        'created' => 'setCreated',
        'last_modified' => 'setLastModified',
        'is_expired' => 'setIsExpired',
        'parent_meeting_id' => 'setParentMeetingId',
        'parent_meeting_uuid' => 'setParentMeetingUuid',
        'next_occurrence' => 'setNextOccurrence',
        'timeless_meeting' => 'setTimelessMeeting',
        'endless_meeting' => 'setEndlessMeeting',
        'recurrence_pattern' => 'setRecurrencePattern',
        'first' => 'setFirst',
        'last' => 'setLast',
        'next' => 'setNext',
        'next_start' => 'setNextStart',
        'next_end' => 'setNextEnd',
        'is_personal_meeting' => 'setIsPersonalMeeting',
        'invitee_join_option' => 'setInviteeJoinOption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'start' => 'getStart',
        'end' => 'getEnd',
        'timezone' => 'getTimezone',
        'advanced_meeting_options' => 'getAdvancedMeetingOptions',
        'notification_url' => 'getNotificationUrl',
        'notification_data' => 'getNotificationData',
        'moderator' => 'getModerator',
        'numeric_meeting_id' => 'getNumericMeetingId',
        'attendee_passcode' => 'getAttendeePasscode',
        'add_attendee_passcode' => 'getAddAttendeePasscode',
        'delete' => 'getDelete',
        'allow720p' => 'getAllow720p',
        'status' => 'getStatus',
        'locked' => 'getLocked',
        'seqeuence_number' => 'getSeqeuenceNumber',
        'ics_uid' => 'getIcsUid',
        'end_point_type' => 'getEndPointType',
        'end_point_version' => 'getEndPointVersion',
        'attendees' => 'getAttendees',
        'is_large_meeting' => 'getIsLargeMeeting',
        'created' => 'getCreated',
        'last_modified' => 'getLastModified',
        'is_expired' => 'getIsExpired',
        'parent_meeting_id' => 'getParentMeetingId',
        'parent_meeting_uuid' => 'getParentMeetingUuid',
        'next_occurrence' => 'getNextOccurrence',
        'timeless_meeting' => 'getTimelessMeeting',
        'endless_meeting' => 'getEndlessMeeting',
        'recurrence_pattern' => 'getRecurrencePattern',
        'first' => 'getFirst',
        'last' => 'getLast',
        'next' => 'getNext',
        'next_start' => 'getNextStart',
        'next_end' => 'getNextEnd',
        'is_personal_meeting' => 'getIsPersonalMeeting',
        'invitee_join_option' => 'getInviteeJoinOption'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : 'My Test Meeting';
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : 'America/New_York';
        $this->container['advanced_meeting_options'] = isset($data['advanced_meeting_options']) ? $data['advanced_meeting_options'] : null;
        $this->container['notification_url'] = isset($data['notification_url']) ? $data['notification_url'] : null;
        $this->container['notification_data'] = isset($data['notification_data']) ? $data['notification_data'] : null;
        $this->container['moderator'] = isset($data['moderator']) ? $data['moderator'] : null;
        $this->container['numeric_meeting_id'] = isset($data['numeric_meeting_id']) ? $data['numeric_meeting_id'] : null;
        $this->container['attendee_passcode'] = isset($data['attendee_passcode']) ? $data['attendee_passcode'] : null;
        $this->container['add_attendee_passcode'] = isset($data['add_attendee_passcode']) ? $data['add_attendee_passcode'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['allow720p'] = isset($data['allow720p']) ? $data['allow720p'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['seqeuence_number'] = isset($data['seqeuence_number']) ? $data['seqeuence_number'] : null;
        $this->container['ics_uid'] = isset($data['ics_uid']) ? $data['ics_uid'] : null;
        $this->container['end_point_type'] = isset($data['end_point_type']) ? $data['end_point_type'] : 'WEB_APP';
        $this->container['end_point_version'] = isset($data['end_point_version']) ? $data['end_point_version'] : '2.10';
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['is_large_meeting'] = isset($data['is_large_meeting']) ? $data['is_large_meeting'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['is_expired'] = isset($data['is_expired']) ? $data['is_expired'] : null;
        $this->container['parent_meeting_id'] = isset($data['parent_meeting_id']) ? $data['parent_meeting_id'] : null;
        $this->container['parent_meeting_uuid'] = isset($data['parent_meeting_uuid']) ? $data['parent_meeting_uuid'] : null;
        $this->container['next_occurrence'] = isset($data['next_occurrence']) ? $data['next_occurrence'] : null;
        $this->container['timeless_meeting'] = isset($data['timeless_meeting']) ? $data['timeless_meeting'] : null;
        $this->container['endless_meeting'] = isset($data['endless_meeting']) ? $data['endless_meeting'] : null;
        $this->container['recurrence_pattern'] = isset($data['recurrence_pattern']) ? $data['recurrence_pattern'] : null;
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['next_start'] = isset($data['next_start']) ? $data['next_start'] : null;
        $this->container['next_end'] = isset($data['next_end']) ? $data['next_end'] : null;
        $this->container['is_personal_meeting'] = isset($data['is_personal_meeting']) ? $data['is_personal_meeting'] : false;
        $this->container['invitee_join_option'] = isset($data['invitee_join_option']) ? $data['invitee_join_option'] : null;
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
        if ($this->container['end_point_type'] === null) {
            $invalid_properties[] = "'end_point_type' can't be null";
        }
        if ($this->container['end_point_version'] === null) {
            $invalid_properties[] = "'end_point_version' can't be null";
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
        if ($this->container['end_point_type'] === null) {
            return false;
        }
        if ($this->container['end_point_version'] === null) {
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
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
     * Gets advanced_meeting_options
     * @return \BlueJeansMeetingsRestApi\Model\MeetingAdvancedMeetingOptions
     */
    public function getAdvancedMeetingOptions()
    {
        return $this->container['advanced_meeting_options'];
    }

    /**
     * Sets advanced_meeting_options
     * @param \BlueJeansMeetingsRestApi\Model\MeetingAdvancedMeetingOptions $advanced_meeting_options
     * @return $this
     */
    public function setAdvancedMeetingOptions($advanced_meeting_options)
    {
        $this->container['advanced_meeting_options'] = $advanced_meeting_options;

        return $this;
    }

    /**
     * Gets notification_url
     * @return string
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     * @param string $notification_url this property is not used in the BlueJeans Meetings product
     * @return $this
     */
    public function setNotificationUrl($notification_url)
    {
        $this->container['notification_url'] = $notification_url;

        return $this;
    }

    /**
     * Gets notification_data
     * @return string
     */
    public function getNotificationData()
    {
        return $this->container['notification_data'];
    }

    /**
     * Sets notification_data
     * @param string $notification_data this property is not used in the BlueJeans Meetings product
     * @return $this
     */
    public function setNotificationData($notification_data)
    {
        $this->container['notification_data'] = $notification_data;

        return $this;
    }

    /**
     * Gets moderator
     * @return \BlueJeansMeetingsRestApi\Model\MeetingModerator
     */
    public function getModerator()
    {
        return $this->container['moderator'];
    }

    /**
     * Sets moderator
     * @param \BlueJeansMeetingsRestApi\Model\MeetingModerator $moderator
     * @return $this
     */
    public function setModerator($moderator)
    {
        $this->container['moderator'] = $moderator;

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
     * Gets delete
     * @return bool
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     * @param bool $delete
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets allow720p
     * @return bool
     */
    public function getAllow720p()
    {
        return $this->container['allow720p'];
    }

    /**
     * Sets allow720p
     * @param bool $allow720p
     * @return $this
     */
    public function setAllow720p($allow720p)
    {
        $this->container['allow720p'] = $allow720p;

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
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets locked
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param bool $locked
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets seqeuence_number
     * @return int
     */
    public function getSeqeuenceNumber()
    {
        return $this->container['seqeuence_number'];
    }

    /**
     * Sets seqeuence_number
     * @param int $seqeuence_number
     * @return $this
     */
    public function setSeqeuenceNumber($seqeuence_number)
    {
        $this->container['seqeuence_number'] = $seqeuence_number;

        return $this;
    }

    /**
     * Gets ics_uid
     * @return string
     */
    public function getIcsUid()
    {
        return $this->container['ics_uid'];
    }

    /**
     * Sets ics_uid
     * @param string $ics_uid
     * @return $this
     */
    public function setIcsUid($ics_uid)
    {
        $this->container['ics_uid'] = $ics_uid;

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
     * Gets attendees
     * @return \BlueJeansMeetingsRestApi\Model\Attendee[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     * @param \BlueJeansMeetingsRestApi\Model\Attendee[] $attendees
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets is_large_meeting
     * @return bool
     */
    public function getIsLargeMeeting()
    {
        return $this->container['is_large_meeting'];
    }

    /**
     * Sets is_large_meeting
     * @param bool $is_large_meeting If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
     * @return $this
     */
    public function setIsLargeMeeting($is_large_meeting)
    {
        $this->container['is_large_meeting'] = $is_large_meeting;

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
     * @param int $created This is the epoch-based time (in milliseconds) when the meeting was initially created.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets last_modified
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param int $last_modified This is the epoch-based time (in milliseconds) when the meeting was last changed.
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets is_expired
     * @return bool
     */
    public function getIsExpired()
    {
        return $this->container['is_expired'];
    }

    /**
     * Sets is_expired
     * @param bool $is_expired
     * @return $this
     */
    public function setIsExpired($is_expired)
    {
        $this->container['is_expired'] = $is_expired;

        return $this;
    }

    /**
     * Gets parent_meeting_id
     * @return int
     */
    public function getParentMeetingId()
    {
        return $this->container['parent_meeting_id'];
    }

    /**
     * Sets parent_meeting_id
     * @param int $parent_meeting_id This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.
     * @return $this
     */
    public function setParentMeetingId($parent_meeting_id)
    {
        $this->container['parent_meeting_id'] = $parent_meeting_id;

        return $this;
    }

    /**
     * Gets parent_meeting_uuid
     * @return string
     */
    public function getParentMeetingUuid()
    {
        return $this->container['parent_meeting_uuid'];
    }

    /**
     * Sets parent_meeting_uuid
     * @param string $parent_meeting_uuid
     * @return $this
     */
    public function setParentMeetingUuid($parent_meeting_uuid)
    {
        $this->container['parent_meeting_uuid'] = $parent_meeting_uuid;

        return $this;
    }

    /**
     * Gets next_occurrence
     * @return string
     */
    public function getNextOccurrence()
    {
        return $this->container['next_occurrence'];
    }

    /**
     * Sets next_occurrence
     * @param string $next_occurrence
     * @return $this
     */
    public function setNextOccurrence($next_occurrence)
    {
        $this->container['next_occurrence'] = $next_occurrence;

        return $this;
    }

    /**
     * Gets timeless_meeting
     * @return bool
     */
    public function getTimelessMeeting()
    {
        return $this->container['timeless_meeting'];
    }

    /**
     * Sets timeless_meeting
     * @param bool $timeless_meeting
     * @return $this
     */
    public function setTimelessMeeting($timeless_meeting)
    {
        $this->container['timeless_meeting'] = $timeless_meeting;

        return $this;
    }

    /**
     * Gets endless_meeting
     * @return bool
     */
    public function getEndlessMeeting()
    {
        return $this->container['endless_meeting'];
    }

    /**
     * Sets endless_meeting
     * @param bool $endless_meeting
     * @return $this
     */
    public function setEndlessMeeting($endless_meeting)
    {
        $this->container['endless_meeting'] = $endless_meeting;

        return $this;
    }

    /**
     * Gets recurrence_pattern
     * @return \BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /**
     * Sets recurrence_pattern
     * @param \BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern $recurrence_pattern
     * @return $this
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }

    /**
     * Gets first
     * @return \BlueJeansMeetingsRestApi\Model\StartEnd
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     * @param \BlueJeansMeetingsRestApi\Model\StartEnd $first Starting and ending times of the first meeting in a chain of recurring meetings.
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     * @return \BlueJeansMeetingsRestApi\Model\StartEnd
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     * @param \BlueJeansMeetingsRestApi\Model\StartEnd $last Starting and ending times of the last meeting in a chain of recurring meetings.
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets next
     * @return \BlueJeansMeetingsRestApi\Model\StartEnd
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     * @param \BlueJeansMeetingsRestApi\Model\StartEnd $next Starting and ending times of the next meeting in a chain of recurring meetings.
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets next_start
     * @return int
     */
    public function getNextStart()
    {
        return $this->container['next_start'];
    }

    /**
     * Sets next_start
     * @param int $next_start
     * @return $this
     */
    public function setNextStart($next_start)
    {
        $this->container['next_start'] = $next_start;

        return $this;
    }

    /**
     * Gets next_end
     * @return int
     */
    public function getNextEnd()
    {
        return $this->container['next_end'];
    }

    /**
     * Sets next_end
     * @param int $next_end
     * @return $this
     */
    public function setNextEnd($next_end)
    {
        $this->container['next_end'] = $next_end;

        return $this;
    }

    /**
     * Gets is_personal_meeting
     * @return bool
     */
    public function getIsPersonalMeeting()
    {
        return $this->container['is_personal_meeting'];
    }

    /**
     * Sets is_personal_meeting
     * @param bool $is_personal_meeting Use the scheduler's personal meeting room and Id for this meeting.
     * @return $this
     */
    public function setIsPersonalMeeting($is_personal_meeting)
    {
        $this->container['is_personal_meeting'] = $is_personal_meeting;

        return $this;
    }

    /**
     * Gets invitee_join_option
     * @return int
     */
    public function getInviteeJoinOption()
    {
        return $this->container['invitee_join_option'];
    }

    /**
     * Sets invitee_join_option
     * @param int $invitee_join_option
     * @return $this
     */
    public function setInviteeJoinOption($invitee_join_option)
    {
        $this->container['invitee_join_option'] = $invitee_join_option;

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


