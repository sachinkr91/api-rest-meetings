/**
 * BlueJeans onVideo REST API
 *  Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you should be able to quickly integrate **BlueJeans** video administration into your applications.   ## Getting Started Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact [BlueJeans Support](mailto:Support@BlueJeans.com) for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br /> ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. ## About onVideo Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


package com.bluejeans.api.rest.onvideo.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;


/**
 * MeetingIndigo
 */

public class MeetingIndigo   {
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
  public enum ScheduledFromEnum {
    @SerializedName("WEB_APP")
    APP("WEB_APP");

    private String value;

    ScheduledFromEnum(String value) {
      this.value = value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
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
  private Long startTime = null;

  @SerializedName("endTime")
  private Long endTime = null;

  @SerializedName("totalCallSeconds")
  private Integer totalCallSeconds = null;

  @SerializedName("createTime")
  private Long createTime = null;

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

  public MeetingIndigo meetingId(String meetingId) {
    this.meetingId = meetingId;
    return this;
  }

   /**
   * This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
   * @return meetingId
  **/
  @ApiModelProperty(example = "null", value = "This is the same as the numericMeetingId found elsewhere. We should have been more consistent.")
  public String getMeetingId() {
    return meetingId;
  }

  public void setMeetingId(String meetingId) {
    this.meetingId = meetingId;
  }

  public MeetingIndigo meetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
    return this;
  }

   /**
   * The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
   * @return meetingUUID
  **/
  @ApiModelProperty(example = "null", value = "The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.")
  public String getMeetingUUID() {
    return meetingUUID;
  }

  public void setMeetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
  }

  public MeetingIndigo userName(String userName) {
    this.userName = userName;
    return this;
  }

   /**
   * Get userName
   * @return userName
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getUserName() {
    return userName;
  }

  public void setUserName(String userName) {
    this.userName = userName;
  }

  public MeetingIndigo email(String email) {
    this.email = email;
    return this;
  }

   /**
   * Get email
   * @return email
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getEmail() {
    return email;
  }

  public void setEmail(String email) {
    this.email = email;
  }

  public MeetingIndigo encryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
    return this;
  }

   /**
   * Get encryptionType
   * @return encryptionType
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getEncryptionType() {
    return encryptionType;
  }

  public void setEncryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
  }

  public MeetingIndigo title(String title) {
    this.title = title;
    return this;
  }

   /**
   * Get title
   * @return title
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public MeetingIndigo userFullName(String userFullName) {
    this.userFullName = userFullName;
    return this;
  }

   /**
   * Get userFullName
   * @return userFullName
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getUserFullName() {
    return userFullName;
  }

  public void setUserFullName(String userFullName) {
    this.userFullName = userFullName;
  }

  public MeetingIndigo phoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
    return this;
  }

   /**
   * Get phoneNumber
   * @return phoneNumber
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getPhoneNumber() {
    return phoneNumber;
  }

  public void setPhoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
  }

  public MeetingIndigo userFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
    return this;
  }

   /**
   * Get userFeatures
   * @return userFeatures
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getUserFeatures() {
    return userFeatures;
  }

  public void setUserFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
  }

  public MeetingIndigo scheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
    return this;
  }

   /**
   * Get scheduledFrom
   * @return scheduledFrom
  **/
  @ApiModelProperty(example = "null", value = "")
  public ScheduledFromEnum getScheduledFrom() {
    return scheduledFrom;
  }

