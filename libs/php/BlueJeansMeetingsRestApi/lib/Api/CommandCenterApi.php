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

namespace BlueJeansMeetingsRestApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BlueJeansMeetingsRestApi\ApiException;
use BlueJeansMeetingsRestApi\Configuration;
use BlueJeansMeetingsRestApi\HeaderSelector;
use BlueJeansMeetingsRestApi\ObjectSerializer;

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
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getEndpointDistribution
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointDistributionWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution';
        $request = $this->getEndpointDistributionRequest($enterprise_id, $filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEndpointDistributionAsync
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointDistributionAsync($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        return $this->getEndpointDistributionAsyncWithHttpInfo($enterprise_id, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEndpointDistributionAsyncWithHttpInfo
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointDistributionAsyncWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistribution';
        $request = $this->getEndpointDistributionRequest($enterprise_id, $filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEndpointDistribution'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEndpointDistributionRequest($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"creation_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"creation_time"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getEndpointDistribution'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getEndpointDistributionV2
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointDistributionV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2';
        $request = $this->getEndpointDistributionV2Request($enterprise_id, $filter, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEndpointDistributionV2Async
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointDistributionV2Async($enterprise_id, $filter, $app_name = 'api_developer')
    {
        return $this->getEndpointDistributionV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEndpointDistributionV2AsyncWithHttpInfo
     *
     * Endpoint Distribution
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointDistributionV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsEndpointDistributionV2';
        $request = $this->getEndpointDistributionV2Request($enterprise_id, $filter, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEndpointDistributionV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEndpointDistributionV2Request($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getEndpointDistributionV2'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getEndpointDistributionV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getEnterpriseOverallSummary
     *
     * Overall Enterprise Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseOverallSummaryWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo';
        $request = $this->getEnterpriseOverallSummaryRequest($enterprise_id, $filter, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEnterpriseOverallSummaryAsync
     *
     * Overall Enterprise Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseOverallSummaryAsync($enterprise_id, $filter, $app_name = 'api_developer')
    {
        return $this->getEnterpriseOverallSummaryAsyncWithHttpInfo($enterprise_id, $filter, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseOverallSummaryAsyncWithHttpInfo
     *
     * Overall Enterprise Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseOverallSummaryAsyncWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSummaryInfo';
        $request = $this->getEnterpriseOverallSummaryRequest($enterprise_id, $filter, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEnterpriseOverallSummary'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-04T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-10T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseOverallSummaryRequest($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getEnterpriseOverallSummary'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getEnterpriseOverallSummary'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getEnterpriseUsersActive
     *
     * Enterprise User Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param  int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param  int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseUsersActiveWithHttpInfo($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive';
        $request = $this->getEnterpriseUsersActiveRequest($enterprise_id, $filter, $client_tz, $limit, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEnterpriseUsersActiveAsync
     *
     * Enterprise User Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param  int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseUsersActiveAsync($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        return $this->getEnterpriseUsersActiveAsyncWithHttpInfo($enterprise_id, $filter, $client_tz, $limit, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseUsersActiveAsyncWithHttpInfo
     *
     * Enterprise User Summary
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param  int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseUsersActiveAsyncWithHttpInfo($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EnterpriseUsersActive';
        $request = $this->getEnterpriseUsersActiveRequest($enterprise_id, $filter, $client_tz, $limit, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEnterpriseUsersActive'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of FilterHighLowTs objects to bracket the search time &#x60;[{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;&#39;%Y-%m-%d&#39;\&quot;,\&quot;field\&quot;:\&quot;dateFormat\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-14T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-20T23:59:00-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}]&#x60; (required)
     * @param  string $client_tz Timezone of the requesting site in the format &#x60;America/Los_Angeles&#x60; (optional)
     * @param  int $limit The maximum number of records to return.  A value of &#x60;0&#x60; returns all records (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseUsersActiveRequest($enterprise_id, $filter, $client_tz = null, $limit = '0', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getEnterpriseUsersActive'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getEnterpriseUsersActive'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/users/active';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = ObjectSerializer::toQueryValue($client_tz);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFeedbackComments
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCommentsWithHttpInfo($enterprise_id, $start, $end)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments';
        $request = $this->getFeedbackCommentsRequest($enterprise_id, $start, $end);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFeedbackCommentsAsync
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCommentsAsync($enterprise_id, $start, $end)
    {
        return $this->getFeedbackCommentsAsyncWithHttpInfo($enterprise_id, $start, $end)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedbackCommentsAsyncWithHttpInfo
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCommentsAsyncWithHttpInfo($enterprise_id, $start, $end)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments';
        $request = $this->getFeedbackCommentsRequest($enterprise_id, $start, $end);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFeedbackComments'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeedbackCommentsRequest($enterprise_id, $start, $end)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getFeedbackComments'
            );
        }
        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling getFeedbackComments'
            );
        }
        // verify the required parameter 'end' is set
        if ($end === null || (is_array($end) && count($end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end when calling getFeedbackComments'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFeedbackCommentsV2
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param  int $limit The limit on the number of responses to return (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param  int $limit The limit on the number of responses to return (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCommentsV2WithHttpInfo($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments';
        $request = $this->getFeedbackCommentsV2Request($enterprise_id, $filter, $limit, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFeedbackCommentsV2Async
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param  int $limit The limit on the number of responses to return (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCommentsV2Async($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        return $this->getFeedbackCommentsV2AsyncWithHttpInfo($enterprise_id, $filter, $limit, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedbackCommentsV2AsyncWithHttpInfo
     *
     * Survey Feedback Comments
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param  int $limit The limit on the number of responses to return (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCommentsV2AsyncWithHttpInfo($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackComments';
        $request = $this->getFeedbackCommentsV2Request($enterprise_id, $filter, $limit, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFeedbackCommentsV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;endTime\&quot; }] (required)
     * @param  int $limit The limit on the number of responses to return (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeedbackCommentsV2Request($enterprise_id, $filter, $limit = null, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getFeedbackCommentsV2'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getFeedbackCommentsV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFeedbackCount
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCountWithHttpInfo($enterprise_id, $start, $end)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores';
        $request = $this->getFeedbackCountRequest($enterprise_id, $start, $end);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFeedbackCountAsync
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCountAsync($enterprise_id, $start, $end)
    {
        return $this->getFeedbackCountAsyncWithHttpInfo($enterprise_id, $start, $end)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedbackCountAsyncWithHttpInfo
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCountAsyncWithHttpInfo($enterprise_id, $start, $end)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores';
        $request = $this->getFeedbackCountRequest($enterprise_id, $start, $end);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFeedbackCount'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeedbackCountRequest($enterprise_id, $start, $end)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getFeedbackCount'
            );
        }
        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling getFeedbackCount'
            );
        }
        // verify the required parameter 'end' is set
        if ($end === null || (is_array($end) && count($end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end when calling getFeedbackCount'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/feedback/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFeedbackCountV2
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeedbackCountV2WithHttpInfo($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores';
        $request = $this->getFeedbackCountV2Request($enterprise_id, $start, $end, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFeedbackCountV2Async
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCountV2Async($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        return $this->getFeedbackCountV2AsyncWithHttpInfo($enterprise_id, $start, $end, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedbackCountV2AsyncWithHttpInfo
     *
     * Survey Feedback Scores
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedbackCountV2AsyncWithHttpInfo($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsFeedbackScores';
        $request = $this->getFeedbackCountV2Request($enterprise_id, $start, $end, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFeedbackCountV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $start Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $end Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeedbackCountV2Request($enterprise_id, $start, $end, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getFeedbackCountV2'
            );
        }
        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling getFeedbackCountV2'
            );
        }
        // verify the required parameter 'end' is set
        if ($end === null || (is_array($end) && count($end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end when calling getFeedbackCountV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/feedback/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getGeoMap
     *
     * Geographic Demographics
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param  int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param  int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param  int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param  int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\EndpointLocationSummary, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGeoMapWithHttpInfo($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary';
        $request = $this->getGeoMapRequest($enterprise_id, $filter, $offset, $limit, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGeoMapAsync
     *
     * Geographic Demographics
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param  int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param  int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGeoMapAsync($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        return $this->getGeoMapAsyncWithHttpInfo($enterprise_id, $filter, $offset, $limit, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGeoMapAsyncWithHttpInfo
     *
     * Geographic Demographics
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param  int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param  int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGeoMapAsyncWithHttpInfo($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EndpointLocationSummary';
        $request = $this->getGeoMapRequest($enterprise_id, $filter, $offset, $limit, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getGeoMap'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-05-31T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-07T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;}]&#x60; (required)
     * @param  int $offset Offset into the total set of datarecords.  If offset&#x3D;0, return data includes size of data. (optional, default to 0)
     * @param  int $limit The Limit sets the maximum number of data records to return .  Limit&#x3D;0 returns the full dataset (optional, default to 0)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGeoMapRequest($enterprise_id, $filter, $offset = '0', $limit = '0', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getGeoMap'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getGeoMap'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingEndpointsLiveByEnterprise
     *
     * List Live Meeting Endpoints by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointsLiveByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingEndpointsLiveByEnterpriseRequest($enterprise_id, $meeting_uuid, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingEndpointsLiveByEnterpriseAsync
     *
     * List Live Meeting Endpoints by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointsLiveByEnterpriseAsync($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        return $this->getMeetingEndpointsLiveByEnterpriseAsyncWithHttpInfo($enterprise_id, $meeting_uuid, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingEndpointsLiveByEnterpriseAsyncWithHttpInfo
     *
     * List Live Meeting Endpoints by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointsLiveByEnterpriseAsyncWithHttpInfo($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingEndpointsLiveByEnterpriseRequest($enterprise_id, $meeting_uuid, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingEndpointsLiveByEnterprise'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingEndpointsLiveByEnterpriseRequest($enterprise_id, $meeting_uuid, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingEndpointsLiveByEnterprise'
            );
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null || (is_array($meeting_uuid) && count($meeting_uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_uuid when calling getMeetingEndpointsLiveByEnterprise'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_uuid' . '}',
                ObjectSerializer::toPathValue($meeting_uuid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingPastByEnterprise
     *
     * List Meeting Endpoints & Stats by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  bool $include_endpoints Option to include detailed data on endpoints (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  bool $include_endpoints Option to include detailed data on endpoints (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingPastByEnterpriseWithHttpInfo($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingPastByEnterpriseRequest($enterprise_id, $meeting_uuid, $include_endpoints);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingPastByEnterpriseAsync
     *
     * List Meeting Endpoints & Stats by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  bool $include_endpoints Option to include detailed data on endpoints (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingPastByEnterpriseAsync($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        return $this->getMeetingPastByEnterpriseAsyncWithHttpInfo($enterprise_id, $meeting_uuid, $include_endpoints)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingPastByEnterpriseAsyncWithHttpInfo
     *
     * List Meeting Endpoints & Stats by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  bool $include_endpoints Option to include detailed data on endpoints (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingPastByEnterpriseAsyncWithHttpInfo($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingPastByEnterpriseRequest($enterprise_id, $meeting_uuid, $include_endpoints);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingPastByEnterprise'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     * @param  bool $include_endpoints Option to include detailed data on endpoints (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingPastByEnterpriseRequest($enterprise_id, $meeting_uuid, $include_endpoints = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingPastByEnterprise'
            );
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null || (is_array($meeting_uuid) && count($meeting_uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_uuid when calling getMeetingPastByEnterprise'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_endpoints !== null) {
            $queryParams['includeEndpoints'] = ObjectSerializer::toQueryValue($include_endpoints);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_uuid' . '}',
                ObjectSerializer::toPathValue($meeting_uuid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingPastByUser
     *
     * List Meeting Endpoints & Stats by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingPastByUserWithHttpInfo($user_id, $meeting_uuid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingPastByUserRequest($user_id, $meeting_uuid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingPastByUserAsync
     *
     * List Meeting Endpoints & Stats by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingPastByUserAsync($user_id, $meeting_uuid)
    {
        return $this->getMeetingPastByUserAsyncWithHttpInfo($user_id, $meeting_uuid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingPastByUserAsyncWithHttpInfo
     *
     * List Meeting Endpoints & Stats by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingPastByUserAsyncWithHttpInfo($user_id, $meeting_uuid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingExtendedIndigo';
        $request = $this->getMeetingPastByUserRequest($user_id, $meeting_uuid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingPastByUser'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_uuid The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingPastByUserRequest($user_id, $meeting_uuid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingPastByUser'
            );
        }
        // verify the required parameter 'meeting_uuid' is set
        if ($meeting_uuid === null || (is_array($meeting_uuid) && count($meeting_uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_uuid when calling getMeetingPastByUser'
            );
        }

        $resourcePath = '/v1/user/{user_id}/indigo/meetings/{meeting_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_uuid' . '}',
                ObjectSerializer::toPathValue($meeting_uuid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingUsage
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingUsageWithHttpInfo($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage';
        $request = $this->getMeetingUsageRequest($enterprise_id, $client_tz, $filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingUsageAsync
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingUsageAsync($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        return $this->getMeetingUsageAsyncWithHttpInfo($enterprise_id, $client_tz, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingUsageAsyncWithHttpInfo
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingUsageAsyncWithHttpInfo($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage';
        $request = $this->getMeetingUsageRequest($enterprise_id, $client_tz, $filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingUsage'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingUsageRequest($enterprise_id, $client_tz = 'America/Denver', $filter = '[{"type":"string","comparison":"eq","value":"DAY","field":"groupInterval"},{"type":"date","comparison":"eq","value":"2017-01-16T00:00:00-07:00","field":"lowts"},{"type":"date","comparison":"eq","value":"2017-01-23T23:59:59-07:00","field":"hights"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingUsage'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = ObjectSerializer::toQueryValue($client_tz);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingUsageV2
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingUsageV2WithHttpInfo($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage';
        $request = $this->getMeetingUsageV2Request($enterprise_id, $filter, $client_tz, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingUsageV2Async
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingUsageV2Async($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        return $this->getMeetingUsageV2AsyncWithHttpInfo($enterprise_id, $filter, $client_tz, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingUsageV2AsyncWithHttpInfo
     *
     * Meeting Usage Over Time
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingUsageV2AsyncWithHttpInfo($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsUsage';
        $request = $this->getMeetingUsageV2Request($enterprise_id, $filter, $client_tz, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingUsageV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;string\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;DAY\&quot;,\&quot;field\&quot;:\&quot;groupInterval\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;lowts\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;eq\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;hights\&quot;}] (required)
     * @param  string $client_tz Based on standard TZ code. (optional, default to America/Denver)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingUsageV2Request($enterprise_id, $filter, $client_tz = 'America/Denver', $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingUsageV2'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getMeetingUsageV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($client_tz !== null) {
            $queryParams['clientTZ'] = ObjectSerializer::toQueryValue($client_tz);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingsLiveByEnterprise
     *
     * Live Meetings Summary by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsLiveByEnterpriseWithHttpInfo($enterprise_id, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsLiveByEnterpriseRequest($enterprise_id, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingsLiveByEnterpriseAsync
     *
     * Live Meetings Summary by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsLiveByEnterpriseAsync($enterprise_id, $app_name = 'api_developer')
    {
        return $this->getMeetingsLiveByEnterpriseAsyncWithHttpInfo($enterprise_id, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingsLiveByEnterpriseAsyncWithHttpInfo
     *
     * Live Meetings Summary by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsLiveByEnterpriseAsyncWithHttpInfo($enterprise_id, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsLiveByEnterpriseRequest($enterprise_id, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingsLiveByEnterprise'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingsLiveByEnterpriseRequest($enterprise_id, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingsLiveByEnterprise'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/meetings/live';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingsPastByEnterprise
     *
     * List Past Meetings by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $offset Page Number (optional)
     * @param  int $limit Per page (optional)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param  bool $count Include total count of meetings in response (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $offset Page Number (optional)
     * @param  int $limit Per page (optional)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param  bool $count Include total count of meetings in response (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsPastByEnterpriseWithHttpInfo($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsPastByEnterpriseRequest($enterprise_id, $offset, $limit, $filter, $count, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingsPastByEnterpriseAsync
     *
     * List Past Meetings by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $offset Page Number (optional)
     * @param  int $limit Per page (optional)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param  bool $count Include total count of meetings in response (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsPastByEnterpriseAsync($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        return $this->getMeetingsPastByEnterpriseAsyncWithHttpInfo($enterprise_id, $offset, $limit, $filter, $count, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingsPastByEnterpriseAsyncWithHttpInfo
     *
     * List Past Meetings by Enterprise
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $offset Page Number (optional)
     * @param  int $limit Per page (optional)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param  bool $count Include total count of meetings in response (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsPastByEnterpriseAsyncWithHttpInfo($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsPastByEnterpriseRequest($enterprise_id, $offset, $limit, $filter, $count, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingsPastByEnterprise'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $offset Page Number (optional)
     * @param  int $limit Per page (optional)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform. For example &#x60;[{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-05T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;endTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;value\&quot;:\&quot;2018-06-12T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;startTime\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;}]&#x60; (optional)
     * @param  bool $count Include total count of meetings in response (optional)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingsPastByEnterpriseRequest($enterprise_id, $offset = null, $limit = null, $filter = null, $count = null, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getMeetingsPastByEnterprise'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/meetings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMeetingsPastByUser
     *
     * List Past Meetings by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingIndigoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingsPastByUserWithHttpInfo($user_id, $filter)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsPastByUserRequest($user_id, $filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeetingsPastByUserAsync
     *
     * List Past Meetings by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsPastByUserAsync($user_id, $filter)
    {
        return $this->getMeetingsPastByUserAsyncWithHttpInfo($user_id, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingsPastByUserAsyncWithHttpInfo
     *
     * List Past Meetings by User
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingsPastByUserAsyncWithHttpInfo($user_id, $filter)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingIndigoList';
        $request = $this->getMeetingsPastByUserRequest($user_id, $filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMeetingsPastByUser'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $filter An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingsPastByUserRequest($user_id, $filter)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingsPastByUser'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getMeetingsPastByUser'
            );
        }

        $resourcePath = '/v1/user/{user_id}/indigo/meetings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRoiRanges
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoiRangesWithHttpInfo($enterprise_id, $filter)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData';
        $request = $this->getRoiRangesRequest($enterprise_id, $filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRoiRangesAsync
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoiRangesAsync($enterprise_id, $filter)
    {
        return $this->getRoiRangesAsyncWithHttpInfo($enterprise_id, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRoiRangesAsyncWithHttpInfo
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoiRangesAsyncWithHttpInfo($enterprise_id, $filter)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData';
        $request = $this->getRoiRangesRequest($enterprise_id, $filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRoiRanges'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRoiRangesRequest($enterprise_id, $filter)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getRoiRanges'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getRoiRanges'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRoiRangesV2
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsRoiData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoiRangesV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData';
        $request = $this->getRoiRangesV2Request($enterprise_id, $filter, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRoiRangesV2Async
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoiRangesV2Async($enterprise_id, $filter, $app_name = 'api_developer')
    {
        return $this->getRoiRangesV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRoiRangesV2AsyncWithHttpInfo
     *
     * ROI Data
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoiRangesV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsRoiData';
        $request = $this->getRoiRangesV2Request($enterprise_id, $filter, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRoiRangesV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded Array of JSON objects defining the time interval [{\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;gt\&quot;, \&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot;}, {\&quot;type\&quot;:\&quot;date\&quot;, \&quot;comparison\&quot;:\&quot;lt\&quot;, \&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;, \&quot;field\&quot;:\&quot;startTime\&quot; }] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRoiRangesV2Request($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getRoiRangesV2'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getRoiRangesV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTopUsers
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTopUsersWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers';
        $request = $this->getTopUsersRequest($enterprise_id, $filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTopUsersAsync
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopUsersAsync($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        return $this->getTopUsersAsyncWithHttpInfo($enterprise_id, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTopUsersAsyncWithHttpInfo
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopUsersAsyncWithHttpInfo($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers';
        $request = $this->getTopUsersRequest($enterprise_id, $filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTopUsers'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter URL-encoded JSON string (optional, default to [{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}])
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTopUsersRequest($enterprise_id, $filter = '[{"type":"date","comparison":"gt","value":"2017-01-16T00:00:00-07:00","field":"start_time"},{"type":"date","comparison":"lt","value":"2017-01-23T23:59:59-07:00","field":"end_time"}]')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getTopUsers'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTopUsersV2
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTopUsersV2WithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers';
        $request = $this->getTopUsersV2Request($enterprise_id, $filter, $app_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTopUsersV2Async
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopUsersV2Async($enterprise_id, $filter, $app_name = 'api_developer')
    {
        return $this->getTopUsersV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTopUsersV2AsyncWithHttpInfo
     *
     * Top Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopUsersV2AsyncWithHttpInfo($enterprise_id, $filter, $app_name = 'api_developer')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\AnalyticsTopUsers';
        $request = $this->getTopUsersV2Request($enterprise_id, $filter, $app_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTopUsersV2'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $filter A JSON array of objects that bracket the search time   [{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;gt\&quot;,\&quot;value\&quot;:\&quot;2018-06-19T00:00:00-07:00\&quot;,\&quot;field\&quot;:\&quot;start_time\&quot;},{\&quot;type\&quot;:\&quot;date\&quot;,\&quot;comparison\&quot;:\&quot;lt\&quot;,\&quot;value\&quot;:\&quot;2018-06-26T23:59:59-07:00\&quot;,\&quot;field\&quot;:\&quot;end_time\&quot;}] (required)
     * @param  string $app_name name of your application.  While not required, providing an app_name improves API performance (optional, default to api_developer)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTopUsersV2Request($enterprise_id, $filter, $app_name = 'api_developer')
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getTopUsersV2'
            );
        }
        // verify the required parameter 'filter' is set
        if ($filter === null || (is_array($filter) && count($filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter when calling getTopUsersV2'
            );
        }

        $resourcePath = '/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['app_name'] = ObjectSerializer::toQueryValue($app_name);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
