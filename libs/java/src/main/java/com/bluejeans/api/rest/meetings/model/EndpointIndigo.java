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
import com.bluejeans.api.rest.meetings.model.EndpointIndigoEndpointAttributes1;
import com.bluejeans.api.rest.meetings.model.EndpointIndigoLocation;
import com.bluejeans.api.rest.meetings.model.EndpointIndigoSummaryStats;
import com.bluejeans.api.rest.meetings.model.EndpointIndigoTraceroute;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;

/**
 * EndpointIndigo
 */

public class EndpointIndigo {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("callguid")
  private String callguid = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("endpoint")
  private String endpoint = null;

  @SerializedName("vendor")
  private String vendor = null;

  @SerializedName("version")
  private String version = null;

  @SerializedName("uniqId")
  private String uniqId = null;

  @SerializedName("remoteAddress")
  private String remoteAddress = null;

  @SerializedName("leader")
  private Boolean leader = null;

  @SerializedName("secureCall")
  private Boolean secureCall = null;

  @SerializedName("natDetected")
  private Boolean natDetected = null;

  @SerializedName("proxy")
  private Boolean proxy = null;

  @SerializedName("roiDistance")
  private Float roiDistance = null;

  @SerializedName("mpls")
  private Boolean mpls = null;

  @SerializedName("videoShare")
  private Boolean videoShare = null;

  @SerializedName("recording")
  private Boolean recording = null;

  @SerializedName("creationTime")
  private Integer creationTime = null;

  @SerializedName("meetingJoinTime")
  private Integer meetingJoinTime = null;

  @SerializedName("meetingLeaveTime")
  private Integer meetingLeaveTime = null;

  @SerializedName("didNumber")
  private String didNumber = null;

  @SerializedName("location")
  private EndpointIndigoLocation location = null;

  @SerializedName("summaryStats")
  private EndpointIndigoSummaryStats summaryStats = null;

  @SerializedName("endpointAttributes1")
  private EndpointIndigoEndpointAttributes1 endpointAttributes1 = null;

  @SerializedName("traceroute")
  private EndpointIndigoTraceroute traceroute = null;

  @SerializedName("mhtaskStopped")
  private Boolean mhtaskStopped = null;

  public EndpointIndigo id(Integer id) {
    this.id = id;
    return this;
  }

   /**
   * Get id
   * @return id
  **/
  @ApiModelProperty(value = "")
  public Integer getId() {
    return id;
  }

  public void setId(Integer id) {
    this.id = id;
  }

