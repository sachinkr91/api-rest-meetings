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
 * AnalyticsEndpointDistributionDistribution
 */

public class AnalyticsEndpointDistributionDistribution {
  @SerializedName("Google")
  private Integer google = null;

  @SerializedName("Telepresence")
  private Integer telepresence = null;

  @SerializedName("Lync")
  private Integer lync = null;

  @SerializedName("iOS")
  private Integer iOS = null;

  @SerializedName("H323")
  private Integer h323 = null;

  @SerializedName("InterCall")
  private Integer interCall = null;

  @SerializedName("Jabber")
  private Integer jabber = null;

  @SerializedName("Android")
  private Integer android = null;

  @SerializedName("Skype")
  private Integer skype = null;

  @SerializedName("ISDN")
  private Integer ISDN = null;

  @SerializedName("PSTN")
  private Integer PSTN = null;

  @SerializedName("Level3")
  private Integer level3 = null;

  @SerializedName("SIP")
  private Integer SIP = null;

  @SerializedName("BlueJeansApp")
  private Integer blueJeansApp = null;

  @SerializedName("Browser")
  private Integer browser = null;

  @SerializedName("WebRTC")
  private Integer webRTC = null;

  public AnalyticsEndpointDistributionDistribution google(Integer google) {
    this.google = google;
    return this;
  }

   /**
   * Get google
   * @return google
  **/
  @ApiModelProperty(value = "")
  public Integer getGoogle() {
    return google;
  }

  public void setGoogle(Integer google) {
    this.google = google;
  }

  public AnalyticsEndpointDistributionDistribution telepresence(Integer telepresence) {
    this.telepresence = telepresence;
    return this;
  }

   /**
   * Get telepresence
   * @return telepresence
  **/
  @ApiModelProperty(value = "")
  public Integer getTelepresence() {
    return telepresence;
  }

  public void setTelepresence(Integer telepresence) {
    this.telepresence = telepresence;
  }

  public AnalyticsEndpointDistributionDistribution lync(Integer lync) {
    this.lync = lync;
    return this;
  }

   /**
   * Get lync
   * @return lync
  **/
  @ApiModelProperty(value = "")
  public Integer getLync() {
    return lync;
  }

  public void setLync(Integer lync) {
    this.lync = lync;
  }

  public AnalyticsEndpointDistributionDistribution iOS(Integer iOS) {
    this.iOS = iOS;
    return this;
  }

   /**
   * Get iOS
   * @return iOS
  **/
  @ApiModelProperty(value = "")
  public Integer getIOS() {
    return iOS;
  }

  public void setIOS(Integer iOS) {
    this.iOS = iOS;
  }

  public AnalyticsEndpointDistributionDistribution h323(Integer h323) {
    this.h323 = h323;
    return this;
  }

   /**
   * Get h323
   * @return h323
  **/
  @ApiModelProperty(value = "")
  public Integer getH323() {
    return h323;
  }

  public void setH323(Integer h323) {
    this.h323 = h323;
  }

  public AnalyticsEndpointDistributionDistribution interCall(Integer interCall) {
    this.interCall = interCall;
    return this;
  }

   /**
   * Get interCall
   * @return interCall
  **/
  @ApiModelProperty(value = "")
  public Integer getInterCall() {
    return interCall;
  }

  public void setInterCall(Integer interCall) {
    this.interCall = interCall;
  }

  public AnalyticsEndpointDistributionDistribution jabber(Integer jabber) {
    this.jabber = jabber;
    return this;
  }

   /**
   * Get jabber
   * @return jabber
  **/
  @ApiModelProperty(value = "")
  public Integer getJabber() {
    return jabber;
  }

  public void setJabber(Integer jabber) {
    this.jabber = jabber;
  }

  public AnalyticsEndpointDistributionDistribution android(Integer android) {
    this.android = android;
    return this;
  }

   /**
   * Get android
   * @return android
  **/
  @ApiModelProperty(value = "")
  public Integer getAndroid() {
    return android;
  }

  public void setAndroid(Integer android) {
    this.android = android;
  }

  public AnalyticsEndpointDistributionDistribution skype(Integer skype) {
    this.skype = skype;
    return this;
  }

   /**
   * Get skype
   * @return skype
  **/
  @ApiModelProperty(value = "")
  public Integer getSkype() {
    return skype;
  }

  public void setSkype(Integer skype) {
    this.skype = skype;
  }

  public AnalyticsEndpointDistributionDistribution ISDN(Integer ISDN) {
    this.ISDN = ISDN;
    return this;
  }

   /**
   * Get ISDN
   * @return ISDN
  **/
  @ApiModelProperty(value = "")
  public Integer getISDN() {
    return ISDN;
  }

  public void setISDN(Integer ISDN) {
    this.ISDN = ISDN;
  }

  public AnalyticsEndpointDistributionDistribution PSTN(Integer PSTN) {
    this.PSTN = PSTN;
    return this;
  }

   /**
   * Get PSTN
   * @return PSTN
  **/
  @ApiModelProperty(value = "")
  public Integer getPSTN() {
    return PSTN;
  }

  public void setPSTN(Integer PSTN) {
    this.PSTN = PSTN;
  }

