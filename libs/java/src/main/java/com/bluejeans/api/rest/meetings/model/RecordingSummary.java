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

/**
 * RecordingSummary
 */

public class RecordingSummary {
  @SerializedName("recordingEntityId")
  private Integer recordingEntityId = null;

  @SerializedName("recordingName")
  private String recordingName = null;

  @SerializedName("meetingGuid")
  private String meetingGuid = null;

  @SerializedName("chapterCount")
  private Integer chapterCount = null;

  @SerializedName("totalSize")
  private Integer totalSize = null;

  @SerializedName("totalDuration")
  private Integer totalDuration = null;

  @SerializedName("lastRecordingDate")
  private String lastRecordingDate = null;

  @SerializedName("aggregatedStatus")
  private String aggregatedStatus = null;

  @SerializedName("recordingThumbnail")
  private String recordingThumbnail = null;

  @SerializedName("created")
  private Integer created = null;

  @SerializedName("isPremiumRecording")
  private Boolean isPremiumRecording = null;

  @SerializedName("showPremiumRecordingTag")
  private Boolean showPremiumRecordingTag = null;

  public RecordingSummary recordingEntityId(Integer recordingEntityId) {
    this.recordingEntityId = recordingEntityId;
    return this;
  }

   /**
   * Get recordingEntityId
   * @return recordingEntityId
  **/
  @ApiModelProperty(value = "")
  public Integer getRecordingEntityId() {
    return recordingEntityId;
  }

  public void setRecordingEntityId(Integer recordingEntityId) {
    this.recordingEntityId = recordingEntityId;
  }

  public RecordingSummary recordingName(String recordingName) {
    this.recordingName = recordingName;
    return this;
  }

   /**
   * Get recordingName
   * @return recordingName
  **/
  @ApiModelProperty(value = "")
  public String getRecordingName() {
    return recordingName;
  }

  public void setRecordingName(String recordingName) {
    this.recordingName = recordingName;
  }

