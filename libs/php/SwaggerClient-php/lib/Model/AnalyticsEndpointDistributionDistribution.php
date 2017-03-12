<?php
/**
 * AnalyticsEndpointDistributionDistribution
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * AnalyticsEndpointDistributionDistribution Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsEndpointDistributionDistribution implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsEndpointDistribution_distribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
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
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
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
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
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
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
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
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
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
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets google
     * @return int
     */
    public function getGoogle()
    {
        return $this->container['google'];
    }

    /**
     * Sets google
     * @param int $google
     * @return $this
     */
    public function setGoogle($google)
    {
        $this->container['google'] = $google;

        return $this;
    }

    /**
     * Gets telepresence
     * @return int
     */
    public function getTelepresence()
    {
        return $this->container['telepresence'];
    }

    /**
     * Sets telepresence
     * @param int $telepresence
     * @return $this
     */
    public function setTelepresence($telepresence)
    {
        $this->container['telepresence'] = $telepresence;

        return $this;
    }

    /**
     * Gets lync
     * @return int
     */
    public function getLync()
    {
        return $this->container['lync'];
    }

    /**
     * Sets lync
     * @param int $lync
     * @return $this
     */
    public function setLync($lync)
    {
        $this->container['lync'] = $lync;

        return $this;
    }

    /**
     * Gets i_os
     * @return int
     */
    public function getIOs()
    {
        return $this->container['i_os'];
    }

    /**
     * Sets i_os
     * @param int $i_os
     * @return $this
     */
    public function setIOs($i_os)
    {
        $this->container['i_os'] = $i_os;

        return $this;
    }

    /**
     * Gets h323
     * @return int
     */
    public function getH323()
    {
        return $this->container['h323'];
    }

    /**
     * Sets h323
     * @param int $h323
     * @return $this
     */
    public function setH323($h323)
    {
        $this->container['h323'] = $h323;

        return $this;
    }

    /**
     * Gets inter_call
     * @return int
     */
    public function getInterCall()
    {
        return $this->container['inter_call'];
    }

    /**
     * Sets inter_call
     * @param int $inter_call
     * @return $this
     */
    public function setInterCall($inter_call)
    {
        $this->container['inter_call'] = $inter_call;

        return $this;
    }

    /**
     * Gets jabber
     * @return int
     */
    public function getJabber()
    {
        return $this->container['jabber'];
    }

    /**
     * Sets jabber
     * @param int $jabber
     * @return $this
     */
    public function setJabber($jabber)
    {
        $this->container['jabber'] = $jabber;

        return $this;
    }

    /**
     * Gets android
     * @return int
     */
    public function getAndroid()
    {
        return $this->container['android'];
    }

    /**
     * Sets android
     * @param int $android
     * @return $this
     */
    public function setAndroid($android)
    {
        $this->container['android'] = $android;

        return $this;
    }

    /**
     * Gets skype
     * @return int
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     * @param int $skype
     * @return $this
     */
    public function setSkype($skype)
    {
        $this->container['skype'] = $skype;

        return $this;
    }

    /**
     * Gets isdn
     * @return int
     */
    public function getIsdn()
    {
        return $this->container['isdn'];
    }

    /**
     * Sets isdn
     * @param int $isdn
     * @return $this
     */
    public function setIsdn($isdn)
    {
        $this->container['isdn'] = $isdn;

        return $this;
    }

    /**
     * Gets pstn
     * @return int
     */
    public function getPstn()
    {
        return $this->container['pstn'];
    }

    /**
     * Sets pstn
     * @param int $pstn
     * @return $this
     */
    public function setPstn($pstn)
    {
        $this->container['pstn'] = $pstn;

        return $this;
    }

    /**
     * Gets level3
     * @return int
     */
    public function getLevel3()
    {
        return $this->container['level3'];
    }

    /**
     * Sets level3
     * @param int $level3
     * @return $this
     */
    public function setLevel3($level3)
    {
        $this->container['level3'] = $level3;

        return $this;
    }

    /**
     * Gets sip
     * @return int
     */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
     * Sets sip
     * @param int $sip
     * @return $this
     */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;

        return $this;
    }

    /**
     * Gets blue_jeans_app
     * @return int
     */
    public function getBlueJeansApp()
    {
        return $this->container['blue_jeans_app'];
    }

    /**
     * Sets blue_jeans_app
     * @param int $blue_jeans_app
     * @return $this
     */
    public function setBlueJeansApp($blue_jeans_app)
    {
        $this->container['blue_jeans_app'] = $blue_jeans_app;

        return $this;
    }

    /**
     * Gets browser
     * @return int
     */
    public function getBrowser()
    {
        return $this->container['browser'];
    }

    /**
     * Sets browser
     * @param int $browser
     * @return $this
     */
    public function setBrowser($browser)
    {
        $this->container['browser'] = $browser;

        return $this;
    }

    /**
     * Gets web_rtc
     * @return int
     */
    public function getWebRtc()
    {
        return $this->container['web_rtc'];
    }

    /**
     * Sets web_rtc
     * @param int $web_rtc
     * @return $this
     */
    public function setWebRtc($web_rtc)
    {
        $this->container['web_rtc'] = $web_rtc;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


