<?php
/**
 * MeetingApi
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

namespace BlueJeansMeetingsRestApi\Api;

use \BlueJeansMeetingsRestApi\ApiClient;
use \BlueJeansMeetingsRestApi\ApiException;
use \BlueJeansMeetingsRestApi\Configuration;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * MeetingApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingApi
{
    /**
     * API Client
     *
     * @var \BlueJeansMeetingsRestApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BlueJeansMeetingsRestApi\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BlueJeansMeetingsRestApi\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BlueJeansMeetingsRestApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BlueJeansMeetingsRestApi\ApiClient $apiClient set the API client
     *
     * @return MeetingApi
     */
    public function setApiClient(\BlueJeansMeetingsRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelMeeting
     *
     * Cancel Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param bool $email Dispatch an email to participants with the specified cancellation message. (required)
     * @param string $cancellation_message Message sent to participants when meeting is deleted and email is selected (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function cancelMeeting($user_id, $meeting_id, $email, $cancellation_message)
    {
        list($response) = $this->cancelMeetingWithHttpInfo($user_id, $meeting_id, $email, $cancellation_message);
        return $response;
    }

    /**
     * Operation cancelMeetingWithHttpInfo
     *
     * Cancel Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param bool $email Dispatch an email to participants with the specified cancellation message. (required)
     * @param string $cancellation_message Message sent to participants when meeting is deleted and email is selected (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelMeetingWithHttpInfo($user_id, $meeting_id, $email, $cancellation_message)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling cancelMeeting');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling cancelMeeting');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling cancelMeeting');
        }
        // verify the required parameter 'cancellation_message' is set
        if ($cancellation_message === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cancellation_message when calling cancelMeeting');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($email !== null) {
            $resourcePath = str_replace(
                "{" . "email" . "}",
                $this->apiClient->getSerializer()->toPathValue($email),
                $resourcePath
            );
        }
        // path params
        if ($cancellation_message !== null) {
            $resourcePath = str_replace(
                "{" . "cancellationMessage" . "}",
                $this->apiClient->getSerializer()->toPathValue($cancellation_message),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/scheduled_meeting/{meeting_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createMeeting
     *
     * Create Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param bool $email If set to true, sends invitation emails to all listed participants. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function createMeeting($user_id, $meeting, $email = null)
    {
        list($response) = $this->createMeetingWithHttpInfo($user_id, $meeting, $email);
        return $response;
    }

    /**
     * Operation createMeetingWithHttpInfo
     *
     * Create Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param bool $email If set to true, sends invitation emails to all listed participants. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMeetingWithHttpInfo($user_id, $meeting, $email = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling createMeeting');
        }
        // verify the required parameter 'meeting' is set
        if ($meeting === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting when calling createMeeting');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($meeting)) {
            $_tempBody = $meeting;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/scheduled_meeting'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dialoutPstn
     *
     * Dialout via PSTN
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout  (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\DialoutPstn
     */
    public function dialoutPstn($user_id, $numeric_meeting_id, $payload_dialout)
    {
        list($response) = $this->dialoutPstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_dialout);
        return $response;
    }

    /**
     * Operation dialoutPstnWithHttpInfo
     *
     * Dialout via PSTN
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout  (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\DialoutPstn, HTTP status code, HTTP response headers (array of strings)
     */
    public function dialoutPstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_dialout)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling dialoutPstn');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling dialoutPstn');
        }
        // verify the required parameter 'payload_dialout' is set
        if ($payload_dialout === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_dialout when calling dialoutPstn');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_dialout)) {
            $_tempBody = $payload_dialout;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\DialoutPstn',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\DialoutPstn', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\DialoutPstn', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation generatePairingCodePstn
     *
     * Generate Pairing Code (PSTN)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn  (required)
     * @param string $role  (optional, default to USER)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\PairingCodePSTN
     */
    public function generatePairingCodePstn($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        list($response) = $this->generatePairingCodePstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role);
        return $response;
    }

    /**
     * Operation generatePairingCodePstnWithHttpInfo
     *
     * Generate Pairing Code (PSTN)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn  (required)
     * @param string $role  (optional, default to USER)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodePSTN, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodePstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling generatePairingCodePstn');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling generatePairingCodePstn');
        }
        // verify the required parameter 'payload_pairing_code_pstn' is set
        if ($payload_pairing_code_pstn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_pairing_code_pstn when calling generatePairingCodePstn');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($role !== null) {
            $queryParams['role'] = $this->apiClient->getSerializer()->toQueryValue($role);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_pstn)) {
            $_tempBody = $payload_pairing_code_pstn;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation generatePairingCodeSip
     *
     * Generate Pairing Code (SIP)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\PairingCodeSIP
     */
    public function generatePairingCodeSip($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        list($response) = $this->generatePairingCodeSipWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_sip);
        return $response;
    }

    /**
     * Operation generatePairingCodeSipWithHttpInfo
     *
     * Generate Pairing Code (SIP)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodeSIP, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodeSipWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling generatePairingCodeSip');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling generatePairingCodeSip');
        }
        // verify the required parameter 'payload_pairing_code_sip' is set
        if ($payload_pairing_code_sip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_pairing_code_sip when calling generatePairingCodeSip');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_sip)) {
            $_tempBody = $payload_pairing_code_sip;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation generatePairingCodeWebRtc
     *
     * Generate Pairing Code (WebRTC)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc  (required)
     * @param string $role  (optional, default to USER)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC
     */
    public function generatePairingCodeWebRtc($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        list($response) = $this->generatePairingCodeWebRtcWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role);
        return $response;
    }

    /**
     * Operation generatePairingCodeWebRtcWithHttpInfo
     *
     * Generate Pairing Code (WebRTC)
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc  (required)
     * @param string $role  (optional, default to USER)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodeWebRtcWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling generatePairingCodeWebRtc');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling generatePairingCodeWebRtc');
        }
        // verify the required parameter 'payload_pairing_code_web_rtc' is set
        if ($payload_pairing_code_web_rtc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_pairing_code_web_rtc when calling generatePairingCodeWebRtc');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($role !== null) {
            $queryParams['role'] = $this->apiClient->getSerializer()->toQueryValue($role);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_web_rtc)) {
            $_tempBody = $payload_pairing_code_web_rtc;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getEndpointLayout
     *
     * Get Endpoint Layout
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Layout
     */
    public function getEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        list($response) = $this->getEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid);
        return $response;
    }

    /**
     * Operation getEndpointLayoutWithHttpInfo
     *
     * Get Endpoint Layout
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Layout, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getEndpointLayout');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling getEndpointLayout');
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endpoint_guid when calling getEndpointLayout');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                "{" . "endpoint_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($endpoint_guid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Layout',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Layout', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Layout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeeting
     *
     * Get Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function getMeeting($user_id, $meeting_id)
    {
        list($response) = $this->getMeetingWithHttpInfo($user_id, $meeting_id);
        return $response;
    }

    /**
     * Operation getMeetingWithHttpInfo
     *
     * Get Meeting
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingWithHttpInfo($user_id, $meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeeting');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling getMeeting');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/scheduled_meeting/{meeting_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeetingEmails
     *
     * Get Meeting Email
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $type TEXT, ICS, HTML (optional)
     * @param string $role moderator, participant (optional)
     * @param string $action create, edit, delete (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingEmails
     */
    public function getMeetingEmails($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        list($response) = $this->getMeetingEmailsWithHttpInfo($user_id, $meeting_id, $type, $role, $action);
        return $response;
    }

    /**
     * Operation getMeetingEmailsWithHttpInfo
     *
     * Get Meeting Email
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $type TEXT, ICS, HTML (optional)
     * @param string $role moderator, participant (optional)
     * @param string $action create, edit, delete (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingEmails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEmailsWithHttpInfo($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingEmails');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling getMeetingEmails');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($role !== null) {
            $queryParams['role'] = $this->apiClient->getSerializer()->toQueryValue($role);
        }
        // query params
        if ($action !== null) {
            $queryParams['action'] = $this->apiClient->getSerializer()->toQueryValue($action);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\MeetingEmails',
                '/v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingEmails', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingEmails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeetingEndpoint
     *
     * Get Endpoint Information
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Endpoint
     */
    public function getMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        list($response) = $this->getMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid);
        return $response;
    }

    /**
     * Operation getMeetingEndpointWithHttpInfo
     *
     * Get Endpoint Information
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingEndpoint');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling getMeetingEndpoint');
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endpoint_guid when calling getMeetingEndpoint');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                "{" . "endpoint_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($endpoint_guid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Endpoint',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Endpoint', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Endpoint', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeetingEndpoints
     *
     * List Meeting Endpoints
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Endpoints
     */
    public function getMeetingEndpoints($user_id, $numeric_meeting_id)
    {
        list($response) = $this->getMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id);
        return $response;
    }

    /**
     * Operation getMeetingEndpointsWithHttpInfo
     *
     * List Meeting Endpoints
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoints, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingEndpoints');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling getMeetingEndpoints');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Endpoints',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Endpoints', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Endpoints', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeetingNumbers
     *
     * Get Meeting Join Info
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Numbers
     */
    public function getMeetingNumbers($user_id, $meeting_id)
    {
        list($response) = $this->getMeetingNumbersWithHttpInfo($user_id, $meeting_id);
        return $response;
    }

    /**
     * Operation getMeetingNumbersWithHttpInfo
     *
     * Get Meeting Join Info
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Numbers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingNumbersWithHttpInfo($user_id, $meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingNumbers');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling getMeetingNumbers');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meetings/{meeting_id}/numbers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Numbers',
                '/v1/user/{user_id}/meetings/{meeting_id}/numbers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Numbers', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Numbers', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMeetingState
     *
     * Get Meeting State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingState
     */
    public function getMeetingState($user_id, $numeric_meeting_id)
    {
        list($response) = $this->getMeetingStateWithHttpInfo($user_id, $numeric_meeting_id);
        return $response;
    }

    /**
     * Operation getMeetingStateWithHttpInfo
     *
     * Get Meeting State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingState, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingStateWithHttpInfo($user_id, $numeric_meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingState');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling getMeetingState');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\MeetingState',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingState', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingState', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listMeetings
     *
     * List Meetings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting[]
     */
    public function listMeetings($user_id, $numeric_meeting_id = null)
    {
        list($response) = $this->listMeetingsWithHttpInfo($user_id, $numeric_meeting_id);
        return $response;
    }

    /**
     * Operation listMeetingsWithHttpInfo
     *
     * List Meetings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listMeetingsWithHttpInfo($user_id, $numeric_meeting_id = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling listMeetings');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($numeric_meeting_id !== null) {
            $queryParams['numericMeetingId'] = $this->apiClient->getSerializer()->toQueryValue($numeric_meeting_id);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting[]',
                '/v1/user/{user_id}/scheduled_meeting'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Meeting[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Meeting[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendMeetingInvite
     *
     * Send Email Invite
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite  (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function sendMeetingInvite($user_id, $numeric_meeting_id, $payload_invite)
    {
        list($response) = $this->sendMeetingInviteWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite);
        return $response;
    }

    /**
     * Operation sendMeetingInviteWithHttpInfo
     *
     * Send Email Invite
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite  (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendMeetingInviteWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling sendMeetingInvite');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling sendMeetingInvite');
        }
        // verify the required parameter 'payload_invite' is set
        if ($payload_invite === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_invite when calling sendMeetingInvite');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_invite)) {
            $_tempBody = $payload_invite;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateEndpointLayout
     *
     * Update Endpoint Layout
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param bool $is_leader  (optional)
     * @param bool $push  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Layout
     */
    public function updateEndpointLayout($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        list($response) = $this->updateEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push);
        return $response;
    }

    /**
     * Operation updateEndpointLayoutWithHttpInfo
     *
     * Update Endpoint Layout
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param bool $is_leader  (optional)
     * @param bool $push  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Layout, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateEndpointLayout');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling updateEndpointLayout');
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endpoint_guid when calling updateEndpointLayout');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($is_leader !== null) {
            $queryParams['isLeader'] = $this->apiClient->getSerializer()->toQueryValue($is_leader);
        }
        // query params
        if ($push !== null) {
            $queryParams['push'] = $this->apiClient->getSerializer()->toQueryValue($push);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                "{" . "endpoint_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($endpoint_guid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Layout',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Layout', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Layout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMeeting
     *
     * Update Meeting
     *
     * @param int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function updateMeeting($user_id, $meeting_id, $meeting)
    {
        list($response) = $this->updateMeetingWithHttpInfo($user_id, $meeting_id, $meeting);
        return $response;
    }

    /**
     * Operation updateMeetingWithHttpInfo
     *
     * Update Meeting
     *
     * @param int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingWithHttpInfo($user_id, $meeting_id, $meeting)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateMeeting');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling updateMeeting');
        }
        // verify the required parameter 'meeting' is set
        if ($meeting === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting when calling updateMeeting');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/scheduled_meeting/{meeting_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($meeting)) {
            $_tempBody = $meeting;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/scheduled_meeting/{meeting_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMeetingEndpoint
     *
     * Update Endpoint Video/Audio State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param bool $mute_audio Toggle the audio source mute. (optional)
     * @param bool $mute_video Toggle the video source mute. (optional)
     * @param bool $leave_meeting Remove the user from the meeting. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Endpoint
     */
    public function updateMeetingEndpoint($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        list($response) = $this->updateMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting);
        return $response;
    }

    /**
     * Operation updateMeetingEndpointWithHttpInfo
     *
     * Update Endpoint Video/Audio State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param bool $mute_audio Toggle the audio source mute. (optional)
     * @param bool $mute_video Toggle the video source mute. (optional)
     * @param bool $leave_meeting Remove the user from the meeting. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateMeetingEndpoint');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling updateMeetingEndpoint');
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endpoint_guid when calling updateMeetingEndpoint');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($mute_audio !== null) {
            $queryParams['muteAudio'] = $this->apiClient->getSerializer()->toQueryValue($mute_audio);
        }
        // query params
        if ($mute_video !== null) {
            $queryParams['muteVideo'] = $this->apiClient->getSerializer()->toQueryValue($mute_video);
        }
        // query params
        if ($leave_meeting !== null) {
            $queryParams['leaveMeeting'] = $this->apiClient->getSerializer()->toQueryValue($leave_meeting);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                "{" . "endpoint_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($endpoint_guid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Endpoint',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Endpoint', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Endpoint', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMeetingEndpoints
     *
     * Update Meeting Endpoints State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param string $media Specify the type of media you which to mute/unmute. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function updateMeetingEndpoints($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        list($response) = $this->updateMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id, $mute, $media);
        return $response;
    }

    /**
     * Operation updateMeetingEndpointsWithHttpInfo
     *
     * Update Meeting Endpoints State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param string $media Specify the type of media you which to mute/unmute. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateMeetingEndpoints');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling updateMeetingEndpoints');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($mute !== null) {
            $queryParams['mute'] = $this->apiClient->getSerializer()->toQueryValue($mute);
        }
        // query params
        if ($media !== null) {
            $queryParams['media'] = $this->apiClient->getSerializer()->toQueryValue($media);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMeetingState
     *
     * Update Meeting State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param int $delay Number of seconds to delay the end meeting operation. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function updateMeetingState($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        list($response) = $this->updateMeetingStateWithHttpInfo($user_id, $numeric_meeting_id, $payload_meeting_state, $delay);
        return $response;
    }

    /**
     * Operation updateMeetingStateWithHttpInfo
     *
     * Update Meeting State
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param int $delay Number of seconds to delay the end meeting operation. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingStateWithHttpInfo($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateMeetingState');
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $numeric_meeting_id when calling updateMeetingState');
        }
        // verify the required parameter 'payload_meeting_state' is set
        if ($payload_meeting_state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload_meeting_state when calling updateMeetingState');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{numeric_meeting_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($delay !== null) {
            $queryParams['delay'] = $this->apiClient->getSerializer()->toQueryValue($delay);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "numeric_meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($payload_meeting_state)) {
            $_tempBody = $payload_meeting_state;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
