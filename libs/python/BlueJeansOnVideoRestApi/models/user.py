# coding: utf-8

"""
    BlueJeans onVideo REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class User(object):
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
        'first_name': 'str',
        'middle_name': 'str',
        'last_name': 'str',
        'email_id': 'str',
        'company': 'str',
        'title': 'str',
        'phone': 'str',
        'profile_picture': 'str',
        'timezone': 'str',
        'time_format': 'int',
        'language': 'str'
    }

    attribute_map = {
        'id': 'id',
        'username': 'username',
        'first_name': 'firstName',
        'middle_name': 'middleName',
        'last_name': 'lastName',
        'email_id': 'emailId',
        'company': 'company',
        'title': 'title',
        'phone': 'phone',
        'profile_picture': 'profilePicture',
        'timezone': 'timezone',
        'time_format': 'timeFormat',
        'language': 'language'
    }

    def __init__(self, id=None, username=None, first_name=None, middle_name=None, last_name=None, email_id=None, company=None, title=None, phone=None, profile_picture=None, timezone=None, time_format=None, language=None):
        """
        User - a model defined in Swagger
        """

        self._id = None
        self._username = None
        self._first_name = None
        self._middle_name = None
        self._last_name = None
        self._email_id = None
        self._company = None
        self._title = None
        self._phone = None
        self._profile_picture = None
        self._timezone = None
        self._time_format = None
        self._language = None

        if id is not None:
          self.id = id
        if username is not None:
          self.username = username
        if first_name is not None:
          self.first_name = first_name
        if middle_name is not None:
          self.middle_name = middle_name
        if last_name is not None:
          self.last_name = last_name
        if email_id is not None:
          self.email_id = email_id
        if company is not None:
          self.company = company
        if title is not None:
          self.title = title
        if phone is not None:
          self.phone = phone
        if profile_picture is not None:
          self.profile_picture = profile_picture
        if timezone is not None:
          self.timezone = timezone
        if time_format is not None:
          self.time_format = time_format
        if language is not None:
          self.language = language

    @property
    def id(self):
        """
        Gets the id of this User.
        Unique identifier for the user.

        :return: The id of this User.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this User.
        Unique identifier for the user.

        :param id: The id of this User.
        :type: int
        """

        self._id = id

    @property
    def username(self):
        """
        Gets the username of this User.
        User's username

        :return: The username of this User.
        :rtype: str
        """
        return self._username

    @username.setter
    def username(self, username):
        """
        Sets the username of this User.
        User's username

        :param username: The username of this User.
        :type: str
        """

        self._username = username

    @property
    def first_name(self):
        """
        Gets the first_name of this User.
        User's first name

        :return: The first_name of this User.
        :rtype: str
        """
        return self._first_name

    @first_name.setter
    def first_name(self, first_name):
        """
        Sets the first_name of this User.
        User's first name

        :param first_name: The first_name of this User.
        :type: str
        """

        self._first_name = first_name

    @property
    def middle_name(self):
        """
        Gets the middle_name of this User.
        User's middle name

        :return: The middle_name of this User.
        :rtype: str
        """
        return self._middle_name

    @middle_name.setter
    def middle_name(self, middle_name):
        """
        Sets the middle_name of this User.
        User's middle name

        :param middle_name: The middle_name of this User.
        :type: str
        """

        self._middle_name = middle_name

    @property
    def last_name(self):
        """
        Gets the last_name of this User.
        User's last name

        :return: The last_name of this User.
        :rtype: str
        """
        return self._last_name

    @last_name.setter
    def last_name(self, last_name):
        """
        Sets the last_name of this User.
        User's last name

        :param last_name: The last_name of this User.
        :type: str
        """

        self._last_name = last_name

    @property
    def email_id(self):
        """
        Gets the email_id of this User.
        User's email address

        :return: The email_id of this User.
        :rtype: str
        """
        return self._email_id

    @email_id.setter
    def email_id(self, email_id):
        """
        Sets the email_id of this User.
        User's email address

        :param email_id: The email_id of this User.
        :type: str
        """

        self._email_id = email_id

    @property
    def company(self):
        """
        Gets the company of this User.
        User's company name

        :return: The company of this User.
        :rtype: str
        """
        return self._company

    @company.setter
    def company(self, company):
        """
        Sets the company of this User.
        User's company name

        :param company: The company of this User.
        :type: str
        """

        self._company = company

    @property
    def title(self):
        """
        Gets the title of this User.
        User's title

        :return: The title of this User.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this User.
        User's title

        :param title: The title of this User.
        :type: str
        """

        self._title = title

    @property
    def phone(self):
        """
        Gets the phone of this User.
        User's phone

        :return: The phone of this User.
        :rtype: str
        """
        return self._phone

    @phone.setter
    def phone(self, phone):
        """
        Sets the phone of this User.
        User's phone

        :param phone: The phone of this User.
        :type: str
        """

        self._phone = phone

    @property
    def profile_picture(self):
        """
        Gets the profile_picture of this User.
        Path to user's profile picture

        :return: The profile_picture of this User.
        :rtype: str
        """
        return self._profile_picture

    @profile_picture.setter
    def profile_picture(self, profile_picture):
        """
        Sets the profile_picture of this User.
        Path to user's profile picture

        :param profile_picture: The profile_picture of this User.
        :type: str
        """

        self._profile_picture = profile_picture

    @property
    def timezone(self):
        """
        Gets the timezone of this User.
        User's timezone

        :return: The timezone of this User.
        :rtype: str
        """
        return self._timezone

    @timezone.setter
    def timezone(self, timezone):
        """
        Sets the timezone of this User.
        User's timezone

        :param timezone: The timezone of this User.
        :type: str
        """

        self._timezone = timezone

    @property
    def time_format(self):
        """
        Gets the time_format of this User.
        User's preference of 12 or 24 hour time display

        :return: The time_format of this User.
        :rtype: int
        """
        return self._time_format

    @time_format.setter
    def time_format(self, time_format):
        """
        Sets the time_format of this User.
        User's preference of 12 or 24 hour time display

        :param time_format: The time_format of this User.
        :type: int
        """

        self._time_format = time_format

    @property
    def language(self):
        """
        Gets the language of this User.
        User's language code

        :return: The language of this User.
        :rtype: str
        """
        return self._language

    @language.setter
    def language(self, language):
        """
        Sets the language of this User.
        User's language code

        :param language: The language of this User.
        :type: str
        """

        self._language = language

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
        if not isinstance(other, User):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
