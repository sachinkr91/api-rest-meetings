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

/**
 * Room
 */

public class Room {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("numericId")
  private String numericId = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("originPopId")
  private Integer originPopId = null;

  @SerializedName("isLargeMeeting")
  private Boolean isLargeMeeting = null;

  @SerializedName("showVideoAnimations")
  private Boolean showVideoAnimations = null;

  @SerializedName("backgroundImage")
  private String backgroundImage = null;

  @SerializedName("isModeratorLess")
  private Boolean isModeratorLess = null;

  @SerializedName("welcomeMessage")
  private String welcomeMessage = null;

  @SerializedName("disallowChat")
  private Boolean disallowChat = null;

  @SerializedName("encryptionType")
  private String encryptionType = null;

  @SerializedName("showAllParticipantsInIcs")
  private Boolean showAllParticipantsInIcs = null;

  @SerializedName("participantPasscode")
  private String participantPasscode = null;

  @SerializedName("publishMeeting")
  private Boolean publishMeeting = null;

  @SerializedName("moderatorLess")
  private Boolean moderatorLess = null;

  @SerializedName("videoBestFit")
  private Boolean videoBestFit = null;

  @SerializedName("muteParticipantsOnEntry")
  private Boolean muteParticipantsOnEntry = null;

  @SerializedName("enforceMeetingEncryption")
  private Boolean enforceMeetingEncryption = null;

  @SerializedName("enforceMeetingEncryptionAllowPSTN")
  private Boolean enforceMeetingEncryptionAllowPSTN = null;

  @SerializedName("idleTimeout")
  private Integer idleTimeout = null;

  @SerializedName("defaultLayout")
  private String defaultLayout = null;

  @SerializedName("playAudioAlerts")
  private Boolean playAudioAlerts = null;

  @SerializedName("personalMeetingId")
  private Integer personalMeetingId = null;

  @SerializedName("moderatorPasscode")
  private String moderatorPasscode = null;

   /**
   * Unique identifier for room.
   * @return id
  **/
  @ApiModelProperty(value = "Unique identifier for room.")
  public Integer getId() {
    return id;
  }

  public Room numericId(String numericId) {
    this.numericId = numericId;
    return this;
  }

   /**
   * Unique identifier for room.
   * @return numericId
  **/
  @ApiModelProperty(value = "Unique identifier for room.")
  public String getNumericId() {
    return numericId;
  }

  public void setNumericId(String numericId) {
    this.numericId = numericId;
  }

  public Room name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Name of the room.
   * @return name
  **/
  @ApiModelProperty(value = "Name of the room.")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public Room originPopId(Integer originPopId) {
    this.originPopId = originPopId;
    return this;
  }

   /**
   * Get originPopId
   * @return originPopId
  **/
  @ApiModelProperty(value = "")
  public Integer getOriginPopId() {
    return originPopId;
  }

  public void setOriginPopId(Integer originPopId) {
    this.originPopId = originPopId;
  }

