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
 * MeetingAdvancedMeetingOptions
 */

public class MeetingAdvancedMeetingOptions {
  @SerializedName("autoRecord")
  private Boolean autoRecord = null;

  @SerializedName("muteParticipantsOnEntry")
  private Boolean muteParticipantsOnEntry = null;

  /**
   * Gets or Sets encryptionType
   */
  @JsonAdapter(EncryptionTypeEnum.Adapter.class)
  public enum EncryptionTypeEnum {
    NO_ENCRYPTION("NO_ENCRYPTION"),
    
    ENCRYPTED_ONLY("ENCRYPTED_ONLY"),
    
    ENCRYPTED_OR_PSTN_ONLY("ENCRYPTED_OR_PSTN_ONLY");

    private String value;

    EncryptionTypeEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static EncryptionTypeEnum fromValue(String text) {
      for (EncryptionTypeEnum b : EncryptionTypeEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<EncryptionTypeEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final EncryptionTypeEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public EncryptionTypeEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return EncryptionTypeEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("encryptionType")
  private EncryptionTypeEnum encryptionType = null;

  @SerializedName("moderatorLess")
  private Boolean moderatorLess = null;

  @SerializedName("videoBestFit")
  private Boolean videoBestFit = null;

  @SerializedName("disallowChat")
  private Boolean disallowChat = null;

  @SerializedName("publishMeeting")
  private Boolean publishMeeting = null;

  @SerializedName("showAllAttendeesInMeetingInvite")
  private Boolean showAllAttendeesInMeetingInvite = null;

  public MeetingAdvancedMeetingOptions autoRecord(Boolean autoRecord) {
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

  public MeetingAdvancedMeetingOptions muteParticipantsOnEntry(Boolean muteParticipantsOnEntry) {
    this.muteParticipantsOnEntry = muteParticipantsOnEntry;
    return this;
  }

   /**
   * Get muteParticipantsOnEntry
   * @return muteParticipantsOnEntry
  **/
  @ApiModelProperty(value = "")
  public Boolean getMuteParticipantsOnEntry() {
    return muteParticipantsOnEntry;
  }

  public void setMuteParticipantsOnEntry(Boolean muteParticipantsOnEntry) {
    this.muteParticipantsOnEntry = muteParticipantsOnEntry;
  }

  public MeetingAdvancedMeetingOptions encryptionType(EncryptionTypeEnum encryptionType) {
    this.encryptionType = encryptionType;
    return this;
  }

   /**
   * Get encryptionType
   * @return encryptionType
  **/
  @ApiModelProperty(value = "")
  public EncryptionTypeEnum getEncryptionType() {
    return encryptionType;
  }

  public void setEncryptionType(EncryptionTypeEnum encryptionType) {
    this.encryptionType = encryptionType;
  }

  public MeetingAdvancedMeetingOptions moderatorLess(Boolean moderatorLess) {
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

  public MeetingAdvancedMeetingOptions videoBestFit(Boolean videoBestFit) {
    this.videoBestFit = videoBestFit;
    return this;
  }

   /**
   * Get videoBestFit
   * @return videoBestFit
  **/
  @ApiModelProperty(value = "")
  public Boolean getVideoBestFit() {
    return videoBestFit;
  }

  public void setVideoBestFit(Boolean videoBestFit) {
    this.videoBestFit = videoBestFit;
  }

  public MeetingAdvancedMeetingOptions disallowChat(Boolean disallowChat) {
    this.disallowChat = disallowChat;
    return this;
  }

   /**
   * Get disallowChat
   * @return disallowChat
  **/
  @ApiModelProperty(value = "")
  public Boolean getDisallowChat() {
    return disallowChat;
  }

  public void setDisallowChat(Boolean disallowChat) {
    this.disallowChat = disallowChat;
  }

  public MeetingAdvancedMeetingOptions publishMeeting(Boolean publishMeeting) {
    this.publishMeeting = publishMeeting;
    return this;
  }

   /**
   * Get publishMeeting
   * @return publishMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean getPublishMeeting() {
    return publishMeeting;
  }

  public void setPublishMeeting(Boolean publishMeeting) {
    this.publishMeeting = publishMeeting;
  }

  public MeetingAdvancedMeetingOptions showAllAttendeesInMeetingInvite(Boolean showAllAttendeesInMeetingInvite) {
    this.showAllAttendeesInMeetingInvite = showAllAttendeesInMeetingInvite;
    return this;
  }

   /**
   * Get showAllAttendeesInMeetingInvite
   * @return showAllAttendeesInMeetingInvite
  **/
  @ApiModelProperty(value = "")
  public Boolean getShowAllAttendeesInMeetingInvite() {
    return showAllAttendeesInMeetingInvite;
  }

  public void setShowAllAttendeesInMeetingInvite(Boolean showAllAttendeesInMeetingInvite) {
    this.showAllAttendeesInMeetingInvite = showAllAttendeesInMeetingInvite;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingAdvancedMeetingOptions meetingAdvancedMeetingOptions = (MeetingAdvancedMeetingOptions) o;
    return Objects.equals(this.autoRecord, meetingAdvancedMeetingOptions.autoRecord) &&
        Objects.equals(this.muteParticipantsOnEntry, meetingAdvancedMeetingOptions.muteParticipantsOnEntry) &&
        Objects.equals(this.encryptionType, meetingAdvancedMeetingOptions.encryptionType) &&
        Objects.equals(this.moderatorLess, meetingAdvancedMeetingOptions.moderatorLess) &&
        Objects.equals(this.videoBestFit, meetingAdvancedMeetingOptions.videoBestFit) &&
        Objects.equals(this.disallowChat, meetingAdvancedMeetingOptions.disallowChat) &&
        Objects.equals(this.publishMeeting, meetingAdvancedMeetingOptions.publishMeeting) &&
        Objects.equals(this.showAllAttendeesInMeetingInvite, meetingAdvancedMeetingOptions.showAllAttendeesInMeetingInvite);
  }

  @Override
  public int hashCode() {
    return Objects.hash(autoRecord, muteParticipantsOnEntry, encryptionType, moderatorLess, videoBestFit, disallowChat, publishMeeting, showAllAttendeesInMeetingInvite);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingAdvancedMeetingOptions {\n");
    
    sb.append("    autoRecord: ").append(toIndentedString(autoRecord)).append("\n");
    sb.append("    muteParticipantsOnEntry: ").append(toIndentedString(muteParticipantsOnEntry)).append("\n");
    sb.append("    encryptionType: ").append(toIndentedString(encryptionType)).append("\n");
    sb.append("    moderatorLess: ").append(toIndentedString(moderatorLess)).append("\n");
    sb.append("    videoBestFit: ").append(toIndentedString(videoBestFit)).append("\n");
    sb.append("    disallowChat: ").append(toIndentedString(disallowChat)).append("\n");
    sb.append("    publishMeeting: ").append(toIndentedString(publishMeeting)).append("\n");
    sb.append("    showAllAttendeesInMeetingInvite: ").append(toIndentedString(showAllAttendeesInMeetingInvite)).append("\n");
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

