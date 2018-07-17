/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
 * Contact: glenn@bluejeans.com
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
 * MeetingsSummaryRec
 */

public class MeetingsSummaryRec {
  @SerializedName("meetings_count")
  private Integer meetingsCount = null;

  @SerializedName("country_count")
  private Integer countryCount = null;

  @SerializedName("registered_users")
  private Integer registeredUsers = null;

  @SerializedName("active_users")
  private Integer activeUsers = null;

  @SerializedName("total_minutes")
  private Integer totalMinutes = null;

  @SerializedName("average_call_duration")
  private BigDecimal averageCallDuration = null;

  @SerializedName("total_participants")
  private Integer totalParticipants = null;

  @SerializedName("recording_count")
  private Integer recordingCount = null;

  @SerializedName("average_participants")
  private BigDecimal averageParticipants = null;

  @SerializedName("video_share_count")
  private Integer videoShareCount = null;

  @SerializedName("city_count")
  private Integer cityCount = null;

  @SerializedName("recording_view_count")
  private Integer recordingViewCount = null;

  public MeetingsSummaryRec meetingsCount(Integer meetingsCount) {
    this.meetingsCount = meetingsCount;
    return this;
  }

   /**
   * Number of meetings held
   * @return meetingsCount
  **/
  @ApiModelProperty(value = "Number of meetings held")
  public Integer getMeetingsCount() {
    return meetingsCount;
  }

  public void setMeetingsCount(Integer meetingsCount) {
    this.meetingsCount = meetingsCount;
  }

  public MeetingsSummaryRec countryCount(Integer countryCount) {
    this.countryCount = countryCount;
    return this;
  }

   /**
   * Number of countries with participants in a meeting
   * @return countryCount
  **/
  @ApiModelProperty(value = "Number of countries with participants in a meeting")
  public Integer getCountryCount() {
    return countryCount;
  }

  public void setCountryCount(Integer countryCount) {
    this.countryCount = countryCount;
  }

  public MeetingsSummaryRec registeredUsers(Integer registeredUsers) {
    this.registeredUsers = registeredUsers;
    return this;
  }

   /**
   * Number of registered BlueJeans users who were in meetings.
   * @return registeredUsers
  **/
  @ApiModelProperty(value = "Number of registered BlueJeans users who were in meetings.")
  public Integer getRegisteredUsers() {
    return registeredUsers;
  }

  public void setRegisteredUsers(Integer registeredUsers) {
    this.registeredUsers = registeredUsers;
  }

  public MeetingsSummaryRec activeUsers(Integer activeUsers) {
    this.activeUsers = activeUsers;
    return this;
  }

   /**
   * Get activeUsers
   * @return activeUsers
  **/
  @ApiModelProperty(value = "")
  public Integer getActiveUsers() {
    return activeUsers;
  }

  public void setActiveUsers(Integer activeUsers) {
    this.activeUsers = activeUsers;
  }

  public MeetingsSummaryRec totalMinutes(Integer totalMinutes) {
    this.totalMinutes = totalMinutes;
    return this;
  }

   /**
   * Total minutes of meetings.
   * @return totalMinutes
  **/
  @ApiModelProperty(value = "Total minutes of meetings.")
  public Integer getTotalMinutes() {
    return totalMinutes;
  }

  public void setTotalMinutes(Integer totalMinutes) {
    this.totalMinutes = totalMinutes;
  }

  public MeetingsSummaryRec averageCallDuration(BigDecimal averageCallDuration) {
    this.averageCallDuration = averageCallDuration;
    return this;
  }

   /**
   * Average number of minutes participants were in a meeting.
   * @return averageCallDuration
  **/
  @ApiModelProperty(value = "Average number of minutes participants were in a meeting.")
  public BigDecimal getAverageCallDuration() {
    return averageCallDuration;
  }

  public void setAverageCallDuration(BigDecimal averageCallDuration) {
    this.averageCallDuration = averageCallDuration;
  }

  public MeetingsSummaryRec totalParticipants(Integer totalParticipants) {
    this.totalParticipants = totalParticipants;
    return this;
  }

   /**
   * Total people who were in meetings.
   * @return totalParticipants
  **/
  @ApiModelProperty(value = "Total people who were in meetings.")
  public Integer getTotalParticipants() {
    return totalParticipants;
  }

  public void setTotalParticipants(Integer totalParticipants) {
    this.totalParticipants = totalParticipants;
  }

  public MeetingsSummaryRec recordingCount(Integer recordingCount) {
    this.recordingCount = recordingCount;
    return this;
  }

   /**
   * Total number of meetings recorded.
   * @return recordingCount
  **/
  @ApiModelProperty(value = "Total number of meetings recorded.")
  public Integer getRecordingCount() {
    return recordingCount;
  }

