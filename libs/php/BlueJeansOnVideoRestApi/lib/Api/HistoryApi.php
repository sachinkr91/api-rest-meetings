<?php
/**
 * HistoryApi
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swagger Codegen team
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

namespace BlueJeansOnVideoRestApi\Api;

use \BlueJeansOnVideoRestApi\ApiClient;
use \BlueJeansOnVideoRestApi\ApiException;
use \BlueJeansOnVideoRestApi\Configuration;
use \BlueJeansOnVideoRestApi\ObjectSerializer;

/**
 * HistoryApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoryApi
{
    /**
     * API Client
     *
     * @var \BlueJeansOnVideoRestApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BlueJeansOnVideoRestApi\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BlueJeansOnVideoRestApi\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BlueJeansOnVideoRestApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BlueJeansOnVideoRestApi\ApiClient $apiClient set the API client
     *
     * @return HistoryApi
     */
    public function setApiClient(\BlueJeansOnVideoRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getHistoryByEnterprise
     *
     * Get Meeting History by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Meeting
     */
    public function getHistoryByEnterprise($enterprise_id, $meeting_guid)
    {
        list($response) = $this->getHistoryByEnterpriseWithHttpInfo($enterprise_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getHistoryByEnterpriseWithHttpInfo
     *
     * Get Meeting History by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistoryByEnterpriseWithHttpInfo($enterprise_id, $meeting_guid)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getHistoryByEnterprise');
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_guid when calling getHistoryByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}";
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
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterprise_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_guid),
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
                '\BlueJeansOnVideoRestApi\Model\Meeting',
                '/v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getHistoryByUser
     *
     * Get Meeting History by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Meeting
     */
    public function getHistoryByUser($user_id, $meeting_guid)
    {
        list($response) = $this->getHistoryByUserWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getHistoryByUserWithHttpInfo
     *
     * Get Meeting History by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistoryByUserWithHttpInfo($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getHistoryByUser');
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_guid when calling getHistoryByUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_guid}";
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_guid),
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
                '\BlueJeansOnVideoRestApi\Model\Meeting',
                '/v1/user/{user_id}/meeting_history/{meeting_guid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getHistorySharingByUser
     *
     * Get Meeting History Sharing by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\MeetingHistorySharing
     */
    public function getHistorySharingByUser($user_id, $meeting_guid)
    {
        list($response) = $this->getHistorySharingByUserWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getHistorySharingByUserWithHttpInfo
     *
     * Get Meeting History Sharing by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\MeetingHistorySharing, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistorySharingByUserWithHttpInfo($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getHistorySharingByUser');
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_guid when calling getHistorySharingByUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing";
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_guid),
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
                '\BlueJeansOnVideoRestApi\Model\MeetingHistorySharing',
                '/v1/user/{user_id}/meeting_history/{meeting_guid}/sharing'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\MeetingHistorySharing', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\MeetingHistorySharing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRecording
     *
     * Get Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $recording_entity_id The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Recording
     */
    public function getRecording($user_id, $recording_entity_id)
    {
        list($response) = $this->getRecordingWithHttpInfo($user_id, $recording_entity_id);
        return $response;
    }

    /**
     * Operation getRecordingWithHttpInfo
     *
     * Get Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $recording_entity_id The ID of the meeting recording. This value is shown in meeting recording lists as recordingEntityId. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Recording, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecordingWithHttpInfo($user_id, $recording_entity_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getRecording');
        }
        // verify the required parameter 'recording_entity_id' is set
        if ($recording_entity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recording_entity_id when calling getRecording');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}";
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
        if ($recording_entity_id !== null) {
            $resourcePath = str_replace(
                "{" . "recording_entity_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($recording_entity_id),
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
                '\BlueJeansOnVideoRestApi\Model\Recording',
                '/v1/user/{user_id}/meeting_history/recordings/{recording_entity_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Recording', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Recording', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listHistoryByEnterprise
     *
     * List History by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\MeetingHistory[]
     */
    public function listHistoryByEnterprise($enterprise_id)
    {
        list($response) = $this->listHistoryByEnterpriseWithHttpInfo($enterprise_id);
        return $response;
    }

    /**
     * Operation listHistoryByEnterpriseWithHttpInfo
     *
     * List History by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\MeetingHistory[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listHistoryByEnterpriseWithHttpInfo($enterprise_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling listHistoryByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/meeting_history";
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
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterprise_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($enterprise_id),
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
                '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]',
                '/v1/enterprise/{enterprise_id}/meeting_history'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listHistoryByUser
     *
     * List History by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_id Return only meetings with the specified meeting numeric ID. (optional)
     * @param string $start_date Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param string $end_date Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param int $page_size Sets number of items returned per page. (optional)
     * @param int $page_number Selects which page of results to return. (optional)
     * @param string $order Puts results in ascending or descending order. asc/desc (optional)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\MeetingHistory[]
     */
    public function listHistoryByUser($user_id, $meeting_id = null, $start_date = null, $end_date = null, $page_size = null, $page_number = null, $order = null)
    {
        list($response) = $this->listHistoryByUserWithHttpInfo($user_id, $meeting_id, $start_date, $end_date, $page_size, $page_number, $order);
        return $response;
    }

    /**
     * Operation listHistoryByUserWithHttpInfo
     *
     * List History by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_id Return only meetings with the specified meeting numeric ID. (optional)
     * @param string $start_date Return meetings starting from the specified date. MM/DD/YYYY (optional)
     * @param string $end_date Return meetings up until the specified date. MM/DD/YYYY (optional)
     * @param int $page_size Sets number of items returned per page. (optional)
     * @param int $page_number Selects which page of results to return. (optional)
     * @param string $order Puts results in ascending or descending order. asc/desc (optional)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\MeetingHistory[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listHistoryByUserWithHttpInfo($user_id, $meeting_id = null, $start_date = null, $end_date = null, $page_size = null, $page_number = null, $order = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling listHistoryByUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history";
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
        if ($meeting_id !== null) {
            $queryParams['meetingId'] = $this->apiClient->getSerializer()->toQueryValue($meeting_id);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
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
                '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]',
                '/v1/user/{user_id}/meeting_history'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\MeetingHistory[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listRecordings
     *
     * List Meeting Recordings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $page_size Sets number of items returned per page. (optional, default to 10)
     * @param int $page_number Selects which page of results to return. (optional, default to 1)
     * @param string $sort_by Selects which page of results to return. (optional, default to start_time)
     * @param string $order Puts results in ascending or descending order. (optional, default to desc)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\RecordingSummary[]
     */
    public function listRecordings($user_id, $page_size = '10', $page_number = '1', $sort_by = 'start_time', $order = 'desc')
    {
        list($response) = $this->listRecordingsWithHttpInfo($user_id, $page_size, $page_number, $sort_by, $order);
        return $response;
    }

    /**
     * Operation listRecordingsWithHttpInfo
     *
     * List Meeting Recordings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $page_size Sets number of items returned per page. (optional, default to 10)
     * @param int $page_number Selects which page of results to return. (optional, default to 1)
     * @param string $sort_by Selects which page of results to return. (optional, default to start_time)
     * @param string $order Puts results in ascending or descending order. (optional, default to desc)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\RecordingSummary[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listRecordingsWithHttpInfo($user_id, $page_size = '10', $page_number = '1', $sort_by = 'start_time', $order = 'desc')
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling listRecordings');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/recordings";
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
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sortBy'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
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
                '\BlueJeansOnVideoRestApi\Model\RecordingSummary[]',
                '/v1/user/{user_id}/meeting_history/recordings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\RecordingSummary[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\RecordingSummary[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
