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
     * Operation createShareRecordings
     *
     * Enable Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\SetSharing $set_sharing set_sharing (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\MeetingSharing
     */
    public function createShareRecordings($user_id, $meeting_guid, $set_sharing)
    {
        list($response) = $this->createShareRecordingsWithHttpInfo($user_id, $meeting_guid, $set_sharing);
        return $response;
    }

    /**
     * Operation createShareRecordingsWithHttpInfo
     *
     * Enable Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\SetSharing $set_sharing (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingSharing, HTTP status code, HTTP response headers (array of strings)
     */
    public function createShareRecordingsWithHttpInfo($user_id, $meeting_guid, $set_sharing)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->createShareRecordingsRequest($user_id, $meeting_guid, $set_sharing);

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
                        '\BlueJeansMeetingsRestApi\Model\MeetingSharing',
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
     * Operation createShareRecordingsAsync
     *
     * Enable Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\SetSharing $set_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createShareRecordingsAsync($user_id, $meeting_guid, $set_sharing)
    {
        return $this->createShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid, $set_sharing)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createShareRecordingsAsyncWithHttpInfo
     *
     * Enable Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\SetSharing $set_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid, $set_sharing)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->createShareRecordingsRequest($user_id, $meeting_guid, $set_sharing);

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
     * Create request for operation 'createShareRecordings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  \BlueJeansMeetingsRestApi\Model\SetSharing $set_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createShareRecordingsRequest($user_id, $meeting_guid, $set_sharing)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling createShareRecordings'
            );
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null || (is_array($meeting_guid) && count($meeting_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_guid when calling createShareRecordings'
            );
        }
        // verify the required parameter 'set_sharing' is set
        if ($set_sharing === null || (is_array($set_sharing) && count($set_sharing) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $set_sharing when calling createShareRecordings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/';
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'meetingGuid' . '}',
                ObjectSerializer::toPathValue($meeting_guid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($set_sharing)) {
            $_tempBody = $set_sharing;
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
     * Operation deleteAllRecordingsByMeetingGuid
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function deleteAllRecordingsByMeetingGuid($user_id, $meeting_guid)
    {
        list($response) = $this->deleteAllRecordingsByMeetingGuidWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation deleteAllRecordingsByMeetingGuidWithHttpInfo
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAllRecordingsByMeetingGuidWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->deleteAllRecordingsByMeetingGuidRequest($user_id, $meeting_guid);

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
     * Operation deleteAllRecordingsByMeetingGuidAsync
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAllRecordingsByMeetingGuidAsync($user_id, $meeting_guid)
    {
        return $this->deleteAllRecordingsByMeetingGuidAsyncWithHttpInfo($user_id, $meeting_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAllRecordingsByMeetingGuidAsyncWithHttpInfo
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAllRecordingsByMeetingGuidAsyncWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->deleteAllRecordingsByMeetingGuidRequest($user_id, $meeting_guid);

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
     * Create request for operation 'deleteAllRecordingsByMeetingGuid'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteAllRecordingsByMeetingGuidRequest($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling deleteAllRecordingsByMeetingGuid'
            );
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null || (is_array($meeting_guid) && count($meeting_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_guid when calling deleteAllRecordingsByMeetingGuid'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/';
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'meeting_guid' . '}',
                ObjectSerializer::toPathValue($meeting_guid),
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
     * Operation deleteRecordingChapter
     *
     * Delete a Specified Recording Chapter
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\Meeting
     */
    public function deleteRecordingChapter($user_id, $meeting_id, $recording_chapter_id)
    {
        list($response) = $this->deleteRecordingChapterWithHttpInfo($user_id, $meeting_id, $recording_chapter_id);
        return $response;
    }

    /**
     * Operation deleteRecordingChapterWithHttpInfo
     *
     * Delete a Specified Recording Chapter
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRecordingChapterWithHttpInfo($user_id, $meeting_id, $recording_chapter_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->deleteRecordingChapterRequest($user_id, $meeting_id, $recording_chapter_id);

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
     * Operation deleteRecordingChapterAsync
     *
     * Delete a Specified Recording Chapter
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecordingChapterAsync($user_id, $meeting_id, $recording_chapter_id)
    {
        return $this->deleteRecordingChapterAsyncWithHttpInfo($user_id, $meeting_id, $recording_chapter_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteRecordingChapterAsyncWithHttpInfo
     *
     * Delete a Specified Recording Chapter
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecordingChapterAsyncWithHttpInfo($user_id, $meeting_id, $recording_chapter_id)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Meeting';
        $request = $this->deleteRecordingChapterRequest($user_id, $meeting_id, $recording_chapter_id);

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
     * Create request for operation 'deleteRecordingChapter'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteRecordingChapterRequest($user_id, $meeting_id, $recording_chapter_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling deleteRecordingChapter'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling deleteRecordingChapter'
            );
        }
        // verify the required parameter 'recording_chapter_id' is set
        if ($recording_chapter_id === null || (is_array($recording_chapter_id) && count($recording_chapter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $recording_chapter_id when calling deleteRecordingChapter'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/';
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
        // path params
        if ($recording_chapter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'recording_chapter_id' . '}',
                ObjectSerializer::toPathValue($recording_chapter_id),
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
     * Operation deleteShareRecordings
     *
     * Delete Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteShareRecordings($user_id, $meeting_guid)
    {
        $this->deleteShareRecordingsWithHttpInfo($user_id, $meeting_guid);
    }

    /**
     * Operation deleteShareRecordingsWithHttpInfo
     *
     * Delete Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteShareRecordingsWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '';
        $request = $this->deleteShareRecordingsRequest($user_id, $meeting_guid);

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
     * Operation deleteShareRecordingsAsync
     *
     * Delete Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteShareRecordingsAsync($user_id, $meeting_guid)
    {
        return $this->deleteShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteShareRecordingsAsyncWithHttpInfo
     *
     * Delete Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '';
        $request = $this->deleteShareRecordingsRequest($user_id, $meeting_guid);

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
     * Create request for operation 'deleteShareRecordings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteShareRecordingsRequest($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling deleteShareRecordings'
            );
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null || (is_array($meeting_guid) && count($meeting_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_guid when calling deleteShareRecordings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/';
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'meetingGuid' . '}',
                ObjectSerializer::toPathValue($meeting_guid),
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
     * Operation getMeetingRecordings
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\RecordingHistoryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingRecordingsWithHttpInfo($user_id, $meeting_id, $meeting_guid = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList';
        $request = $this->getMeetingRecordingsRequest($user_id, $meeting_id, $meeting_guid);

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
                        '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList',
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
     * Operation getMeetingRecordingsAsync
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingRecordingsAsync($user_id, $meeting_id, $meeting_guid = null)
    {
        return $this->getMeetingRecordingsAsyncWithHttpInfo($user_id, $meeting_id, $meeting_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeetingRecordingsAsyncWithHttpInfo
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeetingRecordingsAsyncWithHttpInfo($user_id, $meeting_id, $meeting_guid = null)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\RecordingHistoryList';
        $request = $this->getMeetingRecordingsRequest($user_id, $meeting_id, $meeting_guid);

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
     * Create request for operation 'getMeetingRecordings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeetingRecordingsRequest($user_id, $meeting_id, $meeting_guid = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getMeetingRecordings'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling getMeetingRecordings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($meeting_guid !== null) {
            $queryParams['meetingGuid'] = ObjectSerializer::toQueryValue($meeting_guid);
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
     * Operation getRecordingContent
     *
     * Get Recording Download Link
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param  bool $is_downloadable Set to true. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param  bool $is_downloadable Set to true. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecordingContentWithHttpInfo($user_id, $content_id, $is_downloadable)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Content';
        $request = $this->getRecordingContentRequest($user_id, $content_id, $is_downloadable);

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
                        '\BlueJeansMeetingsRestApi\Model\Content',
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
     * Operation getRecordingContentAsync
     *
     * Get Recording Download Link
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param  bool $is_downloadable Set to true. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecordingContentAsync($user_id, $content_id, $is_downloadable)
    {
        return $this->getRecordingContentAsyncWithHttpInfo($user_id, $content_id, $is_downloadable)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRecordingContentAsyncWithHttpInfo
     *
     * Get Recording Download Link
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param  bool $is_downloadable Set to true. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecordingContentAsyncWithHttpInfo($user_id, $content_id, $is_downloadable)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\Content';
        $request = $this->getRecordingContentRequest($user_id, $content_id, $is_downloadable);

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
     * Create request for operation 'getRecordingContent'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param  bool $is_downloadable Set to true. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRecordingContentRequest($user_id, $content_id, $is_downloadable)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getRecordingContent'
            );
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null || (is_array($content_id) && count($content_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_id when calling getRecordingContent'
            );
        }
        // verify the required parameter 'is_downloadable' is set
        if ($is_downloadable === null || (is_array($is_downloadable) && count($is_downloadable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $is_downloadable when calling getRecordingContent'
            );
        }

        $resourcePath = '/v1/user/{user_id}/cms/{content_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($is_downloadable !== null) {
            $queryParams['isDownloadable'] = ObjectSerializer::toQueryValue($is_downloadable);
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
        if ($content_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_id' . '}',
                ObjectSerializer::toPathValue($content_id),
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
     * Operation getShareRecordings
     *
     * List Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\MeetingSharing
     */
    public function getShareRecordings($user_id, $meeting_guid)
    {
        list($response) = $this->getShareRecordingsWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getShareRecordingsWithHttpInfo
     *
     * List Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingSharing, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShareRecordingsWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->getShareRecordingsRequest($user_id, $meeting_guid);

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
                        '\BlueJeansMeetingsRestApi\Model\MeetingSharing',
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
     * Operation getShareRecordingsAsync
     *
     * List Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShareRecordingsAsync($user_id, $meeting_guid)
    {
        return $this->getShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShareRecordingsAsyncWithHttpInfo
     *
     * List Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->getShareRecordingsRequest($user_id, $meeting_guid);

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
     * Create request for operation 'getShareRecordings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShareRecordingsRequest($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getShareRecordings'
            );
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null || (is_array($meeting_guid) && count($meeting_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_guid when calling getShareRecordings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/';
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'meetingGuid' . '}',
                ObjectSerializer::toPathValue($meeting_guid),
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
     * Operation modifyShareRecordings
     *
     * Modify Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  string $sharing_id The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ModifySharing $modify_sharing modify_sharing (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\MeetingSharing
     */
    public function modifyShareRecordings($user_id, $meeting_guid, $sharing_id, $modify_sharing)
    {
        list($response) = $this->modifyShareRecordingsWithHttpInfo($user_id, $meeting_guid, $sharing_id, $modify_sharing);
        return $response;
    }

    /**
     * Operation modifyShareRecordingsWithHttpInfo
     *
     * Modify Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  string $sharing_id The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ModifySharing $modify_sharing (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\MeetingSharing, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyShareRecordingsWithHttpInfo($user_id, $meeting_guid, $sharing_id, $modify_sharing)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->modifyShareRecordingsRequest($user_id, $meeting_guid, $sharing_id, $modify_sharing);

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
                        '\BlueJeansMeetingsRestApi\Model\MeetingSharing',
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
     * Operation modifyShareRecordingsAsync
     *
     * Modify Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  string $sharing_id The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ModifySharing $modify_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyShareRecordingsAsync($user_id, $meeting_guid, $sharing_id, $modify_sharing)
    {
        return $this->modifyShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid, $sharing_id, $modify_sharing)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyShareRecordingsAsyncWithHttpInfo
     *
     * Modify Recording Sharing
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  string $sharing_id The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ModifySharing $modify_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyShareRecordingsAsyncWithHttpInfo($user_id, $meeting_guid, $sharing_id, $modify_sharing)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\MeetingSharing';
        $request = $this->modifyShareRecordingsRequest($user_id, $meeting_guid, $sharing_id, $modify_sharing);

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
     * Create request for operation 'modifyShareRecordings'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
     * @param  string $sharing_id The identifier of the sharing authorization record.  This value can be obtained from the \&quot;Id\&quot; in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
     * @param  \BlueJeansMeetingsRestApi\Model\ModifySharing $modify_sharing (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyShareRecordingsRequest($user_id, $meeting_guid, $sharing_id, $modify_sharing)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling modifyShareRecordings'
            );
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null || (is_array($meeting_guid) && count($meeting_guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_guid when calling modifyShareRecordings'
            );
        }
        // verify the required parameter 'sharing_id' is set
        if ($sharing_id === null || (is_array($sharing_id) && count($sharing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sharing_id when calling modifyShareRecordings'
            );
        }
        // verify the required parameter 'modify_sharing' is set
        if ($modify_sharing === null || (is_array($modify_sharing) && count($modify_sharing) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $modify_sharing when calling modifyShareRecordings'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}';
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
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                '{' . 'meetingGuid' . '}',
                ObjectSerializer::toPathValue($meeting_guid),
                $resourcePath
            );
        }
        // path params
        if ($sharing_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sharingId' . '}',
                ObjectSerializer::toPathValue($sharing_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($modify_sharing)) {
            $_tempBody = $modify_sharing;
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
     * Operation moveRecordingOwner
     *
     * Move Recording Ownership
     *
     * @param  int $user_id The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $original_owner The ID of the recording&#39;s current owner. (required)
     * @param  int $new_owner The ID of the intended owner for the recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BlueJeansMeetingsRestApi\Model\RecordingMovedComp
     */
    public function moveRecordingOwner($user_id, $original_owner, $new_owner)
    {
        list($response) = $this->moveRecordingOwnerWithHttpInfo($user_id, $original_owner, $new_owner);
        return $response;
    }

    /**
     * Operation moveRecordingOwnerWithHttpInfo
     *
     * Move Recording Ownership
     *
     * @param  int $user_id The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $original_owner The ID of the recording&#39;s current owner. (required)
     * @param  int $new_owner The ID of the intended owner for the recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BlueJeansMeetingsRestApi\Model\RecordingMovedComp, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveRecordingOwnerWithHttpInfo($user_id, $original_owner, $new_owner)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\RecordingMovedComp';
        $request = $this->moveRecordingOwnerRequest($user_id, $original_owner, $new_owner);

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
                        '\BlueJeansMeetingsRestApi\Model\RecordingMovedComp',
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
     * Operation moveRecordingOwnerAsync
     *
     * Move Recording Ownership
     *
     * @param  int $user_id The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $original_owner The ID of the recording&#39;s current owner. (required)
     * @param  int $new_owner The ID of the intended owner for the recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveRecordingOwnerAsync($user_id, $original_owner, $new_owner)
    {
        return $this->moveRecordingOwnerAsyncWithHttpInfo($user_id, $original_owner, $new_owner)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moveRecordingOwnerAsyncWithHttpInfo
     *
     * Move Recording Ownership
     *
     * @param  int $user_id The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $original_owner The ID of the recording&#39;s current owner. (required)
     * @param  int $new_owner The ID of the intended owner for the recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveRecordingOwnerAsyncWithHttpInfo($user_id, $original_owner, $new_owner)
    {
        $returnType = '\BlueJeansMeetingsRestApi\Model\RecordingMovedComp';
        $request = $this->moveRecordingOwnerRequest($user_id, $original_owner, $new_owner);

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
     * Create request for operation 'moveRecordingOwner'
     *
     * @param  int $user_id The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $original_owner The ID of the recording&#39;s current owner. (required)
     * @param  int $new_owner The ID of the intended owner for the recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveRecordingOwnerRequest($user_id, $original_owner, $new_owner)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling moveRecordingOwner'
            );
        }
        // verify the required parameter 'original_owner' is set
        if ($original_owner === null || (is_array($original_owner) && count($original_owner) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $original_owner when calling moveRecordingOwner'
            );
        }
        // verify the required parameter 'new_owner' is set
        if ($new_owner === null || (is_array($new_owner) && count($new_owner) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $new_owner when calling moveRecordingOwner'
            );
        }

        $resourcePath = '/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}';
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
        if ($original_owner !== null) {
            $resourcePath = str_replace(
                '{' . 'originalOwner' . '}',
                ObjectSerializer::toPathValue($original_owner),
                $resourcePath
            );
        }
        // path params
        if ($new_owner !== null) {
            $resourcePath = str_replace(
                '{' . 'newOwner' . '}',
                ObjectSerializer::toPathValue($new_owner),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation startRecording
     *
     * Start Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function startRecording($user_id, $meeting_id, $action)
    {
        $this->startRecordingWithHttpInfo($user_id, $meeting_id, $action);
    }

    /**
     * Operation startRecordingWithHttpInfo
     *
     * Start Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function startRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        $returnType = '';
        $request = $this->startRecordingRequest($user_id, $meeting_id, $action);

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
     * Operation startRecordingAsync
     *
     * Start Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startRecordingAsync($user_id, $meeting_id, $action)
    {
        return $this->startRecordingAsyncWithHttpInfo($user_id, $meeting_id, $action)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startRecordingAsyncWithHttpInfo
     *
     * Start Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startRecordingAsyncWithHttpInfo($user_id, $meeting_id, $action)
    {
        $returnType = '';
        $request = $this->startRecordingRequest($user_id, $meeting_id, $action);

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
     * Create request for operation 'startRecording'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startRecordingRequest($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling startRecording'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling startRecording'
            );
        }
        // verify the required parameter 'action' is set
        if ($action === null || (is_array($action) && count($action) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action when calling startRecording'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation stopRecording
     *
     * Stop Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function stopRecording($user_id, $meeting_id, $action)
    {
        $this->stopRecordingWithHttpInfo($user_id, $meeting_id, $action);
    }

    /**
     * Operation stopRecordingWithHttpInfo
     *
     * Stop Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     *
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        $returnType = '';
        $request = $this->stopRecordingRequest($user_id, $meeting_id, $action);

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
     * Operation stopRecordingAsync
     *
     * Stop Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopRecordingAsync($user_id, $meeting_id, $action)
    {
        return $this->stopRecordingAsyncWithHttpInfo($user_id, $meeting_id, $action)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stopRecordingAsyncWithHttpInfo
     *
     * Stop Recording
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopRecordingAsyncWithHttpInfo($user_id, $meeting_id, $action)
    {
        $returnType = '';
        $request = $this->stopRecordingRequest($user_id, $meeting_id, $action);

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
     * Create request for operation 'stopRecording'
     *
     * @param  int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param  int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param  string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function stopRecordingRequest($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling stopRecording'
            );
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null || (is_array($meeting_id) && count($meeting_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_id when calling stopRecording'
            );
        }
        // verify the required parameter 'action' is set
        if ($action === null || (is_array($action) && count($action) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action when calling stopRecording'
            );
        }

        $resourcePath = '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
