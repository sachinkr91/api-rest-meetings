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
import com.bluejeans.api.rest.meetings.model.Attendee;
import com.bluejeans.api.rest.meetings.model.MeetingAdvancedMeetingOptions;
import com.bluejeans.api.rest.meetings.model.MeetingModerator;
import com.bluejeans.api.rest.meetings.model.MeetingRecurrencePattern;
import com.bluejeans.api.rest.meetings.model.StartEnd;
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
 * 2/5/2018 -- JSON object containing the  fields describing a BlueJeans meeting. Includes recurring meeting fields.
 */
@ApiModel(description = "2/5/2018 -- JSON object containing the  fields describing a BlueJeans meeting. Includes recurring meeting fields.")

public class Meeting {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("uuid")
  private String uuid = null;

  @SerializedName("title")
  private String title = "My Test Meeting";

  @SerializedName("description")
  private String description = null;

  @SerializedName("start")
  private Integer start = null;

  @SerializedName("end")
  private Integer end = null;

  @SerializedName("timezone")
  private String timezone = "America/New_York";

  @SerializedName("advancedMeetingOptions")
  private MeetingAdvancedMeetingOptions advancedMeetingOptions = null;

  @SerializedName("notificationUrl")
  private String notificationUrl = null;

  @SerializedName("notificationData")
  private String notificationData = null;

  @SerializedName("moderator")
  private MeetingModerator moderator = null;

  @SerializedName("numericMeetingId")
  private String numericMeetingId = null;

  @SerializedName("attendeePasscode")
  private String attendeePasscode = null;

  @SerializedName("addAttendeePasscode")
  private Boolean addAttendeePasscode = null;

  @SerializedName("delete")
  private Boolean delete = null;

  @SerializedName("allow720p")
  private Boolean allow720p = null;

  @SerializedName("status")
  private String status = null;

  @SerializedName("locked")
  private Boolean locked = null;

  @SerializedName("seqeuenceNumber")
  private Integer seqeuenceNumber = null;

  @SerializedName("icsUid")
  private String icsUid = null;

  @SerializedName("endPointType")
  private String endPointType = "WEB_APP";

  @SerializedName("endPointVersion")
  private String endPointVersion = "2.10";

  @SerializedName("attendees")
  private List<Attendee> attendees = null;

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
  private String nextOccurrence = null;

  @SerializedName("timelessMeeting")
  private Boolean timelessMeeting = null;

  @SerializedName("endlessMeeting")
  private Boolean endlessMeeting = null;

  @SerializedName("recurrencePattern")
  private MeetingRecurrencePattern recurrencePattern = null;

  @SerializedName("first")
  private StartEnd first = null;

  @SerializedName("last")
  private StartEnd last = null;

  @SerializedName("next")
  private StartEnd next = null;

  @SerializedName("nextStart")
  private Integer nextStart = null;

  @SerializedName("nextEnd")
  private Integer nextEnd = null;

  @SerializedName("isPersonalMeeting")
  private Boolean isPersonalMeeting = false;

  @SerializedName("inviteeJoinOption")
  private Integer inviteeJoinOption = null;

   /**
   * Unique identifier for meeting.
   * @return id
  **/
  @ApiModelProperty(value = "Unique identifier for meeting.")
  public Integer getId() {
    return id;
  }

  public Meeting uuid(String uuid) {
    this.uuid = uuid;
    return this;
  }

   /**
   * Get uuid
   * @return uuid
  **/
  @ApiModelProperty(value = "")
  public String getUuid() {
    return uuid;
  }

  public void setUuid(String uuid) {
    this.uuid = uuid;
  }

  public Meeting title(String title) {
    this.title = title;
    return this;
  }

   /**
   * Get title
   * @return title
  **/
  @ApiModelProperty(required = true, value = "")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public Meeting description(String description) {
    this.description = description;
    return this;
  }

   /**
   * Get description
   * @return description
  **/
  @ApiModelProperty(value = "")
  public String getDescription() {
    return description;
  }

  public void setDescription(String description) {
    this.description = description;
  }

  public Meeting start(Integer start) {
    this.start = start;
    return this;
  }

