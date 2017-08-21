/* 
 * BlueJeans onVideo REST API
 *
 *  Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you should be able to quickly integrate **BlueJeans** video administration into your applications.   ## Getting Started Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact [BlueJeans Support](mailto:Support@BlueJeans.com) for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br /> ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. ## About onVideo Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. 
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

using System;
using System.IO;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Reflection;
using RestSharp;
using NUnit.Framework;

using com.bluejeans.api.rest.onvideo.Client;
using com.bluejeans.api.rest.onvideo.Api;
using com.bluejeans.api.rest.onvideo.Model;

namespace com.bluejeans.api.rest.onvideo.Test
{
    /// <summary>
    ///  Class for testing CommandCenterApi
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    [TestFixture]
    public class CommandCenterApiTests
    {
        private CommandCenterApi instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new CommandCenterApi();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of CommandCenterApi
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            // TODO uncomment below to test 'IsInstanceOfType' CommandCenterApi
            //Assert.IsInstanceOfType(typeof(CommandCenterApi), instance, "instance is a CommandCenterApi");
        }

        
        /// <summary>
        /// Test GetEndpointDistribution
        /// </summary>
        [Test]
        public void GetEndpointDistributionTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string filter = null;
            //var response = instance.GetEndpointDistribution(enterpriseId, filter);
            //Assert.IsInstanceOf<AnalyticsEndpointDistribution> (response, "response is AnalyticsEndpointDistribution");
        }
        
        /// <summary>
        /// Test GetFeedbackComments
        /// </summary>
        [Test]
        public void GetFeedbackCommentsTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string start = null;
            //string end = null;
            //var response = instance.GetFeedbackComments(enterpriseId, start, end);
            //Assert.IsInstanceOf<AnalyticsFeedbackComments> (response, "response is AnalyticsFeedbackComments");
        }
        
        /// <summary>
        /// Test GetFeedbackCount
        /// </summary>
        [Test]
        public void GetFeedbackCountTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string start = null;
            //string end = null;
            //var response = instance.GetFeedbackCount(enterpriseId, start, end);
            //Assert.IsInstanceOf<AnalyticsFeedbackScores> (response, "response is AnalyticsFeedbackScores");
        }
        
        /// <summary>
        /// Test GetMeetingLiveByEnterprise
        /// </summary>
        [Test]
        public void GetMeetingLiveByEnterpriseTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string meetingUuid = null;
            //var response = instance.GetMeetingLiveByEnterprise(enterpriseId, meetingUuid);
            //Assert.IsInstanceOf<MeetingExtendedIndigo> (response, "response is MeetingExtendedIndigo");
        }
        
        /// <summary>
        /// Test GetMeetingPastByEnterprise
        /// </summary>
        [Test]
        public void GetMeetingPastByEnterpriseTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string meetingUuid = null;
            //bool? includeEndpoints = null;
            //var response = instance.GetMeetingPastByEnterprise(enterpriseId, meetingUuid, includeEndpoints);
            //Assert.IsInstanceOf<MeetingExtendedIndigo> (response, "response is MeetingExtendedIndigo");
        }
        
        /// <summary>
        /// Test GetMeetingPastByUser
        /// </summary>
        [Test]
        public void GetMeetingPastByUserTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? userId = null;
            //string meetingUuid = null;
            //var response = instance.GetMeetingPastByUser(userId, meetingUuid);
            //Assert.IsInstanceOf<MeetingExtendedIndigo> (response, "response is MeetingExtendedIndigo");
        }
        
        /// <summary>
        /// Test GetMeetingUsage
        /// </summary>
        [Test]
        public void GetMeetingUsageTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string clientTZ = null;
            //string filter = null;
            //var response = instance.GetMeetingUsage(enterpriseId, clientTZ, filter);
            //Assert.IsInstanceOf<AnalyticsUsage> (response, "response is AnalyticsUsage");
        }
        
        /// <summary>
        /// Test GetMeetingsLiveByEnterprise
        /// </summary>
        [Test]
        public void GetMeetingsLiveByEnterpriseTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //var response = instance.GetMeetingsLiveByEnterprise(enterpriseId);
            //Assert.IsInstanceOf<MeetingIndigoList> (response, "response is MeetingIndigoList");
        }
        
        /// <summary>
        /// Test GetMeetingsPastByEnterprise
        /// </summary>
        [Test]
        public void GetMeetingsPastByEnterpriseTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //int? offset = null;
            //int? limit = null;
            //string filter = null;
            //var response = instance.GetMeetingsPastByEnterprise(enterpriseId, offset, limit, filter);
            //Assert.IsInstanceOf<MeetingIndigoList> (response, "response is MeetingIndigoList");
        }
        
        /// <summary>
        /// Test GetMeetingsPastByUser
        /// </summary>
        [Test]
        public void GetMeetingsPastByUserTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? userId = null;
            //var response = instance.GetMeetingsPastByUser(userId);
            //Assert.IsInstanceOf<MeetingIndigoList> (response, "response is MeetingIndigoList");
        }
        
        /// <summary>
        /// Test GetRoiRanges
        /// </summary>
        [Test]
        public void GetRoiRangesTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string filter = null;
            //var response = instance.GetRoiRanges(enterpriseId, filter);
            //Assert.IsInstanceOf<AnalyticsRoiData> (response, "response is AnalyticsRoiData");
        }
        
        /// <summary>
        /// Test GetTopUsers
        /// </summary>
        [Test]
        public void GetTopUsersTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? enterpriseId = null;
            //string filter = null;
            //var response = instance.GetTopUsers(enterpriseId, filter);
            //Assert.IsInstanceOf<AnalyticsTopUsers> (response, "response is AnalyticsTopUsers");
        }
        
    }

}
