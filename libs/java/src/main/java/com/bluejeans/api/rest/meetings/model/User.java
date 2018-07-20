/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.4407102018
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
 * 2/5/2018 -- JSON object containing the BlueJeans&#39; user profile fields
 */
@ApiModel(description = "2/5/2018 -- JSON object containing the BlueJeans' user profile fields")

public class User {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("username")
  private String username = null;

  @SerializedName("firstName")
  private String firstName = null;

  @SerializedName("middleName")
  private String middleName = null;

  @SerializedName("lastName")
  private String lastName = null;

  @SerializedName("emailId")
  private String emailId = null;

  @SerializedName("company")
  private String company = null;

  @SerializedName("title")
  private String title = null;

  @SerializedName("phone")
  private String phone = null;

  @SerializedName("profilePicture")
  private String profilePicture = null;

  @SerializedName("timezone")
  private String timezone = null;

  @SerializedName("timeFormat")
  private Integer timeFormat = null;

  @SerializedName("language")
  private String language = null;

  @SerializedName("skypeId")
  private String skypeId = null;

  @SerializedName("gtalkId")
  private String gtalkId = null;

  @SerializedName("defaultEndpoint")
  private String defaultEndpoint = null;

  @SerializedName("passwordChangeRequired")
  private Boolean passwordChangeRequired = null;

  @SerializedName("marketoId")
  private String marketoId = null;

  @SerializedName("optOutOffers")
  private Boolean optOutOffers = null;

  @SerializedName("optOutNews")
  private Boolean optOutNews = null;

  @SerializedName("geoInfo")
  private String geoInfo = null;

  @SerializedName("howDidYouHear")
  private String howDidYouHear = null;

  @SerializedName("sfdcToken")
  private String sfdcToken = null;

  @SerializedName("linkedinProfileUrl")
  private String linkedinProfileUrl = null;

  @SerializedName("lastLogin")
  private Integer lastLogin = null;

  @SerializedName("dateJoined")
  private Integer dateJoined = null;

  @SerializedName("jid")
  private String jid = null;

  @SerializedName("primaryPhone")
  private String primaryPhone = null;

  @SerializedName("failedLoginCount")
  private Integer failedLoginCount = null;

  @SerializedName("isInitialSetupDone")
  private Boolean isInitialSetupDone = null;

  @SerializedName("channel_id")
  private Integer channelId = null;

  @SerializedName("isVerified")
  private Boolean isVerified = null;

   /**
   * Unique identifier for the user.
   * @return id
  **/
  @ApiModelProperty(value = "Unique identifier for the user.")
  public Integer getId() {
    return id;
  }

  public User username(String username) {
    this.username = username;
    return this;
  }

   /**
   * User&#39;s username
   * @return username
  **/
  @ApiModelProperty(value = "User's username")
  public String getUsername() {
    return username;
  }

  public void setUsername(String username) {
    this.username = username;
  }

  public User firstName(String firstName) {
    this.firstName = firstName;
    return this;
  }

   /**
   * User&#39;s first name
   * @return firstName
  **/
  @ApiModelProperty(value = "User's first name")
  public String getFirstName() {
    return firstName;
  }

  public void setFirstName(String firstName) {
    this.firstName = firstName;
  }

  public User middleName(String middleName) {
    this.middleName = middleName;
    return this;
  }

   /**
   * User&#39;s middle name
   * @return middleName
  **/
  @ApiModelProperty(value = "User's middle name")
  public String getMiddleName() {
    return middleName;
  }

  public void setMiddleName(String middleName) {
    this.middleName = middleName;
  }

  public User lastName(String lastName) {
    this.lastName = lastName;
    return this;
  }

   /**
   * User&#39;s last name
   * @return lastName
  **/
  @ApiModelProperty(value = "User's last name")
  public String getLastName() {
    return lastName;
  }

  public void setLastName(String lastName) {
    this.lastName = lastName;
  }

  public User emailId(String emailId) {
    this.emailId = emailId;
    return this;
  }

   /**
   * User&#39;s email address
   * @return emailId
  **/
  @ApiModelProperty(value = "User's email address")
  public String getEmailId() {
    return emailId;
  }

