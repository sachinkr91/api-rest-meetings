<?php
/**
 * UserApi
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
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
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
     * @return UserApi
     */
    public function setApiClient(\BlueJeansOnVideoRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getEnterpriseProfile
     *
     * Get Enterprise Profile
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Enterprise
     */
    public function getEnterpriseProfile($user_id)
    {
        list($response) = $this->getEnterpriseProfileWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getEnterpriseProfileWithHttpInfo
     *
     * Get Enterprise Profile
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Enterprise, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseProfileWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getEnterpriseProfile');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/enterprise_profile";
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
                '\BlueJeansOnVideoRestApi\Model\Enterprise',
                '/v1/user/{user_id}/enterprise_profile'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Enterprise', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Enterprise', $e->getResponseHeaders());
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
     * Operation getGrantedApplications
     *
     * Get Granted Applications
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\GrantedApplications
     */
    public function getGrantedApplications($user_id)
    {
        list($response) = $this->getGrantedApplicationsWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getGrantedApplicationsWithHttpInfo
     *
     * Get Granted Applications
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\GrantedApplications, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGrantedApplicationsWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getGrantedApplications');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/granted_applications";
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
                '\BlueJeansOnVideoRestApi\Model\GrantedApplications',
                '/v1/user/{user_id}/granted_applications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\GrantedApplications', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\GrantedApplications', $e->getResponseHeaders());
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
     * Operation getGroups
     *
     * Get User Feature Groups
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return string[]
     */
    public function getGroups($user_id)
    {
        list($response) = $this->getGroupsWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getGroupsWithHttpInfo
     *
     * Get User Feature Groups
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupsWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getGroups');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/groups";
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
                'string[]',
                '/v1/user/{user_id}/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getRoom
     *
     * Get User’s Default Meeting Settings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Room
     */
    public function getRoom($user_id)
    {
        list($response) = $this->getRoomWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getRoomWithHttpInfo
     *
     * Get User’s Default Meeting Settings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Room, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoomWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getRoom');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/room";
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
                '\BlueJeansOnVideoRestApi\Model\Room',
                '/v1/user/{user_id}/room'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Room', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Room', $e->getResponseHeaders());
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
     * Operation getUser
     *
     * Get User Account Details
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\User
     */
    public function getUser($user_id)
    {
        list($response) = $this->getUserWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getUserWithHttpInfo
     *
     * Get User Account Details
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}";
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
                '\BlueJeansOnVideoRestApi\Model\User',
                '/v1/user/{user_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\User', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\User', $e->getResponseHeaders());
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
     * Operation revokeGrantedApplication
     *
     * Remoke Granted Application
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $client_id The ID of the granted application. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return void
     */
    public function revokeGrantedApplication($user_id, $client_id)
    {
        list($response) = $this->revokeGrantedApplicationWithHttpInfo($user_id, $client_id);
        return $response;
    }

    /**
     * Operation revokeGrantedApplicationWithHttpInfo
     *
     * Remoke Granted Application
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $client_id The ID of the granted application. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeGrantedApplicationWithHttpInfo($user_id, $client_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling revokeGrantedApplication');
        }
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling revokeGrantedApplication');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/granted_applications/{client_id}";
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
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
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
                '/v1/user/{user_id}/granted_applications/{client_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setGroups
     *
     * Set User Feature Groups
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $enable The feature group you want to enable. (optional)
     * @param string $disable The feature group you want to disable. (optional)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return void
     */
    public function setGroups($user_id, $enable = null, $disable = null)
    {
        list($response) = $this->setGroupsWithHttpInfo($user_id, $enable, $disable);
        return $response;
    }

    /**
     * Operation setGroupsWithHttpInfo
     *
     * Set User Feature Groups
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $enable The feature group you want to enable. (optional)
     * @param string $disable The feature group you want to disable. (optional)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setGroupsWithHttpInfo($user_id, $enable = null, $disable = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling setGroups');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/groups";
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
        if ($enable !== null) {
            $queryParams['enable'] = $this->apiClient->getSerializer()->toQueryValue($enable);
        }
        // query params
        if ($disable !== null) {
            $queryParams['disable'] = $this->apiClient->getSerializer()->toQueryValue($disable);
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/groups'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateRoom
     *
     * Update User’s Default Meeting Settings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansOnVideoRestApi\Model\Room $room The user&#39;s room details that you wish to update. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\Room
     */
    public function updateRoom($user_id, $room)
    {
        list($response) = $this->updateRoomWithHttpInfo($user_id, $room);
        return $response;
    }

    /**
     * Operation updateRoomWithHttpInfo
     *
     * Update User’s Default Meeting Settings
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansOnVideoRestApi\Model\Room $room The user&#39;s room details that you wish to update. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\Room, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRoomWithHttpInfo($user_id, $room)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateRoom');
        }
        // verify the required parameter 'room' is set
        if ($room === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room when calling updateRoom');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/room";
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
        // body params
        $_tempBody = null;
        if (isset($room)) {
            $_tempBody = $room;
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
                '\BlueJeansOnVideoRestApi\Model\Room',
                '/v1/user/{user_id}/room'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\Room', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\Room', $e->getResponseHeaders());
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
     * Operation updateUser
     *
     * Update User Account Details
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansOnVideoRestApi\Model\User $user The user details that you wish to update. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return \BlueJeansOnVideoRestApi\Model\User
     */
    public function updateUser($user_id, $user)
    {
        list($response) = $this->updateUserWithHttpInfo($user_id, $user);
        return $response;
    }

    /**
     * Operation updateUserWithHttpInfo
     *
     * Update User Account Details
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param \BlueJeansOnVideoRestApi\Model\User $user The user details that you wish to update. (required)
     * @throws \BlueJeansOnVideoRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansOnVideoRestApi\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserWithHttpInfo($user_id, $user)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateUser');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling updateUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}";
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
        // body params
        $_tempBody = null;
        if (isset($user)) {
            $_tempBody = $user;
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
                '\BlueJeansOnVideoRestApi\Model\User',
                '/v1/user/{user_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansOnVideoRestApi\Model\User', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansOnVideoRestApi\Model\User', $e->getResponseHeaders());
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
