<?php
/**
 * MeetingRecurrencePattern
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
 * MeetingRecurrencePattern Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingRecurrencePattern implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Meeting_recurrencePattern';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recurrence_type' => 'string',
        'end_date' => 'int',
        'recurrence_count' => 'int',
        'frequency' => 'int',
        'days_of_week_mask' => 'int',
        'day_of_month' => 'int',
        'week_of_month' => 'string',
        'month_of_year' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recurrence_type' => null,
        'end_date' => null,
        'recurrence_count' => null,
        'frequency' => null,
        'days_of_week_mask' => null,
        'day_of_month' => null,
        'week_of_month' => null,
        'month_of_year' => null
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
        'recurrence_type' => 'recurrenceType',
        'end_date' => 'endDate',
        'recurrence_count' => 'recurrenceCount',
        'frequency' => 'frequency',
        'days_of_week_mask' => 'daysOfWeekMask',
        'day_of_month' => 'dayOfMonth',
        'week_of_month' => 'weekOfMonth',
        'month_of_year' => 'monthOfYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recurrence_type' => 'setRecurrenceType',
        'end_date' => 'setEndDate',
        'recurrence_count' => 'setRecurrenceCount',
        'frequency' => 'setFrequency',
        'days_of_week_mask' => 'setDaysOfWeekMask',
        'day_of_month' => 'setDayOfMonth',
        'week_of_month' => 'setWeekOfMonth',
        'month_of_year' => 'setMonthOfYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recurrence_type' => 'getRecurrenceType',
        'end_date' => 'getEndDate',
        'recurrence_count' => 'getRecurrenceCount',
        'frequency' => 'getFrequency',
        'days_of_week_mask' => 'getDaysOfWeekMask',
        'day_of_month' => 'getDayOfMonth',
        'week_of_month' => 'getWeekOfMonth',
        'month_of_year' => 'getMonthOfYear'
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

    const RECURRENCE_TYPE_DAILY = 'DAILY';
    const RECURRENCE_TYPE_WEEKLY = 'WEEKLY';
    const RECURRENCE_TYPE_MONTHLY = 'MONTHLY';
    const WEEK_OF_MONTH_NONE = 'NONE';
    const WEEK_OF_MONTH_FIRST = 'FIRST';
    const WEEK_OF_MONTH_SECOND = 'SECOND';
    const WEEK_OF_MONTH_THIRD = 'THIRD';
    const WEEK_OF_MONTH_FOURTH = 'FOURTH';
    const WEEK_OF_MONTH_LAST = 'LAST';
    const MONTH_OF_YEAR_NONE = 'NONE';
    const MONTH_OF_YEAR_JANUARY = 'JANUARY';
    const MONTH_OF_YEAR_FEBRUARY = 'FEBRUARY';
    const MONTH_OF_YEAR_MARCH = 'MARCH';
    const MONTH_OF_YEAR_APRIL = 'APRIL';
    const MONTH_OF_YEAR_MAY = 'MAY';
    const MONTH_OF_YEAR_JUNE = 'JUNE';
    const MONTH_OF_YEAR_JULY = 'JULY';
    const MONTH_OF_YEAR_AUGUST = 'AUGUST';
    const MONTH_OF_YEAR_SEPTEMBER = 'SEPTEMBER';
    const MONTH_OF_YEAR_OCTOBER = 'OCTOBER';
    const MONTH_OF_YEAR_NOVEMBER = 'NOVEMBER';
    const MONTH_OF_YEAR_DECEMBER = 'DECEMBER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrenceTypeAllowableValues()
    {
        return [
            self::RECURRENCE_TYPE_DAILY,
            self::RECURRENCE_TYPE_WEEKLY,
            self::RECURRENCE_TYPE_MONTHLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeekOfMonthAllowableValues()
    {
        return [
            self::WEEK_OF_MONTH_NONE,
            self::WEEK_OF_MONTH_FIRST,
            self::WEEK_OF_MONTH_SECOND,
            self::WEEK_OF_MONTH_THIRD,
            self::WEEK_OF_MONTH_FOURTH,
            self::WEEK_OF_MONTH_LAST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMonthOfYearAllowableValues()
    {
        return [
            self::MONTH_OF_YEAR_NONE,
            self::MONTH_OF_YEAR_JANUARY,
            self::MONTH_OF_YEAR_FEBRUARY,
            self::MONTH_OF_YEAR_MARCH,
            self::MONTH_OF_YEAR_APRIL,
            self::MONTH_OF_YEAR_MAY,
            self::MONTH_OF_YEAR_JUNE,
            self::MONTH_OF_YEAR_JULY,
            self::MONTH_OF_YEAR_AUGUST,
            self::MONTH_OF_YEAR_SEPTEMBER,
            self::MONTH_OF_YEAR_OCTOBER,
            self::MONTH_OF_YEAR_NOVEMBER,
            self::MONTH_OF_YEAR_DECEMBER,
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
        $this->container['recurrence_type'] = isset($data['recurrence_type']) ? $data['recurrence_type'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['recurrence_count'] = isset($data['recurrence_count']) ? $data['recurrence_count'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['days_of_week_mask'] = isset($data['days_of_week_mask']) ? $data['days_of_week_mask'] : null;
        $this->container['day_of_month'] = isset($data['day_of_month']) ? $data['day_of_month'] : null;
        $this->container['week_of_month'] = isset($data['week_of_month']) ? $data['week_of_month'] : 'NONE';
        $this->container['month_of_year'] = isset($data['month_of_year']) ? $data['month_of_year'] : 'NONE';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecurrenceTypeAllowableValues();
        if (!is_null($this->container['recurrence_type']) && !in_array($this->container['recurrence_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurrence_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWeekOfMonthAllowableValues();
        if (!is_null($this->container['week_of_month']) && !in_array($this->container['week_of_month'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'week_of_month', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMonthOfYearAllowableValues();
        if (!is_null($this->container['month_of_year']) && !in_array($this->container['month_of_year'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'month_of_year', must be one of '%s'",
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
     * Gets recurrence_type
     *
     * @return string
     */
    public function getRecurrenceType()
    {
        return $this->container['recurrence_type'];
    }

    /**
     * Sets recurrence_type
     *
     * @param string $recurrence_type recurrence_type
     *
     * @return $this
     */
    public function setRecurrenceType($recurrence_type)
    {
        $allowedValues = $this->getRecurrenceTypeAllowableValues();
        if (!is_null($recurrence_type) && !in_array($recurrence_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurrence_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence_type'] = $recurrence_type;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return int
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param int $end_date This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets recurrence_count
     *
     * @return int
     */
    public function getRecurrenceCount()
    {
        return $this->container['recurrence_count'];
    }

    /**
     * Sets recurrence_count
     *
     * @param int $recurrence_count The number of reoccurring meetings
     *
     * @return $this
     */
    public function setRecurrenceCount($recurrence_count)
    {
        $this->container['recurrence_count'] = $recurrence_count;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency the interval of reoccurring meetings.
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets days_of_week_mask
     *
     * @return int
     */
    public function getDaysOfWeekMask()
    {
        return $this->container['days_of_week_mask'];
    }

    /**
     * Sets days_of_week_mask
     *
     * @param int $days_of_week_mask bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64
     *
     * @return $this
     */
    public function setDaysOfWeekMask($days_of_week_mask)
    {
        $this->container['days_of_week_mask'] = $days_of_week_mask;

        return $this;
    }

    /**
     * Gets day_of_month
     *
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     *
     * @param int $day_of_month the numerical day in the month for monthly reoccurring meetings.
     *
     * @return $this
     */
    public function setDayOfMonth($day_of_month)
    {
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets week_of_month
     *
     * @return string
     */
    public function getWeekOfMonth()
    {
        return $this->container['week_of_month'];
    }

    /**
     * Sets week_of_month
     *
     * @param string $week_of_month the numerical week in the month for reoccuring meetings.
     *
     * @return $this
     */
    public function setWeekOfMonth($week_of_month)
    {
        $allowedValues = $this->getWeekOfMonthAllowableValues();
        if (!is_null($week_of_month) && !in_array($week_of_month, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'week_of_month', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['week_of_month'] = $week_of_month;

        return $this;
    }

    /**
     * Gets month_of_year
     *
     * @return string
     */
    public function getMonthOfYear()
    {
        return $this->container['month_of_year'];
    }

    /**
     * Sets month_of_year
     *
     * @param string $month_of_year the month in the year for reoccurring meetings.
     *
     * @return $this
     */
    public function setMonthOfYear($month_of_year)
    {
        $allowedValues = $this->getMonthOfYearAllowableValues();
        if (!is_null($month_of_year) && !in_array($month_of_year, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'month_of_year', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['month_of_year'] = $month_of_year;

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


