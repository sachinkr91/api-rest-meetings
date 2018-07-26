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
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomAdvancedMeetingOptions;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomAttendees;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomFirst;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomLast;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomModerator;
import com.bluejeans.api.rest.meetings.model.PersonalMeetingRoomNext;
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
 * PersonalMeetingRoom
 */

public class PersonalMeetingRoom {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("uuid")
  private String uuid = null;

  @SerializedName("title")
  private String title = null;

  @SerializedName("description")
  private String description = null;

  @SerializedName("start")
  private Integer start = null;

  @SerializedName("end")
  private Integer end = null;

  @SerializedName("timezone")
  private String timezone = null;

  @SerializedName("advancedMeetingOptions")
  private PersonalMeetingRoomAdvancedMeetingOptions advancedMeetingOptions = null;

  @SerializedName("notificationUrl")
  private String notificationUrl = null;

  @SerializedName("notificationData")
  private String notificationData = null;

  @SerializedName("moderator")
  private PersonalMeetingRoomModerator moderator = null;

  @SerializedName("numericMeetingId")
  private String numericMeetingId = null;

  @SerializedName("attendeePasscode")
  private String attendeePasscode = null;

  @SerializedName("addAttendeePasscode")
  private Boolean addAttendeePasscode = null;

  @SerializedName("deleted")
  private Boolean deleted = null;

  @SerializedName("allow720p")
  private Boolean allow720p = null;

  @SerializedName("status")
  private String status = null;

  @SerializedName("locked")
  private Boolean locked = null;

  @SerializedName("sequenceNumber")
  private Integer sequenceNumber = null;

  @SerializedName("icsUid")
  private String icsUid = null;

  @SerializedName("endPointType")
  private String endPointType = "WEB_APP";

  @SerializedName("endPointVersion")
  private String endPointVersion = null;

  @SerializedName("attendees")
  private List<PersonalMeetingRoomAttendees> attendees = null;

  @SerializedName("isLargeMeeting")
  private Boolean isLargeMeeting = null;

  @SerializedName("created")
  private Integer created = null;

  @SerializedName("lastModified")
  private Integer lastModified = null;

  @SerializedName("isExpired")
  private Boolean isExpired = null;

  @SerializedName("parentMeetingId")
  private Integer parentMeetingId = null;

  @SerializedName("parentMeetingUUID")
  private String parentMeetingUUID = null;

  @SerializedName("nextOccurrence")
  private Integer nextOccurrence = null;

  @SerializedName("timelessMeeting")
  private Boolean timelessMeeting = null;

  @SerializedName("endlessMeeting")
  private Boolean endlessMeeting = null;

  @SerializedName("first")
  private PersonalMeetingRoomFirst first = null;

  @SerializedName("last")
  private PersonalMeetingRoomLast last = null;

  @SerializedName("next")
  private PersonalMeetingRoomNext next = null;

  @SerializedName("nextStart")
  private Integer nextStart = null;

  @SerializedName("nextEnd")
  private Integer nextEnd = null;

  @SerializedName("isPersonalMeeting")
  private Boolean isPersonalMeeting = null;

  @SerializedName("inviteeJoinOption")
  private Integer inviteeJoinOption = null;

  public PersonalMeetingRoom id(Integer id) {
    this.id = id;
    return this;
  }

   /**
   * This is a unique number that is associated with the personal meeting room.
   * @return id
  **/
  @ApiModelProperty(value = "This is a unique number that is associated with the personal meeting room.")
  public Integer getId() {
    return id;
  }

  public void setId(Integer id) {
    this.id = id;
  }

  public PersonalMeetingRoom uuid(String uuid) {
    this.uuid = uuid;
    return this;
  }

   /**
   * This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room.
   * @return uuid
  **/
  @ApiModelProperty(value = "This is a unique guid used in BlueJeans cloud that is associated with the personal meeting room.")
  public String getUuid() {
    return uuid;
  }

  public void setUuid(String uuid) {
    this.uuid = uuid;
  }