  public void setEmailId(String emailId) {
    this.emailId = emailId;
  }

  public User company(String company) {
    this.company = company;
    return this;
  }

   /**
   * User&#39;s company name
   * @return company
  **/
  @ApiModelProperty(value = "User's company name")
  public String getCompany() {
    return company;
  }

  public void setCompany(String company) {
    this.company = company;
  }

  public User title(String title) {
    this.title = title;
    return this;
  }

   /**
   * User&#39;s title
   * @return title
  **/
  @ApiModelProperty(value = "User's title")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public User phone(String phone) {
    this.phone = phone;
    return this;
  }

   /**
   * User&#39;s phone
   * @return phone
  **/
  @ApiModelProperty(value = "User's phone")
  public String getPhone() {
    return phone;
  }

  public void setPhone(String phone) {
    this.phone = phone;
  }

  public User profilePicture(String profilePicture) {
    this.profilePicture = profilePicture;
    return this;
  }

   /**
   * Path to user&#39;s profile picture
   * @return profilePicture
  **/
  @ApiModelProperty(value = "Path to user's profile picture")
  public String getProfilePicture() {
    return profilePicture;
  }

  public void setProfilePicture(String profilePicture) {
    this.profilePicture = profilePicture;
  }

  public User timezone(String timezone) {
    this.timezone = timezone;
    return this;
  }

   /**
   * User&#39;s timezone
   * @return timezone
  **/
  @ApiModelProperty(value = "User's timezone")
  public String getTimezone() {
    return timezone;
  }

  public void setTimezone(String timezone) {
    this.timezone = timezone;
  }

  public User timeFormat(Integer timeFormat) {
    this.timeFormat = timeFormat;
    return this;
  }

   /**
   * User&#39;s preference of 12 or 24 hour time display
   * @return timeFormat
  **/
  @ApiModelProperty(value = "User's preference of 12 or 24 hour time display")
  public Integer getTimeFormat() {
    return timeFormat;
  }

  public void setTimeFormat(Integer timeFormat) {
    this.timeFormat = timeFormat;
  }

  public User language(String language) {
    this.language = language;
    return this;
  }

   /**
   * User&#39;s language code, e.g., \&quot;en\&quot;
   * @return language
  **/
  @ApiModelProperty(value = "User's language code, e.g., \"en\"")
  public String getLanguage() {
    return language;
  }

  public void setLanguage(String language) {
    this.language = language;
  }

  public User skypeId(String skypeId) {
    this.skypeId = skypeId;
    return this;
  }

   /**
   * User&#39;s skype account identifier
   * @return skypeId
  **/
  @ApiModelProperty(value = "User's skype account identifier")
  public String getSkypeId() {
    return skypeId;
  }

  public void setSkypeId(String skypeId) {
    this.skypeId = skypeId;
  }

  public User gtalkId(String gtalkId) {
    this.gtalkId = gtalkId;
    return this;
  }

   /**
   * User&#39;s Google Talk account identified
   * @return gtalkId
  **/
  @ApiModelProperty(value = "User's Google Talk account identified")
  public String getGtalkId() {
    return gtalkId;
  }

  public void setGtalkId(String gtalkId) {
    this.gtalkId = gtalkId;
  }

  public User defaultEndpoint(String defaultEndpoint) {
    this.defaultEndpoint = defaultEndpoint;
    return this;
  }

   /**
   * Default type of client user attends meetings
   * @return defaultEndpoint
  **/
  @ApiModelProperty(value = "Default type of client user attends meetings")
  public String getDefaultEndpoint() {
    return defaultEndpoint;
  }

  public void setDefaultEndpoint(String defaultEndpoint) {
    this.defaultEndpoint = defaultEndpoint;
  }

  public User passwordChangeRequired(Boolean passwordChangeRequired) {
    this.passwordChangeRequired = passwordChangeRequired;
    return this;
  }

   /**
   * Force user to change their password on next login
   * @return passwordChangeRequired
  **/
  @ApiModelProperty(value = "Force user to change their password on next login")
  public Boolean getPasswordChangeRequired() {
    return passwordChangeRequired;
  }

