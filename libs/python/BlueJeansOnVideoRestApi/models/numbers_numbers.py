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


class NumbersNumbers(object):
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
        'number': 'str',
        'tollfree': 'bool',
        'premium': 'bool',
        'custom': 'bool',
        'country': 'str',
        'country_name': 'str',
        'state': 'str',
        'city': 'str',
        'label': 'NumbersLabel',
        'default_settings_inherited': 'bool',
        'default': 'bool'
    }

    attribute_map = {
        'id': 'id',
        'number': 'number',
        'tollfree': 'tollfree',
        'premium': 'premium',
        'custom': 'custom',
        'country': 'country',
        'country_name': 'countryName',
        'state': 'state',
        'city': 'city',
        'label': 'label',
        'default_settings_inherited': 'defaultSettingsInherited',
        'default': 'default'
    }

    def __init__(self, id=None, number=None, tollfree=None, premium=None, custom=None, country=None, country_name=None, state=None, city=None, label=None, default_settings_inherited=None, default=None):
        """
        NumbersNumbers - a model defined in Swagger
        """

        self._id = None
        self._number = None
        self._tollfree = None
        self._premium = None
        self._custom = None
        self._country = None
        self._country_name = None
        self._state = None
        self._city = None
        self._label = None
        self._default_settings_inherited = None
        self._default = None

        if id is not None:
          self.id = id
        if number is not None:
          self.number = number
        if tollfree is not None:
          self.tollfree = tollfree
        if premium is not None:
          self.premium = premium
        if custom is not None:
          self.custom = custom
        if country is not None:
          self.country = country
        if country_name is not None:
          self.country_name = country_name
        if state is not None:
          self.state = state
        if city is not None:
          self.city = city
        if label is not None:
          self.label = label
        if default_settings_inherited is not None:
          self.default_settings_inherited = default_settings_inherited
        if default is not None:
          self.default = default

    @property
    def id(self):
        """
        Gets the id of this NumbersNumbers.

        :return: The id of this NumbersNumbers.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this NumbersNumbers.

        :param id: The id of this NumbersNumbers.
        :type: int
        """

        self._id = id

    @property
    def number(self):
        """
        Gets the number of this NumbersNumbers.

        :return: The number of this NumbersNumbers.
        :rtype: str
        """
        return self._number

    @number.setter
    def number(self, number):
        """
        Sets the number of this NumbersNumbers.

        :param number: The number of this NumbersNumbers.
        :type: str
        """

        self._number = number

    @property
    def tollfree(self):
        """
        Gets the tollfree of this NumbersNumbers.

        :return: The tollfree of this NumbersNumbers.
        :rtype: bool
        """
        return self._tollfree

    @tollfree.setter
    def tollfree(self, tollfree):
        """
        Sets the tollfree of this NumbersNumbers.

        :param tollfree: The tollfree of this NumbersNumbers.
        :type: bool
        """

        self._tollfree = tollfree

    @property
    def premium(self):
        """
        Gets the premium of this NumbersNumbers.

        :return: The premium of this NumbersNumbers.
        :rtype: bool
        """
        return self._premium

    @premium.setter
    def premium(self, premium):
        """
        Sets the premium of this NumbersNumbers.

        :param premium: The premium of this NumbersNumbers.
        :type: bool
        """

        self._premium = premium

    @property
    def custom(self):
        """
        Gets the custom of this NumbersNumbers.

        :return: The custom of this NumbersNumbers.
        :rtype: bool
        """
        return self._custom

    @custom.setter
    def custom(self, custom):
        """
        Sets the custom of this NumbersNumbers.

        :param custom: The custom of this NumbersNumbers.
        :type: bool
        """

        self._custom = custom

    @property
    def country(self):
        """
        Gets the country of this NumbersNumbers.

        :return: The country of this NumbersNumbers.
        :rtype: str
        """
        return self._country

    @country.setter
    def country(self, country):
        """
        Sets the country of this NumbersNumbers.

        :param country: The country of this NumbersNumbers.
        :type: str
        """

        self._country = country

    @property
    def country_name(self):
        """
        Gets the country_name of this NumbersNumbers.

        :return: The country_name of this NumbersNumbers.
        :rtype: str
        """
        return self._country_name

    @country_name.setter
    def country_name(self, country_name):
        """
        Sets the country_name of this NumbersNumbers.

        :param country_name: The country_name of this NumbersNumbers.
        :type: str
        """

        self._country_name = country_name

    @property
    def state(self):
        """
        Gets the state of this NumbersNumbers.

        :return: The state of this NumbersNumbers.
        :rtype: str
        """
        return self._state

    @state.setter
    def state(self, state):
        """
        Sets the state of this NumbersNumbers.

        :param state: The state of this NumbersNumbers.
        :type: str
        """

        self._state = state

    @property
    def city(self):
        """
        Gets the city of this NumbersNumbers.

        :return: The city of this NumbersNumbers.
        :rtype: str
        """
        return self._city

    @city.setter
    def city(self, city):
        """
        Sets the city of this NumbersNumbers.

        :param city: The city of this NumbersNumbers.
        :type: str
        """

        self._city = city

    @property
    def label(self):
        """
        Gets the label of this NumbersNumbers.

        :return: The label of this NumbersNumbers.
        :rtype: NumbersLabel
        """
        return self._label

    @label.setter
    def label(self, label):
        """
        Sets the label of this NumbersNumbers.

        :param label: The label of this NumbersNumbers.
        :type: NumbersLabel
        """

        self._label = label

    @property
    def default_settings_inherited(self):
        """
        Gets the default_settings_inherited of this NumbersNumbers.

        :return: The default_settings_inherited of this NumbersNumbers.
        :rtype: bool
        """
        return self._default_settings_inherited

    @default_settings_inherited.setter
    def default_settings_inherited(self, default_settings_inherited):
        """
        Sets the default_settings_inherited of this NumbersNumbers.

        :param default_settings_inherited: The default_settings_inherited of this NumbersNumbers.
        :type: bool
        """

        self._default_settings_inherited = default_settings_inherited

    @property
    def default(self):
        """
        Gets the default of this NumbersNumbers.

        :return: The default of this NumbersNumbers.
        :rtype: bool
        """
        return self._default

    @default.setter
    def default(self, default):
        """
        Sets the default of this NumbersNumbers.

        :param default: The default of this NumbersNumbers.
        :type: bool
        """

        self._default = default

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
        if not isinstance(other, NumbersNumbers):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
