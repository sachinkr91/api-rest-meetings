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
import com.bluejeans.api.rest.meetings.model.EndpointIndigo;
import com.bluejeans.api.rest.meetings.model.MeetingIndigo;
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
 * MeetingExtendedIndigo
 */

public class MeetingExtendedIndigo {
  @SerializedName("meetingId")
  private String meetingId = null;

  @SerializedName("meetingUUID")
  private String meetingUUID = null;

  @SerializedName("userName")
  private String userName = null;

  @SerializedName("email")
  private String email = null;

  @SerializedName("encryptionType")
  private Integer encryptionType = null;

  @SerializedName("title")
  private String title = null;

  @SerializedName("userFullName")
  private String userFullName = null;

  @SerializedName("phoneNumber")
  private String phoneNumber = null;

  @SerializedName("userFeatures")
  private String userFeatures = null;

  /**
   * Gets or Sets scheduledFrom
   */
  @JsonAdapter(ScheduledFromEnum.Adapter.class)
  public enum ScheduledFromEnum {
    APP("WEB_APP");

    private String value;

    ScheduledFromEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static ScheduledFromEnum fromValue(String text) {
      for (ScheduledFromEnum b : ScheduledFromEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<ScheduledFromEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final ScheduledFromEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public ScheduledFromEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return ScheduledFromEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("scheduledFrom")
  private ScheduledFromEnum scheduledFrom = null;

  @SerializedName("inviteeCount")
  private Integer inviteeCount = null;

  @SerializedName("personal")
  private Boolean personal = null;

  @SerializedName("muteOnEntry")
  private Boolean muteOnEntry = null;

  @SerializedName("autoRecord")
  private Boolean autoRecord = null;

  @SerializedName("enterpriseName")
  private String enterpriseName = null;

  @SerializedName("moderatorLess")
  private Boolean moderatorLess = null;

  @SerializedName("startTime")
  private Integer startTime = null;

  @SerializedName("endTime")
  private Integer endTime = null;

  @SerializedName("totalCallSeconds")
  private Integer totalCallSeconds = null;

  @SerializedName("createTime")
  private Integer createTime = null;

  @SerializedName("endpointsCount")
  private Integer endpointsCount = null;

  @SerializedName("concurrentEndpoints")
  private Integer concurrentEndpoints = null;

  @SerializedName("liveVisibleEndpointsCount")
  private Integer liveVisibleEndpointsCount = null;

  @SerializedName("qualarooRating")
  private Integer qualarooRating = null;

  @SerializedName("qualarooCount")
  private Integer qualarooCount = null;

  @SerializedName("meetingRecording")
  private Boolean meetingRecording = null;

  @SerializedName("videoShare")
  private Boolean videoShare = null;

  @SerializedName("contentShare")
  private Boolean contentShare = null;

  @SerializedName("liveRecording")
  private Boolean liveRecording = null;

  @SerializedName("liveVideoShare")
  private Boolean liveVideoShare = null;

  @SerializedName("liveContentShare")
  private Boolean liveContentShare = null;

  @SerializedName("largeMeeting")
  private Boolean largeMeeting = null;

  @SerializedName("roiDistance")
  private Float roiDistance = null;

  @SerializedName("mpls")
  private Boolean mpls = null;

  @SerializedName("id")
  private String id = null;

  @SerializedName("endpoints")
  private List<EndpointIndigo> endpoints = null;

  public MeetingExtendedIndigo meetingId(String meetingId) {
    this.meetingId = meetingId;
    return this;
  }

   /**
   * This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
   * @return meetingId
  **/
  @ApiModelProperty(value = "This is the same as the numericMeetingId found elsewhere. We should have been more consistent.")
  public String getMeetingId() {
    return meetingId;
  }

  public void setMeetingId(String meetingId) {
    this.meetingId = meetingId;
  }

  public MeetingExtendedIndigo meetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
    return this;
  }

   /**
   * The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
   * @return meetingUUID
  **/
  @ApiModelProperty(value = "The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.")
  public String getMeetingUUID() {
    return meetingUUID;
  }

  public void setMeetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
  }

  public MeetingExtendedIndigo userName(String userName) {
    this.userName = userName;
    return this;
  }

   /**
   * Get userName
   * @return userName
  **/
  @ApiModelProperty(value = "")
  public String getUserName() {
    return userName;
  }