  public void setPasswordChangeRequired(Boolean passwordChangeRequired) {
    this.passwordChangeRequired = passwordChangeRequired;
  }

  public User marketoId(String marketoId) {
    this.marketoId = marketoId;
    return this;
  }

   /**
   * User&#39;s Marketo Account identifier
   * @return marketoId
  **/
  @ApiModelProperty(value = "User's Marketo Account identifier")
  public String getMarketoId() {
    return marketoId;
  }

  public void setMarketoId(String marketoId) {
    this.marketoId = marketoId;
  }

  public User optOutOffers(Boolean optOutOffers) {
    this.optOutOffers = optOutOffers;
    return this;
  }

   /**
   * null
   * @return optOutOffers
  **/
  @ApiModelProperty(value = "null")
  public Boolean getOptOutOffers() {
    return optOutOffers;
  }

  public void setOptOutOffers(Boolean optOutOffers) {
    this.optOutOffers = optOutOffers;
  }

  public User optOutNews(Boolean optOutNews) {
    this.optOutNews = optOutNews;
    return this;
  }

   /**
   * Get optOutNews
   * @return optOutNews
  **/
  @ApiModelProperty(value = "")
  public Boolean getOptOutNews() {
    return optOutNews;
  }

  public void setOptOutNews(Boolean optOutNews) {
    this.optOutNews = optOutNews;
  }

  public User geoInfo(String geoInfo) {
    this.geoInfo = geoInfo;
    return this;
  }

   /**
   * JSON string containing User&#39;s geographic information including city,state,postal code, country (abbrev, i.e., \&quot;US\&quot;),time zone, country name (i.e.,\&quot;United States\&quot;), ISP, latitude, and longitude
   * @return geoInfo
  **/
  @ApiModelProperty(value = "JSON string containing User's geographic information including city,state,postal code, country (abbrev, i.e., \"US\"),time zone, country name (i.e.,\"United States\"), ISP, latitude, and longitude")
  public String getGeoInfo() {
    return geoInfo;
  }

  public void setGeoInfo(String geoInfo) {
    this.geoInfo = geoInfo;
  }

  public User howDidYouHear(String howDidYouHear) {
    this.howDidYouHear = howDidYouHear;
    return this;
  }

   /**
   * null
   * @return howDidYouHear
  **/
  @ApiModelProperty(value = "null")
  public String getHowDidYouHear() {
    return howDidYouHear;
  }

  public void setHowDidYouHear(String howDidYouHear) {
    this.howDidYouHear = howDidYouHear;
  }

  public User sfdcToken(String sfdcToken) {
    this.sfdcToken = sfdcToken;
    return this;
  }

   /**
   * OAuth token used for Salesforce integration
   * @return sfdcToken
  **/
  @ApiModelProperty(value = "OAuth token used for Salesforce integration")
  public String getSfdcToken() {
    return sfdcToken;
  }

  public void setSfdcToken(String sfdcToken) {
    this.sfdcToken = sfdcToken;
  }

  public User linkedinProfileUrl(String linkedinProfileUrl) {
    this.linkedinProfileUrl = linkedinProfileUrl;
    return this;
  }

   /**
   * hyperlink to User&#39;s LinkedIn profile
   * @return linkedinProfileUrl
  **/
  @ApiModelProperty(value = "hyperlink to User's LinkedIn profile")
  public String getLinkedinProfileUrl() {
    return linkedinProfileUrl;
  }

  public void setLinkedinProfileUrl(String linkedinProfileUrl) {
    this.linkedinProfileUrl = linkedinProfileUrl;
  }

  public User lastLogin(Integer lastLogin) {
    this.lastLogin = lastLogin;
    return this;
  }

   /**
   * Date and time (in milliseconds) of the User&#39;s last login
   * @return lastLogin
  **/
  @ApiModelProperty(value = "Date and time (in milliseconds) of the User's last login")
  public Integer getLastLogin() {
    return lastLogin;
  }

  public void setLastLogin(Integer lastLogin) {
    this.lastLogin = lastLogin;
  }

