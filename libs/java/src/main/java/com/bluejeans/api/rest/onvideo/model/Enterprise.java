/**
 * BlueJeans onVideo REST API
 *  Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you should be able to quickly integrate **BlueJeans** video administration into your applications.   ## Getting Started Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact [BlueJeans Support](mailto:Support@BlueJeans.com) for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br /> ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. ## About onVideo Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. 
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
 * Enterprise
 */

public class Enterprise   {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("enterprise")
  private Integer enterprise = null;

  @SerializedName("enterpriseAdmin")
  private Boolean enterpriseAdmin = null;

  @SerializedName("joinDate")
  private Integer joinDate = null;

  @SerializedName("expiryDate")
  private Integer expiryDate = null;

   /**
   * Unique identifier for the user.
   * @return id
  **/
  @ApiModelProperty(example = "null", value = "Unique identifier for the user.")
  public Integer getId() {
    return id;
  }

   /**
   * Unique identifier for the enterprise.
   * @return enterprise
  **/
  @ApiModelProperty(example = "null", value = "Unique identifier for the enterprise.")
  public Integer getEnterprise() {
    return enterprise;
  }

  public Enterprise enterpriseAdmin(Boolean enterpriseAdmin) {
    this.enterpriseAdmin = enterpriseAdmin;
    return this;
  }

   /**
   * Is this user an administrator for this enterprise?
   * @return enterpriseAdmin
  **/
  @ApiModelProperty(example = "null", value = "Is this user an administrator for this enterprise?")
  public Boolean getEnterpriseAdmin() {
    return enterpriseAdmin;
  }

  public void setEnterpriseAdmin(Boolean enterpriseAdmin) {
    this.enterpriseAdmin = enterpriseAdmin;
  }

  public Enterprise joinDate(Integer joinDate) {
    this.joinDate = joinDate;
    return this;
  }

   /**
   * Date of enterprise join
   * @return joinDate
  **/
  @ApiModelProperty(example = "null", value = "Date of enterprise join")
  public Integer getJoinDate() {
    return joinDate;
  }

  public void setJoinDate(Integer joinDate) {
    this.joinDate = joinDate;
  }

  public Enterprise expiryDate(Integer expiryDate) {
    this.expiryDate = expiryDate;
    return this;
  }

   /**
   * Date of expiration; null if not set
   * @return expiryDate
  **/
  @ApiModelProperty(example = "null", value = "Date of expiration; null if not set")
  public Integer getExpiryDate() {
    return expiryDate;
  }

  public void setExpiryDate(Integer expiryDate) {
    this.expiryDate = expiryDate;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Enterprise enterprise = (Enterprise) o;
    return Objects.equals(this.id, enterprise.id) &&
        Objects.equals(this.enterprise, enterprise.enterprise) &&
        Objects.equals(this.enterpriseAdmin, enterprise.enterpriseAdmin) &&
        Objects.equals(this.joinDate, enterprise.joinDate) &&
        Objects.equals(this.expiryDate, enterprise.expiryDate);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, enterprise, enterpriseAdmin, joinDate, expiryDate);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Enterprise {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    enterprise: ").append(toIndentedString(enterprise)).append("\n");
    sb.append("    enterpriseAdmin: ").append(toIndentedString(enterpriseAdmin)).append("\n");
    sb.append("    joinDate: ").append(toIndentedString(joinDate)).append("\n");
    sb.append("    expiryDate: ").append(toIndentedString(expiryDate)).append("\n");
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

