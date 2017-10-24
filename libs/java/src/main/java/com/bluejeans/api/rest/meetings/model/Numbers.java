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
import com.bluejeans.api.rest.meetings.model.NumbersNumbers;
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
 * Numbers
 */

public class Numbers {
  @SerializedName("meetingId")
  private String meetingId = null;

  @SerializedName("allowDirectDial")
  private Boolean allowDirectDial = null;

  @SerializedName("useAttendeePasscode")
  private Boolean useAttendeePasscode = null;

  @SerializedName("pstnNumbersUrl")
  private String pstnNumbersUrl = null;

  @SerializedName("moderatorPasscode")
  private String moderatorPasscode = null;

  @SerializedName("precision")
  private String precision = null;

  @SerializedName("pstnLocalizationSupported")
  private Boolean pstnLocalizationSupported = null;

  @SerializedName("partnerIntegratedMeeting")
  private Boolean partnerIntegratedMeeting = null;

  @SerializedName("numbers")
  private List<NumbersNumbers> numbers = null;

  public Numbers meetingId(String meetingId) {
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

  public Numbers allowDirectDial(Boolean allowDirectDial) {
    this.allowDirectDial = allowDirectDial;
    return this;
  }

   /**
   * Get allowDirectDial
   * @return allowDirectDial
  **/
  @ApiModelProperty(value = "")
  public Boolean getAllowDirectDial() {
    return allowDirectDial;
  }

  public void setAllowDirectDial(Boolean allowDirectDial) {
    this.allowDirectDial = allowDirectDial;
  }

  public Numbers useAttendeePasscode(Boolean useAttendeePasscode) {
    this.useAttendeePasscode = useAttendeePasscode;
    return this;
  }

   /**
   * Get useAttendeePasscode
   * @return useAttendeePasscode
  **/
  @ApiModelProperty(value = "")
  public Boolean getUseAttendeePasscode() {
    return useAttendeePasscode;
  }

  public void setUseAttendeePasscode(Boolean useAttendeePasscode) {
    this.useAttendeePasscode = useAttendeePasscode;
  }

  public Numbers pstnNumbersUrl(String pstnNumbersUrl) {
    this.pstnNumbersUrl = pstnNumbersUrl;
    return this;
  }

   /**
   * Get pstnNumbersUrl
   * @return pstnNumbersUrl
  **/
  @ApiModelProperty(value = "")
  public String getPstnNumbersUrl() {
    return pstnNumbersUrl;
  }

  public void setPstnNumbersUrl(String pstnNumbersUrl) {
    this.pstnNumbersUrl = pstnNumbersUrl;
  }

  public Numbers moderatorPasscode(String moderatorPasscode) {
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

  public Numbers precision(String precision) {
    this.precision = precision;
    return this;
  }

   /**
   * Get precision
   * @return precision
  **/
  @ApiModelProperty(value = "")
  public String getPrecision() {
    return precision;
  }

  public void setPrecision(String precision) {
    this.precision = precision;
  }

  public Numbers pstnLocalizationSupported(Boolean pstnLocalizationSupported) {
    this.pstnLocalizationSupported = pstnLocalizationSupported;
    return this;
  }

   /**
   * Get pstnLocalizationSupported
   * @return pstnLocalizationSupported
  **/
  @ApiModelProperty(value = "")
  public Boolean getPstnLocalizationSupported() {
    return pstnLocalizationSupported;
  }

  public void setPstnLocalizationSupported(Boolean pstnLocalizationSupported) {
    this.pstnLocalizationSupported = pstnLocalizationSupported;
  }

  public Numbers partnerIntegratedMeeting(Boolean partnerIntegratedMeeting) {
    this.partnerIntegratedMeeting = partnerIntegratedMeeting;
    return this;
  }

   /**
   * Get partnerIntegratedMeeting
   * @return partnerIntegratedMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean getPartnerIntegratedMeeting() {
    return partnerIntegratedMeeting;
  }

  public void setPartnerIntegratedMeeting(Boolean partnerIntegratedMeeting) {
    this.partnerIntegratedMeeting = partnerIntegratedMeeting;
  }

  public Numbers numbers(List<NumbersNumbers> numbers) {
    this.numbers = numbers;
    return this;
  }

  public Numbers addNumbersItem(NumbersNumbers numbersItem) {
    if (this.numbers == null) {
      this.numbers = new ArrayList<NumbersNumbers>();
    }
    this.numbers.add(numbersItem);
    return this;
  }

   /**
   * Get numbers
   * @return numbers
  **/
  @ApiModelProperty(value = "")
  public List<NumbersNumbers> getNumbers() {
    return numbers;
  }

  public void setNumbers(List<NumbersNumbers> numbers) {
    this.numbers = numbers;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Numbers numbers = (Numbers) o;
    return Objects.equals(this.meetingId, numbers.meetingId) &&
        Objects.equals(this.allowDirectDial, numbers.allowDirectDial) &&
        Objects.equals(this.useAttendeePasscode, numbers.useAttendeePasscode) &&
        Objects.equals(this.pstnNumbersUrl, numbers.pstnNumbersUrl) &&
        Objects.equals(this.moderatorPasscode, numbers.moderatorPasscode) &&
        Objects.equals(this.precision, numbers.precision) &&
        Objects.equals(this.pstnLocalizationSupported, numbers.pstnLocalizationSupported) &&
        Objects.equals(this.partnerIntegratedMeeting, numbers.partnerIntegratedMeeting) &&
        Objects.equals(this.numbers, numbers.numbers);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingId, allowDirectDial, useAttendeePasscode, pstnNumbersUrl, moderatorPasscode, precision, pstnLocalizationSupported, partnerIntegratedMeeting, numbers);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Numbers {\n");
    
    sb.append("    meetingId: ").append(toIndentedString(meetingId)).append("\n");
    sb.append("    allowDirectDial: ").append(toIndentedString(allowDirectDial)).append("\n");
    sb.append("    useAttendeePasscode: ").append(toIndentedString(useAttendeePasscode)).append("\n");
    sb.append("    pstnNumbersUrl: ").append(toIndentedString(pstnNumbersUrl)).append("\n");
    sb.append("    moderatorPasscode: ").append(toIndentedString(moderatorPasscode)).append("\n");
    sb.append("    precision: ").append(toIndentedString(precision)).append("\n");
    sb.append("    pstnLocalizationSupported: ").append(toIndentedString(pstnLocalizationSupported)).append("\n");
    sb.append("    partnerIntegratedMeeting: ").append(toIndentedString(partnerIntegratedMeeting)).append("\n");
    sb.append("    numbers: ").append(toIndentedString(numbers)).append("\n");
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

