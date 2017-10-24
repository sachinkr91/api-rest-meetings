<?php
/**
 * Numbers
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

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;

/**
 * Numbers Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Numbers implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Numbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_id' => 'string',
        'allow_direct_dial' => 'bool',
        'use_attendee_passcode' => 'bool',
        'pstn_numbers_url' => 'string',
        'moderator_passcode' => 'string',
        'precision' => 'string',
        'pstn_localization_supported' => 'bool',
        'partner_integrated_meeting' => 'bool',
        'numbers' => '\BlueJeansMeetingsRestApi\Model\NumbersNumbers[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_id' => null,
        'allow_direct_dial' => null,
        'use_attendee_passcode' => null,
        'pstn_numbers_url' => null,
        'moderator_passcode' => null,
        'precision' => null,
        'pstn_localization_supported' => null,
        'partner_integrated_meeting' => null,
        'numbers' => null
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
        'allow_direct_dial' => 'allowDirectDial',
        'use_attendee_passcode' => 'useAttendeePasscode',
        'pstn_numbers_url' => 'pstnNumbersUrl',
        'moderator_passcode' => 'moderatorPasscode',
        'precision' => 'precision',
        'pstn_localization_supported' => 'pstnLocalizationSupported',
        'partner_integrated_meeting' => 'partnerIntegratedMeeting',
        'numbers' => 'numbers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'allow_direct_dial' => 'setAllowDirectDial',
        'use_attendee_passcode' => 'setUseAttendeePasscode',
        'pstn_numbers_url' => 'setPstnNumbersUrl',
        'moderator_passcode' => 'setModeratorPasscode',
        'precision' => 'setPrecision',
        'pstn_localization_supported' => 'setPstnLocalizationSupported',
        'partner_integrated_meeting' => 'setPartnerIntegratedMeeting',
        'numbers' => 'setNumbers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'allow_direct_dial' => 'getAllowDirectDial',
        'use_attendee_passcode' => 'getUseAttendeePasscode',
        'pstn_numbers_url' => 'getPstnNumbersUrl',
        'moderator_passcode' => 'getModeratorPasscode',
        'precision' => 'getPrecision',
        'pstn_localization_supported' => 'getPstnLocalizationSupported',
        'partner_integrated_meeting' => 'getPartnerIntegratedMeeting',
        'numbers' => 'getNumbers'
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
        $this->container['meeting_id'] = isset($data['meeting_id']) ? $data['meeting_id'] : null;
        $this->container['allow_direct_dial'] = isset($data['allow_direct_dial']) ? $data['allow_direct_dial'] : null;
        $this->container['use_attendee_passcode'] = isset($data['use_attendee_passcode']) ? $data['use_attendee_passcode'] : null;
        $this->container['pstn_numbers_url'] = isset($data['pstn_numbers_url']) ? $data['pstn_numbers_url'] : null;
        $this->container['moderator_passcode'] = isset($data['moderator_passcode']) ? $data['moderator_passcode'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        $this->container['pstn_localization_supported'] = isset($data['pstn_localization_supported']) ? $data['pstn_localization_supported'] : null;
        $this->container['partner_integrated_meeting'] = isset($data['partner_integrated_meeting']) ? $data['partner_integrated_meeting'] : null;
        $this->container['numbers'] = isset($data['numbers']) ? $data['numbers'] : null;
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
     * Gets allow_direct_dial
     * @return bool
     */
    public function getAllowDirectDial()
    {
        return $this->container['allow_direct_dial'];
    }

    /**
     * Sets allow_direct_dial
     * @param bool $allow_direct_dial
     * @return $this
     */
    public function setAllowDirectDial($allow_direct_dial)
    {
        $this->container['allow_direct_dial'] = $allow_direct_dial;

        return $this;
    }

    /**
     * Gets use_attendee_passcode
     * @return bool
     */
    public function getUseAttendeePasscode()
    {
        return $this->container['use_attendee_passcode'];
    }

    /**
     * Sets use_attendee_passcode
     * @param bool $use_attendee_passcode
     * @return $this
     */
    public function setUseAttendeePasscode($use_attendee_passcode)
    {
        $this->container['use_attendee_passcode'] = $use_attendee_passcode;

        return $this;
    }

    /**
     * Gets pstn_numbers_url
     * @return string
     */
    public function getPstnNumbersUrl()
    {
        return $this->container['pstn_numbers_url'];
    }

    /**
     * Sets pstn_numbers_url
     * @param string $pstn_numbers_url
     * @return $this
     */
    public function setPstnNumbersUrl($pstn_numbers_url)
    {
        $this->container['pstn_numbers_url'] = $pstn_numbers_url;

        return $this;
    }

    /**
     * Gets moderator_passcode
     * @return string
     */
    public function getModeratorPasscode()
    {
        return $this->container['moderator_passcode'];
    }

    /**
     * Sets moderator_passcode
     * @param string $moderator_passcode
     * @return $this
     */
    public function setModeratorPasscode($moderator_passcode)
    {
        $this->container['moderator_passcode'] = $moderator_passcode;

        return $this;
    }

    /**
     * Gets precision
     * @return string
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     * @param string $precision
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;

        return $this;
    }

    /**
     * Gets pstn_localization_supported
     * @return bool
     */
    public function getPstnLocalizationSupported()
    {
        return $this->container['pstn_localization_supported'];
    }

    /**
     * Sets pstn_localization_supported
     * @param bool $pstn_localization_supported
     * @return $this
     */
    public function setPstnLocalizationSupported($pstn_localization_supported)
    {
        $this->container['pstn_localization_supported'] = $pstn_localization_supported;

        return $this;
    }

    /**
     * Gets partner_integrated_meeting
     * @return bool
     */
    public function getPartnerIntegratedMeeting()
    {
        return $this->container['partner_integrated_meeting'];
    }

    /**
     * Sets partner_integrated_meeting
     * @param bool $partner_integrated_meeting
     * @return $this
     */
    public function setPartnerIntegratedMeeting($partner_integrated_meeting)
    {
        $this->container['partner_integrated_meeting'] = $partner_integrated_meeting;

        return $this;
    }

    /**
     * Gets numbers
     * @return \BlueJeansMeetingsRestApi\Model\NumbersNumbers[]
     */
    public function getNumbers()
    {
        return $this->container['numbers'];
    }

    /**
     * Sets numbers
     * @param \BlueJeansMeetingsRestApi\Model\NumbersNumbers[] $numbers
     * @return $this
     */
    public function setNumbers($numbers)
    {
        $this->container['numbers'] = $numbers;

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


