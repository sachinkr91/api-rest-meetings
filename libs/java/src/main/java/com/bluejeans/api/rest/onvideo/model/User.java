/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
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
 * User
 */

public class User   {
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

   /**
   * Unique identifier for the user.
   * @return id
  **/
  @ApiModelProperty(example = "null", value = "Unique identifier for the user.")
  public Integer getId() {
    return id;
  }

  public User username(String username) {
    this.username = username;
    return this;
  }

   /**
   * User's username
   * @return username
  **/
  @ApiModelProperty(example = "null", value = "User's username")
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
   * User's first name
   * @return firstName
  **/
  @ApiModelProperty(example = "null", value = "User's first name")
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
   * User's middle name
   * @return middleName
  **/
  @ApiModelProperty(example = "null", value = "User's middle name")
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
   * User's last name
   * @return lastName
  **/
  @ApiModelProperty(example = "null", value = "User's last name")
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
   * User's email address
   * @return emailId
  **/
  @ApiModelProperty(example = "null", value = "User's email address")
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
   * User's company name
   * @return company
  **/
  @ApiModelProperty(example = "null", value = "User's company name")
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
   * User's title
   * @return title
  **/
  @ApiModelProperty(example = "null", value = "User's title")
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
   * User's phone
   * @return phone
  **/
  @ApiModelProperty(example = "null", value = "User's phone")
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
   * Path to user's profile picture
   * @return profilePicture
  **/
  @ApiModelProperty(example = "null", value = "Path to user's profile picture")
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
   * User's timezone
   * @return timezone
  **/
  @ApiModelProperty(example = "null", value = "User's timezone")
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
   * User's preference of 12 or 24 hour time display
   * @return timeFormat
  **/
  @ApiModelProperty(example = "null", value = "User's preference of 12 or 24 hour time display")
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
   * User's language code
   * @return language
  **/
  @ApiModelProperty(example = "null", value = "User's language code")
  public String getLanguage() {
    return language;
  }

  public void setLanguage(String language) {
    this.language = language;
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
        Objects.equals(this.language, user.language);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, username, firstName, middleName, lastName, emailId, company, title, phone, profilePicture, timezone, timeFormat, language);
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

