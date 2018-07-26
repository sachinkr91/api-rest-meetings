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
import com.bluejeans.api.rest.meetings.model.MeetingStateRecordinginfo;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 * MeetingState
 */

public class MeetingState {
  @SerializedName("meetingId")
  private String meetingId = null;

  @SerializedName("meetingGuid")
  private String meetingGuid = null;

  /**
   * Gets or Sets meetingState
   */
  @JsonAdapter(MeetingStateEnum.Adapter.class)
  public enum MeetingStateEnum {
    MEETINGSTARTED("MeetingStarted");

    private String value;

    MeetingStateEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static MeetingStateEnum fromValue(String text) {
      for (MeetingStateEnum b : MeetingStateEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<MeetingStateEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final MeetingStateEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public MeetingStateEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return MeetingStateEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("meetingState")
  private MeetingStateEnum meetingState = null;

  /**
   * Gets or Sets status
   */
  @JsonAdapter(StatusEnum.Adapter.class)
  public enum StatusEnum {
    ACTIVE("active");

    private String value;

    StatusEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static StatusEnum fromValue(String text) {
      for (StatusEnum b : StatusEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<StatusEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final StatusEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public StatusEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return StatusEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("status")
  private StatusEnum status = null;

  @SerializedName("isContentSharingActive")
  private Boolean isContentSharingActive = null;

  @SerializedName("bridged")
  private Boolean bridged = null;

  @SerializedName("locked")
  private Boolean locked = null;

  @SerializedName("audioMuteOnEntry")
  private Boolean audioMuteOnEntry = null;

  @SerializedName("videoMuteOnEntry")
  private Boolean videoMuteOnEntry = null;

  @SerializedName("moderatorLess")
  private Boolean moderatorLess = null;

  @SerializedName("title")
  private String title = null;

  @SerializedName("chatEnabled")
  private Boolean chatEnabled = null;

  @SerializedName("pinnedEndpointGuid")
  private String pinnedEndpointGuid = null;

  @SerializedName("audioEndpointCount")
  private Integer audioEndpointCount = null;

  @SerializedName("videoEndpointCount")
  private Integer videoEndpointCount = null;

  @SerializedName("recordingEnabled")
  private Boolean recordingEnabled = null;

  @SerializedName("participantWebJoinURL")
  private String participantWebJoinURL = null;

  @SerializedName("isLargeMeeting")
  private String isLargeMeeting = null;

  @SerializedName("features")
  private List<String> features = null;

  @SerializedName("delayedMeetingEndTime")
  private Integer delayedMeetingEndTime = null;

  @SerializedName("smStreams")
  private String smStreams = null;

  @SerializedName("inactiveMeetingStatus")
  private String inactiveMeetingStatus = null;

  @SerializedName("meetingMarkedForDelayedTermination")
  private Boolean meetingMarkedForDelayedTermination = null;

  @SerializedName("recordinginfo")
  private MeetingStateRecordinginfo recordinginfo = null;

  public MeetingState meetingId(String meetingId) {
    this.meetingId = meetingId;
    return this;
  }

   /**
   * Get meetingId
   * @return meetingId
  **/
  @ApiModelProperty(value = "")
  public String getMeetingId() {
    return meetingId;
  }

  public void setMeetingId(String meetingId) {
    this.meetingId = meetingId;
  }

  public MeetingState meetingGuid(String meetingGuid) {
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

  public MeetingState meetingState(MeetingStateEnum meetingState) {
    this.meetingState = meetingState;
    return this;
  }

   /**
   * Get meetingState
   * @return meetingState
  **/
  @ApiModelProperty(value = "")
  public MeetingStateEnum getMeetingState() {
    return meetingState;
  }

  public void setMeetingState(MeetingStateEnum meetingState) {
    this.meetingState = meetingState;
  }

  public MeetingState status(StatusEnum status) {
    this.status = status;
    return this;
  }

   /**
   * Get status
   * @return status
  **/
  @ApiModelProperty(value = "")
  public StatusEnum getStatus() {
    return status;
  }

  public void setStatus(StatusEnum status) {
    this.status = status;
  }

  public MeetingState isContentSharingActive(Boolean isContentSharingActive) {
    this.isContentSharingActive = isContentSharingActive;
    return this;
  }

   /**
   * Get isContentSharingActive
   * @return isContentSharingActive
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsContentSharingActive() {
    return isContentSharingActive;
  }

  public void setIsContentSharingActive(Boolean isContentSharingActive) {
    this.isContentSharingActive = isContentSharingActive;
  }

  public MeetingState bridged(Boolean bridged) {
    this.bridged = bridged;
    return this;
  }

   /**
   * Get bridged
   * @return bridged
  **/
  @ApiModelProperty(value = "")
  public Boolean isBridged() {
    return bridged;
  }

  public void setBridged(Boolean bridged) {
    this.bridged = bridged;
  }

  public MeetingState locked(Boolean locked) {
    this.locked = locked;
    return this;
  }

   /**
   * Get locked
   * @return locked
  **/
  @ApiModelProperty(value = "")
  public Boolean isLocked() {
    return locked;
  }

  public void setLocked(Boolean locked) {
    this.locked = locked;
  }

  public MeetingState audioMuteOnEntry(Boolean audioMuteOnEntry) {
    this.audioMuteOnEntry = audioMuteOnEntry;
    return this;
  }

   /**
   * Get audioMuteOnEntry
   * @return audioMuteOnEntry
  **/
  @ApiModelProperty(value = "")
  public Boolean isAudioMuteOnEntry() {
    return audioMuteOnEntry;
  }

  public void setAudioMuteOnEntry(Boolean audioMuteOnEntry) {
    this.audioMuteOnEntry = audioMuteOnEntry;
  }

  public MeetingState videoMuteOnEntry(Boolean videoMuteOnEntry) {
    this.videoMuteOnEntry = videoMuteOnEntry;
    return this;
  }

   /**
   * Get videoMuteOnEntry
   * @return videoMuteOnEntry
  **/
  @ApiModelProperty(value = "")
  public Boolean isVideoMuteOnEntry() {
    return videoMuteOnEntry;
  }

  public void setVideoMuteOnEntry(Boolean videoMuteOnEntry) {
    this.videoMuteOnEntry = videoMuteOnEntry;
  }

  public MeetingState moderatorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
    return this;
  }

   /**
   * Get moderatorLess
   * @return moderatorLess
  **/
  @ApiModelProperty(value = "")
  public Boolean isModeratorLess() {
    return moderatorLess;
  }

  public void setModeratorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
  }

  public MeetingState title(String title) {
    this.title = title;
    return this;
  }

   /**
   * Get title
   * @return title
  **/
  @ApiModelProperty(value = "")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public MeetingState chatEnabled(Boolean chatEnabled) {
    this.chatEnabled = chatEnabled;
    return this;
  }

   /**
   * Get chatEnabled
   * @return chatEnabled
  **/
  @ApiModelProperty(value = "")
  public Boolean isChatEnabled() {
    return chatEnabled;
  }

  public void setChatEnabled(Boolean chatEnabled) {
    this.chatEnabled = chatEnabled;
  }

  public MeetingState pinnedEndpointGuid(String pinnedEndpointGuid) {
    this.pinnedEndpointGuid = pinnedEndpointGuid;
    return this;
  }

   /**
   * Get pinnedEndpointGuid
   * @return pinnedEndpointGuid
  **/
  @ApiModelProperty(value = "")
  public String getPinnedEndpointGuid() {
    return pinnedEndpointGuid;
  }

  public void setPinnedEndpointGuid(String pinnedEndpointGuid) {
    this.pinnedEndpointGuid = pinnedEndpointGuid;
  }

  public MeetingState audioEndpointCount(Integer audioEndpointCount) {
    this.audioEndpointCount = audioEndpointCount;
    return this;
  }

   /**
   * Get audioEndpointCount
   * @return audioEndpointCount
  **/
  @ApiModelProperty(value = "")
  public Integer getAudioEndpointCount() {
    return audioEndpointCount;
  }

  public void setAudioEndpointCount(Integer audioEndpointCount) {
    this.audioEndpointCount = audioEndpointCount;
  }

  public MeetingState videoEndpointCount(Integer videoEndpointCount) {
    this.videoEndpointCount = videoEndpointCount;
    return this;
  }

   /**
   * Get videoEndpointCount
   * @return videoEndpointCount
  **/
  @ApiModelProperty(value = "")
  public Integer getVideoEndpointCount() {
    return videoEndpointCount;
  }

  public void setVideoEndpointCount(Integer videoEndpointCount) {
    this.videoEndpointCount = videoEndpointCount;
  }

  public MeetingState recordingEnabled(Boolean recordingEnabled) {
    this.recordingEnabled = recordingEnabled;
    return this;
  }

   /**
   * Get recordingEnabled
   * @return recordingEnabled
  **/
  @ApiModelProperty(value = "")
  public Boolean isRecordingEnabled() {
    return recordingEnabled;
  }

  public void setRecordingEnabled(Boolean recordingEnabled) {
    this.recordingEnabled = recordingEnabled;
  }

  public MeetingState participantWebJoinURL(String participantWebJoinURL) {
    this.participantWebJoinURL = participantWebJoinURL;
    return this;
  }

   /**
   * Get participantWebJoinURL
   * @return participantWebJoinURL
  **/
  @ApiModelProperty(value = "")
  public String getParticipantWebJoinURL() {
    return participantWebJoinURL;
  }

  public void setParticipantWebJoinURL(String participantWebJoinURL) {
    this.participantWebJoinURL = participantWebJoinURL;
  }

  public MeetingState isLargeMeeting(String isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
    return this;
  }

   /**
   * Get isLargeMeeting
   * @return isLargeMeeting
  **/
  @ApiModelProperty(value = "")
  public String getIsLargeMeeting() {
    return isLargeMeeting;
  }

  public void setIsLargeMeeting(String isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
  }

  public MeetingState features(List<String> features) {
    this.features = features;
    return this;
  }

  public MeetingState addFeaturesItem(String featuresItem) {
    if (this.features == null) {
      this.features = new ArrayList<String>();
    }
    this.features.add(featuresItem);
    return this;
  }

   /**
   * Get features
   * @return features
  **/
  @ApiModelProperty(value = "")
  public List<String> getFeatures() {
    return features;
  }

  public void setFeatures(List<String> features) {
    this.features = features;
  }

  public MeetingState delayedMeetingEndTime(Integer delayedMeetingEndTime) {
    this.delayedMeetingEndTime = delayedMeetingEndTime;
    return this;
  }

   /**
   * Get delayedMeetingEndTime
   * @return delayedMeetingEndTime
  **/
  @ApiModelProperty(value = "")
  public Integer getDelayedMeetingEndTime() {
    return delayedMeetingEndTime;
  }

  public void setDelayedMeetingEndTime(Integer delayedMeetingEndTime) {
    this.delayedMeetingEndTime = delayedMeetingEndTime;
  }

  public MeetingState smStreams(String smStreams) {
    this.smStreams = smStreams;
    return this;
  }

   /**
   * Get smStreams
   * @return smStreams
  **/
  @ApiModelProperty(value = "")
  public String getSmStreams() {
    return smStreams;
  }

  public void setSmStreams(String smStreams) {
    this.smStreams = smStreams;
  }

  public MeetingState inactiveMeetingStatus(String inactiveMeetingStatus) {
    this.inactiveMeetingStatus = inactiveMeetingStatus;
    return this;
  }

   /**
   * Get inactiveMeetingStatus
   * @return inactiveMeetingStatus
  **/
  @ApiModelProperty(value = "")
  public String getInactiveMeetingStatus() {
    return inactiveMeetingStatus;
  }

  public void setInactiveMeetingStatus(String inactiveMeetingStatus) {
    this.inactiveMeetingStatus = inactiveMeetingStatus;
  }

  public MeetingState meetingMarkedForDelayedTermination(Boolean meetingMarkedForDelayedTermination) {
    this.meetingMarkedForDelayedTermination = meetingMarkedForDelayedTermination;
    return this;
  }

   /**
   * Get meetingMarkedForDelayedTermination
   * @return meetingMarkedForDelayedTermination
  **/
  @ApiModelProperty(value = "")
  public Boolean isMeetingMarkedForDelayedTermination() {
    return meetingMarkedForDelayedTermination;
  }

  public void setMeetingMarkedForDelayedTermination(Boolean meetingMarkedForDelayedTermination) {
    this.meetingMarkedForDelayedTermination = meetingMarkedForDelayedTermination;
  }

  public MeetingState recordinginfo(MeetingStateRecordinginfo recordinginfo) {
    this.recordinginfo = recordinginfo;
    return this;
  }

   /**
   * Get recordinginfo
   * @return recordinginfo
  **/
  @ApiModelProperty(value = "")
  public MeetingStateRecordinginfo getRecordinginfo() {
    return recordinginfo;
  }

  public void setRecordinginfo(MeetingStateRecordinginfo recordinginfo) {
    this.recordinginfo = recordinginfo;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingState meetingState = (MeetingState) o;
    return Objects.equals(this.meetingId, meetingState.meetingId) &&
        Objects.equals(this.meetingGuid, meetingState.meetingGuid) &&
        Objects.equals(this.meetingState, meetingState.meetingState) &&
        Objects.equals(this.status, meetingState.status) &&
        Objects.equals(this.isContentSharingActive, meetingState.isContentSharingActive) &&
        Objects.equals(this.bridged, meetingState.bridged) &&
        Objects.equals(this.locked, meetingState.locked) &&
        Objects.equals(this.audioMuteOnEntry, meetingState.audioMuteOnEntry) &&
        Objects.equals(this.videoMuteOnEntry, meetingState.videoMuteOnEntry) &&
        Objects.equals(this.moderatorLess, meetingState.moderatorLess) &&
        Objects.equals(this.title, meetingState.title) &&
        Objects.equals(this.chatEnabled, meetingState.chatEnabled) &&
        Objects.equals(this.pinnedEndpointGuid, meetingState.pinnedEndpointGuid) &&
        Objects.equals(this.audioEndpointCount, meetingState.audioEndpointCount) &&
        Objects.equals(this.videoEndpointCount, meetingState.videoEndpointCount) &&
        Objects.equals(this.recordingEnabled, meetingState.recordingEnabled) &&
        Objects.equals(this.participantWebJoinURL, meetingState.participantWebJoinURL) &&
        Objects.equals(this.isLargeMeeting, meetingState.isLargeMeeting) &&
        Objects.equals(this.features, meetingState.features) &&
        Objects.equals(this.delayedMeetingEndTime, meetingState.delayedMeetingEndTime) &&
        Objects.equals(this.smStreams, meetingState.smStreams) &&
        Objects.equals(this.inactiveMeetingStatus, meetingState.inactiveMeetingStatus) &&
        Objects.equals(this.meetingMarkedForDelayedTermination, meetingState.meetingMarkedForDelayedTermination) &&
        Objects.equals(this.recordinginfo, meetingState.recordinginfo);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingId, meetingGuid, meetingState, status, isContentSharingActive, bridged, locked, audioMuteOnEntry, videoMuteOnEntry, moderatorLess, title, chatEnabled, pinnedEndpointGuid, audioEndpointCount, videoEndpointCount, recordingEnabled, participantWebJoinURL, isLargeMeeting, features, delayedMeetingEndTime, smStreams, inactiveMeetingStatus, meetingMarkedForDelayedTermination, recordinginfo);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingState {\n");
    
    sb.append("    meetingId: ").append(toIndentedString(meetingId)).append("\n");
    sb.append("    meetingGuid: ").append(toIndentedString(meetingGuid)).append("\n");
    sb.append("    meetingState: ").append(toIndentedString(meetingState)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    isContentSharingActive: ").append(toIndentedString(isContentSharingActive)).append("\n");
    sb.append("    bridged: ").append(toIndentedString(bridged)).append("\n");
    sb.append("    locked: ").append(toIndentedString(locked)).append("\n");
    sb.append("    audioMuteOnEntry: ").append(toIndentedString(audioMuteOnEntry)).append("\n");
    sb.append("    videoMuteOnEntry: ").append(toIndentedString(videoMuteOnEntry)).append("\n");
    sb.append("    moderatorLess: ").append(toIndentedString(moderatorLess)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    chatEnabled: ").append(toIndentedString(chatEnabled)).append("\n");
    sb.append("    pinnedEndpointGuid: ").append(toIndentedString(pinnedEndpointGuid)).append("\n");
    sb.append("    audioEndpointCount: ").append(toIndentedString(audioEndpointCount)).append("\n");
    sb.append("    videoEndpointCount: ").append(toIndentedString(videoEndpointCount)).append("\n");
    sb.append("    recordingEnabled: ").append(toIndentedString(recordingEnabled)).append("\n");
    sb.append("    participantWebJoinURL: ").append(toIndentedString(participantWebJoinURL)).append("\n");
    sb.append("    isLargeMeeting: ").append(toIndentedString(isLargeMeeting)).append("\n");
    sb.append("    features: ").append(toIndentedString(features)).append("\n");
    sb.append("    delayedMeetingEndTime: ").append(toIndentedString(delayedMeetingEndTime)).append("\n");
    sb.append("    smStreams: ").append(toIndentedString(smStreams)).append("\n");
    sb.append("    inactiveMeetingStatus: ").append(toIndentedString(inactiveMeetingStatus)).append("\n");
    sb.append("    meetingMarkedForDelayedTermination: ").append(toIndentedString(meetingMarkedForDelayedTermination)).append("\n");
    sb.append("    recordinginfo: ").append(toIndentedString(recordinginfo)).append("\n");
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

