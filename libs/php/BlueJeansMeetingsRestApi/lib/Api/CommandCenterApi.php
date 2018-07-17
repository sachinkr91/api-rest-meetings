<?php
/**
 * CommandCenterApi
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
 * CommandCenterApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandCenterApi
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
     * @return CommandCenterApi
     */
    public function setApiClient(\BlueJeansMeetingsRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getEndpointDistribution
     *
     * Endpoint Distribution
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution
     */
    public function getEndpointDistribution($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        list($response) = $this->getEndpointDistributionWithHttpInfo($enterprise_id, $filter);
        return $response;
    }

    /**
     * Operation getEndpointDistributionWithHttpInfo
     *
     * Endpoint Distribution
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointDistributionWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getEndpointDistribution');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution',
                '/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution', $e->getResponseHeaders());
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
     * Operation getEndpointDistributionV2
     *
     * Endpoint Distribution
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2
     */
    public function getEndpointDistributionV2($enterprise_id, $filter, $app_name = 'api_developer')
    {
        list($response) = $this->getEndpointDistributionV2WithHttpInfo($enterprise_id, $filter, $app_name);
        return $response;
    }

    /**
     * Operation getEndpointDistributionV2WithHttpInfo
     *
     * Endpoint Distribution
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointDistributionV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getEndpointDistributionV2');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getEndpointDistributionV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2', $e->getResponseHeaders());
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
     * Operation getEnterpriseOverallSummary
     *
     * Overall Enterprise Summary
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo
     */
    public function getEnterpriseOverallSummary($enterprise_id, $filter, $app_name = 'api_developer')
    {
        list($response) = $this->getEnterpriseOverallSummaryWithHttpInfo($enterprise_id, $filter, $app_name);
        return $response;
    }

    /**
     * Operation getEnterpriseOverallSummaryWithHttpInfo
     *
     * Overall Enterprise Summary
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseOverallSummaryWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getEnterpriseOverallSummary');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getEnterpriseOverallSummary');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo', $e->getResponseHeaders());
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
     * Operation getEnterpriseUsersActive
     *
     * Enterprise User Summary
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive
     */
    public function getEnterpriseUsersActive($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        list($response) = $this->getEnterpriseUsersActiveWithHttpInfo($enterprise_id, $filter, $client_tz, $limit, $app_name);
        return $response;
    }

    /**
     * Operation getEnterpriseUsersActiveWithHttpInfo
     *
     * Enterprise User Summary
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseUsersActiveWithHttpInfo($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getEnterpriseUsersActive');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getEnterpriseUsersActive');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/users/active";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = $this->apiClient->getSerializer()->toQueryValue($client_tz);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/users/active'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive', $e->getResponseHeaders());
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
     * Operation getFeedbackComments
     *
     * Survey Feedback Comments
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments
     */
    public function getFeedbackComments($enterprise_id, $start, $end)
    {
        list($response) = $this->getFeedbackCommentsWithHttpInfo($enterprise_id, $start, $end);
        return $response;
    }

    /**
     * Operation getFeedbackCommentsWithHttpInfo
     *
     * Survey Feedback Comments
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCommentsWithHttpInfo($enterprise_id, $start, $end)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getFeedbackComments');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling getFeedbackComments');
        }
        // verify the required parameter 'end' is set
        if ($end === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end when calling getFeedbackComments');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments";
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
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments',
                '/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments', $e->getResponseHeaders());
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
     * Operation getFeedbackCommentsV2
     *
     * Survey Feedback Comments
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param int $limit The limit on the number of responses to return (optional)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments
     */
    public function getFeedbackCommentsV2($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        list($response) = $this->getFeedbackCommentsV2WithHttpInfo($enterprise_id, $filter, $limit, $app_name);
        return $response;
    }

    /**
     * Operation getFeedbackCommentsV2WithHttpInfo
     *
     * Survey Feedback Comments
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param int $limit The limit on the number of responses to return (optional)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCommentsV2WithHttpInfo($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getFeedbackCommentsV2');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getFeedbackCommentsV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments', $e->getResponseHeaders());
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
     * Operation getFeedbackCount
     *
     * Survey Feedback Scores
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores
     */
    public function getFeedbackCount($enterprise_id, $start, $end)
    {
        list($response) = $this->getFeedbackCountWithHttpInfo($enterprise_id, $start, $end);
        return $response;
    }

    /**
     * Operation getFeedbackCountWithHttpInfo
     *
     * Survey Feedback Scores
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCountWithHttpInfo($enterprise_id, $start, $end)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getFeedbackCount');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling getFeedbackCount');
        }
        // verify the required parameter 'end' is set
        if ($end === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end when calling getFeedbackCount');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/feedback/count";
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
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores',
                '/v1/enterprise/{enterprise_id}/indigo/feedback/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores', $e->getResponseHeaders());
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
     * Operation getFeedbackCountV2
     *
     * Survey Feedback Scores
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores
     */
    public function getFeedbackCountV2($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        list($response) = $this->getFeedbackCountV2WithHttpInfo($enterprise_id, $start, $end, $app_name);
        return $response;
    }

    /**
     * Operation getFeedbackCountV2WithHttpInfo
     *
     * Survey Feedback Scores
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCountV2WithHttpInfo($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getFeedbackCountV2');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling getFeedbackCountV2');
        }
        // verify the required parameter 'end' is set
        if ($end === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end when calling getFeedbackCountV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/feedback/count";
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
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores',
                '/v2/enterprise/{enterprise_id}/indigo/feedback/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores', $e->getResponseHeaders());
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
     * Operation getGeoMap
     *
     * Geographic Demographics
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\EndpointLocationSummary
     */
    public function getGeoMap($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        list($response) = $this->getGeoMapWithHttpInfo($enterprise_id, $filter, $offset, $limit, $app_name);
        return $response;
    }

    /**
     * Operation getGeoMapWithHttpInfo
     *
     * Geographic Demographics
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\EndpointLocationSummary, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGeoMapWithHttpInfo($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getGeoMap');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getGeoMap');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries";
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
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary', $e->getResponseHeaders());
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
     * Operation getMeetingEndpointsLiveByEnterprise
     *
     * List Live Meeting Endpoints by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo
     */
    public function getMeetingEndpointsLiveByEnterprise($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        list($response) = $this->getMeetingEndpointsLiveByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $app_name);
        return $response;
    }

    /**
     * Operation getMeetingEndpointsLiveByEnterpriseWithHttpInfo
     *
     * List Live Meeting Endpoints by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointsLiveByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingEndpointsLiveByEnterprise');
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_uuid when calling getMeetingEndpointsLiveByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/";
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
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterprise_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_uuid),
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
                '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                '/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $e->getResponseHeaders());
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
     * Operation getMeetingPastByEnterprise
     *
     * List Meeting Endpoints & Stats by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param bool $include_endpoints Option to include detailed data on endpoints (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo
     */
    public function getMeetingPastByEnterprise($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        list($response) = $this->getMeetingPastByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $include_endpoints);
        return $response;
    }

    /**
     * Operation getMeetingPastByEnterpriseWithHttpInfo
     *
     * List Meeting Endpoints & Stats by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param bool $include_endpoints Option to include detailed data on endpoints (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingPastByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingPastByEnterprise');
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_uuid when calling getMeetingPastByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}";
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
        if ($include_endpoints !== null) {
            $queryParams['includeEndpoints'] = $this->apiClient->getSerializer()->toQueryValue($include_endpoints);
        }
        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                "{" . "enterprise_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_uuid),
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
                '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                '/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $e->getResponseHeaders());
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
     * Operation getMeetingPastByUser
     *
     * List Meeting Endpoints & Stats by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo
     */
    public function getMeetingPastByUser($user_id, $meeting_uuid)
    {
        list($response) = $this->getMeetingPastByUserWithHttpInfo($user_id, $meeting_uuid);
        return $response;
    }

    /**
     * Operation getMeetingPastByUserWithHttpInfo
     *
     * List Meeting Endpoints & Stats by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingPastByUserWithHttpInfo($user_id, $meeting_uuid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingPastByUser');
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_uuid when calling getMeetingPastByUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/indigo/meetings/{meeting_uuid}";
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
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_uuid),
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
                '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                '/v1/user/{user_id}/indigo/meetings/{meeting_uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo', $e->getResponseHeaders());
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
     * Operation getMeetingUsage
     *
     * Meeting Usage Over Time
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsUsage
     */
    public function getMeetingUsage($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        list($response) = $this->getMeetingUsageWithHttpInfo($enterprise_id, $client_tz, $filter);
        return $response;
    }

    /**
     * Operation getMeetingUsageWithHttpInfo
     *
     * Meeting Usage Over Time
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingUsageWithHttpInfo($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingUsage');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage";
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
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = $this->apiClient->getSerializer()->toQueryValue($client_tz);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage',
                '/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage', $e->getResponseHeaders());
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
     * Operation getMeetingUsageV2
     *
     * Meeting Usage Over Time
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsUsage
     */
    public function getMeetingUsageV2($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        list($response) = $this->getMeetingUsageV2WithHttpInfo($enterprise_id, $filter, $client_tz, $app_name);
        return $response;
    }

    /**
     * Operation getMeetingUsageV2WithHttpInfo
     *
     * Meeting Usage Over Time
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingUsageV2WithHttpInfo($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingUsageV2');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getMeetingUsageV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage";
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
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = $this->apiClient->getSerializer()->toQueryValue($client_tz);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage', $e->getResponseHeaders());
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
     * Operation getMeetingsLiveByEnterprise
     *
     * Live Meetings Summary by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingIndigoList
     */
    public function getMeetingsLiveByEnterprise($enterprise_id, $app_name = 'api_developer')
    {
        list($response) = $this->getMeetingsLiveByEnterpriseWithHttpInfo($enterprise_id, $app_name);
        return $response;
    }

    /**
     * Operation getMeetingsLiveByEnterpriseWithHttpInfo
     *
     * Live Meetings Summary by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsLiveByEnterpriseWithHttpInfo($enterprise_id, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingsLiveByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/meetings/live";
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
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                '/v1/enterprise/{enterprise_id}/indigo/meetings/live'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $e->getResponseHeaders());
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
     * Operation getMeetingsPastByEnterprise
     *
     * List Past Meetings by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param int $offset Page Number (optional)
     * @param int $limit Per page (optional)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param bool $count Include total count of meetings in response (optional)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingIndigoList
     */
    public function getMeetingsPastByEnterprise($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        list($response) = $this->getMeetingsPastByEnterpriseWithHttpInfo($enterprise_id, $offset, $limit, $filter, $count, $app_name);
        return $response;
    }

    /**
     * Operation getMeetingsPastByEnterpriseWithHttpInfo
     *
     * List Past Meetings by Enterprise
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param int $offset Page Number (optional)
     * @param int $limit Per page (optional)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param bool $count Include total count of meetings in response (optional)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsPastByEnterpriseWithHttpInfo($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getMeetingsPastByEnterprise');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/meetings";
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
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                '/v1/enterprise/{enterprise_id}/indigo/meetings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $e->getResponseHeaders());
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
     * Operation getMeetingsPastByUser
     *
     * List Past Meetings by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\MeetingIndigoList
     */
    public function getMeetingsPastByUser($user_id, $filter)
    {
        list($response) = $this->getMeetingsPastByUserWithHttpInfo($user_id, $filter);
        return $response;
    }

    /**
     * Operation getMeetingsPastByUserWithHttpInfo
     *
     * List Past Meetings by User
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param map[string,string] $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsPastByUserWithHttpInfo($user_id, $filter)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingsPastByUser');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getMeetingsPastByUser');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/indigo/meetings";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
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
                '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                '/v1/user/{user_id}/indigo/meetings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList', $e->getResponseHeaders());
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
     * Operation getRoiRanges
     *
     * ROI Data
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData
     */
    public function getRoiRanges($enterprise_id, $filter)
    {
        list($response) = $this->getRoiRangesWithHttpInfo($enterprise_id, $filter);
        return $response;
    }

    /**
     * Operation getRoiRangesWithHttpInfo
     *
     * ROI Data
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoiRangesWithHttpInfo($enterprise_id, $filter)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getRoiRanges');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getRoiRanges');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData',
                '/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData', $e->getResponseHeaders());
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
     * Operation getRoiRangesV2
     *
     * ROI Data
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData
     */
    public function getRoiRangesV2($enterprise_id, $filter, $app_name = 'api_developer')
    {
        list($response) = $this->getRoiRangesV2WithHttpInfo($enterprise_id, $filter, $app_name);
        return $response;
    }

    /**
     * Operation getRoiRangesV2WithHttpInfo
     *
     * ROI Data
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoiRangesV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getRoiRangesV2');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getRoiRangesV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData', $e->getResponseHeaders());
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
     * Operation getTopUsers
     *
     * Top Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers
     */
    public function getTopUsers($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        list($response) = $this->getTopUsersWithHttpInfo($enterprise_id, $filter);
        return $response;
    }

    /**
     * Operation getTopUsersWithHttpInfo
     *
     * Top Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTopUsersWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getTopUsers');
        }
        // parse inputs
        $resourcePath = "/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers',
                '/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers', $e->getResponseHeaders());
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
     * Operation getTopUsersV2
     *
     * Top Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers
     */
    public function getTopUsersV2($enterprise_id, $filter, $app_name = 'api_developer')
    {
        list($response) = $this->getTopUsersV2WithHttpInfo($enterprise_id, $filter, $app_name);
        return $response;
    }

    /**
     * Operation getTopUsersV2WithHttpInfo
     *
     * Top Users
     *
     * @param int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param string $filter A JSON array of objects that bracket the search time  [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTopUsersV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enterprise_id when calling getTopUsersV2');
        }
        // verify the required parameter 'filter' is set
        if ($filter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filter when calling getTopUsersV2');
        }
        // parse inputs
        $resourcePath = "/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage";
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
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
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
                '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers',
                '/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers', $e->getResponseHeaders());
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
