<?php
/**
 * RecordingRecordingChapters
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
 * RecordingRecordingChapters Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansOnVideoRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecordingRecordingChapters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Recording_recordingChapters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chapter_id' => 'string',
        'id' => 'int',
        'start_time_offset' => 'int',
        'end_time_offset' => 'int',
        'chapter_name' => 'string',
        'total_size' => 'int',
        'composite_content_id' => 'int',
        'composite_content_status' => 'string',
        'parent_recording_id' => 'int',
        'view_count' => 'int',
        'recording_sessions' => '\BlueJeansOnVideoRestApi\Model\RecordingSession[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chapter_id' => null,
        'id' => null,
        'start_time_offset' => null,
        'end_time_offset' => null,
        'chapter_name' => null,
        'total_size' => null,
        'composite_content_id' => null,
        'composite_content_status' => null,
        'parent_recording_id' => null,
        'view_count' => null,
        'recording_sessions' => null
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
        'chapter_id' => 'chapterId',
        'id' => 'id',
        'start_time_offset' => 'startTimeOffset',
        'end_time_offset' => 'endTimeOffset',
        'chapter_name' => 'chapterName',
        'total_size' => 'totalSize',
        'composite_content_id' => 'compositeContentId',
        'composite_content_status' => 'compositeContentStatus',
        'parent_recording_id' => 'parentRecordingId',
        'view_count' => 'viewCount',
        'recording_sessions' => 'recordingSessions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'chapter_id' => 'setChapterId',
        'id' => 'setId',
        'start_time_offset' => 'setStartTimeOffset',
        'end_time_offset' => 'setEndTimeOffset',
        'chapter_name' => 'setChapterName',
        'total_size' => 'setTotalSize',
        'composite_content_id' => 'setCompositeContentId',
        'composite_content_status' => 'setCompositeContentStatus',
        'parent_recording_id' => 'setParentRecordingId',
        'view_count' => 'setViewCount',
        'recording_sessions' => 'setRecordingSessions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'chapter_id' => 'getChapterId',
        'id' => 'getId',
        'start_time_offset' => 'getStartTimeOffset',
        'end_time_offset' => 'getEndTimeOffset',
        'chapter_name' => 'getChapterName',
        'total_size' => 'getTotalSize',
        'composite_content_id' => 'getCompositeContentId',
        'composite_content_status' => 'getCompositeContentStatus',
        'parent_recording_id' => 'getParentRecordingId',
        'view_count' => 'getViewCount',
        'recording_sessions' => 'getRecordingSessions'
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
        $this->container['chapter_id'] = isset($data['chapter_id']) ? $data['chapter_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['start_time_offset'] = isset($data['start_time_offset']) ? $data['start_time_offset'] : null;
        $this->container['end_time_offset'] = isset($data['end_time_offset']) ? $data['end_time_offset'] : null;
        $this->container['chapter_name'] = isset($data['chapter_name']) ? $data['chapter_name'] : null;
        $this->container['total_size'] = isset($data['total_size']) ? $data['total_size'] : null;
        $this->container['composite_content_id'] = isset($data['composite_content_id']) ? $data['composite_content_id'] : null;
        $this->container['composite_content_status'] = isset($data['composite_content_status']) ? $data['composite_content_status'] : null;
        $this->container['parent_recording_id'] = isset($data['parent_recording_id']) ? $data['parent_recording_id'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['recording_sessions'] = isset($data['recording_sessions']) ? $data['recording_sessions'] : null;
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
     * Gets chapter_id
     * @return string
     */
    public function getChapterId()
    {
        return $this->container['chapter_id'];
    }

    /**
     * Sets chapter_id
     * @param string $chapter_id
     * @return $this
     */
    public function setChapterId($chapter_id)
    {
        $this->container['chapter_id'] = $chapter_id;

        return $this;
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
     * Gets start_time_offset
     * @return int
     */
    public function getStartTimeOffset()
    {
        return $this->container['start_time_offset'];
    }

    /**
     * Sets start_time_offset
     * @param int $start_time_offset
     * @return $this
     */
    public function setStartTimeOffset($start_time_offset)
    {
        $this->container['start_time_offset'] = $start_time_offset;

        return $this;
    }

    /**
     * Gets end_time_offset
     * @return int
     */
    public function getEndTimeOffset()
    {
        return $this->container['end_time_offset'];
    }

    /**
     * Sets end_time_offset
     * @param int $end_time_offset
     * @return $this
     */
    public function setEndTimeOffset($end_time_offset)
    {
        $this->container['end_time_offset'] = $end_time_offset;

        return $this;
    }

    /**
     * Gets chapter_name
     * @return string
     */
    public function getChapterName()
    {
        return $this->container['chapter_name'];
    }

    /**
     * Sets chapter_name
     * @param string $chapter_name
     * @return $this
     */
    public function setChapterName($chapter_name)
    {
        $this->container['chapter_name'] = $chapter_name;

        return $this;
    }

    /**
     * Gets total_size
     * @return int
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size
     * @param int $total_size
     * @return $this
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

        return $this;
    }

    /**
     * Gets composite_content_id
     * @return int
     */
    public function getCompositeContentId()
    {
        return $this->container['composite_content_id'];
    }

    /**
     * Sets composite_content_id
     * @param int $composite_content_id
     * @return $this
     */
    public function setCompositeContentId($composite_content_id)
    {
        $this->container['composite_content_id'] = $composite_content_id;

        return $this;
    }

    /**
     * Gets composite_content_status
     * @return string
     */
    public function getCompositeContentStatus()
    {
        return $this->container['composite_content_status'];
    }

    /**
     * Sets composite_content_status
     * @param string $composite_content_status
     * @return $this
     */
    public function setCompositeContentStatus($composite_content_status)
    {
        $this->container['composite_content_status'] = $composite_content_status;

        return $this;
    }

    /**
     * Gets parent_recording_id
     * @return int
     */
    public function getParentRecordingId()
    {
        return $this->container['parent_recording_id'];
    }

    /**
     * Sets parent_recording_id
     * @param int $parent_recording_id
     * @return $this
     */
    public function setParentRecordingId($parent_recording_id)
    {
        $this->container['parent_recording_id'] = $parent_recording_id;

        return $this;
    }

    /**
     * Gets view_count
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     * @param int $view_count
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets recording_sessions
     * @return \BlueJeansOnVideoRestApi\Model\RecordingSession[]
     */
    public function getRecordingSessions()
    {
        return $this->container['recording_sessions'];
    }

    /**
     * Sets recording_sessions
     * @param \BlueJeansOnVideoRestApi\Model\RecordingSession[] $recording_sessions
     * @return $this
     */
    public function setRecordingSessions($recording_sessions)
    {
        $this->container['recording_sessions'] = $recording_sessions;

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


