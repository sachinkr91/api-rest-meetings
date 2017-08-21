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
 * PayloadPairingCodeSIP
 */

public class PayloadPairingCodeSIP   {
  @SerializedName("endpointType")
  private Integer endpointType = null;

  @SerializedName("userId")
  private Integer userId = null;

  /**
   * Optional language code
   */
  public enum LanguageCodeEnum {
    @SerializedName("en")
    EN("en"),
    
    @SerializedName("en-us")
    EN_US("en-us"),
    
    @SerializedName("en-gb")
    EN_GB("en-gb"),
    
    @SerializedName("de")
    DE("de");

    private String value;

    LanguageCodeEnum(String value) {
      this.value = value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }
  }

  @SerializedName("languageCode")
  private LanguageCodeEnum languageCode = LanguageCodeEnum.EN;

  @SerializedName("endpointName")
  private String endpointName = "My Test Endpoint";

  public PayloadPairingCodeSIP endpointType(Integer endpointType) {
    this.endpointType = endpointType;
    return this;
  }

   /**
   * 1:GENERIC 2:LYNC 3:JABBER 4:BluejeansBrowser 5:BluejeansMobile
   * @return endpointType
  **/
  @ApiModelProperty(example = "null", required = true, value = "1:GENERIC 2:LYNC 3:JABBER 4:BluejeansBrowser 5:BluejeansMobile")
  public Integer getEndpointType() {
    return endpointType;
  }

  public void setEndpointType(Integer endpointType) {
    this.endpointType = endpointType;
  }

  public PayloadPairingCodeSIP userId(Integer userId) {
    this.userId = userId;
    return this;
  }

   /**
   * Optional database id of user associated with endpoint
   * @return userId
  **/
  @ApiModelProperty(example = "null", value = "Optional database id of user associated with endpoint")
  public Integer getUserId() {
    return userId;
  }

  public void setUserId(Integer userId) {
    this.userId = userId;
  }

  public PayloadPairingCodeSIP languageCode(LanguageCodeEnum languageCode) {
    this.languageCode = languageCode;
    return this;
  }

   /**
   * Optional language code
   * @return languageCode
  **/
  @ApiModelProperty(example = "null", value = "Optional language code")
  public LanguageCodeEnum getLanguageCode() {
    return languageCode;
  }

  public void setLanguageCode(LanguageCodeEnum languageCode) {
    this.languageCode = languageCode;
  }

  public PayloadPairingCodeSIP endpointName(String endpointName) {
    this.endpointName = endpointName;
    return this;
  }

   /**
   * Optional name of endpoint
   * @return endpointName
  **/
  @ApiModelProperty(example = "null", value = "Optional name of endpoint")
  public String getEndpointName() {
    return endpointName;
  }

  public void setEndpointName(String endpointName) {
    this.endpointName = endpointName;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    PayloadPairingCodeSIP payloadPairingCodeSIP = (PayloadPairingCodeSIP) o;
    return Objects.equals(this.endpointType, payloadPairingCodeSIP.endpointType) &&
        Objects.equals(this.userId, payloadPairingCodeSIP.userId) &&
        Objects.equals(this.languageCode, payloadPairingCodeSIP.languageCode) &&
        Objects.equals(this.endpointName, payloadPairingCodeSIP.endpointName);
  }

  @Override
  public int hashCode() {
    return Objects.hash(endpointType, userId, languageCode, endpointName);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class PayloadPairingCodeSIP {\n");
    
    sb.append("    endpointType: ").append(toIndentedString(endpointType)).append("\n");
    sb.append("    userId: ").append(toIndentedString(userId)).append("\n");
    sb.append("    languageCode: ").append(toIndentedString(languageCode)).append("\n");
    sb.append("    endpointName: ").append(toIndentedString(endpointName)).append("\n");
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