  public RecordingSummary meetingGuid(String meetingGuid) {
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

  public RecordingSummary chapterCount(Integer chapterCount) {
    this.chapterCount = chapterCount;
    return this;
  }

   /**
   * Get chapterCount
   * @return chapterCount
  **/
  @ApiModelProperty(value = "")
  public Integer getChapterCount() {
    return chapterCount;
  }

  public void setChapterCount(Integer chapterCount) {
    this.chapterCount = chapterCount;
  }

  public RecordingSummary totalSize(Integer totalSize) {
    this.totalSize = totalSize;
    return this;
  }

   /**
   * Get totalSize
   * @return totalSize
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalSize() {
    return totalSize;
  }

  public void setTotalSize(Integer totalSize) {
    this.totalSize = totalSize;
  }

  public RecordingSummary totalDuration(Integer totalDuration) {
    this.totalDuration = totalDuration;
    return this;
  }

   /**
   * Get totalDuration
   * @return totalDuration
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalDuration() {
    return totalDuration;
  }

  public void setTotalDuration(Integer totalDuration) {
    this.totalDuration = totalDuration;
  }

  public RecordingSummary lastRecordingDate(String lastRecordingDate) {
    this.lastRecordingDate = lastRecordingDate;
    return this;
  }

   /**
   * Get lastRecordingDate
   * @return lastRecordingDate
  **/
  @ApiModelProperty(value = "")
  public String getLastRecordingDate() {
    return lastRecordingDate;
  }

  public void setLastRecordingDate(String lastRecordingDate) {
    this.lastRecordingDate = lastRecordingDate;
  }

  public RecordingSummary aggregatedStatus(String aggregatedStatus) {
    this.aggregatedStatus = aggregatedStatus;
    return this;
  }

   /**
   * Get aggregatedStatus
   * @return aggregatedStatus
  **/
  @ApiModelProperty(value = "")
  public String getAggregatedStatus() {
    return aggregatedStatus;
  }

  public void setAggregatedStatus(String aggregatedStatus) {
    this.aggregatedStatus = aggregatedStatus;
  }

  public RecordingSummary recordingThumbnail(String recordingThumbnail) {
    this.recordingThumbnail = recordingThumbnail;
    return this;
  }

   /**
   * Get recordingThumbnail
   * @return recordingThumbnail
  **/
  @ApiModelProperty(value = "")
  public String getRecordingThumbnail() {
    return recordingThumbnail;
  }

  public void setRecordingThumbnail(String recordingThumbnail) {
    this.recordingThumbnail = recordingThumbnail;
  }

  public RecordingSummary created(Integer created) {
    this.created = created;
    return this;
  }

   /**
   * Get created
   * @return created
  **/
  @ApiModelProperty(value = "")
  public Integer getCreated() {
    return created;
  }

  public void setCreated(Integer created) {
    this.created = created;
  }

  public RecordingSummary isPremiumRecording(Boolean isPremiumRecording) {
    this.isPremiumRecording = isPremiumRecording;
    return this;
  }

   /**
   * Get isPremiumRecording
   * @return isPremiumRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean getIsPremiumRecording() {
    return isPremiumRecording;
  }

  public void setIsPremiumRecording(Boolean isPremiumRecording) {
    this.isPremiumRecording = isPremiumRecording;
  }

  public RecordingSummary showPremiumRecordingTag(Boolean showPremiumRecordingTag) {
    this.showPremiumRecordingTag = showPremiumRecordingTag;
    return this;
  }

   /**
   * Get showPremiumRecordingTag
   * @return showPremiumRecordingTag
  **/
  @ApiModelProperty(value = "")
  public Boolean getShowPremiumRecordingTag() {
    return showPremiumRecordingTag;
  }

  public void setShowPremiumRecordingTag(Boolean showPremiumRecordingTag) {
    this.showPremiumRecordingTag = showPremiumRecordingTag;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    RecordingSummary recordingSummary = (RecordingSummary) o;
    return Objects.equals(this.recordingEntityId, recordingSummary.recordingEntityId) &&
        Objects.equals(this.recordingName, recordingSummary.recordingName) &&
        Objects.equals(this.meetingGuid, recordingSummary.meetingGuid) &&
        Objects.equals(this.chapterCount, recordingSummary.chapterCount) &&
        Objects.equals(this.totalSize, recordingSummary.totalSize) &&
        Objects.equals(this.totalDuration, recordingSummary.totalDuration) &&
        Objects.equals(this.lastRecordingDate, recordingSummary.lastRecordingDate) &&
        Objects.equals(this.aggregatedStatus, recordingSummary.aggregatedStatus) &&
        Objects.equals(this.recordingThumbnail, recordingSummary.recordingThumbnail) &&
        Objects.equals(this.created, recordingSummary.created) &&
        Objects.equals(this.isPremiumRecording, recordingSummary.isPremiumRecording) &&
        Objects.equals(this.showPremiumRecordingTag, recordingSummary.showPremiumRecordingTag);
  }

  @Override
  public int hashCode() {
    return Objects.hash(recordingEntityId, recordingName, meetingGuid, chapterCount, totalSize, totalDuration, lastRecordingDate, aggregatedStatus, recordingThumbnail, created, isPremiumRecording, showPremiumRecordingTag);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class RecordingSummary {\n");
    
    sb.append("    recordingEntityId: ").append(toIndentedString(recordingEntityId)).append("\n");
    sb.append("    recordingName: ").append(toIndentedString(recordingName)).append("\n");
    sb.append("    meetingGuid: ").append(toIndentedString(meetingGuid)).append("\n");
    sb.append("    chapterCount: ").append(toIndentedString(chapterCount)).append("\n");
    sb.append("    totalSize: ").append(toIndentedString(totalSize)).append("\n");
    sb.append("    totalDuration: ").append(toIndentedString(totalDuration)).append("\n");
    sb.append("    lastRecordingDate: ").append(toIndentedString(lastRecordingDate)).append("\n");
    sb.append("    aggregatedStatus: ").append(toIndentedString(aggregatedStatus)).append("\n");
    sb.append("    recordingThumbnail: ").append(toIndentedString(recordingThumbnail)).append("\n");
    sb.append("    created: ").append(toIndentedString(created)).append("\n");
    sb.append("    isPremiumRecording: ").append(toIndentedString(isPremiumRecording)).append("\n");
    sb.append("    showPremiumRecordingTag: ").append(toIndentedString(showPremiumRecordingTag)).append("\n");
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

