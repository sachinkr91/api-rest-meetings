/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407232018
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;

/**
 * Endpoint
 */

public class Endpoint {
  @SerializedName("EcMode")
  private String ecMode = null;

  @SerializedName("creationtime")
  private String creationtime = null;

  @SerializedName("audio.remote.rtcpAddress")
  private String audioRemoteRtcpAddress = null;

  @SerializedName("VideoSendCodec")
  private String videoSendCodec = null;

  @SerializedName("AudioPlayID")
  private String audioPlayID = null;

  @SerializedName("CallQualityRecv")
  private String callQualityRecv = null;

  @SerializedName("SessionOut")
  private String sessionOut = null;

  @SerializedName("audio.local.address")
  private String audioLocalAddress = null;

  @SerializedName("meetingid")
  private String meetingid = null;

  @SerializedName("VideoSendWidth")
  private String videoSendWidth = null;

  @SerializedName("CallQualitySend")
  private String callQualitySend = null;

  @SerializedName("mhaddress")
  private String mhaddress = null;

  @SerializedName("RDCControlleeCapable")
  private String rdCControlleeCapable = null;

  @SerializedName("AudioCapName")
  private String audioCapName = null;

  @SerializedName("ProxyInfo")
  private String proxyInfo = null;

  @SerializedName("AudioSendCodec")
  private String audioSendCodec = null;

  @SerializedName("vendor")
  private String vendor = null;

  @SerializedName("VideoRecvWidth")
  private String videoRecvWidth = null;

  @SerializedName("conaddress")
  private String conaddress = null;

  @SerializedName("TalkDetected")
  private String talkDetected = null;

  @SerializedName("SubLayout")
  private String subLayout = null;

  @SerializedName("AudioRtcpRelay")
  private String audioRtcpRelay = null;

  @SerializedName("AudioRecvLocalMute")
  private String audioRecvLocalMute = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("video.local.address")
  private String videoLocalAddress = null;

  @SerializedName("audio.local.rtcpAddress")
  private String audioLocalRtcpAddress = null;

  @SerializedName("ContentRtpRelay")
  private String contentRtpRelay = null;

  @SerializedName("content.local.rtcpAddress")
  private String contentLocalRtcpAddress = null;

  @SerializedName("RemoteConnectionCount")
  private String remoteConnectionCount = null;

  @SerializedName("callrate")
  private String callrate = null;

  @SerializedName("MixerGuid")
  private String mixerGuid = null;

  @SerializedName("transport")
  private String transport = null;

  @SerializedName("AudioCapSelectID")
  private String audioCapSelectID = null;

  @SerializedName("CountryCode")
  private String countryCode = null;

  @SerializedName("RDCControllerCapable")
  private String rdCControllerCapable = null;

  @SerializedName("pairedname")
  private String pairedname = null;

  @SerializedName("VideoRtcpRelay")
  private String videoRtcpRelay = null;

  @SerializedName("EndpointCpuParams")
  private String endpointCpuParams = null;

  @SerializedName("video.remote.address")
  private String videoRemoteAddress = null;

  @SerializedName("version")
  private String version = null;

  @SerializedName("ContentRecv")
  private String contentRecv = null;

  @SerializedName("localName")
  private String localName = null;

  @SerializedName("BJNUserId")
  private String bjNUserId = null;

  @SerializedName("content.remote.address")
  private String contentRemoteAddress = null;

  @SerializedName("AudioSend")
  private String audioSend = null;

  @SerializedName("ParticipantDTMFMenus")
  private String participantDTMFMenus = null;

  @SerializedName("VideoRtcpTranspor")
  private String videoRtcpTranspor = null;

  @SerializedName("AudioRtcpTransport")
  private String audioRtcpTransport = null;

  @SerializedName("RelayNodeId")
  private String relayNodeId = null;

  @SerializedName("content.remote.rtcpAddress")
  private String contentRemoteRtcpAddress = null;

  @SerializedName("AudioRtpRelay")
  private String audioRtpRelay = null;

  @SerializedName("VideoRtpTransport")
  private String videoRtpTransport = null;

  @SerializedName("ContentRecvLocalMute")
  private String contentRecvLocalMute = null;

  @SerializedName("Layout")
  private String layout = null;

  @SerializedName("ContentSend")
  private String contentSend = null;

  @SerializedName("remoteaddress")
  private String remoteaddress = null;

  @SerializedName("MeetingGuid")
  private String meetingGuid = null;

  @SerializedName("connecttime")
  private String connecttime = null;

  @SerializedName("localaddress")
  private String localaddress = null;

  @SerializedName("audio.remote.address")
  private String audioRemoteAddress = null;

  @SerializedName("BondedAudioGuid")
  private String bondedAudioGuid = null;

  @SerializedName("AudioRecvRemoteMute")
  private String audioRecvRemoteMute = null;

  @SerializedName("SessionOutRelay")
  private String sessionOutRelay = null;

  @SerializedName("Leader")
  private String leader = null;

  @SerializedName("content.local.address")
  private String contentLocalAddress = null;

  @SerializedName("MovieCapable")
  private String movieCapable = null;

  @SerializedName("VideoRecvLocalMute")
  private String videoRecvLocalMute = null;

  @SerializedName("ContentRtpTransport")
  private String contentRtpTransport = null;

  @SerializedName("RDCVersion")
  private String rdCVersion = null;

  @SerializedName("AudioRecv")
  private String audioRecv = null;

  @SerializedName("ContentRelayServer")
  private String contentRelayServer = null;

  @SerializedName("VideoRecv")
  private String videoRecv = null;

  @SerializedName("visibility")
  private String visibility = null;

  @SerializedName("sessionid")
  private String sessionid = null;

  @SerializedName("ContentRtcpRelay")
  private String contentRtcpRelay = null;

  @SerializedName("locales")
  private String locales = null;

  @SerializedName("medaddress")
  private String medaddress = null;

  @SerializedName("HtmlLayoutGuid")
  private String htmlLayoutGuid = null;

  @SerializedName("endpoint")
  private String endpoint = null;

  @SerializedName("VideoDrop")
  private String videoDrop = null;

  @SerializedName("ContentRtcpTransport")
  private String contentRtcpTransport = null;

  @SerializedName("video.remote.rtcpAddress")
  private String videoRemoteRtcpAddress = null;

  @SerializedName("VideoRtpRelay")
  private String videoRtpRelay = null;

  @SerializedName("mixaddress")
  private String mixaddress = null;

  @SerializedName("SIPHTTPProxyTransport")
  private String siPHTTPProxyTransport = null;

  @SerializedName("VideoRecvCodec")
  private String videoRecvCodec = null;

  @SerializedName("AudioRecvCodec")
  private String audioRecvCodec = null;

  @SerializedName("SessionIn")
  private String sessionIn = null;

  @SerializedName("BondedVideoGuid")
  private String bondedVideoGuid = null;

  @SerializedName("CallQuality")
  private String callQuality = null;

  @SerializedName("meetingjointime")
  private String meetingjointime = null;

  @SerializedName("SessionInRelay")
  private String sessionInRelay = null;

  @SerializedName("pairedremoteaddress")
  private String pairedremoteaddress = null;

  @SerializedName("VideoSendHeight")
  private String videoSendHeight = null;

  @SerializedName("VideoRecvHeight")
  private String videoRecvHeight = null;

  @SerializedName("SecureCall")
  private String secureCall = null;

  @SerializedName("video.local.rtcpAddress")
  private String videoLocalRtcpAddress = null;

  @SerializedName("AudioPlayName")
  private String audioPlayName = null;

  @SerializedName("VideoCapID")
  private String videoCapID = null;

  @SerializedName("AudioRtpTransport")
  private String audioRtpTransport = null;

  @SerializedName("MeetingInfoMode")
  private String meetingInfoMode = null;

  @SerializedName("callhostname")
  private String callhostname = null;

  @SerializedName("callguid")
  private String callguid = null;

  @SerializedName("AudioCapID")
  private String audioCapID = null;

  @SerializedName("VideoSend")
  private String videoSend = null;

  @SerializedName("ContentRecvCodec")
  private String contentRecvCodec = null;

  @SerializedName("SessionRelay")
  private String sessionRelay = null;

  @SerializedName("VideoRecvRemoteMute")
  private String videoRecvRemoteMute = null;

  @SerializedName("Id")
  private String id = null;

  @SerializedName("BondedVideoName")
  private String bondedVideoName = null;

  @SerializedName("isInRoster")
  private Boolean isInRoster = null;

  public Endpoint ecMode(String ecMode) {
    this.ecMode = ecMode;
    return this;
  }

   /**
   * Get ecMode
   * @return ecMode
  **/
  @ApiModelProperty(value = "")
  public String getEcMode() {
    return ecMode;
  }

  public void setEcMode(String ecMode) {
    this.ecMode = ecMode;
  }

  public Endpoint creationtime(String creationtime) {
    this.creationtime = creationtime;
    return this;
  }

   /**
   * Get creationtime
   * @return creationtime
  **/
  @ApiModelProperty(value = "")
  public String getCreationtime() {
    return creationtime;
  }

  public void setCreationtime(String creationtime) {
    this.creationtime = creationtime;
  }

  public Endpoint audioRemoteRtcpAddress(String audioRemoteRtcpAddress) {
    this.audioRemoteRtcpAddress = audioRemoteRtcpAddress;
    return this;
  }