  public void setUserName(String userName) {
    this.userName = userName;
  }

  public MeetingExtendedIndigo email(String email) {
    this.email = email;
    return this;
  }

   /**
   * Get email
   * @return email
  **/
  @ApiModelProperty(value = "")
  public String getEmail() {
    return email;
  }

  public void setEmail(String email) {
    this.email = email;
  }

  public MeetingExtendedIndigo encryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
    return this;
  }

   /**
   * Get encryptionType
   * @return encryptionType
  **/
  @ApiModelProperty(value = "")
  public Integer getEncryptionType() {
    return encryptionType;
  }

  public void setEncryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
  }

  public MeetingExtendedIndigo title(String title) {
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

  public MeetingExtendedIndigo userFullName(String userFullName) {
    this.userFullName = userFullName;
    return this;
  }

   /**
   * Get userFullName
   * @return userFullName
  **/
  @ApiModelProperty(value = "")
  public String getUserFullName() {
    return userFullName;
  }

  public void setUserFullName(String userFullName) {
    this.userFullName = userFullName;
  }

  public MeetingExtendedIndigo phoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
    return this;
  }

   /**
   * Get phoneNumber
   * @return phoneNumber
  **/
  @ApiModelProperty(value = "")
  public String getPhoneNumber() {
    return phoneNumber;
  }

  public void setPhoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
  }

  public MeetingExtendedIndigo userFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
    return this;
  }

   /**
   * Get userFeatures
   * @return userFeatures
  **/
  @ApiModelProperty(value = "")
  public String getUserFeatures() {
    return userFeatures;
  }

  public void setUserFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
  }

  public MeetingExtendedIndigo scheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
    return this;
  }

   /**
   * Get scheduledFrom
   * @return scheduledFrom
  **/
  @ApiModelProperty(value = "")
  public ScheduledFromEnum getScheduledFrom() {
    return scheduledFrom;
  }

  public void setScheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
  }

  public MeetingExtendedIndigo inviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
    return this;
  }

   /**
   * Get inviteeCount
   * @return inviteeCount
  **/
  @ApiModelProperty(value = "")
  public Integer getInviteeCount() {
    return inviteeCount;
  }

  public void setInviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
  }

  public MeetingExtendedIndigo personal(Boolean personal) {
    this.personal = personal;
    return this;
  }

   /**
   * Get personal
   * @return personal
  **/
  @ApiModelProperty(value = "")
  public Boolean getPersonal() {
    return personal;
  }

  public void setPersonal(Boolean personal) {
    this.personal = personal;
  }

  public MeetingExtendedIndigo muteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
    return this;
  }

   /**
   * Get muteOnEntry
   * @return muteOnEntry
  **/
  @ApiModelProperty(value = "")
  public Boolean getMuteOnEntry() {
    return muteOnEntry;
  }

  public void setMuteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
  }

  public MeetingExtendedIndigo autoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
    return this;
  }

   /**
   * Get autoRecord
   * @return autoRecord
  **/
  @ApiModelProperty(value = "")
  public Boolean getAutoRecord() {
    return autoRecord;
  }

  public void setAutoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
  }

  public MeetingExtendedIndigo enterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
    return this;
  }

   /**
   * Get enterpriseName
   * @return enterpriseName
  **/
  @ApiModelProperty(value = "")
  public String getEnterpriseName() {
    return enterpriseName;
  }

  public void setEnterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
  }

  public MeetingExtendedIndigo moderatorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
    return this;
  }

   /**
   * Get moderatorLess
   * @return moderatorLess
  **/
  @ApiModelProperty(value = "")
  public Boolean getModeratorLess() {
    return moderatorLess;
  }

  public void setModeratorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
  }

  public MeetingExtendedIndigo startTime(Integer startTime) {
    this.startTime = startTime;
    return this;
  }

   /**
   * Get startTime
   * @return startTime
  **/
  @ApiModelProperty(value = "")
  public Integer getStartTime() {
    return startTime;
  }

  public void setStartTime(Integer startTime) {
    this.startTime = startTime;
  }

  public MeetingExtendedIndigo endTime(Integer endTime) {
    this.endTime = endTime;
    return this;
  }

   /**
   * Get endTime
   * @return endTime
  **/
  @ApiModelProperty(value = "")
  public Integer getEndTime() {
    return endTime;
  }

  public void setEndTime(Integer endTime) {
    this.endTime = endTime;
  }

  public MeetingExtendedIndigo totalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
    return this;
  }

   /**
   * Get totalCallSeconds
   * @return totalCallSeconds
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalCallSeconds() {
    return totalCallSeconds;
  }

  public void setTotalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
  }

  public MeetingExtendedIndigo createTime(Integer createTime) {
    this.createTime = createTime;
    return this;
  }

   /**
   * Get createTime
   * @return createTime
  **/
  @ApiModelProperty(value = "")
  public Integer getCreateTime() {
    return createTime;
  }

  public void setCreateTime(Integer createTime) {
    this.createTime = createTime;
  }

  public MeetingExtendedIndigo endpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
    return this;
  }

   /**
   * Get endpointsCount
   * @return endpointsCount
  **/
  @ApiModelProperty(value = "")
  public Integer getEndpointsCount() {
    return endpointsCount;
  }

  public void setEndpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
  }

  public MeetingExtendedIndigo concurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
    return this;
  }

   /**
   * Get concurrentEndpoints
   * @return concurrentEndpoints
  **/
  @ApiModelProperty(value = "")
  public Integer getConcurrentEndpoints() {
    return concurrentEndpoints;
  }

  public void setConcurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
  }

  public MeetingExtendedIndigo liveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
    return this;
  }

   /**
   * Get liveVisibleEndpointsCount
   * @return liveVisibleEndpointsCount
  **/
  @ApiModelProperty(value = "")
  public Integer getLiveVisibleEndpointsCount() {
    return liveVisibleEndpointsCount;
  }

  public void setLiveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
  }

  public MeetingExtendedIndigo qualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
    return this;
  }

   /**
   * Get qualarooRating
   * @return qualarooRating
  **/
  @ApiModelProperty(value = "")
  public Integer getQualarooRating() {
    return qualarooRating;
  }

  public void setQualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
  }

  public MeetingExtendedIndigo qualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
    return this;
  }

   /**
   * Get qualarooCount
   * @return qualarooCount
  **/
  @ApiModelProperty(value = "")
  public Integer getQualarooCount() {
    return qualarooCount;
  }

  public void setQualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
  }

  public MeetingExtendedIndigo meetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
    return this;
  }

   /**
   * Get meetingRecording
   * @return meetingRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean getMeetingRecording() {
    return meetingRecording;
  }

  public void setMeetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
  }

  public MeetingExtendedIndigo videoShare(Boolean videoShare) {
    this.videoShare = videoShare;
    return this;
  }

   /**
   * Get videoShare
   * @return videoShare
  **/
  @ApiModelProperty(value = "")
  public Boolean getVideoShare() {
    return videoShare;
  }

  public void setVideoShare(Boolean videoShare) {
    this.videoShare = videoShare;
  }

  public MeetingExtendedIndigo contentShare(Boolean contentShare) {
    this.contentShare = contentShare;
    return this;
  }

   /**
   * Get contentShare
   * @return contentShare
  **/
  @ApiModelProperty(value = "")
  public Boolean getContentShare() {
    return contentShare;
  }

  public void setContentShare(Boolean contentShare) {
    this.contentShare = contentShare;
  }

  public MeetingExtendedIndigo liveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
    return this;
  }

   /**
   * Get liveRecording
   * @return liveRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean getLiveRecording() {
    return liveRecording;
  }

  public void setLiveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
  }

  public MeetingExtendedIndigo liveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
    return this;
  }

   /**
   * Get liveVideoShare
   * @return liveVideoShare
  **/
  @ApiModelProperty(value = "")
  public Boolean getLiveVideoShare() {
    return liveVideoShare;
  }

  public void setLiveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
  }

  public MeetingExtendedIndigo liveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
    return this;
  }

   /**
   * Get liveContentShare
   * @return liveContentShare
  **/
  @ApiModelProperty(value = "")
  public Boolean getLiveContentShare() {
    return liveContentShare;
  }

  public void setLiveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
  }

  public MeetingExtendedIndigo largeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
    return this;
  }

   /**
   * Get largeMeeting
   * @return largeMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean getLargeMeeting() {
    return largeMeeting;
  }

  public void setLargeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
  }

  public MeetingExtendedIndigo roiDistance(Float roiDistance) {
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

  public MeetingExtendedIndigo mpls(Boolean mpls) {
    this.mpls = mpls;
    return this;
  }

   /**
   * Get mpls
   * @return mpls
  **/
  @ApiModelProperty(value = "")
  public Boolean getMpls() {
    return mpls;
  }

  public void setMpls(Boolean mpls) {
    this.mpls = mpls;
  }

  public MeetingExtendedIndigo id(String id) {
    this.id = id;
    return this;
  }

   /**
   * Same as the meetingUUID property in this object.
   * @return id
  **/
  @ApiModelProperty(value = "Same as the meetingUUID property in this object.")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }

  public MeetingExtendedIndigo endpoints(List<EndpointIndigo> endpoints) {
    this.endpoints = endpoints;
    return this;
  }

  public MeetingExtendedIndigo addEndpointsItem(EndpointIndigo endpointsItem) {
    if (this.endpoints == null) {
      this.endpoints = new ArrayList<EndpointIndigo>();
    }
    this.endpoints.add(endpointsItem);
    return this;
  }

   /**
   * Get endpoints
   * @return endpoints
  **/
  @ApiModelProperty(value = "")
  public List<EndpointIndigo> getEndpoints() {
    return endpoints;
  }

  public void setEndpoints(List<EndpointIndigo> endpoints) {
    this.endpoints = endpoints;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingExtendedIndigo meetingExtendedIndigo = (MeetingExtendedIndigo) o;
    return Objects.equals(this.meetingId, meetingExtendedIndigo.meetingId) &&
        Objects.equals(this.meetingUUID, meetingExtendedIndigo.meetingUUID) &&
        Objects.equals(this.userName, meetingExtendedIndigo.userName) &&
        Objects.equals(this.email, meetingExtendedIndigo.email) &&
        Objects.equals(this.encryptionType, meetingExtendedIndigo.encryptionType) &&
        Objects.equals(this.title, meetingExtendedIndigo.title) &&
        Objects.equals(this.userFullName, meetingExtendedIndigo.userFullName) &&
        Objects.equals(this.phoneNumber, meetingExtendedIndigo.phoneNumber) &&
        Objects.equals(this.userFeatures, meetingExtendedIndigo.userFeatures) &&
        Objects.equals(this.scheduledFrom, meetingExtendedIndigo.scheduledFrom) &&
        Objects.equals(this.inviteeCount, meetingExtendedIndigo.inviteeCount) &&
        Objects.equals(this.personal, meetingExtendedIndigo.personal) &&
        Objects.equals(this.muteOnEntry, meetingExtendedIndigo.muteOnEntry) &&
        Objects.equals(this.autoRecord, meetingExtendedIndigo.autoRecord) &&
        Objects.equals(this.enterpriseName, meetingExtendedIndigo.enterpriseName) &&
        Objects.equals(this.moderatorLess, meetingExtendedIndigo.moderatorLess) &&
        Objects.equals(this.startTime, meetingExtendedIndigo.startTime) &&
        Objects.equals(this.endTime, meetingExtendedIndigo.endTime) &&
        Objects.equals(this.totalCallSeconds, meetingExtendedIndigo.totalCallSeconds) &&
        Objects.equals(this.createTime, meetingExtendedIndigo.createTime) &&
        Objects.equals(this.endpointsCount, meetingExtendedIndigo.endpointsCount) &&
        Objects.equals(this.concurrentEndpoints, meetingExtendedIndigo.concurrentEndpoints) &&
        Objects.equals(this.liveVisibleEndpointsCount, meetingExtendedIndigo.liveVisibleEndpointsCount) &&
        Objects.equals(this.qualarooRating, meetingExtendedIndigo.qualarooRating) &&
        Objects.equals(this.qualarooCount, meetingExtendedIndigo.qualarooCount) &&
        Objects.equals(this.meetingRecording, meetingExtendedIndigo.meetingRecording) &&
        Objects.equals(this.videoShare, meetingExtendedIndigo.videoShare) &&
        Objects.equals(this.contentShare, meetingExtendedIndigo.contentShare) &&
        Objects.equals(this.liveRecording, meetingExtendedIndigo.liveRecording) &&
        Objects.equals(this.liveVideoShare, meetingExtendedIndigo.liveVideoShare) &&
        Objects.equals(this.liveContentShare, meetingExtendedIndigo.liveContentShare) &&
        Objects.equals(this.largeMeeting, meetingExtendedIndigo.largeMeeting) &&
        Objects.equals(this.roiDistance, meetingExtendedIndigo.roiDistance) &&
        Objects.equals(this.mpls, meetingExtendedIndigo.mpls) &&
        Objects.equals(this.id, meetingExtendedIndigo.id) &&
        Objects.equals(this.endpoints, meetingExtendedIndigo.endpoints);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingId, meetingUUID, userName, email, encryptionType, title, userFullName, phoneNumber, userFeatures, scheduledFrom, inviteeCount, personal, muteOnEntry, autoRecord, enterpriseName, moderatorLess, startTime, endTime, totalCallSeconds, createTime, endpointsCount, concurrentEndpoints, liveVisibleEndpointsCount, qualarooRating, qualarooCount, meetingRecording, videoShare, contentShare, liveRecording, liveVideoShare, liveContentShare, largeMeeting, roiDistance, mpls, id, endpoints);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingExtendedIndigo {\n");
    
    sb.append("    meetingId: ").append(toIndentedString(meetingId)).append("\n");
    sb.append("    meetingUUID: ").append(toIndentedString(meetingUUID)).append("\n");
    sb.append("    userName: ").append(toIndentedString(userName)).append("\n");
    sb.append("    email: ").append(toIndentedString(email)).append("\n");
    sb.append("    encryptionType: ").append(toIndentedString(encryptionType)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    userFullName: ").append(toIndentedString(userFullName)).append("\n");
    sb.append("    phoneNumber: ").append(toIndentedString(phoneNumber)).append("\n");
    sb.append("    userFeatures: ").append(toIndentedString(userFeatures)).append("\n");
    sb.append("    scheduledFrom: ").append(toIndentedString(scheduledFrom)).append("\n");
    sb.append("    inviteeCount: ").append(toIndentedString(inviteeCount)).append("\n");
    sb.append("    personal: ").append(toIndentedString(personal)).append("\n");
    sb.append("    muteOnEntry: ").append(toIndentedString(muteOnEntry)).append("\n");
    sb.append("    autoRecord: ").append(toIndentedString(autoRecord)).append("\n");
    sb.append("    enterpriseName: ").append(toIndentedString(enterpriseName)).append("\n");
    sb.append("    moderatorLess: ").append(toIndentedString(moderatorLess)).append("\n");
    sb.append("    startTime: ").append(toIndentedString(startTime)).append("\n");
    sb.append("    endTime: ").append(toIndentedString(endTime)).append("\n");
    sb.append("    totalCallSeconds: ").append(toIndentedString(totalCallSeconds)).append("\n");
    sb.append("    createTime: ").append(toIndentedString(createTime)).append("\n");
    sb.append("    endpointsCount: ").append(toIndentedString(endpointsCount)).append("\n");
    sb.append("    concurrentEndpoints: ").append(toIndentedString(concurrentEndpoints)).append("\n");
    sb.append("    liveVisibleEndpointsCount: ").append(toIndentedString(liveVisibleEndpointsCount)).append("\n");
    sb.append("    qualarooRating: ").append(toIndentedString(qualarooRating)).append("\n");
    sb.append("    qualarooCount: ").append(toIndentedString(qualarooCount)).append("\n");
    sb.append("    meetingRecording: ").append(toIndentedString(meetingRecording)).append("\n");
    sb.append("    videoShare: ").append(toIndentedString(videoShare)).append("\n");
    sb.append("    contentShare: ").append(toIndentedString(contentShare)).append("\n");
    sb.append("    liveRecording: ").append(toIndentedString(liveRecording)).append("\n");
    sb.append("    liveVideoShare: ").append(toIndentedString(liveVideoShare)).append("\n");
    sb.append("    liveContentShare: ").append(toIndentedString(liveContentShare)).append("\n");
    sb.append("    largeMeeting: ").append(toIndentedString(largeMeeting)).append("\n");
    sb.append("    roiDistance: ").append(toIndentedString(roiDistance)).append("\n");
    sb.append("    mpls: ").append(toIndentedString(mpls)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    endpoints: ").append(toIndentedString(endpoints)).append("\n");
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

