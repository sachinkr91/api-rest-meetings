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
    ///  Class for testing EndpointsInner
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class EndpointsInnerTests
    {
        // TODO uncomment below to declare an instance variable for EndpointsInner
        //private EndpointsInner instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of EndpointsInner
            //instance = new EndpointsInner();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of EndpointsInner
        /// </summary>
        [Test]
        public void EndpointsInnerInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" EndpointsInner
            //Assert.IsInstanceOfType<EndpointsInner> (instance, "variable 'instance' is a EndpointsInner");
        }

        /// <summary>
        /// Test the property 'Meetingid'
        /// </summary>
        [Test]
        public void MeetingidTest()
        {
            // TODO unit test for the property 'Meetingid'
        }
        /// <summary>
        /// Test the property 'Name'
        /// </summary>
        [Test]
        public void NameTest()
        {
            // TODO unit test for the property 'Name'
        }
        /// <summary>
        /// Test the property 'CallQuality'
        /// </summary>
        [Test]
        public void CallQualityTest()
        {
            // TODO unit test for the property 'CallQuality'
        }
        /// <summary>
        /// Test the property 'Leader'
        /// </summary>
        [Test]
        public void LeaderTest()
        {
            // TODO unit test for the property 'Leader'
        }
        /// <summary>
        /// Test the property 'Callguid'
        /// </summary>
        [Test]
        public void CallguidTest()
        {
            // TODO unit test for the property 'Callguid'
        }
        /// <summary>
        /// Test the property 'Endpoint'
        /// </summary>
        [Test]
        public void EndpointTest()
        {
            // TODO unit test for the property 'Endpoint'
        }
        /// <summary>
        /// Test the property 'TalkDetected'
        /// </summary>
        [Test]
        public void TalkDetectedTest()
        {
            // TODO unit test for the property 'TalkDetected'
        }
        /// <summary>
        /// Test the property 'SecureCall'
        /// </summary>
        [Test]
        public void SecureCallTest()
        {
            // TODO unit test for the property 'SecureCall'
        }
        /// <summary>
        /// Test the property 'Layout'
        /// </summary>
        [Test]
        public void LayoutTest()
        {
            // TODO unit test for the property 'Layout'
        }
        /// <summary>
        /// Test the property 'SubLayout'
        /// </summary>
        [Test]
        public void SubLayoutTest()
        {
            // TODO unit test for the property 'SubLayout'
        }
        /// <summary>
        /// Test the property 'VideoRecv'
        /// </summary>
        [Test]
        public void VideoRecvTest()
        {
            // TODO unit test for the property 'VideoRecv'
        }
        /// <summary>
        /// Test the property 'VideoRecvLocalMute'
        /// </summary>
        [Test]
        public void VideoRecvLocalMuteTest()
        {
            // TODO unit test for the property 'VideoRecvLocalMute'
        }
        /// <summary>
        /// Test the property 'VideoRecvRemoteMute'
        /// </summary>
        [Test]
        public void VideoRecvRemoteMuteTest()
        {
            // TODO unit test for the property 'VideoRecvRemoteMute'
        }
        /// <summary>
        /// Test the property 'AudioRecv'
        /// </summary>
        [Test]
        public void AudioRecvTest()
        {
            // TODO unit test for the property 'AudioRecv'
        }
        /// <summary>
        /// Test the property 'AudioRecvLocalMute'
        /// </summary>
        [Test]
        public void AudioRecvLocalMuteTest()
        {
            // TODO unit test for the property 'AudioRecvLocalMute'
        }
        /// <summary>
        /// Test the property 'AudioRecvRemoteMute'
        /// </summary>
        [Test]
        public void AudioRecvRemoteMuteTest()
        {
            // TODO unit test for the property 'AudioRecvRemoteMute'
        }
        /// <summary>
        /// Test the property 'AudioRecvCodec'
        /// </summary>
        [Test]
        public void AudioRecvCodecTest()
        {
            // TODO unit test for the property 'AudioRecvCodec'
        }
        /// <summary>
        /// Test the property 'AudioSendCodec'
        /// </summary>
        [Test]
        public void AudioSendCodecTest()
        {
            // TODO unit test for the property 'AudioSendCodec'
        }
        /// <summary>
        /// Test the property 'VideoRecvCodec'
        /// </summary>
        [Test]
        public void VideoRecvCodecTest()
        {
            // TODO unit test for the property 'VideoRecvCodec'
        }
        /// <summary>
        /// Test the property 'VideoRecvHeight'
        /// </summary>
        [Test]
        public void VideoRecvHeightTest()
        {
            // TODO unit test for the property 'VideoRecvHeight'
        }
        /// <summary>
        /// Test the property 'VideoRecvWidth'
        /// </summary>
        [Test]
        public void VideoRecvWidthTest()
        {
            // TODO unit test for the property 'VideoRecvWidth'
        }
        /// <summary>
        /// Test the property 'VideoSendCodec'
        /// </summary>
        [Test]
        public void VideoSendCodecTest()
        {
            // TODO unit test for the property 'VideoSendCodec'
        }
        /// <summary>
        /// Test the property 'VideoSendHeight'
        /// </summary>
        [Test]
        public void VideoSendHeightTest()
        {
            // TODO unit test for the property 'VideoSendHeight'
        }
        /// <summary>
        /// Test the property 'VideoSendWidth'
        /// </summary>
        [Test]
        public void VideoSendWidthTest()
        {
            // TODO unit test for the property 'VideoSendWidth'
        }
        /// <summary>
        /// Test the property 'Visibility'
        /// </summary>
        [Test]
        public void VisibilityTest()
        {
            // TODO unit test for the property 'Visibility'
        }
        /// <summary>
        /// Test the property 'ChatEndpointGuid'
        /// </summary>
        [Test]
        public void ChatEndpointGuidTest()
        {
            // TODO unit test for the property 'ChatEndpointGuid'
        }
        /// <summary>
        /// Test the property 'EndpointGuid'
        /// </summary>
        [Test]
        public void EndpointGuidTest()
        {
            // TODO unit test for the property 'EndpointGuid'
        }
        /// <summary>
        /// Test the property 'RDCVersion'
        /// </summary>
        [Test]
        public void RDCVersionTest()
        {
            // TODO unit test for the property 'RDCVersion'
        }
        /// <summary>
        /// Test the property 'RDCControllerCapable'
        /// </summary>
        [Test]
        public void RDCControllerCapableTest()
        {
            // TODO unit test for the property 'RDCControllerCapable'
        }
        /// <summary>
        /// Test the property 'RDCControlleeCapable'
        /// </summary>
        [Test]
        public void RDCControlleeCapableTest()
        {
            // TODO unit test for the property 'RDCControlleeCapable'
        }
        /// <summary>
        /// Test the property 'Connections'
        /// </summary>
        [Test]
        public void ConnectionsTest()
        {
            // TODO unit test for the property 'Connections'
        }

    }

}