  public User dateJoined(Integer dateJoined) {
    this.dateJoined = dateJoined;
    return this;
  }

   /**
   * Date and time when BlueJeans account was created
   * @return dateJoined
  **/
  @ApiModelProperty(value = "Date and time when BlueJeans account was created")
  public Integer getDateJoined() {
    return dateJoined;
  }

  public void setDateJoined(Integer dateJoined) {
    this.dateJoined = dateJoined;
  }

  public User jid(String jid) {
    this.jid = jid;
    return this;
  }

   /**
   * User&#39;s Jabber Account Identifier
   * @return jid
  **/
  @ApiModelProperty(value = "User's Jabber Account Identifier")
  public String getJid() {
    return jid;
  }

  public void setJid(String jid) {
    this.jid = jid;
  }

  public User primaryPhone(String primaryPhone) {
    this.primaryPhone = primaryPhone;
    return this;
  }

   /**
   * User&#39;s phone number
   * @return primaryPhone
  **/
  @ApiModelProperty(value = "User's phone number")
  public String getPrimaryPhone() {
    return primaryPhone;
  }

  public void setPrimaryPhone(String primaryPhone) {
    this.primaryPhone = primaryPhone;
  }

  public User failedLoginCount(Integer failedLoginCount) {
    this.failedLoginCount = failedLoginCount;
    return this;
  }

   /**
   * Count of how many times a user tried to enter their account password
   * @return failedLoginCount
  **/
  @ApiModelProperty(value = "Count of how many times a user tried to enter their account password")
  public Integer getFailedLoginCount() {
    return failedLoginCount;
  }

  public void setFailedLoginCount(Integer failedLoginCount) {
    this.failedLoginCount = failedLoginCount;
  }

  public User isInitialSetupDone(Boolean isInitialSetupDone) {
    this.isInitialSetupDone = isInitialSetupDone;
    return this;
  }

   /**
   * Get isInitialSetupDone
   * @return isInitialSetupDone
  **/
  @ApiModelProperty(value = "")
  public Boolean getIsInitialSetupDone() {
    return isInitialSetupDone;
  }

  public void setIsInitialSetupDone(Boolean isInitialSetupDone) {
    this.isInitialSetupDone = isInitialSetupDone;
  }

  public User channelId(Integer channelId) {
    this.channelId = channelId;
    return this;
  }

   /**
   * Get channelId
   * @return channelId
  **/
  @ApiModelProperty(value = "")
  public Integer getChannelId() {
    return channelId;
  }

  public void setChannelId(Integer channelId) {
    this.channelId = channelId;
  }

  public User isVerified(Boolean isVerified) {
    this.isVerified = isVerified;
    return this;
  }

   /**
   * BlueJeans has validated authenticity of the account owner
   * @return isVerified
  **/
  @ApiModelProperty(value = "BlueJeans has validated authenticity of the account owner")
  public Boolean getIsVerified() {
    return isVerified;
  }