   /**
   * Get audioRemoteRtcpAddress
   * @return audioRemoteRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getAudioRemoteRtcpAddress() {
    return audioRemoteRtcpAddress;
  }

  public void setAudioRemoteRtcpAddress(String audioRemoteRtcpAddress) {
    this.audioRemoteRtcpAddress = audioRemoteRtcpAddress;
  }

  public Endpoint videoSendCodec(String videoSendCodec) {
    this.videoSendCodec = videoSendCodec;
    return this;
  }

   /**
   * Get videoSendCodec
   * @return videoSendCodec
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendCodec() {
    return videoSendCodec;
  }

  public void setVideoSendCodec(String videoSendCodec) {
    this.videoSendCodec = videoSendCodec;
  }

  public Endpoint audioPlayID(String audioPlayID) {
    this.audioPlayID = audioPlayID;
    return this;
  }

   /**
   * Get audioPlayID
   * @return audioPlayID
  **/
  @ApiModelProperty(value = "")
  public String getAudioPlayID() {
    return audioPlayID;
  }

  public void setAudioPlayID(String audioPlayID) {
    this.audioPlayID = audioPlayID;
  }

  public Endpoint callQualityRecv(String callQualityRecv) {
    this.callQualityRecv = callQualityRecv;
    return this;
  }

   /**
   * Get callQualityRecv
   * @return callQualityRecv
  **/
  @ApiModelProperty(value = "")
  public String getCallQualityRecv() {
    return callQualityRecv;
  }

  public void setCallQualityRecv(String callQualityRecv) {
    this.callQualityRecv = callQualityRecv;
  }

  public Endpoint sessionOut(String sessionOut) {
    this.sessionOut = sessionOut;
    return this;
  }

   /**
   * Get sessionOut
   * @return sessionOut
  **/
  @ApiModelProperty(value = "")
  public String getSessionOut() {
    return sessionOut;
  }

  public void setSessionOut(String sessionOut) {
    this.sessionOut = sessionOut;
  }

  public Endpoint audioLocalAddress(String audioLocalAddress) {
    this.audioLocalAddress = audioLocalAddress;
    return this;
  }

   /**
   * Get audioLocalAddress
   * @return audioLocalAddress
  **/
  @ApiModelProperty(value = "")
  public String getAudioLocalAddress() {
    return audioLocalAddress;
  }

  public void setAudioLocalAddress(String audioLocalAddress) {
    this.audioLocalAddress = audioLocalAddress;
  }

  public Endpoint meetingid(String meetingid) {
    this.meetingid = meetingid;
    return this;
  }

   /**
   * Get meetingid
   * @return meetingid
  **/
  @ApiModelProperty(value = "")
  public String getMeetingid() {
    return meetingid;
  }

  public void setMeetingid(String meetingid) {
    this.meetingid = meetingid;
  }

  public Endpoint videoSendWidth(String videoSendWidth) {
    this.videoSendWidth = videoSendWidth;
    return this;
  }

   /**
   * Get videoSendWidth
   * @return videoSendWidth
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendWidth() {
    return videoSendWidth;
  }

  public void setVideoSendWidth(String videoSendWidth) {
    this.videoSendWidth = videoSendWidth;
  }

  public Endpoint callQualitySend(String callQualitySend) {
    this.callQualitySend = callQualitySend;
    return this;
  }

   /**
   * Get callQualitySend
   * @return callQualitySend
  **/
  @ApiModelProperty(value = "")
  public String getCallQualitySend() {
    return callQualitySend;
  }

  public void setCallQualitySend(String callQualitySend) {
    this.callQualitySend = callQualitySend;
  }

  public Endpoint mhaddress(String mhaddress) {
    this.mhaddress = mhaddress;
    return this;
  }

   /**
   * Get mhaddress
   * @return mhaddress
  **/
  @ApiModelProperty(value = "")
  public String getMhaddress() {
    return mhaddress;
  }

  public void setMhaddress(String mhaddress) {
    this.mhaddress = mhaddress;
  }

  public Endpoint rdCControlleeCapable(String rdCControlleeCapable) {
    this.rdCControlleeCapable = rdCControlleeCapable;
    return this;
  }

   /**
   * Get rdCControlleeCapable
   * @return rdCControlleeCapable
  **/
  @ApiModelProperty(value = "")
  public String getRdCControlleeCapable() {
    return rdCControlleeCapable;
  }

  public void setRdCControlleeCapable(String rdCControlleeCapable) {
    this.rdCControlleeCapable = rdCControlleeCapable;
  }

  public Endpoint audioCapName(String audioCapName) {
    this.audioCapName = audioCapName;
    return this;
  }

   /**
   * Get audioCapName
   * @return audioCapName
  **/
  @ApiModelProperty(value = "")
  public String getAudioCapName() {
    return audioCapName;
  }

  public void setAudioCapName(String audioCapName) {
    this.audioCapName = audioCapName;
  }

  public Endpoint proxyInfo(String proxyInfo) {
    this.proxyInfo = proxyInfo;
    return this;
  }

   /**
   * Get proxyInfo
   * @return proxyInfo
  **/
  @ApiModelProperty(value = "")
  public String getProxyInfo() {
    return proxyInfo;
  }

  public void setProxyInfo(String proxyInfo) {
    this.proxyInfo = proxyInfo;
  }

  public Endpoint audioSendCodec(String audioSendCodec) {
    this.audioSendCodec = audioSendCodec;
    return this;
  }

   /**
   * Get audioSendCodec
   * @return audioSendCodec
  **/
  @ApiModelProperty(value = "")
  public String getAudioSendCodec() {
    return audioSendCodec;
  }

  public void setAudioSendCodec(String audioSendCodec) {
    this.audioSendCodec = audioSendCodec;
  }

  public Endpoint vendor(String vendor) {
    this.vendor = vendor;
    return this;
  }

   /**
   * Get vendor
   * @return vendor
  **/
  @ApiModelProperty(value = "")
  public String getVendor() {
    return vendor;
  }

  public void setVendor(String vendor) {
    this.vendor = vendor;
  }

  public Endpoint videoRecvWidth(String videoRecvWidth) {
    this.videoRecvWidth = videoRecvWidth;
    return this;
  }

   /**
   * Get videoRecvWidth
   * @return videoRecvWidth
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvWidth() {
    return videoRecvWidth;
  }

  public void setVideoRecvWidth(String videoRecvWidth) {
    this.videoRecvWidth = videoRecvWidth;
  }

  public Endpoint conaddress(String conaddress) {
    this.conaddress = conaddress;
    return this;
  }

   /**
   * Get conaddress
   * @return conaddress
  **/
  @ApiModelProperty(value = "")
  public String getConaddress() {
    return conaddress;
  }

  public void setConaddress(String conaddress) {
    this.conaddress = conaddress;
  }

  public Endpoint talkDetected(String talkDetected) {
    this.talkDetected = talkDetected;
    return this;
  }

   /**
   * Get talkDetected
   * @return talkDetected
  **/
  @ApiModelProperty(value = "")
  public String getTalkDetected() {
    return talkDetected;
  }

  public void setTalkDetected(String talkDetected) {
    this.talkDetected = talkDetected;
  }

  public Endpoint subLayout(String subLayout) {
    this.subLayout = subLayout;
    return this;
  }

   /**
   * Get subLayout
   * @return subLayout
  **/
  @ApiModelProperty(value = "")
  public String getSubLayout() {
    return subLayout;
  }

  public void setSubLayout(String subLayout) {
    this.subLayout = subLayout;
  }

  public Endpoint audioRtcpRelay(String audioRtcpRelay) {
    this.audioRtcpRelay = audioRtcpRelay;
    return this;
  }

   /**
   * Get audioRtcpRelay
   * @return audioRtcpRelay
  **/
  @ApiModelProperty(value = "")
  public String getAudioRtcpRelay() {
    return audioRtcpRelay;
  }

  public void setAudioRtcpRelay(String audioRtcpRelay) {
    this.audioRtcpRelay = audioRtcpRelay;
  }

  public Endpoint audioRecvLocalMute(String audioRecvLocalMute) {
    this.audioRecvLocalMute = audioRecvLocalMute;
    return this;
  }

   /**
   * Get audioRecvLocalMute
   * @return audioRecvLocalMute
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvLocalMute() {
    return audioRecvLocalMute;
  }

  public void setAudioRecvLocalMute(String audioRecvLocalMute) {
    this.audioRecvLocalMute = audioRecvLocalMute;
  }

  public Endpoint name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Get name
   * @return name
  **/
  @ApiModelProperty(value = "")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public Endpoint videoLocalAddress(String videoLocalAddress) {
    this.videoLocalAddress = videoLocalAddress;
    return this;
  }

   /**
   * Get videoLocalAddress
   * @return videoLocalAddress
  **/
  @ApiModelProperty(value = "")
  public String getVideoLocalAddress() {
    return videoLocalAddress;
  }

  public void setVideoLocalAddress(String videoLocalAddress) {
    this.videoLocalAddress = videoLocalAddress;
  }

  public Endpoint audioLocalRtcpAddress(String audioLocalRtcpAddress) {
    this.audioLocalRtcpAddress = audioLocalRtcpAddress;
    return this;
  }

   /**
   * Get audioLocalRtcpAddress
   * @return audioLocalRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getAudioLocalRtcpAddress() {
    return audioLocalRtcpAddress;
  }

  public void setAudioLocalRtcpAddress(String audioLocalRtcpAddress) {
    this.audioLocalRtcpAddress = audioLocalRtcpAddress;
  }

  public Endpoint contentRtpRelay(String contentRtpRelay) {
    this.contentRtpRelay = contentRtpRelay;
    return this;
  }

   /**
   * Get contentRtpRelay
   * @return contentRtpRelay
  **/
  @ApiModelProperty(value = "")
  public String getContentRtpRelay() {
    return contentRtpRelay;
  }