  public Room isLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
    return this;
  }

   /**
   * Get isLargeMeeting
   * @return isLargeMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean getIsLargeMeeting() {
    return isLargeMeeting;
  }

  public void setIsLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
  }

  public Room showVideoAnimations(Boolean showVideoAnimations) {
    this.showVideoAnimations = showVideoAnimations;
    return this;
  }

   /**
   * Get showVideoAnimations
   * @return showVideoAnimations
  **/
  @ApiModelProperty(value = "")
  public Boolean getShowVideoAnimations() {
    return showVideoAnimations;
  }

  public void setShowVideoAnimations(Boolean showVideoAnimations) {
    this.showVideoAnimations = showVideoAnimations;
  }

  public Room backgroundImage(String backgroundImage) {
    this.backgroundImage = backgroundImage;
    return this;
  }

   /**
   * Get backgroundImage
   * @return backgroundImage
  **/
  @ApiModelProperty(value = "")
  public String getBackgroundImage() {
    return backgroundImage;
  }

  public void setBackgroundImage(String backgroundImage) {
    this.backgroundImage = backgroundImage;
  }

  public Room isModeratorLess(Boolean isModeratorLess) {
    this.isModeratorLess = isModeratorLess;
    return this;
  }

   /**
   * Get isModeratorLess
   * @return isModeratorLess
  **/
  @ApiModelProperty(value = "")
  public Boolean getIsModeratorLess() {
    return isModeratorLess;
  }

  public void setIsModeratorLess(Boolean isModeratorLess) {
    this.isModeratorLess = isModeratorLess;
  }

  public Room welcomeMessage(String welcomeMessage) {
    this.welcomeMessage = welcomeMessage;
    return this;
  }

   /**
   * Get welcomeMessage
   * @return welcomeMessage
  **/
  @ApiModelProperty(value = "")
  public String getWelcomeMessage() {
    return welcomeMessage;
  }

  public void setWelcomeMessage(String welcomeMessage) {
    this.welcomeMessage = welcomeMessage;
  }

  public Room disallowChat(Boolean disallowChat) {
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

  public Room encryptionType(String encryptionType) {
    this.encryptionType = encryptionType;
    return this;
  }

   /**
   * Get encryptionType
   * @return encryptionType
  **/
  @ApiModelProperty(value = "")
  public String getEncryptionType() {
    return encryptionType;
  }

  public void setEncryptionType(String encryptionType) {
    this.encryptionType = encryptionType;
  }

  public Room showAllParticipantsInIcs(Boolean showAllParticipantsInIcs) {
    this.showAllParticipantsInIcs = showAllParticipantsInIcs;
    return this;
  }

   /**
   * Get showAllParticipantsInIcs
   * @return showAllParticipantsInIcs
  **/
  @ApiModelProperty(value = "")
  public Boolean getShowAllParticipantsInIcs() {
    return showAllParticipantsInIcs;
  }

  public void setShowAllParticipantsInIcs(Boolean showAllParticipantsInIcs) {
    this.showAllParticipantsInIcs = showAllParticipantsInIcs;
  }

  public Room participantPasscode(String participantPasscode) {
    this.participantPasscode = participantPasscode;
    return this;
  }

   /**
   * Get participantPasscode
   * @return participantPasscode
  **/
  @ApiModelProperty(value = "")
  public String getParticipantPasscode() {
    return participantPasscode;
  }

  public void setParticipantPasscode(String participantPasscode) {
    this.participantPasscode = participantPasscode;
  }

  public Room publishMeeting(Boolean publishMeeting) {
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

  public Room moderatorLess(Boolean moderatorLess) {
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

  public Room videoBestFit(Boolean videoBestFit) {
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

  public Room muteParticipantsOnEntry(Boolean muteParticipantsOnEntry) {
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

  public Room enforceMeetingEncryption(Boolean enforceMeetingEncryption) {
    this.enforceMeetingEncryption = enforceMeetingEncryption;
    return this;
  }

   /**
   * Get enforceMeetingEncryption
   * @return enforceMeetingEncryption
  **/
  @ApiModelProperty(value = "")
  public Boolean getEnforceMeetingEncryption() {
    return enforceMeetingEncryption;
  }

  public void setEnforceMeetingEncryption(Boolean enforceMeetingEncryption) {
    this.enforceMeetingEncryption = enforceMeetingEncryption;
  }

  public Room enforceMeetingEncryptionAllowPSTN(Boolean enforceMeetingEncryptionAllowPSTN) {
    this.enforceMeetingEncryptionAllowPSTN = enforceMeetingEncryptionAllowPSTN;
    return this;
  }

   /**
   * Get enforceMeetingEncryptionAllowPSTN
   * @return enforceMeetingEncryptionAllowPSTN
  **/
  @ApiModelProperty(value = "")
  public Boolean getEnforceMeetingEncryptionAllowPSTN() {
    return enforceMeetingEncryptionAllowPSTN;
  }

  public void setEnforceMeetingEncryptionAllowPSTN(Boolean enforceMeetingEncryptionAllowPSTN) {
    this.enforceMeetingEncryptionAllowPSTN = enforceMeetingEncryptionAllowPSTN;
  }

  public Room idleTimeout(Integer idleTimeout) {
    this.idleTimeout = idleTimeout;
    return this;
  }

   /**
   * Get idleTimeout
   * @return idleTimeout
  **/
  @ApiModelProperty(value = "")
  public Integer getIdleTimeout() {
    return idleTimeout;
  }

  public void setIdleTimeout(Integer idleTimeout) {
    this.idleTimeout = idleTimeout;
  }

  public Room defaultLayout(String defaultLayout) {
    this.defaultLayout = defaultLayout;
    return this;
  }

   /**
   * Get defaultLayout
   * @return defaultLayout
  **/
  @ApiModelProperty(value = "")
  public String getDefaultLayout() {
    return defaultLayout;
  }

  public void setDefaultLayout(String defaultLayout) {
    this.defaultLayout = defaultLayout;
  }

  public Room playAudioAlerts(Boolean playAudioAlerts) {
    this.playAudioAlerts = playAudioAlerts;
    return this;
  }

   /**
   * Get playAudioAlerts
   * @return playAudioAlerts
  **/
  @ApiModelProperty(value = "")
  public Boolean getPlayAudioAlerts() {
    return playAudioAlerts;
  }

  public void setPlayAudioAlerts(Boolean playAudioAlerts) {
    this.playAudioAlerts = playAudioAlerts;
  }

  public Room personalMeetingId(Integer personalMeetingId) {
    this.personalMeetingId = personalMeetingId;
    return this;
  }

   /**
   * Get personalMeetingId
   * @return personalMeetingId
  **/
  @ApiModelProperty(value = "")
  public Integer getPersonalMeetingId() {
    return personalMeetingId;
  }

  public void setPersonalMeetingId(Integer personalMeetingId) {
    this.personalMeetingId = personalMeetingId;
  }

  public Room moderatorPasscode(String moderatorPasscode) {
    this.moderatorPasscode = moderatorPasscode;
    return this;
  }

   /**
   * Get moderatorPasscode
   * @return moderatorPasscode
  **/
  @ApiModelProperty(value = "")
  public String getModeratorPasscode() {
    return moderatorPasscode;
  }

  public void setModeratorPasscode(String moderatorPasscode) {
    this.moderatorPasscode = moderatorPasscode;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Room room = (Room) o;
    return Objects.equals(this.id, room.id) &&
        Objects.equals(this.numericId, room.numericId) &&
        Objects.equals(this.name, room.name) &&
        Objects.equals(this.originPopId, room.originPopId) &&
        Objects.equals(this.isLargeMeeting, room.isLargeMeeting) &&
        Objects.equals(this.showVideoAnimations, room.showVideoAnimations) &&
        Objects.equals(this.backgroundImage, room.backgroundImage) &&
        Objects.equals(this.isModeratorLess, room.isModeratorLess) &&
        Objects.equals(this.welcomeMessage, room.welcomeMessage) &&
        Objects.equals(this.disallowChat, room.disallowChat) &&
        Objects.equals(this.encryptionType, room.encryptionType) &&
        Objects.equals(this.showAllParticipantsInIcs, room.showAllParticipantsInIcs) &&
        Objects.equals(this.participantPasscode, room.participantPasscode) &&
        Objects.equals(this.publishMeeting, room.publishMeeting) &&
        Objects.equals(this.moderatorLess, room.moderatorLess) &&
        Objects.equals(this.videoBestFit, room.videoBestFit) &&
        Objects.equals(this.muteParticipantsOnEntry, room.muteParticipantsOnEntry) &&
        Objects.equals(this.enforceMeetingEncryption, room.enforceMeetingEncryption) &&
        Objects.equals(this.enforceMeetingEncryptionAllowPSTN, room.enforceMeetingEncryptionAllowPSTN) &&
        Objects.equals(this.idleTimeout, room.idleTimeout) &&
        Objects.equals(this.defaultLayout, room.defaultLayout) &&
        Objects.equals(this.playAudioAlerts, room.playAudioAlerts) &&
        Objects.equals(this.personalMeetingId, room.personalMeetingId) &&
        Objects.equals(this.moderatorPasscode, room.moderatorPasscode);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, numericId, name, originPopId, isLargeMeeting, showVideoAnimations, backgroundImage, isModeratorLess, welcomeMessage, disallowChat, encryptionType, showAllParticipantsInIcs, participantPasscode, publishMeeting, moderatorLess, videoBestFit, muteParticipantsOnEntry, enforceMeetingEncryption, enforceMeetingEncryptionAllowPSTN, idleTimeout, defaultLayout, playAudioAlerts, personalMeetingId, moderatorPasscode);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Room {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    numericId: ").append(toIndentedString(numericId)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    originPopId: ").append(toIndentedString(originPopId)).append("\n");
    sb.append("    isLargeMeeting: ").append(toIndentedString(isLargeMeeting)).append("\n");
    sb.append("    showVideoAnimations: ").append(toIndentedString(showVideoAnimations)).append("\n");
    sb.append("    backgroundImage: ").append(toIndentedString(backgroundImage)).append("\n");
    sb.append("    isModeratorLess: ").append(toIndentedString(isModeratorLess)).append("\n");
    sb.append("    welcomeMessage: ").append(toIndentedString(welcomeMessage)).append("\n");
    sb.append("    disallowChat: ").append(toIndentedString(disallowChat)).append("\n");
    sb.append("    encryptionType: ").append(toIndentedString(encryptionType)).append("\n");
    sb.append("    showAllParticipantsInIcs: ").append(toIndentedString(showAllParticipantsInIcs)).append("\n");
    sb.append("    participantPasscode: ").append(toIndentedString(participantPasscode)).append("\n");
    sb.append("    publishMeeting: ").append(toIndentedString(publishMeeting)).append("\n");
    sb.append("    moderatorLess: ").append(toIndentedString(moderatorLess)).append("\n");
    sb.append("    videoBestFit: ").append(toIndentedString(videoBestFit)).append("\n");
    sb.append("    muteParticipantsOnEntry: ").append(toIndentedString(muteParticipantsOnEntry)).append("\n");
    sb.append("    enforceMeetingEncryption: ").append(toIndentedString(enforceMeetingEncryption)).append("\n");
    sb.append("    enforceMeetingEncryptionAllowPSTN: ").append(toIndentedString(enforceMeetingEncryptionAllowPSTN)).append("\n");
    sb.append("    idleTimeout: ").append(toIndentedString(idleTimeout)).append("\n");
    sb.append("    defaultLayout: ").append(toIndentedString(defaultLayout)).append("\n");
    sb.append("    playAudioAlerts: ").append(toIndentedString(playAudioAlerts)).append("\n");
    sb.append("    personalMeetingId: ").append(toIndentedString(personalMeetingId)).append("\n");
    sb.append("    moderatorPasscode: ").append(toIndentedString(moderatorPasscode)).append("\n");
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

