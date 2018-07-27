<?php
/**
 * AuthenticationApi
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
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
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
     * Operation getAuthorizationCode
     *
     * Get Authorization Code
     *
     * @param  string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param  string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param  string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param  string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param  string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param  string $app_name The name of the client application shown to user during authorization. (optional)
     * @param  string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getAuthorizationCode($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        $this->getAuthorizationCodeWithHttpInfo($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);
    }

    /**
     * Operation getAuthorizationCodeWithHttpInfo
     *
     * Get Authorization Code
     *
     * @param  string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param  string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param  string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param  string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param  string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param  string $app_name The name of the client application shown to user during authorization. (optional)
     * @param  string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizationCodeWithHttpInfo($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        $returnType = '';
        $request = $this->getAuthorizationCodeRequest($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);

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
     * Operation getAuthorizationCodeAsync
     *
     * Get Authorization Code
     *
     * @param  string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param  string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param  string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param  string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param  string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param  string $app_name The name of the client application shown to user during authorization. (optional)
     * @param  string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsync($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        return $this->getAuthorizationCodeAsyncWithHttpInfo($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuthorizationCodeAsyncWithHttpInfo
     *
     * Get Authorization Code
     *
     * @param  string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param  string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param  string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param  string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param  string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param  string $app_name The name of the client application shown to user during authorization. (optional)
     * @param  string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsyncWithHttpInfo($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        $returnType = '';
        $request = $this->getAuthorizationCodeRequest($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);

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
     * Create request for operation 'getAuthorizationCode'
     *
     * @param  string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param  string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param  string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param  string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param  string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param  string $app_name The name of the client application shown to user during authorization. (optional)
     * @param  string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuthorizationCodeRequest($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {

        $resourcePath = '/oauth2/authorize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirectUri'] = ObjectSerializer::toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = ObjectSerializer::toQueryValue($scope);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['responseType'] = ObjectSerializer::toQueryValue($response_type);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = ObjectSerializer::toQueryValue($app_name);
        }
        // query params
        if ($app_logo_url !== null) {
            $queryParams['appLogoUrl'] = ObjectSerializer::toQueryValue($app_logo_url);
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
     * Operation getTokenByClient
     *
     * Authentication via Client Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\GrantClient
     */
    public function getTokenByClient($grant_request_client)
    {
        list($response) = $this->getTokenByClientWithHttpInfo($grant_request_client);
        return $response;
    }

    /**
     * Operation getTokenByClientWithHttpInfo
     *
     * Authentication via Client Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantClient, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByClientWithHttpInfo($grant_request_client)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantClient';
        $request = $this->getTokenByClientRequest($grant_request_client);

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
                        '\BlueJeansMeetingsRestApi\Model\GrantClient',
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
     * Operation getTokenByClientAsync
     *
     * Authentication via Client Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByClientAsync($grant_request_client)
    {
        return $this->getTokenByClientAsyncWithHttpInfo($grant_request_client)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenByClientAsyncWithHttpInfo
     *
     * Authentication via Client Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByClientAsyncWithHttpInfo($grant_request_client)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantClient';
        $request = $this->getTokenByClientRequest($grant_request_client);

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
     * Create request for operation 'getTokenByClient'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenByClientRequest($grant_request_client)
    {
        // verify the required parameter 'grant_request_client' is set
        if ($grant_request_client === null || (is_array($grant_request_client) && count($grant_request_client) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_client when calling getTokenByClient'
            );
        }

        $resourcePath = '/oauth2/token?Client';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($grant_request_client)) {
            $_tempBody = $grant_request_client;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation getTokenByCode
     *
     * Authentication via Code Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\GrantCode
     */
    public function getTokenByCode($grant_request_code)
    {
        list($response) = $this->getTokenByCodeWithHttpInfo($grant_request_code);
        return $response;
    }

    /**
     * Operation getTokenByCodeWithHttpInfo
     *
     * Authentication via Code Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantCode, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByCodeWithHttpInfo($grant_request_code)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantCode';
        $request = $this->getTokenByCodeRequest($grant_request_code);

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
                        '\BlueJeansMeetingsRestApi\Model\GrantCode',
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
     * Operation getTokenByCodeAsync
     *
     * Authentication via Code Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByCodeAsync($grant_request_code)
    {
        return $this->getTokenByCodeAsyncWithHttpInfo($grant_request_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenByCodeAsyncWithHttpInfo
     *
     * Authentication via Code Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByCodeAsyncWithHttpInfo($grant_request_code)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantCode';
        $request = $this->getTokenByCodeRequest($grant_request_code);

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
     * Create request for operation 'getTokenByCode'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenByCodeRequest($grant_request_code)
    {
        // verify the required parameter 'grant_request_code' is set
        if ($grant_request_code === null || (is_array($grant_request_code) && count($grant_request_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_code when calling getTokenByCode'
            );
        }

        $resourcePath = '/oauth2/token?Code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($grant_request_code)) {
            $_tempBody = $grant_request_code;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation getTokenByMeeting
     *
     * Authentication via Meeting Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\GrantMeeting
     */
    public function getTokenByMeeting($grant_request_meeting)
    {
        list($response) = $this->getTokenByMeetingWithHttpInfo($grant_request_meeting);
        return $response;
    }

    /**
     * Operation getTokenByMeetingWithHttpInfo
     *
     * Authentication via Meeting Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantMeeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByMeetingWithHttpInfo($grant_request_meeting)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantMeeting';
        $request = $this->getTokenByMeetingRequest($grant_request_meeting);

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
                        '\BlueJeansMeetingsRestApi\Model\GrantMeeting',
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
     * Operation getTokenByMeetingAsync
     *
     * Authentication via Meeting Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByMeetingAsync($grant_request_meeting)
    {
        return $this->getTokenByMeetingAsyncWithHttpInfo($grant_request_meeting)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenByMeetingAsyncWithHttpInfo
     *
     * Authentication via Meeting Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByMeetingAsyncWithHttpInfo($grant_request_meeting)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantMeeting';
        $request = $this->getTokenByMeetingRequest($grant_request_meeting);

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
     * Create request for operation 'getTokenByMeeting'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenByMeetingRequest($grant_request_meeting)
    {
        // verify the required parameter 'grant_request_meeting' is set
        if ($grant_request_meeting === null || (is_array($grant_request_meeting) && count($grant_request_meeting) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_meeting when calling getTokenByMeeting'
            );
        }

        $resourcePath = '/oauth2/token?Meeting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($grant_request_meeting)) {
            $_tempBody = $grant_request_meeting;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation getTokenByPassword
     *
     * Authentication via Password Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\GrantPassword
     */
    public function getTokenByPassword($grant_request_password)
    {
        list($response) = $this->getTokenByPasswordWithHttpInfo($grant_request_password);
        return $response;
    }

    /**
     * Operation getTokenByPasswordWithHttpInfo
     *
     * Authentication via Password Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantPassword, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByPasswordWithHttpInfo($grant_request_password)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantPassword';
        $request = $this->getTokenByPasswordRequest($grant_request_password);

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
                        '\BlueJeansMeetingsRestApi\Model\GrantPassword',
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
     * Operation getTokenByPasswordAsync
     *
     * Authentication via Password Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByPasswordAsync($grant_request_password)
    {
        return $this->getTokenByPasswordAsyncWithHttpInfo($grant_request_password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenByPasswordAsyncWithHttpInfo
     *
     * Authentication via Password Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByPasswordAsyncWithHttpInfo($grant_request_password)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantPassword';
        $request = $this->getTokenByPasswordRequest($grant_request_password);

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
     * Create request for operation 'getTokenByPassword'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenByPasswordRequest($grant_request_password)
    {
        // verify the required parameter 'grant_request_password' is set
        if ($grant_request_password === null || (is_array($grant_request_password) && count($grant_request_password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_password when calling getTokenByPassword'
            );
        }

        $resourcePath = '/oauth2/token?Password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($grant_request_password)) {
            $_tempBody = $grant_request_password;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation getTokenByRefresh
     *
     * Authentication via Refresh Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\GrantRefresh
     */
    public function getTokenByRefresh($grant_request_refresh)
    {
        list($response) = $this->getTokenByRefreshWithHttpInfo($grant_request_refresh);
        return $response;
    }

    /**
     * Operation getTokenByRefreshWithHttpInfo
     *
     * Authentication via Refresh Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantRefresh, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByRefreshWithHttpInfo($grant_request_refresh)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantRefresh';
        $request = $this->getTokenByRefreshRequest($grant_request_refresh);

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
                        '\BlueJeansMeetingsRestApi\Model\GrantRefresh',
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
     * Operation getTokenByRefreshAsync
     *
     * Authentication via Refresh Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByRefreshAsync($grant_request_refresh)
    {
        return $this->getTokenByRefreshAsyncWithHttpInfo($grant_request_refresh)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenByRefreshAsyncWithHttpInfo
     *
     * Authentication via Refresh Grant Type
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenByRefreshAsyncWithHttpInfo($grant_request_refresh)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\GrantRefresh';
        $request = $this->getTokenByRefreshRequest($grant_request_refresh);

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
     * Create request for operation 'getTokenByRefresh'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenByRefreshRequest($grant_request_refresh)
    {
        // verify the required parameter 'grant_request_refresh' is set
        if ($grant_request_refresh === null || (is_array($grant_request_refresh) && count($grant_request_refresh) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_refresh when calling getTokenByRefresh'
            );
        }

        $resourcePath = '/oauth2/token?Refresh';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($grant_request_refresh)) {
            $_tempBody = $grant_request_refresh;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation getTokenInfo
     *
     * Validate a Token
     *
     * @param  string $access_token access_token (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\InlineResponse200
     */
    public function getTokenInfo($access_token = null)
    {
        list($response) = $this->getTokenInfoWithHttpInfo($access_token);
        return $response;
    }

    /**
     * Operation getTokenInfoWithHttpInfo
     *
     * Validate a Token
     *
     * @param  string $access_token (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenInfoWithHttpInfo($access_token = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\InlineResponse200';
        $request = $this->getTokenInfoRequest($access_token);

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
                        '\BlueJeansMeetingsRestApi\Model\InlineResponse200',
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
     * Operation getTokenInfoAsync
     *
     * Validate a Token
     *
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenInfoAsync($access_token = null)
    {
        return $this->getTokenInfoAsyncWithHttpInfo($access_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenInfoAsyncWithHttpInfo
     *
     * Validate a Token
     *
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenInfoAsyncWithHttpInfo($access_token = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\InlineResponse200';
        $request = $this->getTokenInfoRequest($access_token);

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
     * Create request for operation 'getTokenInfo'
     *
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTokenInfoRequest($access_token = null)
    {

        $resourcePath = '/oauth2/tokenInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($access_token);
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
                ['application/json']
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
     * Operation revokeAccessToken
     *
     * Revoke Access Token
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param  string $access_token access_token (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function revokeAccessToken($grant_request_revoke, $access_token = null)
    {
        $this->revokeAccessTokenWithHttpInfo($grant_request_revoke, $access_token);
    }

    /**
     * Operation revokeAccessTokenWithHttpInfo
     *
     * Revoke Access Token
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param  string $access_token (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeAccessTokenWithHttpInfo($grant_request_revoke, $access_token = null)
    {
        $returnType = '';
        $request = $this->revokeAccessTokenRequest($grant_request_revoke, $access_token);

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
     * Operation revokeAccessTokenAsync
     *
     * Revoke Access Token
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function revokeAccessTokenAsync($grant_request_revoke, $access_token = null)
    {
        return $this->revokeAccessTokenAsyncWithHttpInfo($grant_request_revoke, $access_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation revokeAccessTokenAsyncWithHttpInfo
     *
     * Revoke Access Token
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function revokeAccessTokenAsyncWithHttpInfo($grant_request_revoke, $access_token = null)
    {
        $returnType = '';
        $request = $this->revokeAccessTokenRequest($grant_request_revoke, $access_token);

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
     * Create request for operation 'revokeAccessToken'
     *
     * @param  \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param  string $access_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function revokeAccessTokenRequest($grant_request_revoke, $access_token = null)
    {
        // verify the required parameter 'grant_request_revoke' is set
        if ($grant_request_revoke === null || (is_array($grant_request_revoke) && count($grant_request_revoke) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_request_revoke when calling revokeAccessToken'
            );
        }

        $resourcePath = '/oauth2/token?Revoke';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($access_token);
        }


        // body params
        $_tempBody = null;
        if (isset($grant_request_revoke)) {
            $_tempBody = $grant_request_revoke;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