   /**
   * A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @return start
  **/
  @ApiModelProperty(required = true, value = "A [UNIX Timestamp](https://currentmillis.com/) in milliseconds")
  public Integer getStart() {
    return start;
  }

  public void setStart(Integer start) {
    this.start = start;
  }

  public Meeting end(Integer end) {
    this.end = end;
    return this;
  }

   /**
   * A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
   * @return end
  **/
  @ApiModelProperty(required = true, value = "A [UNIX Timestamp](https://currentmillis.com/) in milliseconds")
  public Integer getEnd() {
    return end;
  }

  public void setEnd(Integer end) {
    this.end = end;
  }

  public Meeting timezone(String timezone) {
    this.timezone = timezone;
    return this;
  }

   /**
   * Get timezone
   * @return timezone
  **/
  @ApiModelProperty(value = "")
  public String getTimezone() {
    return timezone;
  }

  public void setTimezone(String timezone) {
    this.timezone = timezone;
  }

  public Meeting advancedMeetingOptions(MeetingAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
    return this;
  }

   /**
   * Get advancedMeetingOptions
   * @return advancedMeetingOptions
  **/
  @ApiModelProperty(value = "")
  public MeetingAdvancedMeetingOptions getAdvancedMeetingOptions() {
    return advancedMeetingOptions;
  }

  public void setAdvancedMeetingOptions(MeetingAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
  }

  public Meeting notificationUrl(String notificationUrl) {
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

  public Meeting notificationData(String notificationData) {
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

  public Meeting moderator(MeetingModerator moderator) {
    this.moderator = moderator;
    return this;
  }

   /**
   * Get moderator
   * @return moderator
  **/
  @ApiModelProperty(value = "")
  public MeetingModerator getModerator() {
    return moderator;
  }

  public void setModerator(MeetingModerator moderator) {
    this.moderator = moderator;
  }

   /**
   * The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
   * @return numericMeetingId
  **/
  @ApiModelProperty(value = "The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.")
  public String getNumericMeetingId() {
    return numericMeetingId;
  }

   /**
   * Get attendeePasscode
   * @return attendeePasscode
  **/
  @ApiModelProperty(value = "")
  public String getAttendeePasscode() {
    return attendeePasscode;
  }

  public Meeting addAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
    return this;
  }

   /**
   * Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
   * @return addAttendeePasscode
  **/
  @ApiModelProperty(value = "Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.")
  public Boolean isAddAttendeePasscode() {
    return addAttendeePasscode;
  }

  public void setAddAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
  }

  public Meeting delete(Boolean delete) {
    this.delete = delete;
    return this;
  }

   /**
   * Get delete
   * @return delete
  **/
  @ApiModelProperty(value = "")
  public Boolean isDelete() {
    return delete;
  }

  public void setDelete(Boolean delete) {
    this.delete = delete;
  }

  public Meeting allow720p(Boolean allow720p) {
    this.allow720p = allow720p;
    return this;
  }

   /**
   * Get allow720p
   * @return allow720p
  **/
  @ApiModelProperty(value = "")
  public Boolean isAllow720p() {
    return allow720p;
  }

  public void setAllow720p(Boolean allow720p) {
    this.allow720p = allow720p;
  }

  public Meeting status(String status) {
    this.status = status;
    return this;
  }

   /**
   * Get status
   * @return status
  **/
  @ApiModelProperty(value = "")
  public String getStatus() {
    return status;
  }

  public void setStatus(String status) {
    this.status = status;
  }