  public void setRecordingCount(Integer recordingCount) {
    this.recordingCount = recordingCount;
  }

  public MeetingsSummaryRec averageParticipants(BigDecimal averageParticipants) {
    this.averageParticipants = averageParticipants;
    return this;
  }

   /**
   * Average number of participants per meeting.
   * @return averageParticipants
  **/
  @ApiModelProperty(value = "Average number of participants per meeting.")
  public BigDecimal getAverageParticipants() {
    return averageParticipants;
  }

  public void setAverageParticipants(BigDecimal averageParticipants) {
    this.averageParticipants = averageParticipants;
  }

  public MeetingsSummaryRec videoShareCount(Integer videoShareCount) {
    this.videoShareCount = videoShareCount;
    return this;
  }

   /**
   * Get videoShareCount
   * @return videoShareCount
  **/
  @ApiModelProperty(value = "")
  public Integer getVideoShareCount() {
    return videoShareCount;
  }

  public void setVideoShareCount(Integer videoShareCount) {
    this.videoShareCount = videoShareCount;
  }

  public MeetingsSummaryRec cityCount(Integer cityCount) {
    this.cityCount = cityCount;
    return this;
  }

   /**
   * Total number of cities with meeting participants.
   * @return cityCount
  **/
  @ApiModelProperty(value = "Total number of cities with meeting participants.")
  public Integer getCityCount() {
    return cityCount;
  }

  public void setCityCount(Integer cityCount) {
    this.cityCount = cityCount;
  }

  public MeetingsSummaryRec recordingViewCount(Integer recordingViewCount) {
    this.recordingViewCount = recordingViewCount;
    return this;
  }

   /**
   * Total number of times that recordings were viewed.
   * @return recordingViewCount
  **/
  @ApiModelProperty(value = "Total number of times that recordings were viewed.")
  public Integer getRecordingViewCount() {
    return recordingViewCount;
  }

  public void setRecordingViewCount(Integer recordingViewCount) {
    this.recordingViewCount = recordingViewCount;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingsSummaryRec meetingsSummaryRec = (MeetingsSummaryRec) o;
    return Objects.equals(this.meetingsCount, meetingsSummaryRec.meetingsCount) &&
        Objects.equals(this.countryCount, meetingsSummaryRec.countryCount) &&
        Objects.equals(this.registeredUsers, meetingsSummaryRec.registeredUsers) &&
        Objects.equals(this.activeUsers, meetingsSummaryRec.activeUsers) &&
        Objects.equals(this.totalMinutes, meetingsSummaryRec.totalMinutes) &&
        Objects.equals(this.averageCallDuration, meetingsSummaryRec.averageCallDuration) &&
        Objects.equals(this.totalParticipants, meetingsSummaryRec.totalParticipants) &&
        Objects.equals(this.recordingCount, meetingsSummaryRec.recordingCount) &&
        Objects.equals(this.averageParticipants, meetingsSummaryRec.averageParticipants) &&
        Objects.equals(this.videoShareCount, meetingsSummaryRec.videoShareCount) &&
        Objects.equals(this.cityCount, meetingsSummaryRec.cityCount) &&
        Objects.equals(this.recordingViewCount, meetingsSummaryRec.recordingViewCount);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingsCount, countryCount, registeredUsers, activeUsers, totalMinutes, averageCallDuration, totalParticipants, recordingCount, averageParticipants, videoShareCount, cityCount, recordingViewCount);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingsSummaryRec {\n");
    
    sb.append("    meetingsCount: ").append(toIndentedString(meetingsCount)).append("\n");
    sb.append("    countryCount: ").append(toIndentedString(countryCount)).append("\n");
    sb.append("    registeredUsers: ").append(toIndentedString(registeredUsers)).append("\n");
    sb.append("    activeUsers: ").append(toIndentedString(activeUsers)).append("\n");
    sb.append("    totalMinutes: ").append(toIndentedString(totalMinutes)).append("\n");
    sb.append("    averageCallDuration: ").append(toIndentedString(averageCallDuration)).append("\n");
    sb.append("    totalParticipants: ").append(toIndentedString(totalParticipants)).append("\n");
    sb.append("    recordingCount: ").append(toIndentedString(recordingCount)).append("\n");
    sb.append("    averageParticipants: ").append(toIndentedString(averageParticipants)).append("\n");
    sb.append("    videoShareCount: ").append(toIndentedString(videoShareCount)).append("\n");
    sb.append("    cityCount: ").append(toIndentedString(cityCount)).append("\n");
    sb.append("    recordingViewCount: ").append(toIndentedString(recordingViewCount)).append("\n");
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

