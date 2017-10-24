/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */


using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Model;
using com.bluejeans.api.rest.onvideo.Client;
using System.Reflection;

namespace com.bluejeans.api.rest.onvideo.Test
{
    /// <summary>
    ///  Class for testing MeetingIndigo
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class MeetingIndigoTests
    {
        // TODO uncomment below to declare an instance variable for MeetingIndigo
        //private MeetingIndigo instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of MeetingIndigo
            //instance = new MeetingIndigo();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of MeetingIndigo
        /// </summary>
        [Test]
        public void MeetingIndigoInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" MeetingIndigo
            //Assert.IsInstanceOfType<MeetingIndigo> (instance, "variable 'instance' is a MeetingIndigo");
        }

        /// <summary>
        /// Test the property 'MeetingId'
        /// </summary>
        [Test]
        public void MeetingIdTest()
        {
            // TODO unit test for the property 'MeetingId'
        }
        /// <summary>
        /// Test the property 'MeetingUUID'
        /// </summary>
        [Test]
        public void MeetingUUIDTest()
        {
            // TODO unit test for the property 'MeetingUUID'
        }
        /// <summary>
        /// Test the property 'UserName'
        /// </summary>
        [Test]
        public void UserNameTest()
        {
            // TODO unit test for the property 'UserName'
        }
        /// <summary>
        /// Test the property 'Email'
        /// </summary>
        [Test]
        public void EmailTest()
        {
            // TODO unit test for the property 'Email'
        }
        /// <summary>
        /// Test the property 'EncryptionType'
        /// </summary>
        [Test]
        public void EncryptionTypeTest()
        {
            // TODO unit test for the property 'EncryptionType'
        }
        /// <summary>
        /// Test the property 'Title'
        /// </summary>
        [Test]
        public void TitleTest()
        {
            // TODO unit test for the property 'Title'
        }
        /// <summary>
        /// Test the property 'UserFullName'
        /// </summary>
        [Test]
        public void UserFullNameTest()
        {
            // TODO unit test for the property 'UserFullName'
        }
        /// <summary>
        /// Test the property 'PhoneNumber'
        /// </summary>
        [Test]
        public void PhoneNumberTest()
        {
            // TODO unit test for the property 'PhoneNumber'
        }
        /// <summary>
        /// Test the property 'UserFeatures'
        /// </summary>
        [Test]
        public void UserFeaturesTest()
        {
            // TODO unit test for the property 'UserFeatures'
        }
        /// <summary>
        /// Test the property 'ScheduledFrom'
        /// </summary>
        [Test]
        public void ScheduledFromTest()
        {
            // TODO unit test for the property 'ScheduledFrom'
        }
        /// <summary>
        /// Test the property 'InviteeCount'
        /// </summary>
        [Test]
        public void InviteeCountTest()
        {
            // TODO unit test for the property 'InviteeCount'
        }
        /// <summary>
        /// Test the property 'Personal'
        /// </summary>
        [Test]
        public void PersonalTest()
        {
            // TODO unit test for the property 'Personal'
        }
        /// <summary>
        /// Test the property 'MuteOnEntry'
        /// </summary>
        [Test]
        public void MuteOnEntryTest()
        {
            // TODO unit test for the property 'MuteOnEntry'
        }
        /// <summary>
        /// Test the property 'AutoRecord'
        /// </summary>
        [Test]
        public void AutoRecordTest()
        {
            // TODO unit test for the property 'AutoRecord'
        }
        /// <summary>
        /// Test the property 'EnterpriseName'
        /// </summary>
        [Test]
        public void EnterpriseNameTest()
        {
            // TODO unit test for the property 'EnterpriseName'
        }
        /// <summary>
        /// Test the property 'ModeratorLess'
        /// </summary>
        [Test]
        public void ModeratorLessTest()
        {
            // TODO unit test for the property 'ModeratorLess'
        }
        /// <summary>
        /// Test the property 'StartTime'
        /// </summary>
        [Test]
        public void StartTimeTest()
        {
            // TODO unit test for the property 'StartTime'
        }
        /// <summary>
        /// Test the property 'EndTime'
        /// </summary>
        [Test]
        public void EndTimeTest()
        {
            // TODO unit test for the property 'EndTime'
        }
        /// <summary>
        /// Test the property 'TotalCallSeconds'
        /// </summary>
        [Test]
        public void TotalCallSecondsTest()
        {
            // TODO unit test for the property 'TotalCallSeconds'
        }
        /// <summary>
        /// Test the property 'CreateTime'
        /// </summary>
        [Test]
        public void CreateTimeTest()
        {
            // TODO unit test for the property 'CreateTime'
        }
        /// <summary>
        /// Test the property 'EndpointsCount'
        /// </summary>
        [Test]
        public void EndpointsCountTest()
        {
            // TODO unit test for the property 'EndpointsCount'
        }
        /// <summary>
        /// Test the property 'ConcurrentEndpoints'
        /// </summary>
        [Test]
        public void ConcurrentEndpointsTest()
        {
            // TODO unit test for the property 'ConcurrentEndpoints'
        }
        /// <summary>
        /// Test the property 'LiveVisibleEndpointsCount'
        /// </summary>
        [Test]
        public void LiveVisibleEndpointsCountTest()
        {
            // TODO unit test for the property 'LiveVisibleEndpointsCount'
        }
        /// <summary>
        /// Test the property 'QualarooRating'
        /// </summary>
        [Test]
        public void QualarooRatingTest()
        {
            // TODO unit test for the property 'QualarooRating'
        }
        /// <summary>
        /// Test the property 'QualarooCount'
        /// </summary>
        [Test]
        public void QualarooCountTest()
        {
            // TODO unit test for the property 'QualarooCount'
        }
        /// <summary>
        /// Test the property 'MeetingRecording'
        /// </summary>
        [Test]
        public void MeetingRecordingTest()
        {
            // TODO unit test for the property 'MeetingRecording'
        }
        /// <summary>
        /// Test the property 'VideoShare'
        /// </summary>
        [Test]
        public void VideoShareTest()
        {
            // TODO unit test for the property 'VideoShare'
        }
        /// <summary>
        /// Test the property 'ContentShare'
        /// </summary>
        [Test]
        public void ContentShareTest()
        {
            // TODO unit test for the property 'ContentShare'
        }
        /// <summary>
        /// Test the property 'LiveRecording'
        /// </summary>
        [Test]
        public void LiveRecordingTest()
        {
            // TODO unit test for the property 'LiveRecording'
        }
        /// <summary>
        /// Test the property 'LiveVideoShare'
        /// </summary>
        [Test]
        public void LiveVideoShareTest()
        {
            // TODO unit test for the property 'LiveVideoShare'
        }
        /// <summary>
        /// Test the property 'LiveContentShare'
        /// </summary>
        [Test]
        public void LiveContentShareTest()
        {
            // TODO unit test for the property 'LiveContentShare'
        }
        /// <summary>
        /// Test the property 'LargeMeeting'
        /// </summary>
        [Test]
        public void LargeMeetingTest()
        {
            // TODO unit test for the property 'LargeMeeting'
        }
        /// <summary>
        /// Test the property 'RoiDistance'
        /// </summary>
        [Test]
        public void RoiDistanceTest()
        {
            // TODO unit test for the property 'RoiDistance'
        }
        /// <summary>
        /// Test the property 'Mpls'
        /// </summary>
        [Test]
        public void MplsTest()
        {
            // TODO unit test for the property 'Mpls'
        }
        /// <summary>
        /// Test the property 'Id'
        /// </summary>
        [Test]
        public void IdTest()
        {
            // TODO unit test for the property 'Id'
        }

    }

}