  public Meeting locked(Boolean locked) {
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

  public Meeting seqeuenceNumber(Integer seqeuenceNumber) {
    this.seqeuenceNumber = seqeuenceNumber;
    return this;
  }

   /**
   * Get seqeuenceNumber
   * @return seqeuenceNumber
  **/
  @ApiModelProperty(value = "")
  public Integer getSeqeuenceNumber() {
    return seqeuenceNumber;
  }

  public void setSeqeuenceNumber(Integer seqeuenceNumber) {
    this.seqeuenceNumber = seqeuenceNumber;
  }

  public Meeting icsUid(String icsUid) {
    this.icsUid = icsUid;
    return this;
  }

   /**
   * Get icsUid
   * @return icsUid
  **/
  @ApiModelProperty(value = "")
  public String getIcsUid() {
    return icsUid;
  }

  public void setIcsUid(String icsUid) {
    this.icsUid = icsUid;
  }

  public Meeting endPointType(String endPointType) {
    this.endPointType = endPointType;
    return this;
  }

   /**
   * Get endPointType
   * @return endPointType
  **/
  @ApiModelProperty(required = true, value = "")
  public String getEndPointType() {
    return endPointType;
  }

  public void setEndPointType(String endPointType) {
    this.endPointType = endPointType;
  }

  public Meeting endPointVersion(String endPointVersion) {
    this.endPointVersion = endPointVersion;
    return this;
  }

   /**
   * Get endPointVersion
   * @return endPointVersion
  **/
  @ApiModelProperty(required = true, value = "")
  public String getEndPointVersion() {
    return endPointVersion;
  }

  public void setEndPointVersion(String endPointVersion) {
    this.endPointVersion = endPointVersion;
  }

  public Meeting attendees(List<Attendee> attendees) {
    this.attendees = attendees;
    return this;
  }

  public Meeting addAttendeesItem(Attendee attendeesItem) {
    if (this.attendees == null) {
      this.attendees = new ArrayList<Attendee>();
    }
    this.attendees.add(attendeesItem);
    return this;
  }

   /**
   * Get attendees
   * @return attendees
  **/
  @ApiModelProperty(value = "")
  public List<Attendee> getAttendees() {
    return attendees;
  }

  public void setAttendees(List<Attendee> attendees) {
    this.attendees = attendees;
  }

  public Meeting isLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
    return this;
  }

   /**
   * If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
   * @return isLargeMeeting
  **/
  @ApiModelProperty(value = "If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.")
  public Boolean isIsLargeMeeting() {
    return isLargeMeeting;
  }

