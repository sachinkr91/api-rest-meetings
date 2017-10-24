# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class Content(object):
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
        'content_type': 'str',
        'content_description': 'str',
        'content_url': 'str',
        'user_id': 'int',
        'content_location': 'str',
        'created': 'int',
        'modified': 'int',
        'content_status': 'str',
        'content_name': 'str',
        'content_category': 'str',
        'content_size': 'int',
        'content_duration': 'int',
        'content_properties': 'ContentContentProperties'
    }

    attribute_map = {
        'id': 'id',
        'content_type': 'contentType',
        'content_description': 'contentDescription',
        'content_url': 'contentUrl',
        'user_id': 'userId',
        'content_location': 'contentLocation',
        'created': 'created',
        'modified': 'modified',
        'content_status': 'contentStatus',
        'content_name': 'contentName',
        'content_category': 'contentCategory',
        'content_size': 'contentSize',
        'content_duration': 'contentDuration',
        'content_properties': 'contentProperties'
    }

    def __init__(self, id=None, content_type=None, content_description=None, content_url=None, user_id=None, content_location=None, created=None, modified=None, content_status=None, content_name=None, content_category=None, content_size=None, content_duration=None, content_properties=None):
        """
        Content - a model defined in Swagger
        """

        self._id = None
        self._content_type = None
        self._content_description = None
        self._content_url = None
        self._user_id = None
        self._content_location = None
        self._created = None
        self._modified = None
        self._content_status = None
        self._content_name = None
        self._content_category = None
        self._content_size = None
        self._content_duration = None
        self._content_properties = None

        if id is not None:
          self.id = id
        if content_type is not None:
          self.content_type = content_type
        if content_description is not None:
          self.content_description = content_description
        if content_url is not None:
          self.content_url = content_url
        if user_id is not None:
          self.user_id = user_id
        if content_location is not None:
          self.content_location = content_location
        if created is not None:
          self.created = created
        if modified is not None:
          self.modified = modified
        if content_status is not None:
          self.content_status = content_status
        if content_name is not None:
          self.content_name = content_name
        if content_category is not None:
          self.content_category = content_category
        if content_size is not None:
          self.content_size = content_size
        if content_duration is not None:
          self.content_duration = content_duration
        if content_properties is not None:
          self.content_properties = content_properties

    @property
    def id(self):
        """
        Gets the id of this Content.

        :return: The id of this Content.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Content.

        :param id: The id of this Content.
        :type: int
        """

        self._id = id

    @property
    def content_type(self):
        """
        Gets the content_type of this Content.

        :return: The content_type of this Content.
        :rtype: str
        """
        return self._content_type

    @content_type.setter
    def content_type(self, content_type):
        """
        Sets the content_type of this Content.

        :param content_type: The content_type of this Content.
        :type: str
        """

        self._content_type = content_type

    @property
    def content_description(self):
        """
        Gets the content_description of this Content.

        :return: The content_description of this Content.
        :rtype: str
        """
        return self._content_description

    @content_description.setter
    def content_description(self, content_description):
        """
        Sets the content_description of this Content.

        :param content_description: The content_description of this Content.
        :type: str
        """

        self._content_description = content_description

    @property
    def content_url(self):
        """
        Gets the content_url of this Content.

        :return: The content_url of this Content.
        :rtype: str
        """
        return self._content_url

    @content_url.setter
    def content_url(self, content_url):
        """
        Sets the content_url of this Content.

        :param content_url: The content_url of this Content.
        :type: str
        """

        self._content_url = content_url

    @property
    def user_id(self):
        """
        Gets the user_id of this Content.

        :return: The user_id of this Content.
        :rtype: int
        """
        return self._user_id

    @user_id.setter
    def user_id(self, user_id):
        """
        Sets the user_id of this Content.

        :param user_id: The user_id of this Content.
        :type: int
        """

        self._user_id = user_id

    @property
    def content_location(self):
        """
        Gets the content_location of this Content.

        :return: The content_location of this Content.
        :rtype: str
        """
        return self._content_location

    @content_location.setter
    def content_location(self, content_location):
        """
        Sets the content_location of this Content.

        :param content_location: The content_location of this Content.
        :type: str
        """

        self._content_location = content_location

    @property
    def created(self):
        """
        Gets the created of this Content.

        :return: The created of this Content.
        :rtype: int
        """
        return self._created

    @created.setter
    def created(self, created):
        """
        Sets the created of this Content.

        :param created: The created of this Content.
        :type: int
        """

        self._created = created

    @property
    def modified(self):
        """
        Gets the modified of this Content.

        :return: The modified of this Content.
        :rtype: int
        """
        return self._modified

    @modified.setter
    def modified(self, modified):
        """
        Sets the modified of this Content.

        :param modified: The modified of this Content.
        :type: int
        """

        self._modified = modified

    @property
    def content_status(self):
        """
        Gets the content_status of this Content.

        :return: The content_status of this Content.
        :rtype: str
        """
        return self._content_status

    @content_status.setter
    def content_status(self, content_status):
        """
        Sets the content_status of this Content.

        :param content_status: The content_status of this Content.
        :type: str
        """

        self._content_status = content_status

    @property
    def content_name(self):
        """
        Gets the content_name of this Content.

        :return: The content_name of this Content.
        :rtype: str
        """
        return self._content_name

    @content_name.setter
    def content_name(self, content_name):
        """
        Sets the content_name of this Content.

        :param content_name: The content_name of this Content.
        :type: str
        """

        self._content_name = content_name

    @property
    def content_category(self):
        """
        Gets the content_category of this Content.

        :return: The content_category of this Content.
        :rtype: str
        """
        return self._content_category

    @content_category.setter
    def content_category(self, content_category):
        """
        Sets the content_category of this Content.

        :param content_category: The content_category of this Content.
        :type: str
        """

        self._content_category = content_category

    @property
    def content_size(self):
        """
        Gets the content_size of this Content.

        :return: The content_size of this Content.
        :rtype: int
        """
        return self._content_size

    @content_size.setter
    def content_size(self, content_size):
        """
        Sets the content_size of this Content.

        :param content_size: The content_size of this Content.
        :type: int
        """

        self._content_size = content_size

    @property
    def content_duration(self):
        """
        Gets the content_duration of this Content.

        :return: The content_duration of this Content.
        :rtype: int
        """
        return self._content_duration

    @content_duration.setter
    def content_duration(self, content_duration):
        """
        Sets the content_duration of this Content.

        :param content_duration: The content_duration of this Content.
        :type: int
        """

        self._content_duration = content_duration

    @property
    def content_properties(self):
        """
        Gets the content_properties of this Content.

        :return: The content_properties of this Content.
        :rtype: ContentContentProperties
        """
        return self._content_properties

    @content_properties.setter
    def content_properties(self, content_properties):
        """
        Sets the content_properties of this Content.

        :param content_properties: The content_properties of this Content.
        :type: ContentContentProperties
        """

        self._content_properties = content_properties

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
        if not isinstance(other, Content):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