  public void setContentRtpRelay(String contentRtpRelay) {
    this.contentRtpRelay = contentRtpRelay;
  }

  public Endpoint contentLocalRtcpAddress(String contentLocalRtcpAddress) {
    this.contentLocalRtcpAddress = contentLocalRtcpAddress;
    return this;
  }

   /**
   * Get contentLocalRtcpAddress
   * @return contentLocalRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getContentLocalRtcpAddress() {
    return contentLocalRtcpAddress;
  }

  public void setContentLocalRtcpAddress(String contentLocalRtcpAddress) {
    this.contentLocalRtcpAddress = contentLocalRtcpAddress;
  }

  public Endpoint remoteConnectionCount(String remoteConnectionCount) {
    this.remoteConnectionCount = remoteConnectionCount;
    return this;
  }

   /**
   * Get remoteConnectionCount
   * @return remoteConnectionCount
  **/
  @ApiModelProperty(value = "")
  public String getRemoteConnectionCount() {
    return remoteConnectionCount;
  }

  public void setRemoteConnectionCount(String remoteConnectionCount) {
    this.remoteConnectionCount = remoteConnectionCount;
  }

  public Endpoint callrate(String callrate) {
    this.callrate = callrate;
    return this;
  }

   /**
   * Get callrate
   * @return callrate
  **/
  @ApiModelProperty(value = "")
  public String getCallrate() {
    return callrate;
  }

  public void setCallrate(String callrate) {
    this.callrate = callrate;
  }

  public Endpoint mixerGuid(String mixerGuid) {
    this.mixerGuid = mixerGuid;
    return this;
  }

   /**
   * Get mixerGuid
   * @return mixerGuid
  **/
  @ApiModelProperty(value = "")
  public String getMixerGuid() {
    return mixerGuid;
  }

  public void setMixerGuid(String mixerGuid) {
    this.mixerGuid = mixerGuid;
  }

  public Endpoint transport(String transport) {
    this.transport = transport;
    return this;
  }

   /**
   * Get transport
   * @return transport
  **/
  @ApiModelProperty(value = "")
  public String getTransport() {
    return transport;
  }

  public void setTransport(String transport) {
    this.transport = transport;
  }

  public Endpoint audioCapSelectID(String audioCapSelectID) {
    this.audioCapSelectID = audioCapSelectID;
    return this;
  }

   /**
   * Get audioCapSelectID
   * @return audioCapSelectID
  **/
  @ApiModelProperty(value = "")
  public String getAudioCapSelectID() {
    return audioCapSelectID;
  }

  public void setAudioCapSelectID(String audioCapSelectID) {
    this.audioCapSelectID = audioCapSelectID;
  }

  public Endpoint countryCode(String countryCode) {
    this.countryCode = countryCode;
    return this;
  }

   /**
   * Get countryCode
   * @return countryCode
  **/
  @ApiModelProperty(value = "")
  public String getCountryCode() {
    return countryCode;
  }

  public void setCountryCode(String countryCode) {
    this.countryCode = countryCode;
  }

  public Endpoint rdCControllerCapable(String rdCControllerCapable) {
    this.rdCControllerCapable = rdCControllerCapable;
    return this;
  }

   /**
   * Get rdCControllerCapable
   * @return rdCControllerCapable
  **/
  @ApiModelProperty(value = "")
  public String getRdCControllerCapable() {
    return rdCControllerCapable;
  }

  public void setRdCControllerCapable(String rdCControllerCapable) {
    this.rdCControllerCapable = rdCControllerCapable;
  }

  public Endpoint pairedname(String pairedname) {
    this.pairedname = pairedname;
    return this;
  }

   /**
   * Get pairedname
   * @return pairedname
  **/
  @ApiModelProperty(value = "")
  public String getPairedname() {
    return pairedname;
  }

  public void setPairedname(String pairedname) {
    this.pairedname = pairedname;
  }

  public Endpoint videoRtcpRelay(String videoRtcpRelay) {
    this.videoRtcpRelay = videoRtcpRelay;
    return this;
  }

   /**
   * Get videoRtcpRelay
   * @return videoRtcpRelay
  **/
  @ApiModelProperty(value = "")
  public String getVideoRtcpRelay() {
    return videoRtcpRelay;
  }

  public void setVideoRtcpRelay(String videoRtcpRelay) {
    this.videoRtcpRelay = videoRtcpRelay;
  }

  public Endpoint endpointCpuParams(String endpointCpuParams) {
    this.endpointCpuParams = endpointCpuParams;
    return this;
  }

   /**
   * Get endpointCpuParams
   * @return endpointCpuParams
  **/
  @ApiModelProperty(value = "")
  public String getEndpointCpuParams() {
    return endpointCpuParams;
  }

  public void setEndpointCpuParams(String endpointCpuParams) {
    this.endpointCpuParams = endpointCpuParams;
  }

  public Endpoint videoRemoteAddress(String videoRemoteAddress) {
    this.videoRemoteAddress = videoRemoteAddress;
    return this;
  }

   /**
   * Get videoRemoteAddress
   * @return videoRemoteAddress
  **/
  @ApiModelProperty(value = "")
  public String getVideoRemoteAddress() {
    return videoRemoteAddress;
  }

  public void setVideoRemoteAddress(String videoRemoteAddress) {
    this.videoRemoteAddress = videoRemoteAddress;
  }

  public Endpoint version(String version) {
    this.version = version;
    return this;
  }

   /**
   * Get version
   * @return version
  **/
  @ApiModelProperty(value = "")
  public String getVersion() {
    return version;
  }

  public void setVersion(String version) {
    this.version = version;
  }

  public Endpoint contentRecv(String contentRecv) {
    this.contentRecv = contentRecv;
    return this;
  }

   /**
   * Get contentRecv
   * @return contentRecv
  **/
  @ApiModelProperty(value = "")
  public String getContentRecv() {
    return contentRecv;
  }

  public void setContentRecv(String contentRecv) {
    this.contentRecv = contentRecv;
  }

  public Endpoint localName(String localName) {
    this.localName = localName;
    return this;
  }

   /**
   * Get localName
   * @return localName
  **/
  @ApiModelProperty(value = "")
  public String getLocalName() {
    return localName;
  }

  public void setLocalName(String localName) {
    this.localName = localName;
  }

  public Endpoint bjNUserId(String bjNUserId) {
    this.bjNUserId = bjNUserId;
    return this;
  }

   /**
   * Get bjNUserId
   * @return bjNUserId
  **/
  @ApiModelProperty(value = "")
  public String getBjNUserId() {
    return bjNUserId;
  }

  public void setBjNUserId(String bjNUserId) {
    this.bjNUserId = bjNUserId;
  }

  public Endpoint contentRemoteAddress(String contentRemoteAddress) {
    this.contentRemoteAddress = contentRemoteAddress;
    return this;
  }

   /**
   * Get contentRemoteAddress
   * @return contentRemoteAddress
  **/
  @ApiModelProperty(value = "")
  public String getContentRemoteAddress() {
    return contentRemoteAddress;
  }

  public void setContentRemoteAddress(String contentRemoteAddress) {
    this.contentRemoteAddress = contentRemoteAddress;
  }

  public Endpoint audioSend(String audioSend) {
    this.audioSend = audioSend;
    return this;
  }

   /**
   * Get audioSend
   * @return audioSend
  **/
  @ApiModelProperty(value = "")
  public String getAudioSend() {
    return audioSend;
  }

  public void setAudioSend(String audioSend) {
    this.audioSend = audioSend;
  }

  public Endpoint participantDTMFMenus(String participantDTMFMenus) {
    this.participantDTMFMenus = participantDTMFMenus;
    return this;
  }

   /**
   * Get participantDTMFMenus
   * @return participantDTMFMenus
  **/
  @ApiModelProperty(value = "")
  public String getParticipantDTMFMenus() {
    return participantDTMFMenus;
  }

  public void setParticipantDTMFMenus(String participantDTMFMenus) {
    this.participantDTMFMenus = participantDTMFMenus;
  }

  public Endpoint videoRtcpTranspor(String videoRtcpTranspor) {
    this.videoRtcpTranspor = videoRtcpTranspor;
    return this;
  }

   /**
   * Get videoRtcpTranspor
   * @return videoRtcpTranspor
  **/
  @ApiModelProperty(value = "")
  public String getVideoRtcpTranspor() {
    return videoRtcpTranspor;
  }

  public void setVideoRtcpTranspor(String videoRtcpTranspor) {
    this.videoRtcpTranspor = videoRtcpTranspor;
  }

  public Endpoint audioRtcpTransport(String audioRtcpTransport) {
    this.audioRtcpTransport = audioRtcpTransport;
    return this;
  }

   /**
   * Get audioRtcpTransport
   * @return audioRtcpTransport
  **/
  @ApiModelProperty(value = "")
  public String getAudioRtcpTransport() {
    return audioRtcpTransport;
  }

  public void setAudioRtcpTransport(String audioRtcpTransport) {
    this.audioRtcpTransport = audioRtcpTransport;
  }

  public Endpoint relayNodeId(String relayNodeId) {
    this.relayNodeId = relayNodeId;
    return this;
  }

   /**
   * Get relayNodeId
   * @return relayNodeId
  **/
  @ApiModelProperty(value = "")
  public String getRelayNodeId() {
    return relayNodeId;
  }

  public void setRelayNodeId(String relayNodeId) {
    this.relayNodeId = relayNodeId;
  }