  public PersonalMeetingRoom title(String title) {
    this.title = title;
    return this;
  }

   /**
   * This is the name associated with personal room.
   * @return title
  **/
  @ApiModelProperty(value = "This is the name associated with personal room.")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public PersonalMeetingRoom description(String description) {
    this.description = description;
    return this;
  }

   /**
   * This is a short descriptive text for the personal meeting room.
   * @return description
  **/
  @ApiModelProperty(value = "This is a short descriptive text for the personal meeting room.")
  public String getDescription() {
    return description;
  }

  public void setDescription(String description) {
    this.description = description;
  }

  public PersonalMeetingRoom start(Integer start) {
    this.start = start;
    return this;
  }

   /**
   * This is the epoch-based starting time (in milliseconds) of the personal meeting.
   * @return start
  **/
  @ApiModelProperty(value = "This is the epoch-based starting time (in milliseconds) of the personal meeting.")
  public Integer getStart() {
    return start;
  }

  public void setStart(Integer start) {
    this.start = start;
  }

  public PersonalMeetingRoom end(Integer end) {
    this.end = end;
    return this;
  }

   /**
   * This is the epoch-based ending time (in milliseconds) of the personal meeting.
   * @return end
  **/
  @ApiModelProperty(value = "This is the epoch-based ending time (in milliseconds) of the personal meeting.")
  public Integer getEnd() {
    return end;
  }

  public void setEnd(Integer end) {
    this.end = end;
  }

  public PersonalMeetingRoom timezone(String timezone) {
    this.timezone = timezone;
    return this;
  }

   /**
   * This is the unix timezone string describing the timezone for the meeting
   * @return timezone
  **/
  @ApiModelProperty(value = "This is the unix timezone string describing the timezone for the meeting")
  public String getTimezone() {
    return timezone;
  }

  public void setTimezone(String timezone) {
    this.timezone = timezone;
  }

  public PersonalMeetingRoom advancedMeetingOptions(PersonalMeetingRoomAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
    return this;
  }

   /**
   * Get advancedMeetingOptions
   * @return advancedMeetingOptions
  **/
  @ApiModelProperty(value = "")
  public PersonalMeetingRoomAdvancedMeetingOptions getAdvancedMeetingOptions() {
    return advancedMeetingOptions;
  }

  public void setAdvancedMeetingOptions(PersonalMeetingRoomAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
  }

  public PersonalMeetingRoom notificationUrl(String notificationUrl) {
    this.notificationUrl = notificationUrl;
    return this;
  }

   /**
   * this property is not used in the BlueJeans Meetings product
   * @return notificationUrl
  **/
  @ApiModelProperty(value = "this property is not used in the BlueJeans Meetings product")
  public String getNotificationUrl() {
    return notificationUrl;
  }

  public void setNotificationUrl(String notificationUrl) {
    this.notificationUrl = notificationUrl;
  }

  public PersonalMeetingRoom notificationData(String notificationData) {
    this.notificationData = notificationData;
    return this;
  }

   /**
   * this property is not used in the BlueJeans Meetings product
   * @return notificationData
  **/
  @ApiModelProperty(value = "this property is not used in the BlueJeans Meetings product")
  public String getNotificationData() {
    return notificationData;
  }

  public void setNotificationData(String notificationData) {
    this.notificationData = notificationData;
  }

  public PersonalMeetingRoom moderator(PersonalMeetingRoomModerator moderator) {
    this.moderator = moderator;
    return this;
  }

   /**
   * Get moderator
   * @return moderator
  **/
  @ApiModelProperty(value = "")
  public PersonalMeetingRoomModerator getModerator() {
    return moderator;
  }

  public void setModerator(PersonalMeetingRoomModerator moderator) {
    this.moderator = moderator;
  }

  public PersonalMeetingRoom numericMeetingId(String numericMeetingId) {
    this.numericMeetingId = numericMeetingId;
    return this;
  }