  public AnalyticsEndpointDistributionDistribution level3(Integer level3) {
    this.level3 = level3;
    return this;
  }

   /**
   * Get level3
   * @return level3
  **/
  @ApiModelProperty(value = "")
  public Integer getLevel3() {
    return level3;
  }

  public void setLevel3(Integer level3) {
    this.level3 = level3;
  }

  public AnalyticsEndpointDistributionDistribution SIP(Integer SIP) {
    this.SIP = SIP;
    return this;
  }

   /**
   * Get SIP
   * @return SIP
  **/
  @ApiModelProperty(value = "")
  public Integer getSIP() {
    return SIP;
  }

  public void setSIP(Integer SIP) {
    this.SIP = SIP;
  }

  public AnalyticsEndpointDistributionDistribution blueJeansApp(Integer blueJeansApp) {
    this.blueJeansApp = blueJeansApp;
    return this;
  }

   /**
   * Get blueJeansApp
   * @return blueJeansApp
  **/
  @ApiModelProperty(value = "")
  public Integer getBlueJeansApp() {
    return blueJeansApp;
  }

  public void setBlueJeansApp(Integer blueJeansApp) {
    this.blueJeansApp = blueJeansApp;
  }

  public AnalyticsEndpointDistributionDistribution browser(Integer browser) {
    this.browser = browser;
    return this;
  }

   /**
   * Get browser
   * @return browser
  **/
  @ApiModelProperty(value = "")
  public Integer getBrowser() {
    return browser;
  }

  public void setBrowser(Integer browser) {
    this.browser = browser;
  }

  public AnalyticsEndpointDistributionDistribution webRTC(Integer webRTC) {
    this.webRTC = webRTC;
    return this;
  }

   /**
   * Get webRTC
   * @return webRTC
  **/
  @ApiModelProperty(value = "")
  public Integer getWebRTC() {
    return webRTC;
  }

  public void setWebRTC(Integer webRTC) {
    this.webRTC = webRTC;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    AnalyticsEndpointDistributionDistribution analyticsEndpointDistributionDistribution = (AnalyticsEndpointDistributionDistribution) o;
    return Objects.equals(this.google, analyticsEndpointDistributionDistribution.google) &&
        Objects.equals(this.telepresence, analyticsEndpointDistributionDistribution.telepresence) &&
        Objects.equals(this.lync, analyticsEndpointDistributionDistribution.lync) &&
        Objects.equals(this.iOS, analyticsEndpointDistributionDistribution.iOS) &&
        Objects.equals(this.h323, analyticsEndpointDistributionDistribution.h323) &&
        Objects.equals(this.interCall, analyticsEndpointDistributionDistribution.interCall) &&
        Objects.equals(this.jabber, analyticsEndpointDistributionDistribution.jabber) &&
        Objects.equals(this.android, analyticsEndpointDistributionDistribution.android) &&
        Objects.equals(this.skype, analyticsEndpointDistributionDistribution.skype) &&
        Objects.equals(this.ISDN, analyticsEndpointDistributionDistribution.ISDN) &&
        Objects.equals(this.PSTN, analyticsEndpointDistributionDistribution.PSTN) &&
        Objects.equals(this.level3, analyticsEndpointDistributionDistribution.level3) &&
        Objects.equals(this.SIP, analyticsEndpointDistributionDistribution.SIP) &&
        Objects.equals(this.blueJeansApp, analyticsEndpointDistributionDistribution.blueJeansApp) &&
        Objects.equals(this.browser, analyticsEndpointDistributionDistribution.browser) &&
        Objects.equals(this.webRTC, analyticsEndpointDistributionDistribution.webRTC);
  }

  @Override
  public int hashCode() {
    return Objects.hash(google, telepresence, lync, iOS, h323, interCall, jabber, android, skype, ISDN, PSTN, level3, SIP, blueJeansApp, browser, webRTC);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class AnalyticsEndpointDistributionDistribution {\n");
    
    sb.append("    google: ").append(toIndentedString(google)).append("\n");
    sb.append("    telepresence: ").append(toIndentedString(telepresence)).append("\n");
    sb.append("    lync: ").append(toIndentedString(lync)).append("\n");
    sb.append("    iOS: ").append(toIndentedString(iOS)).append("\n");
    sb.append("    h323: ").append(toIndentedString(h323)).append("\n");
    sb.append("    interCall: ").append(toIndentedString(interCall)).append("\n");
    sb.append("    jabber: ").append(toIndentedString(jabber)).append("\n");
    sb.append("    android: ").append(toIndentedString(android)).append("\n");
    sb.append("    skype: ").append(toIndentedString(skype)).append("\n");
    sb.append("    ISDN: ").append(toIndentedString(ISDN)).append("\n");
    sb.append("    PSTN: ").append(toIndentedString(PSTN)).append("\n");
    sb.append("    level3: ").append(toIndentedString(level3)).append("\n");
    sb.append("    SIP: ").append(toIndentedString(SIP)).append("\n");
    sb.append("    blueJeansApp: ").append(toIndentedString(blueJeansApp)).append("\n");
    sb.append("    browser: ").append(toIndentedString(browser)).append("\n");
    sb.append("    webRTC: ").append(toIndentedString(webRTC)).append("\n");
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