  public void setIsLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
  }

  public Meeting created(Integer created) {
    this.created = created;
    return this;
  }

   /**
   * This is the epoch-based time (in milliseconds) when the meeting was initially created.
   * @return created
  **/
  @ApiModelProperty(value = "This is the epoch-based time (in milliseconds) when the meeting was initially created.")
  public Integer getCreated() {
    return created;
  }

  public void setCreated(Integer created) {
    this.created = created;
  }

  public Meeting lastModified(Integer lastModified) {
    this.lastModified = lastModified;
    return this;
  }

   /**
   * This is the epoch-based time (in milliseconds) when the meeting was last changed.
   * @return lastModified
  **/
  @ApiModelProperty(value = "This is the epoch-based time (in milliseconds) when the meeting was last changed.")
  public Integer getLastModified() {
    return lastModified;
  }

  public void setLastModified(Integer lastModified) {
    this.lastModified = lastModified;
  }

  public Meeting isExpired(Boolean isExpired) {
    this.isExpired = isExpired;
    return this;
  }

   /**
   * Get isExpired
   * @return isExpired
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsExpired() {
    return isExpired;
  }

  public void setIsExpired(Boolean isExpired) {
    this.isExpired = isExpired;
  }

  public Meeting parentMeetingId(Integer parentMeetingId) {
    this.parentMeetingId = parentMeetingId;
    return this;
  }

   /**
   * This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.
   * @return parentMeetingId
  **/
  @ApiModelProperty(value = "This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.")
  public Integer getParentMeetingId() {
    return parentMeetingId;
  }

  public void setParentMeetingId(Integer parentMeetingId) {
    this.parentMeetingId = parentMeetingId;
  }

  public Meeting parentMeetingUUID(String parentMeetingUUID) {
    this.parentMeetingUUID = parentMeetingUUID;
    return this;
  }

   /**
   * Get parentMeetingUUID
   * @return parentMeetingUUID
  **/
  @ApiModelProperty(value = "")
  public String getParentMeetingUUID() {
    return parentMeetingUUID;
  }

  public void setParentMeetingUUID(String parentMeetingUUID) {
    this.parentMeetingUUID = parentMeetingUUID;
  }

  public Meeting nextOccurrence(String nextOccurrence) {
    this.nextOccurrence = nextOccurrence;
    return this;
  }

   /**
   * Get nextOccurrence
   * @return nextOccurrence
  **/
  @ApiModelProperty(value = "")
  public String getNextOccurrence() {
    return nextOccurrence;
  }

  public void setNextOccurrence(String nextOccurrence) {
    this.nextOccurrence = nextOccurrence;
  }

  public Meeting timelessMeeting(Boolean timelessMeeting) {
    this.timelessMeeting = timelessMeeting;
    return this;
  }

   /**
   * Get timelessMeeting
   * @return timelessMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean isTimelessMeeting() {
    return timelessMeeting;
  }

  public void setTimelessMeeting(Boolean timelessMeeting) {
    this.timelessMeeting = timelessMeeting;
  }

  public Meeting endlessMeeting(Boolean endlessMeeting) {
    this.endlessMeeting = endlessMeeting;
    return this;
  }

   /**
   * Get endlessMeeting
   * @return endlessMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean isEndlessMeeting() {
    return endlessMeeting;
  }

  public void setEndlessMeeting(Boolean endlessMeeting) {
    this.endlessMeeting = endlessMeeting;
  }

  public Meeting recurrencePattern(MeetingRecurrencePattern recurrencePattern) {
    this.recurrencePattern = recurrencePattern;
    return this;
  }

   /**
   * Get recurrencePattern
   * @return recurrencePattern
  **/
  @ApiModelProperty(value = "")
  public MeetingRecurrencePattern getRecurrencePattern() {
    return recurrencePattern;
  }

  public void setRecurrencePattern(MeetingRecurrencePattern recurrencePattern) {
    this.recurrencePattern = recurrencePattern;
  }

  public Meeting first(StartEnd first) {
    this.first = first;
    return this;
  }

   /**
   * Starting and ending times of the first meeting in a chain of recurring meetings.
   * @return first
  **/
  @ApiModelProperty(value = "Starting and ending times of the first meeting in a chain of recurring meetings.")
  public StartEnd getFirst() {
    return first;
  }

  public void setFirst(StartEnd first) {
    this.first = first;
  }

  public Meeting last(StartEnd last) {
    this.last = last;
    return this;
  }

   /**
   * Starting and ending times of the last meeting in a chain of recurring meetings.
   * @return last
  **/
  @ApiModelProperty(value = "Starting and ending times of the last meeting in a chain of recurring meetings.")
  public StartEnd getLast() {
    return last;
  }

  public void setLast(StartEnd last) {
    this.last = last;
  }

  public Meeting next(StartEnd next) {
    this.next = next;
    return this;
  }

   /**
   * Starting and ending times of the next meeting in a chain of recurring meetings.
   * @return next
  **/
  @ApiModelProperty(value = "Starting and ending times of the next meeting in a chain of recurring meetings.")
  public StartEnd getNext() {
    return next;
  }

  public void setNext(StartEnd next) {
    this.next = next;
  }

  public Meeting nextStart(Integer nextStart) {
    this.nextStart = nextStart;
    return this;
  }

   /**
   * Get nextStart
   * @return nextStart
  **/
  @ApiModelProperty(value = "")
  public Integer getNextStart() {
    return nextStart;
  }

  public void setNextStart(Integer nextStart) {
    this.nextStart = nextStart;
  }

  public Meeting nextEnd(Integer nextEnd) {
    this.nextEnd = nextEnd;
    return this;
  }

   /**
   * Get nextEnd
   * @return nextEnd
  **/
  @ApiModelProperty(value = "")
  public Integer getNextEnd() {
    return nextEnd;
  }

  public void setNextEnd(Integer nextEnd) {
    this.nextEnd = nextEnd;
  }

  public Meeting isPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
    return this;
  }

   /**
   * Use the scheduler&#39;s personal meeting room and Id for this meeting.
   * @return isPersonalMeeting
  **/
  @ApiModelProperty(value = "Use the scheduler's personal meeting room and Id for this meeting.")
  public Boolean isIsPersonalMeeting() {
    return isPersonalMeeting;
  }

  public void setIsPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
  }

  public Meeting inviteeJoinOption(Integer inviteeJoinOption) {
    this.inviteeJoinOption = inviteeJoinOption;
    return this;
  }

   /**
   * Get inviteeJoinOption
   * @return inviteeJoinOption
  **/
  @ApiModelProperty(value = "")
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
    Meeting meeting = (Meeting) o;
    return Objects.equals(this.id, meeting.id) &&
        Objects.equals(this.uuid, meeting.uuid) &&
        Objects.equals(this.title, meeting.title) &&
        Objects.equals(this.description, meeting.description) &&
        Objects.equals(this.start, meeting.start) &&
        Objects.equals(this.end, meeting.end) &&
        Objects.equals(this.timezone, meeting.timezone) &&
        Objects.equals(this.advancedMeetingOptions, meeting.advancedMeetingOptions) &&
        Objects.equals(this.notificationUrl, meeting.notificationUrl) &&
        Objects.equals(this.notificationData, meeting.notificationData) &&
        Objects.equals(this.moderator, meeting.moderator) &&
        Objects.equals(this.numericMeetingId, meeting.numericMeetingId) &&
        Objects.equals(this.attendeePasscode, meeting.attendeePasscode) &&
        Objects.equals(this.addAttendeePasscode, meeting.addAttendeePasscode) &&
        Objects.equals(this.delete, meeting.delete) &&
        Objects.equals(this.allow720p, meeting.allow720p) &&
        Objects.equals(this.status, meeting.status) &&
        Objects.equals(this.locked, meeting.locked) &&
        Objects.equals(this.seqeuenceNumber, meeting.seqeuenceNumber) &&
        Objects.equals(this.icsUid, meeting.icsUid) &&
        Objects.equals(this.endPointType, meeting.endPointType) &&
        Objects.equals(this.endPointVersion, meeting.endPointVersion) &&
        Objects.equals(this.attendees, meeting.attendees) &&
        Objects.equals(this.isLargeMeeting, meeting.isLargeMeeting) &&
        Objects.equals(this.created, meeting.created) &&
        Objects.equals(this.lastModified, meeting.lastModified) &&
        Objects.equals(this.isExpired, meeting.isExpired) &&
        Objects.equals(this.parentMeetingId, meeting.parentMeetingId) &&
        Objects.equals(this.parentMeetingUUID, meeting.parentMeetingUUID) &&
        Objects.equals(this.nextOccurrence, meeting.nextOccurrence) &&
        Objects.equals(this.timelessMeeting, meeting.timelessMeeting) &&
        Objects.equals(this.endlessMeeting, meeting.endlessMeeting) &&
        Objects.equals(this.recurrencePattern, meeting.recurrencePattern) &&
        Objects.equals(this.first, meeting.first) &&
        Objects.equals(this.last, meeting.last) &&
        Objects.equals(this.next, meeting.next) &&
        Objects.equals(this.nextStart, meeting.nextStart) &&
        Objects.equals(this.nextEnd, meeting.nextEnd) &&
        Objects.equals(this.isPersonalMeeting, meeting.isPersonalMeeting) &&
        Objects.equals(this.inviteeJoinOption, meeting.inviteeJoinOption);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, uuid, title, description, start, end, timezone, advancedMeetingOptions, notificationUrl, notificationData, moderator, numericMeetingId, attendeePasscode, addAttendeePasscode, delete, allow720p, status, locked, seqeuenceNumber, icsUid, endPointType, endPointVersion, attendees, isLargeMeeting, created, lastModified, isExpired, parentMeetingId, parentMeetingUUID, nextOccurrence, timelessMeeting, endlessMeeting, recurrencePattern, first, last, next, nextStart, nextEnd, isPersonalMeeting, inviteeJoinOption);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Meeting {\n");
    
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
    sb.append("    delete: ").append(toIndentedString(delete)).append("\n");
    sb.append("    allow720p: ").append(toIndentedString(allow720p)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    locked: ").append(toIndentedString(locked)).append("\n");
    sb.append("    seqeuenceNumber: ").append(toIndentedString(seqeuenceNumber)).append("\n");
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
    sb.append("    recurrencePattern: ").append(toIndentedString(recurrencePattern)).append("\n");
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

