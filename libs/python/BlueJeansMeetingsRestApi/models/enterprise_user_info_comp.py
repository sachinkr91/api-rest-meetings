# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.4407102018
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class EnterpriseUserInfoComp(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'id': 'int',
        'username': 'str',
        'email': 'str',
        'first_name': 'str',
        'middle_name': 'str',
        'last_name': 'str',
        'enterprise_join_date': 'int',
        'is_enterprise_admin': 'bool',
        'uri': 'str'
    }

    attribute_map = {
        'id': 'id',
        'username': 'username',
        'email': 'email',
        'first_name': 'firstName',
        'middle_name': 'middleName',
        'last_name': 'lastName',
        'enterprise_join_date': 'enterpriseJoinDate',
        'is_enterprise_admin': 'isEnterpriseAdmin',
        'uri': 'uri'
    }

    def __init__(self, id=None, username=None, email=None, first_name=None, middle_name=None, last_name=None, enterprise_join_date=None, is_enterprise_admin=None, uri=None):
        """
        EnterpriseUserInfoComp - a model defined in Swagger
        """

        self._id = None
        self._username = None
        self._email = None
        self._first_name = None
        self._middle_name = None
        self._last_name = None
        self._enterprise_join_date = None
        self._is_enterprise_admin = None
        self._uri = None

        if id is not None:
          self.id = id
        if username is not None:
          self.username = username
        if email is not None:
          self.email = email
        if first_name is not None:
          self.first_name = first_name
        if middle_name is not None:
          self.middle_name = middle_name
        if last_name is not None:
          self.last_name = last_name
        if enterprise_join_date is not None:
          self.enterprise_join_date = enterprise_join_date
        if is_enterprise_admin is not None:
          self.is_enterprise_admin = is_enterprise_admin
        if uri is not None:
          self.uri = uri

    @property
    def id(self):
        """
        Gets the id of this EnterpriseUserInfoComp.
        Unique enteprise account identifier

        :return: The id of this EnterpriseUserInfoComp.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this EnterpriseUserInfoComp.
        Unique enteprise account identifier

        :param id: The id of this EnterpriseUserInfoComp.
        :type: int
        """

        self._id = id

    @property
    def username(self):
        """
        Gets the username of this EnterpriseUserInfoComp.
        Name of user's account

        :return: The username of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._username

    @username.setter
    def username(self, username):
        """
        Sets the username of this EnterpriseUserInfoComp.
        Name of user's account

        :param username: The username of this EnterpriseUserInfoComp.
        :type: str
        """

        self._username = username

    @property
    def email(self):
        """
        Gets the email of this EnterpriseUserInfoComp.
        Email associated with this enterprise account.

        :return: The email of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._email

    @email.setter
    def email(self, email):
        """
        Sets the email of this EnterpriseUserInfoComp.
        Email associated with this enterprise account.

        :param email: The email of this EnterpriseUserInfoComp.
        :type: str
        """

        self._email = email

    @property
    def first_name(self):
        """
        Gets the first_name of this EnterpriseUserInfoComp.
        User's first (Given) name

        :return: The first_name of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._first_name

    @first_name.setter
    def first_name(self, first_name):
        """
        Sets the first_name of this EnterpriseUserInfoComp.
        User's first (Given) name

        :param first_name: The first_name of this EnterpriseUserInfoComp.
        :type: str
        """

        self._first_name = first_name

    @property
    def middle_name(self):
        """
        Gets the middle_name of this EnterpriseUserInfoComp.
        User's middle name

        :return: The middle_name of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._middle_name

    @middle_name.setter
    def middle_name(self, middle_name):
        """
        Sets the middle_name of this EnterpriseUserInfoComp.
        User's middle name

        :param middle_name: The middle_name of this EnterpriseUserInfoComp.
        :type: str
        """

        self._middle_name = middle_name

    @property
    def last_name(self):
        """
        Gets the last_name of this EnterpriseUserInfoComp.
        User's last (Family) name

        :return: The last_name of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._last_name

    @last_name.setter
    def last_name(self, last_name):
        """
        Sets the last_name of this EnterpriseUserInfoComp.
        User's last (Family) name

        :param last_name: The last_name of this EnterpriseUserInfoComp.
        :type: str
        """

        self._last_name = last_name

    @property
    def enterprise_join_date(self):
        """
        Gets the enterprise_join_date of this EnterpriseUserInfoComp.
        Date since epoch (in milliseconds) when account was added to the entperprise

        :return: The enterprise_join_date of this EnterpriseUserInfoComp.
        :rtype: int
        """
        return self._enterprise_join_date

    @enterprise_join_date.setter
    def enterprise_join_date(self, enterprise_join_date):
        """
        Sets the enterprise_join_date of this EnterpriseUserInfoComp.
        Date since epoch (in milliseconds) when account was added to the entperprise

        :param enterprise_join_date: The enterprise_join_date of this EnterpriseUserInfoComp.
        :type: int
        """

        self._enterprise_join_date = enterprise_join_date

    @property
    def is_enterprise_admin(self):
        """
        Gets the is_enterprise_admin of this EnterpriseUserInfoComp.
        Indicates if this profile has Administrative BlueJeans privileges within its enterprise.

        :return: The is_enterprise_admin of this EnterpriseUserInfoComp.
        :rtype: bool
        """
        return self._is_enterprise_admin

    @is_enterprise_admin.setter
    def is_enterprise_admin(self, is_enterprise_admin):
        """
        Sets the is_enterprise_admin of this EnterpriseUserInfoComp.
        Indicates if this profile has Administrative BlueJeans privileges within its enterprise.

        :param is_enterprise_admin: The is_enterprise_admin of this EnterpriseUserInfoComp.
        :type: bool
        """

        self._is_enterprise_admin = is_enterprise_admin

    @property
    def uri(self):
        """
        Gets the uri of this EnterpriseUserInfoComp.
        Internal enterprise profile URI for referencing BlueJeans resources.

        :return: The uri of this EnterpriseUserInfoComp.
        :rtype: str
        """
        return self._uri

    @uri.setter
    def uri(self, uri):
        """
        Sets the uri of this EnterpriseUserInfoComp.
        Internal enterprise profile URI for referencing BlueJeans resources.

        :param uri: The uri of this EnterpriseUserInfoComp.
        :type: str
        """

        self._uri = uri

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, EnterpriseUserInfoComp):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
