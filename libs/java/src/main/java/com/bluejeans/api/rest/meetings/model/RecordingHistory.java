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
import com.bluejeans.api.rest.meetings.model.RecordingSession;
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
 * RecordingHistory
 */

public class RecordingHistory {
  @SerializedName("chapterId")
  private String chapterId = null;

  @SerializedName("id")
  private Integer id = null;

  @SerializedName("startTimeOffset")
  private Integer startTimeOffset = null;

  @SerializedName("endTimeOffset")
  private Integer endTimeOffset = null;

  @SerializedName("chapterName")
  private String chapterName = null;

  @SerializedName("totalSize")
  private Integer totalSize = null;

  @SerializedName("compositeContentId")
  private Integer compositeContentId = null;

  /**
   * Gets or Sets compositeContentStatus
   */
  @JsonAdapter(CompositeContentStatusEnum.Adapter.class)
  public enum CompositeContentStatusEnum {
    PROCESSED("PROCESSED");

    private String value;

    CompositeContentStatusEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static CompositeContentStatusEnum fromValue(String text) {
      for (CompositeContentStatusEnum b : CompositeContentStatusEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<CompositeContentStatusEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final CompositeContentStatusEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public CompositeContentStatusEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return CompositeContentStatusEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("compositeContentStatus")
  private CompositeContentStatusEnum compositeContentStatus = null;

  @SerializedName("parentRecordingId")
  private Integer parentRecordingId = null;

  @SerializedName("viewCount")
  private Integer viewCount = null;

  @SerializedName("recordingSessions")
  private List<RecordingSession> recordingSessions = null;

  public RecordingHistory chapterId(String chapterId) {
    this.chapterId = chapterId;
    return this;
  }

   /**
   * Get chapterId
   * @return chapterId
  **/
  @ApiModelProperty(value = "")
  public String getChapterId() {
    return chapterId;
  }

  public void setChapterId(String chapterId) {
    this.chapterId = chapterId;
  }

  public RecordingHistory id(Integer id) {
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

  public RecordingHistory startTimeOffset(Integer startTimeOffset) {
    this.startTimeOffset = startTimeOffset;
    return this;
  }

   /**
   * Get startTimeOffset
   * @return startTimeOffset
  **/
  @ApiModelProperty(value = "")
  public Integer getStartTimeOffset() {
    return startTimeOffset;
  }

  public void setStartTimeOffset(Integer startTimeOffset) {
    this.startTimeOffset = startTimeOffset;
  }

  public RecordingHistory endTimeOffset(Integer endTimeOffset) {
    this.endTimeOffset = endTimeOffset;
    return this;
  }

   /**
   * Get endTimeOffset
   * @return endTimeOffset
  **/
  @ApiModelProperty(value = "")
  public Integer getEndTimeOffset() {
    return endTimeOffset;
  }

  public void setEndTimeOffset(Integer endTimeOffset) {
    this.endTimeOffset = endTimeOffset;
  }

  public RecordingHistory chapterName(String chapterName) {
    this.chapterName = chapterName;
    return this;
  }

   /**
   * Get chapterName
   * @return chapterName
  **/
  @ApiModelProperty(value = "")
  public String getChapterName() {
    return chapterName;
  }

  public void setChapterName(String chapterName) {
    this.chapterName = chapterName;
  }

  public RecordingHistory totalSize(Integer totalSize) {
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

  public RecordingHistory compositeContentId(Integer compositeContentId) {
    this.compositeContentId = compositeContentId;
    return this;
  }

   /**
   * Get compositeContentId
   * @return compositeContentId
  **/
  @ApiModelProperty(value = "")
  public Integer getCompositeContentId() {
    return compositeContentId;
  }

  public void setCompositeContentId(Integer compositeContentId) {
    this.compositeContentId = compositeContentId;
  }

  public RecordingHistory compositeContentStatus(CompositeContentStatusEnum compositeContentStatus) {
    this.compositeContentStatus = compositeContentStatus;
    return this;
  }

   /**
   * Get compositeContentStatus
   * @return compositeContentStatus
  **/
  @ApiModelProperty(value = "")
  public CompositeContentStatusEnum getCompositeContentStatus() {
    return compositeContentStatus;
  }

  public void setCompositeContentStatus(CompositeContentStatusEnum compositeContentStatus) {
    this.compositeContentStatus = compositeContentStatus;
  }

  public RecordingHistory parentRecordingId(Integer parentRecordingId) {
    this.parentRecordingId = parentRecordingId;
    return this;
  }

   /**
   * Get parentRecordingId
   * @return parentRecordingId
  **/
  @ApiModelProperty(value = "")
  public Integer getParentRecordingId() {
    return parentRecordingId;
  }

  public void setParentRecordingId(Integer parentRecordingId) {
    this.parentRecordingId = parentRecordingId;
  }

  public RecordingHistory viewCount(Integer viewCount) {
    this.viewCount = viewCount;
    return this;
  }

   /**
   * Get viewCount
   * @return viewCount
  **/
  @ApiModelProperty(value = "")
  public Integer getViewCount() {
    return viewCount;
  }

  public void setViewCount(Integer viewCount) {
    this.viewCount = viewCount;
  }

  public RecordingHistory recordingSessions(List<RecordingSession> recordingSessions) {
    this.recordingSessions = recordingSessions;
    return this;
  }

  public RecordingHistory addRecordingSessionsItem(RecordingSession recordingSessionsItem) {
    if (this.recordingSessions == null) {
      this.recordingSessions = new ArrayList<RecordingSession>();
    }
    this.recordingSessions.add(recordingSessionsItem);
    return this;
  }

   /**
   * Get recordingSessions
   * @return recordingSessions
  **/
  @ApiModelProperty(value = "")
  public List<RecordingSession> getRecordingSessions() {
    return recordingSessions;
  }

  public void setRecordingSessions(List<RecordingSession> recordingSessions) {
    this.recordingSessions = recordingSessions;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    RecordingHistory recordingHistory = (RecordingHistory) o;
    return Objects.equals(this.chapterId, recordingHistory.chapterId) &&
        Objects.equals(this.id, recordingHistory.id) &&
        Objects.equals(this.startTimeOffset, recordingHistory.startTimeOffset) &&
        Objects.equals(this.endTimeOffset, recordingHistory.endTimeOffset) &&
        Objects.equals(this.chapterName, recordingHistory.chapterName) &&
        Objects.equals(this.totalSize, recordingHistory.totalSize) &&
        Objects.equals(this.compositeContentId, recordingHistory.compositeContentId) &&
        Objects.equals(this.compositeContentStatus, recordingHistory.compositeContentStatus) &&
        Objects.equals(this.parentRecordingId, recordingHistory.parentRecordingId) &&
        Objects.equals(this.viewCount, recordingHistory.viewCount) &&
        Objects.equals(this.recordingSessions, recordingHistory.recordingSessions);
  }

  @Override
  public int hashCode() {
    return Objects.hash(chapterId, id, startTimeOffset, endTimeOffset, chapterName, totalSize, compositeContentId, compositeContentStatus, parentRecordingId, viewCount, recordingSessions);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class RecordingHistory {\n");
    
    sb.append("    chapterId: ").append(toIndentedString(chapterId)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    startTimeOffset: ").append(toIndentedString(startTimeOffset)).append("\n");
    sb.append("    endTimeOffset: ").append(toIndentedString(endTimeOffset)).append("\n");
    sb.append("    chapterName: ").append(toIndentedString(chapterName)).append("\n");
    sb.append("    totalSize: ").append(toIndentedString(totalSize)).append("\n");
    sb.append("    compositeContentId: ").append(toIndentedString(compositeContentId)).append("\n");
    sb.append("    compositeContentStatus: ").append(toIndentedString(compositeContentStatus)).append("\n");
    sb.append("    parentRecordingId: ").append(toIndentedString(parentRecordingId)).append("\n");
    sb.append("    viewCount: ").append(toIndentedString(viewCount)).append("\n");
    sb.append("    recordingSessions: ").append(toIndentedString(recordingSessions)).append("\n");
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

