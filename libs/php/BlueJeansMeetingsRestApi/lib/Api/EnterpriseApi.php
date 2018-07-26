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
     * Operation changeEnterpriseTags
     *
     * Set Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $action Type of operation to be done (required)
     * @param  string $tag The name of tag (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\TagListComp
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $action Type of operation to be done (required)
     * @param  string $tag The name of tag (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\TagListComp, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeEnterpriseTagsWithHttpInfo($enterprise_id, $action, $tag)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\TagListComp';
        $request = $this->changeEnterpriseTagsRequest($enterprise_id, $action, $tag);

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
                        '\BlueJeansMeetingsRestApi\Model\TagListComp',
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
     * Operation changeEnterpriseTagsAsync
     *
     * Set Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $action Type of operation to be done (required)
     * @param  string $tag The name of tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeEnterpriseTagsAsync($enterprise_id, $action, $tag)
    {
        return $this->changeEnterpriseTagsAsyncWithHttpInfo($enterprise_id, $action, $tag)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation changeEnterpriseTagsAsyncWithHttpInfo
     *
     * Set Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $action Type of operation to be done (required)
     * @param  string $tag The name of tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeEnterpriseTagsAsyncWithHttpInfo($enterprise_id, $action, $tag)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\TagListComp';
        $request = $this->changeEnterpriseTagsRequest($enterprise_id, $action, $tag);

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
     * Create request for operation 'changeEnterpriseTags'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $action Type of operation to be done (required)
     * @param  string $tag The name of tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function changeEnterpriseTagsRequest($enterprise_id, $action, $tag)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling changeEnterpriseTags'
            );
        }
        // verify the required parameter 'action' is set
        if ($action === null || (is_array($action) && count($action) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action when calling changeEnterpriseTags'
            );
        }
        // verify the required parameter 'tag' is set
        if ($tag === null || (is_array($tag) && count($tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tag when calling changeEnterpriseTags'
            );
        }

        $resourcePath = '/v1/enterprise/{enterpriseId}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($action !== null) {
            $queryParams['action'] = ObjectSerializer::toQueryValue($action);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = ObjectSerializer::toQueryValue($tag);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterpriseId' . '}',
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createEnterpriseUser
     *
     * Create User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param  string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param  bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param  bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param  string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param  bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param  bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\UserId, HTTP status code, HTTP response headers (array of strings)
     */
    public function createEnterpriseUserWithHttpInfo($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\UserId';
        $request = $this->createEnterpriseUserRequest($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\UserId',
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
     * Operation createEnterpriseUserAsync
     *
     * Create User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param  string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param  bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param  bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEnterpriseUserAsync($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        return $this->createEnterpriseUserAsyncWithHttpInfo($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createEnterpriseUserAsyncWithHttpInfo
     *
     * Create User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param  string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param  bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param  bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEnterpriseUserAsyncWithHttpInfo($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\UserId';
        $request = $this->createEnterpriseUserRequest($enterprise_id, $enterprise_user, $billing_category, $force_password_change, $is_admin);

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
     * Create request for operation 'createEnterpriseUser'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\EnterpriseCreateUser $enterprise_user Basic Enterprise Account information (required)
     * @param  string $billing_category What general billing group does this profile belong? (optional, default to ENTERPRISE)
     * @param  bool $force_password_change Create profile and force user to change password on next login (optional)
     * @param  bool $is_admin Create this account to have Administrative Privileges for the enterprise (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createEnterpriseUserRequest($enterprise_id, $enterprise_user, $billing_category = 'ENTERPRISE', $force_password_change = null, $is_admin = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling createEnterpriseUser'
            );
        }
        // verify the required parameter 'enterprise_user' is set
        if ($enterprise_user === null || (is_array($enterprise_user) && count($enterprise_user) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_user when calling createEnterpriseUser'
            );
        }

        $resourcePath = '/v1/enterprise/{enterpriseId}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($billing_category !== null) {
            $queryParams['billingCategory'] = ObjectSerializer::toQueryValue($billing_category);
        }
        // query params
        if ($force_password_change !== null) {
            $queryParams['forcePasswordChange'] = ObjectSerializer::toQueryValue($force_password_change);
        }
        // query params
        if ($is_admin !== null) {
            $queryParams['isAdmin'] = ObjectSerializer::toQueryValue($is_admin);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterpriseId' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($enterprise_user)) {
            $_tempBody = $enterprise_user;
        }

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation exportUsers
     *
     * Export Enterprise Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function exportUsers($enterprise_id)
    {
        $this->exportUsersWithHttpInfo($enterprise_id);
    }

    /**
     * Operation exportUsersWithHttpInfo
     *
     * Export Enterprise Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function exportUsersWithHttpInfo($enterprise_id)
    {
        $returnType = '';
        $request = $this->exportUsersRequest($enterprise_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation exportUsersAsync
     *
     * Export Enterprise Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportUsersAsync($enterprise_id)
    {
        return $this->exportUsersAsyncWithHttpInfo($enterprise_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exportUsersAsyncWithHttpInfo
     *
     * Export Enterprise Users
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportUsersAsyncWithHttpInfo($enterprise_id)
    {
        $returnType = '';
        $request = $this->exportUsersRequest($enterprise_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'exportUsers'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function exportUsersRequest($enterprise_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling exportUsers'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/users/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
                ['text/csv']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/csv'],
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
     * Operation getEnterpriseTags
     *
     * List Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\TagListComp
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\TagListComp, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseTagsWithHttpInfo($enterprise_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\TagListComp';
        $request = $this->getEnterpriseTagsRequest($enterprise_id);

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
                        '\BlueJeansMeetingsRestApi\Model\TagListComp',
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
     * Operation getEnterpriseTagsAsync
     *
     * List Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseTagsAsync($enterprise_id)
    {
        return $this->getEnterpriseTagsAsyncWithHttpInfo($enterprise_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseTagsAsyncWithHttpInfo
     *
     * List Enterprise Tags
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseTagsAsyncWithHttpInfo($enterprise_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\TagListComp';
        $request = $this->getEnterpriseTagsRequest($enterprise_id);

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
     * Create request for operation 'getEnterpriseTags'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseTagsRequest($enterprise_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling getEnterpriseTags'
            );
        }

        $resourcePath = '/v1/enterprise/{enterpriseId}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterpriseId' . '}',
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
     * Operation removeUser
     *
     * Remove Enterprise User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeUser($enterprise_id, $user_id)
    {
        $this->removeUserWithHttpInfo($enterprise_id, $user_id);
    }

    /**
     * Operation removeUserWithHttpInfo
     *
     * Remove Enterprise User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeUserWithHttpInfo($enterprise_id, $user_id)
    {
        $returnType = '';
        $request = $this->removeUserRequest($enterprise_id, $user_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation removeUserAsync
     *
     * Remove Enterprise User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserAsync($enterprise_id, $user_id)
    {
        return $this->removeUserAsyncWithHttpInfo($enterprise_id, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeUserAsyncWithHttpInfo
     *
     * Remove Enterprise User
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserAsyncWithHttpInfo($enterprise_id, $user_id)
    {
        $returnType = '';
        $request = $this->removeUserRequest($enterprise_id, $user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'removeUser'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removeUserRequest($enterprise_id, $user_id)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling removeUser'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling removeUser'
            );
        }

        $resourcePath = '/v1/enterprise/{enterprise_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterprise_id),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchUsers
     *
     * Search for User(s)
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param  string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param  string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param  string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param  string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param  int $page_size Sets number of items returned per page. (optional)
     * @param  int $page_number Selects which page of results to return (1-based value) (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param  string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param  string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param  string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param  string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param  int $page_size Sets number of items returned per page. (optional)
     * @param  int $page_number Selects which page of results to return (1-based value) (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsersWithHttpInfo($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch';
        $request = $this->searchUsersRequest($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number);

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
                        '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch',
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
     * Operation searchUsersAsync
     *
     * Search for User(s)
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param  string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param  string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param  string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param  string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param  int $page_size Sets number of items returned per page. (optional)
     * @param  int $page_number Selects which page of results to return (1-based value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchUsersAsync($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        return $this->searchUsersAsyncWithHttpInfo($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchUsersAsyncWithHttpInfo
     *
     * Search for User(s)
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param  string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param  string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param  string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param  string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param  int $page_size Sets number of items returned per page. (optional)
     * @param  int $page_number Selects which page of results to return (1-based value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchUsersAsyncWithHttpInfo($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\EnterpriseUserSearch';
        $request = $this->searchUsersRequest($enterprise_id, $fields, $order, $sort_by, $text_search, $email_id, $page_size, $page_number);

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
     * Create request for operation 'searchUsers'
     *
     * @param  int $enterprise_id The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param  string $fields A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email (optional)
     * @param  string $order If specificed, order defines how the API sorts results- ascending or descending (optional)
     * @param  string $sort_by Name of BlueJeans profile field by with API response data is sorted (optional)
     * @param  string $text_search If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users (optional)
     * @param  string $email_id If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are &lt;b&gt;not&lt;/b&gt; supported for the email address value. (optional)
     * @param  int $page_size Sets number of items returned per page. (optional)
     * @param  int $page_number Selects which page of results to return (1-based value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchUsersRequest($enterprise_id, $fields = null, $order = null, $sort_by = null, $text_search = null, $email_id = null, $page_size = null, $page_number = null)
    {
        // verify the required parameter 'enterprise_id' is set
        if ($enterprise_id === null || (is_array($enterprise_id) && count($enterprise_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterprise_id when calling searchUsers'
            );
        }

        $resourcePath = '/v1/enterprise/{enterpriseId}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = ObjectSerializer::toQueryValue($order);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sortBy'] = ObjectSerializer::toQueryValue($sort_by);
        }
        // query params
        if ($text_search !== null) {
            $queryParams['textSearch'] = ObjectSerializer::toQueryValue($text_search);
        }
        // query params
        if ($email_id !== null) {
            $queryParams['emailId'] = ObjectSerializer::toQueryValue($email_id);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($page_number);
        }

        // path params
        if ($enterprise_id !== null) {
            $resourcePath = str_replace(
                '{' . 'enterpriseId' . '}',
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