   /**
   * This is the number that a participant would enter when joining this meeting.
   * @return numericMeetingId
  **/
  @ApiModelProperty(value = "This is the number that a participant would enter when joining this meeting.")
  public String getNumericMeetingId() {
    return numericMeetingId;
  }

  public void setNumericMeetingId(String numericMeetingId) {
    this.numericMeetingId = numericMeetingId;
  }

  public PersonalMeetingRoom attendeePasscode(String attendeePasscode) {
    this.attendeePasscode = attendeePasscode;
    return this;
  }

   /**
   * This is a passcode that must be provided by people joining the meeting.
   * @return attendeePasscode
  **/
  @ApiModelProperty(value = "This is a passcode that must be provided by people joining the meeting.")
  public String getAttendeePasscode() {
    return attendeePasscode;
  }

  public void setAttendeePasscode(String attendeePasscode) {
    this.attendeePasscode = attendeePasscode;
  }

  public PersonalMeetingRoom addAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
    return this;
  }

   /**
   * If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting.
   * @return addAttendeePasscode
  **/
  @ApiModelProperty(value = "If set, causes BlueJeans to require participants to enter a passcode in order to join the meeting.")
  public Boolean isAddAttendeePasscode() {
    return addAttendeePasscode;
  }

  public void setAddAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
  }

  public PersonalMeetingRoom deleted(Boolean deleted) {
    this.deleted = deleted;
    return this;
  }

   /**
   * If set, indicates that this meeting has been deleted.
   * @return deleted
  **/
  @ApiModelProperty(value = "If set, indicates that this meeting has been deleted.")
  public Boolean isDeleted() {
    return deleted;
  }

  public void setDeleted(Boolean deleted) {
    this.deleted = deleted;
  }

  public PersonalMeetingRoom allow720p(Boolean allow720p) {
    this.allow720p = allow720p;
    return this;
  }

   /**
   * If set allows clients to send and receive 720p video resolution.
   * @return allow720p
  **/
  @ApiModelProperty(value = "If set allows clients to send and receive 720p video resolution.")
  public Boolean isAllow720p() {
    return allow720p;
  }

  public void setAllow720p(Boolean allow720p) {
    this.allow720p = allow720p;
  }

  public PersonalMeetingRoom status(String status) {
    this.status = status;
    return this;
  }

   /**
   * This string indicates the meeting&#39;s operational status.
   * @return status
  **/
  @ApiModelProperty(value = "This string indicates the meeting's operational status.")
  public String getStatus() {
    return status;
  }

  public void setStatus(String status) {
    this.status = status;
  }

  public PersonalMeetingRoom locked(Boolean locked) {
    this.locked = locked;
    return this;
  }

   /**
   * If set the meeting has been locked, and future attendees require a member to allow them to join.
   * @return locked
  **/
  @ApiModelProperty(value = "If set the meeting has been locked, and future attendees require a member to allow them to join.")
  public Boolean isLocked() {
    return locked;
  }

  public void setLocked(Boolean locked) {
    this.locked = locked;
  }

  public PersonalMeetingRoom sequenceNumber(Integer sequenceNumber) {
    this.sequenceNumber = sequenceNumber;
    return this;
  }

   /**
   * Internal tracking number
   * @return sequenceNumber
  **/
  @ApiModelProperty(value = "Internal tracking number")
  public Integer getSequenceNumber() {
    return sequenceNumber;
  }

  public void setSequenceNumber(Integer sequenceNumber) {
    this.sequenceNumber = sequenceNumber;
  }

  public PersonalMeetingRoom icsUid(String icsUid) {
    this.icsUid = icsUid;
    return this;
  }

   /**
   * Internal tracking number
   * @return icsUid
  **/
  @ApiModelProperty(value = "Internal tracking number")
  public String getIcsUid() {
    return icsUid;
  }

  public void setIcsUid(String icsUid) {
    this.icsUid = icsUid;
  }

  public PersonalMeetingRoom endPointType(String endPointType) {
    this.endPointType = endPointType;
    return this;
  }

   /**
   * This string is the name of the type of scheduling entity.
   * @return endPointType
  **/
  @ApiModelProperty(value = "This string is the name of the type of scheduling entity.")
  public String getEndPointType() {
    return endPointType;
  }

  public void setEndPointType(String endPointType) {
    this.endPointType = endPointType;
  }

  public PersonalMeetingRoom endPointVersion(String endPointVersion) {
    this.endPointVersion = endPointVersion;
    return this;
  }

   /**
   * This is a string that describes the version number of the endpoint type.
   * @return endPointVersion
  **/
  @ApiModelProperty(value = "This is a string that describes the version number of the endpoint type.")
  public String getEndPointVersion() {
    return endPointVersion;
  }

  public void setEndPointVersion(String endPointVersion) {
    this.endPointVersion = endPointVersion;
  }

  public PersonalMeetingRoom attendees(List<PersonalMeetingRoomAttendees> attendees) {
    this.attendees = attendees;
    return this;
  }

  public PersonalMeetingRoom addAttendeesItem(PersonalMeetingRoomAttendees attendeesItem) {
    if (this.attendees == null) {
      this.attendees = new ArrayList<PersonalMeetingRoomAttendees>();
    }
    this.attendees.add(attendeesItem);
    return this;
  }

   /**
   * Get attendees
   * @return attendees
  **/
  @ApiModelProperty(value = "")
  public List<PersonalMeetingRoomAttendees> getAttendees() {
    return attendees;
  }

  public void setAttendees(List<PersonalMeetingRoomAttendees> attendees) {
    this.attendees = attendees;
  }

  public PersonalMeetingRoom isLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
    return this;
  }

   /**
   * If set indicates that this meeting will have a large
   * @return isLargeMeeting
  **/
  @ApiModelProperty(value = "If set indicates that this meeting will have a large")
  public Boolean isIsLargeMeeting() {
    return isLargeMeeting;
  }

  public void setIsLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
  }

   /**
   * This is the date and time (in milliseconds) when the meeting was created.
   * @return created
  **/
  @ApiModelProperty(value = "This is the date and time (in milliseconds) when the meeting was created.")
  public Integer getCreated() {
    return created;
  }

   /**
   * This is the date and time (in milliseconds) when the meeting was last changed.
   * @return lastModified
  **/
  @ApiModelProperty(value = "This is the date and time (in milliseconds) when the meeting was last changed.")
  public Integer getLastModified() {
    return lastModified;
  }

  public PersonalMeetingRoom isExpired(Boolean isExpired) {
    this.isExpired = isExpired;
    return this;
  }

   /**
   * If set indicates that the meeting has expired.
   * @return isExpired
  **/
  @ApiModelProperty(value = "If set indicates that the meeting has expired.")
  public Boolean isIsExpired() {
    return isExpired;
  }

  public void setIsExpired(Boolean isExpired) {
    this.isExpired = isExpired;
  }

  public PersonalMeetingRoom parentMeetingId(Integer parentMeetingId) {
    this.parentMeetingId = parentMeetingId;
    return this;
  }

   /**
   * This is a unique number associated with the first meeting in a series of meetings.
   * @return parentMeetingId
  **/
  @ApiModelProperty(value = "This is a unique number associated with the first meeting in a series of meetings.")
  public Integer getParentMeetingId() {
    return parentMeetingId;
  }

  public void setParentMeetingId(Integer parentMeetingId) {
    this.parentMeetingId = parentMeetingId;
  }

  public PersonalMeetingRoom parentMeetingUUID(String parentMeetingUUID) {
    this.parentMeetingUUID = parentMeetingUUID;
    return this;
  }

   /**
   * This is the guid for the first meeting in a series of meetings.
   * @return parentMeetingUUID
  **/
  @ApiModelProperty(value = "This is the guid for the first meeting in a series of meetings.")
  public String getParentMeetingUUID() {
    return parentMeetingUUID;
  }

  public void setParentMeetingUUID(String parentMeetingUUID) {
    this.parentMeetingUUID = parentMeetingUUID;
  }

  public PersonalMeetingRoom nextOccurrence(Integer nextOccurrence) {
    this.nextOccurrence = nextOccurrence;
    return this;
  }

   /**
   * This is a unique number associated with the next in a chain of meetings.
   * @return nextOccurrence
  **/
  @ApiModelProperty(value = "This is a unique number associated with the next in a chain of meetings.")
  public Integer getNextOccurrence() {
    return nextOccurrence;
  }

  public void setNextOccurrence(Integer nextOccurrence) {
    this.nextOccurrence = nextOccurrence;
  }

  public PersonalMeetingRoom timelessMeeting(Boolean timelessMeeting) {
    this.timelessMeeting = timelessMeeting;
    return this;
  }

   /**
   * This field, if set, indicates that this meeting is continously running.
   * @return timelessMeeting
  **/
  @ApiModelProperty(value = "This field, if set, indicates that this meeting is continously running.")
  public Boolean isTimelessMeeting() {
    return timelessMeeting;
  }

  public void setTimelessMeeting(Boolean timelessMeeting) {
    this.timelessMeeting = timelessMeeting;
  }

  public PersonalMeetingRoom endlessMeeting(Boolean endlessMeeting) {
    this.endlessMeeting = endlessMeeting;
    return this;
  }

   /**
   * This field, if set, indicates that there is no end of recurring meetings.
   * @return endlessMeeting
  **/
  @ApiModelProperty(value = "This field, if set, indicates that there is no end of recurring meetings.")
  public Boolean isEndlessMeeting() {
    return endlessMeeting;
  }

  public void setEndlessMeeting(Boolean endlessMeeting) {
    this.endlessMeeting = endlessMeeting;
  }

  public PersonalMeetingRoom first(PersonalMeetingRoomFirst first) {
    this.first = first;
    return this;
  }

   /**
   * Get first
   * @return first
  **/
  @ApiModelProperty(value = "")
  public PersonalMeetingRoomFirst getFirst() {
    return first;
  }

  public void setFirst(PersonalMeetingRoomFirst first) {
    this.first = first;
  }

  public PersonalMeetingRoom last(PersonalMeetingRoomLast last) {
    this.last = last;
    return this;
  }

   /**
   * Get last
   * @return last
  **/
  @ApiModelProperty(value = "")
  public PersonalMeetingRoomLast getLast() {
    return last;
  }

  public void setLast(PersonalMeetingRoomLast last) {
    this.last = last;
  }

  public PersonalMeetingRoom next(PersonalMeetingRoomNext next) {
    this.next = next;
    return this;
  }

   /**
   * Get next
   * @return next
  **/
  @ApiModelProperty(value = "")
  public PersonalMeetingRoomNext getNext() {
    return next;
  }

  public void setNext(PersonalMeetingRoomNext next) {
    this.next = next;
  }

  public PersonalMeetingRoom nextStart(Integer nextStart) {
    this.nextStart = nextStart;
    return this;
  }

   /**
   * This is the epoch-based starting time for the next in chain of meetings.
   * @return nextStart
  **/
  @ApiModelProperty(value = "This is the epoch-based starting time for the next in chain of meetings.")
  public Integer getNextStart() {
    return nextStart;
  }

  public void setNextStart(Integer nextStart) {
    this.nextStart = nextStart;
  }

  public PersonalMeetingRoom nextEnd(Integer nextEnd) {
    this.nextEnd = nextEnd;
    return this;
  }

   /**
   * This is the epoch-based ending time for the next in chain of meetings.
   * @return nextEnd
  **/
  @ApiModelProperty(value = "This is the epoch-based ending time for the next in chain of meetings.")
  public Integer getNextEnd() {
    return nextEnd;
  }

  public void setNextEnd(Integer nextEnd) {
    this.nextEnd = nextEnd;
  }

  public PersonalMeetingRoom isPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
    return this;
  }

   /**
   * if set, indicates that this ia personal meeting.
   * @return isPersonalMeeting
  **/
  @ApiModelProperty(value = "if set, indicates that this ia personal meeting.")
  public Boolean isIsPersonalMeeting() {
    return isPersonalMeeting;
  }

  public void setIsPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
  }

  public PersonalMeetingRoom inviteeJoinOption(Integer inviteeJoinOption) {
    this.inviteeJoinOption = inviteeJoinOption;
    return this;
  }

   /**
   * How Invitee should join
   * @return inviteeJoinOption
  **/
  @ApiModelProperty(value = "How Invitee should join")
  public Integer getInviteeJoinOption() {
    return inviteeJoinOption;
  }

  public void setInviteeJoinOption(Integer inviteeJoinOption) {
    this.inviteeJoinOption = inviteeJoinOption;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    PersonalMeetingRoom personalMeetingRoom = (PersonalMeetingRoom) o;
    return Objects.equals(this.id, personalMeetingRoom.id) &&
        Objects.equals(this.uuid, personalMeetingRoom.uuid) &&
        Objects.equals(this.title, personalMeetingRoom.title) &&
        Objects.equals(this.description, personalMeetingRoom.description) &&
        Objects.equals(this.start, personalMeetingRoom.start) &&
        Objects.equals(this.end, personalMeetingRoom.end) &&
        Objects.equals(this.timezone, personalMeetingRoom.timezone) &&
        Objects.equals(this.advancedMeetingOptions, personalMeetingRoom.advancedMeetingOptions) &&
        Objects.equals(this.notificationUrl, personalMeetingRoom.notificationUrl) &&
        Objects.equals(this.notificationData, personalMeetingRoom.notificationData) &&
        Objects.equals(this.moderator, personalMeetingRoom.moderator) &&
        Objects.equals(this.numericMeetingId, personalMeetingRoom.numericMeetingId) &&
        Objects.equals(this.attendeePasscode, personalMeetingRoom.attendeePasscode) &&
        Objects.equals(this.addAttendeePasscode, personalMeetingRoom.addAttendeePasscode) &&
        Objects.equals(this.deleted, personalMeetingRoom.deleted) &&
        Objects.equals(this.allow720p, personalMeetingRoom.allow720p) &&
        Objects.equals(this.status, personalMeetingRoom.status) &&
        Objects.equals(this.locked, personalMeetingRoom.locked) &&
        Objects.equals(this.sequenceNumber, personalMeetingRoom.sequenceNumber) &&
        Objects.equals(this.icsUid, personalMeetingRoom.icsUid) &&
        Objects.equals(this.endPointType, personalMeetingRoom.endPointType) &&
        Objects.equals(this.endPointVersion, personalMeetingRoom.endPointVersion) &&
        Objects.equals(this.attendees, personalMeetingRoom.attendees) &&
        Objects.equals(this.isLargeMeeting, personalMeetingRoom.isLargeMeeting) &&
        Objects.equals(this.created, personalMeetingRoom.created) &&
        Objects.equals(this.lastModified, personalMeetingRoom.lastModified) &&
        Objects.equals(this.isExpired, personalMeetingRoom.isExpired) &&
        Objects.equals(this.parentMeetingId, personalMeetingRoom.parentMeetingId) &&
        Objects.equals(this.parentMeetingUUID, personalMeetingRoom.parentMeetingUUID) &&
        Objects.equals(this.nextOccurrence, personalMeetingRoom.nextOccurrence) &&
        Objects.equals(this.timelessMeeting, personalMeetingRoom.timelessMeeting) &&
        Objects.equals(this.endlessMeeting, personalMeetingRoom.endlessMeeting) &&
        Objects.equals(this.first, personalMeetingRoom.first) &&
        Objects.equals(this.last, personalMeetingRoom.last) &&
        Objects.equals(this.next, personalMeetingRoom.next) &&
        Objects.equals(this.nextStart, personalMeetingRoom.nextStart) &&
        Objects.equals(this.nextEnd, personalMeetingRoom.nextEnd) &&
        Objects.equals(this.isPersonalMeeting, personalMeetingRoom.isPersonalMeeting) &&
        Objects.equals(this.inviteeJoinOption, personalMeetingRoom.inviteeJoinOption);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, uuid, title, description, start, end, timezone, advancedMeetingOptions, notificationUrl, notificationData, moderator, numericMeetingId, attendeePasscode, addAttendeePasscode, deleted, allow720p, status, locked, sequenceNumber, icsUid, endPointType, endPointVersion, attendees, isLargeMeeting, created, lastModified, isExpired, parentMeetingId, parentMeetingUUID, nextOccurrence, timelessMeeting, endlessMeeting, first, last, next, nextStart, nextEnd, isPersonalMeeting, inviteeJoinOption);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class PersonalMeetingRoom {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    uuid: ").append(toIndentedString(uuid)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    description: ").append(toIndentedString(description)).append("\n");
    sb.append("    start: ").append(toIndentedString(start)).append("\n");
    sb.append("    end: ").append(toIndentedString(end)).append("\n");
    sb.append("    timezone: ").append(toIndentedString(timezone)).append("\n");
    sb.append("    advancedMeetingOptions: ").append(toIndentedString(advancedMeetingOptions)).append("\n");
    sb.append("    notificationUrl: ").append(toIndentedString(notificationUrl)).append("\n");
    sb.append("    notificationData: ").append(toIndentedString(notificationData)).append("\n");
    sb.append("    moderator: ").append(toIndentedString(moderator)).append("\n");
    sb.append("    numericMeetingId: ").append(toIndentedString(numericMeetingId)).append("\n");
    sb.append("    attendeePasscode: ").append(toIndentedString(attendeePasscode)).append("\n");
    sb.append("    addAttendeePasscode: ").append(toIndentedString(addAttendeePasscode)).append("\n");
    sb.append("    deleted: ").append(toIndentedString(deleted)).append("\n");
    sb.append("    allow720p: ").append(toIndentedString(allow720p)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    locked: ").append(toIndentedString(locked)).append("\n");
    sb.append("    sequenceNumber: ").append(toIndentedString(sequenceNumber)).append("\n");
    sb.append("    icsUid: ").append(toIndentedString(icsUid)).append("\n");
    sb.append("    endPointType: ").append(toIndentedString(endPointType)).append("\n");
    sb.append("    endPointVersion: ").append(toIndentedString(endPointVersion)).append("\n");
    sb.append("    attendees: ").append(toIndentedString(attendees)).append("\n");
    sb.append("    isLargeMeeting: ").append(toIndentedString(isLargeMeeting)).append("\n");
    sb.append("    created: ").append(toIndentedString(created)).append("\n");
    sb.append("    lastModified: ").append(toIndentedString(lastModified)).append("\n");
    sb.append("    isExpired: ").append(toIndentedString(isExpired)).append("\n");
    sb.append("    parentMeetingId: ").append(toIndentedString(parentMeetingId)).append("\n");
    sb.append("    parentMeetingUUID: ").append(toIndentedString(parentMeetingUUID)).append("\n");
    sb.append("    nextOccurrence: ").append(toIndentedString(nextOccurrence)).append("\n");
    sb.append("    timelessMeeting: ").append(toIndentedString(timelessMeeting)).append("\n");
    sb.append("    endlessMeeting: ").append(toIndentedString(endlessMeeting)).append("\n");
    sb.append("    first: ").append(toIndentedString(first)).append("\n");
    sb.append("    last: ").append(toIndentedString(last)).append("\n");
    sb.append("    next: ").append(toIndentedString(next)).append("\n");
    sb.append("    nextStart: ").append(toIndentedString(nextStart)).append("\n");
    sb.append("    nextEnd: ").append(toIndentedString(nextEnd)).append("\n");
    sb.append("    isPersonalMeeting: ").append(toIndentedString(isPersonalMeeting)).append("\n");
    sb.append("    inviteeJoinOption: ").append(toIndentedString(inviteeJoinOption)).append("\n");
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