  public void setScheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
  }

  public MeetingIndigo inviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
    return this;
  }

   /**
   * Get inviteeCount
   * @return inviteeCount
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getInviteeCount() {
    return inviteeCount;
  }

  public void setInviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
  }

  public MeetingIndigo personal(Boolean personal) {
    this.personal = personal;
    return this;
  }

   /**
   * Get personal
   * @return personal
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getPersonal() {
    return personal;
  }

  public void setPersonal(Boolean personal) {
    this.personal = personal;
  }

  public MeetingIndigo muteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
    return this;
  }

   /**
   * Get muteOnEntry
   * @return muteOnEntry
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getMuteOnEntry() {
    return muteOnEntry;
  }

  public void setMuteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
  }

  public MeetingIndigo autoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
    return this;
  }

   /**
   * Get autoRecord
   * @return autoRecord
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getAutoRecord() {
    return autoRecord;
  }

  public void setAutoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
  }

  public MeetingIndigo enterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
    return this;
  }

   /**
   * Get enterpriseName
   * @return enterpriseName
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getEnterpriseName() {
    return enterpriseName;
  }

  public void setEnterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
  }

  public MeetingIndigo moderatorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
    return this;
  }

   /**
   * Get moderatorLess
   * @return moderatorLess
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getModeratorLess() {
    return moderatorLess;
  }

  public void setModeratorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
  }

  public MeetingIndigo startTime(Long startTime) {
    this.startTime = startTime;
    return this;
  }

   /**
   * Get startTime
   * @return startTime
  **/
  @ApiModelProperty(example = "null", value = "")
  public Long getStartTime() {
    return startTime;
  }

  public void setStartTime(Long startTime) {
    this.startTime = startTime;
  }

  public MeetingIndigo endTime(Long endTime) {
    this.endTime = endTime;
    return this;
  }

   /**
   * Get endTime
   * @return endTime
  **/
  @ApiModelProperty(example = "null", value = "")
  public Long getEndTime() {
    return endTime;
  }

  public void setEndTime(Long endTime) {
    this.endTime = endTime;
  }

  public MeetingIndigo totalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
    return this;
  }

   /**
   * Get totalCallSeconds
   * @return totalCallSeconds
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getTotalCallSeconds() {
    return totalCallSeconds;
  }

  public void setTotalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
  }

  public MeetingIndigo createTime(Long createTime) {
    this.createTime = createTime;
    return this;
  }

   /**
   * Get createTime
   * @return createTime
  **/
  @ApiModelProperty(example = "null", value = "")
  public Long getCreateTime() {
    return createTime;
  }

  public void setCreateTime(Long createTime) {
    this.createTime = createTime;
  }

  public MeetingIndigo endpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
    return this;
  }

   /**
   * Get endpointsCount
   * @return endpointsCount
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getEndpointsCount() {
    return endpointsCount;
  }

  public void setEndpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
  }

  public MeetingIndigo concurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
    return this;
  }

   /**
   * Get concurrentEndpoints
   * @return concurrentEndpoints
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getConcurrentEndpoints() {
    return concurrentEndpoints;
  }

  public void setConcurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
  }

  public MeetingIndigo liveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
    return this;
  }

   /**
   * Get liveVisibleEndpointsCount
   * @return liveVisibleEndpointsCount
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getLiveVisibleEndpointsCount() {
    return liveVisibleEndpointsCount;
  }

  public void setLiveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
  }

  public MeetingIndigo qualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
    return this;
  }

   /**
   * Get qualarooRating
   * @return qualarooRating
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getQualarooRating() {
    return qualarooRating;
  }

  public void setQualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
  }

  public MeetingIndigo qualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
    return this;
  }

   /**
   * Get qualarooCount
   * @return qualarooCount
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getQualarooCount() {
    return qualarooCount;
  }

  public void setQualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
  }

  public MeetingIndigo meetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
    return this;
  }

   /**
   * Get meetingRecording
   * @return meetingRecording
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getMeetingRecording() {
    return meetingRecording;
  }

  public void setMeetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
  }

  public MeetingIndigo videoShare(Boolean videoShare) {
    this.videoShare = videoShare;
    return this;
  }

   /**
   * Get videoShare
   * @return videoShare
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getVideoShare() {
    return videoShare;
  }

  public void setVideoShare(Boolean videoShare) {
    this.videoShare = videoShare;
  }

  public MeetingIndigo contentShare(Boolean contentShare) {
    this.contentShare = contentShare;
    return this;
  }

   /**
   * Get contentShare
   * @return contentShare
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getContentShare() {
    return contentShare;
  }

  public void setContentShare(Boolean contentShare) {
    this.contentShare = contentShare;
  }

  public MeetingIndigo liveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
    return this;
  }

   /**
   * Get liveRecording
   * @return liveRecording
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getLiveRecording() {
    return liveRecording;
  }

  public void setLiveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
  }

  public MeetingIndigo liveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
    return this;
  }

   /**
   * Get liveVideoShare
   * @return liveVideoShare
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getLiveVideoShare() {
    return liveVideoShare;
  }

  public void setLiveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
  }

  public MeetingIndigo liveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
    return this;
  }

   /**
   * Get liveContentShare
   * @return liveContentShare
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getLiveContentShare() {
    return liveContentShare;
  }

  public void setLiveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
  }

  public MeetingIndigo largeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
    return this;
  }

   /**
   * Get largeMeeting
   * @return largeMeeting
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getLargeMeeting() {
    return largeMeeting;
  }

  public void setLargeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
  }

  public MeetingIndigo roiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
    return this;
  }

   /**
   * Get roiDistance
   * @return roiDistance
  **/
  @ApiModelProperty(example = "null", value = "")
  public Float getRoiDistance() {
    return roiDistance;
  }

  public void setRoiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
  }

  public MeetingIndigo mpls(Boolean mpls) {
    this.mpls = mpls;
    return this;
  }

   /**
   * Get mpls
   * @return mpls
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getMpls() {
    return mpls;
  }

  public void setMpls(Boolean mpls) {
    this.mpls = mpls;
  }

  public MeetingIndigo id(String id) {
    this.id = id;
    return this;
  }

   /**
   * Same as the meetingUUID property in this object.
   * @return id
  **/
  @ApiModelProperty(example = "null", value = "Same as the meetingUUID property in this object.")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingIndigo meetingIndigo = (MeetingIndigo) o;
    return Objects.equals(this.meetingId, meetingIndigo.meetingId) &&
        Objects.equals(this.meetingUUID, meetingIndigo.meetingUUID) &&
        Objects.equals(this.userName, meetingIndigo.userName) &&
        Objects.equals(this.email, meetingIndigo.email) &&
        Objects.equals(this.encryptionType, meetingIndigo.encryptionType) &&
        Objects.equals(this.title, meetingIndigo.title) &&
        Objects.equals(this.userFullName, meetingIndigo.userFullName) &&
        Objects.equals(this.phoneNumber, meetingIndigo.phoneNumber) &&
        Objects.equals(this.userFeatures, meetingIndigo.userFeatures) &&
        Objects.equals(this.scheduledFrom, meetingIndigo.scheduledFrom) &&
        Objects.equals(this.inviteeCount, meetingIndigo.inviteeCount) &&
        Objects.equals(this.personal, meetingIndigo.personal) &&
        Objects.equals(this.muteOnEntry, meetingIndigo.muteOnEntry) &&
        Objects.equals(this.autoRecord, meetingIndigo.autoRecord) &&
        Objects.equals(this.enterpriseName, meetingIndigo.enterpriseName) &&
        Objects.equals(this.moderatorLess, meetingIndigo.moderatorLess) &&
        Objects.equals(this.startTime, meetingIndigo.startTime) &&
        Objects.equals(this.endTime, meetingIndigo.endTime) &&
        Objects.equals(this.totalCallSeconds, meetingIndigo.totalCallSeconds) &&
        Objects.equals(this.createTime, meetingIndigo.createTime) &&
        Objects.equals(this.endpointsCount, meetingIndigo.endpointsCount) &&
        Objects.equals(this.concurrentEndpoints, meetingIndigo.concurrentEndpoints) &&
        Objects.equals(this.liveVisibleEndpointsCount, meetingIndigo.liveVisibleEndpointsCount) &&
        Objects.equals(this.qualarooRating, meetingIndigo.qualarooRating) &&
        Objects.equals(this.qualarooCount, meetingIndigo.qualarooCount) &&
        Objects.equals(this.meetingRecording, meetingIndigo.meetingRecording) &&
        Objects.equals(this.videoShare, meetingIndigo.videoShare) &&
        Objects.equals(this.contentShare, meetingIndigo.contentShare) &&
        Objects.equals(this.liveRecording, meetingIndigo.liveRecording) &&
        Objects.equals(this.liveVideoShare, meetingIndigo.liveVideoShare) &&
        Objects.equals(this.liveContentShare, meetingIndigo.liveContentShare) &&
        Objects.equals(this.largeMeeting, meetingIndigo.largeMeeting) &&
        Objects.equals(this.roiDistance, meetingIndigo.roiDistance) &&
        Objects.equals(this.mpls, meetingIndigo.mpls) &&
        Objects.equals(this.id, meetingIndigo.id);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingId, meetingUUID, userName, email, encryptionType, title, userFullName, phoneNumber, userFeatures, scheduledFrom, inviteeCount, personal, muteOnEntry, autoRecord, enterpriseName, moderatorLess, startTime, endTime, totalCallSeconds, createTime, endpointsCount, concurrentEndpoints, liveVisibleEndpointsCount, qualarooRating, qualarooCount, meetingRecording, videoShare, contentShare, liveRecording, liveVideoShare, liveContentShare, largeMeeting, roiDistance, mpls, id);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingIndigo {\n");
    
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

