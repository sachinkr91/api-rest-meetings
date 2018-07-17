<?php
/**
 * EnterpriseApi
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
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
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
 * EnterpriseApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseApi
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
     * @return EnterpriseApi
     */
    public function setApiClient(\BlueJeansMeetingsRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation changeEnterpriseTags
     *
     * Set Enterprise Tags
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $action Type of operation to be done (required)
     * @param string $tag The name of tag (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\ComponentsTagList
     */
    public function changeEnterpriseTags($enterprise_id, $action, $tag)
    {
        list($response) = $this->changeEnterpriseTagsWithHttpInfo($enterprise_id, $action, $tag);
        return $response;
    }

    /**
     * Operation changeEnterpriseTagsWithHttpInfo
     *
     * Set Enterprise Tags
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $action Type of operation to be done (required)
     * @param string $tag The name of tag (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\ComponentsTagList, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeEnterpriseTagsWithHttpInfo($enterprise_id, $action, $tag)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling changeEnterpriseTags');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling changeEnterpriseTags');
        }
        // verify the required parameter 'tag' is set
        if ($tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag when calling changeEnterpriseTags');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterpriseId}/tags";
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
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }
        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterpriseId" . "}",
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlueJeansMeetingsRestApi\Model\ComponentsTagList',
                '/v1/enterprise/{enterpriseId}/tags'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\ComponentsTagList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\ComponentsTagList', $e->getResponseHeaders());
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
     * Operation createEnterpriseUser
     *
     * Create User
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\UserId
     */
    public function createEnterpriseUser($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        list($response) = $this->createEnterpriseUserWithHttpInfo($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin);
        return $response;
    }

    /**
     * Operation createEnterpriseUserWithHttpInfo
     *
     * Create User
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\UserId, HTTP status code, HTTP response headers (array of strings)
     */
    public function createEnterpriseUserWithHttpInfo($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling createEnterpriseUser');
        }
        // verify the required parameter 'enterprise_user' is set
        if ($enterprise_user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_user when calling createEnterpriseUser');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterpriseId}/users";
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
        if ($billing_category !== null) {
            $queryParams['billingCategory'] = $this->apiClient->getSerializer()->toQueryValue($billing_category);
        }
        // query params
        if ($force_password_change !== null) {
            $queryParams['forcePasswordChange'] = $this->apiClient->getSerializer()->toQueryValue($force_password_change);
        }
        // query params
        if ($is_admin !== null) {
            $queryParams['isAdmin'] = $this->apiClient->getSerializer()->toQueryValue($is_admin);
        }
        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterpriseId" . "}",
                $this->apiClient->getSerializer()->toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($enterprise_user)) {
            $_tempBody = $enterprise_user;
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
                '\BlueJeansMeetingsRestApi\Model\UserId',
                '/v1/enterprise/{enterpriseId}/users'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\UserId', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\UserId', $e->getResponseHeaders());
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
     * Operation exportUsers
     *
     * Export Enterprise Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function exportUsers($enterprise_id)
    {
        list($response) = $this->exportUsersWithHttpInfo($enterprise_id);
        return $response;
    }

    /**
     * Operation exportUsersWithHttpInfo
     *
     * Export Enterprise Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function exportUsersWithHttpInfo($enterprise_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling exportUsers');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/users/export";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/csv']);
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
                null,
                '/v1/enterprise/{enterprise_id}/users/export'
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
     * Operation getEnterpriseTags
     *
     * List Enterprise Tags
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\ComponentsTagList
     */
    public function getEnterpriseTags($enterprise_id)
    {
        list($response) = $this->getEnterpriseTagsWithHttpInfo($enterprise_id);
        return $response;
    }

    /**
     * Operation getEnterpriseTagsWithHttpInfo
     *
     * List Enterprise Tags
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\ComponentsTagList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseTagsWithHttpInfo($enterprise_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getEnterpriseTags');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterpriseId}/tags";
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
                "{" . "enterpriseId" . "}",
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
                '\BlueJeansMeetingsRestApi\Model\ComponentsTagList',
                '/v1/enterprise/{enterpriseId}/tags'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\ComponentsTagList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\ComponentsTagList', $e->getResponseHeaders());
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
     * Operation removeUser
     *
     * Remove Enterprise User
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function removeUser($enterprise_id, $user_id)
    {
        list($response) = $this->removeUserWithHttpInfo($enterprise_id, $user_id);
        return $response;
    }

    /**
     * Operation removeUserWithHttpInfo
     *
     * Remove Enterprise User
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeUserWithHttpInfo($enterprise_id, $user_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling removeUser');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling removeUser');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/users/{user_id}";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/enterprise/{enterprise_id}/users/{user_id}'
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
     * Operation searchUsers
     *
     * Search for User(s)
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param int $page_size Sets number of items returned per page. (optional)
     * @param int $page_number Selects which page of results to return (1-based value) (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch
     */
    public function searchUsers($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        list($response) = $this->searchUsersWithHttpInfo($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number);
        return $response;
    }

    /**
     * Operation searchUsersWithHttpInfo
     *
     * Search for User(s)
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param int $page_size Sets number of items returned per page. (optional)
     * @param int $page_number Selects which page of results to return (1-based value) (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsersWithHttpInfo($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling searchUsers');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterpriseId}/users";
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
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sortBy'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($text_search !== null) {
            $queryParams['textSearch'] = $this->apiClient->getSerializer()->toQueryValue($text_search);
        }
        // query params
        if ($email_id !== null) {
            $queryParams['emailId'] = $this->apiClient->getSerializer()->toQueryValue($email_id);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterpriseId" . "}",
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
                '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch',
                '/v1/enterprise/{enterpriseId}/users'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch', $e->getResponseHeaders());
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
