<?php
/**
 * MeetingState
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
 * MeetingState Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansOnVideoRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingState implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MeetingState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_id' => 'string',
        'meeting_guid' => 'string',
        'meeting_state' => 'string',
        'status' => 'string',
        'is_content_sharing_active' => 'bool',
        'bridged' => 'bool',
        'locked' => 'bool',
        'audio_mute_on_entry' => 'bool',
        'video_mute_on_entry' => 'bool',
        'moderator_less' => 'bool',
        'title' => 'string',
        'chat_enabled' => 'bool',
        'pinned_endpoint_guid' => 'string',
        'audio_endpoint_count' => 'int',
        'video_endpoint_count' => 'int',
        'recording_enabled' => 'bool',
        'participant_web_join_url' => 'string',
        'is_large_meeting' => 'string',
        'features' => 'string[]',
        'delayed_meeting_end_time' => 'int',
        'sm_streams' => 'string',
        'inactive_meeting_status' => 'string',
        'meeting_marked_for_delayed_termination' => 'bool',
        'recordinginfo' => '\BlueJeansOnVideoRestApi\Model\MeetingStateRecordinginfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_id' => null,
        'meeting_guid' => null,
        'meeting_state' => null,
        'status' => null,
        'is_content_sharing_active' => null,
        'bridged' => null,
        'locked' => null,
        'audio_mute_on_entry' => null,
        'video_mute_on_entry' => null,
        'moderator_less' => null,
        'title' => null,
        'chat_enabled' => null,
        'pinned_endpoint_guid' => null,
        'audio_endpoint_count' => null,
        'video_endpoint_count' => null,
        'recording_enabled' => null,
        'participant_web_join_url' => null,
        'is_large_meeting' => null,
        'features' => null,
        'delayed_meeting_end_time' => null,
        'sm_streams' => null,
        'inactive_meeting_status' => null,
        'meeting_marked_for_delayed_termination' => null,
        'recordinginfo' => null
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
        'meeting_guid' => 'meetingGuid',
        'meeting_state' => 'meetingState',
        'status' => 'status',
        'is_content_sharing_active' => 'isContentSharingActive',
        'bridged' => 'bridged',
        'locked' => 'locked',
        'audio_mute_on_entry' => 'audioMuteOnEntry',
        'video_mute_on_entry' => 'videoMuteOnEntry',
        'moderator_less' => 'moderatorLess',
        'title' => 'title',
        'chat_enabled' => 'chatEnabled',
        'pinned_endpoint_guid' => 'pinnedEndpointGuid',
        'audio_endpoint_count' => 'audioEndpointCount',
        'video_endpoint_count' => 'videoEndpointCount',
        'recording_enabled' => 'recordingEnabled',
        'participant_web_join_url' => 'participantWebJoinURL',
        'is_large_meeting' => 'isLargeMeeting',
        'features' => 'features',
        'delayed_meeting_end_time' => 'delayedMeetingEndTime',
        'sm_streams' => 'smStreams',
        'inactive_meeting_status' => 'inactiveMeetingStatus',
        'meeting_marked_for_delayed_termination' => 'meetingMarkedForDelayedTermination',
        'recordinginfo' => 'recordinginfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'meeting_guid' => 'setMeetingGuid',
        'meeting_state' => 'setMeetingState',
        'status' => 'setStatus',
        'is_content_sharing_active' => 'setIsContentSharingActive',
        'bridged' => 'setBridged',
        'locked' => 'setLocked',
        'audio_mute_on_entry' => 'setAudioMuteOnEntry',
        'video_mute_on_entry' => 'setVideoMuteOnEntry',
        'moderator_less' => 'setModeratorLess',
        'title' => 'setTitle',
        'chat_enabled' => 'setChatEnabled',
        'pinned_endpoint_guid' => 'setPinnedEndpointGuid',
        'audio_endpoint_count' => 'setAudioEndpointCount',
        'video_endpoint_count' => 'setVideoEndpointCount',
        'recording_enabled' => 'setRecordingEnabled',
        'participant_web_join_url' => 'setParticipantWebJoinUrl',
        'is_large_meeting' => 'setIsLargeMeeting',
        'features' => 'setFeatures',
        'delayed_meeting_end_time' => 'setDelayedMeetingEndTime',
        'sm_streams' => 'setSmStreams',
        'inactive_meeting_status' => 'setInactiveMeetingStatus',
        'meeting_marked_for_delayed_termination' => 'setMeetingMarkedForDelayedTermination',
        'recordinginfo' => 'setRecordinginfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'meeting_guid' => 'getMeetingGuid',
        'meeting_state' => 'getMeetingState',
        'status' => 'getStatus',
        'is_content_sharing_active' => 'getIsContentSharingActive',
        'bridged' => 'getBridged',
        'locked' => 'getLocked',
        'audio_mute_on_entry' => 'getAudioMuteOnEntry',
        'video_mute_on_entry' => 'getVideoMuteOnEntry',
        'moderator_less' => 'getModeratorLess',
        'title' => 'getTitle',
        'chat_enabled' => 'getChatEnabled',
        'pinned_endpoint_guid' => 'getPinnedEndpointGuid',
        'audio_endpoint_count' => 'getAudioEndpointCount',
        'video_endpoint_count' => 'getVideoEndpointCount',
        'recording_enabled' => 'getRecordingEnabled',
        'participant_web_join_url' => 'getParticipantWebJoinUrl',
        'is_large_meeting' => 'getIsLargeMeeting',
        'features' => 'getFeatures',
        'delayed_meeting_end_time' => 'getDelayedMeetingEndTime',
        'sm_streams' => 'getSmStreams',
        'inactive_meeting_status' => 'getInactiveMeetingStatus',
        'meeting_marked_for_delayed_termination' => 'getMeetingMarkedForDelayedTermination',
        'recordinginfo' => 'getRecordinginfo'
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

    const MEETING_STATE_MEETING_STARTED = 'MeetingStarted';
    const STATUS_ACTIVE = 'active';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMeetingStateAllowableValues()
    {
        return [
            self::MEETING_STATE_MEETING_STARTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
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
        $this->container['meeting_guid'] = isset($data['meeting_guid']) ? $data['meeting_guid'] : null;
        $this->container['meeting_state'] = isset($data['meeting_state']) ? $data['meeting_state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['is_content_sharing_active'] = isset($data['is_content_sharing_active']) ? $data['is_content_sharing_active'] : null;
        $this->container['bridged'] = isset($data['bridged']) ? $data['bridged'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['audio_mute_on_entry'] = isset($data['audio_mute_on_entry']) ? $data['audio_mute_on_entry'] : null;
        $this->container['video_mute_on_entry'] = isset($data['video_mute_on_entry']) ? $data['video_mute_on_entry'] : null;
        $this->container['moderator_less'] = isset($data['moderator_less']) ? $data['moderator_less'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['chat_enabled'] = isset($data['chat_enabled']) ? $data['chat_enabled'] : null;
        $this->container['pinned_endpoint_guid'] = isset($data['pinned_endpoint_guid']) ? $data['pinned_endpoint_guid'] : null;
        $this->container['audio_endpoint_count'] = isset($data['audio_endpoint_count']) ? $data['audio_endpoint_count'] : null;
        $this->container['video_endpoint_count'] = isset($data['video_endpoint_count']) ? $data['video_endpoint_count'] : null;
        $this->container['recording_enabled'] = isset($data['recording_enabled']) ? $data['recording_enabled'] : null;
        $this->container['participant_web_join_url'] = isset($data['participant_web_join_url']) ? $data['participant_web_join_url'] : null;
        $this->container['is_large_meeting'] = isset($data['is_large_meeting']) ? $data['is_large_meeting'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['delayed_meeting_end_time'] = isset($data['delayed_meeting_end_time']) ? $data['delayed_meeting_end_time'] : null;
        $this->container['sm_streams'] = isset($data['sm_streams']) ? $data['sm_streams'] : null;
        $this->container['inactive_meeting_status'] = isset($data['inactive_meeting_status']) ? $data['inactive_meeting_status'] : null;
        $this->container['meeting_marked_for_delayed_termination'] = isset($data['meeting_marked_for_delayed_termination']) ? $data['meeting_marked_for_delayed_termination'] : null;
        $this->container['recordinginfo'] = isset($data['recordinginfo']) ? $data['recordinginfo'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getMeetingStateAllowableValues();
        if (!in_array($this->container['meeting_state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'meeting_state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getMeetingStateAllowableValues();
        if (!in_array($this->container['meeting_state'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * @param string $meeting_id
     * @return $this
     */
    public function setMeetingId($meeting_id)
    {
        $this->container['meeting_id'] = $meeting_id;

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
     * @param string $meeting_guid
     * @return $this
     */
    public function setMeetingGuid($meeting_guid)
    {
        $this->container['meeting_guid'] = $meeting_guid;

        return $this;
    }

    /**
     * Gets meeting_state
     * @return string
     */
    public function getMeetingState()
    {
        return $this->container['meeting_state'];
    }

    /**
     * Sets meeting_state
     * @param string $meeting_state
     * @return $this
     */
    public function setMeetingState($meeting_state)
    {
        $allowed_values = $this->getMeetingStateAllowableValues();
        if (!is_null($meeting_state) && !in_array($meeting_state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meeting_state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['meeting_state'] = $meeting_state;

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
     * Gets is_content_sharing_active
     * @return bool
     */
    public function getIsContentSharingActive()
    {
        return $this->container['is_content_sharing_active'];
    }

    /**
     * Sets is_content_sharing_active
     * @param bool $is_content_sharing_active
     * @return $this
     */
    public function setIsContentSharingActive($is_content_sharing_active)
    {
        $this->container['is_content_sharing_active'] = $is_content_sharing_active;

        return $this;
    }

    /**
     * Gets bridged
     * @return bool
     */
    public function getBridged()
    {
        return $this->container['bridged'];
    }

    /**
     * Sets bridged
     * @param bool $bridged
     * @return $this
     */
    public function setBridged($bridged)
    {
        $this->container['bridged'] = $bridged;

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
     * Gets audio_mute_on_entry
     * @return bool
     */
    public function getAudioMuteOnEntry()
    {
        return $this->container['audio_mute_on_entry'];
    }

    /**
     * Sets audio_mute_on_entry
     * @param bool $audio_mute_on_entry
     * @return $this
     */
    public function setAudioMuteOnEntry($audio_mute_on_entry)
    {
        $this->container['audio_mute_on_entry'] = $audio_mute_on_entry;

        return $this;
    }

    /**
     * Gets video_mute_on_entry
     * @return bool
     */
    public function getVideoMuteOnEntry()
    {
        return $this->container['video_mute_on_entry'];
    }

    /**
     * Sets video_mute_on_entry
     * @param bool $video_mute_on_entry
     * @return $this
     */
    public function setVideoMuteOnEntry($video_mute_on_entry)
    {
        $this->container['video_mute_on_entry'] = $video_mute_on_entry;

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
     * Gets chat_enabled
     * @return bool
     */
    public function getChatEnabled()
    {
        return $this->container['chat_enabled'];
    }

    /**
     * Sets chat_enabled
     * @param bool $chat_enabled
     * @return $this
     */
    public function setChatEnabled($chat_enabled)
    {
        $this->container['chat_enabled'] = $chat_enabled;

        return $this;
    }

    /**
     * Gets pinned_endpoint_guid
     * @return string
     */
    public function getPinnedEndpointGuid()
    {
        return $this->container['pinned_endpoint_guid'];
    }

    /**
     * Sets pinned_endpoint_guid
     * @param string $pinned_endpoint_guid
     * @return $this
     */
    public function setPinnedEndpointGuid($pinned_endpoint_guid)
    {
        $this->container['pinned_endpoint_guid'] = $pinned_endpoint_guid;

        return $this;
    }

    /**
     * Gets audio_endpoint_count
     * @return int
     */
    public function getAudioEndpointCount()
    {
        return $this->container['audio_endpoint_count'];
    }

    /**
     * Sets audio_endpoint_count
     * @param int $audio_endpoint_count
     * @return $this
     */
    public function setAudioEndpointCount($audio_endpoint_count)
    {
        $this->container['audio_endpoint_count'] = $audio_endpoint_count;

        return $this;
    }

    /**
     * Gets video_endpoint_count
     * @return int
     */
    public function getVideoEndpointCount()
    {
        return $this->container['video_endpoint_count'];
    }

    /**
     * Sets video_endpoint_count
     * @param int $video_endpoint_count
     * @return $this
     */
    public function setVideoEndpointCount($video_endpoint_count)
    {
        $this->container['video_endpoint_count'] = $video_endpoint_count;

        return $this;
    }

    /**
     * Gets recording_enabled
     * @return bool
     */
    public function getRecordingEnabled()
    {
        return $this->container['recording_enabled'];
    }

    /**
     * Sets recording_enabled
     * @param bool $recording_enabled
     * @return $this
     */
    public function setRecordingEnabled($recording_enabled)
    {
        $this->container['recording_enabled'] = $recording_enabled;

        return $this;
    }

    /**
     * Gets participant_web_join_url
     * @return string
     */
    public function getParticipantWebJoinUrl()
    {
        return $this->container['participant_web_join_url'];
    }

    /**
     * Sets participant_web_join_url
     * @param string $participant_web_join_url
     * @return $this
     */
    public function setParticipantWebJoinUrl($participant_web_join_url)
    {
        $this->container['participant_web_join_url'] = $participant_web_join_url;

        return $this;
    }

    /**
     * Gets is_large_meeting
     * @return string
     */
    public function getIsLargeMeeting()
    {
        return $this->container['is_large_meeting'];
    }

    /**
     * Sets is_large_meeting
     * @param string $is_large_meeting
     * @return $this
     */
    public function setIsLargeMeeting($is_large_meeting)
    {
        $this->container['is_large_meeting'] = $is_large_meeting;

        return $this;
    }

    /**
     * Gets features
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param string[] $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets delayed_meeting_end_time
     * @return int
     */
    public function getDelayedMeetingEndTime()
    {
        return $this->container['delayed_meeting_end_time'];
    }

    /**
     * Sets delayed_meeting_end_time
     * @param int $delayed_meeting_end_time
     * @return $this
     */
    public function setDelayedMeetingEndTime($delayed_meeting_end_time)
    {
        $this->container['delayed_meeting_end_time'] = $delayed_meeting_end_time;

        return $this;
    }

    /**
     * Gets sm_streams
     * @return string
     */
    public function getSmStreams()
    {
        return $this->container['sm_streams'];
    }

    /**
     * Sets sm_streams
     * @param string $sm_streams
     * @return $this
     */
    public function setSmStreams($sm_streams)
    {
        $this->container['sm_streams'] = $sm_streams;

        return $this;
    }

    /**
     * Gets inactive_meeting_status
     * @return string
     */
    public function getInactiveMeetingStatus()
    {
        return $this->container['inactive_meeting_status'];
    }

    /**
     * Sets inactive_meeting_status
     * @param string $inactive_meeting_status
     * @return $this
     */
    public function setInactiveMeetingStatus($inactive_meeting_status)
    {
        $this->container['inactive_meeting_status'] = $inactive_meeting_status;

        return $this;
    }

    /**
     * Gets meeting_marked_for_delayed_termination
     * @return bool
     */
    public function getMeetingMarkedForDelayedTermination()
    {
        return $this->container['meeting_marked_for_delayed_termination'];
    }

    /**
     * Sets meeting_marked_for_delayed_termination
     * @param bool $meeting_marked_for_delayed_termination
     * @return $this
     */
    public function setMeetingMarkedForDelayedTermination($meeting_marked_for_delayed_termination)
    {
        $this->container['meeting_marked_for_delayed_termination'] = $meeting_marked_for_delayed_termination;

        return $this;
    }

    /**
     * Gets recordinginfo
     * @return \BlueJeansOnVideoRestApi\Model\MeetingStateRecordinginfo
     */
    public function getRecordinginfo()
    {
        return $this->container['recordinginfo'];
    }

    /**
     * Sets recordinginfo
     * @param \BlueJeansOnVideoRestApi\Model\MeetingStateRecordinginfo $recordinginfo
     * @return $this
     */
    public function setRecordinginfo($recordinginfo)
    {
        $this->container['recordinginfo'] = $recordinginfo;

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