  public Endpoint contentRemoteRtcpAddress(String contentRemoteRtcpAddress) {
    this.contentRemoteRtcpAddress = contentRemoteRtcpAddress;
    return this;
  }

   /**
   * Get contentRemoteRtcpAddress
   * @return contentRemoteRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getContentRemoteRtcpAddress() {
    return contentRemoteRtcpAddress;
  }

  public void setContentRemoteRtcpAddress(String contentRemoteRtcpAddress) {
    this.contentRemoteRtcpAddress = contentRemoteRtcpAddress;
  }

  public Endpoint audioRtpRelay(String audioRtpRelay) {
    this.audioRtpRelay = audioRtpRelay;
    return this;
  }

   /**
   * Get audioRtpRelay
   * @return audioRtpRelay
  **/
  @ApiModelProperty(value = "")
  public String getAudioRtpRelay() {
    return audioRtpRelay;
  }

  public void setAudioRtpRelay(String audioRtpRelay) {
    this.audioRtpRelay = audioRtpRelay;
  }

  public Endpoint videoRtpTransport(String videoRtpTransport) {
    this.videoRtpTransport = videoRtpTransport;
    return this;
  }

   /**
   * Get videoRtpTransport
   * @return videoRtpTransport
  **/
  @ApiModelProperty(value = "")
  public String getVideoRtpTransport() {
    return videoRtpTransport;
  }

  public void setVideoRtpTransport(String videoRtpTransport) {
    this.videoRtpTransport = videoRtpTransport;
  }

  public Endpoint contentRecvLocalMute(String contentRecvLocalMute) {
    this.contentRecvLocalMute = contentRecvLocalMute;
    return this;
  }

   /**
   * Get contentRecvLocalMute
   * @return contentRecvLocalMute
  **/
  @ApiModelProperty(value = "")
  public String getContentRecvLocalMute() {
    return contentRecvLocalMute;
  }

  public void setContentRecvLocalMute(String contentRecvLocalMute) {
    this.contentRecvLocalMute = contentRecvLocalMute;
  }

  public Endpoint layout(String layout) {
    this.layout = layout;
    return this;
  }

   /**
   * Get layout
   * @return layout
  **/
  @ApiModelProperty(value = "")
  public String getLayout() {
    return layout;
  }

  public void setLayout(String layout) {
    this.layout = layout;
  }

  public Endpoint contentSend(String contentSend) {
    this.contentSend = contentSend;
    return this;
  }

   /**
   * Get contentSend
   * @return contentSend
  **/
  @ApiModelProperty(value = "")
  public String getContentSend() {
    return contentSend;
  }

  public void setContentSend(String contentSend) {
    this.contentSend = contentSend;
  }

  public Endpoint remoteaddress(String remoteaddress) {
    this.remoteaddress = remoteaddress;
    return this;
  }

   /**
   * Get remoteaddress
   * @return remoteaddress
  **/
  @ApiModelProperty(value = "")
  public String getRemoteaddress() {
    return remoteaddress;
  }

  public void setRemoteaddress(String remoteaddress) {
    this.remoteaddress = remoteaddress;
  }

  public Endpoint meetingGuid(String meetingGuid) {
    this.meetingGuid = meetingGuid;
    return this;
  }

   /**
   * Get meetingGuid
   * @return meetingGuid
  **/
  @ApiModelProperty(value = "")
  public String getMeetingGuid() {
    return meetingGuid;
  }

  public void setMeetingGuid(String meetingGuid) {
    this.meetingGuid = meetingGuid;
  }

  public Endpoint connecttime(String connecttime) {
    this.connecttime = connecttime;
    return this;
  }

   /**
   * Get connecttime
   * @return connecttime
  **/
  @ApiModelProperty(value = "")
  public String getConnecttime() {
    return connecttime;
  }

  public void setConnecttime(String connecttime) {
    this.connecttime = connecttime;
  }

  public Endpoint localaddress(String localaddress) {
    this.localaddress = localaddress;
    return this;
  }

   /**
   * Get localaddress
   * @return localaddress
  **/
  @ApiModelProperty(value = "")
  public String getLocaladdress() {
    return localaddress;
  }

  public void setLocaladdress(String localaddress) {
    this.localaddress = localaddress;
  }

  public Endpoint audioRemoteAddress(String audioRemoteAddress) {
    this.audioRemoteAddress = audioRemoteAddress;
    return this;
  }

   /**
   * Get audioRemoteAddress
   * @return audioRemoteAddress
  **/
  @ApiModelProperty(value = "")
  public String getAudioRemoteAddress() {
    return audioRemoteAddress;
  }

  public void setAudioRemoteAddress(String audioRemoteAddress) {
    this.audioRemoteAddress = audioRemoteAddress;
  }

  public Endpoint bondedAudioGuid(String bondedAudioGuid) {
    this.bondedAudioGuid = bondedAudioGuid;
    return this;
  }

   /**
   * Get bondedAudioGuid
   * @return bondedAudioGuid
  **/
  @ApiModelProperty(value = "")
  public String getBondedAudioGuid() {
    return bondedAudioGuid;
  }

  public void setBondedAudioGuid(String bondedAudioGuid) {
    this.bondedAudioGuid = bondedAudioGuid;
  }

  public Endpoint audioRecvRemoteMute(String audioRecvRemoteMute) {
    this.audioRecvRemoteMute = audioRecvRemoteMute;
    return this;
  }

   /**
   * Get audioRecvRemoteMute
   * @return audioRecvRemoteMute
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvRemoteMute() {
    return audioRecvRemoteMute;
  }

  public void setAudioRecvRemoteMute(String audioRecvRemoteMute) {
    this.audioRecvRemoteMute = audioRecvRemoteMute;
  }

  public Endpoint sessionOutRelay(String sessionOutRelay) {
    this.sessionOutRelay = sessionOutRelay;
    return this;
  }

   /**
   * Get sessionOutRelay
   * @return sessionOutRelay
  **/
  @ApiModelProperty(value = "")
  public String getSessionOutRelay() {
    return sessionOutRelay;
  }

  public void setSessionOutRelay(String sessionOutRelay) {
    this.sessionOutRelay = sessionOutRelay;
  }

  public Endpoint leader(String leader) {
    this.leader = leader;
    return this;
  }

   /**
   * Get leader
   * @return leader
  **/
  @ApiModelProperty(value = "")
  public String getLeader() {
    return leader;
  }

  public void setLeader(String leader) {
    this.leader = leader;
  }

  public Endpoint contentLocalAddress(String contentLocalAddress) {
    this.contentLocalAddress = contentLocalAddress;
    return this;
  }

   /**
   * Get contentLocalAddress
   * @return contentLocalAddress
  **/
  @ApiModelProperty(value = "")
  public String getContentLocalAddress() {
    return contentLocalAddress;
  }

  public void setContentLocalAddress(String contentLocalAddress) {
    this.contentLocalAddress = contentLocalAddress;
  }

  public Endpoint movieCapable(String movieCapable) {
    this.movieCapable = movieCapable;
    return this;
  }

   /**
   * Get movieCapable
   * @return movieCapable
  **/
  @ApiModelProperty(value = "")
  public String getMovieCapable() {
    return movieCapable;
  }

  public void setMovieCapable(String movieCapable) {
    this.movieCapable = movieCapable;
  }

  public Endpoint videoRecvLocalMute(String videoRecvLocalMute) {
    this.videoRecvLocalMute = videoRecvLocalMute;
    return this;
  }

   /**
   * Get videoRecvLocalMute
   * @return videoRecvLocalMute
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvLocalMute() {
    return videoRecvLocalMute;
  }

  public void setVideoRecvLocalMute(String videoRecvLocalMute) {
    this.videoRecvLocalMute = videoRecvLocalMute;
  }

  public Endpoint contentRtpTransport(String contentRtpTransport) {
    this.contentRtpTransport = contentRtpTransport;
    return this;
  }

   /**
   * Get contentRtpTransport
   * @return contentRtpTransport
  **/
  @ApiModelProperty(value = "")
  public String getContentRtpTransport() {
    return contentRtpTransport;
  }

  public void setContentRtpTransport(String contentRtpTransport) {
    this.contentRtpTransport = contentRtpTransport;
  }

  public Endpoint rdCVersion(String rdCVersion) {
    this.rdCVersion = rdCVersion;
    return this;
  }

   /**
   * Get rdCVersion
   * @return rdCVersion
  **/
  @ApiModelProperty(value = "")
  public String getRdCVersion() {
    return rdCVersion;
  }

  public void setRdCVersion(String rdCVersion) {
    this.rdCVersion = rdCVersion;
  }

  public Endpoint audioRecv(String audioRecv) {
    this.audioRecv = audioRecv;
    return this;
  }

   /**
   * Get audioRecv
   * @return audioRecv
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecv() {
    return audioRecv;
  }

  public void setAudioRecv(String audioRecv) {
    this.audioRecv = audioRecv;
  }

  public Endpoint contentRelayServer(String contentRelayServer) {
    this.contentRelayServer = contentRelayServer;
    return this;
  }

   /**
   * Get contentRelayServer
   * @return contentRelayServer
  **/
  @ApiModelProperty(value = "")
  public String getContentRelayServer() {
    return contentRelayServer;
  }

  public void setContentRelayServer(String contentRelayServer) {
    this.contentRelayServer = contentRelayServer;
  }

  public Endpoint videoRecv(String videoRecv) {
    this.videoRecv = videoRecv;
    return this;
  }

