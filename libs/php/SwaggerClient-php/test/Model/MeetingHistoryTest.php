<?php
/**
 * MeetingHistoryTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * MeetingHistoryTest Class Doc Comment
 *
 * @category    Class */
// * @description MeetingHistory
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingHistoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "MeetingHistory"
     */
    public function testMeetingHistory()
    {

    }

    /**
     * Test attribute "meeting_guid"
     */
    public function testPropertyMeetingGuid()
    {

    }

    /**
     * Test attribute "meeting_numeric_id"
     */
    public function testPropertyMeetingNumericId()
    {

    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {

    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {

    }

    /**
     * Test attribute "leader_info"
     */
    public function testPropertyLeaderInfo()
    {

    }

    /**
     * Test attribute "user_id"
     */
    public function testPropertyUserId()
    {

    }

    /**
     * Test attribute "meeting_duration"
     */
    public function testPropertyMeetingDuration()
    {

    }

    /**
     * Test attribute "max_participant_count"
     */
    public function testPropertyMaxParticipantCount()
    {

    }

    /**
     * Test attribute "total_participant_minutes"
     */
    public function testPropertyTotalParticipantMinutes()
    {

    }

    /**
     * Test attribute "max_participant_minutes"
     */
    public function testPropertyMaxParticipantMinutes()
    {

    }

    /**
     * Test attribute "extra_participant_minutes"
     */
    public function testPropertyExtraParticipantMinutes()
    {

    }

    /**
     * Test attribute "isdn_endpoints"
     */
    public function testPropertyIsdnEndpoints()
    {

    }

    /**
     * Test attribute "total_dialout_minutes"
     */
    public function testPropertyTotalDialoutMinutes()
    {

    }

    /**
     * Test attribute "total_toll_free_minutes"
     */
    public function testPropertyTotalTollFreeMinutes()
    {

    }

    /**
     * Test attribute "call_did_minutes"
     */
    public function testPropertyCallDidMinutes()
    {

    }

    /**
     * Test attribute "start_time"
     */
    public function testPropertyStartTime()
    {

    }

    /**
     * Test attribute "end_time"
     */
    public function testPropertyEndTime()
    {

    }

    /**
     * Test attribute "meeting_status"
     */
    public function testPropertyMeetingStatus()
    {

    }

    /**
     * Test attribute "meeting_thumbnail"
     */
    public function testPropertyMeetingThumbnail()
    {

    }

    /**
     * Test attribute "start_time_zone"
     */
    public function testPropertyStartTimeZone()
    {

    }

    /**
     * Test attribute "processing_status"
     */
    public function testPropertyProcessingStatus()
    {

    }

    /**
     * Test attribute "concurrent_calls"
     */
    public function testPropertyConcurrentCalls()
    {

    }

    /**
     * Test attribute "upload_status"
     */
    public function testPropertyUploadStatus()
    {

    }

    /**
     * Test attribute "pstnonly"
     */
    public function testPropertyPstnonly()
    {

    }

    /**
     * Test attribute "participant_list"
     */
    public function testPropertyParticipantList()
    {

    }

}
