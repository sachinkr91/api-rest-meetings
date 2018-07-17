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
import com.bluejeans.api.rest.meetings.model.Attendee;
import com.bluejeans.api.rest.meetings.model.MeetingDeprecatedAdvancedMeetingOptions;
import com.bluejeans.api.rest.meetings.model.MeetingRecurrencePattern;
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
 * DEPRECATED (2/5/2018) -- This JSON object contains the fields associated with a BlueJeans&#39;meeting.
 */
@ApiModel(description = "DEPRECATED (2/5/2018) -- This JSON object contains the fields associated with a BlueJeans'meeting.")

public class MeetingDeprecated {
  @SerializedName("id")
  private Integer id = null;

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

  @SerializedName("numericMeetingId")
  private String numericMeetingId = null;

  @SerializedName("attendeePasscode")
  private String attendeePasscode = null;

  @SerializedName("isPersonalMeeting")
  private Boolean isPersonalMeeting = false;

  @SerializedName("isLargeMeeting")
  private Boolean isLargeMeeting = null;

  @SerializedName("addAttendeePasscode")
  private Boolean addAttendeePasscode = null;

  @SerializedName("endPointVersion")
  private String endPointVersion = "2.10";

  @SerializedName("endPointType")
  private String endPointType = "WEB_APP";

  @SerializedName("attendees")
  private List<Attendee> attendees = null;

  @SerializedName("advancedMeetingOptions")
  private MeetingDeprecatedAdvancedMeetingOptions advancedMeetingOptions = null;

  @SerializedName("recurrencePattern")
  private MeetingRecurrencePattern recurrencePattern = null;

   /**
   * Unique identifier for meeting.
   * @return id
  **/
  @ApiModelProperty(value = "Unique identifier for meeting.")
  public Integer getId() {
    return id;
  }

  public MeetingDeprecated title(String title) {
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

  public MeetingDeprecated description(String description) {
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

  public MeetingDeprecated start(Integer start) {
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

  public MeetingDeprecated end(Integer end) {
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

  public MeetingDeprecated timezone(String timezone) {
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

  public MeetingDeprecated isPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
    return this;
  }

   /**
   * Use the scheduler&#39;s personal meeting room and Id for this meeting.
   * @return isPersonalMeeting
  **/
  @ApiModelProperty(value = "Use the scheduler's personal meeting room and Id for this meeting.")
  public Boolean getIsPersonalMeeting() {
    return isPersonalMeeting;
  }

  public void setIsPersonalMeeting(Boolean isPersonalMeeting) {
    this.isPersonalMeeting = isPersonalMeeting;
  }

  public MeetingDeprecated isLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
    return this;
  }

   /**
   * If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
   * @return isLargeMeeting
  **/
  @ApiModelProperty(value = "If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.")
  public Boolean getIsLargeMeeting() {
    return isLargeMeeting;
  }

  public void setIsLargeMeeting(Boolean isLargeMeeting) {
    this.isLargeMeeting = isLargeMeeting;
  }

  public MeetingDeprecated addAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
    return this;
  }

   /**
   * Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
   * @return addAttendeePasscode
  **/
  @ApiModelProperty(value = "Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.")
  public Boolean getAddAttendeePasscode() {
    return addAttendeePasscode;
  }

  public void setAddAttendeePasscode(Boolean addAttendeePasscode) {
    this.addAttendeePasscode = addAttendeePasscode;
  }

  public MeetingDeprecated endPointVersion(String endPointVersion) {
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

  public MeetingDeprecated endPointType(String endPointType) {
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

  public MeetingDeprecated attendees(List<Attendee> attendees) {
    this.attendees = attendees;
    return this;
  }

  public MeetingDeprecated addAttendeesItem(Attendee attendeesItem) {
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

  public MeetingDeprecated advancedMeetingOptions(MeetingDeprecatedAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
    return this;
  }

   /**
   * Get advancedMeetingOptions
   * @return advancedMeetingOptions
  **/
  @ApiModelProperty(value = "")
  public MeetingDeprecatedAdvancedMeetingOptions getAdvancedMeetingOptions() {
    return advancedMeetingOptions;
  }

  public void setAdvancedMeetingOptions(MeetingDeprecatedAdvancedMeetingOptions advancedMeetingOptions) {
    this.advancedMeetingOptions = advancedMeetingOptions;
  }

  public MeetingDeprecated recurrencePattern(MeetingRecurrencePattern recurrencePattern) {
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


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingDeprecated meetingDeprecated = (MeetingDeprecated) o;
    return Objects.equals(this.id, meetingDeprecated.id) &&
        Objects.equals(this.title, meetingDeprecated.title) &&
        Objects.equals(this.description, meetingDeprecated.description) &&
        Objects.equals(this.start, meetingDeprecated.start) &&
        Objects.equals(this.end, meetingDeprecated.end) &&
        Objects.equals(this.timezone, meetingDeprecated.timezone) &&
        Objects.equals(this.numericMeetingId, meetingDeprecated.numericMeetingId) &&
        Objects.equals(this.attendeePasscode, meetingDeprecated.attendeePasscode) &&
        Objects.equals(this.isPersonalMeeting, meetingDeprecated.isPersonalMeeting) &&
        Objects.equals(this.isLargeMeeting, meetingDeprecated.isLargeMeeting) &&
        Objects.equals(this.addAttendeePasscode, meetingDeprecated.addAttendeePasscode) &&
        Objects.equals(this.endPointVersion, meetingDeprecated.endPointVersion) &&
        Objects.equals(this.endPointType, meetingDeprecated.endPointType) &&
        Objects.equals(this.attendees, meetingDeprecated.attendees) &&
        Objects.equals(this.advancedMeetingOptions, meetingDeprecated.advancedMeetingOptions) &&
        Objects.equals(this.recurrencePattern, meetingDeprecated.recurrencePattern);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, title, description, start, end, timezone, numericMeetingId, attendeePasscode, isPersonalMeeting, isLargeMeeting, addAttendeePasscode, endPointVersion, endPointType, attendees, advancedMeetingOptions, recurrencePattern);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingDeprecated {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    description: ").append(toIndentedString(description)).append("\n");
    sb.append("    start: ").append(toIndentedString(start)).append("\n");
    sb.append("    end: ").append(toIndentedString(end)).append("\n");
    sb.append("    timezone: ").append(toIndentedString(timezone)).append("\n");
    sb.append("    numericMeetingId: ").append(toIndentedString(numericMeetingId)).append("\n");
    sb.append("    attendeePasscode: ").append(toIndentedString(attendeePasscode)).append("\n");
    sb.append("    isPersonalMeeting: ").append(toIndentedString(isPersonalMeeting)).append("\n");
    sb.append("    isLargeMeeting: ").append(toIndentedString(isLargeMeeting)).append("\n");
    sb.append("    addAttendeePasscode: ").append(toIndentedString(addAttendeePasscode)).append("\n");
    sb.append("    endPointVersion: ").append(toIndentedString(endPointVersion)).append("\n");
    sb.append("    endPointType: ").append(toIndentedString(endPointType)).append("\n");
    sb.append("    attendees: ").append(toIndentedString(attendees)).append("\n");
    sb.append("    advancedMeetingOptions: ").append(toIndentedString(advancedMeetingOptions)).append("\n");
    sb.append("    recurrencePattern: ").append(toIndentedString(recurrencePattern)).append("\n");
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