   /**
   * Get videoRecv
   * @return videoRecv
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecv() {
    return videoRecv;
  }

  public void setVideoRecv(String videoRecv) {
    this.videoRecv = videoRecv;
  }

  public Endpoint visibility(String visibility) {
    this.visibility = visibility;
    return this;
  }

   /**
   * Get visibility
   * @return visibility
  **/
  @ApiModelProperty(value = "")
  public String getVisibility() {
    return visibility;
  }

  public void setVisibility(String visibility) {
    this.visibility = visibility;
  }

  public Endpoint sessionid(String sessionid) {
    this.sessionid = sessionid;
    return this;
  }

   /**
   * Get sessionid
   * @return sessionid
  **/
  @ApiModelProperty(value = "")
  public String getSessionid() {
    return sessionid;
  }

  public void setSessionid(String sessionid) {
    this.sessionid = sessionid;
  }

  public Endpoint contentRtcpRelay(String contentRtcpRelay) {
    this.contentRtcpRelay = contentRtcpRelay;
    return this;
  }

   /**
   * Get contentRtcpRelay
   * @return contentRtcpRelay
  **/
  @ApiModelProperty(value = "")
  public String getContentRtcpRelay() {
    return contentRtcpRelay;
  }

  public void setContentRtcpRelay(String contentRtcpRelay) {
    this.contentRtcpRelay = contentRtcpRelay;
  }

  public Endpoint locales(String locales) {
    this.locales = locales;
    return this;
  }

   /**
   * Get locales
   * @return locales
  **/
  @ApiModelProperty(value = "")
  public String getLocales() {
    return locales;
  }

  public void setLocales(String locales) {
    this.locales = locales;
  }

  public Endpoint medaddress(String medaddress) {
    this.medaddress = medaddress;
    return this;
  }

   /**
   * Get medaddress
   * @return medaddress
  **/
  @ApiModelProperty(value = "")
  public String getMedaddress() {
    return medaddress;
  }

  public void setMedaddress(String medaddress) {
    this.medaddress = medaddress;
  }

  public Endpoint htmlLayoutGuid(String htmlLayoutGuid) {
    this.htmlLayoutGuid = htmlLayoutGuid;
    return this;
  }

   /**
   * Get htmlLayoutGuid
   * @return htmlLayoutGuid
  **/
  @ApiModelProperty(value = "")
  public String getHtmlLayoutGuid() {
    return htmlLayoutGuid;
  }

  public void setHtmlLayoutGuid(String htmlLayoutGuid) {
    this.htmlLayoutGuid = htmlLayoutGuid;
  }

  public Endpoint endpoint(String endpoint) {
    this.endpoint = endpoint;
    return this;
  }

   /**
   * Get endpoint
   * @return endpoint
  **/
  @ApiModelProperty(value = "")
  public String getEndpoint() {
    return endpoint;
  }

  public void setEndpoint(String endpoint) {
    this.endpoint = endpoint;
  }

  public Endpoint videoDrop(String videoDrop) {
    this.videoDrop = videoDrop;
    return this;
  }

   /**
   * Get videoDrop
   * @return videoDrop
  **/
  @ApiModelProperty(value = "")
  public String getVideoDrop() {
    return videoDrop;
  }

  public void setVideoDrop(String videoDrop) {
    this.videoDrop = videoDrop;
  }

  public Endpoint contentRtcpTransport(String contentRtcpTransport) {
    this.contentRtcpTransport = contentRtcpTransport;
    return this;
  }

   /**
   * Get contentRtcpTransport
   * @return contentRtcpTransport
  **/
  @ApiModelProperty(value = "")
  public String getContentRtcpTransport() {
    return contentRtcpTransport;
  }

  public void setContentRtcpTransport(String contentRtcpTransport) {
    this.contentRtcpTransport = contentRtcpTransport;
  }

  public Endpoint videoRemoteRtcpAddress(String videoRemoteRtcpAddress) {
    this.videoRemoteRtcpAddress = videoRemoteRtcpAddress;
    return this;
  }

   /**
   * Get videoRemoteRtcpAddress
   * @return videoRemoteRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getVideoRemoteRtcpAddress() {
    return videoRemoteRtcpAddress;
  }

  public void setVideoRemoteRtcpAddress(String videoRemoteRtcpAddress) {
    this.videoRemoteRtcpAddress = videoRemoteRtcpAddress;
  }

  public Endpoint videoRtpRelay(String videoRtpRelay) {
    this.videoRtpRelay = videoRtpRelay;
    return this;
  }

   /**
   * Get videoRtpRelay
   * @return videoRtpRelay
  **/
  @ApiModelProperty(value = "")
  public String getVideoRtpRelay() {
    return videoRtpRelay;
  }

  public void setVideoRtpRelay(String videoRtpRelay) {
    this.videoRtpRelay = videoRtpRelay;
  }

  public Endpoint mixaddress(String mixaddress) {
    this.mixaddress = mixaddress;
    return this;
  }

   /**
   * Get mixaddress
   * @return mixaddress
  **/
  @ApiModelProperty(value = "")
  public String getMixaddress() {
    return mixaddress;
  }

  public void setMixaddress(String mixaddress) {
    this.mixaddress = mixaddress;
  }

  public Endpoint siPHTTPProxyTransport(String siPHTTPProxyTransport) {
    this.siPHTTPProxyTransport = siPHTTPProxyTransport;
    return this;
  }

   /**
   * Get siPHTTPProxyTransport
   * @return siPHTTPProxyTransport
  **/
  @ApiModelProperty(value = "")
  public String getSiPHTTPProxyTransport() {
    return siPHTTPProxyTransport;
  }

  public void setSiPHTTPProxyTransport(String siPHTTPProxyTransport) {
    this.siPHTTPProxyTransport = siPHTTPProxyTransport;
  }

  public Endpoint videoRecvCodec(String videoRecvCodec) {
    this.videoRecvCodec = videoRecvCodec;
    return this;
  }

   /**
   * Get videoRecvCodec
   * @return videoRecvCodec
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvCodec() {
    return videoRecvCodec;
  }

  public void setVideoRecvCodec(String videoRecvCodec) {
    this.videoRecvCodec = videoRecvCodec;
  }

  public Endpoint audioRecvCodec(String audioRecvCodec) {
    this.audioRecvCodec = audioRecvCodec;
    return this;
  }

   /**
   * Get audioRecvCodec
   * @return audioRecvCodec
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvCodec() {
    return audioRecvCodec;
  }

  public void setAudioRecvCodec(String audioRecvCodec) {
    this.audioRecvCodec = audioRecvCodec;
  }

  public Endpoint sessionIn(String sessionIn) {
    this.sessionIn = sessionIn;
    return this;
  }

   /**
   * Get sessionIn
   * @return sessionIn
  **/
  @ApiModelProperty(value = "")
  public String getSessionIn() {
    return sessionIn;
  }

  public void setSessionIn(String sessionIn) {
    this.sessionIn = sessionIn;
  }

  public Endpoint bondedVideoGuid(String bondedVideoGuid) {
    this.bondedVideoGuid = bondedVideoGuid;
    return this;
  }

   /**
   * Get bondedVideoGuid
   * @return bondedVideoGuid
  **/
  @ApiModelProperty(value = "")
  public String getBondedVideoGuid() {
    return bondedVideoGuid;
  }

  public void setBondedVideoGuid(String bondedVideoGuid) {
    this.bondedVideoGuid = bondedVideoGuid;
  }

  public Endpoint callQuality(String callQuality) {
    this.callQuality = callQuality;
    return this;
  }

   /**
   * Get callQuality
   * @return callQuality
  **/
  @ApiModelProperty(value = "")
  public String getCallQuality() {
    return callQuality;
  }

  public void setCallQuality(String callQuality) {
    this.callQuality = callQuality;
  }

  public Endpoint meetingjointime(String meetingjointime) {
    this.meetingjointime = meetingjointime;
    return this;
  }

   /**
   * Get meetingjointime
   * @return meetingjointime
  **/
  @ApiModelProperty(value = "")
  public String getMeetingjointime() {
    return meetingjointime;
  }

  public void setMeetingjointime(String meetingjointime) {
    this.meetingjointime = meetingjointime;
  }

  public Endpoint sessionInRelay(String sessionInRelay) {
    this.sessionInRelay = sessionInRelay;
    return this;
  }

   /**
   * Get sessionInRelay
   * @return sessionInRelay
  **/
  @ApiModelProperty(value = "")
  public String getSessionInRelay() {
    return sessionInRelay;
  }

  public void setSessionInRelay(String sessionInRelay) {
    this.sessionInRelay = sessionInRelay;
  }

  public Endpoint pairedremoteaddress(String pairedremoteaddress) {
    this.pairedremoteaddress = pairedremoteaddress;
    return this;
  }

   /**
   * Get pairedremoteaddress
   * @return pairedremoteaddress
  **/
  @ApiModelProperty(value = "")
  public String getPairedremoteaddress() {
    return pairedremoteaddress;
  }

  public void setPairedremoteaddress(String pairedremoteaddress) {
    this.pairedremoteaddress = pairedremoteaddress;
  }

  public Endpoint videoSendHeight(String videoSendHeight) {
    this.videoSendHeight = videoSendHeight;
    return this;
  }

   /**
   * Get videoSendHeight
   * @return videoSendHeight
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendHeight() {
    return videoSendHeight;
  }

  public void setVideoSendHeight(String videoSendHeight) {
    this.videoSendHeight = videoSendHeight;
  }

  public Endpoint videoRecvHeight(String videoRecvHeight) {
    this.videoRecvHeight = videoRecvHeight;
    return this;
  }

   /**
   * Get videoRecvHeight
   * @return videoRecvHeight
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvHeight() {
    return videoRecvHeight;
  }

  public void setVideoRecvHeight(String videoRecvHeight) {
    this.videoRecvHeight = videoRecvHeight;
  }

  public Endpoint secureCall(String secureCall) {
    this.secureCall = secureCall;
    return this;
  }

   /**
   * Get secureCall
   * @return secureCall
  **/
  @ApiModelProperty(value = "")
  public String getSecureCall() {
    return secureCall;
  }

