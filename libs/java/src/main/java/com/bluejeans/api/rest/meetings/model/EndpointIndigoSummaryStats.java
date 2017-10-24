/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.math.BigDecimal;

/**
 * EndpointIndigoSummaryStats
 */

public class EndpointIndigoSummaryStats {
  @SerializedName("audioRecvCodec")
  private String audioRecvCodec = null;

  @SerializedName("audioSendCodec")
  private String audioSendCodec = null;

  @SerializedName("contentRecv")
  private Boolean contentRecv = null;

  @SerializedName("contentSend")
  private Boolean contentSend = null;

  @SerializedName("talkDetected")
  private Boolean talkDetected = null;

  @SerializedName("sessionRelay")
  private Boolean sessionRelay = null;

  @SerializedName("sessionInRelay")
  private Boolean sessionInRelay = null;

  @SerializedName("sessionOutRelay")
  private Boolean sessionOutRelay = null;

  @SerializedName("audioRtpRelay")
  private Boolean audioRtpRelay = null;

  @SerializedName("callRate")
  private Integer callRate = null;

  @SerializedName("cumulLoss_Percent_AI")
  private BigDecimal cumulLossPercentAI = null;

  @SerializedName("cumulLoss_Percent_AO")
  private BigDecimal cumulLossPercentAO = null;

  @SerializedName("cumulLoss_Percent_VI")
  private BigDecimal cumulLossPercentVI = null;

  @SerializedName("cumulLoss_Percent_VO")
  private BigDecimal cumulLossPercentVO = null;

  @SerializedName("cumulLoss_Percent_VIC")
  private BigDecimal cumulLossPercentVIC = null;

  @SerializedName("cumulLoss_Percent_VOC")
  private BigDecimal cumulLossPercentVOC = null;

  @SerializedName("cumulLoss_AI")
  private BigDecimal cumulLossAI = null;

  @SerializedName("cumulLoss_AO")
  private BigDecimal cumulLossAO = null;

  @SerializedName("cumulLoss_VI")
  private BigDecimal cumulLossVI = null;

  @SerializedName("cumulLoss_VO")
  private BigDecimal cumulLossVO = null;

  @SerializedName("cumulLoss_VIC")
  private BigDecimal cumulLossVIC = null;

  @SerializedName("cumulLoss_VOC")
  private BigDecimal cumulLossVOC = null;

  @SerializedName("discontinuityCount")
  private BigDecimal discontinuityCount = null;

  @SerializedName("droppedPackets_AI")
  private BigDecimal droppedPacketsAI = null;

  @SerializedName("droppedPackets_VI")
  private BigDecimal droppedPacketsVI = null;

  @SerializedName("droppedPackets_VIC")
  private BigDecimal droppedPacketsVIC = null;

  @SerializedName("mixUnderRuns_AI")
  private BigDecimal mixUnderRunsAI = null;

  @SerializedName("networkAvgLoss_AI")
  private BigDecimal networkAvgLossAI = null;

  @SerializedName("networkAvgLoss_AO")
  private BigDecimal networkAvgLossAO = null;

  @SerializedName("networkAvgLoss_VI")
  private BigDecimal networkAvgLossVI = null;

  @SerializedName("networkAvgLoss_VO")
  private BigDecimal networkAvgLossVO = null;

  @SerializedName("networkCumulLoss_AI")
  private BigDecimal networkCumulLossAI = null;

  @SerializedName("networkCumulLoss_AO")
  private BigDecimal networkCumulLossAO = null;

  @SerializedName("networkCumulLoss_VI")
  private BigDecimal networkCumulLossVI = null;

  @SerializedName("networkCumulLoss_VO")
  private BigDecimal networkCumulLossVO = null;

  @SerializedName("networkLoss_AI")
  private BigDecimal networkLossAI = null;

  @SerializedName("networkLoss_AO")
  private BigDecimal networkLossAO = null;

  @SerializedName("networkLoss_VI")
  private BigDecimal networkLossVI = null;

  @SerializedName("networkLoss_VO")
  private BigDecimal networkLossVO = null;

  @SerializedName("callQuality_Min")
  private BigDecimal callQualityMin = null;

  @SerializedName("callQuality_Max")
  private BigDecimal callQualityMax = null;

  @SerializedName("callQuality_Avg")
  private BigDecimal callQualityAvg = null;

  @SerializedName("fps_Min_VI")
  private BigDecimal fpsMinVI = null;

  @SerializedName("fps_Min_VO")
  private BigDecimal fpsMinVO = null;

  @SerializedName("fps_Min_VIC")
  private BigDecimal fpsMinVIC = null;

  @SerializedName("fps_Min_VOC")
  private BigDecimal fpsMinVOC = null;

  @SerializedName("fps_Max_VI")
  private BigDecimal fpsMaxVI = null;

  @SerializedName("fps_Max_VO")
  private BigDecimal fpsMaxVO = null;

  @SerializedName("fps_Max_VIC")
  private BigDecimal fpsMaxVIC = null;

  @SerializedName("fps_Max_VOC")
  private BigDecimal fpsMaxVOC = null;

  @SerializedName("fps_Avg_VI")
  private BigDecimal fpsAvgVI = null;

  @SerializedName("fps_Avg_VO")
  private BigDecimal fpsAvgVO = null;

  @SerializedName("fps_Avg_VIC")
  private BigDecimal fpsAvgVIC = null;

  @SerializedName("fps_Avg_VOC")
  private BigDecimal fpsAvgVOC = null;

  @SerializedName("bitrate_Min_AI")
  private BigDecimal bitrateMinAI = null;

  @SerializedName("bitrate_Min_AO")
  private BigDecimal bitrateMinAO = null;

  @SerializedName("bitrate_Min_VI")
  private BigDecimal bitrateMinVI = null;

  @SerializedName("bitrate_Min_VO")
  private BigDecimal bitrateMinVO = null;

  @SerializedName("bitrate_Min_VIC")
  private BigDecimal bitrateMinVIC = null;

  @SerializedName("bitrate_Min_VOC")
  private BigDecimal bitrateMinVOC = null;

  @SerializedName("bitrate_Max_AI")
  private BigDecimal bitrateMaxAI = null;

  @SerializedName("bitrate_Max_AO")
  private BigDecimal bitrateMaxAO = null;

  @SerializedName("bitrate_Max_VI")
  private BigDecimal bitrateMaxVI = null;

  @SerializedName("bitrate_Max_VO")
  private BigDecimal bitrateMaxVO = null;

  @SerializedName("bitrate_Max_VIC")
  private BigDecimal bitrateMaxVIC = null;

  @SerializedName("bitrate_Max_VOC")
  private BigDecimal bitrateMaxVOC = null;

  @SerializedName("bitrate_Avg_AI")
  private BigDecimal bitrateAvgAI = null;

  @SerializedName("bitrate_Avg_AO")
  private BigDecimal bitrateAvgAO = null;

  @SerializedName("bitrate_Avg_VI")
  private BigDecimal bitrateAvgVI = null;

  @SerializedName("bitrate_Avg_VO")
  private BigDecimal bitrateAvgVO = null;

  @SerializedName("bitrate_Avg_VIC")
  private BigDecimal bitrateAvgVIC = null;

  @SerializedName("bitrate_Avg_VOC")
  private BigDecimal bitrateAvgVOC = null;

  @SerializedName("jitter_Min_AI")
  private BigDecimal jitterMinAI = null;

  @SerializedName("jitter_Min_AO")
  private BigDecimal jitterMinAO = null;

  @SerializedName("jitter_Min_VI")
  private BigDecimal jitterMinVI = null;

  @SerializedName("jitter_Min_VO")
  private BigDecimal jitterMinVO = null;

  @SerializedName("jitter_Min_VIC")
  private BigDecimal jitterMinVIC = null;

  @SerializedName("jitter_Min_VOC")
  private BigDecimal jitterMinVOC = null;

  @SerializedName("jitter_Max_AI")
  private BigDecimal jitterMaxAI = null;

  @SerializedName("jitter_Max_AO")
  private BigDecimal jitterMaxAO = null;

  @SerializedName("jitter_Max_VI")
  private BigDecimal jitterMaxVI = null;

  @SerializedName("jitter_Max_VO")
  private BigDecimal jitterMaxVO = null;

  @SerializedName("jitter_Max_VIC")
  private BigDecimal jitterMaxVIC = null;

  @SerializedName("jitter_Max_VOC")
  private BigDecimal jitterMaxVOC = null;

  @SerializedName("jitter_Avg_AI")
  private BigDecimal jitterAvgAI = null;

  @SerializedName("jitter_Avg_AO")
  private BigDecimal jitterAvgAO = null;

  @SerializedName("jitter_Avg_VI")
  private BigDecimal jitterAvgVI = null;

  @SerializedName("jitter_Avg_VO")
  private BigDecimal jitterAvgVO = null;

  @SerializedName("jitter_Avg_VIC")
  private BigDecimal jitterAvgVIC = null;

  @SerializedName("jitter_Avg_VOC")
  private BigDecimal jitterAvgVOC = null;

  @SerializedName("maxJitter_Min_AI")
  private BigDecimal maxJitterMinAI = null;

  @SerializedName("maxJitter_Min_VI")
  private BigDecimal maxJitterMinVI = null;

  @SerializedName("maxJitter_Min_VIC")
  private BigDecimal maxJitterMinVIC = null;

  @SerializedName("maxJitter_Max_AI")
  private BigDecimal maxJitterMaxAI = null;

  @SerializedName("maxJitter_Max_VI")
  private BigDecimal maxJitterMaxVI = null;

  @SerializedName("maxJitter_Max_VIC")
  private BigDecimal maxJitterMaxVIC = null;

  @SerializedName("maxJitter_Avg_AI")
  private BigDecimal maxJitterAvgAI = null;

  @SerializedName("maxJitter_Avg_VI")
  private BigDecimal maxJitterAvgVI = null;

  @SerializedName("maxJitter_Avg_VIC")
  private BigDecimal maxJitterAvgVIC = null;

  @SerializedName("videoRecvHeight_Min")
  private BigDecimal videoRecvHeightMin = null;

  @SerializedName("videoRecvHeight_Max")
  private BigDecimal videoRecvHeightMax = null;

  @SerializedName("videoRecvWidth_Min")
  private BigDecimal videoRecvWidthMin = null;

  @SerializedName("videoRecvWidth_Max")
  private BigDecimal videoRecvWidthMax = null;

  @SerializedName("videoSendHeight_Min")
  private BigDecimal videoSendHeightMin = null;

  @SerializedName("videoSendHeight_Max")
  private BigDecimal videoSendHeightMax = null;

  @SerializedName("videoSendWidth_Min")
  private BigDecimal videoSendWidthMin = null;

  @SerializedName("videoSendWidth_Max")
  private BigDecimal videoSendWidthMax = null;

  @SerializedName("contentRecvHeight_Min")
  private BigDecimal contentRecvHeightMin = null;

  @SerializedName("contentRecvHeight_Max")
  private BigDecimal contentRecvHeightMax = null;

  @SerializedName("contentRecvWidth_Min")
  private BigDecimal contentRecvWidthMin = null;

  @SerializedName("contentRecvWidth_Max")
  private BigDecimal contentRecvWidthMax = null;

  @SerializedName("contentSendHeight_Min")
  private BigDecimal contentSendHeightMin = null;

  @SerializedName("contentSendHeight_Max")
  private BigDecimal contentSendHeightMax = null;

  @SerializedName("contentSendWidth_Min")
  private BigDecimal contentSendWidthMin = null;

  @SerializedName("contentSendWidth_Max")
  private BigDecimal contentSendWidthMax = null;

  @SerializedName("roundTripDelay_Min")
  private BigDecimal roundTripDelayMin = null;

  @SerializedName("roundTripDelay_Max")
  private BigDecimal roundTripDelayMax = null;

  @SerializedName("roundTripDelay_Avg")
  private BigDecimal roundTripDelayAvg = null;

  @SerializedName("rfactor_Min")
  private BigDecimal rfactorMin = null;

  @SerializedName("rfactor_Max")
  private BigDecimal rfactorMax = null;

  @SerializedName("rfactor_Avg")
  private BigDecimal rfactorAvg = null;

  @SerializedName("processCpuLoad_Min")
  private BigDecimal processCpuLoadMin = null;

  @SerializedName("processCpuLoad_Max")
  private BigDecimal processCpuLoadMax = null;

  @SerializedName("processCpuLoad_Avg")
  private BigDecimal processCpuLoadAvg = null;

  @SerializedName("systemCpuLoad_Min")
  private BigDecimal systemCpuLoadMin = null;

  @SerializedName("systemCpuLoad_Max")
  private BigDecimal systemCpuLoadMax = null;

  @SerializedName("systemCpuLoad_Avg")
  private BigDecimal systemCpuLoadAvg = null;

  @SerializedName("wifiRecvStrength_Min")
  private BigDecimal wifiRecvStrengthMin = null;

  @SerializedName("wifiRecvStrength_Max")
  private BigDecimal wifiRecvStrengthMax = null;

  @SerializedName("wifiRecvStrength_Avg")
  private BigDecimal wifiRecvStrengthAvg = null;

  @SerializedName("keyFrameRate_Avg_VI")
  private BigDecimal keyFrameRateAvgVI = null;

  @SerializedName("keyFrameRate_Avg_VO")
  private BigDecimal keyFrameRateAvgVO = null;

  @SerializedName("keyFrameRate_Avg_VIC")
  private BigDecimal keyFrameRateAvgVIC = null;

  @SerializedName("keyFrameRate_Avg_VOC")
  private BigDecimal keyFrameRateAvgVOC = null;

  @SerializedName("keyFrameRate_Min_VI")
  private BigDecimal keyFrameRateMinVI = null;

  @SerializedName("keyFrameRate_Min_VO")
  private BigDecimal keyFrameRateMinVO = null;

  @SerializedName("keyFrameRate_Min_VIC")
  private BigDecimal keyFrameRateMinVIC = null;

  @SerializedName("keyFrameRate_Min_VOC")
  private BigDecimal keyFrameRateMinVOC = null;

  @SerializedName("keyFrameRate_Max_VI")
  private BigDecimal keyFrameRateMaxVI = null;

  @SerializedName("keyFrameRate_Max_VO")
  private BigDecimal keyFrameRateMaxVO = null;

  @SerializedName("keyFrameRate_Max_VIC")
  private BigDecimal keyFrameRateMaxVIC = null;

  @SerializedName("keyFrameRate_Max_VOC")
  private BigDecimal keyFrameRateMaxVOC = null;

  @SerializedName("roundTripDelay_Avg_VO")
  private BigDecimal roundTripDelayAvgVO = null;

  @SerializedName("roundTripDelay_Avg_VOC")
  private BigDecimal roundTripDelayAvgVOC = null;

  @SerializedName("roundTripDelay_Avg_AO")
  private BigDecimal roundTripDelayAvgAO = null;

