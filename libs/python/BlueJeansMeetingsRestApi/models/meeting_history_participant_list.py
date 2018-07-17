# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class MeetingHistoryParticipantList(object):
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
        'endpoint_name': 'str',
        'join_time': 'int',
        'minutes': 'int',
        'device_type': 'str',
        'email': 'str',
        'remote_address': 'str',
        'is_encrypted': 'bool',
        'disconnect_time': 'int',
        'is_moderator': 'bool',
        'user_id': 'int',
        'tags': 'str',
        'participant_guid': 'str'
    }

    attribute_map = {
        'endpoint_name': 'endpointName',
        'join_time': 'joinTime',
        'minutes': 'minutes',
        'device_type': 'deviceType',
        'email': 'email',
        'remote_address': 'remoteAddress',
        'is_encrypted': 'isEncrypted',
        'disconnect_time': 'disconnectTime',
        'is_moderator': 'isModerator',
        'user_id': 'userId',
        'tags': 'tags',
        'participant_guid': 'participantGuid'
    }

    def __init__(self, endpoint_name=None, join_time=None, minutes=None, device_type=None, email=None, remote_address=None, is_encrypted=None, disconnect_time=None, is_moderator=None, user_id=None, tags=None, participant_guid=None):
        """
        MeetingHistoryParticipantList - a model defined in Swagger
        """

        self._endpoint_name = None
        self._join_time = None
        self._minutes = None
        self._device_type = None
        self._email = None
        self._remote_address = None
        self._is_encrypted = None
        self._disconnect_time = None
        self._is_moderator = None
        self._user_id = None
        self._tags = None
        self._participant_guid = None

        if endpoint_name is not None:
          self.endpoint_name = endpoint_name
        if join_time is not None:
          self.join_time = join_time
        if minutes is not None:
          self.minutes = minutes
        if device_type is not None:
          self.device_type = device_type
        if email is not None:
          self.email = email
        if remote_address is not None:
          self.remote_address = remote_address
        if is_encrypted is not None:
          self.is_encrypted = is_encrypted
        if disconnect_time is not None:
          self.disconnect_time = disconnect_time
        if is_moderator is not None:
          self.is_moderator = is_moderator
        if user_id is not None:
          self.user_id = user_id
        if tags is not None:
          self.tags = tags
        if participant_guid is not None:
          self.participant_guid = participant_guid

    @property
    def endpoint_name(self):
        """
        Gets the endpoint_name of this MeetingHistoryParticipantList.

        :return: The endpoint_name of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._endpoint_name

    @endpoint_name.setter
    def endpoint_name(self, endpoint_name):
        """
        Sets the endpoint_name of this MeetingHistoryParticipantList.

        :param endpoint_name: The endpoint_name of this MeetingHistoryParticipantList.
        :type: str
        """

        self._endpoint_name = endpoint_name

    @property
    def join_time(self):
        """
        Gets the join_time of this MeetingHistoryParticipantList.

        :return: The join_time of this MeetingHistoryParticipantList.
        :rtype: int
        """
        return self._join_time

    @join_time.setter
    def join_time(self, join_time):
        """
        Sets the join_time of this MeetingHistoryParticipantList.

        :param join_time: The join_time of this MeetingHistoryParticipantList.
        :type: int
        """

        self._join_time = join_time

    @property
    def minutes(self):
        """
        Gets the minutes of this MeetingHistoryParticipantList.

        :return: The minutes of this MeetingHistoryParticipantList.
        :rtype: int
        """
        return self._minutes

    @minutes.setter
    def minutes(self, minutes):
        """
        Sets the minutes of this MeetingHistoryParticipantList.

        :param minutes: The minutes of this MeetingHistoryParticipantList.
        :type: int
        """

        self._minutes = minutes

    @property
    def device_type(self):
        """
        Gets the device_type of this MeetingHistoryParticipantList.

        :return: The device_type of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._device_type

    @device_type.setter
    def device_type(self, device_type):
        """
        Sets the device_type of this MeetingHistoryParticipantList.

        :param device_type: The device_type of this MeetingHistoryParticipantList.
        :type: str
        """
        allowed_values = ["Carmel", "WebRTC"]
        if device_type not in allowed_values:
            raise ValueError(
                "Invalid value for `device_type` ({0}), must be one of {1}"
                .format(device_type, allowed_values)
            )

        self._device_type = device_type

    @property
    def email(self):
        """
        Gets the email of this MeetingHistoryParticipantList.

        :return: The email of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._email

    @email.setter
    def email(self, email):
        """
        Sets the email of this MeetingHistoryParticipantList.

        :param email: The email of this MeetingHistoryParticipantList.
        :type: str
        """

        self._email = email

    @property
    def remote_address(self):
        """
        Gets the remote_address of this MeetingHistoryParticipantList.

        :return: The remote_address of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._remote_address

    @remote_address.setter
    def remote_address(self, remote_address):
        """
        Sets the remote_address of this MeetingHistoryParticipantList.

        :param remote_address: The remote_address of this MeetingHistoryParticipantList.
        :type: str
        """

        self._remote_address = remote_address

    @property
    def is_encrypted(self):
        """
        Gets the is_encrypted of this MeetingHistoryParticipantList.

        :return: The is_encrypted of this MeetingHistoryParticipantList.
        :rtype: bool
        """
        return self._is_encrypted

    @is_encrypted.setter
    def is_encrypted(self, is_encrypted):
        """
        Sets the is_encrypted of this MeetingHistoryParticipantList.

        :param is_encrypted: The is_encrypted of this MeetingHistoryParticipantList.
        :type: bool
        """

        self._is_encrypted = is_encrypted

    @property
    def disconnect_time(self):
        """
        Gets the disconnect_time of this MeetingHistoryParticipantList.

        :return: The disconnect_time of this MeetingHistoryParticipantList.
        :rtype: int
        """
        return self._disconnect_time

    @disconnect_time.setter
    def disconnect_time(self, disconnect_time):
        """
        Sets the disconnect_time of this MeetingHistoryParticipantList.

        :param disconnect_time: The disconnect_time of this MeetingHistoryParticipantList.
        :type: int
        """

        self._disconnect_time = disconnect_time

    @property
    def is_moderator(self):
        """
        Gets the is_moderator of this MeetingHistoryParticipantList.

        :return: The is_moderator of this MeetingHistoryParticipantList.
        :rtype: bool
        """
        return self._is_moderator

    @is_moderator.setter
    def is_moderator(self, is_moderator):
        """
        Sets the is_moderator of this MeetingHistoryParticipantList.

        :param is_moderator: The is_moderator of this MeetingHistoryParticipantList.
        :type: bool
        """

        self._is_moderator = is_moderator

    @property
    def user_id(self):
        """
        Gets the user_id of this MeetingHistoryParticipantList.

        :return: The user_id of this MeetingHistoryParticipantList.
        :rtype: int
        """
        return self._user_id

    @user_id.setter
    def user_id(self, user_id):
        """
        Sets the user_id of this MeetingHistoryParticipantList.

        :param user_id: The user_id of this MeetingHistoryParticipantList.
        :type: int
        """

        self._user_id = user_id

    @property
    def tags(self):
        """
        Gets the tags of this MeetingHistoryParticipantList.

        :return: The tags of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._tags

    @tags.setter
    def tags(self, tags):
        """
        Sets the tags of this MeetingHistoryParticipantList.

        :param tags: The tags of this MeetingHistoryParticipantList.
        :type: str
        """

        self._tags = tags

    @property
    def participant_guid(self):
        """
        Gets the participant_guid of this MeetingHistoryParticipantList.

        :return: The participant_guid of this MeetingHistoryParticipantList.
        :rtype: str
        """
        return self._participant_guid

    @participant_guid.setter
    def participant_guid(self, participant_guid):
        """
        Sets the participant_guid of this MeetingHistoryParticipantList.

        :param participant_guid: The participant_guid of this MeetingHistoryParticipantList.
        :type: str
        """

        self._participant_guid = participant_guid

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
        if not isinstance(other, MeetingHistoryParticipantList):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