  public void setSecureCall(String secureCall) {
    this.secureCall = secureCall;
  }

  public Endpoint videoLocalRtcpAddress(String videoLocalRtcpAddress) {
    this.videoLocalRtcpAddress = videoLocalRtcpAddress;
    return this;
  }

   /**
   * Get videoLocalRtcpAddress
   * @return videoLocalRtcpAddress
  **/
  @ApiModelProperty(value = "")
  public String getVideoLocalRtcpAddress() {
    return videoLocalRtcpAddress;
  }

  public void setVideoLocalRtcpAddress(String videoLocalRtcpAddress) {
    this.videoLocalRtcpAddress = videoLocalRtcpAddress;
  }

  public Endpoint audioPlayName(String audioPlayName) {
    this.audioPlayName = audioPlayName;
    return this;
  }

   /**
   * Get audioPlayName
   * @return audioPlayName
  **/
  @ApiModelProperty(value = "")
  public String getAudioPlayName() {
    return audioPlayName;
  }

  public void setAudioPlayName(String audioPlayName) {
    this.audioPlayName = audioPlayName;
  }

  public Endpoint videoCapID(String videoCapID) {
    this.videoCapID = videoCapID;
    return this;
  }

   /**
   * Get videoCapID
   * @return videoCapID
  **/
  @ApiModelProperty(value = "")
  public String getVideoCapID() {
    return videoCapID;
  }

  public void setVideoCapID(String videoCapID) {
    this.videoCapID = videoCapID;
  }

  public Endpoint audioRtpTransport(String audioRtpTransport) {
    this.audioRtpTransport = audioRtpTransport;
    return this;
  }

   /**
   * Get audioRtpTransport
   * @return audioRtpTransport
  **/
  @ApiModelProperty(value = "")
  public String getAudioRtpTransport() {
    return audioRtpTransport;
  }

  public void setAudioRtpTransport(String audioRtpTransport) {
    this.audioRtpTransport = audioRtpTransport;
  }

  public Endpoint meetingInfoMode(String meetingInfoMode) {
    this.meetingInfoMode = meetingInfoMode;
    return this;
  }

   /**
   * Get meetingInfoMode
   * @return meetingInfoMode
  **/
  @ApiModelProperty(value = "")
  public String getMeetingInfoMode() {
    return meetingInfoMode;
  }

  public void setMeetingInfoMode(String meetingInfoMode) {
    this.meetingInfoMode = meetingInfoMode;
  }

  public Endpoint callhostname(String callhostname) {
    this.callhostname = callhostname;
    return this;
  }

   /**
   * Get callhostname
   * @return callhostname
  **/
  @ApiModelProperty(value = "")
  public String getCallhostname() {
    return callhostname;
  }

  public void setCallhostname(String callhostname) {
    this.callhostname = callhostname;
  }

  public Endpoint callguid(String callguid) {
    this.callguid = callguid;
    return this;
  }

   /**
   * Get callguid
   * @return callguid
  **/
  @ApiModelProperty(value = "")
  public String getCallguid() {
    return callguid;
  }

  public void setCallguid(String callguid) {
    this.callguid = callguid;
  }

  public Endpoint audioCapID(String audioCapID) {
    this.audioCapID = audioCapID;
    return this;
  }

   /**
   * Get audioCapID
   * @return audioCapID
  **/
  @ApiModelProperty(value = "")
  public String getAudioCapID() {
    return audioCapID;
  }

  public void setAudioCapID(String audioCapID) {
    this.audioCapID = audioCapID;
  }

  public Endpoint videoSend(String videoSend) {
    this.videoSend = videoSend;
    return this;
  }

   /**
   * Get videoSend
   * @return videoSend
  **/
  @ApiModelProperty(value = "")
  public String getVideoSend() {
    return videoSend;
  }

  public void setVideoSend(String videoSend) {
    this.videoSend = videoSend;
  }

  public Endpoint contentRecvCodec(String contentRecvCodec) {
    this.contentRecvCodec = contentRecvCodec;
    return this;
  }

   /**
   * Get contentRecvCodec
   * @return contentRecvCodec
  **/
  @ApiModelProperty(value = "")
  public String getContentRecvCodec() {
    return contentRecvCodec;
  }

  public void setContentRecvCodec(String contentRecvCodec) {
    this.contentRecvCodec = contentRecvCodec;
  }

  public Endpoint sessionRelay(String sessionRelay) {
    this.sessionRelay = sessionRelay;
    return this;
  }

   /**
   * Get sessionRelay
   * @return sessionRelay
  **/
  @ApiModelProperty(value = "")
  public String getSessionRelay() {
    return sessionRelay;
  }

  public void setSessionRelay(String sessionRelay) {
    this.sessionRelay = sessionRelay;
  }

  public Endpoint videoRecvRemoteMute(String videoRecvRemoteMute) {
    this.videoRecvRemoteMute = videoRecvRemoteMute;
    return this;
  }

