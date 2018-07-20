<?php
/**
 * EndpointsInner
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
 * EndpointsInner Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EndpointsInner implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Endpoints_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meetingid' => 'string',
        'name' => 'string',
        'call_quality' => 'string',
        'leader' => 'string',
        'callguid' => 'string',
        'endpoint' => 'string',
        'talk_detected' => 'string',
        'secure_call' => 'string',
        'layout' => 'string',
        'sub_layout' => 'string',
        'video_recv' => 'string',
        'video_recv_local_mute' => 'string',
        'video_recv_remote_mute' => 'string',
        'audio_recv' => 'string',
        'audio_recv_local_mute' => 'string',
        'audio_recv_remote_mute' => 'string',
        'audio_recv_codec' => 'string',
        'audio_send_codec' => 'string',
        'video_recv_codec' => 'string',
        'video_recv_height' => 'string',
        'video_recv_width' => 'string',
        'video_send_codec' => 'string',
        'video_send_height' => 'string',
        'video_send_width' => 'string',
        'visibility' => 'string',
        'chat_endpoint_guid' => 'string',
        'endpoint_guid' => 'string',
        'rdc_version' => 'string',
        'rdc_controller_capable' => 'string',
        'rdc_controllee_capable' => 'string',
        'connections' => '\BlueJeansMeetingsRestApi\Model\EndpointsInnerConnections[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meetingid' => null,
        'name' => null,
        'call_quality' => null,
        'leader' => null,
        'callguid' => null,
        'endpoint' => null,
        'talk_detected' => null,
        'secure_call' => null,
        'layout' => null,
        'sub_layout' => null,
        'video_recv' => null,
        'video_recv_local_mute' => null,
        'video_recv_remote_mute' => null,
        'audio_recv' => null,
        'audio_recv_local_mute' => null,
        'audio_recv_remote_mute' => null,
        'audio_recv_codec' => null,
        'audio_send_codec' => null,
        'video_recv_codec' => null,
        'video_recv_height' => null,
        'video_recv_width' => null,
        'video_send_codec' => null,
        'video_send_height' => null,
        'video_send_width' => null,
        'visibility' => null,
        'chat_endpoint_guid' => null,
        'endpoint_guid' => null,
        'rdc_version' => null,
        'rdc_controller_capable' => null,
        'rdc_controllee_capable' => null,
        'connections' => null
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
        'meetingid' => 'meetingid',
        'name' => 'name',
        'call_quality' => 'CallQuality',
        'leader' => 'Leader',
        'callguid' => 'callguid',
        'endpoint' => 'endpoint',
        'talk_detected' => 'TalkDetected',
        'secure_call' => 'SecureCall',
        'layout' => 'Layout',
        'sub_layout' => 'SubLayout',
        'video_recv' => 'VideoRecv',
        'video_recv_local_mute' => 'VideoRecvLocalMute',
        'video_recv_remote_mute' => 'VideoRecvRemoteMute',
        'audio_recv' => 'AudioRecv',
        'audio_recv_local_mute' => 'AudioRecvLocalMute',
        'audio_recv_remote_mute' => 'AudioRecvRemoteMute',
        'audio_recv_codec' => 'AudioRecvCodec',
        'audio_send_codec' => 'AudioSendCodec',
        'video_recv_codec' => 'VideoRecvCodec',
        'video_recv_height' => 'VideoRecvHeight',
        'video_recv_width' => 'VideoRecvWidth',
        'video_send_codec' => 'VideoSendCodec',
        'video_send_height' => 'VideoSendHeight',
        'video_send_width' => 'VideoSendWidth',
        'visibility' => 'visibility',
        'chat_endpoint_guid' => 'chatEndpointGuid',
        'endpoint_guid' => 'endpointGuid',
        'rdc_version' => 'RDCVersion',
        'rdc_controller_capable' => 'RDCControllerCapable',
        'rdc_controllee_capable' => 'RDCControlleeCapable',
        'connections' => 'connections'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'meetingid' => 'setMeetingid',
        'name' => 'setName',
        'call_quality' => 'setCallQuality',
        'leader' => 'setLeader',
        'callguid' => 'setCallguid',
        'endpoint' => 'setEndpoint',
        'talk_detected' => 'setTalkDetected',
        'secure_call' => 'setSecureCall',
        'layout' => 'setLayout',
        'sub_layout' => 'setSubLayout',
        'video_recv' => 'setVideoRecv',
        'video_recv_local_mute' => 'setVideoRecvLocalMute',
        'video_recv_remote_mute' => 'setVideoRecvRemoteMute',
        'audio_recv' => 'setAudioRecv',
        'audio_recv_local_mute' => 'setAudioRecvLocalMute',
        'audio_recv_remote_mute' => 'setAudioRecvRemoteMute',
        'audio_recv_codec' => 'setAudioRecvCodec',
        'audio_send_codec' => 'setAudioSendCodec',
        'video_recv_codec' => 'setVideoRecvCodec',
        'video_recv_height' => 'setVideoRecvHeight',
        'video_recv_width' => 'setVideoRecvWidth',
        'video_send_codec' => 'setVideoSendCodec',
        'video_send_height' => 'setVideoSendHeight',
        'video_send_width' => 'setVideoSendWidth',
        'visibility' => 'setVisibility',
        'chat_endpoint_guid' => 'setChatEndpointGuid',
        'endpoint_guid' => 'setEndpointGuid',
        'rdc_version' => 'setRdcVersion',
        'rdc_controller_capable' => 'setRdcControllerCapable',
        'rdc_controllee_capable' => 'setRdcControlleeCapable',
        'connections' => 'setConnections'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'meetingid' => 'getMeetingid',
        'name' => 'getName',
        'call_quality' => 'getCallQuality',
        'leader' => 'getLeader',
        'callguid' => 'getCallguid',
        'endpoint' => 'getEndpoint',
        'talk_detected' => 'getTalkDetected',
        'secure_call' => 'getSecureCall',
        'layout' => 'getLayout',
        'sub_layout' => 'getSubLayout',
        'video_recv' => 'getVideoRecv',
        'video_recv_local_mute' => 'getVideoRecvLocalMute',
        'video_recv_remote_mute' => 'getVideoRecvRemoteMute',
        'audio_recv' => 'getAudioRecv',
        'audio_recv_local_mute' => 'getAudioRecvLocalMute',
        'audio_recv_remote_mute' => 'getAudioRecvRemoteMute',
        'audio_recv_codec' => 'getAudioRecvCodec',
        'audio_send_codec' => 'getAudioSendCodec',
        'video_recv_codec' => 'getVideoRecvCodec',
        'video_recv_height' => 'getVideoRecvHeight',
        'video_recv_width' => 'getVideoRecvWidth',
        'video_send_codec' => 'getVideoSendCodec',
        'video_send_height' => 'getVideoSendHeight',
        'video_send_width' => 'getVideoSendWidth',
        'visibility' => 'getVisibility',
        'chat_endpoint_guid' => 'getChatEndpointGuid',
        'endpoint_guid' => 'getEndpointGuid',
        'rdc_version' => 'getRdcVersion',
        'rdc_controller_capable' => 'getRdcControllerCapable',
        'rdc_controllee_capable' => 'getRdcControlleeCapable',
        'connections' => 'getConnections'
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
        $this->container['meetingid'] = isset($data['meetingid']) ? $data['meetingid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['call_quality'] = isset($data['call_quality']) ? $data['call_quality'] : null;
        $this->container['leader'] = isset($data['leader']) ? $data['leader'] : null;
        $this->container['callguid'] = isset($data['callguid']) ? $data['callguid'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['talk_detected'] = isset($data['talk_detected']) ? $data['talk_detected'] : null;
        $this->container['secure_call'] = isset($data['secure_call']) ? $data['secure_call'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['sub_layout'] = isset($data['sub_layout']) ? $data['sub_layout'] : null;
        $this->container['video_recv'] = isset($data['video_recv']) ? $data['video_recv'] : null;
        $this->container['video_recv_local_mute'] = isset($data['video_recv_local_mute']) ? $data['video_recv_local_mute'] : null;
        $this->container['video_recv_remote_mute'] = isset($data['video_recv_remote_mute']) ? $data['video_recv_remote_mute'] : null;
        $this->container['audio_recv'] = isset($data['audio_recv']) ? $data['audio_recv'] : null;
        $this->container['audio_recv_local_mute'] = isset($data['audio_recv_local_mute']) ? $data['audio_recv_local_mute'] : null;
        $this->container['audio_recv_remote_mute'] = isset($data['audio_recv_remote_mute']) ? $data['audio_recv_remote_mute'] : null;
        $this->container['audio_recv_codec'] = isset($data['audio_recv_codec']) ? $data['audio_recv_codec'] : null;
        $this->container['audio_send_codec'] = isset($data['audio_send_codec']) ? $data['audio_send_codec'] : null;
        $this->container['video_recv_codec'] = isset($data['video_recv_codec']) ? $data['video_recv_codec'] : null;
        $this->container['video_recv_height'] = isset($data['video_recv_height']) ? $data['video_recv_height'] : null;
        $this->container['video_recv_width'] = isset($data['video_recv_width']) ? $data['video_recv_width'] : null;
        $this->container['video_send_codec'] = isset($data['video_send_codec']) ? $data['video_send_codec'] : null;
        $this->container['video_send_height'] = isset($data['video_send_height']) ? $data['video_send_height'] : null;
        $this->container['video_send_width'] = isset($data['video_send_width']) ? $data['video_send_width'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['chat_endpoint_guid'] = isset($data['chat_endpoint_guid']) ? $data['chat_endpoint_guid'] : null;
        $this->container['endpoint_guid'] = isset($data['endpoint_guid']) ? $data['endpoint_guid'] : null;
        $this->container['rdc_version'] = isset($data['rdc_version']) ? $data['rdc_version'] : null;
        $this->container['rdc_controller_capable'] = isset($data['rdc_controller_capable']) ? $data['rdc_controller_capable'] : null;
        $this->container['rdc_controllee_capable'] = isset($data['rdc_controllee_capable']) ? $data['rdc_controllee_capable'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
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
     * Gets meetingid
     * @return string
     */
    public function getMeetingid()
    {
        return $this->container['meetingid'];
    }

    /**
     * Sets meetingid
     * @param string $meetingid
     * @return $this
     */
    public function setMeetingid($meetingid)
    {
        $this->container['meetingid'] = $meetingid;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets call_quality
     * @return string
     */
    public function getCallQuality()
    {
        return $this->container['call_quality'];
    }

    /**
     * Sets call_quality
     * @param string $call_quality
     * @return $this
     */
    public function setCallQuality($call_quality)
    {
        $this->container['call_quality'] = $call_quality;

        return $this;
    }

    /**
     * Gets leader
     * @return string
     */
    public function getLeader()
    {
        return $this->container['leader'];
    }

    /**
     * Sets leader
     * @param string $leader
     * @return $this
     */
    public function setLeader($leader)
    {
        $this->container['leader'] = $leader;

        return $this;
    }

    /**
     * Gets callguid
     * @return string
     */
    public function getCallguid()
    {
        return $this->container['callguid'];
    }

    /**
     * Sets callguid
     * @param string $callguid
     * @return $this
     */
    public function setCallguid($callguid)
    {
        $this->container['callguid'] = $callguid;

        return $this;
    }

    /**
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets talk_detected
     * @return string
     */
    public function getTalkDetected()
    {
        return $this->container['talk_detected'];
    }

    /**
     * Sets talk_detected
     * @param string $talk_detected
     * @return $this
     */
    public function setTalkDetected($talk_detected)
    {
        $this->container['talk_detected'] = $talk_detected;

        return $this;
    }

    /**
     * Gets secure_call
     * @return string
     */
    public function getSecureCall()
    {
        return $this->container['secure_call'];
    }

    /**
     * Sets secure_call
     * @param string $secure_call
     * @return $this
     */
    public function setSecureCall($secure_call)
    {
        $this->container['secure_call'] = $secure_call;

        return $this;
    }

    /**
     * Gets layout
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     * @param string $layout
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets sub_layout
     * @return string
     */
    public function getSubLayout()
    {
        return $this->container['sub_layout'];
    }

    /**
     * Sets sub_layout
     * @param string $sub_layout
     * @return $this
     */
    public function setSubLayout($sub_layout)
    {
        $this->container['sub_layout'] = $sub_layout;

        return $this;
    }

    /**
     * Gets video_recv
     * @return string
     */
    public function getVideoRecv()
    {
        return $this->container['video_recv'];
    }

    /**
     * Sets video_recv
     * @param string $video_recv
     * @return $this
     */
    public function setVideoRecv($video_recv)
    {
        $this->container['video_recv'] = $video_recv;

        return $this;
    }

    /**
     * Gets video_recv_local_mute
     * @return string
     */
    public function getVideoRecvLocalMute()
    {
        return $this->container['video_recv_local_mute'];
    }

    /**
     * Sets video_recv_local_mute
     * @param string $video_recv_local_mute
     * @return $this
     */
    public function setVideoRecvLocalMute($video_recv_local_mute)
    {
        $this->container['video_recv_local_mute'] = $video_recv_local_mute;

        return $this;
    }

    /**
     * Gets video_recv_remote_mute
     * @return string
     */
    public function getVideoRecvRemoteMute()
    {
        return $this->container['video_recv_remote_mute'];
    }

    /**
     * Sets video_recv_remote_mute
     * @param string $video_recv_remote_mute
     * @return $this
     */
    public function setVideoRecvRemoteMute($video_recv_remote_mute)
    {
        $this->container['video_recv_remote_mute'] = $video_recv_remote_mute;

        return $this;
    }

    /**
     * Gets audio_recv
     * @return string
     */
    public function getAudioRecv()
    {
        return $this->container['audio_recv'];
    }

    /**
     * Sets audio_recv
     * @param string $audio_recv
     * @return $this
     */
    public function setAudioRecv($audio_recv)
    {
        $this->container['audio_recv'] = $audio_recv;

        return $this;
    }

    /**
     * Gets audio_recv_local_mute
     * @return string
     */
    public function getAudioRecvLocalMute()
    {
        return $this->container['audio_recv_local_mute'];
    }

    /**
     * Sets audio_recv_local_mute
     * @param string $audio_recv_local_mute
     * @return $this
     */
    public function setAudioRecvLocalMute($audio_recv_local_mute)
    {
        $this->container['audio_recv_local_mute'] = $audio_recv_local_mute;

        return $this;
    }

    /**
     * Gets audio_recv_remote_mute
     * @return string
     */
    public function getAudioRecvRemoteMute()
    {
        return $this->container['audio_recv_remote_mute'];
    }

    /**
     * Sets audio_recv_remote_mute
     * @param string $audio_recv_remote_mute
     * @return $this
     */
    public function setAudioRecvRemoteMute($audio_recv_remote_mute)
    {
        $this->container['audio_recv_remote_mute'] = $audio_recv_remote_mute;

        return $this;
    }

    /**
     * Gets audio_recv_codec
     * @return string
     */
    public function getAudioRecvCodec()
    {
        return $this->container['audio_recv_codec'];
    }

    /**
     * Sets audio_recv_codec
     * @param string $audio_recv_codec
     * @return $this
     */
    public function setAudioRecvCodec($audio_recv_codec)
    {
        $this->container['audio_recv_codec'] = $audio_recv_codec;

        return $this;
    }

    /**
     * Gets audio_send_codec
     * @return string
     */
    public function getAudioSendCodec()
    {
        return $this->container['audio_send_codec'];
    }

    /**
     * Sets audio_send_codec
     * @param string $audio_send_codec
     * @return $this
     */
    public function setAudioSendCodec($audio_send_codec)
    {
        $this->container['audio_send_codec'] = $audio_send_codec;

        return $this;
    }

    /**
     * Gets video_recv_codec
     * @return string
     */
    public function getVideoRecvCodec()
    {
        return $this->container['video_recv_codec'];
    }

    /**
     * Sets video_recv_codec
     * @param string $video_recv_codec
     * @return $this
     */
    public function setVideoRecvCodec($video_recv_codec)
    {
        $this->container['video_recv_codec'] = $video_recv_codec;

        return $this;
    }

    /**
     * Gets video_recv_height
     * @return string
     */
    public function getVideoRecvHeight()
    {
        return $this->container['video_recv_height'];
    }

    /**
     * Sets video_recv_height
     * @param string $video_recv_height
     * @return $this
     */
    public function setVideoRecvHeight($video_recv_height)
    {
        $this->container['video_recv_height'] = $video_recv_height;

        return $this;
    }

    /**
     * Gets video_recv_width
     * @return string
     */
    public function getVideoRecvWidth()
    {
        return $this->container['video_recv_width'];
    }

    /**
     * Sets video_recv_width
     * @param string $video_recv_width
     * @return $this
     */
    public function setVideoRecvWidth($video_recv_width)
    {
        $this->container['video_recv_width'] = $video_recv_width;

        return $this;
    }

    /**
     * Gets video_send_codec
     * @return string
     */
    public function getVideoSendCodec()
    {
        return $this->container['video_send_codec'];
    }

    /**
     * Sets video_send_codec
     * @param string $video_send_codec
     * @return $this
     */
    public function setVideoSendCodec($video_send_codec)
    {
        $this->container['video_send_codec'] = $video_send_codec;

        return $this;
    }

    /**
     * Gets video_send_height
     * @return string
     */
    public function getVideoSendHeight()
    {
        return $this->container['video_send_height'];
    }

    /**
     * Sets video_send_height
     * @param string $video_send_height
     * @return $this
     */
    public function setVideoSendHeight($video_send_height)
    {
        $this->container['video_send_height'] = $video_send_height;

        return $this;
    }

    /**
     * Gets video_send_width
     * @return string
     */
    public function getVideoSendWidth()
    {
        return $this->container['video_send_width'];
    }

    /**
     * Sets video_send_width
     * @param string $video_send_width
     * @return $this
     */
    public function setVideoSendWidth($video_send_width)
    {
        $this->container['video_send_width'] = $video_send_width;

        return $this;
    }

    /**
     * Gets visibility
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param string $visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets chat_endpoint_guid
     * @return string
     */
    public function getChatEndpointGuid()
    {
        return $this->container['chat_endpoint_guid'];
    }

    /**
     * Sets chat_endpoint_guid
     * @param string $chat_endpoint_guid
     * @return $this
     */
    public function setChatEndpointGuid($chat_endpoint_guid)
    {
        $this->container['chat_endpoint_guid'] = $chat_endpoint_guid;

        return $this;
    }

    /**
     * Gets endpoint_guid
     * @return string
     */
    public function getEndpointGuid()
    {
        return $this->container['endpoint_guid'];
    }

    /**
     * Sets endpoint_guid
     * @param string $endpoint_guid
     * @return $this
     */
    public function setEndpointGuid($endpoint_guid)
    {
        $this->container['endpoint_guid'] = $endpoint_guid;

        return $this;
    }

    /**
     * Gets rdc_version
     * @return string
     */
    public function getRdcVersion()
    {
        return $this->container['rdc_version'];
    }

    /**
     * Sets rdc_version
     * @param string $rdc_version
     * @return $this
     */
    public function setRdcVersion($rdc_version)
    {
        $this->container['rdc_version'] = $rdc_version;

        return $this;
    }

    /**
     * Gets rdc_controller_capable
     * @return string
     */
    public function getRdcControllerCapable()
    {
        return $this->container['rdc_controller_capable'];
    }

    /**
     * Sets rdc_controller_capable
     * @param string $rdc_controller_capable
     * @return $this
     */
    public function setRdcControllerCapable($rdc_controller_capable)
    {
        $this->container['rdc_controller_capable'] = $rdc_controller_capable;

        return $this;
    }

    /**
     * Gets rdc_controllee_capable
     * @return string
     */
    public function getRdcControlleeCapable()
    {
        return $this->container['rdc_controllee_capable'];
    }

    /**
     * Sets rdc_controllee_capable
     * @param string $rdc_controllee_capable
     * @return $this
     */
    public function setRdcControlleeCapable($rdc_controllee_capable)
    {
        $this->container['rdc_controllee_capable'] = $rdc_controllee_capable;

        return $this;
    }

    /**
     * Gets connections
     * @return \BlueJeansMeetingsRestApi\Model\EndpointsInnerConnections[]
     */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
     * Sets connections
     * @param \BlueJeansMeetingsRestApi\Model\EndpointsInnerConnections[] $connections
     * @return $this
     */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;

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