  public void setIsVerified(Boolean isVerified) {
    this.isVerified = isVerified;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    User user = (User) o;
    return Objects.equals(this.id, user.id) &&
        Objects.equals(this.username, user.username) &&
        Objects.equals(this.firstName, user.firstName) &&
        Objects.equals(this.middleName, user.middleName) &&
        Objects.equals(this.lastName, user.lastName) &&
        Objects.equals(this.emailId, user.emailId) &&
        Objects.equals(this.company, user.company) &&
        Objects.equals(this.title, user.title) &&
        Objects.equals(this.phone, user.phone) &&
        Objects.equals(this.profilePicture, user.profilePicture) &&
        Objects.equals(this.timezone, user.timezone) &&
        Objects.equals(this.timeFormat, user.timeFormat) &&
        Objects.equals(this.language, user.language) &&
        Objects.equals(this.skypeId, user.skypeId) &&
        Objects.equals(this.gtalkId, user.gtalkId) &&
        Objects.equals(this.defaultEndpoint, user.defaultEndpoint) &&
        Objects.equals(this.passwordChangeRequired, user.passwordChangeRequired) &&
        Objects.equals(this.marketoId, user.marketoId) &&
        Objects.equals(this.optOutOffers, user.optOutOffers) &&
        Objects.equals(this.optOutNews, user.optOutNews) &&
        Objects.equals(this.geoInfo, user.geoInfo) &&
        Objects.equals(this.howDidYouHear, user.howDidYouHear) &&
        Objects.equals(this.sfdcToken, user.sfdcToken) &&
        Objects.equals(this.linkedinProfileUrl, user.linkedinProfileUrl) &&
        Objects.equals(this.lastLogin, user.lastLogin) &&
        Objects.equals(this.dateJoined, user.dateJoined) &&
        Objects.equals(this.jid, user.jid) &&
        Objects.equals(this.primaryPhone, user.primaryPhone) &&
        Objects.equals(this.failedLoginCount, user.failedLoginCount) &&
        Objects.equals(this.isInitialSetupDone, user.isInitialSetupDone) &&
        Objects.equals(this.channelId, user.channelId) &&
        Objects.equals(this.isVerified, user.isVerified);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, username, firstName, middleName, lastName, emailId, company, title, phone, profilePicture, timezone, timeFormat, language, skypeId, gtalkId, defaultEndpoint, passwordChangeRequired, marketoId, optOutOffers, optOutNews, geoInfo, howDidYouHear, sfdcToken, linkedinProfileUrl, lastLogin, dateJoined, jid, primaryPhone, failedLoginCount, isInitialSetupDone, channelId, isVerified);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class User {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    username: ").append(toIndentedString(username)).append("\n");
    sb.append("    firstName: ").append(toIndentedString(firstName)).append("\n");
    sb.append("    middleName: ").append(toIndentedString(middleName)).append("\n");
    sb.append("    lastName: ").append(toIndentedString(lastName)).append("\n");
    sb.append("    emailId: ").append(toIndentedString(emailId)).append("\n");
    sb.append("    company: ").append(toIndentedString(company)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    phone: ").append(toIndentedString(phone)).append("\n");
    sb.append("    profilePicture: ").append(toIndentedString(profilePicture)).append("\n");
    sb.append("    timezone: ").append(toIndentedString(timezone)).append("\n");
    sb.append("    timeFormat: ").append(toIndentedString(timeFormat)).append("\n");
    sb.append("    language: ").append(toIndentedString(language)).append("\n");
    sb.append("    skypeId: ").append(toIndentedString(skypeId)).append("\n");
    sb.append("    gtalkId: ").append(toIndentedString(gtalkId)).append("\n");
    sb.append("    defaultEndpoint: ").append(toIndentedString(defaultEndpoint)).append("\n");
    sb.append("    passwordChangeRequired: ").append(toIndentedString(passwordChangeRequired)).append("\n");
    sb.append("    marketoId: ").append(toIndentedString(marketoId)).append("\n");
    sb.append("    optOutOffers: ").append(toIndentedString(optOutOffers)).append("\n");
    sb.append("    optOutNews: ").append(toIndentedString(optOutNews)).append("\n");
    sb.append("    geoInfo: ").append(toIndentedString(geoInfo)).append("\n");
    sb.append("    howDidYouHear: ").append(toIndentedString(howDidYouHear)).append("\n");
    sb.append("    sfdcToken: ").append(toIndentedString(sfdcToken)).append("\n");
    sb.append("    linkedinProfileUrl: ").append(toIndentedString(linkedinProfileUrl)).append("\n");
    sb.append("    lastLogin: ").append(toIndentedString(lastLogin)).append("\n");
    sb.append("    dateJoined: ").append(toIndentedString(dateJoined)).append("\n");
    sb.append("    jid: ").append(toIndentedString(jid)).append("\n");
    sb.append("    primaryPhone: ").append(toIndentedString(primaryPhone)).append("\n");
    sb.append("    failedLoginCount: ").append(toIndentedString(failedLoginCount)).append("\n");
    sb.append("    isInitialSetupDone: ").append(toIndentedString(isInitialSetupDone)).append("\n");
    sb.append("    channelId: ").append(toIndentedString(channelId)).append("\n");
    sb.append("    isVerified: ").append(toIndentedString(isVerified)).append("\n");
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

