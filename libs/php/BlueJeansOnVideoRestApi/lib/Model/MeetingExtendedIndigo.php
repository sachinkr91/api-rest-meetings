<?php
/**
 * MeetingExtendedIndigo
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>
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
 * MeetingExtendedIndigo Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansOnVideoRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingExtendedIndigo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MeetingExtendedIndigo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_id' => 'string',
        'meeting_uuid' => 'string',
        'user_name' => 'string',
        'email' => 'string',
        'encryption_type' => 'int',
        'title' => 'string',
        'user_full_name' => 'string',
        'phone_number' => 'string',
        'user_features' => 'string',
        'scheduled_from' => 'string',
        'invitee_count' => 'int',
        'personal' => 'bool',
        'mute_on_entry' => 'bool',
        'auto_record' => 'bool',
        'enterprise_name' => 'string',
        'moderator_less' => 'bool',
        'start_time' => 'int',
        'end_time' => 'int',
        'total_call_seconds' => 'int',
        'create_time' => 'int',
        'endpoints_count' => 'int',
        'concurrent_endpoints' => 'int',
        'live_visible_endpoints_count' => 'int',
        'qualaroo_rating' => 'int',
        'qualaroo_count' => 'int',
        'meeting_recording' => 'bool',
        'video_share' => 'bool',
        'content_share' => 'bool',
        'live_recording' => 'bool',
        'live_video_share' => 'bool',
        'live_content_share' => 'bool',
        'large_meeting' => 'bool',
        'roi_distance' => 'float',
        'mpls' => 'bool',
        'id' => 'string',
        'endpoints' => '\BlueJeansOnVideoRestApi\Model\EndpointIndigo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_id' => null,
        'meeting_uuid' => null,
        'user_name' => null,
        'email' => null,
        'encryption_type' => null,
        'title' => null,
        'user_full_name' => null,
        'phone_number' => null,
        'user_features' => null,
        'scheduled_from' => null,
        'invitee_count' => null,
        'personal' => null,
        'mute_on_entry' => null,
        'auto_record' => null,
        'enterprise_name' => null,
        'moderator_less' => null,
        'start_time' => 'int64',
        'end_time' => 'int64',
        'total_call_seconds' => null,
        'create_time' => 'int64',
        'endpoints_count' => null,
        'concurrent_endpoints' => null,
        'live_visible_endpoints_count' => null,
        'qualaroo_rating' => null,
        'qualaroo_count' => null,
        'meeting_recording' => null,
        'video_share' => null,
        'content_share' => null,
        'live_recording' => null,
        'live_video_share' => null,
        'live_content_share' => null,
        'large_meeting' => null,
        'roi_distance' => 'float',
        'mpls' => null,
        'id' => null,
        'endpoints' => null
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
        'meeting_id' => 'meetingId',
        'meeting_uuid' => 'meetingUUID',
        'user_name' => 'userName',
        'email' => 'email',
        'encryption_type' => 'encryptionType',
        'title' => 'title',
        'user_full_name' => 'userFullName',
        'phone_number' => 'phoneNumber',
        'user_features' => 'userFeatures',
        'scheduled_from' => 'scheduledFrom',
        'invitee_count' => 'inviteeCount',
        'personal' => 'personal',
        'mute_on_entry' => 'muteOnEntry',
        'auto_record' => 'autoRecord',
        'enterprise_name' => 'enterpriseName',
        'moderator_less' => 'moderatorLess',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'total_call_seconds' => 'totalCallSeconds',
        'create_time' => 'createTime',
        'endpoints_count' => 'endpointsCount',
        'concurrent_endpoints' => 'concurrentEndpoints',
        'live_visible_endpoints_count' => 'liveVisibleEndpointsCount',
        'qualaroo_rating' => 'qualarooRating',
        'qualaroo_count' => 'qualarooCount',
        'meeting_recording' => 'meetingRecording',
        'video_share' => 'videoShare',
        'content_share' => 'contentShare',
        'live_recording' => 'liveRecording',
        'live_video_share' => 'liveVideoShare',
        'live_content_share' => 'liveContentShare',
        'large_meeting' => 'largeMeeting',
        'roi_distance' => 'roiDistance',
        'mpls' => 'mpls',
        'id' => 'id',
        'endpoints' => 'endpoints'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'meeting_uuid' => 'setMeetingUuid',
        'user_name' => 'setUserName',
        'email' => 'setEmail',
        'encryption_type' => 'setEncryptionType',
        'title' => 'setTitle',
        'user_full_name' => 'setUserFullName',
        'phone_number' => 'setPhoneNumber',
        'user_features' => 'setUserFeatures',
        'scheduled_from' => 'setScheduledFrom',
        'invitee_count' => 'setInviteeCount',
        'personal' => 'setPersonal',
        'mute_on_entry' => 'setMuteOnEntry',
        'auto_record' => 'setAutoRecord',
        'enterprise_name' => 'setEnterpriseName',
        'moderator_less' => 'setModeratorLess',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'total_call_seconds' => 'setTotalCallSeconds',
        'create_time' => 'setCreateTime',
        'endpoints_count' => 'setEndpointsCount',
        'concurrent_endpoints' => 'setConcurrentEndpoints',
        'live_visible_endpoints_count' => 'setLiveVisibleEndpointsCount',
        'qualaroo_rating' => 'setQualarooRating',
        'qualaroo_count' => 'setQualarooCount',
        'meeting_recording' => 'setMeetingRecording',
        'video_share' => 'setVideoShare',
        'content_share' => 'setContentShare',
        'live_recording' => 'setLiveRecording',
        'live_video_share' => 'setLiveVideoShare',
        'live_content_share' => 'setLiveContentShare',
        'large_meeting' => 'setLargeMeeting',
        'roi_distance' => 'setRoiDistance',
        'mpls' => 'setMpls',
        'id' => 'setId',
        'endpoints' => 'setEndpoints'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'meeting_uuid' => 'getMeetingUuid',
        'user_name' => 'getUserName',
        'email' => 'getEmail',
        'encryption_type' => 'getEncryptionType',
        'title' => 'getTitle',
        'user_full_name' => 'getUserFullName',
        'phone_number' => 'getPhoneNumber',
        'user_features' => 'getUserFeatures',
        'scheduled_from' => 'getScheduledFrom',
        'invitee_count' => 'getInviteeCount',
        'personal' => 'getPersonal',
        'mute_on_entry' => 'getMuteOnEntry',
        'auto_record' => 'getAutoRecord',
        'enterprise_name' => 'getEnterpriseName',
        'moderator_less' => 'getModeratorLess',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'total_call_seconds' => 'getTotalCallSeconds',
        'create_time' => 'getCreateTime',
        'endpoints_count' => 'getEndpointsCount',
        'concurrent_endpoints' => 'getConcurrentEndpoints',
        'live_visible_endpoints_count' => 'getLiveVisibleEndpointsCount',
        'qualaroo_rating' => 'getQualarooRating',
        'qualaroo_count' => 'getQualarooCount',
        'meeting_recording' => 'getMeetingRecording',
        'video_share' => 'getVideoShare',
        'content_share' => 'getContentShare',
        'live_recording' => 'getLiveRecording',
        'live_video_share' => 'getLiveVideoShare',
        'live_content_share' => 'getLiveContentShare',
        'large_meeting' => 'getLargeMeeting',
        'roi_distance' => 'getRoiDistance',
        'mpls' => 'getMpls',
        'id' => 'getId',
        'endpoints' => 'getEndpoints'
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

    const SCHEDULED_FROM_APP = 'WEB_APP';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getScheduledFromAllowableValues()
    {
        return [
            self::SCHEDULED_FROM_APP,
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
        $this->container['meeting_id'] = isset($data['meeting_id']) ? $data['meeting_id'] : null;
        $this->container['meeting_uuid'] = isset($data['meeting_uuid']) ? $data['meeting_uuid'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['encryption_type'] = isset($data['encryption_type']) ? $data['encryption_type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_full_name'] = isset($data['user_full_name']) ? $data['user_full_name'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['user_features'] = isset($data['user_features']) ? $data['user_features'] : null;
        $this->container['scheduled_from'] = isset($data['scheduled_from']) ? $data['scheduled_from'] : null;
        $this->container['invitee_count'] = isset($data['invitee_count']) ? $data['invitee_count'] : null;
        $this->container['personal'] = isset($data['personal']) ? $data['personal'] : null;
        $this->container['mute_on_entry'] = isset($data['mute_on_entry']) ? $data['mute_on_entry'] : null;
        $this->container['auto_record'] = isset($data['auto_record']) ? $data['auto_record'] : null;
        $this->container['enterprise_name'] = isset($data['enterprise_name']) ? $data['enterprise_name'] : null;
        $this->container['moderator_less'] = isset($data['moderator_less']) ? $data['moderator_less'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['total_call_seconds'] = isset($data['total_call_seconds']) ? $data['total_call_seconds'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['endpoints_count'] = isset($data['endpoints_count']) ? $data['endpoints_count'] : null;
        $this->container['concurrent_endpoints'] = isset($data['concurrent_endpoints']) ? $data['concurrent_endpoints'] : null;
        $this->container['live_visible_endpoints_count'] = isset($data['live_visible_endpoints_count']) ? $data['live_visible_endpoints_count'] : null;
        $this->container['qualaroo_rating'] = isset($data['qualaroo_rating']) ? $data['qualaroo_rating'] : null;
        $this->container['qualaroo_count'] = isset($data['qualaroo_count']) ? $data['qualaroo_count'] : null;
        $this->container['meeting_recording'] = isset($data['meeting_recording']) ? $data['meeting_recording'] : null;
        $this->container['video_share'] = isset($data['video_share']) ? $data['video_share'] : null;
        $this->container['content_share'] = isset($data['content_share']) ? $data['content_share'] : null;
        $this->container['live_recording'] = isset($data['live_recording']) ? $data['live_recording'] : null;
        $this->container['live_video_share'] = isset($data['live_video_share']) ? $data['live_video_share'] : null;
        $this->container['live_content_share'] = isset($data['live_content_share']) ? $data['live_content_share'] : null;
        $this->container['large_meeting'] = isset($data['large_meeting']) ? $data['large_meeting'] : null;
        $this->container['roi_distance'] = isset($data['roi_distance']) ? $data['roi_distance'] : null;
        $this->container['mpls'] = isset($data['mpls']) ? $data['mpls'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getScheduledFromAllowableValues();
        if (!in_array($this->container['scheduled_from'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'scheduled_from', must be one of '%s'",
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

        $allowed_values = $this->getScheduledFromAllowableValues();
        if (!in_array($this->container['scheduled_from'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $meeting_id This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
     * @return $this
     */
    public function setMeetingId($meeting_id)
    {
        $this->container['meeting_id'] = $meeting_id;

        return $this;
    }

    /**
     * Gets meeting_uuid
     * @return string
     */
    public function getMeetingUuid()
    {
        return $this->container['meeting_uuid'];
    }

    /**
     * Sets meeting_uuid
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
     * @return $this
     */
    public function setMeetingUuid($meeting_uuid)
    {
        $this->container['meeting_uuid'] = $meeting_uuid;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets encryption_type
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->container['encryption_type'];
    }

    /**
     * Sets encryption_type
     * @param int $encryption_type
     * @return $this
     */
    public function setEncryptionType($encryption_type)
    {
        $this->container['encryption_type'] = $encryption_type;

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
     * Gets user_full_name
     * @return string
     */
    public function getUserFullName()
    {
        return $this->container['user_full_name'];
    }

    /**
     * Sets user_full_name
     * @param string $user_full_name
     * @return $this
     */
    public function setUserFullName($user_full_name)
    {
        $this->container['user_full_name'] = $user_full_name;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets user_features
     * @return string
     */
    public function getUserFeatures()
    {
        return $this->container['user_features'];
    }

    /**
     * Sets user_features
     * @param string $user_features
     * @return $this
     */
    public function setUserFeatures($user_features)
    {
        $this->container['user_features'] = $user_features;

        return $this;
    }

    /**
     * Gets scheduled_from
     * @return string
     */
    public function getScheduledFrom()
    {
        return $this->container['scheduled_from'];
    }

    /**
     * Sets scheduled_from
     * @param string $scheduled_from
     * @return $this
     */
    public function setScheduledFrom($scheduled_from)
    {
        $allowed_values = $this->getScheduledFromAllowableValues();
        if (!is_null($scheduled_from) && !in_array($scheduled_from, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scheduled_from', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['scheduled_from'] = $scheduled_from;

        return $this;
    }

    /**
     * Gets invitee_count
     * @return int
     */
    public function getInviteeCount()
    {
        return $this->container['invitee_count'];
    }

    /**
     * Sets invitee_count
     * @param int $invitee_count
     * @return $this
     */
    public function setInviteeCount($invitee_count)
    {
        $this->container['invitee_count'] = $invitee_count;

        return $this;
    }

    /**
     * Gets personal
     * @return bool
     */
    public function getPersonal()
    {
        return $this->container['personal'];
    }

    /**
     * Sets personal
     * @param bool $personal
     * @return $this
     */
    public function setPersonal($personal)
    {
        $this->container['personal'] = $personal;

        return $this;
    }

    /**
     * Gets mute_on_entry
     * @return bool
     */
    public function getMuteOnEntry()
    {
        return $this->container['mute_on_entry'];
    }

    /**
     * Sets mute_on_entry
     * @param bool $mute_on_entry
     * @return $this
     */
    public function setMuteOnEntry($mute_on_entry)
    {
        $this->container['mute_on_entry'] = $mute_on_entry;

        return $this;
    }

    /**
     * Gets auto_record
     * @return bool
     */
    public function getAutoRecord()
    {
        return $this->container['auto_record'];
    }

    /**
     * Sets auto_record
     * @param bool $auto_record
     * @return $this
     */
    public function setAutoRecord($auto_record)
    {
        $this->container['auto_record'] = $auto_record;

        return $this;
    }

    /**
     * Gets enterprise_name
     * @return string
     */
    public function getEnterpriseName()
    {
        return $this->container['enterprise_name'];
    }

    /**
     * Sets enterprise_name
     * @param string $enterprise_name
     * @return $this
     */
    public function setEnterpriseName($enterprise_name)
    {
        $this->container['enterprise_name'] = $enterprise_name;

        return $this;
    }

    /**
     * Gets moderator_less
     * @return bool
     */
    public function getModeratorLess()
    {
        return $this->container['moderator_less'];
    }

    /**
     * Sets moderator_less
     * @param bool $moderator_less
     * @return $this
     */
    public function setModeratorLess($moderator_less)
    {
        $this->container['moderator_less'] = $moderator_less;

        return $this;
    }

    /**
     * Gets start_time
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param int $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param int $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets total_call_seconds
     * @return int
     */
    public function getTotalCallSeconds()
    {
        return $this->container['total_call_seconds'];
    }

    /**
     * Sets total_call_seconds
     * @param int $total_call_seconds
     * @return $this
     */
    public function setTotalCallSeconds($total_call_seconds)
    {
        $this->container['total_call_seconds'] = $total_call_seconds;

        return $this;
    }

    /**
     * Gets create_time
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     * @param int $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets endpoints_count
     * @return int
     */
    public function getEndpointsCount()
    {
        return $this->container['endpoints_count'];
    }

    /**
     * Sets endpoints_count
     * @param int $endpoints_count
     * @return $this
     */
    public function setEndpointsCount($endpoints_count)
    {
        $this->container['endpoints_count'] = $endpoints_count;

        return $this;
    }

    /**
     * Gets concurrent_endpoints
     * @return int
     */
    public function getConcurrentEndpoints()
    {
        return $this->container['concurrent_endpoints'];
    }

    /**
     * Sets concurrent_endpoints
     * @param int $concurrent_endpoints
     * @return $this
     */
    public function setConcurrentEndpoints($concurrent_endpoints)
    {
        $this->container['concurrent_endpoints'] = $concurrent_endpoints;

        return $this;
    }

    /**
     * Gets live_visible_endpoints_count
     * @return int
     */
    public function getLiveVisibleEndpointsCount()
    {
        return $this->container['live_visible_endpoints_count'];
    }

    /**
     * Sets live_visible_endpoints_count
     * @param int $live_visible_endpoints_count
     * @return $this
     */
    public function setLiveVisibleEndpointsCount($live_visible_endpoints_count)
    {
        $this->container['live_visible_endpoints_count'] = $live_visible_endpoints_count;

        return $this;
    }

    /**
     * Gets qualaroo_rating
     * @return int
     */
    public function getQualarooRating()
    {
        return $this->container['qualaroo_rating'];
    }

    /**
     * Sets qualaroo_rating
     * @param int $qualaroo_rating
     * @return $this
     */
    public function setQualarooRating($qualaroo_rating)
    {
        $this->container['qualaroo_rating'] = $qualaroo_rating;

        return $this;
    }

    /**
     * Gets qualaroo_count
     * @return int
     */
    public function getQualarooCount()
    {
        return $this->container['qualaroo_count'];
    }

    /**
     * Sets qualaroo_count
     * @param int $qualaroo_count
     * @return $this
     */
    public function setQualarooCount($qualaroo_count)
    {
        $this->container['qualaroo_count'] = $qualaroo_count;

        return $this;
    }

    /**
     * Gets meeting_recording
     * @return bool
     */
    public function getMeetingRecording()
    {
        return $this->container['meeting_recording'];
    }

    /**
     * Sets meeting_recording
     * @param bool $meeting_recording
     * @return $this
     */
    public function setMeetingRecording($meeting_recording)
    {
        $this->container['meeting_recording'] = $meeting_recording;

        return $this;
    }

    /**
     * Gets video_share
     * @return bool
     */
    public function getVideoShare()
    {
        return $this->container['video_share'];
    }

    /**
     * Sets video_share
     * @param bool $video_share
     * @return $this
     */
    public function setVideoShare($video_share)
    {
        $this->container['video_share'] = $video_share;

        return $this;
    }

    /**
     * Gets content_share
     * @return bool
     */
    public function getContentShare()
    {
        return $this->container['content_share'];
    }

    /**
     * Sets content_share
     * @param bool $content_share
     * @return $this
     */
    public function setContentShare($content_share)
    {
        $this->container['content_share'] = $content_share;

        return $this;
    }

    /**
     * Gets live_recording
     * @return bool
     */
    public function getLiveRecording()
    {
        return $this->container['live_recording'];
    }

    /**
     * Sets live_recording
     * @param bool $live_recording
     * @return $this
     */
    public function setLiveRecording($live_recording)
    {
        $this->container['live_recording'] = $live_recording;

        return $this;
    }

    /**
     * Gets live_video_share
     * @return bool
     */
    public function getLiveVideoShare()
    {
        return $this->container['live_video_share'];
    }

    /**
     * Sets live_video_share
     * @param bool $live_video_share
     * @return $this
     */
    public function setLiveVideoShare($live_video_share)
    {
        $this->container['live_video_share'] = $live_video_share;

        return $this;
    }

    /**
     * Gets live_content_share
     * @return bool
     */
    public function getLiveContentShare()
    {
        return $this->container['live_content_share'];
    }

    /**
     * Sets live_content_share
     * @param bool $live_content_share
     * @return $this
     */
    public function setLiveContentShare($live_content_share)
    {
        $this->container['live_content_share'] = $live_content_share;

        return $this;
    }

    /**
     * Gets large_meeting
     * @return bool
     */
    public function getLargeMeeting()
    {
        return $this->container['large_meeting'];
    }

    /**
     * Sets large_meeting
     * @param bool $large_meeting
     * @return $this
     */
    public function setLargeMeeting($large_meeting)
    {
        $this->container['large_meeting'] = $large_meeting;

        return $this;
    }

    /**
     * Gets roi_distance
     * @return float
     */
    public function getRoiDistance()
    {
        return $this->container['roi_distance'];
    }

    /**
     * Sets roi_distance
     * @param float $roi_distance
     * @return $this
     */
    public function setRoiDistance($roi_distance)
    {
        $this->container['roi_distance'] = $roi_distance;

        return $this;
    }

    /**
     * Gets mpls
     * @return bool
     */
    public function getMpls()
    {
        return $this->container['mpls'];
    }

    /**
     * Sets mpls
     * @param bool $mpls
     * @return $this
     */
    public function setMpls($mpls)
    {
        $this->container['mpls'] = $mpls;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Same as the meetingUUID property in this object.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets endpoints
     * @return \BlueJeansOnVideoRestApi\Model\EndpointIndigo[]
     */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
     * Sets endpoints
     * @param \BlueJeansOnVideoRestApi\Model\EndpointIndigo[] $endpoints
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;

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


