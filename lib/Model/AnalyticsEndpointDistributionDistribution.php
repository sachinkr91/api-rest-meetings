<?php
/**
 * AnalyticsEndpointDistributionDistribution
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
 * AnalyticsEndpointDistributionDistribution Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsEndpointDistributionDistribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsEndpointDistribution_distribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'google' => 'int',
        'telepresence' => 'int',
        'lync' => 'int',
        'i_os' => 'int',
        'h323' => 'int',
        'inter_call' => 'int',
        'jabber' => 'int',
        'android' => 'int',
        'skype' => 'int',
        'isdn' => 'int',
        'pstn' => 'int',
        'level3' => 'int',
        'sip' => 'int',
        'blue_jeans_app' => 'int',
        'browser' => 'int',
        'web_rtc' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'google' => null,
        'telepresence' => null,
        'lync' => null,
        'i_os' => null,
        'h323' => null,
        'inter_call' => null,
        'jabber' => null,
        'android' => null,
        'skype' => null,
        'isdn' => null,
        'pstn' => null,
        'level3' => null,
        'sip' => null,
        'blue_jeans_app' => null,
        'browser' => null,
        'web_rtc' => null
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
        'google' => 'Google',
        'telepresence' => 'Telepresence',
        'lync' => 'Lync',
        'i_os' => 'iOS',
        'h323' => 'H323',
        'inter_call' => 'InterCall',
        'jabber' => 'Jabber',
        'android' => 'Android',
        'skype' => 'Skype',
        'isdn' => 'ISDN',
        'pstn' => 'PSTN',
        'level3' => 'Level3',
        'sip' => 'SIP',
        'blue_jeans_app' => 'BlueJeansApp',
        'browser' => 'Browser',
        'web_rtc' => 'WebRTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'google' => 'setGoogle',
        'telepresence' => 'setTelepresence',
        'lync' => 'setLync',
        'i_os' => 'setIOs',
        'h323' => 'setH323',
        'inter_call' => 'setInterCall',
        'jabber' => 'setJabber',
        'android' => 'setAndroid',
        'skype' => 'setSkype',
        'isdn' => 'setIsdn',
        'pstn' => 'setPstn',
        'level3' => 'setLevel3',
        'sip' => 'setSip',
        'blue_jeans_app' => 'setBlueJeansApp',
        'browser' => 'setBrowser',
        'web_rtc' => 'setWebRtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'google' => 'getGoogle',
        'telepresence' => 'getTelepresence',
        'lync' => 'getLync',
        'i_os' => 'getIOs',
        'h323' => 'getH323',
        'inter_call' => 'getInterCall',
        'jabber' => 'getJabber',
        'android' => 'getAndroid',
        'skype' => 'getSkype',
        'isdn' => 'getIsdn',
        'pstn' => 'getPstn',
        'level3' => 'getLevel3',
        'sip' => 'getSip',
        'blue_jeans_app' => 'getBlueJeansApp',
        'browser' => 'getBrowser',
        'web_rtc' => 'getWebRtc'
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
        $this->container['google'] = isset($data['google']) ? $data['google'] : null;
        $this->container['telepresence'] = isset($data['telepresence']) ? $data['telepresence'] : null;
        $this->container['lync'] = isset($data['lync']) ? $data['lync'] : null;
        $this->container['i_os'] = isset($data['i_os']) ? $data['i_os'] : null;
        $this->container['h323'] = isset($data['h323']) ? $data['h323'] : null;
        $this->container['inter_call'] = isset($data['inter_call']) ? $data['inter_call'] : null;
        $this->container['jabber'] = isset($data['jabber']) ? $data['jabber'] : null;
        $this->container['android'] = isset($data['android']) ? $data['android'] : null;
        $this->container['skype'] = isset($data['skype']) ? $data['skype'] : null;
        $this->container['isdn'] = isset($data['isdn']) ? $data['isdn'] : null;
        $this->container['pstn'] = isset($data['pstn']) ? $data['pstn'] : null;
        $this->container['level3'] = isset($data['level3']) ? $data['level3'] : null;
        $this->container['sip'] = isset($data['sip']) ? $data['sip'] : null;
        $this->container['blue_jeans_app'] = isset($data['blue_jeans_app']) ? $data['blue_jeans_app'] : null;
        $this->container['browser'] = isset($data['browser']) ? $data['browser'] : null;
        $this->container['web_rtc'] = isset($data['web_rtc']) ? $data['web_rtc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets google
     *
     * @return int
     */
    public function getGoogle()
    {
        return $this->container['google'];
    }

    /**
     * Sets google
     *
     * @param int $google google
     *
     * @return $this
     */
    public function setGoogle($google)
    {
        $this->container['google'] = $google;

        return $this;
    }

    /**
     * Gets telepresence
     *
     * @return int
     */
    public function getTelepresence()
    {
        return $this->container['telepresence'];
    }

    /**
     * Sets telepresence
     *
     * @param int $telepresence telepresence
     *
     * @return $this
     */
    public function setTelepresence($telepresence)
    {
        $this->container['telepresence'] = $telepresence;

        return $this;
    }

    /**
     * Gets lync
     *
     * @return int
     */
    public function getLync()
    {
        return $this->container['lync'];
    }

    /**
     * Sets lync
     *
     * @param int $lync lync
     *
     * @return $this
     */
    public function setLync($lync)
    {
        $this->container['lync'] = $lync;

        return $this;
    }

    /**
     * Gets i_os
     *
     * @return int
     */
    public function getIOs()
    {
        return $this->container['i_os'];
    }

    /**
     * Sets i_os
     *
     * @param int $i_os i_os
     *
     * @return $this
     */
    public function setIOs($i_os)
    {
        $this->container['i_os'] = $i_os;

        return $this;
    }

    /**
     * Gets h323
     *
     * @return int
     */
    public function getH323()
    {
        return $this->container['h323'];
    }

    /**
     * Sets h323
     *
     * @param int $h323 h323
     *
     * @return $this
     */
    public function setH323($h323)
    {
        $this->container['h323'] = $h323;

        return $this;
    }

    /**
     * Gets inter_call
     *
     * @return int
     */
    public function getInterCall()
    {
        return $this->container['inter_call'];
    }

    /**
     * Sets inter_call
     *
     * @param int $inter_call inter_call
     *
     * @return $this
     */
    public function setInterCall($inter_call)
    {
        $this->container['inter_call'] = $inter_call;

        return $this;
    }

    /**
     * Gets jabber
     *
     * @return int
     */
    public function getJabber()
    {
        return $this->container['jabber'];
    }

    /**
     * Sets jabber
     *
     * @param int $jabber jabber
     *
     * @return $this
     */
    public function setJabber($jabber)
    {
        $this->container['jabber'] = $jabber;

        return $this;
    }

    /**
     * Gets android
     *
     * @return int
     */
    public function getAndroid()
    {
        return $this->container['android'];
    }

    /**
     * Sets android
     *
     * @param int $android android
     *
     * @return $this
     */
    public function setAndroid($android)
    {
        $this->container['android'] = $android;

        return $this;
    }

    /**
     * Gets skype
     *
     * @return int
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     *
     * @param int $skype skype
     *
     * @return $this
     */
    public function setSkype($skype)
    {
        $this->container['skype'] = $skype;

        return $this;
    }

    /**
     * Gets isdn
     *
     * @return int
     */
    public function getIsdn()
    {
        return $this->container['isdn'];
    }

    /**
     * Sets isdn
     *
     * @param int $isdn isdn
     *
     * @return $this
     */
    public function setIsdn($isdn)
    {
        $this->container['isdn'] = $isdn;

        return $this;
    }

    /**
     * Gets pstn
     *
     * @return int
     */
    public function getPstn()
    {
        return $this->container['pstn'];
    }

    /**
     * Sets pstn
     *
     * @param int $pstn pstn
     *
     * @return $this
     */
    public function setPstn($pstn)
    {
        $this->container['pstn'] = $pstn;

        return $this;
    }

    /**
     * Gets level3
     *
     * @return int
     */
    public function getLevel3()
    {
        return $this->container['level3'];
    }

    /**
     * Sets level3
     *
     * @param int $level3 level3
     *
     * @return $this
     */
    public function setLevel3($level3)
    {
        $this->container['level3'] = $level3;

        return $this;
    }

    /**
     * Gets sip
     *
     * @return int
     */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
     * Sets sip
     *
     * @param int $sip sip
     *
     * @return $this
     */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;

        return $this;
    }

    /**
     * Gets blue_jeans_app
     *
     * @return int
     */
    public function getBlueJeansApp()
    {
        return $this->container['blue_jeans_app'];
    }

    /**
     * Sets blue_jeans_app
     *
     * @param int $blue_jeans_app blue_jeans_app
     *
     * @return $this
     */
    public function setBlueJeansApp($blue_jeans_app)
    {
        $this->container['blue_jeans_app'] = $blue_jeans_app;

        return $this;
    }

    /**
     * Gets browser
     *
     * @return int
     */
    public function getBrowser()
    {
        return $this->container['browser'];
    }

    /**
     * Sets browser
     *
     * @param int $browser browser
     *
     * @return $this
     */
    public function setBrowser($browser)
    {
        $this->container['browser'] = $browser;

        return $this;
    }

    /**
     * Gets web_rtc
     *
     * @return int
     */
    public function getWebRtc()
    {
        return $this->container['web_rtc'];
    }

    /**
     * Sets web_rtc
     *
     * @param int $web_rtc web_rtc
     *
     * @return $this
     */
    public function setWebRtc($web_rtc)
    {
        $this->container['web_rtc'] = $web_rtc;

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


