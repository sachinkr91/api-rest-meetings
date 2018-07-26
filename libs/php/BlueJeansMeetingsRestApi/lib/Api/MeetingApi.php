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
     * Operation cancelMeeting
     *
     * Cancel Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  bool $email Dispatch an email to participants with the specified cancellation message. (optional, default to false)
     * @param  string $cancellation_message Message sent to participants when meeting is deleted and email is selected (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function cancelMeeting($user_id, $meeting_id, $email = 'false', $cancellation_message = null)
    {
        $this->cancelMeetingWithHttpInfo($user_id, $meeting_id, $email, $cancellation_message);
    }

    /**
     * Operation cancelMeetingWithHttpInfo
     *
     * Cancel Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  bool $email Dispatch an email to participants with the specified cancellation message. (optional, default to false)
     * @param  string $cancellation_message Message sent to participants when meeting is deleted and email is selected (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelMeetingWithHttpInfo($user_id, $meeting_id, $email = 'false', $cancellation_message = null)
    {
        $returnType = '';
        $request = $this->cancelMeetingRequest($user_id, $meeting_id, $email, $cancellation_message);

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
     * Operation cancelMeetingAsync
     *
     * Cancel Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  bool $email Dispatch an email to participants with the specified cancellation message. (optional, default to false)
     * @param  string $cancellation_message Message sent to participants when meeting is deleted and email is selected (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelMeetingAsync($user_id, $meeting_id, $email = 'false', $cancellation_message = null)
    {
        return $this->cancelMeetingAsyncWithHttpInfo($user_id, $meeting_id, $email, $cancellation_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelMeetingAsyncWithHttpInfo
     *
     * Cancel Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  bool $email Dispatch an email to participants with the specified cancellation message. (optional, default to false)
     * @param  string $cancellation_message Message sent to participants when meeting is deleted and email is selected (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelMeetingAsyncWithHttpInfo($user_id, $meeting_id, $email = 'false', $cancellation_message = null)
    {
        $returnType = '';
        $request = $this->cancelMeetingRequest($user_id, $meeting_id, $email, $cancellation_message);

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
     * Create request for operation 'cancelMeeting'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  bool $email Dispatch an email to participants with the specified cancellation message. (optional, default to false)
     * @param  string $cancellation_message Message sent to participants when meeting is deleted and email is selected (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelMeetingRequest($user_id, $meeting_id, $email = 'false', $cancellation_message = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling cancelMeeting'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling cancelMeeting'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting/{meeting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($cancellation_message !== null) {
            $queryParams['cancellationMessage'] = ObjectSerializer::toQueryValue($cancellation_message);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_id' . '}',
                ObjectSerializer::toPathValue($meeting_id),
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
     * Operation createMeeting
     *
     * Create Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param  bool $email If set to true, sends invitation emails to all listed participants. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param  bool $email If set to true, sends invitation emails to all listed participants. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMeetingWithHttpInfo($user_id, $meeting, $email = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->createMeetingRequest($user_id, $meeting, $email);

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
                        '\BlueJeansMeetingsRestApi\Model\Meeting',
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
     * Operation createMeetingAsync
     *
     * Create Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param  bool $email If set to true, sends invitation emails to all listed participants. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMeetingAsync($user_id, $meeting, $email = null)
    {
        return $this->createMeetingAsyncWithHttpInfo($user_id, $meeting, $email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createMeetingAsyncWithHttpInfo
     *
     * Create Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param  bool $email If set to true, sends invitation emails to all listed participants. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMeetingAsyncWithHttpInfo($user_id, $meeting, $email = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->createMeetingRequest($user_id, $meeting, $email);

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
     * Create request for operation 'createMeeting'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ScheduleMeetingMinComp $meeting The desired configuration for the meeting. (&lt;b&gt;NOTE&lt;/b&gt; The model provided here is a &lt;i&gt;typical&lt;/i&gt; minimum set of meeting parameters.) (required)
     * @param  bool $email If set to true, sends invitation emails to all listed participants. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createMeetingRequest($user_id, $meeting, $email = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling createMeeting'
            );
        }
        // verify the required parameter 'meeting' is set
        if ($meeting === null || (is_array($meeting) && count($meeting) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting when calling createMeeting'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
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
        if (isset($meeting)) {
            $_tempBody = $meeting;
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
     * Operation dialoutPstn
     *
     * Dialout via PSTN
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout payload_dialout (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\DialoutPstn, HTTP status code, HTTP response headers (array of strings)
     */
    public function dialoutPstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_dialout)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\DialoutPstn';
        $request = $this->dialoutPstnRequest($user_id, $numeric_meeting_id, $payload_dialout);

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
                        '\BlueJeansMeetingsRestApi\Model\DialoutPstn',
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
     * Operation dialoutPstnAsync
     *
     * Dialout via PSTN
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dialoutPstnAsync($user_id, $numeric_meeting_id, $payload_dialout)
    {
        return $this->dialoutPstnAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_dialout)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dialoutPstnAsyncWithHttpInfo
     *
     * Dialout via PSTN
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dialoutPstnAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_dialout)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\DialoutPstn';
        $request = $this->dialoutPstnRequest($user_id, $numeric_meeting_id, $payload_dialout);

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
     * Create request for operation 'dialoutPstn'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadDialout $payload_dialout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dialoutPstnRequest($user_id, $numeric_meeting_id, $payload_dialout)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling dialoutPstn'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling dialoutPstn'
            );
        }
        // verify the required parameter 'payload_dialout' is set
        if ($payload_dialout === null || (is_array($payload_dialout) && count($payload_dialout) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_dialout when calling dialoutPstn'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/dialout/pstn';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_dialout)) {
            $_tempBody = $payload_dialout;
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
     * Operation generatePairingCodePstn
     *
     * Generate Pairing Code (PSTN)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn payload_pairing_code_pstn (required)
     * @param  string $role role (optional, default to USER)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodePSTN, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodePstnWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN';
        $request = $this->generatePairingCodePstnRequest($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role);

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
                        '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN',
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
     * Operation generatePairingCodePstnAsync
     *
     * Generate Pairing Code (PSTN)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodePstnAsync($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        return $this->generatePairingCodePstnAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generatePairingCodePstnAsyncWithHttpInfo
     *
     * Generate Pairing Code (PSTN)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodePstnAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodePSTN';
        $request = $this->generatePairingCodePstnRequest($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role);

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
     * Create request for operation 'generatePairingCodePstn'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodePstn $payload_pairing_code_pstn (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generatePairingCodePstnRequest($user_id, $numeric_meeting_id, $payload_pairing_code_pstn, $role = 'USER')
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling generatePairingCodePstn'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling generatePairingCodePstn'
            );
        }
        // verify the required parameter 'payload_pairing_code_pstn' is set
        if ($payload_pairing_code_pstn === null || (is_array($payload_pairing_code_pstn) && count($payload_pairing_code_pstn) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_pairing_code_pstn when calling generatePairingCodePstn'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/PSTN';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($role !== null) {
            $queryParams['role'] = ObjectSerializer::toQueryValue($role);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_pstn)) {
            $_tempBody = $payload_pairing_code_pstn;
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
     * Operation generatePairingCodeSip
     *
     * Generate Pairing Code (SIP)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodeSIP, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodeSipWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP';
        $request = $this->generatePairingCodeSipRequest($user_id, $numeric_meeting_id, $payload_pairing_code_sip);

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
                        '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP',
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
     * Operation generatePairingCodeSipAsync
     *
     * Generate Pairing Code (SIP)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodeSipAsync($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        return $this->generatePairingCodeSipAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generatePairingCodeSipAsyncWithHttpInfo
     *
     * Generate Pairing Code (SIP)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodeSipAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodeSIP';
        $request = $this->generatePairingCodeSipRequest($user_id, $numeric_meeting_id, $payload_pairing_code_sip);

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
     * Create request for operation 'generatePairingCodeSip'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeSIP $payload_pairing_code_sip Information about the device that will be joining via SIP. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generatePairingCodeSipRequest($user_id, $numeric_meeting_id, $payload_pairing_code_sip)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling generatePairingCodeSip'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling generatePairingCodeSip'
            );
        }
        // verify the required parameter 'payload_pairing_code_sip' is set
        if ($payload_pairing_code_sip === null || (is_array($payload_pairing_code_sip) && count($payload_pairing_code_sip) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_pairing_code_sip when calling generatePairingCodeSip'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_sip)) {
            $_tempBody = $payload_pairing_code_sip;
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
     * Operation generatePairingCodeWebRtc
     *
     * Generate Pairing Code (WebRTC)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc payload_pairing_code_web_rtc (required)
     * @param  string $role role (optional, default to USER)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePairingCodeWebRtcWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC';
        $request = $this->generatePairingCodeWebRtcRequest($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role);

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
                        '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC',
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
     * Operation generatePairingCodeWebRtcAsync
     *
     * Generate Pairing Code (WebRTC)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodeWebRtcAsync($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        return $this->generatePairingCodeWebRtcAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generatePairingCodeWebRtcAsyncWithHttpInfo
     *
     * Generate Pairing Code (WebRTC)
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generatePairingCodeWebRtcAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\PairingCodeWebRTC';
        $request = $this->generatePairingCodeWebRtcRequest($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role);

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
     * Create request for operation 'generatePairingCodeWebRtc'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadPairingCodeWebRTC $payload_pairing_code_web_rtc (required)
     * @param  string $role (optional, default to USER)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generatePairingCodeWebRtcRequest($user_id, $numeric_meeting_id, $payload_pairing_code_web_rtc, $role = 'USER')
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling generatePairingCodeWebRtc'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling generatePairingCodeWebRtc'
            );
        }
        // verify the required parameter 'payload_pairing_code_web_rtc' is set
        if ($payload_pairing_code_web_rtc === null || (is_array($payload_pairing_code_web_rtc) && count($payload_pairing_code_web_rtc) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_pairing_code_web_rtc when calling generatePairingCodeWebRtc'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($role !== null) {
            $queryParams['role'] = ObjectSerializer::toQueryValue($role);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_pairing_code_web_rtc)) {
            $_tempBody = $payload_pairing_code_web_rtc;
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
     * Operation getEndpointLayout
     *
     * Get Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Layout, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Layout';
        $request = $this->getEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid);

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
                        '\BlueJeansMeetingsRestApi\Model\Layout',
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
     * Operation getEndpointLayoutAsync
     *
     * Get Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointLayoutAsync($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        return $this->getEndpointLayoutAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEndpointLayoutAsyncWithHttpInfo
     *
     * Get Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEndpointLayoutAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Layout';
        $request = $this->getEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid);

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
     * Create request for operation 'getEndpointLayout'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getEndpointLayout'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling getEndpointLayout'
            );
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null || (is_array($endpoint_guid) && count($endpoint_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endpoint_guid when calling getEndpointLayout'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'endpoint_guid' . '}',
                ObjectSerializer::toPathValue($endpoint_guid),
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
     * Operation getMeeting
     *
     * Get Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingWithHttpInfo($user_id, $meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->getMeetingRequest($user_id, $meeting_id);

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
                        '\BlueJeansMeetingsRestApi\Model\Meeting',
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
     * Operation getMeetingAsync
     *
     * Get Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingAsync($user_id, $meeting_id)
    {
        return $this->getMeetingAsyncWithHttpInfo($user_id, $meeting_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingAsyncWithHttpInfo
     *
     * Get Meeting
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingAsyncWithHttpInfo($user_id, $meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->getMeetingRequest($user_id, $meeting_id);

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
     * Create request for operation 'getMeeting'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. This is not the numeric meeting ID visible to users. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingRequest($user_id, $meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeeting'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling getMeeting'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting/{meeting_id}';
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
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_id' . '}',
                ObjectSerializer::toPathValue($meeting_id),
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
     * Operation getMeetingEmails
     *
     * Get Meeting Email
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $type TEXT, ICS, HTML (optional)
     * @param  string $role moderator, participant (optional)
     * @param  string $action create, edit, delete (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $type TEXT, ICS, HTML (optional)
     * @param  string $role moderator, participant (optional)
     * @param  string $action create, edit, delete (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingEmails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEmailsWithHttpInfo($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingEmails';
        $request = $this->getMeetingEmailsRequest($user_id, $meeting_id, $type, $role, $action);

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
                        '\BlueJeansMeetingsRestApi\Model\MeetingEmails',
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
     * Operation getMeetingEmailsAsync
     *
     * Get Meeting Email
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $type TEXT, ICS, HTML (optional)
     * @param  string $role moderator, participant (optional)
     * @param  string $action create, edit, delete (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEmailsAsync($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        return $this->getMeetingEmailsAsyncWithHttpInfo($user_id, $meeting_id, $type, $role, $action)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingEmailsAsyncWithHttpInfo
     *
     * Get Meeting Email
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $type TEXT, ICS, HTML (optional)
     * @param  string $role moderator, participant (optional)
     * @param  string $action create, edit, delete (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEmailsAsyncWithHttpInfo($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingEmails';
        $request = $this->getMeetingEmailsRequest($user_id, $meeting_id, $type, $role, $action);

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
     * Create request for operation 'getMeetingEmails'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $type TEXT, ICS, HTML (optional)
     * @param  string $role moderator, participant (optional)
     * @param  string $action create, edit, delete (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingEmailsRequest($user_id, $meeting_id, $type = null, $role = null, $action = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingEmails'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling getMeetingEmails'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($role !== null) {
            $queryParams['role'] = ObjectSerializer::toQueryValue($role);
        }
        // query params
        if ($action !== null) {
            $queryParams['action'] = ObjectSerializer::toQueryValue($action);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_id' . '}',
                ObjectSerializer::toPathValue($meeting_id),
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
     * Operation getMeetingEndpoint
     *
     * Get Endpoint Information
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoint';
        $request = $this->getMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid);

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
                        '\BlueJeansMeetingsRestApi\Model\Endpoint',
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
     * Operation getMeetingEndpointAsync
     *
     * Get Endpoint Information
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointAsync($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        return $this->getMeetingEndpointAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingEndpointAsyncWithHttpInfo
     *
     * Get Endpoint Information
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoint';
        $request = $this->getMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid);

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
     * Create request for operation 'getMeetingEndpoint'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingEndpoint'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling getMeetingEndpoint'
            );
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null || (is_array($endpoint_guid) && count($endpoint_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endpoint_guid when calling getMeetingEndpoint'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'endpoint_guid' . '}',
                ObjectSerializer::toPathValue($endpoint_guid),
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
     * Operation getMeetingEndpoints
     *
     * List Meeting Endpoints
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoints, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoints';
        $request = $this->getMeetingEndpointsRequest($user_id, $numeric_meeting_id);

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
                        '\BlueJeansMeetingsRestApi\Model\Endpoints',
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
     * Operation getMeetingEndpointsAsync
     *
     * List Meeting Endpoints
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointsAsync($user_id, $numeric_meeting_id)
    {
        return $this->getMeetingEndpointsAsyncWithHttpInfo($user_id, $numeric_meeting_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingEndpointsAsyncWithHttpInfo
     *
     * List Meeting Endpoints
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingEndpointsAsyncWithHttpInfo($user_id, $numeric_meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoints';
        $request = $this->getMeetingEndpointsRequest($user_id, $numeric_meeting_id);

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
     * Create request for operation 'getMeetingEndpoints'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingEndpointsRequest($user_id, $numeric_meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingEndpoints'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling getMeetingEndpoints'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
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
     * Operation getMeetingNumbers
     *
     * Get Meeting Join Info
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Numbers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingNumbersWithHttpInfo($user_id, $meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Numbers';
        $request = $this->getMeetingNumbersRequest($user_id, $meeting_id);

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
                        '\BlueJeansMeetingsRestApi\Model\Numbers',
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
     * Operation getMeetingNumbersAsync
     *
     * Get Meeting Join Info
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingNumbersAsync($user_id, $meeting_id)
    {
        return $this->getMeetingNumbersAsyncWithHttpInfo($user_id, $meeting_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingNumbersAsyncWithHttpInfo
     *
     * Get Meeting Join Info
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingNumbersAsyncWithHttpInfo($user_id, $meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Numbers';
        $request = $this->getMeetingNumbersRequest($user_id, $meeting_id);

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
     * Create request for operation 'getMeetingNumbers'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingNumbersRequest($user_id, $meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingNumbers'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling getMeetingNumbers'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meetings/{meeting_id}/numbers';
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
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_id' . '}',
                ObjectSerializer::toPathValue($meeting_id),
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
     * Operation getMeetingState
     *
     * Get Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingState, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingStateWithHttpInfo($user_id, $numeric_meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingState';
        $request = $this->getMeetingStateRequest($user_id, $numeric_meeting_id);

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
                        '\BlueJeansMeetingsRestApi\Model\MeetingState',
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
     * Operation getMeetingStateAsync
     *
     * Get Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingStateAsync($user_id, $numeric_meeting_id)
    {
        return $this->getMeetingStateAsyncWithHttpInfo($user_id, $numeric_meeting_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingStateAsyncWithHttpInfo
     *
     * Get Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingStateAsyncWithHttpInfo($user_id, $numeric_meeting_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingState';
        $request = $this->getMeetingStateRequest($user_id, $numeric_meeting_id);

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
     * Create request for operation 'getMeetingState'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingStateRequest($user_id, $numeric_meeting_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingState'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling getMeetingState'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
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
     * Operation listMeetings
     *
     * List Meetings
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listMeetingsWithHttpInfo($user_id, $numeric_meeting_id = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting[]';
        $request = $this->listMeetingsRequest($user_id, $numeric_meeting_id);

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
                        '\BlueJeansMeetingsRestApi\Model\Meeting[]',
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
     * Operation listMeetingsAsync
     *
     * List Meetings
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMeetingsAsync($user_id, $numeric_meeting_id = null)
    {
        return $this->listMeetingsAsyncWithHttpInfo($user_id, $numeric_meeting_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listMeetingsAsyncWithHttpInfo
     *
     * List Meetings
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMeetingsAsyncWithHttpInfo($user_id, $numeric_meeting_id = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting[]';
        $request = $this->listMeetingsRequest($user_id, $numeric_meeting_id);

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
     * Create request for operation 'listMeetings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $numeric_meeting_id Filter the results by the meeting ID that participants will see and use to join the conference. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listMeetingsRequest($user_id, $numeric_meeting_id = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling listMeetings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($numeric_meeting_id !== null) {
            $queryParams['numericMeetingId'] = ObjectSerializer::toQueryValue($numeric_meeting_id);
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
     * Operation sendMeetingInvite
     *
     * Send Email Invite
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite payload_invite (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendMeetingInvite($user_id, $numeric_meeting_id, $payload_invite)
    {
        $this->sendMeetingInviteWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite);
    }

    /**
     * Operation sendMeetingInviteWithHttpInfo
     *
     * Send Email Invite
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendMeetingInviteWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite)
    {
        $returnType = '';
        $request = $this->sendMeetingInviteRequest($user_id, $numeric_meeting_id, $payload_invite);

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
     * Operation sendMeetingInviteAsync
     *
     * Send Email Invite
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMeetingInviteAsync($user_id, $numeric_meeting_id, $payload_invite)
    {
        return $this->sendMeetingInviteAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendMeetingInviteAsyncWithHttpInfo
     *
     * Send Email Invite
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMeetingInviteAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_invite)
    {
        $returnType = '';
        $request = $this->sendMeetingInviteRequest($user_id, $numeric_meeting_id, $payload_invite);

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
     * Create request for operation 'sendMeetingInvite'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadInvite $payload_invite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendMeetingInviteRequest($user_id, $numeric_meeting_id, $payload_invite)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling sendMeetingInvite'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling sendMeetingInvite'
            );
        }
        // verify the required parameter 'payload_invite' is set
        if ($payload_invite === null || (is_array($payload_invite) && count($payload_invite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_invite when calling sendMeetingInvite'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite';
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
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_invite)) {
            $_tempBody = $payload_invite;
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
     * Operation updateEndpointLayout
     *
     * Update Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $is_leader is_leader (optional)
     * @param  bool $push push (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $is_leader (optional)
     * @param  bool $push (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Layout, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateEndpointLayoutWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Layout';
        $request = $this->updateEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push);

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
                        '\BlueJeansMeetingsRestApi\Model\Layout',
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
     * Operation updateEndpointLayoutAsync
     *
     * Update Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $is_leader (optional)
     * @param  bool $push (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateEndpointLayoutAsync($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        return $this->updateEndpointLayoutAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateEndpointLayoutAsyncWithHttpInfo
     *
     * Update Endpoint Layout
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $is_leader (optional)
     * @param  bool $push (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateEndpointLayoutAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Layout';
        $request = $this->updateEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader, $push);

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
     * Create request for operation 'updateEndpointLayout'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $is_leader (optional)
     * @param  bool $push (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateEndpointLayoutRequest($user_id, $numeric_meeting_id, $endpoint_guid, $is_leader = null, $push = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateEndpointLayout'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling updateEndpointLayout'
            );
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null || (is_array($endpoint_guid) && count($endpoint_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endpoint_guid when calling updateEndpointLayout'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($is_leader !== null) {
            $queryParams['isLeader'] = ObjectSerializer::toQueryValue($is_leader);
        }
        // query params
        if ($push !== null) {
            $queryParams['push'] = ObjectSerializer::toQueryValue($push);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'endpoint_guid' . '}',
                ObjectSerializer::toPathValue($endpoint_guid),
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
     * Operation updateMeeting
     *
     * Update Meeting
     *
     * @param  int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingWithHttpInfo($user_id, $meeting_id, $meeting)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->updateMeetingRequest($user_id, $meeting_id, $meeting);

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
                        '\BlueJeansMeetingsRestApi\Model\Meeting',
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
     * Operation updateMeetingAsync
     *
     * Update Meeting
     *
     * @param  int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingAsync($user_id, $meeting_id, $meeting)
    {
        return $this->updateMeetingAsyncWithHttpInfo($user_id, $meeting_id, $meeting)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateMeetingAsyncWithHttpInfo
     *
     * Update Meeting
     *
     * @param  int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingAsyncWithHttpInfo($user_id, $meeting_id, $meeting)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->updateMeetingRequest($user_id, $meeting_id, $meeting);

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
     * Create request for operation 'updateMeeting'
     *
     * @param  int $user_id The ID of the user of interest.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\Meeting $meeting The user&#39;s room details that you wish to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMeetingRequest($user_id, $meeting_id, $meeting)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateMeeting'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling updateMeeting'
            );
        }
        // verify the required parameter 'meeting' is set
        if ($meeting === null || (is_array($meeting) && count($meeting) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting when calling updateMeeting'
            );
        }

        $resourcePath = '/v1/user/{user_id}/scheduled_meeting/{meeting_id}';
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
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_id' . '}',
                ObjectSerializer::toPathValue($meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($meeting)) {
            $_tempBody = $meeting;
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateMeetingEndpoint
     *
     * Update Endpoint Video/Audio State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $mute_audio Toggle the audio source mute. (optional)
     * @param  bool $mute_video Toggle the video source mute. (optional)
     * @param  bool $leave_meeting Remove the user from the meeting. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $mute_audio Toggle the audio source mute. (optional)
     * @param  bool $mute_video Toggle the video source mute. (optional)
     * @param  bool $leave_meeting Remove the user from the meeting. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Endpoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingEndpointWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoint';
        $request = $this->updateMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting);

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
                        '\BlueJeansMeetingsRestApi\Model\Endpoint',
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
     * Operation updateMeetingEndpointAsync
     *
     * Update Endpoint Video/Audio State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $mute_audio Toggle the audio source mute. (optional)
     * @param  bool $mute_video Toggle the video source mute. (optional)
     * @param  bool $leave_meeting Remove the user from the meeting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingEndpointAsync($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        return $this->updateMeetingEndpointAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateMeetingEndpointAsyncWithHttpInfo
     *
     * Update Endpoint Video/Audio State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $mute_audio Toggle the audio source mute. (optional)
     * @param  bool $mute_video Toggle the video source mute. (optional)
     * @param  bool $leave_meeting Remove the user from the meeting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingEndpointAsyncWithHttpInfo($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Endpoint';
        $request = $this->updateMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio, $mute_video, $leave_meeting);

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
     * Create request for operation 'updateMeetingEndpoint'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  string $endpoint_guid The GUID of an endpoint.  Usually retrieved from the List Meeting Endpoints endpoint. (required)
     * @param  bool $mute_audio Toggle the audio source mute. (optional)
     * @param  bool $mute_video Toggle the video source mute. (optional)
     * @param  bool $leave_meeting Remove the user from the meeting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMeetingEndpointRequest($user_id, $numeric_meeting_id, $endpoint_guid, $mute_audio = null, $mute_video = null, $leave_meeting = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateMeetingEndpoint'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling updateMeetingEndpoint'
            );
        }
        // verify the required parameter 'endpoint_guid' is set
        if ($endpoint_guid === null || (is_array($endpoint_guid) && count($endpoint_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endpoint_guid when calling updateMeetingEndpoint'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($mute_audio !== null) {
            $queryParams['muteAudio'] = ObjectSerializer::toQueryValue($mute_audio);
        }
        // query params
        if ($mute_video !== null) {
            $queryParams['muteVideo'] = ObjectSerializer::toQueryValue($mute_video);
        }
        // query params
        if ($leave_meeting !== null) {
            $queryParams['leaveMeeting'] = ObjectSerializer::toQueryValue($leave_meeting);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($endpoint_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'endpoint_guid' . '}',
                ObjectSerializer::toPathValue($endpoint_guid),
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
     * Operation updateMeetingEndpoints
     *
     * Update Meeting Endpoints State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param  string $media Specify the type of media you which to mute/unmute. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateMeetingEndpoints($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        $this->updateMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id, $mute, $media);
    }

    /**
     * Operation updateMeetingEndpointsWithHttpInfo
     *
     * Update Meeting Endpoints State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param  string $media Specify the type of media you which to mute/unmute. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingEndpointsWithHttpInfo($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        $returnType = '';
        $request = $this->updateMeetingEndpointsRequest($user_id, $numeric_meeting_id, $mute, $media);

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
     * Operation updateMeetingEndpointsAsync
     *
     * Update Meeting Endpoints State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param  string $media Specify the type of media you which to mute/unmute. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingEndpointsAsync($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        return $this->updateMeetingEndpointsAsyncWithHttpInfo($user_id, $numeric_meeting_id, $mute, $media)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateMeetingEndpointsAsyncWithHttpInfo
     *
     * Update Meeting Endpoints State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param  string $media Specify the type of media you which to mute/unmute. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingEndpointsAsyncWithHttpInfo($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        $returnType = '';
        $request = $this->updateMeetingEndpointsRequest($user_id, $numeric_meeting_id, $mute, $media);

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
     * Create request for operation 'updateMeetingEndpoints'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  bool $mute Allows you to mute/unmute all participants in a meeting. Set mute to true to mute.  Set mute to false to unmute. (optional)
     * @param  string $media Specify the type of media you which to mute/unmute. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMeetingEndpointsRequest($user_id, $numeric_meeting_id, $mute = null, $media = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateMeetingEndpoints'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling updateMeetingEndpoints'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($mute !== null) {
            $queryParams['mute'] = ObjectSerializer::toQueryValue($mute);
        }
        // query params
        if ($media !== null) {
            $queryParams['media'] = ObjectSerializer::toQueryValue($media);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
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
     * Operation updateMeetingState
     *
     * Update Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param  int $delay Number of seconds to delay the end meeting operation. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param  int $delay Number of seconds to delay the end meeting operation. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeetingStateWithHttpInfo($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->updateMeetingStateRequest($user_id, $numeric_meeting_id, $payload_meeting_state, $delay);

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
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlueJeansMeetingsRestApi\Model\Meeting',
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
     * Operation updateMeetingStateAsync
     *
     * Update Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param  int $delay Number of seconds to delay the end meeting operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingStateAsync($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        return $this->updateMeetingStateAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_meeting_state, $delay)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateMeetingStateAsyncWithHttpInfo
     *
     * Update Meeting State
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param  int $delay Number of seconds to delay the end meeting operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeetingStateAsyncWithHttpInfo($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->updateMeetingStateRequest($user_id, $numeric_meeting_id, $payload_meeting_state, $delay);

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
     * Create request for operation 'updateMeetingState'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\PayloadMeetingState $payload_meeting_state The meeting properties that you wish to update. (required)
     * @param  int $delay Number of seconds to delay the end meeting operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMeetingStateRequest($user_id, $numeric_meeting_id, $payload_meeting_state, $delay = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateMeetingState'
            );
        }
        // verify the required parameter 'numeric_meeting_id' is set
        if ($numeric_meeting_id === null || (is_array($numeric_meeting_id) && count($numeric_meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $numeric_meeting_id when calling updateMeetingState'
            );
        }
        // verify the required parameter 'payload_meeting_state' is set
        if ($payload_meeting_state === null || (is_array($payload_meeting_state) && count($payload_meeting_state) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload_meeting_state when calling updateMeetingState'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{numeric_meeting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($delay !== null) {
            $queryParams['delay'] = ObjectSerializer::toQueryValue($delay);
        }

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($numeric_meeting_id !== null) {
            $resourcePath = str_replace(
                '{' . 'numeric_meeting_id' . '}',
                ObjectSerializer::toPathValue($numeric_meeting_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payload_meeting_state)) {
            $_tempBody = $payload_meeting_state;
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
            'PUT',
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
