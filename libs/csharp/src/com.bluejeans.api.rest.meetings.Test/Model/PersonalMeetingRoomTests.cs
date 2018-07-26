/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */


using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Model;
using com.bluejeans.api.rest.meetings.Client;
using System.Reflection;
using Newtonsoft.Json;

namespace com.bluejeans.api.rest.meetings.Test
{
    /// <summary>
    ///  Class for testing PersonalMeetingRoom
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class PersonalMeetingRoomTests
    {
        // TODO uncomment below to declare an instance variable for PersonalMeetingRoom
        //private PersonalMeetingRoom instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of PersonalMeetingRoom
            //instance = new PersonalMeetingRoom();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of PersonalMeetingRoom
        /// </summary>
        [Test]
        public void PersonalMeetingRoomInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" PersonalMeetingRoom
            //Assert.IsInstanceOfType<PersonalMeetingRoom> (instance, "variable 'instance' is a PersonalMeetingRoom");
        }


        /// <summary>
        /// Test the property 'Id'
        /// </summary>
        [Test]
        public void IdTest()
        {
            // TODO unit test for the property 'Id'
        }
        /// <summary>
        /// Test the property 'Uuid'
        /// </summary>
        [Test]
        public void UuidTest()
        {
            // TODO unit test for the property 'Uuid'
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
        /// Test the property 'Description'
        /// </summary>
        [Test]
        public void DescriptionTest()
        {
            // TODO unit test for the property 'Description'
        }
        /// <summary>
        /// Test the property 'Start'
        /// </summary>
        [Test]
        public void StartTest()
        {
            // TODO unit test for the property 'Start'
        }
        /// <summary>
        /// Test the property 'End'
        /// </summary>
        [Test]
        public void EndTest()
        {
            // TODO unit test for the property 'End'
        }
        /// <summary>
        /// Test the property 'Timezone'
        /// </summary>
        [Test]
        public void TimezoneTest()
        {
            // TODO unit test for the property 'Timezone'
        }
        /// <summary>
        /// Test the property 'AdvancedMeetingOptions'
        /// </summary>
        [Test]
        public void AdvancedMeetingOptionsTest()
        {
            // TODO unit test for the property 'AdvancedMeetingOptions'
        }
        /// <summary>
        /// Test the property 'NotificationUrl'
        /// </summary>
        [Test]
        public void NotificationUrlTest()
        {
            // TODO unit test for the property 'NotificationUrl'
        }
        /// <summary>
        /// Test the property 'NotificationData'
        /// </summary>
        [Test]
        public void NotificationDataTest()
        {
            // TODO unit test for the property 'NotificationData'
        }
        /// <summary>
        /// Test the property 'Moderator'
        /// </summary>
        [Test]
        public void ModeratorTest()
        {
            // TODO unit test for the property 'Moderator'
        }
        /// <summary>
        /// Test the property 'NumericMeetingId'
        /// </summary>
        [Test]
        public void NumericMeetingIdTest()
        {
            // TODO unit test for the property 'NumericMeetingId'
        }
        /// <summary>
        /// Test the property 'AttendeePasscode'
        /// </summary>
        [Test]
        public void AttendeePasscodeTest()
        {
            // TODO unit test for the property 'AttendeePasscode'
        }
        /// <summary>
        /// Test the property 'AddAttendeePasscode'
        /// </summary>
        [Test]
        public void AddAttendeePasscodeTest()
        {
            // TODO unit test for the property 'AddAttendeePasscode'
        }
        /// <summary>
        /// Test the property 'Deleted'
        /// </summary>
        [Test]
        public void DeletedTest()
        {
            // TODO unit test for the property 'Deleted'
        }
        /// <summary>
        /// Test the property 'Allow720p'
        /// </summary>
        [Test]
        public void Allow720pTest()
        {
            // TODO unit test for the property 'Allow720p'
        }
        /// <summary>
        /// Test the property 'Status'
        /// </summary>
        [Test]
        public void StatusTest()
        {
            // TODO unit test for the property 'Status'
        }
        /// <summary>
        /// Test the property 'Locked'
        /// </summary>
        [Test]
        public void LockedTest()
        {
            // TODO unit test for the property 'Locked'
        }
        /// <summary>
        /// Test the property 'SequenceNumber'
        /// </summary>
        [Test]
        public void SequenceNumberTest()
        {
            // TODO unit test for the property 'SequenceNumber'
        }
        /// <summary>
        /// Test the property 'IcsUid'
        /// </summary>
        [Test]
        public void IcsUidTest()
        {
            // TODO unit test for the property 'IcsUid'
        }
        /// <summary>
        /// Test the property 'EndPointType'
        /// </summary>
        [Test]
        public void EndPointTypeTest()
        {
            // TODO unit test for the property 'EndPointType'
        }
        /// <summary>
        /// Test the property 'EndPointVersion'
        /// </summary>
        [Test]
        public void EndPointVersionTest()
        {
            // TODO unit test for the property 'EndPointVersion'
        }
        /// <summary>
        /// Test the property 'Attendees'
        /// </summary>
        [Test]
        public void AttendeesTest()
        {
            // TODO unit test for the property 'Attendees'
        }
        /// <summary>
        /// Test the property 'IsLargeMeeting'
        /// </summary>
        [Test]
        public void IsLargeMeetingTest()
        {
            // TODO unit test for the property 'IsLargeMeeting'
        }
        /// <summary>
        /// Test the property 'Created'
        /// </summary>
        [Test]
        public void CreatedTest()
        {
            // TODO unit test for the property 'Created'
        }
        /// <summary>
        /// Test the property 'LastModified'
        /// </summary>
        [Test]
        public void LastModifiedTest()
        {
            // TODO unit test for the property 'LastModified'
        }
        /// <summary>
        /// Test the property 'IsExpired'
        /// </summary>
        [Test]
        public void IsExpiredTest()
        {
            // TODO unit test for the property 'IsExpired'
        }
        /// <summary>
        /// Test the property 'ParentMeetingId'
        /// </summary>
        [Test]
        public void ParentMeetingIdTest()
        {
            // TODO unit test for the property 'ParentMeetingId'
        }
        /// <summary>
        /// Test the property 'ParentMeetingUUID'
        /// </summary>
        [Test]
        public void ParentMeetingUUIDTest()
        {
            // TODO unit test for the property 'ParentMeetingUUID'
        }
        /// <summary>
        /// Test the property 'NextOccurrence'
        /// </summary>
        [Test]
        public void NextOccurrenceTest()
        {
            // TODO unit test for the property 'NextOccurrence'
        }
        /// <summary>
        /// Test the property 'TimelessMeeting'
        /// </summary>
        [Test]
        public void TimelessMeetingTest()
        {
            // TODO unit test for the property 'TimelessMeeting'
        }
        /// <summary>
        /// Test the property 'EndlessMeeting'
        /// </summary>
        [Test]
        public void EndlessMeetingTest()
        {
            // TODO unit test for the property 'EndlessMeeting'
        }
        /// <summary>
        /// Test the property 'First'
        /// </summary>
        [Test]
        public void FirstTest()
        {
            // TODO unit test for the property 'First'
        }
        /// <summary>
        /// Test the property 'Last'
        /// </summary>
        [Test]
        public void LastTest()
        {
            // TODO unit test for the property 'Last'
        }
        /// <summary>
        /// Test the property 'Next'
        /// </summary>
        [Test]
        public void NextTest()
        {
            // TODO unit test for the property 'Next'
        }
        /// <summary>
        /// Test the property 'NextStart'
        /// </summary>
        [Test]
        public void NextStartTest()
        {
            // TODO unit test for the property 'NextStart'
        }
        /// <summary>
        /// Test the property 'NextEnd'
        /// </summary>
        [Test]
        public void NextEndTest()
        {
            // TODO unit test for the property 'NextEnd'
        }
        /// <summary>
        /// Test the property 'IsPersonalMeeting'
        /// </summary>
        [Test]
        public void IsPersonalMeetingTest()
        {
            // TODO unit test for the property 'IsPersonalMeeting'
        }
        /// <summary>
        /// Test the property 'InviteeJoinOption'
        /// </summary>
        [Test]
        public void InviteeJoinOptionTest()
        {
            // TODO unit test for the property 'InviteeJoinOption'
        }

    }

}
