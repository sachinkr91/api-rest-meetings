<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category    Class
 * @description 2/5/2018 -- JSON object containing the BlueJeans&#39; user profile fields
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'username' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'email_id' => 'string',
        'company' => 'string',
        'title' => 'string',
        'phone' => 'string',
        'profile_picture' => 'string',
        'timezone' => 'string',
        'time_format' => 'int',
        'language' => 'string',
        'skype_id' => 'string',
        'gtalk_id' => 'string',
        'default_endpoint' => 'string',
        'password_change_required' => 'bool',
        'marketo_id' => 'string',
        'opt_out_offers' => 'bool',
        'opt_out_news' => 'bool',
        'geo_info' => 'string',
        'how_did_you_hear' => 'string',
        'sfdc_token' => 'string',
        'linkedin_profile_url' => 'string',
        'last_login' => 'int',
        'date_joined' => 'int',
        'jid' => 'string',
        'primary_phone' => 'string',
        'failed_login_count' => 'int',
        'is_initial_setup_done' => 'bool',
        'channel_id' => 'int',
        'is_verified' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'username' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'email_id' => null,
        'company' => null,
        'title' => null,
        'phone' => null,
        'profile_picture' => null,
        'timezone' => null,
        'time_format' => null,
        'language' => null,
        'skype_id' => null,
        'gtalk_id' => null,
        'default_endpoint' => null,
        'password_change_required' => null,
        'marketo_id' => null,
        'opt_out_offers' => null,
        'opt_out_news' => null,
        'geo_info' => null,
        'how_did_you_hear' => null,
        'sfdc_token' => null,
        'linkedin_profile_url' => null,
        'last_login' => null,
        'date_joined' => null,
        'jid' => null,
        'primary_phone' => null,
        'failed_login_count' => null,
        'is_initial_setup_done' => null,
        'channel_id' => null,
        'is_verified' => null
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
        'username' => 'username',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'email_id' => 'emailId',
        'company' => 'company',
        'title' => 'title',
        'phone' => 'phone',
        'profile_picture' => 'profilePicture',
        'timezone' => 'timezone',
        'time_format' => 'timeFormat',
        'language' => 'language',
        'skype_id' => 'skypeId',
        'gtalk_id' => 'gtalkId',
        'default_endpoint' => 'defaultEndpoint',
        'password_change_required' => 'passwordChangeRequired',
        'marketo_id' => 'marketoId',
        'opt_out_offers' => 'optOutOffers',
        'opt_out_news' => 'optOutNews',
        'geo_info' => 'geoInfo',
        'how_did_you_hear' => 'howDidYouHear',
        'sfdc_token' => 'sfdcToken',
        'linkedin_profile_url' => 'linkedinProfileUrl',
        'last_login' => 'lastLogin',
        'date_joined' => 'dateJoined',
        'jid' => 'jid',
        'primary_phone' => 'primaryPhone',
        'failed_login_count' => 'failedLoginCount',
        'is_initial_setup_done' => 'isInitialSetupDone',
        'channel_id' => 'channel_id',
        'is_verified' => 'isVerified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'email_id' => 'setEmailId',
        'company' => 'setCompany',
        'title' => 'setTitle',
        'phone' => 'setPhone',
        'profile_picture' => 'setProfilePicture',
        'timezone' => 'setTimezone',
        'time_format' => 'setTimeFormat',
        'language' => 'setLanguage',
        'skype_id' => 'setSkypeId',
        'gtalk_id' => 'setGtalkId',
        'default_endpoint' => 'setDefaultEndpoint',
        'password_change_required' => 'setPasswordChangeRequired',
        'marketo_id' => 'setMarketoId',
        'opt_out_offers' => 'setOptOutOffers',
        'opt_out_news' => 'setOptOutNews',
        'geo_info' => 'setGeoInfo',
        'how_did_you_hear' => 'setHowDidYouHear',
        'sfdc_token' => 'setSfdcToken',
        'linkedin_profile_url' => 'setLinkedinProfileUrl',
        'last_login' => 'setLastLogin',
        'date_joined' => 'setDateJoined',
        'jid' => 'setJid',
        'primary_phone' => 'setPrimaryPhone',
        'failed_login_count' => 'setFailedLoginCount',
        'is_initial_setup_done' => 'setIsInitialSetupDone',
        'channel_id' => 'setChannelId',
        'is_verified' => 'setIsVerified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'email_id' => 'getEmailId',
        'company' => 'getCompany',
        'title' => 'getTitle',
        'phone' => 'getPhone',
        'profile_picture' => 'getProfilePicture',
        'timezone' => 'getTimezone',
        'time_format' => 'getTimeFormat',
        'language' => 'getLanguage',
        'skype_id' => 'getSkypeId',
        'gtalk_id' => 'getGtalkId',
        'default_endpoint' => 'getDefaultEndpoint',
        'password_change_required' => 'getPasswordChangeRequired',
        'marketo_id' => 'getMarketoId',
        'opt_out_offers' => 'getOptOutOffers',
        'opt_out_news' => 'getOptOutNews',
        'geo_info' => 'getGeoInfo',
        'how_did_you_hear' => 'getHowDidYouHear',
        'sfdc_token' => 'getSfdcToken',
        'linkedin_profile_url' => 'getLinkedinProfileUrl',
        'last_login' => 'getLastLogin',
        'date_joined' => 'getDateJoined',
        'jid' => 'getJid',
        'primary_phone' => 'getPrimaryPhone',
        'failed_login_count' => 'getFailedLoginCount',
        'is_initial_setup_done' => 'getIsInitialSetupDone',
        'channel_id' => 'getChannelId',
        'is_verified' => 'getIsVerified'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['profile_picture'] = isset($data['profile_picture']) ? $data['profile_picture'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['time_format'] = isset($data['time_format']) ? $data['time_format'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['skype_id'] = isset($data['skype_id']) ? $data['skype_id'] : null;
        $this->container['gtalk_id'] = isset($data['gtalk_id']) ? $data['gtalk_id'] : null;
        $this->container['default_endpoint'] = isset($data['default_endpoint']) ? $data['default_endpoint'] : null;
        $this->container['password_change_required'] = isset($data['password_change_required']) ? $data['password_change_required'] : null;
        $this->container['marketo_id'] = isset($data['marketo_id']) ? $data['marketo_id'] : null;
        $this->container['opt_out_offers'] = isset($data['opt_out_offers']) ? $data['opt_out_offers'] : null;
        $this->container['opt_out_news'] = isset($data['opt_out_news']) ? $data['opt_out_news'] : null;
        $this->container['geo_info'] = isset($data['geo_info']) ? $data['geo_info'] : null;
        $this->container['how_did_you_hear'] = isset($data['how_did_you_hear']) ? $data['how_did_you_hear'] : null;
        $this->container['sfdc_token'] = isset($data['sfdc_token']) ? $data['sfdc_token'] : null;
        $this->container['linkedin_profile_url'] = isset($data['linkedin_profile_url']) ? $data['linkedin_profile_url'] : null;
        $this->container['last_login'] = isset($data['last_login']) ? $data['last_login'] : null;
        $this->container['date_joined'] = isset($data['date_joined']) ? $data['date_joined'] : null;
        $this->container['jid'] = isset($data['jid']) ? $data['jid'] : null;
        $this->container['primary_phone'] = isset($data['primary_phone']) ? $data['primary_phone'] : null;
        $this->container['failed_login_count'] = isset($data['failed_login_count']) ? $data['failed_login_count'] : null;
        $this->container['is_initial_setup_done'] = isset($data['is_initial_setup_done']) ? $data['is_initial_setup_done'] : null;
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['is_verified'] = isset($data['is_verified']) ? $data['is_verified'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique identifier for the user.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username User's username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name User's first name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name User's middle name
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name User's last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email_id
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     * @param string $email_id User's email address
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company User's company name
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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
     * @param string $title User's title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone User's phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets profile_picture
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->container['profile_picture'];
    }

    /**
     * Sets profile_picture
     * @param string $profile_picture Path to user's profile picture
     * @return $this
     */
    public function setProfilePicture($profile_picture)
    {
        $this->container['profile_picture'] = $profile_picture;

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
     * @param string $timezone User's timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets time_format
     * @return int
     */
    public function getTimeFormat()
    {
        return $this->container['time_format'];
    }

    /**
     * Sets time_format
     * @param int $time_format User's preference of 12 or 24 hour time display
     * @return $this
     */
    public function setTimeFormat($time_format)
    {
        $this->container['time_format'] = $time_format;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language User's language code, e.g., \"en\"
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets skype_id
     * @return string
     */
    public function getSkypeId()
    {
        return $this->container['skype_id'];
    }

    /**
     * Sets skype_id
     * @param string $skype_id User's skype account identifier
     * @return $this
     */
    public function setSkypeId($skype_id)
    {
        $this->container['skype_id'] = $skype_id;

        return $this;
    }

    /**
     * Gets gtalk_id
     * @return string
     */
    public function getGtalkId()
    {
        return $this->container['gtalk_id'];
    }

    /**
     * Sets gtalk_id
     * @param string $gtalk_id User's Google Talk account identified
     * @return $this
     */
    public function setGtalkId($gtalk_id)
    {
        $this->container['gtalk_id'] = $gtalk_id;

        return $this;
    }

    /**
     * Gets default_endpoint
     * @return string
     */
    public function getDefaultEndpoint()
    {
        return $this->container['default_endpoint'];
    }

    /**
     * Sets default_endpoint
     * @param string $default_endpoint Default type of client user attends meetings
     * @return $this
     */
    public function setDefaultEndpoint($default_endpoint)
    {
        $this->container['default_endpoint'] = $default_endpoint;

        return $this;
    }

    /**
     * Gets password_change_required
     * @return bool
     */
    public function getPasswordChangeRequired()
    {
        return $this->container['password_change_required'];
    }

    /**
     * Sets password_change_required
     * @param bool $password_change_required Force user to change their password on next login
     * @return $this
     */
    public function setPasswordChangeRequired($password_change_required)
    {
        $this->container['password_change_required'] = $password_change_required;

        return $this;
    }

    /**
     * Gets marketo_id
     * @return string
     */
    public function getMarketoId()
    {
        return $this->container['marketo_id'];
    }

    /**
     * Sets marketo_id
     * @param string $marketo_id User's Marketo Account identifier
     * @return $this
     */
    public function setMarketoId($marketo_id)
    {
        $this->container['marketo_id'] = $marketo_id;

        return $this;
    }

    /**
     * Gets opt_out_offers
     * @return bool
     */
    public function getOptOutOffers()
    {
        return $this->container['opt_out_offers'];
    }

    /**
     * Sets opt_out_offers
     * @param bool $opt_out_offers null
     * @return $this
     */
    public function setOptOutOffers($opt_out_offers)
    {
        $this->container['opt_out_offers'] = $opt_out_offers;

        return $this;
    }

    /**
     * Gets opt_out_news
     * @return bool
     */
    public function getOptOutNews()
    {
        return $this->container['opt_out_news'];
    }

    /**
     * Sets opt_out_news
     * @param bool $opt_out_news
     * @return $this
     */
    public function setOptOutNews($opt_out_news)
    {
        $this->container['opt_out_news'] = $opt_out_news;

        return $this;
    }

    /**
     * Gets geo_info
     * @return string
     */
    public function getGeoInfo()
    {
        return $this->container['geo_info'];
    }

    /**
     * Sets geo_info
     * @param string $geo_info JSON string containing User's geographic information including city,state,postal code, country (abbrev, i.e., \"US\"),time zone, country name (i.e.,\"United States\"), ISP, latitude, and longitude
     * @return $this
     */
    public function setGeoInfo($geo_info)
    {
        $this->container['geo_info'] = $geo_info;

        return $this;
    }

    /**
     * Gets how_did_you_hear
     * @return string
     */
    public function getHowDidYouHear()
    {
        return $this->container['how_did_you_hear'];
    }

    /**
     * Sets how_did_you_hear
     * @param string $how_did_you_hear null
     * @return $this
     */
    public function setHowDidYouHear($how_did_you_hear)
    {
        $this->container['how_did_you_hear'] = $how_did_you_hear;

        return $this;
    }

    /**
     * Gets sfdc_token
     * @return string
     */
    public function getSfdcToken()
    {
        return $this->container['sfdc_token'];
    }

    /**
     * Sets sfdc_token
     * @param string $sfdc_token OAuth token used for Salesforce integration
     * @return $this
     */
    public function setSfdcToken($sfdc_token)
    {
        $this->container['sfdc_token'] = $sfdc_token;

        return $this;
    }

    /**
     * Gets linkedin_profile_url
     * @return string
     */
    public function getLinkedinProfileUrl()
    {
        return $this->container['linkedin_profile_url'];
    }

    /**
     * Sets linkedin_profile_url
     * @param string $linkedin_profile_url hyperlink to User's LinkedIn profile
     * @return $this
     */
    public function setLinkedinProfileUrl($linkedin_profile_url)
    {
        $this->container['linkedin_profile_url'] = $linkedin_profile_url;

        return $this;
    }

    /**
     * Gets last_login
     * @return int
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     * @param int $last_login Date and time (in milliseconds) of the User's last login
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets date_joined
     * @return int
     */
    public function getDateJoined()
    {
        return $this->container['date_joined'];
    }

    /**
     * Sets date_joined
     * @param int $date_joined Date and time when BlueJeans account was created
     * @return $this
     */
    public function setDateJoined($date_joined)
    {
        $this->container['date_joined'] = $date_joined;

        return $this;
    }

    /**
     * Gets jid
     * @return string
     */
    public function getJid()
    {
        return $this->container['jid'];
    }

    /**
     * Sets jid
     * @param string $jid User's Jabber Account Identifier
     * @return $this
     */
    public function setJid($jid)
    {
        $this->container['jid'] = $jid;

        return $this;
    }

    /**
     * Gets primary_phone
     * @return string
     */
    public function getPrimaryPhone()
    {
        return $this->container['primary_phone'];
    }

    /**
     * Sets primary_phone
     * @param string $primary_phone User's phone number
     * @return $this
     */
    public function setPrimaryPhone($primary_phone)
    {
        $this->container['primary_phone'] = $primary_phone;

        return $this;
    }

    /**
     * Gets failed_login_count
     * @return int
     */
    public function getFailedLoginCount()
    {
        return $this->container['failed_login_count'];
    }

    /**
     * Sets failed_login_count
     * @param int $failed_login_count Count of how many times a user tried to enter their account password
     * @return $this
     */
    public function setFailedLoginCount($failed_login_count)
    {
        $this->container['failed_login_count'] = $failed_login_count;

        return $this;
    }

    /**
     * Gets is_initial_setup_done
     * @return bool
     */
    public function getIsInitialSetupDone()
    {
        return $this->container['is_initial_setup_done'];
    }

    /**
     * Sets is_initial_setup_done
     * @param bool $is_initial_setup_done
     * @return $this
     */
    public function setIsInitialSetupDone($is_initial_setup_done)
    {
        $this->container['is_initial_setup_done'] = $is_initial_setup_done;

        return $this;
    }

    /**
     * Gets channel_id
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param int $channel_id
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets is_verified
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     * @param bool $is_verified BlueJeans has validated authenticity of the account owner
     * @return $this
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

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