  public EndpointIndigoSummaryStats audioRecvCodec(String audioRecvCodec) {
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

  public EndpointIndigoSummaryStats audioSendCodec(String audioSendCodec) {
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

  public EndpointIndigoSummaryStats contentRecv(Boolean contentRecv) {
    this.contentRecv = contentRecv;
    return this;
  }

   /**
   * Get contentRecv
   * @return contentRecv
  **/
  @ApiModelProperty(value = "")
  public Boolean getContentRecv() {
    return contentRecv;
  }

  public void setContentRecv(Boolean contentRecv) {
    this.contentRecv = contentRecv;
  }

  public EndpointIndigoSummaryStats contentSend(Boolean contentSend) {
    this.contentSend = contentSend;
    return this;
  }

   /**
   * Get contentSend
   * @return contentSend
  **/
  @ApiModelProperty(value = "")
  public Boolean getContentSend() {
    return contentSend;
  }

  public void setContentSend(Boolean contentSend) {
    this.contentSend = contentSend;
  }

  public EndpointIndigoSummaryStats talkDetected(Boolean talkDetected) {
    this.talkDetected = talkDetected;
    return this;
  }

   /**
   * Get talkDetected
   * @return talkDetected
  **/
  @ApiModelProperty(value = "")
  public Boolean getTalkDetected() {
    return talkDetected;
  }

  public void setTalkDetected(Boolean talkDetected) {
    this.talkDetected = talkDetected;
  }

  public EndpointIndigoSummaryStats sessionRelay(Boolean sessionRelay) {
    this.sessionRelay = sessionRelay;
    return this;
  }

   /**
   * Get sessionRelay
   * @return sessionRelay
  **/
  @ApiModelProperty(value = "")
  public Boolean getSessionRelay() {
    return sessionRelay;
  }

  public void setSessionRelay(Boolean sessionRelay) {
    this.sessionRelay = sessionRelay;
  }

  public EndpointIndigoSummaryStats sessionInRelay(Boolean sessionInRelay) {
    this.sessionInRelay = sessionInRelay;
    return this;
  }

   /**
   * Get sessionInRelay
   * @return sessionInRelay
  **/
  @ApiModelProperty(value = "")
  public Boolean getSessionInRelay() {
    return sessionInRelay;
  }

  public void setSessionInRelay(Boolean sessionInRelay) {
    this.sessionInRelay = sessionInRelay;
  }

  public EndpointIndigoSummaryStats sessionOutRelay(Boolean sessionOutRelay) {
    this.sessionOutRelay = sessionOutRelay;
    return this;
  }

   /**
   * Get sessionOutRelay
   * @return sessionOutRelay
  **/
  @ApiModelProperty(value = "")
  public Boolean getSessionOutRelay() {
    return sessionOutRelay;
  }

  public void setSessionOutRelay(Boolean sessionOutRelay) {
    this.sessionOutRelay = sessionOutRelay;
  }

  public EndpointIndigoSummaryStats audioRtpRelay(Boolean audioRtpRelay) {
    this.audioRtpRelay = audioRtpRelay;
    return this;
  }

   /**
   * Get audioRtpRelay
   * @return audioRtpRelay
  **/
  @ApiModelProperty(value = "")
  public Boolean getAudioRtpRelay() {
    return audioRtpRelay;
  }

  public void setAudioRtpRelay(Boolean audioRtpRelay) {
    this.audioRtpRelay = audioRtpRelay;
  }

  public EndpointIndigoSummaryStats callRate(Integer callRate) {
    this.callRate = callRate;
    return this;
  }

   /**
   * Get callRate
   * @return callRate
  **/
  @ApiModelProperty(value = "")
  public Integer getCallRate() {
    return callRate;
  }

  public void setCallRate(Integer callRate) {
    this.callRate = callRate;
  }

  public EndpointIndigoSummaryStats cumulLossPercentAI(BigDecimal cumulLossPercentAI) {
    this.cumulLossPercentAI = cumulLossPercentAI;
    return this;
  }

   /**
   * Get cumulLossPercentAI
   * @return cumulLossPercentAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentAI() {
    return cumulLossPercentAI;
  }

  public void setCumulLossPercentAI(BigDecimal cumulLossPercentAI) {
    this.cumulLossPercentAI = cumulLossPercentAI;
  }

  public EndpointIndigoSummaryStats cumulLossPercentAO(BigDecimal cumulLossPercentAO) {
    this.cumulLossPercentAO = cumulLossPercentAO;
    return this;
  }

   /**
   * Get cumulLossPercentAO
   * @return cumulLossPercentAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentAO() {
    return cumulLossPercentAO;
  }

  public void setCumulLossPercentAO(BigDecimal cumulLossPercentAO) {
    this.cumulLossPercentAO = cumulLossPercentAO;
  }

  public EndpointIndigoSummaryStats cumulLossPercentVI(BigDecimal cumulLossPercentVI) {
    this.cumulLossPercentVI = cumulLossPercentVI;
    return this;
  }

   /**
   * Get cumulLossPercentVI
   * @return cumulLossPercentVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentVI() {
    return cumulLossPercentVI;
  }

  public void setCumulLossPercentVI(BigDecimal cumulLossPercentVI) {
    this.cumulLossPercentVI = cumulLossPercentVI;
  }

  public EndpointIndigoSummaryStats cumulLossPercentVO(BigDecimal cumulLossPercentVO) {
    this.cumulLossPercentVO = cumulLossPercentVO;
    return this;
  }

   /**
   * Get cumulLossPercentVO
   * @return cumulLossPercentVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentVO() {
    return cumulLossPercentVO;
  }

  public void setCumulLossPercentVO(BigDecimal cumulLossPercentVO) {
    this.cumulLossPercentVO = cumulLossPercentVO;
  }

  public EndpointIndigoSummaryStats cumulLossPercentVIC(BigDecimal cumulLossPercentVIC) {
    this.cumulLossPercentVIC = cumulLossPercentVIC;
    return this;
  }

   /**
   * Get cumulLossPercentVIC
   * @return cumulLossPercentVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentVIC() {
    return cumulLossPercentVIC;
  }

  public void setCumulLossPercentVIC(BigDecimal cumulLossPercentVIC) {
    this.cumulLossPercentVIC = cumulLossPercentVIC;
  }

  public EndpointIndigoSummaryStats cumulLossPercentVOC(BigDecimal cumulLossPercentVOC) {
    this.cumulLossPercentVOC = cumulLossPercentVOC;
    return this;
  }

   /**
   * Get cumulLossPercentVOC
   * @return cumulLossPercentVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossPercentVOC() {
    return cumulLossPercentVOC;
  }

  public void setCumulLossPercentVOC(BigDecimal cumulLossPercentVOC) {
    this.cumulLossPercentVOC = cumulLossPercentVOC;
  }

  public EndpointIndigoSummaryStats cumulLossAI(BigDecimal cumulLossAI) {
    this.cumulLossAI = cumulLossAI;
    return this;
  }

   /**
   * Get cumulLossAI
   * @return cumulLossAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossAI() {
    return cumulLossAI;
  }

  public void setCumulLossAI(BigDecimal cumulLossAI) {
    this.cumulLossAI = cumulLossAI;
  }

  public EndpointIndigoSummaryStats cumulLossAO(BigDecimal cumulLossAO) {
    this.cumulLossAO = cumulLossAO;
    return this;
  }

   /**
   * Get cumulLossAO
   * @return cumulLossAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossAO() {
    return cumulLossAO;
  }

  public void setCumulLossAO(BigDecimal cumulLossAO) {
    this.cumulLossAO = cumulLossAO;
  }

  public EndpointIndigoSummaryStats cumulLossVI(BigDecimal cumulLossVI) {
    this.cumulLossVI = cumulLossVI;
    return this;
  }

   /**
   * Get cumulLossVI
   * @return cumulLossVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossVI() {
    return cumulLossVI;
  }

  public void setCumulLossVI(BigDecimal cumulLossVI) {
    this.cumulLossVI = cumulLossVI;
  }

  public EndpointIndigoSummaryStats cumulLossVO(BigDecimal cumulLossVO) {
    this.cumulLossVO = cumulLossVO;
    return this;
  }

   /**
   * Get cumulLossVO
   * @return cumulLossVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossVO() {
    return cumulLossVO;
  }

  public void setCumulLossVO(BigDecimal cumulLossVO) {
    this.cumulLossVO = cumulLossVO;
  }

  public EndpointIndigoSummaryStats cumulLossVIC(BigDecimal cumulLossVIC) {
    this.cumulLossVIC = cumulLossVIC;
    return this;
  }

   /**
   * Get cumulLossVIC
   * @return cumulLossVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossVIC() {
    return cumulLossVIC;
  }

  public void setCumulLossVIC(BigDecimal cumulLossVIC) {
    this.cumulLossVIC = cumulLossVIC;
  }

  public EndpointIndigoSummaryStats cumulLossVOC(BigDecimal cumulLossVOC) {
    this.cumulLossVOC = cumulLossVOC;
    return this;
  }

   /**
   * Get cumulLossVOC
   * @return cumulLossVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCumulLossVOC() {
    return cumulLossVOC;
  }

  public void setCumulLossVOC(BigDecimal cumulLossVOC) {
    this.cumulLossVOC = cumulLossVOC;
  }

  public EndpointIndigoSummaryStats discontinuityCount(BigDecimal discontinuityCount) {
    this.discontinuityCount = discontinuityCount;
    return this;
  }

   /**
   * Get discontinuityCount
   * @return discontinuityCount
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getDiscontinuityCount() {
    return discontinuityCount;
  }

  public void setDiscontinuityCount(BigDecimal discontinuityCount) {
    this.discontinuityCount = discontinuityCount;
  }

  public EndpointIndigoSummaryStats droppedPacketsAI(BigDecimal droppedPacketsAI) {
    this.droppedPacketsAI = droppedPacketsAI;
    return this;
  }

   /**
   * Get droppedPacketsAI
   * @return droppedPacketsAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getDroppedPacketsAI() {
    return droppedPacketsAI;
  }

  public void setDroppedPacketsAI(BigDecimal droppedPacketsAI) {
    this.droppedPacketsAI = droppedPacketsAI;
  }

  public EndpointIndigoSummaryStats droppedPacketsVI(BigDecimal droppedPacketsVI) {
    this.droppedPacketsVI = droppedPacketsVI;
    return this;
  }

   /**
   * Get droppedPacketsVI
   * @return droppedPacketsVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getDroppedPacketsVI() {
    return droppedPacketsVI;
  }

  public void setDroppedPacketsVI(BigDecimal droppedPacketsVI) {
    this.droppedPacketsVI = droppedPacketsVI;
  }

  public EndpointIndigoSummaryStats droppedPacketsVIC(BigDecimal droppedPacketsVIC) {
    this.droppedPacketsVIC = droppedPacketsVIC;
    return this;
  }

   /**
   * Get droppedPacketsVIC
   * @return droppedPacketsVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getDroppedPacketsVIC() {
    return droppedPacketsVIC;
  }

  public void setDroppedPacketsVIC(BigDecimal droppedPacketsVIC) {
    this.droppedPacketsVIC = droppedPacketsVIC;
  }

  public EndpointIndigoSummaryStats mixUnderRunsAI(BigDecimal mixUnderRunsAI) {
    this.mixUnderRunsAI = mixUnderRunsAI;
    return this;
  }

   /**
   * Get mixUnderRunsAI
   * @return mixUnderRunsAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMixUnderRunsAI() {
    return mixUnderRunsAI;
  }

  public void setMixUnderRunsAI(BigDecimal mixUnderRunsAI) {
    this.mixUnderRunsAI = mixUnderRunsAI;
  }

  public EndpointIndigoSummaryStats networkAvgLossAI(BigDecimal networkAvgLossAI) {
    this.networkAvgLossAI = networkAvgLossAI;
    return this;
  }

   /**
   * Get networkAvgLossAI
   * @return networkAvgLossAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkAvgLossAI() {
    return networkAvgLossAI;
  }

  public void setNetworkAvgLossAI(BigDecimal networkAvgLossAI) {
    this.networkAvgLossAI = networkAvgLossAI;
  }

  public EndpointIndigoSummaryStats networkAvgLossAO(BigDecimal networkAvgLossAO) {
    this.networkAvgLossAO = networkAvgLossAO;
    return this;
  }

   /**
   * Get networkAvgLossAO
   * @return networkAvgLossAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkAvgLossAO() {
    return networkAvgLossAO;
  }

  public void setNetworkAvgLossAO(BigDecimal networkAvgLossAO) {
    this.networkAvgLossAO = networkAvgLossAO;
  }

  public EndpointIndigoSummaryStats networkAvgLossVI(BigDecimal networkAvgLossVI) {
    this.networkAvgLossVI = networkAvgLossVI;
    return this;
  }

   /**
   * Get networkAvgLossVI
   * @return networkAvgLossVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkAvgLossVI() {
    return networkAvgLossVI;
  }

  public void setNetworkAvgLossVI(BigDecimal networkAvgLossVI) {
    this.networkAvgLossVI = networkAvgLossVI;
  }

  public EndpointIndigoSummaryStats networkAvgLossVO(BigDecimal networkAvgLossVO) {
    this.networkAvgLossVO = networkAvgLossVO;
    return this;
  }

   /**
   * Get networkAvgLossVO
   * @return networkAvgLossVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkAvgLossVO() {
    return networkAvgLossVO;
  }

  public void setNetworkAvgLossVO(BigDecimal networkAvgLossVO) {
    this.networkAvgLossVO = networkAvgLossVO;
  }

  public EndpointIndigoSummaryStats networkCumulLossAI(BigDecimal networkCumulLossAI) {
    this.networkCumulLossAI = networkCumulLossAI;
    return this;
  }

   /**
   * Get networkCumulLossAI
   * @return networkCumulLossAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkCumulLossAI() {
    return networkCumulLossAI;
  }

  public void setNetworkCumulLossAI(BigDecimal networkCumulLossAI) {
    this.networkCumulLossAI = networkCumulLossAI;
  }

  public EndpointIndigoSummaryStats networkCumulLossAO(BigDecimal networkCumulLossAO) {
    this.networkCumulLossAO = networkCumulLossAO;
    return this;
  }

   /**
   * Get networkCumulLossAO
   * @return networkCumulLossAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkCumulLossAO() {
    return networkCumulLossAO;
  }

  public void setNetworkCumulLossAO(BigDecimal networkCumulLossAO) {
    this.networkCumulLossAO = networkCumulLossAO;
  }

  public EndpointIndigoSummaryStats networkCumulLossVI(BigDecimal networkCumulLossVI) {
    this.networkCumulLossVI = networkCumulLossVI;
    return this;
  }

   /**
   * Get networkCumulLossVI
   * @return networkCumulLossVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkCumulLossVI() {
    return networkCumulLossVI;
  }

  public void setNetworkCumulLossVI(BigDecimal networkCumulLossVI) {
    this.networkCumulLossVI = networkCumulLossVI;
  }

  public EndpointIndigoSummaryStats networkCumulLossVO(BigDecimal networkCumulLossVO) {
    this.networkCumulLossVO = networkCumulLossVO;
    return this;
  }

   /**
   * Get networkCumulLossVO
   * @return networkCumulLossVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkCumulLossVO() {
    return networkCumulLossVO;
  }

  public void setNetworkCumulLossVO(BigDecimal networkCumulLossVO) {
    this.networkCumulLossVO = networkCumulLossVO;
  }

  public EndpointIndigoSummaryStats networkLossAI(BigDecimal networkLossAI) {
    this.networkLossAI = networkLossAI;
    return this;
  }

   /**
   * Get networkLossAI
   * @return networkLossAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkLossAI() {
    return networkLossAI;
  }

  public void setNetworkLossAI(BigDecimal networkLossAI) {
    this.networkLossAI = networkLossAI;
  }

  public EndpointIndigoSummaryStats networkLossAO(BigDecimal networkLossAO) {
    this.networkLossAO = networkLossAO;
    return this;
  }

   /**
   * Get networkLossAO
   * @return networkLossAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkLossAO() {
    return networkLossAO;
  }

  public void setNetworkLossAO(BigDecimal networkLossAO) {
    this.networkLossAO = networkLossAO;
  }

  public EndpointIndigoSummaryStats networkLossVI(BigDecimal networkLossVI) {
    this.networkLossVI = networkLossVI;
    return this;
  }

   /**
   * Get networkLossVI
   * @return networkLossVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkLossVI() {
    return networkLossVI;
  }

  public void setNetworkLossVI(BigDecimal networkLossVI) {
    this.networkLossVI = networkLossVI;
  }

  public EndpointIndigoSummaryStats networkLossVO(BigDecimal networkLossVO) {
    this.networkLossVO = networkLossVO;
    return this;
  }

   /**
   * Get networkLossVO
   * @return networkLossVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getNetworkLossVO() {
    return networkLossVO;
  }

  public void setNetworkLossVO(BigDecimal networkLossVO) {
    this.networkLossVO = networkLossVO;
  }

  public EndpointIndigoSummaryStats callQualityMin(BigDecimal callQualityMin) {
    this.callQualityMin = callQualityMin;
    return this;
  }

   /**
   * Get callQualityMin
   * @return callQualityMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCallQualityMin() {
    return callQualityMin;
  }

  public void setCallQualityMin(BigDecimal callQualityMin) {
    this.callQualityMin = callQualityMin;
  }

  public EndpointIndigoSummaryStats callQualityMax(BigDecimal callQualityMax) {
    this.callQualityMax = callQualityMax;
    return this;
  }

   /**
   * Get callQualityMax
   * @return callQualityMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCallQualityMax() {
    return callQualityMax;
  }

  public void setCallQualityMax(BigDecimal callQualityMax) {
    this.callQualityMax = callQualityMax;
  }

  public EndpointIndigoSummaryStats callQualityAvg(BigDecimal callQualityAvg) {
    this.callQualityAvg = callQualityAvg;
    return this;
  }

   /**
   * Get callQualityAvg
   * @return callQualityAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getCallQualityAvg() {
    return callQualityAvg;
  }

  public void setCallQualityAvg(BigDecimal callQualityAvg) {
    this.callQualityAvg = callQualityAvg;
  }

  public EndpointIndigoSummaryStats fpsMinVI(BigDecimal fpsMinVI) {
    this.fpsMinVI = fpsMinVI;
    return this;
  }

   /**
   * Get fpsMinVI
   * @return fpsMinVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMinVI() {
    return fpsMinVI;
  }

  public void setFpsMinVI(BigDecimal fpsMinVI) {
    this.fpsMinVI = fpsMinVI;
  }

  public EndpointIndigoSummaryStats fpsMinVO(BigDecimal fpsMinVO) {
    this.fpsMinVO = fpsMinVO;
    return this;
  }

   /**
   * Get fpsMinVO
   * @return fpsMinVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMinVO() {
    return fpsMinVO;
  }

  public void setFpsMinVO(BigDecimal fpsMinVO) {
    this.fpsMinVO = fpsMinVO;
  }

  public EndpointIndigoSummaryStats fpsMinVIC(BigDecimal fpsMinVIC) {
    this.fpsMinVIC = fpsMinVIC;
    return this;
  }

   /**
   * Get fpsMinVIC
   * @return fpsMinVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMinVIC() {
    return fpsMinVIC;
  }

  public void setFpsMinVIC(BigDecimal fpsMinVIC) {
    this.fpsMinVIC = fpsMinVIC;
  }

  public EndpointIndigoSummaryStats fpsMinVOC(BigDecimal fpsMinVOC) {
    this.fpsMinVOC = fpsMinVOC;
    return this;
  }

   /**
   * Get fpsMinVOC
   * @return fpsMinVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMinVOC() {
    return fpsMinVOC;
  }

  public void setFpsMinVOC(BigDecimal fpsMinVOC) {
    this.fpsMinVOC = fpsMinVOC;
  }

  public EndpointIndigoSummaryStats fpsMaxVI(BigDecimal fpsMaxVI) {
    this.fpsMaxVI = fpsMaxVI;
    return this;
  }

   /**
   * Get fpsMaxVI
   * @return fpsMaxVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMaxVI() {
    return fpsMaxVI;
  }

  public void setFpsMaxVI(BigDecimal fpsMaxVI) {
    this.fpsMaxVI = fpsMaxVI;
  }

  public EndpointIndigoSummaryStats fpsMaxVO(BigDecimal fpsMaxVO) {
    this.fpsMaxVO = fpsMaxVO;
    return this;
  }

   /**
   * Get fpsMaxVO
   * @return fpsMaxVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMaxVO() {
    return fpsMaxVO;
  }

  public void setFpsMaxVO(BigDecimal fpsMaxVO) {
    this.fpsMaxVO = fpsMaxVO;
  }

  public EndpointIndigoSummaryStats fpsMaxVIC(BigDecimal fpsMaxVIC) {
    this.fpsMaxVIC = fpsMaxVIC;
    return this;
  }

   /**
   * Get fpsMaxVIC
   * @return fpsMaxVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMaxVIC() {
    return fpsMaxVIC;
  }

  public void setFpsMaxVIC(BigDecimal fpsMaxVIC) {
    this.fpsMaxVIC = fpsMaxVIC;
  }

  public EndpointIndigoSummaryStats fpsMaxVOC(BigDecimal fpsMaxVOC) {
    this.fpsMaxVOC = fpsMaxVOC;
    return this;
  }

   /**
   * Get fpsMaxVOC
   * @return fpsMaxVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsMaxVOC() {
    return fpsMaxVOC;
  }

  public void setFpsMaxVOC(BigDecimal fpsMaxVOC) {
    this.fpsMaxVOC = fpsMaxVOC;
  }

  public EndpointIndigoSummaryStats fpsAvgVI(BigDecimal fpsAvgVI) {
    this.fpsAvgVI = fpsAvgVI;
    return this;
  }

   /**
   * Get fpsAvgVI
   * @return fpsAvgVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsAvgVI() {
    return fpsAvgVI;
  }

  public void setFpsAvgVI(BigDecimal fpsAvgVI) {
    this.fpsAvgVI = fpsAvgVI;
  }

  public EndpointIndigoSummaryStats fpsAvgVO(BigDecimal fpsAvgVO) {
    this.fpsAvgVO = fpsAvgVO;
    return this;
  }

   /**
   * Get fpsAvgVO
   * @return fpsAvgVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsAvgVO() {
    return fpsAvgVO;
  }

  public void setFpsAvgVO(BigDecimal fpsAvgVO) {
    this.fpsAvgVO = fpsAvgVO;
  }

  public EndpointIndigoSummaryStats fpsAvgVIC(BigDecimal fpsAvgVIC) {
    this.fpsAvgVIC = fpsAvgVIC;
    return this;
  }

   /**
   * Get fpsAvgVIC
   * @return fpsAvgVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsAvgVIC() {
    return fpsAvgVIC;
  }

  public void setFpsAvgVIC(BigDecimal fpsAvgVIC) {
    this.fpsAvgVIC = fpsAvgVIC;
  }

  public EndpointIndigoSummaryStats fpsAvgVOC(BigDecimal fpsAvgVOC) {
    this.fpsAvgVOC = fpsAvgVOC;
    return this;
  }

   /**
   * Get fpsAvgVOC
   * @return fpsAvgVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getFpsAvgVOC() {
    return fpsAvgVOC;
  }

  public void setFpsAvgVOC(BigDecimal fpsAvgVOC) {
    this.fpsAvgVOC = fpsAvgVOC;
  }

  public EndpointIndigoSummaryStats bitrateMinAI(BigDecimal bitrateMinAI) {
    this.bitrateMinAI = bitrateMinAI;
    return this;
  }

   /**
   * Get bitrateMinAI
   * @return bitrateMinAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinAI() {
    return bitrateMinAI;
  }

  public void setBitrateMinAI(BigDecimal bitrateMinAI) {
    this.bitrateMinAI = bitrateMinAI;
  }

  public EndpointIndigoSummaryStats bitrateMinAO(BigDecimal bitrateMinAO) {
    this.bitrateMinAO = bitrateMinAO;
    return this;
  }

   /**
   * Get bitrateMinAO
   * @return bitrateMinAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinAO() {
    return bitrateMinAO;
  }

  public void setBitrateMinAO(BigDecimal bitrateMinAO) {
    this.bitrateMinAO = bitrateMinAO;
  }

  public EndpointIndigoSummaryStats bitrateMinVI(BigDecimal bitrateMinVI) {
    this.bitrateMinVI = bitrateMinVI;
    return this;
  }

   /**
   * Get bitrateMinVI
   * @return bitrateMinVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinVI() {
    return bitrateMinVI;
  }

  public void setBitrateMinVI(BigDecimal bitrateMinVI) {
    this.bitrateMinVI = bitrateMinVI;
  }

  public EndpointIndigoSummaryStats bitrateMinVO(BigDecimal bitrateMinVO) {
    this.bitrateMinVO = bitrateMinVO;
    return this;
  }

   /**
   * Get bitrateMinVO
   * @return bitrateMinVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinVO() {
    return bitrateMinVO;
  }

  public void setBitrateMinVO(BigDecimal bitrateMinVO) {
    this.bitrateMinVO = bitrateMinVO;
  }

  public EndpointIndigoSummaryStats bitrateMinVIC(BigDecimal bitrateMinVIC) {
    this.bitrateMinVIC = bitrateMinVIC;
    return this;
  }

   /**
   * Get bitrateMinVIC
   * @return bitrateMinVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinVIC() {
    return bitrateMinVIC;
  }

  public void setBitrateMinVIC(BigDecimal bitrateMinVIC) {
    this.bitrateMinVIC = bitrateMinVIC;
  }

  public EndpointIndigoSummaryStats bitrateMinVOC(BigDecimal bitrateMinVOC) {
    this.bitrateMinVOC = bitrateMinVOC;
    return this;
  }

   /**
   * Get bitrateMinVOC
   * @return bitrateMinVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMinVOC() {
    return bitrateMinVOC;
  }

  public void setBitrateMinVOC(BigDecimal bitrateMinVOC) {
    this.bitrateMinVOC = bitrateMinVOC;
  }

  public EndpointIndigoSummaryStats bitrateMaxAI(BigDecimal bitrateMaxAI) {
    this.bitrateMaxAI = bitrateMaxAI;
    return this;
  }

   /**
   * Get bitrateMaxAI
   * @return bitrateMaxAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxAI() {
    return bitrateMaxAI;
  }

  public void setBitrateMaxAI(BigDecimal bitrateMaxAI) {
    this.bitrateMaxAI = bitrateMaxAI;
  }

  public EndpointIndigoSummaryStats bitrateMaxAO(BigDecimal bitrateMaxAO) {
    this.bitrateMaxAO = bitrateMaxAO;
    return this;
  }

   /**
   * Get bitrateMaxAO
   * @return bitrateMaxAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxAO() {
    return bitrateMaxAO;
  }

  public void setBitrateMaxAO(BigDecimal bitrateMaxAO) {
    this.bitrateMaxAO = bitrateMaxAO;
  }

  public EndpointIndigoSummaryStats bitrateMaxVI(BigDecimal bitrateMaxVI) {
    this.bitrateMaxVI = bitrateMaxVI;
    return this;
  }

   /**
   * Get bitrateMaxVI
   * @return bitrateMaxVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxVI() {
    return bitrateMaxVI;
  }

  public void setBitrateMaxVI(BigDecimal bitrateMaxVI) {
    this.bitrateMaxVI = bitrateMaxVI;
  }

  public EndpointIndigoSummaryStats bitrateMaxVO(BigDecimal bitrateMaxVO) {
    this.bitrateMaxVO = bitrateMaxVO;
    return this;
  }

   /**
   * Get bitrateMaxVO
   * @return bitrateMaxVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxVO() {
    return bitrateMaxVO;
  }

  public void setBitrateMaxVO(BigDecimal bitrateMaxVO) {
    this.bitrateMaxVO = bitrateMaxVO;
  }

  public EndpointIndigoSummaryStats bitrateMaxVIC(BigDecimal bitrateMaxVIC) {
    this.bitrateMaxVIC = bitrateMaxVIC;
    return this;
  }

   /**
   * Get bitrateMaxVIC
   * @return bitrateMaxVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxVIC() {
    return bitrateMaxVIC;
  }

  public void setBitrateMaxVIC(BigDecimal bitrateMaxVIC) {
    this.bitrateMaxVIC = bitrateMaxVIC;
  }

  public EndpointIndigoSummaryStats bitrateMaxVOC(BigDecimal bitrateMaxVOC) {
    this.bitrateMaxVOC = bitrateMaxVOC;
    return this;
  }

   /**
   * Get bitrateMaxVOC
   * @return bitrateMaxVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateMaxVOC() {
    return bitrateMaxVOC;
  }

  public void setBitrateMaxVOC(BigDecimal bitrateMaxVOC) {
    this.bitrateMaxVOC = bitrateMaxVOC;
  }

  public EndpointIndigoSummaryStats bitrateAvgAI(BigDecimal bitrateAvgAI) {
    this.bitrateAvgAI = bitrateAvgAI;
    return this;
  }

   /**
   * Get bitrateAvgAI
   * @return bitrateAvgAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgAI() {
    return bitrateAvgAI;
  }

  public void setBitrateAvgAI(BigDecimal bitrateAvgAI) {
    this.bitrateAvgAI = bitrateAvgAI;
  }

  public EndpointIndigoSummaryStats bitrateAvgAO(BigDecimal bitrateAvgAO) {
    this.bitrateAvgAO = bitrateAvgAO;
    return this;
  }

   /**
   * Get bitrateAvgAO
   * @return bitrateAvgAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgAO() {
    return bitrateAvgAO;
  }

  public void setBitrateAvgAO(BigDecimal bitrateAvgAO) {
    this.bitrateAvgAO = bitrateAvgAO;
  }

  public EndpointIndigoSummaryStats bitrateAvgVI(BigDecimal bitrateAvgVI) {
    this.bitrateAvgVI = bitrateAvgVI;
    return this;
  }

   /**
   * Get bitrateAvgVI
   * @return bitrateAvgVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgVI() {
    return bitrateAvgVI;
  }

  public void setBitrateAvgVI(BigDecimal bitrateAvgVI) {
    this.bitrateAvgVI = bitrateAvgVI;
  }

  public EndpointIndigoSummaryStats bitrateAvgVO(BigDecimal bitrateAvgVO) {
    this.bitrateAvgVO = bitrateAvgVO;
    return this;
  }

   /**
   * Get bitrateAvgVO
   * @return bitrateAvgVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgVO() {
    return bitrateAvgVO;
  }

  public void setBitrateAvgVO(BigDecimal bitrateAvgVO) {
    this.bitrateAvgVO = bitrateAvgVO;
  }

  public EndpointIndigoSummaryStats bitrateAvgVIC(BigDecimal bitrateAvgVIC) {
    this.bitrateAvgVIC = bitrateAvgVIC;
    return this;
  }

   /**
   * Get bitrateAvgVIC
   * @return bitrateAvgVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgVIC() {
    return bitrateAvgVIC;
  }

  public void setBitrateAvgVIC(BigDecimal bitrateAvgVIC) {
    this.bitrateAvgVIC = bitrateAvgVIC;
  }

  public EndpointIndigoSummaryStats bitrateAvgVOC(BigDecimal bitrateAvgVOC) {
    this.bitrateAvgVOC = bitrateAvgVOC;
    return this;
  }

   /**
   * Get bitrateAvgVOC
   * @return bitrateAvgVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBitrateAvgVOC() {
    return bitrateAvgVOC;
  }

  public void setBitrateAvgVOC(BigDecimal bitrateAvgVOC) {
    this.bitrateAvgVOC = bitrateAvgVOC;
  }

  public EndpointIndigoSummaryStats jitterMinAI(BigDecimal jitterMinAI) {
    this.jitterMinAI = jitterMinAI;
    return this;
  }

   /**
   * Get jitterMinAI
   * @return jitterMinAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinAI() {
    return jitterMinAI;
  }

  public void setJitterMinAI(BigDecimal jitterMinAI) {
    this.jitterMinAI = jitterMinAI;
  }

  public EndpointIndigoSummaryStats jitterMinAO(BigDecimal jitterMinAO) {
    this.jitterMinAO = jitterMinAO;
    return this;
  }

   /**
   * Get jitterMinAO
   * @return jitterMinAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinAO() {
    return jitterMinAO;
  }

  public void setJitterMinAO(BigDecimal jitterMinAO) {
    this.jitterMinAO = jitterMinAO;
  }

  public EndpointIndigoSummaryStats jitterMinVI(BigDecimal jitterMinVI) {
    this.jitterMinVI = jitterMinVI;
    return this;
  }

   /**
   * Get jitterMinVI
   * @return jitterMinVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinVI() {
    return jitterMinVI;
  }

  public void setJitterMinVI(BigDecimal jitterMinVI) {
    this.jitterMinVI = jitterMinVI;
  }

  public EndpointIndigoSummaryStats jitterMinVO(BigDecimal jitterMinVO) {
    this.jitterMinVO = jitterMinVO;
    return this;
  }

   /**
   * Get jitterMinVO
   * @return jitterMinVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinVO() {
    return jitterMinVO;
  }

  public void setJitterMinVO(BigDecimal jitterMinVO) {
    this.jitterMinVO = jitterMinVO;
  }

  public EndpointIndigoSummaryStats jitterMinVIC(BigDecimal jitterMinVIC) {
    this.jitterMinVIC = jitterMinVIC;
    return this;
  }

   /**
   * Get jitterMinVIC
   * @return jitterMinVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinVIC() {
    return jitterMinVIC;
  }

  public void setJitterMinVIC(BigDecimal jitterMinVIC) {
    this.jitterMinVIC = jitterMinVIC;
  }

  public EndpointIndigoSummaryStats jitterMinVOC(BigDecimal jitterMinVOC) {
    this.jitterMinVOC = jitterMinVOC;
    return this;
  }

   /**
   * Get jitterMinVOC
   * @return jitterMinVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMinVOC() {
    return jitterMinVOC;
  }

  public void setJitterMinVOC(BigDecimal jitterMinVOC) {
    this.jitterMinVOC = jitterMinVOC;
  }

  public EndpointIndigoSummaryStats jitterMaxAI(BigDecimal jitterMaxAI) {
    this.jitterMaxAI = jitterMaxAI;
    return this;
  }

   /**
   * Get jitterMaxAI
   * @return jitterMaxAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxAI() {
    return jitterMaxAI;
  }

  public void setJitterMaxAI(BigDecimal jitterMaxAI) {
    this.jitterMaxAI = jitterMaxAI;
  }

  public EndpointIndigoSummaryStats jitterMaxAO(BigDecimal jitterMaxAO) {
    this.jitterMaxAO = jitterMaxAO;
    return this;
  }

   /**
   * Get jitterMaxAO
   * @return jitterMaxAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxAO() {
    return jitterMaxAO;
  }

  public void setJitterMaxAO(BigDecimal jitterMaxAO) {
    this.jitterMaxAO = jitterMaxAO;
  }

  public EndpointIndigoSummaryStats jitterMaxVI(BigDecimal jitterMaxVI) {
    this.jitterMaxVI = jitterMaxVI;
    return this;
  }

   /**
   * Get jitterMaxVI
   * @return jitterMaxVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxVI() {
    return jitterMaxVI;
  }

  public void setJitterMaxVI(BigDecimal jitterMaxVI) {
    this.jitterMaxVI = jitterMaxVI;
  }

  public EndpointIndigoSummaryStats jitterMaxVO(BigDecimal jitterMaxVO) {
    this.jitterMaxVO = jitterMaxVO;
    return this;
  }

   /**
   * Get jitterMaxVO
   * @return jitterMaxVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxVO() {
    return jitterMaxVO;
  }

  public void setJitterMaxVO(BigDecimal jitterMaxVO) {
    this.jitterMaxVO = jitterMaxVO;
  }

  public EndpointIndigoSummaryStats jitterMaxVIC(BigDecimal jitterMaxVIC) {
    this.jitterMaxVIC = jitterMaxVIC;
    return this;
  }

   /**
   * Get jitterMaxVIC
   * @return jitterMaxVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxVIC() {
    return jitterMaxVIC;
  }

  public void setJitterMaxVIC(BigDecimal jitterMaxVIC) {
    this.jitterMaxVIC = jitterMaxVIC;
  }

  public EndpointIndigoSummaryStats jitterMaxVOC(BigDecimal jitterMaxVOC) {
    this.jitterMaxVOC = jitterMaxVOC;
    return this;
  }

   /**
   * Get jitterMaxVOC
   * @return jitterMaxVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterMaxVOC() {
    return jitterMaxVOC;
  }

  public void setJitterMaxVOC(BigDecimal jitterMaxVOC) {
    this.jitterMaxVOC = jitterMaxVOC;
  }

  public EndpointIndigoSummaryStats jitterAvgAI(BigDecimal jitterAvgAI) {
    this.jitterAvgAI = jitterAvgAI;
    return this;
  }

   /**
   * Get jitterAvgAI
   * @return jitterAvgAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgAI() {
    return jitterAvgAI;
  }

  public void setJitterAvgAI(BigDecimal jitterAvgAI) {
    this.jitterAvgAI = jitterAvgAI;
  }

  public EndpointIndigoSummaryStats jitterAvgAO(BigDecimal jitterAvgAO) {
    this.jitterAvgAO = jitterAvgAO;
    return this;
  }

   /**
   * Get jitterAvgAO
   * @return jitterAvgAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgAO() {
    return jitterAvgAO;
  }

  public void setJitterAvgAO(BigDecimal jitterAvgAO) {
    this.jitterAvgAO = jitterAvgAO;
  }

  public EndpointIndigoSummaryStats jitterAvgVI(BigDecimal jitterAvgVI) {
    this.jitterAvgVI = jitterAvgVI;
    return this;
  }

   /**
   * Get jitterAvgVI
   * @return jitterAvgVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgVI() {
    return jitterAvgVI;
  }

  public void setJitterAvgVI(BigDecimal jitterAvgVI) {
    this.jitterAvgVI = jitterAvgVI;
  }

  public EndpointIndigoSummaryStats jitterAvgVO(BigDecimal jitterAvgVO) {
    this.jitterAvgVO = jitterAvgVO;
    return this;
  }

   /**
   * Get jitterAvgVO
   * @return jitterAvgVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgVO() {
    return jitterAvgVO;
  }

  public void setJitterAvgVO(BigDecimal jitterAvgVO) {
    this.jitterAvgVO = jitterAvgVO;
  }

  public EndpointIndigoSummaryStats jitterAvgVIC(BigDecimal jitterAvgVIC) {
    this.jitterAvgVIC = jitterAvgVIC;
    return this;
  }

   /**
   * Get jitterAvgVIC
   * @return jitterAvgVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgVIC() {
    return jitterAvgVIC;
  }

  public void setJitterAvgVIC(BigDecimal jitterAvgVIC) {
    this.jitterAvgVIC = jitterAvgVIC;
  }

  public EndpointIndigoSummaryStats jitterAvgVOC(BigDecimal jitterAvgVOC) {
    this.jitterAvgVOC = jitterAvgVOC;
    return this;
  }

   /**
   * Get jitterAvgVOC
   * @return jitterAvgVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getJitterAvgVOC() {
    return jitterAvgVOC;
  }

  public void setJitterAvgVOC(BigDecimal jitterAvgVOC) {
    this.jitterAvgVOC = jitterAvgVOC;
  }

  public EndpointIndigoSummaryStats maxJitterMinAI(BigDecimal maxJitterMinAI) {
    this.maxJitterMinAI = maxJitterMinAI;
    return this;
  }

   /**
   * Get maxJitterMinAI
   * @return maxJitterMinAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMinAI() {
    return maxJitterMinAI;
  }

  public void setMaxJitterMinAI(BigDecimal maxJitterMinAI) {
    this.maxJitterMinAI = maxJitterMinAI;
  }

  public EndpointIndigoSummaryStats maxJitterMinVI(BigDecimal maxJitterMinVI) {
    this.maxJitterMinVI = maxJitterMinVI;
    return this;
  }

   /**
   * Get maxJitterMinVI
   * @return maxJitterMinVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMinVI() {
    return maxJitterMinVI;
  }

  public void setMaxJitterMinVI(BigDecimal maxJitterMinVI) {
    this.maxJitterMinVI = maxJitterMinVI;
  }

  public EndpointIndigoSummaryStats maxJitterMinVIC(BigDecimal maxJitterMinVIC) {
    this.maxJitterMinVIC = maxJitterMinVIC;
    return this;
  }

   /**
   * Get maxJitterMinVIC
   * @return maxJitterMinVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMinVIC() {
    return maxJitterMinVIC;
  }

  public void setMaxJitterMinVIC(BigDecimal maxJitterMinVIC) {
    this.maxJitterMinVIC = maxJitterMinVIC;
  }

  public EndpointIndigoSummaryStats maxJitterMaxAI(BigDecimal maxJitterMaxAI) {
    this.maxJitterMaxAI = maxJitterMaxAI;
    return this;
  }

   /**
   * Get maxJitterMaxAI
   * @return maxJitterMaxAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMaxAI() {
    return maxJitterMaxAI;
  }

  public void setMaxJitterMaxAI(BigDecimal maxJitterMaxAI) {
    this.maxJitterMaxAI = maxJitterMaxAI;
  }

  public EndpointIndigoSummaryStats maxJitterMaxVI(BigDecimal maxJitterMaxVI) {
    this.maxJitterMaxVI = maxJitterMaxVI;
    return this;
  }

   /**
   * Get maxJitterMaxVI
   * @return maxJitterMaxVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMaxVI() {
    return maxJitterMaxVI;
  }

  public void setMaxJitterMaxVI(BigDecimal maxJitterMaxVI) {
    this.maxJitterMaxVI = maxJitterMaxVI;
  }

  public EndpointIndigoSummaryStats maxJitterMaxVIC(BigDecimal maxJitterMaxVIC) {
    this.maxJitterMaxVIC = maxJitterMaxVIC;
    return this;
  }

   /**
   * Get maxJitterMaxVIC
   * @return maxJitterMaxVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterMaxVIC() {
    return maxJitterMaxVIC;
  }

  public void setMaxJitterMaxVIC(BigDecimal maxJitterMaxVIC) {
    this.maxJitterMaxVIC = maxJitterMaxVIC;
  }

  public EndpointIndigoSummaryStats maxJitterAvgAI(BigDecimal maxJitterAvgAI) {
    this.maxJitterAvgAI = maxJitterAvgAI;
    return this;
  }

   /**
   * Get maxJitterAvgAI
   * @return maxJitterAvgAI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterAvgAI() {
    return maxJitterAvgAI;
  }

  public void setMaxJitterAvgAI(BigDecimal maxJitterAvgAI) {
    this.maxJitterAvgAI = maxJitterAvgAI;
  }

  public EndpointIndigoSummaryStats maxJitterAvgVI(BigDecimal maxJitterAvgVI) {
    this.maxJitterAvgVI = maxJitterAvgVI;
    return this;
  }

   /**
   * Get maxJitterAvgVI
   * @return maxJitterAvgVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterAvgVI() {
    return maxJitterAvgVI;
  }

  public void setMaxJitterAvgVI(BigDecimal maxJitterAvgVI) {
    this.maxJitterAvgVI = maxJitterAvgVI;
  }

  public EndpointIndigoSummaryStats maxJitterAvgVIC(BigDecimal maxJitterAvgVIC) {
    this.maxJitterAvgVIC = maxJitterAvgVIC;
    return this;
  }

   /**
   * Get maxJitterAvgVIC
   * @return maxJitterAvgVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getMaxJitterAvgVIC() {
    return maxJitterAvgVIC;
  }

  public void setMaxJitterAvgVIC(BigDecimal maxJitterAvgVIC) {
    this.maxJitterAvgVIC = maxJitterAvgVIC;
  }

  public EndpointIndigoSummaryStats videoRecvHeightMin(BigDecimal videoRecvHeightMin) {
    this.videoRecvHeightMin = videoRecvHeightMin;
    return this;
  }

   /**
   * Get videoRecvHeightMin
   * @return videoRecvHeightMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoRecvHeightMin() {
    return videoRecvHeightMin;
  }

  public void setVideoRecvHeightMin(BigDecimal videoRecvHeightMin) {
    this.videoRecvHeightMin = videoRecvHeightMin;
  }

  public EndpointIndigoSummaryStats videoRecvHeightMax(BigDecimal videoRecvHeightMax) {
    this.videoRecvHeightMax = videoRecvHeightMax;
    return this;
  }

   /**
   * Get videoRecvHeightMax
   * @return videoRecvHeightMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoRecvHeightMax() {
    return videoRecvHeightMax;
  }

  public void setVideoRecvHeightMax(BigDecimal videoRecvHeightMax) {
    this.videoRecvHeightMax = videoRecvHeightMax;
  }

  public EndpointIndigoSummaryStats videoRecvWidthMin(BigDecimal videoRecvWidthMin) {
    this.videoRecvWidthMin = videoRecvWidthMin;
    return this;
  }

   /**
   * Get videoRecvWidthMin
   * @return videoRecvWidthMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoRecvWidthMin() {
    return videoRecvWidthMin;
  }

  public void setVideoRecvWidthMin(BigDecimal videoRecvWidthMin) {
    this.videoRecvWidthMin = videoRecvWidthMin;
  }

  public EndpointIndigoSummaryStats videoRecvWidthMax(BigDecimal videoRecvWidthMax) {
    this.videoRecvWidthMax = videoRecvWidthMax;
    return this;
  }

   /**
   * Get videoRecvWidthMax
   * @return videoRecvWidthMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoRecvWidthMax() {
    return videoRecvWidthMax;
  }

  public void setVideoRecvWidthMax(BigDecimal videoRecvWidthMax) {
    this.videoRecvWidthMax = videoRecvWidthMax;
  }

  public EndpointIndigoSummaryStats videoSendHeightMin(BigDecimal videoSendHeightMin) {
    this.videoSendHeightMin = videoSendHeightMin;
    return this;
  }

   /**
   * Get videoSendHeightMin
   * @return videoSendHeightMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoSendHeightMin() {
    return videoSendHeightMin;
  }

  public void setVideoSendHeightMin(BigDecimal videoSendHeightMin) {
    this.videoSendHeightMin = videoSendHeightMin;
  }

  public EndpointIndigoSummaryStats videoSendHeightMax(BigDecimal videoSendHeightMax) {
    this.videoSendHeightMax = videoSendHeightMax;
    return this;
  }

   /**
   * Get videoSendHeightMax
   * @return videoSendHeightMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoSendHeightMax() {
    return videoSendHeightMax;
  }

  public void setVideoSendHeightMax(BigDecimal videoSendHeightMax) {
    this.videoSendHeightMax = videoSendHeightMax;
  }

  public EndpointIndigoSummaryStats videoSendWidthMin(BigDecimal videoSendWidthMin) {
    this.videoSendWidthMin = videoSendWidthMin;
    return this;
  }

   /**
   * Get videoSendWidthMin
   * @return videoSendWidthMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoSendWidthMin() {
    return videoSendWidthMin;
  }

  public void setVideoSendWidthMin(BigDecimal videoSendWidthMin) {
    this.videoSendWidthMin = videoSendWidthMin;
  }

  public EndpointIndigoSummaryStats videoSendWidthMax(BigDecimal videoSendWidthMax) {
    this.videoSendWidthMax = videoSendWidthMax;
    return this;
  }

   /**
   * Get videoSendWidthMax
   * @return videoSendWidthMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getVideoSendWidthMax() {
    return videoSendWidthMax;
  }

  public void setVideoSendWidthMax(BigDecimal videoSendWidthMax) {
    this.videoSendWidthMax = videoSendWidthMax;
  }

  public EndpointIndigoSummaryStats contentRecvHeightMin(BigDecimal contentRecvHeightMin) {
    this.contentRecvHeightMin = contentRecvHeightMin;
    return this;
  }

   /**
   * Get contentRecvHeightMin
   * @return contentRecvHeightMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentRecvHeightMin() {
    return contentRecvHeightMin;
  }

  public void setContentRecvHeightMin(BigDecimal contentRecvHeightMin) {
    this.contentRecvHeightMin = contentRecvHeightMin;
  }

  public EndpointIndigoSummaryStats contentRecvHeightMax(BigDecimal contentRecvHeightMax) {
    this.contentRecvHeightMax = contentRecvHeightMax;
    return this;
  }

   /**
   * Get contentRecvHeightMax
   * @return contentRecvHeightMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentRecvHeightMax() {
    return contentRecvHeightMax;
  }

  public void setContentRecvHeightMax(BigDecimal contentRecvHeightMax) {
    this.contentRecvHeightMax = contentRecvHeightMax;
  }

  public EndpointIndigoSummaryStats contentRecvWidthMin(BigDecimal contentRecvWidthMin) {
    this.contentRecvWidthMin = contentRecvWidthMin;
    return this;
  }

   /**
   * Get contentRecvWidthMin
   * @return contentRecvWidthMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentRecvWidthMin() {
    return contentRecvWidthMin;
  }

  public void setContentRecvWidthMin(BigDecimal contentRecvWidthMin) {
    this.contentRecvWidthMin = contentRecvWidthMin;
  }

  public EndpointIndigoSummaryStats contentRecvWidthMax(BigDecimal contentRecvWidthMax) {
    this.contentRecvWidthMax = contentRecvWidthMax;
    return this;
  }

   /**
   * Get contentRecvWidthMax
   * @return contentRecvWidthMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentRecvWidthMax() {
    return contentRecvWidthMax;
  }

  public void setContentRecvWidthMax(BigDecimal contentRecvWidthMax) {
    this.contentRecvWidthMax = contentRecvWidthMax;
  }

  public EndpointIndigoSummaryStats contentSendHeightMin(BigDecimal contentSendHeightMin) {
    this.contentSendHeightMin = contentSendHeightMin;
    return this;
  }

   /**
   * Get contentSendHeightMin
   * @return contentSendHeightMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentSendHeightMin() {
    return contentSendHeightMin;
  }

  public void setContentSendHeightMin(BigDecimal contentSendHeightMin) {
    this.contentSendHeightMin = contentSendHeightMin;
  }

  public EndpointIndigoSummaryStats contentSendHeightMax(BigDecimal contentSendHeightMax) {
    this.contentSendHeightMax = contentSendHeightMax;
    return this;
  }

   /**
   * Get contentSendHeightMax
   * @return contentSendHeightMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentSendHeightMax() {
    return contentSendHeightMax;
  }

  public void setContentSendHeightMax(BigDecimal contentSendHeightMax) {
    this.contentSendHeightMax = contentSendHeightMax;
  }

  public EndpointIndigoSummaryStats contentSendWidthMin(BigDecimal contentSendWidthMin) {
    this.contentSendWidthMin = contentSendWidthMin;
    return this;
  }

   /**
   * Get contentSendWidthMin
   * @return contentSendWidthMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentSendWidthMin() {
    return contentSendWidthMin;
  }

  public void setContentSendWidthMin(BigDecimal contentSendWidthMin) {
    this.contentSendWidthMin = contentSendWidthMin;
  }

  public EndpointIndigoSummaryStats contentSendWidthMax(BigDecimal contentSendWidthMax) {
    this.contentSendWidthMax = contentSendWidthMax;
    return this;
  }

   /**
   * Get contentSendWidthMax
   * @return contentSendWidthMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getContentSendWidthMax() {
    return contentSendWidthMax;
  }

  public void setContentSendWidthMax(BigDecimal contentSendWidthMax) {
    this.contentSendWidthMax = contentSendWidthMax;
  }

  public EndpointIndigoSummaryStats roundTripDelayMin(BigDecimal roundTripDelayMin) {
    this.roundTripDelayMin = roundTripDelayMin;
    return this;
  }

   /**
   * Get roundTripDelayMin
   * @return roundTripDelayMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayMin() {
    return roundTripDelayMin;
  }

  public void setRoundTripDelayMin(BigDecimal roundTripDelayMin) {
    this.roundTripDelayMin = roundTripDelayMin;
  }

  public EndpointIndigoSummaryStats roundTripDelayMax(BigDecimal roundTripDelayMax) {
    this.roundTripDelayMax = roundTripDelayMax;
    return this;
  }

   /**
   * Get roundTripDelayMax
   * @return roundTripDelayMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayMax() {
    return roundTripDelayMax;
  }

  public void setRoundTripDelayMax(BigDecimal roundTripDelayMax) {
    this.roundTripDelayMax = roundTripDelayMax;
  }

  public EndpointIndigoSummaryStats roundTripDelayAvg(BigDecimal roundTripDelayAvg) {
    this.roundTripDelayAvg = roundTripDelayAvg;
    return this;
  }

   /**
   * Get roundTripDelayAvg
   * @return roundTripDelayAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayAvg() {
    return roundTripDelayAvg;
  }

  public void setRoundTripDelayAvg(BigDecimal roundTripDelayAvg) {
    this.roundTripDelayAvg = roundTripDelayAvg;
  }

  public EndpointIndigoSummaryStats rfactorMin(BigDecimal rfactorMin) {
    this.rfactorMin = rfactorMin;
    return this;
  }

   /**
   * Get rfactorMin
   * @return rfactorMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRfactorMin() {
    return rfactorMin;
  }

  public void setRfactorMin(BigDecimal rfactorMin) {
    this.rfactorMin = rfactorMin;
  }

  public EndpointIndigoSummaryStats rfactorMax(BigDecimal rfactorMax) {
    this.rfactorMax = rfactorMax;
    return this;
  }

   /**
   * Get rfactorMax
   * @return rfactorMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRfactorMax() {
    return rfactorMax;
  }

  public void setRfactorMax(BigDecimal rfactorMax) {
    this.rfactorMax = rfactorMax;
  }

  public EndpointIndigoSummaryStats rfactorAvg(BigDecimal rfactorAvg) {
    this.rfactorAvg = rfactorAvg;
    return this;
  }

   /**
   * Get rfactorAvg
   * @return rfactorAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRfactorAvg() {
    return rfactorAvg;
  }

  public void setRfactorAvg(BigDecimal rfactorAvg) {
    this.rfactorAvg = rfactorAvg;
  }

  public EndpointIndigoSummaryStats processCpuLoadMin(BigDecimal processCpuLoadMin) {
    this.processCpuLoadMin = processCpuLoadMin;
    return this;
  }

   /**
   * Get processCpuLoadMin
   * @return processCpuLoadMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getProcessCpuLoadMin() {
    return processCpuLoadMin;
  }

  public void setProcessCpuLoadMin(BigDecimal processCpuLoadMin) {
    this.processCpuLoadMin = processCpuLoadMin;
  }

  public EndpointIndigoSummaryStats processCpuLoadMax(BigDecimal processCpuLoadMax) {
    this.processCpuLoadMax = processCpuLoadMax;
    return this;
  }

   /**
   * Get processCpuLoadMax
   * @return processCpuLoadMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getProcessCpuLoadMax() {
    return processCpuLoadMax;
  }

  public void setProcessCpuLoadMax(BigDecimal processCpuLoadMax) {
    this.processCpuLoadMax = processCpuLoadMax;
  }

  public EndpointIndigoSummaryStats processCpuLoadAvg(BigDecimal processCpuLoadAvg) {
    this.processCpuLoadAvg = processCpuLoadAvg;
    return this;
  }

   /**
   * Get processCpuLoadAvg
   * @return processCpuLoadAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getProcessCpuLoadAvg() {
    return processCpuLoadAvg;
  }

  public void setProcessCpuLoadAvg(BigDecimal processCpuLoadAvg) {
    this.processCpuLoadAvg = processCpuLoadAvg;
  }

  public EndpointIndigoSummaryStats systemCpuLoadMin(BigDecimal systemCpuLoadMin) {
    this.systemCpuLoadMin = systemCpuLoadMin;
    return this;
  }

   /**
   * Get systemCpuLoadMin
   * @return systemCpuLoadMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getSystemCpuLoadMin() {
    return systemCpuLoadMin;
  }

  public void setSystemCpuLoadMin(BigDecimal systemCpuLoadMin) {
    this.systemCpuLoadMin = systemCpuLoadMin;
  }

  public EndpointIndigoSummaryStats systemCpuLoadMax(BigDecimal systemCpuLoadMax) {
    this.systemCpuLoadMax = systemCpuLoadMax;
    return this;
  }

   /**
   * Get systemCpuLoadMax
   * @return systemCpuLoadMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getSystemCpuLoadMax() {
    return systemCpuLoadMax;
  }

  public void setSystemCpuLoadMax(BigDecimal systemCpuLoadMax) {
    this.systemCpuLoadMax = systemCpuLoadMax;
  }

  public EndpointIndigoSummaryStats systemCpuLoadAvg(BigDecimal systemCpuLoadAvg) {
    this.systemCpuLoadAvg = systemCpuLoadAvg;
    return this;
  }

   /**
   * Get systemCpuLoadAvg
   * @return systemCpuLoadAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getSystemCpuLoadAvg() {
    return systemCpuLoadAvg;
  }

  public void setSystemCpuLoadAvg(BigDecimal systemCpuLoadAvg) {
    this.systemCpuLoadAvg = systemCpuLoadAvg;
  }

  public EndpointIndigoSummaryStats wifiRecvStrengthMin(BigDecimal wifiRecvStrengthMin) {
    this.wifiRecvStrengthMin = wifiRecvStrengthMin;
    return this;
  }

   /**
   * Get wifiRecvStrengthMin
   * @return wifiRecvStrengthMin
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getWifiRecvStrengthMin() {
    return wifiRecvStrengthMin;
  }

  public void setWifiRecvStrengthMin(BigDecimal wifiRecvStrengthMin) {
    this.wifiRecvStrengthMin = wifiRecvStrengthMin;
  }

  public EndpointIndigoSummaryStats wifiRecvStrengthMax(BigDecimal wifiRecvStrengthMax) {
    this.wifiRecvStrengthMax = wifiRecvStrengthMax;
    return this;
  }

   /**
   * Get wifiRecvStrengthMax
   * @return wifiRecvStrengthMax
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getWifiRecvStrengthMax() {
    return wifiRecvStrengthMax;
  }

  public void setWifiRecvStrengthMax(BigDecimal wifiRecvStrengthMax) {
    this.wifiRecvStrengthMax = wifiRecvStrengthMax;
  }

  public EndpointIndigoSummaryStats wifiRecvStrengthAvg(BigDecimal wifiRecvStrengthAvg) {
    this.wifiRecvStrengthAvg = wifiRecvStrengthAvg;
    return this;
  }

   /**
   * Get wifiRecvStrengthAvg
   * @return wifiRecvStrengthAvg
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getWifiRecvStrengthAvg() {
    return wifiRecvStrengthAvg;
  }

  public void setWifiRecvStrengthAvg(BigDecimal wifiRecvStrengthAvg) {
    this.wifiRecvStrengthAvg = wifiRecvStrengthAvg;
  }

  public EndpointIndigoSummaryStats keyFrameRateAvgVI(BigDecimal keyFrameRateAvgVI) {
    this.keyFrameRateAvgVI = keyFrameRateAvgVI;
    return this;
  }

   /**
   * Get keyFrameRateAvgVI
   * @return keyFrameRateAvgVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateAvgVI() {
    return keyFrameRateAvgVI;
  }

  public void setKeyFrameRateAvgVI(BigDecimal keyFrameRateAvgVI) {
    this.keyFrameRateAvgVI = keyFrameRateAvgVI;
  }

  public EndpointIndigoSummaryStats keyFrameRateAvgVO(BigDecimal keyFrameRateAvgVO) {
    this.keyFrameRateAvgVO = keyFrameRateAvgVO;
    return this;
  }

   /**
   * Get keyFrameRateAvgVO
   * @return keyFrameRateAvgVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateAvgVO() {
    return keyFrameRateAvgVO;
  }

  public void setKeyFrameRateAvgVO(BigDecimal keyFrameRateAvgVO) {
    this.keyFrameRateAvgVO = keyFrameRateAvgVO;
  }

  public EndpointIndigoSummaryStats keyFrameRateAvgVIC(BigDecimal keyFrameRateAvgVIC) {
    this.keyFrameRateAvgVIC = keyFrameRateAvgVIC;
    return this;
  }

   /**
   * Get keyFrameRateAvgVIC
   * @return keyFrameRateAvgVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateAvgVIC() {
    return keyFrameRateAvgVIC;
  }

  public void setKeyFrameRateAvgVIC(BigDecimal keyFrameRateAvgVIC) {
    this.keyFrameRateAvgVIC = keyFrameRateAvgVIC;
  }

  public EndpointIndigoSummaryStats keyFrameRateAvgVOC(BigDecimal keyFrameRateAvgVOC) {
    this.keyFrameRateAvgVOC = keyFrameRateAvgVOC;
    return this;
  }

   /**
   * Get keyFrameRateAvgVOC
   * @return keyFrameRateAvgVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateAvgVOC() {
    return keyFrameRateAvgVOC;
  }

  public void setKeyFrameRateAvgVOC(BigDecimal keyFrameRateAvgVOC) {
    this.keyFrameRateAvgVOC = keyFrameRateAvgVOC;
  }

  public EndpointIndigoSummaryStats keyFrameRateMinVI(BigDecimal keyFrameRateMinVI) {
    this.keyFrameRateMinVI = keyFrameRateMinVI;
    return this;
  }

   /**
   * Get keyFrameRateMinVI
   * @return keyFrameRateMinVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMinVI() {
    return keyFrameRateMinVI;
  }

  public void setKeyFrameRateMinVI(BigDecimal keyFrameRateMinVI) {
    this.keyFrameRateMinVI = keyFrameRateMinVI;
  }

  public EndpointIndigoSummaryStats keyFrameRateMinVO(BigDecimal keyFrameRateMinVO) {
    this.keyFrameRateMinVO = keyFrameRateMinVO;
    return this;
  }

   /**
   * Get keyFrameRateMinVO
   * @return keyFrameRateMinVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMinVO() {
    return keyFrameRateMinVO;
  }

  public void setKeyFrameRateMinVO(BigDecimal keyFrameRateMinVO) {
    this.keyFrameRateMinVO = keyFrameRateMinVO;
  }

  public EndpointIndigoSummaryStats keyFrameRateMinVIC(BigDecimal keyFrameRateMinVIC) {
    this.keyFrameRateMinVIC = keyFrameRateMinVIC;
    return this;
  }

   /**
   * Get keyFrameRateMinVIC
   * @return keyFrameRateMinVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMinVIC() {
    return keyFrameRateMinVIC;
  }

  public void setKeyFrameRateMinVIC(BigDecimal keyFrameRateMinVIC) {
    this.keyFrameRateMinVIC = keyFrameRateMinVIC;
  }

  public EndpointIndigoSummaryStats keyFrameRateMinVOC(BigDecimal keyFrameRateMinVOC) {
    this.keyFrameRateMinVOC = keyFrameRateMinVOC;
    return this;
  }

   /**
   * Get keyFrameRateMinVOC
   * @return keyFrameRateMinVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMinVOC() {
    return keyFrameRateMinVOC;
  }

  public void setKeyFrameRateMinVOC(BigDecimal keyFrameRateMinVOC) {
    this.keyFrameRateMinVOC = keyFrameRateMinVOC;
  }

  public EndpointIndigoSummaryStats keyFrameRateMaxVI(BigDecimal keyFrameRateMaxVI) {
    this.keyFrameRateMaxVI = keyFrameRateMaxVI;
    return this;
  }

   /**
   * Get keyFrameRateMaxVI
   * @return keyFrameRateMaxVI
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMaxVI() {
    return keyFrameRateMaxVI;
  }

  public void setKeyFrameRateMaxVI(BigDecimal keyFrameRateMaxVI) {
    this.keyFrameRateMaxVI = keyFrameRateMaxVI;
  }

  public EndpointIndigoSummaryStats keyFrameRateMaxVO(BigDecimal keyFrameRateMaxVO) {
    this.keyFrameRateMaxVO = keyFrameRateMaxVO;
    return this;
  }

   /**
   * Get keyFrameRateMaxVO
   * @return keyFrameRateMaxVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMaxVO() {
    return keyFrameRateMaxVO;
  }

  public void setKeyFrameRateMaxVO(BigDecimal keyFrameRateMaxVO) {
    this.keyFrameRateMaxVO = keyFrameRateMaxVO;
  }

  public EndpointIndigoSummaryStats keyFrameRateMaxVIC(BigDecimal keyFrameRateMaxVIC) {
    this.keyFrameRateMaxVIC = keyFrameRateMaxVIC;
    return this;
  }

   /**
   * Get keyFrameRateMaxVIC
   * @return keyFrameRateMaxVIC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMaxVIC() {
    return keyFrameRateMaxVIC;
  }

  public void setKeyFrameRateMaxVIC(BigDecimal keyFrameRateMaxVIC) {
    this.keyFrameRateMaxVIC = keyFrameRateMaxVIC;
  }

  public EndpointIndigoSummaryStats keyFrameRateMaxVOC(BigDecimal keyFrameRateMaxVOC) {
    this.keyFrameRateMaxVOC = keyFrameRateMaxVOC;
    return this;
  }

   /**
   * Get keyFrameRateMaxVOC
   * @return keyFrameRateMaxVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getKeyFrameRateMaxVOC() {
    return keyFrameRateMaxVOC;
  }

  public void setKeyFrameRateMaxVOC(BigDecimal keyFrameRateMaxVOC) {
    this.keyFrameRateMaxVOC = keyFrameRateMaxVOC;
  }

  public EndpointIndigoSummaryStats roundTripDelayAvgVO(BigDecimal roundTripDelayAvgVO) {
    this.roundTripDelayAvgVO = roundTripDelayAvgVO;
    return this;
  }

   /**
   * Get roundTripDelayAvgVO
   * @return roundTripDelayAvgVO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayAvgVO() {
    return roundTripDelayAvgVO;
  }

  public void setRoundTripDelayAvgVO(BigDecimal roundTripDelayAvgVO) {
    this.roundTripDelayAvgVO = roundTripDelayAvgVO;
  }

  public EndpointIndigoSummaryStats roundTripDelayAvgVOC(BigDecimal roundTripDelayAvgVOC) {
    this.roundTripDelayAvgVOC = roundTripDelayAvgVOC;
    return this;
  }

   /**
   * Get roundTripDelayAvgVOC
   * @return roundTripDelayAvgVOC
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayAvgVOC() {
    return roundTripDelayAvgVOC;
  }

  public void setRoundTripDelayAvgVOC(BigDecimal roundTripDelayAvgVOC) {
    this.roundTripDelayAvgVOC = roundTripDelayAvgVOC;
  }

  public EndpointIndigoSummaryStats roundTripDelayAvgAO(BigDecimal roundTripDelayAvgAO) {
    this.roundTripDelayAvgAO = roundTripDelayAvgAO;
    return this;
  }

   /**
   * Get roundTripDelayAvgAO
   * @return roundTripDelayAvgAO
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getRoundTripDelayAvgAO() {
    return roundTripDelayAvgAO;
  }

  public void setRoundTripDelayAvgAO(BigDecimal roundTripDelayAvgAO) {
    this.roundTripDelayAvgAO = roundTripDelayAvgAO;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    EndpointIndigoSummaryStats endpointIndigoSummaryStats = (EndpointIndigoSummaryStats) o;
    return Objects.equals(this.audioRecvCodec, endpointIndigoSummaryStats.audioRecvCodec) &&
        Objects.equals(this.audioSendCodec, endpointIndigoSummaryStats.audioSendCodec) &&
        Objects.equals(this.contentRecv, endpointIndigoSummaryStats.contentRecv) &&
        Objects.equals(this.contentSend, endpointIndigoSummaryStats.contentSend) &&
        Objects.equals(this.talkDetected, endpointIndigoSummaryStats.talkDetected) &&
        Objects.equals(this.sessionRelay, endpointIndigoSummaryStats.sessionRelay) &&
        Objects.equals(this.sessionInRelay, endpointIndigoSummaryStats.sessionInRelay) &&
        Objects.equals(this.sessionOutRelay, endpointIndigoSummaryStats.sessionOutRelay) &&
        Objects.equals(this.audioRtpRelay, endpointIndigoSummaryStats.audioRtpRelay) &&
        Objects.equals(this.callRate, endpointIndigoSummaryStats.callRate) &&
        Objects.equals(this.cumulLossPercentAI, endpointIndigoSummaryStats.cumulLossPercentAI) &&
        Objects.equals(this.cumulLossPercentAO, endpointIndigoSummaryStats.cumulLossPercentAO) &&
        Objects.equals(this.cumulLossPercentVI, endpointIndigoSummaryStats.cumulLossPercentVI) &&
        Objects.equals(this.cumulLossPercentVO, endpointIndigoSummaryStats.cumulLossPercentVO) &&
        Objects.equals(this.cumulLossPercentVIC, endpointIndigoSummaryStats.cumulLossPercentVIC) &&
        Objects.equals(this.cumulLossPercentVOC, endpointIndigoSummaryStats.cumulLossPercentVOC) &&
        Objects.equals(this.cumulLossAI, endpointIndigoSummaryStats.cumulLossAI) &&
        Objects.equals(this.cumulLossAO, endpointIndigoSummaryStats.cumulLossAO) &&
        Objects.equals(this.cumulLossVI, endpointIndigoSummaryStats.cumulLossVI) &&
        Objects.equals(this.cumulLossVO, endpointIndigoSummaryStats.cumulLossVO) &&
        Objects.equals(this.cumulLossVIC, endpointIndigoSummaryStats.cumulLossVIC) &&
        Objects.equals(this.cumulLossVOC, endpointIndigoSummaryStats.cumulLossVOC) &&
        Objects.equals(this.discontinuityCount, endpointIndigoSummaryStats.discontinuityCount) &&
        Objects.equals(this.droppedPacketsAI, endpointIndigoSummaryStats.droppedPacketsAI) &&
        Objects.equals(this.droppedPacketsVI, endpointIndigoSummaryStats.droppedPacketsVI) &&
        Objects.equals(this.droppedPacketsVIC, endpointIndigoSummaryStats.droppedPacketsVIC) &&
        Objects.equals(this.mixUnderRunsAI, endpointIndigoSummaryStats.mixUnderRunsAI) &&
        Objects.equals(this.networkAvgLossAI, endpointIndigoSummaryStats.networkAvgLossAI) &&
        Objects.equals(this.networkAvgLossAO, endpointIndigoSummaryStats.networkAvgLossAO) &&
        Objects.equals(this.networkAvgLossVI, endpointIndigoSummaryStats.networkAvgLossVI) &&
        Objects.equals(this.networkAvgLossVO, endpointIndigoSummaryStats.networkAvgLossVO) &&
        Objects.equals(this.networkCumulLossAI, endpointIndigoSummaryStats.networkCumulLossAI) &&
        Objects.equals(this.networkCumulLossAO, endpointIndigoSummaryStats.networkCumulLossAO) &&
        Objects.equals(this.networkCumulLossVI, endpointIndigoSummaryStats.networkCumulLossVI) &&
        Objects.equals(this.networkCumulLossVO, endpointIndigoSummaryStats.networkCumulLossVO) &&
        Objects.equals(this.networkLossAI, endpointIndigoSummaryStats.networkLossAI) &&
        Objects.equals(this.networkLossAO, endpointIndigoSummaryStats.networkLossAO) &&
        Objects.equals(this.networkLossVI, endpointIndigoSummaryStats.networkLossVI) &&
        Objects.equals(this.networkLossVO, endpointIndigoSummaryStats.networkLossVO) &&
        Objects.equals(this.callQualityMin, endpointIndigoSummaryStats.callQualityMin) &&
        Objects.equals(this.callQualityMax, endpointIndigoSummaryStats.callQualityMax) &&
        Objects.equals(this.callQualityAvg, endpointIndigoSummaryStats.callQualityAvg) &&
        Objects.equals(this.fpsMinVI, endpointIndigoSummaryStats.fpsMinVI) &&
        Objects.equals(this.fpsMinVO, endpointIndigoSummaryStats.fpsMinVO) &&
        Objects.equals(this.fpsMinVIC, endpointIndigoSummaryStats.fpsMinVIC) &&
        Objects.equals(this.fpsMinVOC, endpointIndigoSummaryStats.fpsMinVOC) &&
        Objects.equals(this.fpsMaxVI, endpointIndigoSummaryStats.fpsMaxVI) &&
        Objects.equals(this.fpsMaxVO, endpointIndigoSummaryStats.fpsMaxVO) &&
        Objects.equals(this.fpsMaxVIC, endpointIndigoSummaryStats.fpsMaxVIC) &&
        Objects.equals(this.fpsMaxVOC, endpointIndigoSummaryStats.fpsMaxVOC) &&
        Objects.equals(this.fpsAvgVI, endpointIndigoSummaryStats.fpsAvgVI) &&
        Objects.equals(this.fpsAvgVO, endpointIndigoSummaryStats.fpsAvgVO) &&
        Objects.equals(this.fpsAvgVIC, endpointIndigoSummaryStats.fpsAvgVIC) &&
        Objects.equals(this.fpsAvgVOC, endpointIndigoSummaryStats.fpsAvgVOC) &&
        Objects.equals(this.bitrateMinAI, endpointIndigoSummaryStats.bitrateMinAI) &&
        Objects.equals(this.bitrateMinAO, endpointIndigoSummaryStats.bitrateMinAO) &&
        Objects.equals(this.bitrateMinVI, endpointIndigoSummaryStats.bitrateMinVI) &&
        Objects.equals(this.bitrateMinVO, endpointIndigoSummaryStats.bitrateMinVO) &&
        Objects.equals(this.bitrateMinVIC, endpointIndigoSummaryStats.bitrateMinVIC) &&
        Objects.equals(this.bitrateMinVOC, endpointIndigoSummaryStats.bitrateMinVOC) &&
        Objects.equals(this.bitrateMaxAI, endpointIndigoSummaryStats.bitrateMaxAI) &&
        Objects.equals(this.bitrateMaxAO, endpointIndigoSummaryStats.bitrateMaxAO) &&
        Objects.equals(this.bitrateMaxVI, endpointIndigoSummaryStats.bitrateMaxVI) &&
        Objects.equals(this.bitrateMaxVO, endpointIndigoSummaryStats.bitrateMaxVO) &&
        Objects.equals(this.bitrateMaxVIC, endpointIndigoSummaryStats.bitrateMaxVIC) &&
        Objects.equals(this.bitrateMaxVOC, endpointIndigoSummaryStats.bitrateMaxVOC) &&
        Objects.equals(this.bitrateAvgAI, endpointIndigoSummaryStats.bitrateAvgAI) &&
        Objects.equals(this.bitrateAvgAO, endpointIndigoSummaryStats.bitrateAvgAO) &&
        Objects.equals(this.bitrateAvgVI, endpointIndigoSummaryStats.bitrateAvgVI) &&
        Objects.equals(this.bitrateAvgVO, endpointIndigoSummaryStats.bitrateAvgVO) &&
        Objects.equals(this.bitrateAvgVIC, endpointIndigoSummaryStats.bitrateAvgVIC) &&
        Objects.equals(this.bitrateAvgVOC, endpointIndigoSummaryStats.bitrateAvgVOC) &&
        Objects.equals(this.jitterMinAI, endpointIndigoSummaryStats.jitterMinAI) &&
        Objects.equals(this.jitterMinAO, endpointIndigoSummaryStats.jitterMinAO) &&
        Objects.equals(this.jitterMinVI, endpointIndigoSummaryStats.jitterMinVI) &&
        Objects.equals(this.jitterMinVO, endpointIndigoSummaryStats.jitterMinVO) &&
        Objects.equals(this.jitterMinVIC, endpointIndigoSummaryStats.jitterMinVIC) &&
        Objects.equals(this.jitterMinVOC, endpointIndigoSummaryStats.jitterMinVOC) &&
        Objects.equals(this.jitterMaxAI, endpointIndigoSummaryStats.jitterMaxAI) &&
        Objects.equals(this.jitterMaxAO, endpointIndigoSummaryStats.jitterMaxAO) &&
        Objects.equals(this.jitterMaxVI, endpointIndigoSummaryStats.jitterMaxVI) &&
        Objects.equals(this.jitterMaxVO, endpointIndigoSummaryStats.jitterMaxVO) &&
        Objects.equals(this.jitterMaxVIC, endpointIndigoSummaryStats.jitterMaxVIC) &&
        Objects.equals(this.jitterMaxVOC, endpointIndigoSummaryStats.jitterMaxVOC) &&
        Objects.equals(this.jitterAvgAI, endpointIndigoSummaryStats.jitterAvgAI) &&
        Objects.equals(this.jitterAvgAO, endpointIndigoSummaryStats.jitterAvgAO) &&
        Objects.equals(this.jitterAvgVI, endpointIndigoSummaryStats.jitterAvgVI) &&
        Objects.equals(this.jitterAvgVO, endpointIndigoSummaryStats.jitterAvgVO) &&
        Objects.equals(this.jitterAvgVIC, endpointIndigoSummaryStats.jitterAvgVIC) &&
        Objects.equals(this.jitterAvgVOC, endpointIndigoSummaryStats.jitterAvgVOC) &&
        Objects.equals(this.maxJitterMinAI, endpointIndigoSummaryStats.maxJitterMinAI) &&
        Objects.equals(this.maxJitterMinVI, endpointIndigoSummaryStats.maxJitterMinVI) &&
        Objects.equals(this.maxJitterMinVIC, endpointIndigoSummaryStats.maxJitterMinVIC) &&
        Objects.equals(this.maxJitterMaxAI, endpointIndigoSummaryStats.maxJitterMaxAI) &&
        Objects.equals(this.maxJitterMaxVI, endpointIndigoSummaryStats.maxJitterMaxVI) &&
        Objects.equals(this.maxJitterMaxVIC, endpointIndigoSummaryStats.maxJitterMaxVIC) &&
        Objects.equals(this.maxJitterAvgAI, endpointIndigoSummaryStats.maxJitterAvgAI) &&
        Objects.equals(this.maxJitterAvgVI, endpointIndigoSummaryStats.maxJitterAvgVI) &&
        Objects.equals(this.maxJitterAvgVIC, endpointIndigoSummaryStats.maxJitterAvgVIC) &&
        Objects.equals(this.videoRecvHeightMin, endpointIndigoSummaryStats.videoRecvHeightMin) &&
        Objects.equals(this.videoRecvHeightMax, endpointIndigoSummaryStats.videoRecvHeightMax) &&
        Objects.equals(this.videoRecvWidthMin, endpointIndigoSummaryStats.videoRecvWidthMin) &&
        Objects.equals(this.videoRecvWidthMax, endpointIndigoSummaryStats.videoRecvWidthMax) &&
        Objects.equals(this.videoSendHeightMin, endpointIndigoSummaryStats.videoSendHeightMin) &&
        Objects.equals(this.videoSendHeightMax, endpointIndigoSummaryStats.videoSendHeightMax) &&
        Objects.equals(this.videoSendWidthMin, endpointIndigoSummaryStats.videoSendWidthMin) &&
        Objects.equals(this.videoSendWidthMax, endpointIndigoSummaryStats.videoSendWidthMax) &&
        Objects.equals(this.contentRecvHeightMin, endpointIndigoSummaryStats.contentRecvHeightMin) &&
        Objects.equals(this.contentRecvHeightMax, endpointIndigoSummaryStats.contentRecvHeightMax) &&
        Objects.equals(this.contentRecvWidthMin, endpointIndigoSummaryStats.contentRecvWidthMin) &&
        Objects.equals(this.contentRecvWidthMax, endpointIndigoSummaryStats.contentRecvWidthMax) &&
        Objects.equals(this.contentSendHeightMin, endpointIndigoSummaryStats.contentSendHeightMin) &&
        Objects.equals(this.contentSendHeightMax, endpointIndigoSummaryStats.contentSendHeightMax) &&
        Objects.equals(this.contentSendWidthMin, endpointIndigoSummaryStats.contentSendWidthMin) &&
        Objects.equals(this.contentSendWidthMax, endpointIndigoSummaryStats.contentSendWidthMax) &&
        Objects.equals(this.roundTripDelayMin, endpointIndigoSummaryStats.roundTripDelayMin) &&
        Objects.equals(this.roundTripDelayMax, endpointIndigoSummaryStats.roundTripDelayMax) &&
        Objects.equals(this.roundTripDelayAvg, endpointIndigoSummaryStats.roundTripDelayAvg) &&
        Objects.equals(this.rfactorMin, endpointIndigoSummaryStats.rfactorMin) &&
        Objects.equals(this.rfactorMax, endpointIndigoSummaryStats.rfactorMax) &&
        Objects.equals(this.rfactorAvg, endpointIndigoSummaryStats.rfactorAvg) &&
        Objects.equals(this.processCpuLoadMin, endpointIndigoSummaryStats.processCpuLoadMin) &&
        Objects.equals(this.processCpuLoadMax, endpointIndigoSummaryStats.processCpuLoadMax) &&
        Objects.equals(this.processCpuLoadAvg, endpointIndigoSummaryStats.processCpuLoadAvg) &&
        Objects.equals(this.systemCpuLoadMin, endpointIndigoSummaryStats.systemCpuLoadMin) &&
        Objects.equals(this.systemCpuLoadMax, endpointIndigoSummaryStats.systemCpuLoadMax) &&
        Objects.equals(this.systemCpuLoadAvg, endpointIndigoSummaryStats.systemCpuLoadAvg) &&
        Objects.equals(this.wifiRecvStrengthMin, endpointIndigoSummaryStats.wifiRecvStrengthMin) &&
        Objects.equals(this.wifiRecvStrengthMax, endpointIndigoSummaryStats.wifiRecvStrengthMax) &&
        Objects.equals(this.wifiRecvStrengthAvg, endpointIndigoSummaryStats.wifiRecvStrengthAvg) &&
        Objects.equals(this.keyFrameRateAvgVI, endpointIndigoSummaryStats.keyFrameRateAvgVI) &&
        Objects.equals(this.keyFrameRateAvgVO, endpointIndigoSummaryStats.keyFrameRateAvgVO) &&
        Objects.equals(this.keyFrameRateAvgVIC, endpointIndigoSummaryStats.keyFrameRateAvgVIC) &&
        Objects.equals(this.keyFrameRateAvgVOC, endpointIndigoSummaryStats.keyFrameRateAvgVOC) &&
        Objects.equals(this.keyFrameRateMinVI, endpointIndigoSummaryStats.keyFrameRateMinVI) &&
        Objects.equals(this.keyFrameRateMinVO, endpointIndigoSummaryStats.keyFrameRateMinVO) &&
        Objects.equals(this.keyFrameRateMinVIC, endpointIndigoSummaryStats.keyFrameRateMinVIC) &&
        Objects.equals(this.keyFrameRateMinVOC, endpointIndigoSummaryStats.keyFrameRateMinVOC) &&
        Objects.equals(this.keyFrameRateMaxVI, endpointIndigoSummaryStats.keyFrameRateMaxVI) &&
        Objects.equals(this.keyFrameRateMaxVO, endpointIndigoSummaryStats.keyFrameRateMaxVO) &&
        Objects.equals(this.keyFrameRateMaxVIC, endpointIndigoSummaryStats.keyFrameRateMaxVIC) &&
        Objects.equals(this.keyFrameRateMaxVOC, endpointIndigoSummaryStats.keyFrameRateMaxVOC) &&
        Objects.equals(this.roundTripDelayAvgVO, endpointIndigoSummaryStats.roundTripDelayAvgVO) &&
        Objects.equals(this.roundTripDelayAvgVOC, endpointIndigoSummaryStats.roundTripDelayAvgVOC) &&
        Objects.equals(this.roundTripDelayAvgAO, endpointIndigoSummaryStats.roundTripDelayAvgAO);
  }

  @Override
  public int hashCode() {
    return Objects.hash(audioRecvCodec, audioSendCodec, contentRecv, contentSend, talkDetected, sessionRelay, sessionInRelay, sessionOutRelay, audioRtpRelay, callRate, cumulLossPercentAI, cumulLossPercentAO, cumulLossPercentVI, cumulLossPercentVO, cumulLossPercentVIC, cumulLossPercentVOC, cumulLossAI, cumulLossAO, cumulLossVI, cumulLossVO, cumulLossVIC, cumulLossVOC, discontinuityCount, droppedPacketsAI, droppedPacketsVI, droppedPacketsVIC, mixUnderRunsAI, networkAvgLossAI, networkAvgLossAO, networkAvgLossVI, networkAvgLossVO, networkCumulLossAI, networkCumulLossAO, networkCumulLossVI, networkCumulLossVO, networkLossAI, networkLossAO, networkLossVI, networkLossVO, callQualityMin, callQualityMax, callQualityAvg, fpsMinVI, fpsMinVO, fpsMinVIC, fpsMinVOC, fpsMaxVI, fpsMaxVO, fpsMaxVIC, fpsMaxVOC, fpsAvgVI, fpsAvgVO, fpsAvgVIC, fpsAvgVOC, bitrateMinAI, bitrateMinAO, bitrateMinVI, bitrateMinVO, bitrateMinVIC, bitrateMinVOC, bitrateMaxAI, bitrateMaxAO, bitrateMaxVI, bitrateMaxVO, bitrateMaxVIC, bitrateMaxVOC, bitrateAvgAI, bitrateAvgAO, bitrateAvgVI, bitrateAvgVO, bitrateAvgVIC, bitrateAvgVOC, jitterMinAI, jitterMinAO, jitterMinVI, jitterMinVO, jitterMinVIC, jitterMinVOC, jitterMaxAI, jitterMaxAO, jitterMaxVI, jitterMaxVO, jitterMaxVIC, jitterMaxVOC, jitterAvgAI, jitterAvgAO, jitterAvgVI, jitterAvgVO, jitterAvgVIC, jitterAvgVOC, maxJitterMinAI, maxJitterMinVI, maxJitterMinVIC, maxJitterMaxAI, maxJitterMaxVI, maxJitterMaxVIC, maxJitterAvgAI, maxJitterAvgVI, maxJitterAvgVIC, videoRecvHeightMin, videoRecvHeightMax, videoRecvWidthMin, videoRecvWidthMax, videoSendHeightMin, videoSendHeightMax, videoSendWidthMin, videoSendWidthMax, contentRecvHeightMin, contentRecvHeightMax, contentRecvWidthMin, contentRecvWidthMax, contentSendHeightMin, contentSendHeightMax, contentSendWidthMin, contentSendWidthMax, roundTripDelayMin, roundTripDelayMax, roundTripDelayAvg, rfactorMin, rfactorMax, rfactorAvg, processCpuLoadMin, processCpuLoadMax, processCpuLoadAvg, systemCpuLoadMin, systemCpuLoadMax, systemCpuLoadAvg, wifiRecvStrengthMin, wifiRecvStrengthMax, wifiRecvStrengthAvg, keyFrameRateAvgVI, keyFrameRateAvgVO, keyFrameRateAvgVIC, keyFrameRateAvgVOC, keyFrameRateMinVI, keyFrameRateMinVO, keyFrameRateMinVIC, keyFrameRateMinVOC, keyFrameRateMaxVI, keyFrameRateMaxVO, keyFrameRateMaxVIC, keyFrameRateMaxVOC, roundTripDelayAvgVO, roundTripDelayAvgVOC, roundTripDelayAvgAO);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class EndpointIndigoSummaryStats {\n");
    
    sb.append("    audioRecvCodec: ").append(toIndentedString(audioRecvCodec)).append("\n");
    sb.append("    audioSendCodec: ").append(toIndentedString(audioSendCodec)).append("\n");
    sb.append("    contentRecv: ").append(toIndentedString(contentRecv)).append("\n");
    sb.append("    contentSend: ").append(toIndentedString(contentSend)).append("\n");
    sb.append("    talkDetected: ").append(toIndentedString(talkDetected)).append("\n");
    sb.append("    sessionRelay: ").append(toIndentedString(sessionRelay)).append("\n");
    sb.append("    sessionInRelay: ").append(toIndentedString(sessionInRelay)).append("\n");
    sb.append("    sessionOutRelay: ").append(toIndentedString(sessionOutRelay)).append("\n");
    sb.append("    audioRtpRelay: ").append(toIndentedString(audioRtpRelay)).append("\n");
    sb.append("    callRate: ").append(toIndentedString(callRate)).append("\n");
    sb.append("    cumulLossPercentAI: ").append(toIndentedString(cumulLossPercentAI)).append("\n");
    sb.append("    cumulLossPercentAO: ").append(toIndentedString(cumulLossPercentAO)).append("\n");
    sb.append("    cumulLossPercentVI: ").append(toIndentedString(cumulLossPercentVI)).append("\n");
    sb.append("    cumulLossPercentVO: ").append(toIndentedString(cumulLossPercentVO)).append("\n");
    sb.append("    cumulLossPercentVIC: ").append(toIndentedString(cumulLossPercentVIC)).append("\n");
    sb.append("    cumulLossPercentVOC: ").append(toIndentedString(cumulLossPercentVOC)).append("\n");
    sb.append("    cumulLossAI: ").append(toIndentedString(cumulLossAI)).append("\n");
    sb.append("    cumulLossAO: ").append(toIndentedString(cumulLossAO)).append("\n");
    sb.append("    cumulLossVI: ").append(toIndentedString(cumulLossVI)).append("\n");
    sb.append("    cumulLossVO: ").append(toIndentedString(cumulLossVO)).append("\n");
    sb.append("    cumulLossVIC: ").append(toIndentedString(cumulLossVIC)).append("\n");
    sb.append("    cumulLossVOC: ").append(toIndentedString(cumulLossVOC)).append("\n");
    sb.append("    discontinuityCount: ").append(toIndentedString(discontinuityCount)).append("\n");
    sb.append("    droppedPacketsAI: ").append(toIndentedString(droppedPacketsAI)).append("\n");
    sb.append("    droppedPacketsVI: ").append(toIndentedString(droppedPacketsVI)).append("\n");
    sb.append("    droppedPacketsVIC: ").append(toIndentedString(droppedPacketsVIC)).append("\n");
    sb.append("    mixUnderRunsAI: ").append(toIndentedString(mixUnderRunsAI)).append("\n");
    sb.append("    networkAvgLossAI: ").append(toIndentedString(networkAvgLossAI)).append("\n");
    sb.append("    networkAvgLossAO: ").append(toIndentedString(networkAvgLossAO)).append("\n");
    sb.append("    networkAvgLossVI: ").append(toIndentedString(networkAvgLossVI)).append("\n");
    sb.append("    networkAvgLossVO: ").append(toIndentedString(networkAvgLossVO)).append("\n");
    sb.append("    networkCumulLossAI: ").append(toIndentedString(networkCumulLossAI)).append("\n");
    sb.append("    networkCumulLossAO: ").append(toIndentedString(networkCumulLossAO)).append("\n");
    sb.append("    networkCumulLossVI: ").append(toIndentedString(networkCumulLossVI)).append("\n");
    sb.append("    networkCumulLossVO: ").append(toIndentedString(networkCumulLossVO)).append("\n");
    sb.append("    networkLossAI: ").append(toIndentedString(networkLossAI)).append("\n");
    sb.append("    networkLossAO: ").append(toIndentedString(networkLossAO)).append("\n");
    sb.append("    networkLossVI: ").append(toIndentedString(networkLossVI)).append("\n");
    sb.append("    networkLossVO: ").append(toIndentedString(networkLossVO)).append("\n");
    sb.append("    callQualityMin: ").append(toIndentedString(callQualityMin)).append("\n");
    sb.append("    callQualityMax: ").append(toIndentedString(callQualityMax)).append("\n");
    sb.append("    callQualityAvg: ").append(toIndentedString(callQualityAvg)).append("\n");
    sb.append("    fpsMinVI: ").append(toIndentedString(fpsMinVI)).append("\n");
    sb.append("    fpsMinVO: ").append(toIndentedString(fpsMinVO)).append("\n");
    sb.append("    fpsMinVIC: ").append(toIndentedString(fpsMinVIC)).append("\n");
    sb.append("    fpsMinVOC: ").append(toIndentedString(fpsMinVOC)).append("\n");
    sb.append("    fpsMaxVI: ").append(toIndentedString(fpsMaxVI)).append("\n");
    sb.append("    fpsMaxVO: ").append(toIndentedString(fpsMaxVO)).append("\n");
    sb.append("    fpsMaxVIC: ").append(toIndentedString(fpsMaxVIC)).append("\n");
    sb.append("    fpsMaxVOC: ").append(toIndentedString(fpsMaxVOC)).append("\n");
    sb.append("    fpsAvgVI: ").append(toIndentedString(fpsAvgVI)).append("\n");
    sb.append("    fpsAvgVO: ").append(toIndentedString(fpsAvgVO)).append("\n");
    sb.append("    fpsAvgVIC: ").append(toIndentedString(fpsAvgVIC)).append("\n");
    sb.append("    fpsAvgVOC: ").append(toIndentedString(fpsAvgVOC)).append("\n");
    sb.append("    bitrateMinAI: ").append(toIndentedString(bitrateMinAI)).append("\n");
    sb.append("    bitrateMinAO: ").append(toIndentedString(bitrateMinAO)).append("\n");
    sb.append("    bitrateMinVI: ").append(toIndentedString(bitrateMinVI)).append("\n");
    sb.append("    bitrateMinVO: ").append(toIndentedString(bitrateMinVO)).append("\n");
    sb.append("    bitrateMinVIC: ").append(toIndentedString(bitrateMinVIC)).append("\n");
    sb.append("    bitrateMinVOC: ").append(toIndentedString(bitrateMinVOC)).append("\n");
    sb.append("    bitrateMaxAI: ").append(toIndentedString(bitrateMaxAI)).append("\n");
    sb.append("    bitrateMaxAO: ").append(toIndentedString(bitrateMaxAO)).append("\n");
    sb.append("    bitrateMaxVI: ").append(toIndentedString(bitrateMaxVI)).append("\n");
    sb.append("    bitrateMaxVO: ").append(toIndentedString(bitrateMaxVO)).append("\n");
    sb.append("    bitrateMaxVIC: ").append(toIndentedString(bitrateMaxVIC)).append("\n");
    sb.append("    bitrateMaxVOC: ").append(toIndentedString(bitrateMaxVOC)).append("\n");
    sb.append("    bitrateAvgAI: ").append(toIndentedString(bitrateAvgAI)).append("\n");
    sb.append("    bitrateAvgAO: ").append(toIndentedString(bitrateAvgAO)).append("\n");
    sb.append("    bitrateAvgVI: ").append(toIndentedString(bitrateAvgVI)).append("\n");
    sb.append("    bitrateAvgVO: ").append(toIndentedString(bitrateAvgVO)).append("\n");
    sb.append("    bitrateAvgVIC: ").append(toIndentedString(bitrateAvgVIC)).append("\n");
    sb.append("    bitrateAvgVOC: ").append(toIndentedString(bitrateAvgVOC)).append("\n");
    sb.append("    jitterMinAI: ").append(toIndentedString(jitterMinAI)).append("\n");
    sb.append("    jitterMinAO: ").append(toIndentedString(jitterMinAO)).append("\n");
    sb.append("    jitterMinVI: ").append(toIndentedString(jitterMinVI)).append("\n");
    sb.append("    jitterMinVO: ").append(toIndentedString(jitterMinVO)).append("\n");
    sb.append("    jitterMinVIC: ").append(toIndentedString(jitterMinVIC)).append("\n");
    sb.append("    jitterMinVOC: ").append(toIndentedString(jitterMinVOC)).append("\n");
    sb.append("    jitterMaxAI: ").append(toIndentedString(jitterMaxAI)).append("\n");
    sb.append("    jitterMaxAO: ").append(toIndentedString(jitterMaxAO)).append("\n");
    sb.append("    jitterMaxVI: ").append(toIndentedString(jitterMaxVI)).append("\n");
    sb.append("    jitterMaxVO: ").append(toIndentedString(jitterMaxVO)).append("\n");
    sb.append("    jitterMaxVIC: ").append(toIndentedString(jitterMaxVIC)).append("\n");
    sb.append("    jitterMaxVOC: ").append(toIndentedString(jitterMaxVOC)).append("\n");
    sb.append("    jitterAvgAI: ").append(toIndentedString(jitterAvgAI)).append("\n");
    sb.append("    jitterAvgAO: ").append(toIndentedString(jitterAvgAO)).append("\n");
    sb.append("    jitterAvgVI: ").append(toIndentedString(jitterAvgVI)).append("\n");
    sb.append("    jitterAvgVO: ").append(toIndentedString(jitterAvgVO)).append("\n");
    sb.append("    jitterAvgVIC: ").append(toIndentedString(jitterAvgVIC)).append("\n");
    sb.append("    jitterAvgVOC: ").append(toIndentedString(jitterAvgVOC)).append("\n");
    sb.append("    maxJitterMinAI: ").append(toIndentedString(maxJitterMinAI)).append("\n");
    sb.append("    maxJitterMinVI: ").append(toIndentedString(maxJitterMinVI)).append("\n");
    sb.append("    maxJitterMinVIC: ").append(toIndentedString(maxJitterMinVIC)).append("\n");
    sb.append("    maxJitterMaxAI: ").append(toIndentedString(maxJitterMaxAI)).append("\n");
    sb.append("    maxJitterMaxVI: ").append(toIndentedString(maxJitterMaxVI)).append("\n");
    sb.append("    maxJitterMaxVIC: ").append(toIndentedString(maxJitterMaxVIC)).append("\n");
    sb.append("    maxJitterAvgAI: ").append(toIndentedString(maxJitterAvgAI)).append("\n");
    sb.append("    maxJitterAvgVI: ").append(toIndentedString(maxJitterAvgVI)).append("\n");
    sb.append("    maxJitterAvgVIC: ").append(toIndentedString(maxJitterAvgVIC)).append("\n");
    sb.append("    videoRecvHeightMin: ").append(toIndentedString(videoRecvHeightMin)).append("\n");
    sb.append("    videoRecvHeightMax: ").append(toIndentedString(videoRecvHeightMax)).append("\n");
    sb.append("    videoRecvWidthMin: ").append(toIndentedString(videoRecvWidthMin)).append("\n");
    sb.append("    videoRecvWidthMax: ").append(toIndentedString(videoRecvWidthMax)).append("\n");
    sb.append("    videoSendHeightMin: ").append(toIndentedString(videoSendHeightMin)).append("\n");
    sb.append("    videoSendHeightMax: ").append(toIndentedString(videoSendHeightMax)).append("\n");
    sb.append("    videoSendWidthMin: ").append(toIndentedString(videoSendWidthMin)).append("\n");
    sb.append("    videoSendWidthMax: ").append(toIndentedString(videoSendWidthMax)).append("\n");
    sb.append("    contentRecvHeightMin: ").append(toIndentedString(contentRecvHeightMin)).append("\n");
    sb.append("    contentRecvHeightMax: ").append(toIndentedString(contentRecvHeightMax)).append("\n");
    sb.append("    contentRecvWidthMin: ").append(toIndentedString(contentRecvWidthMin)).append("\n");
    sb.append("    contentRecvWidthMax: ").append(toIndentedString(contentRecvWidthMax)).append("\n");
    sb.append("    contentSendHeightMin: ").append(toIndentedString(contentSendHeightMin)).append("\n");
    sb.append("    contentSendHeightMax: ").append(toIndentedString(contentSendHeightMax)).append("\n");
    sb.append("    contentSendWidthMin: ").append(toIndentedString(contentSendWidthMin)).append("\n");
    sb.append("    contentSendWidthMax: ").append(toIndentedString(contentSendWidthMax)).append("\n");
    sb.append("    roundTripDelayMin: ").append(toIndentedString(roundTripDelayMin)).append("\n");
    sb.append("    roundTripDelayMax: ").append(toIndentedString(roundTripDelayMax)).append("\n");
    sb.append("    roundTripDelayAvg: ").append(toIndentedString(roundTripDelayAvg)).append("\n");
    sb.append("    rfactorMin: ").append(toIndentedString(rfactorMin)).append("\n");
    sb.append("    rfactorMax: ").append(toIndentedString(rfactorMax)).append("\n");
    sb.append("    rfactorAvg: ").append(toIndentedString(rfactorAvg)).append("\n");
    sb.append("    processCpuLoadMin: ").append(toIndentedString(processCpuLoadMin)).append("\n");
    sb.append("    processCpuLoadMax: ").append(toIndentedString(processCpuLoadMax)).append("\n");
    sb.append("    processCpuLoadAvg: ").append(toIndentedString(processCpuLoadAvg)).append("\n");
    sb.append("    systemCpuLoadMin: ").append(toIndentedString(systemCpuLoadMin)).append("\n");
    sb.append("    systemCpuLoadMax: ").append(toIndentedString(systemCpuLoadMax)).append("\n");
    sb.append("    systemCpuLoadAvg: ").append(toIndentedString(systemCpuLoadAvg)).append("\n");
    sb.append("    wifiRecvStrengthMin: ").append(toIndentedString(wifiRecvStrengthMin)).append("\n");
    sb.append("    wifiRecvStrengthMax: ").append(toIndentedString(wifiRecvStrengthMax)).append("\n");
    sb.append("    wifiRecvStrengthAvg: ").append(toIndentedString(wifiRecvStrengthAvg)).append("\n");
    sb.append("    keyFrameRateAvgVI: ").append(toIndentedString(keyFrameRateAvgVI)).append("\n");
    sb.append("    keyFrameRateAvgVO: ").append(toIndentedString(keyFrameRateAvgVO)).append("\n");
    sb.append("    keyFrameRateAvgVIC: ").append(toIndentedString(keyFrameRateAvgVIC)).append("\n");
    sb.append("    keyFrameRateAvgVOC: ").append(toIndentedString(keyFrameRateAvgVOC)).append("\n");
    sb.append("    keyFrameRateMinVI: ").append(toIndentedString(keyFrameRateMinVI)).append("\n");
    sb.append("    keyFrameRateMinVO: ").append(toIndentedString(keyFrameRateMinVO)).append("\n");
    sb.append("    keyFrameRateMinVIC: ").append(toIndentedString(keyFrameRateMinVIC)).append("\n");
    sb.append("    keyFrameRateMinVOC: ").append(toIndentedString(keyFrameRateMinVOC)).append("\n");
    sb.append("    keyFrameRateMaxVI: ").append(toIndentedString(keyFrameRateMaxVI)).append("\n");
    sb.append("    keyFrameRateMaxVO: ").append(toIndentedString(keyFrameRateMaxVO)).append("\n");
    sb.append("    keyFrameRateMaxVIC: ").append(toIndentedString(keyFrameRateMaxVIC)).append("\n");
    sb.append("    keyFrameRateMaxVOC: ").append(toIndentedString(keyFrameRateMaxVOC)).append("\n");
    sb.append("    roundTripDelayAvgVO: ").append(toIndentedString(roundTripDelayAvgVO)).append("\n");
    sb.append("    roundTripDelayAvgVOC: ").append(toIndentedString(roundTripDelayAvgVOC)).append("\n");
    sb.append("    roundTripDelayAvgAO: ").append(toIndentedString(roundTripDelayAvgAO)).append("\n");
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