   /**
   * Get videoRecvRemoteMute
   * @return videoRecvRemoteMute
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvRemoteMute() {
    return videoRecvRemoteMute;
  }

  public void setVideoRecvRemoteMute(String videoRecvRemoteMute) {
    this.videoRecvRemoteMute = videoRecvRemoteMute;
  }

  public Endpoint id(String id) {
    this.id = id;
    return this;
  }

   /**
   * Get id
   * @return id
  **/
  @ApiModelProperty(value = "")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }

  public Endpoint bondedVideoName(String bondedVideoName) {
    this.bondedVideoName = bondedVideoName;
    return this;
  }

   /**
   * Get bondedVideoName
   * @return bondedVideoName
  **/
  @ApiModelProperty(value = "")
  public String getBondedVideoName() {
    return bondedVideoName;
  }

  public void setBondedVideoName(String bondedVideoName) {
    this.bondedVideoName = bondedVideoName;
  }

  public Endpoint isInRoster(Boolean isInRoster) {
    this.isInRoster = isInRoster;
    return this;
  }

   /**
   * Get isInRoster
   * @return isInRoster
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsInRoster() {
    return isInRoster;
  }

  public void setIsInRoster(Boolean isInRoster) {
    this.isInRoster = isInRoster;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Endpoint endpoint = (Endpoint) o;
    return Objects.equals(this.ecMode, endpoint.ecMode) &&
        Objects.equals(this.creationtime, endpoint.creationtime) &&
        Objects.equals(this.audioRemoteRtcpAddress, endpoint.audioRemoteRtcpAddress) &&
        Objects.equals(this.videoSendCodec, endpoint.videoSendCodec) &&
        Objects.equals(this.audioPlayID, endpoint.audioPlayID) &&
        Objects.equals(this.callQualityRecv, endpoint.callQualityRecv) &&
        Objects.equals(this.sessionOut, endpoint.sessionOut) &&
        Objects.equals(this.audioLocalAddress, endpoint.audioLocalAddress) &&
        Objects.equals(this.meetingid, endpoint.meetingid) &&
        Objects.equals(this.videoSendWidth, endpoint.videoSendWidth) &&
        Objects.equals(this.callQualitySend, endpoint.callQualitySend) &&
        Objects.equals(this.mhaddress, endpoint.mhaddress) &&
        Objects.equals(this.rdCControlleeCapable, endpoint.rdCControlleeCapable) &&
        Objects.equals(this.audioCapName, endpoint.audioCapName) &&
        Objects.equals(this.proxyInfo, endpoint.proxyInfo) &&
        Objects.equals(this.audioSendCodec, endpoint.audioSendCodec) &&
        Objects.equals(this.vendor, endpoint.vendor) &&
        Objects.equals(this.videoRecvWidth, endpoint.videoRecvWidth) &&
        Objects.equals(this.conaddress, endpoint.conaddress) &&
        Objects.equals(this.talkDetected, endpoint.talkDetected) &&
        Objects.equals(this.subLayout, endpoint.subLayout) &&
        Objects.equals(this.audioRtcpRelay, endpoint.audioRtcpRelay) &&
        Objects.equals(this.audioRecvLocalMute, endpoint.audioRecvLocalMute) &&
        Objects.equals(this.name, endpoint.name) &&
        Objects.equals(this.videoLocalAddress, endpoint.videoLocalAddress) &&
        Objects.equals(this.audioLocalRtcpAddress, endpoint.audioLocalRtcpAddress) &&
        Objects.equals(this.contentRtpRelay, endpoint.contentRtpRelay) &&
        Objects.equals(this.contentLocalRtcpAddress, endpoint.contentLocalRtcpAddress) &&
        Objects.equals(this.remoteConnectionCount, endpoint.remoteConnectionCount) &&
        Objects.equals(this.callrate, endpoint.callrate) &&
        Objects.equals(this.mixerGuid, endpoint.mixerGuid) &&
        Objects.equals(this.transport, endpoint.transport) &&
        Objects.equals(this.audioCapSelectID, endpoint.audioCapSelectID) &&
        Objects.equals(this.countryCode, endpoint.countryCode) &&
        Objects.equals(this.rdCControllerCapable, endpoint.rdCControllerCapable) &&
        Objects.equals(this.pairedname, endpoint.pairedname) &&
        Objects.equals(this.videoRtcpRelay, endpoint.videoRtcpRelay) &&
        Objects.equals(this.endpointCpuParams, endpoint.endpointCpuParams) &&
        Objects.equals(this.videoRemoteAddress, endpoint.videoRemoteAddress) &&
        Objects.equals(this.version, endpoint.version) &&
        Objects.equals(this.contentRecv, endpoint.contentRecv) &&
        Objects.equals(this.localName, endpoint.localName) &&
        Objects.equals(this.bjNUserId, endpoint.bjNUserId) &&
        Objects.equals(this.contentRemoteAddress, endpoint.contentRemoteAddress) &&
        Objects.equals(this.audioSend, endpoint.audioSend) &&
        Objects.equals(this.participantDTMFMenus, endpoint.participantDTMFMenus) &&
        Objects.equals(this.videoRtcpTranspor, endpoint.videoRtcpTranspor) &&
        Objects.equals(this.audioRtcpTransport, endpoint.audioRtcpTransport) &&
        Objects.equals(this.relayNodeId, endpoint.relayNodeId) &&
        Objects.equals(this.contentRemoteRtcpAddress, endpoint.contentRemoteRtcpAddress) &&
        Objects.equals(this.audioRtpRelay, endpoint.audioRtpRelay) &&
        Objects.equals(this.videoRtpTransport, endpoint.videoRtpTransport) &&
        Objects.equals(this.contentRecvLocalMute, endpoint.contentRecvLocalMute) &&
        Objects.equals(this.layout, endpoint.layout) &&
        Objects.equals(this.contentSend, endpoint.contentSend) &&
        Objects.equals(this.remoteaddress, endpoint.remoteaddress) &&
        Objects.equals(this.meetingGuid, endpoint.meetingGuid) &&
        Objects.equals(this.connecttime, endpoint.connecttime) &&
        Objects.equals(this.localaddress, endpoint.localaddress) &&
        Objects.equals(this.audioRemoteAddress, endpoint.audioRemoteAddress) &&
        Objects.equals(this.bondedAudioGuid, endpoint.bondedAudioGuid) &&
        Objects.equals(this.audioRecvRemoteMute, endpoint.audioRecvRemoteMute) &&
        Objects.equals(this.sessionOutRelay, endpoint.sessionOutRelay) &&
        Objects.equals(this.leader, endpoint.leader) &&
        Objects.equals(this.contentLocalAddress, endpoint.contentLocalAddress) &&
        Objects.equals(this.movieCapable, endpoint.movieCapable) &&
        Objects.equals(this.videoRecvLocalMute, endpoint.videoRecvLocalMute) &&
        Objects.equals(this.contentRtpTransport, endpoint.contentRtpTransport) &&
        Objects.equals(this.rdCVersion, endpoint.rdCVersion) &&
        Objects.equals(this.audioRecv, endpoint.audioRecv) &&
        Objects.equals(this.contentRelayServer, endpoint.contentRelayServer) &&
        Objects.equals(this.videoRecv, endpoint.videoRecv) &&
        Objects.equals(this.visibility, endpoint.visibility) &&
        Objects.equals(this.sessionid, endpoint.sessionid) &&
        Objects.equals(this.contentRtcpRelay, endpoint.contentRtcpRelay) &&
        Objects.equals(this.locales, endpoint.locales) &&
        Objects.equals(this.medaddress, endpoint.medaddress) &&
        Objects.equals(this.htmlLayoutGuid, endpoint.htmlLayoutGuid) &&
        Objects.equals(this.endpoint, endpoint.endpoint) &&
        Objects.equals(this.videoDrop, endpoint.videoDrop) &&
        Objects.equals(this.contentRtcpTransport, endpoint.contentRtcpTransport) &&
        Objects.equals(this.videoRemoteRtcpAddress, endpoint.videoRemoteRtcpAddress) &&
        Objects.equals(this.videoRtpRelay, endpoint.videoRtpRelay) &&
        Objects.equals(this.mixaddress, endpoint.mixaddress) &&
        Objects.equals(this.siPHTTPProxyTransport, endpoint.siPHTTPProxyTransport) &&
        Objects.equals(this.videoRecvCodec, endpoint.videoRecvCodec) &&
        Objects.equals(this.audioRecvCodec, endpoint.audioRecvCodec) &&
        Objects.equals(this.sessionIn, endpoint.sessionIn) &&
        Objects.equals(this.bondedVideoGuid, endpoint.bondedVideoGuid) &&
        Objects.equals(this.callQuality, endpoint.callQuality) &&
        Objects.equals(this.meetingjointime, endpoint.meetingjointime) &&
        Objects.equals(this.sessionInRelay, endpoint.sessionInRelay) &&
        Objects.equals(this.pairedremoteaddress, endpoint.pairedremoteaddress) &&
        Objects.equals(this.videoSendHeight, endpoint.videoSendHeight) &&
        Objects.equals(this.videoRecvHeight, endpoint.videoRecvHeight) &&
        Objects.equals(this.secureCall, endpoint.secureCall) &&
        Objects.equals(this.videoLocalRtcpAddress, endpoint.videoLocalRtcpAddress) &&
        Objects.equals(this.audioPlayName, endpoint.audioPlayName) &&
        Objects.equals(this.videoCapID, endpoint.videoCapID) &&
        Objects.equals(this.audioRtpTransport, endpoint.audioRtpTransport) &&
        Objects.equals(this.meetingInfoMode, endpoint.meetingInfoMode) &&
        Objects.equals(this.callhostname, endpoint.callhostname) &&
        Objects.equals(this.callguid, endpoint.callguid) &&
        Objects.equals(this.audioCapID, endpoint.audioCapID) &&
        Objects.equals(this.videoSend, endpoint.videoSend) &&
        Objects.equals(this.contentRecvCodec, endpoint.contentRecvCodec) &&
        Objects.equals(this.sessionRelay, endpoint.sessionRelay) &&
        Objects.equals(this.videoRecvRemoteMute, endpoint.videoRecvRemoteMute) &&
        Objects.equals(this.id, endpoint.id) &&
        Objects.equals(this.bondedVideoName, endpoint.bondedVideoName) &&
        Objects.equals(this.isInRoster, endpoint.isInRoster);
  }

  @Override
  public int hashCode() {
    return Objects.hash(ecMode, creationtime, audioRemoteRtcpAddress, videoSendCodec, audioPlayID, callQualityRecv, sessionOut, audioLocalAddress, meetingid, videoSendWidth, callQualitySend, mhaddress, rdCControlleeCapable, audioCapName, proxyInfo, audioSendCodec, vendor, videoRecvWidth, conaddress, talkDetected, subLayout, audioRtcpRelay, audioRecvLocalMute, name, videoLocalAddress, audioLocalRtcpAddress, contentRtpRelay, contentLocalRtcpAddress, remoteConnectionCount, callrate, mixerGuid, transport, audioCapSelectID, countryCode, rdCControllerCapable, pairedname, videoRtcpRelay, endpointCpuParams, videoRemoteAddress, version, contentRecv, localName, bjNUserId, contentRemoteAddress, audioSend, participantDTMFMenus, videoRtcpTranspor, audioRtcpTransport, relayNodeId, contentRemoteRtcpAddress, audioRtpRelay, videoRtpTransport, contentRecvLocalMute, layout, contentSend, remoteaddress, meetingGuid, connecttime, localaddress, audioRemoteAddress, bondedAudioGuid, audioRecvRemoteMute, sessionOutRelay, leader, contentLocalAddress, movieCapable, videoRecvLocalMute, contentRtpTransport, rdCVersion, audioRecv, contentRelayServer, videoRecv, visibility, sessionid, contentRtcpRelay, locales, medaddress, htmlLayoutGuid, endpoint, videoDrop, contentRtcpTransport, videoRemoteRtcpAddress, videoRtpRelay, mixaddress, siPHTTPProxyTransport, videoRecvCodec, audioRecvCodec, sessionIn, bondedVideoGuid, callQuality, meetingjointime, sessionInRelay, pairedremoteaddress, videoSendHeight, videoRecvHeight, secureCall, videoLocalRtcpAddress, audioPlayName, videoCapID, audioRtpTransport, meetingInfoMode, callhostname, callguid, audioCapID, videoSend, contentRecvCodec, sessionRelay, videoRecvRemoteMute, id, bondedVideoName, isInRoster);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Endpoint {\n");
    
    sb.append("    ecMode: ").append(toIndentedString(ecMode)).append("\n");
    sb.append("    creationtime: ").append(toIndentedString(creationtime)).append("\n");
    sb.append("    audioRemoteRtcpAddress: ").append(toIndentedString(audioRemoteRtcpAddress)).append("\n");
    sb.append("    videoSendCodec: ").append(toIndentedString(videoSendCodec)).append("\n");
    sb.append("    audioPlayID: ").append(toIndentedString(audioPlayID)).append("\n");
    sb.append("    callQualityRecv: ").append(toIndentedString(callQualityRecv)).append("\n");
    sb.append("    sessionOut: ").append(toIndentedString(sessionOut)).append("\n");
    sb.append("    audioLocalAddress: ").append(toIndentedString(audioLocalAddress)).append("\n");
    sb.append("    meetingid: ").append(toIndentedString(meetingid)).append("\n");
    sb.append("    videoSendWidth: ").append(toIndentedString(videoSendWidth)).append("\n");
    sb.append("    callQualitySend: ").append(toIndentedString(callQualitySend)).append("\n");
    sb.append("    mhaddress: ").append(toIndentedString(mhaddress)).append("\n");
    sb.append("    rdCControlleeCapable: ").append(toIndentedString(rdCControlleeCapable)).append("\n");
    sb.append("    audioCapName: ").append(toIndentedString(audioCapName)).append("\n");
    sb.append("    proxyInfo: ").append(toIndentedString(proxyInfo)).append("\n");
    sb.append("    audioSendCodec: ").append(toIndentedString(audioSendCodec)).append("\n");
    sb.append("    vendor: ").append(toIndentedString(vendor)).append("\n");
    sb.append("    videoRecvWidth: ").append(toIndentedString(videoRecvWidth)).append("\n");
    sb.append("    conaddress: ").append(toIndentedString(conaddress)).append("\n");
    sb.append("    talkDetected: ").append(toIndentedString(talkDetected)).append("\n");
    sb.append("    subLayout: ").append(toIndentedString(subLayout)).append("\n");
    sb.append("    audioRtcpRelay: ").append(toIndentedString(audioRtcpRelay)).append("\n");
    sb.append("    audioRecvLocalMute: ").append(toIndentedString(audioRecvLocalMute)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    videoLocalAddress: ").append(toIndentedString(videoLocalAddress)).append("\n");
    sb.append("    audioLocalRtcpAddress: ").append(toIndentedString(audioLocalRtcpAddress)).append("\n");
    sb.append("    contentRtpRelay: ").append(toIndentedString(contentRtpRelay)).append("\n");
    sb.append("    contentLocalRtcpAddress: ").append(toIndentedString(contentLocalRtcpAddress)).append("\n");
    sb.append("    remoteConnectionCount: ").append(toIndentedString(remoteConnectionCount)).append("\n");
    sb.append("    callrate: ").append(toIndentedString(callrate)).append("\n");
    sb.append("    mixerGuid: ").append(toIndentedString(mixerGuid)).append("\n");
    sb.append("    transport: ").append(toIndentedString(transport)).append("\n");
    sb.append("    audioCapSelectID: ").append(toIndentedString(audioCapSelectID)).append("\n");
    sb.append("    countryCode: ").append(toIndentedString(countryCode)).append("\n");
    sb.append("    rdCControllerCapable: ").append(toIndentedString(rdCControllerCapable)).append("\n");
    sb.append("    pairedname: ").append(toIndentedString(pairedname)).append("\n");
    sb.append("    videoRtcpRelay: ").append(toIndentedString(videoRtcpRelay)).append("\n");
    sb.append("    endpointCpuParams: ").append(toIndentedString(endpointCpuParams)).append("\n");
    sb.append("    videoRemoteAddress: ").append(toIndentedString(videoRemoteAddress)).append("\n");
    sb.append("    version: ").append(toIndentedString(version)).append("\n");
    sb.append("    contentRecv: ").append(toIndentedString(contentRecv)).append("\n");
    sb.append("    localName: ").append(toIndentedString(localName)).append("\n");
    sb.append("    bjNUserId: ").append(toIndentedString(bjNUserId)).append("\n");
    sb.append("    contentRemoteAddress: ").append(toIndentedString(contentRemoteAddress)).append("\n");
    sb.append("    audioSend: ").append(toIndentedString(audioSend)).append("\n");
    sb.append("    participantDTMFMenus: ").append(toIndentedString(participantDTMFMenus)).append("\n");
    sb.append("    videoRtcpTranspor: ").append(toIndentedString(videoRtcpTranspor)).append("\n");
    sb.append("    audioRtcpTransport: ").append(toIndentedString(audioRtcpTransport)).append("\n");
    sb.append("    relayNodeId: ").append(toIndentedString(relayNodeId)).append("\n");
    sb.append("    contentRemoteRtcpAddress: ").append(toIndentedString(contentRemoteRtcpAddress)).append("\n");
    sb.append("    audioRtpRelay: ").append(toIndentedString(audioRtpRelay)).append("\n");
    sb.append("    videoRtpTransport: ").append(toIndentedString(videoRtpTransport)).append("\n");
    sb.append("    contentRecvLocalMute: ").append(toIndentedString(contentRecvLocalMute)).append("\n");
    sb.append("    layout: ").append(toIndentedString(layout)).append("\n");
    sb.append("    contentSend: ").append(toIndentedString(contentSend)).append("\n");
    sb.append("    remoteaddress: ").append(toIndentedString(remoteaddress)).append("\n");
    sb.append("    meetingGuid: ").append(toIndentedString(meetingGuid)).append("\n");
    sb.append("    connecttime: ").append(toIndentedString(connecttime)).append("\n");
    sb.append("    localaddress: ").append(toIndentedString(localaddress)).append("\n");
    sb.append("    audioRemoteAddress: ").append(toIndentedString(audioRemoteAddress)).append("\n");
    sb.append("    bondedAudioGuid: ").append(toIndentedString(bondedAudioGuid)).append("\n");
    sb.append("    audioRecvRemoteMute: ").append(toIndentedString(audioRecvRemoteMute)).append("\n");
    sb.append("    sessionOutRelay: ").append(toIndentedString(sessionOutRelay)).append("\n");
    sb.append("    leader: ").append(toIndentedString(leader)).append("\n");
    sb.append("    contentLocalAddress: ").append(toIndentedString(contentLocalAddress)).append("\n");
    sb.append("    movieCapable: ").append(toIndentedString(movieCapable)).append("\n");
    sb.append("    videoRecvLocalMute: ").append(toIndentedString(videoRecvLocalMute)).append("\n");
    sb.append("    contentRtpTransport: ").append(toIndentedString(contentRtpTransport)).append("\n");
    sb.append("    rdCVersion: ").append(toIndentedString(rdCVersion)).append("\n");
    sb.append("    audioRecv: ").append(toIndentedString(audioRecv)).append("\n");
    sb.append("    contentRelayServer: ").append(toIndentedString(contentRelayServer)).append("\n");
    sb.append("    videoRecv: ").append(toIndentedString(videoRecv)).append("\n");
    sb.append("    visibility: ").append(toIndentedString(visibility)).append("\n");
    sb.append("    sessionid: ").append(toIndentedString(sessionid)).append("\n");
    sb.append("    contentRtcpRelay: ").append(toIndentedString(contentRtcpRelay)).append("\n");
    sb.append("    locales: ").append(toIndentedString(locales)).append("\n");
    sb.append("    medaddress: ").append(toIndentedString(medaddress)).append("\n");
    sb.append("    htmlLayoutGuid: ").append(toIndentedString(htmlLayoutGuid)).append("\n");
    sb.append("    endpoint: ").append(toIndentedString(endpoint)).append("\n");
    sb.append("    videoDrop: ").append(toIndentedString(videoDrop)).append("\n");
    sb.append("    contentRtcpTransport: ").append(toIndentedString(contentRtcpTransport)).append("\n");
    sb.append("    videoRemoteRtcpAddress: ").append(toIndentedString(videoRemoteRtcpAddress)).append("\n");
    sb.append("    videoRtpRelay: ").append(toIndentedString(videoRtpRelay)).append("\n");
    sb.append("    mixaddress: ").append(toIndentedString(mixaddress)).append("\n");
    sb.append("    siPHTTPProxyTransport: ").append(toIndentedString(siPHTTPProxyTransport)).append("\n");
    sb.append("    videoRecvCodec: ").append(toIndentedString(videoRecvCodec)).append("\n");
    sb.append("    audioRecvCodec: ").append(toIndentedString(audioRecvCodec)).append("\n");
    sb.append("    sessionIn: ").append(toIndentedString(sessionIn)).append("\n");
    sb.append("    bondedVideoGuid: ").append(toIndentedString(bondedVideoGuid)).append("\n");
    sb.append("    callQuality: ").append(toIndentedString(callQuality)).append("\n");
    sb.append("    meetingjointime: ").append(toIndentedString(meetingjointime)).append("\n");
    sb.append("    sessionInRelay: ").append(toIndentedString(sessionInRelay)).append("\n");
    sb.append("    pairedremoteaddress: ").append(toIndentedString(pairedremoteaddress)).append("\n");
    sb.append("    videoSendHeight: ").append(toIndentedString(videoSendHeight)).append("\n");
    sb.append("    videoRecvHeight: ").append(toIndentedString(videoRecvHeight)).append("\n");
    sb.append("    secureCall: ").append(toIndentedString(secureCall)).append("\n");
    sb.append("    videoLocalRtcpAddress: ").append(toIndentedString(videoLocalRtcpAddress)).append("\n");
    sb.append("    audioPlayName: ").append(toIndentedString(audioPlayName)).append("\n");
    sb.append("    videoCapID: ").append(toIndentedString(videoCapID)).append("\n");
    sb.append("    audioRtpTransport: ").append(toIndentedString(audioRtpTransport)).append("\n");
    sb.append("    meetingInfoMode: ").append(toIndentedString(meetingInfoMode)).append("\n");
    sb.append("    callhostname: ").append(toIndentedString(callhostname)).append("\n");
    sb.append("    callguid: ").append(toIndentedString(callguid)).append("\n");
    sb.append("    audioCapID: ").append(toIndentedString(audioCapID)).append("\n");
    sb.append("    videoSend: ").append(toIndentedString(videoSend)).append("\n");
    sb.append("    contentRecvCodec: ").append(toIndentedString(contentRecvCodec)).append("\n");
    sb.append("    sessionRelay: ").append(toIndentedString(sessionRelay)).append("\n");
    sb.append("    videoRecvRemoteMute: ").append(toIndentedString(videoRecvRemoteMute)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    bondedVideoName: ").append(toIndentedString(bondedVideoName)).append("\n");
    sb.append("    isInRoster: ").append(toIndentedString(isInRoster)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

