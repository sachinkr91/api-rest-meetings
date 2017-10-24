<?php
/**
 * RecordingApi
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

namespace BlueJeansMeetingsRestApi\Api;

use \BlueJeansMeetingsRestApi\ApiClient;
use \BlueJeansMeetingsRestApi\ApiException;
use \BlueJeansMeetingsRestApi\Configuration;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * RecordingApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecordingApi
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
     * @return RecordingApi
     */
    public function setApiClient(\BlueJeansMeetingsRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getMeetingRecordings
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\RecordingHistoryList
     */
    public function getMeetingRecordings($user_id, $meeting_id, $meeting_guid = null)
    {
        list($response) = $this->getMeetingRecordingsWithHttpInfo($user_id, $meeting_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getMeetingRecordingsWithHttpInfo
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\RecordingHistoryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingRecordingsWithHttpInfo($user_id, $meeting_id, $meeting_guid = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingRecordings');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling getMeetingRecordings');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings";
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
        if ($meeting_guid !== null) {
            $queryParams['meetingGuid'] = $this->apiClient->getSerializer()->toQueryValue($meeting_guid);
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
                '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList',
                '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList', $e->getResponseHeaders());
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
     * Operation getRecordingContent
     *
     * Get Recording Download Link
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param bool $is_downloadable Set to true. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Content
     */
    public function getRecordingContent($user_id, $content_id, $is_downloadable)
    {
        list($response) = $this->getRecordingContentWithHttpInfo($user_id, $content_id, $is_downloadable);
        return $response;
    }

    /**
     * Operation getRecordingContentWithHttpInfo
     *
     * Get Recording Download Link
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param bool $is_downloadable Set to true. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecordingContentWithHttpInfo($user_id, $content_id, $is_downloadable)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getRecordingContent');
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling getRecordingContent');
        }
        // verify the required parameter 'is_downloadable' is set
        if ($is_downloadable === null) {
            throw new \InvalidArgumentException('Missing the required parameter $is_downloadable when calling getRecordingContent');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/cms/{content_id}";
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
        if ($is_downloadable !== null) {
            $queryParams['isDownloadable'] = $this->apiClient->getSerializer()->toQueryValue($is_downloadable);
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
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
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
                '\BlueJeansMeetingsRestApi\Model\Content',
                '/v1/user/{user_id}/cms/{content_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\Content', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Content', $e->getResponseHeaders());
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
     * Operation startRecording
     *
     * Start Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function startRecording($user_id, $meeting_id, $action)
    {
        list($response) = $this->startRecordingWithHttpInfo($user_id, $meeting_id, $action);
        return $response;
    }

    /**
     * Operation startRecordingWithHttpInfo
     *
     * Start Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function startRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling startRecording');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling startRecording');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling startRecording');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings'
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
     * Operation stopRecording
     *
     * Stop Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function stopRecording($user_id, $meeting_id, $action)
    {
        list($response) = $this->stopRecordingWithHttpInfo($user_id, $meeting_id, $action);
        return $response;
    }

    /**
     * Operation stopRecordingWithHttpInfo
     *
     * Stop Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling stopRecording');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling stopRecording');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling stopRecording');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings'
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
     * Operation v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete($user_id, $meeting_guid)
    {
        list($response) = $this->v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete');
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_guid when calling v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/'
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
     * Operation v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete
     *
     * Delete a Specified Recording Chapter
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete($user_id, $meeting_id, $recording_chapter_id)
    {
        list($response) = $this->v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo($user_id, $meeting_id, $recording_chapter_id);
        return $response;
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo
     *
     * Delete a Specified Recording Chapter
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo($user_id, $meeting_id, $recording_chapter_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // verify the required parameter 'recording_chapter_id' is set
        if ($recording_chapter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recording_chapter_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/";
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
        if ($recording_chapter_id !== null) {
            $resourcePath = str_replace(
                "{" . "recording_chapter_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($recording_chapter_id),
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
                '\BlueJeansMeetingsRestApi\Model\Meeting',
                '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/'
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