  public EndpointIndigo callguid(String callguid) {
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

  public EndpointIndigo name(String name) {
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

  public EndpointIndigo endpoint(String endpoint) {
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

  public EndpointIndigo vendor(String vendor) {
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

  public EndpointIndigo version(String version) {
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

  public EndpointIndigo uniqId(String uniqId) {
    this.uniqId = uniqId;
    return this;
  }

   /**
   * Get uniqId
   * @return uniqId
  **/
  @ApiModelProperty(value = "")
  public String getUniqId() {
    return uniqId;
  }

  public void setUniqId(String uniqId) {
    this.uniqId = uniqId;
  }

  public EndpointIndigo remoteAddress(String remoteAddress) {
    this.remoteAddress = remoteAddress;
    return this;
  }

   /**
   * Get remoteAddress
   * @return remoteAddress
  **/
  @ApiModelProperty(value = "")
  public String getRemoteAddress() {
    return remoteAddress;
  }

  public void setRemoteAddress(String remoteAddress) {
    this.remoteAddress = remoteAddress;
  }

  public EndpointIndigo leader(Boolean leader) {
    this.leader = leader;
    return this;
  }

   /**
   * Get leader
   * @return leader
  **/
  @ApiModelProperty(value = "")
  public Boolean isLeader() {
    return leader;
  }

  public void setLeader(Boolean leader) {
    this.leader = leader;
  }

  public EndpointIndigo secureCall(Boolean secureCall) {
    this.secureCall = secureCall;
    return this;
  }

   /**
   * Get secureCall
   * @return secureCall
  **/
  @ApiModelProperty(value = "")
  public Boolean isSecureCall() {
    return secureCall;
  }

  public void setSecureCall(Boolean secureCall) {
    this.secureCall = secureCall;
  }

  public EndpointIndigo natDetected(Boolean natDetected) {
    this.natDetected = natDetected;
    return this;
  }

   /**
   * Get natDetected
   * @return natDetected
  **/
  @ApiModelProperty(value = "")
  public Boolean isNatDetected() {
    return natDetected;
  }

  public void setNatDetected(Boolean natDetected) {
    this.natDetected = natDetected;
  }

  public EndpointIndigo proxy(Boolean proxy) {
    this.proxy = proxy;
    return this;
  }

   /**
   * Get proxy
   * @return proxy
  **/
  @ApiModelProperty(value = "")
  public Boolean isProxy() {
    return proxy;
  }

  public void setProxy(Boolean proxy) {
    this.proxy = proxy;
  }

  public EndpointIndigo roiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
    return this;
  }

   /**
   * Get roiDistance
   * @return roiDistance
  **/
  @ApiModelProperty(value = "")
  public Float getRoiDistance() {
    return roiDistance;
  }

  public void setRoiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
  }

  public EndpointIndigo mpls(Boolean mpls) {
    this.mpls = mpls;
    return this;
  }

   /**
   * Get mpls
   * @return mpls
  **/
  @ApiModelProperty(value = "")
  public Boolean isMpls() {
    return mpls;
  }

  public void setMpls(Boolean mpls) {
    this.mpls = mpls;
  }

  public EndpointIndigo videoShare(Boolean videoShare) {
    this.videoShare = videoShare;
    return this;
  }

   /**
   * Get videoShare
   * @return videoShare
  **/
  @ApiModelProperty(value = "")
  public Boolean isVideoShare() {
    return videoShare;
  }

  public void setVideoShare(Boolean videoShare) {
    this.videoShare = videoShare;
  }

  public EndpointIndigo recording(Boolean recording) {
    this.recording = recording;
    return this;
  }

   /**
   * Get recording
   * @return recording
  **/
  @ApiModelProperty(value = "")
  public Boolean isRecording() {
    return recording;
  }

  public void setRecording(Boolean recording) {
    this.recording = recording;
  }

  public EndpointIndigo creationTime(Integer creationTime) {
    this.creationTime = creationTime;
    return this;
  }

   /**
   * Get creationTime
   * @return creationTime
  **/
  @ApiModelProperty(value = "")
  public Integer getCreationTime() {
    return creationTime;
  }

  public void setCreationTime(Integer creationTime) {
    this.creationTime = creationTime;
  }

  public EndpointIndigo meetingJoinTime(Integer meetingJoinTime) {
    this.meetingJoinTime = meetingJoinTime;
    return this;
  }

   /**
   * Get meetingJoinTime
   * @return meetingJoinTime
  **/
  @ApiModelProperty(value = "")
  public Integer getMeetingJoinTime() {
    return meetingJoinTime;
  }

  public void setMeetingJoinTime(Integer meetingJoinTime) {
    this.meetingJoinTime = meetingJoinTime;
  }

  public EndpointIndigo meetingLeaveTime(Integer meetingLeaveTime) {
    this.meetingLeaveTime = meetingLeaveTime;
    return this;
  }

   /**
   * Get meetingLeaveTime
   * @return meetingLeaveTime
  **/
  @ApiModelProperty(value = "")
  public Integer getMeetingLeaveTime() {
    return meetingLeaveTime;
  }

  public void setMeetingLeaveTime(Integer meetingLeaveTime) {
    this.meetingLeaveTime = meetingLeaveTime;
  }

  public EndpointIndigo didNumber(String didNumber) {
    this.didNumber = didNumber;
    return this;
  }

   /**
   * Get didNumber
   * @return didNumber
  **/
  @ApiModelProperty(value = "")
  public String getDidNumber() {
    return didNumber;
  }

  public void setDidNumber(String didNumber) {
    this.didNumber = didNumber;
  }

  public EndpointIndigo location(EndpointIndigoLocation location) {
    this.location = location;
    return this;
  }

   /**
   * Get location
   * @return location
  **/
  @ApiModelProperty(value = "")
  public EndpointIndigoLocation getLocation() {
    return location;
  }

  public void setLocation(EndpointIndigoLocation location) {
    this.location = location;
  }

  public EndpointIndigo summaryStats(EndpointIndigoSummaryStats summaryStats) {
    this.summaryStats = summaryStats;
    return this;
  }

   /**
   * Get summaryStats
   * @return summaryStats
  **/
  @ApiModelProperty(value = "")
  public EndpointIndigoSummaryStats getSummaryStats() {
    return summaryStats;
  }

  public void setSummaryStats(EndpointIndigoSummaryStats summaryStats) {
    this.summaryStats = summaryStats;
  }

  public EndpointIndigo endpointAttributes1(EndpointIndigoEndpointAttributes1 endpointAttributes1) {
    this.endpointAttributes1 = endpointAttributes1;
    return this;
  }

   /**
   * Get endpointAttributes1
   * @return endpointAttributes1
  **/
  @ApiModelProperty(value = "")
  public EndpointIndigoEndpointAttributes1 getEndpointAttributes1() {
    return endpointAttributes1;
  }

  public void setEndpointAttributes1(EndpointIndigoEndpointAttributes1 endpointAttributes1) {
    this.endpointAttributes1 = endpointAttributes1;
  }

  public EndpointIndigo traceroute(EndpointIndigoTraceroute traceroute) {
    this.traceroute = traceroute;
    return this;
  }

   /**
   * Get traceroute
   * @return traceroute
  **/
  @ApiModelProperty(value = "")
  public EndpointIndigoTraceroute getTraceroute() {
    return traceroute;
  }

  public void setTraceroute(EndpointIndigoTraceroute traceroute) {
    this.traceroute = traceroute;
  }

  public EndpointIndigo mhtaskStopped(Boolean mhtaskStopped) {
    this.mhtaskStopped = mhtaskStopped;
    return this;
  }

   /**
   * Get mhtaskStopped
   * @return mhtaskStopped
  **/
  @ApiModelProperty(value = "")
  public Boolean isMhtaskStopped() {
    return mhtaskStopped;
  }

  public void setMhtaskStopped(Boolean mhtaskStopped) {
    this.mhtaskStopped = mhtaskStopped;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    EndpointIndigo endpointIndigo = (EndpointIndigo) o;
    return Objects.equals(this.id, endpointIndigo.id) &&
        Objects.equals(this.callguid, endpointIndigo.callguid) &&
        Objects.equals(this.name, endpointIndigo.name) &&
        Objects.equals(this.endpoint, endpointIndigo.endpoint) &&
        Objects.equals(this.vendor, endpointIndigo.vendor) &&
        Objects.equals(this.version, endpointIndigo.version) &&
        Objects.equals(this.uniqId, endpointIndigo.uniqId) &&
        Objects.equals(this.remoteAddress, endpointIndigo.remoteAddress) &&
        Objects.equals(this.leader, endpointIndigo.leader) &&
        Objects.equals(this.secureCall, endpointIndigo.secureCall) &&
        Objects.equals(this.natDetected, endpointIndigo.natDetected) &&
        Objects.equals(this.proxy, endpointIndigo.proxy) &&
        Objects.equals(this.roiDistance, endpointIndigo.roiDistance) &&
        Objects.equals(this.mpls, endpointIndigo.mpls) &&
        Objects.equals(this.videoShare, endpointIndigo.videoShare) &&
        Objects.equals(this.recording, endpointIndigo.recording) &&
        Objects.equals(this.creationTime, endpointIndigo.creationTime) &&
        Objects.equals(this.meetingJoinTime, endpointIndigo.meetingJoinTime) &&
        Objects.equals(this.meetingLeaveTime, endpointIndigo.meetingLeaveTime) &&
        Objects.equals(this.didNumber, endpointIndigo.didNumber) &&
        Objects.equals(this.location, endpointIndigo.location) &&
        Objects.equals(this.summaryStats, endpointIndigo.summaryStats) &&
        Objects.equals(this.endpointAttributes1, endpointIndigo.endpointAttributes1) &&
        Objects.equals(this.traceroute, endpointIndigo.traceroute) &&
        Objects.equals(this.mhtaskStopped, endpointIndigo.mhtaskStopped);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, callguid, name, endpoint, vendor, version, uniqId, remoteAddress, leader, secureCall, natDetected, proxy, roiDistance, mpls, videoShare, recording, creationTime, meetingJoinTime, meetingLeaveTime, didNumber, location, summaryStats, endpointAttributes1, traceroute, mhtaskStopped);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class EndpointIndigo {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    callguid: ").append(toIndentedString(callguid)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    endpoint: ").append(toIndentedString(endpoint)).append("\n");
    sb.append("    vendor: ").append(toIndentedString(vendor)).append("\n");
    sb.append("    version: ").append(toIndentedString(version)).append("\n");
    sb.append("    uniqId: ").append(toIndentedString(uniqId)).append("\n");
    sb.append("    remoteAddress: ").append(toIndentedString(remoteAddress)).append("\n");
    sb.append("    leader: ").append(toIndentedString(leader)).append("\n");
    sb.append("    secureCall: ").append(toIndentedString(secureCall)).append("\n");
    sb.append("    natDetected: ").append(toIndentedString(natDetected)).append("\n");
    sb.append("    proxy: ").append(toIndentedString(proxy)).append("\n");
    sb.append("    roiDistance: ").append(toIndentedString(roiDistance)).append("\n");
    sb.append("    mpls: ").append(toIndentedString(mpls)).append("\n");
    sb.append("    videoShare: ").append(toIndentedString(videoShare)).append("\n");
    sb.append("    recording: ").append(toIndentedString(recording)).append("\n");
    sb.append("    creationTime: ").append(toIndentedString(creationTime)).append("\n");
    sb.append("    meetingJoinTime: ").append(toIndentedString(meetingJoinTime)).append("\n");
    sb.append("    meetingLeaveTime: ").append(toIndentedString(meetingLeaveTime)).append("\n");
    sb.append("    didNumber: ").append(toIndentedString(didNumber)).append("\n");
    sb.append("    location: ").append(toIndentedString(location)).append("\n");
    sb.append("    summaryStats: ").append(toIndentedString(summaryStats)).append("\n");
    sb.append("    endpointAttributes1: ").append(toIndentedString(endpointAttributes1)).append("\n");
    sb.append("    traceroute: ").append(toIndentedString(traceroute)).append("\n");
    sb.append("    mhtaskStopped: ").append(toIndentedString(mhtaskStopped)).append("\n");
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

