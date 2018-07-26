/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = com.bluejeans.api.rest.meetings.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.meetings.Model
{
    /// <summary>
    /// EndpointIndigoSummaryStats
    /// </summary>
    [DataContract]
    public partial class EndpointIndigoSummaryStats :  IEquatable<EndpointIndigoSummaryStats>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="EndpointIndigoSummaryStats" /> class.
        /// </summary>
        /// <param name="audioRecvCodec">audioRecvCodec.</param>
        /// <param name="audioSendCodec">audioSendCodec.</param>
        /// <param name="contentRecv">contentRecv.</param>
        /// <param name="contentSend">contentSend.</param>
        /// <param name="talkDetected">talkDetected.</param>
        /// <param name="sessionRelay">sessionRelay.</param>
        /// <param name="sessionInRelay">sessionInRelay.</param>
        /// <param name="sessionOutRelay">sessionOutRelay.</param>
        /// <param name="audioRtpRelay">audioRtpRelay.</param>
        /// <param name="callRate">callRate.</param>
        /// <param name="cumulLossPercentAI">cumulLossPercentAI.</param>
        /// <param name="cumulLossPercentAO">cumulLossPercentAO.</param>
        /// <param name="cumulLossPercentVI">cumulLossPercentVI.</param>
        /// <param name="cumulLossPercentVO">cumulLossPercentVO.</param>
        /// <param name="cumulLossPercentVIC">cumulLossPercentVIC.</param>
        /// <param name="cumulLossPercentVOC">cumulLossPercentVOC.</param>
        /// <param name="cumulLossAI">cumulLossAI.</param>
        /// <param name="cumulLossAO">cumulLossAO.</param>
        /// <param name="cumulLossVI">cumulLossVI.</param>
        /// <param name="cumulLossVO">cumulLossVO.</param>
        /// <param name="cumulLossVIC">cumulLossVIC.</param>
        /// <param name="cumulLossVOC">cumulLossVOC.</param>
        /// <param name="discontinuityCount">discontinuityCount.</param>
        /// <param name="droppedPacketsAI">droppedPacketsAI.</param>
        /// <param name="droppedPacketsVI">droppedPacketsVI.</param>
        /// <param name="droppedPacketsVIC">droppedPacketsVIC.</param>
        /// <param name="mixUnderRunsAI">mixUnderRunsAI.</param>
        /// <param name="networkAvgLossAI">networkAvgLossAI.</param>
        /// <param name="networkAvgLossAO">networkAvgLossAO.</param>
        /// <param name="networkAvgLossVI">networkAvgLossVI.</param>
        /// <param name="networkAvgLossVO">networkAvgLossVO.</param>
        /// <param name="networkCumulLossAI">networkCumulLossAI.</param>
        /// <param name="networkCumulLossAO">networkCumulLossAO.</param>
        /// <param name="networkCumulLossVI">networkCumulLossVI.</param>
        /// <param name="networkCumulLossVO">networkCumulLossVO.</param>
        /// <param name="networkLossAI">networkLossAI.</param>
        /// <param name="networkLossAO">networkLossAO.</param>
        /// <param name="networkLossVI">networkLossVI.</param>
        /// <param name="networkLossVO">networkLossVO.</param>
        /// <param name="callQualityMin">callQualityMin.</param>
        /// <param name="callQualityMax">callQualityMax.</param>
        /// <param name="callQualityAvg">callQualityAvg.</param>
        /// <param name="fpsMinVI">fpsMinVI.</param>
        /// <param name="fpsMinVO">fpsMinVO.</param>
        /// <param name="fpsMinVIC">fpsMinVIC.</param>
        /// <param name="fpsMinVOC">fpsMinVOC.</param>
        /// <param name="fpsMaxVI">fpsMaxVI.</param>
        /// <param name="fpsMaxVO">fpsMaxVO.</param>
        /// <param name="fpsMaxVIC">fpsMaxVIC.</param>
        /// <param name="fpsMaxVOC">fpsMaxVOC.</param>
        /// <param name="fpsAvgVI">fpsAvgVI.</param>
        /// <param name="fpsAvgVO">fpsAvgVO.</param>
        /// <param name="fpsAvgVIC">fpsAvgVIC.</param>
        /// <param name="fpsAvgVOC">fpsAvgVOC.</param>
        /// <param name="bitrateMinAI">bitrateMinAI.</param>
        /// <param name="bitrateMinAO">bitrateMinAO.</param>
        /// <param name="bitrateMinVI">bitrateMinVI.</param>
        /// <param name="bitrateMinVO">bitrateMinVO.</param>
        /// <param name="bitrateMinVIC">bitrateMinVIC.</param>
        /// <param name="bitrateMinVOC">bitrateMinVOC.</param>
        /// <param name="bitrateMaxAI">bitrateMaxAI.</param>
        /// <param name="bitrateMaxAO">bitrateMaxAO.</param>
        /// <param name="bitrateMaxVI">bitrateMaxVI.</param>
        /// <param name="bitrateMaxVO">bitrateMaxVO.</param>
        /// <param name="bitrateMaxVIC">bitrateMaxVIC.</param>
        /// <param name="bitrateMaxVOC">bitrateMaxVOC.</param>
        /// <param name="bitrateAvgAI">bitrateAvgAI.</param>
        /// <param name="bitrateAvgAO">bitrateAvgAO.</param>
        /// <param name="bitrateAvgVI">bitrateAvgVI.</param>
        /// <param name="bitrateAvgVO">bitrateAvgVO.</param>
        /// <param name="bitrateAvgVIC">bitrateAvgVIC.</param>
        /// <param name="bitrateAvgVOC">bitrateAvgVOC.</param>
        /// <param name="jitterMinAI">jitterMinAI.</param>
        /// <param name="jitterMinAO">jitterMinAO.</param>
        /// <param name="jitterMinVI">jitterMinVI.</param>
        /// <param name="jitterMinVO">jitterMinVO.</param>
        /// <param name="jitterMinVIC">jitterMinVIC.</param>
        /// <param name="jitterMinVOC">jitterMinVOC.</param>
        /// <param name="jitterMaxAI">jitterMaxAI.</param>
        /// <param name="jitterMaxAO">jitterMaxAO.</param>
        /// <param name="jitterMaxVI">jitterMaxVI.</param>
        /// <param name="jitterMaxVO">jitterMaxVO.</param>
        /// <param name="jitterMaxVIC">jitterMaxVIC.</param>
        /// <param name="jitterMaxVOC">jitterMaxVOC.</param>
        /// <param name="jitterAvgAI">jitterAvgAI.</param>
        /// <param name="jitterAvgAO">jitterAvgAO.</param>
        /// <param name="jitterAvgVI">jitterAvgVI.</param>
        /// <param name="jitterAvgVO">jitterAvgVO.</param>
        /// <param name="jitterAvgVIC">jitterAvgVIC.</param>
        /// <param name="jitterAvgVOC">jitterAvgVOC.</param>
        /// <param name="maxJitterMinAI">maxJitterMinAI.</param>
        /// <param name="maxJitterMinVI">maxJitterMinVI.</param>
        /// <param name="maxJitterMinVIC">maxJitterMinVIC.</param>
        /// <param name="maxJitterMaxAI">maxJitterMaxAI.</param>
        /// <param name="maxJitterMaxVI">maxJitterMaxVI.</param>
        /// <param name="maxJitterMaxVIC">maxJitterMaxVIC.</param>
        /// <param name="maxJitterAvgAI">maxJitterAvgAI.</param>
        /// <param name="maxJitterAvgVI">maxJitterAvgVI.</param>
        /// <param name="maxJitterAvgVIC">maxJitterAvgVIC.</param>
        /// <param name="videoRecvHeightMin">videoRecvHeightMin.</param>
        /// <param name="videoRecvHeightMax">videoRecvHeightMax.</param>
        /// <param name="videoRecvWidthMin">videoRecvWidthMin.</param>
        /// <param name="videoRecvWidthMax">videoRecvWidthMax.</param>
        /// <param name="videoSendHeightMin">videoSendHeightMin.</param>
        /// <param name="videoSendHeightMax">videoSendHeightMax.</param>
        /// <param name="videoSendWidthMin">videoSendWidthMin.</param>
        /// <param name="videoSendWidthMax">videoSendWidthMax.</param>
        /// <param name="contentRecvHeightMin">contentRecvHeightMin.</param>
        /// <param name="contentRecvHeightMax">contentRecvHeightMax.</param>
        /// <param name="contentRecvWidthMin">contentRecvWidthMin.</param>
        /// <param name="contentRecvWidthMax">contentRecvWidthMax.</param>
        /// <param name="contentSendHeightMin">contentSendHeightMin.</param>
        /// <param name="contentSendHeightMax">contentSendHeightMax.</param>
        /// <param name="contentSendWidthMin">contentSendWidthMin.</param>
        /// <param name="contentSendWidthMax">contentSendWidthMax.</param>
        /// <param name="roundTripDelayMin">roundTripDelayMin.</param>
        /// <param name="roundTripDelayMax">roundTripDelayMax.</param>
        /// <param name="roundTripDelayAvg">roundTripDelayAvg.</param>
        /// <param name="rfactorMin">rfactorMin.</param>
        /// <param name="rfactorMax">rfactorMax.</param>
        /// <param name="rfactorAvg">rfactorAvg.</param>
        /// <param name="processCpuLoadMin">processCpuLoadMin.</param>
        /// <param name="processCpuLoadMax">processCpuLoadMax.</param>
        /// <param name="processCpuLoadAvg">processCpuLoadAvg.</param>
        /// <param name="systemCpuLoadMin">systemCpuLoadMin.</param>
        /// <param name="systemCpuLoadMax">systemCpuLoadMax.</param>
        /// <param name="systemCpuLoadAvg">systemCpuLoadAvg.</param>
        /// <param name="wifiRecvStrengthMin">wifiRecvStrengthMin.</param>
        /// <param name="wifiRecvStrengthMax">wifiRecvStrengthMax.</param>
        /// <param name="wifiRecvStrengthAvg">wifiRecvStrengthAvg.</param>
        /// <param name="keyFrameRateAvgVI">keyFrameRateAvgVI.</param>
        /// <param name="keyFrameRateAvgVO">keyFrameRateAvgVO.</param>
        /// <param name="keyFrameRateAvgVIC">keyFrameRateAvgVIC.</param>
        /// <param name="keyFrameRateAvgVOC">keyFrameRateAvgVOC.</param>
        /// <param name="keyFrameRateMinVI">keyFrameRateMinVI.</param>
        /// <param name="keyFrameRateMinVO">keyFrameRateMinVO.</param>
        /// <param name="keyFrameRateMinVIC">keyFrameRateMinVIC.</param>
        /// <param name="keyFrameRateMinVOC">keyFrameRateMinVOC.</param>
        /// <param name="keyFrameRateMaxVI">keyFrameRateMaxVI.</param>
        /// <param name="keyFrameRateMaxVO">keyFrameRateMaxVO.</param>
        /// <param name="keyFrameRateMaxVIC">keyFrameRateMaxVIC.</param>
        /// <param name="keyFrameRateMaxVOC">keyFrameRateMaxVOC.</param>
        /// <param name="roundTripDelayAvgVO">roundTripDelayAvgVO.</param>
        /// <param name="roundTripDelayAvgVOC">roundTripDelayAvgVOC.</param>
        /// <param name="roundTripDelayAvgAO">roundTripDelayAvgAO.</param>
        public EndpointIndigoSummaryStats(string audioRecvCodec = default(string), string audioSendCodec = default(string), bool? contentRecv = default(bool?), bool? contentSend = default(bool?), bool? talkDetected = default(bool?), bool? sessionRelay = default(bool?), bool? sessionInRelay = default(bool?), bool? sessionOutRelay = default(bool?), bool? audioRtpRelay = default(bool?), int? callRate = default(int?), decimal? cumulLossPercentAI = default(decimal?), decimal? cumulLossPercentAO = default(decimal?), decimal? cumulLossPercentVI = default(decimal?), decimal? cumulLossPercentVO = default(decimal?), decimal? cumulLossPercentVIC = default(decimal?), decimal? cumulLossPercentVOC = default(decimal?), decimal? cumulLossAI = default(decimal?), decimal? cumulLossAO = default(decimal?), decimal? cumulLossVI = default(decimal?), decimal? cumulLossVO = default(decimal?), decimal? cumulLossVIC = default(decimal?), decimal? cumulLossVOC = default(decimal?), decimal? discontinuityCount = default(decimal?), decimal? droppedPacketsAI = default(decimal?), decimal? droppedPacketsVI = default(decimal?), decimal? droppedPacketsVIC = default(decimal?), decimal? mixUnderRunsAI = default(decimal?), decimal? networkAvgLossAI = default(decimal?), decimal? networkAvgLossAO = default(decimal?), decimal? networkAvgLossVI = default(decimal?), decimal? networkAvgLossVO = default(decimal?), decimal? networkCumulLossAI = default(decimal?), decimal? networkCumulLossAO = default(decimal?), decimal? networkCumulLossVI = default(decimal?), decimal? networkCumulLossVO = default(decimal?), decimal? networkLossAI = default(decimal?), decimal? networkLossAO = default(decimal?), decimal? networkLossVI = default(decimal?), decimal? networkLossVO = default(decimal?), decimal? callQualityMin = default(decimal?), decimal? callQualityMax = default(decimal?), decimal? callQualityAvg = default(decimal?), decimal? fpsMinVI = default(decimal?), decimal? fpsMinVO = default(decimal?), decimal? fpsMinVIC = default(decimal?), decimal? fpsMinVOC = default(decimal?), decimal? fpsMaxVI = default(decimal?), decimal? fpsMaxVO = default(decimal?), decimal? fpsMaxVIC = default(decimal?), decimal? fpsMaxVOC = default(decimal?), decimal? fpsAvgVI = default(decimal?), decimal? fpsAvgVO = default(decimal?), decimal? fpsAvgVIC = default(decimal?), decimal? fpsAvgVOC = default(decimal?), decimal? bitrateMinAI = default(decimal?), decimal? bitrateMinAO = default(decimal?), decimal? bitrateMinVI = default(decimal?), decimal? bitrateMinVO = default(decimal?), decimal? bitrateMinVIC = default(decimal?), decimal? bitrateMinVOC = default(decimal?), decimal? bitrateMaxAI = default(decimal?), decimal? bitrateMaxAO = default(decimal?), decimal? bitrateMaxVI = default(decimal?), decimal? bitrateMaxVO = default(decimal?), decimal? bitrateMaxVIC = default(decimal?), decimal? bitrateMaxVOC = default(decimal?), decimal? bitrateAvgAI = default(decimal?), decimal? bitrateAvgAO = default(decimal?), decimal? bitrateAvgVI = default(decimal?), decimal? bitrateAvgVO = default(decimal?), decimal? bitrateAvgVIC = default(decimal?), decimal? bitrateAvgVOC = default(decimal?), decimal? jitterMinAI = default(decimal?), decimal? jitterMinAO = default(decimal?), decimal? jitterMinVI = default(decimal?), decimal? jitterMinVO = default(decimal?), decimal? jitterMinVIC = default(decimal?), decimal? jitterMinVOC = default(decimal?), decimal? jitterMaxAI = default(decimal?), decimal? jitterMaxAO = default(decimal?), decimal? jitterMaxVI = default(decimal?), decimal? jitterMaxVO = default(decimal?), decimal? jitterMaxVIC = default(decimal?), decimal? jitterMaxVOC = default(decimal?), decimal? jitterAvgAI = default(decimal?), decimal? jitterAvgAO = default(decimal?), decimal? jitterAvgVI = default(decimal?), decimal? jitterAvgVO = default(decimal?), decimal? jitterAvgVIC = default(decimal?), decimal? jitterAvgVOC = default(decimal?), decimal? maxJitterMinAI = default(decimal?), decimal? maxJitterMinVI = default(decimal?), decimal? maxJitterMinVIC = default(decimal?), decimal? maxJitterMaxAI = default(decimal?), decimal? maxJitterMaxVI = default(decimal?), decimal? maxJitterMaxVIC = default(decimal?), decimal? maxJitterAvgAI = default(decimal?), decimal? maxJitterAvgVI = default(decimal?), decimal? maxJitterAvgVIC = default(decimal?), decimal? videoRecvHeightMin = default(decimal?), decimal? videoRecvHeightMax = default(decimal?), decimal? videoRecvWidthMin = default(decimal?), decimal? videoRecvWidthMax = default(decimal?), decimal? videoSendHeightMin = default(decimal?), decimal? videoSendHeightMax = default(decimal?), decimal? videoSendWidthMin = default(decimal?), decimal? videoSendWidthMax = default(decimal?), decimal? contentRecvHeightMin = default(decimal?), decimal? contentRecvHeightMax = default(decimal?), decimal? contentRecvWidthMin = default(decimal?), decimal? contentRecvWidthMax = default(decimal?), decimal? contentSendHeightMin = default(decimal?), decimal? contentSendHeightMax = default(decimal?), decimal? contentSendWidthMin = default(decimal?), decimal? contentSendWidthMax = default(decimal?), decimal? roundTripDelayMin = default(decimal?), decimal? roundTripDelayMax = default(decimal?), decimal? roundTripDelayAvg = default(decimal?), decimal? rfactorMin = default(decimal?), decimal? rfactorMax = default(decimal?), decimal? rfactorAvg = default(decimal?), decimal? processCpuLoadMin = default(decimal?), decimal? processCpuLoadMax = default(decimal?), decimal? processCpuLoadAvg = default(decimal?), decimal? systemCpuLoadMin = default(decimal?), decimal? systemCpuLoadMax = default(decimal?), decimal? systemCpuLoadAvg = default(decimal?), decimal? wifiRecvStrengthMin = default(decimal?), decimal? wifiRecvStrengthMax = default(decimal?), decimal? wifiRecvStrengthAvg = default(decimal?), decimal? keyFrameRateAvgVI = default(decimal?), decimal? keyFrameRateAvgVO = default(decimal?), decimal? keyFrameRateAvgVIC = default(decimal?), decimal? keyFrameRateAvgVOC = default(decimal?), decimal? keyFrameRateMinVI = default(decimal?), decimal? keyFrameRateMinVO = default(decimal?), decimal? keyFrameRateMinVIC = default(decimal?), decimal? keyFrameRateMinVOC = default(decimal?), decimal? keyFrameRateMaxVI = default(decimal?), decimal? keyFrameRateMaxVO = default(decimal?), decimal? keyFrameRateMaxVIC = default(decimal?), decimal? keyFrameRateMaxVOC = default(decimal?), decimal? roundTripDelayAvgVO = default(decimal?), decimal? roundTripDelayAvgVOC = default(decimal?), decimal? roundTripDelayAvgAO = default(decimal?))
        {
            this.AudioRecvCodec = audioRecvCodec;
            this.AudioSendCodec = audioSendCodec;
            this.ContentRecv = contentRecv;
            this.ContentSend = contentSend;
            this.TalkDetected = talkDetected;
            this.SessionRelay = sessionRelay;
            this.SessionInRelay = sessionInRelay;
            this.SessionOutRelay = sessionOutRelay;
            this.AudioRtpRelay = audioRtpRelay;
            this.CallRate = callRate;
            this.CumulLossPercentAI = cumulLossPercentAI;
            this.CumulLossPercentAO = cumulLossPercentAO;
            this.CumulLossPercentVI = cumulLossPercentVI;
            this.CumulLossPercentVO = cumulLossPercentVO;
            this.CumulLossPercentVIC = cumulLossPercentVIC;
            this.CumulLossPercentVOC = cumulLossPercentVOC;
            this.CumulLossAI = cumulLossAI;
            this.CumulLossAO = cumulLossAO;
            this.CumulLossVI = cumulLossVI;
            this.CumulLossVO = cumulLossVO;
            this.CumulLossVIC = cumulLossVIC;
            this.CumulLossVOC = cumulLossVOC;
            this.DiscontinuityCount = discontinuityCount;
            this.DroppedPacketsAI = droppedPacketsAI;
            this.DroppedPacketsVI = droppedPacketsVI;
            this.DroppedPacketsVIC = droppedPacketsVIC;
            this.MixUnderRunsAI = mixUnderRunsAI;
            this.NetworkAvgLossAI = networkAvgLossAI;
            this.NetworkAvgLossAO = networkAvgLossAO;
            this.NetworkAvgLossVI = networkAvgLossVI;
            this.NetworkAvgLossVO = networkAvgLossVO;
            this.NetworkCumulLossAI = networkCumulLossAI;
            this.NetworkCumulLossAO = networkCumulLossAO;
            this.NetworkCumulLossVI = networkCumulLossVI;
            this.NetworkCumulLossVO = networkCumulLossVO;
            this.NetworkLossAI = networkLossAI;
            this.NetworkLossAO = networkLossAO;
            this.NetworkLossVI = networkLossVI;
            this.NetworkLossVO = networkLossVO;
            this.CallQualityMin = callQualityMin;
            this.CallQualityMax = callQualityMax;
            this.CallQualityAvg = callQualityAvg;
            this.FpsMinVI = fpsMinVI;
            this.FpsMinVO = fpsMinVO;
            this.FpsMinVIC = fpsMinVIC;
            this.FpsMinVOC = fpsMinVOC;
            this.FpsMaxVI = fpsMaxVI;
            this.FpsMaxVO = fpsMaxVO;
            this.FpsMaxVIC = fpsMaxVIC;
            this.FpsMaxVOC = fpsMaxVOC;
            this.FpsAvgVI = fpsAvgVI;
            this.FpsAvgVO = fpsAvgVO;
            this.FpsAvgVIC = fpsAvgVIC;
            this.FpsAvgVOC = fpsAvgVOC;
            this.BitrateMinAI = bitrateMinAI;
            this.BitrateMinAO = bitrateMinAO;
            this.BitrateMinVI = bitrateMinVI;
            this.BitrateMinVO = bitrateMinVO;
            this.BitrateMinVIC = bitrateMinVIC;
            this.BitrateMinVOC = bitrateMinVOC;
            this.BitrateMaxAI = bitrateMaxAI;
            this.BitrateMaxAO = bitrateMaxAO;
            this.BitrateMaxVI = bitrateMaxVI;
            this.BitrateMaxVO = bitrateMaxVO;
            this.BitrateMaxVIC = bitrateMaxVIC;
            this.BitrateMaxVOC = bitrateMaxVOC;
            this.BitrateAvgAI = bitrateAvgAI;
            this.BitrateAvgAO = bitrateAvgAO;
            this.BitrateAvgVI = bitrateAvgVI;
            this.BitrateAvgVO = bitrateAvgVO;
            this.BitrateAvgVIC = bitrateAvgVIC;
            this.BitrateAvgVOC = bitrateAvgVOC;
            this.JitterMinAI = jitterMinAI;
            this.JitterMinAO = jitterMinAO;
            this.JitterMinVI = jitterMinVI;
            this.JitterMinVO = jitterMinVO;
            this.JitterMinVIC = jitterMinVIC;
            this.JitterMinVOC = jitterMinVOC;
            this.JitterMaxAI = jitterMaxAI;
            this.JitterMaxAO = jitterMaxAO;
            this.JitterMaxVI = jitterMaxVI;
            this.JitterMaxVO = jitterMaxVO;
            this.JitterMaxVIC = jitterMaxVIC;
            this.JitterMaxVOC = jitterMaxVOC;
            this.JitterAvgAI = jitterAvgAI;
            this.JitterAvgAO = jitterAvgAO;
            this.JitterAvgVI = jitterAvgVI;
            this.JitterAvgVO = jitterAvgVO;
            this.JitterAvgVIC = jitterAvgVIC;
            this.JitterAvgVOC = jitterAvgVOC;
            this.MaxJitterMinAI = maxJitterMinAI;
            this.MaxJitterMinVI = maxJitterMinVI;
            this.MaxJitterMinVIC = maxJitterMinVIC;
            this.MaxJitterMaxAI = maxJitterMaxAI;
            this.MaxJitterMaxVI = maxJitterMaxVI;
            this.MaxJitterMaxVIC = maxJitterMaxVIC;
            this.MaxJitterAvgAI = maxJitterAvgAI;
            this.MaxJitterAvgVI = maxJitterAvgVI;
            this.MaxJitterAvgVIC = maxJitterAvgVIC;
            this.VideoRecvHeightMin = videoRecvHeightMin;
            this.VideoRecvHeightMax = videoRecvHeightMax;
            this.VideoRecvWidthMin = videoRecvWidthMin;
            this.VideoRecvWidthMax = videoRecvWidthMax;
            this.VideoSendHeightMin = videoSendHeightMin;
            this.VideoSendHeightMax = videoSendHeightMax;
            this.VideoSendWidthMin = videoSendWidthMin;
            this.VideoSendWidthMax = videoSendWidthMax;
            this.ContentRecvHeightMin = contentRecvHeightMin;
            this.ContentRecvHeightMax = contentRecvHeightMax;
            this.ContentRecvWidthMin = contentRecvWidthMin;
            this.ContentRecvWidthMax = contentRecvWidthMax;
            this.ContentSendHeightMin = contentSendHeightMin;
            this.ContentSendHeightMax = contentSendHeightMax;
            this.ContentSendWidthMin = contentSendWidthMin;
            this.ContentSendWidthMax = contentSendWidthMax;
            this.RoundTripDelayMin = roundTripDelayMin;
            this.RoundTripDelayMax = roundTripDelayMax;
            this.RoundTripDelayAvg = roundTripDelayAvg;
            this.RfactorMin = rfactorMin;
            this.RfactorMax = rfactorMax;
            this.RfactorAvg = rfactorAvg;
            this.ProcessCpuLoadMin = processCpuLoadMin;
            this.ProcessCpuLoadMax = processCpuLoadMax;
            this.ProcessCpuLoadAvg = processCpuLoadAvg;
            this.SystemCpuLoadMin = systemCpuLoadMin;
            this.SystemCpuLoadMax = systemCpuLoadMax;
            this.SystemCpuLoadAvg = systemCpuLoadAvg;
            this.WifiRecvStrengthMin = wifiRecvStrengthMin;
            this.WifiRecvStrengthMax = wifiRecvStrengthMax;
            this.WifiRecvStrengthAvg = wifiRecvStrengthAvg;
            this.KeyFrameRateAvgVI = keyFrameRateAvgVI;
            this.KeyFrameRateAvgVO = keyFrameRateAvgVO;
            this.KeyFrameRateAvgVIC = keyFrameRateAvgVIC;
            this.KeyFrameRateAvgVOC = keyFrameRateAvgVOC;
            this.KeyFrameRateMinVI = keyFrameRateMinVI;
            this.KeyFrameRateMinVO = keyFrameRateMinVO;
            this.KeyFrameRateMinVIC = keyFrameRateMinVIC;
            this.KeyFrameRateMinVOC = keyFrameRateMinVOC;
            this.KeyFrameRateMaxVI = keyFrameRateMaxVI;
            this.KeyFrameRateMaxVO = keyFrameRateMaxVO;
            this.KeyFrameRateMaxVIC = keyFrameRateMaxVIC;
            this.KeyFrameRateMaxVOC = keyFrameRateMaxVOC;
            this.RoundTripDelayAvgVO = roundTripDelayAvgVO;
            this.RoundTripDelayAvgVOC = roundTripDelayAvgVOC;
            this.RoundTripDelayAvgAO = roundTripDelayAvgAO;
        }
        
        /// <summary>
        /// Gets or Sets AudioRecvCodec
        /// </summary>
        [DataMember(Name="audioRecvCodec", EmitDefaultValue=false)]
        public string AudioRecvCodec { get; set; }

        /// <summary>
        /// Gets or Sets AudioSendCodec
        /// </summary>
        [DataMember(Name="audioSendCodec", EmitDefaultValue=false)]
        public string AudioSendCodec { get; set; }

        /// <summary>
        /// Gets or Sets ContentRecv
        /// </summary>
        [DataMember(Name="contentRecv", EmitDefaultValue=false)]
        public bool? ContentRecv { get; set; }

        /// <summary>
        /// Gets or Sets ContentSend
        /// </summary>
        [DataMember(Name="contentSend", EmitDefaultValue=false)]
        public bool? ContentSend { get; set; }

        /// <summary>
        /// Gets or Sets TalkDetected
        /// </summary>
        [DataMember(Name="talkDetected", EmitDefaultValue=false)]
        public bool? TalkDetected { get; set; }

        /// <summary>
        /// Gets or Sets SessionRelay
        /// </summary>
        [DataMember(Name="sessionRelay", EmitDefaultValue=false)]
        public bool? SessionRelay { get; set; }

        /// <summary>
        /// Gets or Sets SessionInRelay
        /// </summary>
        [DataMember(Name="sessionInRelay", EmitDefaultValue=false)]
        public bool? SessionInRelay { get; set; }

        /// <summary>
        /// Gets or Sets SessionOutRelay
        /// </summary>
        [DataMember(Name="sessionOutRelay", EmitDefaultValue=false)]
        public bool? SessionOutRelay { get; set; }

        /// <summary>
        /// Gets or Sets AudioRtpRelay
        /// </summary>
        [DataMember(Name="audioRtpRelay", EmitDefaultValue=false)]
        public bool? AudioRtpRelay { get; set; }

        /// <summary>
        /// Gets or Sets CallRate
        /// </summary>
        [DataMember(Name="callRate", EmitDefaultValue=false)]
        public int? CallRate { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentAI
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_AI", EmitDefaultValue=false)]
        public decimal? CumulLossPercentAI { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentAO
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_AO", EmitDefaultValue=false)]
        public decimal? CumulLossPercentAO { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentVI
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_VI", EmitDefaultValue=false)]
        public decimal? CumulLossPercentVI { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentVO
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_VO", EmitDefaultValue=false)]
        public decimal? CumulLossPercentVO { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentVIC
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_VIC", EmitDefaultValue=false)]
        public decimal? CumulLossPercentVIC { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossPercentVOC
        /// </summary>
        [DataMember(Name="cumulLoss_Percent_VOC", EmitDefaultValue=false)]
        public decimal? CumulLossPercentVOC { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossAI
        /// </summary>
        [DataMember(Name="cumulLoss_AI", EmitDefaultValue=false)]
        public decimal? CumulLossAI { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossAO
        /// </summary>
        [DataMember(Name="cumulLoss_AO", EmitDefaultValue=false)]
        public decimal? CumulLossAO { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossVI
        /// </summary>
        [DataMember(Name="cumulLoss_VI", EmitDefaultValue=false)]
        public decimal? CumulLossVI { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossVO
        /// </summary>
        [DataMember(Name="cumulLoss_VO", EmitDefaultValue=false)]
        public decimal? CumulLossVO { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossVIC
        /// </summary>
        [DataMember(Name="cumulLoss_VIC", EmitDefaultValue=false)]
        public decimal? CumulLossVIC { get; set; }

        /// <summary>
        /// Gets or Sets CumulLossVOC
        /// </summary>
        [DataMember(Name="cumulLoss_VOC", EmitDefaultValue=false)]
        public decimal? CumulLossVOC { get; set; }

        /// <summary>
        /// Gets or Sets DiscontinuityCount
        /// </summary>
        [DataMember(Name="discontinuityCount", EmitDefaultValue=false)]
        public decimal? DiscontinuityCount { get; set; }

        /// <summary>
        /// Gets or Sets DroppedPacketsAI
        /// </summary>
        [DataMember(Name="droppedPackets_AI", EmitDefaultValue=false)]
        public decimal? DroppedPacketsAI { get; set; }

        /// <summary>
        /// Gets or Sets DroppedPacketsVI
        /// </summary>
        [DataMember(Name="droppedPackets_VI", EmitDefaultValue=false)]
        public decimal? DroppedPacketsVI { get; set; }

        /// <summary>
        /// Gets or Sets DroppedPacketsVIC
        /// </summary>
        [DataMember(Name="droppedPackets_VIC", EmitDefaultValue=false)]
        public decimal? DroppedPacketsVIC { get; set; }

        /// <summary>
        /// Gets or Sets MixUnderRunsAI
        /// </summary>
        [DataMember(Name="mixUnderRuns_AI", EmitDefaultValue=false)]
        public decimal? MixUnderRunsAI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkAvgLossAI
        /// </summary>
        [DataMember(Name="networkAvgLoss_AI", EmitDefaultValue=false)]
        public decimal? NetworkAvgLossAI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkAvgLossAO
        /// </summary>
        [DataMember(Name="networkAvgLoss_AO", EmitDefaultValue=false)]
        public decimal? NetworkAvgLossAO { get; set; }

        /// <summary>
        /// Gets or Sets NetworkAvgLossVI
        /// </summary>
        [DataMember(Name="networkAvgLoss_VI", EmitDefaultValue=false)]
        public decimal? NetworkAvgLossVI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkAvgLossVO
        /// </summary>
        [DataMember(Name="networkAvgLoss_VO", EmitDefaultValue=false)]
        public decimal? NetworkAvgLossVO { get; set; }

        /// <summary>
        /// Gets or Sets NetworkCumulLossAI
        /// </summary>
        [DataMember(Name="networkCumulLoss_AI", EmitDefaultValue=false)]
        public decimal? NetworkCumulLossAI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkCumulLossAO
        /// </summary>
        [DataMember(Name="networkCumulLoss_AO", EmitDefaultValue=false)]
        public decimal? NetworkCumulLossAO { get; set; }

        /// <summary>
        /// Gets or Sets NetworkCumulLossVI
        /// </summary>
        [DataMember(Name="networkCumulLoss_VI", EmitDefaultValue=false)]
        public decimal? NetworkCumulLossVI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkCumulLossVO
        /// </summary>
        [DataMember(Name="networkCumulLoss_VO", EmitDefaultValue=false)]
        public decimal? NetworkCumulLossVO { get; set; }

        /// <summary>
        /// Gets or Sets NetworkLossAI
        /// </summary>
        [DataMember(Name="networkLoss_AI", EmitDefaultValue=false)]
        public decimal? NetworkLossAI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkLossAO
        /// </summary>
        [DataMember(Name="networkLoss_AO", EmitDefaultValue=false)]
        public decimal? NetworkLossAO { get; set; }

        /// <summary>
        /// Gets or Sets NetworkLossVI
        /// </summary>
        [DataMember(Name="networkLoss_VI", EmitDefaultValue=false)]
        public decimal? NetworkLossVI { get; set; }

        /// <summary>
        /// Gets or Sets NetworkLossVO
        /// </summary>
        [DataMember(Name="networkLoss_VO", EmitDefaultValue=false)]
        public decimal? NetworkLossVO { get; set; }

        /// <summary>
        /// Gets or Sets CallQualityMin
        /// </summary>
        [DataMember(Name="callQuality_Min", EmitDefaultValue=false)]
        public decimal? CallQualityMin { get; set; }

        /// <summary>
        /// Gets or Sets CallQualityMax
        /// </summary>
        [DataMember(Name="callQuality_Max", EmitDefaultValue=false)]
        public decimal? CallQualityMax { get; set; }

        /// <summary>
        /// Gets or Sets CallQualityAvg
        /// </summary>
        [DataMember(Name="callQuality_Avg", EmitDefaultValue=false)]
        public decimal? CallQualityAvg { get; set; }

        /// <summary>
        /// Gets or Sets FpsMinVI
        /// </summary>
        [DataMember(Name="fps_Min_VI", EmitDefaultValue=false)]
        public decimal? FpsMinVI { get; set; }

        /// <summary>
        /// Gets or Sets FpsMinVO
        /// </summary>
        [DataMember(Name="fps_Min_VO", EmitDefaultValue=false)]
        public decimal? FpsMinVO { get; set; }

        /// <summary>
        /// Gets or Sets FpsMinVIC
        /// </summary>
        [DataMember(Name="fps_Min_VIC", EmitDefaultValue=false)]
        public decimal? FpsMinVIC { get; set; }

        /// <summary>
        /// Gets or Sets FpsMinVOC
        /// </summary>
        [DataMember(Name="fps_Min_VOC", EmitDefaultValue=false)]
        public decimal? FpsMinVOC { get; set; }

        /// <summary>
        /// Gets or Sets FpsMaxVI
        /// </summary>
        [DataMember(Name="fps_Max_VI", EmitDefaultValue=false)]
        public decimal? FpsMaxVI { get; set; }

        /// <summary>
        /// Gets or Sets FpsMaxVO
        /// </summary>
        [DataMember(Name="fps_Max_VO", EmitDefaultValue=false)]
        public decimal? FpsMaxVO { get; set; }

        /// <summary>
        /// Gets or Sets FpsMaxVIC
        /// </summary>
        [DataMember(Name="fps_Max_VIC", EmitDefaultValue=false)]
        public decimal? FpsMaxVIC { get; set; }

        /// <summary>
        /// Gets or Sets FpsMaxVOC
        /// </summary>
        [DataMember(Name="fps_Max_VOC", EmitDefaultValue=false)]
        public decimal? FpsMaxVOC { get; set; }

        /// <summary>
        /// Gets or Sets FpsAvgVI
        /// </summary>
        [DataMember(Name="fps_Avg_VI", EmitDefaultValue=false)]
        public decimal? FpsAvgVI { get; set; }

        /// <summary>
        /// Gets or Sets FpsAvgVO
        /// </summary>
        [DataMember(Name="fps_Avg_VO", EmitDefaultValue=false)]
        public decimal? FpsAvgVO { get; set; }

        /// <summary>
        /// Gets or Sets FpsAvgVIC
        /// </summary>
        [DataMember(Name="fps_Avg_VIC", EmitDefaultValue=false)]
        public decimal? FpsAvgVIC { get; set; }

        /// <summary>
        /// Gets or Sets FpsAvgVOC
        /// </summary>
        [DataMember(Name="fps_Avg_VOC", EmitDefaultValue=false)]
        public decimal? FpsAvgVOC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinAI
        /// </summary>
        [DataMember(Name="bitrate_Min_AI", EmitDefaultValue=false)]
        public decimal? BitrateMinAI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinAO
        /// </summary>
        [DataMember(Name="bitrate_Min_AO", EmitDefaultValue=false)]
        public decimal? BitrateMinAO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinVI
        /// </summary>
        [DataMember(Name="bitrate_Min_VI", EmitDefaultValue=false)]
        public decimal? BitrateMinVI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinVO
        /// </summary>
        [DataMember(Name="bitrate_Min_VO", EmitDefaultValue=false)]
        public decimal? BitrateMinVO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinVIC
        /// </summary>
        [DataMember(Name="bitrate_Min_VIC", EmitDefaultValue=false)]
        public decimal? BitrateMinVIC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMinVOC
        /// </summary>
        [DataMember(Name="bitrate_Min_VOC", EmitDefaultValue=false)]
        public decimal? BitrateMinVOC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxAI
        /// </summary>
        [DataMember(Name="bitrate_Max_AI", EmitDefaultValue=false)]
        public decimal? BitrateMaxAI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxAO
        /// </summary>
        [DataMember(Name="bitrate_Max_AO", EmitDefaultValue=false)]
        public decimal? BitrateMaxAO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxVI
        /// </summary>
        [DataMember(Name="bitrate_Max_VI", EmitDefaultValue=false)]
        public decimal? BitrateMaxVI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxVO
        /// </summary>
        [DataMember(Name="bitrate_Max_VO", EmitDefaultValue=false)]
        public decimal? BitrateMaxVO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxVIC
        /// </summary>
        [DataMember(Name="bitrate_Max_VIC", EmitDefaultValue=false)]
        public decimal? BitrateMaxVIC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateMaxVOC
        /// </summary>
        [DataMember(Name="bitrate_Max_VOC", EmitDefaultValue=false)]
        public decimal? BitrateMaxVOC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgAI
        /// </summary>
        [DataMember(Name="bitrate_Avg_AI", EmitDefaultValue=false)]
        public decimal? BitrateAvgAI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgAO
        /// </summary>
        [DataMember(Name="bitrate_Avg_AO", EmitDefaultValue=false)]
        public decimal? BitrateAvgAO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgVI
        /// </summary>
        [DataMember(Name="bitrate_Avg_VI", EmitDefaultValue=false)]
        public decimal? BitrateAvgVI { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgVO
        /// </summary>
        [DataMember(Name="bitrate_Avg_VO", EmitDefaultValue=false)]
        public decimal? BitrateAvgVO { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgVIC
        /// </summary>
        [DataMember(Name="bitrate_Avg_VIC", EmitDefaultValue=false)]
        public decimal? BitrateAvgVIC { get; set; }

        /// <summary>
        /// Gets or Sets BitrateAvgVOC
        /// </summary>
        [DataMember(Name="bitrate_Avg_VOC", EmitDefaultValue=false)]
        public decimal? BitrateAvgVOC { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinAI
        /// </summary>
        [DataMember(Name="jitter_Min_AI", EmitDefaultValue=false)]
        public decimal? JitterMinAI { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinAO
        /// </summary>
        [DataMember(Name="jitter_Min_AO", EmitDefaultValue=false)]
        public decimal? JitterMinAO { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinVI
        /// </summary>
        [DataMember(Name="jitter_Min_VI", EmitDefaultValue=false)]
        public decimal? JitterMinVI { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinVO
        /// </summary>
        [DataMember(Name="jitter_Min_VO", EmitDefaultValue=false)]
        public decimal? JitterMinVO { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinVIC
        /// </summary>
        [DataMember(Name="jitter_Min_VIC", EmitDefaultValue=false)]
        public decimal? JitterMinVIC { get; set; }

        /// <summary>
        /// Gets or Sets JitterMinVOC
        /// </summary>
        [DataMember(Name="jitter_Min_VOC", EmitDefaultValue=false)]
        public decimal? JitterMinVOC { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxAI
        /// </summary>
        [DataMember(Name="jitter_Max_AI", EmitDefaultValue=false)]
        public decimal? JitterMaxAI { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxAO
        /// </summary>
        [DataMember(Name="jitter_Max_AO", EmitDefaultValue=false)]
        public decimal? JitterMaxAO { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxVI
        /// </summary>
        [DataMember(Name="jitter_Max_VI", EmitDefaultValue=false)]
        public decimal? JitterMaxVI { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxVO
        /// </summary>
        [DataMember(Name="jitter_Max_VO", EmitDefaultValue=false)]
        public decimal? JitterMaxVO { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxVIC
        /// </summary>
        [DataMember(Name="jitter_Max_VIC", EmitDefaultValue=false)]
        public decimal? JitterMaxVIC { get; set; }

        /// <summary>
        /// Gets or Sets JitterMaxVOC
        /// </summary>
        [DataMember(Name="jitter_Max_VOC", EmitDefaultValue=false)]
        public decimal? JitterMaxVOC { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgAI
        /// </summary>
        [DataMember(Name="jitter_Avg_AI", EmitDefaultValue=false)]
        public decimal? JitterAvgAI { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgAO
        /// </summary>
        [DataMember(Name="jitter_Avg_AO", EmitDefaultValue=false)]
        public decimal? JitterAvgAO { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgVI
        /// </summary>
        [DataMember(Name="jitter_Avg_VI", EmitDefaultValue=false)]
        public decimal? JitterAvgVI { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgVO
        /// </summary>
        [DataMember(Name="jitter_Avg_VO", EmitDefaultValue=false)]
        public decimal? JitterAvgVO { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgVIC
        /// </summary>
        [DataMember(Name="jitter_Avg_VIC", EmitDefaultValue=false)]
        public decimal? JitterAvgVIC { get; set; }

        /// <summary>
        /// Gets or Sets JitterAvgVOC
        /// </summary>
        [DataMember(Name="jitter_Avg_VOC", EmitDefaultValue=false)]
        public decimal? JitterAvgVOC { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMinAI
        /// </summary>
        [DataMember(Name="maxJitter_Min_AI", EmitDefaultValue=false)]
        public decimal? MaxJitterMinAI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMinVI
        /// </summary>
        [DataMember(Name="maxJitter_Min_VI", EmitDefaultValue=false)]
        public decimal? MaxJitterMinVI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMinVIC
        /// </summary>
        [DataMember(Name="maxJitter_Min_VIC", EmitDefaultValue=false)]
        public decimal? MaxJitterMinVIC { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMaxAI
        /// </summary>
        [DataMember(Name="maxJitter_Max_AI", EmitDefaultValue=false)]
        public decimal? MaxJitterMaxAI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMaxVI
        /// </summary>
        [DataMember(Name="maxJitter_Max_VI", EmitDefaultValue=false)]
        public decimal? MaxJitterMaxVI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterMaxVIC
        /// </summary>
        [DataMember(Name="maxJitter_Max_VIC", EmitDefaultValue=false)]
        public decimal? MaxJitterMaxVIC { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterAvgAI
        /// </summary>
        [DataMember(Name="maxJitter_Avg_AI", EmitDefaultValue=false)]
        public decimal? MaxJitterAvgAI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterAvgVI
        /// </summary>
        [DataMember(Name="maxJitter_Avg_VI", EmitDefaultValue=false)]
        public decimal? MaxJitterAvgVI { get; set; }

        /// <summary>
        /// Gets or Sets MaxJitterAvgVIC
        /// </summary>
        [DataMember(Name="maxJitter_Avg_VIC", EmitDefaultValue=false)]
        public decimal? MaxJitterAvgVIC { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvHeightMin
        /// </summary>
        [DataMember(Name="videoRecvHeight_Min", EmitDefaultValue=false)]
        public decimal? VideoRecvHeightMin { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvHeightMax
        /// </summary>
        [DataMember(Name="videoRecvHeight_Max", EmitDefaultValue=false)]
        public decimal? VideoRecvHeightMax { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvWidthMin
        /// </summary>
        [DataMember(Name="videoRecvWidth_Min", EmitDefaultValue=false)]
        public decimal? VideoRecvWidthMin { get; set; }

        /// <summary>
        /// Gets or Sets VideoRecvWidthMax
        /// </summary>
        [DataMember(Name="videoRecvWidth_Max", EmitDefaultValue=false)]
        public decimal? VideoRecvWidthMax { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendHeightMin
        /// </summary>
        [DataMember(Name="videoSendHeight_Min", EmitDefaultValue=false)]
        public decimal? VideoSendHeightMin { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendHeightMax
        /// </summary>
        [DataMember(Name="videoSendHeight_Max", EmitDefaultValue=false)]
        public decimal? VideoSendHeightMax { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendWidthMin
        /// </summary>
        [DataMember(Name="videoSendWidth_Min", EmitDefaultValue=false)]
        public decimal? VideoSendWidthMin { get; set; }

        /// <summary>
        /// Gets or Sets VideoSendWidthMax
        /// </summary>
        [DataMember(Name="videoSendWidth_Max", EmitDefaultValue=false)]
        public decimal? VideoSendWidthMax { get; set; }

        /// <summary>
        /// Gets or Sets ContentRecvHeightMin
        /// </summary>
        [DataMember(Name="contentRecvHeight_Min", EmitDefaultValue=false)]
        public decimal? ContentRecvHeightMin { get; set; }

        /// <summary>
        /// Gets or Sets ContentRecvHeightMax
        /// </summary>
        [DataMember(Name="contentRecvHeight_Max", EmitDefaultValue=false)]
        public decimal? ContentRecvHeightMax { get; set; }

        /// <summary>
        /// Gets or Sets ContentRecvWidthMin
        /// </summary>
        [DataMember(Name="contentRecvWidth_Min", EmitDefaultValue=false)]
        public decimal? ContentRecvWidthMin { get; set; }

        /// <summary>
        /// Gets or Sets ContentRecvWidthMax
        /// </summary>
        [DataMember(Name="contentRecvWidth_Max", EmitDefaultValue=false)]
        public decimal? ContentRecvWidthMax { get; set; }

        /// <summary>
        /// Gets or Sets ContentSendHeightMin
        /// </summary>
        [DataMember(Name="contentSendHeight_Min", EmitDefaultValue=false)]
        public decimal? ContentSendHeightMin { get; set; }

        /// <summary>
        /// Gets or Sets ContentSendHeightMax
        /// </summary>
        [DataMember(Name="contentSendHeight_Max", EmitDefaultValue=false)]
        public decimal? ContentSendHeightMax { get; set; }

        /// <summary>
        /// Gets or Sets ContentSendWidthMin
        /// </summary>
        [DataMember(Name="contentSendWidth_Min", EmitDefaultValue=false)]
        public decimal? ContentSendWidthMin { get; set; }

        /// <summary>
        /// Gets or Sets ContentSendWidthMax
        /// </summary>
        [DataMember(Name="contentSendWidth_Max", EmitDefaultValue=false)]
        public decimal? ContentSendWidthMax { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayMin
        /// </summary>
        [DataMember(Name="roundTripDelay_Min", EmitDefaultValue=false)]
        public decimal? RoundTripDelayMin { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayMax
        /// </summary>
        [DataMember(Name="roundTripDelay_Max", EmitDefaultValue=false)]
        public decimal? RoundTripDelayMax { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayAvg
        /// </summary>
        [DataMember(Name="roundTripDelay_Avg", EmitDefaultValue=false)]
        public decimal? RoundTripDelayAvg { get; set; }

        /// <summary>
        /// Gets or Sets RfactorMin
        /// </summary>
        [DataMember(Name="rfactor_Min", EmitDefaultValue=false)]
        public decimal? RfactorMin { get; set; }

        /// <summary>
        /// Gets or Sets RfactorMax
        /// </summary>
        [DataMember(Name="rfactor_Max", EmitDefaultValue=false)]
        public decimal? RfactorMax { get; set; }

        /// <summary>
        /// Gets or Sets RfactorAvg
        /// </summary>
        [DataMember(Name="rfactor_Avg", EmitDefaultValue=false)]
        public decimal? RfactorAvg { get; set; }

        /// <summary>
        /// Gets or Sets ProcessCpuLoadMin
        /// </summary>
        [DataMember(Name="processCpuLoad_Min", EmitDefaultValue=false)]
        public decimal? ProcessCpuLoadMin { get; set; }

        /// <summary>
        /// Gets or Sets ProcessCpuLoadMax
        /// </summary>
        [DataMember(Name="processCpuLoad_Max", EmitDefaultValue=false)]
        public decimal? ProcessCpuLoadMax { get; set; }

        /// <summary>
        /// Gets or Sets ProcessCpuLoadAvg
        /// </summary>
        [DataMember(Name="processCpuLoad_Avg", EmitDefaultValue=false)]
        public decimal? ProcessCpuLoadAvg { get; set; }

        /// <summary>
        /// Gets or Sets SystemCpuLoadMin
        /// </summary>
        [DataMember(Name="systemCpuLoad_Min", EmitDefaultValue=false)]
        public decimal? SystemCpuLoadMin { get; set; }

        /// <summary>
        /// Gets or Sets SystemCpuLoadMax
        /// </summary>
        [DataMember(Name="systemCpuLoad_Max", EmitDefaultValue=false)]
        public decimal? SystemCpuLoadMax { get; set; }

        /// <summary>
        /// Gets or Sets SystemCpuLoadAvg
        /// </summary>
        [DataMember(Name="systemCpuLoad_Avg", EmitDefaultValue=false)]
        public decimal? SystemCpuLoadAvg { get; set; }

        /// <summary>
        /// Gets or Sets WifiRecvStrengthMin
        /// </summary>
        [DataMember(Name="wifiRecvStrength_Min", EmitDefaultValue=false)]
        public decimal? WifiRecvStrengthMin { get; set; }

        /// <summary>
        /// Gets or Sets WifiRecvStrengthMax
        /// </summary>
        [DataMember(Name="wifiRecvStrength_Max", EmitDefaultValue=false)]
        public decimal? WifiRecvStrengthMax { get; set; }

        /// <summary>
        /// Gets or Sets WifiRecvStrengthAvg
        /// </summary>
        [DataMember(Name="wifiRecvStrength_Avg", EmitDefaultValue=false)]
        public decimal? WifiRecvStrengthAvg { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateAvgVI
        /// </summary>
        [DataMember(Name="keyFrameRate_Avg_VI", EmitDefaultValue=false)]
        public decimal? KeyFrameRateAvgVI { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateAvgVO
        /// </summary>
        [DataMember(Name="keyFrameRate_Avg_VO", EmitDefaultValue=false)]
        public decimal? KeyFrameRateAvgVO { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateAvgVIC
        /// </summary>
        [DataMember(Name="keyFrameRate_Avg_VIC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateAvgVIC { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateAvgVOC
        /// </summary>
        [DataMember(Name="keyFrameRate_Avg_VOC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateAvgVOC { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMinVI
        /// </summary>
        [DataMember(Name="keyFrameRate_Min_VI", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMinVI { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMinVO
        /// </summary>
        [DataMember(Name="keyFrameRate_Min_VO", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMinVO { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMinVIC
        /// </summary>
        [DataMember(Name="keyFrameRate_Min_VIC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMinVIC { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMinVOC
        /// </summary>
        [DataMember(Name="keyFrameRate_Min_VOC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMinVOC { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMaxVI
        /// </summary>
        [DataMember(Name="keyFrameRate_Max_VI", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMaxVI { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMaxVO
        /// </summary>
        [DataMember(Name="keyFrameRate_Max_VO", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMaxVO { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMaxVIC
        /// </summary>
        [DataMember(Name="keyFrameRate_Max_VIC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMaxVIC { get; set; }

        /// <summary>
        /// Gets or Sets KeyFrameRateMaxVOC
        /// </summary>
        [DataMember(Name="keyFrameRate_Max_VOC", EmitDefaultValue=false)]
        public decimal? KeyFrameRateMaxVOC { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayAvgVO
        /// </summary>
        [DataMember(Name="roundTripDelay_Avg_VO", EmitDefaultValue=false)]
        public decimal? RoundTripDelayAvgVO { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayAvgVOC
        /// </summary>
        [DataMember(Name="roundTripDelay_Avg_VOC", EmitDefaultValue=false)]
        public decimal? RoundTripDelayAvgVOC { get; set; }

        /// <summary>
        /// Gets or Sets RoundTripDelayAvgAO
        /// </summary>
        [DataMember(Name="roundTripDelay_Avg_AO", EmitDefaultValue=false)]
        public decimal? RoundTripDelayAvgAO { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class EndpointIndigoSummaryStats {\n");
            sb.Append("  AudioRecvCodec: ").Append(AudioRecvCodec).Append("\n");
            sb.Append("  AudioSendCodec: ").Append(AudioSendCodec).Append("\n");
            sb.Append("  ContentRecv: ").Append(ContentRecv).Append("\n");
            sb.Append("  ContentSend: ").Append(ContentSend).Append("\n");
            sb.Append("  TalkDetected: ").Append(TalkDetected).Append("\n");
            sb.Append("  SessionRelay: ").Append(SessionRelay).Append("\n");
            sb.Append("  SessionInRelay: ").Append(SessionInRelay).Append("\n");
            sb.Append("  SessionOutRelay: ").Append(SessionOutRelay).Append("\n");
            sb.Append("  AudioRtpRelay: ").Append(AudioRtpRelay).Append("\n");
            sb.Append("  CallRate: ").Append(CallRate).Append("\n");
            sb.Append("  CumulLossPercentAI: ").Append(CumulLossPercentAI).Append("\n");
            sb.Append("  CumulLossPercentAO: ").Append(CumulLossPercentAO).Append("\n");
            sb.Append("  CumulLossPercentVI: ").Append(CumulLossPercentVI).Append("\n");
            sb.Append("  CumulLossPercentVO: ").Append(CumulLossPercentVO).Append("\n");
            sb.Append("  CumulLossPercentVIC: ").Append(CumulLossPercentVIC).Append("\n");
            sb.Append("  CumulLossPercentVOC: ").Append(CumulLossPercentVOC).Append("\n");
            sb.Append("  CumulLossAI: ").Append(CumulLossAI).Append("\n");
            sb.Append("  CumulLossAO: ").Append(CumulLossAO).Append("\n");
            sb.Append("  CumulLossVI: ").Append(CumulLossVI).Append("\n");
            sb.Append("  CumulLossVO: ").Append(CumulLossVO).Append("\n");
            sb.Append("  CumulLossVIC: ").Append(CumulLossVIC).Append("\n");
            sb.Append("  CumulLossVOC: ").Append(CumulLossVOC).Append("\n");
            sb.Append("  DiscontinuityCount: ").Append(DiscontinuityCount).Append("\n");
            sb.Append("  DroppedPacketsAI: ").Append(DroppedPacketsAI).Append("\n");
            sb.Append("  DroppedPacketsVI: ").Append(DroppedPacketsVI).Append("\n");
            sb.Append("  DroppedPacketsVIC: ").Append(DroppedPacketsVIC).Append("\n");
            sb.Append("  MixUnderRunsAI: ").Append(MixUnderRunsAI).Append("\n");
            sb.Append("  NetworkAvgLossAI: ").Append(NetworkAvgLossAI).Append("\n");
            sb.Append("  NetworkAvgLossAO: ").Append(NetworkAvgLossAO).Append("\n");
            sb.Append("  NetworkAvgLossVI: ").Append(NetworkAvgLossVI).Append("\n");
            sb.Append("  NetworkAvgLossVO: ").Append(NetworkAvgLossVO).Append("\n");
            sb.Append("  NetworkCumulLossAI: ").Append(NetworkCumulLossAI).Append("\n");
            sb.Append("  NetworkCumulLossAO: ").Append(NetworkCumulLossAO).Append("\n");
            sb.Append("  NetworkCumulLossVI: ").Append(NetworkCumulLossVI).Append("\n");
            sb.Append("  NetworkCumulLossVO: ").Append(NetworkCumulLossVO).Append("\n");
            sb.Append("  NetworkLossAI: ").Append(NetworkLossAI).Append("\n");
            sb.Append("  NetworkLossAO: ").Append(NetworkLossAO).Append("\n");
            sb.Append("  NetworkLossVI: ").Append(NetworkLossVI).Append("\n");
            sb.Append("  NetworkLossVO: ").Append(NetworkLossVO).Append("\n");
            sb.Append("  CallQualityMin: ").Append(CallQualityMin).Append("\n");
            sb.Append("  CallQualityMax: ").Append(CallQualityMax).Append("\n");
            sb.Append("  CallQualityAvg: ").Append(CallQualityAvg).Append("\n");
            sb.Append("  FpsMinVI: ").Append(FpsMinVI).Append("\n");
            sb.Append("  FpsMinVO: ").Append(FpsMinVO).Append("\n");
            sb.Append("  FpsMinVIC: ").Append(FpsMinVIC).Append("\n");
            sb.Append("  FpsMinVOC: ").Append(FpsMinVOC).Append("\n");
            sb.Append("  FpsMaxVI: ").Append(FpsMaxVI).Append("\n");
            sb.Append("  FpsMaxVO: ").Append(FpsMaxVO).Append("\n");
            sb.Append("  FpsMaxVIC: ").Append(FpsMaxVIC).Append("\n");
            sb.Append("  FpsMaxVOC: ").Append(FpsMaxVOC).Append("\n");
            sb.Append("  FpsAvgVI: ").Append(FpsAvgVI).Append("\n");
            sb.Append("  FpsAvgVO: ").Append(FpsAvgVO).Append("\n");
            sb.Append("  FpsAvgVIC: ").Append(FpsAvgVIC).Append("\n");
            sb.Append("  FpsAvgVOC: ").Append(FpsAvgVOC).Append("\n");
            sb.Append("  BitrateMinAI: ").Append(BitrateMinAI).Append("\n");
            sb.Append("  BitrateMinAO: ").Append(BitrateMinAO).Append("\n");
            sb.Append("  BitrateMinVI: ").Append(BitrateMinVI).Append("\n");
            sb.Append("  BitrateMinVO: ").Append(BitrateMinVO).Append("\n");
            sb.Append("  BitrateMinVIC: ").Append(BitrateMinVIC).Append("\n");
            sb.Append("  BitrateMinVOC: ").Append(BitrateMinVOC).Append("\n");
            sb.Append("  BitrateMaxAI: ").Append(BitrateMaxAI).Append("\n");
            sb.Append("  BitrateMaxAO: ").Append(BitrateMaxAO).Append("\n");
            sb.Append("  BitrateMaxVI: ").Append(BitrateMaxVI).Append("\n");
            sb.Append("  BitrateMaxVO: ").Append(BitrateMaxVO).Append("\n");
            sb.Append("  BitrateMaxVIC: ").Append(BitrateMaxVIC).Append("\n");
            sb.Append("  BitrateMaxVOC: ").Append(BitrateMaxVOC).Append("\n");
            sb.Append("  BitrateAvgAI: ").Append(BitrateAvgAI).Append("\n");
            sb.Append("  BitrateAvgAO: ").Append(BitrateAvgAO).Append("\n");
            sb.Append("  BitrateAvgVI: ").Append(BitrateAvgVI).Append("\n");
            sb.Append("  BitrateAvgVO: ").Append(BitrateAvgVO).Append("\n");
            sb.Append("  BitrateAvgVIC: ").Append(BitrateAvgVIC).Append("\n");
            sb.Append("  BitrateAvgVOC: ").Append(BitrateAvgVOC).Append("\n");
            sb.Append("  JitterMinAI: ").Append(JitterMinAI).Append("\n");
            sb.Append("  JitterMinAO: ").Append(JitterMinAO).Append("\n");
            sb.Append("  JitterMinVI: ").Append(JitterMinVI).Append("\n");
            sb.Append("  JitterMinVO: ").Append(JitterMinVO).Append("\n");
            sb.Append("  JitterMinVIC: ").Append(JitterMinVIC).Append("\n");
            sb.Append("  JitterMinVOC: ").Append(JitterMinVOC).Append("\n");
            sb.Append("  JitterMaxAI: ").Append(JitterMaxAI).Append("\n");
            sb.Append("  JitterMaxAO: ").Append(JitterMaxAO).Append("\n");
            sb.Append("  JitterMaxVI: ").Append(JitterMaxVI).Append("\n");
            sb.Append("  JitterMaxVO: ").Append(JitterMaxVO).Append("\n");
            sb.Append("  JitterMaxVIC: ").Append(JitterMaxVIC).Append("\n");
            sb.Append("  JitterMaxVOC: ").Append(JitterMaxVOC).Append("\n");
            sb.Append("  JitterAvgAI: ").Append(JitterAvgAI).Append("\n");
            sb.Append("  JitterAvgAO: ").Append(JitterAvgAO).Append("\n");
            sb.Append("  JitterAvgVI: ").Append(JitterAvgVI).Append("\n");
            sb.Append("  JitterAvgVO: ").Append(JitterAvgVO).Append("\n");
            sb.Append("  JitterAvgVIC: ").Append(JitterAvgVIC).Append("\n");
            sb.Append("  JitterAvgVOC: ").Append(JitterAvgVOC).Append("\n");
            sb.Append("  MaxJitterMinAI: ").Append(MaxJitterMinAI).Append("\n");
            sb.Append("  MaxJitterMinVI: ").Append(MaxJitterMinVI).Append("\n");
            sb.Append("  MaxJitterMinVIC: ").Append(MaxJitterMinVIC).Append("\n");
            sb.Append("  MaxJitterMaxAI: ").Append(MaxJitterMaxAI).Append("\n");
            sb.Append("  MaxJitterMaxVI: ").Append(MaxJitterMaxVI).Append("\n");
            sb.Append("  MaxJitterMaxVIC: ").Append(MaxJitterMaxVIC).Append("\n");
            sb.Append("  MaxJitterAvgAI: ").Append(MaxJitterAvgAI).Append("\n");
            sb.Append("  MaxJitterAvgVI: ").Append(MaxJitterAvgVI).Append("\n");
            sb.Append("  MaxJitterAvgVIC: ").Append(MaxJitterAvgVIC).Append("\n");
            sb.Append("  VideoRecvHeightMin: ").Append(VideoRecvHeightMin).Append("\n");
            sb.Append("  VideoRecvHeightMax: ").Append(VideoRecvHeightMax).Append("\n");
            sb.Append("  VideoRecvWidthMin: ").Append(VideoRecvWidthMin).Append("\n");
            sb.Append("  VideoRecvWidthMax: ").Append(VideoRecvWidthMax).Append("\n");
            sb.Append("  VideoSendHeightMin: ").Append(VideoSendHeightMin).Append("\n");
            sb.Append("  VideoSendHeightMax: ").Append(VideoSendHeightMax).Append("\n");
            sb.Append("  VideoSendWidthMin: ").Append(VideoSendWidthMin).Append("\n");
            sb.Append("  VideoSendWidthMax: ").Append(VideoSendWidthMax).Append("\n");
            sb.Append("  ContentRecvHeightMin: ").Append(ContentRecvHeightMin).Append("\n");
            sb.Append("  ContentRecvHeightMax: ").Append(ContentRecvHeightMax).Append("\n");
            sb.Append("  ContentRecvWidthMin: ").Append(ContentRecvWidthMin).Append("\n");
            sb.Append("  ContentRecvWidthMax: ").Append(ContentRecvWidthMax).Append("\n");
            sb.Append("  ContentSendHeightMin: ").Append(ContentSendHeightMin).Append("\n");
            sb.Append("  ContentSendHeightMax: ").Append(ContentSendHeightMax).Append("\n");
            sb.Append("  ContentSendWidthMin: ").Append(ContentSendWidthMin).Append("\n");
            sb.Append("  ContentSendWidthMax: ").Append(ContentSendWidthMax).Append("\n");
            sb.Append("  RoundTripDelayMin: ").Append(RoundTripDelayMin).Append("\n");
            sb.Append("  RoundTripDelayMax: ").Append(RoundTripDelayMax).Append("\n");
            sb.Append("  RoundTripDelayAvg: ").Append(RoundTripDelayAvg).Append("\n");
            sb.Append("  RfactorMin: ").Append(RfactorMin).Append("\n");
            sb.Append("  RfactorMax: ").Append(RfactorMax).Append("\n");
            sb.Append("  RfactorAvg: ").Append(RfactorAvg).Append("\n");
            sb.Append("  ProcessCpuLoadMin: ").Append(ProcessCpuLoadMin).Append("\n");
            sb.Append("  ProcessCpuLoadMax: ").Append(ProcessCpuLoadMax).Append("\n");
            sb.Append("  ProcessCpuLoadAvg: ").Append(ProcessCpuLoadAvg).Append("\n");
            sb.Append("  SystemCpuLoadMin: ").Append(SystemCpuLoadMin).Append("\n");
            sb.Append("  SystemCpuLoadMax: ").Append(SystemCpuLoadMax).Append("\n");
            sb.Append("  SystemCpuLoadAvg: ").Append(SystemCpuLoadAvg).Append("\n");
            sb.Append("  WifiRecvStrengthMin: ").Append(WifiRecvStrengthMin).Append("\n");
            sb.Append("  WifiRecvStrengthMax: ").Append(WifiRecvStrengthMax).Append("\n");
            sb.Append("  WifiRecvStrengthAvg: ").Append(WifiRecvStrengthAvg).Append("\n");
            sb.Append("  KeyFrameRateAvgVI: ").Append(KeyFrameRateAvgVI).Append("\n");
            sb.Append("  KeyFrameRateAvgVO: ").Append(KeyFrameRateAvgVO).Append("\n");
            sb.Append("  KeyFrameRateAvgVIC: ").Append(KeyFrameRateAvgVIC).Append("\n");
            sb.Append("  KeyFrameRateAvgVOC: ").Append(KeyFrameRateAvgVOC).Append("\n");
            sb.Append("  KeyFrameRateMinVI: ").Append(KeyFrameRateMinVI).Append("\n");
            sb.Append("  KeyFrameRateMinVO: ").Append(KeyFrameRateMinVO).Append("\n");
            sb.Append("  KeyFrameRateMinVIC: ").Append(KeyFrameRateMinVIC).Append("\n");
            sb.Append("  KeyFrameRateMinVOC: ").Append(KeyFrameRateMinVOC).Append("\n");
            sb.Append("  KeyFrameRateMaxVI: ").Append(KeyFrameRateMaxVI).Append("\n");
            sb.Append("  KeyFrameRateMaxVO: ").Append(KeyFrameRateMaxVO).Append("\n");
            sb.Append("  KeyFrameRateMaxVIC: ").Append(KeyFrameRateMaxVIC).Append("\n");
            sb.Append("  KeyFrameRateMaxVOC: ").Append(KeyFrameRateMaxVOC).Append("\n");
            sb.Append("  RoundTripDelayAvgVO: ").Append(RoundTripDelayAvgVO).Append("\n");
            sb.Append("  RoundTripDelayAvgVOC: ").Append(RoundTripDelayAvgVOC).Append("\n");
            sb.Append("  RoundTripDelayAvgAO: ").Append(RoundTripDelayAvgAO).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as EndpointIndigoSummaryStats);
        }

        /// <summary>
        /// Returns true if EndpointIndigoSummaryStats instances are equal
        /// </summary>
        /// <param name="input">Instance of EndpointIndigoSummaryStats to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(EndpointIndigoSummaryStats input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.AudioRecvCodec == input.AudioRecvCodec ||
                    (this.AudioRecvCodec != null &&
                    this.AudioRecvCodec.Equals(input.AudioRecvCodec))
                ) && 
                (
                    this.AudioSendCodec == input.AudioSendCodec ||
                    (this.AudioSendCodec != null &&
                    this.AudioSendCodec.Equals(input.AudioSendCodec))
                ) && 
                (
                    this.ContentRecv == input.ContentRecv ||
                    (this.ContentRecv != null &&
                    this.ContentRecv.Equals(input.ContentRecv))
                ) && 
                (
                    this.ContentSend == input.ContentSend ||
                    (this.ContentSend != null &&
                    this.ContentSend.Equals(input.ContentSend))
                ) && 
                (
                    this.TalkDetected == input.TalkDetected ||
                    (this.TalkDetected != null &&
                    this.TalkDetected.Equals(input.TalkDetected))
                ) && 
                (
                    this.SessionRelay == input.SessionRelay ||
                    (this.SessionRelay != null &&
                    this.SessionRelay.Equals(input.SessionRelay))
                ) && 
                (
                    this.SessionInRelay == input.SessionInRelay ||
                    (this.SessionInRelay != null &&
                    this.SessionInRelay.Equals(input.SessionInRelay))
                ) && 
                (
                    this.SessionOutRelay == input.SessionOutRelay ||
                    (this.SessionOutRelay != null &&
                    this.SessionOutRelay.Equals(input.SessionOutRelay))
                ) && 
                (
                    this.AudioRtpRelay == input.AudioRtpRelay ||
                    (this.AudioRtpRelay != null &&
                    this.AudioRtpRelay.Equals(input.AudioRtpRelay))
                ) && 
                (
                    this.CallRate == input.CallRate ||
                    (this.CallRate != null &&
                    this.CallRate.Equals(input.CallRate))
                ) && 
                (
                    this.CumulLossPercentAI == input.CumulLossPercentAI ||
                    (this.CumulLossPercentAI != null &&
                    this.CumulLossPercentAI.Equals(input.CumulLossPercentAI))
                ) && 
                (
                    this.CumulLossPercentAO == input.CumulLossPercentAO ||
                    (this.CumulLossPercentAO != null &&
                    this.CumulLossPercentAO.Equals(input.CumulLossPercentAO))
                ) && 
                (
                    this.CumulLossPercentVI == input.CumulLossPercentVI ||
                    (this.CumulLossPercentVI != null &&
                    this.CumulLossPercentVI.Equals(input.CumulLossPercentVI))
                ) && 
                (
                    this.CumulLossPercentVO == input.CumulLossPercentVO ||
                    (this.CumulLossPercentVO != null &&
                    this.CumulLossPercentVO.Equals(input.CumulLossPercentVO))
                ) && 
                (
                    this.CumulLossPercentVIC == input.CumulLossPercentVIC ||
                    (this.CumulLossPercentVIC != null &&
                    this.CumulLossPercentVIC.Equals(input.CumulLossPercentVIC))
                ) && 
                (
                    this.CumulLossPercentVOC == input.CumulLossPercentVOC ||
                    (this.CumulLossPercentVOC != null &&
                    this.CumulLossPercentVOC.Equals(input.CumulLossPercentVOC))
                ) && 
                (
                    this.CumulLossAI == input.CumulLossAI ||
                    (this.CumulLossAI != null &&
                    this.CumulLossAI.Equals(input.CumulLossAI))
                ) && 
                (
                    this.CumulLossAO == input.CumulLossAO ||
                    (this.CumulLossAO != null &&
                    this.CumulLossAO.Equals(input.CumulLossAO))
                ) && 
                (
                    this.CumulLossVI == input.CumulLossVI ||
                    (this.CumulLossVI != null &&
                    this.CumulLossVI.Equals(input.CumulLossVI))
                ) && 
                (
                    this.CumulLossVO == input.CumulLossVO ||
                    (this.CumulLossVO != null &&
                    this.CumulLossVO.Equals(input.CumulLossVO))
                ) && 
                (
                    this.CumulLossVIC == input.CumulLossVIC ||
                    (this.CumulLossVIC != null &&
                    this.CumulLossVIC.Equals(input.CumulLossVIC))
                ) && 
                (
                    this.CumulLossVOC == input.CumulLossVOC ||
                    (this.CumulLossVOC != null &&
                    this.CumulLossVOC.Equals(input.CumulLossVOC))
                ) && 
                (
                    this.DiscontinuityCount == input.DiscontinuityCount ||
                    (this.DiscontinuityCount != null &&
                    this.DiscontinuityCount.Equals(input.DiscontinuityCount))
                ) && 
                (
                    this.DroppedPacketsAI == input.DroppedPacketsAI ||
                    (this.DroppedPacketsAI != null &&
                    this.DroppedPacketsAI.Equals(input.DroppedPacketsAI))
                ) && 
                (
                    this.DroppedPacketsVI == input.DroppedPacketsVI ||
                    (this.DroppedPacketsVI != null &&
                    this.DroppedPacketsVI.Equals(input.DroppedPacketsVI))
                ) && 
                (
                    this.DroppedPacketsVIC == input.DroppedPacketsVIC ||
                    (this.DroppedPacketsVIC != null &&
                    this.DroppedPacketsVIC.Equals(input.DroppedPacketsVIC))
                ) && 
                (
                    this.MixUnderRunsAI == input.MixUnderRunsAI ||
                    (this.MixUnderRunsAI != null &&
                    this.MixUnderRunsAI.Equals(input.MixUnderRunsAI))
                ) && 
                (
                    this.NetworkAvgLossAI == input.NetworkAvgLossAI ||
                    (this.NetworkAvgLossAI != null &&
                    this.NetworkAvgLossAI.Equals(input.NetworkAvgLossAI))
                ) && 
                (
                    this.NetworkAvgLossAO == input.NetworkAvgLossAO ||
                    (this.NetworkAvgLossAO != null &&
                    this.NetworkAvgLossAO.Equals(input.NetworkAvgLossAO))
                ) && 
                (
                    this.NetworkAvgLossVI == input.NetworkAvgLossVI ||
                    (this.NetworkAvgLossVI != null &&
                    this.NetworkAvgLossVI.Equals(input.NetworkAvgLossVI))
                ) && 
                (
                    this.NetworkAvgLossVO == input.NetworkAvgLossVO ||
                    (this.NetworkAvgLossVO != null &&
                    this.NetworkAvgLossVO.Equals(input.NetworkAvgLossVO))
                ) && 
                (
                    this.NetworkCumulLossAI == input.NetworkCumulLossAI ||
                    (this.NetworkCumulLossAI != null &&
                    this.NetworkCumulLossAI.Equals(input.NetworkCumulLossAI))
                ) && 
                (
                    this.NetworkCumulLossAO == input.NetworkCumulLossAO ||
                    (this.NetworkCumulLossAO != null &&
                    this.NetworkCumulLossAO.Equals(input.NetworkCumulLossAO))
                ) && 
                (
                    this.NetworkCumulLossVI == input.NetworkCumulLossVI ||
                    (this.NetworkCumulLossVI != null &&
                    this.NetworkCumulLossVI.Equals(input.NetworkCumulLossVI))
                ) && 
                (
                    this.NetworkCumulLossVO == input.NetworkCumulLossVO ||
                    (this.NetworkCumulLossVO != null &&
                    this.NetworkCumulLossVO.Equals(input.NetworkCumulLossVO))
                ) && 
                (
                    this.NetworkLossAI == input.NetworkLossAI ||
                    (this.NetworkLossAI != null &&
                    this.NetworkLossAI.Equals(input.NetworkLossAI))
                ) && 
                (
                    this.NetworkLossAO == input.NetworkLossAO ||
                    (this.NetworkLossAO != null &&
                    this.NetworkLossAO.Equals(input.NetworkLossAO))
                ) && 
                (
                    this.NetworkLossVI == input.NetworkLossVI ||
                    (this.NetworkLossVI != null &&
                    this.NetworkLossVI.Equals(input.NetworkLossVI))
                ) && 
                (
                    this.NetworkLossVO == input.NetworkLossVO ||
                    (this.NetworkLossVO != null &&
                    this.NetworkLossVO.Equals(input.NetworkLossVO))
                ) && 
                (
                    this.CallQualityMin == input.CallQualityMin ||
                    (this.CallQualityMin != null &&
                    this.CallQualityMin.Equals(input.CallQualityMin))
                ) && 
                (
                    this.CallQualityMax == input.CallQualityMax ||
                    (this.CallQualityMax != null &&
                    this.CallQualityMax.Equals(input.CallQualityMax))
                ) && 
                (
                    this.CallQualityAvg == input.CallQualityAvg ||
                    (this.CallQualityAvg != null &&
                    this.CallQualityAvg.Equals(input.CallQualityAvg))
                ) && 
                (
                    this.FpsMinVI == input.FpsMinVI ||
                    (this.FpsMinVI != null &&
                    this.FpsMinVI.Equals(input.FpsMinVI))
                ) && 
                (
                    this.FpsMinVO == input.FpsMinVO ||
                    (this.FpsMinVO != null &&
                    this.FpsMinVO.Equals(input.FpsMinVO))
                ) && 
                (
                    this.FpsMinVIC == input.FpsMinVIC ||
                    (this.FpsMinVIC != null &&
                    this.FpsMinVIC.Equals(input.FpsMinVIC))
                ) && 
                (
                    this.FpsMinVOC == input.FpsMinVOC ||
                    (this.FpsMinVOC != null &&
                    this.FpsMinVOC.Equals(input.FpsMinVOC))
                ) && 
                (
                    this.FpsMaxVI == input.FpsMaxVI ||
                    (this.FpsMaxVI != null &&
                    this.FpsMaxVI.Equals(input.FpsMaxVI))
                ) && 
                (
                    this.FpsMaxVO == input.FpsMaxVO ||
                    (this.FpsMaxVO != null &&
                    this.FpsMaxVO.Equals(input.FpsMaxVO))
                ) && 
                (
                    this.FpsMaxVIC == input.FpsMaxVIC ||
                    (this.FpsMaxVIC != null &&
                    this.FpsMaxVIC.Equals(input.FpsMaxVIC))
                ) && 
                (
                    this.FpsMaxVOC == input.FpsMaxVOC ||
                    (this.FpsMaxVOC != null &&
                    this.FpsMaxVOC.Equals(input.FpsMaxVOC))
                ) && 
                (
                    this.FpsAvgVI == input.FpsAvgVI ||
                    (this.FpsAvgVI != null &&
                    this.FpsAvgVI.Equals(input.FpsAvgVI))
                ) && 
                (
                    this.FpsAvgVO == input.FpsAvgVO ||
                    (this.FpsAvgVO != null &&
                    this.FpsAvgVO.Equals(input.FpsAvgVO))
                ) && 
                (
                    this.FpsAvgVIC == input.FpsAvgVIC ||
                    (this.FpsAvgVIC != null &&
                    this.FpsAvgVIC.Equals(input.FpsAvgVIC))
                ) && 
                (
                    this.FpsAvgVOC == input.FpsAvgVOC ||
                    (this.FpsAvgVOC != null &&
                    this.FpsAvgVOC.Equals(input.FpsAvgVOC))
                ) && 
                (
                    this.BitrateMinAI == input.BitrateMinAI ||
                    (this.BitrateMinAI != null &&
                    this.BitrateMinAI.Equals(input.BitrateMinAI))
                ) && 
                (
                    this.BitrateMinAO == input.BitrateMinAO ||
                    (this.BitrateMinAO != null &&
                    this.BitrateMinAO.Equals(input.BitrateMinAO))
                ) && 
                (
                    this.BitrateMinVI == input.BitrateMinVI ||
                    (this.BitrateMinVI != null &&
                    this.BitrateMinVI.Equals(input.BitrateMinVI))
                ) && 
                (
                    this.BitrateMinVO == input.BitrateMinVO ||
                    (this.BitrateMinVO != null &&
                    this.BitrateMinVO.Equals(input.BitrateMinVO))
                ) && 
                (
                    this.BitrateMinVIC == input.BitrateMinVIC ||
                    (this.BitrateMinVIC != null &&
                    this.BitrateMinVIC.Equals(input.BitrateMinVIC))
                ) && 
                (
                    this.BitrateMinVOC == input.BitrateMinVOC ||
                    (this.BitrateMinVOC != null &&
                    this.BitrateMinVOC.Equals(input.BitrateMinVOC))
                ) && 
                (
                    this.BitrateMaxAI == input.BitrateMaxAI ||
                    (this.BitrateMaxAI != null &&
                    this.BitrateMaxAI.Equals(input.BitrateMaxAI))
                ) && 
                (
                    this.BitrateMaxAO == input.BitrateMaxAO ||
                    (this.BitrateMaxAO != null &&
                    this.BitrateMaxAO.Equals(input.BitrateMaxAO))
                ) && 
                (
                    this.BitrateMaxVI == input.BitrateMaxVI ||
                    (this.BitrateMaxVI != null &&
                    this.BitrateMaxVI.Equals(input.BitrateMaxVI))
                ) && 
                (
                    this.BitrateMaxVO == input.BitrateMaxVO ||
                    (this.BitrateMaxVO != null &&
                    this.BitrateMaxVO.Equals(input.BitrateMaxVO))
                ) && 
                (
                    this.BitrateMaxVIC == input.BitrateMaxVIC ||
                    (this.BitrateMaxVIC != null &&
                    this.BitrateMaxVIC.Equals(input.BitrateMaxVIC))
                ) && 
                (
                    this.BitrateMaxVOC == input.BitrateMaxVOC ||
                    (this.BitrateMaxVOC != null &&
                    this.BitrateMaxVOC.Equals(input.BitrateMaxVOC))
                ) && 
                (
                    this.BitrateAvgAI == input.BitrateAvgAI ||
                    (this.BitrateAvgAI != null &&
                    this.BitrateAvgAI.Equals(input.BitrateAvgAI))
                ) && 
                (
                    this.BitrateAvgAO == input.BitrateAvgAO ||
                    (this.BitrateAvgAO != null &&
                    this.BitrateAvgAO.Equals(input.BitrateAvgAO))
                ) && 
                (
                    this.BitrateAvgVI == input.BitrateAvgVI ||
                    (this.BitrateAvgVI != null &&
                    this.BitrateAvgVI.Equals(input.BitrateAvgVI))
                ) && 
                (
                    this.BitrateAvgVO == input.BitrateAvgVO ||
                    (this.BitrateAvgVO != null &&
                    this.BitrateAvgVO.Equals(input.BitrateAvgVO))
                ) && 
                (
                    this.BitrateAvgVIC == input.BitrateAvgVIC ||
                    (this.BitrateAvgVIC != null &&
                    this.BitrateAvgVIC.Equals(input.BitrateAvgVIC))
                ) && 
                (
                    this.BitrateAvgVOC == input.BitrateAvgVOC ||
                    (this.BitrateAvgVOC != null &&
                    this.BitrateAvgVOC.Equals(input.BitrateAvgVOC))
                ) && 
                (
                    this.JitterMinAI == input.JitterMinAI ||
                    (this.JitterMinAI != null &&
                    this.JitterMinAI.Equals(input.JitterMinAI))
                ) && 
                (
                    this.JitterMinAO == input.JitterMinAO ||
                    (this.JitterMinAO != null &&
                    this.JitterMinAO.Equals(input.JitterMinAO))
                ) && 
                (
                    this.JitterMinVI == input.JitterMinVI ||
                    (this.JitterMinVI != null &&
                    this.JitterMinVI.Equals(input.JitterMinVI))
                ) && 
                (
                    this.JitterMinVO == input.JitterMinVO ||
                    (this.JitterMinVO != null &&
                    this.JitterMinVO.Equals(input.JitterMinVO))
                ) && 
                (
                    this.JitterMinVIC == input.JitterMinVIC ||
                    (this.JitterMinVIC != null &&
                    this.JitterMinVIC.Equals(input.JitterMinVIC))
                ) && 
                (
                    this.JitterMinVOC == input.JitterMinVOC ||
                    (this.JitterMinVOC != null &&
                    this.JitterMinVOC.Equals(input.JitterMinVOC))
                ) && 
                (
                    this.JitterMaxAI == input.JitterMaxAI ||
                    (this.JitterMaxAI != null &&
                    this.JitterMaxAI.Equals(input.JitterMaxAI))
                ) && 
                (
                    this.JitterMaxAO == input.JitterMaxAO ||
                    (this.JitterMaxAO != null &&
                    this.JitterMaxAO.Equals(input.JitterMaxAO))
                ) && 
                (
                    this.JitterMaxVI == input.JitterMaxVI ||
                    (this.JitterMaxVI != null &&
                    this.JitterMaxVI.Equals(input.JitterMaxVI))
                ) && 
                (
                    this.JitterMaxVO == input.JitterMaxVO ||
                    (this.JitterMaxVO != null &&
                    this.JitterMaxVO.Equals(input.JitterMaxVO))
                ) && 
                (
                    this.JitterMaxVIC == input.JitterMaxVIC ||
                    (this.JitterMaxVIC != null &&
                    this.JitterMaxVIC.Equals(input.JitterMaxVIC))
                ) && 
                (
                    this.JitterMaxVOC == input.JitterMaxVOC ||
                    (this.JitterMaxVOC != null &&
                    this.JitterMaxVOC.Equals(input.JitterMaxVOC))
                ) && 
                (
                    this.JitterAvgAI == input.JitterAvgAI ||
                    (this.JitterAvgAI != null &&
                    this.JitterAvgAI.Equals(input.JitterAvgAI))
                ) && 
                (
                    this.JitterAvgAO == input.JitterAvgAO ||
                    (this.JitterAvgAO != null &&
                    this.JitterAvgAO.Equals(input.JitterAvgAO))
                ) && 
                (
                    this.JitterAvgVI == input.JitterAvgVI ||
                    (this.JitterAvgVI != null &&
                    this.JitterAvgVI.Equals(input.JitterAvgVI))
                ) && 
                (
                    this.JitterAvgVO == input.JitterAvgVO ||
                    (this.JitterAvgVO != null &&
                    this.JitterAvgVO.Equals(input.JitterAvgVO))
                ) && 
                (
                    this.JitterAvgVIC == input.JitterAvgVIC ||
                    (this.JitterAvgVIC != null &&
                    this.JitterAvgVIC.Equals(input.JitterAvgVIC))
                ) && 
                (
                    this.JitterAvgVOC == input.JitterAvgVOC ||
                    (this.JitterAvgVOC != null &&
                    this.JitterAvgVOC.Equals(input.JitterAvgVOC))
                ) && 
                (
                    this.MaxJitterMinAI == input.MaxJitterMinAI ||
                    (this.MaxJitterMinAI != null &&
                    this.MaxJitterMinAI.Equals(input.MaxJitterMinAI))
                ) && 
                (
                    this.MaxJitterMinVI == input.MaxJitterMinVI ||
                    (this.MaxJitterMinVI != null &&
                    this.MaxJitterMinVI.Equals(input.MaxJitterMinVI))
                ) && 
                (
                    this.MaxJitterMinVIC == input.MaxJitterMinVIC ||
                    (this.MaxJitterMinVIC != null &&
                    this.MaxJitterMinVIC.Equals(input.MaxJitterMinVIC))
                ) && 
                (
                    this.MaxJitterMaxAI == input.MaxJitterMaxAI ||
                    (this.MaxJitterMaxAI != null &&
                    this.MaxJitterMaxAI.Equals(input.MaxJitterMaxAI))
                ) && 
                (
                    this.MaxJitterMaxVI == input.MaxJitterMaxVI ||
                    (this.MaxJitterMaxVI != null &&
                    this.MaxJitterMaxVI.Equals(input.MaxJitterMaxVI))
                ) && 
                (
                    this.MaxJitterMaxVIC == input.MaxJitterMaxVIC ||
                    (this.MaxJitterMaxVIC != null &&
                    this.MaxJitterMaxVIC.Equals(input.MaxJitterMaxVIC))
                ) && 
                (
                    this.MaxJitterAvgAI == input.MaxJitterAvgAI ||
                    (this.MaxJitterAvgAI != null &&
                    this.MaxJitterAvgAI.Equals(input.MaxJitterAvgAI))
                ) && 
                (
                    this.MaxJitterAvgVI == input.MaxJitterAvgVI ||
                    (this.MaxJitterAvgVI != null &&
                    this.MaxJitterAvgVI.Equals(input.MaxJitterAvgVI))
                ) && 
                (
                    this.MaxJitterAvgVIC == input.MaxJitterAvgVIC ||
                    (this.MaxJitterAvgVIC != null &&
                    this.MaxJitterAvgVIC.Equals(input.MaxJitterAvgVIC))
                ) && 
                (
                    this.VideoRecvHeightMin == input.VideoRecvHeightMin ||
                    (this.VideoRecvHeightMin != null &&
                    this.VideoRecvHeightMin.Equals(input.VideoRecvHeightMin))
                ) && 
                (
                    this.VideoRecvHeightMax == input.VideoRecvHeightMax ||
                    (this.VideoRecvHeightMax != null &&
                    this.VideoRecvHeightMax.Equals(input.VideoRecvHeightMax))
                ) && 
                (
                    this.VideoRecvWidthMin == input.VideoRecvWidthMin ||
                    (this.VideoRecvWidthMin != null &&
                    this.VideoRecvWidthMin.Equals(input.VideoRecvWidthMin))
                ) && 
                (
                    this.VideoRecvWidthMax == input.VideoRecvWidthMax ||
                    (this.VideoRecvWidthMax != null &&
                    this.VideoRecvWidthMax.Equals(input.VideoRecvWidthMax))
                ) && 
                (
                    this.VideoSendHeightMin == input.VideoSendHeightMin ||
                    (this.VideoSendHeightMin != null &&
                    this.VideoSendHeightMin.Equals(input.VideoSendHeightMin))
                ) && 
                (
                    this.VideoSendHeightMax == input.VideoSendHeightMax ||
                    (this.VideoSendHeightMax != null &&
                    this.VideoSendHeightMax.Equals(input.VideoSendHeightMax))
                ) && 
                (
                    this.VideoSendWidthMin == input.VideoSendWidthMin ||
                    (this.VideoSendWidthMin != null &&
                    this.VideoSendWidthMin.Equals(input.VideoSendWidthMin))
                ) && 
                (
                    this.VideoSendWidthMax == input.VideoSendWidthMax ||
                    (this.VideoSendWidthMax != null &&
                    this.VideoSendWidthMax.Equals(input.VideoSendWidthMax))
                ) && 
                (
                    this.ContentRecvHeightMin == input.ContentRecvHeightMin ||
                    (this.ContentRecvHeightMin != null &&
                    this.ContentRecvHeightMin.Equals(input.ContentRecvHeightMin))
                ) && 
                (
                    this.ContentRecvHeightMax == input.ContentRecvHeightMax ||
                    (this.ContentRecvHeightMax != null &&
                    this.ContentRecvHeightMax.Equals(input.ContentRecvHeightMax))
                ) && 
                (
                    this.ContentRecvWidthMin == input.ContentRecvWidthMin ||
                    (this.ContentRecvWidthMin != null &&
                    this.ContentRecvWidthMin.Equals(input.ContentRecvWidthMin))
                ) && 
                (
                    this.ContentRecvWidthMax == input.ContentRecvWidthMax ||
                    (this.ContentRecvWidthMax != null &&
                    this.ContentRecvWidthMax.Equals(input.ContentRecvWidthMax))
                ) && 
                (
                    this.ContentSendHeightMin == input.ContentSendHeightMin ||
                    (this.ContentSendHeightMin != null &&
                    this.ContentSendHeightMin.Equals(input.ContentSendHeightMin))
                ) && 
                (
                    this.ContentSendHeightMax == input.ContentSendHeightMax ||
                    (this.ContentSendHeightMax != null &&
                    this.ContentSendHeightMax.Equals(input.ContentSendHeightMax))
                ) && 
                (
                    this.ContentSendWidthMin == input.ContentSendWidthMin ||
                    (this.ContentSendWidthMin != null &&
                    this.ContentSendWidthMin.Equals(input.ContentSendWidthMin))
                ) && 
                (
                    this.ContentSendWidthMax == input.ContentSendWidthMax ||
                    (this.ContentSendWidthMax != null &&
                    this.ContentSendWidthMax.Equals(input.ContentSendWidthMax))
                ) && 
                (
                    this.RoundTripDelayMin == input.RoundTripDelayMin ||
                    (this.RoundTripDelayMin != null &&
                    this.RoundTripDelayMin.Equals(input.RoundTripDelayMin))
                ) && 
                (
                    this.RoundTripDelayMax == input.RoundTripDelayMax ||
                    (this.RoundTripDelayMax != null &&
                    this.RoundTripDelayMax.Equals(input.RoundTripDelayMax))
                ) && 
                (
                    this.RoundTripDelayAvg == input.RoundTripDelayAvg ||
                    (this.RoundTripDelayAvg != null &&
                    this.RoundTripDelayAvg.Equals(input.RoundTripDelayAvg))
                ) && 
                (
                    this.RfactorMin == input.RfactorMin ||
                    (this.RfactorMin != null &&
                    this.RfactorMin.Equals(input.RfactorMin))
                ) && 
                (
                    this.RfactorMax == input.RfactorMax ||
                    (this.RfactorMax != null &&
                    this.RfactorMax.Equals(input.RfactorMax))
                ) && 
                (
                    this.RfactorAvg == input.RfactorAvg ||
                    (this.RfactorAvg != null &&
                    this.RfactorAvg.Equals(input.RfactorAvg))
                ) && 
                (
                    this.ProcessCpuLoadMin == input.ProcessCpuLoadMin ||
                    (this.ProcessCpuLoadMin != null &&
                    this.ProcessCpuLoadMin.Equals(input.ProcessCpuLoadMin))
                ) && 
                (
                    this.ProcessCpuLoadMax == input.ProcessCpuLoadMax ||
                    (this.ProcessCpuLoadMax != null &&
                    this.ProcessCpuLoadMax.Equals(input.ProcessCpuLoadMax))
                ) && 
                (
                    this.ProcessCpuLoadAvg == input.ProcessCpuLoadAvg ||
                    (this.ProcessCpuLoadAvg != null &&
                    this.ProcessCpuLoadAvg.Equals(input.ProcessCpuLoadAvg))
                ) && 
                (
                    this.SystemCpuLoadMin == input.SystemCpuLoadMin ||
                    (this.SystemCpuLoadMin != null &&
                    this.SystemCpuLoadMin.Equals(input.SystemCpuLoadMin))
                ) && 
                (
                    this.SystemCpuLoadMax == input.SystemCpuLoadMax ||
                    (this.SystemCpuLoadMax != null &&
                    this.SystemCpuLoadMax.Equals(input.SystemCpuLoadMax))
                ) && 
                (
                    this.SystemCpuLoadAvg == input.SystemCpuLoadAvg ||
                    (this.SystemCpuLoadAvg != null &&
                    this.SystemCpuLoadAvg.Equals(input.SystemCpuLoadAvg))
                ) && 
                (
                    this.WifiRecvStrengthMin == input.WifiRecvStrengthMin ||
                    (this.WifiRecvStrengthMin != null &&
                    this.WifiRecvStrengthMin.Equals(input.WifiRecvStrengthMin))
                ) && 
                (
                    this.WifiRecvStrengthMax == input.WifiRecvStrengthMax ||
                    (this.WifiRecvStrengthMax != null &&
                    this.WifiRecvStrengthMax.Equals(input.WifiRecvStrengthMax))
                ) && 
                (
                    this.WifiRecvStrengthAvg == input.WifiRecvStrengthAvg ||
                    (this.WifiRecvStrengthAvg != null &&
                    this.WifiRecvStrengthAvg.Equals(input.WifiRecvStrengthAvg))
                ) && 
                (
                    this.KeyFrameRateAvgVI == input.KeyFrameRateAvgVI ||
                    (this.KeyFrameRateAvgVI != null &&
                    this.KeyFrameRateAvgVI.Equals(input.KeyFrameRateAvgVI))
                ) && 
                (
                    this.KeyFrameRateAvgVO == input.KeyFrameRateAvgVO ||
                    (this.KeyFrameRateAvgVO != null &&
                    this.KeyFrameRateAvgVO.Equals(input.KeyFrameRateAvgVO))
                ) && 
                (
                    this.KeyFrameRateAvgVIC == input.KeyFrameRateAvgVIC ||
                    (this.KeyFrameRateAvgVIC != null &&
                    this.KeyFrameRateAvgVIC.Equals(input.KeyFrameRateAvgVIC))
                ) && 
                (
                    this.KeyFrameRateAvgVOC == input.KeyFrameRateAvgVOC ||
                    (this.KeyFrameRateAvgVOC != null &&
                    this.KeyFrameRateAvgVOC.Equals(input.KeyFrameRateAvgVOC))
                ) && 
                (
                    this.KeyFrameRateMinVI == input.KeyFrameRateMinVI ||
                    (this.KeyFrameRateMinVI != null &&
                    this.KeyFrameRateMinVI.Equals(input.KeyFrameRateMinVI))
                ) && 
                (
                    this.KeyFrameRateMinVO == input.KeyFrameRateMinVO ||
                    (this.KeyFrameRateMinVO != null &&
                    this.KeyFrameRateMinVO.Equals(input.KeyFrameRateMinVO))
                ) && 
                (
                    this.KeyFrameRateMinVIC == input.KeyFrameRateMinVIC ||
                    (this.KeyFrameRateMinVIC != null &&
                    this.KeyFrameRateMinVIC.Equals(input.KeyFrameRateMinVIC))
                ) && 
                (
                    this.KeyFrameRateMinVOC == input.KeyFrameRateMinVOC ||
                    (this.KeyFrameRateMinVOC != null &&
                    this.KeyFrameRateMinVOC.Equals(input.KeyFrameRateMinVOC))
                ) && 
                (
                    this.KeyFrameRateMaxVI == input.KeyFrameRateMaxVI ||
                    (this.KeyFrameRateMaxVI != null &&
                    this.KeyFrameRateMaxVI.Equals(input.KeyFrameRateMaxVI))
                ) && 
                (
                    this.KeyFrameRateMaxVO == input.KeyFrameRateMaxVO ||
                    (this.KeyFrameRateMaxVO != null &&
                    this.KeyFrameRateMaxVO.Equals(input.KeyFrameRateMaxVO))
                ) && 
                (
                    this.KeyFrameRateMaxVIC == input.KeyFrameRateMaxVIC ||
                    (this.KeyFrameRateMaxVIC != null &&
                    this.KeyFrameRateMaxVIC.Equals(input.KeyFrameRateMaxVIC))
                ) && 
                (
                    this.KeyFrameRateMaxVOC == input.KeyFrameRateMaxVOC ||
                    (this.KeyFrameRateMaxVOC != null &&
                    this.KeyFrameRateMaxVOC.Equals(input.KeyFrameRateMaxVOC))
                ) && 
                (
                    this.RoundTripDelayAvgVO == input.RoundTripDelayAvgVO ||
                    (this.RoundTripDelayAvgVO != null &&
                    this.RoundTripDelayAvgVO.Equals(input.RoundTripDelayAvgVO))
                ) && 
                (
                    this.RoundTripDelayAvgVOC == input.RoundTripDelayAvgVOC ||
                    (this.RoundTripDelayAvgVOC != null &&
                    this.RoundTripDelayAvgVOC.Equals(input.RoundTripDelayAvgVOC))
                ) && 
                (
                    this.RoundTripDelayAvgAO == input.RoundTripDelayAvgAO ||
                    (this.RoundTripDelayAvgAO != null &&
                    this.RoundTripDelayAvgAO.Equals(input.RoundTripDelayAvgAO))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.AudioRecvCodec != null)
                    hashCode = hashCode * 59 + this.AudioRecvCodec.GetHashCode();
                if (this.AudioSendCodec != null)
                    hashCode = hashCode * 59 + this.AudioSendCodec.GetHashCode();
                if (this.ContentRecv != null)
                    hashCode = hashCode * 59 + this.ContentRecv.GetHashCode();
                if (this.ContentSend != null)
                    hashCode = hashCode * 59 + this.ContentSend.GetHashCode();
                if (this.TalkDetected != null)
                    hashCode = hashCode * 59 + this.TalkDetected.GetHashCode();
                if (this.SessionRelay != null)
                    hashCode = hashCode * 59 + this.SessionRelay.GetHashCode();
                if (this.SessionInRelay != null)
                    hashCode = hashCode * 59 + this.SessionInRelay.GetHashCode();
                if (this.SessionOutRelay != null)
                    hashCode = hashCode * 59 + this.SessionOutRelay.GetHashCode();
                if (this.AudioRtpRelay != null)
                    hashCode = hashCode * 59 + this.AudioRtpRelay.GetHashCode();
                if (this.CallRate != null)
                    hashCode = hashCode * 59 + this.CallRate.GetHashCode();
                if (this.CumulLossPercentAI != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentAI.GetHashCode();
                if (this.CumulLossPercentAO != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentAO.GetHashCode();
                if (this.CumulLossPercentVI != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentVI.GetHashCode();
                if (this.CumulLossPercentVO != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentVO.GetHashCode();
                if (this.CumulLossPercentVIC != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentVIC.GetHashCode();
                if (this.CumulLossPercentVOC != null)
                    hashCode = hashCode * 59 + this.CumulLossPercentVOC.GetHashCode();
                if (this.CumulLossAI != null)
                    hashCode = hashCode * 59 + this.CumulLossAI.GetHashCode();
                if (this.CumulLossAO != null)
                    hashCode = hashCode * 59 + this.CumulLossAO.GetHashCode();
                if (this.CumulLossVI != null)
                    hashCode = hashCode * 59 + this.CumulLossVI.GetHashCode();
                if (this.CumulLossVO != null)
                    hashCode = hashCode * 59 + this.CumulLossVO.GetHashCode();
                if (this.CumulLossVIC != null)
                    hashCode = hashCode * 59 + this.CumulLossVIC.GetHashCode();
                if (this.CumulLossVOC != null)
                    hashCode = hashCode * 59 + this.CumulLossVOC.GetHashCode();
                if (this.DiscontinuityCount != null)
                    hashCode = hashCode * 59 + this.DiscontinuityCount.GetHashCode();
                if (this.DroppedPacketsAI != null)
                    hashCode = hashCode * 59 + this.DroppedPacketsAI.GetHashCode();
                if (this.DroppedPacketsVI != null)
                    hashCode = hashCode * 59 + this.DroppedPacketsVI.GetHashCode();
                if (this.DroppedPacketsVIC != null)
                    hashCode = hashCode * 59 + this.DroppedPacketsVIC.GetHashCode();
                if (this.MixUnderRunsAI != null)
                    hashCode = hashCode * 59 + this.MixUnderRunsAI.GetHashCode();
                if (this.NetworkAvgLossAI != null)
                    hashCode = hashCode * 59 + this.NetworkAvgLossAI.GetHashCode();
                if (this.NetworkAvgLossAO != null)
                    hashCode = hashCode * 59 + this.NetworkAvgLossAO.GetHashCode();
                if (this.NetworkAvgLossVI != null)
                    hashCode = hashCode * 59 + this.NetworkAvgLossVI.GetHashCode();
                if (this.NetworkAvgLossVO != null)
                    hashCode = hashCode * 59 + this.NetworkAvgLossVO.GetHashCode();
                if (this.NetworkCumulLossAI != null)
                    hashCode = hashCode * 59 + this.NetworkCumulLossAI.GetHashCode();
                if (this.NetworkCumulLossAO != null)
                    hashCode = hashCode * 59 + this.NetworkCumulLossAO.GetHashCode();
                if (this.NetworkCumulLossVI != null)
                    hashCode = hashCode * 59 + this.NetworkCumulLossVI.GetHashCode();
                if (this.NetworkCumulLossVO != null)
                    hashCode = hashCode * 59 + this.NetworkCumulLossVO.GetHashCode();
                if (this.NetworkLossAI != null)
                    hashCode = hashCode * 59 + this.NetworkLossAI.GetHashCode();
                if (this.NetworkLossAO != null)
                    hashCode = hashCode * 59 + this.NetworkLossAO.GetHashCode();
                if (this.NetworkLossVI != null)
                    hashCode = hashCode * 59 + this.NetworkLossVI.GetHashCode();
                if (this.NetworkLossVO != null)
                    hashCode = hashCode * 59 + this.NetworkLossVO.GetHashCode();
                if (this.CallQualityMin != null)
                    hashCode = hashCode * 59 + this.CallQualityMin.GetHashCode();
                if (this.CallQualityMax != null)
                    hashCode = hashCode * 59 + this.CallQualityMax.GetHashCode();
                if (this.CallQualityAvg != null)
                    hashCode = hashCode * 59 + this.CallQualityAvg.GetHashCode();
                if (this.FpsMinVI != null)
                    hashCode = hashCode * 59 + this.FpsMinVI.GetHashCode();
                if (this.FpsMinVO != null)
                    hashCode = hashCode * 59 + this.FpsMinVO.GetHashCode();
                if (this.FpsMinVIC != null)
                    hashCode = hashCode * 59 + this.FpsMinVIC.GetHashCode();
                if (this.FpsMinVOC != null)
                    hashCode = hashCode * 59 + this.FpsMinVOC.GetHashCode();
                if (this.FpsMaxVI != null)
                    hashCode = hashCode * 59 + this.FpsMaxVI.GetHashCode();
                if (this.FpsMaxVO != null)
                    hashCode = hashCode * 59 + this.FpsMaxVO.GetHashCode();
                if (this.FpsMaxVIC != null)
                    hashCode = hashCode * 59 + this.FpsMaxVIC.GetHashCode();
                if (this.FpsMaxVOC != null)
                    hashCode = hashCode * 59 + this.FpsMaxVOC.GetHashCode();
                if (this.FpsAvgVI != null)
                    hashCode = hashCode * 59 + this.FpsAvgVI.GetHashCode();
                if (this.FpsAvgVO != null)
                    hashCode = hashCode * 59 + this.FpsAvgVO.GetHashCode();
                if (this.FpsAvgVIC != null)
                    hashCode = hashCode * 59 + this.FpsAvgVIC.GetHashCode();
                if (this.FpsAvgVOC != null)
                    hashCode = hashCode * 59 + this.FpsAvgVOC.GetHashCode();
                if (this.BitrateMinAI != null)
                    hashCode = hashCode * 59 + this.BitrateMinAI.GetHashCode();
                if (this.BitrateMinAO != null)
                    hashCode = hashCode * 59 + this.BitrateMinAO.GetHashCode();
                if (this.BitrateMinVI != null)
                    hashCode = hashCode * 59 + this.BitrateMinVI.GetHashCode();
                if (this.BitrateMinVO != null)
                    hashCode = hashCode * 59 + this.BitrateMinVO.GetHashCode();
                if (this.BitrateMinVIC != null)
                    hashCode = hashCode * 59 + this.BitrateMinVIC.GetHashCode();
                if (this.BitrateMinVOC != null)
                    hashCode = hashCode * 59 + this.BitrateMinVOC.GetHashCode();
                if (this.BitrateMaxAI != null)
                    hashCode = hashCode * 59 + this.BitrateMaxAI.GetHashCode();
                if (this.BitrateMaxAO != null)
                    hashCode = hashCode * 59 + this.BitrateMaxAO.GetHashCode();
                if (this.BitrateMaxVI != null)
                    hashCode = hashCode * 59 + this.BitrateMaxVI.GetHashCode();
                if (this.BitrateMaxVO != null)
                    hashCode = hashCode * 59 + this.BitrateMaxVO.GetHashCode();
                if (this.BitrateMaxVIC != null)
                    hashCode = hashCode * 59 + this.BitrateMaxVIC.GetHashCode();
                if (this.BitrateMaxVOC != null)
                    hashCode = hashCode * 59 + this.BitrateMaxVOC.GetHashCode();
                if (this.BitrateAvgAI != null)
                    hashCode = hashCode * 59 + this.BitrateAvgAI.GetHashCode();
                if (this.BitrateAvgAO != null)
                    hashCode = hashCode * 59 + this.BitrateAvgAO.GetHashCode();
                if (this.BitrateAvgVI != null)
                    hashCode = hashCode * 59 + this.BitrateAvgVI.GetHashCode();
                if (this.BitrateAvgVO != null)
                    hashCode = hashCode * 59 + this.BitrateAvgVO.GetHashCode();
                if (this.BitrateAvgVIC != null)
                    hashCode = hashCode * 59 + this.BitrateAvgVIC.GetHashCode();
                if (this.BitrateAvgVOC != null)
                    hashCode = hashCode * 59 + this.BitrateAvgVOC.GetHashCode();
                if (this.JitterMinAI != null)
                    hashCode = hashCode * 59 + this.JitterMinAI.GetHashCode();
                if (this.JitterMinAO != null)
                    hashCode = hashCode * 59 + this.JitterMinAO.GetHashCode();
                if (this.JitterMinVI != null)
                    hashCode = hashCode * 59 + this.JitterMinVI.GetHashCode();
                if (this.JitterMinVO != null)
                    hashCode = hashCode * 59 + this.JitterMinVO.GetHashCode();
                if (this.JitterMinVIC != null)
                    hashCode = hashCode * 59 + this.JitterMinVIC.GetHashCode();
                if (this.JitterMinVOC != null)
                    hashCode = hashCode * 59 + this.JitterMinVOC.GetHashCode();
                if (this.JitterMaxAI != null)
                    hashCode = hashCode * 59 + this.JitterMaxAI.GetHashCode();
                if (this.JitterMaxAO != null)
                    hashCode = hashCode * 59 + this.JitterMaxAO.GetHashCode();
                if (this.JitterMaxVI != null)
                    hashCode = hashCode * 59 + this.JitterMaxVI.GetHashCode();
                if (this.JitterMaxVO != null)
                    hashCode = hashCode * 59 + this.JitterMaxVO.GetHashCode();
                if (this.JitterMaxVIC != null)
                    hashCode = hashCode * 59 + this.JitterMaxVIC.GetHashCode();
                if (this.JitterMaxVOC != null)
                    hashCode = hashCode * 59 + this.JitterMaxVOC.GetHashCode();
                if (this.JitterAvgAI != null)
                    hashCode = hashCode * 59 + this.JitterAvgAI.GetHashCode();
                if (this.JitterAvgAO != null)
                    hashCode = hashCode * 59 + this.JitterAvgAO.GetHashCode();
                if (this.JitterAvgVI != null)
                    hashCode = hashCode * 59 + this.JitterAvgVI.GetHashCode();
                if (this.JitterAvgVO != null)
                    hashCode = hashCode * 59 + this.JitterAvgVO.GetHashCode();
                if (this.JitterAvgVIC != null)
                    hashCode = hashCode * 59 + this.JitterAvgVIC.GetHashCode();
                if (this.JitterAvgVOC != null)
                    hashCode = hashCode * 59 + this.JitterAvgVOC.GetHashCode();
                if (this.MaxJitterMinAI != null)
                    hashCode = hashCode * 59 + this.MaxJitterMinAI.GetHashCode();
                if (this.MaxJitterMinVI != null)
                    hashCode = hashCode * 59 + this.MaxJitterMinVI.GetHashCode();
                if (this.MaxJitterMinVIC != null)
                    hashCode = hashCode * 59 + this.MaxJitterMinVIC.GetHashCode();
                if (this.MaxJitterMaxAI != null)
                    hashCode = hashCode * 59 + this.MaxJitterMaxAI.GetHashCode();
                if (this.MaxJitterMaxVI != null)
                    hashCode = hashCode * 59 + this.MaxJitterMaxVI.GetHashCode();
                if (this.MaxJitterMaxVIC != null)
                    hashCode = hashCode * 59 + this.MaxJitterMaxVIC.GetHashCode();
                if (this.MaxJitterAvgAI != null)
                    hashCode = hashCode * 59 + this.MaxJitterAvgAI.GetHashCode();
                if (this.MaxJitterAvgVI != null)
                    hashCode = hashCode * 59 + this.MaxJitterAvgVI.GetHashCode();
                if (this.MaxJitterAvgVIC != null)
                    hashCode = hashCode * 59 + this.MaxJitterAvgVIC.GetHashCode();
                if (this.VideoRecvHeightMin != null)
                    hashCode = hashCode * 59 + this.VideoRecvHeightMin.GetHashCode();
                if (this.VideoRecvHeightMax != null)
                    hashCode = hashCode * 59 + this.VideoRecvHeightMax.GetHashCode();
                if (this.VideoRecvWidthMin != null)
                    hashCode = hashCode * 59 + this.VideoRecvWidthMin.GetHashCode();
                if (this.VideoRecvWidthMax != null)
                    hashCode = hashCode * 59 + this.VideoRecvWidthMax.GetHashCode();
                if (this.VideoSendHeightMin != null)
                    hashCode = hashCode * 59 + this.VideoSendHeightMin.GetHashCode();
                if (this.VideoSendHeightMax != null)
                    hashCode = hashCode * 59 + this.VideoSendHeightMax.GetHashCode();
                if (this.VideoSendWidthMin != null)
                    hashCode = hashCode * 59 + this.VideoSendWidthMin.GetHashCode();
                if (this.VideoSendWidthMax != null)
                    hashCode = hashCode * 59 + this.VideoSendWidthMax.GetHashCode();
                if (this.ContentRecvHeightMin != null)
                    hashCode = hashCode * 59 + this.ContentRecvHeightMin.GetHashCode();
                if (this.ContentRecvHeightMax != null)
                    hashCode = hashCode * 59 + this.ContentRecvHeightMax.GetHashCode();
                if (this.ContentRecvWidthMin != null)
                    hashCode = hashCode * 59 + this.ContentRecvWidthMin.GetHashCode();
                if (this.ContentRecvWidthMax != null)
                    hashCode = hashCode * 59 + this.ContentRecvWidthMax.GetHashCode();
                if (this.ContentSendHeightMin != null)
                    hashCode = hashCode * 59 + this.ContentSendHeightMin.GetHashCode();
                if (this.ContentSendHeightMax != null)
                    hashCode = hashCode * 59 + this.ContentSendHeightMax.GetHashCode();
                if (this.ContentSendWidthMin != null)
                    hashCode = hashCode * 59 + this.ContentSendWidthMin.GetHashCode();
                if (this.ContentSendWidthMax != null)
                    hashCode = hashCode * 59 + this.ContentSendWidthMax.GetHashCode();
                if (this.RoundTripDelayMin != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayMin.GetHashCode();
                if (this.RoundTripDelayMax != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayMax.GetHashCode();
                if (this.RoundTripDelayAvg != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayAvg.GetHashCode();
                if (this.RfactorMin != null)
                    hashCode = hashCode * 59 + this.RfactorMin.GetHashCode();
                if (this.RfactorMax != null)
                    hashCode = hashCode * 59 + this.RfactorMax.GetHashCode();
                if (this.RfactorAvg != null)
                    hashCode = hashCode * 59 + this.RfactorAvg.GetHashCode();
                if (this.ProcessCpuLoadMin != null)
                    hashCode = hashCode * 59 + this.ProcessCpuLoadMin.GetHashCode();
                if (this.ProcessCpuLoadMax != null)
                    hashCode = hashCode * 59 + this.ProcessCpuLoadMax.GetHashCode();
                if (this.ProcessCpuLoadAvg != null)
                    hashCode = hashCode * 59 + this.ProcessCpuLoadAvg.GetHashCode();
                if (this.SystemCpuLoadMin != null)
                    hashCode = hashCode * 59 + this.SystemCpuLoadMin.GetHashCode();
                if (this.SystemCpuLoadMax != null)
                    hashCode = hashCode * 59 + this.SystemCpuLoadMax.GetHashCode();
                if (this.SystemCpuLoadAvg != null)
                    hashCode = hashCode * 59 + this.SystemCpuLoadAvg.GetHashCode();
                if (this.WifiRecvStrengthMin != null)
                    hashCode = hashCode * 59 + this.WifiRecvStrengthMin.GetHashCode();
                if (this.WifiRecvStrengthMax != null)
                    hashCode = hashCode * 59 + this.WifiRecvStrengthMax.GetHashCode();
                if (this.WifiRecvStrengthAvg != null)
                    hashCode = hashCode * 59 + this.WifiRecvStrengthAvg.GetHashCode();
                if (this.KeyFrameRateAvgVI != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateAvgVI.GetHashCode();
                if (this.KeyFrameRateAvgVO != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateAvgVO.GetHashCode();
                if (this.KeyFrameRateAvgVIC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateAvgVIC.GetHashCode();
                if (this.KeyFrameRateAvgVOC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateAvgVOC.GetHashCode();
                if (this.KeyFrameRateMinVI != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMinVI.GetHashCode();
                if (this.KeyFrameRateMinVO != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMinVO.GetHashCode();
                if (this.KeyFrameRateMinVIC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMinVIC.GetHashCode();
                if (this.KeyFrameRateMinVOC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMinVOC.GetHashCode();
                if (this.KeyFrameRateMaxVI != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMaxVI.GetHashCode();
                if (this.KeyFrameRateMaxVO != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMaxVO.GetHashCode();
                if (this.KeyFrameRateMaxVIC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMaxVIC.GetHashCode();
                if (this.KeyFrameRateMaxVOC != null)
                    hashCode = hashCode * 59 + this.KeyFrameRateMaxVOC.GetHashCode();
                if (this.RoundTripDelayAvgVO != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayAvgVO.GetHashCode();
                if (this.RoundTripDelayAvgVOC != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayAvgVOC.GetHashCode();
                if (this.RoundTripDelayAvgAO != null)
                    hashCode = hashCode * 59 + this.RoundTripDelayAvgAO.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
